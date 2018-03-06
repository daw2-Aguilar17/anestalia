<?php
class ControladorBase{

    public function __construct() {
	
    	require_once 'Conectar.php';
		require_once 'EntityManager.php';
   
        //Incluir todos los modelos
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
    
    //Plugins y funcionalidades
    
    public function view($vista,$datos){
        
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
        
        require_once 'core/AyudaVistas.php';
        $helper=new AyudaVistas();
    
        require_once 'view/' . $vista . '.php';
    }
    
    public function redirect($url = ""){
        header("Location: http://www.adoptam.esy.es" . $url);        
    }
    

}
?>
