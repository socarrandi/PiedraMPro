<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientoAFT
 *
 * @ORM\Table(name="movimientoaft")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\MovimientoAFTRepository")
 */
class MovimientoAFT
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
     * @var \DateTime
    
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;
    
 
    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Equipo")
     *@ORM\JoinColumn(name="equipo_id", referencedColumnName="id",onDelete="CASCADE")
     **/
    private $equipo;       

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Responsable")
     *@ORM\JoinColumn(name="responsable_origen", referencedColumnName="id")
     **/
    private $responsableOrigen;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Responsable")
     *@ORM\JoinColumn(name="responsable_destino", referencedColumnName="id")
     **/
    private $responsableDestino;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\TipoMovimiento")
     *@ORM\JoinColumn(name="tipo_movimiento_id", referencedColumnName="id")
     **/
    private $tipoMovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=35)
     */
    private $usuario;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Unidad")
     *@ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     **/
    private $unidad;

    /**
     * @var bool
     *
     * @ORM\Column(name="dictaminado", type="boolean")
     */
    private $dictaminado;

    /**
     * @var bool
     *
     * @ORM\Column(name="log", type="boolean")
     */
    private $log;


    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\EstadoMovimientoAFT")
     *@ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     **/
    private $estado;

   

    public function __construct(){
        $this->dictaminado = false;
        $this->log = true;      
        
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return MovimientoAFT
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
     * Set usuario
     *
     * @param string $usuario
     *
     * @return MovimientoAFT
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set equipo
     *
     * @param \InformaticaBundle\Entity\Equipo $equipo
     *
     * @return MovimientoAFT
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

    /**
     * Set responsableOrigen
     *
     * @param \InformaticaBundle\Entity\Responsable $responsableOrigen
     *
     * @return MovimientoAFT
     */
    public function setResponsableOrigen(\InformaticaBundle\Entity\Responsable $responsableOrigen = null)
    {
        $this->responsableOrigen = $responsableOrigen;

        return $this;
    }

    /**
     * Get responsableOrigen
     *
     * @return \InformaticaBundle\Entity\Responsable
     */
    public function getResponsableOrigen()
    {
        return $this->responsableOrigen;
    }

    /**
     * Set responsableDestino
     *
     * @param \InformaticaBundle\Entity\Responsable $responsableDestino
     *
     * @return MovimientoAFT
     */
    public function setResponsableDestino(\InformaticaBundle\Entity\Responsable $responsableDestino = null)
    {
        $this->responsableDestino = $responsableDestino;

        return $this;
    }

    /**
     * Get responsableDestino
     *
     * @return \InformaticaBundle\Entity\Responsable
     */
    public function getResponsableDestino()
    {
        return $this->responsableDestino;
    }

    /**
     * Set tipoMovimiento
     *
     * @param \InformaticaBundle\Entity\TipoMovimiento $tipoMovimiento
     *
     * @return Movimiento
     */
    public function setTipoMovimiento(\InformaticaBundle\Entity\TipoMovimiento $tipoMovimiento = null)
    {
        $this->tipoMovimiento = $tipoMovimiento;

        return $this;
    }

    /**
     * Get tipoMovimiento
     *
     * @return \InformaticaBundle\Entity\TipoMovimiento
     */
    public function getTipoMovimiento()
    {
        return $this->tipoMovimiento;
    }

    /**
     * Set dictaminado
     *
     * @param boolean $dictaminado
     *
     * @return MovimientoAFT
     */
    public function setDictaminado($dictaminado)
    {
        $this->dictaminado = $dictaminado;

        return $this;
    }

    /**
     * Get dictaminado
     *
     * @return boolean
     */
    public function getDictaminado()
    {
        return $this->dictaminado;
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return MovimientoAFT
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
     * Set log
     *
     * @param boolean $log
     *
     * @return MovimientoAFT
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get Log
     *
     * @return boolean
     */
    public function getLog()
    {
        return $this->log;
    }

    

    /**
     * Set estado
     *
     * @param \InformaticaBundle\Entity\EstadoMovimientoAFT $estado
     *
     * @return MovimientoAFT
     */
    public function setEstado(\InformaticaBundle\Entity\EstadoMovimientoAFT $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \InformaticaBundle\Entity\EstadoMovimientoAFT
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
