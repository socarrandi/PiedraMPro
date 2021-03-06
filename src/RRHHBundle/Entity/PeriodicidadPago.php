<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodicidadPago
 *
 * @ORM\Table(name="periodicidad_pago")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\PeriodicidadPagoRepository")
 */
class PeriodicidadPago
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
     * @ORM\Column(name="mensual", type="boolean")
     */
    private $mensual;

    /**
     * @var bool
     *
     * @ORM\Column(name="quincenal", type="boolean")
     */
    private $quincenal;

    /**
     * @var bool
     *
     * @ORM\Column(name="otra", type="boolean")
     */
    private $otra;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Contrato")
     *@ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     **/
    private $contrato;

     public function __construct(){
        $this->mensual = false;
        $this->quincenal = false;
        $this->otra = false;  
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
     * Set mensual
     *
     * @param boolean $mensual
     *
     * @return PeriodicidadPago
     */
    public function setMensual($mensual)
    {
        $this->mensual = $mensual;

        return $this;
    }

    /**
     * Get mensual
     *
     * @return bool
     */
    public function getMensual()
    {
        return $this->mensual;
    }

    /**
     * Set quincenal
     *
     * @param boolean $quincenal
     *
     * @return PeriodicidadPago
     */
    public function setQuincenal($quincenal)
    {
        $this->quincenal = $quincenal;

        return $this;
    }

    /**
     * Get quincenal
     *
     * @return bool
     */
    public function getQuincenal()
    {
        return $this->quincenal;
    }

    /**
     * Set otra
     *
     * @param boolean $otra
     *
     * @return PeriodicidadPago
     */
    public function setOtra($otra)
    {
        $this->otra = $otra;

        return $this;
    }

    /**
     * Get otra
     *
     * @return bool
     */
    public function getOtra()
    {
        return $this->otra;
    }

    /**
     * Set contrato
     *
     * @param \RRHHBundle\Entity\Contrato $contrato
     *
     * @return PeriodicidadPago
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
