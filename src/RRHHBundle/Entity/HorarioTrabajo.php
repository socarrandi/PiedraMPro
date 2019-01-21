<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HorarioTrabajo
 *
 * @ORM\Table(name="horario_trabajo")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\HorarioTrabajoRepository")
 */
class HorarioTrabajo
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
     * @ORM\Column(name="desde", type="string", length=255)
     */
    private $desde;

    /**
     * @var string
     *
     * @ORM\Column(name="hasta", type="string", length=255)
     */
    private $hasta;

    /**
     * @var string
     *
     * @ORM\Column(name="convCol", type="string", length=255)
     */
    private $convCol;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Contrato")
     *@ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     **/
    private $contrato;

    public function __construct(){
        $this->desde = '08:00 AM';
        $this->hasta = '05:00 PM';
        $this->convCol = '0';  
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
     * Set desde
     *
     * @param string $desde
     *
     * @return HorarioTrabajo
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return string
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param string $hasta
     *
     * @return HorarioTrabajo
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return string
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set convCol
     *
     * @param string $convCol
     *
     * @return HorarioTrabajo
     */
    public function setConvCol($convCol)
    {
        $this->convCol = $convCol;

        return $this;
    }

    /**
     * Get convCol
     *
     * @return string
     */
    public function getConvCol()
    {
        return $this->convCol;
    }

    /**
     * Set contrato
     *
     * @param \RRHHBundle\Entity\Contrato $contrato
     *
     * @return HorarioTrabajo
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
