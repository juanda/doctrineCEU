<?php

namespace Juanda\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiqueta
 */
class Etiqueta
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $id;
    
    /**
     * @var \Juanda\Entity\Usuario
     */
    private $usuario;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Etiqueta
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Etiqueta
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    


    /**
     * Set usuario
     *
     * @param \Juanda\Entity\Usuario $usuario
     * @return Etiqueta
     */
    public function setUsuario(\Juanda\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Juanda\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}