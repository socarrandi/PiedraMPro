<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pc
 *
 * @ORM\Table(name="pc")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\PcRepository")
 */
class Pc
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
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Dominio")
     *@ORM\JoinColumn(name="dominio_id", referencedColumnName="id")
     **/
    private $dominio;

     /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Departamento")
     *@ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     **/
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrePc", type="string", length=255)
     */
    private $nombrePc;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="mascara", type="string", length=255)
     */
    private $mascara;

    /**
     * @var string
     *
     * @ORM\Column(name="puertaEnlace", type="string", length=255)
     */
    private $puertaEnlace;


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
     * Set dominio
     *
     * @param integer $dominio
     *
     * @return Pc
     */
    public function setDominio($dominio)
    {
        $this->dominio = $dominio;

        return $this;
    }

    /**
     * Get dominio
     *
     * @return int
     */
    public function getDominio()
    {
        return $this->dominio;
    }

    /**
     * Set nombrePc
     *
     * @param string $nombrePc
     *
     * @return Pc
     */
    public function setNombrePc($nombrePc)
    {
        $this->nombrePc = $nombrePc;

        return $this;
    }

    /**
     * Get nombrePc
     *
     * @return string
     */
    public function getNombrePc()
    {
        return $this->nombrePc;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Pc
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set mascara
     *
     * @param string $mascara
     *
     * @return Pc
     */
    public function setMascara($mascara)
    {
        $this->mascara = $mascara;

        return $this;
    }

    /**
     * Get mascara
     *
     * @return string
     */
    public function getMascara()
    {
        return $this->mascara;
    }

    /**
     * Set puertaEnlace
     *
     * @param string $puertaEnlace
     *
     * @return Pc
     */
    public function setPuertaEnlace($puertaEnlace)
    {
        $this->puertaEnlace = $puertaEnlace;

        return $this;
    }

    /**
     * Get puertaEnlace
     *
     * @return string
     */
    public function getPuertaEnlace()
    {
        return $this->puertaEnlace;
    }

    /**
     * Set departamento
     *
     * @param \PiedraBundle\Entity\Departamento $departamento
     *
     * @return Pc
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


    public function __toString(){
        return $this->getNombrePc();
    }
}
