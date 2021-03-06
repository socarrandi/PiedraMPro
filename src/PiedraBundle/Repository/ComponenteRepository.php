<?php

namespace PiedraBundle\Repository;

/**
 * ComponenteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ComponenteRepository extends \Doctrine\ORM\EntityRepository
{



	/*
    * listado componetes
    */
    public function getComponentes(){

        $em= $this->getEntityManager();
        $dql ='SELECT c.id, c.componente FROM PiedraBundle:Componente c';
        $componentes = $em->createQuery($dql);       

        return $componentes->getResult(); 
    }

    /*
    * listado componetes
    */
    public function getComponentesDefault(){

        $em= $this->getEntityManager();
        $dql ='SELECT c FROM PiedraBundle:Componente c WHERE c.id IN (2,3,4,5,6)';
        $componentes = $em->createQuery($dql);       

        return $componentes->getResult(); 
    }
}
