<?php

session_start();

//Configuracion global
require_once 'config/global.php';

//Base para los controladores
require_once 'core/ControladorBase.php';

//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';

//Cargamos controladores y acciones

$uri = $_SERVER['REQUEST_URI'];
$uri = trim(filter_var($uri, FILTER_SANITIZE_URL), '/');

if(!$uri){   
    $controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj, $uriAction, $params_merged);
}else{  
    $uriParams = explode("/", $uri);
    
    $uriController = $uriParams[0];
    $uriAction = $uriParams[1];

    // Preparamos un array para parametizar el resto de variables provenientes de a url
    // url: www.website.com/controller/action/param1/value1/param2/value2/param3/value3/.../...
    $params = array();

    // Recojemos los valores de las variables de la url y las parametizamos en un array asociativo
    for($i=2; $i < count($uriParams); $i++){
        $params[$uriParams[$i]] = $uriParams[($i+1)];
        $i++;
    }
    
    // Juntamos en un mismo array las variables de $_POST y las de la url
    $params_merged = array_merge($params, $_POST); 
    
    $controllerObj = cargarControlador($uriController);
    lanzarAccion($controllerObj, $uriAction, $params_merged);

}

?>