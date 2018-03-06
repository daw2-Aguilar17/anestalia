<?php
//Conexion a la base de datos
require_once '../core/Conectar.php';
$conectarObj = new Conectar();        
$conn=$conectarObj->getConnection();

//Recuperamos la accion de la llamada a Ajax.php
$getAction = $_POST['accion'];

return $getAction;