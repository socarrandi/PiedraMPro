<?php

namespace InformaticaBundle\Repository;

/**
 * MovimientoAFTRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MovimientoAFTRepository extends \Doctrine\ORM\EntityRepository
{


	/*
	* Listado de Moviemintos
	*/
	public function getMovimientosAFT($baja, $unidad, $log){
		$em = $this->getEntityManager();    
		    
        $mov = 'SELECT mov FROM InformaticaBundle:MovimientoAFT mov 
        				   JOIN mov.equipo e 
        				   WHERE e.baja =:baja and e.unidad =:unidad and mov.log=:log ORDER By mov.fecha DESC';
        $mov = $em->createQuery($mov); 
        $mov = $mov
                        ->setParameter('baja', $baja)
                        ->setParameter('unidad', $unidad)
                        ->setParameter('log', $log)
                        ->getResult();
        return $mov;        
	}

	/*
	* obtener Moviemintos
	*/
	public function getMovimientoAFT($id){
		$em = $this->getEntityManager();    
		    
        $mov = 'SELECT mov FROM InformaticaBundle:MovimientoAFT mov WHERE mov.id=:id';
        $mov = $em->createQuery($mov); 
        $mov = $mov
                        ->setParameter('id', $id)
                        ->getResult();
        return $mov;        
	}


        /*
        * actualizar variable log de los movimientos viejos con el mismo equipo que el que se va adicionar
        */
        public function updateLog($equipo){
                $em = $this->getEntityManager();    
                $mov = 'UPDATE InformaticaBundle:MovimientoAFT m SET m.log=:log WHERE m.equipo=:equipo';
                $mov = $em->createQuery($mov); 
                $mov = $mov
                        ->setParameter('log', 0)
                        ->setParameter('equipo', $equipo)
                        ->getResult();
        return $mov;        
        }


        
}
