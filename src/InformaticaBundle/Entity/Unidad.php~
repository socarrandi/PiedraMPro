<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unidad
 *
 * @ORM\Table(name="unidad")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\UnidadRepository")
 */
class Unidad
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
     * @ORM\Column(name="unidad", type="string", length=100)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="ueb", type="string", length=100)
     */
    private $ueb;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=100)
     */
    private $director;


    /**
     * @var int
     *
     * @ORM\Column(name="codigo", type="integer")
     */
    private $codigo;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_dts", type="integer")
     */
    private $codigoDts;


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
     * Set unidad
     *
     * @param string $unidad
     *
     * @return Unidad
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set codigo
     *
     * @param integer $codigo
     *
     * @return Unidad
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codigoDts
     *
     * @param integer $codigoDts
     *
     * @return Unidad
     */
    public function setCodigoDts($codigoDts)
    {
        $this->codigoDts = $codigoDts;

        return $this;
    }

    /**
     * Get codigoDts
     *
     * @return int
     */
    public function getCodigoDts()
    {
        return $this->codigoDts;
    }

    /**
     * Set ueb
     *
     * @param string $ueb
     *
     * @return Unidad
     */
    public function setUeb($ueb)
    {
        $this->ueb = $ueb;

        return $this;
    }

    /**
     * Get ueb
     *
     * @return string
     */
    public function getUeb()
    {
        return $this->ueb;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Unidad
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set director
     *
     * @param string $director
     *
     * @return Unidad
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string
     */
    public function getDirector()
    {
        return $this->director;
    }
}
