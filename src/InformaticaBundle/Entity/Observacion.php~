<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observacion
 *
 * @ORM\Table(name="observacion")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\ObservacionRepository")
 */
class Observacion
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
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\TipoEquipo")
     *@ORM\JoinColumn(name="idEquipo", referencedColumnName="id")
     **/
    private $idEquipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="onservacion", type="string", length=255)
     */
    private $onservacion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=35)
     */
    private $usuario;
   

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Observacion
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

    /**
     * Set onservacion
     *
     * @param string $onservacion
     *
     * @return Observacion
     */
    public function setOnservacion($onservacion)
    {
        $this->onservacion = $onservacion;

        return $this;
    }


    /**
     * Get onservacion
     *
     * @return string
     */
    public function getOnservacion()
    {
        return $this->onservacion;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Observacion
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
     * Set idEquipo
     *
     * @param \InformaticaBundle\Entity\TipoEquipo $idEquipo
     *
     * @return Observacion
     */
    public function setIdEquipo(\InformaticaBundle\Entity\TipoEquipo $idEquipo = null)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return \InformaticaBundle\Entity\TipoEquipo
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }
}
