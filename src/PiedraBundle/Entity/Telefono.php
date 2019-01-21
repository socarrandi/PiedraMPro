<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefono
 *
 * @ORM\Table(name="telefono")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\TelefonoRepository")
 */
class Telefono
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Departamento")
     *@ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     **/ 
    private $departamento;

     /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


    /**
     * @var bool
     *
     * @ORM\Column(name="is_externo", type="boolean")
     */
    private $isExterno;

     public function __construct(){
        $this->isExterno = false;        
        $this->telefono = '0000'; 
        $this->descripcion = '...';      
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    

    /**
     * Set departamento
     *
     * @param \PiedraBundle\Entity\Departamento $departamento
     *
     * @return Telefono
     */
    public function setDepartamento(\PiedraBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \PiedraBundle\Entity\Departamento
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set isExterno
     *
     * @param boolean $isExterno
     *
     * @return Telefono
     */
    public function setIsExterno($isExterno)
    {
        $this->isExterno = $isExterno;

        return $this;
    }

    /**
     * Get isExterno
     *
     * @return boolean
     */
    public function getIsExterno()
    {
        return $this->isExterno;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Telefono
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
