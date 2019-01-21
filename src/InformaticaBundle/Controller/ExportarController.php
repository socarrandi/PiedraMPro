<?php

namespace InformaticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Include the BinaryFileResponse and the ResponseHeaderBag
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

// Include the requires classes of Phpword
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\Settings;
use PhpOffice\Common\Autoloader;
use PhpOffice\test\bootstrap;


class ExportarController extends Controller
{

    /**
     * Listado Nominal de Usuarios
     */
    public function exportarListadoNominalUsuarioAction(Request $request)
    {   
        $user = $this->getUser();

        print_r('entre');
        $em = $this->getDoctrine()->getManager('informatica');  
        $usuario_dominios = $em->getRepository('InformaticaBundle:UsuarioDominio')->findByBaja($baja = false);  

        
        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/listado_nominal_de_usuarios.docx');
        
        // Simple table
        $templateProcessor->cloneRow('nombre', count($usuario_dominios));       

        $cont = 0;

        foreach ($usuario_dominios as $usuario) {
            $cont++;
            $templateProcessor->setValue('id#'.$cont, $cont);
            $templateProcessor->setValue('nombre#'.$cont, strval($usuario->getNombreCompleto()));
            $templateProcessor->setValue('cargo#'.$cont, strval($usuario->getCargo()->getCargo()));
            $templateProcessor->setValue('pcs#'.$cont, "...");
            $templateProcessor->setValue('usuario#'.$cont, strval($usuario->getUsuarioRed()));

            $templateProcessor->setValue('nn#'.$cont, $usuario->getNavNacional()? 'X' : ' ');
            $templateProcessor->setValue('ni#'.$cont, $usuario->getNavInternet()? 'X' : ' ');
            $templateProcessor->setValue('en#'.$cont,$usuario->getEmailNacional()? 'X' : ' ');
            $templateProcessor->setValue('ei#'.$cont,$usuario->getEmailInternet()? 'X' : ' ');
            $templateProcessor->setValue('ftp#'.$cont,$usuario->getFtp()? 'X' : ' ');
            $templateProcessor->setValue('chat#'.$cont,$usuario->getChat()? 'X' : ' '); 
            $templateProcessor->setValue('observacion#'.$cont, strval($usuario->getObservacion()));
        }

        $templateProcessor->setValue('usuario_director_adjunto', strval($user->getUnidad()->getDirector()));
        $templateProcessor->setValue('usuario_informatico', strval($user->getName()));   
        $templateProcessor->setValue('hotel', strval('Hotel '.$user->getUnidad()->getUnidad()));         

        $templateProcessor->saveAs('uploads/temp/listado_nominal_de_usuarios.docx');

        
        $file_url = 'uploads/temp/listado_nominal_de_usuarios.docx';
        header('Content-Type: application/docx'); // ZIP file
        header('Content-Disposition: attachment; filename="listado_nominal_de_usuarios.docx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($file_url));
        readfile($file_url);
        exit();
    }

    /**
     * exportar Solicitud asignacion Serv Inf
     */
    public function exportarSolicitudAsignacionServInfAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager('informatica'); 

        $udObj = $em->getRepository('InformaticaBundle:UsuarioDominio')->find($request->request->get('id_usuario'));

        if(!$udObj){
            return  new RedirectResponse($this->generateUrl('gestionar_usuario_dominio'));
        }       

        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/modelo_solicitud_de_ASI.docx');
        
        // Solicitud Asignacion de Servicios Informaticos
        $templateProcessor->setValue('nombre', strval($udObj->getNombre()));
        $templateProcessor->setValue('apellido1', strval($udObj->getPrimerApellido()));

        $templateProcessor->setValue('apellido2', strval($udObj->getSegundoApellido()));
        $templateProcessor->setValue('ci', strval($udObj->getCi()));
        $templateProcessor->setValue('cargo', strval($udObj->getCargo()->getCargo()));

        $templateProcessor->setValue('email', $udObj->getEmail()->getEmail());
        $templateProcessor->setValue('usuario_pc', strval($udObj->getUsuarioRed()->getUsuario()));
        $templateProcessor->setValue('nombre_completo', strval($udObj->__toString()));

        $templateProcessor->setValue('d', strval($udObj->getFecha()->format('d')));
        $templateProcessor->setValue('m', strval($udObj->getFecha()->format('m')));
        $templateProcessor->setValue('a', strval($udObj->getFecha()->format('Y')));
        $templateProcessor->setValue('local', $udObj->getLocal()->getArea()->getArea().' / '.$udObj->getLocal()->getLocal());

            
        $templateProcessor->saveAs('uploads/temp/modelo_solicitud_de_ASI.docx', 'Word2007');

        $response = new Response(json_encode(true));
        $response->headers->set('Content-Type', 'application/json');
        return $response; 
    }


