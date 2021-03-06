<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioRed
 *
 * @ORM\Table(name="usuario_red")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\UsuarioRedRepository")
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
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Dominio")
     *@ORM\JoinColumn(name="dominio_id", referencedColumnName="id")
     **/
    private $dominio;


    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Departamento")
     *@ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     **/ 
    private $departamento;


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
     * @param \PiedraBundle\Entity\Dominio $dominio
     *
     * @return UsuarioRed
     */
    public function setDominio(\PiedraBundle\Entity\Dominio $dominio = null)
    {
        $this->dominio = $dominio;

        return $this;
    }

    /**
     * Get dominio
     *
     * @return \PiedraBundle\Entity\Dominio
     */
    public function getDominio()
    {
        return $this->dominio;
    }

    /**
     * Set departamento
     *
     * @param \PiedraBundle\Entity\Departamento $departamento
     *
     * @return UsuarioRed
     */
    public function setDepartamento(\PiedraBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \PiedraBundle\Entity\Departamento
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }


    public function __toString(){
       return $this->getUsuario();
    }
}
