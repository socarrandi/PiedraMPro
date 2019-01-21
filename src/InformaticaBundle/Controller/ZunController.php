<?php

namespace InformaticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

use InformaticaBundle\Entity\Conexion;

class ZunController extends Controller
{

    /*
    * cargar Areas del ZunAFT
    */
    public function cargarAreaAFTAction(Request $request){

        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();

        $conexionObj = $em->getRepository('InformaticaBundle:Conexion')->findOneBy(array('tipo' => 'AFT', 'unidad'=>$user->getUnidad()));
        
        $areas = "SELECT id_area ,nombre_area,id_ccosto,responsable FROM dbo.AREAS";
        
        $sql = $this->conexion(         
                $user = $conexionObj->getUser(),
                $password = base64_decode($conexionObj->getPassword()),
                $host = $conexionObj->getHost(),
                $dbname = $conexionObj->getDbname()
        )->executeQuery($areas);
        $result = $sql->fetchAll(); 



        $response = new Response('true');
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

    /*
    * Conexion Zun AFT
    */
    public function conexionDbAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser(); 

        if ($request->getMethod() == 'POST'){

            if($request->request->get('action') == 'conexion_aft'){

                

                if ($request->request->get('id')!=''){

                    $conexionObj = $em->getRepository('InformaticaBundle:Conexion')->find($request->request->get('id'));
                    $ps = $request->request->get('password');
                    $password = base64_encode($ps);
                    $conexionObj
                        //->setDriver()
                        ->setUnidad($user->getUnidad())
                        ->setPort($request->request->get('port'))
                        ->setHost($request->request->get('host'))
                        ->setDbname($request->request->get('dbname'))
                        ->setTipo($request->request->get('tipo'))
                        ->setUser($request->request->get('user'))
                        ->setPassword($password);                 
                }else{
                    $conexionObj = new Conexion();                  

                    $ps = $request->request->get('password');
                    $password = base64_encode($ps);
                    $conexionObj
                        //->setDriver()
                        ->setUnidad($user->getUnidad())
                        ->setPort($request->request->get('port'))
                        ->setHost($request->request->get('host'))
                        ->setDbname($request->request->get('dbname'))
                        ->setTipo($request->request->get('tipo'))
                        ->setUser($request->request->get('user'))
                        ->setPassword($password);
                }
                $em->persist($conexionObj);
                $em->flush();

                $response = new Response('true');
                $response->headers->set('Content-Type', 'application/json');
                return $response;

            }else if($request->request->get('action') == 'conexion_stock'){ 


            }


        }
        return $this->render('.html.twig');
    }

	/*
	* listado de Areas
	*/
	public function pruebaAction()
    {
        $em = $this->getDoctrine()->getManager('informatica');
        $user = $this->getUser();



        $rows = $em->getRepository('InformaticaBundle:InventarioEquipo')->getInvSinEquipo();

        foreach ($rows as $r) {
            $em->remove($r);
            $em->flush();
        }

        echo ('<pre>');
        print_r($rows);
        exit; 

        $conexionObj = $em->getRepository('InformaticaBundle:Conexion')->findOneBy(array('tipo' => 'AFT', 'unidad'=>$user->getUnidad()));

        
        $areas = "SELECT id_area ,nombre_area,id_ccosto,responsable FROM dbo.AREAS";
        $sql = $this->conexion(        	
        		$user = $conexionObj->getUser(),
        		$password = base64_decode($conexionObj->getPassword()),
        		$host = $conexionObj->getHost(),
        		$dbname = $conexionObj->getDbname()
        )->executeQuery($areas);
        $result = $sql->fetchAll();   
        
        echo ('<pre>');
        print_r($result);
        exit; 
    }





	/*
	* Crear conexion a la bases de datos externas de forma dinamica
	*/
	public function conexion($user, $password, $host, $dbname){

        $connectionFactory = $this->container->get('doctrine.dbal.connection_factory');
        $conn = $connectionFactory->createConnection(array(
            'driver' => 'pdo_sqlsrv',
            'user' => $user,
            'password' => $password,
            'host' => $host,
            'dbname' => $dbname,
        ));
        return $conn;
    }


}
