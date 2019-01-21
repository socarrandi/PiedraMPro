<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Local
 *
 * @ORM\Table(name="local")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\LocalRepository")
 */
class Local
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
     * @var int
     *
     * @ORM\Column(name="id_area_aft", type="integer")
     */
    private $id_area_aft;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo",  type="string", length=100)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Local", type="string", length=255)
     */
    private $local;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Area")
     *@ORM\JoinColumn(name="area_id", referencedColumnName="id")
     **/
    private $area;

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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Local
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set local
     *
     * @param string $local
     *
     * @return Local
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set area
     *
     * @param \InformaticaBundle\Entity\Area $area
     *
     * @return Local
     */
    public function setArea(\InformaticaBundle\Entity\Area $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \InformaticaBundle\Entity\Area
     */
    public function getArea()
    {
        return $this->area;
    }

    public function __toString(){
        return $this->getLocal();
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return Local
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
     * Set idAreaAft
     *
     * @param integer $idAreaAft
     *
     * @return Local
     */
    public function setIdAreaAft($idAreaAft)
    {
        $this->id_area_aft = $idAreaAft;

        return $this;
    }

    /**
     * Get idAreaAft
     *
     * @return integer
     */
    public function getIdAreaAft()
    {
        return $this->id_area_aft;
    }
}
