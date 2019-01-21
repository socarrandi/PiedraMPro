<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\EquipoRepository")
 */
class Equipo
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
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Imagen")
     *@ORM\JoinColumn(name="imagen", referencedColumnName="id")
     **/
    private $imagen;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\TipoEquipo")
     *@ORM\JoinColumn(name="tipo_equipo", referencedColumnName="id")
     **/
    private $tipoEquipo;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Responsable")
     *@ORM\JoinColumn(name="responsable", referencedColumnName="id")
     **/
    private $responsable;

    /**     
     *@Assert\Blank()
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Equipo")
     *@ORM\JoinColumn(name="equipo", referencedColumnName="id")
     **/
    private $equipo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="medio_basico", type="string", length=255)
     */
    private $medioBasico;

    /**
     * @var string
     *
     * @ORM\Column(name="no_submayor", type="string", length=255)
     */
    private $noSubmayor;

    /**
     * @var bool
     *
     * @ORM\Column(name="baja", type="boolean")
     */
    private $baja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="realizadopor", type="string", length=255)
     */
    private $realizadopor;

    /**
     * @var string
     *
     * @ORM\Column(name="sello", type="string", length=30)
     */
    private $sello;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\EstadoEquipo")
     *@ORM\JoinColumn(name="estado_equipo", referencedColumnName="id")
     **/
    private $estadoEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_equipo", type="string", length=255)
     */
    private $nombreEquipo;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Unidad")
     *@ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     **/
    private $unidad;



    public function __construct(){
        $this->baja = false;
        $this->sello = '';
        $this->medioBasico = '';
        $this->noSubmayor = '';
        $this->observacion = '';
        $this->realizadopor = '';  
        $this->nombreEquipo = '';         
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
     * Set medioBasico
     *
     * @param string $medioBasico
     *
     * @return Equipo
     */
    public function setMedioBasico($medioBasico)
    {
        $this->medioBasico = $medioBasico;

        return $this;
    }

    /**
     * Get medioBasico
     *
     * @return string
     */
    public function getMedioBasico()
    {
        return $this->medioBasico;
    }

    /**
     * Set noSubmayor
     *
     * @param string $noSubmayor
     *
     * @return Equipo
     */
    public function setNoSubmayor($noSubmayor)
    {
        $this->noSubmayor = $noSubmayor;

        return $this;
    }

    /**
     * Get noSubmayor
     *
     * @return string
     */
    public function getNoSubmayor()
    {
        return $this->noSubmayor;
    }

    /**
     * Set baja
     *
     * @param boolean $baja
     *
     * @return Equipo
     */
    public function setBaja($baja)
    {
        $this->baja = $baja;

        return $this;
    }

    /**
     * Get baja
     *
     * @return boolean
     */
    public function getBaja()
    {
        return $this->baja;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Equipo
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
     * Set realizadopor
     *
     * @param string $realizadopor
     *
     * @return Equipo
     */
    public function setRealizadopor($realizadopor)
    {
        $this->realizadopor = $realizadopor;

        return $this;
    }

    /**
     * Get realizadopor
     *
     * @return string
     */
    public function getRealizadopor()
    {
        return $this->realizadopor;
    }

    /**
     * Set sello
     *
     * @param string $sello
     *
     * @return Equipo
     */
    public function setSello($sello)
    {
        $this->sello = $sello;

        return $this;
    }

    /**
     * Get sello
     *
     * @return string
     */
    public function getSello()
    {
        return $this->sello;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Equipo
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set tipoEquipo
     *
     * @param \InformaticaBundle\Entity\TipoEquipo $tipoEquipo
     *
     * @return Equipo
     */
    public function setTipoEquipo(\InformaticaBundle\Entity\TipoEquipo $tipoEquipo = null)
    {
        $this->tipoEquipo = $tipoEquipo;

        return $this;
    }

    /**
     * Get tipoEquipo
     *
     * @return \InformaticaBundle\Entity\TipoEquipo
     */
    public function getTipoEquipo()
    {
        return $this->tipoEquipo;
    }

    /**
     * Set responsable
     *
     * @param \InformaticaBundle\Entity\Responsable $responsable
     *
     * @return Equipo
     */
    public function setResponsable(\InformaticaBundle\Entity\Responsable $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \InformaticaBundle\Entity\Responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set estadoEquipo
     *
     * @param \InformaticaBundle\Entity\EstadoEquipo $estadoEquipo
     *
     * @return Equipo
     */
    public function setEstadoEquipo(\InformaticaBundle\Entity\EstadoEquipo $estadoEquipo = null)
    {
        $this->estadoEquipo = $estadoEquipo;

        return $this;
    }

    /**
     * Get estadoEquipo
     *
     * @return \InformaticaBundle\Entity\EstadoEquipo
     */
    public function getEstadoEquipo()
    {
        return $this->estadoEquipo;
    }

    /**
     * Set nombreEquipo
     *
     * @param string $nombreEquipo
     *
     * @return Equipo
     */
    public function setNombreEquipo($nombreEquipo)
    {
        $this->nombreEquipo = $nombreEquipo;

        return $this;
    }

    /**
     * Get nombreEquipo
     *
     * @return string
     */
    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }


    public function __toString(){
        return $this->getNombreEquipo();
    }


   

    /**
     * Set imagen
     *
     * @param \InformaticaBundle\Entity\Imagen $imagen
     *
     * @return Equipo
     */
    public function setImagen(\InformaticaBundle\Entity\Imagen $imagen = null)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return \InformaticaBundle\Entity\Imagen
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return Equipo
     */
    public function setUnidad(\InformaticaBundle\Entity\Unidad $unidad = null)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return \InformaticaBundle\Entity\Unidad
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set equipo
     *
     * @param \InformaticaBundle\Entity\Equipo $equipo
     *
     * @return Equipo
     */
    public function setEquipo(\InformaticaBundle\Entity\Equipo $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return \InformaticaBundle\Entity\Equipo
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}
