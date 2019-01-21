<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubicacion
 *
 * @ORM\Table(name="Ubicacion")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\UbicacionRepository")
 */
class Ubicacion
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
     * @var int
     *
     * @ORM\Column(name="idequipo", type="integer")
     */
    private $idequipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="entidad", type="string", length=35)
     */
    private $entidad;

    /**
     * @var string
     *
     * @ORM\Column(name="areatrabajo", type="string", length=30)
     */
    private $areatrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="puestotrabajo", type="string", length=30)
     */
    private $puestotrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="AnotadoPor", type="string", length=35)
     */
    private $anotadoPor;


   

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
     * Set idequipo
     *
     * @param integer $idequipo
     *
     * @return Ubicacion
     */
    public function setIdequipo($idequipo)
    {
        $this->idequipo = $idequipo;

        return $this;
    }

    /**
     * Get idequipo
     *
     * @return integer
     */
    public function getIdequipo()
    {
        return $this->idequipo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Ubicacion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set entidad
     *
     * @param string $entidad
     *
     * @return Ubicacion
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return string
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set areatrabajo
     *
     * @param string $areatrabajo
     *
     * @return Ubicacion
     */
    public function setAreatrabajo($areatrabajo)
    {
        $this->areatrabajo = $areatrabajo;

        return $this;
    }

    /**
     * Get areatrabajo
     *
     * @return string
     */
    public function getAreatrabajo()
    {
        return $this->areatrabajo;
    }

    /**
     * Set puestotrabajo
     *
     * @param string $puestotrabajo
     *
     * @return Ubicacion
     */
    public function setPuestotrabajo($puestotrabajo)
    {
        $this->puestotrabajo = $puestotrabajo;

        return $this;
    }

    /**
     * Get puestotrabajo
     *
     * @return string
     */
    public function getPuestotrabajo()
    {
        return $this->puestotrabajo;
    }

    /**
     * Set anotadoPor
     *
     * @param string $anotadoPor
     *
     * @return Ubicacion
     */
    public function setAnotadoPor($anotadoPor)
    {
        $this->anotadoPor = $anotadoPor;

        return $this;
    }

    /**
     * Get anotadoPor
     *
     * @return string
     */
    public function getAnotadoPor()
    {
        return $this->anotadoPor;
    }
}