	/**
     * Listado Usuario Nominal
     */
    public function exportarInventarioAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();

    	if($request->getMethod() == 'POST'){  

            if ($request->request->get('isExpTec') == false ){

                if ($request->request->get('action') == 'exportar_inventario' ){ 

                $id_equipo = $request->request->get('id_equipo');               
                $id_local = $request->request->get('id_local');
                $formato = $request->request->get('formato');
                $baja = $request->request->get('baja');

                $localObj = $em->getRepository("InformaticaBundle:Local")->find($id_local);
                $tipoEquipoObj = $em->getRepository("InformaticaBundle:TipoEquipo")->find($id_equipo);

                                
                $equipos = $em->getRepository('InformaticaBundle:Equipo')
                              ->getEquipos($baja = $baja, $unidad = $user->getUnidad(), $localObj, $tipoEquipoObj);
            }

            if($formato == 'doc'){ 
                //listado resumen del local equipo especifico
                $this->exportar_word_resumen($equipos, $localObj, $tipoEquipoObj, $formato, $baja); 

                $response = new Response(json_encode($formato));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if($formato == 'pdf' || $formato == 'print'){ 
                $array = array();                   
                foreach ($equipos as $equipo) {
                    $array[] = array(                           
                        $equipo->getTipoEquipo()->getTipoEquipo(),
                        $equipo->getResponsable()->getLocal()->getLocal(),
                        $equipo->getResponsable()->getLocal()->getArea()->getArea(),
                        $equipo->getResponsable()->getResponsable(),
                        $equipo->getEstadoEquipo()->getEstado(),
                        $equipo->getMedioBasico(), 
                        $equipo->getNoSubmayor(),
                        $equipo->getNombreEquipo(),
                        $equipo->getSello(),
                        $equipo->getObservacion()                       
                    );   
                }

                $otuput = array(
                        'equipos' => $array,
                        'local' => ($localObj ? ('UBICACIÓN: '.$localObj->getLocal().' |'): ' '),
                        'tipo_equipo'=> $tipoEquipoObj,
                        'formato' => $formato
                    );
                    
                $response = new Response(json_encode($otuput));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

                }

            }else{

                if($formato == 'doc'){ 
                //listado resumen del local equipo especifico
                $this->exportar_word_expediente_tecnico(); 

                $response = new Response(json_encode($formato));
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }


            }  		

            

            	

            }            	
	}



	function exportar_word_resumen($equipos, $local, $tipo_equipo, $formato, $baja){
			
		$em = $this->getDoctrine()->getManager('informatica');		
        //$phpWord = new PhpWord();
        $phpWord = new TemplateProcessor('uploads/plantillas/informatica/INVENTARIO_DE_EQUIPOS.docx');
		
		// Simple table
		$phpWord->cloneRow('equipo', count($equipos));

		$cont = 0;

		foreach ($equipos as $equipo) {
			$cont++;
			$phpWord->setValue('equipo#'.$cont, $equipo->getTipoEquipo()->getTipoEquipo());
            $phpWord->setValue('area#'.$cont, $equipo->getResponsable()->getLocal()->getArea()->getArea());
			$phpWord->setValue('ubicacion#'.$cont, $equipo->getResponsable()->getLocal()->getLocal());
		//	$phpWord->setValue('responsable#'.$cont, $equipo->getResponsable()->getResponsable());
			$phpWord->setValue('estado#'.$cont, $equipo->getEstadoEquipo()->getEstado());
			$phpWord->setValue('mb#'.$cont, $equipo->getMedioBasico());
			//$phpWord->setValue('sm#'.$cont, $equipo->getNoSubmayor());
			$phpWord->setValue('neq#'.$cont, $equipo->getNombreEquipo());
			$phpWord->setValue('sello#'.$cont, $equipo->getSello());
			$phpWord->setValue('observacion#'.$cont, $equipo->getObservacion());
		}
		
		//datos generales		
		$phpWord->setValue('local', $local ? ('DEPARTAMENTO: '.$local->getLocal()) : 'Todos los Departamentos');
        $phpWord->setValue('cont', $cont);
        $phpWord->setValue('baja',  $baja == 1 ? 'BAJAS' : '' );
		$phpWord->setValue('tipo_equipo',  $tipo_equipo ? ('EQUIPO: '.$tipo_equipo->getTipoEquipo()) : 'Todos los Equipos' );
		$phpWord->saveAs('uploads/temp/informatica/INVENTARIO_DE_EQUIPOS.docx', 'Word2007');
		
	}

