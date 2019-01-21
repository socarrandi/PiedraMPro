<?php

namespace PiedraBundle\Controller;

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


class ExportarWordController extends Controller
{


	/**
     * Listado Usuario Nominal
     */
    public function exportarUsuarioNominalAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager('default');  
    	$usuarioReds = $em->getRepository('PiedraBundle:UsuarioRed')->getUsuarioRedSinEspeciales();
    	$usuarioRedEspeciales = $em->getRepository('PiedraBundle:UsuarioRed')->getUsuarioRedEspeciales();

    	//print_r($usuarioRedObj);

        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/usuarios_nominales.docx');
		

		// Simple table
		$templateProcessor->cloneRow('usuarioRed', count($usuarioReds));

		

		$cont = 0;

		foreach ($usuarioReds as $usuario) {
			$cont++;
			$templateProcessor->setValue('idUr#'.$cont, $cont);
			$templateProcessor->setValue('usuarioRed#'.$cont, $usuario['usuario'].'@'.$usuario['dominio']);
			$templateProcessor->setValue('departamento#'.$cont, $usuario['departamento']);
		}

		$templateProcessor->cloneRow('usuarioRedE', count($usuarioRedEspeciales));

		$cont = 0;

		foreach ($usuarioRedEspeciales as $usuario) {
			$cont++;
			$templateProcessor->setValue('idUrE#'.$cont, $cont);
			$templateProcessor->setValue('usuarioRedE#'.$cont, $usuario['usuario'].'@'.$usuario['dominio']);
			$templateProcessor->setValue('departamentoE#'.$cont, $usuario['departamento']);
		}	

		

		$templateProcessor->saveAs('uploads/temp/usuarios_nominales.docx');

        
        $file_url = 'uploads/temp/usuarios_nominales.docx';
        header('Content-Type: application/docx'); // ZIP file
        header('Content-Disposition: attachment; filename="usuarios_nominales.docx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($file_url));
        readfile($file_url);
        exit();
	}

	/**
     * Listado Nominal de Usuarios
     */
    public function exportarListadoNominalUsuarioAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager('default');  
    	$usuario_dominios = $em->getRepository('PiedraBundle:UsuarioDominio')->getUsuarioDominio($baja = false);  

    	$usuario_director_adjunto = $em->getRepository('PiedraBundle:UsuarioDominio')->getUsuarioDominiocargoDirAdj();
    	$usuario_informatico = $em->getRepository('PiedraBundle:UsuarioDominio')->getUsuarioDominiocargoInformatico();

        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/listado_nominal_de_usuarios.docx');
		
		// Simple table
		$templateProcessor->cloneRow('nombre', count($usuario_dominios));		

		$cont = 0;

