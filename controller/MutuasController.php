<?php

class MutuasController extends ControladorBase{
       
    public $conn;
    public $db;
	
    public function __construct(){
        parent::__construct();	
        $this->conn = new Conectar();        
        $this->db = $this->conn->getConnection();
    }
    
    public function indexAction($urlParams){
        
        $em = new EntityManager($this->db);
        $mutuasRepo = $em->getRepository('Mutuas');
        
        $mutuas = $mutuasRepo->findAll();
        
        $this->view("mutuas.mostrar.view", array('mutuas' => $mutuas));     
    }
    
    public function insertAction($urlParams){
    	
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		
    		$em = new EntityManager($this->db);
    		
    		$mutua = new Mutuas();
    		$mutua->setNombre($_POST['nom']);
    	
    		
    		$em->save($mutua);
    		
    		$this->redirect("/mutuas");
    	}else{
    		$this->view("mutuas.nueva.mutua.view", array());
    	}
    }
    
    public function editarAction($urlParams){
    	
    	$idMutua = $urlParams['mutua'];
    	
   
    	
    	$em = new EntityManager($this->db);
    	$mutuasRepo= $em->getRepository('Mutuas');
    	
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		$mutua = $mutuasRepo->find($idMutua);
    		
    		$mutua->setNombre($_POST['nom']);
    		
    		if(isset($_POST['isActivo'])){
    			$mutua->setIsActivo(true);
    		}else{
    			$mutua->setIsActivo(false);
    		}
    		
    		$em->refresh($mutua);
    		
    		$this->redirect("/mutuas");
    	}else{
    		if(is_numeric($idMutua)){
    			
    			
    			
    			$mutua= $mutuasRepo->find($idMutua);
    			$this->view("mutuas.editar.mutua.view", array('mutua' => $mutua));
    		}else{
    			$this->redirect();
    		}
    	}
    }
    
    public function eliminarAction($urlParams){
    	$idMutua= $urlParams['mutua'];
    	
    	$em = new EntityManager($this->db);
    	$mutuasRepo= $em->getRepository('Mutuas');
    	
    	$mutua = $mutuasRepo->find($idMutua);
    	
    	$em->remove($mutua);
    	
    	$this->redirect("/mutuas");
    	
    	
    }
    

    
    
    
    
    

}
?>
