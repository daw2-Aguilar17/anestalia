<?php

class RolUsuariosController extends ControladorBase{
       
    public $conn;
    public $db;
	
    public function __construct(){
        parent::__construct();	
        $this->conn = new Conectar();        
        $this->db = $this->conn->getConnection();
    }
    
    public function indexAction($urlParams){
        
        $em = new EntityManager($this->db);
        $rolesUsuarioRepo = $em->getRepository('RolUsuarios');
        
        $rolesUsuario = $rolesUsuarioRepo->findAll();
        
        $this->view("rol.usuarios.mostrar.view", array('rolesUsuario' => $rolesUsuario));     
    }
    
    public function insertAction($urlParams){
    	
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		
    		$em = new EntityManager($this->db);
    		
    		$rolUsuario = new RolUsuarios();
    		$rolUsuario->setNombre($_POST['nom']);
    		
    		$em->save($rolUsuario);
    		
    		$this->redirect("/rolUsuarios");
    	}else{
    		$this->view("rol.usuarios.nuevo.rol.view", array());
    	}
    }
    
    public function editarAction($urlParams){
    	
    	$idRol = $urlParams['rol'];
    	
   
    	
    	$em = new EntityManager($this->db);
    	$rolesUsuarioRepo = $em->getRepository('RolUsuarios');
    	
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		$rolUsuario = $rolesUsuarioRepo->find($idRol);
    		
    		$rolUsuario->setNombre($_POST['nom']);
    		
    		$em->refresh($rolUsuario);
    		
    		$this->redirect("/rolUsuarios");
    	}else{
    		if(is_numeric($idRol)){
    			
    			
    			
    			$rolUsuario= $rolesUsuarioRepo->find($idRol);
    			$this->view("rol.usuarios.editar.rol.view", array('rolUsuario' => $rolUsuario));
    		}else{
    			$this->redirect();
    		}
    	}
    }
    
    public function eliminarAction($urlParams){
    	$idRol= $urlParams['rol'];
    	
    	$em = new EntityManager($this->db);
    	$rolesUsuarioRepo= $em->getRepository('RolUsuarios');
    	
    	$rolUsuario= $rolesUsuarioRepo->find($idRol);
    	
    	$em->remove($rolUsuario);
    	
    	$this->redirect("/rolUsuarios");
    	
    	
    }
    

    
    
    
    
    

}
?>
