<?php

namespace InformaticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Toner
 *
 * @ORM\Table(name="toner")
 * @ORM\Entity(repositoryClass="InformaticaBundle\Repository\TonerRepository")
 */
class Toner
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
     * @ORM\Column(name="codtoner", type="string", length=8)
     */
    private $codtoner;

    /**
     * @var string
     *
     * @ORM\Column(name="toner", type="string", length=50)
     */
    private $toner;



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
     * Set codtoner
     *
     * @param string $codtoner
     *
     * @return Toner
     */
    public function setCodtoner($codtoner)
    {
        $this->codtoner = $codtoner;

        return $this;
    }

    /**
     * Get codtoner
     *
     * @return string
     */
    public function getCodtoner()
    {
        return $this->codtoner;
    }

    /**
     * Set toner
     *
     * @param string $toner
     *
     * @return Toner
     */
    public function setToner($toner)
    {
        $this->toner = $toner;

        return $this;
    }

    /**
     * Get toner
     *
     * @return string
     */
    public function getToner()
    {
        return $this->toner;
    }
}
