<?php

class UsuariosController extends ControladorBase{
       
    public $conn;
    public $db;
	
    public function __construct(){
        parent::__construct();	
        $this->conn = new Conectar();        
        $this->db = $this->conn->getConnection();
    }
    
    public function indexAction($urlParams){
        
        $em = new EntityManager($this->db);
        $usersRepo = $em->getRepository('Usuarios');
        
        $usuarios = $usersRepo->findAll();
        
        $this->view("usuarios.mostrar.view", array('usuarios' => $usuarios));     
    }
    
    public function insertAction($urlParams){  
    	
    	$em = new EntityManager($this->db);
    	
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        	
            $usuario = new Usuarios();           
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido1($_POST['apellido1']);
            $usuario->setApellido2($_POST['apellido2']);
            $usuario->setUsername($_POST['username']);
            $usuario->setIdEmpresa($_POST['idEmpresa']);
            $usuario->setIdRol($_POST['idRol']);
            
            $em->save($usuario);
           
            $this->redirect("/usuarios"); 
        }else{
        	$empresas = $em->getRepository('Empresas')->findAll();
        	$rolUsuarios = $em->getRepository('RolUsuarios')->findAll();
        	
        	$this->view("usuarios.nuevo.usuario.view", array('empresas' => $empresas, 'rolUsuarios' => $rolUsuarios));
        }    
    }
    
    public function editarAction($urlParams){
    	
    	$idUsuario = $urlParams['usuario'];
    	
    	$em = new EntityManager($this->db);
    	$usersRepo = $em->getRepository('Usuarios');
    	
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $usuario = $usersRepo->find($idUsuario);
    		
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido1($_POST['apellido1']);
            $usuario->setApellido2($_POST['apellido2']);
            $usuario->setUsername($_POST['username']);
            $usuario->setIdEmpresa($_POST['idEmpresa']);
            $usuario->setIdRol($_POST['idRol']);

            if(isset($_POST['isActivo'])){
            	$usuario->setIsActivo(true);
            }else{
            	$usuario->setIsActivo(false);
            }
            
            $em->refresh($usuario);

            $this->redirect("/usuarios");
    	}else{
            if(is_numeric($idUsuario)){
            	$empresas = $em->getRepository('Empresas')->findAll();
            	$rolUsuarios = $em->getRepository('RolUsuarios')->findAll();
            	
            	
                $usuario = $usersRepo->find($idUsuario);
                $this->view("usuarios.editar.usuario.view", array('usuario' => $usuario, 'empresas' => $empresas, 'rolUsuarios' => $rolUsuarios));
            }else{
                $this->redirect();
            }
    	}
    }
    
    
    public function eliminarAction($urlParams){
        $idUsuario = $urlParams['usuario'];
    	
    	$em = new EntityManager($this->db);
    	$usersRepo = $em->getRepository('Usuarios');
        
        $usuario = $usersRepo->find($idUsuario);
        
        $em->remove($usuario);
        
        $this->redirect("/usuarios");
        
        
    }
    
    public function logInAction($urlParams){
    	
    	$_SESSION['userSession'] = 'existo';
    	$this->redirect("/");
    	
    }
    
    public function logOutAction($urlParams){
    	
    	$_SESSION['userSession'] = false;
    	session_destroy();
    	unset($_SESSION['userSession']);
    	$this->redirect("/");
    	
    }
    
    
    
    
    

}
?>
