<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'InformaticaBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'login',);
        }

        // check_path
        if ($pathinfo === '/check') {
            return array('_route' => 'check_path');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/informatica')) {
            // registro
            if ($pathinfo === '/informatica/registro') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::registroAction',  '_route' => 'registro',);
            }

            // perfil
            if ($pathinfo === '/informatica/perfil') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'perfil',);
            }

            // usuarios
            if ($pathinfo === '/informatica/usuarios') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\UsuarioController::usuariosAction',  '_route' => 'usuarios',);
            }

            if (0 === strpos($pathinfo, '/informatica/ma')) {
                // mastro_general
                if ($pathinfo === '/informatica/mastro_general') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::mastroGeneralAction',  '_route' => 'mastro_general',);
                }

                // maestro_tipo_equipo
                if ($pathinfo === '/informatica/maestro_tipo_equipo') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::maestroTipoEquipoAction',  '_route' => 'maestro_tipo_equipo',);
                }

                // mastro_pieza
                if ($pathinfo === '/informatica/mastro_pieza') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::mastroPiezaAction',  '_route' => 'mastro_pieza',);
                }

            }

            // equipo
            if ($pathinfo === '/informatica/equipo') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::equipoAction',  '_route' => 'equipo',);
            }

            if (0 === strpos($pathinfo, '/informatica/inventario_pieza')) {
                // inventario_piezas_equipo
                if ($pathinfo === '/informatica/inventario_piezas_equipo') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::inventarioPiezasEquipoAction',  '_route' => 'inventario_piezas_equipo',);
                }

                // inventario_pieza_equipo
                if ($pathinfo === '/informatica/inventario_pieza_equipo') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::inventarioPiezaEquipoAction',  '_route' => 'inventario_pieza_equipo',);
                }

            }

            if (0 === strpos($pathinfo, '/informatica/a')) {
                // add_pieza_equipo
                if ($pathinfo === '/informatica/add_pieza_equipo') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::addPiezaEquipoAction',  '_route' => 'add_pieza_equipo',);
                }

                // abaco
                if ($pathinfo === '/informatica/abaco') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::abacoAction',  '_route' => 'abaco',);
                }

            }

            if (0 === strpos($pathinfo, '/informatica/movimiento_')) {
                // movimiento_aft
                if ($pathinfo === '/informatica/movimiento_aft') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::movimientoAftAction',  '_route' => 'movimiento_aft',);
                }

                // movimiento_pieza
                if ($pathinfo === '/informatica/movimiento_pieza') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::movimientoPiezaAction',  '_route' => 'movimiento_pieza',);
                }

            }

            // telefono
            if ($pathinfo === '/informatica/telefono') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::telefonoAction',  '_route' => 'telefono',);
            }

            // usuario_dominio
            if ($pathinfo === '/informatica/usuario_dominio') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::usuarioDominioAction',  '_route' => 'usuario_dominio',);
            }

            if (0 === strpos($pathinfo, '/informatica/e')) {
                if (0 === strpos($pathinfo, '/informatica/exportar_')) {
                    // exportar_inventario
                    if ($pathinfo === '/informatica/exportar_inventario') {
                        return array (  '_controller' => 'InformaticaBundle\\Controller\\ExportarController::exportarInventarioAction',  '_route' => 'exportar_inventario',);
                    }

                    // exportar_movimiento_aft
                    if ($pathinfo === '/informatica/exportar_movimiento_aft') {
                        return array (  '_controller' => 'InformaticaBundle\\Controller\\ExportarController::exportarMovimientoAftAction',  '_route' => 'exportar_movimiento_aft',);
                    }

                    // exportar_dictamen_aft
                    if ($pathinfo === '/informatica/exportar_dictamen_aft') {
                        return array (  '_controller' => 'InformaticaBundle\\Controller\\ExportarController::exportarDictamenAftAction',  '_route' => 'exportar_dictamen_aft',);
                    }

                    if (0 === strpos($pathinfo, '/informatica/exportar_expediente_tecnico')) {
                        // exportar_expediente_tecnico
                        if ($pathinfo === '/informatica/exportar_expediente_tecnico') {
                            return array (  '_controller' => 'InformaticaBundle\\Controller\\ExportarController::exportarExpedienteTecnicoAction',  '_route' => 'exportar_expediente_tecnico',);
                        }

                        // exportar_expediente_tecnico_pc
                        if ($pathinfo === '/informatica/exportar_expediente_tecnico_pc') {
                            return array (  '_controller' => 'InformaticaBundle\\Controller\\ExportarController::exportarExpedienteTecnicoPcAction',  '_route' => 'exportar_expediente_tecnico_pc',);
                        }

                    }

                    // exportar_solicitud_asignacion_serv_inf
                    if ($pathinfo === '/informatica/exportar_solicitud_asignacion_serv_inf') {
                        return array (  '_controller' => 'InformaticaBundle\\Controller\\ExportarController::exportarSolicitudAsignacionServInfAction',  '_route' => 'exportar_solicitud_asignacion_serv_inf',);
                    }

                    // exportar_listado_nominal_usuario
                    if ($pathinfo === '/informatica/exportar_listado_nominal_usuario') {
                        return array (  '_controller' => 'InformaticaBundle\\Controller\\ExportarController::exportarListadoNominalUsuarioAction',  '_route' => 'exportar_listado_nominal_usuario',);
                    }

                }

                // equipo_aprobado
                if ($pathinfo === '/informatica/equipo_aprobado') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\NomencladorController::equipoAprobadoAction',  '_route' => 'equipo_aprobado',);
                }

            }

            // prueba
            if ($pathinfo === '/informatica/prueba') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\ZunController::pruebaAction',  '_route' => 'prueba',);
            }

            if (0 === strpos($pathinfo, '/informatica/c')) {
                // conexion_db
                if ($pathinfo === '/informatica/conexion_db') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\ZunController::conexionDbAction',  '_route' => 'conexion_db',);
                }

                // cargar_areas_aft
                if ($pathinfo === '/informatica/cargar_areas_aft') {
                    return array (  '_controller' => 'InformaticaBundle\\Controller\\ZunController::cargarAreasAFTAction',  '_route' => 'cargar_areas_aft',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/rrhh')) {
            // adicionar_contrato
            if ($pathinfo === '/rrhh/adicionar_contrato') {
                return array (  '_controller' => 'RRHHBundle\\Controller\\DefaultController::adicionarContratoAction',  '_route' => 'adicionar_contrato',);
            }

            if (0 === strpos($pathinfo, '/rrhh/editar_')) {
                // editar_contrato
                if (0 === strpos($pathinfo, '/rrhh/editar_contrato') && preg_match('#^/rrhh/editar_contrato/(?P<IdContrato>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_contrato')), array (  '_controller' => 'RRHHBundle\\Controller\\DefaultController::editarContratoAction',));
                }

                // editar_otros_datos_contacto
                if (0 === strpos($pathinfo, '/rrhh/editar_otros_datos_contacto') && preg_match('#^/rrhh/editar_otros_datos_contacto/(?P<IdContrato>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_otros_datos_contacto')), array (  '_controller' => 'RRHHBundle\\Controller\\DefaultController::editarOtrosDatosContactoAction',));
                }

            }

            // listado_contrato
            if ($pathinfo === '/rrhh/listado_contrato') {
                return array (  '_controller' => 'RRHHBundle\\Controller\\DefaultController::listadoContratoAction',  '_route' => 'listado_contrato',);
            }

            // gestionar_unidad
            if ($pathinfo === '/rrhh/gestionar_unidad') {
                return array (  '_controller' => 'RRHHBundle\\Controller\\DefaultController::gestionarUnidadAction',  '_route' => 'gestionar_unidad',);
            }

            if (0 === strpos($pathinfo, '/rrhh/exportar_contrato')) {
                // exportar_contratos
                if ($pathinfo === '/rrhh/exportar_contratos') {
                    return array (  '_controller' => 'RRHHBundle\\Controller\\ExportarController::exportarContratosAction',  '_route' => 'exportar_contratos',);
                }

                // exportar_contrato
                if (preg_match('#^/rrhh/exportar_contrato/(?P<IdContrato>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'exportar_contrato')), array (  '_controller' => 'RRHHBundle\\Controller\\ExportarController::exportarContratoAction',));
                }

            }

            // checked_no_contrato
            if ($pathinfo === '/rrhh/checked_no_contrato') {
                return array (  '_controller' => 'RRHHBundle\\Controller\\DefaultController::checkedNoContratoAction',  '_route' => 'checked_no_contrato',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // adicionar_departamento
            if ($pathinfo === '/admin/adicionar_departamento') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::adicionarDepartamentoAction',  '_route' => 'adicionar_departamento',);
            }

            // inventario_departamento
            if (0 === strpos($pathinfo, '/admin/inventario_departamento') && preg_match('#^/admin/inventario_departamento/(?P<idD>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_departamento')), array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::inventarioDepartamentoAction',));
            }

            if (0 === strpos($pathinfo, '/admin/adicionar_')) {
                // adicionar_inventario_null
                if (0 === strpos($pathinfo, '/admin/adicionar_inventario_null') && preg_match('#^/admin/adicionar_inventario_null/(?P<idD>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adicionar_inventario_null')), array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::adicionarInventarioNullAction',));
                }

                // adicionar_pc
                if ($pathinfo === '/admin/adicionar_pc') {
                    return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::adicionarPcAction',  '_route' => 'adicionar_pc',);
                }

            }

            // inventario_pc
            if (0 === strpos($pathinfo, '/admin/inventario_pc') && preg_match('#^/admin/inventario_pc/(?P<idPc>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inventario_pc')), array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::inventarioPcAction',));
            }

            // adicionar_documento
            if ($pathinfo === '/admin/adicionar_documento') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::adicionarDocumentoAction',  '_route' => 'adicionar_documento',);
            }

            // gestionar_telefono
            if ($pathinfo === '/admin/gestionar_telefono') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::gestionarTelefonoAction',  '_route' => 'gestionar_telefono',);
            }

            // adicionar_password_setup
            if ($pathinfo === '/admin/adicionar_password_setup') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::adicionarPasswordSetupAction',  '_route' => 'adicionar_password_setup',);
            }

            // inventario_baja
            if ($pathinfo === '/admin/inventario_baja') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::inventarioBajaAction',  '_route' => 'inventario_baja',);
            }

            // baja_usuario_dominio
            if ($pathinfo === '/admin/baja_usuario_dominio') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::bajaUsuarioDominioAction',  '_route' => 'baja_usuario_dominio',);
            }

            if (0 === strpos($pathinfo, '/admin/gestionar_')) {
                if (0 === strpos($pathinfo, '/admin/gestionar_usuario_')) {
                    // gestionar_usuario_dominio
                    if ($pathinfo === '/admin/gestionar_usuario_dominio') {
                        return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::gestionarUsuarioDominioAction',  '_route' => 'gestionar_usuario_dominio',);
                    }

                    // gestionar_usuario_red
                    if ($pathinfo === '/admin/gestionar_usuario_red') {
                        return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::gestionarUsuarioRedAction',  '_route' => 'gestionar_usuario_red',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/gestionar_c')) {
                    // gestionar_correo
                    if ($pathinfo === '/admin/gestionar_correo') {
                        return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::gestionarCorreoAction',  '_route' => 'gestionar_correo',);
                    }

                    // gestionar_cargo
                    if ($pathinfo === '/admin/gestionar_cargo') {
                        return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::gestionarCargoAction',  '_route' => 'gestionar_cargo',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/lista_')) {
                // lista_pc_ajax
                if ($pathinfo === '/admin/lista_pc_ajax') {
                    return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::listaPcAjaxAction',  '_route' => 'lista_pc_ajax',);
                }

                // lista_usuario_red_ajax
                if ($pathinfo === '/admin/lista_usuario_red_ajax') {
                    return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::listaUsuarioRedAjaxAction',  '_route' => 'lista_usuario_red_ajax',);
                }

            }

            // usuario_dominio_checkbox_ajax
            if ($pathinfo === '/admin/usuario_dominio_checkbox_ajax') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::usuarioDominioCheckboxAjaxAction',  '_route' => 'usuario_dominio_checkbox_ajax',);
            }

            // correo_checkbox_ajax
            if ($pathinfo === '/admin/correo_checkbox_ajax') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::correoCheckboxAjaxAction',  '_route' => 'correo_checkbox_ajax',);
            }

            // telefono_checkbox_ajax
            if ($pathinfo === '/admin/telefono_checkbox_ajax') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::telefonoCheckboxAjaxAction',  '_route' => 'telefono_checkbox_ajax',);
            }

            // password_setups_checkbox_ajax
            if ($pathinfo === '/admin/password_setups_checkox_ajax') {
                return array (  '_controller' => 'PiedraBundle\\Controller\\DefaultController::passwordSetupsCheckboxAjaxAction',  '_route' => 'password_setups_checkbox_ajax',);
            }

            if (0 === strpos($pathinfo, '/admin/exportar_')) {
                // exportar_usuario_nominal
                if ($pathinfo === '/admin/exportar_usuario_nominal') {
                    return array (  '_controller' => 'PiedraBundle\\Controller\\ExportarWordController::exportarUsuarioNominalAction',  '_route' => 'exportar_usuario_nominal',);
                }

                // exportar_listado_password_setup
                if ($pathinfo === '/admin/exportar_listado_password_setup') {
                    return array (  '_controller' => 'PiedraBundle\\Controller\\ExportarWordController::exportarListadoPasswordSetupAction',  '_route' => 'exportar_listado_password_setup',);
                }

                if (0 === strpos($pathinfo, '/admin/exportar_correo')) {
                    // exportar_correo_admin
                    if ($pathinfo === '/admin/exportar_correo_admin') {
                        return array (  '_controller' => 'PiedraBundle\\Controller\\ExportarWordController::exportarCorreoAdminAction',  '_route' => 'exportar_correo_admin',);
                    }

                    // exportar_correos
                    if ($pathinfo === '/admin/exportar_correos') {
                        return array (  '_controller' => 'PiedraBundle\\Controller\\ExportarWordController::exportarCorreosAction',  '_route' => 'exportar_correos',);
                    }

                }

            }

            // maestro_general_pro
            if ($pathinfo === '/admin/maestro_general_pro') {
                return array (  '_controller' => 'InformaticaBundle\\Controller\\DefaultController::maestroGeneralProAction',  '_route' => 'maestro_general_pro',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
