<?php

namespace RRHHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use RRHHBundle\Entity\Contrato;
use RRHHBundle\Entity\HorarioTrabajo;
use RRHHBundle\Entity\JornadaTrabajo;
use RRHHBundle\Entity\TipoInformacion;
use RRHHBundle\Entity\FormaPago;
use RRHHBundle\Entity\PeriodicidadPago;
use RRHHBundle\Entity\Salario;

class DefaultController extends Controller
{
   /**
    * Adicionar Contrato 
    */
    public function adicionarContratoAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        if($request->getMethod() == 'POST'){
        	$fecha = new \Datetime($request->request->get('fecha')); 
        	//objetos 
        	$nivelEscolarObj = $em->getRepository('RRHHBundle:NivelEscolar')->find(intval($request->request->get('nivel_escolar')));
        	$municipioObj = $em->getRepository('RRHHBundle:Municipio')->find(intval($request->request->get('municipio')));
        	$areaTrabajoObj = $em->getRepository('RRHHBundle:AreaTrabajo')->find(intval($request->request->get('area_trabajo')));
        	$cargoObj = $em->getRepository('PiedraBundle:Cargo')->find(intval($request->request->get('cargo')));
        	$categoriaOcupObj = $em->getRepository('RRHHBundle:CategoriaOcup')->find(intval($request->request->get('categoria_ocupacion')));

        	$grupoEscalaObj = $em->getRepository('RRHHBundle:GrupoEscala')->find(intval($request->request->get('grupo_escala')));
        	$tipoContratoObj = $em->getRepository('RRHHBundle:TipoContrato')->find(intval($request->request->get('tipo_contrato')));


        	$contratoObj = new Contrato();
        	$contratoObj
        		->setFecha($fecha)
        		->setNombre($request->request->get('nombre'))
        		->setCi($request->request->get('ci')) 
                ->setNoContrato($request->request->get('no_contrato'))                
        		->setSexo($request->request->get('sexo'))
        		->setNivelEscolar($nivelEscolarObj)
        		->setDireccion($request->request->get('direccion'))
        		->setProvincia($municipioObj->getProvincia())
        		->setMunicipio($municipioObj)
        		->setTelefono($request->request->get('telefono'))
        		->setAreaTrabajo($areaTrabajoObj)
        		->setTipoContrato($tipoContratoObj)
        		->setCargo($cargoObj)
        		->setCategoriaOcupacional($categoriaOcupObj)
        		->setGrupoEscala($grupoEscalaObj)
        		->setDuracionContrato($request->request->get('duracion_contrato'));

        	//adicionar contrato
        	$em->persist($contratoObj);

        	//adicionar Horario trabajo
            $horarioTrabajoObj = $em->getRepository('RRHHBundle:HorarioTrabajo')->findOneByContrato($contratoObj);
            if (!$horarioTrabajoObj){
                $horarioTrabajoObj = new HorarioTrabajo();
                $horarioTrabajoObj->setContrato($contratoObj);
                $em->persist($horarioTrabajoObj);
            }
        	        	
        	//adicionar Jornada trabajo
            $jornadaTrabajoObj = $em->getRepository('RRHHBundle:JornadaTrabajo')->findOneByContrato($contratoObj);
            if (!$jornadaTrabajoObj){
            	$jornadaTrabajoObj = new JornadaTrabajo();
            	$jornadaTrabajoObj->setContrato($contratoObj);
            	$em->persist($jornadaTrabajoObj);
            }

        	//adicionar Salario
            $salarioObj = $em->getRepository('RRHHBundle:Salario')->findOneByContrato($contratoObj);
            if (!$salarioObj){
            	$salarioObj = new Salario();
            	$salarioObj
                    ->setContrato($contratoObj)
                    ->setSalarioEscala($contratoObj->getGrupoEscala()->getSalarioEscala())               
                    ->setRetribucionComp30(($contratoObj->getGrupoEscala()->getSalarioEscala()*30)/100);
            	$em->persist($salarioObj);
            }

        	//adicionar Tipo Informacion
            $tipoInformacionObj = $em->getRepository('RRHHBundle:TipoInformacion')->findOneByContrato($contratoObj);
            if (!$tipoInformacionObj){
            	$tipoInformacionObj = new TipoInformacion();
            	$tipoInformacionObj->setContrato($contratoObj);
            	$em->persist($tipoInformacionObj);
            }

        	//adicionar Tipo Informacion
            $formaPagoObj = $em->getRepository('RRHHBundle:FormaPago')->findOneByContrato($contratoObj);
            if (!$formaPagoObj){
            	$formaPagoObj = new FormaPago();
            	$formaPagoObj->setContrato($contratoObj);
            	$em->persist($formaPagoObj);
            }

        	//adicionar Periodicidad Pago
            $periodicidadPagoObj = $em->getRepository('RRHHBundle:PeriodicidadPago')->findOneByContrato($contratoObj);
            if (!$periodicidadPagoObj){
            	$periodicidadPagoObj = new PeriodicidadPago();
            	$periodicidadPagoObj->setContrato($contratoObj);
            	$em->persist($periodicidadPagoObj);
            }

        	$em->flush();  

        	return new RedirectResponse($this->generateUrl('editar_otros_datos_contacto',array('IdContrato'=>$contratoObj->getId()))); 

                       
        } 

