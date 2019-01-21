<?php

namespace PiedraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use PiedraBundle\Entity\Departamento;
use PiedraBundle\Entity\Inventario;
use PiedraBundle\Entity\Pc;
use PiedraBundle\Entity\Documento;
use PiedraBundle\Entity\PasswordSetup;
use PiedraBundle\Entity\UsuarioRed;
use PiedraBundle\Entity\UsuarioDominio;
use PiedraBundle\Entity\Sistema;

use PiedraBundle\Entity\Email;
use PiedraBundle\Entity\Cargo;
use PiedraBundle\Entity\Telefono;

define('DIRECTORIO', __DIR__ . '/../../../../web/uploads/documentos');

class DefaultController extends Controller
{
    

    public function homeAction(){

        return $this->render('PiedraBundle:Gestion:home.html.twig');

    }

    /*
    * Adicionar Pc
    */
    public function adicionarPcAction(Request $request ){

        $em = $this->getDoctrine()->getManager('default');

        //listados 
        $pcs = $em->getRepository('PiedraBundle:Pc')->findAll();
        $departamentos = $em->getRepository('PiedraBundle:Departamento')->findAll();

        if($request->getMethod() == 'POST'){


        if ($request->request->get('action') === 'edit') {

            $pc = $em->getRepository('PiedraBundle:Pc')->find(intval($request->request->get('id')));

            if($request->request->get('nombre_pc')){
                $pc->setNombrePc($request->request->get('nombre_pc')); 
            }else if($request->request->get('ip')){
                $pc->setIp($request->request->get('ip')); 
            }else if($request->request->get('mascara')){
                $pc->setMascara($request->request->get('mascara')); 

            }else if($request->request->get('puerta_enlace')){
                $pc->setPuertaEnlace($request->request->get('puerta_enlace')); 
            }
            //modificar pc
            $em->persist($pc);
            $em->flush();   



        } else if ($request->request->get('action') === 'delete') {

                $pc = $em->getRepository('PiedraBundle:Pc')->find(intval($request->request->get('id')));
               
                $em->remove($pc);
                $em->flush();           

        } else if ($request->request->get('action') === 'restore') {

          // PHP code for edit restore

        }else{

                $dominioObj = $em->getRepository('PiedraBundle:Dominio')->find(1);
                $departamentoObj = $em->getRepository('PiedraBundle:Departamento')->find($request->request->get('departamento'));              

                $pc = new Pc();
                $pc
                    ->setDominio($dominioObj)
                    ->setDepartamento($departamentoObj)
                    ->setNombrePc($request->request->get('nombre_pc'))
                    ->setIp($request->request->get('ip'))
                    ->setMascara($request->request->get('mascara'))
                    ->setPuertaEnlace($request->request->get('puerta_enlace'));

                $em->persist($pc);

                $listaComponentes = $em->getRepository('PiedraBundle:Componente')->getComponentesDefault();

                foreach ($listaComponentes as $l) {
                    $inventario = new Inventario();
                    $inventario
                        ->setComponente($l)
                        ->setDepartamento($pc->getDepartamento())
                        ->setPc($pc);

                    $em->persist($inventario);
                    $em->flush();
                }                

                if ($request->request->get('action') == 'departamento'){
                    return new RedirectResponse($this->generateUrl('inventario_departamento',array('idD'=>$request->request->get('idD'))));                 
                }else{
                    return  new RedirectResponse($this->generateUrl('adicionar_pc'));  
                }
               
        }           
                       
        }       

        return $this->render('PiedraBundle:Gestion:adicionarPc.html.twig',array(
            'pcs' => $pcs,            
            'departamentos'=> $departamentos
            ));
    }


    /*
    * Inventario de pc
    */    
    public function inventarioPcAction(Request $request, $idPc){

        $em = $this->getDoctrine()->getManager('default');

        $pcObj = $em->getRepository('PiedraBundle:Pc')->find($idPc);

        if(!$pcObj){
            return  new RedirectResponse($this->generateUrl('adicionar_pc'));
        }

        //listados 
        $inventarios = $em->getRepository('PiedraBundle:Inventario')->findByPc($pcObj);

        if($request->getMethod() == 'POST'){
            $inventarioObj = $em->getRepository('PiedraBundle:Inventario')->find(intval($request->request->get('id')));
            $componenteObj = $em->getRepository('PiedraBundle:Componente')->find(intval($request->request->get('componente')));
        if ($request->request->get('action') === 'edit') {  
            if($request->request->get('marca')){
                $inventarioObj->setMarca($request->request->get('marca'));                
            }else if($request->request->get('modelo')){
                $inventarioObj->setModelo($request->request->get('modelo')); 
            }else if($request->request->get('serial')){
                $inventarioObj->setSerial($request->request->get('serial'));                 
            }else if($request->request->get('estado')){
                $inventarioObj->setEstado($request->request->get('estado'));                
            }else if($request->request->get('medio_basico')){
                $inventarioObj->setMedioBasico($request->request->get('medio_basico')); 
            }else if($request->request->get('no_submayor')){
                $inventarioObj->setNoSubmayor($request->request->get('no_submayor')); 
            }else if($request->request->get('componente')){
                $inventarioObj->setComponente($componenteObj); 
            }
            //modificar inventarioObj
            $em->persist($inventarioObj);
            $em->flush();                    

        } else if ($request->request->get('action') === 'delete') {

            $inventarioObj->setBaja(true);
            //modificar inventarioObj
            $em->persist($inventarioObj);
            $em->flush(); 


               
        } else if ($request->request->get('action') === 'restore') {

          // PHP code for edit restore

        }   
                       
        }       

        return $this->render('PiedraBundle:Gestion:inventarioPc.html.twig',array(                     
            'inventarios'=> $inventarios,
            'pc'=>$pcObj
            ));
    }


