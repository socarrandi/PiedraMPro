<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dominio
 *
 * @ORM\Table(name="dominio")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\DominioRepository")
 */
class Dominio
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
     * @ORM\Column(name="dominio", type="string", length=255)
     */
    private $dominio;


    /**
     * @var string
     *
     * @ORM\Column(name="dns", type="string", length=255)
     */
    private $dns;


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
     * @param string $dominio
     *
     * @return Dominio
     */
    public function setDominio($dominio)
    {
        $this->dominio = $dominio;

        return $this;
    }

    /**
     * Get dominio
     *
     * @return string
     */
    public function getDominio()
    {
        return $this->dominio;
    }


    public function __toString(){
        return $this->getDominio();
    }

    /**
     * Set dns
     *
     * @param string $dns
     *
     * @return Dominio
     */
    public function setDns($dns)
    {
        $this->dns = $dns;

        return $this;
    }

    /**
     * Get dns
     *
     * @return string
     */
    public function getDns()
    {
        return $this->dns;
    }
}
