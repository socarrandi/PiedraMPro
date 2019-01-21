<?php

/* InformaticaBundle:Gestion:Equipo.html.twig */
class __TwigTemplate_0b63c43430176caefb9a052dc188497e9de9cb9600994cd467ed38d153083d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_pro.html.twig", "InformaticaBundle:Gestion:Equipo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_pro.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Equipos ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- BEGIN PAGE LEVEL STYLES -->

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/pages/floating-label.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\"/>

  <!-- select css -->  
 
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\"/>

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css"), "html", null, true);
        echo "\"/>


  <!-- chartist CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/chartist-js/dist/chartist.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"), "html", null, true);
        echo "\"/>


    <!-- page css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/pages/tab-page.css"), "html", null, true);
        echo "\"/>
   
       

    <!--alerts CSS -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css"), "html", null, true);
        echo "\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/pages/form-icheck.css"), "html", null, true);
        echo "\"/>
   




  
   
    <!-- END PAGE LEVEL STYLES -->
";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "
  ";
        // line 48
        echo twig_include($this->env, $context, "InformaticaBundle:include:preloder.html.twig", array("loader_label" => "Equipos"));
        echo "

  <div class=\"load\"></div>

  ";
        // line 52
        $this->loadTemplate("InformaticaBundle:include:header.html.twig", "InformaticaBundle:Gestion:Equipo.html.twig", 52)->display($context);
        // line 53
        echo "  ";
        $this->loadTemplate("InformaticaBundle:include:aside.html.twig", "InformaticaBundle:Gestion:Equipo.html.twig", 53)->display($context);
        // line 54
        echo "

  <div class=\"page-wrapper\" style=\"min-height: 502px;\">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class=\"container-fluid\">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        ";
        // line 65
        echo twig_include($this->env, $context, "InformaticaBundle:include:page_titles.html.twig", array("titulo_pagina" => "Equipos", "session" => "Informática"));
        echo "                          
                        
        <div class=\"row\">
          <div class=\"modal fade\" id=\"modal_inventario\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-toggle=\"modal\" >
            <div class=\"modal-dialog modal-xlg\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">                                    
                  <h4 class=\"modal-title\" id=\"h4_title_inventario\"> </h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-body\" id=\"modal-body-inventario-equipo\">    

                </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"add_parte_pieza\"> Adicionar Parte y Piezas </button>
                  <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Cancelar</button>
                  
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
                  <!-- /.modal-dialog -->
          </div> 


          <div class=\"modal fade\" id=\"modal_inventario_pieza_equipo\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-toggle=\"modal\" >
            <div class=\"modal-dialog modal-xlg\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">                                    
                  <h4 class=\"modal-title\" id=\"h4_title_inventario_pieza_equipo\"> </h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-body\" >   

                  <input type=\"text\" id=\"id_pizas_cargada\" hidden=\"hidden\" value=\"cargar\" />

                  <table id=\"table_pieza_equipo\" class=\"table table-hover table_pieza_equipo\" data-paging=\"true\" data-sorting=\"true\" > </table> 

                </div>
                <div class=\"modal-footer\">
                 
                  <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Cancelar</button>
                  
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
                  <!-- /.modal-dialog -->
          </div> 

          

          <!-- MODAL EDITOR equipos  -->
          <div class=\"modal fade\" id=\"editor-inventario\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editor-inventario-title\">
  
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <form class=\"modal-content form-horizontal\" id=\"form-inventario\">
              <div class=\"modal-header\">
                 <h4 class=\"modal-title\" id=\"editor-title\">Modificar Equipo</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
              </div>
              <div class=\"modal-body\">
                <input type=\"number\" id=\"id\" name=\"id\" hidden=\"hidden\" />

              <div class=\"row m-t-20\">
                <div class=\"form-material col-md-6 col-xs-12 \">  
                <label for=\"p_direccionp\">MEDIO BÁSICO:</label> 
                  <input type=\"text\" class=\"form-control\" id=\"medio_basico\" name=\"medio_basico\">                  
                  
                  <span class=\"help-block\"><small>MEDIO BÁSICO</small></span>
                </div>
                <div class=\"form-material col-md-6 col-xs-12\">     
                <label for=\"p_direccionp\">NO. SUBMAYOR:</label>            
                  <input type=\"text\" class=\"form-control\" id=\"no_submayor\" name=\"no_submayor\">                   
                  <span class=\"help-block\"><small>NO. SUBMAYOR</small></span>
                </div>
              </div>

              <div class=\"row  m-t-20\">

                <div class=\"form-material col-md-6 col-xs-12\">
                  <label for=\"p_direccionp\">NOMBRE DE EQUIPO:</label>
                  <input type=\"text\" class=\"form-control\" id=\"nombre_equipo\" name=\"nombre_equipo\">
                </div>
                <div class=\"form-material col-md-6 col-xs-12\">       
                  <label for=\"p_direccionp\">SELLO:</label>                          
                  <input type=\"text\" class=\"form-control\" id=\"sello\" name=\"sello\">                  
                  
                </div>

                <div class=\"form-group col-md-6 col-xs-12\">
                  <label for=\"responsable_equipo\">RESPONSABLE DEL EQUIPO:</label>
                  <select  class=\"selectpicker\" id=\"responsable_equipo\" name=\"responsable_equipo\" data-live-search=\"true\">
                      ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 159
            echo "                          <option data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "responsable", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["responsable"], "local", array()), "local", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "responsable", array()), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                  </select>        
                </div>


                <div class=\"form-group col-md-6 col-xs-12\">
                  <label for=\"estado_equipo\">ESTADO EQUIPO:</label>
                  <select  class=\"selectpicker\" id=\"estado_equipo\" name=\"estado_equipo\">
                      ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estado"]) ? $context["estado"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 169
            echo "                          <option data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "estado", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "estado", array()), "html", null, true);
            echo "</option>                           
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                  </select>        
                </div>

                <div class=\"form-group col-md-6 col-xs-12\" id=\"isMonitor\">
                  <label for=\"pcs\">SELECIONE LA PC DE ESTE EQUIPO:</label>                  
                    <select  class=\"form-control selectpicker\" id=\"pcs\" name=\"pcs\" data-live-search=\"true\">
                      <option value=\"-1\"> Niguno</option>
                        ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pcs"]) ? $context["pcs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pc"]) {
            // line 179
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pc"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pc"], "tipoEquipo", array()), "tipoEquipo", array()), "html", null, true);
            echo " - MB: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pc"], "medioBasico", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                    </select>          
                </div>
              </div>
              

                <div class=\"form-material\">
                  <label for=\"p_direccionp\">OBSERVACIÓN:</label>
                  <input type=\"text\" class=\"form-control\" id=\"observacion\" name=\"observacion\">                
                  
                </div>               


              </div>
              <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Guardar Cambios</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>        
            </form>          
          </div>  
        </div>
        <!-- end MODAL EDITOR equipos -->
     

          <div class=\"modal fade\" id=\"modal_exportar_inventario\" tabindex=\"-1\" >
              <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">                                  
                      <h4 class=\"modal-title\"> Exportar Listado Equipos </h4> 
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  </div>
                  <div class=\"modal-body\">    

                    <div class=\"row ocultar_equipo_area_local\" data-id=\"false\">
                        
                        <div class=\"col-md-6 \">
                          <select class=\"selectpicker\" data-live-search=\"true\" name=\"ex_equipo\" id=\"ex_equipo\">
                          <option value=\"\">TODOS LOS EQUIPOS </option>                    
                            ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_equipos"]) ? $context["tipo_equipos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 219
            echo "                              <option data-tokens=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "tipoEquipo", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "id", array()), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "tipoEquipo", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                          </select>       
                        </div> 

                        <div class=\"col-md-6 \">
                          <select class=\"selectpicker\" data-live-search=\"true\" name=\"ex_local\" id=\"ex_local\">
                          <option value=\"\"> TODAS LAS ÁREA / LOCAL  </option>                    
                            ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 228
            echo "                              <option data-tokens=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "area", array()), "area", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "area", array()), "area", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "                          </select>       
                        </div> 
                    </div> 
                        
                    <div class=\"row\"> 
                        <div class=\"col-md-12 col-lg-12\"> 
                        <ul class=\"icheck-list radio_formato_list\">
                            <span class=\"m-l-10\">
                                <input tabindex=\"7\" type=\"radio\" class=\"check radio_formato\" id=\"doc\" data-id=\"doc\" name=\"minimal-radio\">
                                <label for=\"doc\"><i class=\"fa fa-file-word-o\"> </i> Word</label>
                            </span>
                            <span class=\"m-l-10\">
                                <input tabindex=\"8\" type=\"radio\" class=\"check radio_formato\" id=\"pdf\" data-id=\"pdf\" name=\"minimal-radio\" >
                                <label for=\"pdf\"><i class=\"fa fa-file-pdf-o\"> </i> PDF</label>
                            </span>
                            <span class=\"m-l-10\">
                                <input tabindex=\"8\" type=\"radio\" class=\"check radio_formato\" id=\"xlsx\" data-id=\"xlsx\" name=\"minimal-radio\" >
                                <label for=\"xlsx\"><i class=\"fa fa-file-excel-o\"> </i> Excel</label>
                            </span>
                            <span class=\"m-l-10\">
                                <input tabindex=\"8\" type=\"radio\" class=\"check radio_formato\" id=\"print\" name=\"minimal-radio\" checked>
                                <label for=\"print\"><i class=\"fa fa-print\"> </i> Imprimir</label>
                            </span>
                        </ul> 
                        </div> 
                    </div>
                                    
                  </div>

                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"exportar_inventario\"> Exportar Listado Equipos </button>

                    <button type=\"button\" class=\"btn btn-sm default\" data-dismiss=\"modal\">Cancelar</button>
                    
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
                    <!-- /.modal-dialog -->
          </div>


         <div id=\"modal_movimiento_pieza\" class=\"modal fade\" tabindex=\"-1\">
            <div class=\"modal-dialog modal-lg\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">                  
                  <h4 class=\"modal-title\" id=\"h4_modal_movimiento_pieza\" > Movimiento de Pieza</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-body\" id=\"modal-body-movimiento-pieza\">


                <div class=\"row floating-labels\" id=\"div_movimiento_pieza \">

                    <div class=\"form-material col-md-12 col-xs-12 m-b-10\">
                       
                        <select class=\"form-control\" id=\"tipo_movimiento\" name=\"tipo_movimiento\">
                          <option value=\"\"> Selecione el Tipo Movimiento </option>}
                          option
                          ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_movimientos"]) ? $context["tipo_movimientos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tm"]) {
            // line 290
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tm"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tm"], "tipo", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                         
                        </select>

                    </div>
                    <div class=\"form-material col-md-6 col-xs-12\">

                      <input type=\"text\" placeholder=\"Selecione la fecha\" class=\"form-control date-picker\" id=\"movimiento_fecha\" name=\"movimiento_fecha\"/>                      

                      <div class=\"form-material portlet green-meadow box\">
                            <div class=\"portlet-title\">
                              
                              <div class=\"d-flex\">
                                <div>
                                  <h3 class=\"card-title m-b-5\"><span class=\"lstick\"></span>EQUIPO ORIGEN</h3>                                       
                                </div>
                            </div>                            
                            </div>
                            <div class=\"portlet-body\">
                              <div class=\"row static-info\">
                               
                                <div class=\"col-md-12 value\" id=\"origen_equipo\" data-id=\"\">
                                   ...
                                </div>
                              </div>
                            </div>
                      </div>
                      
                    </div>

                     <div class=\"col-md-6 col-xs-12\">

                       <select class=\"selectpicker\" data-live-search=\"true\" data-placeholder=\"Selecione Equipo...\" name=\"select_destino_equipos\" id=\"select_destino_equipos\"> </select> <br>

                      <div class=\"portlet green-meadow box\">                            
                            <div class=\"d-flex\">
                                <div>
                                  <h3 class=\"card-title m-b-5\"><span class=\"lstick\"></span>EQUIPO DESTINO </h3>                                       
                                </div>
                            </div>

                            <div class=\"portlet-body\">
                              <div class=\"row static-info\">
                                <div class=\"col-md-12 value\" id=\"destino_equipo\">
                                   ...
                                </div>
                              </div>
                            </div>
                      </div>
                      
                    </div>

                </div>
              </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"movimiento_pieza\">Hacer Movimiento Pieza</button>
                  <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"movimiento_equipo\">Hacer Movimineto Equipo</button>
                  <button type=\"button\" class=\"btn btn-sm default\" data-dismiss=\"modal\">Cancelar</button>
                  
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
                  <!-- /.modal-dialog -->
         </div>

          <!-- Modal Adicionar mas partes y piezas -->
          <div id=\"modal_add_pieza\" class=\"modal fade\" tabindex=\"-1\">
              <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    
                    <h4 class=\"modal-title\" > Selecionae la/s Pieza/s | COMPUTADORA: <span class=\"span_equipo\"> </span> </h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  </div>
                  <div class=\"modal-body\" id=\"modal-body-add-pieza\" data-id=\"\">  

                 
                  <select multiple=\"multiple\" class=\"selectpicker\" id=\"select_piezas_faltantes\" name=\"select_piezas_faltantes[]\">  </select>
                        

                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"add_mas_parte_pieza\">Adicionar pieza</button>
                    <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Cancelar</button>
                    
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
                    <!-- /.modal-dialog -->
          </div>   


          <!-- Modal Adicionar mas partes y piezas -->
          <div id=\"modal_add_equipo\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"modal_add_equipo\">
              <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">                    
                    <h4 class=\"modal-title\" > Adicionar Equipos </h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  </div>
                  <div class=\"modal-body\">  
                    <div class=\"row\">
                      <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <h5>Tipo de Equipo</h5>

                        <select class=\"selectpicker\" data-live-search=\"true\" id=\"tipo_equipo\" name=\"tipo_equipo\">
                          <option value=\"\">Selecione el Equipo</option>
                          
                          ";
        // line 401
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_equipos"]) ? $context["tipo_equipos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 402
            echo "                            <option data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "tipoEquipo", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "                
                        </select>

                      </div>

                      <div class=\"col-lg-6 col-md-6 col-sm-12\">
                         <h5>Ubicación</h5>  

                      <select class=\"selectpicker\" data-live-search=\"true\" name=\"responsable\" id=\"responsable\">
                          <option value=\"\">Selecione el Responsable</option>
                            ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ubicacion"]) ? $context["ubicacion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 414
            echo "                              <optgroup label=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "local", array()), "html", null, true);
            echo " \">
                              ";
            // line 415
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "responsables", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 416
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "responsable", array()), "html", null, true);
                echo "</option>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "  
                              </optgroup>                    
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo "                   
                      </select>                                           
                      </div>
                    </div>

                      <div class=\"card-body\">                        

                          <div class=\"col-lg-12 col-md-12 col-sm-12\" id=\"pp\">

                             <div class=\"d-flex\">                  
                            <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>Seleccione las Partes y Piezas </h4>                                 
                          </div>

                            <div class=\"col-md-12 col-xs-12\">                   
                                <select class=\"selectpicker\" data-live-search=\"true\" name=\"piezas\" id=\"piezas\" multiple>
                                  ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["piezas"]) ? $context["piezas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pieza"]) {
            echo " 
                                    <option value=\"";
            // line 435
            echo twig_escape_filter($this->env, $this->getAttribute($context["pieza"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pieza"], "pieza", array()), "html", null, true);
            echo "</option>     
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pieza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                 
                                </select>
                            </div>
                             
                          </div>
                    </div>

                  </div>
                  <div class=\"modal-footer\">
                     <button id=\"add_equipo\" class=\"btn btn-sm btn-info\">Adicionar</button>       
                     <button id=\"cancel_equipo\" type=\"button\" class=\"btn btn-sm btn-danger waves-effect text-left\" data-dismiss=\"modal\">Cancelar</button>     
                      
                    
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
                    <!-- /.modal-dialog -->
          </div> 


      </div>

      
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">

          <div class=\"card\">           
            <div class=\"card-body\">
              <div class=\"d-flex\">                  
                <h4 class=\"card-title\"><span class=\"lstick\"></span>LISTADO Equipos </h4>
              </div>  
                <table id=\"table_equipo\" class=\"table table-hover table_equipo\" data-paging=\"true\" data-sorting=\"true\" >     
                    
                      <div class=\"d-flex\">
                          <div class=\"mr-auto\">
                              <div class=\"form-group\">

                                  
                                  <button id=\"mostrar_add_equipo\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-plus\" aria-hidden=\"true\"></i>Adicionar Equipo</button>
                                 
                                  <div class=\"btn-group\" data-toggle=\"buttons\">
                                    <button href=\"#modal_exportar_inventario\" data-toggle=\"modal\" class=\"btn btn-sm btn-warning m-l-40\">
                                     <i class=\"mdi mdi-file-pdf\"> </i> Exportar Inventario
                                    </button> 

                                    <button type=\"button\" class=\"btn btn-sm btn-warning\" id=\"expediente_tecnico\"> <i class=\"mdi mdi-file-document-box\"></i> Expediente Técnico </button>
                                  </div>
    

                                  <button id=\"inventario_equipo_baja\" data-toggle=\"modal\" class=\"btn btn-sm btn-danger m-l-20\"><i class=\"mdi mdi-thumb-down-outline\"> </i>Equipos Baja </button> 

                                  <button id=\"inventario_piezas_equipo\" data-toggle=\"modal\" class=\"btn btn-sm btn-success m-l-20\"><i class=\"mdi mdi-animation\"> </i>Inventario Piezas </button> 

                            


                                ";
        // line 503
        echo "

                                </div>
                                  

                              </div>
                          </div>
                          
                      </div>                                      
                    
                  </table>  

                </br>

                           
            </div>
          </div>

            
        </div>
      </div>


      <div class=\"row\">                   

                    <div class=\"col-lg-12 col-xs-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">COMPARACIÓN EQUIPO EN USO Y EQUIPOS DE ROTOS</h4>

                                <ul class=\"list-inline text-right\">

                                    <li>
                                        <h5><i class=\"fa fa-circle m-r-5 text-success\"></i>Equipos Aprobados</h5>
                                    </li>
                                    <li>
                                        <h5><i class=\"fa fa-circle m-r-5 text-info\"></i>Equipos OK</h5>
                                    </li>
                                    <li>
                                        <h5><i class=\"fa fa-circle m-r-5 text-warning\"></i>Equipos Rotos</h5>
                                    </li>
                                    <li>
                                        <h5><i class=\"fa fa-circle m-r-5 text-danger\"></i>Equipos Baja (Dictaminado)</h5>
                                    </li>
                                </ul>

                                <div>
                                    <canvas id=\"chart2\" height=\"150\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>

    </div>


    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    ";
        // line 568
        $this->loadTemplate("InformaticaBundle:include:footer.html.twig", "InformaticaBundle:Gestion:Equipo.html.twig", 568)->display($context);
        // line 569
        echo "    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>

  
  

  </div>


";
    }

    // line 582
    public function block_javascripts($context, array $blocks = array())
    {
        // line 583
        echo "
    <!-- BEGIN PAGE LEVEL PLUGINS-->
   

    <!-- Plugin JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"), "html", null, true);
        echo "\"></script>

    <!--Custom JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/custom.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Select -->   
    <script type=\"text/javascript\" src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
   
    

    <!-- Footable -->
    <script type=\"text/javascript\" src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js"), "html", null, true);
        echo "\"></script>


    
    <!-- Date Picker Plugin JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>


    <!--morris JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/chartist-js/dist/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/Chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>

 

    <!--c3 JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/c3-master/c3.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Chart JS -->
    <!-- <script type=\"text/javascript\" src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/dashboard3.js"), "html", null, true);
        echo "\"></script> -->
  
     
    <!-- Table Edit -->    
    <script type=\"text/javascript\" src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-tabledit/jquery.tabledit2.js"), "html", null, true);
        echo "\"></script>

    
    <!-- JSPDF -->
    <script type=\"text/javascript\" src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jsPDF-1.3.2/dist/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jsPDF-1.3.2/libs/html2pdf.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jsPDF-1.3.2/libs/jspdf-autotable.js"), "html", null, true);
        echo "\"></script>

    <!-- Sweet-Alert  -->
    <script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>    
    <script  src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\" charset=\"utf-8\" async defer>

      

    \$(window).on('load', function() {  


      var bandera_equipo = 0;
      var baja = 0;

        var \$modal = \$('#editor-inventario'),
          \$editor = \$('#form-inventario'),
          \$editorTitle = \$('#editor-title'),
          ft = FooTable.init('#table_equipo', {
              columns: [
                  {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\",\"breakpoints\":\"xs sm\"},
                  {\"name\":\"tipo_equipo\",\"title\":\"EQUIPO\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"centro_costo\",\"title\":\"C. COSTO\", \"breakpoints\":\"all\"},
                  {\"name\":\"departamento\",\"title\":\"DEPARTAMENTO\", \"breakpoints\":\"all\"},
                  {\"name\":\"responsable\",\"title\":\"RESPONSABLE\", \"breakpoints\":\"all\"},
                  {\"name\":\"cargo\",\"title\":\"CARGO\", \"breakpoints\":\"all\"},
                  {\"name\":\"estado_equipo\",\"title\":\"ESTADO EQUIPO\", \"type\":\"select\", \"breakpoints\":\"all\"},
                  {\"name\":\"medio_basico\",\"title\":\"MEDIO BÁSICO\", \"type\": \"number\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"no_submayor\",\"title\":\"NO. SUBMAYOR\", \"type\": \"number\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"nombre_equipo\",\"title\":\"NOMBRE EQUIPO\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"sello\",\"title\":\"SELLO\", \"breakpoints\":\"all\" },
                  {\"name\":\"observacion\",\"title\":\"OBSERVACION\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"id_padre\", \"visible\": false },
                  {\"name\":\"id_estado\", \"visible\": false },
                  {\"name\":\"id_responsable\", \"visible\": false},
                  {\"name\":\"edit\",\"title\":\".....\", \"breakpoints\":\"xs sm\"}
              ],
              rows: \$.post('";
        // line 671
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'rows', 'baja': baja }).fail(function () { alerta_error();}),
              filtering: {
                  enabled: true,
                  placeholder: \"Buscar Equipo..\",
                   
                }, 
              editing: {
                allowAdd: false,
                enabled: true,  
                editText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span>',   
                deleteText: '<span class=\"mdi mdi-delete-forever\" aria-hidden=\"true\"></span>',
                showText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span> Editar Equipo',                   
                editRow: function(row){
                  var values = row.val();
                  \$editor.find('#id').val(values.id);
                  \$editor.find('#medio_basico').val(values.medio_basico);
                  \$editor.find('#no_submayor').val(values.no_submayor);
                  \$editor.find('#nombre_equipo').val(values.nombre_equipo);
                  \$editor.find('#sello').val(values.sello);
                  \$editor.find('#estado_equipo').val(values.id_estado);
                  \$editor.find('#observacion').val(values.observacion);                  

                  //selecionar equipo padre en el selectpicker
                  \$('select[name=pcs]').val(values.id_padre);
                  \$(\"select[name=pcs]\").selectpicker(\"refresh\");

                  \$('select[name=estado_equipo]').val(values.id_estado);
                  \$(\"select[name=estado_equipo]\").selectpicker(\"refresh\");

                  //selecionar equipo padre en el selectpicker
                  \$('select#responsable_equipo').val(values.id_responsable);
                  \$(\"select#responsable_equipo\").selectpicker(\"destroy\");
                  \$(\"select#responsable_equipo\").selectpicker(\"refresh\");
                  \$('select#responsable_equipo').selectpicker('show'); 

                  if( values.tipo_equipo != 'Monitor'){
                    \$(\"#isMonitor\").attr('hidden','hidden');
                  }else{
                    \$(\"#isMonitor\").removeAttr('hidden');
                  }                      

                  \$modal.data('row', row);
                  \$editorTitle.text('Editar Movimiento Pieza ');
                  \$modal.modal('show');
                },
                deleteRow: function(row){

                    //Parameter
                    if (bandera_equipo == 0){

                      swal({   
                              title: \"Baja de Equipo?\",   
                              text: \"Seguro desea dar baja al Equipo?\",   
                              type: \"warning\",   
                              showCancelButton: true,   
                              confirmButtonColor: \"#DD6B55\",   
                              confirmButtonText: \"Si, Dar Baja!\",   
                              cancelButtonText: \"No, Cancelar!\",   
                              closeOnConfirm: false,   
                              closeOnCancel: false 
                          }, function(isConfirm){   
                              if (isConfirm) {    

                                  var values = row.val();
                                  \$.post('";
        // line 735
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'delete_equipo', 'id': values.id , 'baja': baja })
                                          .done(function (d) { 
     
                                            row.delete();
                                          
                                              swal({   
                                                  title: \"Eliminar!\",   
                                                  text: \"Se le dio baja correctamente al Equipo!\",  
                                                  type:\"success\", 
                                                  timer: 2500,   
                                                  showConfirmButton: false 
                                              });     

                                            }).fail(function () {
                                            alerta_error();
                                        });                                 
                                  
                              } else {    
                                  
                                  swal({   
                                      title: \"Cancelar!\",   
                                      text: \"Daja baja del Equipo fue cancelado!\",  
                                      type:\"error\", 
                                      timer: 2500,   
                                      showConfirmButton: false 
                                  });
                              } 
                          });

                    }else{

                      swal({   
                              title: \"Eliminar el Equipo?\",   
                              text: \"Seguro desea Eliminar el Equipo!. También se elimina todos los Movimientos AFT relacionados con el Equipo y el inventario del Equipo\",   
                              type: \"warning\",   
                              showCancelButton: true,   
                              confirmButtonColor: \"#DD6B55\",   
                              confirmButtonText: \"Eliminar del Sistema!\",   
                              cancelButtonText: \"Cancelar!\",   
                              closeOnConfirm: false,   
                              closeOnCancel: false 
                          }, function(isConfirm){   
                              if (isConfirm) {    

                                  var values = row.val();
                                  \$.post('";
        // line 780
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'delete_equipo', 'id': values.id , 'baja': baja })
                                          .done(function (d) { 
     
                                            row.delete();
                                          
                                              swal({   
                                                  title: \"Eliminar!\",   
                                                  text: \"Se eliminó correctamente el Equipo, tanto movimientos como inventario\",  
                                                  type:\"success\", 
                                                  timer: 3500,   
                                                  showConfirmButton: false 
                                              });                                                                                   
                                          }).fail(function () {
                                            alerta_error();
                                        });                                 
                                  
                              } else {    
                                  
                                  swal({   
                                      title: \"Cancelar!\",   
                                      text: \"Eliminar el Equipo fue cancelado\",  
                                      type:\"error\", 
                                      timer: 2500,   
                                      showConfirmButton: false 
                                  });
                              } 
                          });

                    } 
                }
              }
            });

          \$editor.on('submit', function(e){
            if (this.checkValidity && !this.checkValidity()) return;
            e.preventDefault();

            var estado =\$(\"select#estado_equipo option[value='\"+\$editor.find('#estado_equipo').val()+\"']\").attr('data-name'); 
            var responsable =\$(\"select#responsable_equipo option[value='\"+\$editor.find('#responsable_equipo').val()+\"']\").attr('data-name');

            var row = \$modal.data('row'),
                values = {
                  id: \$editor.find('#id').val(),   
                  medio_basico: \$editor.find('#medio_basico').val(),
                  no_submayor: \$editor.find('#no_submayor').val(),
                  nombre_equipo: \$editor.find('#nombre_equipo').val(),
                  sello: \$editor.find('#sello').val(),
                  estado_equipo: estado,
                  id_estado:  \$editor.find('#estado_equipo').val(),
                  observacion: \$editor.find('#observacion').val(),
                  pcs: \$editor.find('#pcs').val(),
                  id_padre: \$editor.find('#pcs').val(),
                  id_responsable: \$editor.find('#responsable_equipo').val(),
                  responsable: responsable


                };

                if (row instanceof FooTable.Row){
                  row.val(values);
                  \$.post('";
        // line 840
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'editar_equipo', 'equipo': values }).fail(function () { alerta_error();});
                } 
                \$modal.modal('hide');
          });

          //cargar listado equipos
          \$(\"#inventario_equipo_baja\").on('click', function(e){ 

              if(baja == 0){
                baja = 1;
                cargar_equipos(baja);
              }else{
                baja = 0;
                cargar_equipos(baja);
              } 
              
              
            });

        



    var ctx2 = document.getElementById(\"chart2\").getContext(\"2d\");
    var data2 = {
        labels: [
          ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["counts"]) ? $context["counts"] : null), "equipos_estado_ok", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 867
            echo "              \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "tipoEquipo", array()), "html", null, true);
            echo "\",
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 869
        echo "        ],
        datasets: [

            {
                label: \"EQUIPOS APROBADOS\",
                fillColor: \"#06d79c\",
                strokeColor: \"#06d79c\",
                highlightFill: \"#06d79c\",
                highlightStroke: \"#06d79c\",
                data: [
                  ";
        // line 879
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["counts"]) ? $context["counts"] : null), "equipos_aprobados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 880
            echo "                      ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "cantidad", array()), "html", null, true);
            echo ",
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 882
        echo "                ]
            },

            {
                label: \"EQUIPOS OK\",
                fillColor: \"#009efb\",
                strokeColor: \"#009efb\",
                highlightFill: \"#009efb\",
                highlightStroke: \"#009efb\",
                data: [
                  ";
        // line 892
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["counts"]) ? $context["counts"] : null), "equipos_estado_ok", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 893
            echo "                      ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "cantidad", array()), "html", null, true);
            echo ",
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 895
        echo "                ]
            },
            {
                label: \"EQUIPOS ROTOS\",
                fillColor: \"#dde000\",
                strokeColor: \"#dde000\",
                highlightFill: \"#dde000\",
                highlightStroke: \"#dde000\",
                data: [
                  ";
        // line 904
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["counts"]) ? $context["counts"] : null), "equipos_estado_roto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 905
            echo "                      ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "cantidad", array()), "html", null, true);
            echo ",
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 907
        echo "                ]
            },
            {
                label: \"EQUIPOS BAJAS\",
                fillColor: \"#e12331\",
                strokeColor: \"#e12331\",
                highlightFill: \"#e12331\",
                highlightStroke: \"#e12331\",
                data: [
                  ";
        // line 916
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["counts"]) ? $context["counts"] : null), "equipos_baja", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 917
            echo "                      ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "cantidad", array()), "html", null, true);
            echo ",
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 919
        echo "                ]
            }
        ]
    };
    
    var chart2 = new Chart(ctx2).Bar(data2, {
        scaleBeginAtZero : true,
        scaleShowGridLines : true,
        scaleGridLineColor : \"rgba(0,0,0,.005)\",
        scaleGridLineWidth : 0,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        barShowStroke : true,
        barStrokeWidth : 0,
        tooltipCornerRadius: 2,
        barDatasetSpacing : 3,
        responsive: true
    });



      \$('.selectpicker').selectpicker();
      \$(\".select2\").select2();

      /*
      * Mensaje de loader
      */
      function loader(dialogo){
         var loader =  '<div class=\"preloader\">'+
                 '<div class=\"loader\"> '+
                 '<div class=\"loader__figure\"></div> '+
                 '<p class=\"loader__label\"> '+dialogo+'</p>'+ 
                 '</div></div>';
          return loader;
      }

      \$(\"#expediente_tecnico\").on('click', function(){
        
        \$(\".load\").append(loader('Generando Expediente Técnico'));

        \$.post('";
        // line 959
        echo $this->env->getExtension('routing')->getPath("exportar_expediente_tecnico");
        echo "', { 'action': 'exportar_expediente_tecnico'  })
         .done(function(){
            window.location = \"";
        // line 961
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/temp/informatica/MODELO_ANEXO_NO1.docx"), "html", null, true);
        echo "\";
            \$(\".load\").empty();
         })
         .fail(function () {
            alerta_error();
            \$(\".load\").empty();
          });  

      });

      \$('.table_equipo').on('click', '.exp_tecnico_pc', function(){

        var id_pc = \$(this).attr('data-id');
        
        \$(\".load\").append(loader('Generando Expediente Técnico de la PC'));

        \$.post('";
        // line 977
        echo $this->env->getExtension('routing')->getPath("exportar_expediente_tecnico_pc");
        echo "', { 'action': 'exportar_expediente_tecnico' , 'id_pc': id_pc  })
         .done(function(){
            window.location = \"";
        // line 979
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/temp/informatica/EXPEDIENTE_TECNICO_PC.docx"), "html", null, true);
        echo "\";
            \$(\".load\").empty();
         })
         .fail(function () {
            alerta_error();
            \$(\".load\").empty();
          });  

      });

      

      

      
          function refrescar_equipos(baja){
        
                \$.post('";
        // line 996
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'rows', 'baja': baja }).done(function(rows){
                     ft.rows.load(rows);
                }).fail(function () { alerta_error();});        
          }

          function cargar_equipos(baja){
        
              if (bandera_equipo == 0 ){
                \$('#inventario_equipo_baja').html('<i class=\"mdi mdi-thumb-up-outline\"> </i>Equipo'); 
                \$('#inventario_equipo_baja').attr('class','btn btn-sm btn-success m-l-20');          
                bandera_equipo = 1;

                //e.preventDefault();    
                \$.post('";
        // line 1009
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'rows', 'baja': baja }).done(function(rows){
                     ft.rows.load(rows);
                }).fail(function () { alerta_error();});
               
              }else{

                \$('#inventario_equipo_baja').html('<i class=\"mdi mdi-thumb-down-outline\"> </i>Equipos Baja');
                \$('#inventario_equipo_baja').attr('class','btn btn-sm btn-danger m-l-20');          
                bandera_equipo = 0;

                //e.preventDefault();    
                \$.post('";
        // line 1020
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'rows', 'baja': baja }).done(function(rows){
                     ft.rows.load(rows);
                }).fail(function () { alerta_error();});
              }          
        
          }
      
      


      \$(\"#inventario_piezas_equipo\").on('click', function(){

        if (\$(\"#id_pizas_cargada\").val() == 'cargar'){
          inventario_piezas_equipo(baja);
          \$(\"#id_pizas_cargada\").val('ya_cargado'); 
        }
          \$(\"#modal_inventario_pieza_equipo\").modal('show');       

      });



      function inventario_piezas_equipo(baja){
        
          ft = FooTable.init('#table_pieza_equipo', {

            columns: [
                  {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\",\"breakpoints\":\"xs sm\"},
                  {\"name\":\"tipo_equipo\",\"title\":\"TIPO EQUIPO\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"pieza\",\"title\":\"PIEZA\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"marca\",\"title\":\"MARCA\", \"breakpoints\":\"xs sm\"},                                 
                  {\"name\":\"modelo\",\"title\":\"MODELO\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"ctecnica\",\"title\":\"CTECNICA\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"serial\",\"title\":\"SERIAL\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"observacion\",\"title\":\"OBSERVACIÓN\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"responsable\",\"title\":\"RESPONSABLE\", \"breakpoints\":\"all\"},
                  {\"name\":\"local\",\"title\":\"ÁREA / LOCAL\", \"breakpoints\":\"all\"},
                  {\"name\":\"medio_basico\",\"title\":\"MEDIO BÁSICO\", \"breakpoints\":\"all\"},
                  {\"name\":\"no_inventario\",\"title\":\"NO. SUBMAYOR\", \"breakpoints\":\"all\"},
                  {\"name\":\"fecha\",\"title\":\"FECHA\", \"breakpoints\":\"all\"},
                  {\"name\":\"sello\",\"title\":\"SELLO\", \"breakpoints\":\"all\"}

              ],
              rows: \$.post('";
        // line 1063
        echo $this->env->getExtension('routing')->getPath("inventario_piezas_equipo");
        echo "', { 'action': 'rows_inventario_piezas_equipos' }).fail(function () { alerta_error();}),
              filtering: {
                  enabled: true,
                  placeholder: \"Buscar Pieza..\" 
              }

          });         
      }




      //\$(\".select2\").select2();           
   

      \$('.date-picker').bootstrapMaterialDatePicker({ weekStart: 0, time: false, format: 'YYYY-MM-DD' });

      
      \$(\"#tipo_equipo\").on('change', function(){

        if (\$(this).val() == 1){
          \$('#pp').removeAttr('hidden');
        }else{
          \$('#pp').attr('hidden', 'hidden');
        }
      });

      
      \$(\"#exportar_inventario\").on('click', function(){

          \$(\".load\").append(loader('Generando Inventario de Equipos'));

          id_local = \$(\"#ex_local\").val();        
          id_equipo = \$(\"#ex_equipo\").val(); 
          formato = \$('.iradio_minimal-red.checked').find('input').attr('id');
          isExpTec = \$(\"#ocultar_equipo_area_local\").attr('data-id');         

          \$(\"#exportar_inventario\").attr('disabled','disabled');         
          
          \$.post('";
        // line 1102
        echo $this->env->getExtension('routing')->getPath("exportar_inventario");
        echo "', { 'action': 'exportar_inventario', 'baja': baja, 'id_local': id_local, 'id_equipo': id_equipo, 'id_equipo': id_equipo, 'formato': formato, 'isExpTec' : isExpTec })
          .done(function (d) { 

            \$(\"#exportar_inventario\").removeAttr('disabled');
            \$(\"#exportar_equipo\").removeAttr('disabled');
            \$(\"#exportar_local\").removeAttr('disabled');
            \$(\"#exportar_responsable\").removeAttr('disabled');

            if (d == 'doc'){

              window.location = \"";
        // line 1112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/temp/informatica/INVENTARIO_DE_EQUIPOS.docx"), "html", null, true);
        echo "\";
              \$(\".load\").empty();
            }else { 
               demoTwoPageDocument(d);
               \$(\".load\").empty();
            }              
                    
          }).fail(function () {
            \$(\"#exportar_inventario\").removeAttr('disabled'); 
            alerta_error();  

          });     

      });


      function demoTwoPageDocument(datos) {


                var pdf = new jsPDF('l', 'pt'); 
                var totalPagesExp = \"{total_pages_count_string}\";
               

               var pageContent = function (data) {

                    // HEADER
                    pdf.setFontSize(14);
                    pdf.setTextColor(40);
                    
                    pdf.text(\"REPORTE INVENTARIO EQUIPOS - \"+datos['local']+\"\"+ datos['tipo_equipo'], data.settings.margin.left + 5, 25);

                    // FOOTER
                    var str = \"Página \" + data.pageCount;
                    // Total page number plugin only available in jspdf v1.0+
                    if (typeof pdf.putTotalPages === 'function') {
                        str = str + \" - \" + totalPagesExp;
                    }
                    pdf.setFontSize(7);
                    pdf.text(str, data.settings.margin.left, pdf.internal.pageSize.height - 10);
                };
                                        
                var columns = [\"Equipo\", \"UBICACIÓN\", \"ÁREA\",\"RESPONSABLE\", \"ESTADO\", \"MEDIO BÁSICO\", \"NOMBRE EQUIPO\", \"SELLO\", \"OBSERVACIÓN\"];

                pdf.autoTable(columns, datos['equipos'] , {
                    
                    theme: 'striped',                    
                    addPageContent: pageContent, 
                   
                    styles: {
                      cellPadding: 5, // a number, array or object (see margin below)
                      fontSize: 8,
                      font: \"arial\", // helvetica, times, courier
                      lineWidth: 0.1,
                      fontStyle: 'normal', // normal, bold, italic, bolditalic
                      overflow: 'linebreak', // visible, hidden, ellipsize or linebreak                      
                      textColor: 0,
                      halign: 'left', // left, center, right
                      valign: 'middle', // top, middle, bottom
                      
                    },                   
                    margin: 36, // a number, array or object                
                    tableWidth: 'wrap', // 'auto', 'wrap' or a number,  

                    headerStyles: {
                        fillColor: 230,
                        fontSize: 8,
                        fontStyle: 'bold',
                        halign: 'center',
                        font: \"arial\", // helvetica, times, courier

                    },          
                    columnStyles: {
                          0: {columnWidth: 80},
                          1: {columnWidth: 80},
                          2: {columnWidth: 120},
                          3: {columnWidth: 60},
                          4: {columnWidth: 80},
                          5: {columnWidth: 70},
                          6: {columnWidth: 100},
                          7: {columnWidth: 40},  
                          font: \"arial\"                        
                    }                                     
                });
                  pdf.putTotalPages(totalPagesExp); 

                  if(datos['formato'] == 'print'){
                      pdf.autoPrint();
                      pdf.output(\"dataurlnewwindow\");
                  }else if(datos['formato'] == 'pdf'){                                            
                      pdf.save('INVENTARIO_DE_EQUIPOS.pdf');
                    }
                }

     

    \$(\"#add_equipo\").on('click', function(){

      var id_tipo_equipo = \$(\"#tipo_equipo\").val();
      var id_responsable = \$(\"#responsable\").val();


      var piezas = \$(\"#piezas\").val();     

      if (id_tipo_equipo != '' && id_responsable != ''){
        cargando();        

      \$.post('";
        // line 1218
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "', { 'action': 'add_equipo', 'id_tipo_equipo' : id_tipo_equipo , 'id_responsable' : id_responsable , 'piezas': piezas  })
          .done(function (d) {  
             cargar_equipos(baja);        

        \$(\"select[name=tipo_equipo]\").selectpicker(\"refresh\");
        \$(\"select[name=responsable]\").selectpicker(\"refresh\");
        \$(\"select[name=piezas]\").selectpicker(\"refresh\");
        


          cancelar();

          }).fail(function () { 

            alerta_error();  

          });

      }else{
        //mostrar mensaje campos vacios
        alerta_campos_vacios();

      }

    });




    function cargando(){
        //btn add
        \$(\"#add_equipo\").text('Guardando...');
        \$(\"#add_equipo\").attr('disabled', 'disabled');
        //btn cancel
        \$(\"#cancel_equipo\").attr('disabled', 'disabled');
       
        \$('span').parents('div.checker').attr('disabled', 'disabled');
        
    } 

    function cancelar(){
        //btn add
        \$(\"#add_equipo\").text('Adicionar');
        \$(\"#add_equipo\").removeAttr('disabled');
        //btn cancel
        \$(\"#cancel_equipo\").removeAttr('disabled');

        \$(\"#tipo_equipo\").removeAttr('disabled');
        \$(\"#responsable\").removeAttr('disabled');
        \$('span').parents('div.checker').removeAttr('disabled');  
      //  \$('div.checker').find('span').removeAttr('checked');      
    } 

    function cargar_tabledit_inventario(id_equipo, estados){
       \$('#table_inventario_'+id_equipo).Tabledit({
        url: '";
        // line 1273
        echo $this->env->getExtension('routing')->getPath("inventario_pieza_equipo");
        echo "',
        editButton: false,       
        editmethod: 'post',
        deletemethod: 'post',
        buttons: {
            delete: {
                class: 'btn waves-effect waves-light btn-danger',
                html: '<span class=\"fa fa-trash-o\"></span>',
                action: 'delete'
            },
            edit: {
            class: 'btn waves-effect waves-light btn-primary',
            html: '<span class=\"mdi mdi-lead-pencil\"></span> &nbsp EDIT',
            action: 'edit'
            },
            save: {
              class: 'btn waves-effect waves-light btn-success',
              html: 'Save'
            },
            restore: {
              class: 'btn waves-effect waves-light btn-warning',
              html: 'Restore',
              action: 'restore'
            },
            confirm: {
                class: 'btn waves-effect waves-light btn-secondary',
                html: 'OK'
            }
        },

        columns: {
          identifier: [0, 'id'],                    
          editable: [ [2, 'marca'], [3, 'modelo'], [4, 'ctecnica'], [5, 'serial'], [6, 'estado', estados ], [7, 'observacion'] ]
        }, 
      });
    }

      


      //variables globales
      var global_equipos = '';
      var estados = '{\"1\": \"OK\",\"2\": \"Roto\",\"3\": \"Defectuoso\",\"4\": \"Problema Técnicos\"}';
    



    //mostrar modal
    \$(\"#mostrar_add_equipo\").on(\"click\", function(){
        \$(\"#modal_add_equipo\").modal('show');
    });


      \$(\".table_equipo\").on(\"click\", \".modal_inventario\", function(){ 
      

        id_equipo = \$(this).attr('data-id');
        var is_table = \$(\"table#table_inventario_\"+id_equipo); 

        //solo a las pc se le permiten adicionar mas piezas
        if(\$(this).attr('data-name') == 'YES' ){
          \$('#add_parte_pieza').removeAttr('hidden');          
          \$('#add_parte_pieza').attr('disabled', 'disabled');

          if(\$('#add_parte_pieza').attr('data-id') == id_equipo ){
             \$('#add_parte_pieza').removeAttr('disabled'); 
          }

          \$('#add_parte_pieza').attr('data-id', id_equipo );          
        }else{
          \$('#add_parte_pieza').attr('hidden', 'hidden');
        }

        if (is_table.length == 0){

          \$(\"#modal-body-inventario-equipo\").empty(); 
          \$('#h4_title_inventario').text('');
           \$(\".load\").append(loader('Cargando Inventario del Equipo'));
          \$(\"#table_inventario\").attr('hidden','hidden');
          \$(\"#modal_inventario\").modal('show');
            //cargar inventario
            inventario_pieza_equipo(id_equipo)
        } else {
          \$(\"#modal_inventario\").modal('show');
        }

      });

      //cargar las piezas del equipo
      function inventario_pieza_equipo(id_equipo){
        \$.post('";
        // line 1363
        echo $this->env->getExtension('routing')->getPath("inventario_pieza_equipo");
        echo "', { 'action': 'cargar_piezas', 'id_equipo' : id_equipo })
            .done(function (datos) {  
             

              \$('#h4_title_inventario').text('Tipo Equipo: '+datos['pieza'][0].tipoEquipo+' | Nombre Equipo: '+datos['pieza'][0].nombreEquipo+ ' | RESPONSABLE: '+datos['pieza'][0].responsable);

              table = '<table id=\"table_inventario_'+id_equipo+'\" data-toggle=\"table\" data-mobile-responsive=\"true\" class=\"table table-hover table-responsive\"><thead><tr class=\"uppercase\"><th> ID </th><th > PIEZA </th><th> MARCA</th><th> MODELO </th><th> CTECNICA</th><th> SERIAL</th><th> ESTADO </th><th> OBSERVACION</th><th> MOVIMIENTO </th></tr></thead><tbody id=\"tbody_inventario\">';

                       

              for ( var i = 0 ; i < datos['pieza'].length; i++) {
                  table +='<tr>'+
                          '<td>'+ datos['pieza'][i]['id'] +'</td>'+
                          '<td>'+ datos['pieza'][i]['pieza'] +'</td>'+
                          '<td>'+ datos['pieza'][i]['marca'] +'</td>'+
                          '<td>'+ datos['pieza'][i]['modelo'] +'</td>'+
                          '<td>'+ datos['pieza'][i]['ctecnica'] +'</td>'+
                          '<td>'+ datos['pieza'][i]['serial'] +'</td>'+
                          '<td>'+ datos['pieza'][i]['estado'] +'</td>'+
                          '<td>'+ datos['pieza'][i]['observacion'] +'</td>';

                    if (datos['pieza'][i]['isPc'] == true ){
                      table += '<td> <button type=\"button\" class=\"modal_movimiento_pieza btn btn-sm btn-success\" data-id=\"'+datos['pieza'][i]['id']+'\" > Movimiento  </button> </td> </tr>'; 
                    }else{
                      table += '<td> </td> </tr>'; 
                    }
                                       
              }

               table += '</tbody></table>';

              \$(\"#modal-body-inventario-equipo\").empty();
              \$(\"#modal-body-inventario-equipo\").append(table);
              \$('#add_parte_pieza').removeAttr('disabled');
              cargar_tabledit_inventario(id_equipo, datos['estado']); 

               \$(\".load\").empty();

          }).fail(function () {
                //exite error
                \$(\".load\").empty()
                alerta_error();
            });
      }


      \$(\".table_equipo\").on('click', \".modal_movimiento_equipo\", function(){

        id_equipo = \$(this).attr('data-id');
        \$(\".load\").append(loader('Cargando Equipos'));
        \$(\"#origen_equipo\").empty();
        \$(\"#destino_equipo\").empty();
        \$(\"#select_destino_equipos\").empty();
        \$(\"#div_movimiento_pieza\").attr('hidden');
        \$(\"#movimiento_pieza\").attr('hidden', 'hidden');
        \$(\"#movimiento_equipo\").removeAttr('hidden', 'hidden');
        \$(\"#movimiento_equipo\").attr('disabled', 'disabled');        
        \$(\"#modal_movimiento_pieza\").modal('show');
        \$(\"#h4_modal_movimiento_pieza\").text('Movimiento de Equipo');


        \$.post('";
        // line 1424
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'cargar_responsable', 'id_equipo' : id_equipo })
            .done(function (datos) { 

              global_equipos = datos['responsables'];
              
              \$(\"#movimiento_equipo\").removeAttr('disabled');
              \$(\"#origen_equipo\").attr('data-id', datos['equipo']['id'] );
              \$(\"#origen_equipo\").attr('data-name', datos['equipo']['tipoEquipo'] );

              \$(\"#origen_equipo\").append(
                                    'EQUIPO: '+datos['equipo']['tipoEquipo']+'<br>'+                                    
                                    'UBICACION: '+datos['equipo']['local']+'<br>'+
                                    'RESPONSABLE: '+datos['equipo']['responsable']+'<br>'+
                                    'ESTADO: '+datos['equipo']['estado']+'<br>'+
                                    'MEDIO BÁSICO: '+datos['equipo']['medioBasico']+'<br>'+
                                    'No. SUBMAYOR: '+datos['equipo']['noSubmayor']+'<br>'+
                                    'NOMBRE EQUIPO: '+datos['equipo']['nombreEquipo']+'<br>'+
                                    'SELLO: '+datos['equipo']['sello']+'<br>'+
                                    'OBSERVACIÓN: '+datos['equipo']['observacion']+'<br>'
                                  );            

              for (var i = 0 ; i < datos['responsables'].length; i++) {
                  \$(\"#select_destino_equipos\").append(\"<option value='\"+datos['responsables'][i]['id']+\"'>\"+datos['responsables'][i]['local']+\" - \"+datos['responsables'][i]['responsable']+\"</option>\");
              }  


              \$('#select_destino_equipos').selectpicker('destroy');     
              \$('#select_destino_equipos').selectpicker('show');    

              \$(\"#div_movimiento_pieza\").removeAttr('hidden');  


              \$(\".load\").empty();                   
              

            }).fail(function () {
                //exite error
                alerta_error();
                \$(\".load\").empty(); 
            }); 



      });

      //levantar modal de movimiento pieza
      \$(\"#modal-body-inventario-equipo\").on(\"click\", \".modal_movimiento_pieza\", function(){ 
    
        id_pieza = \$(this).attr('data-id'); 
     
        \$(\"#h4_modal_movimiento_pieza\").text('Movimiento de Pieza');
        \$(\".load\").append(loader('Cargando Equipos'));

        \$(\"#origen_equipo\").empty();
        \$(\"#destino_equipo\").empty();
        \$(\"#select_destino_equipos\").empty();
        \$(\"#div_movimiento_pieza\").attr('hidden','hidden');

        \$(\"#movimiento_equipo\").attr('hidden','hidden');
        \$(\"#movimiento_pieza\").removeAttr('hidden');

        \$(\"#movimiento_pieza\").attr('disabled','disabled');        
        \$(\"#modal_movimiento_pieza\").modal('show');

        \$.post('";
        // line 1488
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'cargar_equipo', 'id_pieza' : id_pieza })
            .done(function (datos) { 

              global_equipos = datos['equipos'];

              \$(\"#movimiento_pieza\").removeAttr('disabled');
              \$(\"#origen_equipo\").attr('data-id', id_pieza );
              \$(\"#origen_equipo\").attr('data-name', datos['pieza']);
              \$(\"#origen_equipo\").append(
                                    'EQUIPO: '+datos['equipo']['nombreEquipo']+'<br>'+
                                    'TIPO PIEZA: '+datos['pieza']+'<br>'+
                                    'ÁREA: '+datos['equipo']['area']+'<br>'+
                                    'LOCAL: '+datos['equipo']['local']+'<br>'+
                                    'RESPONSABLE: '+datos['equipo']['responsable']+'<br>'+
                                    'ESTADO: '+datos['equipo']['estado']+'<br>'+
                                    'MEDIO BÁSICO: '+datos['equipo']['medioBasico']+'<br>'+
                                    'No. SUBMAYOR: '+datos['equipo']['noSubmayor']+'<br>'+
                                    'NOMBRE EQUIPO: '+datos['equipo']['nombreEquipo']+'<br>'+
                                    'SELLO: '+datos['equipo']['sello']+'<br>'+
                                    'OBSERVACIÓN: '+datos['equipo']['observacion']+'<br>'
                                  );

              for (var i = 0 ; i < datos['equipos'].length; i++) {
                  \$(\"#select_destino_equipos\").append(\"<option value='\"+datos['equipos'][i]['id']+\"'>\"+datos['equipos'][i]['nombreEquipo']+\" - \"+datos['equipos'][i]['responsable']+\"</option>\");
              }                 

              \$('#select_destino_equipos').selectpicker('destroy');     
              \$('#select_destino_equipos').selectpicker('show');     

              \$(\"#div_movimiento_pieza\").removeAttr('hidden');                             
                                 
              \$(\".load\").empty(); 

            }).fail(function () {
                //exite error
                alerta_error();
                \$(\".load\").empty(); 
            });       

      });

      //cargar datos del select
      \$(\"#select_destino_equipos\").on('change', function(){
          id_equipo = \$(this).val();
          \$(\"#destino_equipo\").empty();         

          for (var i = 0 ; i < global_equipos.length; i++) {
             if (global_equipos[i]['id'] == id_equipo ){

              if(global_equipos[0]['responsable']){

                \$(\"#destino_equipo\").append(                                                                     
                                    'ÁREA: '+global_equipos[i]['area']+'<br>'+
                                    'LOCAL: '+global_equipos[i]['local']+'<br>'+
                                    'RESPONSABLE: '+global_equipos[i]['responsable']+'<br>'+
                                    'CARGO: '+global_equipos[i]['cargo']+'<br>'
                                  );

              }else{

                \$(\"#destino_equipo\").append(
                                    'EQUIPO: '+global_equipos[i]['nombreEquipo']+'<br>'+   
                                    'ÁREA: '+global_equipos[i]['area']+'<br>'+                                
                                    'LOCAL: '+global_equipos[i]['local']+'<br>'+
                                    'RESPONSABLE: '+global_equipos[i]['responsable']+'<br>'+
                                    'ESTADO: '+global_equipos[i]['estado']+'<br>'+
                                    'MEDIO BÁSICO: '+global_equipos[i]['medioBasico']+'<br>'+
                                    'No. SUBMAYOR: '+global_equipos[i]['noSubmayor']+'<br>'+
                                    'NOMBRE EQUIPO: '+global_equipos[i]['nombreEquipo']+'<br>'+
                                    'SELLO: '+global_equipos[i]['sello']+'<br>'+
                                    'OBSERVACIÓN: '+global_equipos[i]['observacion']+'<br>'
                                  );

              }
              
             }
           } 

      });


      //levantar modal para dicionar mas piezas
      \$(\"#add_parte_pieza\").on(\"click\",function(){ 
    
            id_equipo = \$(this).attr('data-id'); 


          if( \$(\"#modal-body-add-pieza\").attr('data-id') != id_equipo ){            
            
            \$(\".load\").append(loader('Cargando Piezas'));
            \$(\"#select_piezas_faltantes\").attr('hidden', 'hidden');              
            
            \$(\"#modal_add_pieza\").modal('show');

            \$.post('";
        // line 1582
        echo $this->env->getExtension('routing')->getPath("add_pieza_equipo");
        echo "', { 'action': 'cargar_piezas', 'id_equipo' : id_equipo })
                .done(function (datos) {               

                  \$('.span_equipo').text(datos['equipo']);


                  for ( var i = 0 ; i < datos['pieza'].length; i++) {                
                        \$(\"#select_piezas_faltantes\").append(\"<option value='\"+datos['pieza'][i]['id']+\"'>\"+datos['pieza'][i]['pieza']+\"</option>\");                        
                  }

                  \$(\"#cargando\").remove();

                  \$(\"#select_piezas_faltantes\").removeAttr('hidden');
                  \$('#select_piezas_faltantes').selectpicker('destroy');
                  \$(\"select_piezas_faltantes\").selectpicker(\"refresh\"); 

                  \$('#select_piezas_faltantes').selectpicker('show'); 


                  \$(\"#modal-body-add-pieza\").attr('data-id', id_equipo);
                  \$(\"#add_mas_parte_pieza\").attr('data-id', id_equipo);

                  \$(\".load\").empty();

            }).fail(function () {
                //exite error
                \$(\".load\").empty();
                alerta_error();
            });

          }else{

            \$('#select_piezas_faltantes').selectpicker('destroy');     
            \$('#select_piezas_faltantes').selectpicker('show');
            \$(\"select_piezas_faltantes\").selectpicker(\"refresh\"); 
            \$(\"#modal_add_pieza\").modal('show');

          }
      });

      //adicionar mas piezas
      \$(\"#add_mas_parte_pieza\").on(\"click\",function(){ 

        var id_equipo = \$(this).attr('data-id');
        var piezas = \$(\"#select_piezas_faltantes\").val();
        if (piezas!=  null ){

            \$.post('";
        // line 1629
        echo $this->env->getExtension('routing')->getPath("add_pieza_equipo");
        echo "', { 'action': 'add_pieza', 'id_equipo' : id_equipo , 'piezas': piezas })
                .done(function (datos) {

                \$(\"#modal-body-inventario-equipo\").empty(); 
                \$(\".load\").append(loader('Cargando Piezas'));

                //cargar inventario del equipo  
                inventario_pieza_equipo(id_equipo);  

                \$(\".load\").empty();

            }).fail(function () {
                //exite error
                \$(\".load\").empty();
                alerta_error();
            });
        }else{

          \$.alert({
              title: 'Mensaje',
              content: 'Selecion al menos una pieza para adicionar!',
              type: 'blue',
              animation: 'scale',
              draggable: true,
          });
           
        }

      });

      //movimiento de la pieza
      \$(\"#movimiento_pieza\").on('click', function(){

        id_pieza = \$('#origen_equipo').attr('data-id');
        pieza = \$('#origen_equipo').attr('data-name');
        id_equipo_destino = \$('#select_destino_equipos').val();
        id_tipo_movimiento = \$('#tipo_movimiento').val();
        
        fecha = \$(\"#movimiento_fecha\").val();

        if (id_pieza!='' && id_equipo_destino != '' && fecha != ''){

            //Parameter
                  swal({   
                            title: \"Movimiento Pieza?\",   
                            text: 'Seguro desea hacer el movimiento de la/el '+pieza,   
                            type: \"warning\",   
                            showCancelButton: true,   
                            confirmButtonColor: \"#009efb\",   
                            confirmButtonText: \"Hacer Mov. Pieza!\",   
                            cancelButtonText: \"No, Cancelar!\",   
                            closeOnConfirm: false,   
                            closeOnCancel: false 
                        }, function(isConfirm){   
                            if (isConfirm) {    

                            \$(\"#modal_movimiento_pieza\").modal('hide');                   

                             \$.post('";
        // line 1687
        echo $this->env->getExtension('routing')->getPath("movimiento_pieza");
        echo "', { 'action': 'movimiento_pieza', 'id_pieza': id_pieza , 'id_equipo_destino' : id_equipo_destino, 'fecha': fecha })
                                        .done(function (d) {  

                                          refrescar_equipos(baja);

                                          if (d == true){
                                                       swal({   
                                                title: \"Hacer Mov. Pieza!\",   
                                                text: \"Se realizo el Movimiento de la Pieza\",  
                                                type:\"success\", 
                                                timer: 2500,   
                                                showConfirmButton: false 
                                            });
                                          }
                                          \$(\"#modal-body-inventario-equipo\").html('');
                                          \$(\".load\").append(loader('Cargando Piezas'));

                                          inventario_pieza_equipo(id_equipo_destino);

                                          \$(\".load\").empty();

                                        }).fail(function () {
                                          \$(\".load\").empty();
                                          alerta_error();
                                      });                                
                                
                            } else {    
                                
                                swal({   
                                    title: \"Cancelar!\",   
                                    text: \"Movimiento Cancelado!\",  
                                    type:\"error\", 
                                    timer: 2500,   
                                    showConfirmButton: false 
                                });
                            } 
                        }); 

                }else{
                    alerta_campos_vacios();
                }
              });

     


      //movimiento del equipo
      \$(\"#movimiento_equipo\").on('click', function(){

        id_equipo = \$('#origen_equipo').attr('data-id');
        equipo = \$('#origen_equipo').attr('data-name');
        tipo_movimiento_id = \$(\"#tipo_movimiento\").val();
        id_responsable = \$('#select_destino_equipos').val();
        
        fecha = \$(\"#movimiento_fecha\").val();

        if (id_equipo!='' && id_responsable != '' && fecha != '' && tipo_movimiento_id != ''){

             swal({   
                            title: \"Movimiento Equipo!\",   
                            text: 'Seguro desea hacer el movimiento de la/el '+equipo, 
                            type: \"warning\",   
                            showCancelButton: true,   
                            confirmButtonColor: \"#009efb\",   
                            confirmButtonText: \"Hacer Mov. Equipo!\",   
                            cancelButtonText: \"No, Cancelar!\",   
                            closeOnConfirm: false,   
                            closeOnCancel: false 
                        }, function(isConfirm){   
                            if (isConfirm) {  


                            \$(\"#modal_movimiento_pieza\").modal('hide');                   

                             \$.post('";
        // line 1761
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'movimiento_equipo', 'id_equipo': id_equipo , 'id_responsable' : id_responsable, 'fecha': fecha, 'tipo_movimiento_id': tipo_movimiento_id })
                                        .done(function (d) {  
                                          if (d == true){
                                            swal({   
                                                title: \"Hacer Mov. Equipo!\",   
                                                text: \"Se realizo el Movimiento del Equipo\",  
                                                type:\"success\", 
                                                timer: 2500,   
                                                showConfirmButton: false 
                                            });
                                          }     

                                          cargar_equipos(baja);                                       
                                        }).fail(function () {
                                          alerta_error();
                                      });
                                
                            }else{
                                swal({   
                                      title: \"Cancelar!\",   
                                      text: \"Movimiento Cancelado!\",  
                                      type:\"error\", 
                                      timer: 2500,   
                                      showConfirmButton: false 
                                  });
                          }
                        }); 

                }else{
                    alerta_campos_vacios();
                }
              });



      function alerta_error(){

        //Auto Close Timer
        
             swal({   
                title: \"Error!\",   
                text: \"Algo salió mal, por favor vuelva a intentarlo\", 
                type: \"warning\",   
                timer: 3000,   
                showConfirmButton: false 
            });
       
      }

       //mensaje para campos vacios
      function alerta_campos_vacios(){       

        swal({   
                title: \"Mensaje!\",   
                text: \"Existen Campos Vacios!\", 
                type: \"warning\",   
                timer: 3000,   
                showConfirmButton: false 
            });
      }



     
    


   });//end document


     
    </script>

    <!-- END PAGE LEVEL PLUGINS -->

";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:Gestion:Equipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2193 => 1761,  2116 => 1687,  2055 => 1629,  2005 => 1582,  1908 => 1488,  1841 => 1424,  1777 => 1363,  1684 => 1273,  1626 => 1218,  1517 => 1112,  1504 => 1102,  1462 => 1063,  1416 => 1020,  1402 => 1009,  1386 => 996,  1366 => 979,  1361 => 977,  1342 => 961,  1337 => 959,  1295 => 919,  1286 => 917,  1282 => 916,  1271 => 907,  1262 => 905,  1258 => 904,  1247 => 895,  1238 => 893,  1234 => 892,  1222 => 882,  1213 => 880,  1209 => 879,  1197 => 869,  1188 => 867,  1184 => 866,  1155 => 840,  1092 => 780,  1044 => 735,  977 => 671,  939 => 636,  935 => 635,  929 => 632,  925 => 631,  921 => 630,  914 => 626,  907 => 622,  901 => 619,  897 => 618,  889 => 613,  885 => 612,  881 => 611,  874 => 607,  866 => 602,  858 => 597,  854 => 596,  850 => 595,  844 => 592,  838 => 589,  834 => 588,  827 => 583,  824 => 582,  809 => 569,  807 => 568,  740 => 503,  681 => 436,  671 => 435,  665 => 434,  648 => 419,  640 => 417,  629 => 416,  625 => 415,  620 => 414,  616 => 413,  604 => 403,  591 => 402,  587 => 401,  476 => 292,  465 => 290,  461 => 289,  400 => 230,  383 => 228,  379 => 227,  371 => 221,  358 => 219,  354 => 218,  315 => 181,  302 => 179,  298 => 178,  289 => 171,  276 => 169,  272 => 168,  263 => 161,  248 => 159,  244 => 158,  148 => 65,  135 => 54,  132 => 53,  130 => 52,  123 => 48,  120 => 47,  117 => 46,  103 => 34,  98 => 32,  94 => 31,  86 => 26,  79 => 22,  75 => 21,  68 => 17,  63 => 15,  59 => 14,  55 => 13,  48 => 9,  44 => 8,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::base_pro.html.twig' %}*/
/* */
/* {% block title %} Equipos {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- BEGIN PAGE LEVEL STYLES -->*/
/* */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/floating-label.css')}}"/>*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>*/
/* */
/*   <!-- select css -->  */
/*  */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/select2/dist/css/select2.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.css')}}"/>*/
/* */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css')}}"/>*/
/* */
/* */
/*   <!-- chartist CSS -->*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/chartist-js/dist/chartist.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"/>*/
/* */
/* */
/*     <!-- page css -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/tab-page.css')}}"/>*/
/*    */
/*        */
/* */
/*     <!--alerts CSS -->*/
/*     <link href="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css')}}"/>*/
/* */
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/form-icheck.css')}}"/>*/
/*    */
/* */
/* */
/* */
/* */
/*   */
/*    */
/*     <!-- END PAGE LEVEL STYLES -->*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*   {{ include('InformaticaBundle:include:preloder.html.twig', {'loader_label':'Equipos' } ) }}*/
/* */
/*   <div class="load"></div>*/
/* */
/*   {% include 'InformaticaBundle:include:header.html.twig' %}*/
/*   {% include 'InformaticaBundle:include:aside.html.twig' %}*/
/* */
/* */
/*   <div class="page-wrapper" style="min-height: 502px;">*/
/*     <!-- ============================================================== -->*/
/*     <!-- Container fluid  -->*/
/*     <!-- ============================================================== -->*/
/*     <div class="container-fluid">*/
/* */
/*         <!-- ============================================================== -->*/
/*         <!-- Bread crumb and right sidebar toggle -->*/
/*         <!-- ============================================================== -->*/
/*         {{ include('InformaticaBundle:include:page_titles.html.twig', {'titulo_pagina':'Equipos', 'session': 'Informática' } ) }}                          */
/*                         */
/*         <div class="row">*/
/*           <div class="modal fade" id="modal_inventario" tabindex="-1" role="dialog" aria-hidden="true" data-toggle="modal" >*/
/*             <div class="modal-dialog modal-xlg">*/
/*               <div class="modal-content">*/
/*                 <div class="modal-header">                                    */
/*                   <h4 class="modal-title" id="h4_title_inventario"> </h4>*/
/*                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                 </div>*/
/*                 <div class="modal-body" id="modal-body-inventario-equipo">    */
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                   <button type="button" class="btn btn-sm btn-success" id="add_parte_pieza"> Adicionar Parte y Piezas </button>*/
/*                   <button type="button" class="btn default" data-dismiss="modal">Cancelar</button>*/
/*                   */
/*                 </div>*/
/*               </div>*/
/*               <!-- /.modal-content -->*/
/*             </div>*/
/*                   <!-- /.modal-dialog -->*/
/*           </div> */
/* */
/* */
/*           <div class="modal fade" id="modal_inventario_pieza_equipo" tabindex="-1" role="dialog" aria-hidden="true" data-toggle="modal" >*/
/*             <div class="modal-dialog modal-xlg">*/
/*               <div class="modal-content">*/
/*                 <div class="modal-header">                                    */
/*                   <h4 class="modal-title" id="h4_title_inventario_pieza_equipo"> </h4>*/
/*                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                 </div>*/
/*                 <div class="modal-body" >   */
/* */
/*                   <input type="text" id="id_pizas_cargada" hidden="hidden" value="cargar" />*/
/* */
/*                   <table id="table_pieza_equipo" class="table table-hover table_pieza_equipo" data-paging="true" data-sorting="true" > </table> */
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                  */
/*                   <button type="button" class="btn default" data-dismiss="modal">Cancelar</button>*/
/*                   */
/*                 </div>*/
/*               </div>*/
/*               <!-- /.modal-content -->*/
/*             </div>*/
/*                   <!-- /.modal-dialog -->*/
/*           </div> */
/* */
/*           */
/* */
/*           <!-- MODAL EDITOR equipos  -->*/
/*           <div class="modal fade" id="editor-inventario" tabindex="-1" role="dialog" aria-labelledby="editor-inventario-title">*/
/*   */
/*           <div class="modal-dialog modal-lg" role="document">*/
/*             <form class="modal-content form-horizontal" id="form-inventario">*/
/*               <div class="modal-header">*/
/*                  <h4 class="modal-title" id="editor-title">Modificar Equipo</h4>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*               </div>*/
/*               <div class="modal-body">*/
/*                 <input type="number" id="id" name="id" hidden="hidden" />*/
/* */
/*               <div class="row m-t-20">*/
/*                 <div class="form-material col-md-6 col-xs-12 ">  */
/*                 <label for="p_direccionp">MEDIO BÁSICO:</label> */
/*                   <input type="text" class="form-control" id="medio_basico" name="medio_basico">                  */
/*                   */
/*                   <span class="help-block"><small>MEDIO BÁSICO</small></span>*/
/*                 </div>*/
/*                 <div class="form-material col-md-6 col-xs-12">     */
/*                 <label for="p_direccionp">NO. SUBMAYOR:</label>            */
/*                   <input type="text" class="form-control" id="no_submayor" name="no_submayor">                   */
/*                   <span class="help-block"><small>NO. SUBMAYOR</small></span>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="row  m-t-20">*/
/* */
/*                 <div class="form-material col-md-6 col-xs-12">*/
/*                   <label for="p_direccionp">NOMBRE DE EQUIPO:</label>*/
/*                   <input type="text" class="form-control" id="nombre_equipo" name="nombre_equipo">*/
/*                 </div>*/
/*                 <div class="form-material col-md-6 col-xs-12">       */
/*                   <label for="p_direccionp">SELLO:</label>                          */
/*                   <input type="text" class="form-control" id="sello" name="sello">                  */
/*                   */
/*                 </div>*/
/* */
/*                 <div class="form-group col-md-6 col-xs-12">*/
/*                   <label for="responsable_equipo">RESPONSABLE DEL EQUIPO:</label>*/
/*                   <select  class="selectpicker" id="responsable_equipo" name="responsable_equipo" data-live-search="true">*/
/*                       {% for responsable in responsables %}*/
/*                           <option data-name="{{ responsable.responsable }}" value="{{ responsable.id }}"> {{ responsable.local.local}} / {{ responsable.responsable }}</option>*/
/*                       {% endfor %}*/
/*                   </select>        */
/*                 </div>*/
/* */
/* */
/*                 <div class="form-group col-md-6 col-xs-12">*/
/*                   <label for="estado_equipo">ESTADO EQUIPO:</label>*/
/*                   <select  class="selectpicker" id="estado_equipo" name="estado_equipo">*/
/*                       {% for e in estado %}*/
/*                           <option data-name="{{ e.estado }}" value="{{ e.id }}"> {{ e.estado }}</option>                           */
/*                       {% endfor %}*/
/*                   </select>        */
/*                 </div>*/
/* */
/*                 <div class="form-group col-md-6 col-xs-12" id="isMonitor">*/
/*                   <label for="pcs">SELECIONE LA PC DE ESTE EQUIPO:</label>                  */
/*                     <select  class="form-control selectpicker" id="pcs" name="pcs" data-live-search="true">*/
/*                       <option value="-1"> Niguno</option>*/
/*                         {% for pc in pcs %}*/
/*                             <option value="{{ pc.id }}">{{ pc.tipoEquipo.tipoEquipo }} - MB: {{ pc.medioBasico }}</option>*/
/*                         {% endfor %}*/
/*                     </select>          */
/*                 </div>*/
/*               </div>*/
/*               */
/* */
/*                 <div class="form-material">*/
/*                   <label for="p_direccionp">OBSERVACIÓN:</label>*/
/*                   <input type="text" class="form-control" id="observacion" name="observacion">                */
/*                   */
/*                 </div>               */
/* */
/* */
/*               </div>*/
/*               <div class="modal-footer">*/
/*                 <button type="submit" class="btn btn-primary">Guardar Cambios</button>*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*               </div>        */
/*             </form>          */
/*           </div>  */
/*         </div>*/
/*         <!-- end MODAL EDITOR equipos -->*/
/*      */
/* */
/*           <div class="modal fade" id="modal_exportar_inventario" tabindex="-1" >*/
/*               <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                   <div class="modal-header">                                  */
/*                       <h4 class="modal-title"> Exportar Listado Equipos </h4> */
/*                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                   </div>*/
/*                   <div class="modal-body">    */
/* */
/*                     <div class="row ocultar_equipo_area_local" data-id="false">*/
/*                         */
/*                         <div class="col-md-6 ">*/
/*                           <select class="selectpicker" data-live-search="true" name="ex_equipo" id="ex_equipo">*/
/*                           <option value="">TODOS LOS EQUIPOS </option>                    */
/*                             {% for tipo in tipo_equipos %}*/
/*                               <option data-tokens="{{ tipo.tipoEquipo }}" value="{{tipo.id}}" > {{ tipo.tipoEquipo }}</option>*/
/*                             {% endfor %}*/
/*                           </select>       */
/*                         </div> */
/* */
/*                         <div class="col-md-6 ">*/
/*                           <select class="selectpicker" data-live-search="true" name="ex_local" id="ex_local">*/
/*                           <option value=""> TODAS LAS ÁREA / LOCAL  </option>                    */
/*                             {% for local in locales %}*/
/*                               <option data-tokens="{{ local.area.area }} / {{ local.local }}" value="{{local.id}}"> {{ local.area.area }} / {{ local.local }}</option>*/
/*                             {% endfor %}*/
/*                           </select>       */
/*                         </div> */
/*                     </div> */
/*                         */
/*                     <div class="row"> */
/*                         <div class="col-md-12 col-lg-12"> */
/*                         <ul class="icheck-list radio_formato_list">*/
/*                             <span class="m-l-10">*/
/*                                 <input tabindex="7" type="radio" class="check radio_formato" id="doc" data-id="doc" name="minimal-radio">*/
/*                                 <label for="doc"><i class="fa fa-file-word-o"> </i> Word</label>*/
/*                             </span>*/
/*                             <span class="m-l-10">*/
/*                                 <input tabindex="8" type="radio" class="check radio_formato" id="pdf" data-id="pdf" name="minimal-radio" >*/
/*                                 <label for="pdf"><i class="fa fa-file-pdf-o"> </i> PDF</label>*/
/*                             </span>*/
/*                             <span class="m-l-10">*/
/*                                 <input tabindex="8" type="radio" class="check radio_formato" id="xlsx" data-id="xlsx" name="minimal-radio" >*/
/*                                 <label for="xlsx"><i class="fa fa-file-excel-o"> </i> Excel</label>*/
/*                             </span>*/
/*                             <span class="m-l-10">*/
/*                                 <input tabindex="8" type="radio" class="check radio_formato" id="print" name="minimal-radio" checked>*/
/*                                 <label for="print"><i class="fa fa-print"> </i> Imprimir</label>*/
/*                             </span>*/
/*                         </ul> */
/*                         </div> */
/*                     </div>*/
/*                                     */
/*                   </div>*/
/* */
/*                   <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-sm btn-success" id="exportar_inventario"> Exportar Listado Equipos </button>*/
/* */
/*                     <button type="button" class="btn btn-sm default" data-dismiss="modal">Cancelar</button>*/
/*                     */
/*                   </div>*/
/*                 </div>*/
/*                 <!-- /.modal-content -->*/
/*               </div>*/
/*                     <!-- /.modal-dialog -->*/
/*           </div>*/
/* */
/* */
/*          <div id="modal_movimiento_pieza" class="modal fade" tabindex="-1">*/
/*             <div class="modal-dialog modal-lg">*/
/*               <div class="modal-content">*/
/*                 <div class="modal-header">                  */
/*                   <h4 class="modal-title" id="h4_modal_movimiento_pieza" > Movimiento de Pieza</h4>*/
/*                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                 </div>*/
/*                 <div class="modal-body" id="modal-body-movimiento-pieza">*/
/* */
/* */
/*                 <div class="row floating-labels" id="div_movimiento_pieza ">*/
/* */
/*                     <div class="form-material col-md-12 col-xs-12 m-b-10">*/
/*                        */
/*                         <select class="form-control" id="tipo_movimiento" name="tipo_movimiento">*/
/*                           <option value=""> Selecione el Tipo Movimiento </option>}*/
/*                           option*/
/*                           {% for tm in tipo_movimientos %}*/
/*                           <option value="{{ tm.id }}"> {{ tm.tipo}}</option>*/
/*                           {% endfor %}*/
/*                          */
/*                         </select>*/
/* */
/*                     </div>*/
/*                     <div class="form-material col-md-6 col-xs-12">*/
/* */
/*                       <input type="text" placeholder="Selecione la fecha" class="form-control date-picker" id="movimiento_fecha" name="movimiento_fecha"/>                      */
/* */
/*                       <div class="form-material portlet green-meadow box">*/
/*                             <div class="portlet-title">*/
/*                               */
/*                               <div class="d-flex">*/
/*                                 <div>*/
/*                                   <h3 class="card-title m-b-5"><span class="lstick"></span>EQUIPO ORIGEN</h3>                                       */
/*                                 </div>*/
/*                             </div>                            */
/*                             </div>*/
/*                             <div class="portlet-body">*/
/*                               <div class="row static-info">*/
/*                                */
/*                                 <div class="col-md-12 value" id="origen_equipo" data-id="">*/
/*                                    ...*/
/*                                 </div>*/
/*                               </div>*/
/*                             </div>*/
/*                       </div>*/
/*                       */
/*                     </div>*/
/* */
/*                      <div class="col-md-6 col-xs-12">*/
/* */
/*                        <select class="selectpicker" data-live-search="true" data-placeholder="Selecione Equipo..." name="select_destino_equipos" id="select_destino_equipos"> </select> <br>*/
/* */
/*                       <div class="portlet green-meadow box">                            */
/*                             <div class="d-flex">*/
/*                                 <div>*/
/*                                   <h3 class="card-title m-b-5"><span class="lstick"></span>EQUIPO DESTINO </h3>                                       */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="portlet-body">*/
/*                               <div class="row static-info">*/
/*                                 <div class="col-md-12 value" id="destino_equipo">*/
/*                                    ...*/
/*                                 </div>*/
/*                               </div>*/
/*                             </div>*/
/*                       </div>*/
/*                       */
/*                     </div>*/
/* */
/*                 </div>*/
/*               </div>*/
/*                 <div class="modal-footer">*/
/*                   <button type="button" class="btn btn-sm btn-primary" id="movimiento_pieza">Hacer Movimiento Pieza</button>*/
/*                   <button type="button" class="btn btn-sm btn-primary" id="movimiento_equipo">Hacer Movimineto Equipo</button>*/
/*                   <button type="button" class="btn btn-sm default" data-dismiss="modal">Cancelar</button>*/
/*                   */
/*                 </div>*/
/*               </div>*/
/*               <!-- /.modal-content -->*/
/*             </div>*/
/*                   <!-- /.modal-dialog -->*/
/*          </div>*/
/* */
/*           <!-- Modal Adicionar mas partes y piezas -->*/
/*           <div id="modal_add_pieza" class="modal fade" tabindex="-1">*/
/*               <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                   <div class="modal-header">*/
/*                     */
/*                     <h4 class="modal-title" > Selecionae la/s Pieza/s | COMPUTADORA: <span class="span_equipo"> </span> </h4>*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                   </div>*/
/*                   <div class="modal-body" id="modal-body-add-pieza" data-id="">  */
/* */
/*                  */
/*                   <select multiple="multiple" class="selectpicker" id="select_piezas_faltantes" name="select_piezas_faltantes[]">  </select>*/
/*                         */
/* */
/*                   </div>*/
/*                   <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-primary" data-dismiss="modal" id="add_mas_parte_pieza">Adicionar pieza</button>*/
/*                     <button type="button" class="btn default" data-dismiss="modal">Cancelar</button>*/
/*                     */
/*                   </div>*/
/*                 </div>*/
/*                 <!-- /.modal-content -->*/
/*               </div>*/
/*                     <!-- /.modal-dialog -->*/
/*           </div>   */
/* */
/* */
/*           <!-- Modal Adicionar mas partes y piezas -->*/
/*           <div id="modal_add_equipo" class="modal fade" tabindex="-1" aria-labelledby="modal_add_equipo">*/
/*               <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                   <div class="modal-header">                    */
/*                     <h4 class="modal-title" > Adicionar Equipos </h4>*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                   </div>*/
/*                   <div class="modal-body">  */
/*                     <div class="row">*/
/*                       <div class="col-lg-6 col-md-6 col-sm-12">*/
/*                         <h5>Tipo de Equipo</h5>*/
/* */
/*                         <select class="selectpicker" data-live-search="true" id="tipo_equipo" name="tipo_equipo">*/
/*                           <option value="">Selecione el Equipo</option>*/
/*                           */
/*                           {% for tipo in tipo_equipos %}*/
/*                             <option data-id="{{tipo.id}}" value="{{tipo.id}}"> {{ tipo.tipoEquipo }}</option>*/
/*                           {% endfor %}                */
/*                         </select>*/
/* */
/*                       </div>*/
/* */
/*                       <div class="col-lg-6 col-md-6 col-sm-12">*/
/*                          <h5>Ubicación</h5>  */
/* */
/*                       <select class="selectpicker" data-live-search="true" name="responsable" id="responsable">*/
/*                           <option value="">Selecione el Responsable</option>*/
/*                             {% for u in ubicacion %}*/
/*                               <optgroup label=" {{ u.local }} ">*/
/*                               {% for r in u.responsables %}*/
/*                                 <option value="{{r.id}}"> {{ r.responsable }}</option>*/
/*                               {% endfor %}  */
/*                               </optgroup>                    */
/*                             {% endfor %}                   */
/*                       </select>                                           */
/*                       </div>*/
/*                     </div>*/
/* */
/*                       <div class="card-body">                        */
/* */
/*                           <div class="col-lg-12 col-md-12 col-sm-12" id="pp">*/
/* */
/*                              <div class="d-flex">                  */
/*                             <h4 class="card-title m-b-5"><span class="lstick"></span>Seleccione las Partes y Piezas </h4>                                 */
/*                           </div>*/
/* */
/*                             <div class="col-md-12 col-xs-12">                   */
/*                                 <select class="selectpicker" data-live-search="true" name="piezas" id="piezas" multiple>*/
/*                                   {% for pieza in piezas %} */
/*                                     <option value="{{pieza.id}}">{{ pieza.pieza }}</option>     */
/*                                     {% endfor %}                 */
/*                                 </select>*/
/*                             </div>*/
/*                              */
/*                           </div>*/
/*                     </div>*/
/* */
/*                   </div>*/
/*                   <div class="modal-footer">*/
/*                      <button id="add_equipo" class="btn btn-sm btn-info">Adicionar</button>       */
/*                      <button id="cancel_equipo" type="button" class="btn btn-sm btn-danger waves-effect text-left" data-dismiss="modal">Cancelar</button>     */
/*                       */
/*                     */
/*                   </div>*/
/*                 </div>*/
/*                 <!-- /.modal-content -->*/
/*               </div>*/
/*                     <!-- /.modal-dialog -->*/
/*           </div> */
/* */
/* */
/*       </div>*/
/* */
/*       */
/*       <div class="row">*/
/*         <div class="col-md-12 col-sm-12">*/
/* */
/*           <div class="card">           */
/*             <div class="card-body">*/
/*               <div class="d-flex">                  */
/*                 <h4 class="card-title"><span class="lstick"></span>LISTADO Equipos </h4>*/
/*               </div>  */
/*                 <table id="table_equipo" class="table table-hover table_equipo" data-paging="true" data-sorting="true" >     */
/*                     */
/*                       <div class="d-flex">*/
/*                           <div class="mr-auto">*/
/*                               <div class="form-group">*/
/* */
/*                                   */
/*                                   <button id="mostrar_add_equipo" class="btn btn-primary btn-sm"><i class="mdi mdi-plus" aria-hidden="true"></i>Adicionar Equipo</button>*/
/*                                  */
/*                                   <div class="btn-group" data-toggle="buttons">*/
/*                                     <button href="#modal_exportar_inventario" data-toggle="modal" class="btn btn-sm btn-warning m-l-40">*/
/*                                      <i class="mdi mdi-file-pdf"> </i> Exportar Inventario*/
/*                                     </button> */
/* */
/*                                     <button type="button" class="btn btn-sm btn-warning" id="expediente_tecnico"> <i class="mdi mdi-file-document-box"></i> Expediente Técnico </button>*/
/*                                   </div>*/
/*     */
/* */
/*                                   <button id="inventario_equipo_baja" data-toggle="modal" class="btn btn-sm btn-danger m-l-20"><i class="mdi mdi-thumb-down-outline"> </i>Equipos Baja </button> */
/* */
/*                                   <button id="inventario_piezas_equipo" data-toggle="modal" class="btn btn-sm btn-success m-l-20"><i class="mdi mdi-animation"> </i>Inventario Piezas </button> */
/* */
/*                             */
/* */
/* */
/*                                 {#  <div class="col-lg-3 col-md-3 col-sm-12">*/
/*                                   */
/*                                     <select class="selectpicker" data-live-search="true" id="tipo_equipo" name="tipo_equipo">*/
/*                                       <option value="">Selecione el Local</option>*/
/*                                       */
/*                                       {% for local in local_equipo %}*/
/*                                         <option data-id="{{local.id}}" value="{{local.id}}"> ({{ local.codigo }}) {{ local.local }}</option>*/
/*                                       {% endfor %}                */
/*                                     </select>*/
/*                                   </div> #}*/
/* */
/* */
/*                                 </div>*/
/*                                   */
/* */
/*                               </div>*/
/*                           </div>*/
/*                           */
/*                       </div>                                      */
/*                     */
/*                   </table>  */
/* */
/*                 </br>*/
/* */
/*                            */
/*             </div>*/
/*           </div>*/
/* */
/*             */
/*         </div>*/
/*       </div>*/
/* */
/* */
/*       <div class="row">                   */
/* */
/*                     <div class="col-lg-12 col-xs-12">*/
/*                         <div class="card">*/
/*                             <div class="card-body">*/
/*                                 <h4 class="card-title">COMPARACIÓN EQUIPO EN USO Y EQUIPOS DE ROTOS</h4>*/
/* */
/*                                 <ul class="list-inline text-right">*/
/* */
/*                                     <li>*/
/*                                         <h5><i class="fa fa-circle m-r-5 text-success"></i>Equipos Aprobados</h5>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <h5><i class="fa fa-circle m-r-5 text-info"></i>Equipos OK</h5>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <h5><i class="fa fa-circle m-r-5 text-warning"></i>Equipos Rotos</h5>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <h5><i class="fa fa-circle m-r-5 text-danger"></i>Equipos Baja (Dictaminado)</h5>*/
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                                 <div>*/
/*                                     <canvas id="chart2" height="150"></canvas>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                    */
/*                 </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     <!-- ============================================================== -->*/
/*     <!-- End Container fluid  -->*/
/*     <!-- ============================================================== -->*/
/*     <!-- ============================================================== -->*/
/*     <!-- footer -->*/
/*     <!-- ============================================================== -->*/
/*     {% include 'InformaticaBundle:include:footer.html.twig' %}*/
/*     <!-- ============================================================== -->*/
/*     <!-- End footer -->*/
/*     <!-- ============================================================== -->*/
/*   </div>*/
/* */
/*   */
/*   */
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <!-- BEGIN PAGE LEVEL PLUGINS-->*/
/*    */
/* */
/*     <!-- Plugin JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/moment/moment.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>*/
/* */
/*     <!--Custom JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/horizontal/js/custom.min.js')}}"></script>*/
/* */
/*     <!-- Select -->   */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>*/
/*    */
/*     */
/* */
/*     <!-- Footable -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js')}}"></script>*/
/* */
/* */
/*     */
/*     <!-- Date Picker Plugin JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>*/
/* */
/* */
/*     <!--morris JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/Chart.js/Chart.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>*/
/* */
/*  */
/* */
/*     <!--c3 JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/d3/d3.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/c3-master/c3.min.js')}}"></script>*/
/* */
/*     <!-- Chart JS -->*/
/*     <!-- <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/horizontal/js/dashboard3.js')}}"></script> -->*/
/*   */
/*      */
/*     <!-- Table Edit -->    */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-tabledit/jquery.tabledit2.js')}}"></script>*/
/* */
/*     */
/*     <!-- JSPDF -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/jsPDF-1.3.2/dist/jspdf.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/jsPDF-1.3.2/libs/html2pdf.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/jsPDF-1.3.2/libs/jspdf-autotable.js')}}"></script>*/
/* */
/*     <!-- Sweet-Alert  -->*/
/*     <script src="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js')}}"></script>    */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js')}}"></script>*/
/* */
/* */
/*     <script type="text/javascript" charset="utf-8" async defer>*/
/* */
/*       */
/* */
/*     $(window).on('load', function() {  */
/* */
/* */
/*       var bandera_equipo = 0;*/
/*       var baja = 0;*/
/* */
/*         var $modal = $('#editor-inventario'),*/
/*           $editor = $('#form-inventario'),*/
/*           $editorTitle = $('#editor-title'),*/
/*           ft = FooTable.init('#table_equipo', {*/
/*               columns: [*/
/*                   {"name":"id","title":"ID", "type":"number","breakpoints":"xs sm"},*/
/*                   {"name":"tipo_equipo","title":"EQUIPO", "breakpoints":"xs sm" },*/
/*                   {"name":"centro_costo","title":"C. COSTO", "breakpoints":"all"},*/
/*                   {"name":"departamento","title":"DEPARTAMENTO", "breakpoints":"all"},*/
/*                   {"name":"responsable","title":"RESPONSABLE", "breakpoints":"all"},*/
/*                   {"name":"cargo","title":"CARGO", "breakpoints":"all"},*/
/*                   {"name":"estado_equipo","title":"ESTADO EQUIPO", "type":"select", "breakpoints":"all"},*/
/*                   {"name":"medio_basico","title":"MEDIO BÁSICO", "type": "number", "breakpoints":"xs sm" },*/
/*                   {"name":"no_submayor","title":"NO. SUBMAYOR", "type": "number", "breakpoints":"xs sm" },*/
/*                   {"name":"nombre_equipo","title":"NOMBRE EQUIPO", "breakpoints":"xs sm" },*/
/*                   {"name":"sello","title":"SELLO", "breakpoints":"all" },*/
/*                   {"name":"observacion","title":"OBSERVACION", "breakpoints":"xs sm"},*/
/*                   {"name":"id_padre", "visible": false },*/
/*                   {"name":"id_estado", "visible": false },*/
/*                   {"name":"id_responsable", "visible": false},*/
/*                   {"name":"edit","title":".....", "breakpoints":"xs sm"}*/
/*               ],*/
/*               rows: $.post('{{path('equipo')}}', { 'action': 'rows', 'baja': baja }).fail(function () { alerta_error();}),*/
/*               filtering: {*/
/*                   enabled: true,*/
/*                   placeholder: "Buscar Equipo..",*/
/*                    */
/*                 }, */
/*               editing: {*/
/*                 allowAdd: false,*/
/*                 enabled: true,  */
/*                 editText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span>',   */
/*                 deleteText: '<span class="mdi mdi-delete-forever" aria-hidden="true"></span>',*/
/*                 showText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span> Editar Equipo',                   */
/*                 editRow: function(row){*/
/*                   var values = row.val();*/
/*                   $editor.find('#id').val(values.id);*/
/*                   $editor.find('#medio_basico').val(values.medio_basico);*/
/*                   $editor.find('#no_submayor').val(values.no_submayor);*/
/*                   $editor.find('#nombre_equipo').val(values.nombre_equipo);*/
/*                   $editor.find('#sello').val(values.sello);*/
/*                   $editor.find('#estado_equipo').val(values.id_estado);*/
/*                   $editor.find('#observacion').val(values.observacion);                  */
/* */
/*                   //selecionar equipo padre en el selectpicker*/
/*                   $('select[name=pcs]').val(values.id_padre);*/
/*                   $("select[name=pcs]").selectpicker("refresh");*/
/* */
/*                   $('select[name=estado_equipo]').val(values.id_estado);*/
/*                   $("select[name=estado_equipo]").selectpicker("refresh");*/
/* */
/*                   //selecionar equipo padre en el selectpicker*/
/*                   $('select#responsable_equipo').val(values.id_responsable);*/
/*                   $("select#responsable_equipo").selectpicker("destroy");*/
/*                   $("select#responsable_equipo").selectpicker("refresh");*/
/*                   $('select#responsable_equipo').selectpicker('show'); */
/* */
/*                   if( values.tipo_equipo != 'Monitor'){*/
/*                     $("#isMonitor").attr('hidden','hidden');*/
/*                   }else{*/
/*                     $("#isMonitor").removeAttr('hidden');*/
/*                   }                      */
/* */
/*                   $modal.data('row', row);*/
/*                   $editorTitle.text('Editar Movimiento Pieza ');*/
/*                   $modal.modal('show');*/
/*                 },*/
/*                 deleteRow: function(row){*/
/* */
/*                     //Parameter*/
/*                     if (bandera_equipo == 0){*/
/* */
/*                       swal({   */
/*                               title: "Baja de Equipo?",   */
/*                               text: "Seguro desea dar baja al Equipo?",   */
/*                               type: "warning",   */
/*                               showCancelButton: true,   */
/*                               confirmButtonColor: "#DD6B55",   */
/*                               confirmButtonText: "Si, Dar Baja!",   */
/*                               cancelButtonText: "No, Cancelar!",   */
/*                               closeOnConfirm: false,   */
/*                               closeOnCancel: false */
/*                           }, function(isConfirm){   */
/*                               if (isConfirm) {    */
/* */
/*                                   var values = row.val();*/
/*                                   $.post('{{path('equipo')}}', { 'action': 'delete_equipo', 'id': values.id , 'baja': baja })*/
/*                                           .done(function (d) { */
/*      */
/*                                             row.delete();*/
/*                                           */
/*                                               swal({   */
/*                                                   title: "Eliminar!",   */
/*                                                   text: "Se le dio baja correctamente al Equipo!",  */
/*                                                   type:"success", */
/*                                                   timer: 2500,   */
/*                                                   showConfirmButton: false */
/*                                               });     */
/* */
/*                                             }).fail(function () {*/
/*                                             alerta_error();*/
/*                                         });                                 */
/*                                   */
/*                               } else {    */
/*                                   */
/*                                   swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Daja baja del Equipo fue cancelado!",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/*                               } */
/*                           });*/
/* */
/*                     }else{*/
/* */
/*                       swal({   */
/*                               title: "Eliminar el Equipo?",   */
/*                               text: "Seguro desea Eliminar el Equipo!. También se elimina todos los Movimientos AFT relacionados con el Equipo y el inventario del Equipo",   */
/*                               type: "warning",   */
/*                               showCancelButton: true,   */
/*                               confirmButtonColor: "#DD6B55",   */
/*                               confirmButtonText: "Eliminar del Sistema!",   */
/*                               cancelButtonText: "Cancelar!",   */
/*                               closeOnConfirm: false,   */
/*                               closeOnCancel: false */
/*                           }, function(isConfirm){   */
/*                               if (isConfirm) {    */
/* */
/*                                   var values = row.val();*/
/*                                   $.post('{{path('equipo')}}', { 'action': 'delete_equipo', 'id': values.id , 'baja': baja })*/
/*                                           .done(function (d) { */
/*      */
/*                                             row.delete();*/
/*                                           */
/*                                               swal({   */
/*                                                   title: "Eliminar!",   */
/*                                                   text: "Se eliminó correctamente el Equipo, tanto movimientos como inventario",  */
/*                                                   type:"success", */
/*                                                   timer: 3500,   */
/*                                                   showConfirmButton: false */
/*                                               });                                                                                   */
/*                                           }).fail(function () {*/
/*                                             alerta_error();*/
/*                                         });                                 */
/*                                   */
/*                               } else {    */
/*                                   */
/*                                   swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Eliminar el Equipo fue cancelado",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/*                               } */
/*                           });*/
/* */
/*                     } */
/*                 }*/
/*               }*/
/*             });*/
/* */
/*           $editor.on('submit', function(e){*/
/*             if (this.checkValidity && !this.checkValidity()) return;*/
/*             e.preventDefault();*/
/* */
/*             var estado =$("select#estado_equipo option[value='"+$editor.find('#estado_equipo').val()+"']").attr('data-name'); */
/*             var responsable =$("select#responsable_equipo option[value='"+$editor.find('#responsable_equipo').val()+"']").attr('data-name');*/
/* */
/*             var row = $modal.data('row'),*/
/*                 values = {*/
/*                   id: $editor.find('#id').val(),   */
/*                   medio_basico: $editor.find('#medio_basico').val(),*/
/*                   no_submayor: $editor.find('#no_submayor').val(),*/
/*                   nombre_equipo: $editor.find('#nombre_equipo').val(),*/
/*                   sello: $editor.find('#sello').val(),*/
/*                   estado_equipo: estado,*/
/*                   id_estado:  $editor.find('#estado_equipo').val(),*/
/*                   observacion: $editor.find('#observacion').val(),*/
/*                   pcs: $editor.find('#pcs').val(),*/
/*                   id_padre: $editor.find('#pcs').val(),*/
/*                   id_responsable: $editor.find('#responsable_equipo').val(),*/
/*                   responsable: responsable*/
/* */
/* */
/*                 };*/
/* */
/*                 if (row instanceof FooTable.Row){*/
/*                   row.val(values);*/
/*                   $.post('{{path('equipo')}}', { 'action': 'editar_equipo', 'equipo': values }).fail(function () { alerta_error();});*/
/*                 } */
/*                 $modal.modal('hide');*/
/*           });*/
/* */
/*           //cargar listado equipos*/
/*           $("#inventario_equipo_baja").on('click', function(e){ */
/* */
/*               if(baja == 0){*/
/*                 baja = 1;*/
/*                 cargar_equipos(baja);*/
/*               }else{*/
/*                 baja = 0;*/
/*                 cargar_equipos(baja);*/
/*               } */
/*               */
/*               */
/*             });*/
/* */
/*         */
/* */
/* */
/* */
/*     var ctx2 = document.getElementById("chart2").getContext("2d");*/
/*     var data2 = {*/
/*         labels: [*/
/*           {% for equipo in counts.equipos_estado_ok %}*/
/*               "{{equipo.tipoEquipo}}",*/
/*           {% endfor %}*/
/*         ],*/
/*         datasets: [*/
/* */
/*             {*/
/*                 label: "EQUIPOS APROBADOS",*/
/*                 fillColor: "#06d79c",*/
/*                 strokeColor: "#06d79c",*/
/*                 highlightFill: "#06d79c",*/
/*                 highlightStroke: "#06d79c",*/
/*                 data: [*/
/*                   {% for equipo in counts.equipos_aprobados %}*/
/*                       {{equipo.cantidad}},*/
/*                   {%endfor%}*/
/*                 ]*/
/*             },*/
/* */
/*             {*/
/*                 label: "EQUIPOS OK",*/
/*                 fillColor: "#009efb",*/
/*                 strokeColor: "#009efb",*/
/*                 highlightFill: "#009efb",*/
/*                 highlightStroke: "#009efb",*/
/*                 data: [*/
/*                   {% for equipo in counts.equipos_estado_ok %}*/
/*                       {{equipo.cantidad}},*/
/*                   {%endfor%}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 label: "EQUIPOS ROTOS",*/
/*                 fillColor: "#dde000",*/
/*                 strokeColor: "#dde000",*/
/*                 highlightFill: "#dde000",*/
/*                 highlightStroke: "#dde000",*/
/*                 data: [*/
/*                   {% for equipo in counts.equipos_estado_roto %}*/
/*                       {{equipo.cantidad}},*/
/*                   {% endfor %}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 label: "EQUIPOS BAJAS",*/
/*                 fillColor: "#e12331",*/
/*                 strokeColor: "#e12331",*/
/*                 highlightFill: "#e12331",*/
/*                 highlightStroke: "#e12331",*/
/*                 data: [*/
/*                   {% for equipo in counts.equipos_baja %}*/
/*                       {{equipo.cantidad}},*/
/*                   {% endfor %}*/
/*                 ]*/
/*             }*/
/*         ]*/
/*     };*/
/*     */
/*     var chart2 = new Chart(ctx2).Bar(data2, {*/
/*         scaleBeginAtZero : true,*/
/*         scaleShowGridLines : true,*/
/*         scaleGridLineColor : "rgba(0,0,0,.005)",*/
/*         scaleGridLineWidth : 0,*/
/*         scaleShowHorizontalLines: true,*/
/*         scaleShowVerticalLines: true,*/
/*         barShowStroke : true,*/
/*         barStrokeWidth : 0,*/
/*         tooltipCornerRadius: 2,*/
/*         barDatasetSpacing : 3,*/
/*         responsive: true*/
/*     });*/
/* */
/* */
/* */
/*       $('.selectpicker').selectpicker();*/
/*       $(".select2").select2();*/
/* */
/*       /**/
/*       * Mensaje de loader*/
/*       *//* */
/*       function loader(dialogo){*/
/*          var loader =  '<div class="preloader">'+*/
/*                  '<div class="loader"> '+*/
/*                  '<div class="loader__figure"></div> '+*/
/*                  '<p class="loader__label"> '+dialogo+'</p>'+ */
/*                  '</div></div>';*/
/*           return loader;*/
/*       }*/
/* */
/*       $("#expediente_tecnico").on('click', function(){*/
/*         */
/*         $(".load").append(loader('Generando Expediente Técnico'));*/
/* */
/*         $.post('{{path('exportar_expediente_tecnico')}}', { 'action': 'exportar_expediente_tecnico'  })*/
/*          .done(function(){*/
/*             window.location = "{{asset('uploads/temp/informatica/MODELO_ANEXO_NO1.docx')}}";*/
/*             $(".load").empty();*/
/*          })*/
/*          .fail(function () {*/
/*             alerta_error();*/
/*             $(".load").empty();*/
/*           });  */
/* */
/*       });*/
/* */
/*       $('.table_equipo').on('click', '.exp_tecnico_pc', function(){*/
/* */
/*         var id_pc = $(this).attr('data-id');*/
/*         */
/*         $(".load").append(loader('Generando Expediente Técnico de la PC'));*/
/* */
/*         $.post('{{path('exportar_expediente_tecnico_pc')}}', { 'action': 'exportar_expediente_tecnico' , 'id_pc': id_pc  })*/
/*          .done(function(){*/
/*             window.location = "{{asset('uploads/temp/informatica/EXPEDIENTE_TECNICO_PC.docx')}}";*/
/*             $(".load").empty();*/
/*          })*/
/*          .fail(function () {*/
/*             alerta_error();*/
/*             $(".load").empty();*/
/*           });  */
/* */
/*       });*/
/* */
/*       */
/* */
/*       */
/* */
/*       */
/*           function refrescar_equipos(baja){*/
/*         */
/*                 $.post('{{path('equipo')}}', { 'action': 'rows', 'baja': baja }).done(function(rows){*/
/*                      ft.rows.load(rows);*/
/*                 }).fail(function () { alerta_error();});        */
/*           }*/
/* */
/*           function cargar_equipos(baja){*/
/*         */
/*               if (bandera_equipo == 0 ){*/
/*                 $('#inventario_equipo_baja').html('<i class="mdi mdi-thumb-up-outline"> </i>Equipo'); */
/*                 $('#inventario_equipo_baja').attr('class','btn btn-sm btn-success m-l-20');          */
/*                 bandera_equipo = 1;*/
/* */
/*                 //e.preventDefault();    */
/*                 $.post('{{path('equipo')}}', { 'action': 'rows', 'baja': baja }).done(function(rows){*/
/*                      ft.rows.load(rows);*/
/*                 }).fail(function () { alerta_error();});*/
/*                */
/*               }else{*/
/* */
/*                 $('#inventario_equipo_baja').html('<i class="mdi mdi-thumb-down-outline"> </i>Equipos Baja');*/
/*                 $('#inventario_equipo_baja').attr('class','btn btn-sm btn-danger m-l-20');          */
/*                 bandera_equipo = 0;*/
/* */
/*                 //e.preventDefault();    */
/*                 $.post('{{path('equipo')}}', { 'action': 'rows', 'baja': baja }).done(function(rows){*/
/*                      ft.rows.load(rows);*/
/*                 }).fail(function () { alerta_error();});*/
/*               }          */
/*         */
/*           }*/
/*       */
/*       */
/* */
/* */
/*       $("#inventario_piezas_equipo").on('click', function(){*/
/* */
/*         if ($("#id_pizas_cargada").val() == 'cargar'){*/
/*           inventario_piezas_equipo(baja);*/
/*           $("#id_pizas_cargada").val('ya_cargado'); */
/*         }*/
/*           $("#modal_inventario_pieza_equipo").modal('show');       */
/* */
/*       });*/
/* */
/* */
/* */
/*       function inventario_piezas_equipo(baja){*/
/*         */
/*           ft = FooTable.init('#table_pieza_equipo', {*/
/* */
/*             columns: [*/
/*                   {"name":"id","title":"ID", "type":"number","breakpoints":"xs sm"},*/
/*                   {"name":"tipo_equipo","title":"TIPO EQUIPO", "breakpoints":"xs sm"},*/
/*                   {"name":"pieza","title":"PIEZA", "breakpoints":"xs sm"},*/
/*                   {"name":"marca","title":"MARCA", "breakpoints":"xs sm"},                                 */
/*                   {"name":"modelo","title":"MODELO", "breakpoints":"xs sm"},*/
/*                   {"name":"ctecnica","title":"CTECNICA", "breakpoints":"xs sm"},*/
/*                   {"name":"serial","title":"SERIAL", "breakpoints":"xs sm"},*/
/*                   {"name":"observacion","title":"OBSERVACIÓN", "breakpoints":"xs sm"},*/
/*                   {"name":"responsable","title":"RESPONSABLE", "breakpoints":"all"},*/
/*                   {"name":"local","title":"ÁREA / LOCAL", "breakpoints":"all"},*/
/*                   {"name":"medio_basico","title":"MEDIO BÁSICO", "breakpoints":"all"},*/
/*                   {"name":"no_inventario","title":"NO. SUBMAYOR", "breakpoints":"all"},*/
/*                   {"name":"fecha","title":"FECHA", "breakpoints":"all"},*/
/*                   {"name":"sello","title":"SELLO", "breakpoints":"all"}*/
/* */
/*               ],*/
/*               rows: $.post('{{path('inventario_piezas_equipo')}}', { 'action': 'rows_inventario_piezas_equipos' }).fail(function () { alerta_error();}),*/
/*               filtering: {*/
/*                   enabled: true,*/
/*                   placeholder: "Buscar Pieza.." */
/*               }*/
/* */
/*           });         */
/*       }*/
/* */
/* */
/* */
/* */
/*       //$(".select2").select2();           */
/*    */
/* */
/*       $('.date-picker').bootstrapMaterialDatePicker({ weekStart: 0, time: false, format: 'YYYY-MM-DD' });*/
/* */
/*       */
/*       $("#tipo_equipo").on('change', function(){*/
/* */
/*         if ($(this).val() == 1){*/
/*           $('#pp').removeAttr('hidden');*/
/*         }else{*/
/*           $('#pp').attr('hidden', 'hidden');*/
/*         }*/
/*       });*/
/* */
/*       */
/*       $("#exportar_inventario").on('click', function(){*/
/* */
/*           $(".load").append(loader('Generando Inventario de Equipos'));*/
/* */
/*           id_local = $("#ex_local").val();        */
/*           id_equipo = $("#ex_equipo").val(); */
/*           formato = $('.iradio_minimal-red.checked').find('input').attr('id');*/
/*           isExpTec = $("#ocultar_equipo_area_local").attr('data-id');         */
/* */
/*           $("#exportar_inventario").attr('disabled','disabled');         */
/*           */
/*           $.post('{{path('exportar_inventario')}}', { 'action': 'exportar_inventario', 'baja': baja, 'id_local': id_local, 'id_equipo': id_equipo, 'id_equipo': id_equipo, 'formato': formato, 'isExpTec' : isExpTec })*/
/*           .done(function (d) { */
/* */
/*             $("#exportar_inventario").removeAttr('disabled');*/
/*             $("#exportar_equipo").removeAttr('disabled');*/
/*             $("#exportar_local").removeAttr('disabled');*/
/*             $("#exportar_responsable").removeAttr('disabled');*/
/* */
/*             if (d == 'doc'){*/
/* */
/*               window.location = "{{asset('uploads/temp/informatica/INVENTARIO_DE_EQUIPOS.docx')}}";*/
/*               $(".load").empty();*/
/*             }else { */
/*                demoTwoPageDocument(d);*/
/*                $(".load").empty();*/
/*             }              */
/*                     */
/*           }).fail(function () {*/
/*             $("#exportar_inventario").removeAttr('disabled'); */
/*             alerta_error();  */
/* */
/*           });     */
/* */
/*       });*/
/* */
/* */
/*       function demoTwoPageDocument(datos) {*/
/* */
/* */
/*                 var pdf = new jsPDF('l', 'pt'); */
/*                 var totalPagesExp = "{total_pages_count_string}";*/
/*                */
/* */
/*                var pageContent = function (data) {*/
/* */
/*                     // HEADER*/
/*                     pdf.setFontSize(14);*/
/*                     pdf.setTextColor(40);*/
/*                     */
/*                     pdf.text("REPORTE INVENTARIO EQUIPOS - "+datos['local']+""+ datos['tipo_equipo'], data.settings.margin.left + 5, 25);*/
/* */
/*                     // FOOTER*/
/*                     var str = "Página " + data.pageCount;*/
/*                     // Total page number plugin only available in jspdf v1.0+*/
/*                     if (typeof pdf.putTotalPages === 'function') {*/
/*                         str = str + " - " + totalPagesExp;*/
/*                     }*/
/*                     pdf.setFontSize(7);*/
/*                     pdf.text(str, data.settings.margin.left, pdf.internal.pageSize.height - 10);*/
/*                 };*/
/*                                         */
/*                 var columns = ["Equipo", "UBICACIÓN", "ÁREA","RESPONSABLE", "ESTADO", "MEDIO BÁSICO", "NOMBRE EQUIPO", "SELLO", "OBSERVACIÓN"];*/
/* */
/*                 pdf.autoTable(columns, datos['equipos'] , {*/
/*                     */
/*                     theme: 'striped',                    */
/*                     addPageContent: pageContent, */
/*                    */
/*                     styles: {*/
/*                       cellPadding: 5, // a number, array or object (see margin below)*/
/*                       fontSize: 8,*/
/*                       font: "arial", // helvetica, times, courier*/
/*                       lineWidth: 0.1,*/
/*                       fontStyle: 'normal', // normal, bold, italic, bolditalic*/
/*                       overflow: 'linebreak', // visible, hidden, ellipsize or linebreak                      */
/*                       textColor: 0,*/
/*                       halign: 'left', // left, center, right*/
/*                       valign: 'middle', // top, middle, bottom*/
/*                       */
/*                     },                   */
/*                     margin: 36, // a number, array or object                */
/*                     tableWidth: 'wrap', // 'auto', 'wrap' or a number,  */
/* */
/*                     headerStyles: {*/
/*                         fillColor: 230,*/
/*                         fontSize: 8,*/
/*                         fontStyle: 'bold',*/
/*                         halign: 'center',*/
/*                         font: "arial", // helvetica, times, courier*/
/* */
/*                     },          */
/*                     columnStyles: {*/
/*                           0: {columnWidth: 80},*/
/*                           1: {columnWidth: 80},*/
/*                           2: {columnWidth: 120},*/
/*                           3: {columnWidth: 60},*/
/*                           4: {columnWidth: 80},*/
/*                           5: {columnWidth: 70},*/
/*                           6: {columnWidth: 100},*/
/*                           7: {columnWidth: 40},  */
/*                           font: "arial"                        */
/*                     }                                     */
/*                 });*/
/*                   pdf.putTotalPages(totalPagesExp); */
/* */
/*                   if(datos['formato'] == 'print'){*/
/*                       pdf.autoPrint();*/
/*                       pdf.output("dataurlnewwindow");*/
/*                   }else if(datos['formato'] == 'pdf'){                                            */
/*                       pdf.save('INVENTARIO_DE_EQUIPOS.pdf');*/
/*                     }*/
/*                 }*/
/* */
/*      */
/* */
/*     $("#add_equipo").on('click', function(){*/
/* */
/*       var id_tipo_equipo = $("#tipo_equipo").val();*/
/*       var id_responsable = $("#responsable").val();*/
/* */
/* */
/*       var piezas = $("#piezas").val();     */
/* */
/*       if (id_tipo_equipo != '' && id_responsable != ''){*/
/*         cargando();        */
/* */
/*       $.post('{{path('equipo')}}', { 'action': 'add_equipo', 'id_tipo_equipo' : id_tipo_equipo , 'id_responsable' : id_responsable , 'piezas': piezas  })*/
/*           .done(function (d) {  */
/*              cargar_equipos(baja);        */
/* */
/*         $("select[name=tipo_equipo]").selectpicker("refresh");*/
/*         $("select[name=responsable]").selectpicker("refresh");*/
/*         $("select[name=piezas]").selectpicker("refresh");*/
/*         */
/* */
/* */
/*           cancelar();*/
/* */
/*           }).fail(function () { */
/* */
/*             alerta_error();  */
/* */
/*           });*/
/* */
/*       }else{*/
/*         //mostrar mensaje campos vacios*/
/*         alerta_campos_vacios();*/
/* */
/*       }*/
/* */
/*     });*/
/* */
/* */
/* */
/* */
/*     function cargando(){*/
/*         //btn add*/
/*         $("#add_equipo").text('Guardando...');*/
/*         $("#add_equipo").attr('disabled', 'disabled');*/
/*         //btn cancel*/
/*         $("#cancel_equipo").attr('disabled', 'disabled');*/
/*        */
/*         $('span').parents('div.checker').attr('disabled', 'disabled');*/
/*         */
/*     } */
/* */
/*     function cancelar(){*/
/*         //btn add*/
/*         $("#add_equipo").text('Adicionar');*/
/*         $("#add_equipo").removeAttr('disabled');*/
/*         //btn cancel*/
/*         $("#cancel_equipo").removeAttr('disabled');*/
/* */
/*         $("#tipo_equipo").removeAttr('disabled');*/
/*         $("#responsable").removeAttr('disabled');*/
/*         $('span').parents('div.checker').removeAttr('disabled');  */
/*       //  $('div.checker').find('span').removeAttr('checked');      */
/*     } */
/* */
/*     function cargar_tabledit_inventario(id_equipo, estados){*/
/*        $('#table_inventario_'+id_equipo).Tabledit({*/
/*         url: '{{path('inventario_pieza_equipo')}}',*/
/*         editButton: false,       */
/*         editmethod: 'post',*/
/*         deletemethod: 'post',*/
/*         buttons: {*/
/*             delete: {*/
/*                 class: 'btn waves-effect waves-light btn-danger',*/
/*                 html: '<span class="fa fa-trash-o"></span>',*/
/*                 action: 'delete'*/
/*             },*/
/*             edit: {*/
/*             class: 'btn waves-effect waves-light btn-primary',*/
/*             html: '<span class="mdi mdi-lead-pencil"></span> &nbsp EDIT',*/
/*             action: 'edit'*/
/*             },*/
/*             save: {*/
/*               class: 'btn waves-effect waves-light btn-success',*/
/*               html: 'Save'*/
/*             },*/
/*             restore: {*/
/*               class: 'btn waves-effect waves-light btn-warning',*/
/*               html: 'Restore',*/
/*               action: 'restore'*/
/*             },*/
/*             confirm: {*/
/*                 class: 'btn waves-effect waves-light btn-secondary',*/
/*                 html: 'OK'*/
/*             }*/
/*         },*/
/* */
/*         columns: {*/
/*           identifier: [0, 'id'],                    */
/*           editable: [ [2, 'marca'], [3, 'modelo'], [4, 'ctecnica'], [5, 'serial'], [6, 'estado', estados ], [7, 'observacion'] ]*/
/*         }, */
/*       });*/
/*     }*/
/* */
/*       */
/* */
/* */
/*       //variables globales*/
/*       var global_equipos = '';*/
/*       var estados = '{"1": "OK","2": "Roto","3": "Defectuoso","4": "Problema Técnicos"}';*/
/*     */
/* */
/* */
/* */
/*     //mostrar modal*/
/*     $("#mostrar_add_equipo").on("click", function(){*/
/*         $("#modal_add_equipo").modal('show');*/
/*     });*/
/* */
/* */
/*       $(".table_equipo").on("click", ".modal_inventario", function(){ */
/*       */
/* */
/*         id_equipo = $(this).attr('data-id');*/
/*         var is_table = $("table#table_inventario_"+id_equipo); */
/* */
/*         //solo a las pc se le permiten adicionar mas piezas*/
/*         if($(this).attr('data-name') == 'YES' ){*/
/*           $('#add_parte_pieza').removeAttr('hidden');          */
/*           $('#add_parte_pieza').attr('disabled', 'disabled');*/
/* */
/*           if($('#add_parte_pieza').attr('data-id') == id_equipo ){*/
/*              $('#add_parte_pieza').removeAttr('disabled'); */
/*           }*/
/* */
/*           $('#add_parte_pieza').attr('data-id', id_equipo );          */
/*         }else{*/
/*           $('#add_parte_pieza').attr('hidden', 'hidden');*/
/*         }*/
/* */
/*         if (is_table.length == 0){*/
/* */
/*           $("#modal-body-inventario-equipo").empty(); */
/*           $('#h4_title_inventario').text('');*/
/*            $(".load").append(loader('Cargando Inventario del Equipo'));*/
/*           $("#table_inventario").attr('hidden','hidden');*/
/*           $("#modal_inventario").modal('show');*/
/*             //cargar inventario*/
/*             inventario_pieza_equipo(id_equipo)*/
/*         } else {*/
/*           $("#modal_inventario").modal('show');*/
/*         }*/
/* */
/*       });*/
/* */
/*       //cargar las piezas del equipo*/
/*       function inventario_pieza_equipo(id_equipo){*/
/*         $.post('{{path('inventario_pieza_equipo')}}', { 'action': 'cargar_piezas', 'id_equipo' : id_equipo })*/
/*             .done(function (datos) {  */
/*              */
/* */
/*               $('#h4_title_inventario').text('Tipo Equipo: '+datos['pieza'][0].tipoEquipo+' | Nombre Equipo: '+datos['pieza'][0].nombreEquipo+ ' | RESPONSABLE: '+datos['pieza'][0].responsable);*/
/* */
/*               table = '<table id="table_inventario_'+id_equipo+'" data-toggle="table" data-mobile-responsive="true" class="table table-hover table-responsive"><thead><tr class="uppercase"><th> ID </th><th > PIEZA </th><th> MARCA</th><th> MODELO </th><th> CTECNICA</th><th> SERIAL</th><th> ESTADO </th><th> OBSERVACION</th><th> MOVIMIENTO </th></tr></thead><tbody id="tbody_inventario">';*/
/* */
/*                        */
/* */
/*               for ( var i = 0 ; i < datos['pieza'].length; i++) {*/
/*                   table +='<tr>'+*/
/*                           '<td>'+ datos['pieza'][i]['id'] +'</td>'+*/
/*                           '<td>'+ datos['pieza'][i]['pieza'] +'</td>'+*/
/*                           '<td>'+ datos['pieza'][i]['marca'] +'</td>'+*/
/*                           '<td>'+ datos['pieza'][i]['modelo'] +'</td>'+*/
/*                           '<td>'+ datos['pieza'][i]['ctecnica'] +'</td>'+*/
/*                           '<td>'+ datos['pieza'][i]['serial'] +'</td>'+*/
/*                           '<td>'+ datos['pieza'][i]['estado'] +'</td>'+*/
/*                           '<td>'+ datos['pieza'][i]['observacion'] +'</td>';*/
/* */
/*                     if (datos['pieza'][i]['isPc'] == true ){*/
/*                       table += '<td> <button type="button" class="modal_movimiento_pieza btn btn-sm btn-success" data-id="'+datos['pieza'][i]['id']+'" > Movimiento  </button> </td> </tr>'; */
/*                     }else{*/
/*                       table += '<td> </td> </tr>'; */
/*                     }*/
/*                                        */
/*               }*/
/* */
/*                table += '</tbody></table>';*/
/* */
/*               $("#modal-body-inventario-equipo").empty();*/
/*               $("#modal-body-inventario-equipo").append(table);*/
/*               $('#add_parte_pieza').removeAttr('disabled');*/
/*               cargar_tabledit_inventario(id_equipo, datos['estado']); */
/* */
/*                $(".load").empty();*/
/* */
/*           }).fail(function () {*/
/*                 //exite error*/
/*                 $(".load").empty()*/
/*                 alerta_error();*/
/*             });*/
/*       }*/
/* */
/* */
/*       $(".table_equipo").on('click', ".modal_movimiento_equipo", function(){*/
/* */
/*         id_equipo = $(this).attr('data-id');*/
/*         $(".load").append(loader('Cargando Equipos'));*/
/*         $("#origen_equipo").empty();*/
/*         $("#destino_equipo").empty();*/
/*         $("#select_destino_equipos").empty();*/
/*         $("#div_movimiento_pieza").attr('hidden');*/
/*         $("#movimiento_pieza").attr('hidden', 'hidden');*/
/*         $("#movimiento_equipo").removeAttr('hidden', 'hidden');*/
/*         $("#movimiento_equipo").attr('disabled', 'disabled');        */
/*         $("#modal_movimiento_pieza").modal('show');*/
/*         $("#h4_modal_movimiento_pieza").text('Movimiento de Equipo');*/
/* */
/* */
/*         $.post('{{path('movimiento_aft')}}', { 'action': 'cargar_responsable', 'id_equipo' : id_equipo })*/
/*             .done(function (datos) { */
/* */
/*               global_equipos = datos['responsables'];*/
/*               */
/*               $("#movimiento_equipo").removeAttr('disabled');*/
/*               $("#origen_equipo").attr('data-id', datos['equipo']['id'] );*/
/*               $("#origen_equipo").attr('data-name', datos['equipo']['tipoEquipo'] );*/
/* */
/*               $("#origen_equipo").append(*/
/*                                     'EQUIPO: '+datos['equipo']['tipoEquipo']+'<br>'+                                    */
/*                                     'UBICACION: '+datos['equipo']['local']+'<br>'+*/
/*                                     'RESPONSABLE: '+datos['equipo']['responsable']+'<br>'+*/
/*                                     'ESTADO: '+datos['equipo']['estado']+'<br>'+*/
/*                                     'MEDIO BÁSICO: '+datos['equipo']['medioBasico']+'<br>'+*/
/*                                     'No. SUBMAYOR: '+datos['equipo']['noSubmayor']+'<br>'+*/
/*                                     'NOMBRE EQUIPO: '+datos['equipo']['nombreEquipo']+'<br>'+*/
/*                                     'SELLO: '+datos['equipo']['sello']+'<br>'+*/
/*                                     'OBSERVACIÓN: '+datos['equipo']['observacion']+'<br>'*/
/*                                   );            */
/* */
/*               for (var i = 0 ; i < datos['responsables'].length; i++) {*/
/*                   $("#select_destino_equipos").append("<option value='"+datos['responsables'][i]['id']+"'>"+datos['responsables'][i]['local']+" - "+datos['responsables'][i]['responsable']+"</option>");*/
/*               }  */
/* */
/* */
/*               $('#select_destino_equipos').selectpicker('destroy');     */
/*               $('#select_destino_equipos').selectpicker('show');    */
/* */
/*               $("#div_movimiento_pieza").removeAttr('hidden');  */
/* */
/* */
/*               $(".load").empty();                   */
/*               */
/* */
/*             }).fail(function () {*/
/*                 //exite error*/
/*                 alerta_error();*/
/*                 $(".load").empty(); */
/*             }); */
/* */
/* */
/* */
/*       });*/
/* */
/*       //levantar modal de movimiento pieza*/
/*       $("#modal-body-inventario-equipo").on("click", ".modal_movimiento_pieza", function(){ */
/*     */
/*         id_pieza = $(this).attr('data-id'); */
/*      */
/*         $("#h4_modal_movimiento_pieza").text('Movimiento de Pieza');*/
/*         $(".load").append(loader('Cargando Equipos'));*/
/* */
/*         $("#origen_equipo").empty();*/
/*         $("#destino_equipo").empty();*/
/*         $("#select_destino_equipos").empty();*/
/*         $("#div_movimiento_pieza").attr('hidden','hidden');*/
/* */
/*         $("#movimiento_equipo").attr('hidden','hidden');*/
/*         $("#movimiento_pieza").removeAttr('hidden');*/
/* */
/*         $("#movimiento_pieza").attr('disabled','disabled');        */
/*         $("#modal_movimiento_pieza").modal('show');*/
/* */
/*         $.post('{{path('movimiento_aft')}}', { 'action': 'cargar_equipo', 'id_pieza' : id_pieza })*/
/*             .done(function (datos) { */
/* */
/*               global_equipos = datos['equipos'];*/
/* */
/*               $("#movimiento_pieza").removeAttr('disabled');*/
/*               $("#origen_equipo").attr('data-id', id_pieza );*/
/*               $("#origen_equipo").attr('data-name', datos['pieza']);*/
/*               $("#origen_equipo").append(*/
/*                                     'EQUIPO: '+datos['equipo']['nombreEquipo']+'<br>'+*/
/*                                     'TIPO PIEZA: '+datos['pieza']+'<br>'+*/
/*                                     'ÁREA: '+datos['equipo']['area']+'<br>'+*/
/*                                     'LOCAL: '+datos['equipo']['local']+'<br>'+*/
/*                                     'RESPONSABLE: '+datos['equipo']['responsable']+'<br>'+*/
/*                                     'ESTADO: '+datos['equipo']['estado']+'<br>'+*/
/*                                     'MEDIO BÁSICO: '+datos['equipo']['medioBasico']+'<br>'+*/
/*                                     'No. SUBMAYOR: '+datos['equipo']['noSubmayor']+'<br>'+*/
/*                                     'NOMBRE EQUIPO: '+datos['equipo']['nombreEquipo']+'<br>'+*/
/*                                     'SELLO: '+datos['equipo']['sello']+'<br>'+*/
/*                                     'OBSERVACIÓN: '+datos['equipo']['observacion']+'<br>'*/
/*                                   );*/
/* */
/*               for (var i = 0 ; i < datos['equipos'].length; i++) {*/
/*                   $("#select_destino_equipos").append("<option value='"+datos['equipos'][i]['id']+"'>"+datos['equipos'][i]['nombreEquipo']+" - "+datos['equipos'][i]['responsable']+"</option>");*/
/*               }                 */
/* */
/*               $('#select_destino_equipos').selectpicker('destroy');     */
/*               $('#select_destino_equipos').selectpicker('show');     */
/* */
/*               $("#div_movimiento_pieza").removeAttr('hidden');                             */
/*                                  */
/*               $(".load").empty(); */
/* */
/*             }).fail(function () {*/
/*                 //exite error*/
/*                 alerta_error();*/
/*                 $(".load").empty(); */
/*             });       */
/* */
/*       });*/
/* */
/*       //cargar datos del select*/
/*       $("#select_destino_equipos").on('change', function(){*/
/*           id_equipo = $(this).val();*/
/*           $("#destino_equipo").empty();         */
/* */
/*           for (var i = 0 ; i < global_equipos.length; i++) {*/
/*              if (global_equipos[i]['id'] == id_equipo ){*/
/* */
/*               if(global_equipos[0]['responsable']){*/
/* */
/*                 $("#destino_equipo").append(                                                                     */
/*                                     'ÁREA: '+global_equipos[i]['area']+'<br>'+*/
/*                                     'LOCAL: '+global_equipos[i]['local']+'<br>'+*/
/*                                     'RESPONSABLE: '+global_equipos[i]['responsable']+'<br>'+*/
/*                                     'CARGO: '+global_equipos[i]['cargo']+'<br>'*/
/*                                   );*/
/* */
/*               }else{*/
/* */
/*                 $("#destino_equipo").append(*/
/*                                     'EQUIPO: '+global_equipos[i]['nombreEquipo']+'<br>'+   */
/*                                     'ÁREA: '+global_equipos[i]['area']+'<br>'+                                */
/*                                     'LOCAL: '+global_equipos[i]['local']+'<br>'+*/
/*                                     'RESPONSABLE: '+global_equipos[i]['responsable']+'<br>'+*/
/*                                     'ESTADO: '+global_equipos[i]['estado']+'<br>'+*/
/*                                     'MEDIO BÁSICO: '+global_equipos[i]['medioBasico']+'<br>'+*/
/*                                     'No. SUBMAYOR: '+global_equipos[i]['noSubmayor']+'<br>'+*/
/*                                     'NOMBRE EQUIPO: '+global_equipos[i]['nombreEquipo']+'<br>'+*/
/*                                     'SELLO: '+global_equipos[i]['sello']+'<br>'+*/
/*                                     'OBSERVACIÓN: '+global_equipos[i]['observacion']+'<br>'*/
/*                                   );*/
/* */
/*               }*/
/*               */
/*              }*/
/*            } */
/* */
/*       });*/
/* */
/* */
/*       //levantar modal para dicionar mas piezas*/
/*       $("#add_parte_pieza").on("click",function(){ */
/*     */
/*             id_equipo = $(this).attr('data-id'); */
/* */
/* */
/*           if( $("#modal-body-add-pieza").attr('data-id') != id_equipo ){            */
/*             */
/*             $(".load").append(loader('Cargando Piezas'));*/
/*             $("#select_piezas_faltantes").attr('hidden', 'hidden');              */
/*             */
/*             $("#modal_add_pieza").modal('show');*/
/* */
/*             $.post('{{path('add_pieza_equipo')}}', { 'action': 'cargar_piezas', 'id_equipo' : id_equipo })*/
/*                 .done(function (datos) {               */
/* */
/*                   $('.span_equipo').text(datos['equipo']);*/
/* */
/* */
/*                   for ( var i = 0 ; i < datos['pieza'].length; i++) {                */
/*                         $("#select_piezas_faltantes").append("<option value='"+datos['pieza'][i]['id']+"'>"+datos['pieza'][i]['pieza']+"</option>");                        */
/*                   }*/
/* */
/*                   $("#cargando").remove();*/
/* */
/*                   $("#select_piezas_faltantes").removeAttr('hidden');*/
/*                   $('#select_piezas_faltantes').selectpicker('destroy');*/
/*                   $("select_piezas_faltantes").selectpicker("refresh"); */
/* */
/*                   $('#select_piezas_faltantes').selectpicker('show'); */
/* */
/* */
/*                   $("#modal-body-add-pieza").attr('data-id', id_equipo);*/
/*                   $("#add_mas_parte_pieza").attr('data-id', id_equipo);*/
/* */
/*                   $(".load").empty();*/
/* */
/*             }).fail(function () {*/
/*                 //exite error*/
/*                 $(".load").empty();*/
/*                 alerta_error();*/
/*             });*/
/* */
/*           }else{*/
/* */
/*             $('#select_piezas_faltantes').selectpicker('destroy');     */
/*             $('#select_piezas_faltantes').selectpicker('show');*/
/*             $("select_piezas_faltantes").selectpicker("refresh"); */
/*             $("#modal_add_pieza").modal('show');*/
/* */
/*           }*/
/*       });*/
/* */
/*       //adicionar mas piezas*/
/*       $("#add_mas_parte_pieza").on("click",function(){ */
/* */
/*         var id_equipo = $(this).attr('data-id');*/
/*         var piezas = $("#select_piezas_faltantes").val();*/
/*         if (piezas!=  null ){*/
/* */
/*             $.post('{{path('add_pieza_equipo')}}', { 'action': 'add_pieza', 'id_equipo' : id_equipo , 'piezas': piezas })*/
/*                 .done(function (datos) {*/
/* */
/*                 $("#modal-body-inventario-equipo").empty(); */
/*                 $(".load").append(loader('Cargando Piezas'));*/
/* */
/*                 //cargar inventario del equipo  */
/*                 inventario_pieza_equipo(id_equipo);  */
/* */
/*                 $(".load").empty();*/
/* */
/*             }).fail(function () {*/
/*                 //exite error*/
/*                 $(".load").empty();*/
/*                 alerta_error();*/
/*             });*/
/*         }else{*/
/* */
/*           $.alert({*/
/*               title: 'Mensaje',*/
/*               content: 'Selecion al menos una pieza para adicionar!',*/
/*               type: 'blue',*/
/*               animation: 'scale',*/
/*               draggable: true,*/
/*           });*/
/*            */
/*         }*/
/* */
/*       });*/
/* */
/*       //movimiento de la pieza*/
/*       $("#movimiento_pieza").on('click', function(){*/
/* */
/*         id_pieza = $('#origen_equipo').attr('data-id');*/
/*         pieza = $('#origen_equipo').attr('data-name');*/
/*         id_equipo_destino = $('#select_destino_equipos').val();*/
/*         id_tipo_movimiento = $('#tipo_movimiento').val();*/
/*         */
/*         fecha = $("#movimiento_fecha").val();*/
/* */
/*         if (id_pieza!='' && id_equipo_destino != '' && fecha != ''){*/
/* */
/*             //Parameter*/
/*                   swal({   */
/*                             title: "Movimiento Pieza?",   */
/*                             text: 'Seguro desea hacer el movimiento de la/el '+pieza,   */
/*                             type: "warning",   */
/*                             showCancelButton: true,   */
/*                             confirmButtonColor: "#009efb",   */
/*                             confirmButtonText: "Hacer Mov. Pieza!",   */
/*                             cancelButtonText: "No, Cancelar!",   */
/*                             closeOnConfirm: false,   */
/*                             closeOnCancel: false */
/*                         }, function(isConfirm){   */
/*                             if (isConfirm) {    */
/* */
/*                             $("#modal_movimiento_pieza").modal('hide');                   */
/* */
/*                              $.post('{{path('movimiento_pieza')}}', { 'action': 'movimiento_pieza', 'id_pieza': id_pieza , 'id_equipo_destino' : id_equipo_destino, 'fecha': fecha })*/
/*                                         .done(function (d) {  */
/* */
/*                                           refrescar_equipos(baja);*/
/* */
/*                                           if (d == true){*/
/*                                                        swal({   */
/*                                                 title: "Hacer Mov. Pieza!",   */
/*                                                 text: "Se realizo el Movimiento de la Pieza",  */
/*                                                 type:"success", */
/*                                                 timer: 2500,   */
/*                                                 showConfirmButton: false */
/*                                             });*/
/*                                           }*/
/*                                           $("#modal-body-inventario-equipo").html('');*/
/*                                           $(".load").append(loader('Cargando Piezas'));*/
/* */
/*                                           inventario_pieza_equipo(id_equipo_destino);*/
/* */
/*                                           $(".load").empty();*/
/* */
/*                                         }).fail(function () {*/
/*                                           $(".load").empty();*/
/*                                           alerta_error();*/
/*                                       });                                */
/*                                 */
/*                             } else {    */
/*                                 */
/*                                 swal({   */
/*                                     title: "Cancelar!",   */
/*                                     text: "Movimiento Cancelado!",  */
/*                                     type:"error", */
/*                                     timer: 2500,   */
/*                                     showConfirmButton: false */
/*                                 });*/
/*                             } */
/*                         }); */
/* */
/*                 }else{*/
/*                     alerta_campos_vacios();*/
/*                 }*/
/*               });*/
/* */
/*      */
/* */
/* */
/*       //movimiento del equipo*/
/*       $("#movimiento_equipo").on('click', function(){*/
/* */
/*         id_equipo = $('#origen_equipo').attr('data-id');*/
/*         equipo = $('#origen_equipo').attr('data-name');*/
/*         tipo_movimiento_id = $("#tipo_movimiento").val();*/
/*         id_responsable = $('#select_destino_equipos').val();*/
/*         */
/*         fecha = $("#movimiento_fecha").val();*/
/* */
/*         if (id_equipo!='' && id_responsable != '' && fecha != '' && tipo_movimiento_id != ''){*/
/* */
/*              swal({   */
/*                             title: "Movimiento Equipo!",   */
/*                             text: 'Seguro desea hacer el movimiento de la/el '+equipo, */
/*                             type: "warning",   */
/*                             showCancelButton: true,   */
/*                             confirmButtonColor: "#009efb",   */
/*                             confirmButtonText: "Hacer Mov. Equipo!",   */
/*                             cancelButtonText: "No, Cancelar!",   */
/*                             closeOnConfirm: false,   */
/*                             closeOnCancel: false */
/*                         }, function(isConfirm){   */
/*                             if (isConfirm) {  */
/* */
/* */
/*                             $("#modal_movimiento_pieza").modal('hide');                   */
/* */
/*                              $.post('{{path('movimiento_aft')}}', { 'action': 'movimiento_equipo', 'id_equipo': id_equipo , 'id_responsable' : id_responsable, 'fecha': fecha, 'tipo_movimiento_id': tipo_movimiento_id })*/
/*                                         .done(function (d) {  */
/*                                           if (d == true){*/
/*                                             swal({   */
/*                                                 title: "Hacer Mov. Equipo!",   */
/*                                                 text: "Se realizo el Movimiento del Equipo",  */
/*                                                 type:"success", */
/*                                                 timer: 2500,   */
/*                                                 showConfirmButton: false */
/*                                             });*/
/*                                           }     */
/* */
/*                                           cargar_equipos(baja);                                       */
/*                                         }).fail(function () {*/
/*                                           alerta_error();*/
/*                                       });*/
/*                                 */
/*                             }else{*/
/*                                 swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Movimiento Cancelado!",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/*                           }*/
/*                         }); */
/* */
/*                 }else{*/
/*                     alerta_campos_vacios();*/
/*                 }*/
/*               });*/
/* */
/* */
/* */
/*       function alerta_error(){*/
/* */
/*         //Auto Close Timer*/
/*         */
/*              swal({   */
/*                 title: "Error!",   */
/*                 text: "Algo salió mal, por favor vuelva a intentarlo", */
/*                 type: "warning",   */
/*                 timer: 3000,   */
/*                 showConfirmButton: false */
/*             });*/
/*        */
/*       }*/
/* */
/*        //mensaje para campos vacios*/
/*       function alerta_campos_vacios(){       */
/* */
/*         swal({   */
/*                 title: "Mensaje!",   */
/*                 text: "Existen Campos Vacios!", */
/*                 type: "warning",   */
/*                 timer: 3000,   */
/*                 showConfirmButton: false */
/*             });*/
/*       }*/
/* */
/* */
/* */
/*      */
/*     */
/* */
/* */
/*    });//end document*/
/* */
/* */
/*      */
/*     </script>*/
/* */
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/* */
/* {% endblock %}*/
/* */
/* */
