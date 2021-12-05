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
    // EDIT & NEW page
    public function formAction(){

        $this->_view->_title = "User manager::Add";
        $this->_view->test= '';
        if(isset($this->_arrParam['id'])){
            $this->_view->_title = "User manager::Edit";
            $info = $this->_model->infoItem($this->_arrParam);
            $this->_arrParam['form'] = $info;
        }

        if ($this->_arrParam['form']['token']>0){
            $task='add';
            $requirePass    = true;
            $queryUserName    = "SELECT `id` FROM `" . TBL_USER . "` WHERE `username` = '" . $this->_arrParam['form']['username'] . "'";
            $queryEmail        = "SELECT `id` FROM `" . TBL_USER . "` WHERE `email` = '" . $this->_arrParam['form']['email'] . "'";
            if (isset($this->_arrParam['form']['id'])){
                $requirePass=false;
                $task ='edit';
                $queryUserName     .= " AND `id` <> '" . $this->_arrParam['form']['id'] . "'";
                $queryEmail     .= " AND `id` <> '" . $this->_arrParam['form']['id'] . "'";
            }
            $validate=new Validate($this->_arrParam['form']);
            $this->_view->test = $this->_arrParam;
            echo '<pre>' ;
            if ($requirePass==false) {
                print_r('fasle');
            }
            else if
            ($requirePass == true) {
                print_r('true');
            }
            echo'<pre>';
            $validate->addRule('username', 'string-notExistRecord',array('min'=>3,'max'=>20, 'database' => $this->_model, 'query' => $queryUserName) )
            ->addRule('email','email-notExistRecord', array('database' => $this->_model, 'query' => $queryEmail))
            ->addRule('password', 'simplepassword',array('min'=>'3','max'=>16),$requirePass);
            // ->addRule('password','password', array('action' => $task), false);
            // echo '<pre>' ;
            // print_r($validate); 
            // echo '<br/>';
            // die('function die was called');
            // echo '<br/>';
            // echo'<pre>';
            $validate->run();
            $this->_arrParam['form']= $validate->getResult();
            if ($validate->isValid()==false) {
                $this->_view->errors=$validate->showErrors();
            }else{
                $id=$this->_model->saveItem($this->_arrParam,array('task'=>$task));
                $type = $this->_arrParam['type'];
                if ($type == 'save-close'){URL::redirect(URL::createLink('admin','user','index'));}
                if ($type == 'save-new'){URL::redirect(URL::createLink('admin','user','form'));}
                if ($type == 'save')    {URL::redirect(URL::createLink('admin', 'user', 'form', array('id' => $id)));}
            }
            
        }
        $this->_view->arrParam = $this->_arrParam;
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
    }
    
}
