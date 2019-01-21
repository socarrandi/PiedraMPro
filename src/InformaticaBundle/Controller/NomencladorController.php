<?php

namespace InformaticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use InformaticaBundle\Entity\EquipoAprobado;

class NomencladorController extends Controller
{


	public function equipoAprobadoAction(Request $request)
	{	

		$em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();

		//insertar en caso de que no exista en la tabla EquipoAprobado
        $tipo = $em->getRepository('InformaticaBundle:EquipoAprobado')->getTipoEquipoSinInsertar($unidad = $user->getUnidad());

        if($tipo != null){
        		 foreach ($tipo as $t) {
        		 	$equipoAprobadoObj = new EquipoAprobado();
        		 	$equipoAprobadoObj
        		 			->setUnidad($user->getUnidad())
        		 			->setTipoEquipo($t);

        		 	$em->persist($equipoAprobadoObj);
        		 }
        		 $em->flush();
        }

        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'edit'){ 

                $eqipoaprobadoObj = $em->getRepository('InformaticaBundle:EquipoAprobado')->find($request->request->get('id'));
                $eqipoaprobadoObj->setCantidad($request->request->get('cantidad'));
                $em->persist($eqipoaprobadoObj);
                $em->flush();
            }
        }

        

        $equipos_aprobados = $em->getRepository('InformaticaBundle:EquipoAprobado')->findByUnidad($user->getUnidad());
       


		/*$response = new Response('true');
        $response->headers->set('Content-Type', 'application/json');
        return $response;
*/

	    return $this->render('InformaticaBundle:Nomenclador:EquipoAprobado.html.twig', array(

	    	'equipos_aprobados' => $equipos_aprobados
           
        ));
	}
}
