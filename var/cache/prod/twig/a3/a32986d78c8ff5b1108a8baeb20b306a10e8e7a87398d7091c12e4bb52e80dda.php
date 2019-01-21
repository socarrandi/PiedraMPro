<?php

/* InformaticaBundle:Gestion:UsuarioDominio.html.twig */
class __TwigTemplate_bc06d61cc500135c1731785d53467b6944a51ebdfffddb25acbedf3ebf435e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_pro.html.twig", "InformaticaBundle:Gestion:UsuarioDominio.html.twig", 1);
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
        echo " Usuarios del Dominio ";
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\"/>


  <!--alerts CSS -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css"), "html", null, true);
        echo "\"/>

  <!-- select css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\"/>


   
   
    <!-- END PAGE LEVEL STYLES -->
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "
  ";
        // line 36
        echo twig_include($this->env, $context, "InformaticaBundle:include:preloder.html.twig", array("loader_label" => "Usuarios del Dominio"));
        echo "

  ";
        // line 38
        $this->loadTemplate("InformaticaBundle:include:header.html.twig", "InformaticaBundle:Gestion:UsuarioDominio.html.twig", 38)->display($context);
        // line 39
        echo "  ";
        $this->loadTemplate("InformaticaBundle:include:aside.html.twig", "InformaticaBundle:Gestion:UsuarioDominio.html.twig", 39)->display($context);
        // line 40
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
        // line 51
        echo twig_include($this->env, $context, "InformaticaBundle:include:page_titles.html.twig", array("titulo_pagina" => "Usuarios del Dominio", "session" => "Informática"));
        echo "                          
                        
    <div class=\"row\">
           

          <!-- MODAL EDITOR movimiento aft -->
          <div class=\"modal fade\" id=\"editor-usuario-dominio\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editor-usuario-dominio-title\">
  
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <form class=\"modal-content\" id=\"form-usuario-dominio\">
              <div class=\"modal-header\">
                
                <h4 class=\"modal-title\" id=\"editor-title\">ADICIONAR USUARIO DEL DOMINIO</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
              </div>

              <div class=\"modal-body\">
                <input type=\"number\" id=\"id\" name=\"id\" hidden=\"hidden\" />
                
                <div class=\"row card-body\">  
                   <div class=\"form-group col-md-12 col-xs-12\">
                      <div class=\"d-flex\">                  
                          <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>DATOS PERSONALES </h4>                                 
                      </div>
                    </div>

                  <div class=\"form-group required form-material col-md-6 col-xs-12\">
                    <h5 >ESCRIBE EL CI:</h5>
                    <input required class=\"form-control\" id=\"ci\" type=\"text\" />  
                  </div>
                
  \t\t\t\t        <div class=\"form-group required form-material col-md-6 col-xs-12\">
                      <h5 >ESCRIBE EL NOMBRE:</h5>
                      <input required class=\"form-control\" id=\"nombre\" type=\"text\" />  
                  </div>


                  <div class=\"form-group required form-material col-md-6 col-xs-12\">
                      <h5 >ESCRIBE EL PRIMER APELLIDO:</h5>
                      <input required class=\"form-control\" id=\"papellido\" type=\"text\" />  
                  </div>

                  <div class=\"form-group required form-material col-md-6 col-xs-12\">
                      <h5 >ESCRIBE EL SEGUNDO APELLIDO:</h5>
                      <input required class=\"form-control\" id=\"sapellido\" type=\"text\" />  
                  </div>

                  <div class=\"form-group form-material col-md-12 col-xs-12\">
                      <h5 >OBSERVACIÓN:</h5>
                      <input class=\"form-control\" id=\"observacion\" type=\"text\" />  
                  </div>

                </div>

                <div class=\"row card-body\">     

                 <div class=\"form-group col-md-12 col-xs-12\">
                      <div class=\"d-flex\">                  
                          <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>DATOS GENERALES </h4>                                 
                      </div>
                  </div>           

                  <div class=\"form-group required col-md-6 col-xs-12\">
                    \t<h5 class=\"\">SELECIONE CORREO:</h5>
                      <select class=\"selectpicker\" data-live-search=\"true\" name=\"select_correo\" id=\"select_correo\" required>                          
                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["correos"]) ? $context["correos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "                         
                          <option data-id=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "email", array()), "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "dominio", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "email", array()), "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "dominio", array()), "html", null, true);
            echo "</option>   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            
                      </select>                       
                  </div> 

                  <div class=\"form-group required col-md-6 col-xs-12\">
                      <h5 class=\"\">SELECIONE CARGO:</h5>
                      <select class=\"selectpicker\" data-live-search=\"true\" name=\"select_cargo\" id=\"select_cargo\" required>                          
                        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cargos"]) ? $context["cargos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "                         
                          <option data-id=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "cargo", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "cargo", array()), "html", null, true);
            echo " </option>   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                            
                      </select>                       
                  </div>

                  <div class=\"form-group required col-md-6 col-xs-12\">
                      <h5 class=\"\">SELECIONE USUARIO RED:</h5>
                      <select class=\"selectpicker\" data-live-search=\"true\" name=\"select_usuario_red\" id=\"select_usuario_red\" required>                          
                        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuario_reds"]) ? $context["usuario_reds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo "                         
                          <option data-id=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "dominio", array()), "dns", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "usuario", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "dominio", array()), "dns", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "usuario", array()), "html", null, true);
            echo " </option>   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                            
                      </select>                       
                  </div>

                  <div class=\"form-group required col-md-6 col-xs-12\">
                      <h5 class=\"\">SELECIONE DEPARTAMENTO / AREA:</h5>
                      <select class=\"selectpicker\" data-live-search=\"true\" name=\"select_local\" id=\"select_local\" required>                          
                        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo "                         
                          <option data-id=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "area", array()), "area", array()), "html", null, true);
            echo " / (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "codigo", array()), "html", null, true);
            echo ") ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "local", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "area", array()), "area", array()), "html", null, true);
            echo " / (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "codigo", array()), "html", null, true);
            echo ") ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "local", array()), "html", null, true);
            echo " </option>   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                            
                      </select>                       
                  </div>
                  <div class=\"form-material required col-md-12 col-xs-12\">
                      <h5 >FECHA CREACIÓN:</h5>
                      <input required class=\"form-control date-picker\" placeholder=\"dd-mm-YYYY\" id=\"fecha_creacion\" type=\"text\" />  
                      
                  </div>



                </div>

                <div class=\"row card-body\">

                       <div class=\"form-group col-md-12 col-xs-12\">
                        <div class=\"d-flex\">                  
                            <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>PERMISOS A NAVEGACIÓN, CORREO, FTP, CHAT </h4>                                 
                        </div>
                      </div> 
                  <div class=\"form-group col-xs-12 col-md-12\">         

                        <div class=\"input-group\">
                            <ul class=\"icheck-list\">
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"navNacional\" data-checkbox=\"icheckbox_square-red\">
                                    <label for=\"navNacional\">Nav Nacional</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"navInternet\" data-checkbox=\"icheckbox_square-red\">
                                    <label for=\"navInternet\">Nav Internet</label>
                                </li>                                
                                
                            </ul>  

                            <ul class=\"icheck-list\">
                              <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"emailNacional\" data-checkbox=\"icheckbox_square-red\">
                                    <label for=\"emailNacional\">Correo Nacional</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"emailInternet\"  data-checkbox=\"icheckbox_square-red\">
                                    <label for=\"emailInternet\">Correo Internet</label>
                                </li>
                            </ul>

                            <ul class=\"icheck-list\">
                              <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"chat\"  data-checkbox=\"icheckbox_square-red\">
                                    <label for=\"chat\">Chat</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"ftp\"  data-checkbox=\"icheckbox_square-red\">
                                    <label for=\"ftp\">FTP</label>
                                </li>
                            </ul>
                        </div>
                  </div>

                   <div class=\"form-group col-md-12 col-xs-12\">
                        <div class=\"d-flex\">                  
                            <h4 class=\"card-title m-b-5\"><span class=\"lstick\"></span>PERMISOS A LOS SISTEMAS </h4>                                 
                        </div>
                      </div> 
                   <div class=\"form-group col-xs-12 col-md-12\">         

                        <div class=\"input-group\">
                            <ul class=\"icheck-list\">
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunAcc\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunAcc\">ZUN Acc</label>
                                </li>  
                                 <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunAft\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunAft\">ZUN Aft</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunUtil\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunUtil\">ZUN Util</label>
                                </li>  
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunPms\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunPms\">ZUN Pms</label>
                                </li> 
                            </ul> 
                            <ul class=\"icheck-list\">
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunPos\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunPos\">ZUN Pos</label>
                                </li>  
                                 <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunStock\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunStock\">ZUN Stock</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunIcs\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunIcs\">ZUN Ics</label>
                                </li>  
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"zunSa\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"zunSa\">ZUN Sa</label>
                                </li> 
                            </ul>
                            <ul class=\"icheck-list\">
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"abacoNomina\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"abacoNomina\">Abaco Nómina</label>
                                </li>  
                                 <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"habitat\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"habitat\">Habitat</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"sarh\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"sarh\">Sarh</label>
                                </li>  
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"sstt\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"sstt\">SSTT</label>
                                </li> 
                            </ul>
                            <ul class=\"icheck-list\">
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"reservas\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"reservas\">Reservas R.</label>
                                </li>  
                                 <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"compras\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"compras\">Compras</label>
                                </li>
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"inHova\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"inHova\">Inhova</label>
                                </li>  
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"aInformatica\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"aInformatica\">@Informático</label>
                                </li> 
                                <li>
                                    <input type=\"checkbox\" class=\"check\" id=\"aListar\" data-checkbox=\"icheckbox_square-blue\">
                                    <label for=\"aListar\">@Listar</label>
                                </li> 
                            </ul>                         

                        </div>
                  </div>


                </div>

               


              \t</div>

              <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Salvar Cambios</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>        
            </form>          
          </div>  
        </div>
        <!-- end MODAL EDITOR movimiento aft-->


    </div>

      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">

          <div class=\"card\">            
            <div class=\"card-body\">  
              <div class=\"d-flex\">                  
                <h4 id=\"card-title-mov\" class=\"card-title\"> <span class=\"lstick\"></span>LISTADO USUARIOS DEL DOMINIO</h4>
              </div>
              <table id=\"table_usuario-dominio\" class=\"table table-hover table_usuario-dominio\" data-paging=\"true\" data-filtering=\"true\" data-sorting=\"true\" >

              <div class=\"d-flex\">

                  <div class=\"mr-auto\">
                    <div class=\"form-group\">
                      <button id=\"usuario-dominio-boton\" data-toggle=\"modal\" class=\"btn btn-sm btn-danger m-l-10\"><i class=\"mdi mdi-thumb-down-outline\"> </i> Usuarios del Dominio Bajas</button>
                      <a href=\"";
        // line 327
        echo $this->env->getExtension('routing')->getPath("exportar_listado_nominal_usuario");
        echo "\" class=\"btn btn-sm btn-warning m-l-10\"><i class=\"mdi mdi-file-word-box\"> </i> Exportar Usuario del Dominio</a>                      

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
        // line 352
        $this->loadTemplate("InformaticaBundle:include:footer.html.twig", "InformaticaBundle:Gestion:UsuarioDominio.html.twig", 352)->display($context);
        // line 353
        echo "    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>

  
  

  </div>


