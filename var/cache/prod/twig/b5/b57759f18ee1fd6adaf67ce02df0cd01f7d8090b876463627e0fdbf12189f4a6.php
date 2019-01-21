<?php

/* InformaticaBundle:include:aside.html.twig */
class __TwigTemplate_f8e46acfd2abe86449335143cf78379fd1029d4c8b9b643fdd6fb3de36a24fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"left-sidebar\">
            <!-- Sidebar scroll-->
            <div class=\"scroll-sidebar\">
                <!-- Sidebar navigation-->
                <nav class=\"sidebar-nav active\">
                    <ul id=\"sidebarnav\" class=\"in\">
                        <li class=\"nav-devider\"></li>
                        <li class=\"nav-small-cap\">PERSONAL</li>
                        
                        <!-- Gestion Informatica -->
                        ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_INFORMATICA")) {
            // line 12
            echo "                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-archive\"></i><span class=\"hide-menu\">INVENTARIO</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">                            \t
\t\t\t\t\t\t\t\t<li> <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("equipo");
            echo "\"> - Equipo </a> </li>                                 
                                <li> <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("movimiento_aft");
            echo "\"> - Movimientos AFT </a> </li>  
                                <li> <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("movimiento_pieza");
            echo "\"> - Movimientos Piezas </a> </li>                                                                
                            </ul>
                        </li>
                        ";
        }
        // line 20
        echo "
                        ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-archive\"></i><span class=\"hide-menu\">MAESTROS GENERALES</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">                             
                                <li> <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("maestro_general_pro");
            echo "\"> - Maestros Generales </a> </li>
                                <li> <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("equipo_aprobado");
            echo "\"> - Equipos Aprobados </a> </li>                                
                            </ul>
                        </li>
                        ";
        }
        // line 30
        echo "
                        
                        <!-- END Gestion Informatica -->  

                        <!-- Gestion -->
                        ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                        <li> <a class=\"has-arrow waves-effect\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-archive\"></i><span class=\"hide-menu\">INFORMÁTICA</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">                            
                            
                            <li> <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("usuario_dominio");
            echo "\"> - Usuarios Dominio Pro</a> </li>
                            <li> <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("gestionar_usuario_dominio");
            echo "\"> - Usuarios Dominio</a> </li>
                            <li> <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("adicionar_documento");
            echo "\">- Documento</a></li>
                            <li> <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("adicionar_password_setup");
            echo "\"> - Password Setup</a></li>
                            <li> <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("gestionar_telefono");
            echo "\"> - Teléfonos </a></li>  
                            <li> <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("telefono");
            echo "\"> - Teléfonos </a></li>
                                                              
                            </ul>
                        </li>
                        ";
        }
        // line 48
        echo " 
                        <!-- END Gestion -->                    
                      
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:include:aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 48,  107 => 44,  103 => 43,  99 => 42,  95 => 41,  91 => 40,  87 => 39,  82 => 36,  80 => 35,  73 => 30,  66 => 26,  62 => 25,  57 => 22,  55 => 21,  52 => 20,  45 => 16,  41 => 15,  37 => 14,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <aside class="left-sidebar">*/
/*             <!-- Sidebar scroll-->*/
/*             <div class="scroll-sidebar">*/
/*                 <!-- Sidebar navigation-->*/
/*                 <nav class="sidebar-nav active">*/
/*                     <ul id="sidebarnav" class="in">*/
/*                         <li class="nav-devider"></li>*/
/*                         <li class="nav-small-cap">PERSONAL</li>*/
/*                         */
/*                         <!-- Gestion Informatica -->*/
/*                         {% if is_granted('ROLE_INFORMATICA') %}*/
/*                         <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-archive"></i><span class="hide-menu">INVENTARIO</span></a>*/
/*                             <ul aria-expanded="false" class="collapse">                            	*/
/* 								<li> <a href="{{path('equipo')}}"> - Equipo </a> </li>                                 */
/*                                 <li> <a href="{{path('movimiento_aft')}}"> - Movimientos AFT </a> </li>  */
/*                                 <li> <a href="{{path('movimiento_pieza')}}"> - Movimientos Piezas </a> </li>                                                                */
/*                             </ul>*/
/*                         </li>*/
/*                         {% endif %}*/
/* */
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*                         <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-archive"></i><span class="hide-menu">MAESTROS GENERALES</span></a>*/
/*                             <ul aria-expanded="false" class="collapse">                             */
/*                                 <li> <a href="{{path('maestro_general_pro')}}"> - Maestros Generales </a> </li>*/
/*                                 <li> <a href="{{path('equipo_aprobado')}}"> - Equipos Aprobados </a> </li>                                */
/*                             </ul>*/
/*                         </li>*/
/*                         {% endif %}*/
/* */
/*                         */
/*                         <!-- END Gestion Informatica -->  */
/* */
/*                         <!-- Gestion -->*/
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                         <li> <a class="has-arrow waves-effect" href="#" aria-expanded="false"><i class="mdi mdi-archive"></i><span class="hide-menu">INFORMÁTICA</span></a>*/
/*                             <ul aria-expanded="false" class="collapse">                            */
/*                             */
/*                             <li> <a href="{{path('usuario_dominio')}}"> - Usuarios Dominio Pro</a> </li>*/
/*                             <li> <a href="{{path('gestionar_usuario_dominio')}}"> - Usuarios Dominio</a> </li>*/
/*                             <li> <a href="{{path('adicionar_documento')}}">- Documento</a></li>*/
/*                             <li> <a href="{{path('adicionar_password_setup')}}"> - Password Setup</a></li>*/
/*                             <li> <a href="{{path('gestionar_telefono')}}"> - Teléfonos </a></li>  */
/*                             <li> <a href="{{path('telefono')}}"> - Teléfonos </a></li>*/
/*                                                               */
/*                             </ul>*/
/*                         </li>*/
/*                         {% endif %} */
/*                         <!-- END Gestion -->                    */
/*                       */
/*                     </ul>*/
/*                 </nav>*/
/*                 <!-- End Sidebar navigation -->*/
/*             </div>*/
/*             <!-- End Sidebar scroll-->*/
/*         </aside>*/
