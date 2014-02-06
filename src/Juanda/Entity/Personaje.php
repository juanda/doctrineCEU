<?php

namespace Juanda\Entity;

class Personaje {
    
    protected $id;
    
    protected $nombre;
    
    protected $descripcion;
    
    protected $riqueza;
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getRiqueza() {
        return $this->riqueza;
    }

    public function setRiqueza($riqueza) {
        $this->riqueza = $riqueza;
    }

}