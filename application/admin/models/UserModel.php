<?php
class UserModel extends Model
{
    protected $_columns=['id','username','email','fullname','password','created','created_by','modified','modified_by','status','ordering','group_id'];
    protected $_tableName = TBL_USER;
    public function __construct()
    {
        parent::__construct();
        $this->setTable($this->_tableName);
    }

    public function infoItem($arrParam){
        $query[]    = "SELECT `id`, `username`, `email`, `fullname`,`status`";
        $query[]    = "FROM `$this->table`";
        $query[]    = "WHERE `id`='".$arrParam['id']."'";
        $query = implode(" ", $query);
        $result = $this->singleRecord($query); 
        return $result;
    }
    public function listItems($arrPram=1,$options=1)
    {
        
        // $query[]    = "SELECT `id`, `name`, `group_acp`, `status`, `ordering`, `created`, `created_by`, `modified`, `modified_by`";
        $query[]    = "SELECT `id`, `username`, `email`, `fullname`,`status`";
        $query[]    = "FROM `$this->table`";

        // FILTER : KEYWORD
        $flagWhere     = false;
        if (!empty($arrParam['filter_search'])) {
            $keyword    = '"%' . $arrParam['filter_search'] . '%"';
            $query[]    = "WHERE `name` LIKE $keyword";
            $flagWhere     = true;
        }

        $query  = implode(" ", $query);
        $result = $this->listRecord($query);
        return $result;
    }
    public function changeStatus($arrParam, $option = null)
    {
        if ($option['task'] == 'change-ajax-status') {
            $status = ($arrParam['status'] == 0) ? 1 : 0;
            $id        = $arrParam['id'];
            $query    = "UPDATE `$this->table` SET `status` = $status WHERE `id` = '" . $id . "'";
            $this->query($query);

            $result = array(
                'id'        => $id,
                'status'    => $status,
                'link'      => URL::createLink('admin', 'user', 'ajaxStatus', array('id' => $id, 'status' => $status))
            );
            return $result;
        }
        if ($option['task'] == 'change-ajax-multi-status') {
            $status     = $arrParam['type'];
            if (!empty($arrParam['cid'])) {
                $ids        = $this->createWhereDeleteSQL($arrParam['cid']);
                $query        = "UPDATE `$this->table` SET `status` = $status WHERE `id` IN ($ids)";
                $this->query($query);
                
            } 
        }
    }
    public function deleteItem($arrParam,$option=null){
        if (isset($arrParam['id'])){ 
            if (isset($arrParam['cid'])){
                array_push($arrParam['cid'],$arrParam['id']);
            }else{
                $arrParam['cid'] = [$arrParam['id']];
            }
        }
        if (!empty($arrParam['cid'])){
            $ids = $this->createWhereDeleteSQL($arrParam['cid']);
            $query = "DELETE FROM `$this->table` WHERE `id` IN ($ids)"; //
            $this->query($query);
        }
    }
    public function saveItem($arrParam, $option = null){
        if ($option['task'] == 'add') {
            $arrParam['form']['created']    = date('Y-m-d', time());
            $arrParam['form']['created_by']    = 1;
            $data    = array_intersect_key($arrParam['form'], array_flip($this->_columns));
            $this->insert($data);
            Session::set('message', array('class' => 'success', 'content' => 'Dữ liệu được lưu thành công!'));
            return $this->lastID();
        }
        if ($option['task'] == 'edit') {
            $arrParam['form']['modified']    = date('Y-m-d', time());
            $arrParam['form']['modified_by'] = 10;
            if ($arrParam['form']['password'] != null) {
                $arrParam['form']['password']    = md5($arrParam['form']['password']);
            } else {
                unset($arrParam['form']['password']);
            }
            $data    = array_intersect_key($arrParam['form'], array_flip($this->_columns));

            $this->update($data, array(array('id', $arrParam['form']['id'])));
            return $arrParam['form']['id'];
        }
    }
    
}
