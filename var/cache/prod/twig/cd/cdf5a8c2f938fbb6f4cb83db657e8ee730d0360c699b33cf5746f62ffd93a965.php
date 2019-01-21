<?php

/* InformaticaBundle:Gestion:MaestroGeneral.html.twig */
class __TwigTemplate_91ad53253249e21a0759cf9dcc55f0fae90cf35185c3b75e6c021835e2423d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_pro.html.twig", "InformaticaBundle:Gestion:MaestroGeneral.html.twig", 1);
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
        echo " Maestros Generales ";
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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css"), "html", null, true);
        echo "\"/>



    <!-- Color picker plugins css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/colorpicker/colorpicker.css"), "html", null, true);
        echo "\"/>

  <!--alerts CSS -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css"), "html", null, true);
        echo "\"/>


 <!-- select css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\"/>
   
   
    <!-- END PAGE LEVEL STYLES -->
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "
  ";
        // line 37
        echo twig_include($this->env, $context, "InformaticaBundle:include:preloder.html.twig", array("loader_label" => "Maestro General"));
        echo "

  <div class=\"load\"></div>

  ";
        // line 41
        $this->loadTemplate("InformaticaBundle:include:header.html.twig", "InformaticaBundle:Gestion:MaestroGeneral.html.twig", 41)->display($context);
        // line 42
        echo "  ";
        $this->loadTemplate("InformaticaBundle:include:aside.html.twig", "InformaticaBundle:Gestion:MaestroGeneral.html.twig", 42)->display($context);
        // line 43
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
        // line 54
        echo twig_include($this->env, $context, "InformaticaBundle:include:page_titles.html.twig", array("titulo_pagina" => "Maestro General", "session" => "Maestros Generales"));
        echo "                          
                        
    <div class=\"row\">
          

        <!-- MODAL EDITOR responsable  -->
          <div class=\"modal fade\" id=\"editor-responsable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editor-responsable-title\">
  
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <form class=\"modal-content form-horizontal \" id=\"form-responsable\">
              <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"editor-title\">RESPONSABLES</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                
              </div>              

              <div class=\"modal-body\">

                <input type=\"number\" id=\"id\" name=\"id\" hidden=\"hidden\" />
                <input type=\"number\" id=\"id_local\" name=\"id_local\" hidden=\"hidden\" />
                <input type=\"number\" id=\"id_cargo\" name=\"id_cargo\" hidden=\"hidden\" />

                <div class=\"form-group required col-md-12 col-xs-12 m-t-20\">
                    <label for=\"local\">SELECIONE ÁREA / LOCAL:</label>
                    <select class=\"selectpicker\"  data-live-search=\"true\" id=\"local\" name=\"local\" required>   
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo "  
                        <option data-id=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "area", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "local", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "area", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "local", array()), "html", null, true);
            echo " </option>                      
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "   
                    </select>
                    
                </div>

                <div class=\"form-group required col-md-12 col-xs-12\">
                     <label for=\"cargo\">SELECIONE EL CARGO:</label>
                    <select class=\"selectpicker\"  data-live-search=\"true\" id=\"cargo\" name=\"cargo\" required>   
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cargos"]) ? $context["cargos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "  
                        <option data-id=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "cargo", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "cargo", array()), "html", null, true);
            echo " </option>                      
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "   
                    </select>
                   
                </div>

                <div class=\"form-material required col-md-12 col-xs-12\">
                      <label for=\"responsable\">ESCRIBA NOMBRE DEL RESPONSABLE:</label>
                      <input class=\"form-control\" id=\"responsable\" name=\"responsable\" type=\"text\"/>                      
                </div>     

              </div>
              
              <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Salvar Cambios</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>        
            </form>          
          </div>  
        </div>
        <!-- end MODAL EDITOR responsable -->

         <!-- MODAL EDITOR local  -->
        <div class=\"modal fade\" id=\"editor-local\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editor-local-title\">
  
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <form class=\"modal-content form-horizontal \" id=\"form-local\">
              <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"editor-local-title\">LOCALES</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                
              </div>              

              <div class=\"modal-body\">

                <input type=\"number\" id=\"id\" name=\"id\" hidden=\"hidden\" />
                <input type=\"number\" id=\"id_area\" name=\"id_area\" hidden=\"hidden\" />

                <div class=\"required col-md-12 col-xs-12 form-material\">
                      <label for=\"local2\">ESCRIBA EL NOMBRE DEL ÁREA:</label>
                      <input class=\"form-control\" id=\"local2\" name=\"local2\" type=\"text\" required />                      
                </div>  

                <div class=\"required col-md-12 col-xs-12 form-material\">
                      <label for=\"codigo\">ESCRIBE EL CÓDIGO DEL ÁREA:</label>
                      <input class=\"form-control\" id=\"codigo\" name=\"codigo\" type=\"text\"/>
                     
                </div> 

                <div class=\"form-group required col-md-12 col-xs-12 m-t-20\">
                    <label for=\"local\">SELECIONE EL C.COSTO:</label>
                    <select class=\"selectpicker\"  data-live-search=\"true\" id=\"area\" name=\"area\" required>   
                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            echo "  
                        <option value=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "area", array()), "html", null, true);
            echo " </option>                      
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "   
                    </select>
                    
                </div>                   

              </div>
              
              <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Salvar Cambios</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>        
            </form>          
          </div>  
        </div>
        <!-- end MODAL EDITOR local -->


        <!-- MODAL EDITOR local  -->
        <div class=\"modal fade\" id=\"editor-subarea\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editor-subarea-title\">
  
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <form class=\"modal-content form-horizontal \" id=\"form-subarea\">
              <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"editor-subarea-title\">Sub Área</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                
              </div>              

              <div class=\"modal-body\">

                <input type=\"number\" id=\"id\" name=\"id\" hidden=\"hidden\" />



                <div class=\"form-group required col-md-12 col-xs-12\">
                  <label for=\"local\">SELECIONE EL ÁREA:</label> 
                  <select class=\"selectpicker\"  data-live-search=\"true\" id=\"local3\" name=\"local3\" required>   
                    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo "  
                        <option data-id=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "area", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "local", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "area", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "local", array()), "html", null, true);
            echo " </option>                      
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "   
                  </select>
                  
                                      
                </div>  

                <div class=\"form-group required col-md-12 col-xs-12 form-material\">
                      <label for=\"subarea\">ESCRIBE EL NOMBRE DE LA SUBÁREA:</label>
                      <input class=\"form-control\" id=\"subarea\" name=\"subarea\" type=\"text\" required/>                      
                </div>  

                <div class=\"form-group required col-md-12 col-xs-12 form-material\">
                      <label for=\"codigo3\">ESCRIBE EL CÓDIGO DE LA SUBÁREA:</label>
                      <input class=\"form-control\" id=\"codigo3\" name=\"codigo3\" type=\"text\"/>                     
                </div>             
              </div>
              
              <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Salvar Cambios</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>        
            </form>          
          </div>  
        </div>
        <!-- end MODAL EDITOR local -->

    </div>

    

    <div class=\"row\">
      <div class=\"col-md-6 col-sm-12\">
        <div class=\"card\">            
          <div class=\"card-body\">  
            <div class=\"d-flex\">                  
              <h4 id=\"card-title-mov\" class=\"card-title\"> <span class=\"lstick\"></span>DEFINICIÓN Tipo Equipo</h4>
            </div>

            <div class=\"row\">

              <div class=\"col-xs-12 col-md-6\">
                  <div class=\"row\">
                    <div class=\"form-material m-t-10 col-md-12 col-xs-12\">
                      
                       
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>Escribe Tipo Equipo.</label>
                      <input type=\"hidden\" name=\"id_tipo_equipo\" id=\"id_tipo_equipo\" value=\"add\" />
                      <input type=\"text\" class=\"form-control\"  id=\"tipo_equipo\" name=\"tipo_equipo\"> </div> 
                    </div>


                    <div class=\"m-t-10 col-md-10 col-xs-10\">

                      <div id=\"cp7\" class=\"cp7\" class=\"inl-bl\"></div>

                      <input id=\"color\" type=\"text\" hidden=\"hidden\" /> 
                    </div>

                     <div class=\"input-group required col-md-12 col-xs-12\">
                  <ul class=\"icheck-list\">
                    <li>
                        <input type=\"checkbox\" class=\"check\" id=\"tipo_equipo_ocultar\" name=\"tipo_equipo_ocultar\" data-checkbox=\"icheckbox_flat-red\" disabled=\"\">
                        <label for=\"tipo_equipo_ocultar\">Ocultar TE (Desuso)</label>
                    </li>                                       
                  </ul> 
                </div>

                  </div>
              </div>


              <div class=\"col-xs-12 col-md-6\">

                <div class=\"row\">
                  <div class=\"form-material m-t-20 col-md-12 col-xs-12\">

                <select size=\"10\" class=\"form-control p-0\" id=\"listado_tipo_equipo\" name=\"listado_tipo_equipo\" required>   
                  ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_equipos"]) ? $context["tipo_equipos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 262
            echo "                      <option data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "color", array()), "html", null, true);
            echo "\" data-id=\"";
            if ($this->getAttribute($context["tipo"], "ocultar", array())) {
                echo "YES";
            } else {
                echo "NO";
            }
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
        // line 263
        echo "  
                </select><span class=\"bar\"></span>                   

               </div>
                </div>
              </div>
                                         
              ";
        // line 270
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 271
            echo "                <div class=\"card-body botones_tipo_equipo\">
                  <button id=\"add_tipo_equipo\" class=\"btn btn-primary\">Adicionar</button> 
                  <button id=\"delete_tipo_equipo\" class=\"btn btn-danger\" disabled=\"disabled\">Eliminar</button>            
                  <button id=\"cancel_tipo_equipo\" class=\"btn default\">Cancelar</button>
                </div>
              ";
        }
        // line 277
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-6 col-sm-12\">
        <div class=\"card\">            
            <div class=\"card-body\">  
              <div class=\"d-flex\">                  
                <h4 id=\"card-title-mov\" class=\"card-title\"> <span class=\"lstick\"></span>DEFINICIÓN Piezas</h4>
              </div>

              <div class=\"row\">
                <div class=\"form-material m-t-20 col-md-6 col-xs-12\">


                  <div class=\"form-group\">
                    <label>Escribe Tipo Pieza</label>
                    <input type=\"hidden\" name=\"id_pieza\" id=\"id_pieza\" value=\"add\" />
                    <input type=\"text\" class=\"form-control\" id=\"pieza\" name=\"pieza\">
                  </div>


                  <div class=\"form-group\">                     
                      <div class=\"input-group\">    
                          <label for=\"tipo_pieza\">Tipo Pieza</label>                                                
                          <ul class=\"icheck-list\">
                              <li>
                                  <input value=\"1\" type=\"radio\" class=\"check\" id=\"tipo_1\" name=\"radio_pieza\" checked data-radio=\"iradio_flat-red\">
                                  <label for=\"tipo_1\">Dispositivo Interno</label>
                              </li>
                              <li>
                                  <input value=\"0\" type=\"radio\" class=\"check\" id=\"tipo_0\" name=\"radio_pieza\" data-radio=\"iradio_flat-red\">
                                  <label for=\"tipo_0\">Dispositivo Externo</label>
                              </li>
                                                            
                              <li>
                                  <input value=\"2\" type=\"radio\" class=\"check\" id=\"tipo_2\" name=\"radio_pieza\" data-radio=\"iradio_flat-red\">
                                  <label for=\"tipo_2\">Dispositivo Asociado</label>
                              </li>                              
                              
                          </ul>
                      </div>
                  </div>
                
                </div>


              <div class=\"form-material m-t-20 col-md-6 col-xs-12\">

                <select size=\"10\" class=\"form-control p-0\" id=\"listado_pieza\" name=\"listado_pieza\" required>   
                    ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["piezas"]) ? $context["piezas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pieza"]) {
            // line 329
            echo "                      <option data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pieza"], "tipo", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pieza"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pieza"], "pieza", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pieza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo " 
                </select><span class=\"bar\"></span>                   

              </div>

                ";
        // line 335
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 336
            echo "                <div class=\"card-body\">
                    <button id=\"add_pieza\" class=\"btn btn-primary\">Adicionar</button> 
                    <button id=\"delete_pieza\" class=\"btn btn-danger\" disabled=\"disabled\">Eliminar</button>             
                    <button id=\"cancel_pieza\" class=\"btn btn-default\">Cancelar</button>
                </div> 
                ";
        }
        // line 341
        echo "   
            </div>
          </div>                     
        </div> 
    </div>
    </div>


    <div class=\"row\">
       <div class=\"col-lg-12 col-xlg-12 col-md-12\">
                        <div class=\"card\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs profile-tab\" role=\"tablist\">
                                <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#responsables\" role=\"tab\">RESPONSABLES</a> </li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#ccosto\" role=\"tab\">CCOSTO</a> </li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#areas\" role=\"tab\">ÁREAS</a> </li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#subareas\" role=\"tab\">SUB ÁREAS</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"responsables\" role=\"tabpanel\">
                                    <div class=\"card-body\">
                                         <div class=\"row\">
                                          <div class=\"col-md-12 col-sm-12\">

                                            <div class=\"card\">            
                                              <div class=\"card-body\">                                                 
                                                <table id=\"table_responsable\" class=\"table table-hover table_responsable\" data-paging=\"true\" data-filtering=\"true\" data-sorting=\"true\" >  
                                   
                                                </table>  
                                                             
                                              </div>
                                            </div>            
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class=\"tab-pane\" id=\"ccosto\" role=\"tabpanel\">
                                    <div class=\"card-body\">

                                      <div class=\"row\">
                                          <div class=\"col-md-12 col-sm-12\">

                                            <div class=\"card\">            
                                              <div class=\"card-body\">                                                  
                                                <table id=\"table_ccosto\" class=\"table table-hover table_ccosto\" data-paging=\"true\" data-filtering=\"true\" data-sorting=\"true\" >  

                                                  <div class=\"d-flex\">
                                                    <div class=\"mr-auto\">
                                                      <div class=\"form-group\">
                                                        <button id=\"sincronizar_ccosto\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-plus\" aria-hidden=\"true\"></i>Sincronizar con AFT</button>
                                                      </div>                                 

                                                    </div>
                                                  </div>
                                   
                                                </table>  
                                                             
                                              </div>
                                            </div>            
                                          </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <!--second tab-->
                                <div class=\"tab-pane\" id=\"areas\" role=\"tabpanel\">
                                    <div class=\"card-body\">

                                      <div class=\"row\">
                                          <div class=\"col-md-12 col-sm-12\">

                                            <div class=\"card\">            
                                              <div class=\"card-body\">                                                  
                                                <table id=\"table_area\" class=\"table table-hover table_area\" data-paging=\"true\" data-filtering=\"true\" data-sorting=\"true\" > 

                                                  <div class=\"d-flex\">
                                                    <div class=\"mr-auto\">
                                                        <button data-toggle=\"tooltip\" title=\"Add Áreas de ZUNAFT\" id=\"modal_add_areas\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-plus\" aria-hidden=\"true\"></i>Adicionar Áreas</button>                                                           
                                                    </div>
                                                  </div> 
                                   
                                                </table>  
                                                             
                                              </div>
                                            </div>            
                                          </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"subareas\" role=\"tabpanel\">
                                    <div class=\"card-body\">
                                       
                                      <div class=\"row\">
                                          <div class=\"col-md-12 col-sm-12\">

                                            <div class=\"card\">            
                                              <div class=\"card-body\">                                                 
                                                <table id=\"table_subarea\" class=\"table table-hover table_subarea\" data-paging=\"true\" data-filtering=\"true\" data-sorting=\"true\" >  
                                   
                                                </table>  
                                                             
                                              </div>
                                            </div>            
                                          </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    


     <div class=\"row\">
      <div class=\"col-md-6 col-sm-12\">
        <div class=\"card\">            
          <div class=\"card-body\">  
            <div class=\"d-flex\">                  
              <h4 id=\"card-title-mov\" class=\"card-title\"> <span class=\"lstick\"></span>CONEXIÓN DE BD A ZUNAFT</h4>
            </div>

            <div class=\"row\">                  

                    <input type=\"hidden\" name=\"dba_aft_id\" id=\"dba_aft_id\" value=\"";
        // line 470
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array"), "id", array()), "html", null, true);
            echo " ";
        }
        echo "\" />

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>DRIVER:</label>                      
                      <input readonly=\"readonly\" type=\"text\" class=\"form-control\" id=\"dba_aft_driver\" name=\"dba_aft_driver\" value=\"pdo_sqlsrv\"> </div> 
                    </div>
              
                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>HOST:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_aft_host\" name=\"dba_aft_host\" value=\"";
        // line 481
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array"), "host", array()), " "), "html", null, true);
            echo " ";
        }
        echo "\">
                      <span class=\"help-block text-muted\"><small> Ejemplo: 10.12.39.5 o srvdb </small></span>
                       </div> 
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>PORT:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_aft_port\" name=\"dba_aft_port\" value=\"";
        // line 489
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array"), "port", array()), " "), "html", null, true);
            echo " ";
        }
        echo "\"> 
                      <span class=\"help-block text-muted\"><small> Por Defecto: null </small></span>
                    </div>
                      
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>NOMBRE BASE DATOS:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_aft_dbname\" name=\"dba_aft_dbname\" value=\"";
        // line 498
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array"), "dbname", array()), " "), "html", null, true);
            echo " ";
        }
        echo "\"> </div> 
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>USUARIO:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_aft_user\" name=\"dba_aft_user\" value=\"";
        // line 504
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array"), "user", array()), " "), "html", null, true);
            echo " ";
        }
        echo "\"> </div> 
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>CONTRASEÑA:</label>
                      <input type=\"password\" class=\"form-control\" id=\"dba_aft_password\" name=\"dba_aft_password\" value=\"";
        // line 510
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "AFT", array(), "array"), "password", array()), " "), "html", null, true);
            echo " ";
        }
        echo "\"> </div> 
                    </div>

            </div>

             ";
        // line 515
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 516
            echo "                <div class=\"card-body\">
                    <button id=\"add_aft_conexion\" class=\"btn btn-primary\"><i class=\"mdi mdi-content-save-all\"></i>Guardar Conexión</button> 
                    <button id=\"probar_aft_conexion\" class=\"btn btn-default\"><i class=\"mdi mdi-check\"></i>Probar Conexión</button> 
                </div> 
              ";
        }
        // line 521
        echo "          </div>
        </div>
      </div>

      <div class=\"col-md-6 col-sm-12\">
        <div class=\"card\">            
          <div class=\"card-body\">  
            <div class=\"d-flex\">                  
              <h4 id=\"card-title-mov\" class=\"card-title\"> <span class=\"lstick\"></span>CONEXIÓN DE BD A ZUNSTOCK</h4>
            </div>

            <div class=\"row\">                  

                    <input type=\"hidden\" name=\"dba_stock_id\" id=\"dba_stock_id\" value=\"\" />

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>DRIVER:</label>                      
                      <input readonly=\"readonly\" type=\"text\" class=\"form-control\" id=\"dba_stock_driver\" name=\"dba_stock_driver\" value=\"pdo_sqlsrv\"> </div> 
                    </div>
              
                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>HOST:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_stock_host\" name=\"dba_stock_host\" 
                      value=\"";
        // line 546
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array"), "host", array()), "html", null, true);
            echo " ";
        }
        echo "\">
                      <span class=\"help-block text-muted\"><small> Ejemplo: 10.12.39.5 o srvdb </small></span>
                       </div> 
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>PORT:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_stock_port\" name=\"dba_stock_port\" 
                      value=\"";
        // line 555
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array"), "port", array()), "html", null, true);
            echo " ";
        }
        echo "\"> 
                      <span class=\"help-block text-muted\"><small> Por Defecto: null </small></span>
                    </div>
                      
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>NOMBRE BASE DATOS:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_stock_dbname\" name=\"dba_stock_dbname\" value=\"";
        // line 564
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array"), "dbname", array()), "html", null, true);
            echo " ";
        }
        echo "\"> </div> 
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>USUARIO:</label>
                      <input type=\"text\" class=\"form-control\" id=\"dba_stock_user\" name=\"dba_stock_user\" value=\"";
        // line 570
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array"), "user", array()), "html", null, true);
            echo " ";
        }
        echo "\"> </div> 
                    </div>

                    <div class=\"form-material m-t-5 col-md-12 col-xs-12\">  
                      <div class=\" form-group required col-md-12 col-xs-12\">
                      <label>CONTRASEÑA:</label>
                      <input type=\"password\" class=\"form-control\" id=\"dba_stock_password\" name=\"dba_stock_password\" value=\"";
        // line 576
        if ($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conexiones"]) ? $context["conexiones"] : null), "STOCK", array(), "array"), "password", array()), "html", null, true);
            echo " ";
        }
        echo "\"> </div> 
                    </div>

            </div>

             ";
        // line 581
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 582
            echo "                <div class=\"card-body\">
                    <button id=\"add_aft_conexion\" class=\"btn btn-primary\"><i class=\"mdi mdi-content-save-all\"></i>Guardar Conexión</button> 
                    <button id=\"probar_aft_conexion\" class=\"btn btn-default\"><i class=\"mdi mdi-check\"></i>Probar Conexión</button> 
                </div> 
              ";
        }
        // line 587
        echo "          </div>
        </div>
      </div>
      
    </div>


   


      <!-- END PORTLET-->
    </div>
           

    </div>


    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
     ";
        // line 610
        $this->loadTemplate("InformaticaBundle:include:footer.html.twig", "InformaticaBundle:Gestion:MaestroGeneral.html.twig", 610)->display($context);
        // line 611
        echo "    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>

  
  

  </div>


