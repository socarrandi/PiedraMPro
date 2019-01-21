<?php

/* InformaticaBundle:Nomenclador:EquipoAprobado.html.twig */
class __TwigTemplate_70c3b5ccf1c94c14a840b26a2597d0fe63db5be42a116ea7614688b0112f379f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_pro.html.twig", "InformaticaBundle:Nomenclador:EquipoAprobado.html.twig", 1);
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
        echo " Equipos Aprobados ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- BEGIN PAGE LEVEL STYLES -->

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css"), "html", null, true);
        echo "\"/>

  <!--alerts CSS -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css"), "html", null, true);
        echo "\"/>



   
   
    <!-- END PAGE LEVEL STYLES -->
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
  ";
        // line 26
        echo twig_include($this->env, $context, "InformaticaBundle:include:preloder.html.twig", array("loader_label" => "Listados de Equipos Aprobados"));
        echo "

  ";
        // line 28
        $this->loadTemplate("InformaticaBundle:include:header.html.twig", "InformaticaBundle:Nomenclador:EquipoAprobado.html.twig", 28)->display($context);
        // line 29
        echo "  ";
        $this->loadTemplate("InformaticaBundle:include:aside.html.twig", "InformaticaBundle:Nomenclador:EquipoAprobado.html.twig", 29)->display($context);
        // line 30
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
        // line 41
        echo twig_include($this->env, $context, "InformaticaBundle:include:page_titles.html.twig", array("titulo_pagina" => "Maestros Generales", "session" => "Informática"));
        echo "                          
                        
    

      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">

          <div class=\"card\">            
            <div class=\"card-body\">  
              <div class=\"d-flex\">                  
                <h4 id=\"card-title-mov\" class=\"card-title\"> <span class=\"lstick\"></span>LISTADO TIPOS DE EQUIPOS</h4>
              </div>
               

              <table id=\"table_equipos_aprobados\" data-toggle=\"table\" data-mobile-responsive=\"true\" class=\"table table-hover table-responsive\">
                <thead>
                  <tr class=\"uppercase\">
                    <th> ID </th>
                    <th> UNIDAD </th>
                    <th> TIPO EQUIPO</th>
                    <th> CANTIDAD APROBADOS</th>
                  </tr>
                </thead>

                <tbody id=\"tbody_equipos_aprobados\">
                  
                  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos_aprobados"]) ? $context["equipos_aprobados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["eq"]) {
            // line 68
            echo "
                      <tr>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eq"], "unidad", array()), "unidad", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eq"], "tipoEquipo", array()), "tipoEquipo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "cantidad", array()), "html", null, true);
            echo "</td>
                      </tr>

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                </tbody>

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
        // line 98
        $this->loadTemplate("InformaticaBundle:include:footer.html.twig", "InformaticaBundle:Nomenclador:EquipoAprobado.html.twig", 98)->display($context);
        // line 99
        echo "    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>

  
  

  </div>


";
    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        // line 113
        echo "
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    

    <!-- Plugin JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>  
     <!--Custom JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/custom.min.js"), "html", null, true);
        echo "\"></script>

     <!-- Table Edit -->    
    <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/jquery-tabledit/jquery.tabledit2.js"), "html", null, true);
        echo "\"></script>


    <!-- Sweet-Alert  -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>    
    <script  src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js"), "html", null, true);
        echo "\"></script>




    <script type=\"text/javascript\" charset=\"utf-8\" async defer>

    \$(window).on('load', function() {     
                 

       \$('#table_equipos_aprobados').Tabledit({
        url: '";
        // line 139
        echo $this->env->getExtension('routing')->getPath("equipo_aprobado");
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
          editable: [ [3, 'cantidad'] ]
        }, 
      });
    
       


        function alerta_error(){
         \$.alert({
              title: 'Error',
              icon: 'fa fa-warning',
              type: 'red',
              content: 'Algo salió mal, por favor vuelva a intentarlo'                      
          });
        }


        // filtrar tabla
        \$('#buscar').on('keyup',function(){
          var that = this, \$allListElements = \$('#table_telefono').find('tbody').find('tr');
          var \$matchingListElements = \$allListElements.filter(function(i, li){
          var listItemText = \$(li).text().toUpperCase(),
          searchText = that.value.toUpperCase();
          return ~listItemText.indexOf(searchText);
          });
          \$allListElements.hide();
          \$matchingListElements.show();
        });


        


        // end document
      });  
        


              
      

   </script>

