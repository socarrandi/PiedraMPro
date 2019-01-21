<?php

namespace RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaOcup
 *
 * @ORM\Table(name="categoria_ocup")
 * @ORM\Entity(repositoryClass="RRHHBundle\Repository\CategoriaOcupRepository")
 */
class CategoriaOcup
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
     * @ORM\Column(name="categoria", type="string", length=255)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="abr", type="string", length=255)
     */
    private $abr;


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
     * Set categoria
     *
     * @param string $categoria
     *
     * @return CategoriaOcup
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set abr
     *
     * @param string $abr
     *
     * @return CategoriaOcup
     */
    public function setAbr($abr)
    {
        $this->abr = $abr;

        return $this;
    }

    /**
     * Get abr
     *
     * @return string
     */
    public function getAbr()
    {
        return $this->abr;
    }

     public function __toString(){
        return $this->getCategoria();
    }
}
