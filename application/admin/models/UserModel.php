<?php
class UserModel extends Model
{
    protected $_tableName = 'user';
    public function __construct()
    {
        parent::__construct();
        $this->setTable($this->_tableName);
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
        if (!empty($arrParam['cid'])){
            $ids = $this->createWhereDeleteSQL($arrParam['cid']);
            $query = "DELETE FROM `$this->table` WHERE `id` IN ($ids)"; //
            $this->query($query);
        }
    }
    
}
