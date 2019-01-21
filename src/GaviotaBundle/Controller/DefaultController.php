<?php

namespace GaviotaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /*
    * conexion abaco
    */
    public function abacoAction(Request $request){

        $em = $this->getDoctrine()->getManager('abaco');
        $em_habitat = $this->getDoctrine()->getManager('habitat');

        $trabajadores_abaco = $em->getRepository('GaviotaBundle:Habitat')->getEmpleadosAbaco();

      
        $trabajadores_habitat = $em_habitat->getRepository('GaviotaBundle:Habitat')->getEmpleadosHabitat($trabajadores_abaco);
         
           
        echo "Termino";
    }


}
