<?php

/* InformaticaBundle:Gestion:MovimientoAFT.html.twig */
class __TwigTemplate_2be7928b63ae8d17afbfa32a34c17c7f82c64a576928a5c7fc1839e93370d2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_pro.html.twig", "InformaticaBundle:Gestion:MovimientoAFT.html.twig", 1);
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
        echo " Movimientos AFT ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- BEGIN PAGE LEVEL STYLES -->


    
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/pages/floating-label.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css"), "html", null, true);
        echo "\"/>
 

  <!--alerts CSS -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css"), "html", null, true);
        echo "\"/>

  <!-- select css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\"/>


   
   
    <!-- END PAGE LEVEL STYLES -->
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "
  ";
        // line 33
        echo twig_include($this->env, $context, "InformaticaBundle:include:preloder.html.twig", array("loader_label" => "Listados de Movimientos AFT"));
        echo "

  ";
        // line 35
        $this->loadTemplate("InformaticaBundle:include:header.html.twig", "InformaticaBundle:Gestion:MovimientoAFT.html.twig", 35)->display($context);
        // line 36
        echo "  ";
        $this->loadTemplate("InformaticaBundle:include:aside.html.twig", "InformaticaBundle:Gestion:MovimientoAFT.html.twig", 36)->display($context);
        // line 37
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
        // line 48
        echo twig_include($this->env, $context, "InformaticaBundle:include:page_titles.html.twig", array("titulo_pagina" => "Movimientos AFT", "session" => "Informática"));
        echo "                          
                        
    <div class=\"row\">
          
          <!-- MODAL EDITOR movimiento aft -->
          <div class=\"modal fade\" id=\"editor-movimientoaft\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editor-movimientoaft-title\">
  
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <form class=\"modal-content form-horizontal\" id=\"form-movimientoaft\">
              <div class=\"modal-header\">               
                <h4 class=\"modal-title\" id=\"editor-title\">Editar Movimiento AFT</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
              </div>
              <div class=\"modal-body\">
                <input type=\"number\" id=\"id\" name=\"id\" hidden=\"hidden\" />
                <div class=\"form-material required\">
                  <label for=\"observacion\" class=\"col-sm-4 control-label\">Observación</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"observacion\" name=\"observacion\" placeholder=\"Observacion\">
                  </div>
                </div>

                <div class=\"form-group col-md-6 col-xs-12\">    

                    <label for=\"pcs\">SELECIONE LA PC DE ESTE EQUIPO</label>              
                    <select  class=\"form-control selectpicker\" id=\"estado\" name=\"estado\" data-live-search=\"true\">
                      
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estado"]) {
            // line 76
            echo "                            <option data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "estado", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "estado", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </select>
                                      
                </div>

                <div class=\"input-group required col-md-12 col-xs-12\">

                  <ul class=\"icheck-list\">                    
                      <li>
                          <input type=\"checkbox\" class=\"check\" id=\"dictaminar\"  data-checkbox=\"icheckbox_square-blue\">
                          <label for=\"dictaminar\">Movimiento Dictaminado</label>
                      </li>
                  </ul>
                </div>

              </div>
              <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Salvar Cambios</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>        
            </form>          
          </div>  
        </div>
        <!-- end MODAL EDITOR movimiento aft-->       



          <!-- MODAL EDITOR plantilla-movimiento-aft  -->

          <div class=\"modal fade\" id=\"modal_plantilla_movimiento_aft\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-toggle=\"modal\" >
            <div class=\"modal-dialog modal-lg\">
              <div class=\"modal-content\">                
               
                <div class=\"modal-header\">                                    
                  <h4 class=\"modal-title\"> Movimiento AFT </h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-body\">    

                  <div class=\" row form-material card-body\">
                    <div class=\"form-group col-md-12 col-xs-12\">
                      <div class=\"d-flex\">                  
                          <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>DATOS GENERALES </h4>                                 
                      </div>
                    </div>

                    <input class=\"form-control\" id=\"p_idmov\" type=\"text\" hidden=\"\"/>
                    <div class=\"form-group col-md-6 col-xs-12\">

                      <h5>ENTIDAD</h5>
                      <input class=\"form-control\" id=\"p_entidad\" type=\"text\"  disabled=\"\"/>
                                   
                    </div>

                    <div class=\"form-group col-md-6 col-xs-12\">
                      <h5 >DIRECCIÓN PARTICULAR:</h5>
                      <input class=\"form-control\" id=\"p_direccionp\" type=\"text\"  disabled=\"\"/>
                      
                    </div>
                     
                  </div>   

                  <div class=\"row card-body\">

                    <div class=\"form-group col-md-12 col-xs-12\">
                      <div class=\"d-flex\">                  
                          <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>DATOS DEL RECEPTOR </h4>                                 
                      </div>
                    </div>


                    <div class=\"form-group form-material col-md-6 col-xs-12\">
                      <h5 >ENTIDAD:</h5>
                      <input class=\"form-control\" id=\"entidad_receptor\" type=\"text\" disabled=\"\"/>  
                    </div> 
                    <div class=\"form-group form-material col-md-6 col-xs-12\">
                      <h5 >DIRECCIÓN PARTICULAR:</h5>
                      <input class=\"form-control\" id=\"direccion_receptor\" type=\"text\" disabled=\"\"/>  
                    </div> 
                    <div class=\"form-group form-material col-md-6 col-xs-12\">
                      <h5 >ÁREA:</h5>
                      <input class=\"form-control\" id=\"area_receptor\" type=\"text\" disabled=\"\"/>  
                    </div> 
                    <div class=\"form-group col-md-6 col-xs-12\">
                      <h5 >SUBÁREAS:</h5>
                        <select class=\"selectpicker\"  data-live-search=\"true\" id=\"subarea_receptor\"> </select>                       
                    </div>
                  </div>


                  <div class=\" row card-body m-t-20\">  
                    <div class=\"form-group col-md-12 col-xs-12\">
                      <div class=\"d-flex\">                  
                          <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>INFORME TÉCNICO </h4>                                 
                      </div>
                    </div>

                    <div class=\"form-group col-md-6 col-xs-12\">
                      <h5 class=\"\">HECHO POR:</h5>
                        <select class=\"selectpicker\"  data-live-search=\"true\" id=\"p_hecho\">                          
                          ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "                         
                            <option value=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "responsable", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "local", array()), "local", array()), "html", null, true);
            echo "</option>   
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                            
                        </select>
                       
                    </div>  

                    <div class=\"form-material col-md-6 col-xs-12\">
                      <h5 >APROBADO POR:</h5>
                      <input class=\"form-control\" id=\"p_aprobado\" type=\"text\" disabled=\"\"/>  
                    </div>               
                    
                    <div class=\"form-group col-md-6 col-xs-12\">
                      <h5 >AUTORIZADO POR:</h5>
                        <select class=\"selectpicker\"  data-live-search=\"true\" id=\"p_autorizado\">                          
                          ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "                         
                            <option value=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "responsable", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "local", array()), "local", array()), "html", null, true);
            echo "</option>   
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                            
                        </select>
                    </div> 

                    <div class=\"form-group col-md-6 col-xs-12\">
                      <h5 >RECIBIDO POR:</h5>
                        <select class=\"selectpicker\"  data-live-search=\"true\"  id=\"p_receptor\"> 
                          ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "                         
                            <option value=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "responsable", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "local", array()), "local", array()), "html", null, true);
            echo "</option>   
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                         
                        </select>
                    </div> 

                    <div class=\" form-material col-md-12 col-xs-12 m-b-5\">
                      <h5>FUNDAMENTACIÓN DEL MOVIMIENTO</h5>
                        <textarea class=\"form-control\" rows=\"3\" id=\"p_fundamento\" >Circuito Integrado DEFECTUOSO, no existen piezas de repuesto para la reparación del equipo. Propuesto a Baja</textarea>
                        <span class=\"bar\"></span>
                        
                    </div>                                      
                    
                  </div> 
                             

                </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"exportar_movimiento_aft\"> Exportar Movimiento AFT </button>
                  <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Cancelar</button>                  
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
                  <!-- /.modal-dialog -->
          </div>           
        <!-- end MODAL EDITOR plantilla movimientos -->

        <!-- MODAL EDITOR plantilla dictamen aft  -->

          <div class=\"modal fade\" id=\"modal_plantilla_dictamen_aft\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-toggle=\"modal\" >
            <div class=\"modal-dialog modal-lg\">
              <div class=\"modal-content\">  

               <form class=\"modal-content form-horizontal\" id=\"form_dictamen_aft\">              
               
                <div class=\"modal-header\">                                    
                  <h4 class=\"modal-title\"> Dictamen AFT</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-body\">    

                  <div class=\" row m-t-20\">
                    <input class=\"form-control\" id=\"p_iddic\" type=\"text\" hidden=\"\"/>
                    
                    <div class=\"form-material col-md-6 col-xs-12 m-t-20\">
                        <label for=\"p_cliente\">CLIENTE:</label>
                        <select class=\"form-control p-0\" id=\"p_cliente\">                          
                            <option value=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unidad"]) ? $context["unidad"] : null), "unidad", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unidad"]) ? $context["unidad"] : null), "unidad", array()), "html", null, true);
        echo "</option>                         
                        </select>
                        
                    </div>

                    <div class=\"form-material col-md-6 col-xs-12 m-t-20\">
                      <label for=\"p_dic_direccion\">DIRECCIÓN PARTICULAR:</label>
                      <input class=\"form-control\" id=\"p_dic_direccion\" type=\"text\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "unidad", array()), "direccion", array()), "html", null, true);
        echo "\" disabled=\"\"/>
                      
                    </div> 

                    <div class=\"form-material col-md-12 col-xs-12\">
                      <label for=\"p_orden_servicio\">ORDEN DE SERVICIO:</label>
                      <input class=\"form-control\" id=\"p_orden_servicio\" name=\"p_orden_servicio\" type=\"text\"/>                                            
                      
                    </div>

                    <div class=\"form-material col-md-6 col-xs-12\" id=\"bol_piezas\">
                        <h5 >SELECION LAS PIEZAS A DICTAMINAR:</h5>
                        <select data-live-search=\"true\" class=\"selectpicker\" multiple id=\"select_inventario\" name=\"select_inventario\"> </select>   
                    </div>

                    <div class=\"form-material col-md-6 col-xs-12 m-t-20\">
                      <label for=\"p_dic_defecto_tec\">DEFECTO TÉCNICO:</label>
                      <input class=\"form-control\" id=\"p_dic_defecto_tec\" type=\"text\" value=\"Circuito integrado defectuoso\"/>                        
                    </div>
                  </div>                    

                  <div class=\" row m-t-20\"> 

                    <div class=\"form-material col-md-12 col-xs-12 m-b-5\">
                        <label for=\"p_fundamento_dic\">FUNDAMENTACIÓN DEL DICTAMEN:</label>
                        <textarea class=\"form-control\" rows=\"3\" id=\"p_fundamento_dic\" >Circuito Integrado DEFECTUOSO, no existen piezas de repuesto para la reparación del equipo. PC Core i3-2100 CPU 3.10Ghz / 2GB / 500GB / DVD+/-RW. Propuesto a Baja</textarea>
                       
                       
                    </div>                                      
                    
                  </div> 
                             

                </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"exportar_dictamen_aft\"> Exportar Dictamen AFT </button>
                  <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Cancelar</button>                  
                </div>

              </form>
              </div>
              <!-- /.modal-content -->
            </div>
                  <!-- /.modal-dialog -->
          </div>           
        <!-- end MODAL EDITOR plantilla movimientos -->


    </div>

      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">

          <div class=\"card\">            
            <div class=\"card-body\">  
              <div class=\"d-flex\">                  
                <h4 id=\"card-title-mov\" class=\"card-title\"> <span class=\"lstick\"></span>LISTADO MOVIMIENTOS DE AFT</h4>
              </div>
              <table id=\"table_movimiento_aft\" class=\"table table-hover table_movimiento_aft\"  data-paging=\"true\" data-filtering=\"true\" data-sorting=\"true\" >  

                <div class=\"d-flex\">

                  <div class=\"mr-auto\">
                    <div class=\"form-group\">
                     
                      <button id=\"movimiento-baja-boton\" data-toggle=\"modal\" class=\"btn btn-sm btn-danger m-l-10\"><i class=\"mdi mdi-thumb-down-outline\"> </i> Movimiento Baja </button>
                     

                    </div>
                  </div>                          
                        
                </div>

              </table>  
                           
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
        // line 347
        $this->loadTemplate("InformaticaBundle:include:footer.html.twig", "InformaticaBundle:Gestion:MovimientoAFT.html.twig", 347)->display($context);
        // line 348
        echo "    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>

  
  

  </div>


