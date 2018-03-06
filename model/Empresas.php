<?php

class Empresas{
    
    private $id;
    private $nombre;
    private $cif;
    private $telefono;
    private $email;
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
    
    public function getCif() {
    	return $this->cif;
    }
    
    public function setCif($cif) {
    	$this->cif = $cif;
    }
    
    public function getTelefono() {
    	return $this->telefono;
    }
    
    public function setTelefono($telefono) {
    	$this->telefono = $telefono;
    }
    
    public function getEmail() {
    	return $this->email;
    }
    
    public function setEmail($email) {
    	$this->email = $email;
    }
    
    public function getIsActivo() {
    	return $this->isActivo;
    }
    
    public function setIsActivo($isActivo) {
    	$this->isActivo = $isActivo;
    }

}
?>