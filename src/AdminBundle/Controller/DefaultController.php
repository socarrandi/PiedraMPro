<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\Security\Core\Security;

use AdminBundle\Entity\Usuario;
use AdminBundle\Entity\Rol;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    


    public function loginAction(Request $request)
    {
       
        $session = $request->getSession('default');

        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        }

        // Add the following lines
        if ($session->has('_security.target_path')) {
            if (false !== strpos($session->get('_security.target_path'), $this->generateUrl('fos_oauth_server_authorize'))) {
                $session->set('_fos_oauth_server.ensure_logout', true);
            }
        }

        return $this->render('AdminBundle:Usuario:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(Security::LAST_USERNAME),
            'error'         => $error,
        ));
    }

    /*
    * registrar usuario
    */
    public function registroAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
       if ($request->isMethod('POST')) {

            $usuario = new Usuario();
            
            
            $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
            $password = $encoder->encodePassword($request->request->get('password'), $usuario->getSalt());
            $usuario->setPassword($password);
            $usuario->setName($request->request->get('fullname'));
            $usuario->setUsername($request->request->get('username'));   
            $groups = $em->getRepository('AdminBundle:Rol')->find(1);
            $usuario->addGroup($groups);//Asegurar que cada usuario se cree con ROLE_USER

            $em->persist($usuario);
            $em->flush();


             return  new RedirectResponse($this->generateUrl('login'));

        }

        
    }



   }
