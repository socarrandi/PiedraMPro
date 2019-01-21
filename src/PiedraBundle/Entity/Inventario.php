<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventario
 *
 * @ORM\Table(name="inventario")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\InventarioRepository")
 */
class Inventario
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
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Departamento")
     *@ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     **/ 
    private $departamento;

    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Pc")
     *@ORM\JoinColumn(name="pc_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $pc;


     /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Componente")
     *@ORM\JoinColumn(name="componente_id", referencedColumnName="id")
     **/
    private $componente;

    

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=255)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=255)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="medioBasico", type="string", length=255)
     */
    private $medioBasico;

    /**
     * @var int
     *
     * @ORM\Column(name="noSubmayor", type="integer")
     */
    private $noSubmayor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="baja", type="boolean")
     */
    private $baja;


    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;


    public function __construct(){
        $this->marca = '';
        $this->componente = '';
        $this->modelo = '';
        $this->serial = '';
        $this->estado = 'OK';
        $this->medioBasico = '';
        $this->noSubmayor = 0;
        $this->baja = false;
        $this->observacion = '';
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
     * Set marca
     *
     * @param string $marca
     *
     * @return Inventario
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
     * @return Inventario
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
     * Set serial
     *
     * @param string $serial
     *
     * @return Inventario
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
     * Set medioBasico
     *
     * @param string $medioBasico
     *
     * @return Inventario
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
     * @param integer $noSubmayor
     *
     * @return Inventario
     */
    public function setNoSubmayor($noSubmayor)
    {
        $this->noSubmayor = $noSubmayor;

        return $this;
    }

    /**
     * Get noSubmayor
     *
     * @return integer
     */
    public function getNoSubmayor()
    {
        return $this->noSubmayor;
    }

    /**
     * Set departamento
     *
     * @param \PiedraBundle\Entity\Departamento $departamento
     *
     * @return Inventario
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
     * Set pc
     *
     * @param \PiedraBundle\Entity\Pc $pc
     *
     * @return Inventario
     */
    public function setPc(\PiedraBundle\Entity\Pc $pc = null)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return \PiedraBundle\Entity\Pc
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Inventario
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set baja
     *
     * @param boolean $baja
     *
     * @return Inventario
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Inventario
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
     * Set componente
     *
     * @param \PiedraBundle\Entity\Componente $componente
     *
     * @return Inventario
     */
    public function setComponente(\PiedraBundle\Entity\Componente $componente = null)
    {
        $this->componente = $componente;

        return $this;
    }

    /**
     * Get componente
     *
     * @return \PiedraBundle\Entity\Componente
     */
    public function getComponente()
    {
        return $this->componente;
    }
}