";
    }

    // line 366
    public function block_javascripts($context, array $blocks = array())
    {
        // line 367
        echo "
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    

    <!-- Plugin JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"), "html", null, true);
        echo "\"></script>

     <!--Custom JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/custom.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>

          

    <!-- Footable -->
    <script type=\"text/javascript\" src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Sweet-Alert  -->
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script> 
    <script  src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js"), "html", null, true);
        echo "\"></script>

    <!-- Select -->   
    <script type=\"text/javascript\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>



    <script type=\"text/javascript\" charset=\"utf-8\" async defer>

    \$(window).on('load', function() {     
         //global
      \$(\".selectpicker\").selectpicker(); 
       baja = 0;   
     

        \$(\".table_usuario-dominio\").on('click', \".exportar_usuario_dominio\", function(){
        id_usuario = \$(this).attr('data-id');        
        

          \$.post('";
        // line 409
        echo $this->env->getExtension('routing')->getPath("exportar_solicitud_asignacion_serv_inf");
        echo "', { 
                'id_usuario': id_usuario    
             }
              ).done(function(url){
                \$(\"#modal_plantilla_dictamen_aft\").modal('hide'); 
                window.location = \"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/temp/modelo_solicitud_de_ASI.docx"), "html", null, true);
        echo "\";

               }).fail(function () { alerta_error();})
          });

        
        //listado de usuarios del dominio  
        var \$modal = \$('#editor-usuario-dominio'),
        \$editor = \$('#form-usuario-dominio'),
        \$editorTitle = \$('#editor-title'),
        ft = FooTable.init('#table_usuario-dominio', {
            columns: [
                  {\"name\":\"id\",\"title\":\"ID\", \"type\":\"number\"},
                 
                  {\"name\":\"nombre\",\"title\":\"NOMBRE\"},
                  {\"name\":\"papellido\",\"title\":\"P. APELLIDO\"},
                  {\"name\":\"sapellido\",\"title\":\"S. APELLIDO\"},
                  {\"name\":\"ci\",\"title\":\"CI\", \"type\":\"number\"},

                  {\"name\":\"select_cargo\",\"title\":\"CARGO\",  \"breakpoints\":\"all\" },
                  {\"name\":\"select_local\",\"title\":\"DEPARTAMENTO / ÁREA\", \"breakpoints\":\"all\"},
                  {\"name\":\"select_usuario_red\",\"title\":\"USUARIO RED\", \"breakpoints\":\"xs sm\"},
                  {\"name\":\"observacion\",\"title\":\"ONSERVACION\", \"breakpoints\":\"xs sm\"}, 

                  {\"name\":\"select_correo\",\"title\":\"CORREO\", \"breakpoints\":\"all\"},
                  {\"name\":\"fecha_creacion\",\"title\":\"FECHA CREACIÓN\", \"breakpoints\":\"all\"}, 

                  {\"name\":\"navNacional\", \"visible\": false}, 
                  {\"name\":\"navInternet\",\"visible\": false}, 
                  {\"name\":\"emailNacional\",\"visible\": false}, 
                  {\"name\":\"emailInternet\",\"visible\": false},                
                  {\"name\":\"ftp\", \"visible\": false}, 
                  {\"name\":\"chat\", \"visible\": false}, 

                  {\"name\":\"zunAcc\", \"visible\": false},
                  {\"name\":\"zunAft\", \"visible\": false},
                  {\"name\":\"zunUtil\", \"visible\": false},
                  {\"name\":\"zunPms\", \"visible\": false},
                  {\"name\":\"zunPos\", \"visible\": false},
                  {\"name\":\"zunStock\", \"visible\": false},
                  {\"name\":\"zunIcs\", \"visible\": false},
                  {\"name\":\"zunSa\", \"visible\": false},
                  {\"name\":\"abacoNomina\", \"visible\": false},
                  {\"name\":\"habitat\", \"visible\": false},
                  {\"name\":\"sarh\", \"visible\": false},
                  {\"name\":\"sstt\", \"visible\": false},
                  {\"name\":\"reservas\", \"visible\": false},
                  {\"name\":\"compras\", \"visible\": false},
                  {\"name\":\"inHova\", \"visible\": false},
                  {\"name\":\"aInformatica\", \"visible\": false},
                  {\"name\":\"aListar\", \"visible\": false},


                  {\"name\":\"id_correo\", \"visible\": false}, 
                  {\"name\":\"id_cargo\", \"visible\": false}, 
                  {\"name\":\"id_usuario_red\", \"visible\": false}, 
                  {\"name\":\"id_local\", \"visible\": false},

                  {\"name\":\"edit\",\"title\":\"....\", \"breakpoints\":\"xs sm\"} 
              ],
              rows: \$.post('";
        // line 474
        echo $this->env->getExtension('routing')->getPath("usuario_dominio");
        echo "', { 'action': 'rows', 'baja':baja }).fail(function () { alerta_error();}),
              filtering: {
                  enabled: true,
                  placeholder: \"Buscar Usuario D. ..\" 
                },
              editing: {
                enabled: true, 
                editText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span>', 
                addText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\">Adicionar Usuario Dominio</span>',  
                deleteText: '<span class=\"mdi mdi-delete-forever\" aria-hidden=\"true\"></span>',
                showText: '<span class=\"mdi mdi-lead-pencil\" aria-hidden=\"true\"></span> Editar Usuario Dominio',    
                addRow: function(){
                  //checked     
                  \$modal.removeData('row');
                  \$editor[0].reset();
                  \$editorTitle.text('Adicionar Usuario del Dominio');
                  \$modal.modal('show');
                },

                editRow: function(row){
                  var values = row.val();
                  \$editor.find('#id').val(values.id);
                  \$editor.find('#nombre').val(values.nombre);
                  \$editor.find('#papellido').val(values.papellido);
                  \$editor.find('#sapellido').val(values.sapellido);
                  \$editor.find('#observacion').val(values.observacion);
                  \$editor.find('#ci').val(values.ci);
                  \$editor.find('#select_cargo').val(values.id_cargo);
                  \$editor.find('#select_correo').val(values.id_correo);
                  \$editor.find('#select_usuario_red').val(values.id_usuario_red);
                  \$editor.find('#select_area').val(values.id_area);

                  \$('select[name=select_cargo]').val(values.id_cargo); 
                  \$(\"select[name=select_cargo]\").selectpicker(\"refresh\");
                  \$('select[name=select_correo]').val(values.id_correo); 
                  \$(\"select[name=select_correo]\").selectpicker(\"refresh\");
                  \$('select[name=select_usuario_red]').val(values.id_usuario_red); 
                  \$(\"select[name=select_usuario_red]\").selectpicker(\"refresh\");
                  \$('select[name=select_local]').val(values.id_local); 
                  \$(\"select[name=select_local]\").selectpicker(\"refresh\");

                  \$editor.find('#fecha_creacion').val(values.fecha_creacion);


                  //checked
                  if(values.navNacional == 1){                    
                    \$(\"#navNacional\").parents('div.icheckbox_square-red').addClass('checked');
                  }else{
                    \$(\"#navNacional\").parents('div.icheckbox_square-red').removeClass('checked');
                  }
                  if(values.navInternet == 1){                    
                    \$(\"#navInternet\").parents('div.icheckbox_square-red').addClass('checked');
                  }else{
                    \$(\"#navInternet\").parents('div.icheckbox_square-red').removeClass('checked');
                  }
                  if(values.emailNacional == 1){                    
                    \$(\"#emailNacional\").parents('div.icheckbox_square-red').addClass('checked');
                  }else{
                    \$(\"#emailNacional\").parents('div.icheckbox_square-red').removeClass('checked');
                  }
                  if(values.emailInternet == 1){                    
                    \$(\"#emailInternet\").parents('div.icheckbox_square-red').addClass('checked');
                  }else{
                    \$(\"#emailInternet\").parents('div.icheckbox_square-red').removeClass('checked');
                  }
                  if(values.chat == 1){                    
                    \$(\"#chat\").parents('div.icheckbox_square-red').addClass('checked');
                  }else{
                    \$(\"#chat\").parents('div.icheckbox_square-red').removeClass('checked');
                  }
                  if(values.ftp == 1){                    
                    \$(\"#ftp\").parents('div.icheckbox_square-red').addClass('checked');
                  }else{
                    \$(\"#ftp\").parents('div.icheckbox_square-red').removeClass('checked');
                  }

                  //SISTEMAS

                  if(values.zunAcc == 1){                    
                    \$(\"#zunAcc\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunAcc\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.zunAft == 1){                    
                    \$(\"#zunAft\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunAft\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.zunUtil == 1){                    
                    \$(\"#zunUtil\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunUtil\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.zunPms == 1){                    
                    \$(\"#zunPms\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunPms\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.zunPos == 1){                    
                    \$(\"#zunPos\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunPos\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.zunStock == 1){                    
                    \$(\"#zunStock\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunStock\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.zunIcs == 1){                    
                    \$(\"#zunIcs\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunIcs\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.zunSa == 1){                    
                    \$(\"#zunSa\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#zunSa\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.abacoNomina == 1){                    
                    \$(\"#abacoNomina\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#abacoNomina\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.habitat == 1){                    
                    \$(\"#habitat\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#habitat\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.sarh == 1){                    
                    \$(\"#sarh\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#sarh\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.sstt == 1){                    
                    \$(\"#sstt\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#sstt\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.reservas == 1){                    
                    \$(\"#reservas\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#reservas\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.compras == 1){                    
                    \$(\"#compras\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#compras\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.inHova == 1){                    
                    \$(\"#inHova\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#inHova\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.aInformatica == 1){                    
                    \$(\"#aInformatica\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#aInformatica\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                  if(values.aListar == 1){                    
                    \$(\"#aListar\").parents('div.icheckbox_square-blue').addClass('checked');
                  }else{
                    \$(\"#aListar\").parents('div.icheckbox_square-blue').removeClass('checked');
                  }
                 


                  \$modal.data('row', row);
                  \$editorTitle.text('Editar Usuario del Dominio ');
                  \$modal.modal('show');
                },
                deleteRow: function(row){

                   if (baja == 1){
                    swal({   
                            title: \"Eliminar Usuario del Dominio!\",   
                            text: \"Seguro desea Eliminar el Usuario del Dominio?\",   
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
        // line 662
        echo $this->env->getExtension('routing')->getPath("usuario_dominio");
        echo "', { 'action': 'eliminar_usuario_dominio', 'id': values.id  })
                                        .done(function (d) {  
                                          row.delete();

                                          if (d == true){
                                             swal({   
                                                title: \"Eliminar!\",   
                                                text: \"Se Eliminó correctamente el Usuario del Dominio!\",  
                                                type:\"success\", 
                                                timer: 2500,   
                                                showConfirmButton: false 
                                            });                                           
                                          }                                          
                                        }).fail(function () {
                                          alerta_error();
                                      });                                 
                               
                            } else {    
                                
                                swal({   
                                    title: \"Cancelar!\",   
                                    text: \"Eliminar Usuario del Dominio fue cancelado!\",  
                                    type:\"error\", 
                                    timer: 2500,   
                                    showConfirmButton: false 
                                });
                            } 
                        }); 
                   }else{
                    swal({   
                            title: \"Usuario del Dominio!\",   
                            text: \"Seguro desea dara baja al Usuario del Dominio?\",   
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
        // line 706
        echo $this->env->getExtension('routing')->getPath("usuario_dominio");
        echo "', { 'action': 'eliminar_usuario_dominio', 'id': values.id  })
                                        .done(function (d) {  
                                          row.delete();

                                          if (d == true){
                                             swal({   
                                                title: \"Eliminar!\",   
                                                text: \"Se el dio baja correctamente el Usuario del Dominio!\",  
                                                type:\"success\", 
                                                timer: 2500,   
                                                showConfirmButton: false 
                                            });                                           
                                          }                                          
                                        }).fail(function () {
                                          alerta_error();
                                      });                                 
                               
                            } else {    
                                
                                swal({   
                                    title: \"Cancelar!\",   
                                    text: \"Dar baja del Usuario del Dominio fue cancelado!\",  
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
            
            navNacional = (\$(\"#navNacional\").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;
            navInternet = (\$(\"#navInternet\").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;
            emailNacional = (\$(\"#emailNacional\").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;
            emailInternet = (\$(\"#emailInternet\").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;
            chat = (\$(\"#chat\").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;
            ftp = (\$(\"#ftp\").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;

            zunAcc = (\$(\"#zunAcc\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            zunAft = (\$(\"#zunAft\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            zunUtil = (\$(\"#zunUtil\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            zunPms = (\$(\"#zunPms\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            zunPos = (\$(\"#zunPos\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            zunStock = (\$(\"#zunStock\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            zunIcs = (\$(\"#zunIcs\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            zunSa = (\$(\"#zunSa\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            abacoNomina = (\$(\"#abacoNomina\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            habitat = (\$(\"#habitat\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            sarh = (\$(\"#sarh\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            sstt = (\$(\"#sstt\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            reservas = (\$(\"#reservas\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            compras = (\$(\"#compras\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            inHova = (\$(\"#inHova\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            aInformatica = (\$(\"#aInformatica\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;
            aListar = (\$(\"#aListar\").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;

            var nombre_correo =\$(\"select#select_correo option[value='\"+\$editor.find('#select_correo').val()+\"']\").attr('data-id');
            var nombre_cargo =\$(\"select#select_cargo option[value='\"+\$editor.find('#select_cargo').val()+\"']\").attr('data-id');
            var nombre_usuario_red =\$(\"select#select_usuario_red option[value='\"+\$editor.find('#select_usuario_red').val()+\"']\").attr('data-id');
            var nombre_local =\$(\"select#select_local option[value='\"+\$editor.find('#select_local').val()+\"']\").attr('data-id');

            var row = \$modal.data('row'),
                values = {
                  id: \$editor.find('#id').val(),     
                  ci: \$editor.find('#ci').val(),
                  nombre: \$editor.find('#nombre').val(),
                  papellido: \$editor.find('#papellido').val(),
                  sapellido: \$editor.find('#sapellido').val(),
                  observacion: \$editor.find('#observacion').val(),
                  id_correo: \$editor.find('#select_correo').val(),
                  id_cargo: \$editor.find('#select_cargo').val(),
                  id_usuario_red: \$editor.find('#select_usuario_red').val(),
                  id_local: \$editor.find('#select_local').val(),

                  select_correo: nombre_correo,
                  select_cargo: nombre_cargo,
                  select_usuario_red: nombre_usuario_red,
                  select_local: nombre_local,
                  fecha_creacion: \$editor.find('#fecha_creacion').val(),

                  navNacional: navNacional,
                  navInternet: navInternet,
                  emailNacional: emailNacional,
                  emailInternet: emailInternet,
                  chat: chat,
                  ftp: ftp,
                  
                  zunAcc : zunAcc,
                  zunAft : zunAft,
                  zunUtil : zunUtil,
                  zunPms : zunPms,
                  zunPos : zunPos,
                  zunStock : zunStock,
                  zunIcs : zunIcs,
                  zunSa : zunSa,
                  abacoNomina : abacoNomina,
                  habitat : habitat,
                  sarh : sarh,
                  sstt : sstt,
                  compras : compras,
                  reservas : reservas,
                  inHova : inHova,
                  aInformatica : aInformatica,
                  aListar : aListar

                };

                if (row instanceof FooTable.Row){
                  row.val(values);
                  \$.post('";
        // line 823
        echo $this->env->getExtension('routing')->getPath("usuario_dominio");
        echo "', { 'action': 'editar_usuario_dominio', 'usuario': values }).fail(function () { alerta_error();});
                }else{

                  \$.post('";
        // line 826
        echo $this->env->getExtension('routing')->getPath("usuario_dominio");
        echo "', { 'action': 'add_usuario_dominio', 'usuario': values }).done(function(id){

                        values.id = id;
                        values.edit = '<div class=\"btn-group btn-group-solid\"><button data-toggle=\"tooltip\" title=\"Exportar SOLICITUD Y ASIGNACIÓN DE SERVICIOS INFORMÁTICOS\" type=\"button\" class=\"btn btn-sm btn-warning exportar_usuario_dominio\" data-id ='+id+'> <i class=\"mdi mdi-file-word-box\"> </i> Exp. </button> </div>'
                        ft.rows.add(values);

                  }).fail(function () { alerta_error();});                
                } 
                \$modal.modal('hide');
          });

        //cargar listado 
        \$('#usuario-dominio-boton').on('click', function (e) {
          
          if(baja == 0){
              \$(this).attr('class', 'btn btn-sm btn-primary m-l-10');
              \$(this).html('<i class=\"mdi mdi-thumb-down-outline\"> </i> Usuarios del Dominio'); 
              baja = 1;
            }else{
              \$(this).attr('class', 'btn btn-sm btn-danger m-l-10');
              \$(this).html('<i class=\"mdi mdi-thumb-up-outline\"> </i> Usuarios del Dominio Bajas'); 
              baja = 0;
            }
          e.preventDefault();
          
            \$.post('";
        // line 851
        echo $this->env->getExtension('routing')->getPath("usuario_dominio");
        echo "', { 'action': 'rows', 'baja':baja }).done(function(rows){
                ft.rows.load(rows);
            }).fail(function () { alerta_error()});               
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
          
        jQuery('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
    });

            


        // end document
      });  
        


              
      

   </script>

";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:Gestion:UsuarioDominio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1076 => 851,  1048 => 826,  1042 => 823,  922 => 706,  875 => 662,  684 => 474,  621 => 414,  613 => 409,  594 => 393,  590 => 392,  586 => 391,  580 => 388,  576 => 387,  570 => 384,  562 => 379,  558 => 378,  553 => 376,  547 => 373,  543 => 372,  536 => 367,  533 => 366,  518 => 353,  516 => 352,  488 => 327,  304 => 145,  284 => 144,  278 => 143,  269 => 136,  253 => 135,  247 => 134,  238 => 127,  226 => 126,  220 => 125,  211 => 118,  195 => 117,  189 => 116,  121 => 51,  108 => 40,  105 => 39,  103 => 38,  98 => 36,  95 => 35,  92 => 34,  81 => 24,  77 => 23,  73 => 22,  67 => 19,  63 => 18,  56 => 14,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::base_pro.html.twig' %}*/
/* */
/* {% block title %} Usuarios del Dominio {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- BEGIN PAGE LEVEL STYLES -->*/
/* */
/* */
/*     */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/floating-label.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css')}}"/>*/
/* */
/* */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>*/
/* */
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
/*   {{ include('InformaticaBundle:include:preloder.html.twig', {'loader_label':'Usuarios del Dominio' } ) }}*/
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
/*         {{ include('InformaticaBundle:include:page_titles.html.twig', {'titulo_pagina':'Usuarios del Dominio', 'session': 'Informática' } ) }}                          */
/*                         */
/*     <div class="row">*/
/*            */
/* */
/*           <!-- MODAL EDITOR movimiento aft -->*/
/*           <div class="modal fade" id="editor-usuario-dominio" tabindex="-1" role="dialog" aria-labelledby="editor-usuario-dominio-title">*/
/*   */
/*           <div class="modal-dialog modal-lg" role="document">*/
/*             <form class="modal-content" id="form-usuario-dominio">*/
/*               <div class="modal-header">*/
/*                 */
/*                 <h4 class="modal-title" id="editor-title">ADICIONAR USUARIO DEL DOMINIO</h4>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*               </div>*/
/* */
/*               <div class="modal-body">*/
/*                 <input type="number" id="id" name="id" hidden="hidden" />*/
/*                 */
/*                 <div class="row card-body">  */
/*                    <div class="form-group col-md-12 col-xs-12">*/
/*                       <div class="d-flex">                  */
/*                           <h4 class="card-title m-b-5"><span class="lstick"></span>DATOS PERSONALES </h4>                                 */
/*                       </div>*/
/*                     </div>*/
/* */
/*                   <div class="form-group required form-material col-md-6 col-xs-12">*/
/*                     <h5 >ESCRIBE EL CI:</h5>*/
/*                     <input required class="form-control" id="ci" type="text" />  */
/*                   </div>*/
/*                 */
/*   				        <div class="form-group required form-material col-md-6 col-xs-12">*/
/*                       <h5 >ESCRIBE EL NOMBRE:</h5>*/
/*                       <input required class="form-control" id="nombre" type="text" />  */
/*                   </div>*/
/* */
/* */
/*                   <div class="form-group required form-material col-md-6 col-xs-12">*/
/*                       <h5 >ESCRIBE EL PRIMER APELLIDO:</h5>*/
/*                       <input required class="form-control" id="papellido" type="text" />  */
/*                   </div>*/
/* */
/*                   <div class="form-group required form-material col-md-6 col-xs-12">*/
/*                       <h5 >ESCRIBE EL SEGUNDO APELLIDO:</h5>*/
/*                       <input required class="form-control" id="sapellido" type="text" />  */
/*                   </div>*/
/* */
/*                   <div class="form-group form-material col-md-12 col-xs-12">*/
/*                       <h5 >OBSERVACIÓN:</h5>*/
/*                       <input class="form-control" id="observacion" type="text" />  */
/*                   </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="row card-body">     */
/* */
/*                  <div class="form-group col-md-12 col-xs-12">*/
/*                       <div class="d-flex">                  */
/*                           <h4 class="card-title m-b-5"><span class="lstick"></span>DATOS GENERALES </h4>                                 */
/*                       </div>*/
/*                   </div>           */
/* */
/*                   <div class="form-group required col-md-6 col-xs-12">*/
/*                     	<h5 class="">SELECIONE CORREO:</h5>*/
/*                       <select class="selectpicker" data-live-search="true" name="select_correo" id="select_correo" required>                          */
/*                         {% for c in correos %}                         */
/*                           <option data-id="{{c.email }}@{{c.dominio}}" value="{{c.id}}"> {{c.email }}@{{c.dominio}}</option>   */
/*                         {% endfor %}                            */
/*                       </select>                       */
/*                   </div> */
/* */
/*                   <div class="form-group required col-md-6 col-xs-12">*/
/*                       <h5 class="">SELECIONE CARGO:</h5>*/
/*                       <select class="selectpicker" data-live-search="true" name="select_cargo" id="select_cargo" required>                          */
/*                         {% for c in cargos %}                         */
/*                           <option data-id="{{c.cargo }}" value="{{c.id}}">{{c.cargo }} </option>   */
/*                         {% endfor %}                            */
/*                       </select>                       */
/*                   </div>*/
/* */
/*                   <div class="form-group required col-md-6 col-xs-12">*/
/*                       <h5 class="">SELECIONE USUARIO RED:</h5>*/
/*                       <select class="selectpicker" data-live-search="true" name="select_usuario_red" id="select_usuario_red" required>                          */
/*                         {% for u in usuario_reds %}                         */
/*                           <option data-id="{{ u.dominio.dns }} / {{u.usuario }}" value="{{u.id}}">{{ u.dominio.dns }} / {{u.usuario }} </option>   */
/*                         {% endfor %}                            */
/*                       </select>                       */
/*                   </div>*/
/* */
/*                   <div class="form-group required col-md-6 col-xs-12">*/
/*                       <h5 class="">SELECIONE DEPARTAMENTO / AREA:</h5>*/
/*                       <select class="selectpicker" data-live-search="true" name="select_local" id="select_local" required>                          */
/*                         {% for l in locales %}                         */
/*                           <option data-id="{{l.area.area }} / ({{ l.codigo }}) {{l.local }}" value="{{l.id}}">{{l.area.area }} / ({{ l.codigo }}) {{l.local }} </option>   */
/*                         {% endfor %}                            */
/*                       </select>                       */
/*                   </div>*/
/*                   <div class="form-material required col-md-12 col-xs-12">*/
/*                       <h5 >FECHA CREACIÓN:</h5>*/
/*                       <input required class="form-control date-picker" placeholder="dd-mm-YYYY" id="fecha_creacion" type="text" />  */
/*                       */
/*                   </div>*/
/* */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="row card-body">*/
/* */
/*                        <div class="form-group col-md-12 col-xs-12">*/
/*                         <div class="d-flex">                  */
/*                             <h4 class="card-title m-b-5"><span class="lstick"></span>PERMISOS A NAVEGACIÓN, CORREO, FTP, CHAT </h4>                                 */
/*                         </div>*/
/*                       </div> */
/*                   <div class="form-group col-xs-12 col-md-12">         */
/* */
/*                         <div class="input-group">*/
/*                             <ul class="icheck-list">*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="navNacional" data-checkbox="icheckbox_square-red">*/
/*                                     <label for="navNacional">Nav Nacional</label>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="navInternet" data-checkbox="icheckbox_square-red">*/
/*                                     <label for="navInternet">Nav Internet</label>*/
/*                                 </li>                                */
/*                                 */
/*                             </ul>  */
/* */
/*                             <ul class="icheck-list">*/
/*                               <li>*/
/*                                     <input type="checkbox" class="check" id="emailNacional" data-checkbox="icheckbox_square-red">*/
/*                                     <label for="emailNacional">Correo Nacional</label>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="emailInternet"  data-checkbox="icheckbox_square-red">*/
/*                                     <label for="emailInternet">Correo Internet</label>*/
/*                                 </li>*/
/*                             </ul>*/
/* */
/*                             <ul class="icheck-list">*/
/*                               <li>*/
/*                                     <input type="checkbox" class="check" id="chat"  data-checkbox="icheckbox_square-red">*/
/*                                     <label for="chat">Chat</label>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="ftp"  data-checkbox="icheckbox_square-red">*/
/*                                     <label for="ftp">FTP</label>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                   </div>*/
/* */
/*                    <div class="form-group col-md-12 col-xs-12">*/
/*                         <div class="d-flex">                  */
/*                             <h4 class="card-title m-b-5"><span class="lstick"></span>PERMISOS A LOS SISTEMAS </h4>                                 */
/*                         </div>*/
/*                       </div> */
/*                    <div class="form-group col-xs-12 col-md-12">         */
/* */
/*                         <div class="input-group">*/
/*                             <ul class="icheck-list">*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="zunAcc" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunAcc">ZUN Acc</label>*/
/*                                 </li>  */
/*                                  <li>*/
/*                                     <input type="checkbox" class="check" id="zunAft" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunAft">ZUN Aft</label>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="zunUtil" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunUtil">ZUN Util</label>*/
/*                                 </li>  */
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="zunPms" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunPms">ZUN Pms</label>*/
/*                                 </li> */
/*                             </ul> */
/*                             <ul class="icheck-list">*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="zunPos" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunPos">ZUN Pos</label>*/
/*                                 </li>  */
/*                                  <li>*/
/*                                     <input type="checkbox" class="check" id="zunStock" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunStock">ZUN Stock</label>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="zunIcs" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunIcs">ZUN Ics</label>*/
/*                                 </li>  */
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="zunSa" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="zunSa">ZUN Sa</label>*/
/*                                 </li> */
/*                             </ul>*/
/*                             <ul class="icheck-list">*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="abacoNomina" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="abacoNomina">Abaco Nómina</label>*/
/*                                 </li>  */
/*                                  <li>*/
/*                                     <input type="checkbox" class="check" id="habitat" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="habitat">Habitat</label>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="sarh" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="sarh">Sarh</label>*/
/*                                 </li>  */
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="sstt" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="sstt">SSTT</label>*/
/*                                 </li> */
/*                             </ul>*/
/*                             <ul class="icheck-list">*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="reservas" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="reservas">Reservas R.</label>*/
/*                                 </li>  */
/*                                  <li>*/
/*                                     <input type="checkbox" class="check" id="compras" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="compras">Compras</label>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="inHova" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="inHova">Inhova</label>*/
/*                                 </li>  */
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="aInformatica" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="aInformatica">@Informático</label>*/
/*                                 </li> */
/*                                 <li>*/
/*                                     <input type="checkbox" class="check" id="aListar" data-checkbox="icheckbox_square-blue">*/
/*                                     <label for="aListar">@Listar</label>*/
/*                                 </li> */
/*                             </ul>                         */
/* */
/*                         </div>*/
/*                   </div>*/
/* */
/* */
/*                 </div>*/
/* */
/*                */
/* */
/* */
/*               	</div>*/
/* */
/*               <div class="modal-footer">*/
/*                 <button type="submit" class="btn btn-primary">Salvar Cambios</button>*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*               </div>        */
/*             </form>          */
/*           </div>  */
/*         </div>*/
/*         <!-- end MODAL EDITOR movimiento aft-->*/
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
/*                 <h4 id="card-title-mov" class="card-title"> <span class="lstick"></span>LISTADO USUARIOS DEL DOMINIO</h4>*/
/*               </div>*/
/*               <table id="table_usuario-dominio" class="table table-hover table_usuario-dominio" data-paging="true" data-filtering="true" data-sorting="true" >*/
/* */
/*               <div class="d-flex">*/
/* */
/*                   <div class="mr-auto">*/
/*                     <div class="form-group">*/
/*                       <button id="usuario-dominio-boton" data-toggle="modal" class="btn btn-sm btn-danger m-l-10"><i class="mdi mdi-thumb-down-outline"> </i> Usuarios del Dominio Bajas</button>*/
/*                       <a href="{{path('exportar_listado_nominal_usuario')}}" class="btn btn-sm btn-warning m-l-10"><i class="mdi mdi-file-word-box"> </i> Exportar Usuario del Dominio</a>                      */
/* */
/*                     </div>*/
/*                   </div>                          */
/*                         */
/*                 </div>  */
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
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/moment/moment.js')}}"></script> */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>*/
/* */
/*      <!--Custom JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/horizontal/js/custom.min.js')}}"></script>*/
/* */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>*/
/* */
/*           */
/* */
/*     <!-- Footable -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/js/footable.min.js')}}"></script>*/
/* */
/*     <!-- Sweet-Alert  -->*/
/*     <script src="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js')}}"></script> */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js')}}"></script>*/
/* */
/*     <!-- Select -->   */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/switchery/dist/switchery.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>*/
/* */
/* */
/* */
/*     <script type="text/javascript" charset="utf-8" async defer>*/
/* */
/*     $(window).on('load', function() {     */
/*          //global*/
/*       $(".selectpicker").selectpicker(); */
/*        baja = 0;   */
/*      */
/* */
/*         $(".table_usuario-dominio").on('click', ".exportar_usuario_dominio", function(){*/
/*         id_usuario = $(this).attr('data-id');        */
/*         */
/* */
/*           $.post('{{path('exportar_solicitud_asignacion_serv_inf')}}', { */
/*                 'id_usuario': id_usuario    */
/*              }*/
/*               ).done(function(url){*/
/*                 $("#modal_plantilla_dictamen_aft").modal('hide'); */
/*                 window.location = "{{asset('uploads/temp/modelo_solicitud_de_ASI.docx')}}";*/
/* */
/*                }).fail(function () { alerta_error();})*/
/*           });*/
/* */
/*         */
/*         //listado de usuarios del dominio  */
/*         var $modal = $('#editor-usuario-dominio'),*/
/*         $editor = $('#form-usuario-dominio'),*/
/*         $editorTitle = $('#editor-title'),*/
/*         ft = FooTable.init('#table_usuario-dominio', {*/
/*             columns: [*/
/*                   {"name":"id","title":"ID", "type":"number"},*/
/*                  */
/*                   {"name":"nombre","title":"NOMBRE"},*/
/*                   {"name":"papellido","title":"P. APELLIDO"},*/
/*                   {"name":"sapellido","title":"S. APELLIDO"},*/
/*                   {"name":"ci","title":"CI", "type":"number"},*/
/* */
/*                   {"name":"select_cargo","title":"CARGO",  "breakpoints":"all" },*/
/*                   {"name":"select_local","title":"DEPARTAMENTO / ÁREA", "breakpoints":"all"},*/
/*                   {"name":"select_usuario_red","title":"USUARIO RED", "breakpoints":"xs sm"},*/
/*                   {"name":"observacion","title":"ONSERVACION", "breakpoints":"xs sm"}, */
/* */
/*                   {"name":"select_correo","title":"CORREO", "breakpoints":"all"},*/
/*                   {"name":"fecha_creacion","title":"FECHA CREACIÓN", "breakpoints":"all"}, */
/* */
/*                   {"name":"navNacional", "visible": false}, */
/*                   {"name":"navInternet","visible": false}, */
/*                   {"name":"emailNacional","visible": false}, */
/*                   {"name":"emailInternet","visible": false},                */
/*                   {"name":"ftp", "visible": false}, */
/*                   {"name":"chat", "visible": false}, */
/* */
/*                   {"name":"zunAcc", "visible": false},*/
/*                   {"name":"zunAft", "visible": false},*/
/*                   {"name":"zunUtil", "visible": false},*/
/*                   {"name":"zunPms", "visible": false},*/
/*                   {"name":"zunPos", "visible": false},*/
/*                   {"name":"zunStock", "visible": false},*/
/*                   {"name":"zunIcs", "visible": false},*/
/*                   {"name":"zunSa", "visible": false},*/
/*                   {"name":"abacoNomina", "visible": false},*/
/*                   {"name":"habitat", "visible": false},*/
/*                   {"name":"sarh", "visible": false},*/
/*                   {"name":"sstt", "visible": false},*/
/*                   {"name":"reservas", "visible": false},*/
/*                   {"name":"compras", "visible": false},*/
/*                   {"name":"inHova", "visible": false},*/
/*                   {"name":"aInformatica", "visible": false},*/
/*                   {"name":"aListar", "visible": false},*/
/* */
/* */
/*                   {"name":"id_correo", "visible": false}, */
/*                   {"name":"id_cargo", "visible": false}, */
/*                   {"name":"id_usuario_red", "visible": false}, */
/*                   {"name":"id_local", "visible": false},*/
/* */
/*                   {"name":"edit","title":"....", "breakpoints":"xs sm"} */
/*               ],*/
/*               rows: $.post('{{path('usuario_dominio')}}', { 'action': 'rows', 'baja':baja }).fail(function () { alerta_error();}),*/
/*               filtering: {*/
/*                   enabled: true,*/
/*                   placeholder: "Buscar Usuario D. .." */
/*                 },*/
/*               editing: {*/
/*                 enabled: true, */
/*                 editText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span>', */
/*                 addText: '<span class="mdi mdi-lead-pencil" aria-hidden="true">Adicionar Usuario Dominio</span>',  */
/*                 deleteText: '<span class="mdi mdi-delete-forever" aria-hidden="true"></span>',*/
/*                 showText: '<span class="mdi mdi-lead-pencil" aria-hidden="true"></span> Editar Usuario Dominio',    */
/*                 addRow: function(){*/
/*                   //checked     */
/*                   $modal.removeData('row');*/
/*                   $editor[0].reset();*/
/*                   $editorTitle.text('Adicionar Usuario del Dominio');*/
/*                   $modal.modal('show');*/
/*                 },*/
/* */
/*                 editRow: function(row){*/
/*                   var values = row.val();*/
/*                   $editor.find('#id').val(values.id);*/
/*                   $editor.find('#nombre').val(values.nombre);*/
/*                   $editor.find('#papellido').val(values.papellido);*/
/*                   $editor.find('#sapellido').val(values.sapellido);*/
/*                   $editor.find('#observacion').val(values.observacion);*/
/*                   $editor.find('#ci').val(values.ci);*/
/*                   $editor.find('#select_cargo').val(values.id_cargo);*/
/*                   $editor.find('#select_correo').val(values.id_correo);*/
/*                   $editor.find('#select_usuario_red').val(values.id_usuario_red);*/
/*                   $editor.find('#select_area').val(values.id_area);*/
/* */
/*                   $('select[name=select_cargo]').val(values.id_cargo); */
/*                   $("select[name=select_cargo]").selectpicker("refresh");*/
/*                   $('select[name=select_correo]').val(values.id_correo); */
/*                   $("select[name=select_correo]").selectpicker("refresh");*/
/*                   $('select[name=select_usuario_red]').val(values.id_usuario_red); */
/*                   $("select[name=select_usuario_red]").selectpicker("refresh");*/
/*                   $('select[name=select_local]').val(values.id_local); */
/*                   $("select[name=select_local]").selectpicker("refresh");*/
/* */
/*                   $editor.find('#fecha_creacion').val(values.fecha_creacion);*/
/* */
/* */
/*                   //checked*/
/*                   if(values.navNacional == 1){                    */
/*                     $("#navNacional").parents('div.icheckbox_square-red').addClass('checked');*/
/*                   }else{*/
/*                     $("#navNacional").parents('div.icheckbox_square-red').removeClass('checked');*/
/*                   }*/
/*                   if(values.navInternet == 1){                    */
/*                     $("#navInternet").parents('div.icheckbox_square-red').addClass('checked');*/
/*                   }else{*/
/*                     $("#navInternet").parents('div.icheckbox_square-red').removeClass('checked');*/
/*                   }*/
/*                   if(values.emailNacional == 1){                    */
/*                     $("#emailNacional").parents('div.icheckbox_square-red').addClass('checked');*/
/*                   }else{*/
/*                     $("#emailNacional").parents('div.icheckbox_square-red').removeClass('checked');*/
/*                   }*/
/*                   if(values.emailInternet == 1){                    */
/*                     $("#emailInternet").parents('div.icheckbox_square-red').addClass('checked');*/
/*                   }else{*/
/*                     $("#emailInternet").parents('div.icheckbox_square-red').removeClass('checked');*/
/*                   }*/
/*                   if(values.chat == 1){                    */
/*                     $("#chat").parents('div.icheckbox_square-red').addClass('checked');*/
/*                   }else{*/
/*                     $("#chat").parents('div.icheckbox_square-red').removeClass('checked');*/
/*                   }*/
/*                   if(values.ftp == 1){                    */
/*                     $("#ftp").parents('div.icheckbox_square-red').addClass('checked');*/
/*                   }else{*/
/*                     $("#ftp").parents('div.icheckbox_square-red').removeClass('checked');*/
/*                   }*/
/* */
/*                   //SISTEMAS*/
/* */
/*                   if(values.zunAcc == 1){                    */
/*                     $("#zunAcc").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunAcc").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.zunAft == 1){                    */
/*                     $("#zunAft").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunAft").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.zunUtil == 1){                    */
/*                     $("#zunUtil").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunUtil").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.zunPms == 1){                    */
/*                     $("#zunPms").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunPms").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.zunPos == 1){                    */
/*                     $("#zunPos").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunPos").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.zunStock == 1){                    */
/*                     $("#zunStock").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunStock").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.zunIcs == 1){                    */
/*                     $("#zunIcs").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunIcs").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.zunSa == 1){                    */
/*                     $("#zunSa").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#zunSa").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.abacoNomina == 1){                    */
/*                     $("#abacoNomina").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#abacoNomina").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.habitat == 1){                    */
/*                     $("#habitat").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#habitat").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.sarh == 1){                    */
/*                     $("#sarh").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#sarh").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.sstt == 1){                    */
/*                     $("#sstt").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#sstt").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.reservas == 1){                    */
/*                     $("#reservas").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#reservas").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.compras == 1){                    */
/*                     $("#compras").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#compras").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.inHova == 1){                    */
/*                     $("#inHova").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#inHova").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.aInformatica == 1){                    */
/*                     $("#aInformatica").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#aInformatica").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                   if(values.aListar == 1){                    */
/*                     $("#aListar").parents('div.icheckbox_square-blue').addClass('checked');*/
/*                   }else{*/
/*                     $("#aListar").parents('div.icheckbox_square-blue').removeClass('checked');*/
/*                   }*/
/*                  */
/* */
/* */
/*                   $modal.data('row', row);*/
/*                   $editorTitle.text('Editar Usuario del Dominio ');*/
/*                   $modal.modal('show');*/
/*                 },*/
/*                 deleteRow: function(row){*/
/* */
/*                    if (baja == 1){*/
/*                     swal({   */
/*                             title: "Eliminar Usuario del Dominio!",   */
/*                             text: "Seguro desea Eliminar el Usuario del Dominio?",   */
/*                             type: "warning",   */
/*                             showCancelButton: true,   */
/*                             confirmButtonColor: "#DD6B55",   */
/*                             confirmButtonText: "Si, Eliminar!",   */
/*                             cancelButtonText: "No, Cancelar!",   */
/*                             closeOnConfirm: false,   */
/*                             closeOnCancel: false */
/*                         }, function(isConfirm){   */
/*                             if (isConfirm) {    */
/* */
/*                                 var values = row.val();*/
/* */
/*                                 $.post('{{path('usuario_dominio')}}', { 'action': 'eliminar_usuario_dominio', 'id': values.id  })*/
/*                                         .done(function (d) {  */
/*                                           row.delete();*/
/* */
/*                                           if (d == true){*/
/*                                              swal({   */
/*                                                 title: "Eliminar!",   */
/*                                                 text: "Se Eliminó correctamente el Usuario del Dominio!",  */
/*                                                 type:"success", */
/*                                                 timer: 2500,   */
/*                                                 showConfirmButton: false */
/*                                             });                                           */
/*                                           }                                          */
/*                                         }).fail(function () {*/
/*                                           alerta_error();*/
/*                                       });                                 */
/*                                */
/*                             } else {    */
/*                                 */
/*                                 swal({   */
/*                                     title: "Cancelar!",   */
/*                                     text: "Eliminar Usuario del Dominio fue cancelado!",  */
/*                                     type:"error", */
/*                                     timer: 2500,   */
/*                                     showConfirmButton: false */
/*                                 });*/
/*                             } */
/*                         }); */
/*                    }else{*/
/*                     swal({   */
/*                             title: "Usuario del Dominio!",   */
/*                             text: "Seguro desea dara baja al Usuario del Dominio?",   */
/*                             type: "warning",   */
/*                             showCancelButton: true,   */
/*                             confirmButtonColor: "#DD6B55",   */
/*                             confirmButtonText: "Si, Dar Baja!",   */
/*                             cancelButtonText: "No, Cancelar!",   */
/*                             closeOnConfirm: false,   */
/*                             closeOnCancel: false */
/*                         }, function(isConfirm){   */
/*                             if (isConfirm) {    */
/* */
/*                                 var values = row.val();*/
/* */
/*                                 $.post('{{path('usuario_dominio')}}', { 'action': 'eliminar_usuario_dominio', 'id': values.id  })*/
/*                                         .done(function (d) {  */
/*                                           row.delete();*/
/* */
/*                                           if (d == true){*/
/*                                              swal({   */
/*                                                 title: "Eliminar!",   */
/*                                                 text: "Se el dio baja correctamente el Usuario del Dominio!",  */
/*                                                 type:"success", */
/*                                                 timer: 2500,   */
/*                                                 showConfirmButton: false */
/*                                             });                                           */
/*                                           }                                          */
/*                                         }).fail(function () {*/
/*                                           alerta_error();*/
/*                                       });                                 */
/*                                */
/*                             } else {    */
/*                                 */
/*                                 swal({   */
/*                                     title: "Cancelar!",   */
/*                                     text: "Dar baja del Usuario del Dominio fue cancelado!",  */
/*                                     type:"error", */
/*                                     timer: 2500,   */
/*                                     showConfirmButton: false */
/*                                 });*/
/*                             } */
/*                         }); */
/*                    } */
/* */
/*                   */
/*                 }*/
/*               }*/
/*           });*/
/* */
/*           $editor.on('submit', function(e){*/
/*             if (this.checkValidity && !this.checkValidity()) return;*/
/*             e.preventDefault();*/
/*             */
/*             navNacional = ($("#navNacional").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;*/
/*             navInternet = ($("#navInternet").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;*/
/*             emailNacional = ($("#emailNacional").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;*/
/*             emailInternet = ($("#emailInternet").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;*/
/*             chat = ($("#chat").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;*/
/*             ftp = ($("#ftp").parents('div').hasClass('icheckbox_square-red checked') == true)?1:0;*/
/* */
/*             zunAcc = ($("#zunAcc").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             zunAft = ($("#zunAft").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             zunUtil = ($("#zunUtil").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             zunPms = ($("#zunPms").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             zunPos = ($("#zunPos").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             zunStock = ($("#zunStock").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             zunIcs = ($("#zunIcs").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             zunSa = ($("#zunSa").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             abacoNomina = ($("#abacoNomina").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             habitat = ($("#habitat").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             sarh = ($("#sarh").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             sstt = ($("#sstt").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             reservas = ($("#reservas").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             compras = ($("#compras").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             inHova = ($("#inHova").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             aInformatica = ($("#aInformatica").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/*             aListar = ($("#aListar").parents('div').hasClass('icheckbox_square-blue checked') == true)?1:0;*/
/* */
/*             var nombre_correo =$("select#select_correo option[value='"+$editor.find('#select_correo').val()+"']").attr('data-id');*/
/*             var nombre_cargo =$("select#select_cargo option[value='"+$editor.find('#select_cargo').val()+"']").attr('data-id');*/
/*             var nombre_usuario_red =$("select#select_usuario_red option[value='"+$editor.find('#select_usuario_red').val()+"']").attr('data-id');*/
/*             var nombre_local =$("select#select_local option[value='"+$editor.find('#select_local').val()+"']").attr('data-id');*/
/* */
/*             var row = $modal.data('row'),*/
/*                 values = {*/
/*                   id: $editor.find('#id').val(),     */
/*                   ci: $editor.find('#ci').val(),*/
/*                   nombre: $editor.find('#nombre').val(),*/
/*                   papellido: $editor.find('#papellido').val(),*/
/*                   sapellido: $editor.find('#sapellido').val(),*/
/*                   observacion: $editor.find('#observacion').val(),*/
/*                   id_correo: $editor.find('#select_correo').val(),*/
/*                   id_cargo: $editor.find('#select_cargo').val(),*/
/*                   id_usuario_red: $editor.find('#select_usuario_red').val(),*/
/*                   id_local: $editor.find('#select_local').val(),*/
/* */
/*                   select_correo: nombre_correo,*/
/*                   select_cargo: nombre_cargo,*/
/*                   select_usuario_red: nombre_usuario_red,*/
/*                   select_local: nombre_local,*/
/*                   fecha_creacion: $editor.find('#fecha_creacion').val(),*/
/* */
/*                   navNacional: navNacional,*/
/*                   navInternet: navInternet,*/
/*                   emailNacional: emailNacional,*/
/*                   emailInternet: emailInternet,*/
/*                   chat: chat,*/
/*                   ftp: ftp,*/
/*                   */
/*                   zunAcc : zunAcc,*/
/*                   zunAft : zunAft,*/
/*                   zunUtil : zunUtil,*/
/*                   zunPms : zunPms,*/
/*                   zunPos : zunPos,*/
/*                   zunStock : zunStock,*/
/*                   zunIcs : zunIcs,*/
/*                   zunSa : zunSa,*/
/*                   abacoNomina : abacoNomina,*/
/*                   habitat : habitat,*/
/*                   sarh : sarh,*/
/*                   sstt : sstt,*/
/*                   compras : compras,*/
/*                   reservas : reservas,*/
/*                   inHova : inHova,*/
/*                   aInformatica : aInformatica,*/
/*                   aListar : aListar*/
/* */
/*                 };*/
/* */
/*                 if (row instanceof FooTable.Row){*/
/*                   row.val(values);*/
/*                   $.post('{{path('usuario_dominio')}}', { 'action': 'editar_usuario_dominio', 'usuario': values }).fail(function () { alerta_error();});*/
/*                 }else{*/
/* */
/*                   $.post('{{path('usuario_dominio')}}', { 'action': 'add_usuario_dominio', 'usuario': values }).done(function(id){*/
/* */
/*                         values.id = id;*/
/*                         values.edit = '<div class="btn-group btn-group-solid"><button data-toggle="tooltip" title="Exportar SOLICITUD Y ASIGNACIÓN DE SERVICIOS INFORMÁTICOS" type="button" class="btn btn-sm btn-warning exportar_usuario_dominio" data-id ='+id+'> <i class="mdi mdi-file-word-box"> </i> Exp. </button> </div>'*/
/*                         ft.rows.add(values);*/
/* */
/*                   }).fail(function () { alerta_error();});                */
/*                 } */
/*                 $modal.modal('hide');*/
/*           });*/
/* */
/*         //cargar listado */
/*         $('#usuario-dominio-boton').on('click', function (e) {*/
/*           */
/*           if(baja == 0){*/
/*               $(this).attr('class', 'btn btn-sm btn-primary m-l-10');*/
/*               $(this).html('<i class="mdi mdi-thumb-down-outline"> </i> Usuarios del Dominio'); */
/*               baja = 1;*/
/*             }else{*/
/*               $(this).attr('class', 'btn btn-sm btn-danger m-l-10');*/
/*               $(this).html('<i class="mdi mdi-thumb-up-outline"> </i> Usuarios del Dominio Bajas'); */
/*               baja = 0;*/
/*             }*/
/*           e.preventDefault();*/
/*           */
/*             $.post('{{path('usuario_dominio')}}', { 'action': 'rows', 'baja':baja }).done(function(rows){*/
/*                 ft.rows.load(rows);*/
/*             }).fail(function () { alerta_error()});               */
/*         });*/
/*           */
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
/*           */
/*         jQuery('.date-picker').datepicker({*/
/*         autoclose: true,*/
/*         todayHighlight: true*/
/*     });*/
/* */
/*             */
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
