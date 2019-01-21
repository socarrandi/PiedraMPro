<?php

namespace InformaticaBundle\Repository;

/**
 * InventarioEquiposRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InventarioEquipoRepository extends \Doctrine\ORM\EntityRepository
{




    

    /*
    *   Obtener Inventario Piezas   /*tipo de la pieza: int o ext o asociada
    */
    public function getInvSinEquipo(){

        $em = $this->getEntityManager();    
     
        $inv = 'SELECT ie FROM InformaticaBundle:InventarioEquipo ie WHERE ie.equipo not in (SELECT ee FROM InformaticaBundle:Equipo ee)' ;
        $inv = $em->createQuery($inv); 
        $inv = $inv                   
                    ->getResult();

        return $inv;
    }


    /*
    *   Obtener Inventario Piezas   /*tipo de la pieza: int o ext o asociada
    */
    public function getInvEquipoTipoPieza($equipo, $tipo){

        $em = $this->getEntityManager();    
     
        $inv = 'SELECT ie FROM InformaticaBundle:InventarioEquipo ie 
                          JOIN ie.pieza p 
                          WHERE ie.equipo=:equipo AND p.tipo=:tipo ORDER BY ie.id ASC' ;
        $inv = $em->createQuery($inv); 
        $inv = $inv
                    ->setparameter('equipo', $equipo)
                    ->setparameter('tipo', $tipo)
                    ->getResult();

        return $inv;
    }

	/*
	* Listado de Piezas del Equipo
	*/
	public function getPiezasEquipo($equipo){

		$em = $this->getEntityManager();    

		$array = array();   
     
        $pieza = 'SELECT ie.id, ee.id id_estado, ee.estado, p.pieza, ie.marca, ie.modelo, ie.ctecnica, ie.serial, ie.observacion, ie.baja, e.id id_equipo, e.nombreEquipo, te.tipoEquipo, te.isPc , r.responsable
        		  FROM InformaticaBundle:InventarioEquipo ie 
        		  JOIN ie.pieza p 
        		  JOIN ie.equipo e 
        		  JOIN e.tipoEquipo te
                          JOIN e.responsable r
        		  JOIN ie.estadoEquipo ee
        		  WHERE ie.equipo=:equipo ORDER By p.id ASC';
        $pieza = $em->createQuery($pieza); 
        $pieza = $pieza->setparameter('equipo', $equipo)->getResult();

        return $pieza;        
	}


    /*
    *   Obtener una pieza del equipo
    */
    public function getPiezaInvEquipo($equipo, $p){

        $em = $this->getEntityManager();    
     
        $pieza = 'SELECT ie FROM InformaticaBundle:InventarioEquipo ie WHERE ie.equipo=:equipo and ie.pieza=:pieza';
        $pieza = $em->createQuery($pieza); 
        $pieza = $pieza
                    ->setparameter('equipo', $equipo)
                    ->setparameter('pieza', $p)
                    ->getResult();

        return $pieza;
    }


    /*
    * Listado de Piezas del Equipo
    */
    public function getInventarioEquipo($lista){

        $em = $this->getEntityManager();  
     
        $pieza = 'SELECT ie FROM InformaticaBundle:InventarioEquipo ie WHERE ie.id  IN (:lista)';
        $pieza = $em->createQuery($pieza); 
        $pieza = $pieza->setparameter('lista', $lista)->getResult();

        return $pieza;        
    }

    /*
    * Selecionar el CPU del Equipo
    */
    public function getInventarioCPUEquipo($equipo){

        $em = $this->getEntityManager();    

        $array = array();   
     
        $cpu = 'SELECT ie FROM InformaticaBundle:InventarioEquipo ie JOIN ie.pieza p WHERE ie.equipo=:equipo and p.pieza=:board';
        $cpu = $em->createQuery($cpu); 
        $cpu = $cpu
                ->setParameter('equipo', $equipo)
                ->setParameter('board', 'Motherboard')
                ->getResult();

        return $cpu;        
    }
    

    /*
    * inventario de piezas de los equipos
    */
    public function getInventarioDePiezas($unidad){

        $em = $this->getEntityManager();    
     
        $pieza = 'SELECT ie FROM InformaticaBundle:InventarioEquipo ie 
                            JOIN ie.equipo e WHERE e.unidad=:unidad ORDER BY e.tipoEquipo ASC';
        $pieza = $em->createQuery($pieza); 
        $pieza = $pieza
                    ->setparameter('unidad', $unidad)
                    ->getResult();

        return $pieza;
    }


    





}
