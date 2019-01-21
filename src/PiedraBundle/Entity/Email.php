<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\EmailRepository")
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
}