    /*
    * Exportar Expediente Tecnico Resumen
    */
    function exportarExpedienteTecnicoAction(Request $request){
            
        $em = $this->getDoctrine()->getManager('informatica');    
        $user = $this->getUser();  
        //$phpWord = new PhpWord();
        $phpWord = new TemplateProcessor('uploads/plantillas/informatica/MODELO_ANEXO_NO1.docx');

        $monitores = $em->getRepository('InformaticaBundle:Equipo')->getEquipoExpTec($user->getUnidad());

               
        // Simple table
        $phpWord->cloneRow('no', count($monitores));

        $cont = 0;
        //datos generales
        $phpWord->setValue('ueb', $user->getUnidad()->getUeb());

        foreach ($monitores as $monitor) {
            $cont++;

            $pieza_motherboard = $em->getRepository('InformaticaBundle:Pieza')->find(2);
            $pieza_cpu = $em->getRepository('InformaticaBundle:Pieza')->find(3);
            $pieza_hdd = $em->getRepository('InformaticaBundle:Pieza')->find(4);
            $pieza_ram = $em->getRepository('InformaticaBundle:Pieza')->find(5);
            $pieza_cd = $em->getRepository('InformaticaBundle:Pieza')->find(11);

           // $inventarioEquipo = $em->getRepository('InformaticaBundle:Inventario')->findByEquipo($monitor->getEquipo());
            $invMonitor = $em->getRepository('InformaticaBundle:InventarioEquipo')->findByEquipo($monitor);

            $phpWord->setValue('no#'.$cont, $cont);
            $phpWord->setValue('mb_pc#'.$cont, $monitor->getEquipo()->getMedioBasico() );


            $invMother = $em->getRepository('InformaticaBundle:InventarioEquipo')->getPiezaInvEquipo($monitor->getEquipo(), $pieza_motherboard );
            $invCPU = $em->getRepository('InformaticaBundle:InventarioEquipo')->getPiezaInvEquipo($monitor->getEquipo(), $pieza_cpu );
            $invRAM = $em->getRepository('InformaticaBundle:InventarioEquipo')->getPiezaInvEquipo($monitor->getEquipo(), $pieza_ram );

            $c= 0; $rams = '';
            foreach ($invRAM as $ram) {
              $c++;
              $rams.= $ram->getCTecnica().', ';
            }

            $invHDD = $em->getRepository('InformaticaBundle:InventarioEquipo')->getPiezaInvEquipo($monitor->getEquipo(), $pieza_hdd );
            $invCD = $em->getRepository('InformaticaBundle:InventarioEquipo')->getPiezaInvEquipo($monitor->getEquipo(), $pieza_cd );

            $phpWord->setValue('marca_modelo#'.$cont, ($invMother!=null) ? ($invMother[0]->getMarca().' '.$invMother[0]->getModelo()):'');
            $phpWord->setValue('cpu#'.$cont, ($invCPU!=null)?($invCPU[0]->getMarca().' '.$invCPU[0]->getModelo().' '.$invCPU[0]->getCTecnica()):'');
            $phpWord->setValue('ram#'.$cont, ($invRAM!=null)?($rams.' ('.$c.')'):'');
            $phpWord->setValue('hdd#'.$cont, ($invHDD!=null)?($invHDD[0]->getCTecnica()):'');
            $phpWord->setValue('cd#'.$cont, ($invCD!=null)?($invCD[0]->getMarca().' '.$invCD[0]->getModelo().' '.$invCD[0]->getCTecnica()):'');
       
            $phpWord->setValue('monitor#'.$cont, $invMonitor[0]->getMarca().' '.$invMonitor[0]->getModelo().' '.$invMonitor[0]->getCTecnica());
            $phpWord->setValue('mb_monitor#'.$cont, $monitor->getMedioBasico());

            $phpWord->setValue('local#'.$cont, $monitor->getResponsable()->getLocal()->getLocal());
            $phpWord->setValue('observacion#'.$cont, $monitor->getEquipo()->getObservacion());
        }


        
        //datos generales    
        $phpWord->saveAs('uploads/temp/informatica/MODELO_ANEXO_NO1.docx', 'Word2007');

        $response = new Response(json_encode(true));
        $response->headers->set('Content-Type', 'application/json');
        return $response; 
        
    }

