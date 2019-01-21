<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubLocal
 *
 * @ORM\Table(name="sub_local")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\SubLocalRepository")
 */
class SubLocal
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
     * @ORM\Column(name="subLocal", type="string", length=255)
     */
    private $subLocal;

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
     * @var int
     *
     * @ORM\Column(name="codigo",  type="string", length=100)
     */
    private $codigo;


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
     * Set subLocal
     *
     * @param string $subLocal
     *
     * @return SubLocal
     */
    public function setSubLocal($subLocal)
    {
        $this->subLocal = $subLocal;

        return $this;
    }

    /**
     * Get subLocal
     *
     * @return string
     */
    public function getSubLocal()
    {
        return $this->subLocal;
    }


    /**
     * Set local
     *
     * @param \InformaticaBundle\Entity\Local $local
     *
     * @return SubLocal
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

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return SubLocal
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return SubLocal
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
