<?php
class ProductController extends Controller
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
        $this->_view->_title="Product manager";
        
        $this->_view->Items= $this->_model->listItems();
        $this->_view->render('product\index');
    }
    // EDIT & NEW page
    public function formAction(){

        $this->_view->_title = "Product manager::Add";
        $this->_view->test= '';
        if(isset($this->_arrParam['id'])){
            $this->_view->_title = "Product manager::Edit";
            $info = $this->_model->infoItem($this->_arrParam);
            $this->_arrParam['form'] = $info;
        }

        if ($this->_arrParam['form']['token']>0){
            $task='add';
            $validate=new Validate($this->_arrParam['form']);

            $this->_view->test = $this->_arrParam;

            $validate->addRule('name', 'string',array('min'=>3,'max'=>500) )
            ->addRule('price', 'int', array('min' => 10000, 'max' => 1000000));
            $validate->run();
            $this->_arrParam['form']= $validate->getResult();
            if ($validate->isValid()==false) {
                $this->_view->errors=$validate->showErrors();
            }else{
                $id=$this->_model->saveItem($this->_arrParam,array('task'=>$task));
                $type = $this->_arrParam['type'];
                if ($type == 'save-close'){URL::redirect(URL::createLink('admin','product','index'));}
                if ($type == 'save-new'){URL::redirect(URL::createLink('admin','product','form'));}
                if ($type == 'save')    {URL::redirect(URL::createLink('admin', 'product', 'form', array('id' => $id)));}
            }
            
        }
        $this->_view->arrParam = $this->_arrParam;
        $this->_view->render('product\form');
    }

    //ACTION : TRASH ACTION 
    public function trashAction(){
        $this->_model->deleteItem($this->_arrParam);
    }
    
}
