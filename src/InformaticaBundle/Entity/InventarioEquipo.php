<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventarioEquipo
 *
 * @ORM\Table(name="inventarioequipo")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\InventarioEquipoRepository")
 */
class InventarioEquipo
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
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\EstadoEquipo")
     *@ORM\JoinColumn(name="estado_equipo", referencedColumnName="id")
     **/
    private $estadoEquipo;

     /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Pieza")
     *@ORM\JoinColumn(name="pieza", referencedColumnName="id")
     **/
    private $pieza;

     /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Equipo")
     *@ORM\JoinColumn(name="equipo", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $equipo;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=100)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=100)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="ctecnica", type="string", length=100)
     */
    private $ctecnica;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=100)
     */
    private $serial;    

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=150)
     */
    private $observacion;
        
    /**
     * @var bool
     *
     * @ORM\Column(name="baja", type="boolean")
     */
    private $baja;

    public function __construct(){
        $this->baja = false;
        $this->marca = '';
        $this->modelo = '';
        $this->ctecnica = '';
        $this->serial = '';
        $this->observacion = '';
        
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
     * Set marca
     *
     * @param string $marca
     *
     * @return InventarioEquipo
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return InventarioEquipo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set ctecnica
     *
     * @param string $ctecnica
     *
     * @return InventarioEquipo
     */
    public function setCtecnica($ctecnica)
    {
        $this->ctecnica = $ctecnica;

        return $this;
    }

    /**
     * Get ctecnica
     *
     * @return string
     */
    public function getCtecnica()
    {
        return $this->ctecnica;
    }

    /**
     * Set serial
     *
     * @param string $serial
     *
     * @return InventarioEquipo
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return InventarioEquipo
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
     * Set baja
     *
     * @param boolean $baja
     *
     * @return InventarioEquipo
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
     * Set estadoEquipo
     *
     * @param \InformaticaBundle\Entity\EstadoEquipo $estadoEquipo
     *
     * @return InventarioEquipo
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
     * Set pieza
     *
     * @param \InformaticaBundle\Entity\Pieza $pieza
     *
     * @return InventarioEquipo
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
     * Set equipo
     *
     * @param \InformaticaBundle\Entity\Equipo $equipo
     *
     * @return InventarioEquipo
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
