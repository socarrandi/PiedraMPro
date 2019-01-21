<?php

namespace GaviotaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GaviotaBundle extends Bundle
{


	/*
        * listado trabajadores abaco
        */
        public function getEmpleadosAbaco(){
              
            $result = $this->getEntityManager()->getConnection()->executeQuery("SELECT * FROM dbo.EMPL_EMPLEADOS");
            $trabajadores = $result->fetchAll();            

            return $trabajadores;         
                
        }

        /*
        * listado trabajadores habitat
        */
        public function getEmpleadosHabitat($abacos){

                foreach ($abacos as $abaco) {


            $result = $this->getEntityManager()->getConnection()->executeQuery("SELECT * FROM dbo.T_Urh WHERE [ut_Id] = '".$abaco['CARNET_ID']."' ");
            $trabajador = $result->fetchAll();         
           
            if (!$trabajador && $abaco['BAJA'] == 0){               

                $fecha = new \DateTime($abaco['FECHA_ALTA']);
                $fecha_alta = $fecha->format('m-d-Y');

                if($abaco['PROVINCIA'] == '05'){
                        $prov = '6';
                }else if($abaco['PROVINCIA'] == '07'){
                         $prov = '8';
                }

                if($abaco['SEXO'] == 'F'){
                        $sexo = 0 ;
                }else if($abaco['SEXO'] == 'M'){
                         $sexo = 1;
                }
                
                $insert = $this->getEntityManager()->getConnection()->executeQuery("INSERT INTO dbo.T_Urh
           ([ut_Id]
           ,[ut_Nombre]
           ,[ut_Apellido1]
           ,[ut_Apellido2]           ,[ut_Categoria]
           ,[ut_Mando]           ,[ut_UMayor]
           ,[ut_UMenor]           ,[ut_GM]
           ,[ut_Cargo]           ,[ut_FIFAR]
           ,[ut_AS_FAR]           ,[ut_FIEnt]
           ,[ut_AS_Ent]           ,[ut_Albergado]
           ,[ut_Calle]           ,[ut_No]
           ,[ut_Apto]           ,[ut_etre]
           ,[ut_Rpto]
           ,[ut_Zona]           ,[ut_Mpio]
           ,[ut_Prov]           ,[ut_Estatus]
           ,[ut_obd]
           ,[ut_otd]           ,[ut_osd]
           ,[ut_ov]
           ,[ut_CC]           ,[ut_Grupo]
           ,[ut_B_rnv]
           ,[ut_Vence]           ,[ut_B_ia]
           ,[ut_B_sgp]
           ,[ut_Sexo]           ,[ut_GT]
           ,[ut_FechaAlta]
           ,[ut_FechaMod]           ,[ut_PCSGP]
           ,[ut_NExp]
           ,[UT_EstCivil]           ,[UT_SitLegalV]
           ,[Ut_TitularV]           ,[UT_PARENTESCO]
           ,[UT_DERECHOSH]
           ,[UT_DATOSHERENCIA] )     VALUES
            ('".$abaco['CARNET_ID']."' , '".$abaco['PRI_NOMBRE']." ".$abaco['SEG_NOMBRE']."' , '".$abaco['PRI_APELLIDO']."', '".$abaco['SEG_APELLIDO']."', 
                07 , '000000000', '000207000', '000207723', '01', ' ', '', 0 , '', 0, 0, '', '','', '', '', '', 35, '".$prov."', '01' ,
                '000207723', '000207000', '000200000', '', '', 'V', 0, '', 0, 0 , ".$sexo." , '', '".$fecha_alta."', '', 1 ,'".$abaco['CARNET_ID']."',
                'Soltero(a)', 'SGP', '-', '(ninguno)', 0, '')");

               
               $insert->nextRowset();
               $result = $insert->fetchAll();
         
                

            } else if ($trabajador && $abaco['BAJA'] == 1 ){

                $delete = $this->getEntityManager()->getConnection()->executeQuery("DELETE FROM dbo.T_Urh WHERE [ut_Id] = '".$abaco['CARNET_ID']."'");
                $delete->nextRowset();
                $result = $delete->fetchAll();
                 
            } 



                
                }

               
        }
}
