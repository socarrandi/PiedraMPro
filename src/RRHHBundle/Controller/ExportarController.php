<?php

namespace RRHHBundle\Controller;

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

use PHPExcel_IOFactory;  


class ExportarController extends Controller
{
	
	

	/**
     * Exportar Contrato
     */
    public function exportarContratoAction(Request $request, $IdContrato)
    {
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
        // entidad
        $entidad = $em->getRepository('RRHHBundle:Unidad')->find(1);
           		
        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/rrhh/contrato_de_trabajo.docx');
		
		//Contrato 
		$templateProcessor->setValue('id', $contratoObj->getId());
		$templateProcessor->setValue('nombre', html_entity_decode($contratoObj->getNombre()));
		$templateProcessor->setValue('ci', $contratoObj->getCi());
		$templateProcessor->setValue('direccion', html_entity_decode($contratoObj->getDireccion()));
		$templateProcessor->setValue('municipio', html_entity_decode($contratoObj->getMunicipio()));
		$templateProcessor->setValue('provincia', html_entity_decode($contratoObj->getProvincia()));
		$templateProcessor->setValue('telefono', $contratoObj->getTelefono());
		$templateProcessor->setValue('nivel_escolar', $contratoObj->getNivelEscolar());
		$templateProcessor->setValue('cargo', html_entity_decode($contratoObj->getCargo()));
		$templateProcessor->setValue('duracionContrato', $contratoObj->getDuracionContrato());
		$templateProcessor->setValue('nivel_escolar', $contratoObj->getNivelEscolar());
		$templateProcessor->setValue('categoriaocupacional', html_entity_decode($contratoObj->getCategoriaOcupacional()->getCategoria()));
		$templateProcessor->setValue('area_trabajo', html_entity_decode($contratoObj->getAreaTrabajo()));

		//horario trabajo
		$templateProcessor->setValue('desde', $horarioTrabajoObj->getDesde());
		$templateProcessor->setValue('hasta', $horarioTrabajoObj->getHasta());

		//jornada de trabajo
		$templateProcessor->setValue('diaria', $jornadaTrabajoObj->getDiaria());
		$templateProcessor->setValue('semanal', $jornadaTrabajoObj->getSemanal());
		$templateProcessor->setValue('mensual', $jornadaTrabajoObj->getMensual());
		$templateProcessor->setValue('pausaJT', $jornadaTrabajoObj->getPausaJT());

		//tipo informacion
		($tipoInformacionObj->getClasificada() == TRUE)? $templateProcessor->setValue('clasificada', 'X') : $templateProcessor->setValue('clasificada', '__') ;
		($tipoInformacionObj->getSuperior() == TRUE)? $templateProcessor->setValue('superior', 'X') : $templateProcessor->setValue('superior', '__') ;
		($tipoInformacionObj->getRegimenCerrado() == TRUE)? $templateProcessor->setValue('regimenCerrado', 'X') : $templateProcessor->setValue('regimenCerrado', '__') ;

		//forma de pagos
		($formaPagoObj->getAtiempo() == TRUE) ? $templateProcessor->setValue('atiempo', 'X') : $templateProcessor->setValue('atiempo', '__') ;
		($formaPagoObj->getArendimiento() == TRUE)? $templateProcessor->setValue('arendimiento', 'X') : $templateProcessor->setValue('arendimiento', '__') ;
		($formaPagoObj->getPorresultado() == TRUE)? $templateProcessor->setValue('porresultado', 'X') : $templateProcessor->setValue('porresultado', '__') ;

		//periodicidad de pago

		if ($formaPagoObj->getAtiempo() == TRUE){
			($periodicidadPagoObj->getMensual() == TRUE) ? $templateProcessor->setValue('pmensual', 'X') : $templateProcessor->setValue('pmensual', '__') ;
			($periodicidadPagoObj->getQuincenal() == TRUE) ? $templateProcessor->setValue('pquincenal', 'X') : $templateProcessor->setValue('pquincenal', '__') ;
			($periodicidadPagoObj->getOtra() == TRUE) ? $templateProcessor->setValue('potra', 'X') : $templateProcessor->setValue('potra', '__') ;
			
			$templateProcessor->setValue('prmensual', '__') ;
			$templateProcessor->setValue('prquincenal', '__') ;
			$templateProcessor->setValue('protra', '__') ;
		}
		if ($formaPagoObj->getArendimiento() == TRUE){
			($periodicidadPagoObj->getMensual() == TRUE) ? $templateProcessor->setValue('prmensual', 'X') : $templateProcessor->setValue('pmensual', '__') ;
			($periodicidadPagoObj->getQuincenal() == TRUE) ? $templateProcessor->setValue('prquincenal', 'X') : $templateProcessor->setValue('pquincenal', '__') ;
			($periodicidadPagoObj->getOtra() == TRUE) ? $templateProcessor->setValue('protra', 'X') : $templateProcessor->setValue('potra', '__') ;
			$templateProcessor->setValue('pmensual', '__') ;
			$templateProcessor->setValue('pquincenal', '__') ;
			$templateProcessor->setValue('potra', '__') ;
		}
		

		$salario_general = $salarioObj->getSalarioEscala() + $salarioObj->getAntiguedad() + $salarioObj->getAdicionalDelTurismo() + $salarioObj->getPerfEmpresarial() + $salarioObj->getEncAlmacen() + $salarioObj->getTecnico() + $salarioObj->getGrupoEnergetico() + $salarioObj->getRetribucionComp20() + $salarioObj->getRetribucionComp30() + $salarioObj->getOtrosPagos(); 

		//salario
		($salarioObj->getSalarioEscala() == 0 )? $templateProcessor->setValue('salario_escala', '__') : $templateProcessor->setValue('salario_escala', $salarioObj->getSalarioEscala());
		($salarioObj->getAntiguedad() == 0 )? $templateProcessor->setValue('antiguedad', ' ') : $templateProcessor->setValue('antiguedad', $salarioObj->getAntiguedad());
		($salarioObj->getAdicionalDelTurismo() == 0 )? $templateProcessor->setValue('adicionalDelTurismo', '__') : $templateProcessor->setValue('adicionalDelTurismo', $salarioObj->getAdicionalDelTurismo());
		($salarioObj->getPerfEmpresarial() == 0 )? $templateProcessor->setValue('perfEmpresarial', '__') : $templateProcessor->setValue('perfEmpresarial', $salarioObj->getPerfEmpresarial());
		($salarioObj->getEncAlmacen() == 0 )? $templateProcessor->setValue('encAlmacen', '__') : $templateProcessor->setValue('encAlmacen', $salarioObj->getEncAlmacen());
		($salarioObj->getTecnico() == 0 )? $templateProcessor->setValue('tecnico', '__') : $templateProcessor->setValue('tecnico', $salarioObj->getTecnico());
		($salarioObj->getGrupoEnergetico() == 0 )? $templateProcessor->setValue('grupoEnergetico', '__') : $templateProcessor->setValue('grupoEnergetico', $salarioObj->getGrupoEnergetico());
		($salarioObj->getRetribucionComp20() == 0 )? $templateProcessor->setValue('retribucionComp20', '__') : $templateProcessor->setValue('retribucionComp20', $salarioObj->getRetribucionComp20());
		($salarioObj->getRetribucionComp30() == 0 )? $templateProcessor->setValue('retribucionComp30', '__') : $templateProcessor->setValue('retribucionComp30', $salarioObj->getRetribucionComp30());
		($salarioObj->getOtrosPagos() == 0 )? $templateProcessor->setValue('otrosPagos', '__') : $templateProcessor->setValue('otrosPagos', $salarioObj->getOtrosPagos());

		$templateProcessor->setValue('salario_general', $salario_general);


		//fecha 
		$templateProcessor->setValue('dia', intval($contratoObj->getFecha()->format('d')));
		$templateProcessor->setValue('mes', intval($contratoObj->getFecha()->format('m')));
		$templateProcessor->setValue('anno', intval($contratoObj->getFecha()->format('Y')));

		$anno_triunfo = new \Datetime('01-01-1959');
		$anno_triunfo = $anno_triunfo->format('Y');
		$anno_actual = new \Datetime('Y');
		$anno_actual = $anno_actual->format('Y');	
		$templateProcessor->setValue('anno_revolucion', ( ($anno_actual) - ($anno_triunfo) + 1 ) );

		//tipo contrato
		($contratoObj->getTipoContrato()->getAbr() == 'TI') ? $templateProcessor->setValue('TI', 'X') : $templateProcessor->setValue('TI', ' ');
		($contratoObj->getTipoContrato()->getAbr() == 'TIC') ? $templateProcessor->setValue('TIC', 'X') : $templateProcessor->setValue('TIC', ' ');
		($contratoObj->getTipoContrato()->getAbr() == 'TDPP') ? $templateProcessor->setValue('TDPP', 'X') : $templateProcessor->setValue('TDPP', ' ');
		($contratoObj->getTipoContrato()->getAbr() == 'TDSS') ? $templateProcessor->setValue('TDSS', 'X') : $templateProcessor->setValue('TDSS', ' ');
		($contratoObj->getTipoContrato()->getAbr() == 'TDSTA') ? $templateProcessor->setValue('TDSTA', 'X') : $templateProcessor->setValue('TDSTA', ' ');
		($contratoObj->getTipoContrato()->getAbr() == 'TDCC') ? $templateProcessor->setValue('TDCC', 'X') : $templateProcessor->setValue('TDCC', ' ');
		($contratoObj->getTipoContrato()->getAbr() == 'TDA') ? $templateProcessor->setValue('TDA', 'X') : $templateProcessor->setValue('TDA', ' ');
			
		//datos director adjunto y unidad
		$templateProcessor->setValue('director_adjunto', 'Yiliém Claro Córdova');
		$templateProcessor->setValue('cargo_director', 'DIRECTOR ADJUNTO');

		$templateProcessor->setValue('entidad', $entidad->getUnidad());
		$templateProcessor->setValue('cita', $entidad->getCita());
		$templateProcessor->setValue('municipio_entidad', html_entity_decode($entidad->getMunicipio()));
		$templateProcessor->setValue('provincia_entidad', html_entity_decode($entidad->getProvincia()));
		$templateProcessor->setValue('telefono_entidad', $entidad->getTelefono());

		
			
		$templateProcessor->saveAs('uploads/temp/rrhh/Contratos/'.$contratoObj->getId().'_contrato_de_trabajo.docx');

        
        $file_url = 'uploads/temp/rrhh/Contratos/'.$contratoObj->getId().'_contrato_de_trabajo.docx';
        header('Content-Type: application/docx'); // ZIP file
        header('Content-Disposition: attachment; filename="contrato_de_trabajo.docx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($file_url));
        readfile($file_url);
        exit();
	}



	/*
	* exportar excel
	*/
	/*public function exportarContratosAction()
    {	

    	$em = $this->getDoctrine()->getManager(); 

    	$contratos = $em->getRepository('RRHHBundle:Contrato')->findAll();  
    	$usuario_director_adjunto = $em->getRepository('PiedraBundle:UsuarioDominio')->getUsuarioDominiocargoDirAdj(); 
    	$unidad = $em->getRepository('RRHHBundle:Unidad')->find(1);  


        $phpExcelObject = PHPExcel_IOFactory::load("uploads/plantillas/rrhh/contratos.xlsx");

        $phpExcelObject->getProperties()->setCreator("liuggio")
           ->setTitle("Contratos")
           ->setSubject("Contratos")
           ->setKeywords("office 2005 openxml php")
           ->setCategory("Test result file");

        $phpExcelObject->setActiveSheetIndex(0)
           ->setCellValue('B2', $unidad->getUnidad())
           ->setCellValue('B3', $unidad->getCita())
           ->setCellValue('B4', $unidad->getMunicipio())
           ->setCellValue('I4', $unidad->getProvincia())
           ->setCellValue('I2', $unidad->getTelefono())
           ->setCellValue('B6', 'Yiliém Claro Córdova' )
           ->setCellValue('B7', 'DIRECTOR ADJUNTO' );


        $cont = 13;
        foreach ($contratos as $contrato) {
        	$phpExcelObject->setActiveSheetIndex(0)
	            ->setCellValue('A'.$cont, $contrato->getId())
	            ->setCellValue('B'.$cont, $contrato->getFecha()->format('d'))
	            ->setCellValue('C'.$cont, $contrato->getFecha()->format('m'))
	            ->setCellValue('D'.$cont, $contrato->getFecha()->format('Y'))
	            ->setCellValue('E'.$cont, $contrato->getNombre())
	            ->setCellValue('F'.$cont, $contrato->getCi())
	            ->setCellValue('G'.$cont, $contrato->getSexo())
	            ->setCellValue('H'.$cont, $contrato->getNivelEscolar()->getAbr())
	            ->setCellValue('I'.$cont, $contrato->getDireccion())
	            ->setCellValue('J'.$cont, $contrato->getMunicipio())
	            ->setCellValue('K'.$cont, $contrato->getProvincia())
	            ->setCellValue('L'.$cont, $contrato->getTelefono())
	            ->setCellValue('M'.$cont, $contrato->getAreaTrabajo())
	            ->setCellValue('N'.$cont, $contrato->getTipoContrato()->getAbr())
	            ->setCellValue('O'.$cont, $contrato->getCargo())
	            ->setCellValue('P'.$cont, $contrato->getCategoriaOcupacional()->getAbr())
	            ->setCellValue('Q'.$cont, $contrato->getGrupoEscala())
	            ->setCellValue('AR'.$cont, $contrato->getDuracionContrato());

	            //horario de trabajo
	            $horarioTrabajoObj = $em->getRepository('RRHHBundle:HorarioTrabajo')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(0)
		           ->setCellValue('R'.$cont, $horarioTrabajoObj->getDesde())
		           ->setCellValue('S'.$cont, $horarioTrabajoObj->getHasta())
		           ->setCellValue('T'.$cont, $horarioTrabajoObj->getConvCol());

	            //Jornada de trabajo
	            $jornadaTrabajoObj = $em->getRepository('RRHHBundle:JornadaTrabajo')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(0)
		           ->setCellValue('U'.$cont, $jornadaTrabajoObj->getDiaria())
		           ->setCellValue('V'.$cont, $jornadaTrabajoObj->getSemanal())
		           ->setCellValue('W'.$cont, $jornadaTrabajoObj->getMensual())
		           ->setCellValue('X'.$cont, $jornadaTrabajoObj->getPausaJT());

		        //Tipo Informacion
	            $tipoInformacionObj = $em->getRepository('RRHHBundle:TipoInformacion')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(0)
		           ->setCellValue('Y'.$cont, ($tipoInformacionObj->getClasificada() == TRUE ) ? 'X' : ' ') 
		           ->setCellValue('Z'.$cont, ($tipoInformacionObj->getSuperior() == TRUE) ? 'X' : ' ')
		           ->setCellValue('AA'.$cont, ($tipoInformacionObj->getRegimenCerrado() == TRUE) ? 'X': ' ');

		        //Forma de Pago
	            $formaPagoObj = $em->getRepository('RRHHBundle:FormaPago')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(0)
		           ->setCellValue('AB'.$cont, ($formaPagoObj->getAtiempo() == TRUE )? 'X' : ' ')
		           ->setCellValue('AC'.$cont, ($formaPagoObj->getArendimiento() == TRUE )? 'X' : ' ')
		           ->setCellValue('AD'.$cont, ($formaPagoObj->getPorresultado() == TRUE )? 'X' : ' ');

		        //Periodicidad de Pago
	            $periodicidadPagoObj = $em->getRepository('RRHHBundle:PeriodicidadPago')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(0)
		           ->setCellValue('AE'.$cont, ($periodicidadPagoObj->getMensual() == TRUE )? 'X' : ' ')
		           ->setCellValue('AF'.$cont, ($periodicidadPagoObj->getQuincenal() == TRUE )? 'X' : ' ')
		           ->setCellValue('AG'.$cont, ($periodicidadPagoObj->getOtra() == TRUE )? 'X' : ' ');

		        //Salario
	            $salarioObj = $em->getRepository('RRHHBundle:Salario')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(0)
		           ->setCellValue('AH'.$cont, ($salarioObj->getSalarioEscala() == 0 )? ' ' :  $salarioObj->getSalarioEscala())
		           ->setCellValue('AI'.$cont, ($salarioObj->getAntiguedad() == 0 )? ' ' :  $salarioObj->getAntiguedad())
		           ->setCellValue('AJ'.$cont, ($salarioObj->getAdicionalDelTurismo() == 0 )? ' ' :  $salarioObj->getAdicionalDelTurismo())
		           ->setCellValue('AK'.$cont, ($salarioObj->getPerfEmpresarial() == 0 )? ' ' :  $salarioObj->getPerfEmpresarial())
		           ->setCellValue('AL'.$cont, ($salarioObj->getEncAlmacen() == 0 )? ' ' :  $salarioObj->getEncAlmacen())
		           ->setCellValue('AM'.$cont, ($salarioObj->getTecnico() == 0 )? ' ' :  $salarioObj->getTecnico())
		           ->setCellValue('AN'.$cont, ($salarioObj->getGrupoEnergetico() == 0 )? ' ' :  $salarioObj->getGrupoEnergetico())
		           ->setCellValue('AO'.$cont, ($salarioObj->getRetribucionComp20() == 0 )? ' ' :  $salarioObj->getRetribucionComp20())
		           ->setCellValue('AP'.$cont, ($salarioObj->getRetribucionComp30() == 0 )? ' ' :  $salarioObj->getRetribucionComp30())
		           ->setCellValue('AQ'.$cont, ($salarioObj->getOtrosPagos() == 0 )? ' ' :  $salarioObj->getOtrosPagos());	   

		    $cont++;        
        }
         
           


        $phpExcelObject->getActiveSheet()->setTitle('Simple');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'PhpExcelFileSample.xlsx'
        );


        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;  
    }*/

	

    /*
	* exportar excel
	*/
	public function exportarContratosAction()
    {	

    	$em = $this->getDoctrine()->getManager(); 

    	$contratos = $em->getRepository('RRHHBundle:Contrato')->findAll();  
    	$usuario_director_adjunto = $em->getRepository('PiedraBundle:UsuarioDominio')->getUsuarioDominiocargoDirAdj(); 
    	$unidad = $em->getRepository('RRHHBundle:Unidad')->find(1);  


        $phpExcelObject = PHPExcel_IOFactory::load("uploads/plantillas/rrhh/Plantilla Hotel 2018.xls");

        $phpExcelObject->getProperties()->setCreator("liuggio")
           ->setTitle("Contratos")
           ->setSubject("Contratos")
           ->setKeywords("office 2005 openxml php")
           ->setCategory("Test result file");
        
        $cont = 4;
        foreach ($contratos as $contrato) {
        	// hoja Plantilla
        	$phpExcelObject->setActiveSheetIndex(6)
	            ->setCellValue('A'.$cont, $contrato->getId())	            
	            ->setCellValue('B'.$cont, $contrato->getNombre());

	           /* ->setCellValue('F'.$cont, $contrato->getCi())
	            ->setCellValue('G'.$cont, $contrato->getSexo())
	            ->setCellValue('H'.$cont, $contrato->getNivelEscolar()->getAbr())
	            ->setCellValue('I'.$cont, $contrato->getDireccion())
	            ->setCellValue('J'.$cont, $contrato->getMunicipio())
	            ->setCellValue('K'.$cont, $contrato->getProvincia())
	            ->setCellValue('L'.$cont, $contrato->getTelefono())
	            ->setCellValue('M'.$cont, $contrato->getAreaTrabajo())
	            ->setCellValue('N'.$cont, $contrato->getTipoContrato()->getAbr())
	            ->setCellValue('O'.$cont, $contrato->getCargo())
	            ->setCellValue('P'.$cont, $contrato->getCategoriaOcupacional()->getAbr())
	            ->setCellValue('Q'.$cont, $contrato->getGrupoEscala())
	            ->setCellValue('AR'.$cont, $contrato->getDuracionContrato());

	            ->setCellValue('B'.$cont, $contrato->getFecha()->format('d'))
	            ->setCellValue('C'.$cont, $contrato->getFecha()->format('m'))
	            ->setCellValue('D'.$cont, $contrato->getFecha()->format('Y'))

	            //horario de trabajo
	            $horarioTrabajoObj = $em->getRepository('RRHHBundle:HorarioTrabajo')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(1)
		           ->setCellValue('R'.$cont, $horarioTrabajoObj->getDesde())
		           ->setCellValue('S'.$cont, $horarioTrabajoObj->getHasta())
		           ->setCellValue('T'.$cont, $horarioTrabajoObj->getConvCol());

	            //Jornada de trabajo
	            $jornadaTrabajoObj = $em->getRepository('RRHHBundle:JornadaTrabajo')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(1)
		           ->setCellValue('U'.$cont, $jornadaTrabajoObj->getDiaria())
		           ->setCellValue('V'.$cont, $jornadaTrabajoObj->getSemanal())
		           ->setCellValue('W'.$cont, $jornadaTrabajoObj->getMensual())
		           ->setCellValue('X'.$cont, $jornadaTrabajoObj->getPausaJT());

		        //Tipo Informacion
	            $tipoInformacionObj = $em->getRepository('RRHHBundle:TipoInformacion')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(1)
		           ->setCellValue('Y'.$cont, ($tipoInformacionObj->getClasificada() == TRUE ) ? 'X' : ' ') 
		           ->setCellValue('Z'.$cont, ($tipoInformacionObj->getSuperior() == TRUE) ? 'X' : ' ')
		           ->setCellValue('AA'.$cont, ($tipoInformacionObj->getRegimenCerrado() == TRUE) ? 'X': ' ');

		        //Forma de Pago
	            $formaPagoObj = $em->getRepository('RRHHBundle:FormaPago')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(1)
		           ->setCellValue('AB'.$cont, ($formaPagoObj->getAtiempo() == TRUE )? 'X' : ' ')
		           ->setCellValue('AC'.$cont, ($formaPagoObj->getArendimiento() == TRUE )? 'X' : ' ')
		           ->setCellValue('AD'.$cont, ($formaPagoObj->getPorresultado() == TRUE )? 'X' : ' ');

		        //Periodicidad de Pago
	            $periodicidadPagoObj = $em->getRepository('RRHHBundle:PeriodicidadPago')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(1)
		           ->setCellValue('AE'.$cont, ($periodicidadPagoObj->getMensual() == TRUE )? 'X' : ' ')
		           ->setCellValue('AF'.$cont, ($periodicidadPagoObj->getQuincenal() == TRUE )? 'X' : ' ')
		           ->setCellValue('AG'.$cont, ($periodicidadPagoObj->getOtra() == TRUE )? 'X' : ' ');

		        //Salario
	            $salarioObj = $em->getRepository('RRHHBundle:Salario')->findOneByContrato($contrato);
	            $phpExcelObject->setActiveSheetIndex(1)
		           ->setCellValue('AH'.$cont, ($salarioObj->getSalarioEscala() == 0 )? ' ' :  $salarioObj->getSalarioEscala())
		           ->setCellValue('AI'.$cont, ($salarioObj->getAntiguedad() == 0 )? ' ' :  $salarioObj->getAntiguedad())
		           ->setCellValue('AJ'.$cont, ($salarioObj->getAdicionalDelTurismo() == 0 )? ' ' :  $salarioObj->getAdicionalDelTurismo())
		           ->setCellValue('AK'.$cont, ($salarioObj->getPerfEmpresarial() == 0 )? ' ' :  $salarioObj->getPerfEmpresarial())
		           ->setCellValue('AL'.$cont, ($salarioObj->getEncAlmacen() == 0 )? ' ' :  $salarioObj->getEncAlmacen())
		           ->setCellValue('AM'.$cont, ($salarioObj->getTecnico() == 0 )? ' ' :  $salarioObj->getTecnico())
		           ->setCellValue('AN'.$cont, ($salarioObj->getGrupoEnergetico() == 0 )? ' ' :  $salarioObj->getGrupoEnergetico())
		           ->setCellValue('AO'.$cont, ($salarioObj->getRetribucionComp20() == 0 )? ' ' :  $salarioObj->getRetribucionComp20())
		           ->setCellValue('AP'.$cont, ($salarioObj->getRetribucionComp30() == 0 )? ' ' :  $salarioObj->getRetribucionComp30())
		           ->setCellValue('AQ'.$cont, ($salarioObj->getOtrosPagos() == 0 )? ' ' :  $salarioObj->getOtrosPagos());	 */  

		    $cont++;        
        }      


       // $phpExcelObject->getActiveSheet()->setTitle('Simple');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'plantilla_hotel.xls'
        );


        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;  
    }
}