    /*
    * Exportar Expediente Tecnico de la Pc
    */
    function exportarExpedienteTecnicoPcAction(Request $request){
            
        $em = $this->getDoctrine()->getManager('informatica');    
        $user = $this->getUser();  

        $phpWord = new TemplateProcessor('uploads/plantillas/informatica/EXPEDIENTE_TECNICO_PC.docx');

        $pcObj = $em->getRepository('InformaticaBundle:Equipo')->find($request->request->get('id_pc'));

        
        $inventarioPiezaInt = $em->getRepository('InformaticaBundle:InventarioEquipo')->getInvEquipoTipoPieza($pcObj, 1); 
        $inventarioPiezaExt = $em->getRepository('InformaticaBundle:InventarioEquipo')->getInvEquipoTipoPieza($pcObj, 0);
        $inventarioPiezaAdo = $em->getRepository('InformaticaBundle:InventarioEquipo')->getInvEquipoTipoPieza($pcObj, 2);
       
        
        // Simple table
        $phpWord->cloneRow('pieza_int', count($inventarioPiezaInt));
        $phpWord->cloneRow('pieza_ext', count($inventarioPiezaExt));
        $phpWord->cloneRow('pieza_ado', count($inventarioPiezaAdo));
        $cont1= 0; $cont2= 0; $cont3 = 0;

        //para piezas internas
        foreach ($inventarioPiezaInt as $inv) {           
           
            $cont1++;
            $phpWord->setValue('pieza_int#'.$cont1, $inv->getPieza()->getPieza());
            $phpWord->setValue('marca_modelo_int#'.$cont1, $inv->getMarca().' '.$inv->getModelo() );
            $phpWord->setValue('ctecnica_int#'.$cont1, $inv->getCTecnica() );
            $phpWord->setValue('noserie_int#'.$cont1, $inv->getSerial() );
           
        }

        //para piezas externas
        foreach ($inventarioPiezaExt as $inv) { 
            $cont2++;
            $phpWord->setValue('pieza_ext#'.$cont2, $inv->getPieza()->getPieza());
            $phpWord->setValue('marca_modelo_ext#'.$cont2, $inv->getMarca().' '.$inv->getModelo() );
            $phpWord->setValue('ctecnica_ext#'.$cont2, $inv->getCTecnica() );
            $phpWord->setValue('noserie_ext#'.$cont2, $inv->getSerial() );
           
        }

        //para piezas asociadas
        if($inventarioPiezaAdo!= null){
                foreach ($inventarioPiezaAdo as $inv) {          
                $cont3++;
                $phpWord->setValue('pieza_ado#'.$cont3, $inv->getPieza()->getPieza());
                $phpWord->setValue('marca_modelo_ado#'.$cont3, $inv->getMarca().' '.$inv->getModelo() );
                $phpWord->setValue('ctecnica_ado#'.$cont3, $inv->getCTecnica() );
                $phpWord->setValue('noserie_ado#'.$cont3, $inv->getSerial() );           
            }
        }else{

            $phpWord->setValue('pieza_ado#1', '');
            $phpWord->setValue('marca_modelo_ado#1', '' );
            $phpWord->setValue('ctecnica_ado#1', '' );
            $phpWord->setValue('noserie_ado#1', '' );
           
        }
        

        
        //datos generales  
        $phpWord->setValue('no', $pcObj->getId());
        $phpWord->setValue('medio_basico', $pcObj->getMedioBasico());
        $phpWord->setValue('sello', $pcObj->getSello());
        $phpWord->setValue('responsable', $pcObj->getResponsable()->getLocal()->getLocal().' / '.$pcObj->getResponsable()->getResponsable());

        $phpWord->saveAs('uploads/temp/informatica/EXPEDIENTE_TECNICO_PC.docx', 'Word2007');



        $response = new Response(json_encode(true));
        $response->headers->set('Content-Type', 'application/json');
        return $response; 
        
    }

