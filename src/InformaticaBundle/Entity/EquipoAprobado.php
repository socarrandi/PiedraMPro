<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipoAprobado
 *
 * @ORM\Table(name="equipo_aprobado")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\EquipoAprobadoRepository")
 */
class EquipoAprobado
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
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\Unidad")
     *@ORM\JoinColumn(name="unidad_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $unidad;

    /**     
     *@ORM\ManyToOne(targetEntity="InformaticaBundle\Entity\TipoEquipo")
     *@ORM\JoinColumn(name="tipo_equipo_id", referencedColumnName="id",onDelete="CASCADE")
     **/
    private $tipoEquipo;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;



    public function __construct(){
        $this->cantidad = 0;
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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return EquipoAprobado
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set unidad
     *
     * @param \InformaticaBundle\Entity\Unidad $unidad
     *
     * @return EquipoAprobado
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
     * Set tipoEquipo
     *
     * @param \InformaticaBundle\Entity\TipoEquipo $tipoEquipo
     *
     * @return EquipoAprobado
     */
    public function setTipoEquipo(\InformaticaBundle\Entity\TipoEquipo $tipoEquipo = null)
    {
        $this->tipoEquipo = $tipoEquipo;

        return $this;
    }

    /**
     * Get tipoEquipo
     *
     * @return \InformaticaBundle\Entity\TipoEquipo
     */
    public function getTipoEquipo()
    {
        return $this->tipoEquipo;
    }
}
