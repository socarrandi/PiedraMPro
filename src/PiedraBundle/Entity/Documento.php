<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 *
 * @ORM\Table(name="documento")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\DocumentoRepository")
 */
class Documento
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
     * @ORM\Column(name="nombre_doc", type="string", length=255)
     */
    private $nombreDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="url_archivo", type="string", length=255)
     */
    private $urlArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="ext_archivo", type="string", length=255)
     */
    private $extArchivo;

    /**
     * @var text
     *
     * @ORM\Column(name="imgArchivo", type="text")
     */
    private $imgArchivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Organismo")
     *@ORM\JoinColumn(name="organismo_id", referencedColumnName="id")
     **/
    private $organismo;

    public function __construct(){
        $this->fecha = date('now');
    }


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
     * Set nombreDoc
     *
     * @param string $nombreDoc
     *
     * @return Documento
     */
    public function setNombreDoc($nombreDoc)
    {
        $this->nombreDoc = $nombreDoc;

        return $this;
    }

    /**
     * Get nombreDoc
     *
     * @return string
     */
    public function getNombreDoc()
    {
        return $this->nombreDoc;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Documento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set urlArchivo
     *
     * @param string $urlArchivo
     *
     * @return Documento
     */
    public function setUrlArchivo($urlArchivo)
    {
        $this->urlArchivo = $urlArchivo;

        return $this;
    }

    /**
     * Get urlArchivo
     *
     * @return string
     */
    public function getUrlArchivo()
    {
        return $this->urlArchivo;
    }

    /**
     * Set extArchivo
     *
     * @param string $extArchivo
     *
     * @return Documento
     */
    public function setExtArchivo($extArchivo)
    {
        $this->extArchivo = $extArchivo;

        return $this;
    }

    /**
     * Get extArchivo
     *
     * @return string
     */
    public function getExtArchivo()
    {
        return $this->extArchivo;
    }

    /**
     * Set imgArchivo
     *
     * @param string $imgArchivo
     *
     * @return Documento
     */
    public function setImgArchivo($imgArchivo)
    {
        $this->imgArchivo = $imgArchivo;

        return $this;
    }

    /**
     * Get imgArchivo
     *
     * @return string
     */
    public function getImgArchivo()
    {
        return $this->imgArchivo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Documento
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
     * Set organismo
     *
     * @param \PiedraBundle\Entity\Organismo $organismo
     *
     * @return Documento
     */
    public function setOrganismo(\PiedraBundle\Entity\Organismo $organismo = null)
    {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo
     *
     * @return \PiedraBundle\Entity\Organismo
     */
    public function getOrganismo()
    {
        return $this->organismo;
    }
}
