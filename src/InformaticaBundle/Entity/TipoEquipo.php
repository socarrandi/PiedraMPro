<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEquipo
 *
 * @ORM\Table(name="tipoequipo")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\TipoEquipoRepository")
 */
class TipoEquipo
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
     * @ORM\Column(name="tipo_equipo", type="string", length=55)
     */
    private $tipoEquipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="ocultar", type="boolean")
     */
    private $ocultar;


    /**
     * @var bool
     *
     * @ORM\Column(name="is_pc", type="boolean")
     */
    private $isPc;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=10)
     */
    private $color;


    public function __construct(){
        $this->ocultar = false ;
        $this->isPc = false ;
        
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
     * Set tipoEquipo
     *
     * @param string $tipoEquipo
     *
     * @return TipoEquipo
     */
    public function setTipoEquipo($tipoEquipo)
    {
        $this->tipoEquipo = $tipoEquipo;

        return $this;
    }

    /**
     * Get tipoEquipo
     *
     * @return string
     */
    public function getTipoEquipo()
    {
        return $this->tipoEquipo;
    }

    /**
     * Set ocultar
     *
     * @param boolean $ocultar
     *
     * @return TipoEquipo
     */
    public function setOcultar($ocultar)
    {
        $this->ocultar = $ocultar;

        return $this;
    }

    /**
     * Get ocultar
     *
     * @return boolean
     */
    public function getOcultar()
    {
        return $this->ocultar;
    }

    /**
     * Set isPc
     *
     * @param boolean $isPc
     *
     * @return TipoEquipo
     */
    public function setIsPc($isPc)
    {
        $this->isPc = $isPc;

        return $this;
    }

    /**
     * Get isPc
     *
     * @return boolean
     */
    public function getIsPc()
    {
        return $this->isPc;
    }

    public function __toString(){
        return $this->getTipoEquipo();
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return TipoEquipo
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
}
