<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioDominio
 *
 * @ORM\Table(name="usuario_dominio")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\UsuarioDominioRepository")
 */
class UsuarioDominio
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

     /**
     * @var string
     *
     * @ORM\Column(name="primer_apellido", type="string", length=255)
     */
    private $primerApellido;

     /**
     * @var string
     *
     * @ORM\Column(name="segundo_apellido", type="string", length=255)
     */
    private $segundoApellido;


    /**
     * @var int
     *
     * @ORM\Column(name="ci", type="string", length=11)
     */
    private $ci;
    
    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Email")
     *@ORM\JoinColumn(name="email_id", referencedColumnName="id")
     **/
    private $email;

    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Cargo")
     *@ORM\JoinColumn(name="cargo_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $cargo;

    
    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\UsuarioRed")
     *@ORM\JoinColumn(name="usuario_red_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $usuarioRed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="navNacional", type="boolean")
     */
    private $navNacional;

    /**
     * @var boolean
     *
     * @ORM\Column(name="navInternet", type="boolean")
     */
    private $navInternet;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailNacional", type="boolean")
     */
    private $emailNacional;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailInternet", type="boolean")
     */
    private $emailInternet;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ftp", type="boolean")
     */
    private $ftp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chat", type="boolean")
     */
    private $chat;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="baja", type="boolean")
     */
    private $baja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


    public function __construct(){
        $this->observacion = '';
        $this->navNacional = false;
        $this->navInternet = false;
        $this->emailNacional = false;
        $this->emailInternet = false;
        $this->ftp = false;
        $this->chat = false;
        $this->baja = false;
        $this->fecha = Date('now');    
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return UsuarioDominio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    

    /**
     * Set navNacional
     *
     * @param boolean $navNacional
     *
     * @return UsuarioDominio
     */
    public function setNavNacional($navNacional)
    {
        $this->navNacional = $navNacional;

        return $this;
    }

    /**
     * Get navNacional
     *
     * @return boolean
     */
    public function getNavNacional()
    {
        return $this->navNacional;
    }

    /**
     * Set navInternet
     *
     * @param boolean $navInternet
     *
     * @return UsuarioDominio
     */
    public function setNavInternet($navInternet)
    {
        $this->navInternet = $navInternet;

        return $this;
    }

    /**
     * Get navInternet
     *
     * @return boolean
     */
    public function getNavInternet()
    {
        return $this->navInternet;
    }

    /**
     * Set emailNacional
     *
     * @param boolean $emailNacional
     *
     * @return UsuarioDominio
     */
    public function setEmailNacional($emailNacional)
    {
        $this->emailNacional = $emailNacional;

        return $this;
    }

    /**
     * Get emailNacional
     *
     * @return boolean
     */
    public function getEmailNacional()
    {
        return $this->emailNacional;
    }

    /**
     * Set emailInternet
     *
     * @param boolean $emailInternet
     *
     * @return UsuarioDominio
     */
    public function setEmailInternet($emailInternet)
    {
        $this->emailInternet = $emailInternet;

        return $this;
    }

    /**
     * Get emailInternet
     *
     * @return boolean
     */
    public function getEmailInternet()
    {
        return $this->emailInternet;
    }

    /**
     * Set ftp
     *
     * @param boolean $ftp
     *
     * @return UsuarioDominio
     */
    public function setFtp($ftp)
    {
        $this->ftp = $ftp;

        return $this;
    }

    /**
     * Get ftp
     *
     * @return boolean
     */
    public function getFtp()
    {
        return $this->ftp;
    }

    /**
     * Set chat
     *
     * @param boolean $chat
     *
     * @return UsuarioDominio
     */
    public function setChat($chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return boolean
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return UsuarioDominio
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set cargo
     *
     * @param \PiedraBundle\Entity\Cargo $cargo
     *
     * @return UsuarioDominio
     */
    public function setCargo(\PiedraBundle\Entity\Cargo $cargo = null)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return \PiedraBundle\Entity\Cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set usuarioRed
     *
     * @param \PiedraBundle\Entity\UsuarioRed $usuarioRed
     *
     * @return UsuarioDominio
     */
    public function setUsuarioRed(\PiedraBundle\Entity\UsuarioRed $usuarioRed = null)
    {
        $this->usuarioRed = $usuarioRed;

        return $this;
    }

    /**
     * Get usuarioRed
     *
     * @return \PiedraBundle\Entity\UsuarioRed
     */
    public function getUsuarioRed()
    {
        return $this->usuarioRed;
    }

    

    /**
     * Set email
     *
     * @param \PiedraBundle\Entity\Email $email
     *
     * @return UsuarioDominio
     */
    public function setEmail(\PiedraBundle\Entity\Email $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \PiedraBundle\Entity\Email
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Set baja
     *
     * @param boolean $baja
     *
     * @return UsuarioDominio
     */
    public function setBaja($baja)
    {
        $this->baja = $baja;

        return $this;
    }

    /**
     * Get baja
     *
     * @return boolean
     */
    public function getBaja()
    {
        return $this->baja;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     *
     * @return UsuarioDominio
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     *
     * @return UsuarioDominio
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }




    /**
     * Set ci
     *
     * @param string $ci
     *
     * @return UsuarioDominio
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string
     */
    public function getCi()
    {
        return $this->ci;
    }



    public function __toString(){
        return $this->getNombre().' '.$this->getPrimerApellido().' '.$this->getSegundoApellido();
    }


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return UsuarioDominio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
