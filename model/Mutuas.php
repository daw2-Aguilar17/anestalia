<?php

class Mutuas{
    
    private $id;
    private $nombre;
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
    
    public function getIsActivo() {
    	return $this->isActivo;
    }
    
    public function setIsActivo($isActivo) {
    	$this->isActivo = $isActivo;
    }

}
?>