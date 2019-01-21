<?php
namespace InformaticaBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Table(name="usuario") 
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface, \Serializable {
    
    public function getSalt()
    {
        return $this->salt;
    }
    public function getPassword()   
    {
        return $this->password;
    }    
    public function getUsername()  
    {
        return $this->username;
    }
    
    public function getRoles()
    {
        return $this->groups->toArray();
    }
    
    public function eraseCredentials()
    {
        return false;
    }
    public function isEqualTo(UserInterface $user)
    {
        return $this->id === $user->getId();
    }
    
    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->active;
    }
    
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */     
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $username;    
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()  
     */
    protected $password;
    
    /**
     * @ORM\Column(name="active", type="boolean")
     */
    protected $active;

    /**
     * @ORM\Column(name="salt", type="string", length=32)
     */
    protected $salt;
    
    /**
     * @ORM\Column(name="name", type="string")
     * @Assert\NotBlank() 
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank() 
     */
    protected $avatar;

    /**
     * @var \DateTime
    
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;

     /**
     * @var \DateTime
    
     * @ORM\Column(name="fecha_modificacion", type="datetime")
     */
    private $fechaModificacion;

     /**
     * @var \DateTime    
     * @ORM\Column(name="edad", type="datetime")
     */
    protected $edad;

    /**
     * @ORM\Column(name="email", type="string")
     * @Assert\NotBlank() 
     */
    protected $email;


    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Unidad")
     *@ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     **/
    private $unidad;  

        
    /**
     * @ORM\ManyToMany(targetEntity="Rol", inversedBy="users")
     *
     */
    protected $groups;

  
    public function __construct()
    {   

        $this->active = FALSE;

        $this->salt = "";
        $this->avatar = "";
        $this->groups = new ArrayCollection();  

        $hoy = new \DateTime('now');    
        $this->fechaModificacion = $hoy;  
        $this->fechaInicio = $hoy;
    }


    
    
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,    
        ) = unserialize($serialized);
    }
   

    /**
     * Add groups
     *
     * @param \InformaticaBundle\Entity\Rol $groups
     * @return Usuario
     */
    public function addGroup(\InformaticaBundle\Entity\Rol $groups)
    {
        $this->groups[] = $groups;
    
        return $this;
    }

    /**
     * Remove groups
     *
     * @param \InformaticaBundle\Entity\Rol $groups
     */
    public function removeGroup(\InformaticaBundle\Entity\Rol $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
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
     * Set username
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Usuario
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Usuario
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Usuario
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return Usuario
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

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Usuario
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Usuario
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set edad
     *
     * @param \DateTime $edad
     *
     * @return Usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return \DateTime
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
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
}
