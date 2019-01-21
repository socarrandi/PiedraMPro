<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordSetup
 *
 * @ORM\Table(name="password_setup")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\PasswordSetupRepository")
 */
class PasswordSetup
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
     * @ORM\Column(name="area", type="string", length=255)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="pc", type="string", length=255)
     */
    private $pc;
   

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_administrativa", type="boolean")
     */
    private $isAdministrativa;



    public function __construct(){
        $this->isAdministrativa = false;
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
     * Set area
     *
     * @param string $area
     *
     * @return PasswordSetup
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set pc
     *
     * @param string $pc
     *
     * @return PasswordSetup
     */
    public function setPc($pc)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return string
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return PasswordSetup
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isAdministrativa
     *
     * @param boolean $isAdministrativa
     *
     * @return PasswordSetup
     */
    public function setIsAdministrativa($isAdministrativa)
    {
        $this->isAdministrativa = $isAdministrativa;

        return $this;
    }

    /**
     * Get isAdministrativa
     *
     * @return boolean
     */
    public function getIsAdministrativa()
    {
        return $this->isAdministrativa;
    }
}
