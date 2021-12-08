<?php
class SaleModel extends Model
{
    protected $_columns = ['id', 'username', 'products', 'prices', 'money_payed', 'quantities', 'names', 'pictures', 'status', 'created', 'created_by', 'modified', 'modified_by'];
    protected $_tableName = TBL_SALE;
    public function __construct()
    {
        parent::__construct();
        $this->setTable($this->_tableName);
    }

    public function infoItem($arrParam)
    {
        $query[]    = "SELECT `id`,`products`, `prices`, `quantities`,`money_payed`, `names`, `status`, `created`,`created_by`";
        $query[]    = "FROM `$this->table`";
        $query[]    = "WHERE `id`='" . $arrParam['id'] . "'";
        $query = implode(" ", $query);
        $result = $this->singleRecord($query);
        return $result;
    }
    public function listItems($arrParam, $options = 1)
    {

        // $query[]    = "SELECT `id`, `name`, `group_acp`, `status`, `ordering`, `created`, `created_by`, `modified`, `modified_by`";
        $query[]    = "SELECT `products`, `prices`, `quantities`, `names`, `status`, `created`,`created_by`";
        $query[]    = "FROM `$this->table`";
        $query[]    = "WHERE `id` > 0";
        // FILTER : KEYWORD
        if (!empty($arrParam['filter_search'])) {
            $keyword    = '"%' . $arrParam['filter_search'] . '%"';
            $query[]    = "AND `name` LIKE $keyword";
        }
        $query  = implode(" ", $query);

        $result = $this->listRecord($query);
        return $result;
    }

    public function saveItem($arrParam, $option = null)
    {
        if ($option['task'] == 'add') {
            $products        = json_encode($arrParam['form']['products']);
            $prices        = json_encode($arrParam['form']['prices']);
            $quantities    = json_encode($arrParam['form']['quantities']);
            $names        = json_encode($arrParam['form']['names'], JSON_UNESCAPED_UNICODE);
            $money_payed = $arrParam['form']['money_payed'];
            $date        = date('Y-m-d H:i:s', time());

            $query    = "INSERT INTO `" . TBL_SALE . "`( `products`,`money_payed`,`prices`, `quantities`, `names`, `status`, `created`,`created_by`)
					                                    VALUES ('$products','$money_payed' ,'$prices', '$quantities', '$names','0', '$date','1')";

            $this->query($query);
            return $this->lastID();
        }
    }
}
