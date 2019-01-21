<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 *
 * @ORM\Table(name="responsable")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\ResponsableRepository")
 */
class Responsable
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
     * @ORM\Column(name="responsable", type="string", length=100)
     */
    private $responsable;    

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Local")
     *@ORM\JoinColumn(name="local_id", referencedColumnName="id")
     **/
    private $local;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Cargo")
     *@ORM\JoinColumn(name="cargo_id", referencedColumnName="id")
     **/
    private $cargo;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Unidad")
     *@ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     **/
    private $unidad;
    

    public function __construct(){
        $this->cargo = '';
        
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
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Responsable
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
     * Set local
     *
     * @param \InformaticaBundle\Entity\Local $local
     *
     * @return Responsable
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
        return $this->getResponsable();
    }

   

    /**
     * Set cargo
     *
     * @param \InformaticaBundle\Entity\Cargo $cargo
     *
     * @return Responsable
     */
    public function setCargo(\InformaticaBundle\Entity\Cargo $cargo = null)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return \InformaticaBundle\Entity\Cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return Responsable
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