    /*
    * Adicionar departamento
    */    
    public function adicionarDepartamentoAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');


        //listados 
        $departamentos = $em->getRepository('PiedraBundle:Departamento')->findAll();

        if($request->getMethod() == 'POST'){


        if ($request->request->get('action') === 'edit') {

            $departamentoObj = $em->getRepository('PiedraBundle:Departamento')->find(intval($request->request->get('id')));
            $departamentoObj->setNombre($request->request->get('departamento'));            
            //modificar departamento
            $em->persist($departamentoObj);
            $em->flush(); 
                   

        } else if ($request->request->get('action') === 'delete') {

        $deptObj = $em->getRepository('PiedraBundle:Departamento')->find(intval($request->request->get('id')));
        //eliminar departamento
        $em->remove($deptObj);
        $em->flush();    


               
        } else if ($request->request->get('action') === 'restore') {

          // PHP code for edit restore

        }else{

            // adicionar nuevo departamento
            $departamentoObj = new Departamento();
            $departamentoObj->setNombre($request->request->get('departamento'));
            $em->persist($departamentoObj);
            $em->flush();

        return new RedirectResponse($this->generateUrl('adicionar_departamento'));    
        } 



                       
        }       

        return $this->render('PiedraBundle:Gestion:adicionarDepartamento.html.twig',array(                     
            'departamentos'=> $departamentos
            ));
    }


    /*
    * inventario departamento
    */
    public function inventarioDepartamentoAction(Request $request, $idD){

        $em = $this->getDoctrine()->getManager('default');

        $departamentoObj = $em->getRepository('PiedraBundle:Departamento')->find(intval($idD));
        

        if(!$departamentoObj){
            return new RedirectResponse($this->generateUrl('adicionar_departamento'));
        }

        if($request->getMethod() == 'POST'){


            $inventarioObj = $em->getRepository('PiedraBundle:Inventario')->find(intval($request->request->get('id')));

            if ($request->request->get('action') === 'edit') {             

                if($request->request->get('marca')){
                    $inventarioObj->setMarca($request->request->get('marca'));                
                }else if($request->request->get('modelo')){
                    $inventarioObj->setModelo($request->request->get('modelo')); 
                }else if($request->request->get('serial')){
                    $inventarioObj->setSerial($request->request->get('serial'));                 
                }else if($request->request->get('estado')){
                    $inventarioObj->setEstado($request->request->get('estado'));                
                }else if($request->request->get('medio_basico')){
                    $inventarioObj->setMedioBasico($request->request->get('medio_basico')); 
                }else if($request->request->get('no_submayor')){
                    $inventarioObj->setNoSubmayor($request->request->get('no_submayor')); 
                }else if ($request->request->get('componente')){
                    $componenteObj = $em->getRepository('PiedraBundle:Componente')->find(intval($request->request->get('componente')));
                    $inventarioObj->setComponente($componenteObj); 
                }else if ($request->request->get('pc')){
                    $pcObj = $em->getRepository('PiedraBundle:Pc')->find($request->request->get('pc'));
                    $inventarioObj->setPc($pcObj); 
                }
                //modificar inventarioObj
                $em->persist($inventarioObj);
                $em->flush(); 
                       

            } else if ($request->request->get('action') === 'delete') {

                $inventarioObj->setBaja(true);
                //modificar inventarioObj
                $em->persist($inventarioObj);
                $em->flush(); 

                

                   
            } else if ($request->request->get('action') === 'restore') {

              // PHP code for edit restore

            } 
        }   

        $pcs_inventarios = $em->getRepository('PiedraBundle:Pc')->getPcsInventario($departamentoObj);
        $inventario_nullpc = $em->getRepository('PiedraBundle:Departamento')->getInventarioNull($departamentoObj);

        return $this->render('PiedraBundle:Gestion:inventarioDepartamento.html.twig',array(                     
            'pcs_inventarios'=> $pcs_inventarios,
            'inventario_nullpc' => $inventario_nullpc,
            'departamento'=>$departamentoObj           
            ));
    }


    /*
    * gestionar UsuarioRed
    */   
    public function gestionarUsuarioRedAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');       
        
        if($request->getMethod() == 'POST'){


            $usuarioRedObj = $em->getRepository('PiedraBundle:UsuarioRed')->find(intval($request->request->get('id')));
            $departamentoObj = $em->getRepository('PiedraBundle:Departamento')->find(intval($request->request->get('departamento')));
            $dominioObj = $em->getRepository('PiedraBundle:Dominio')->find(1);

            if ($request->request->get('action') === 'edit') {             

                if($request->request->get('usuario_red')){
                    $usuarioRedObj->setUsuario($request->request->get('usuario_red'));                
                }
                //modificar usuarioRedObj
                $em->persist($usuarioRedObj);
                $em->flush(); 
                       

            } else if ($request->request->get('action') === 'delete') {  

                $em->remove($usuarioRedObj);
                $em->flush();                                 

                   
            } else if ($request->request->get('action') === 'restore') {
              // PHP code for edit restore

            }else{

                // adicionar nuevo usuario red
                $usuarioRedObj = new UsuarioRed();
                $usuarioRedObj
                    ->setDominio($dominioObj)
                    ->setDepartamento($departamentoObj)
                    ->setUsuario($request->request->get('usuario_red'));
                $em->persist($usuarioRedObj);
                $em->flush();

                return new RedirectResponse($this->generateUrl('gestionar_usuario_red'));  
            }
        }   

        $usuario_reds = $em->getRepository('PiedraBundle:UsuarioRed')->findAll();
        $departamentos = $em->getRepository('PiedraBundle:Departamento')->findAll();
      
        return $this->render('PiedraBundle:Nomencladores:gestionarUsuarioRed.html.twig',array(  
            'usuario_reds' => $usuario_reds,
            'departamentos' => $departamentos                  
                   
        ));
    }

   /*
    * gestionar UsuarioRed
    */   
    public function gestionarCorreoAction(Request $request){

        $em = $this->getDoctrine()->getManager('default'); 

        $dominio = $em->getRepository('PiedraBundle:Dominio')->find(1);     
        
        if($request->getMethod() == 'POST'){

            $emailObj = $em->getRepository('PiedraBundle:Email')->find(intval($request->request->get('id')));

            if ($request->request->get('action') === 'edit') {             

                if($request->request->get('email')){
                    $emailObj->setEmail($request->request->get('email').'@'.$dominio->getNombre());                
                }
                //modificar emailObj
                $em->persist($emailObj);
                $em->flush(); 
                       

            } else if ($request->request->get('action') === 'delete') {  

                $em->remove($emailObj);
                $em->flush();                                 

                   
            } else if ($request->request->get('action') === 'restore') {
              // PHP code for edit restore

            }else{

                // adicionar nuevo usuario red
                $emailObj = new Email();
                $emailObj
                    ->setEmail($request->request->get('email').'@'.$dominio->getNombre())
                    ->setIsDireccion($request->request->get('is_direccion')? TRUE : FALSE); 

                $em->persist($emailObj);
                $em->flush();

                return new RedirectResponse($this->generateUrl('gestionar_correo'));  

            }
        }   

        $emails = $em->getRepository('PiedraBundle:Email')->findAll();
        

      
      
        return $this->render('PiedraBundle:Nomencladores:gestionarCorreo.html.twig',array(  
            'emails' => $emails,
            'dominio' => $dominio  
        ));
    }

    /*
    * gestionar UsuarioRed
    */   
    public function gestionarCargoAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');             
        
        if($request->getMethod() == 'POST'){

            $cargoObj = $em->getRepository('PiedraBundle:Cargo')->find(intval($request->request->get('id')));

            if ($request->request->get('action') === 'edit') {             

                if($request->request->get('cargo')){
                    $cargoObj->setCargo($request->request->get('cargo'));                
                }
                //modificar cargoObj
                $em->persist($cargoObj);
                $em->flush(); 
                       

            } else if ($request->request->get('action') === 'delete') {  

                $em->remove($cargoObj);
                $em->flush();                                 

                   
            } else if ($request->request->get('action') === 'restore') {
              // PHP code for edit restore

            }else{

                // adicionar nuevo usuario red
                $cargoObj = new Cargo();
                $cargoObj
                    ->setCargo($request->request->get('cargo'));  
                   
                $em->persist($cargoObj);
                $em->flush();

                 return new RedirectResponse($this->generateUrl('gestionar_cargo'));  
            }
        }   

        $cargos = $em->getRepository('PiedraBundle:Cargo')->findAll();             
        return $this->render('PiedraBundle:Nomencladores:gestionarCargo.html.twig',array(  
            'cargos' => $cargos  
        ));
    }
   

    /*
    * gestionar Telefono
    */   
    public function gestionarTelefonoAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');             
        
        if($request->getMethod() == 'POST'){

            $departamentoObj = $em->getRepository('PiedraBundle:Departamento')->find(intval($request->request->get('departamento')));
            $telefonoObj = $em->getRepository('PiedraBundle:Telefono')->find(intval($request->request->get('id')));

            if ($request->request->get('action') === 'edit') { 

              if($request->request->get('telefono')){
                    $telefonoObj->setTelefono($request->request->get('telefono'));
              }else if($request->request->get('departamento')){
                    $telefonoObj->setDepartamento($departamentoObj);
              }else if($request->request->get('descripcion')){
                    $telefonoObj->setDescripcion($request->request->get('descripcion'));
              }        

               $em->persist($telefonoObj);
               $em->flush();       
                       
            } else if ($request->request->get('action') === 'delete') {  

                $em->remove($telefonoObj);
                $em->flush();                                 

                   
            } else if ($request->request->get('action') === 'restore') {
              // PHP code for edit restore

            }else{

                // adicionar nuevo usuario red
                $telefonoObj = new Telefono();
                $telefonoObj
                    ->setTelefono($request->request->get('telefono'))
                    ->setDescripcion($request->request->get('descripcion'))
                    ->setDepartamento($departamentoObj)
                    ->setIsExterno($request->request->get('is_externo')? TRUE : FALSE);                   
                $em->persist($telefonoObj);
                $em->flush();

                return new RedirectResponse($this->generateUrl('gestionar_telefono'));  
            }
        }   

        $departamentos = $em->getRepository('PiedraBundle:Departamento')->findAll();    
        $telefonos = $em->getRepository('PiedraBundle:Telefono')->findAll();  

        return $this->render('PiedraBundle:Gestion:gestionarTelefono.html.twig',array(  
            'departamentos' => $departamentos,
            'telefonos' => $telefonos
        ));
    }

   /*
    * gestionar UsuarioDominio
    */   
    public function gestionarUsuarioDominioAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');         

        if($request->getMethod() == 'POST'){
            $emailObj = $em->getRepository('PiedraBundle:Email')->find(intval($request->request->get('email')));
            $cargoObj = $em->getRepository('PiedraBundle:Cargo')->find(intval($request->request->get('cargo')));
            $usuarioRedObj = $em->getRepository('PiedraBundle:UsuarioRed')->find(intval($request->request->get('usuario_red')));
            $usuarioDominioObj = $em->getRepository('PiedraBundle:UsuarioDominio')->find(intval($request->request->get('id')));

            if ($request->request->get('action') === 'edit') {                            

                if($request->request->get('nombre')){
                    $usuarioDominioObj->setNombre($request->request->get('nombre'));                
                }else if($request->request->get('p_apellido')){                    
                    $usuarioDominioObj->setPrimerApellido($request->request->get('p_apellido'));                
                }else if($request->request->get('s_apellido')){                    
                    $usuarioDominioObj->setSegundoApellido($request->request->get('s_apellido'));                
                }else if($request->request->get('ci')){                    
                    $usuarioDominioObj->setCi($request->request->get('ci'));                
                }else if($request->request->get('usuario_red')){                    
                    $usuarioDominioObj->setUsuarioRed($usuarioRedObj);                
                }else if($request->request->get('observacion')){                    
                    $usuarioDominioObj->setObservacion($request->request->get('observacion'));                
                }else if($request->request->get('fecha')){ 
                    $fecha = new \Datetime($request->request->get('fecha'));                                
                    $usuarioDominioObj->setFecha($fecha);                
                }

                

                //modificar usuarioDominioObj
                $em->persist($usuarioDominioObj);
                $em->flush();                        

            } else if ($request->request->get('action') === 'delete') {
                $usuarioDominioObj->setBaja(true);  
                $em->persist($usuarioDominioObj);
                $em->flush();                                 
                   
            } else if ($request->request->get('action') === 'restore') {
              // PHP code for edit restore

            }else{

                $fecha = new \Datetime($request->request->get('fecha')); 

                // adicionar nuevo usuario red
                $usuarioDominioObj = new UsuarioDominio();
                $usuarioDominioObj
                    ->setNombre($request->request->get('nombre'))  
                    ->setPrimerApellido($request->request->get('p_apellido'))  
                    ->setSegundoApellido($request->request->get('s_apellido')) 
                    ->setCi($request->request->get('ci'))     
                    ->setEmail($emailObj)
                    ->setCargo($cargoObj)
                    ->setFecha($fecha)
                    ->setUsuarioRed($usuarioRedObj);

                if ($request->request->get('baja') == 'baja'){
                     $usuarioDominioObj->setBaja(true);
                }

                //navegacion, correo, etc
                if($request->request->get('nav_nacional')){
                    $usuarioDominioObj->setNavNacional(true);
                }
                if($request->request->get('nav_internet')){
                    $usuarioDominioObj->setNavInternet(true);
                }
                if($request->request->get('email_nacional')){
                    $usuarioDominioObj->setEmailNacional(true);
                }
                if($request->request->get('email_internet')){
                    $usuarioDominioObj->setEmailInternet(true);
                }
                if($request->request->get('ftp')){
                    $usuarioDominioObj->setFtp(true);
                }
                if($request->request->get('chat')){
                    $usuarioDominioObj->setChat(true);
                }
                
                $em->persist($usuarioDominioObj);

                //sistemas 
                $sistemaObj = new Sistema();

                if($request->request->get('zunAcc')){
                    $sistemaObj->setZunAcc(true);
                }
                if($request->request->get('zunAft')){
                    $sistemaObj->setZunAft(true);
                }
                if($request->request->get('zunUtil')){
                    $sistemaObj->setZunUtil(true);
                }
                if($request->request->get('zunPms')){
                    $sistemaObj->setZunPms(true);
                }
                if($request->request->get('zunPos')){
                    $sistemaObj->setZunPos(true);
                }
                if($request->request->get('zunStock')){
                    $sistemaObj->setZunStock(true);
                }
                if($request->request->get('zunIcs')){
                    $sistemaObj->setIcs(true);
                }
                if($request->request->get('abacoNomina')){
                    $sistemaObj->setAbacoNomina(true);
                }
                if($request->request->get('habitat')){
                    $sistemaObj->setHabitat(true);
                }
                if($request->request->get('sarh')){
                    $sistemaObj->setSarh(true);
                }
                if($request->request->get('aListar')){
                    $sistemaObj->setAListar(true);
                }
                if($request->request->get('sstt')){
                    $sistemaObj->setSstt(true);
                }
                if($request->request->get('reservas')){
                    $sistemaObj->setReservas(true);
                }
                if($request->request->get('compras')){
                    $sistemaObj->setCompras(true);
                }
                if($request->request->get('inHova')){
                    $sistemaObj->setInHova(true);
                }
                if($request->request->get('aInformatica')){
                    $sistemaObj->setAInformatica(true);
                }

                $sistemaObj->setusuarioDominio($usuarioDominioObj);
                $em->persist($sistemaObj);
                $em->flush();


                if ($request->request->get('baja') == 'baja'){
                    return new RedirectResponse($this->generateUrl('baja_usuario_dominio'));
                }else{
                     return new RedirectResponse($this->generateUrl('gestionar_usuario_dominio'));
                }
            }
        }   

        $usuario_reds = $em->getRepository('PiedraBundle:UsuarioRed')->getUsuarioRedASC();
        $cargos = $em->getRepository('PiedraBundle:Cargo')->findAll();
        $emails = $em->getRepository('PiedraBundle:Email')->findAll();
        $usuario_dominios = $em->getRepository('PiedraBundle:UsuarioDominio')->getUsuarioDominio(false);
        $sistemas = $em->getRepository('PiedraBundle:Sistema')->getSistemas(false);


        $usuario_reds_array = $em->getRepository('PiedraBundle:UsuarioRed')->getUsuarioRedASCArray();
       

      
        return $this->render('PiedraBundle:Gestion:gestionarUsuarioDominio.html.twig',array(  
            'usuario_reds' => $usuario_reds,
            'cargos' => $cargos,
            'emails' => $emails,
            'usuario_dominios' => $usuario_dominios,
            'sistemas' => $sistemas              
                   
        ));
    }

    /* 
    * bajas usuarioDominio
    */
    public function bajaUsuarioDominioAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');         
        if($request->getMethod() == 'POST'){

            $usuarioDominioObj = $em->getRepository('PiedraBundle:UsuarioDominio')->find(intval($request->request->get('id')));

            if ($request->request->get('action') === 'edit') {                            

                if($request->request->get('nombre')){
                    $usuarioDominioObj->setNombre($request->request->get('nombre'));                
                }else if($request->request->get('usuario_red')){                    
                    $usuarioDominioObj->setUsuarioRed($usuarioRedObj);                
                }else if($request->request->get('observacion')){                    
                    $usuarioDominioObj->setObservacion($request->request->get('observacion'));                
                }else if($request->request->get('ci')){        

                    print_r($request->request->get('ci'));            
                    $usuarioDominioObj->setCi($request->request->get('ci'));                
                }

                //modificar usuarioDominioObj
                $em->persist($usuarioDominioObj);
                $em->flush();                        

            } else if ($request->request->get('action') === 'delete') {

                $em->remove($usuarioDominioObj);
                $em->flush();                                 
                   
            } else if ($request->request->get('action') === 'restore') {
              // PHP code for edit restore

            }
        }   

        $usuario_dominios = $em->getRepository('PiedraBundle:UsuarioDominio')->getUsuarioDominio(true);  

        $usuario_reds = $em->getRepository('PiedraBundle:UsuarioRed')->getUsuarioRedASC();
        $cargos = $em->getRepository('PiedraBundle:Cargo')->findAll();
        $emails = $em->getRepository('PiedraBundle:Email')->findAll();  
        $sistemas = $em->getRepository('PiedraBundle:Sistema')->findAll(); 
      
        return $this->render('PiedraBundle:Baja:bajaUsuarioDominio.html.twig',array(  
             
            'usuario_reds' => $usuario_reds,
            'cargos' => $cargos,
            'emails' => $emails,
            'usuario_dominios' => $usuario_dominios,
            'sistemas' => $sistemas        
                   
        ));
    }
   
   


    /*
    * adicionar documentos
    */
    public function adicionarDocumentoAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');

        $organismos = $em->getRepository('PiedraBundle:Organismo')->findAll();
        $documentos = $em->getRepository('PiedraBundle:Documento')->getDocumentosByOrganismo();


        if($request->getMethod() == "POST"){

            if ($request->request->get('action') === 'edit') {    

                $documentoObj = $em->getRepository('PiedraBundle:Documento')->find(intval($request->request->get('idD')));         

                if($request->request->get('nombreDoc')){

                    $nombre_doc = $request->request->get('nombreDoc');
                    //dir archivo obtenida de config
                    $dir_archivo = $this->container->getParameter('directorio.documentos').$documentoObj->getOrganismo().'/';

                    $dir_old = $dir_archivo.$documentoObj->getNombreDoc().'-('.$documentoObj->getFecha()->format('d-m-Y').')'.'.'.$documentoObj->getExtArchivo();
                    $dir_new = $dir_archivo.$nombre_doc.'-('.$documentoObj->getFecha()->format('d-m-Y').')'.'.'.$documentoObj->getExtArchivo();

                    $url_archivo_new = 'uploads/documentos/'.$documentoObj->getOrganismo().'/'.$nombre_doc.'-('.$documentoObj->getFecha()->format('d-m-Y').')';                   
                    if (file_exists($dir_old)) {                       
                        rename($dir_old, $dir_new);

                        //modificar documento 
                        $documentoObj
                        ->setNombreDoc($nombre_doc)
                        ->setUrlArchivo($url_archivo_new);

                        //modificar documento
                        $em->persist($documentoObj);
                        $em->flush();                         
                    }                   
                    
                }else if($request->request->get('descripcion')){
                    $documentoObj->setDescripcion($request->request->get('descripcion'));  
                    //modificar documento
                    $em->persist($documentoObj);
                    $em->flush();                 
                }                       

            } else if ($request->request->get('action') === 'delete') {
                $documentoObj = $em->getRepository('PiedraBundle:Documento')->find(intval($request->request->get('idD')));
                //dir archivo obtenida de config
                $dir_archivo = $this->container->getParameter('directorio.documentos').$documentoObj->getOrganismo().'/';
                $dir_doc = $dir_archivo.$documentoObj->getNombreDoc().'-('.$documentoObj->getFecha()->format('d-m-Y').')'.'.'.$documentoObj->getExtArchivo();

                if (file_exists($dir_doc)) {
                    //eliminar documento de /web                    
                    unlink($dir_doc);                         
                }

                $em->remove($documentoObj);
                $em->flush();


                              

                   
            } else if ($request->request->get('action') === 'restore') {

              // PHP code for edit restore

            }else{ 


            $fecha = new \Datetime('now');
            $organismoObj = $em->getRepository('PiedraBundle:Organismo')->find(intval($request->request->get('organismo')));
           
            
            // imagen file
            $imgDocumento = $request->files->get('imgDocumento');
            $file = file_get_contents($imgDocumento->getPathName());
            $img = base64_encode($file);

            //doc file
            $documento = $request->files->get('documento');
            $nombre_archivo =  $request->request->get('nombre_doc'); //$documento->getClientOriginalName();//  file_get_contents($documento->getPathName());

            
            $ext_archivo = $documento->getClientOriginalExtension();

            //dir archivo obtenida de config
            $dirArchivo = $this->container->getParameter('directorio.documentos').$organismoObj->getOrganismo().'/';

            //adicionar documento
            $documentoObj = new Documento();

            $url_archivo = 'uploads/documentos/'.$organismoObj->getOrganismo().'/'.$nombre_archivo.'-('.$fecha->format('d-m-Y').')';

            $documentoObj
                ->setDescripcion($request->request->get('descripcion'))
                ->setFecha($fecha)
                ->setNombreDoc($nombre_archivo)
                ->setImgArchivo($img)
                ->setUrlArchivo($url_archivo)
                ->setExtArchivo($ext_archivo)
                ->setOrganismo($organismoObj);

             //mover archivo al directorio     

            // print_r($dirArchivo); exit;              
             $documento->move( $dirArchivo , $nombre_archivo.'-('.$fecha->format('d-m-Y').')'.'.'.$ext_archivo );

            $em->persist($documentoObj);
            $em->flush();

            return new RedirectResponse($this->generateUrl('adicionar_documento'));
        }


        }

        return $this->render('PiedraBundle:Gestion:documentos.html.twig',array(                     
            'organismos'=>$organismos,
            'documentos' =>$documentos   
        ));
    }


    /*
    * Adicionar Contrasenna del setup
    */    
    public function adicionarPasswordSetupAction(Request $request){

        $em = $this->getDoctrine()->getManager('default');


        //listados 
        $password_setups = $em->getRepository('PiedraBundle:PasswordSetup')->findAll();
        $departamentos = $em->getRepository('PiedraBundle:Departamento')->findAll();

        if($request->getMethod() == 'POST'){

            $passwordSetupObj = $em->getRepository('PiedraBundle:PasswordSetup')->find(intval($request->request->get('id')));



        if ($request->request->get('action') === 'edit') {

            if ($request->request->get('password')){
                $passwordSetupObj->setPassword($request->request->get('password'));
            }else if ($request->request->get('pc')){
                $passwordSetupObj->setPc($request->request->get('pc'));
            }else if ($request->request->get('area')){
                $passwordSetupObj->setArea($request->request->get('area'));
            }

            $em->persist($passwordSetupObj);
            $em->flush();
                   

        } else if ($request->request->get('action') === 'delete'){

            // eliminar 
            $em->remove($passwordSetupObj);
            $em->flush();

               
        } else if ($request->request->get('action') === 'restore') {

          // PHP code for edit restore

        }else{
            
            // adicionar nuevo password setup
            $passwordSObj = new PasswordSetup();
            $passwordSObj
                ->setArea($request->request->get('area'))
                ->setPc($request->request->get('nombrepc'))
                ->setPassword($request->request->get('password'));
            $em->persist($passwordSObj);
            $em->flush();

        return new RedirectResponse($this->generateUrl('adicionar_password_setup'));    
        } 

                       
        }       

        return $this->render('PiedraBundle:Gestion:adicionarPasswordSetup.html.twig',array(                     
            'departamentos'=> $departamentos,
            'password_setups' => $password_setups
            ));
    }


    /*
    * adiconar adicionar_inventario_null
    */
    public function adicionarInventarioNullAction(Request $request, $idD)
    {   

        $em = $this->getDoctrine()->getManager('default');
        $departamentoObj = $em->getRepository('PiedraBundle:Departamento')->find($idD);
        $componenteObj = $em->getRepository('PiedraBundle:Componente')->find(1);

        $inventarioObj = new Inventario();
        $inventarioObj
            ->setComponente($componenteObj)
            ->setDepartamento($departamentoObj);

        $em->persist($inventarioObj);
        $em->flush();

        return new RedirectResponse($this->generateUrl('inventario_departamento',array('idD'=>$idD))); 
        
    }

    /*
    * listado de inventario en baja 
    */    
    public function inventarioBajaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager('default');
        $inventarios_baja = $em->getRepository('PiedraBundle:Inventario')->getInventarioBaja();               

        if($request->getMethod() == 'POST'){

            $inventarioObj = $em->getRepository('PiedraBundle:Inventario')->find(intval($request->request->get('id')));

            if ($request->request->get('action') === 'edit') {             

                if($request->request->get('estado')){
                    $inventarioObj->setEstado($request->request->get('estado'));                
                }
                //modificar inventarioObj
                $em->persist($inventarioObj);
                $em->flush(); 
                       

            } else if ($request->request->get('action') === 'delete') {

                
                //eliminar inventarioObj
                $em->remove($inventarioObj);
                $em->flush(); 

                

                   
            } else if ($request->request->get('action') === 'restore') {

              // PHP code for edit restore

            }         }   


        return $this->render('PiedraBundle:Gestion:inventarioBaja.html.twig',array(     
            'inventarios_baja'=>$inventarios_baja           
            ));
    }



    /***** AJax ********/

    /*
    * listado pc por ajax
    */
    public function listaPcAjaxAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('default');
        $departamentoObj = $em->getRepository('PiedraBundle:Departamento')->find(intval($request->request->get('idD')));

        // listdo String
        $pcs = $em->getRepository('PiedraBundle:Pc')->getPcsDepartamento($departamentoObj);
        $componentes = $em->getRepository('PiedraBundle:Componente')->getComponentes();

     

        $array = array(
            'pcs' => $pcs,
            'componentes' => $componentes

        );
        
        $response = new Response(json_encode($array));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /* 
    * Listado usuario red por ajax
    */    
    public function listaUsuarioRedAjaxAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('default');        
        $usuario_red = $em->getRepository('PiedraBundle:UsuarioRed')->getUsuarioRedSinEspeciales();
    
        $array = array(
            'usuario_red' => $usuario_red
        );
        
        $response = new Response(json_encode($array));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /*
    * checkbox usuario dominio ajax
    */
    public function usuarioDominioCheckboxAjaxAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('default');     

        if($request->getMethod() == 'POST'){

            $check = $request->request->get('check');
            $action = $request->request->get('action');

            if ($action == 'navNacional' || $action == 'navInternet' || $action == 'emailNacional' || $action == 'emailInternet' || $action == 'ftp' || $action == 'chat'){

                $usuarioDomObj = $em->getRepository('PiedraBundle:UsuarioDominio')->find(intval($request->request->get('id')));
                // Navegacion, coreo, etc
                if ($action == 'navNacional'){
                        $usuarioDomObj->setNavNacional($check? TRUE : FALSE);
                }else if ($action == 'navInternet'){
                        $usuarioDomObj->setNavInternet($check? TRUE : FALSE);
                }else if ($action == 'emailNacional'){
                        $usuarioDomObj->setEmailNacional($check? TRUE : FALSE);
                }else if ($action == 'emailInternet'){
                        $usuarioDomObj->setEmailInternet($check? TRUE : FALSE);
                }else if ($action == 'ftp'){
                        $usuarioDomObj->setFtp($check? TRUE : FALSE);
                }else if ($action == 'chat'){
                        $usuarioDomObj->setChat($check? TRUE : FALSE);
                }            
                $em->persist($usuarioDomObj);
            }

            if ($action == 'zunAcc' || $action == 'zunAft' || $action == 'zunPms' || $action == 'zunPos' || $action == 'zunStock' || $action == 'abacoNomina' || $action == 'habitat' || $action == 'sarh' || $action == 'zunUtil' || $action == 'aListar' || $action == 'sstt' || $action == 'reservas' || $action == 'compras' || $action == 'inHova' || $action == 'aInformatica' || $action == 'zunIcs'){
                $sistemaObj = $em->getRepository('PiedraBundle:Sistema')->find(intval($request->request->get('id')));
                //sistemas            
                if ($action == 'zunAcc'){
                        $sistemaObj->setZunAcc($check? TRUE : FALSE);
                }else if ($action == 'zunAft'){
                        $sistemaObj->setZunAft($check? TRUE : FALSE);
                }else if ($action == 'zunUtil'){
                        $sistemaObj->setUtil($check? TRUE : FALSE);
                }else if ($action == 'zunPms'){
                        $sistemaObj->setZunPms($check? TRUE : FALSE);
                }else if ($action == 'zunPos'){
                        $sistemaObj->setZunPos($check? TRUE : FALSE);
                }else if ($action == 'zunStock'){
                        $sistemaObj->setZunStock($check? TRUE : FALSE);
                }else if ($action == 'zunIcs'){
                        $sistemaObj->setZunIcs($check? TRUE : FALSE);
                }else if ($action == 'abacoNomina'){
                        $sistemaObj->setAbacoNomina($check? TRUE : FALSE);
                }else if ($action == 'habitat'){
                        $sistemaObj->setHabitat($check? TRUE : FALSE);
                }else if ($action == 'sarh'){
                        $sistemaObj->setSarh($check? TRUE : FALSE);
                }else if ($action == 'aListar'){
                        $sistemaObj->setAListar($check? TRUE : FALSE);
                }else if ($action == 'sstt'){
                        $sistemaObj->setSstt($check? TRUE : FALSE);
                }else if ($action == 'reservas'){
                        $sistemaObj->setReservas($check? TRUE : FALSE);
                }else if ($action == 'compras'){
                        $sistemaObj->setCompras($check? TRUE : FALSE);
                }else if ($action == 'inHova'){
                        $sistemaObj->setInHova($check? TRUE : FALSE);
                }else if ($action == 'aInformatica'){
                        $sistemaObj->setAInformatica($check? TRUE : FALSE);
                }
                $em->persist($sistemaObj);                
            }            

            $em->flush();
        }
                    
        $response = new Response(json_encode('Actualizo'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /*
    * checkbox password setup ajax
    */
    public function passwordSetupsCheckboxAjaxAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('default');     

        if($request->getMethod() == 'POST'){

            $check = $request->request->get('check');
            $action = $request->request->get('action');          

            if ($action == 'isAdministrativa'){

                $passwordSetupObj = $em->getRepository('PiedraBundle:PasswordSetup')->find(intval($request->request->get('id')));
                         
                $passwordSetupObj->setIsAdministrativa($check? TRUE : FALSE);
                $em->persist($passwordSetupObj);   
                $em->flush();            
            }            
            
        }
                    
        $response = new Response(json_encode('Actualizo'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


     /*
    * checkbox usuario dominio ajax
    */
    public function correoCheckboxAjaxAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('default');     

        if($request->getMethod() == 'POST'){

            $check = $request->request->get('check');
            $action = $request->request->get('action');

            $emailObj = $em->getRepository('PiedraBundle:Email')->find(intval($request->request->get('id')));
            
            // is DIreccion
            if ($action == 'isDireccion'){
                    $emailObj->setIsDireccion($check? TRUE : FALSE);
            }

            $em->persist($emailObj);
            $em->flush();
        }
                    
        $response = new Response(json_encode('Actualizo'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    

     /*
    * checkbox usuario dominio ajax
    */
    public function telefonoCheckboxAjaxAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager('default');     

        if($request->getMethod() == 'POST'){

            $check = $request->request->get('check');
            $action = $request->request->get('action');

            $telefonoObj = $em->getRepository('PiedraBundle:Telefono')->find(intval($request->request->get('id')));
            
            // is DIreccion
            if ($action == 'isExterno'){
                    $telefonoObj->setIsExterno($check? TRUE : FALSE);
            }

            $em->persist($telefonoObj);
            $em->flush();
        }
                    
        $response = new Response(json_encode('Actualizo'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    


    
   
 




}


