<?php

class EmpresasController extends ControladorBase{
       
    public $conn;
    public $db;
	
    public function __construct(){
        parent::__construct();	
        $this->conn = new Conectar();        
        $this->db = $this->conn->getConnection();
    }
    
    public function indexAction($urlParams){
        
        $em = new EntityManager($this->db);
        $empresasRepo = $em->getRepository('Empresas');
        
        $empresas = $empresasRepo->findAll();
        
        $this->view("empresas.mostrar.view", array('empresas' => $empresas));     
    }
    
    public function insertAction($urlParams){
    	
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		
    		$em = new EntityManager($this->db);
    		
    		$empresa = new Empresas();
    		$empresa->setNombre($_POST['nom']);
    		$empresa->setCif($_POST['cif']);
    		$empresa->setTelefono($_POST['telefon']);
    		$empresa->setEmail($_POST['email']);
    		
    		$em->save($empresa);
    		
    		$this->redirect("/empresas");
    	}else{
    		$this->view("empresas.nueva.empresa.view", array());
    	}
    }
    
    public function editarAction($urlParams){
    	
    	$idEmpresa = $urlParams['empresa'];
    	
   
    	
    	$em = new EntityManager($this->db);
    	$empresasRepo = $em->getRepository('Empresas');
    	
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		$empresa = $empresasRepo->find($idEmpresa);
    		
    		$empresa->setNombre($_POST['nom']);
    		$empresa->setCif($_POST['cif']);
    		$empresa->setTelefono($_POST['telefon']);
    		$empresa->setEmail($_POST['email']);
    		
    		
    		if(isset($_POST['isActivo'])){
    			$empresa->setIsActivo(true);
    		}else{
    			$empresa->setIsActivo(false);
    		}
    		
    		
    
    		
    		$em->refresh($empresa);
    		
    		$this->redirect("/empresas");
    	}else{
    		if(is_numeric($idEmpresa)){
    			
    			
    			
    			$empresa = $empresasRepo->find($idEmpresa);
    			$this->view("empresas.editar.empresa.view", array('empresa' => $empresa));
    		}else{
    			$this->redirect();
    		}
    	}
    }
    
    public function eliminarAction($urlParams){
    	$idEmpresa= $urlParams['empresa'];
    	
    	$em = new EntityManager($this->db);
    	$empresasRepo= $em->getRepository('Empresas');
    	
    	$empresa = $empresasRepo->find($idEmpresa);
    	
    	$em->remove($empresa);
    	
    	$this->redirect("/empresas");
    	
    	
    }
    
    
    public function selectDeleteAction($urlParams){
    	
    	$urlParams = var_dump($urlParams);
    	
    	$idEmpresa = $urlParams['empresa'];
    	
    	$em = new EntityManager($this->db);
    	$empresasRepo= $em->getRepository('Empresas');
    	
    	$empresa = $empresasRepo->find($idEmpresa);
    	
    	
    	
    	
    	return $urlParams;
    }
    

    
    
    
    
    

}
?>
