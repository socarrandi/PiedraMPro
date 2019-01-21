<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoEscala
 *
 * @ORM\Table(name="grupo_escala")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\GrupoEscalaRepository")
 */
class GrupoEscala
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
     * @ORM\Column(name="grupo", type="string", length=255)
     */
    private $grupo;

     /**
     * @var string
     *
     * @ORM\Column(name="salario_escala", type="string", length=255)
     */
    private $salarioEscala;


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
     * Set grupo
     *
     * @param string $grupo
     *
     * @return GrupoEscala
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }


    public function __toString(){
        return $this->getGrupo();
    }

    /**
     * Set salarioEscala
     *
     * @param string $salarioEscala
     *
     * @return GrupoEscala
     */
    public function setSalarioEscala($salarioEscala)
    {
        $this->salarioEscala = $salarioEscala;

        return $this;
    }

    /**
     * Get salarioEscala
     *
     * @return string
     */
    public function getSalarioEscala()
    {
        return $this->salarioEscala;
    }
}
