<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unidad
 *
 * @ORM\Table(name="unidad")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\UnidadRepository")
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
     * @ORM\Column(name="unidad", type="string", length=255)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="cita", type="string", length=255)
     */
    private $cita;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Municipio")
     *@ORM\JoinColumn(name="municipio_id", referencedColumnName="id")
     **/ 
    private $municipio;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Provincia")
     *@ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     **/ 
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;


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
     * Set cita
     *
     * @param string $cita
     *
     * @return Unidad
     */
    public function setCita($cita)
    {
        $this->cita = $cita;

        return $this;
    }

    /**
     * Get cita
     *
     * @return string
     */
    public function getCita()
    {
        return $this->cita;
    }


    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Unidad
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
     * Set municipio
     *
     * @param \RRHHBundle\Entity\Municipio $municipio
     *
     * @return Unidad
     */
    public function setMunicipio(\RRHHBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \RRHHBundle\Entity\Municipio
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set porvincia
     *
     * @param \RRHHBundle\Entity\Provincia $porvincia
     *
     * @return Unidad
     */
    public function setProvincia(\RRHHBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \RRHHBundle\Entity\Municipio
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}
