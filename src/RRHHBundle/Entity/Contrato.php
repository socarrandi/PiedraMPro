<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Contrato
 * *@UniqueEntity(
 *      fields={"noContrato"},
 *      message="Ya existe este No. Contrato"
 * )
 *
 * @ORM\Table(name="contrato")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\ContratoRepository")
 */
class Contrato
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
     * @var integer
     * @ORM\Column(name="no_contrato", type="integer", length=255)
     */
    private $noContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ci", type="string", length=255)
     */
    private $ci;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=255)
     */
    private $sexo;   

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\NivelEscolar")
     *@ORM\JoinColumn(name="nivel_escolar_id", referencedColumnName="id")
     **/ 
    private $nivelEscolar;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

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
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\AreaTrabajo")
     *@ORM\JoinColumn(name="area_trabajo_id", referencedColumnName="id")
     **/
    private $areaTrabajo;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\TipoContrato")
     *@ORM\JoinColumn(name="tipo_contrato_id", referencedColumnName="id")
     **/
    private $tipoContrato;

    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Cargo")
     *@ORM\JoinColumn(name="cargo_id", referencedColumnName="id")
     **/
    private $cargo;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\CategoriaOcup")
     *@ORM\JoinColumn(name="categoria_ocupacional_id", referencedColumnName="id")
     **/
    private $categoriaOcupacional;

     /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\GrupoEscala")
     *@ORM\JoinColumn(name="grupo_escala_id", referencedColumnName="id")
     **/
    private $grupoEscala;      

    /**
     * @var int
     *
     * @ORM\Column(name="duracion_contrato", type="integer")
     */
    private $duracionContrato;

    

    public function __construct(){
       $this->noContrato = 0;
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Contrato
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Contrato
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ci
     *
     * @param string $ci
     *
     * @return Contrato
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Contrato
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Contrato
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Contrato
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
     * Set duracionContrato
     *
     * @param integer $duracionContrato
     *
     * @return Contrato
     */
    public function setDuracionContrato($duracionContrato)
    {
        $this->duracionContrato = $duracionContrato;

        return $this;
    }

    /**
     * Get duracionContrato
     *
     * @return integer
     */
    public function getDuracionContrato()
    {
        return $this->duracionContrato;
    }

    /**
     * Set nivelEscolar
     *
     * @param \RRHHBundle\Entity\NivelEscolar $nivelEscolar
     *
     * @return Contrato
     */
    public function setNivelEscolar(\RRHHBundle\Entity\NivelEscolar $nivelEscolar = null)
    {
        $this->nivelEscolar = $nivelEscolar;

        return $this;
    }

    /**
     * Get nivelEscolar
     *
     * @return \RRHHBundle\Entity\NivelEscolar
     */
    public function getNivelEscolar()
    {
        return $this->nivelEscolar;
    }

    /**
     * Set municipio
     *
     * @param \RRHHBundle\Entity\Municipio $municipio
     *
     * @return Contrato
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
     * Set provincia
     *
     * @param \RRHHBundle\Entity\Provincia $provincia
     *
     * @return Contrato
     */
    public function setProvincia(\RRHHBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \RRHHBundle\Entity\Provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set areaTrabajo
     *
     * @param \RRHHBundle\Entity\AreaTrabajo $areaTrabajo
     *
     * @return Contrato
     */
    public function setAreaTrabajo(\RRHHBundle\Entity\AreaTrabajo $areaTrabajo = null)
    {
        $this->areaTrabajo = $areaTrabajo;

        return $this;
    }

    /**
     * Get areaTrabajo
     *
     * @return \RRHHBundle\Entity\AreaTrabajo
     */
    public function getAreaTrabajo()
    {
        return $this->areaTrabajo;
    }

    /**
     * Set tipoContrato
     *
     * @param \RRHHBundle\Entity\TipoContrato $tipoContrato
     *
     * @return Contrato
     */
    public function setTipoContrato(\RRHHBundle\Entity\TipoContrato $tipoContrato = null)
    {
        $this->tipoContrato = $tipoContrato;

        return $this;
    }

    /**
     * Get tipoContrato
     *
     * @return \RRHHBundle\Entity\TipoContrato
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

    /**
     * Set cargo
     *
     * @param \PiedraBundle\Entity\Cargo $cargo
     *
     * @return Contrato
     */
    public function setCargo(\PiedraBundle\Entity\Cargo $cargo = null)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return \PiedraBundle\Entity\Cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set categoriaOcupacional
     *
     * @param \RRHHBundle\Entity\CategoriaOcup $categoriaOcupacional
     *
     * @return Contrato
     */
    public function setCategoriaOcupacional(\RRHHBundle\Entity\CategoriaOcup $categoriaOcupacional = null)
    {
        $this->categoriaOcupacional = $categoriaOcupacional;

        return $this;
    }

    /**
     * Get categoriaOcupacional
     *
     * @return \RRHHBundle\Entity\CategoriaOcup
     */
    public function getCategoriaOcupacional()
    {
        return $this->categoriaOcupacional;
    }

    /**
     * Set grupoEscala
     *
     * @param \RRHHBundle\Entity\GrupoEscala $grupoEscala
     *
     * @return Contrato
     */
    public function setGrupoEscala(\RRHHBundle\Entity\GrupoEscala $grupoEscala = null)
    {
        $this->grupoEscala = $grupoEscala;

        return $this;
    }

    /**
     * Get grupoEscala
     *
     * @return \RRHHBundle\Entity\GrupoEscala
     */
    public function getGrupoEscala()
    {
        return $this->grupoEscala;
    }

    /**
     * Set noContrato
     *
     * @param integer $noContrato
     *
     * @return Contrato
     */
    public function setNoContrato($noContrato)
    {
        $this->noContrato = $noContrato;

        return $this;
    }

    /**
     * Get noContrato
     *
     * @return integer
     */
    public function getNoContrato()
    {
        return $this->noContrato;
    }
}
