<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salario
 *
 * @ORM\Table(name="salario")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\SalarioRepository")
 */
class Salario
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
     * @ORM\Column(name="salario_escala", type="string", length=255)
     */
    private $salarioEscala;

    /**
     * @var string
     *
     * @ORM\Column(name="antiguedad", type="string", length=255)
     */
    private $antiguedad;

    /**
     * @var string
     *
     * @ORM\Column(name="adicional_del_turismo", type="string", length=255)
     */
    private $adicionalDelTurismo;

    /**
     * @var string
     *
     * @ORM\Column(name="perf_empresarial", type="string", length=255)
     */
    private $perfEmpresarial;

    /**
     * @var string
     *
     * @ORM\Column(name="enc_almacen", type="string", length=255)
     */
    private $encAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="tecnico", type="string", length=255)
     */
    private $tecnico;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo_energetico", type="string", length=255)
     */
    private $grupoEnergetico;

    /**
     * @var string
     *
     * @ORM\Column(name="retribucion_comp20", type="string", length=255)
     */
    private $retribucionComp20;

    /**
     * @var string
     *
     * @ORM\Column(name="retribucion_comp30", type="string", length=255)
     */
    private $retribucionComp30;

    /**
     * @var string
     *
     * @ORM\Column(name="otros_pagos", type="string", length=255)
     */
    private $otrosPagos;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Contrato")
     *@ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     **/
    private $contrato;


    public function __construct(){
       // $this->salarioEscala = 0;
        $this->antiguedad = 0; 
        $this->adicionalDelTurismo = 0;
        $this->perfEmpresarial = 0;  
        $this->encAlmacen = 0; 
        $this->tecnico = 0; 
        $this->grupoEnergetico = 0; 
        $this->retribucionComp20 = 0;
        $this->retribucionComp30 = 0;
        $this->otrosPagos = 0;
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
     * Set salarioEscala
     *
     * @param string $salarioEscala
     *
     * @return Salario
     */
    public function setSalarioEscala($salarioEscala)
    {
        $this->salarioEscala = $salarioEscala;

        return $this;
    }

    /**
     * Get salarioEscala
     *
     * @return string
     */
    public function getSalarioEscala()
    {
        return $this->salarioEscala;
    }

    /**
     * Set antiguedad
     *
     * @param string $antiguedad
     *
     * @return Salario
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return string
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set adicionalDelTurismo
     *
     * @param string $adicionalDelTurismo
     *
     * @return Salario
     */
    public function setAdicionalDelTurismo($adicionalDelTurismo)
    {
        $this->adicionalDelTurismo = $adicionalDelTurismo;

        return $this;
    }

    /**
     * Get adicionalDelTurismo
     *
     * @return string
     */
    public function getAdicionalDelTurismo()
    {
        return $this->adicionalDelTurismo;
    }

    /**
     * Set perfEmpresarial
     *
     * @param string $perfEmpresarial
     *
     * @return Salario
     */
    public function setPerfEmpresarial($perfEmpresarial)
    {
        $this->perfEmpresarial = $perfEmpresarial;

        return $this;
    }

    /**
     * Get perfEmpresarial
     *
     * @return string
     */
    public function getPerfEmpresarial()
    {
        return $this->perfEmpresarial;
    }

    /**
     * Set encAlmacen
     *
     * @param string $encAlmacen
     *
     * @return Salario
     */
    public function setEncAlmacen($encAlmacen)
    {
        $this->encAlmacen = $encAlmacen;

        return $this;
    }

    /**
     * Get encAlmacen
     *
     * @return string
     */
    public function getEncAlmacen()
    {
        return $this->encAlmacen;
    }

    /**
     * Set tecnico
     *
     * @param string $tecnico
     *
     * @return Salario
     */
    public function setTecnico($tecnico)
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    /**
     * Get tecnico
     *
     * @return string
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * Set grupoEnergetico
     *
     * @param string $grupoEnergetico
     *
     * @return Salario
     */
    public function setGrupoEnergetico($grupoEnergetico)
    {
        $this->grupoEnergetico = $grupoEnergetico;

        return $this;
    }

    /**
     * Get grupoEnergetico
     *
     * @return string
     */
    public function getGrupoEnergetico()
    {
        return $this->grupoEnergetico;
    }

    /**
     * Set retribucionComp20
     *
     * @param string $retribucionComp20
     *
     * @return Salario
     */
    public function setRetribucionComp20($retribucionComp20)
    {
        $this->retribucionComp20 = $retribucionComp20;

        return $this;
    }

    /**
     * Get retribucionComp20
     *
     * @return string
     */
    public function getRetribucionComp20()
    {
        return $this->retribucionComp20;
    }

    /**
     * Set retribucionComp30
     *
     * @param string $retribucionComp30
     *
     * @return Salario
     */
    public function setRetribucionComp30($retribucionComp30)
    {
        $this->retribucionComp30 = $retribucionComp30;

        return $this;
    }

    /**
     * Get retribucionComp30
     *
     * @return string
     */
    public function getRetribucionComp30()
    {
        return $this->retribucionComp30;
    }

    /**
     * Set otrosPagos
     *
     * @param string $otrosPagos
     *
     * @return Salario
     */
    public function setOtrosPagos($otrosPagos)
    {
        $this->otrosPagos = $otrosPagos;

        return $this;
    }

    /**
     * Get otrosPagos
     *
     * @return string
     */
    public function getOtrosPagos()
    {
        return $this->otrosPagos;
    }

    /**
     * Set contrato
     *
     * @param \RRHHBundle\Entity\Contrato $contrato
     *
     * @return Salario
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
