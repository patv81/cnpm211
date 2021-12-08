<?php
class SaleController extends Controller
{
    public function __construct($arrParams)
    {
        parent::__construct($arrParams);
        $this->_templateObj->setFolderTemplate('admin/ver1/');
        $this->_templateObj->setFileTemplate('index.php');
        $this->_templateObj->setFileConfig('template.ini');
        $this->_templateObj->load();
        // $filePath    = APPLICATION_PATH . $this->_params['module'] . DS . 'controllers' . DS . $controllerName . '.php';


        require APPLICATION_PATH.'admin'.DS.'Controllers'.DS.'ProductController.php';
        $temp = $arrParams;
        $temp['controller'] ='product';
        $this->productApi = new ProductController($temp);
    }
    public function indexAction()
    {
        $this->_view->test= $this->_arrParam;
        $this->_view->_title = "POS :: main page";
        $this->_view->Items = $this->productApi->_model->listItems($this->_arrParam) ;
        $this->_view->arrParam = $this->_arrParam;
        $this->_view->render('sale/index');
    }
    public function formAction(){      
        $this->_view->_title = "POS :: print invoice";
        if ($this->_arrParam['form']['token'] > 0) {
            $task = 'add';
            $validate = new Validate($this->_arrParam['form']);


            // $validate->addRule('name', 'string', array('min' => 3, 'max' => 500))
            // ->addRule('price', 'int', array('min' => 10000, 'max' => 1000000));
            $validate->run();
            $this->_arrParam['form'] = $validate->getResult();
            if ($validate->isValid() == false) {
                $this->_view->errors = $validate->showErrors();
            } else {
                $id = $this->_model->saveItem($this->_arrParam, array('task' => $task));
                $re = $this->_model->infoItem(['id'=>$id]);
                
                foreach ($re as $key => $val) {
                    $re[$key] = json_decode($val) ?? $val;;
                }
                $this->_view->singleItem = $re;
                $this->_view->arrParam = $this->_arrParam;
                $this->_view->render('sale/form');
            }
        }
        
    }


}
