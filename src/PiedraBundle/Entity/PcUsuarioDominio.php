<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PcUsuarioDominio
 *
 * @ORM\Table(name="pc_usuario_dominio")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\PcUsuarioDominioRepository")
 */
class PcUsuarioDominio
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
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Pc")
     *@ORM\JoinColumn(name="pc_id", referencedColumnName="id")
     **/
    private $pc;

    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\UsuarioDominio")
     *@ORM\JoinColumn(name="usuarioDominio", referencedColumnName="id")
     **/
    private $usuarioDominio;


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
     * Set pc
     *
     * @param \PiedraBundle\Entity\Pc $pc
     *
     * @return PcUsuarioDominio
     */
    public function setPc(\PiedraBundle\Entity\Pc $pc = null)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return \PiedraBundle\Entity\Pc
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set listNomUser
     *
     * @param \PiedraBundle\Entity\ListNomUser $listNomUser
     *
     * @return PcUsuarioDominio
     */
    public function setListNomUser(\PiedraBundle\Entity\ListNomUser $listNomUser = null)
    {
        $this->listNomUser = $listNomUser;

        return $this;
    }

    /**
     * Get listNomUser
     *
     * @return \PiedraBundle\Entity\ListNomUser
     */
    public function getListNomUser()
    {
        return $this->listNomUser;
    }
}
