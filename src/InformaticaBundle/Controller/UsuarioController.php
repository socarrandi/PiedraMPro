<?php

namespace InformaticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\Security\Core\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use InformaticaBundle\Entity\Usuario;
use InformaticaBundle\Entity\Rol;


class UsuarioController extends Controller
{


	  /*
    * Login de usuarios
    */
    public function loginAction(Request $request)
    {
       
        $session = $request->getSession('login');

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

        return $this->render('InformaticaBundle:Usuario:login_pro.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(Security::LAST_USERNAME),
            'error'         => $error,
        ));
    }


    public function usuariosAction(Request $request)
    {

       $user = $this->getUser();
       $em = $this->getDoctrine()->getManager('informatica');

        //para la edad
        $hoy = new \DateTime('now');

       if($request->getMethod() == 'POST'){
            
            if ($request->request->get('action') == 'cargar_usarios'){ 

                $unidadObj = $em->getRepository('InformaticaBundle:Unidad')->find($request->request->get('unidad'));

               

                if( $request->request->get('role_admin') == true ){

                    $usuarios = $em->getRepository('InformaticaBundle:Usuario')->findAll();

                }else{
                    $usuarios = $em->getRepository('InformaticaBundle:Usuario')->getUsuarios($unidad = $unidadObj, $activo = $request->request->get('activo') );
                }                
                   

                foreach ($usuarios as $usuario) {
                   
                    $edad = $hoy->diff($usuario->getEdad());                   

                    $output[] = array(
                        'id'=> $usuario->getId() ,
                        'name'=>$usuario->getName() ,
                        'username'=>$usuario->getUserName() ,
                        'id_unidad'=>$usuario->getUnidad()->getId(),
                        'unidad'=> '('.$usuario->getUnidad()->getCodigo().') '.$usuario->getUnidad()->getUnidad(),
                        'edad'=> $edad->y,                        
                        'rol'=> $this->list_roles($usuario),
                        'estado'=> ($usuario->getActive() == 1)?'<span class="label label-success"> ACTIVO </span>': '<span class="label label-danger">INACTIVO</span>' ,
                        'active'=> $usuario->getActive()?1:0,
                        'fecha_inicio'=>$usuario->getFechaInicio()->format('d-m-Y') ,
                        'fecha_mod'=> $usuario->getFechaModificacion()->format('d-m-Y'),
                        'fecha_nac'=>$usuario->getEdad()->format('d-m-Y'),
                        'email'=> $usuario->getEmail()
                    );

                }
                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if ($request->request->get('action') == 'editar_usuario'){ 

                $usuario = $request->request->get('usuario');                
                $unidadObj = $em->getRepository('InformaticaBundle:Unidad')->find($usuario['id_unidad']);
                $usuarioObj = $em->getRepository('InformaticaBundle:Usuario')->find($usuario['id']);
                $fecha_nac = new \DateTime($usuario['fecha_nac']);     

                if($usuario['password']!=''){
                    $encoder = $this->get('security.encoder_factory')->getEncoder($usuarioObj);
                    $password = $encoder->encodePassword($usuario['password'], $usuarioObj->getSalt());

                    $usuarioObj
                        ->setPassword($password);
                }                

                $usuarioObj                        
                        ->setName($usuario['name'])
                        ->setUsername($usuario['username'])
                        ->setEdad($fecha_nac)
                        ->setActive($usuario['active'])
                        ->setUnidad($unidadObj)
                        ->setEmail($usuario['email'])
                        ->setFechaModificacion($hoy);
                        //->setAvatar('')//ver despues 
                        //->addGroup($groups);//Asegurar que cada usuarioObj se cree con ROLE_USER

                $em->persist($usuarioObj);
                $em->flush();

                $edad = $hoy->diff($usuarioObj->getEdad());  

                $output = array(
                    'id'=>$usuarioObj->getId(),
                    'edad'=> $edad->y,
                   // 'roles' => $this->list_roles($usuarioObj),
                   // 'fecha_inicio' => $usuarioObj->getFechaInicio()->format('d-m-Y'),
                    'fecha_mod' => $usuarioObj->getFechaModificacion()->format('d-m-Y')

                );

            }else if ($request->request->get('action') == 'add_usuario'){ 

                $usuario = $request->request->get('usuario');
                //role user
                $groups = $em->getRepository('InformaticaBundle:Rol')->find(1);

                if($usuario['id_unidad']!=null){
                    $unidadObj = $em->getRepository('InformaticaBundle:Unidad')->find($usuario['id_unidad']);
                }else{
                    $unidadObj = $user->getUnidad();
                }
                

                $usuarioObj = new Usuario();
                $fecha_nac = new \DateTime($usuario['fecha_nac']);     

                $encoder = $this->get('security.encoder_factory')->getEncoder($usuarioObj);
                $password = $encoder->encodePassword($usuario['password'], $usuarioObj->getSalt());
                $usuarioObj
                        ->setPassword($password)
                        ->setName($usuario['name'])
                        ->setUsername($usuario['username'])
                        ->setEdad($fecha_nac)
                        ->setActive($usuario['active'])
                        ->setUnidad($unidadObj)
                        ->setEmail($usuario['email'])
                        ->setAvatar('')//ver despues 
                        ->addGroup($groups);//Asegurar que cada usuarioObj se cree con ROLE_USER

                $em->persist($usuarioObj);
                $em->flush();

                $edad = $hoy->diff($usuarioObj->getEdad());  

                $output = array(
                    'id'=>$usuarioObj->getId(),
                    'edad'=> $edad->y,
                    'roles' => $this->list_roles($usuarioObj),
                    'fecha_inicio' => $usuarioObj->getFechaInicio()->format('d-m-Y'),
                    'fecha_mod' => $usuarioObj->getFechaModificacion()->format('d-m-Y'),
                    'unidad' => '('.$usuarioObj->getUnidad()->getCodigo().') '.$usuarioObj->getUnidad()->getUnidad()

                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response; 
            }else if ($request->request->get('action') == 'eliminar_usuario'){ 

                $usuarioObj = $em->getRepository('InformaticaBundle:Usuario')->find($request->request->get('id'));
                $em->remove($usuarioObj);
                $em->flush();
            }else if ($request->request->get('action') == 'check_username'){ 

                $usuario = $em->getRepository('InformaticaBundle:Usuario')->findOneByUsername($request->request->get('username'));
                if($usuario){
                    $response = new Response(json_encode(true));
                    
                }else{
                    $response = new Response(json_encode(false));                    
                }
                $response->headers->set('Content-Type', 'application/json');
                    return $response;


            }
                     

        }

        $unidades = $em->getRepository('InformaticaBundle:Unidad')->findAll();
        $roles = $em->getRepository('InformaticaBundle:Rol')->findAll();

       return $this->render('InformaticaBundle:Usuario:usuarios.html.twig', array(
          'unidades' => $unidades,
          'roles'=> $roles
        ));
    }

    /* 
    * listado de roles con span
    */
    public function list_roles($usuario)
    {
        $roles = $usuario->getGroups();
        $list = "";
        foreach ($roles as $rol) {
            //print_r($rol->getName());
            $list .="<span class='label label-primary label-rounded m-l-5'>".$rol->getName()."</span>";
        }
        return $list;
    }





}
