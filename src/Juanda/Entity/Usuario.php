<?php

namespace Juanda\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var boolean
     */
    private $bloqueado;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grupos;

    /**
     * @var integer
     */
    private $id;   

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Usuario
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set bloqueado
     *
     * @param boolean $bloqueado
     * @return Usuario
     */
    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado;
    
        return $this;
    }

    /**
     * Get bloqueado
     *
     * @return boolean 
     */
    public function getBloqueado()
    {
        return $this->bloqueado;
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
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etiquetas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etiquetas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add etiquetas
     *
     * @param \Juanda\Entity\Etiqueta $etiquetas
     * @return Usuario
     */
    public function addEtiqueta(\Juanda\Entity\Etiqueta $etiquetas)
    {
        $this->etiquetas[] = $etiquetas;
        
        $etiquetas->setUsuario($this);
    
        return $this;
    }

    /**
     * Remove etiquetas
     *
     * @param \Juanda\Entity\Etiqueta $etiquetas
     */
    public function removeEtiqueta(\Juanda\Entity\Etiqueta $etiquetas)
    {
        $this->etiquetas->removeElement($etiquetas);
    }

    /**
     * Get etiquetas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtiquetas()
    {
        return $this->etiquetas;
    }
    


    /**
     * Add grupos
     *
     * @param \Juanda\Entity\Grupo $grupos
     * @return Usuario
     */
    public function addGrupo(\Juanda\Entity\Grupo $grupos)
    {
        $this->grupos[] = $grupos;
    
        return $this;
    }

    /**
     * Remove grupos
     *
     * @param \Juanda\Entity\Grupo $grupos
     */
    public function removeGrupo(\Juanda\Entity\Grupo $grupos)
    {
        $this->grupos->removeElement($grupos);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupos()
    {
        return $this->grupos;
    }
}