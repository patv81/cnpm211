<?php
class UserController extends Controller
{

    public function __construct($arrParams)
    {
        parent::__construct($arrParams);
        $this->_templateObj->setFolderTemplate('admin/ver1/');
        $this->_templateObj->setFileTemplate('index.php');
        $this->_templateObj->setFileConfig('template.ini');
        $this->_templateObj->load();
    }

    public function indexAction()
    {
        // echo '<h3>' . __METHOD__ . '</h3>';
        $this->_view->_title="User manager";
        $this->_view->Items= $this->_model->listItems();
        $this->_view->render('user\index');
    }
    public function formAction(){
        $this->_view->_title = "User manager::new";
        $this->_view->Items = $this->_model->listItems();
        $this->_view->render('user\form');
    }
    //ACTION : create new user
    public function addNewAction(){
        
    }
    // ACTION : AJAX STATUS
    public function ajaxStatusAction(){
        $result = $this->_model->changeStatus($this->_arrParam,array('task'=> 'change-ajax-status'));
        echo json_encode($result);
    }
    //ACTION :AJAX BULK CHANGE STATUS
    public function statusAction(){
        $this->_model->changeStatus($this->_arrParam,array('task'=> 'change-ajax-multi-status'));
        echo 123;
    }

    //ACTION : TRASH ACTION 
    public function trashAction(){
        $this->_model->deleteItem($this->_arrParam);
        echo 321;
        
    }
    
}
