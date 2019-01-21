<?php

namespace InformaticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use InformaticaBundle\Entity\Local;
use InformaticaBundle\Entity\SubLocal;
use InformaticaBundle\Entity\Area;
use InformaticaBundle\Entity\Responsable;
use InformaticaBundle\Entity\Hotel;
use InformaticaBundle\Entity\TipoEquipo;
use InformaticaBundle\Entity\Pieza;
use InformaticaBundle\Entity\UsuarioDominio;
use InformaticaBundle\Entity\Sistema;

use InformaticaBundle\Entity\Equipo;
use InformaticaBundle\Entity\InventarioEquipo;
use InformaticaBundle\Entity\Movimiento;
use InformaticaBundle\Entity\MovimientoAFT;
use InformaticaBundle\Entity\Telefono;

use InformaticaBundle\Entity\Cargo;



class DefaultController extends Controller
{   

    
    /*
    * Gestionar Usuario del Dominio
    */
    public function usuarioDominioAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();

        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'rows'){ 

                $usuarios_dominio = $em->getRepository('InformaticaBundle:UsuarioDominio')->getUsuariosDominio($unidad = $user->getUnidad(), $baja = $request->request->get('baja'));

                foreach ($usuarios_dominio as $ud) {

                 $sistemaObj = $em->getRepository('InformaticaBundle:Sistema')->findOneByUsuarioDominio($ud);

                 /*print_r('entre');
                 print_r($sistemaObj[0]->getZunAcc());
                 exit;*/
                   
                   $output[] = array(
                     'id' => $ud->getId(),
                     'nombre' => $ud->getNombre(),
                     'papellido' => $ud->getPrimerApellido(),
                     'sapellido' => $ud->getSegundoApellido(),
                     'ci' => $ud->getCi(),

                     'select_usuario_red' => $ud->getUsuarioRed()->getDominio()->getDns().' / '.$ud->getUsuarioRed()->getUsuario(),
                     'select_correo' => $ud->getEmail()->getEmail().'@'.$ud->getEmail()->getDominio()->getDominio(),
                     'select_cargo' => $ud->getCargo()->getCargo(),
                     'select_local' => $ud->getLocal()->getArea()->getArea().' / ('.$ud->getLocal()->getCodigo().') '.$ud->getLocal()->getLocal(),
                     
                     'id_correo' => $ud->getEmail()->getId(),
                     'id_cargo' => $ud->getCargo()->getId(),
                     'id_usuario_red' => $ud->getUsuarioRed()->getId(),
                     'id_local' => $ud->getLocal()->getId(),

                     'navNacional' => $ud->getNavNacional() == true?1:0,
                     'navInternet' => $ud->getNavInternet() == true?1:0,
                     'emailNacional' => $ud->getEmailNacional() == true?1:0,
                     'emailInternet' => $ud->getEmailInternet() == true?1:0,
                     'chat' => $ud->getChat() == true?1:0,
                     'ftp' => $ud->getFtp() == true?1:0,
                     //sistemas                     
                     'zunAft' => $sistemaObj->getZunAft() == true?1:0,
                     'zunUtil' => $sistemaObj->getZunUtil() == true?1:0,
                     'zunPms' => $sistemaObj->getZunPms() == true?1:0,
                     'zunPos' => $sistemaObj->getZunPos() == true?1:0,
                     'zunStock' => $sistemaObj->getZunStock() == true?1:0,
                     'zunIcs' => $sistemaObj->getZunIcs() == true?1:0,
                     'zunSa' => $sistemaObj->getZunSa() == true?1:0,
                     'zunAcc' => $sistemaObj->getZunAcc() == true?1:0,
                     'abacoNomina' => $sistemaObj->getAbacoNomina() == true?1:0,
                     'habitat' => $sistemaObj->getHabitat() == true?1:0,
                     'sarh' => $sistemaObj->getSarh() == true?1:0,
                     'sstt' => $sistemaObj->getSstt() == true?1:0,
                     'reservas' => $sistemaObj->getReservas() == true?1:0,
                     'compras' => $sistemaObj->getCompras() == true?1:0,
                     'inHova' => $sistemaObj->getInHova() == true?1:0,
                     'aInformatica' => $sistemaObj->getAInformatica() == true?1:0,
                     'aListar' => $sistemaObj->getAListar() == true?1:0,


                     'fecha_creacion' =>  $ud->getfecha()->format('d-m-Y'),
                     'observacion' => $ud->getObservacion(),
                     'edit'=> '<div class="btn-group btn-group-solid"><button data-toggle="tooltip" title="Exportar SOLICITUD Y ASIGNACIÓN DE SERVICIOS INFORMÁTICOS" type="button" class="btn btn-sm btn-warning exportar_usuario_dominio" data-id ='.$ud->getId().'> <i class="mdi mdi-file-word-box"> </i> Exp. </button> </div>'
                   );
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if ($request->request->get('action') == 'editar_usuario_dominio'){ 

                $usuario = $request->request->get('usuario');
                $usuarioDominioObj = $em->getRepository('InformaticaBundle:UsuarioDominio')->find($usuario['id']);

                $correoObj = $em->getRepository('InformaticaBundle:Email')->find($usuario['id_correo']);
                $cargoObj = $em->getRepository('InformaticaBundle:Cargo')->find($usuario['id_cargo']);
                $usuario_redObj = $em->getRepository('InformaticaBundle:UsuarioRed')->find($usuario['id_usuario_red']);
                $areaObj = $em->getRepository('InformaticaBundle:Local')->find($usuario['id_local']);

                $fecha_creacion = new \DateTime($usuario['fecha_creacion']);

                $usuarioDominioObj
                        ->setNombre($usuario['nombre'])
                        ->setPrimerApellido($usuario['papellido'])
                        ->setPrimerApellido($usuario['papellido'])
                        ->setSegundoApellido($usuario['sapellido'])
                        ->setCi($usuario['ci'])
                        ->setEmail($correoObj)
                        ->setCargo($cargoObj)
                        ->setUsuarioRed($usuario_redObj)
                        ->setLocal($areaObj)
                        ->setFecha($fecha_creacion)
                        ->setNavNacional($usuario['navNacional'])
                        ->setNavInternet($usuario['navInternet'])
                        ->setEmailNacional($usuario['emailNacional'])
                        ->setEmailInternet($usuario['emailInternet'])
                        ->setChat($usuario['chat'])
                        ->setFtp($usuario['ftp'])
                        ->setObservacion($usuario['observacion']);
                $em->persist($usuarioDominioObj);

                //sistemas
                $sistemaObj = $em->getRepository('InformaticaBundle:Sistema')->findOneByUsuarioDominio($usuarioDominioObj);
                $sistemaObj
                        ->setZunAcc($usuario['zunAcc'])
                        ->setZunAft($usuario['zunAft'])
                        ->setZunUtil($usuario['zunUtil'])
                        ->setZunPms($usuario['zunPms'])
                        ->setZunPos($usuario['zunPos'])
                        ->setZunStock($usuario['zunStock'])
                        ->setZunIcs($usuario['zunIcs'])
                        ->setZunSa($usuario['zunSa'])                        
                        ->setAbacoNomina($usuario['abacoNomina'])
                        ->setHabitat($usuario['habitat'])
                        ->setSarh($usuario['sarh'])
                        ->setSstt($usuario['sstt'])
                        ->setReservas($usuario['reservas'])
                        ->setCompras($usuario['compras'])
                        ->setInHova($usuario['inHova'])
                        ->setAInformatica($usuario['aInformatica'])
                        ->setAListar($usuario['aListar']);
                $em->persist($sistemaObj);

                $em->flush();

                $response = new Response('true');
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'add_usuario_dominio'){ 

                $usuario = $request->request->get('usuario');
                

                $correoObj = $em->getRepository('InformaticaBundle:Email')->find($usuario['id_correo']);
                $cargoObj = $em->getRepository('InformaticaBundle:Cargo')->find($usuario['id_cargo']);
                $usuario_redObj = $em->getRepository('InformaticaBundle:UsuarioRed')->find($usuario['id_usuario_red']);
                $areaObj = $em->getRepository('InformaticaBundle:Local')->find($usuario['id_local']);

                $fecha_creacion = new \DateTime($usuario['fecha_creacion']);


                $usuarioDominioObj = new UsuarioDominio();
                $usuarioDominioObj
                        ->setNombre($usuario['nombre'])
                        ->setPrimerApellido($usuario['papellido'])                        
                        ->setSegundoApellido($usuario['sapellido'])
                        ->setCi($usuario['ci'])
                        ->setEmail($correoObj)
                        ->setCargo($cargoObj)
                        ->setUsuarioRed($usuario_redObj)
                        ->setLocal($areaObj)
                        ->setFecha($fecha_creacion)
                        ->setNavNacional($usuario['navNacional'])
                        ->setNavInternet($usuario['navInternet'])
                        ->setEmailNacional($usuario['emailNacional'])
                        ->setEmailInternet($usuario['emailInternet'])
                        ->setChat($usuario['chat'])
                        ->setUnidad($user->getUnidad())
                        ->setFtp($usuario['ftp']);   
                $em->persist($usuarioDominioObj);

                $sistemaObj = new Sistema();
                $sistemaObj
                    ->setUsuarioDominio($usuarioDominioObj)
                    ->setZunAcc($usuario['zunAcc'])
                    ->setZunAft($usuario['zunAft'])
                    ->setZunUtil($usuario['zunUtil'])
                    ->setZunPms($usuario['zunPms'])
                    ->setZunPos($usuario['zunPos'])
                    ->setZunStock($usuario['zunStock'])
                    ->setZunIcs($usuario['zunIcs'])
                    ->setZunSa($usuario['zunSa'])                        
                    ->setAbacoNomina($usuario['abacoNomina'])
                    ->setHabitat($usuario['habitat'])
                    ->setSarh($usuario['sarh'])
                    ->setSstt($usuario['sstt'])
                    ->setReservas($usuario['reservas'])
                    ->setCompras($usuario['compras'])
                    ->setInHova($usuario['inHova'])
                    ->setAInformatica($usuario['aInformatica'])
                    ->setAListar($usuario['aListar']);

                $em->persist($sistemaObj);

                $em->flush();
                
                $response = new Response($usuarioDominioObj->getId());
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }
            else if ($request->request->get('action') == 'eliminar_usuario_dominio'){ 

                $usuarioDominioObj = $em->getRepository('InformaticaBundle:UsuarioDominio')->find($request->request->get('id'));

                if ($usuarioDominioObj->getBaja() == 1){
                    $em->remove($usuarioDominioObj);                    
                }else{
                    $usuarioDominioObj->setBaja(1);               
                    $em->persist($usuarioDominioObj);
                }
               
                $em->flush();

                $response = new Response('true');
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
            
        }

        $correos = $em->getRepository('InformaticaBundle:Email')->findByUnidad($user->getUnidad());
        $cargos = $em->getRepository('InformaticaBundle:Cargo')->findAll();
        $usuario_reds = $em->getRepository('InformaticaBundle:UsuarioRed')->findByUnidad($user->getUnidad());
        $locales = $em->getRepository('InformaticaBundle:Local')->findByUnidad($user->getUnidad());


        return $this->render('InformaticaBundle:Gestion:UsuarioDominio.html.twig', array(
            'correos' => $correos,
            'cargos' => $cargos,
            'usuario_reds' => $usuario_reds,
            'locales' => $locales 
        ));
    }

  
    /*
    * Gestionar Telefonos
    */
    public function telefonoAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('informatica');

        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'rows_telefonos'){ 
                $telefonos = $em->getRepository('InformaticaBundle:Telefono')->findAll();
                $output = array();

                foreach ($telefonos as  $tel) {
                   $output[$tel->getId()] = array(
                        'id'=> $tel->getId(),
                        'telefono'=> $tel->getTelefono(),
                        'responsable'=> '['.$tel->getResponsable()->getLocal()->getLocal().']'.$tel->getResponsable()->getResponsable(),
                        'responsable_id'=> $tel->getResponsable()->getId(),
                        'descripcion'=> $tel->getDescripcion()                                          
                    );                   
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'editar_telefono'){  
                $tel = $request->request->get('telefono');
                $telefonoObj = $em->getRepository('InformaticaBundle:Telefono')->find($tel['id']);
                $resObj = $em->getRepository('InformaticaBundle:Responsable')->find($tel['responsable_id']);
                $telefonoObj
                    ->setResponsable($resObj)
                    ->setTelefono($tel['telefono'])
                    ->setDescripcion($tel['descripcion']);

                $em->persist($telefonoObj);
                $em->flush(); 
            }else if ($request->request->get('action') == 'add_telefono'){ 

                $tel = $request->request->get('telefono');
                $telefonoObj = new Telefono();
                $resObj = $em->getRepository('InformaticaBundle:Responsable')->find($tel['responsable_id']);
                $telefonoObj
                    ->setResponsable($resObj)
                    ->setTelefono($tel['telefono'])
                    ->setDescripcion($tel['descripcion']);

                $em->persist($telefonoObj);
                $em->flush(); 

                $response = new Response(json_encode($telefonoObj->getId()));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }
        }

        $responsables = $em->getRepository('InformaticaBundle:Responsable')->findAll();
        return $this->render('InformaticaBundle:Gestion:Telefono.html.twig',array(            
               'responsables' => $responsables     
        ));     
    }
    /*
    * Maestros Generales Pro
    */
    public function maestroGeneralProAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();

        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'rows_responsables'){ 
                $responsables = $em->getRepository('InformaticaBundle:Responsable')->findByUnidad($unidad = $user->getUnidad());
                $output = array();

                foreach ($responsables as  $resp) {
                   $output[$resp->getId()] = array(
                        'id'=> $resp->getId(),
                        'responsable'=> $resp->getResponsable(),
                        'local'=> $resp->getLocal()->getArea()->getArea().'/'.$resp->getLocal()->getLocal(),
                        'cargo'=> $resp->getCargo()->getCargo(),
                        'id_local'=> $resp->getLocal()->getId(),
                        'id_cargo'=> $resp->getCargo()->getId()
                    );
                }           

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
            else if ($request->request->get('action') == 'rows_ccosto'){ 
                $ccostos = $em->getRepository('InformaticaBundle:Area')->findByUnidad($unidad = $user->getUnidad());
                $output = array();

                foreach ($ccostos as  $cc) {
                   $output[$cc->getId()] = array(
                        'id'=> $cc->getId(),
                        'id_ccosto_aft'=> $cc->getIdCcostoAft(),
                        'codigo'=> $cc->getCodigo(),
                        'area'=> $cc->getArea()
                    );
                }           

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
            else if ($request->request->get('action') == 'rows_locales'){ 
                $locales = $em->getRepository('InformaticaBundle:Local')->findByUnidad($user->getUnidad());
                $output = array();

                foreach ($locales as  $local) {
                   $output[$local->getId()] = array(
                        'id'=> $local->getId(),
                        'local2'=> $local->getLocal(),
                        'codigo'=> $local->getCodigo(),
                        'area'=> $local->getArea()->getArea(),
                        'id_area'=> $local->getArea()->getId()
                    );
                }        
                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
            else if ($request->request->get('action') == 'rows_subarea'){ 
                $sublocales = $em->getRepository('InformaticaBundle:SubLocal')->findByUnidad($user->getUnidad());
                $output = array();

                foreach ($sublocales as  $sub) {
                   $output[$sub->getId()] = array(
                        'id'=> $sub->getId(),
                        'subarea'=> $sub->getSubLocal(),
                        'codigo3'=> $sub->getCodigo(),
                        'local3'=> $sub->getLocal()->getLocal(),                        
                        'id_local3'=> $sub->getLocal()->getId()
                    );
                }        
                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }

            
            else if ($request->request->get('action') == 'editar_responsable'){

                $responsable = $request->request->get('responsable');

                $responsableObj = $em->getRepository('InformaticaBundle:Responsable')->find($responsable['id']);
                $localObj = $em->getRepository('InformaticaBundle:Local')->find($responsable['id_local']);
                $cargoObj = $em->getRepository('InformaticaBundle:Cargo')->find($responsable['id_cargo']);
                $responsableObj
                    ->setResponsable($responsable['responsable'])
                    ->setLocal($localObj)
                    ->setCargo($cargoObj);
                $em->persist($responsableObj);
                $em->flush();

            }
            else if ($request->request->get('action') == 'editar_local'){

                $local = $request->request->get('local');

                $localObj = $em->getRepository('InformaticaBundle:Local')->find($local['id']);               
                $areaObj = $em->getRepository('InformaticaBundle:Area')->find($local['id_area']);
                $localObj
                    ->setLocal($local['local2'])
                    ->setCodigo($local['codigo'])
                    ->setArea($areaObj);
                $em->persist($localObj);
                $em->flush();

            }
            else if ($request->request->get('action') == 'editar_subarea'){

                $subArea = $request->request->get('subarea');

                $subAreaObj = $em->getRepository('InformaticaBundle:SubLocal')->find($subArea['id']);               
                $localObj = $em->getRepository('InformaticaBundle:Local')->find($subArea['id_local3']);
                $subAreaObj
                    ->setLocal($localObj)                    
                    ->setSubLocal($subArea['subarea'])
                    ->setCodigo($subArea['codigo3']);
                $em->persist($subAreaObj);
                $em->flush();
            }
            else if ($request->request->get('action') == 'delete_responsable'){
                $responsableObj = $em->getRepository('InformaticaBundle:Responsable')->find($request->request->get('id'));
                $em->remove($responsableObj);
                $em->flush();
            }
            else if ($request->request->get('action') == 'delete_subarea'){
                $subAreaObj = $em->getRepository('InformaticaBundle:SubLocal')->find($request->request->get('id'));
                $em->remove($subAreaObj);
                $em->flush();
            }  

            else if ($request->request->get('action') == 'delete_local'){
                $localObj = $em->getRepository('InformaticaBundle:Local')->find($request->request->get('id'));
                $em->remove($localObj);
                $em->flush();
            }else if ($request->request->get('action') == 'add_local'){

                $local = $request->request->get('local');
                $areaObj = $em->getRepository('InformaticaBundle:Area')->find($local['id_area']);

                //add responsable
                $localObj = new Local();
                $localObj
                        ->setCodigo($local['codigo'])
                        ->setArea($areaObj)
                        ->setLocal($local['local2'])
                        ->setUnidad($user->getUnidad());
                $em->persist($localObj);   

                $output = array(
                    'id'=>$localObj->getId(),
                    'local'=>array(
                        'id'=>$localObj->getId,
                        'area'=>$localObj->getArea()->getArea(),
                        'local'=>$localObj->getLocal()
                    )
                );
                $em->flush();

                

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;


            }else if ($request->request->get('action') == 'add_responsable'){
                
                $resp = $request->request->get('responsable');
                $localObj = $em->getRepository('InformaticaBundle:Local')->find($resp['id_local']);
                $cargoObj = $em->getRepository('InformaticaBundle:Cargo')->find($resp['id_cargo']);

                //add responsable
                $responsableObj = new Responsable();
                $responsableObj
                        ->setResponsable($resp['responsable'])
                        ->setLocal($localObj)
                        ->setCargo($cargoObj)
                        ->setUnidad($user->getUnidad());
                $em->persist($responsableObj);
                $em->flush();

                $response = new Response(json_encode($responsableObj->getId()));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }
            else if ($request->request->get('action') == 'add_subarea'){
                
                $subarea = $request->request->get('subarea');
                $localObj = $em->getRepository('InformaticaBundle:Local')->find($subarea['id_local3']);

                //add subArea
                $subAreaObj = new SubLocal();
                $subAreaObj
                        ->setLocal($localObj)
                        ->setSubLocal($subarea['subarea'])
                        ->setCodigo($subarea['codigo3'])
                        ->setUnidad($user->getUnidad());
                $em->persist($subAreaObj);
                $em->flush();

                $response = new Response(json_encode($subAreaObj->getId()));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }
            

        }

        

           $locales = $em->getRepository('InformaticaBundle:Local')->getLocales($user->getUnidad());
           $areas = $em->getRepository('InformaticaBundle:Area')->findByUnidad($user->getUnidad());
           $cargos = $em->getRepository('InformaticaBundle:Cargo')->getCargos();

          // $ubicacion = $em->getRepository('InformaticaBundle:Local')->getResponsables();
           $tipo_equipos = $em->getRepository('InformaticaBundle:TipoEquipo')->findAll();
           $piezas = $em->getRepository('InformaticaBundle:Pieza')->getPiezas();
           $estado = $em->getRepository('InformaticaBundle:EstadoEquipo')->findAll();

           //conexiones

           $conexiones = $em->getRepository('InformaticaBundle:Conexion')->getConexiones($unidad = $user->getUnidad());
      
            
        return $this->render('InformaticaBundle:Gestion:MaestroGeneral.html.twig',array(
            'locales' => $locales,
            'cargos' => $cargos,
            'areas' => $areas,
            'estado' => $estado,
          //  'ubicacion' => $ubicacion,
            'tipo_equipos' => $tipo_equipos,
            'piezas' => $piezas,
            'conexiones' => $conexiones
                
        ));           
            
    }

    /*
    * Listado de movimientos [aft] y [parte y piezas]
    */
    public function movimientoAftAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();
      
        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'cargar_equipo'){ 
                $inventarioObj = $em->getRepository('InformaticaBundle:InventarioEquipo')->find($request->request->get('id_pieza'));
                $equipo_array = $em->getRepository('InformaticaBundle:Equipo')->getEquipoArray($inventarioObj->getEquipo()->getId());
                $equipos = $em->getRepository('InformaticaBundle:Equipo')->getComputadorasDestino($inventarioObj->getEquipo());
                $output = array(
                    'equipo' => $equipo_array,
                    'equipos' => $equipos,
                    'pieza' => $inventarioObj->getPieza()->getPieza()
                );
                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if ($request->request->get('action') == 'cargar_responsable'){                

                $equipo_array = $em->getRepository('InformaticaBundle:Equipo')->getEquipoArray($request->request->get('id_equipo'));

                $responsables = $em->getRepository('InformaticaBundle:Responsable')->getResponsableDestino($equipo_array['idR']);

                $output = array(
                    'equipo' => $equipo_array,
                    'responsables' => $responsables                    
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if ($request->request->get('action') == 'cargar_subarea_movimiento'){                

                $movObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->find($request->request->get('id_mov'));
                $subareas = $em->getRepository('InformaticaBundle:SubLocal')->getSubArea($movObj->getResponsableDestino()->getLocal());

                $output = array(                    
                    
                    'p_entidad' => '('.$movObj->getResponsableOrigen()->getUnidad()->getCodigo().') '.$movObj->getResponsableOrigen()->getUnidad()->getUnidad(),
                    'p_aprobado' => $movObj->getResponsableOrigen()->getUnidad()->getDirector(),
                    //responsable destion
                    'unidad_receptor' => '('.$movObj->getResponsableDestino()->getUnidad()->getCodigo().') '.$movObj->getResponsableOrigen()->getUnidad()->getUnidad(),
                    'direccion_receptor' => $movObj->getResponsableDestino()->getUnidad()->getDireccion(), 
                    'area_receptor' => $movObj->getResponsableDestino()->getLocal()->getLocal(),  
                    'sub_area' => $subareas,         
                    'direccion' => $movObj->getResponsableOrigen()->getUnidad()->getDireccion(),         
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if ($request->request->get('action') == 'movimiento_equipo'){ 
                
                $responsableDestinoObj = $em->getRepository('InformaticaBundle:Responsable')->find($request->request->get('id_responsable'));
                $tipoMovObj = $em->getRepository('InformaticaBundle:TipoMovimiento')->find($request->request->get('tipo_movimiento_id'));
                $equipoObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id_equipo'));  
                $estadoObj = $em->getRepository('InformaticaBundle:EstadoMovimientoAFT')->find(1);               
                $fecha = new \DateTime($request->request->get('fecha'));

                if ($responsableDestinoObj and $equipoObj){

                    //actualizar ultimo_log a false de los mov viejos con mismo equipo
                    $em->getRepository('InformaticaBundle:MovimientoAFT')->updateLog($equipoObj);

                    //crear movimiento aft
                    $movimientoObj = new MovimientoAFT();
                    $movimientoObj
                        ->setFecha($fecha)                        
                        ->setEquipo($equipoObj)
                        ->setEstado($estadoObj)
                        ->setResponsableOrigen($equipoObj->getResponsable())
                        ->setResponsableDestino($responsableDestinoObj)
                        ->setTipoMovimiento($tipoMovObj)
                        ->setUnidad($user->getUnidad())                       
                        ->setUsuario($user->getName());

                    $em->persist($movimientoObj);

                    //modificar responsable del equipo 
                    $equipoObj->setResponsable($responsableDestinoObj);
                    $em->persist($equipoObj);
                    $em->flush();

                }
            }else if ($request->request->get('action') == 'edit_aft'){ 
                $movimientoPiezaObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->find($request->request->get('id'));
                $movimientoPiezaObj->setObservacion($request->request->get('observacion'));
                $em->persist($movimientoPiezaObj);
                $em->flush();
            }else if ($request->request->get('action') == 'estado_aft'){ 

                $estados = $em->getRepository('InformaticaBundle:EstadoMovimientoAFT')->findAll();

                foreach ($estados as $estado) {
                    $output[] = $estado->getEstado();
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'rows_aft'){ 
                                
                $movimientosaft = $em->getRepository('InformaticaBundle:MovimientoAFT')->getMovimientosAFT($request->request->get('baja'), $user->getUnidad(), $request->request->get('log'));
                $output = array();

                foreach ($movimientosaft as  $mov) {
                   $output[$mov->getId()] = array(
                        'id'=> $mov->getId(),
                        'equipo'=> $mov->getEquipo()->getNombreEquipo(),
                        'tipo_equipo'=> $mov->getEquipo()->getTipoEquipo()->getTipoEquipo(),
                        'fecha'=> $mov->getFecha()->format('d-m-Y'),
                        'medio_basico'=> '<span class="label label-table label-success">'.$mov->getEquipo()->getMediobasico().'</span>',
                        'no_submayor'=>'<span class="label label-table label-info">'.$mov->getEquipo()->getNoSubmayor().'</span>',
                        'responsable_origen'=> $mov->getResponsableOrigen()->getResponsable(),
                        'local_origen'=> $mov->getResponsableOrigen()->getLocal()->getLocal(),
                        'responsable_destino'=> $mov->getResponsableDestino()->getResponsable(),
                        'local_destino'=> $mov->getResponsableDestino()->getLocal()->getLocal(),
                        'usuario'=> '<span class="label label-table label-info">'.$mov->getUsuario().'</span>',
                        'observacion'=> $mov->getEquipo()->getObservacion(),
                        'id_estado' => $mov->getEstado()->getId(),
                        'estado' => $mov->getEstado()->getEstado(),
                        'estado_equipo' =>$mov->getEquipo()->getEstadoEquipo()->getEstado(),
                        'dictaminar' => $mov->getDictaminado() == 0? '<i class="mdi mdi-checkbox-blank-outline"></i>' : '<i class="mdi mdi-checkbox-marked-outline"></i>',  
                        'edit'=> '<div class="btn-group btn-group-solid"><button data-toggle="tooltip" title="Exportar Dictamen" type="button" class="modal_plantilla_dictamen_aft btn btn-sm btn-default" data-id="'.$mov->getId().'" > <i class="mdi mdi-file-word-box"></i> Dict.   </button> <button data-toggle="tooltip" title="Exportar Movimiento" type="button" class="btn btn-sm btn-success modal_plantilla_movimiento_aft" data-id ='.$mov->getId().'> <i class="mdi mdi-file-word-box"> </i> Mov. </button> </div>'
                    );                  
                   
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if ($request->request->get('action') == 'cargar_inventario'){

                $movObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->find($request->request->get('id_mov'));
                $inventarios = $em->getRepository('InformaticaBundle:InventarioEquipo')->findByEquipo($movObj->getEquipo());
                $output = array();

                foreach ($inventarios as  $inv) {        
                   $output[] = array(
                        'id_inv' => $inv->getId(),                       
                        'pieza'=> $inv->getPieza()->getPieza().' - '.$inv->getMarca().' '.$inv->getModelo().' '.$inv->getCtecnica()                    
                    );                   
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if( $request->request->get('action') == 'editar_movimiento_aft')  {
                $movimientoArray = $request->request->get('movimiento');
                $movAFTObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->find($movimientoArray['id']);
                $estadoMovAFT = $em->getRepository('InformaticaBundle:EstadoMovimientoAFT')->find($movimientoArray['id_estado']);
                $equipoObj = $movAFTObj->getEquipo();

                $movAFTObj
                    ->setDictaminado($movimientoArray['dictaminar'])
                    ->setEstado($estadoMovAFT);
                $equipoObj->setObservacion($movimientoArray['observacion']);
               
                $em->persist($movAFTObj);
                $em->persist($equipoObj);
                $em->flush();
            }else if( $request->request->get('action') == 'cargar_exportar_movimiento_aft')  {
                $movObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->getMovimientoAFT($request->request->get('id_mov'));

                $output = array(
                    'local'=> '('.$movObj[0]->getResponsableOrigen()->getLocal()->getCodigo().') '.$movObj[0]->getResponsableOrigen()->getLocal()->getLocal(),
                    'area' => '('.$movObj[0]->getResponsableOrigen()->getLocal()->getArea()->getCodigo().') '.$movObj[0]->getResponsableOrigen()->getLocal()->getArea()->getArea(),
                    'tipo_equipo' => $movObj[0]->getEquipo()->getTipoEquipo()->getTipoEquipo()
                );
                
                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }else if ( $request->request->get('action') == 'eliminar_movimiento_aft')  {

                $movAFTObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->find($request->request->get('id'));
                $em->remove($movAFTObj);
                $em->flush();
            }
            

            $response = new Response(json_encode(true));
            $response->headers->set('Content-Type', 'application/json');
            return $response;


        }

        $responsables = $em->getRepository('InformaticaBundle:Responsable')->getResponsablesNombre();
        $unidades = $em->getRepository('InformaticaBundle:Unidad')->findAll();
        $estados = $em->getRepository('InformaticaBundle:EstadoMovimientoAFT')->findAll();

        return $this->render('InformaticaBundle:Gestion:MovimientoAFT.html.twig',array(
            'responsables' => $responsables,
            'unidades' => $unidades,
            'unidad' => $user->getUnidad(),
            'estados' => $estados
                
        ));
    }

    /*
    * movimientos de piezas 
    */
    public function movimientoPiezaAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();
      
        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'movimiento_pieza'){                 
                $equipoDestinoObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id_equipo_destino'));
                $inventarioObj = $em->getRepository('InformaticaBundle:InventarioEquipo')->find($request->request->get('id_pieza'));
                $tipoMovimientoObj = $em->getRepository('InformaticaBundle:TipoMovimiento')->find(1);
                $fecha = new \DateTime($request->request->get('fecha'));
                if ($equipoDestinoObj and $inventarioObj){

                //actualizar ultimo_log a false de los mov viejos con mismo equipo
                $movLog = $em->getRepository('InformaticaBundle:Movimiento')->updateLog($inventarioObj);

                    //crear movimiento
                    $movimientoObj = new Movimiento();
                    $movimientoObj
                        ->setFecha($fecha)
                        ->setTipoEquipo($inventarioObj->getEquipo()->getTipoEquipo())
                        ->setTipoMovimiento($tipoMovimientoObj)
                        ->setEquipoOrigen($inventarioObj->getEquipo())
                        ->setEquipodestino($equipoDestinoObj)
                        ->setInventario($inventarioObj)                        
                        ->setPieza($inventarioObj->getPieza())
                        ->setUnidad($user->getUnidad())
                        ->setLog(1)
                        ->setUsuario($user->getName());                       
                    $em->persist($movimientoObj);

                    //modificar equipo de la pieza 
                    $inventarioObj->setEquipo($equipoDestinoObj);
                    $em->persist($inventarioObj);
                    $em->flush();

                }
            }else if ($request->request->get('action') == 'rows'){ 
                
                $movimientos = $em->getRepository('InformaticaBundle:Movimiento')->getMovimientos($request->request->get('baja') , $user->getUnidad(), $log = true);
                $output = array();
                foreach ($movimientos as  $mov) {        
                   $output[$mov->getId()] = array(
                        'id'=> $mov->getId(),
                        'fecha'=> $mov->getFecha()->format('d-m-Y'),
                        'pieza'=> $mov->getPieza()->getPieza(),

                        'marca'=> $mov->getInventario()->getMarca(),
                        'modelo'=> $mov->getInventario()->getModelo(),
                        'serial'=> $mov->getInventario()->getSerial(),
                        'ctecnica'=> $mov->getInventario()->getCtecnica(),

                        'tipo_movimiento'=> $mov->getTipoMovimiento()->getTipo(),
                        'factura'=> $mov->getFactura(),
                        
                        'responsable_origen'=> $mov->getEquipoOrigen()->getResponsable()->getResponsable(),
                        'local_origen'=> $mov->getEquipoOrigen()->getResponsable()->getLocal()->getLocal(),
                        'responsable_destino'=> $mov->getEquipoDestino()->getResponsable()->getResponsable(),
                        'local_destino'=> $mov->getEquipoDestino()->getResponsable()->getLocal()->getLocal(),

                        'usuario'=> '<span class="label label-table label-info">'.$mov->getUsuario().'</span>',

                        'tipo_equipo'=> $mov->getTipoEquipo()->getTipoEquipo(),
                        'equipo_origen'=> $mov->getEquipoOrigen()->getMedioBasico(),
                        'equipo_destino'=> $mov->getEquipoDestino()->getMedioBasico(),
                        'observacion'=> $mov->getObservacion(),
                        'dictaminado' => $mov->getDictaminado() == 0? '<i class="mdi mdi-checkbox-blank-outline"></i>' : '<i class="mdi mdi-checkbox-marked-outline"></i>',  
                        'edit'=> ''
                    );

                   if ($request->request->get('baja') == 1){
                        $output[$mov->getId()]['edit'] = '<div class="btn-group btn-group-solid"><button data-toggle="tooltip" title="Exportar Dictamen" type="button" class="modal_plantilla_dictamen btn btn-sm btn-default" data-id="'.$mov->getId().'" > Dictamen <i class="mdi mdi-file-word-box"></i>  </button> <button data-toggle="tooltip" title="Exportar Movimiento" type="button" class="modal_plantilla_movimiento btn btn-sm btn-success" data-id="'.$mov->getId().'" > Movimiento <i class="mdi mdi-file-word-box"> </i>  </button> </div>';
                   }
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
                
            }else if ($request->request->get('action') == 'edit_pieza'){ 
                $movimientoPiezaObj = $em->getRepository('InformaticaBundle:Movimiento')->find($request->request->get('id'));
                $movimientoPiezaObj->setObservacion($request->request->get('observacion'));
                $em->persist($movimientoPiezaObj);
                $em->flush();
            }else if ( $request->request->get('action') == 'eliminar_movimiento'){
                $movObj = $em->getRepository('InformaticaBundle:Movimiento')->find($request->request->get('id'));
                $em->remove($movObj);
                $em->flush();
            }else if( $request->request->get('action') == 'editar_movimiento')  {
                $movimientoArray = $request->request->get('movimiento');
                $movObj = $em->getRepository('InformaticaBundle:Movimiento')->find($movimientoArray['id']);             
                $movObj->setObservacion($movimientoArray['observacion']);
                $em->persist($movObj);
                $em->flush();
            }


            $response = new Response(json_encode(true));
            $response->headers->set('Content-Type', 'application/json');
            return $response;


        }

        return $this->render('InformaticaBundle:Gestion:MovimientoPieza.html.twig',array(
                      
                
        ));
    }


    /*
    * adicionar mas piezas al equipo
    */
    public function addPiezaEquipoAction(Request $request){
       $em = $this->getDoctrine()->getManager('informatica');

        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'add_pieza'){ 

                $estadoObj = $em->getRepository('InformaticaBundle:EstadoEquipo')->find(1);

                $piezas = $request->request->get('piezas');

                $equipoObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id_equipo'));

                foreach ($piezas as $pieza_id ) {

                    $piezaObj = $em->getRepository('InformaticaBundle:Pieza')->find($pieza_id);

                    if ($piezaObj){
                        $inventarioObj = new InventarioEquipo();
                        $inventarioObj
                            ->setEstadoEquipo($estadoObj)
                            ->setEquipo($equipoObj)
                            ->setPieza($piezaObj);
                        $em->persist($inventarioObj);
                        $em->flush();
                    }                    
                }

                $response = new Response(json_encode('Salvado..'));
                $response->headers->set('Content-Type', 'application/json');
                return $response;



            }else if ($request->request->get('action') == 'cargar_piezas'){ 

                $equipoObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id_equipo'));

                //selecionar piezas q le faltan al equipo
                $piezas = $em->getRepository('InformaticaBundle:Pieza')->getPiezasEquipoNoSelect($equipoObj);

                $output = array('pieza'=> $piezas , 'equipo' => $equipoObj->getNombreEquipo());

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }
        }

    }

    /*
    * inventario de la piezas
    */
    public function inventarioPiezaEquipoAction(Request $request){
        $em = $this->getDoctrine()->getManager('informatica');
        
        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'cargar_piezas'){
                $equipoObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id_equipo'));
                $piezas = $em->getRepository('InformaticaBundle:InventarioEquipo')->getPiezasEquipo($equipoObj);
                $estados = $em->getRepository('InformaticaBundle:EstadoEquipo')->getEstados();

                $output = array('pieza'=> $piezas , 'estado' => $estados );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'edit'){
                $inventarioObj = $em->getRepository('InformaticaBundle:InventarioEquipo')->find($request->request->get('id'));

                if ($request->request->get('marca')){
                    $inventarioObj->setMarca($request->request->get('marca'));
                }else if ($request->request->get('modelo')){
                    $inventarioObj->setModelo($request->request->get('modelo'));
                }else if ($request->request->get('ctecnica')){
                    $inventarioObj->setCtecnica($request->request->get('ctecnica'));
                }else if ($request->request->get('serial')){
                    $inventarioObj->setSerial($request->request->get('serial'));
                }else if ($request->request->get('observacion')){
                    print_r('entre');
                    $inventarioObj->setObservacion($request->request->get('observacion'));
                }else if ($request->request->get('estado')){
                    $estadoObj = $em->getRepository('InformaticaBundle:EstadoEquipo')->find($request->request->get('estado'));
                    $inventarioObj->setEstadoEquipo($estadoObj);
                }

                $em->persist($inventarioObj);
                $em->flush();

                $response = new Response(json_encode('Salvado..'));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'delete'){
                $inventarioEquipoObj = $em->getRepository('InformaticaBundle:InventarioEquipo')->find($request->request->get('id'));
                if($inventarioEquipoObj){

                    $em->remove($inventarioEquipoObj);
                    $em->flush();

                    $response = new Response(json_encode('Eliminado..'));
                    $response->headers->set('Content-Type', 'application/json');
                    return $response;

                }
            }
        }

       
    }
    
    /*
    * equipos
    */
    public function equipoAction(Request $request){

        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();

        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'rows'){

                $equipos = $em->getRepository('InformaticaBundle:Equipo')
                              ->getEquipos($request->request->get('baja'), $user->getUnidad(), $local = '', $tipo_equipo = '');
                $output = array();   

                $tipoPc = $em->getRepository('InformaticaBundle:TipoEquipo')->findByIsPc(1);

                foreach ($equipos as  $e) {  

                    if( $e->getTipoEquipo() == $tipoPc[0] ){
                        $output[$e->getId()] = array(
                        'id'=> $e->getId(),
                        'tipo_equipo'=> $e->getTipoEquipo()->getTipoEquipo(),
                        'centro_costo'=> '('.$e->getResponsable()->getLocal()->getArea()->getCodigo().') '.$e->getResponsable()->getLocal()->getArea()->getArea(),
                        'departamento'=> '('.$e->getResponsable()->getLocal()->getCodigo().') '.$e->getResponsable()->getLocal()->getLocal(),
                        'responsable'=> $e->getResponsable()->getResponsable(),
                        'id_responsable' => $e->getResponsable()->getId(),
                        'cargo'=> $e->getResponsable()->getCargo()->getCargo(),
                        'estado_equipo'=> $e->getEstadoEquipo()->getEstado(),
                        'id_estado'=> $e->getEstadoEquipo()->getId(),
                        'medio_basico'=> $e->getMedioBasico(),
                        'no_submayor'=> $e->getNoSubmayor(),
                        'nombre_equipo'=> $e->getNombreEquipo(),
                        'id_padre'=> ($e->getEquipo()!=NULL)?($e->getEquipo()->getId()):'',
                        'sello'=> $e->getSello(),
                        'observacion'=> $e->getObservacion(),
                        'edit'=> '<div class="btn-group btn-group-solid">  <button data-toggle="tooltip" title="Inventario del Equipo" type="button" id="modal_inventario" class="modal_inventario btn btn-sm btn-info" data-name="'.($e->getTipoEquipo()->getIsPc() ? 'YES':'NO').'" data-id="'.$e->getId().'"> <i class="mdi mdi-format-list-bulleted"> </i>  </button> <button data-toggle="tooltip" title="Movimiento de Equipo" type="button" class="modal_movimiento_equipo btn btn-sm btn-success" data-id="'.$e->getId().'" > <i class="mdi mdi-cards-variant"> </i>  </button> <button data-toggle="tooltip" title="Exp. Técnico PC" type="button" class="btn btn-sm btn-primary exp_tecnico_pc" data-id="'.$e->getId().'" > <i class="mdi mdi-file-document-box"> </i>  </button></div>'
                    ); 

                    }else{
                        $output[$e->getId()] = array(
                        'id'=> $e->getId(),
                        'tipo_equipo'=> $e->getTipoEquipo()->getTipoEquipo(),
                        'centro_costo'=> '('.$e->getResponsable()->getLocal()->getArea()->getCodigo().') '.$e->getResponsable()->getLocal()->getArea()->getArea(),
                        'departamento'=> '('.$e->getResponsable()->getLocal()->getCodigo().') '.$e->getResponsable()->getLocal()->getLocal(),
                        'responsable'=> $e->getResponsable()->getResponsable(),
                        'cargo'=> $e->getResponsable()->getCargo()->getCargo(),
                        'estado_equipo'=> $e->getEstadoEquipo()->getEstado(),
                        'id_estado'=> $e->getEstadoEquipo()->getId(),
                        'medio_basico'=> $e->getMedioBasico(),
                        'no_submayor'=> $e->getNoSubmayor(),
                        'nombre_equipo'=> $e->getNombreEquipo(),
                        'id_padre'=> ($e->getEquipo()!=NULL)?($e->getEquipo()->getId()):'',
                        'sello'=> $e->getSello(),
                        'observacion'=> $e->getObservacion(),
                        'edit'=> '<div class="btn-group btn-group-solid"> <button data-toggle="tooltip" title="Inventario del Equipo" type="button" id="modal_inventario" class="modal_inventario btn btn-sm btn-info" data-name="'.($e->getTipoEquipo()->getIsPc() ? 'YES':'NO').'" data-id="'.$e->getId().'"> <i class="mdi mdi-format-list-bulleted"> </i>  </button> <button data-toggle="tooltip" title="Movimiento de Equipo" type="button" class="modal_movimiento_equipo btn btn-sm btn-success" data-id="'.$e->getId().'" > <i class="mdi mdi-cards-variant"> </i>  </button> </div>'
                    ); 
                    }
                                        
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }
            else if ($request->request->get('action') == 'add_equipo'){

                $tipo_equipoObj = $em->getRepository('InformaticaBundle:TipoEquipo')->find($request->request->get('id_tipo_equipo'));
                $responsableObj = $em->getRepository('InformaticaBundle:Responsable')->find($request->request->get('id_responsable'));
                $fecha = new \DateTime('now');
                $estadoEquipoObj = $em->getRepository('InformaticaBundle:EstadoEquipo')->find(1); 

                $equipoObj = new Equipo();
                $equipoObj
                    ->setTipoEquipo($tipo_equipoObj)
                    ->setResponsable($responsableObj)
                    ->setEstadoEquipo($estadoEquipoObj)
                    ->setFecha($fecha)
                    ->setUnidad($user->getUnidad())
                    ->setRealizadopor($user->getName());

                $em->persist($equipoObj);
                //$em->flush();

                $piezas = $request->request->get('piezas');
                $estadoObj = $em->getRepository('InformaticaBundle:EstadoEquipo')->find(1);
                $piezaObj = $em->getRepository('InformaticaBundle:Pieza')->find(0);

                if (!empty($piezas)){                   

                    foreach ($piezas as $pieza) {
                        $pieza = $em->getRepository('InformaticaBundle:Pieza')->find($pieza);
                        $inventarioObj = new InventarioEquipo();
                        $inventarioObj
                            ->setEstadoEquipo($estadoObj)
                            ->setEquipo($equipoObj)
                            ->setPieza($pieza);

                        $em->persist($inventarioObj);
                        $em->flush();
                    }
                }else{
                    $inventarioObj = new InventarioEquipo();
                    $inventarioObj
                        ->setEstadoEquipo($estadoObj)
                        ->setEquipo($equipoObj)
                        ->setPieza($piezaObj);
                    $em->persist($inventarioObj);
                    $em->flush();
                }

                $output = array(
                    'id' => $equipoObj->getId(),
                    'isPc' => ($equipoObj->getTipoEquipo()->getIsPc()?'YES':'NO'),
                    'categoria' => $equipoObj->getTipoEquipo()->getTipoEquipo(),
                    'ubicacion' => $equipoObj->getResponsable()->getLocal()->getLocal(),
                    'responsable' => $equipoObj->getResponsable()->getResponsable(),
                    'estado' => $equipoObj->getEstadoEquipo()->getEstado(),
                    'medio_basico' => $equipoObj->getMedioBasico(),
                    'no_submayor' => $equipoObj->getNoSubmayor(),
                    'nombre_equipo' => $equipoObj->getNombreEquipo(),
                    'observacion' => $equipoObj->getObservacion(),
                    'sello'=>$equipoObj->getSello()
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'editar_equipo'){

                $equipo = $request->request->get('equipo');
                $equipoObj = $em->getRepository('InformaticaBundle:Equipo')->find($equipo['id']);
                $estadoEquipoObj = $em->getRepository('InformaticaBundle:EstadoEquipo')->find($equipo['id_estado']);
                $responsableObj = $em->getRepository('InformaticaBundle:Responsable')->find($equipo['id_responsable']);
                
                $equipoObj
                    ->setNombreEquipo($equipo['nombre_equipo'])
                    ->setMedioBasico($equipo['medio_basico'])               
                    ->setnoSubmayor($equipo['no_submayor'])
                    ->setEstadoEquipo($estadoEquipoObj)
                    ->setResponsable($responsableObj)
                    ->setSello($equipo['sello'])
                    ->setObservacion($equipo['observacion']);

                if ($equipo['pcs'] != null){
                    $pcObj = $em->getRepository('InformaticaBundle:Equipo')->find($equipo['pcs']);
                    $equipoObj
                        ->setEquipo($pcObj);
                }else{
                    $equipoObj
                        ->setEquipo(null);
                }
                
                $em->persist($equipoObj);
                $em->flush();

            }else if ($request->request->get('action') == 'delete_equipo'){
                $equipoObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id'));

                if($request->request->get('baja') == 0){                    
                    $equipoObj->setBaja(true);
                    $em->persist($equipoObj);
                    $em->flush(); 
                }else{                              
                    $em->remove($equipoObj);
                    $em->flush(); 
                } 

                $response = new Response(json_encode(($request->request->get('baja') == 0)?true:false));
                $response->headers->set('Content-Type', 'application/json');
                return $response;               

            }else if ($request->request->get('action') == 'obtener_id_padre'){

                $equipoObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id_equipo'));

                $response = new Response(json_encode(($equipoObj->getEquipo()!==Null)?$equipoObj->getEquipo()->getId():-1));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            } 
        }
        
        $ubicacion = $em->getRepository('InformaticaBundle:Local')->getResponsables($unidad = $user->getUnidad());
        $tipo_equipos = $em->getRepository('InformaticaBundle:TipoEquipo')->findAll();
        $piezas = $em->getRepository('InformaticaBundle:Pieza')->getPiezas();
        $estados = $em->getRepository('InformaticaBundle:EstadoEquipo')->findAll();
        $locales = $em->getRepository('InformaticaBundle:Local')->findByUnidad($unidad = $user->getUnidad());
        $tipo_movimientos = $em->getRepository('InformaticaBundle:TipoMovimiento')->findAll();
        $pcs = $em->getRepository('InformaticaBundle:Equipo')->getPcs($unidad = $user->getUnidad());
        $responsables = $em->getRepository('InformaticaBundle:Responsable')->findByUnidad($unidad = $user->getUnidad());

        $local_equipo = $em->getRepository('InformaticaBundle:Local')->getLocalEquipo($unidad = $user->getUnidad());
       
        $counts = array( 
            'total' => count($em->getRepository('InformaticaBundle:Equipo')->findByUnidad($user->getUnidad())),  
            'equipos_baja' => $em->getRepository('InformaticaBundle:Equipo')->countEquipo($user->getUnidad(), $baja = 1),
            'equipos_ok' => $em->getRepository('InformaticaBundle:Equipo')->countEquipo($user->getUnidad(), $baja = 0),
            'equipos_estado_ok' => $em->getRepository('InformaticaBundle:Equipo')->countByEstadoEquipo($user->getUnidad(), $estado = 1, $baja = 0),
            'equipos_estado_roto' => $em->getRepository('InformaticaBundle:Equipo')->countByEstadoEquipo($user->getUnidad(), $estado = 2, $baja = 0),
            'equipos_aprobados' => $em->getRepository('InformaticaBundle:EquipoAprobado')->findByUnidad($user->getUnidad())
        ); 

       
        return $this->render('InformaticaBundle:Gestion:Equipo.html.twig',array( 
            'ubicacion' => $ubicacion,
            'tipo_equipos' => $tipo_equipos,
            'piezas' => $piezas,
            'estado' => $estados,
            'locales' => $locales,
            'local_equipo'=> $local_equipo,
            'tipo_movimientos' => $tipo_movimientos,
            'pcs' => $pcs,
            'responsables' => $responsables,
            'counts' =>$counts
        ));
    }


    /*
    * inventario de las piezas de equipos
    */
    public function inventarioPiezasEquipoAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();

        if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'rows_inventario_piezas_equipos'){

                $output = array();
                $piezas = $em->getRepository('InformaticaBundle:InventarioEquipo')->getInventarioDePiezas($user->getUnidad());

                foreach ($piezas as $p) {
                    $output[] = array(

                        'id'=>$p->getId(),
                        'tipo_equipo'=>$p->getEquipo()->getTipoEquipo()->getTipoEquipo(),
                        'pieza'=>$p->getPieza()->getPieza(),
                        'marca'=>$p->getMarca(),
                        'modelo'=>$p->getModelo(),
                        'ctecnica'=>$p->getCtecnica(),
                        'serial'=>$p->getSerial(),
                        'observacion'=>$p->getObservacion(),
                        'responsable'=>$p->getEquipo()->getResponsable()->getResponsable(),
                        'local'=>
                            '('.$p->getEquipo()->getResponsable()->getLocal()->getArea()->getCodigo().')'.
                            $p->getEquipo()->getResponsable()->getLocal()->getArea()->getArea().' / '.
                            '('.$p->getEquipo()->getResponsable()->getLocal()->getCodigo().')'.
                            $p->getEquipo()->getResponsable()->getLocal()->getLocal(),

                        'medio_basico'=>$p->getEquipo()->getMedioBasico(),
                        'no_inventario'=>$p->getEquipo()->getNoSubmayor(),
                        'fecha'=> '<span class="label label-info">'.$p->getEquipo()->getFecha()->format('d-m-Y').'</span>' ,
                        'sello'=>$p->getEquipo()->getSello()
                    );
                }

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
        }

                  

        return $this->render('InformaticaBundle:Gestion:InventarioEquipo.html.twig',array(
            'unidad'=>$user->getUnidad()
        ));
    }

    /*
    * maestro piezas
    */
    public function mastroPiezaAction(Request $request){
       $em = $this->getDoctrine()->getManager('informatica');


       if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'add_pieza'){

                $piezaObj = new Pieza();
                $piezaObj
                    ->setPieza($request->request->get('pieza'))
                    ->setTipo($request->request->get('tipo_pieza'));

                $em->persist($piezaObj);
                $em->flush();

                $output = array(
                    'id' => $piezaObj->getId(),
                    'pieza' => $piezaObj->getPieza(),
                    'tipo' => $piezaObj->getTipo()
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else  if ($request->request->get('action') == 'modificar_pieza'){

                $piezaObj = $em->getRepository('InformaticaBundle:Pieza')->find($request->request->get('id_pieza'));
                $piezaObj
                    ->setPieza($request->request->get('pieza'))
                    ->setTipo($request->request->get('tipo_pieza'));

                $em->persist($piezaObj);
                $em->flush();

                $output = array(
                    'id' => $piezaObj->getId(),
                    'pieza' => $piezaObj->getPieza(),
                    'tipo' => $piezaObj->getTipo()
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'eliminar_pieza'){

                $piezaObj = $em->getRepository('InformaticaBundle:Pieza')->find($request->request->get('id_pieza'));
               
                $em->remove($piezaObj);
                $em->flush();

                $output = array(
                    'id' => $request->request->get('id_pieza')
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
       }    
    }

    /*
    * maestro tipos de equipos
    */
    public function maestroTipoEquipoAction(Request $request){
       $em = $this->getDoctrine()->getManager('informatica');

       if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'add_tipo_equipo'){

                $tipoEquipoObj = new TipoEquipo();
                $tipoEquipoObj
                    ->setTipoEquipo($request->request->get('tipo_equipo'))
                    ->setColor('#336699');
                $em->persist($tipoEquipoObj);
                $em->flush();

                $output = array(
                    'id' => $tipoEquipoObj->getId(),
                    'nombre_equipo' => $tipoEquipoObj->getTipoEquipo()
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else  if ($request->request->get('action') == 'modificar_tipo_equipo'){

                $tipoEquipoObj = $em->getRepository('InformaticaBundle:TipoEquipo')->find($request->request->get('id_tipo_equipo'));
                $tipoEquipoObj
                    ->setTipoEquipo($request->request->get('tipo_equipo'))
                    ->setColor($request->request->get('color'))
                    ->setOcultar($request->request->get('ocultar'));

                $em->persist($tipoEquipoObj);
                $em->flush();

                $output = array(
                    'id' => $tipoEquipoObj->getId(),
                    'nombre_equipo' => $tipoEquipoObj->getTipoEquipo(),
                    'ocultar' => $tipoEquipoObj->getOcultar(),
                    'color' => $tipoEquipoObj->getColor()
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'eliminar_tipo_equipo'){

                $tipoEquipoObj = $em->getRepository('InformaticaBundle:TipoEquipo')->find($request->request->get('id_tipo_equipo'));
               
                $em->remove($tipoEquipoObj);
                $em->flush();

                $output = array(
                    'id' => $request->request->get('id_tipo_equipo')
                );

                $response = new Response(json_encode($output));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
       }    
    }



    /*
    * gestionar maestros generales
    */   
    public function mastroGeneralAction(Request $request){
        
    	$em = $this->getDoctrine()->getManager('informatica');
        $emDefault = $this->getDoctrine()->getManager();

    	if($request->getMethod() == 'POST'){

            if ($request->request->get('action') == 'add_local'){

                $localObj = new Local();
                $localObj->setLocal('Nuevo Local');
                $em->persist($localObj);
                $em->flush();

                $response = new Response(json_encode('id_'.$localObj->getId()));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'add_local_hijo'){

                $id = explode("_", $request->request->get('id') );

                $localObj = $em->getRepository('InformaticaBundle:Local')->find($id[1]);

                $responsableObj = new Responsable();
                $responsableObj
                    ->setLocal($localObj)
                    ->setResponsable('Nuevo Responsable');
                $em->persist($responsableObj);
                $em->flush();

                $response = new Response(json_encode('id_'.$responsableObj->getId()));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'edit'){
                $id = explode("_", $request->request->get('id') );

                if ($request->request->get('level') == 2){
                    $localObj = $em->getRepository('InformaticaBundle:Local')->find($id[1]);
                    $localObj->setLocal($request->request->get('text'));

                    $em->persist($localObj);
                    $em->flush();    

                    $response = new Response($localObj->getId());
                    $response->headers->set('Content-Type', 'application/json');
                    return $response;

                }else if ($request->request->get('level') == 3){

                    $id = explode("_", $request->request->get('id') );

                    $responsableObj = $em->getRepository('InformaticaBundle:Responsable')->find($id[1]);
                    $responsableObj->setResponsable($request->request->get('text'));

                    $em->persist($responsableObj);
                    $em->flush();

                    $response = new Response('id_'.$responsableObj->getId());
                    $response->headers->set('Content-Type', 'application/json');
                    return $response;
                }


            }else if ($request->request->get('action') == 'delete'){

                $id = explode("_", $request->request->get('id') );
               
               if ($request->request->get('level') == 2) {
                    $localObj = $em->getRepository('InformaticaBundle:Local')->find($id[1]);
                    $em->remove($localObj);
                    $em->flush();
               }else if ($request->request->get('level') == 3) {
                    $responsableObj = $em->getRepository('InformaticaBundle:Responsable')->find($id[1]);
                    $em->remove($responsableObj);
                    $em->flush();
               }              


            }else if ($request->request->get('action') == 'add_responsable_cargo'){
                $id = $res = explode("_", $request->request->get('id') );
                $responsableObj = $em->getRepository('InformaticaBundle:Responsable')->find($id[1]);
                $responsableObj->setCargo($request->request->get('cargo'));
                $em->persist($responsableObj);
                $em->flush();

                $resp = array(
                        'id' => $responsableObj->getId(),
                        'cargo' => $responsableObj->getCargo(),                                  
                    );

                $response = new Response(json_encode($resp));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if ($request->request->get('action') == 'add_parametro_generales'){               

                $hotelObj = $em->getRepository('InformaticaBundle:Hotel')->find(1);
                $hotelObj
                    ->setHotel($request->request->get('nombre_hotel'))
                    ->setProveedor($request->request->get('nombre_serviciador'));

                $em->persist($hotelObj);
                $em->flush();               
              
                $response = new Response(json_encode(true));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }

    		$json_hijos = array();
    		$locales = $em->getRepository('InformaticaBundle:Local')->findAll();
    		foreach ($locales as $local) {

                $resp = array();
                $responsables = $em->getRepository('InformaticaBundle:Responsable')->findByLocal($local);

                foreach ($responsables as $responsable) {
                    $resp[] = array(
                        'id' => 'id_'.$responsable->getId(),
                        'cargo' => $responsable->getCargo()->getCargo(),
                        'text'=> $responsable->getResponsable(),
                        'icon'=> 'fa fa-user icon-state-primary'                        
                    );
                }    

    			$json_hijos[] = array(
                    'id' => $local->getId(),
    				'text'=> $local->getLocal(),
	    			'icon'=> 'fa fa-archive icon-state-success',
	    			'children'=> $resp
    			);    			
    		}    

            $json_padre = array(
                'id' => 'id',
                'text'=> 'DEPARTAMENTOS',
                'icon'=> 'fa fa-th-large',
                'children'=> $json_hijos
            );		


    		 $response = new Response(json_encode($json_padre));
        	 $response->headers->set('Content-Type', 'application/json');
             return $response;
        } 
      

        $cargos = $emDefault->getRepository('PiedraBundle:Cargo')->findAll();
        $hotel = $em->getRepository('InformaticaBundle:Hotel')->find(1);
        $tipo_equipos = $em->getRepository('InformaticaBundle:TipoEquipo')->findAll();
        $piezas = $em->getRepository('InformaticaBundle:Pieza')->getPiezas();

        if(!$hotel){
            $hotel = new Hotel();
            $em->persist($hotel);
            $em->flush();
        }
        

      
      
        return $this->render('InformaticaBundle:Gestion:mastroGeneral.html.twig',array(  
            'cargos' => $cargos,   
            'hotel' => $hotel,
            'tipo_equipos' => $tipo_equipos,
            'piezas'=> $piezas      
        ));
    }
}