";
    }

    // line 624
    public function block_javascripts($context, array $blocks = array())
    {
        // line 625
        echo "
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    

    <!-- Plugin JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>  
     <!--Custom JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/custom.min.js"), "html", null, true);
        echo "\"></script> 
        

    <!-- Footable -->
    <script type=\"text/javascript\" src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js"), "html", null, true);
        echo "\"></script>
    

     <!-- Sweet-Alert  -->
    <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>    
    <script  src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js"), "html", null, true);
        echo "\"></script>

     <!-- Color Picker Plugin JavaScript -->
    <script  src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/colorpicker/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>

 

    <!-- Select -->   
    <script type=\"text/javascript\" src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    

    <script type=\"text/javascript\" charset=\"utf-8\" async defer>

    \$(window).on('load', function() {


       \$(\".table_equipo\").on('click', \".modal_movimiento_equipo\", function(){

        id_equipo = \$(this).attr('data-id');
        \$(\".load\").append(loader('Cargando Áreas de AFT'));

        \$.post('";
        // line 664
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

      \$(\".selectpicker\").selectpicker();     

          responsables();
          locales();
          subareas();
          ccosto();

          // responsables local area
          function responsables(){
          var \$modal = \$('#editor-responsable'),
          \$editor = \$('#form-responsable'),
          \$editorTitle = \$('#editor-title'),
          ft = FooTable.init('#table_responsable', {

            columns: [
                  {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\",\"breakpoints\":\"xs sm\"},
                  {\"name\":\"responsable\",\"title\":\"RESPONSABLE\", \"type\":\"text\",\"breakpoints\":\"xs sm\"},
                  {\"name\":\"local\",\"title\":\"ÁREA/LOCAL\", \"type\": \"select\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"cargo\",\"title\":\"CARGO\", \"type\": \"select\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"id_cargo\",\"title\":\"ID CARGO\", \"visible\": false}, 
                  {\"name\":\"id_local\",\"title\":\"ID LOCAL\", \"type\": \"hiden\", \"visible\": false }
              ],
              rows: \$.post('";
        // line 731
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'rows_responsables'}).fail(function () { alerta_error();}),
              filtering: {
                  enabled: true,
                  placeholder: \"Buscar Responsable..\" 
                },
              editing: {
                enabled: true, 
                editText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span>', 
                addText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\">Adicionar Responsable</span>',  
                deleteText: '<span class=\"mdi mdi-delete-forever\" aria-hidden=\"true\"></span>',
                showText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span> Editar Responsable',
                cancelText: 'Cancelar',

                addRow: function(){
                  \$modal.removeData('row');
                  \$editor[0].reset();
                  \$editorTitle.text('Adicionar Responsable');
                  \$modal.modal('show');
                },              
                editRow: function(row){
                  var values = row.val();
                    \$editor.find('#id').val(values.id);
                    \$editor.find('#responsable').val(values.responsable);
                    \$editor.find('#local').val(values.id_local);
                    \$editor.find('#cargo').val(values.id_cargo);

                    //select cargo o local del responsable en selectpicker
                    \$('select[name=cargo]').val(values.id_cargo);
                    \$('select[name=local]').val(values.id_local);
                    \$(\"select[name=local]\").selectpicker(\"refresh\");
                    \$(\"select[name=cargo]\").selectpicker(\"refresh\");

                  \$modal.data('row', row);
                  \$editorTitle.text('Editar Responsable');
                  \$modal.modal('show');
                },
                deleteRow: function(row){


                   swal({   
                              title: \"Eliminar Responsable?\",   
                              text: \"Seguro desea eliminar el Responsable?\",   
                              type: \"warning\",   
                              showCancelButton: true,   
                              confirmButtonColor: \"#DD6B55\",   
                              confirmButtonText: \"Si, Eliminar!\",   
                              cancelButtonText: \"No, Cancelar!\",   
                              closeOnConfirm: false,   
                              closeOnCancel: false 
                          }, function(isConfirm){   
                              if (isConfirm) {    

                                  var values = row.val();   
                                  \$.post('";
        // line 784
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'delete_responsable', 'id': values.id  })
                                              .done(function (d) {  
                                                row.delete();  

                                                  swal({   
                                                    title: \"Eliminar Responsable!\",   
                                                    text: \"Se eliminó correctamente el responsable!\",  
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
                                      text: \"Eliminar Responsable fue cancelado!\",  
                                      type:\"error\", 
                                      timer: 2500,   
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
            var l =\$(\"select#local option[value='\"+\$editor.find('#local').val()+\"']\").attr('data-id');
            var c =\$(\"select#cargo option[value='\"+\$editor.find('#cargo').val()+\"']\").attr('data-id');            
            var row = \$modal.data('row'),
                values = {
                  id: \$editor.find('#id').val(),     
                  responsable: \$editor.find('#responsable').val(),                  
                  id_local: \$editor.find('#local').val(),
                  id_cargo: \$editor.find('#cargo').val(),
                  local:l,
                  cargo: c
                };

                if (row instanceof FooTable.Row){
                  row.val(values);
                  \$.post('";
        // line 834
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'editar_responsable', 'responsable': values }).fail(function () { alerta_error();});
                }else{

                  \$.post('";
        // line 837
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'add_responsable', 'responsable': values }).done(function(id){

                        values.id = id;
                        ft.rows.add(values);

                  }).fail(function () { alerta_error();});                
                } 
                \$modal.modal('hide');
          });
          }

          // ccosto
          function ccosto(){
            ft = FooTable.init('#table_ccosto', {

              columns: [
                    {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\",\"breakpoints\":\"xs sm\"},
                    {\"name\":\"id_ccosto_aft\",\"title\":\"ID CCOSTO AFT\", \"type\":\"text\",\"breakpoints\":\"xs sm\"},
                    {\"name\":\"codigo\",\"title\":\"CÓDIGO\", \"type\": \"select\", \"breakpoints\":\"xs sm\" },
                    {\"name\":\"area\",\"title\":\"CCOSTO\", \"type\": \"select\", \"breakpoints\":\"xs sm\" },
                    
                ],
                rows: \$.post('";
        // line 859
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'rows_ccosto'}).fail(function () { alerta_error();}),
                filtering: {
                    enabled: true,
                    placeholder: \"Buscar Ccotos..\" 
                  }              
            });
          }

         


          //areas y local
          function locales(){
          var \$modal = \$('#editor-local'),
          \$editor = \$('#form-local'),
          \$editorTitle = \$('#editor-local-title'),
          ft = FooTable.init('#table_area', {

            columns: [
                  {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\",\"breakpoints\":\"xs sm\"},                 
                  {\"name\":\"local2\",\"title\":\"LOCAL\", \"type\": \"select\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"codigo\",\"title\":\"CÓDIGO\", \"type\": \"number\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"area\",\"title\":\"ÁREA\", \"type\": \"select\", \"breakpoints\":\"xs sm\" },
                  {\"name\":\"id_area\",\"title\":\"ID ÁREA\", \"visible\":false }         
              ],
              rows: \$.post('";
        // line 884
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'rows_locales'}).fail(function () { alerta_error();}),
              filtering: {
                  enabled: true,
                  placeholder: \"Buscar Local..\" 
                },
              editing: {
                enabled: true, 
                editText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span>', 
                addText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\">Adicionar Local</span>',  
                deleteText: '<span class=\"mdi mdi-delete-forever\" aria-hidden=\"true\"></span>',
                showText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span> Editar Local', 
                addRow: function(){
                  \$modal.removeData('row');
                  \$editor[0].reset();
                  \$editorTitle.text('Adicionar Local');
                  \$modal.modal('show');
                },               
                editRow: function(row){
                  var values = row.val();
                    \$editor.find('#id').val(values.id);
                    \$editor.find('#local2').val(values.local2);
                    \$editor.find('#codigo').val(values.codigo);

                    \$('select[name=area]').val(values.id_area);
                    \$(\"select[name=area]\").selectpicker(\"refresh\");

                  \$modal.data('row', row);
                  \$editorTitle.text('Editar Local');
                  \$modal.modal('show');
                },
                deleteRow: function(row){


                   swal({   
                              title: \"Eliminar Local?\",   
                              text: \"Seguro desea eliminar el Local?\",   
                              type: \"warning\",   
                              showCancelButton: true,   
                              confirmButtonColor: \"#DD6B55\",   
                              confirmButtonText: \"Si, Eliminar!\",   
                              cancelButtonText: \"No, Cancelar!\",   
                              closeOnConfirm: false,   
                              closeOnCancel: false 
                          }, function(isConfirm){   
                              if (isConfirm) {   


                              var values = row.val();  
                              \$.post('";
        // line 932
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'delete_local', 'id': values.id  })
                                        .done(function (d) {  
                                          row.delete();
                                                  swal({   
                                                    title: \"Eliminar Local!\",   
                                                    text: \"Se eliminó correctamente el Local!\",  
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
                                      text: \"Eliminar Local fue cancelado!\",  
                                      type:\"error\", 
                                      timer: 2500,   
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

            var nombre_area =\$(\"select#area option[value='\"+\$editor.find('#area').val()+\"']\").attr('data-id');

            var row = \$modal.data('row'),
                values = {
                  id: \$editor.find('#id').val(),     
                  local2: \$editor.find('#local2').val(),                  
                  codigo: \$editor.find('#codigo').val(),
                  id_area: \$editor.find('#area').val(),
                  area: nombre_area
                };

                if (row instanceof FooTable.Row){
                  row.val(values);
                  \$.post('";
        // line 980
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'editar_local', 'local': values }).fail(function () { alerta_error();});
                }else{

                  \$.post('";
        // line 983
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'add_local', 'local': values }).done(function(datos){

                      values.id = datos.id;    
                     // for (var i = 0 ; i < datos['locales'].length; i++) {
                          \$(\"#local\").append(\"<option value='\"+datos['local'][i]['id']+\"'>\"+datos['local'][i]['area']+\" / \"+datos['local'][i]['local']+\"</option>\");
                          \$(\"#local3\").append(\"<option value='\"+datos['local'][i]['id']+\"'>\"+datos['local'][i]['area']+\" / \"+datos['local'][i]['local']+\"</option>\");
                    //  }       

                    \$('#local').selectpicker('destroy');     
                    \$('#local').selectpicker('show'); 
                    \$('#local3').selectpicker('destroy');     
                    \$('#local3').selectpicker('show'); 

                    ft.rows.add(values);

                  }).fail(function () { alerta_error();});                
                } 

                \$modal.modal('hide');
          });
          }
          

          //sub areas

          function subareas(){
          var \$modal = \$('#editor-subarea'),
          \$editor = \$('#form-subarea'),
          \$editorTitle = \$('#editor-subarea-title'),
          ft = FooTable.init('#table_subarea', {

            columns: [
                  {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\",\"breakpoints\":\"xs sm\"},                 
                  {\"name\":\"subarea\",\"title\":\"SUBÁREA\",  \"breakpoints\":\"xs sm\" },
                  {\"name\":\"local3\",\"title\":\"AREA\",  \"breakpoints\":\"xs sm\" },
                  {\"name\":\"codigo3\",\"title\":\"CÓDIGO\",  \"breakpoints\":\"xs sm\" },
                  {\"name\":\"id_local3\",\"title\":\"ID LOCAL\", \"visible\":false }         
              ],
              rows: \$.post('";
        // line 1021
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'rows_subarea'}).fail(function () { alerta_error();}),
              filtering: {
                  enabled: true,
                  placeholder: \"Buscar SubÁrea..\" 
                },
              editing: {
                enabled: true, 
                editText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span>', 
                addText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\">Adicionar SubÁrea</span>',  
                deleteText: '<span class=\"mdi mdi-delete-forever\" aria-hidden=\"true\"></span>',
                showText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span> Editar SubÁrea', 
                addRow: function(){
                  \$modal.removeData('row');
                  \$editor[0].reset();
                  \$editorTitle.text('Adicionar SubÁrea');
                  \$modal.modal('show');
                },               
                editRow: function(row){
                  var values = row.val();
                    \$editor.find('#id').val(values.id);
                    \$editor.find('#local3').val(values.id_local3);
                    \$editor.find('#codigo3').val(values.codigo3);
                    \$editor.find('#subarea').val(values.subarea);                  

                  \$modal.data('row', row);
                  \$editorTitle.text('Editar SubÁrea');
                  \$modal.modal('show');
                },
                deleteRow: function(row){


                  swal({   
                              title: \"Eliminar SubÁrea?\",   
                              text: \"Seguro desea eliminar la SubÁrea?\",   
                              type: \"warning\",   
                              showCancelButton: true,   
                              confirmButtonColor: \"#DD6B55\",   
                              confirmButtonText: \"Si, Eliminar!\",   
                              cancelButtonText: \"No, Cancelar!\",   
                              closeOnConfirm: false,   
                              closeOnCancel: false 
                          }, function(isConfirm){   
                              if (isConfirm) {   

                                var values = row.val();  
                                \$.post('";
        // line 1066
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'delete_subarea', 'id': values.id  })
                                        .done(function (d) {  
                                          row.delete();
                                                swal({   
                                                    title: \"Eliminar SubÁrea!\",   
                                                    text: \"Se eliminó correctamente la SubÁrea!\",  
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
                                      text: \"Eliminar SubÁrea fue cancelado!\",  
                                      type:\"error\", 
                                      timer: 2500,   
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

            var nombre_local =\$(\"select#local3 option[value='\"+\$editor.find('#local3').val()+\"']\").attr('data-id');

            var row = \$modal.data('row'),
                values = {
                  id: \$editor.find('#id').val(),     
                  local3: nombre_local, 
                  id_local3: \$editor.find('#local3').val(), 
                  codigo3: \$editor.find(\"#codigo3\").val(),
                  subarea: \$editor.find('#subarea').val(),
                };

                if (row instanceof FooTable.Row){
                  row.val(values);
                  \$.post('";
        // line 1113
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'editar_subarea', 'subarea': values }).fail(function () { alerta_error();});
                }else{

                  \$.post('";
        // line 1116
        echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
        echo "', { 'action': 'add_subarea', 'subarea': values }).done(function(id){

                        values.id = id;
                        ft.rows.add(values);

                  }).fail(function () { alerta_error();});                
                } 

                \$modal.modal('hide');
          });
          }

        function alerta_error(){        
             swal({   
                title: \"Error!\",   
                text: \"Algo salió mal, por favor vuelva a intentarlo\", 
                type: \"warning\",   
                timer: 3000,   
                showConfirmButton: false 
            });
       
      }

         
        \$(\"#add_pieza\").on('click', function(){       
            var pieza = \$(\"#pieza\").val();
            var id_pieza = \$(\"#id_pieza\").val();
            var tipo_pieza = \$('.iradio_flat-red.checked').find('input').val();           

            if (pieza != '' && id_pieza == 'add'){
            var btn = \$(this);            
            btn.attr('disabled','disabled')

            \$(\"#cancel_pieza\").attr('disabled','disabled');
                btn.text('Guardando...');

              \$.post('";
        // line 1152
        echo $this->env->getExtension('routing')->getPath("mastro_pieza");
        echo "', { 'action': 'add_pieza', 'pieza' : pieza, 'tipo_pieza': tipo_pieza  })
                    .done(function (dato) {

                      \$(\"#pieza\").val('');
                      btn.removeAttr('disabled');
                      \$(\"#cancel_pieza\").removeAttr('disabled');
                      btn.text('Adicionar');
                      //adicionar al select 
                      \$(\"#listado_pieza\").append(\"<option data-id='\"+['tipo']+\"' value='\"+dato['id']+\"'>\"+ dato['pieza']+\" </option>\");
                      
                      cancelar_modificar_pieza();

                }).fail(function () {
                  cancelar_modificar_pieza();
                      
                  }); 

            }//modificar pieza
            else if (pieza != '' && id_pieza != ''){

              var btn = \$(this);              

            btn.attr('disabled','disabled');
            \$(\"#cancel_pieza\").attr('disabled','disabled');
            \$(\"#delete_pieza\").attr('disabled','disabled');
            
                btn.text('Guardando...');

              \$.post('";
        // line 1180
        echo $this->env->getExtension('routing')->getPath("mastro_pieza");
        echo "', { 'action': 'modificar_pieza', 'id_pieza': id_pieza ,'pieza' : pieza , 'tipo_pieza': tipo_pieza  })
                    .done(function (dato) {

                      \$(\"#pieza\").val('');
                      btn.removeAttr('disabled');
                      \$(\"#cancel_pieza\").removeAttr('disabled');
                      btn.text('Adicionar');

                      //modificar option del select 
                      \$(\"select#listado_pieza option[value='\"+dato['id']+\"']\").text(dato['pieza']);                      
                      \$(\"select#listado_pieza option[value='\"+dato['id']+\"']\").attr('data-id', dato['pieza']);
                                            
                      cancelar_modificar_pieza();

                }).fail(function () {
                        cancelar_modificar_pieza();
                  });

            }       

      });

      
      \$(\"#listado_pieza\").on('change', function(){
        
        \$(\"#add_pieza\").text('Modificar');
        \$(\"#cancel_pieza\").text('Cancelar Modificar');
        \$(\"#cancel_pieza\").removeAttr('disabled');
        \$(\"#tipo_pieza\").removeAttr('disabled');
        \$(\"#tipo_pieza\").parents('div').removeClass('disabled');

        \$(\"#delete_pieza\").removeAttr('disabled');       

        //data-id pieza
        tipo = \$('select#listado_pieza option:selected').attr('data-id');

        //modificar radiobutton
        \$('li').find('div').removeClass('checked');
        \$('input#tipo_'+tipo).parents('div').addClass('checked');


      

        \$(\"#id_pieza\").val(\$(this).val());
        \$(\"#label_pieza\").empty().text('Modificar: '+\$(\"#listado_pieza option:selected\").text());
        \$(\"#pieza\").val(\$.trim(\$(\"#listado_pieza option:selected\").text()));
        

      });

      \$(\"#cancel_pieza\").bind(\"click\", function(){
        cancelar_modificar_pieza();
      });

      \$(\"#delete_pieza\").bind('click', function(){

         swal({   
                              title: \"Eliminar Pieza\",   
                              text: \"Seguro desea eliminar la Pieza?\",   
                              type: \"warning\",   
                              showCancelButton: true,   
                              confirmButtonColor: \"#DD6B55\",   
                              confirmButtonText: \"Si, Eliminar!\",   
                              cancelButtonText: \"No, Cancelar!\",   
                              closeOnConfirm: false,   
                              closeOnCancel: false 
                          }, function(isConfirm){   
                              if (isConfirm) {   

                                var id_pieza = \$(\"#id_pieza\").val();

                                  \$(\"#delete_pieza\").text('Eliminando ...');
                                  \$(\"#delete_pieza\").attr('disabled','disabled');
                                  \$(\"#add_pieza\").attr('disabled','disabled');
                                  \$(\"#cancel_pieza\").attr('disabled','disabled');

                                  if (id_pieza != ''){

                                    \$.post('";
        // line 1258
        echo $this->env->getExtension('routing')->getPath("mastro_pieza");
        echo "', { 'action': 'eliminar_pieza', 'id_pieza': id_pieza })
                                              .done(function (d) {                      
                                                //modificar option del select 
                                                \$(\"select#listado_pieza option[value='\"+d['id']+\"']\").remove();   
                                                cancelar_modificar_pieza();

                                                swal({   
                                                    title: \"Eliminar Pieza!\",   
                                                    text: \"Se eliminó correctamente la Pieza!\",  
                                                    type:\"success\", 
                                                    timer: 2500,   
                                                    showConfirmButton: false 
                                                  }); 


                                          }).fail(function () {
                                                  cancelar_modificar_pieza();

                                                swal({   
                                                    title: \"Error!\",   
                                                    text: \"No se puede eliminar la pieza porque se encuentra en uso, revisar los equipos que la utilizan!\",  
                                                    type:\"error\", 
                                                    timer: 3500,   
                                                    showConfirmButton: false 
                                                });  
                                            });

                                  }

                                }else {    
                                  cancelar_modificar_pieza();
                                  swal({   
                                      title: \"Cancelar!\",   
                                      text: \"Eliminar Pieza fue cancelado!\",  
                                      type:\"error\", 
                                      timer: 2500,   
                                      showConfirmButton: false 
                                  });
                              }

                               
                          });

        
      });


      \$(\"#add_tipo_equipo\").on('click',  function(){         

            var tipo_equipo = \$(\"#tipo_equipo\").val();

              

            var color = \$(\"#color\").val();

            var id_tipo_equipo = \$(\"#id_tipo_equipo\").val();

            if (tipo_equipo != '' && id_tipo_equipo == 'add'){
            var btn = \$(this);
            btn.attr('disabled','disabled')
            \$(\"#cancel_tipo_equipo\").attr('disabled','disabled');
                btn.text('Guardando...');

              \$.post('";
        // line 1321
        echo $this->env->getExtension('routing')->getPath("maestro_tipo_equipo");
        echo "', { 'action': 'add_tipo_equipo', 'tipo_equipo' : tipo_equipo , 'color': color  })
                    .done(function (d) {

                      \$(\"#tipo_equipo\").val('');
                      btn.removeAttr('disabled');
                      \$(\"#cancel_tipo_equipo\").removeAttr('disabled');
                      btn.text('Adicionar');
                      //adicionar al select 
                      if (d['ocultar'] == 'true'){
                        \$(\"#listado_tipo_equipo\").append(\"<option data-id='YES' value='\"+d['id']+\"'>\"+ d['nombre_equipo']+\" </option>\");
                      }else{
                        \$(\"#listado_tipo_equipo\").append(\"<option data-id='NO' value='\"+d['id']+\"'>\"+ d['nombre_equipo']+\" </option>\");
                      }
                      

                }).fail(function () {
                      
                  }); 

            }//modificar tipo equipo
            else if (tipo_equipo != '' && id_tipo_equipo != ''){


              var btn = \$(this);
              if (\$(\"#tipo_equipo_ocultar\").parents('div').hasClass('checked') == true){
                ocultar = true;
              }else{
                ocultar = false;
              }

            btn.attr('disabled','disabled');
            \$(\"#cancel_tipo_equipo\").attr('disabled','disabled');
            \$(\"#delete_tipo_equipo\").attr('disabled','disabled');
                btn.text('Guardando...');

              \$.post('";
        // line 1356
        echo $this->env->getExtension('routing')->getPath("maestro_tipo_equipo");
        echo "', { 'action': 'modificar_tipo_equipo', 'id_tipo_equipo': id_tipo_equipo ,'tipo_equipo' : tipo_equipo , 'ocultar': ocultar , 'color': color })
                    .done(function (d) {

                      \$(\"#tipo_equipo\").val('');
                      btn.removeAttr('disabled');
                      \$(\"#cancel_tipo_equipo\").removeAttr('disabled');
                      btn.text('Adicionar');

                      //modificar option del select 
                      \$(\"select#listado_tipo_equipo option[value='\"+d['id']+\"']\").text(d['nombre_equipo']);

                      \$(\"select#listado_tipo_equipo option[value='\"+d['id']+\"']\").attr('data-name', d['color']);
                      
                      if (d['ocultar'] == 'true'){
                        \$(\"select#listado_tipo_equipo option[value='\"+d['id']+\"']\").attr('data-id', 'YES');
                      }else if (d['ocultar'] == 'false' ){
                        \$(\"select#listado_tipo_equipo option[value='\"+d['id']+\"']\").attr('data-id', 'NO');
                      }
                      
                      cancelar_modificar_tipo_equipo();

                }).fail(function () {
                  cancelar_modificar_tipo_equipo();
                      
                  });

            }       

      });

      \$(\"#listado_tipo_equipo\").on('change', function(){
        
        \$(\"#add_tipo_equipo\").text('Modificar');
        \$(\"#cancel_tipo_equipo\").text('Cancelar Modificar');
        \$(\"#tipo_equipo_ocultar\").removeAttr('disabled');
        

        \$(\"#tipo_equipo_ocultar\").parents('div').removeClass('disabled'); 

        \$(\"#delete_tipo_equipo\").removeAttr('disabled');       

        //data-id tipo equipo
        ocultar = \$('select#listado_tipo_equipo option:selected').attr('data-id');
        secolor = \$('select#listado_tipo_equipo option:selected').attr('data-name');
        
        if(ocultar == 'YES'){

          if( \$(\"#tipo_equipo_ocultar\").parents('div').hasClass('checked') == false){
            \$(\"#tipo_equipo_ocultar\").parents('div').addClass('checked');
          }

        }else if(ocultar == 'NO'){

          if( \$(\"#tipo_equipo_ocultar\").parents('div').hasClass('checked') == true){
                  \$(\"#tipo_equipo_ocultar\").parents('div').removeClass('checked'); 
              } 
        }     
        
        \$('.cp7').colorpicker({ 
          color: ''+secolor , 
          container: true, 
          inline: true, 
        }).on('changeColor.colorpicker', function(event){
          \$('#color').val(event.color.toHex()); 

      });

        \$('.cp7').colorpicker('setValue', secolor);
      
 


        \$(\"#id_tipo_equipo\").val(\$(this).val());
        \$(\"#label_tipo_equipo\").empty().text('Modificar: '+\$(\"#listado_tipo_equipo option:selected\").text());
        \$(\"#tipo_equipo\").val(\$.trim(\$(\"#listado_tipo_equipo option:selected\").text()));
        

      });

      \$(\"#cancel_tipo_equipo\").bind(\"click\", function(){
        cancelar_modificar_tipo_equipo();
      });


      \$(\"#delete_tipo_equipo\").bind('click', function(){
       

         swal({   
                              title: \"Eliminar Tipo Equipo\",   
                              text: \"Seguro desea eliminar el Tipo Equipo?\",   
                              type: \"warning\",   
                              showCancelButton: true,   
                              confirmButtonColor: \"#DD6B55\",   
                              confirmButtonText: \"Si, Eliminar!\",   
                              cancelButtonText: \"No, Cancelar!\",   
                              closeOnConfirm: false,   
                              closeOnCancel: false 
                          }, function(isConfirm){   
                              if (isConfirm) {   
                                var id_tipo_equipo = \$(\"#id_tipo_equipo\").val();

                                \$(\"#delete_tipo_equipo\").text('Eliminando ...');
                                \$(\"#delete_tipo_equipo\").attr('disabled','disabled');
                                \$(\"#add_tipo_equipo\").attr('disabled','disabled');
                                \$(\"#cancel_tipo_equipo\").attr('disabled','disabled');

                                if (id_tipo_equipo != ''){

                                  \$.post('";
        // line 1464
        echo $this->env->getExtension('routing')->getPath("maestro_tipo_equipo");
        echo "', { 'action': 'eliminar_tipo_equipo', 'id_tipo_equipo': id_tipo_equipo })
                                            .done(function (d) {                      
                                              //modificar option del select 
                                              \$(\"select#listado_tipo_equipo option[value='\"+d['id']+\"']\").remove();   
                                              cancelar_modificar_tipo_equipo();
                                              swal({   
                                                    title: \"Eliminar Tipo Equipo!\",   
                                                    text: \"Se eliminó correctamente el Tipo Equipo!\",  
                                                    type:\"success\", 
                                                    timer: 2500,   
                                                    showConfirmButton: false 
                                                  }); 

                                        }).fail(function () {
                                                cancelar_modificar_tipo_equipo();
                                                swal({   
                                                    title: \"Error!\",   
                                                    text: \"No se puede eliminar el tipo equipo porque se encuentra en uso, revisar los equipos que lo utilizan!\",  
                                                    type:\"error\", 
                                                    timer: 3500,   
                                                    showConfirmButton: false 
                                                });
                                          });
                                }     
                                }else {    
                                  cancelar_modificar_tipo_equipo();  
                                  swal({   
                                      title: \"Cancelar!\",   
                                      text: \"Eliminar Pieza fue cancelado!\",  
                                      type:\"error\", 
                                      timer: 2500,   
                                      showConfirmButton: false 
                                  });

                                  
                              }

                               
                          });

        

      });

      //cancelar modificar
      function cancelar_modificar_tipo_equipo(){
        \$(\"#add_tipo_equipo\").text('Adicionar');
        \$(\"#add_tipo_equipo\").removeAttr('disabled');

        \$(\"#delete_tipo_equipo\").text('Eliminar');
        \$(\"#delete_tipo_equipo\").attr('disabled','disabled');
        
        \$(\"#cancel_tipo_equipo\").text('Cancelar');
        \$(\"#cancel_tipo_equipo\").removeAttr('disabled');


        \$(\"select#listado_tipo_equipo option\").removeAttr(\"selected\");

        \$(\"#tipo_equipo_ocultar\").removeAttr('data-id');
        \$(\"#tipo_equipo_ocultar\").attr('disabled','disabled');        

        \$(\"#tipo_equipo_ocultar\").parents('div').addClass('disabled');

        if( \$(\"#tipo_equipo_ocultar\").parents('div').hasClass('checked') == true){
                \$(\"#tipo_equipo_ocultar\").parents('div').removeAttr('checked'); 
            }

        \$(\"#id_tipo_equipo\").val('add');
        \$(\"#label_tipo_equipo\").empty('');
        \$(\"#tipo_equipo\").val('');

        //color picker
        \$(\".cp7\").colorpicker('destroy');
      }

      //cancelar modificar
      function cancelar_modificar_pieza(){
        \$(\"#add_pieza\").text('Adicionar');
        \$(\"#add_pieza\").removeAttr('disabled');

        \$(\"#delete_pieza\").text('Eliminar');
        \$(\"#delete_pieza\").attr('disabled','disabled');
        
        \$(\"#cancel_pieza\").text('Cancelar');
        \$(\"#cancel_pieza\").removeAttr('disabled');

        \$(\"select#listado_pieza option\").removeAttr(\"selected\");
        \$(\"#delete_tipo_equipo\").attr('disabled','disabled');

        //modificar radiobutton
        \$('li').find('div').removeClass('checked');
        \$('input#tipo_1').parents('div').addClass('checked');

        \$(\"#id_pieza\").val('add');
        \$(\"#label_pieza\").empty('');
        \$(\"#pieza\").val('');
      }



      //guardar parametros de la conexion 

       \$(\"#add_aft_conexion\").on('click', function(){   

            var id = \$(\"#dba_aft_id\").val();
            var host = \$(\"#dba_aft_host\").val();
            var port = \$(\"#dba_aft_port\").val();
            var dbname = \$(\"#dba_aft_dbname\").val(); 
            var user = \$(\"#dba_aft_user\").val();   
            var password = \$(\"#dba_aft_password\").val();      

            if (\$.trim(host)!= '' && \$.trim(dbname) != '' && \$.trim(user) != '' && \$.trim(password) != '' ){
           
              \$.post('";
        // line 1577
        echo $this->env->getExtension('routing')->getPath("conexion_db");
        echo "', { 
                    'action': 'conexion_aft', 
                    'id' : id, 
                    'host': \$.trim(host),
                    'port': \$.trim(port),  
                    'dbname': \$.trim(dbname), 
                    'user': \$.trim(user),
                    'password': \$.trim(password), 
                    'tipo': 'AFT'   

                  }).done(function (d) {   

                   
                    swal({   
                        title: \"Guardando\",   
                        text: \"Se guardó corectamente la conexión\",  
                        type:\"success\", 
                        timer: 2500,   
                        showConfirmButton: false 
                    }); 
                                

                }).fail(function () {
                  //existe un error al guardar
                  alerta_error(); 
                });
            }else{

              swal(\"Existen Campos Vacios!\", \"Revise que no falten datos por insertar.\");
               
          }

      });

       \$(\"#add_stock_conexion\").on('click', function(){   

            var id = \$(\"#dba_stock_id\").val();
            var host = \$(\"#dba_stock_host\").val();
            var port = \$(\"#dba_stock_port\").val();
            var dbname = \$(\"#dba_stock_dbname\").val(); 
            var user = \$(\"#dba_stock_user\").val();   
            var password = \$(\"#dba_stock_password\").val();      

            if (\$.trim(host)!= '' && \$.trim(dbname) != '' && \$.trim(user) != '' && \$.trim(password) != '' ){
           
              \$.post('";
        // line 1622
        echo $this->env->getExtension('routing')->getPath("conexion_db");
        echo "', { 
                    'action': 'conexion_stock', 
                    'id' : id, 
                    'host': \$.trim(host),
                    'port': \$.trim(port),  
                    'dbname': \$.trim(dbname), 
                    'user': \$.trim(user),
                    'password': \$.trim(password), 
                    'tipo': 'STOCK'   

                  }).done(function (d) {   

                   
                    swal({   
                        title: \"Guardando\",   
                        text: \"Se guardó corectamente la conexión\",  
                        type:\"success\", 
                        timer: 2500,   
                        showConfirmButton: false 
                    }); 
                                

                }).fail(function () {
                  //existe un error al guardar
                  alerta_error(); 
                });
            }else{

              swal(\"Existen Campos Vacios!\", \"Revise que no falten datos por insertar.\")
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


        // end document
      });  
        


              
      

   </script>

";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:Gestion:MaestroGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2011 => 1622,  1963 => 1577,  1847 => 1464,  1736 => 1356,  1698 => 1321,  1632 => 1258,  1551 => 1180,  1520 => 1152,  1481 => 1116,  1475 => 1113,  1425 => 1066,  1377 => 1021,  1336 => 983,  1330 => 980,  1279 => 932,  1228 => 884,  1200 => 859,  1175 => 837,  1169 => 834,  1116 => 784,  1060 => 731,  990 => 664,  974 => 651,  970 => 650,  966 => 649,  958 => 644,  952 => 641,  948 => 640,  941 => 636,  934 => 632,  929 => 630,  922 => 625,  919 => 624,  904 => 611,  902 => 610,  877 => 587,  870 => 582,  868 => 581,  856 => 576,  843 => 570,  830 => 564,  814 => 555,  798 => 546,  771 => 521,  764 => 516,  762 => 515,  750 => 510,  737 => 504,  724 => 498,  708 => 489,  693 => 481,  675 => 470,  544 => 341,  536 => 336,  534 => 335,  527 => 330,  514 => 329,  510 => 328,  457 => 277,  449 => 271,  447 => 270,  438 => 263,  419 => 262,  415 => 261,  335 => 183,  319 => 182,  313 => 181,  274 => 144,  264 => 143,  258 => 142,  205 => 91,  193 => 90,  187 => 89,  177 => 81,  161 => 80,  155 => 79,  127 => 54,  114 => 43,  111 => 42,  109 => 41,  102 => 37,  99 => 36,  96 => 35,  87 => 27,  83 => 26,  79 => 25,  72 => 21,  68 => 20,  62 => 17,  54 => 12,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::base_pro.html.twig' %}*/
/* */
/* {% block title %} Maestros Generales {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- BEGIN PAGE LEVEL STYLES -->*/
/* */
/* */
/*     */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/floating-label.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css')}}"/>*/
/* */
/* */
/* */
/*     <!-- Color picker plugins css -->*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/colorpicker/colorpicker.css')}}"/>*/
/* */
/*   <!--alerts CSS -->*/
/*     <link href="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css')}}"/>*/
/* */
/* */
/*  <!-- select css -->*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/select2/dist/css/select2.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.css')}}"/>*/
/*    */
/*    */
/*     <!-- END PAGE LEVEL STYLES -->*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*   {{ include('InformaticaBundle:include:preloder.html.twig', {'loader_label':'Maestro General' } ) }}*/
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
/*         {{ include('InformaticaBundle:include:page_titles.html.twig', {'titulo_pagina':'Maestro General', 'session': 'Maestros Generales' } ) }}                          */
/*                         */
/*     <div class="row">*/
/*           */
/* */
/*         <!-- MODAL EDITOR responsable  -->*/
/*           <div class="modal fade" id="editor-responsable" tabindex="-1" role="dialog" aria-labelledby="editor-responsable-title">*/
/*   */
/*           <div class="modal-dialog modal-lg" role="document">*/
/*             <form class="modal-content form-horizontal " id="form-responsable">*/
/*               <div class="modal-header">*/
/*                 <h4 class="modal-title" id="editor-title">RESPONSABLES</h4>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*                 */
/*               </div>              */
/* */
/*               <div class="modal-body">*/
/* */
/*                 <input type="number" id="id" name="id" hidden="hidden" />*/
/*                 <input type="number" id="id_local" name="id_local" hidden="hidden" />*/
/*                 <input type="number" id="id_cargo" name="id_cargo" hidden="hidden" />*/
/* */
/*                 <div class="form-group required col-md-12 col-xs-12 m-t-20">*/
/*                     <label for="local">SELECIONE ÁREA / LOCAL:</label>*/
/*                     <select class="selectpicker"  data-live-search="true" id="local" name="local" required>   */
/*                     {% for l in locales %}  */
/*                         <option data-id="{{l.area}} / {{l.local}}" value="{{l.id}}"> {{l.area}} / {{l.local}} </option>                      */
/*                     {% endfor %}   */
/*                     </select>*/
/*                     */
/*                 </div>*/
/* */
/*                 <div class="form-group required col-md-12 col-xs-12">*/
/*                      <label for="cargo">SELECIONE EL CARGO:</label>*/
/*                     <select class="selectpicker"  data-live-search="true" id="cargo" name="cargo" required>   */
/*                     {% for c in cargos %}  */
/*                         <option data-id="{{c.cargo}}" value="{{c.id}}"> {{c.cargo}} </option>                      */
/*                     {% endfor %}   */
/*                     </select>*/
/*                    */
/*                 </div>*/
/* */
/*                 <div class="form-material required col-md-12 col-xs-12">*/
/*                       <label for="responsable">ESCRIBA NOMBRE DEL RESPONSABLE:</label>*/
/*                       <input class="form-control" id="responsable" name="responsable" type="text"/>                      */
/*                 </div>     */
/* */
/*               </div>*/
/*               */
/*               <div class="modal-footer">*/
/*                 <button type="submit" class="btn btn-primary">Salvar Cambios</button>*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*               </div>        */
/*             </form>          */
/*           </div>  */
/*         </div>*/
/*         <!-- end MODAL EDITOR responsable -->*/
/* */
/*          <!-- MODAL EDITOR local  -->*/
/*         <div class="modal fade" id="editor-local" tabindex="-1" role="dialog" aria-labelledby="editor-local-title">*/
/*   */
/*           <div class="modal-dialog modal-lg" role="document">*/
/*             <form class="modal-content form-horizontal " id="form-local">*/
/*               <div class="modal-header">*/
/*                 <h4 class="modal-title" id="editor-local-title">LOCALES</h4>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*                 */
/*               </div>              */
/* */
/*               <div class="modal-body">*/
/* */
/*                 <input type="number" id="id" name="id" hidden="hidden" />*/
/*                 <input type="number" id="id_area" name="id_area" hidden="hidden" />*/
/* */
/*                 <div class="required col-md-12 col-xs-12 form-material">*/
/*                       <label for="local2">ESCRIBA EL NOMBRE DEL ÁREA:</label>*/
/*                       <input class="form-control" id="local2" name="local2" type="text" required />                      */
/*                 </div>  */
/* */
/*                 <div class="required col-md-12 col-xs-12 form-material">*/
/*                       <label for="codigo">ESCRIBE EL CÓDIGO DEL ÁREA:</label>*/
/*                       <input class="form-control" id="codigo" name="codigo" type="text"/>*/
/*                      */
/*                 </div> */
/* */
/*                 <div class="form-group required col-md-12 col-xs-12 m-t-20">*/
/*                     <label for="local">SELECIONE EL C.COSTO:</label>*/
/*                     <select class="selectpicker"  data-live-search="true" id="area" name="area" required>   */
/*                     {% for a in areas %}  */
/*                         <option value="{{a.id}}"> {{a.area}} </option>                      */
/*                     {% endfor %}   */
/*                     </select>*/
/*                     */
/*                 </div>                   */
/* */
/*               </div>*/
/*               */
/*               <div class="modal-footer">*/
/*                 <button type="submit" class="btn btn-primary">Salvar Cambios</button>*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*               </div>        */
/*             </form>          */
/*           </div>  */
/*         </div>*/
/*         <!-- end MODAL EDITOR local -->*/
/* */
/* */
/*         <!-- MODAL EDITOR local  -->*/
/*         <div class="modal fade" id="editor-subarea" tabindex="-1" role="dialog" aria-labelledby="editor-subarea-title">*/
/*   */
/*           <div class="modal-dialog modal-lg" role="document">*/
/*             <form class="modal-content form-horizontal " id="form-subarea">*/
/*               <div class="modal-header">*/
/*                 <h4 class="modal-title" id="editor-subarea-title">Sub Área</h4>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*                 */
/*               </div>              */
/* */
/*               <div class="modal-body">*/
/* */
/*                 <input type="number" id="id" name="id" hidden="hidden" />*/
/* */
/* */
/* */
/*                 <div class="form-group required col-md-12 col-xs-12">*/
/*                   <label for="local">SELECIONE EL ÁREA:</label> */
/*                   <select class="selectpicker"  data-live-search="true" id="local3" name="local3" required>   */
/*                     {% for l in locales %}  */
/*                         <option data-id="{{l.area}} / {{l.local}}" value="{{l.id}}"> {{l.area}} / {{l.local}} </option>                      */
/*                     {% endfor %}   */
/*                   </select>*/
/*                   */
/*                                       */
/*                 </div>  */
/* */
/*                 <div class="form-group required col-md-12 col-xs-12 form-material">*/
/*                       <label for="subarea">ESCRIBE EL NOMBRE DE LA SUBÁREA:</label>*/
/*                       <input class="form-control" id="subarea" name="subarea" type="text" required/>                      */
/*                 </div>  */
/* */
/*                 <div class="form-group required col-md-12 col-xs-12 form-material">*/
/*                       <label for="codigo3">ESCRIBE EL CÓDIGO DE LA SUBÁREA:</label>*/
/*                       <input class="form-control" id="codigo3" name="codigo3" type="text"/>                     */
/*                 </div>             */
/*               </div>*/
/*               */
/*               <div class="modal-footer">*/
/*                 <button type="submit" class="btn btn-primary">Salvar Cambios</button>*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*               </div>        */
/*             </form>          */
/*           </div>  */
/*         </div>*/
/*         <!-- end MODAL EDITOR local -->*/
/* */
/*     </div>*/
/* */
/*     */
/* */
/*     <div class="row">*/
/*       <div class="col-md-6 col-sm-12">*/
/*         <div class="card">            */
/*           <div class="card-body">  */
/*             <div class="d-flex">                  */
/*               <h4 id="card-title-mov" class="card-title"> <span class="lstick"></span>DEFINICIÓN Tipo Equipo</h4>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*               <div class="col-xs-12 col-md-6">*/
/*                   <div class="row">*/
/*                     <div class="form-material m-t-10 col-md-12 col-xs-12">*/
/*                       */
/*                        */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>Escribe Tipo Equipo.</label>*/
/*                       <input type="hidden" name="id_tipo_equipo" id="id_tipo_equipo" value="add" />*/
/*                       <input type="text" class="form-control"  id="tipo_equipo" name="tipo_equipo"> </div> */
/*                     </div>*/
/* */
/* */
/*                     <div class="m-t-10 col-md-10 col-xs-10">*/
/* */
/*                       <div id="cp7" class="cp7" class="inl-bl"></div>*/
/* */
/*                       <input id="color" type="text" hidden="hidden" /> */
/*                     </div>*/
/* */
/*                      <div class="input-group required col-md-12 col-xs-12">*/
/*                   <ul class="icheck-list">*/
/*                     <li>*/
/*                         <input type="checkbox" class="check" id="tipo_equipo_ocultar" name="tipo_equipo_ocultar" data-checkbox="icheckbox_flat-red" disabled="">*/
/*                         <label for="tipo_equipo_ocultar">Ocultar TE (Desuso)</label>*/
/*                     </li>                                       */
/*                   </ul> */
/*                 </div>*/
/* */
/*                   </div>*/
/*               </div>*/
/* */
/* */
/*               <div class="col-xs-12 col-md-6">*/
/* */
/*                 <div class="row">*/
/*                   <div class="form-material m-t-20 col-md-12 col-xs-12">*/
/* */
/*                 <select size="10" class="form-control p-0" id="listado_tipo_equipo" name="listado_tipo_equipo" required>   */
/*                   {% for tipo in tipo_equipos %}*/
/*                       <option data-name="{{tipo.color}}" data-id="{% if tipo.ocultar %}YES{% else %}NO{% endif %}" value="{{ tipo.id }}"> {{ tipo.tipoEquipo }}</option>*/
/*                   {% endfor %}  */
/*                 </select><span class="bar"></span>                   */
/* */
/*                </div>*/
/*                 </div>*/
/*               </div>*/
/*                                          */
/*               {% if is_granted('ROLE_ADMIN') %}*/
/*                 <div class="card-body botones_tipo_equipo">*/
/*                   <button id="add_tipo_equipo" class="btn btn-primary">Adicionar</button> */
/*                   <button id="delete_tipo_equipo" class="btn btn-danger" disabled="disabled">Eliminar</button>            */
/*                   <button id="cancel_tipo_equipo" class="btn default">Cancelar</button>*/
/*                 </div>*/
/*               {% endif %}*/
/* */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-6 col-sm-12">*/
/*         <div class="card">            */
/*             <div class="card-body">  */
/*               <div class="d-flex">                  */
/*                 <h4 id="card-title-mov" class="card-title"> <span class="lstick"></span>DEFINICIÓN Piezas</h4>*/
/*               </div>*/
/* */
/*               <div class="row">*/
/*                 <div class="form-material m-t-20 col-md-6 col-xs-12">*/
/* */
/* */
/*                   <div class="form-group">*/
/*                     <label>Escribe Tipo Pieza</label>*/
/*                     <input type="hidden" name="id_pieza" id="id_pieza" value="add" />*/
/*                     <input type="text" class="form-control" id="pieza" name="pieza">*/
/*                   </div>*/
/* */
/* */
/*                   <div class="form-group">                     */
/*                       <div class="input-group">    */
/*                           <label for="tipo_pieza">Tipo Pieza</label>                                                */
/*                           <ul class="icheck-list">*/
/*                               <li>*/
/*                                   <input value="1" type="radio" class="check" id="tipo_1" name="radio_pieza" checked data-radio="iradio_flat-red">*/
/*                                   <label for="tipo_1">Dispositivo Interno</label>*/
/*                               </li>*/
/*                               <li>*/
/*                                   <input value="0" type="radio" class="check" id="tipo_0" name="radio_pieza" data-radio="iradio_flat-red">*/
/*                                   <label for="tipo_0">Dispositivo Externo</label>*/
/*                               </li>*/
/*                                                             */
/*                               <li>*/
/*                                   <input value="2" type="radio" class="check" id="tipo_2" name="radio_pieza" data-radio="iradio_flat-red">*/
/*                                   <label for="tipo_2">Dispositivo Asociado</label>*/
/*                               </li>                              */
/*                               */
/*                           </ul>*/
/*                       </div>*/
/*                   </div>*/
/*                 */
/*                 </div>*/
/* */
/* */
/*               <div class="form-material m-t-20 col-md-6 col-xs-12">*/
/* */
/*                 <select size="10" class="form-control p-0" id="listado_pieza" name="listado_pieza" required>   */
/*                     {% for pieza in piezas %}*/
/*                       <option data-id="{{pieza.tipo }}" value="{{ pieza.id }}"> {{ pieza.pieza }}</option>*/
/*                     {% endfor %} */
/*                 </select><span class="bar"></span>                   */
/* */
/*               </div>*/
/* */
/*                 {% if is_granted('ROLE_ADMIN') %}*/
/*                 <div class="card-body">*/
/*                     <button id="add_pieza" class="btn btn-primary">Adicionar</button> */
/*                     <button id="delete_pieza" class="btn btn-danger" disabled="disabled">Eliminar</button>             */
/*                     <button id="cancel_pieza" class="btn btn-default">Cancelar</button>*/
/*                 </div> */
/*                 {% endif %}   */
/*             </div>*/
/*           </div>                     */
/*         </div> */
/*     </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="row">*/
/*        <div class="col-lg-12 col-xlg-12 col-md-12">*/
/*                         <div class="card">*/
/*                             <!-- Nav tabs -->*/
/*                             <ul class="nav nav-tabs profile-tab" role="tablist">*/
/*                                 <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#responsables" role="tab">RESPONSABLES</a> </li>*/
/*                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ccosto" role="tab">CCOSTO</a> </li>*/
/*                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#areas" role="tab">ÁREAS</a> </li>*/
/*                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#subareas" role="tab">SUB ÁREAS</a> </li>*/
/*                             </ul>*/
/*                             <!-- Tab panes -->*/
/*                             <div class="tab-content">*/
/*                                 <div class="tab-pane active" id="responsables" role="tabpanel">*/
/*                                     <div class="card-body">*/
/*                                          <div class="row">*/
/*                                           <div class="col-md-12 col-sm-12">*/
/* */
/*                                             <div class="card">            */
/*                                               <div class="card-body">                                                 */
/*                                                 <table id="table_responsable" class="table table-hover table_responsable" data-paging="true" data-filtering="true" data-sorting="true" >  */
/*                                    */
/*                                                 </table>  */
/*                                                              */
/*                                               </div>*/
/*                                             </div>            */
/*                                           </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!--second tab-->*/
/*                                 <div class="tab-pane" id="ccosto" role="tabpanel">*/
/*                                     <div class="card-body">*/
/* */
/*                                       <div class="row">*/
/*                                           <div class="col-md-12 col-sm-12">*/
/* */
/*                                             <div class="card">            */
/*                                               <div class="card-body">                                                  */
/*                                                 <table id="table_ccosto" class="table table-hover table_ccosto" data-paging="true" data-filtering="true" data-sorting="true" >  */
/* */
/*                                                   <div class="d-flex">*/
/*                                                     <div class="mr-auto">*/
/*                                                       <div class="form-group">*/
/*                                                         <button id="sincronizar_ccosto" class="btn btn-primary btn-sm"><i class="mdi mdi-plus" aria-hidden="true"></i>Sincronizar con AFT</button>*/
/*                                                       </div>                                 */
/* */
/*                                                     </div>*/
/*                                                   </div>*/
/*                                    */
/*                                                 </table>  */
/*                                                              */
/*                                               </div>*/
/*                                             </div>            */
/*                                           </div>*/
/*                                         </div>*/
/*                                         */
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <!--second tab-->*/
/*                                 <div class="tab-pane" id="areas" role="tabpanel">*/
/*                                     <div class="card-body">*/
/* */
/*                                       <div class="row">*/
/*                                           <div class="col-md-12 col-sm-12">*/
/* */
/*                                             <div class="card">            */
/*                                               <div class="card-body">                                                  */
/*                                                 <table id="table_area" class="table table-hover table_area" data-paging="true" data-filtering="true" data-sorting="true" > */
/* */
/*                                                   <div class="d-flex">*/
/*                                                     <div class="mr-auto">*/
/*                                                         <button data-toggle="tooltip" title="Add Áreas de ZUNAFT" id="modal_add_areas" class="btn btn-primary btn-sm"><i class="mdi mdi-plus" aria-hidden="true"></i>Adicionar Áreas</button>                                                           */
/*                                                     </div>*/
/*                                                   </div> */
/*                                    */
/*                                                 </table>  */
/*                                                              */
/*                                               </div>*/
/*                                             </div>            */
/*                                           </div>*/
/*                                         </div>*/
/*                                         */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="tab-pane" id="subareas" role="tabpanel">*/
/*                                     <div class="card-body">*/
/*                                        */
/*                                       <div class="row">*/
/*                                           <div class="col-md-12 col-sm-12">*/
/* */
/*                                             <div class="card">            */
/*                                               <div class="card-body">                                                 */
/*                                                 <table id="table_subarea" class="table table-hover table_subarea" data-paging="true" data-filtering="true" data-sorting="true" >  */
/*                                    */
/*                                                 </table>  */
/*                                                              */
/*                                               </div>*/
/*                                             </div>            */
/*                                           </div>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*     </div>*/
/*     */
/* */
/* */
/*      <div class="row">*/
/*       <div class="col-md-6 col-sm-12">*/
/*         <div class="card">            */
/*           <div class="card-body">  */
/*             <div class="d-flex">                  */
/*               <h4 id="card-title-mov" class="card-title"> <span class="lstick"></span>CONEXIÓN DE BD A ZUNAFT</h4>*/
/*             </div>*/
/* */
/*             <div class="row">                  */
/* */
/*                     <input type="hidden" name="dba_aft_id" id="dba_aft_id" value="{%if conexiones['AFT'] is defined %} {{conexiones['AFT'].id }} {% endif %}" />*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>DRIVER:</label>                      */
/*                       <input readonly="readonly" type="text" class="form-control" id="dba_aft_driver" name="dba_aft_driver" value="pdo_sqlsrv"> </div> */
/*                     </div>*/
/*               */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>HOST:</label>*/
/*                       <input type="text" class="form-control" id="dba_aft_host" name="dba_aft_host" value="{%if conexiones['AFT'] is defined %} {{conexiones['AFT'].host | trim(' ') }} {% endif %}">*/
/*                       <span class="help-block text-muted"><small> Ejemplo: 10.12.39.5 o srvdb </small></span>*/
/*                        </div> */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>PORT:</label>*/
/*                       <input type="text" class="form-control" id="dba_aft_port" name="dba_aft_port" value="{%if conexiones['AFT'] is defined %} {{conexiones['AFT'].port | trim(' ') }} {% endif %}"> */
/*                       <span class="help-block text-muted"><small> Por Defecto: null </small></span>*/
/*                     </div>*/
/*                       */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>NOMBRE BASE DATOS:</label>*/
/*                       <input type="text" class="form-control" id="dba_aft_dbname" name="dba_aft_dbname" value="{%if conexiones['AFT'] is defined %} {{conexiones['AFT'].dbname | trim(' ') }} {% endif %}"> </div> */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>USUARIO:</label>*/
/*                       <input type="text" class="form-control" id="dba_aft_user" name="dba_aft_user" value="{%if conexiones['AFT'] is defined %} {{conexiones['AFT'].user | trim(' ') }} {% endif %}"> </div> */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>CONTRASEÑA:</label>*/
/*                       <input type="password" class="form-control" id="dba_aft_password" name="dba_aft_password" value="{%if conexiones['AFT'] is defined %} {{conexiones['AFT'].password | trim(' ') }} {% endif %}"> </div> */
/*                     </div>*/
/* */
/*             </div>*/
/* */
/*              {% if is_granted('ROLE_ADMIN') %}*/
/*                 <div class="card-body">*/
/*                     <button id="add_aft_conexion" class="btn btn-primary"><i class="mdi mdi-content-save-all"></i>Guardar Conexión</button> */
/*                     <button id="probar_aft_conexion" class="btn btn-default"><i class="mdi mdi-check"></i>Probar Conexión</button> */
/*                 </div> */
/*               {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="col-md-6 col-sm-12">*/
/*         <div class="card">            */
/*           <div class="card-body">  */
/*             <div class="d-flex">                  */
/*               <h4 id="card-title-mov" class="card-title"> <span class="lstick"></span>CONEXIÓN DE BD A ZUNSTOCK</h4>*/
/*             </div>*/
/* */
/*             <div class="row">                  */
/* */
/*                     <input type="hidden" name="dba_stock_id" id="dba_stock_id" value="" />*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>DRIVER:</label>                      */
/*                       <input readonly="readonly" type="text" class="form-control" id="dba_stock_driver" name="dba_stock_driver" value="pdo_sqlsrv"> </div> */
/*                     </div>*/
/*               */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>HOST:</label>*/
/*                       <input type="text" class="form-control" id="dba_stock_host" name="dba_stock_host" */
/*                       value="{%if conexiones['STOCK'] is defined %} {{conexiones['STOCK'].host }} {% endif %}">*/
/*                       <span class="help-block text-muted"><small> Ejemplo: 10.12.39.5 o srvdb </small></span>*/
/*                        </div> */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>PORT:</label>*/
/*                       <input type="text" class="form-control" id="dba_stock_port" name="dba_stock_port" */
/*                       value="{%if conexiones['STOCK'] is defined %} {{conexiones['STOCK'].port }} {% endif %}"> */
/*                       <span class="help-block text-muted"><small> Por Defecto: null </small></span>*/
/*                     </div>*/
/*                       */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>NOMBRE BASE DATOS:</label>*/
/*                       <input type="text" class="form-control" id="dba_stock_dbname" name="dba_stock_dbname" value="{%if conexiones['STOCK'] is defined %} {{conexiones['STOCK'].dbname }} {% endif %}"> </div> */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>USUARIO:</label>*/
/*                       <input type="text" class="form-control" id="dba_stock_user" name="dba_stock_user" value="{%if conexiones['STOCK'] is defined %} {{conexiones['STOCK'].user }} {% endif %}"> </div> */
/*                     </div>*/
/* */
/*                     <div class="form-material m-t-5 col-md-12 col-xs-12">  */
/*                       <div class=" form-group required col-md-12 col-xs-12">*/
/*                       <label>CONTRASEÑA:</label>*/
/*                       <input type="password" class="form-control" id="dba_stock_password" name="dba_stock_password" value="{%if conexiones['STOCK'] is defined %} {{conexiones['STOCK'].password }} {% endif %}"> </div> */
/*                     </div>*/
/* */
/*             </div>*/
/* */
/*              {% if is_granted('ROLE_ADMIN') %}*/
/*                 <div class="card-body">*/
/*                     <button id="add_aft_conexion" class="btn btn-primary"><i class="mdi mdi-content-save-all"></i>Guardar Conexión</button> */
/*                     <button id="probar_aft_conexion" class="btn btn-default"><i class="mdi mdi-check"></i>Probar Conexión</button> */
/*                 </div> */
/*               {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       */
/*     </div>*/
/* */
/* */
/*    */
/* */
/* */
/*       <!-- END PORTLET-->*/
/*     </div>*/
/*            */
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
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/horizontal/js/custom.min.js')}}"></script> */
/*         */
/* */
/*     <!-- Footable -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js')}}"></script>*/
/*     */
/* */
/*      <!-- Sweet-Alert  -->*/
/*     <script src="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js')}}"></script>    */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js')}}"></script>*/
/* */
/*      <!-- Color Picker Plugin JavaScript -->*/
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/colorpicker/bootstrap-colorpicker.js')}}"></script>*/
/* */
/*  */
/* */
/*     <!-- Select -->   */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>*/
/*     */
/* */
/*     <script type="text/javascript" charset="utf-8" async defer>*/
/* */
/*     $(window).on('load', function() {*/
/* */
/* */
/*        $(".table_equipo").on('click', ".modal_movimiento_equipo", function(){*/
/* */
/*         id_equipo = $(this).attr('data-id');*/
/*         $(".load").append(loader('Cargando Áreas de AFT'));*/
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
/*       $(".selectpicker").selectpicker();     */
/* */
/*           responsables();*/
/*           locales();*/
/*           subareas();*/
/*           ccosto();*/
/* */
/*           // responsables local area*/
/*           function responsables(){*/
/*           var $modal = $('#editor-responsable'),*/
/*           $editor = $('#form-responsable'),*/
/*           $editorTitle = $('#editor-title'),*/
/*           ft = FooTable.init('#table_responsable', {*/
/* */
/*             columns: [*/
/*                   {"name":"id","title":"ID", "type":"number","breakpoints":"xs sm"},*/
/*                   {"name":"responsable","title":"RESPONSABLE", "type":"text","breakpoints":"xs sm"},*/
/*                   {"name":"local","title":"ÁREA/LOCAL", "type": "select", "breakpoints":"xs sm" },*/
/*                   {"name":"cargo","title":"CARGO", "type": "select", "breakpoints":"xs sm" },*/
/*                   {"name":"id_cargo","title":"ID CARGO", "visible": false}, */
/*                   {"name":"id_local","title":"ID LOCAL", "type": "hiden", "visible": false }*/
/*               ],*/
/*               rows: $.post('{{path('maestro_general_pro')}}', { 'action': 'rows_responsables'}).fail(function () { alerta_error();}),*/
/*               filtering: {*/
/*                   enabled: true,*/
/*                   placeholder: "Buscar Responsable.." */
/*                 },*/
/*               editing: {*/
/*                 enabled: true, */
/*                 editText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span>', */
/*                 addText: '<span class="mdi mdi-lead-pencil" aria-hidden="true">Adicionar Responsable</span>',  */
/*                 deleteText: '<span class="mdi mdi-delete-forever" aria-hidden="true"></span>',*/
/*                 showText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span> Editar Responsable',*/
/*                 cancelText: 'Cancelar',*/
/* */
/*                 addRow: function(){*/
/*                   $modal.removeData('row');*/
/*                   $editor[0].reset();*/
/*                   $editorTitle.text('Adicionar Responsable');*/
/*                   $modal.modal('show');*/
/*                 },              */
/*                 editRow: function(row){*/
/*                   var values = row.val();*/
/*                     $editor.find('#id').val(values.id);*/
/*                     $editor.find('#responsable').val(values.responsable);*/
/*                     $editor.find('#local').val(values.id_local);*/
/*                     $editor.find('#cargo').val(values.id_cargo);*/
/* */
/*                     //select cargo o local del responsable en selectpicker*/
/*                     $('select[name=cargo]').val(values.id_cargo);*/
/*                     $('select[name=local]').val(values.id_local);*/
/*                     $("select[name=local]").selectpicker("refresh");*/
/*                     $("select[name=cargo]").selectpicker("refresh");*/
/* */
/*                   $modal.data('row', row);*/
/*                   $editorTitle.text('Editar Responsable');*/
/*                   $modal.modal('show');*/
/*                 },*/
/*                 deleteRow: function(row){*/
/* */
/* */
/*                    swal({   */
/*                               title: "Eliminar Responsable?",   */
/*                               text: "Seguro desea eliminar el Responsable?",   */
/*                               type: "warning",   */
/*                               showCancelButton: true,   */
/*                               confirmButtonColor: "#DD6B55",   */
/*                               confirmButtonText: "Si, Eliminar!",   */
/*                               cancelButtonText: "No, Cancelar!",   */
/*                               closeOnConfirm: false,   */
/*                               closeOnCancel: false */
/*                           }, function(isConfirm){   */
/*                               if (isConfirm) {    */
/* */
/*                                   var values = row.val();   */
/*                                   $.post('{{path('maestro_general_pro')}}', { 'action': 'delete_responsable', 'id': values.id  })*/
/*                                               .done(function (d) {  */
/*                                                 row.delete();  */
/* */
/*                                                   swal({   */
/*                                                     title: "Eliminar Responsable!",   */
/*                                                     text: "Se eliminó correctamente el responsable!",  */
/*                                                     type:"success", */
/*                                                     timer: 2500,   */
/*                                                     showConfirmButton: false */
/*                                                   }); */
/*                                               */
/*                                                                                          */
/*                                               }).fail(function () {*/
/*                                                 alerta_error();*/
/*                                             });                                  */
/*                                   */
/*                               } else {    */
/*                                   */
/*                                   swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Eliminar Responsable fue cancelado!",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/*                               } */
/*                           });                  */
/*                   */
/*                 }*/
/*               }*/
/*           });*/
/* */
/*           $editor.on('submit', function(e){*/
/*             if (this.checkValidity && !this.checkValidity()) return;*/
/*             e.preventDefault();*/
/*             var l =$("select#local option[value='"+$editor.find('#local').val()+"']").attr('data-id');*/
/*             var c =$("select#cargo option[value='"+$editor.find('#cargo').val()+"']").attr('data-id');            */
/*             var row = $modal.data('row'),*/
/*                 values = {*/
/*                   id: $editor.find('#id').val(),     */
/*                   responsable: $editor.find('#responsable').val(),                  */
/*                   id_local: $editor.find('#local').val(),*/
/*                   id_cargo: $editor.find('#cargo').val(),*/
/*                   local:l,*/
/*                   cargo: c*/
/*                 };*/
/* */
/*                 if (row instanceof FooTable.Row){*/
/*                   row.val(values);*/
/*                   $.post('{{path('maestro_general_pro')}}', { 'action': 'editar_responsable', 'responsable': values }).fail(function () { alerta_error();});*/
/*                 }else{*/
/* */
/*                   $.post('{{path('maestro_general_pro')}}', { 'action': 'add_responsable', 'responsable': values }).done(function(id){*/
/* */
/*                         values.id = id;*/
/*                         ft.rows.add(values);*/
/* */
/*                   }).fail(function () { alerta_error();});                */
/*                 } */
/*                 $modal.modal('hide');*/
/*           });*/
/*           }*/
/* */
/*           // ccosto*/
/*           function ccosto(){*/
/*             ft = FooTable.init('#table_ccosto', {*/
/* */
/*               columns: [*/
/*                     {"name":"id","title":"ID", "type":"number","breakpoints":"xs sm"},*/
/*                     {"name":"id_ccosto_aft","title":"ID CCOSTO AFT", "type":"text","breakpoints":"xs sm"},*/
/*                     {"name":"codigo","title":"CÓDIGO", "type": "select", "breakpoints":"xs sm" },*/
/*                     {"name":"area","title":"CCOSTO", "type": "select", "breakpoints":"xs sm" },*/
/*                     */
/*                 ],*/
/*                 rows: $.post('{{path('maestro_general_pro')}}', { 'action': 'rows_ccosto'}).fail(function () { alerta_error();}),*/
/*                 filtering: {*/
/*                     enabled: true,*/
/*                     placeholder: "Buscar Ccotos.." */
/*                   }              */
/*             });*/
/*           }*/
/* */
/*          */
/* */
/* */
/*           //areas y local*/
/*           function locales(){*/
/*           var $modal = $('#editor-local'),*/
/*           $editor = $('#form-local'),*/
/*           $editorTitle = $('#editor-local-title'),*/
/*           ft = FooTable.init('#table_area', {*/
/* */
/*             columns: [*/
/*                   {"name":"id","title":"ID", "type":"number","breakpoints":"xs sm"},                 */
/*                   {"name":"local2","title":"LOCAL", "type": "select", "breakpoints":"xs sm" },*/
/*                   {"name":"codigo","title":"CÓDIGO", "type": "number", "breakpoints":"xs sm" },*/
/*                   {"name":"area","title":"ÁREA", "type": "select", "breakpoints":"xs sm" },*/
/*                   {"name":"id_area","title":"ID ÁREA", "visible":false }         */
/*               ],*/
/*               rows: $.post('{{path('maestro_general_pro')}}', { 'action': 'rows_locales'}).fail(function () { alerta_error();}),*/
/*               filtering: {*/
/*                   enabled: true,*/
/*                   placeholder: "Buscar Local.." */
/*                 },*/
/*               editing: {*/
/*                 enabled: true, */
/*                 editText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span>', */
/*                 addText: '<span class="mdi mdi-lead-pencil" aria-hidden="true">Adicionar Local</span>',  */
/*                 deleteText: '<span class="mdi mdi-delete-forever" aria-hidden="true"></span>',*/
/*                 showText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span> Editar Local', */
/*                 addRow: function(){*/
/*                   $modal.removeData('row');*/
/*                   $editor[0].reset();*/
/*                   $editorTitle.text('Adicionar Local');*/
/*                   $modal.modal('show');*/
/*                 },               */
/*                 editRow: function(row){*/
/*                   var values = row.val();*/
/*                     $editor.find('#id').val(values.id);*/
/*                     $editor.find('#local2').val(values.local2);*/
/*                     $editor.find('#codigo').val(values.codigo);*/
/* */
/*                     $('select[name=area]').val(values.id_area);*/
/*                     $("select[name=area]").selectpicker("refresh");*/
/* */
/*                   $modal.data('row', row);*/
/*                   $editorTitle.text('Editar Local');*/
/*                   $modal.modal('show');*/
/*                 },*/
/*                 deleteRow: function(row){*/
/* */
/* */
/*                    swal({   */
/*                               title: "Eliminar Local?",   */
/*                               text: "Seguro desea eliminar el Local?",   */
/*                               type: "warning",   */
/*                               showCancelButton: true,   */
/*                               confirmButtonColor: "#DD6B55",   */
/*                               confirmButtonText: "Si, Eliminar!",   */
/*                               cancelButtonText: "No, Cancelar!",   */
/*                               closeOnConfirm: false,   */
/*                               closeOnCancel: false */
/*                           }, function(isConfirm){   */
/*                               if (isConfirm) {   */
/* */
/* */
/*                               var values = row.val();  */
/*                               $.post('{{path('maestro_general_pro')}}', { 'action': 'delete_local', 'id': values.id  })*/
/*                                         .done(function (d) {  */
/*                                           row.delete();*/
/*                                                   swal({   */
/*                                                     title: "Eliminar Local!",   */
/*                                                     text: "Se eliminó correctamente el Local!",  */
/*                                                     type:"success", */
/*                                                     timer: 2500,   */
/*                                                     showConfirmButton: false */
/*                                                   });                                        */
/*                                         }).fail(function () {*/
/*                                           alerta_error();*/
/*                               });                                                                    */
/*                                   */
/*                               } else {    */
/*                                   */
/*                                   swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Eliminar Local fue cancelado!",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/*                               } */
/*                           }); */
/*                    */
/*                   */
/*                 }*/
/*               }*/
/*           });*/
/* */
/*           $editor.on('submit', function(e){*/
/*             if (this.checkValidity && !this.checkValidity()) return;*/
/*             e.preventDefault();*/
/* */
/*             var nombre_area =$("select#area option[value='"+$editor.find('#area').val()+"']").attr('data-id');*/
/* */
/*             var row = $modal.data('row'),*/
/*                 values = {*/
/*                   id: $editor.find('#id').val(),     */
/*                   local2: $editor.find('#local2').val(),                  */
/*                   codigo: $editor.find('#codigo').val(),*/
/*                   id_area: $editor.find('#area').val(),*/
/*                   area: nombre_area*/
/*                 };*/
/* */
/*                 if (row instanceof FooTable.Row){*/
/*                   row.val(values);*/
/*                   $.post('{{path('maestro_general_pro')}}', { 'action': 'editar_local', 'local': values }).fail(function () { alerta_error();});*/
/*                 }else{*/
/* */
/*                   $.post('{{path('maestro_general_pro')}}', { 'action': 'add_local', 'local': values }).done(function(datos){*/
/* */
/*                       values.id = datos.id;    */
/*                      // for (var i = 0 ; i < datos['locales'].length; i++) {*/
/*                           $("#local").append("<option value='"+datos['local'][i]['id']+"'>"+datos['local'][i]['area']+" / "+datos['local'][i]['local']+"</option>");*/
/*                           $("#local3").append("<option value='"+datos['local'][i]['id']+"'>"+datos['local'][i]['area']+" / "+datos['local'][i]['local']+"</option>");*/
/*                     //  }       */
/* */
/*                     $('#local').selectpicker('destroy');     */
/*                     $('#local').selectpicker('show'); */
/*                     $('#local3').selectpicker('destroy');     */
/*                     $('#local3').selectpicker('show'); */
/* */
/*                     ft.rows.add(values);*/
/* */
/*                   }).fail(function () { alerta_error();});                */
/*                 } */
/* */
/*                 $modal.modal('hide');*/
/*           });*/
/*           }*/
/*           */
/* */
/*           //sub areas*/
/* */
/*           function subareas(){*/
/*           var $modal = $('#editor-subarea'),*/
/*           $editor = $('#form-subarea'),*/
/*           $editorTitle = $('#editor-subarea-title'),*/
/*           ft = FooTable.init('#table_subarea', {*/
/* */
/*             columns: [*/
/*                   {"name":"id","title":"ID", "type":"number","breakpoints":"xs sm"},                 */
/*                   {"name":"subarea","title":"SUBÁREA",  "breakpoints":"xs sm" },*/
/*                   {"name":"local3","title":"AREA",  "breakpoints":"xs sm" },*/
/*                   {"name":"codigo3","title":"CÓDIGO",  "breakpoints":"xs sm" },*/
/*                   {"name":"id_local3","title":"ID LOCAL", "visible":false }         */
/*               ],*/
/*               rows: $.post('{{path('maestro_general_pro')}}', { 'action': 'rows_subarea'}).fail(function () { alerta_error();}),*/
/*               filtering: {*/
/*                   enabled: true,*/
/*                   placeholder: "Buscar SubÁrea.." */
/*                 },*/
/*               editing: {*/
/*                 enabled: true, */
/*                 editText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span>', */
/*                 addText: '<span class="mdi mdi-lead-pencil" aria-hidden="true">Adicionar SubÁrea</span>',  */
/*                 deleteText: '<span class="mdi mdi-delete-forever" aria-hidden="true"></span>',*/
/*                 showText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span> Editar SubÁrea', */
/*                 addRow: function(){*/
/*                   $modal.removeData('row');*/
/*                   $editor[0].reset();*/
/*                   $editorTitle.text('Adicionar SubÁrea');*/
/*                   $modal.modal('show');*/
/*                 },               */
/*                 editRow: function(row){*/
/*                   var values = row.val();*/
/*                     $editor.find('#id').val(values.id);*/
/*                     $editor.find('#local3').val(values.id_local3);*/
/*                     $editor.find('#codigo3').val(values.codigo3);*/
/*                     $editor.find('#subarea').val(values.subarea);                  */
/* */
/*                   $modal.data('row', row);*/
/*                   $editorTitle.text('Editar SubÁrea');*/
/*                   $modal.modal('show');*/
/*                 },*/
/*                 deleteRow: function(row){*/
/* */
/* */
/*                   swal({   */
/*                               title: "Eliminar SubÁrea?",   */
/*                               text: "Seguro desea eliminar la SubÁrea?",   */
/*                               type: "warning",   */
/*                               showCancelButton: true,   */
/*                               confirmButtonColor: "#DD6B55",   */
/*                               confirmButtonText: "Si, Eliminar!",   */
/*                               cancelButtonText: "No, Cancelar!",   */
/*                               closeOnConfirm: false,   */
/*                               closeOnCancel: false */
/*                           }, function(isConfirm){   */
/*                               if (isConfirm) {   */
/* */
/*                                 var values = row.val();  */
/*                                 $.post('{{path('maestro_general_pro')}}', { 'action': 'delete_subarea', 'id': values.id  })*/
/*                                         .done(function (d) {  */
/*                                           row.delete();*/
/*                                                 swal({   */
/*                                                     title: "Eliminar SubÁrea!",   */
/*                                                     text: "Se eliminó correctamente la SubÁrea!",  */
/*                                                     type:"success", */
/*                                                     timer: 2500,   */
/*                                                     showConfirmButton: false */
/*                                                 });                                 */
/*                                         }).fail(function () {*/
/*                                           alerta_error();*/
/*                                       });                                                                                                 */
/*                                   */
/*                               } else {    */
/*                                   */
/*                                   swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Eliminar SubÁrea fue cancelado!",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/*                               } */
/*                           }); */
/*                  */
/*                 }*/
/*               }*/
/*           });*/
/* */
/*           $editor.on('submit', function(e){*/
/*             if (this.checkValidity && !this.checkValidity()) return;*/
/*             e.preventDefault();*/
/* */
/*             var nombre_local =$("select#local3 option[value='"+$editor.find('#local3').val()+"']").attr('data-id');*/
/* */
/*             var row = $modal.data('row'),*/
/*                 values = {*/
/*                   id: $editor.find('#id').val(),     */
/*                   local3: nombre_local, */
/*                   id_local3: $editor.find('#local3').val(), */
/*                   codigo3: $editor.find("#codigo3").val(),*/
/*                   subarea: $editor.find('#subarea').val(),*/
/*                 };*/
/* */
/*                 if (row instanceof FooTable.Row){*/
/*                   row.val(values);*/
/*                   $.post('{{path('maestro_general_pro')}}', { 'action': 'editar_subarea', 'subarea': values }).fail(function () { alerta_error();});*/
/*                 }else{*/
/* */
/*                   $.post('{{path('maestro_general_pro')}}', { 'action': 'add_subarea', 'subarea': values }).done(function(id){*/
/* */
/*                         values.id = id;*/
/*                         ft.rows.add(values);*/
/* */
/*                   }).fail(function () { alerta_error();});                */
/*                 } */
/* */
/*                 $modal.modal('hide');*/
/*           });*/
/*           }*/
/* */
/*         function alerta_error(){        */
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
/*          */
/*         $("#add_pieza").on('click', function(){       */
/*             var pieza = $("#pieza").val();*/
/*             var id_pieza = $("#id_pieza").val();*/
/*             var tipo_pieza = $('.iradio_flat-red.checked').find('input').val();           */
/* */
/*             if (pieza != '' && id_pieza == 'add'){*/
/*             var btn = $(this);            */
/*             btn.attr('disabled','disabled')*/
/* */
/*             $("#cancel_pieza").attr('disabled','disabled');*/
/*                 btn.text('Guardando...');*/
/* */
/*               $.post('{{path('mastro_pieza')}}', { 'action': 'add_pieza', 'pieza' : pieza, 'tipo_pieza': tipo_pieza  })*/
/*                     .done(function (dato) {*/
/* */
/*                       $("#pieza").val('');*/
/*                       btn.removeAttr('disabled');*/
/*                       $("#cancel_pieza").removeAttr('disabled');*/
/*                       btn.text('Adicionar');*/
/*                       //adicionar al select */
/*                       $("#listado_pieza").append("<option data-id='"+['tipo']+"' value='"+dato['id']+"'>"+ dato['pieza']+" </option>");*/
/*                       */
/*                       cancelar_modificar_pieza();*/
/* */
/*                 }).fail(function () {*/
/*                   cancelar_modificar_pieza();*/
/*                       */
/*                   }); */
/* */
/*             }//modificar pieza*/
/*             else if (pieza != '' && id_pieza != ''){*/
/* */
/*               var btn = $(this);              */
/* */
/*             btn.attr('disabled','disabled');*/
/*             $("#cancel_pieza").attr('disabled','disabled');*/
/*             $("#delete_pieza").attr('disabled','disabled');*/
/*             */
/*                 btn.text('Guardando...');*/
/* */
/*               $.post('{{path('mastro_pieza')}}', { 'action': 'modificar_pieza', 'id_pieza': id_pieza ,'pieza' : pieza , 'tipo_pieza': tipo_pieza  })*/
/*                     .done(function (dato) {*/
/* */
/*                       $("#pieza").val('');*/
/*                       btn.removeAttr('disabled');*/
/*                       $("#cancel_pieza").removeAttr('disabled');*/
/*                       btn.text('Adicionar');*/
/* */
/*                       //modificar option del select */
/*                       $("select#listado_pieza option[value='"+dato['id']+"']").text(dato['pieza']);                      */
/*                       $("select#listado_pieza option[value='"+dato['id']+"']").attr('data-id', dato['pieza']);*/
/*                                             */
/*                       cancelar_modificar_pieza();*/
/* */
/*                 }).fail(function () {*/
/*                         cancelar_modificar_pieza();*/
/*                   });*/
/* */
/*             }       */
/* */
/*       });*/
/* */
/*       */
/*       $("#listado_pieza").on('change', function(){*/
/*         */
/*         $("#add_pieza").text('Modificar');*/
/*         $("#cancel_pieza").text('Cancelar Modificar');*/
/*         $("#cancel_pieza").removeAttr('disabled');*/
/*         $("#tipo_pieza").removeAttr('disabled');*/
/*         $("#tipo_pieza").parents('div').removeClass('disabled');*/
/* */
/*         $("#delete_pieza").removeAttr('disabled');       */
/* */
/*         //data-id pieza*/
/*         tipo = $('select#listado_pieza option:selected').attr('data-id');*/
/* */
/*         //modificar radiobutton*/
/*         $('li').find('div').removeClass('checked');*/
/*         $('input#tipo_'+tipo).parents('div').addClass('checked');*/
/* */
/* */
/*       */
/* */
/*         $("#id_pieza").val($(this).val());*/
/*         $("#label_pieza").empty().text('Modificar: '+$("#listado_pieza option:selected").text());*/
/*         $("#pieza").val($.trim($("#listado_pieza option:selected").text()));*/
/*         */
/* */
/*       });*/
/* */
/*       $("#cancel_pieza").bind("click", function(){*/
/*         cancelar_modificar_pieza();*/
/*       });*/
/* */
/*       $("#delete_pieza").bind('click', function(){*/
/* */
/*          swal({   */
/*                               title: "Eliminar Pieza",   */
/*                               text: "Seguro desea eliminar la Pieza?",   */
/*                               type: "warning",   */
/*                               showCancelButton: true,   */
/*                               confirmButtonColor: "#DD6B55",   */
/*                               confirmButtonText: "Si, Eliminar!",   */
/*                               cancelButtonText: "No, Cancelar!",   */
/*                               closeOnConfirm: false,   */
/*                               closeOnCancel: false */
/*                           }, function(isConfirm){   */
/*                               if (isConfirm) {   */
/* */
/*                                 var id_pieza = $("#id_pieza").val();*/
/* */
/*                                   $("#delete_pieza").text('Eliminando ...');*/
/*                                   $("#delete_pieza").attr('disabled','disabled');*/
/*                                   $("#add_pieza").attr('disabled','disabled');*/
/*                                   $("#cancel_pieza").attr('disabled','disabled');*/
/* */
/*                                   if (id_pieza != ''){*/
/* */
/*                                     $.post('{{path('mastro_pieza')}}', { 'action': 'eliminar_pieza', 'id_pieza': id_pieza })*/
/*                                               .done(function (d) {                      */
/*                                                 //modificar option del select */
/*                                                 $("select#listado_pieza option[value='"+d['id']+"']").remove();   */
/*                                                 cancelar_modificar_pieza();*/
/* */
/*                                                 swal({   */
/*                                                     title: "Eliminar Pieza!",   */
/*                                                     text: "Se eliminó correctamente la Pieza!",  */
/*                                                     type:"success", */
/*                                                     timer: 2500,   */
/*                                                     showConfirmButton: false */
/*                                                   }); */
/* */
/* */
/*                                           }).fail(function () {*/
/*                                                   cancelar_modificar_pieza();*/
/* */
/*                                                 swal({   */
/*                                                     title: "Error!",   */
/*                                                     text: "No se puede eliminar la pieza porque se encuentra en uso, revisar los equipos que la utilizan!",  */
/*                                                     type:"error", */
/*                                                     timer: 3500,   */
/*                                                     showConfirmButton: false */
/*                                                 });  */
/*                                             });*/
/* */
/*                                   }*/
/* */
/*                                 }else {    */
/*                                   cancelar_modificar_pieza();*/
/*                                   swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Eliminar Pieza fue cancelado!",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/*                               }*/
/* */
/*                                */
/*                           });*/
/* */
/*         */
/*       });*/
/* */
/* */
/*       $("#add_tipo_equipo").on('click',  function(){         */
/* */
/*             var tipo_equipo = $("#tipo_equipo").val();*/
/* */
/*               */
/* */
/*             var color = $("#color").val();*/
/* */
/*             var id_tipo_equipo = $("#id_tipo_equipo").val();*/
/* */
/*             if (tipo_equipo != '' && id_tipo_equipo == 'add'){*/
/*             var btn = $(this);*/
/*             btn.attr('disabled','disabled')*/
/*             $("#cancel_tipo_equipo").attr('disabled','disabled');*/
/*                 btn.text('Guardando...');*/
/* */
/*               $.post('{{path('maestro_tipo_equipo')}}', { 'action': 'add_tipo_equipo', 'tipo_equipo' : tipo_equipo , 'color': color  })*/
/*                     .done(function (d) {*/
/* */
/*                       $("#tipo_equipo").val('');*/
/*                       btn.removeAttr('disabled');*/
/*                       $("#cancel_tipo_equipo").removeAttr('disabled');*/
/*                       btn.text('Adicionar');*/
/*                       //adicionar al select */
/*                       if (d['ocultar'] == 'true'){*/
/*                         $("#listado_tipo_equipo").append("<option data-id='YES' value='"+d['id']+"'>"+ d['nombre_equipo']+" </option>");*/
/*                       }else{*/
/*                         $("#listado_tipo_equipo").append("<option data-id='NO' value='"+d['id']+"'>"+ d['nombre_equipo']+" </option>");*/
/*                       }*/
/*                       */
/* */
/*                 }).fail(function () {*/
/*                       */
/*                   }); */
/* */
/*             }//modificar tipo equipo*/
/*             else if (tipo_equipo != '' && id_tipo_equipo != ''){*/
/* */
/* */
/*               var btn = $(this);*/
/*               if ($("#tipo_equipo_ocultar").parents('div').hasClass('checked') == true){*/
/*                 ocultar = true;*/
/*               }else{*/
/*                 ocultar = false;*/
/*               }*/
/* */
/*             btn.attr('disabled','disabled');*/
/*             $("#cancel_tipo_equipo").attr('disabled','disabled');*/
/*             $("#delete_tipo_equipo").attr('disabled','disabled');*/
/*                 btn.text('Guardando...');*/
/* */
/*               $.post('{{path('maestro_tipo_equipo')}}', { 'action': 'modificar_tipo_equipo', 'id_tipo_equipo': id_tipo_equipo ,'tipo_equipo' : tipo_equipo , 'ocultar': ocultar , 'color': color })*/
/*                     .done(function (d) {*/
/* */
/*                       $("#tipo_equipo").val('');*/
/*                       btn.removeAttr('disabled');*/
/*                       $("#cancel_tipo_equipo").removeAttr('disabled');*/
/*                       btn.text('Adicionar');*/
/* */
/*                       //modificar option del select */
/*                       $("select#listado_tipo_equipo option[value='"+d['id']+"']").text(d['nombre_equipo']);*/
/* */
/*                       $("select#listado_tipo_equipo option[value='"+d['id']+"']").attr('data-name', d['color']);*/
/*                       */
/*                       if (d['ocultar'] == 'true'){*/
/*                         $("select#listado_tipo_equipo option[value='"+d['id']+"']").attr('data-id', 'YES');*/
/*                       }else if (d['ocultar'] == 'false' ){*/
/*                         $("select#listado_tipo_equipo option[value='"+d['id']+"']").attr('data-id', 'NO');*/
/*                       }*/
/*                       */
/*                       cancelar_modificar_tipo_equipo();*/
/* */
/*                 }).fail(function () {*/
/*                   cancelar_modificar_tipo_equipo();*/
/*                       */
/*                   });*/
/* */
/*             }       */
/* */
/*       });*/
/* */
/*       $("#listado_tipo_equipo").on('change', function(){*/
/*         */
/*         $("#add_tipo_equipo").text('Modificar');*/
/*         $("#cancel_tipo_equipo").text('Cancelar Modificar');*/
/*         $("#tipo_equipo_ocultar").removeAttr('disabled');*/
/*         */
/* */
/*         $("#tipo_equipo_ocultar").parents('div').removeClass('disabled'); */
/* */
/*         $("#delete_tipo_equipo").removeAttr('disabled');       */
/* */
/*         //data-id tipo equipo*/
/*         ocultar = $('select#listado_tipo_equipo option:selected').attr('data-id');*/
/*         secolor = $('select#listado_tipo_equipo option:selected').attr('data-name');*/
/*         */
/*         if(ocultar == 'YES'){*/
/* */
/*           if( $("#tipo_equipo_ocultar").parents('div').hasClass('checked') == false){*/
/*             $("#tipo_equipo_ocultar").parents('div').addClass('checked');*/
/*           }*/
/* */
/*         }else if(ocultar == 'NO'){*/
/* */
/*           if( $("#tipo_equipo_ocultar").parents('div').hasClass('checked') == true){*/
/*                   $("#tipo_equipo_ocultar").parents('div').removeClass('checked'); */
/*               } */
/*         }     */
/*         */
/*         $('.cp7').colorpicker({ */
/*           color: ''+secolor , */
/*           container: true, */
/*           inline: true, */
/*         }).on('changeColor.colorpicker', function(event){*/
/*           $('#color').val(event.color.toHex()); */
/* */
/*       });*/
/* */
/*         $('.cp7').colorpicker('setValue', secolor);*/
/*       */
/*  */
/* */
/* */
/*         $("#id_tipo_equipo").val($(this).val());*/
/*         $("#label_tipo_equipo").empty().text('Modificar: '+$("#listado_tipo_equipo option:selected").text());*/
/*         $("#tipo_equipo").val($.trim($("#listado_tipo_equipo option:selected").text()));*/
/*         */
/* */
/*       });*/
/* */
/*       $("#cancel_tipo_equipo").bind("click", function(){*/
/*         cancelar_modificar_tipo_equipo();*/
/*       });*/
/* */
/* */
/*       $("#delete_tipo_equipo").bind('click', function(){*/
/*        */
/* */
/*          swal({   */
/*                               title: "Eliminar Tipo Equipo",   */
/*                               text: "Seguro desea eliminar el Tipo Equipo?",   */
/*                               type: "warning",   */
/*                               showCancelButton: true,   */
/*                               confirmButtonColor: "#DD6B55",   */
/*                               confirmButtonText: "Si, Eliminar!",   */
/*                               cancelButtonText: "No, Cancelar!",   */
/*                               closeOnConfirm: false,   */
/*                               closeOnCancel: false */
/*                           }, function(isConfirm){   */
/*                               if (isConfirm) {   */
/*                                 var id_tipo_equipo = $("#id_tipo_equipo").val();*/
/* */
/*                                 $("#delete_tipo_equipo").text('Eliminando ...');*/
/*                                 $("#delete_tipo_equipo").attr('disabled','disabled');*/
/*                                 $("#add_tipo_equipo").attr('disabled','disabled');*/
/*                                 $("#cancel_tipo_equipo").attr('disabled','disabled');*/
/* */
/*                                 if (id_tipo_equipo != ''){*/
/* */
/*                                   $.post('{{path('maestro_tipo_equipo')}}', { 'action': 'eliminar_tipo_equipo', 'id_tipo_equipo': id_tipo_equipo })*/
/*                                             .done(function (d) {                      */
/*                                               //modificar option del select */
/*                                               $("select#listado_tipo_equipo option[value='"+d['id']+"']").remove();   */
/*                                               cancelar_modificar_tipo_equipo();*/
/*                                               swal({   */
/*                                                     title: "Eliminar Tipo Equipo!",   */
/*                                                     text: "Se eliminó correctamente el Tipo Equipo!",  */
/*                                                     type:"success", */
/*                                                     timer: 2500,   */
/*                                                     showConfirmButton: false */
/*                                                   }); */
/* */
/*                                         }).fail(function () {*/
/*                                                 cancelar_modificar_tipo_equipo();*/
/*                                                 swal({   */
/*                                                     title: "Error!",   */
/*                                                     text: "No se puede eliminar el tipo equipo porque se encuentra en uso, revisar los equipos que lo utilizan!",  */
/*                                                     type:"error", */
/*                                                     timer: 3500,   */
/*                                                     showConfirmButton: false */
/*                                                 });*/
/*                                           });*/
/*                                 }     */
/*                                 }else {    */
/*                                   cancelar_modificar_tipo_equipo();  */
/*                                   swal({   */
/*                                       title: "Cancelar!",   */
/*                                       text: "Eliminar Pieza fue cancelado!",  */
/*                                       type:"error", */
/*                                       timer: 2500,   */
/*                                       showConfirmButton: false */
/*                                   });*/
/* */
/*                                   */
/*                               }*/
/* */
/*                                */
/*                           });*/
/* */
/*         */
/* */
/*       });*/
/* */
/*       //cancelar modificar*/
/*       function cancelar_modificar_tipo_equipo(){*/
/*         $("#add_tipo_equipo").text('Adicionar');*/
/*         $("#add_tipo_equipo").removeAttr('disabled');*/
/* */
/*         $("#delete_tipo_equipo").text('Eliminar');*/
/*         $("#delete_tipo_equipo").attr('disabled','disabled');*/
/*         */
/*         $("#cancel_tipo_equipo").text('Cancelar');*/
/*         $("#cancel_tipo_equipo").removeAttr('disabled');*/
/* */
/* */
/*         $("select#listado_tipo_equipo option").removeAttr("selected");*/
/* */
/*         $("#tipo_equipo_ocultar").removeAttr('data-id');*/
/*         $("#tipo_equipo_ocultar").attr('disabled','disabled');        */
/* */
/*         $("#tipo_equipo_ocultar").parents('div').addClass('disabled');*/
/* */
/*         if( $("#tipo_equipo_ocultar").parents('div').hasClass('checked') == true){*/
/*                 $("#tipo_equipo_ocultar").parents('div').removeAttr('checked'); */
/*             }*/
/* */
/*         $("#id_tipo_equipo").val('add');*/
/*         $("#label_tipo_equipo").empty('');*/
/*         $("#tipo_equipo").val('');*/
/* */
/*         //color picker*/
/*         $(".cp7").colorpicker('destroy');*/
/*       }*/
/* */
/*       //cancelar modificar*/
/*       function cancelar_modificar_pieza(){*/
/*         $("#add_pieza").text('Adicionar');*/
/*         $("#add_pieza").removeAttr('disabled');*/
/* */
/*         $("#delete_pieza").text('Eliminar');*/
/*         $("#delete_pieza").attr('disabled','disabled');*/
/*         */
/*         $("#cancel_pieza").text('Cancelar');*/
/*         $("#cancel_pieza").removeAttr('disabled');*/
/* */
/*         $("select#listado_pieza option").removeAttr("selected");*/
/*         $("#delete_tipo_equipo").attr('disabled','disabled');*/
/* */
/*         //modificar radiobutton*/
/*         $('li').find('div').removeClass('checked');*/
/*         $('input#tipo_1').parents('div').addClass('checked');*/
/* */
/*         $("#id_pieza").val('add');*/
/*         $("#label_pieza").empty('');*/
/*         $("#pieza").val('');*/
/*       }*/
/* */
/* */
/* */
/*       //guardar parametros de la conexion */
/* */
/*        $("#add_aft_conexion").on('click', function(){   */
/* */
/*             var id = $("#dba_aft_id").val();*/
/*             var host = $("#dba_aft_host").val();*/
/*             var port = $("#dba_aft_port").val();*/
/*             var dbname = $("#dba_aft_dbname").val(); */
/*             var user = $("#dba_aft_user").val();   */
/*             var password = $("#dba_aft_password").val();      */
/* */
/*             if ($.trim(host)!= '' && $.trim(dbname) != '' && $.trim(user) != '' && $.trim(password) != '' ){*/
/*            */
/*               $.post('{{path('conexion_db')}}', { */
/*                     'action': 'conexion_aft', */
/*                     'id' : id, */
/*                     'host': $.trim(host),*/
/*                     'port': $.trim(port),  */
/*                     'dbname': $.trim(dbname), */
/*                     'user': $.trim(user),*/
/*                     'password': $.trim(password), */
/*                     'tipo': 'AFT'   */
/* */
/*                   }).done(function (d) {   */
/* */
/*                    */
/*                     swal({   */
/*                         title: "Guardando",   */
/*                         text: "Se guardó corectamente la conexión",  */
/*                         type:"success", */
/*                         timer: 2500,   */
/*                         showConfirmButton: false */
/*                     }); */
/*                                 */
/* */
/*                 }).fail(function () {*/
/*                   //existe un error al guardar*/
/*                   alerta_error(); */
/*                 });*/
/*             }else{*/
/* */
/*               swal("Existen Campos Vacios!", "Revise que no falten datos por insertar.");*/
/*                */
/*           }*/
/* */
/*       });*/
/* */
/*        $("#add_stock_conexion").on('click', function(){   */
/* */
/*             var id = $("#dba_stock_id").val();*/
/*             var host = $("#dba_stock_host").val();*/
/*             var port = $("#dba_stock_port").val();*/
/*             var dbname = $("#dba_stock_dbname").val(); */
/*             var user = $("#dba_stock_user").val();   */
/*             var password = $("#dba_stock_password").val();      */
/* */
/*             if ($.trim(host)!= '' && $.trim(dbname) != '' && $.trim(user) != '' && $.trim(password) != '' ){*/
/*            */
/*               $.post('{{path('conexion_db')}}', { */
/*                     'action': 'conexion_stock', */
/*                     'id' : id, */
/*                     'host': $.trim(host),*/
/*                     'port': $.trim(port),  */
/*                     'dbname': $.trim(dbname), */
/*                     'user': $.trim(user),*/
/*                     'password': $.trim(password), */
/*                     'tipo': 'STOCK'   */
/* */
/*                   }).done(function (d) {   */
/* */
/*                    */
/*                     swal({   */
/*                         title: "Guardando",   */
/*                         text: "Se guardó corectamente la conexión",  */
/*                         type:"success", */
/*                         timer: 2500,   */
/*                         showConfirmButton: false */
/*                     }); */
/*                                 */
/* */
/*                 }).fail(function () {*/
/*                   //existe un error al guardar*/
/*                   alerta_error(); */
/*                 });*/
/*             }else{*/
/* */
/*               swal("Existen Campos Vacios!", "Revise que no falten datos por insertar.")*/
/*             }    */
/* */
/*       });*/
/* */
/* */
/* */
/* */
/* */
/*        function alerta_error(){*/
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
