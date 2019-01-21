<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoEquipo
 *
 * @ORM\Table(name="estadoequipo")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\EstadoEquipoRepository")
 */
class EstadoEquipo
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
     * @ORM\Column(name="estado", type="string", length=50)
     */
    private $estado;



    public function __toString(){
        return $this->getEstado();
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
     * Set estado
     *
     * @param string $estado
     *
     * @return EstadoEquipo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
