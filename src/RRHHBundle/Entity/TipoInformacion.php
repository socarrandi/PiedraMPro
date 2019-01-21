<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoInformacion
 *
 * @ORM\Table(name="tipo_informacion")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\TipoInformacionRepository")
 */
class TipoInformacion
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
     * @var bool
     *
     * @ORM\Column(name="clasificada", type="boolean")
     */
    private $clasificada;

    /**
     * @var bool
     *
     * @ORM\Column(name="superior", type="boolean")
     */
    private $superior;

    /**
     * @var bool
     *
     * @ORM\Column(name="regimen_cerrado", type="boolean")
     */
    private $regimenCerrado;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Contrato")
     *@ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     **/
    private $contrato;


    public function __construct(){
        $this->clasificada = false;
        $this->superior = false;
        $this->regimenCerrado = false;  
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
     * Set clasificada
     *
     * @param boolean $clasificada
     *
     * @return TipoInformacion
     */
    public function setClasificada($clasificada)
    {
        $this->clasificada = $clasificada;

        return $this;
    }

    /**
     * Get clasificada
     *
     * @return bool
     */
    public function getClasificada()
    {
        return $this->clasificada;
    }

    /**
     * Set superior
     *
     * @param boolean $superior
     *
     * @return TipoInformacion
     */
    public function setSuperior($superior)
    {
        $this->superior = $superior;

        return $this;
    }

    /**
     * Get superior
     *
     * @return bool
     */
    public function getSuperior()
    {
        return $this->superior;
    }

    /**
     * Set regimenCerrado
     *
     * @param boolean $regimenCerrado
     *
     * @return TipoInformacion
     */
    public function setRegimenCerrado($regimenCerrado)
    {
        $this->regimenCerrado = $regimenCerrado;

        return $this;
    }

    /**
     * Get regimenCerrado
     *
     * @return bool
     */
    public function getRegimenCerrado()
    {
        return $this->regimenCerrado;
    }

    /**
     * Set contrato
     *
     * @param \RRHHBundle\Entity\Contrato $contrato
     *
     * @return TipoInformacion
     */
    public function setContrato(\RRHHBundle\Entity\Contrato $contrato = null)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return \RRHHBundle\Entity\Contrato
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