		foreach ($usuario_dominios as $usuario) {
			$cont++;
			$templateProcessor->setValue('id#'.$cont, $cont);
			$templateProcessor->setValue('nombre#'.$cont, strval($usuario->getNombre()));
			$templateProcessor->setValue('cargo#'.$cont, strval($usuario->getCargo()));
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

		$templateProcessor->setValue('usuario_director_adjunto', strval($usuario_director_adjunto[0]->getNombre()));
		$templateProcessor->setValue('usuario_informatico', strval($usuario_informatico[0]->getNombre()));			

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
     * Listado Password Setup
     */
    public function exportarListadoPasswordSetupAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager('default'); 

    	$password_setups = $em->getRepository('PiedraBundle:PasswordSetup')->findByIsAdministrativa(true); 
    	$password_sistema = $em->getRepository('PiedraBundle:PasswordSetup')->findByIsAdministrativa(false);   
    	

        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/password_setup.docx');
		
		// Password setup
		$templateProcessor->cloneRow('area', count($password_setups));		
		$cont = 0;

		foreach ($password_setups as $ps) {
			$cont++;
			$templateProcessor->setValue('area#'.$cont, strval($ps->getArea()));
			$templateProcessor->setValue('pc#'.$cont, strval($ps->getPc()));
			$templateProcessor->setValue('password#'.$cont, strval($ps->getPassword()));
		}

		// Password setup
		$templateProcessor->cloneRow('sistema', count($password_sistema));		
		$cont = 0;

		foreach ($password_sistema as $psist) {
			$cont++;
			$templateProcessor->setValue('sistema#'.$cont, strval($psist->getArea()));
			$templateProcessor->setValue('usuario#'.$cont, strval($psist->getPc()));
			$templateProcessor->setValue('password2#'.$cont, strval($psist->getPassword()));
		}
			

		$templateProcessor->saveAs('uploads/temp/password_setup.docx');

        
        $file_url = 'uploads/temp/password_setup.docx';
        header('Content-Type: application/docx'); // ZIP file
        header('Content-Disposition: attachment; filename="password_setup.docx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($file_url));
        readfile($file_url);
        exit();
	}

	/**
     * Listado Password Setup
     */
    public function exportarSolicitudAsignacionServInfAction(Request $request, $idUd)
    {
    	$em = $this->getDoctrine()->getManager('default'); 

    	$udObj = $em->getRepository('PiedraBundle:UsuarioDominio')->find($idUd);

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
		$templateProcessor->setValue('cargo', strval($udObj->getCargo()));

		$email = explode('@', strval($udObj->getEmail()));
		$templateProcessor->setValue('email', strval($email[0]));
		$templateProcessor->setValue('usuario_pc', strval($udObj->getUsuarioRed()));
		$templateProcessor->setValue('nombre_completo', strval($udObj->__toString()));

		$templateProcessor->setValue('d', strval($udObj->getFecha()->format('d')));
		$templateProcessor->setValue('m', strval($udObj->getFecha()->format('m')));
		$templateProcessor->setValue('a', strval($udObj->getFecha()->format('Y')));

			
		$templateProcessor->saveAs('uploads/temp/modelo_solicitud_de_ASI.docx');

        
        $file_url = 'uploads/temp/modelo_solicitud_de_ASI.docx';
        header('Content-Type: application/docx'); // ZIP file
        header('Content-Disposition: attachment; filename="modelo_solicitud_de_ASI.docx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($file_url));
        readfile($file_url);
        exit();
	}

	/**
     * Listado correos de admin
     */
    public function exportarCorreoAdminAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager('default'); 

    	$emails = $em->getRepository('PiedraBundle:Email')->findByIsDireccion(true); 
    	  
    	

        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/emails.docx');
		
		// Password setup
		$templateProcessor->cloneRow('email', count($emails));		
		$cont = 0;

		$templateProcessor->setValue('admin', 'Administración');	

		foreach ($emails as $e) {
			$cont++;
			$templateProcessor->setValue('id#'.$cont, $cont);				
			$templateProcessor->setValue('email#'.$cont, strval($e->getEmail()));			
		}

		$templateProcessor->saveAs('uploads/temp/emails.docx');

        $file_url = 'uploads/temp/emails.docx';
        header('Content-Type: application/docx'); // ZIP file
        header('Content-Disposition: attachment; filename="emails.docx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($file_url));
        readfile($file_url);
        exit();
	}


	/**
     * Listado correos
     */
    public function exportarCorreosAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager('default'); 

    	$emails = $em->getRepository('PiedraBundle:Email')->findAll();   	  
    	

        //$phpWord = new PhpWord();
        $templateProcessor = new TemplateProcessor('uploads/plantillas/emails.docx');
		
		// Password setup
		$templateProcessor->cloneRow('email', count($emails));		
		$cont = 0;

		$templateProcessor->setValue('admin', ' ');

		foreach ($emails as $e) {
			$cont++;		
			$templateProcessor->setValue('id#'.$cont, $cont);	
			$templateProcessor->setValue('email#'.$cont, strval($e->getEmail()));			
		}

		$templateProcessor->saveAs('uploads/temp/emails.docx');

        $file_url = 'uploads/temp/emails.docx';
        header('Content-Type: application/docx'); // ZIP file
        header('Content-Disposition: attachment; filename="emails.docx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($file_url));
        readfile($file_url);
        exit();
	}


	


	

	
}