";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:Nomenclador:EquipoAprobado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 139,  230 => 128,  226 => 127,  219 => 123,  213 => 120,  208 => 118,  201 => 113,  198 => 112,  183 => 99,  181 => 98,  158 => 77,  148 => 73,  144 => 72,  140 => 71,  136 => 70,  132 => 68,  128 => 67,  99 => 41,  86 => 30,  83 => 29,  81 => 28,  76 => 26,  73 => 25,  70 => 24,  58 => 13,  54 => 12,  48 => 9,  44 => 8,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::base_pro.html.twig' %}*/
/* */
/* {% block title %} Equipos Aprobados {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- BEGIN PAGE LEVEL STYLES -->*/
/* */
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/footable3/footable-standalone/css/footable.standalone.min.css')}}"/>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css')}}"/>*/
/* */
/*   <!--alerts CSS -->*/
/*   <link href="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/css/jquery-confirm.css')}}"/>*/
/* */
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
/*   {{ include('InformaticaBundle:include:preloder.html.twig', {'loader_label':'Listados de Equipos Aprobados' } ) }}*/
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
/*         {{ include('InformaticaBundle:include:page_titles.html.twig', {'titulo_pagina':'Maestros Generales', 'session': 'Informática' } ) }}                          */
/*                         */
/*     */
/* */
/*       <div class="row">*/
/*         <div class="col-md-12 col-sm-12">*/
/* */
/*           <div class="card">            */
/*             <div class="card-body">  */
/*               <div class="d-flex">                  */
/*                 <h4 id="card-title-mov" class="card-title"> <span class="lstick"></span>LISTADO TIPOS DE EQUIPOS</h4>*/
/*               </div>*/
/*                */
/* */
/*               <table id="table_equipos_aprobados" data-toggle="table" data-mobile-responsive="true" class="table table-hover table-responsive">*/
/*                 <thead>*/
/*                   <tr class="uppercase">*/
/*                     <th> ID </th>*/
/*                     <th> UNIDAD </th>*/
/*                     <th> TIPO EQUIPO</th>*/
/*                     <th> CANTIDAD APROBADOS</th>*/
/*                   </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody id="tbody_equipos_aprobados">*/
/*                   */
/*                   {% for eq in equipos_aprobados %}*/
/* */
/*                       <tr>*/
/*                         <td>{{ eq.id }}</td>*/
/*                         <td>{{ eq.unidad.unidad }}</td>*/
/*                         <td>{{ eq.tipoEquipo.tipoEquipo }}</td>*/
/*                         <td>{{ eq.cantidad }}</td>*/
/*                       </tr>*/
/* */
/*                   {% endfor%}*/
/* */
/*                 </tbody>*/
/* */
/*               </table>*/
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
/*      <!-- Table Edit -->    */
/*     <script type="text/javascript" src="{{asset('bundles/piedra/global/plugins/jquery-tabledit/jquery.tabledit2.js')}}"></script>*/
/* */
/* */
/*     <!-- Sweet-Alert  -->*/
/*     <script src="{{asset('bundles/informatica/adminpro/assets/plugins/sweetalert/sweetalert.min.js')}}"></script>    */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery-confirm-v3.3.0/js/jquery-confirm.js')}}"></script>*/
/* */
/* */
/* */
/* */
/*     <script type="text/javascript" charset="utf-8" async defer>*/
/* */
/*     $(window).on('load', function() {     */
/*                  */
/* */
/*        $('#table_equipos_aprobados').Tabledit({*/
/*         url: '{{path('equipo_aprobado')}}',*/
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
/*           editable: [ [3, 'cantidad'] ]*/
/*         }, */
/*       });*/
/*     */
/*        */
/* */
/* */
/*         function alerta_error(){*/
/*          $.alert({*/
/*               title: 'Error',*/
/*               icon: 'fa fa-warning',*/
/*               type: 'red',*/
/*               content: 'Algo salió mal, por favor vuelva a intentarlo'                      */
/*           });*/
/*         }*/
/* */
/* */
/*         // filtrar tabla*/
/*         $('#buscar').on('keyup',function(){*/
/*           var that = this, $allListElements = $('#table_telefono').find('tbody').find('tr');*/
/*           var $matchingListElements = $allListElements.filter(function(i, li){*/
/*           var listItemText = $(li).text().toUpperCase(),*/
/*           searchText = that.value.toUpperCase();*/
/*           return ~listItemText.indexOf(searchText);*/
/*           });*/
/*           $allListElements.hide();*/
/*           $matchingListElements.show();*/
/*         });*/
/* */
/* */
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
