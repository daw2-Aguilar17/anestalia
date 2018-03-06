<?php

class Usuarios{
    
    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $username;
    private $idEmpresa;
    private $idRol;
    private $isActivo;
    
    public function __construct() {
    	$this->isActivo = true;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }
    
    public function getApellido2() {
        return $this->apellido2;
    }

    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }
    
    public function getUsername() {
    	return $this->username;
    }
    
    public function setUsername($username) {
    	$this->username = $username;
    }
    
    public function getIdEmpresa() {
    	return $this->idEmpresa;
    }
    
    public function setIdEmpresa($idEmpresa) {
    	$this->idEmpresa= $idEmpresa;
    }
    
    public function getIdRol() {
    	return $this->idRol;
    }
    
    public function setIdRol($idRol) {
    	$this->idRol= $idRol;
    }
    
    public function getIsActivo() {
    	return $this->isActivo;
    }
    
    public function setIsActivo($isActivo) {
    	$this->isActivo = $isActivo;
    }







}
?>