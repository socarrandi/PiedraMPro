<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\HotelRepository")
 */
class Hotel
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
     * @ORM\Column(name="Hotel", type="string", length=35)
     */
    private $hotel;

    /**
     * @var string
     *
     * @ORM\Column(name="Proveedor", type="string", length=35)
     */
    private $proveedor;

    /**
     * @var bool
     *
     * @ORM\Column(name="enlaceaft", type="boolean")
     */
    private $enlaceAFT;

    /**
     * @var string
     *
     * @ORM\Column(name="servidoraft", type="string", length=40)
     */
    private $servidorAFT;

    /**
     * @var string
     *
     * @ORM\Column(name="baseaft", type="string", length=40)
     */
    private $baseAFT;

    /**
     * @var string
     *
     * @ORM\Column(name="usuarioaft", type="string", length=40)
     */
    private $usuarioAFT;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordaft", type="string", length=40)
     */
    private $passwordAFT;

    /**
     * @var string
     *
     * @ORM\Column(name="genericoaft", type="string", length=250)
     */
    private $genericoAFT;

    /**
     * @var bool
     *
     * @ORM\Column(name="enc", type="boolean")
     */
    private $enc;


    public function __construct(){
        $this->hotel = '';
        $this->proveedor = '';
        $this->enlaceAFT = true;
        $this->servidorAFT = '';
        $this->baseAFT = '';
        $this->usuarioAFT = '';
        $this->passwordAFT = '';
        $this->genericoAFT = '';
        $this->enc = true;
        
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set hotel
     *
     * @param string $hotel
     *
     * @return Hotel
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get hotel
     *
     * @return string
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set proveedor
     *
     * @param string $proveedor
     *
     * @return Hotel
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return string
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set enlaceAFT
     *
     * @param boolean $enlaceAFT
     *
     * @return Hotel
     */
    public function setEnlaceAFT($enlaceAFT)
    {
        $this->enlaceAFT = $enlaceAFT;

        return $this;
    }

    /**
     * Get enlaceAFT
     *
     * @return boolean
     */
    public function getEnlaceAFT()
    {
        return $this->enlaceAFT;
    }

    /**
     * Set servidorAFT
     *
     * @param string $servidorAFT
     *
     * @return Hotel
     */
    public function setServidorAFT($servidorAFT)
    {
        $this->servidorAFT = $servidorAFT;

        return $this;
    }

    /**
     * Get servidorAFT
     *
     * @return string
     */
    public function getServidorAFT()
    {
        return $this->servidorAFT;
    }

    /**
     * Set baseAFT
     *
     * @param string $baseAFT
     *
     * @return Hotel
     */
    public function setBaseAFT($baseAFT)
    {
        $this->baseAFT = $baseAFT;

        return $this;
    }

    /**
     * Get baseAFT
     *
     * @return string
     */
    public function getBaseAFT()
    {
        return $this->baseAFT;
    }

    /**
     * Set usuarioAFT
     *
     * @param string $usuarioAFT
     *
     * @return Hotel
     */
    public function setUsuarioAFT($usuarioAFT)
    {
        $this->usuarioAFT = $usuarioAFT;

        return $this;
    }

    /**
     * Get usuarioAFT
     *
     * @return string
     */
    public function getUsuarioAFT()
    {
        return $this->usuarioAFT;
    }

    /**
     * Set passwordAFT
     *
     * @param string $passwordAFT
     *
     * @return Hotel
     */
    public function setPasswordAFT($passwordAFT)
    {
        $this->passwordAFT = $passwordAFT;

        return $this;
    }

    /**
     * Get passwordAFT
     *
     * @return string
     */
    public function getPasswordAFT()
    {
        return $this->passwordAFT;
    }

    /**
     * Set genericoAFT
     *
     * @param string $genericoAFT
     *
     * @return Hotel
     */
    public function setGenericoAFT($genericoAFT)
    {
        $this->genericoAFT = $genericoAFT;

        return $this;
    }

    /**
     * Get genericoAFT
     *
     * @return string
     */
    public function getGenericoAFT()
    {
        return $this->genericoAFT;
    }

    /**
     * Set enc
     *
     * @param boolean $enc
     *
     * @return Hotel
     */
    public function setEnc($enc)
    {
        $this->enc = $enc;

        return $this;
    }

    /**
     * Get enc
     *
     * @return boolean
     */
    public function getEnc()
    {
        return $this->enc;
    }
}