    /*
    * Plantilla de Movimiento AFT
    */
    function exportarMovimientoAftAction(Request $request){

        $em = $this->getDoctrine()->getManager('informatica');      
        //$phpWord = new PhpWord();
        $phpWord = new TemplateProcessor('uploads/plantillas/informatica/MOVIMIENTO_AFT.docx');
        $movObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->find($request->request->get('id_mov'));

        $fecha = new \DateTime('now');
        
        //datos generales
        $phpWord->setValue('carea', $movObj->getResponsableOrigen()->getLocal()->getArea()->getCodigo()?'('.$movObj->getResponsableOrigen()->getLocal()->getArea()->getCodigo().')':'' );
        $phpWord->setValue('area', strval($movObj->getResponsableOrigen()->getLocal()->getArea()->getArea()));
        $phpWord->setValue('clocal', $movObj->getResponsableOrigen()->getLocal()->getCodigo()?'('.$movObj->getResponsableOrigen()->getLocal()->getCodigo().')':'' );
        $phpWord->setValue('local', $movObj->getResponsableOrigen()->getLocal()->getLocal() );

        $phpWord->setValue('caread', $movObj->getResponsableDestino()->getLocal()->getArea()->getCodigo()?'('.$movObj->getResponsableDestino()->getLocal()->getArea()->getCodigo().')': '' );
        $phpWord->setValue('aread', $movObj->getResponsableDestino()->getLocal()->getArea()->getArea());
        $phpWord->setValue('clocald', $movObj->getResponsableDestino()->getLocal()->getCodigo()?'('.$movObj->getResponsableDestino()->getLocal()->getCodigo().')':'' );
        $phpWord->setValue('locald', $movObj->getResponsableDestino()->getLocal()->getLocal() );

        //receptor


        $subAreaObj = $em->getRepository('InformaticaBundle:SubLocal')->find($request->request->get('id_subarea_receptor'));
        $phpWord->setValue('csubaread', $subAreaObj?'('.$subAreaObj->getCodigo().')':'' );
        $phpWord->setValue('subaread', $subAreaObj?$subAreaObj->getSubLocal():'');
        $phpWord->setValue('entidad_receptor', '('.$movObj->getResponsableOrigen()->getUnidad()->getCodigo().') '.$movObj->getResponsableOrigen()->getUnidad()->getUnidad() );
        $phpWord->setValue('direccion_receptor', $movObj->getResponsableOrigen()->getUnidad()->getDireccion() );

        $phpWord->setValue('medio_basico', $movObj->getEquipo()->getMedioBasico());
        $phpWord->setValue('tipo_movimiento', $movObj->getTipoMovimiento()->getTipo() );
        $phpWord->setValue('usuario', $movObj->getUsuario());
        $phpWord->setValue('fundamento', $request->request->get('fundamento'));
        $phpWord->setValue('entidad', $request->request->get('entidad'));
        $phpWord->setValue('direccionp', $request->request->get('direccionp'));
        $phpWord->setValue('descripción_equipo', $movObj->getEquipo()->getTipoEquipo()->getTipoEquipo());
        

        //Autorizos
        $rautorizado = $em->getRepository('InformaticaBundle:Responsable')->find($request->request->get('autorizado_por'));
        $rreceptor = $em->getRepository('InformaticaBundle:Responsable')->find($request->request->get('receptor_por'));
        $rhecho = $em->getRepository('InformaticaBundle:Responsable')->find($request->request->get('hecho_por'));

        $phpWord->setValue('autorizado_por', $rautorizado->getResponsable());
        $phpWord->setValue('cargo_autorizado_por', $rautorizado->getCargo()->getCargo());
        $phpWord->setValue('receptor_por', $rreceptor->getResponsable());
        $phpWord->setValue('cargo_receptor_por', $rreceptor->getCargo()->getCargo());
        $phpWord->setValue('hecho_por', $rhecho->getResponsable());
        $phpWord->setValue('cargo_hecho_por', $rhecho->getCargo()->getCargo());
        $phpWord->setValue('aprobado_por', $request->request->get('aprobado_por'));


        //fecha alquisicion
        $phpWord->setValue('dia', $movObj->getFecha()->format('d') );
        $phpWord->setValue('mes', $movObj->getFecha()->format('m') );
        $phpWord->setValue('anno', $movObj->getFecha()->format('Y') );

        //fecha actual
        $phpWord->setValue('diaa', $fecha->format('d') );
        $phpWord->setValue('mesa', $fecha->format('m') );
        $phpWord->setValue('annoa', $fecha->format('Y') );
        
        $mb = floatval($movObj->getEquipo()->getMedioBasico());
        //print_r($mb);
                
        $phpWord->saveAs('uploads/temp/informatica/MOVIMIENTO_AFT/MOVIMIENTO_AFT_'.$mb.'.docx', 'Word2007');
      
        $response = new Response(json_encode($mb));
        $response->headers->set('Content-Type', 'application/json');
        return $response;     

    }


