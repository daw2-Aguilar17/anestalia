<?php
class DefaultController extends ControladorBase{
        public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();	
        $this->conectar=new Conectar();        
        $this->adapter=$this->conectar->getConnection();
    }
  
    public function indexAction(){
        $this->view("index.view", array());   
    }

}
?>
