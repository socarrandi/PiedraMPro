<?php

namespace PiedraBundle\Repository;

/**
 * InventarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InventarioRepository extends \Doctrine\ORM\EntityRepository
{



	 /*
	 * listado inventario en baja
	 */
	 public function getInventarioBaja(){
	    $em= $this->getEntityManager();

	    $dql ='SELECT i FROM PiedraBundle:Inventario i WHERE i.baja =:true ';
	    $inventario_baja = $em->createQuery($dql);     
	    return  $inventario_baja   				
					->setParameter('true', 1)
					->getResult();          

	}

}