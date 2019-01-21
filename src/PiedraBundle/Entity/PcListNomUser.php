<?php

namespace PiedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PcListNomUser
 *
 * @ORM\Table(name="pc_list_nom_user")
 * @ORM\Entity(repositoryClass="PiedraBundle\Repository\PcListNomUserRepository")
 */
class PcListNomUser
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
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\Pc", inversedBy="PcListNomUser")
     *@ORM\JoinColumn(name="pc_id", referencedColumnName="id")
     **/
    private $pc;

    /**     
     *@ORM\ManyToOne(targetEntity="PiedraBundle\Entity\ListNomUser", inversedBy="PcListNomUser")
     *@ORM\JoinColumn(name="list_nom_user_id", referencedColumnName="id")
     **/
    private $listNomUser;


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
     * @return PcListNomUser
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
     * @return PcListNomUser
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
