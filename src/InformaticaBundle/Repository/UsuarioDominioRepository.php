<?php

namespace InformaticaBundle\Repository;

/**
 * UsuarioDominioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuarioDominioRepository extends \Doctrine\ORM\EntityRepository
{






	/*
	* Listado Uusario del dominio
	*/
	public function getUsuariosDominio($unidad, $baja){

		$em = $this->getEntityManager();   
	
     
        $usuario = 'SELECT ud FROM InformaticaBundle:UsuarioDominio ud WHERE ud.unidad=:unidad AND ud.baja=:baja ORDER By ud.id ASC';
        $usuario = $em->createQuery($usuario); 
        $usuario = $usuario
        				->setParameter('unidad', $unidad)
        				->setParameter('baja', $baja)
        				->getResult();
        return $usuario;        
	}



}
