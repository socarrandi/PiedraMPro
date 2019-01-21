<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListNomUser
 *
 * @ORM\Table(name="list_nom_user")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\ListNomUserRepository")
 */
class ListNomUser
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
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;



    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Cargo")
     *@ORM\JoinColumn(name="cargo_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $cargo;

    
    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\usuarioRed")
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
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;


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
     * @return ListNomUser
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return ListNomUser
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set navNacional
     *
     * @param boolean $navNacional
     *
     * @return ListNomUser
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
     * @return ListNomUser
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
     * @return ListNomUser
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
     * @return ListNomUser
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
     * @return ListNomUser
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
     * @return ListNomUser
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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return ListNomUser
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set cargo
     *
     * @param \PiedraBundle\Entity\Cargo $cargo
     *
     * @return ListNomUser
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
     * @param \PiedraBundle\Entity\usuarioRed $usuarioRed
     *
     * @return ListNomUser
     */
    public function setUsuarioRed(\PiedraBundle\Entity\usuarioRed $usuarioRed = null)
    {
        $this->usuarioRed = $usuarioRed;

        return $this;
    }

    /**
     * Get usuarioRed
     *
     * @return \PiedraBundle\Entity\usuarioRed
     */
    public function getUsuarioRed()
    {
        return $this->usuarioRed;
    }
}
