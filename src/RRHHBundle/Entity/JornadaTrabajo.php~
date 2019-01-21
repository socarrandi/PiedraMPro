<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JornadaTrabajo
 *
 * @ORM\Table(name="jornada_trabajo")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\JornadaTrabajoRepository")
 */
class JornadaTrabajo
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
     * @var string
     *
     * @ORM\Column(name="diaria", type="string", length=255)
     */
    private $diaria;

    /**
     * @var string
     *
     * @ORM\Column(name="semanal", type="string", length=255)
     */
    private $semanal;

    /**
     * @var string
     *
     * @ORM\Column(name="mensual", type="string", length=255)
     */
    private $mensual;

     /**
     * @var int
     *
     * @ORM\Column(name="pausa_jt", type="integer")
     */
    private $pausaJT;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Contrato")
     *@ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     **/
    private $contrato;

    public function __construct(){
        $this->diaria = 8;
        $this->semanal = 44;
        $this->mensual = 190.6;  
        $this->pausaJT = 30;
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
     * Set diaria
     *
     * @param string $diaria
     *
     * @return JornadaTrabajo
     */
    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;

        return $this;
    }

    /**
     * Get diaria
     *
     * @return string
     */
    public function getDiaria()
    {
        return $this->diaria;
    }

    /**
     * Set semanal
     *
     * @param string $semanal
     *
     * @return JornadaTrabajo
     */
    public function setSemanal($semanal)
    {
        $this->semanal = $semanal;

        return $this;
    }

    /**
     * Get semanal
     *
     * @return string
     */
    public function getSemanal()
    {
        return $this->semanal;
    }

    /**
     * Set mensual
     *
     * @param string $mensual
     *
     * @return JornadaTrabajo
     */
    public function setMensual($mensual)
    {
        $this->mensual = $mensual;

        return $this;
    }

    /**
     * Get mensual
     *
     * @return string
     */
    public function getMensual()
    {
        return $this->mensual;
    }

    /**
     * Set contrato
     *
     * @param \RRHHBundle\Entity\Contrato $contrato
     *
     * @return JornadaTrabajo
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

    /**
     * Set pausaJT
     *
     * @param integer $pausaJT
     *
     * @return JornadaTrabajo
     */
    public function setPausaJT($pausaJT)
    {
        $this->pausaJT = $pausaJT;

        return $this;
    }

    /**
     * Get pausaJT
     *
     * @return integer
     */
    public function getPausaJT()
    {
        return $this->pausaJT;
    }
}