";
    }

    // line 361
    public function block_javascripts($context, array $blocks = array())
    {
        // line 362
        echo "
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    

    <!-- Plugin JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>  
     <!--Custom JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/custom.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Select -->   
    <script type=\"text/javascript\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
             

    <!-- Footable -->
    <script type=\"text/javascript\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js"), "html", null, true);
        echo "\"></script>


    <!-- Sweet-Alert  -->
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script> 
    <script  src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js"), "html", null, true);
        echo "\"></script>




    <script type=\"text/javascript\" charset=\"utf-8\" async defer>

    \$(window).on('load', function() {  
      //global
      \$(\".selectpicker\").selectpicker(); 

      //carpeta informatica en la carpeta web
      var web_informatica = \"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/temp/informatica"), "html", null, true);
        echo "\";  

      

      FooTable.FiltroEstado = FooTable.Filtering.extend({
          construct: function(instance){
            this._super(instance);
            this.statuses =  [\"EN PROCESO\",\"APROBADO\",\"REALIZADO EN AFT\"] // \$.post('";
        // line 402
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'estado_aft' });;
            this.def = 'Todos';
            this.\$status = null;
          },
          \$create: function(){
            this._super();
            var self = this,
              \$form_grp = \$('<div/>', {'class': 'form-group'})
                .append(\$('<label/>', {'class': 'sr-only', text: 'Status'}))
                .prependTo(self.\$form);

            self.\$status = \$('<select/>', { 'class': 'form-control' })
              .on('change', {self: self}, self._onStatusDropdownChanged)
              .append(\$('<option/>', {text: self.def}))
              .appendTo(\$form_grp);

            \$.each(self.statuses, function(i, status){
              self.\$status.append(\$('<option/>').text(status));
            });
          },
          _onStatusDropdownChanged: function(e){
            var self = e.data.self,
              selected = \$(this).val();
            if (selected !== self.def){
              self.addFilter('status', selected, ['estado']);
            } else {
              self.removeFilter('status');
            }
            self.filter();
          },
          draw: function(){
            this._super();
            var status = this.find('status');
            if (status instanceof FooTable.Filter){
              this.\$status.val(status.query.val());
            } else {
              this.\$status.val(this.def);
            }
          }
        });    


      \$(\".table_movimiento_aft\").on('click', \".modal_plantilla_movimiento_aft\", function(){
        id_mov = \$(this).attr('data-id'); 

        \$.post('";
        // line 447
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 
               'id_mov': id_mov,
               'action': 'cargar_subarea_movimiento'               
             }
              ).done(function(mov){

                //datos
                \$(\"#p_direccionp\").val(mov['direccion']);
                \$(\"#p_entidad\").val(mov['p_entidad']);
                \$(\"#p_aprobado\").val(mov['p_aprobado']);


                //datos receptor 
                \$(\"#entidad_receptor\").val(mov['unidad_receptor']);
                \$(\"#direccion_receptor\").val(mov['direccion_receptor']);
                \$(\"#area_receptor\").val(mov['area_receptor']);

                \$(\"#subarea_receptor\").empty();

                for (var i = 0 ; i < mov['sub_area'].length; i++) {
                    \$(\"#subarea_receptor\").append(\"<option value='\"+mov['sub_area'][i]['id']+\"'>\"+mov['sub_area'][i]['subLocal']+\"</option>\");
                }       
                \$('#subarea_receptor').selectpicker('destroy');     
                \$('#subarea_receptor').selectpicker('show');    
               

               }).fail(function () { alerta_error();})

        \$(\"#p_idmov\").val(id_mov);           
        \$(\"#modal_plantilla_movimiento_aft\").modal('show');
      });


      \$(\".table_movimiento_aft\").on('click', \".modal_plantilla_dictamen_aft\", function(){
        id_mov = \$(this).attr('data-id'); 
        \$(\"#p_iddic\").val(id_mov); 
        

        \$.post('";
        // line 485
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 
               'id_mov': \$('#p_iddic').val(),
               'action': 'cargar_inventario'
               }
              ).done(function(datos){

                if(datos.length == 1){
                  \$(\"#bol_piezas\").attr('hidden','hidden');
                  \$(\"#p_fundamento_dic\").text('Circuito Integrado DEFECTUOSO, no existen piezas de repuesto para la reparación del equipo.')

                }else{
                  \$(\"#bol_piezas\").removeAttr('hidden');
                  \$(\"#select_inventario\").empty();
                  for (var i= 0 ; i < datos.length; i++) {
                    \$(\"#select_inventario\").append(\"<option value='\"+datos[i]['id_inv']+\"'> \"+datos[i]['pieza']+\"</option>\");
                  }

                  \$('#select_inventario').selectpicker('destroy');     
                  \$('#select_inventario').selectpicker('show');
                  \$(\"#select_inventario\").selectpicker(\"refresh\");  
                }
                

                \$(\"#modal_plantilla_dictamen_aft\").modal('show'); 
               

               }).fail(function () { alerta_error();})
       
       });
        


      \$(\"#exportar_dictamen_aft\").on('click', function(){
          
        \$.post('";
        // line 519
        echo $this->env->getExtension('routing')->getPath("exportar_dictamen_aft");
        echo "', { 
               'id_mov': \$('#p_iddic').val(),
               'cliente': \$('#p_cliente').val(), 
               'dic_direccion': \$('#p_dic_direccion').val(), 
               'fundamento_dic': \$(\"#p_fundamento_dic\").val(),
               'dic_defecto_tec': \$(\"#p_dic_defecto_tec\").val(),
               'orden_servicio': \$(\"#p_orden_servicio\").val(),
               'inventario': \$('#select_inventario').val()
             }
              ).done(function(url){
                \$(\"#modal_plantilla_dictamen_aft\").modal('hide'); 
                window.location = web_informatica+\"/DICTAMEN_TECNICO_AFT/DICTAMEN_TECNICO_AFT_\"+url+\".docx\";

               }).fail(function () { alerta_error();})
      });

      

      \$(\"#exportar_movimiento_aft\").on('click', function(){

        \$.post('";
        // line 539
        echo $this->env->getExtension('routing')->getPath("exportar_movimiento_aft");
        echo "', { 
               'id_mov': \$('#p_idmov').val(),
               'entidad': \$('#p_entidad').val(), 
               'direccionp': \$('#p_direccionp').val(), 
               'fundamento': \$('#p_fundamento').val(), 

               'hecho_por': \$('#p_hecho').val(),
               'aprobado_por': \$('#p_aprobado').val(),
               'autorizado_por': \$('#p_autorizado').val(),
               'receptor_por': \$('#p_receptor').val(),

               //receptor              
               'id_subarea_receptor': \$('#subarea_receptor').val()
             }
              ).done(function(url){

                \$(\"#modal_plantilla_movimiento_aft\").modal('hide');                

                window.location = web_informatica+\"/MOVIMIENTO_AFT/MOVIMIENTO_AFT_\"+url+\".docx\";

               }).fail(function () { alerta_error();})
        
      });


          
          baja = 0;      
          log = 1;

             
          var \$modal = \$('#editor-movimientoaft'),
          \$editor = \$('#form-movimientoaft'),
          \$editorTitle = \$('#editor-title'),
          ft = FooTable.init('#table_movimiento_aft', {

            components: {
              filtering: FooTable.FiltroEstado
            },
            pagesize: 4,

            columns: [
                  {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\",\"breakpoints\":\"xs sm\"},
                  {\"name\":\"equipo\",\"title\":\"Equipo\", \"breakpoints\":\"all\"},
                  {\"name\":\"tipo_equipo\",\"title\":\"Tipo Equipo\"},                  
                  {\"name\":\"medio_basico\",\"title\":\"MEDIO BÁSICO\",\"breakpoints\":\"xs sm\"},
                  {\"name\":\"no_submayor\",\"title\":\"NO. SUBMAYOR\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"responsable_origen\",\"title\":\"RESPONSABLE ORIGEN\", \"breakpoints\":\"all\"},
                  {\"name\":\"local_origen\",\"title\":\"DEPARTAMENTO ORIGEN\", \"breakpoints\":\"all\"},
                  {\"name\":\"responsable_destino\",\"title\":\"RESPONSABLE DESTINO\", \"breakpoints\":\"all\"},
                  {\"name\":\"local_destino\",\"title\":\"DEPARTAMENTO DESTINO\", \"breakpoints\":\"all\"},
                  {\"name\":\"fecha\",\"title\":\"FECHA\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"usuario\",\"title\":\"USUARIO\", \"breakpoints\":\"all\"},                  
                  {\"name\":\"observacion\",\"title\":\"OBSERVACION\", \"breakpoints\":\"all\"},
                  {\"name\":\"estado\", \"title\":\"ESTADO DEL MOV.\", \"breakpoints\":\"xs\"},
                  {\"name\":\"estado_equipo\", \"title\":\"ESTADO DEL EQUIPO\", \"breakpoints\":\"all\"},
                  
                  {\"name\":\"dictaminar\", \"title\":\"DICT.\", \"breakpoints\":\"xs\"},
                 
                  {\"name\":\"id_estado\", \"visible\": false },
                  {\"name\":\"edit\",\"title\":\"....\", \"breakpoints\":\"xs sm\"}
              ],
              rows: \$.post('";
        // line 600
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'rows_aft', 'baja': baja, 'log': log }).fail(function () { alerta_error();}),
              filtering: {
                  enabled: true,
                  placeholder: \"Buscar Movimiento AFT..\" ,
                  dropdowntoggle:false
                },
              editing: {
                allowAdd: false,
                enabled: true,  
                editText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span>',   
                deleteText: '<span class=\"mdi mdi-delete-forever\" aria-hidden=\"true\"></span>',
                showText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span> Editar Movimiento AFT',              
                editRow: function(row){
                  var values = row.val();
                  \$editor.find('#id').val(values.id);                 
                  \$editor.find('#observacion').val(values.observacion);

                  //selecionar equipo padre en el selectpicker
                  \$('select[name=estado]').val(values.id_estado);
                  \$(\"select[name=estado]\").selectpicker(\"refresh\");

                  if(values.dictaminar == 1){                    
                    \$(\"#dictaminar\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#dictaminar\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }

                  \$modal.data('row', row);
                  \$editorTitle.text('Editar Movimiento AFT ');
                  \$modal.modal('show');
                },
                deleteRow: function(row){

                  swal({   
                            title: \"Eliminar Movimiento AFT!\",   
                            text: \"Seguro desea eliminar el Movimiento de AFT?\",   
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
        // line 647
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'eliminar_movimiento_aft', 'id': values.id  })
                                        .done(function (d) {  
                                          row.delete();

                                          if (d == true){

                                             swal({   
                                                title: \"Mensaje!\",   
                                                text: \"Se eliminó corectamente el movimiento de AFT!\",  
                                                type:\"success\", 
                                                timer: 4000,   
                                                showConfirmButton: false 
                                            }); 

                                          }                                          
                                        }).fail(function () {
                                          alerta_error();
                                      });        
                               
                               
                            } else {    
                                
                                swal({   
                                    title: \"Cancelar!\",   
                                    text: \"Eliminar Movimiento AFT fue cancelado!\",  
                                    type:\"error\", 
                                    timer: 4000,   
                                    showConfirmButton: false 
                                });
                            } 
                        });  

                  
                }
              }
          });

          \$editor.on('submit', function(e){
            if (this.checkValidity && !this.checkValidity()) return;
            e.preventDefault();

            var estadoMov =\$(\"select#estado option[value='\"+\$editor.find('#estado').val()+\"']\").attr('data-name'); 
            dictaminar = (\$(\"#dictaminar\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;

            var row = \$modal.data('row'),
                values = {
                  id: \$editor.find('#id').val(),  
                  estado: estadoMov,   
                  observacion: \$editor.find('#observacion').val(),
                  id_estado: \$editor.find('#estado').val(),
                  dictaminar: dictaminar
                };

                if (row instanceof FooTable.Row){
                  row.val(values);
                  \$.post('";
        // line 702
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'editar_movimiento_aft', 'movimiento': values }).fail(function () { alerta_error();});
                } 
                \$modal.modal('hide');
          });


          //cargar listado
          \$(\"#movimiento-baja-boton\").on('click', function(e){
           
            if(baja == 0){    
                baja = 1;     
                \$(this).html('<i class=\"mdi mdi-thumb-up-outline\"> </i> Movimiento');
                \$(this).attr('class','btn btn-sm btn-success m-l-10');  

                e.preventDefault();          
                \$.post('";
        // line 717
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'rows_aft', 'baja': baja, 'log': log }).done(function(rows){
                  ft.rows.load(rows);
                }).fail(function () { alerta_error();});

            }else if(baja == 1){ 
                baja = 0;
                \$(this).html('<i class=\"mdi mdi-thumb-down-outline\"> </i> Movimiento Baja');
                \$(this).attr('class','btn btn-sm btn-danger m-l-10');
                e.preventDefault();          
                \$.post('";
        // line 726
        echo $this->env->getExtension('routing')->getPath("movimiento_aft");
        echo "', { 'action': 'rows_aft', 'baja': baja, 'log': log }).done(function(rows){
                  ft.rows.load(rows);
                }).fail(function () { alerta_error();});  
            }
          });
                         

         
       

        function alerta_error(){
          swal({   
                title: \"Error!\",   
                text: \"Algo salió mal, por favor vuelva a intentarlo\", 
                type: \"warning\",   
                timer: 2000,   
                showConfirmButton: false 
            });
        }


        
        


        // end document
      });  
        


              
      

   </script>

";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:Gestion:MovimientoAFT.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  935 => 726,  923 => 717,  905 => 702,  847 => 647,  797 => 600,  733 => 539,  710 => 519,  673 => 485,  632 => 447,  584 => 402,  574 => 395,  559 => 383,  555 => 382,  548 => 378,  541 => 374,  537 => 373,  533 => 372,  527 => 369,  522 => 367,  515 => 362,  512 => 361,  497 => 348,  495 => 347,  401 => 256,  389 => 249,  341 => 203,  329 => 202,  323 => 201,  314 => 194,  302 => 193,  296 => 192,  281 => 179,  269 => 178,  263 => 177,  162 => 78,  149 => 76,  145 => 75,  115 => 48,  102 => 37,  99 => 36,  97 => 35,  92 => 33,  89 => 32,  86 => 31,  75 => 21,  71 => 20,  67 => 19,  61 => 16,  57 => 15,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::base_pro.html.twig' %}*/
/* */
/* {% block title %} Movimientos AFT {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- BEGIN PAGE LEVEL STYLES -->*/
/* */
/* */
/*     */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/floating-label.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css')}}"/>*/
/*  */
/* */
/*   <!--alerts CSS -->*/
/*   <link href="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css')}}"/>*/
/* */
/*   <!-- select css -->*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/select2/dist/css/select2.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.css')}}"/>*/
/* */
/* */
/*    */
/*    */
/*     <!-- END PAGE LEVEL STYLES -->*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*   {{ include('InformaticaBundle:include:preloder.html.twig', {'loader_label':'Listados de Movimientos AFT' } ) }}*/
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
/*         {{ include('InformaticaBundle:include:page_titles.html.twig', {'titulo_pagina':'Movimientos AFT', 'session': 'Informática' } ) }}                          */
/*                         */
/*     <div class="row">*/
/*           */
/*           <!-- MODAL EDITOR movimiento aft -->*/
/*           <div class="modal fade" id="editor-movimientoaft" tabindex="-1" role="dialog" aria-labelledby="editor-movimientoaft-title">*/
/*   */
/*           <div class="modal-dialog modal-lg" role="document">*/
/*             <form class="modal-content form-horizontal" id="form-movimientoaft">*/
/*               <div class="modal-header">               */
/*                 <h4 class="modal-title" id="editor-title">Editar Movimiento AFT</h4>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*               </div>*/
/*               <div class="modal-body">*/
/*                 <input type="number" id="id" name="id" hidden="hidden" />*/
/*                 <div class="form-material required">*/
/*                   <label for="observacion" class="col-sm-4 control-label">Observación</label>*/
/*                   <div class="col-sm-9">*/
/*                     <input type="text" class="form-control" id="observacion" name="observacion" placeholder="Observacion">*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group col-md-6 col-xs-12">    */
/* */
/*                     <label for="pcs">SELECIONE LA PC DE ESTE EQUIPO</label>              */
/*                     <select  class="form-control selectpicker" id="estado" name="estado" data-live-search="true">*/
/*                       */
/*                         {% for estado in estados %}*/
/*                             <option data-name="{{ estado.estado }}" value="{{ estado.id }}"> {{ estado.estado }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                                       */
/*                 </div>*/
/* */
/*                 <div class="input-group required col-md-12 col-xs-12">*/
/* */
/*                   <ul class="icheck-list">                    */
/*                       <li>*/
/*                           <input type="checkbox" class="check" id="dictaminar"  data-checkbox="icheckbox_square-blue">*/
/*                           <label for="dictaminar">Movimiento Dictaminado</label>*/
/*                       </li>*/
/*                   </ul>*/
/*                 </div>*/
/* */
/*               </div>*/
/*               <div class="modal-footer">*/
/*                 <button type="submit" class="btn btn-primary">Salvar Cambios</button>*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*               </div>        */
/*             </form>          */
/*           </div>  */
/*         </div>*/
/*         <!-- end MODAL EDITOR movimiento aft-->       */
/* */
/* */
/* */
/*           <!-- MODAL EDITOR plantilla-movimiento-aft  -->*/
/* */
/*           <div class="modal fade" id="modal_plantilla_movimiento_aft" tabindex="-1" role="dialog" aria-hidden="true" data-toggle="modal" >*/
/*             <div class="modal-dialog modal-lg">*/
/*               <div class="modal-content">                */
/*                */
/*                 <div class="modal-header">                                    */
/*                   <h4 class="modal-title"> Movimiento AFT </h4>*/
/*                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                 </div>*/
/*                 <div class="modal-body">    */
/* */
/*                   <div class=" row form-material card-body">*/
/*                     <div class="form-group col-md-12 col-xs-12">*/
/*                       <div class="d-flex">                  */
/*                           <h4 class="card-title m-b-5"><span class="lstick"></span>DATOS GENERALES </h4>                                 */
/*                       </div>*/
/*                     </div>*/
/* */
/*                     <input class="form-control" id="p_idmov" type="text" hidden=""/>*/
/*                     <div class="form-group col-md-6 col-xs-12">*/
/* */
/*                       <h5>ENTIDAD</h5>*/
/*                       <input class="form-control" id="p_entidad" type="text"  disabled=""/>*/
/*                                    */
/*                     </div>*/
/* */
/*                     <div class="form-group col-md-6 col-xs-12">*/
/*                       <h5 >DIRECCIÓN PARTICULAR:</h5>*/
/*                       <input class="form-control" id="p_direccionp" type="text"  disabled=""/>*/
/*                       */
/*                     </div>*/
/*                      */
/*                   </div>   */
/* */
/*                   <div class="row card-body">*/
/* */
/*                     <div class="form-group col-md-12 col-xs-12">*/
/*                       <div class="d-flex">                  */
/*                           <h4 class="card-title m-b-5"><span class="lstick"></span>DATOS DEL RECEPTOR </h4>                                 */
/*                       </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="form-group form-material col-md-6 col-xs-12">*/
/*                       <h5 >ENTIDAD:</h5>*/
/*                       <input class="form-control" id="entidad_receptor" type="text" disabled=""/>  */
/*                     </div> */
/*                     <div class="form-group form-material col-md-6 col-xs-12">*/
/*                       <h5 >DIRECCIÓN PARTICULAR:</h5>*/
/*                       <input class="form-control" id="direccion_receptor" type="text" disabled=""/>  */
/*                     </div> */
/*                     <div class="form-group form-material col-md-6 col-xs-12">*/
/*                       <h5 >ÁREA:</h5>*/
/*                       <input class="form-control" id="area_receptor" type="text" disabled=""/>  */
/*                     </div> */
/*                     <div class="form-group col-md-6 col-xs-12">*/
/*                       <h5 >SUBÁREAS:</h5>*/
/*                         <select class="selectpicker"  data-live-search="true" id="subarea_receptor"> </select>                       */
/*                     </div>*/
/*                   </div>*/
/* */
/* */
/*                   <div class=" row card-body m-t-20">  */
/*                     <div class="form-group col-md-12 col-xs-12">*/
/*                       <div class="d-flex">                  */
/*                           <h4 class="card-title m-b-5"><span class="lstick"></span>INFORME TÉCNICO </h4>                                 */
/*                       </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group col-md-6 col-xs-12">*/
/*                       <h5 class="">HECHO POR:</h5>*/
/*                         <select class="selectpicker"  data-live-search="true" id="p_hecho">                          */
/*                           {% for r in responsables %}                         */
/*                             <option value="{{r.id}}"> {{r.responsable }} / {{r.local.local}}</option>   */
/*                           {% endfor %}                            */
/*                         </select>*/
/*                        */
/*                     </div>  */
/* */
/*                     <div class="form-material col-md-6 col-xs-12">*/
/*                       <h5 >APROBADO POR:</h5>*/
/*                       <input class="form-control" id="p_aprobado" type="text" disabled=""/>  */
/*                     </div>               */
/*                     */
/*                     <div class="form-group col-md-6 col-xs-12">*/
/*                       <h5 >AUTORIZADO POR:</h5>*/
/*                         <select class="selectpicker"  data-live-search="true" id="p_autorizado">                          */
/*                           {% for r in responsables %}                         */
/*                             <option value="{{r.id}}">{{r.responsable }} / {{r.local.local}}</option>   */
/*                           {% endfor %}                            */
/*                         </select>*/
/*                     </div> */
/* */
/*                     <div class="form-group col-md-6 col-xs-12">*/
/*                       <h5 >RECIBIDO POR:</h5>*/
/*                         <select class="selectpicker"  data-live-search="true"  id="p_receptor"> */
/*                           {% for r in responsables %}                         */
/*                             <option value="{{r.id}}"> {{r.responsable }} / {{r.local.local}}</option>   */
/*                           {% endfor %}                         */
/*                         </select>*/
/*                     </div> */
/* */
/*                     <div class=" form-material col-md-12 col-xs-12 m-b-5">*/
/*                       <h5>FUNDAMENTACIÓN DEL MOVIMIENTO</h5>*/
/*                         <textarea class="form-control" rows="3" id="p_fundamento" >Circuito Integrado DEFECTUOSO, no existen piezas de repuesto para la reparación del equipo. Propuesto a Baja</textarea>*/
/*                         <span class="bar"></span>*/
/*                         */
/*                     </div>                                      */
/*                     */
/*                   </div> */
/*                              */
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                   <button type="button" class="btn btn-sm btn-success" id="exportar_movimiento_aft"> Exportar Movimiento AFT </button>*/
/*                   <button type="button" class="btn default" data-dismiss="modal">Cancelar</button>                  */
/*                 </div>*/
/*               </div>*/
/*               <!-- /.modal-content -->*/
/*             </div>*/
/*                   <!-- /.modal-dialog -->*/
/*           </div>           */
/*         <!-- end MODAL EDITOR plantilla movimientos -->*/
/* */
/*         <!-- MODAL EDITOR plantilla dictamen aft  -->*/
/* */
/*           <div class="modal fade" id="modal_plantilla_dictamen_aft" tabindex="-1" role="dialog" aria-hidden="true" data-toggle="modal" >*/
/*             <div class="modal-dialog modal-lg">*/
/*               <div class="modal-content">  */
/* */
/*                <form class="modal-content form-horizontal" id="form_dictamen_aft">              */
/*                */
/*                 <div class="modal-header">                                    */
/*                   <h4 class="modal-title"> Dictamen AFT</h4>*/
/*                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                 </div>*/
/*                 <div class="modal-body">    */
/* */
/*                   <div class=" row m-t-20">*/
/*                     <input class="form-control" id="p_iddic" type="text" hidden=""/>*/
/*                     */
/*                     <div class="form-material col-md-6 col-xs-12 m-t-20">*/
/*                         <label for="p_cliente">CLIENTE:</label>*/
/*                         <select class="form-control p-0" id="p_cliente">                          */
/*                             <option value="{{unidad.unidad}}">{{unidad.unidad}}</option>                         */
/*                         </select>*/
/*                         */
/*                     </div>*/
/* */
/*                     <div class="form-material col-md-6 col-xs-12 m-t-20">*/
/*                       <label for="p_dic_direccion">DIRECCIÓN PARTICULAR:</label>*/
/*                       <input class="form-control" id="p_dic_direccion" type="text" value="{{app.user.unidad.direccion}}" disabled=""/>*/
/*                       */
/*                     </div> */
/* */
/*                     <div class="form-material col-md-12 col-xs-12">*/
/*                       <label for="p_orden_servicio">ORDEN DE SERVICIO:</label>*/
/*                       <input class="form-control" id="p_orden_servicio" name="p_orden_servicio" type="text"/>                                            */
/*                       */
/*                     </div>*/
/* */
/*                     <div class="form-material col-md-6 col-xs-12" id="bol_piezas">*/
/*                         <h5 >SELECION LAS PIEZAS A DICTAMINAR:</h5>*/
/*                         <select data-live-search="true" class="selectpicker" multiple id="select_inventario" name="select_inventario"> </select>   */
/*                     </div>*/
/* */
/*                     <div class="form-material col-md-6 col-xs-12 m-t-20">*/
/*                       <label for="p_dic_defecto_tec">DEFECTO TÉCNICO:</label>*/
/*                       <input class="form-control" id="p_dic_defecto_tec" type="text" value="Circuito integrado defectuoso"/>                        */
/*                     </div>*/
/*                   </div>                    */
/* */
/*                   <div class=" row m-t-20"> */
/* */
/*                     <div class="form-material col-md-12 col-xs-12 m-b-5">*/
/*                         <label for="p_fundamento_dic">FUNDAMENTACIÓN DEL DICTAMEN:</label>*/
/*                         <textarea class="form-control" rows="3" id="p_fundamento_dic" >Circuito Integrado DEFECTUOSO, no existen piezas de repuesto para la reparación del equipo. PC Core i3-2100 CPU 3.10Ghz / 2GB / 500GB / DVD+/-RW. Propuesto a Baja</textarea>*/
/*                        */
/*                        */
/*                     </div>                                      */
/*                     */
/*                   </div> */
/*                              */
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                   <button type="button" class="btn btn-sm btn-success" id="exportar_dictamen_aft"> Exportar Dictamen AFT </button>*/
/*                   <button type="button" class="btn default" data-dismiss="modal">Cancelar</button>                  */
/*                 </div>*/
/* */
/*               </form>*/
/*               </div>*/
/*               <!-- /.modal-content -->*/
/*             </div>*/
/*                   <!-- /.modal-dialog -->*/
/*           </div>           */
/*         <!-- end MODAL EDITOR plantilla movimientos -->*/
/* */
/* */
/*     </div>*/
/* */
/*       <div class="row">*/
/*         <div class="col-md-12 col-sm-12">*/
/* */
/*           <div class="card">            */
/*             <div class="card-body">  */
/*               <div class="d-flex">                  */
/*                 <h4 id="card-title-mov" class="card-title"> <span class="lstick"></span>LISTADO MOVIMIENTOS DE AFT</h4>*/
/*               </div>*/
/*               <table id="table_movimiento_aft" class="table table-hover table_movimiento_aft"  data-paging="true" data-filtering="true" data-sorting="true" >  */
/* */
/*                 <div class="d-flex">*/
/* */
/*                   <div class="mr-auto">*/
/*                     <div class="form-group">*/
/*                      */
/*                       <button id="movimiento-baja-boton" data-toggle="modal" class="btn btn-sm btn-danger m-l-10"><i class="mdi mdi-thumb-down-outline"> </i> Movimiento Baja </button>*/
/*                      */
/* */
/*                     </div>*/
/*                   </div>                          */
/*                         */
/*                 </div>*/
/* */
/*               </table>  */
/*                            */
/*             </div>*/
/*           </div>*/
/* */
/*             */
/*         </div>*/
/*       </div>     */
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
/*      {% include 'InformaticaBundle:include:footer.html.twig' %}*/
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
/*     <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*     */
/* */
/*     <!-- Plugin JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/moment/moment.js')}}"></script>  */
/*      <!--Custom JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/horizontal/js/custom.min.js')}}"></script>*/
/* */
/*     <!-- Select -->   */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>*/
/*              */
/* */
/*     <!-- Footable -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js')}}"></script>*/
/* */
/* */
/*     <!-- Sweet-Alert  -->*/
/*     <script src="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js')}}"></script> */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js')}}"></script>*/
/* */
/* */
/* */
/* */
/*     <script type="text/javascript" charset="utf-8" async defer>*/
/* */
/*     $(window).on('load', function() {  */
/*       //global*/
/*       $(".selectpicker").selectpicker(); */
/* */
/*       //carpeta informatica en la carpeta web*/
/*       var web_informatica = "{{asset('uploads/temp/informatica')}}";  */
/* */
/*       */
/* */
/*       FooTable.FiltroEstado = FooTable.Filtering.extend({*/
/*           construct: function(instance){*/
/*             this._super(instance);*/
/*             this.statuses =  ["EN PROCESO","APROBADO","REALIZADO EN AFT"] // $.post('{{path('movimiento_aft')}}', { 'action': 'estado_aft' });;*/
/*             this.def = 'Todos';*/
/*             this.$status = null;*/
/*           },*/
/*           $create: function(){*/
/*             this._super();*/
/*             var self = this,*/
/*               $form_grp = $('<div/>', {'class': 'form-group'})*/
/*                 .append($('<label/>', {'class': 'sr-only', text: 'Status'}))*/
/*                 .prependTo(self.$form);*/
/* */
/*             self.$status = $('<select/>', { 'class': 'form-control' })*/
/*               .on('change', {self: self}, self._onStatusDropdownChanged)*/
/*               .append($('<option/>', {text: self.def}))*/
/*               .appendTo($form_grp);*/
/* */
/*             $.each(self.statuses, function(i, status){*/
/*               self.$status.append($('<option/>').text(status));*/
/*             });*/
/*           },*/
/*           _onStatusDropdownChanged: function(e){*/
/*             var self = e.data.self,*/
/*               selected = $(this).val();*/
/*             if (selected !== self.def){*/
/*               self.addFilter('status', selected, ['estado']);*/
/*             } else {*/
/*               self.removeFilter('status');*/
/*             }*/
/*             self.filter();*/
/*           },*/
/*           draw: function(){*/
/*             this._super();*/
/*             var status = this.find('status');*/
/*             if (status instanceof FooTable.Filter){*/
/*               this.$status.val(status.query.val());*/
/*             } else {*/
/*               this.$status.val(this.def);*/
/*             }*/
/*           }*/
/*         });    */
/* */
/* */
/*       $(".table_movimiento_aft").on('click', ".modal_plantilla_movimiento_aft", function(){*/
/*         id_mov = $(this).attr('data-id'); */
/* */
/*         $.post('{{path('movimiento_aft')}}', { */
/*                'id_mov': id_mov,*/
/*                'action': 'cargar_subarea_movimiento'               */
/*              }*/
/*               ).done(function(mov){*/
/* */
/*                 //datos*/
/*                 $("#p_direccionp").val(mov['direccion']);*/
/*                 $("#p_entidad").val(mov['p_entidad']);*/
/*                 $("#p_aprobado").val(mov['p_aprobado']);*/
/* */
/* */
/*                 //datos receptor */
/*                 $("#entidad_receptor").val(mov['unidad_receptor']);*/
/*                 $("#direccion_receptor").val(mov['direccion_receptor']);*/
/*                 $("#area_receptor").val(mov['area_receptor']);*/
/* */
/*                 $("#subarea_receptor").empty();*/
/* */
/*                 for (var i = 0 ; i < mov['sub_area'].length; i++) {*/
/*                     $("#subarea_receptor").append("<option value='"+mov['sub_area'][i]['id']+"'>"+mov['sub_area'][i]['subLocal']+"</option>");*/
/*                 }       */
/*                 $('#subarea_receptor').selectpicker('destroy');     */
/*                 $('#subarea_receptor').selectpicker('show');    */
/*                */
/* */
/*                }).fail(function () { alerta_error();})*/
/* */
/*         $("#p_idmov").val(id_mov);           */
/*         $("#modal_plantilla_movimiento_aft").modal('show');*/
/*       });*/
/* */
/* */
/*       $(".table_movimiento_aft").on('click', ".modal_plantilla_dictamen_aft", function(){*/
/*         id_mov = $(this).attr('data-id'); */
/*         $("#p_iddic").val(id_mov); */
/*         */
/* */
/*         $.post('{{path('movimiento_aft')}}', { */
/*                'id_mov': $('#p_iddic').val(),*/
/*                'action': 'cargar_inventario'*/
/*                }*/
/*               ).done(function(datos){*/
/* */
/*                 if(datos.length == 1){*/
/*                   $("#bol_piezas").attr('hidden','hidden');*/
/*                   $("#p_fundamento_dic").text('Circuito Integrado DEFECTUOSO, no existen piezas de repuesto para la reparación del equipo.')*/
/* */
/*                 }else{*/
/*                   $("#bol_piezas").removeAttr('hidden');*/
/*                   $("#select_inventario").empty();*/
/*                   for (var i= 0 ; i < datos.length; i++) {*/
/*                     $("#select_inventario").append("<option value='"+datos[i]['id_inv']+"'> "+datos[i]['pieza']+"</option>");*/
/*                   }*/
/* */
/*                   $('#select_inventario').selectpicker('destroy');     */
/*                   $('#select_inventario').selectpicker('show');*/
/*                   $("#select_inventario").selectpicker("refresh");  */
/*                 }*/
/*                 */
/* */
/*                 $("#modal_plantilla_dictamen_aft").modal('show'); */
/*                */
/* */
/*                }).fail(function () { alerta_error();})*/
/*        */
/*        });*/
/*         */
/* */
/* */
/*       $("#exportar_dictamen_aft").on('click', function(){*/
/*           */
/*         $.post('{{path('exportar_dictamen_aft')}}', { */
/*                'id_mov': $('#p_iddic').val(),*/
/*                'cliente': $('#p_cliente').val(), */
/*                'dic_direccion': $('#p_dic_direccion').val(), */
/*                'fundamento_dic': $("#p_fundamento_dic").val(),*/
/*                'dic_defecto_tec': $("#p_dic_defecto_tec").val(),*/
/*                'orden_servicio': $("#p_orden_servicio").val(),*/
/*                'inventario': $('#select_inventario').val()*/
/*              }*/
/*               ).done(function(url){*/
/*                 $("#modal_plantilla_dictamen_aft").modal('hide'); */
/*                 window.location = web_informatica+"/DICTAMEN_TECNICO_AFT/DICTAMEN_TECNICO_AFT_"+url+".docx";*/
/* */
/*                }).fail(function () { alerta_error();})*/
/*       });*/
/* */
/*       */
/* */
/*       $("#exportar_movimiento_aft").on('click', function(){*/
/* */
/*         $.post('{{path('exportar_movimiento_aft')}}', { */
/*                'id_mov': $('#p_idmov').val(),*/
/*                'entidad': $('#p_entidad').val(), */
/*                'direccionp': $('#p_direccionp').val(), */
/*                'fundamento': $('#p_fundamento').val(), */
/* */
/*                'hecho_por': $('#p_hecho').val(),*/
/*                'aprobado_por': $('#p_aprobado').val(),*/
/*                'autorizado_por': $('#p_autorizado').val(),*/
/*                'receptor_por': $('#p_receptor').val(),*/
/* */
/*                //receptor              */
/*                'id_subarea_receptor': $('#subarea_receptor').val()*/
/*              }*/
/*               ).done(function(url){*/
/* */
/*                 $("#modal_plantilla_movimiento_aft").modal('hide');                */
/* */
/*                 window.location = web_informatica+"/MOVIMIENTO_AFT/MOVIMIENTO_AFT_"+url+".docx";*/
/* */
/*                }).fail(function () { alerta_error();})*/
/*         */
/*       });*/
/* */
/* */
/*           */
/*           baja = 0;      */
/*           log = 1;*/
/* */
/*              */
/*           var $modal = $('#editor-movimientoaft'),*/
/*           $editor = $('#form-movimientoaft'),*/
/*           $editorTitle = $('#editor-title'),*/
/*           ft = FooTable.init('#table_movimiento_aft', {*/
/* */
/*             components: {*/
/*               filtering: FooTable.FiltroEstado*/
/*             },*/
/*             pagesize: 4,*/
/* */
/*             columns: [*/
/*                   {"name":"id","title":"ID", "type":"number","breakpoints":"xs sm"},*/
/*                   {"name":"equipo","title":"Equipo", "breakpoints":"all"},*/
/*                   {"name":"tipo_equipo","title":"Tipo Equipo"},                  */
/*                   {"name":"medio_basico","title":"MEDIO BÁSICO","breakpoints":"xs sm"},*/
/*                   {"name":"no_submayor","title":"NO. SUBMAYOR", "breakpoints":"xs sm"},*/
/*                   {"name":"responsable_origen","title":"RESPONSABLE ORIGEN", "breakpoints":"all"},*/
/*                   {"name":"local_origen","title":"DEPARTAMENTO ORIGEN", "breakpoints":"all"},*/
/*                   {"name":"responsable_destino","title":"RESPONSABLE DESTINO", "breakpoints":"all"},*/
/*                   {"name":"local_destino","title":"DEPARTAMENTO DESTINO", "breakpoints":"all"},*/
/*                   {"name":"fecha","title":"FECHA", "breakpoints":"xs sm"},*/
/*                   {"name":"usuario","title":"USUARIO", "breakpoints":"all"},                  */
/*                   {"name":"observacion","title":"OBSERVACION", "breakpoints":"all"},*/
/*                   {"name":"estado", "title":"ESTADO DEL MOV.", "breakpoints":"xs"},*/
/*                   {"name":"estado_equipo", "title":"ESTADO DEL EQUIPO", "breakpoints":"all"},*/
/*                   */
/*                   {"name":"dictaminar", "title":"DICT.", "breakpoints":"xs"},*/
/*                  */
/*                   {"name":"id_estado", "visible": false },*/
/*                   {"name":"edit","title":"....", "breakpoints":"xs sm"}*/
/*               ],*/
/*               rows: $.post('{{path('movimiento_aft')}}', { 'action': 'rows_aft', 'baja': baja, 'log': log }).fail(function () { alerta_error();}),*/
/*               filtering: {*/
/*                   enabled: true,*/
/*                   placeholder: "Buscar Movimiento AFT.." ,*/
/*                   dropdowntoggle:false*/
/*                 },*/
/*               editing: {*/
/*                 allowAdd: false,*/
/*                 enabled: true,  */
/*                 editText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span>',   */
/*                 deleteText: '<span class="mdi mdi-delete-forever" aria-hidden="true"></span>',*/
/*                 showText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span> Editar Movimiento AFT',              */
/*                 editRow: function(row){*/
/*                   var values = row.val();*/
/*                   $editor.find('#id').val(values.id);                 */
/*                   $editor.find('#observacion').val(values.observacion);*/
/* */
/*                   //selecionar equipo padre en el selectpicker*/
/*                   $('select[name=estado]').val(values.id_estado);*/
/*                   $("select[name=estado]").selectpicker("refresh");*/
/* */
/*                   if(values.dictaminar == 1){                    */
/*                     $("#dictaminar").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#dictaminar").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/* */
/*                   $modal.data('row', row);*/
/*                   $editorTitle.text('Editar Movimiento AFT ');*/
/*                   $modal.modal('show');*/
/*                 },*/
/*                 deleteRow: function(row){*/
/* */
/*                   swal({   */
/*                             title: "Eliminar Movimiento AFT!",   */
/*                             text: "Seguro desea eliminar el Movimiento de AFT?",   */
/*                             type: "warning",   */
/*                             showCancelButton: true,   */
/*                             confirmButtonColor: "#DD6B55",   */
/*                             confirmButtonText: "Si, Dar Baja!",   */
/*                             cancelButtonText: "No, Cancelar!",   */
/*                             closeOnConfirm: false,   */
/*                             closeOnCancel: false */
/*                         }, function(isConfirm){   */
/*                             if (isConfirm) {*/
/* */
/*                             var values = row.val();  */
/*                             $.post('{{path('movimiento_aft')}}', { 'action': 'eliminar_movimiento_aft', 'id': values.id  })*/
/*                                         .done(function (d) {  */
/*                                           row.delete();*/
/* */
/*                                           if (d == true){*/
/* */
/*                                              swal({   */
/*                                                 title: "Mensaje!",   */
/*                                                 text: "Se eliminó corectamente el movimiento de AFT!",  */
/*                                                 type:"success", */
/*                                                 timer: 4000,   */
/*                                                 showConfirmButton: false */
/*                                             }); */
/* */
/*                                           }                                          */
/*                                         }).fail(function () {*/
/*                                           alerta_error();*/
/*                                       });        */
/*                                */
/*                                */
/*                             } else {    */
/*                                 */
/*                                 swal({   */
/*                                     title: "Cancelar!",   */
/*                                     text: "Eliminar Movimiento AFT fue cancelado!",  */
/*                                     type:"error", */
/*                                     timer: 4000,   */
/*                                     showConfirmButton: false */
/*                                 });*/
/*                             } */
/*                         });  */
/* */
/*                   */
/*                 }*/
/*               }*/
/*           });*/
/* */
/*           $editor.on('submit', function(e){*/
/*             if (this.checkValidity && !this.checkValidity()) return;*/
/*             e.preventDefault();*/
/* */
/*             var estadoMov =$("select#estado option[value='"+$editor.find('#estado').val()+"']").attr('data-name'); */
/*             dictaminar = ($("#dictaminar").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/* */
/*             var row = $modal.data('row'),*/
/*                 values = {*/
/*                   id: $editor.find('#id').val(),  */
/*                   estado: estadoMov,   */
/*                   observacion: $editor.find('#observacion').val(),*/
/*                   id_estado: $editor.find('#estado').val(),*/
/*                   dictaminar: dictaminar*/
/*                 };*/
/* */
/*                 if (row instanceof FooTable.Row){*/
/*                   row.val(values);*/
/*                   $.post('{{path('movimiento_aft')}}', { 'action': 'editar_movimiento_aft', 'movimiento': values }).fail(function () { alerta_error();});*/
/*                 } */
/*                 $modal.modal('hide');*/
/*           });*/
/* */
/* */
/*           //cargar listado*/
/*           $("#movimiento-baja-boton").on('click', function(e){*/
/*            */
/*             if(baja == 0){    */
/*                 baja = 1;     */
/*                 $(this).html('<i class="mdi mdi-thumb-up-outline"> </i> Movimiento');*/
/*                 $(this).attr('class','btn btn-sm btn-success m-l-10');  */
/* */
/*                 e.preventDefault();          */
/*                 $.post('{{path('movimiento_aft')}}', { 'action': 'rows_aft', 'baja': baja, 'log': log }).done(function(rows){*/
/*                   ft.rows.load(rows);*/
/*                 }).fail(function () { alerta_error();});*/
/* */
/*             }else if(baja == 1){ */
/*                 baja = 0;*/
/*                 $(this).html('<i class="mdi mdi-thumb-down-outline"> </i> Movimiento Baja');*/
/*                 $(this).attr('class','btn btn-sm btn-danger m-l-10');*/
/*                 e.preventDefault();          */
/*                 $.post('{{path('movimiento_aft')}}', { 'action': 'rows_aft', 'baja': baja, 'log': log }).done(function(rows){*/
/*                   ft.rows.load(rows);*/
/*                 }).fail(function () { alerta_error();});  */
/*             }*/
/*           });*/
/*                          */
/* */
/*          */
/*        */
/* */
/*         function alerta_error(){*/
/*           swal({   */
/*                 title: "Error!",   */
/*                 text: "Algo salió mal, por favor vuelva a intentarlo", */
/*                 type: "warning",   */
/*                 timer: 2000,   */
/*                 showConfirmButton: false */
/*             });*/
/*         }*/
/* */
/* */
/*         */
/*         */
/* */
/* */
/*         // end document*/
/*       });  */
/*         */
/* */
/* */
/*               */
/*       */
/* */
/*    </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