        $cargos = $em->getRepository('PiedraBundle:Cargo')->getCargos();
        $nivel_escolar = $em->getRepository('RRHHBundle:NivelEscolar')->getNivelEscolar();  
        $municipios = $em->getRepository('RRHHBundle:Municipio')->getMunicipio();
        $areas_trabajo = $em->getRepository('RRHHBundle:AreaTrabajo')->getAreaTrabajo();
        $categorias_ocupacion = $em->getRepository('RRHHBundle:CategoriaOcup')->getCategoriaOcupacion();
        $grupos_escala = $em->getRepository('RRHHBundle:GrupoEscala')->getGrupoEscala();
        $tipos_contrato = $em->getRepository('RRHHBundle:TipoContrato')->getTipoContrato();

        $no_contrato = $em->createQueryBuilder()
                                ->select('MAX(c.noContrato)')
                                ->from('RRHHBundle:Contrato', 'c')
                                ->getQuery()
                                ->getSingleScalarResult();                        

       


        return $this->render('RRHHBundle:RRHH:adicionarContrato.html.twig',array(
     		'cargos' => $cargos,
     		'nivel_escolar' => $nivel_escolar,
     		'municipios' => $municipios,
     		'areas_trabajo' => $areas_trabajo,
     		'categorias_ocupacion' => $categorias_ocupacion,
     		'grupos_escala' => $grupos_escala,
     		'tipos_contrato' => $tipos_contrato,
            'no_contrato' => $no_contrato + 1
        ));
    }

    /**
    * Editar Contrato 
    */
    public function editarContratoAction(Request $request, $IdContrato){
        $em = $this->getDoctrine()->getManager();

        $contratoObj = $em->getRepository('RRHHBundle:Contrato')->find(intval($IdContrato));

        if(!$contratoObj){
            return  new RedirectResponse($this->generateUrl('listado_contrato'));
        }

        if($request->getMethod() == 'POST'){
        	$fecha = new \Datetime($request->request->get('fecha')); 
        	//objetos 
        	$nivelEscolarObj = $em->getRepository('RRHHBundle:NivelEscolar')->find(intval($request->request->get('nivel_escolar')));
        	$municipioObj = $em->getRepository('RRHHBundle:Municipio')->find(intval($request->request->get('municipio')));
        	$areaTrabajoObj = $em->getRepository('RRHHBundle:AreaTrabajo')->find(intval($request->request->get('area_trabajo')));
        	$cargoObj = $em->getRepository('PiedraBundle:Cargo')->find(intval($request->request->get('cargo')));
        	$categoriaOcupObj = $em->getRepository('RRHHBundle:CategoriaOcup')->find(intval($request->request->get('categoria_ocupacion')));

        	$grupoEscalaObj = $em->getRepository('RRHHBundle:GrupoEscala')->find(intval($request->request->get('grupo_escala')));
        	$tipoContratoObj = $em->getRepository('RRHHBundle:TipoContrato')->find(intval($request->request->get('tipo_contrato')));

        	$contratoObj
        		->setFecha($fecha)
        		->setNombre($request->request->get('nombre'))
        		->setCi($request->request->get('ci'))
                ->setNoContrato($request->request->get('no_contrato'))
        		->setSexo($request->request->get('sexo'))
        		->setNivelEscolar($nivelEscolarObj)
        		->setDireccion($request->request->get('direccion'))
        		->setProvincia($municipioObj->getProvincia())
        		->setMunicipio($municipioObj)
        		->setTelefono($request->request->get('telefono'))
        		->setAreaTrabajo($areaTrabajoObj)
        		->setTipoContrato($tipoContratoObj)
        		->setCargo($cargoObj)
        		->setCategoriaOcupacional($categoriaOcupObj)
        		->setGrupoEscala($grupoEscalaObj)
        		->setDuracionContrato($request->request->get('duracion_contrato'));

        	//adicionar contrato
        	$em->persist($contratoObj);   
        	$em->flush();  

        	return new RedirectResponse($this->generateUrl('editar_otros_datos_contacto',array('IdContrato'=>$contratoObj->getId())));                        
        } 

        $cargos = $em->getRepository('PiedraBundle:Cargo')->getCargos();
        $nivel_escolar = $em->getRepository('RRHHBundle:NivelEscolar')->getNivelEscolar();  
        $municipios = $em->getRepository('RRHHBundle:Municipio')->getMunicipio();
        $areas_trabajo = $em->getRepository('RRHHBundle:AreaTrabajo')->getAreaTrabajo();
        $categorias_ocupacion = $em->getRepository('RRHHBundle:CategoriaOcup')->getCategoriaOcupacion();
        $grupos_escala = $em->getRepository('RRHHBundle:GrupoEscala')->getGrupoEscala();
        $tipos_contrato = $em->getRepository('RRHHBundle:TipoContrato')->getTipoContrato();


        return $this->render('RRHHBundle:RRHH:editarContrato.html.twig',array(
        	'contrato' => $contratoObj,
     		'cargos' => $cargos,
     		'nivel_escolar' => $nivel_escolar,
     		'municipios' => $municipios,
     		'areas_trabajo' => $areas_trabajo,
     		'categorias_ocupacion' => $categorias_ocupacion,
     		'grupos_escala' => $grupos_escala,
     		'tipos_contrato' => $tipos_contrato
        ));
    }



   /**
    * Adicionar Contrato otros datos
    */
    public function editarOtrosDatosContactoAction(Request $request, $IdContrato ){

        $em = $this->getDoctrine()->getManager();

        $contratoObj = $em->getRepository('RRHHBundle:Contrato')->find(intval($IdContrato));

        if(!$contratoObj){
            return  new RedirectResponse($this->generateUrl('listado_contrato'));
        }

        //objetos
        $salarioObj = $em->getRepository('RRHHBundle:Salario')->findOneByContrato($contratoObj);
        $horarioTrabajoObj = $em->getRepository('RRHHBundle:HorarioTrabajo')->findOneByContrato($contratoObj);
        $jornadaTrabajoObj = $em->getRepository('RRHHBundle:JornadaTrabajo')->findOneByContrato($contratoObj);
        $tipoInformacionObj = $em->getRepository('RRHHBundle:TipoInformacion')->findOneByContrato($contratoObj);
        $formaPagoObj = $em->getRepository('RRHHBundle:FormaPago')->findOneByContrato($contratoObj);
        $periodicidadPagoObj = $em->getRepository('RRHHBundle:PeriodicidadPago')->findOneByContrato($contratoObj);

          
        if($request->getMethod() == 'POST'){

        	//Salario Trabajador
        	$salarioObj
        		->setSalarioEscala($request->request->get('salario_escala'))
        		->setAntiguedad($request->request->get('antiguedad'))
        		->setAdicionalDelTurismo($request->request->get('adicional_del_turismo'))
        		->setPerfEmpresarial($request->request->get('perf_empresarial'))
        		->setEncAlmacen($request->request->get('enc_almacen'))
        		->setTecnico($request->request->get('tecnico'))
        		->setGrupoEnergetico($request->request->get('grupo_energetico'))
        		->setRetribucionComp20($request->request->get('retribucion_comp20'))
        		->setRetribucionComp30($request->request->get('retribucion_comp30'))
        		->setOtrosPagos($request->request->get('otros_pagos'));
        	$em->persist($salarioObj);

        	//Horario Trabajo
        	$horarioTrabajoObj
        		->setDesde($request->request->get('desde'))
        		->setHasta($request->request->get('hasta'))
        		->setConvCol($request->request->get('conv_col'));
        	$em->persist($horarioTrabajoObj);

        	//Jornada de Trabajo
        	$jornadaTrabajoObj
        		->setDiaria($request->request->get('diaria'))
        		->setSemanal($request->request->get('semanal'))
        		->setMensual($request->request->get('mensual'))
        		->setPausaJT($request->request->get('pausa_jt'));
        	$em->persist($jornadaTrabajoObj);

        	//tipo informacion con la q trabaja
        	$tipo_informacion = $request->request->get('tipo_informacion');

            //modificar a false 
            $em->getRepository('RRHHBundle:TipoInformacion')->allFalse($contratoObj);
                   	
        	if($tipo_informacion){   
	    		foreach ($tipo_informacion as $tipo) {
	    			if ($tipo =='clasificada'){
	    				$tipoInformacionObj->setClasificada(TRUE);
	    			}else if ($tipo =='superior'){
	    				$tipoInformacionObj->setSuperior(TRUE);
	    			}else if ($tipo =='regimen_cerrado'){
	    				$tipoInformacionObj->setRegimenCerrado(TRUE);
	    			}
	    		}
	    		$em->persist($tipoInformacionObj);
                $em->flush();
    		}    		  

    		//forma de pago
    		$formaPagoObj
        		->setATiempo($request->request->get('forma_pago') == 'atiempo'? TRUE : FALSE)
        		->setArendimiento($request->request->get('forma_pago') == 'arendimiento'? TRUE : FALSE)
        		->setPorresultado($request->request->get('forma_pago') == 'porresultado'? TRUE : FALSE);
        	$em->persist($formaPagoObj);

        	//periodicidad de pago
    		$periodicidadPagoObj
        		->setMensual($request->request->get('periodicidad_pago') == 'mensual'? TRUE : FALSE)
        		->setQuincenal($request->request->get('periodicidad_pago') == 'quincenal'? TRUE : FALSE)
        		->setOtra($request->request->get('periodicidad_pago') == 'otra'? TRUE : FALSE);
        	$em->persist($periodicidadPagoObj);


        	$em->flush(); 

        	return  new RedirectResponse($this->generateUrl('listado_contrato'));                
        }         

        
        return $this->render('RRHHBundle:RRHH:editarOtrosDatosContacto.html.twig',array(     		
     		'contrato' => $contratoObj,
     		'salario' => $salarioObj,
     		'horario_trabajo' => $horarioTrabajoObj,
     		'jornada_trabajo' => $jornadaTrabajoObj,
     		'tipo_informacion' => $tipoInformacionObj,
     		'forma_pago' => $formaPagoObj,
     		'periodicidad_pago' => $periodicidadPagoObj
            ));
    }


	/**
    * Listado Contratos
    */
    public function listadoContratoAction(Request $request){
    	$em = $this->getDoctrine()->getManager();        
        $contratos = $em->getRepository('RRHHBundle:Contrato')->findAll();
        return $this->render('RRHHBundle:RRHH:listadoContrato.html.twig',array(
     		'contratos' => $contratos     		
        ));
    }


    /**
    * gestionar Unidad
    */
    public function gestionarUnidadAction(Request $request){
        $em = $this->getDoctrine()->getManager();  

        $unidadObj = $em->getRepository('RRHHBundle:Unidad')->find(1);
        $municipios = $em->getRepository('RRHHBundle:Municipio')->getMunicipio(); 

        if ($request->getMethod() == "POST"){
            $municipioObj = $em->getRepository('RRHHBundle:Municipio')->find($request->request->get('municipio')); 
            $provinciaObj = $em->getRepository('RRHHBundle:Provincia')->find($request->request->get('municipio'));
            $unidadObj
                ->setUnidad($request->request->get('unidad'))
                ->setCita($request->request->get('cita'))
                ->setTelefono($request->request->get('telefono'))
                ->setMunicipio($municipioObj)
                ->setProvincia($provinciaObj);
            $em->persist($unidadObj);
            $em->flush();
        }


        return $this->render('RRHHBundle:RRHH:gestionarUnidad.html.twig',array(
            'unidad' => $unidadObj,
            'municipios' => $municipios          
        ));
    }



   /*
    * Check no contrato
    */
    public function checkedNoContratoAction(Request $request)
    {   

        $em = $this->getDoctrine()->getManager();

        

        if($request->request->get('action') == 'editar'){

            $contratoObj = $em->getRepository('RRHHBundle:Contrato')->isNoContrato($request->request->get('idC'), $request->request->get('no_contrato'));

            if($contratoObj){
              $bandera = false;
            } else {
              $bandera = true;
            }

        }else if($request->request->get('action') == 'adicionar'){
            $contratoObj = $em->getRepository('RRHHBundle:Contrato')->findOneByNoContrato($request->request->get('no_contrato'));

            if ($contratoObj) {
                $bandera = false;
            } else {
                $bandera = true;
            } 
        }

        
        
        $response = new Response(json_encode($bandera));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    


}

