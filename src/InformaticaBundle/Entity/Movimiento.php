<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimiento
 *
 * @ORM\Table(name="movimiento")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\MovimientoRepository")
 */
class Movimiento
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
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\TipoEquipo")
     *@ORM\JoinColumn(name="tipo_equipo_id", referencedColumnName="id")
     **/
    private $tipoEquipo;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\TipoMovimiento")
     *@ORM\JoinColumn(name="tipo_movimiento_id", referencedColumnName="id")
     **/
    private $tipoMovimiento;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Equipo")
     *@ORM\JoinColumn(name="equipo_origen_id", referencedColumnName="id")
     **/
    private $equipoOrigen;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Equipo")
     *@ORM\JoinColumn(name="equipo_destino_id", referencedColumnName="id")
     **/
    private $equipoDestino;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Pieza")
     *@ORM\JoinColumn(name="pieza_id", referencedColumnName="id")
     **/
    private $pieza;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\InventarioEquipo")
     *@ORM\JoinColumn(name="inventario_id", referencedColumnName="id")
     **/
    private $inventario;       
       
    /**
     * @var string
     *
     * @ORM\Column(name="factura", type="string", length=25)
     */
    private $factura;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=250)
     */
    private $observacion;
    
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
    

    public function __construct(){
        $this->factura = '';
        $this->observacion = '';
        $this->dictaminado = false;
        
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
     * @return Movimiento
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
     * Set factura
     *
     * @param string $factura
     *
     * @return Movimiento
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return string
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Movimiento
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
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Movimiento
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
     * Set tipoEquipo
     *
     * @param \InformaticaBundle\Entity\TipoEquipo $tipoEquipo
     *
     * @return Movimiento
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
     * Set equipoOrigen
     *
     * @param \InformaticaBundle\Entity\Equipo $equipoOrigen
     *
     * @return Movimiento
     */
    public function setEquipoOrigen(\InformaticaBundle\Entity\Equipo $equipoOrigen = null)
    {
        $this->equipoOrigen = $equipoOrigen;

        return $this;
    }

    /**
     * Get equipoOrigen
     *
     * @return \InformaticaBundle\Entity\Equipo
     */
    public function getEquipoOrigen()
    {
        return $this->equipoOrigen;
    }

    /**
     * Set equipoDestino
     *
     * @param \InformaticaBundle\Entity\Equipo $equipoDestino
     *
     * @return Movimiento
     */
    public function setEquipoDestino(\InformaticaBundle\Entity\Equipo $equipoDestino = null)
    {
        $this->equipoDestino = $equipoDestino;

        return $this;
    }

    /**
     * Get equipoDestino
     *
     * @return \InformaticaBundle\Entity\Equipo
     */
    public function getEquipoDestino()
    {
        return $this->equipoDestino;
    }

    /**
     * Set pieza
     *
     * @param \InformaticaBundle\Entity\Pieza $pieza
     *
     * @return Movimiento
     */
    public function setPieza(\InformaticaBundle\Entity\Pieza $pieza = null)
    {
        $this->pieza = $pieza;

        return $this;
    }

    /**
     * Get pieza
     *
     * @return \InformaticaBundle\Entity\Pieza
     */
    public function getPieza()
    {
        return $this->pieza;
    }

    /**
     * Set inventario
     *
     * @param \InformaticaBundle\Entity\InventarioEquipo $inventario
     *
     * @return Movimiento
     */
    public function setInventario(\InformaticaBundle\Entity\InventarioEquipo $inventario = null)
    {
        $this->inventario = $inventario;

        return $this;
    }

    /**
     * Get inventario
     *
     * @return \InformaticaBundle\Entity\InventarioEquipo
     */
    public function getInventario()
    {
        return $this->inventario;
    }

    /**
     * Set dictaminado
     *
     * @param boolean $dictaminado
     *
     * @return Movimiento
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
     * @return Movimiento
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
     * @return Movimiento
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return boolean
     */
    public function getLog()
    {
        return $this->log;
    }
}
