<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventarioParteyPieza
 *
 * @ORM\Table(name="inventariosparteypieza")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\InventarioParteyPiezaRepository")
 */
class InventarioParteyPieza
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
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Pieza")
     *@ORM\JoinColumn(name="idpieza", referencedColumnName="id")
     **/
    private $idpieza;

     /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\TipoEquipo")
     *@ORM\JoinColumn(name="tipo_equipo", referencedColumnName="id")
     **/
    private $tipo;


    /**
     * @var string
     *
     * @ORM\Column(name="Marca", type="string", length=25)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="Modelo", type="string", length=25)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Noserie", type="string", length=40)
     */
    private $noserie;

    /**
     * @var string
     *
     * @ORM\Column(name="CTecnicas", type="string", length=40)
     */
    private $cTecnicas;

    /**
     * @var string
     *
     * @ORM\Column(name="otrabajo", type="string", length=25)
     */
    private $otrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="factura", type="string", length=25)
     */
    private $factura;

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float")
     */
    private $importe;
    
    /**
     * @var int
     *
     * @ORM\Column(name="mes", type="integer")
     */
    private $mes;

    /**
     * @var int
     *
     * @ORM\Column(name="ano", type="integer")
     */
    private $ano;

    /**
     * @var bool
     *
     * @ORM\Column(name="movimiento", type="boolean")
     */
    private $movimiento;


    

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
     * @return InventarioParteyPieza
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
     * @return InventarioParteyPieza
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
     * Set noserie
     *
     * @param string $noserie
     *
     * @return InventarioParteyPieza
     */
    public function setNoserie($noserie)
    {
        $this->noserie = $noserie;

        return $this;
    }

    /**
     * Get noserie
     *
     * @return string
     */
    public function getNoserie()
    {
        return $this->noserie;
    }

    /**
     * Set cTecnicas
     *
     * @param string $cTecnicas
     *
     * @return InventarioParteyPieza
     */
    public function setCTecnicas($cTecnicas)
    {
        $this->cTecnicas = $cTecnicas;

        return $this;
    }

    /**
     * Get cTecnicas
     *
     * @return string
     */
    public function getCTecnicas()
    {
        return $this->cTecnicas;
    }

    /**
     * Set otrabajo
     *
     * @param string $otrabajo
     *
     * @return InventarioParteyPieza
     */
    public function setOtrabajo($otrabajo)
    {
        $this->otrabajo = $otrabajo;

        return $this;
    }

    /**
     * Get otrabajo
     *
     * @return string
     */
    public function getOtrabajo()
    {
        return $this->otrabajo;
    }

    /**
     * Set factura
     *
     * @param string $factura
     *
     * @return InventarioParteyPieza
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
     * Set importe
     *
     * @param float $importe
     *
     * @return InventarioParteyPieza
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     *
     * @return InventarioParteyPieza
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     *
     * @return InventarioParteyPieza
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set movimiento
     *
     * @param boolean $movimiento
     *
     * @return InventarioParteyPieza
     */
    public function setMovimiento($movimiento)
    {
        $this->movimiento = $movimiento;

        return $this;
    }

    /**
     * Get movimiento
     *
     * @return boolean
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }

    /**
     * Set idpieza
     *
     * @param \InformaticaBundle\Entity\Pieza $idpieza
     *
     * @return InventarioParteyPieza
     */
    public function setIdpieza(\InformaticaBundle\Entity\Pieza $idpieza = null)
    {
        $this->idpieza = $idpieza;

        return $this;
    }

    /**
     * Get idpieza
     *
     * @return \InformaticaBundle\Entity\Pieza
     */
    public function getIdpieza()
    {
        return $this->idpieza;
    }

    /**
     * Set tipo
     *
     * @param \InformaticaBundle\Entity\TipoEquipo $tipo
     *
     * @return InventarioParteyPieza
     */
    public function setTipo(\InformaticaBundle\Entity\TipoEquipo $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \InformaticaBundle\Entity\TipoEquipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
