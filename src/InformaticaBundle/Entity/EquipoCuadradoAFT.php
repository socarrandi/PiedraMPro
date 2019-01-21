<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipoCuadradoAFT
 *
 * @ORM\Table(name="equipocuadradoaft")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\EquipoCuadradoAFTRepository")
 */
class EquipoCuadradoAFT
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
     * @ORM\Column(name="ctipoequipo", type="string", length=40)
     */
    private $ctipoequipo;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=140)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroinventario", type="string", length=30)
     */
    private $numeroinventarioEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_inventario", type="string", length=25)
     */
    private $numeroInventarioPP;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_submayor", type="string", length=50)
     */
    private $descSubmayor;

    /**
     * @var string
     *
     * @ORM\Column(name="localizacion", type="string", length=150)
     */
    private $localizacion;


    

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
     * Set ctipoequipo
     *
     * @param string $ctipoequipo
     *
     * @return EquipoCuadradoAFT
     */
    public function setCtipoequipo($ctipoequipo)
    {
        $this->ctipoequipo = $ctipoequipo;

        return $this;
    }

    /**
     * Get ctipoequipo
     *
     * @return string
     */
    public function getCtipoequipo()
    {
        return $this->ctipoequipo;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     *
     * @return EquipoCuadradoAFT
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set numeroinventarioEquipo
     *
     * @param string $numeroinventarioEquipo
     *
     * @return EquipoCuadradoAFT
     */
    public function setNumeroinventarioEquipo($numeroinventarioEquipo)
    {
        $this->numeroinventarioEquipo = $numeroinventarioEquipo;

        return $this;
    }

    /**
     * Get numeroinventarioEquipo
     *
     * @return string
     */
    public function getNumeroinventarioEquipo()
    {
        return $this->numeroinventarioEquipo;
    }

    /**
     * Set numeroInventarioPP
     *
     * @param string $numeroInventarioPP
     *
     * @return EquipoCuadradoAFT
     */
    public function setNumeroInventarioPP($numeroInventarioPP)
    {
        $this->numeroInventarioPP = $numeroInventarioPP;

        return $this;
    }

    /**
     * Get numeroInventarioPP
     *
     * @return string
     */
    public function getNumeroInventarioPP()
    {
        return $this->numeroInventarioPP;
    }

    /**
     * Set descSubmayor
     *
     * @param string $descSubmayor
     *
     * @return EquipoCuadradoAFT
     */
    public function setDescSubmayor($descSubmayor)
    {
        $this->descSubmayor = $descSubmayor;

        return $this;
    }

    /**
     * Get descSubmayor
     *
     * @return string
     */
    public function getDescSubmayor()
    {
        return $this->descSubmayor;
    }

    /**
     * Set localizacion
     *
     * @param string $localizacion
     *
     * @return EquipoCuadradoAFT
     */
    public function setLocalizacion($localizacion)
    {
        $this->localizacion = $localizacion;

        return $this;
    }

    /**
     * Get localizacion
     *
     * @return string
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
    }
}
