<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\EmailRepository")
 */
class Email
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Dominio")
     *@ORM\JoinColumn(name="dominio_id", referencedColumnName="id")
     **/
    private $dominio;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Unidad")
     *@ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     **/
    private $unidad;

    /**
     * Set dominio
     *
     * @param \InformaticaBundle\Entity\Dominio $dominio
     *
     * @return UsuarioRed
     */
    public function setDominio(\InformaticaBundle\Entity\Dominio $dominio = null)
    {
        $this->dominio = $dominio;

        return $this;
    }

    /**
     * Get dominio
     *
     * @return \InformaticaBundle\Entity\Dominio
     */
    public function getDominio()
    {
        return $this->dominio;
    }

    /**
     * @var bool
     *
     * @ORM\Column(name="is_direccion", type="boolean")
     */
    private $isDireccion;

     public function __construct(){
        $this->isDireccion = false;        
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
     * Set email
     *
     * @param string $email
     *
     * @return Email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function __toString(){
        return $this->getEmail();
    }

    /**
     * Set isDireccion
     *
     * @param boolean $isDireccion
     *
     * @return Email
     */
    public function setIsDireccion($isDireccion)
    {
        $this->isDireccion = $isDireccion;

        return $this;
    }

    /**
     * Get isDireccion
     *
     * @return boolean
     */
    public function getIsDireccion()
    {
        return $this->isDireccion;
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return Email
     */
    public function setUnidad(\InformaticaBundle\Entity\Unidad $unidad = null)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return \InformaticaBundle\Entity\Unidad
     */
    public function getUnidad()
    {
        return $this->unidad;
    }
}
