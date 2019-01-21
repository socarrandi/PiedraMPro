<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="municipio")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\MunicipioRepository")
 */
class Municipio
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
     * @ORM\Column(name="municipio", type="string", length=255)
     */
    private $municipio;

    /**     
     *@ORM\ManyToOne(targetEntity="RRHHBundle\Entity\Provincia")
     *@ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     **/ 
    private $provincia;


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
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
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
     * @return Municipio
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


    public function __toString(){
        return $this->getMunicipio();
    }
}
