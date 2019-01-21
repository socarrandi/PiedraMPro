<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pieza
 *
 * @ORM\Table(name="pieza")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\PiezaRepository")
 */
class Pieza
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
     * @ORM\Column(name="pieza", type="string", length=30)
     */
    private $pieza;    

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    

    public function __construct(){
        $this->tipo = false ;
        
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
     * Set pieza
     *
     * @param string $pieza
     *
     * @return Pieza
     */
    public function setPieza($pieza)
    {
        $this->pieza = $pieza;

        return $this;
    }

    /**
     * Get pieza
     *
     * @return string
     */
    public function getPieza()
    {
        return $this->pieza;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Pieza
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
