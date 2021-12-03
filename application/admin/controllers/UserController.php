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
        $this->_view->_title = "User manager::Add";
        $this->_view->test= '';
        if (isset($this->_arrParam['form']) && $this->_arrParam['form']['token']>0){
            $validate=new Validate($this->_arrParam['form']);
            $this->_view->test = $this->_arrParam;

            $validate->addRule('username','string',array('min'=>3,'max'=>255))
            ->addRule('email','email')
            ->addRule('password','string',array('min'=>'3','max'=>16));
            $validate->run();
            $this->_arrParam['form']= $validate->getResult();
            if ($validate->isValid()==false) {
                $this->_view->errors=$validate->showErrors();
            }else{
                $this->_model->saveItem($this->_arrParam,array('task'=>'add'));
                $type = $this->_arrParam['type'];
                if ($type == 'save-close'){URL::redirect(URL::createLink('admin','user','index'));}
                if ($type == 'save-new'){URL::redirect(URL::createLink('admin','user','form'));}
            }
            $this->_view->arrParam = $this->_arrParam;
        }
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
