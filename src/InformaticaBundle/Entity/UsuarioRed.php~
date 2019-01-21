<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioRed
 *
 * @ORM\Table(name="usuario_red")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\UsuarioRedRepository")
 */
class UsuarioRed
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
     * @ORM\Column(name="usuario", type="string", length=255)
     */
    private $usuario;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Dominio")
     *@ORM\JoinColumn(name="dominio_id", referencedColumnName="id")
     **/
    private $dominio;


    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Local")
     *@ORM\JoinColumn(name="local_id", referencedColumnName="id")
     **/ 
    private $local;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Unidad")
     *@ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     **/
    private $unidad;


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
     * Set usuario
     *
     * @param string $usuario
     *
     * @return UsuarioRed
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

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
     * Set local
     *
     * @param \InformaticaBundle\Entity\Local $local
     *
     * @return UsuarioRed
     */
    public function setLocal(\InformaticaBundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \InformaticaBundle\Entity\Local
     */
    public function getLocal()
    {
        return $this->local;
    }


    public function __toString(){
       return $this->getUsuario();
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return UsuarioRed
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