    /*
    *   Plantilla de Dictamen AFT
    */
    function exportarDictamenAftAction(Request $request){

        $em = $this->getDoctrine()->getManager('informatica');      
        //$phpWord = new PhpWord();
        $phpWord = new TemplateProcessor('uploads/plantillas/informatica/DICTAMEN_TECNICO_AFT.docx');

        $lista_id = $request->request->get('inventario');

        $inventarioEquipo = $em->getRepository('InformaticaBundle:InventarioEquipo')->getInventarioEquipo($lista_id);

        // Simple table
        $phpWord->cloneRow('codigo', count($inventarioEquipo));
        $cont = 0;
        foreach ($inventarioEquipo as $inv) {
            $cont++;
            $phpWord->setValue('codigo#'.$cont, '');
            $phpWord->setValue('no_serie#'.$cont, $inv->getSerial());
            $phpWord->setValue('descripcion#'.$cont, $inv->getPieza()->getPieza().' '.$inv->getMarca().' '.$inv->getModelo().' '.$inv->getCtecnica());
            $phpWord->setValue('defecto_tecnico#'.$cont, $request->request->get('dic_defecto_tec'));
        }   

        $phpWord->cloneRow('codigo2', count($inventarioEquipo));
        $cont2 = 0;
        foreach ($inventarioEquipo as $inv) {
            $cont2++;
            $phpWord->setValue('codigo2#'.$cont2, '');
            $phpWord->setValue('no_serie2#'.$cont2, $inv->getSerial());
            $phpWord->setValue('descripcion2#'.$cont2, $inv->getPieza()->getPieza().' '.$inv->getMarca().' '.$inv->getModelo().' '.$inv->getCtecnica());
            $phpWord->setValue('defecto_tecnico2#'.$cont2, $request->request->get('dic_defecto_tec'));
        }     

        $movObj = $em->getRepository('InformaticaBundle:MovimientoAFT')->find($request->request->get('id_mov'));

        $marca = '';
        if ($movObj->getEquipo()->getTipoEquipo()->getTipoEquipo() == 'Computadora'){
            $invCPU = $em->getRepository('InformaticaBundle:InventarioEquipo')->getInventarioCPUEquipo($movObj->getEquipo());
            $marca = $invCPU[0]->getMarca();
            $modelo = '1151';
            $serial = '';
            
        }else{
            $invE = $em->getRepository('InformaticaBundle:InventarioEquipo')->findByEquipo($movObj->getEquipo());
            $marca =  $invE[0]->getMarca();
            $modelo = $invE[0]->getModelo();
            $serial = $invE[0]->getSerial();
        }

        //fecha alquisicion
        $phpWord->setValue('dia', $movObj->getFecha()->format('d') );
        $phpWord->setValue('mes', $movObj->getFecha()->format('m') );
        $phpWord->setValue('anno', $movObj->getFecha()->format('Y') );

        $phpWord->setValue('tipo_equipo', $movObj->getEquipo()->getTipoEquipo()->getTipoEquipo());
        $phpWord->setValue('medio_basico', $movObj->getEquipo()->getMedioBasico());
        $phpWord->setValue('orden_servicio', $request->request->get('orden_servicio'));
        $phpWord->setValue('fundamentacion', $request->request->get('fundamento_dic'));
        $phpWord->setValue('direccion', $request->request->get('dic_direccion'));
        $phpWord->setValue('cliente', $request->request->get('cliente'));
        $phpWord->setValue('usuario', $movObj->getUsuario());

        $phpWord->setValue('marca', $marca );
        $phpWord->setValue('modelo_equipo', $modelo );
        $phpWord->setValue('serial', $serial );

        $mb = floatval($movObj->getEquipo()->getMedioBasico()); 
        $phpWord->saveAs('uploads/temp/informatica/DICTAMEN_TECNICO_AFT/DICTAMEN_TECNICO_AFT_'.$mb.'.docx', 'Word2007');        
       

        $response = new Response(json_encode($mb));
        $response->headers->set('Content-Type', 'application/json');
        return $response;


    }

	

	
}
