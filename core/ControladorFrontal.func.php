<?php
//FUNCIONES PARA EL CONTROLADOR FRONTAL
function cargarControlador($controller){  

    $controlador = ucwords($controller).'Controller';
    $strFileController = 'controller/'.$controlador.'.php';
        
    if(!is_file($strFileController)){
        $controlador = ucwords(CONTROLADOR_DEFECTO).'Controller';
        $strFileController = 'controller/'.$controlador.'.php';
            
    }   
    
    // Cargamos el controlador
    require_once $strFileController;

    // Instanciamos el controlador
    $controllerObj = new $controlador();
    
    return $controllerObj;
}

function cargarAccion($controllerObj,$action, $params_merged){
    $accion = $action;
    $controllerObj->$accion($params_merged);
    
    
}
 
function lanzarAccion($controllerObj, $uriAction, $params_merged){
    
    if(!$uriAction){
        $action = ACCION_DEFECTO;
    }else{
        $action = $uriAction;
    }
    
    $action = $action . "Action";
    
    
    if(method_exists($controllerObj, $action)){
        cargarAccion($controllerObj, $action, $params_merged);
    }else{
        cargarAccion($controllerObj, $action, $params_merged);
    }
}



?>
