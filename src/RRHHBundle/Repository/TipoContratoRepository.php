<?php

namespace RRHHBundle\Repository;

/**
 * TipoContratoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TipoContratoRepository extends \Doctrine\ORM\EntityRepository
{


	/*
	* Listado Tipo de Contrato
	*/
	public function getTipoContrato(){
		$em= $this->getEntityManager();      
        $dql = 'SELECT tc.id, tc.tipo , tc.abr FROM RRHHBundle:TipoContrato tc ORDER By tc.id ASC ';
        $dql = $em->createQuery($dql); 
        return $dql->getResult();        
	}

	
}
