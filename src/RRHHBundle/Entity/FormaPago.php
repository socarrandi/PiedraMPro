<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormaPago
 *
 * @ORM\Table(name="forma_pago")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\FormaPagoRepository")
 */
class FormaPago
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
     * @ORM\Column(name="atiempo", type="boolean")
     */
    private $atiempo;

    /**
     * @var bool
     *
     * @ORM\Column(name="arendimiento", type="boolean")
     */
    private $arendimiento;

    /**
     * @var bool
     *
     * @ORM\Column(name="porresultado", type="boolean")
     */
    private $porresultado;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Contrato")
     *@ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     **/
    private $contrato;

    public function __construct(){
        $this->atiempo = false;
        $this->arendimiento = false;
        $this->porresultado = false;  
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
     * Set atiempo
     *
     * @param boolean $atiempo
     *
     * @return FormaPago
     */
    public function setAtiempo($atiempo)
    {
        $this->atiempo = $atiempo;

        return $this;
    }

    /**
     * Get atiempo
     *
     * @return bool
     */
    public function getAtiempo()
    {
        return $this->atiempo;
    }

    /**
     * Set arendimiento
     *
     * @param boolean $arendimiento
     *
     * @return FormaPago
     */
    public function setArendimiento($arendimiento)
    {
        $this->arendimiento = $arendimiento;

        return $this;
    }

    /**
     * Get arendimiento
     *
     * @return bool
     */
    public function getArendimiento()
    {
        return $this->arendimiento;
    }

    /**
     * Set porresultado
     *
     * @param boolean $porresultado
     *
     * @return FormaPago
     */
    public function setPorresultado($porresultado)
    {
        $this->porresultado = $porresultado;

        return $this;
    }

    /**
     * Get porresultado
     *
     * @return bool
     */
    public function getPorresultado()
    {
        return $this->porresultado;
    }

    /**
     * Set contrato
     *
     * @param \RRHHBundle\Entity\Contrato $contrato
     *
     * @return FormaPago
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
