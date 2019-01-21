<?php

/* PiedraBundle:include:sidebar.html.twig */
class __TwigTemplate_64ba3381a4a3cf500624afafa1f3988881339c0814d1d59840cb709c4c508974 extends Twig_Template
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
        echo "<div class=\"page-sidebar-wrapper\">
\t\t<!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
\t\t<!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
\t\t<div class=\"page-sidebar navbar-collapse collapse\">
\t\t\t<!-- BEGIN SIDEBAR MENU -->
\t\t\t<!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
\t\t\t<!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
\t\t\t<!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
\t\t\t<!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
\t\t\t<!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
\t\t\t<!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
\t\t\t<ul class=\"page-sidebar-menu \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
\t\t\t\t

\t\t\t\t";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "

\t\t\t\t<li class=\"start \">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<span class=\"title\">HOME</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t
\t\t\t\t</li>
\t\t\t\t<!-- END ANGULARJS LINK -->
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-settings\"></i>
\t\t\t\t\t<span class=\"title\">Gestión Piedra Movida</span>
\t\t\t\t\t<span class=\"arrow \"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t";
            // line 41
            echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("gestionar_usuario_dominio");
            echo "\"> - Usuarios Dominio</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("adicionar_documento");
            echo "\">- Documento</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("adicionar_password_setup");
            echo "\"> - Password Setup</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("gestionar_telefono");
            echo "\"> - Teléfonos </a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-settings\"></i>
\t\t\t\t\t<span class=\"title\">Gestión Bajas</span>
\t\t\t\t\t<span class=\"arrow \"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("inventario_baja");
            echo "\"> - Inventario </a>
\t\t\t\t\t\t</li>\t

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("baja_usuario_dominio");
            echo "\"> - Usuario Dominio </a>
\t\t\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-settings\"></i>
\t\t\t\t\t<span class=\"title\">Nomencladores</span>
\t\t\t\t\t<span class=\"arrow \"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("gestionar_usuario_red");
            echo "\"> - Usuarios Red</a>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("gestionar_correo");
            echo "\"> - Correos </a>
\t\t\t\t\t\t</li>\t

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("gestionar_cargo");
            echo "\"> - Cargos</a>
\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t";
        }
        // line 104
        echo "

\t\t\t\t";
        // line 106
        if ($this->env->getExtension('security')->isGranted("ROLE_RRHH")) {
            // line 107
            echo "
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-settings\"></i>
\t\t\t\t\t<span class=\"title\">Gestión RRHH</span>
\t\t\t\t\t<span class=\"arrow \"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("gestionar_unidad");
            echo "\"> - Entidad</a>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("adicionar_contrato");
            echo "\"> - Adicionar Contrato </a>
\t\t\t\t\t\t</li>\t\t\t\t\t\t

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("listado_contrato");
            echo "\"> - Listado Contrato </a>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t";
        }
        // line 130
        echo "
\t\t\t\t";
        // line 131
        if ($this->env->getExtension('security')->isGranted("ROLE_INFORMATICA")) {
            // line 132
            echo "
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-settings\"></i>
\t\t\t\t\t<span class=\"title\">Gestión INFORMÁTICA</span>
\t\t\t\t\t<span class=\"arrow \"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 142
            echo $this->env->getExtension('routing')->getPath("mastro_general");
            echo "\"> - Maestros Generales </a>
\t\t\t\t\t\t</li>\t

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("equipo");
            echo "\"> - Inventario Equipo </a>
\t\t\t\t\t\t</li>\t\t\t\t

\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t";
        }
        // line 155
        echo "

\t\t\t\t
\t\t\t\t
\t\t\t</ul>
\t\t\t<!-- END SIDEBAR MENU -->
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "PiedraBundle:include:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 155,  214 => 146,  207 => 142,  195 => 132,  193 => 131,  190 => 130,  180 => 123,  173 => 119,  167 => 116,  156 => 107,  154 => 106,  150 => 104,  140 => 97,  133 => 93,  127 => 90,  110 => 76,  103 => 72,  84 => 56,  77 => 52,  70 => 48,  63 => 44,  58 => 41,  37 => 16,  35 => 15,  19 => 1,);
    }
}
/* <div class="page-sidebar-wrapper">*/
/* 		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->*/
/* 		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->*/
/* 		<div class="page-sidebar navbar-collapse collapse">*/
/* 			<!-- BEGIN SIDEBAR MENU -->*/
/* 			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->*/
/* 			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->*/
/* 			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->*/
/* 			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->*/
/* 			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->*/
/* 			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->*/
/* 			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">*/
/* 				*/
/* */
/* 				{% if is_granted('ROLE_ADMIN') %}*/
/* */
/* */
/* 				<li class="start ">*/
/* 					<a href="#">*/
/* 					<i class="icon-home"></i>*/
/* 					<span class="title">HOME</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				*/
/* 				*/
/* 				</li>*/
/* 				<!-- END ANGULARJS LINK -->*/
/* 				<li>*/
/* 					<a href="javascript:;">*/
/* 					<i class="icon-settings"></i>*/
/* 					<span class="title">Gestión Piedra Movida</span>*/
/* 					<span class="arrow "></span>*/
/* 					</a>*/
/* 					<ul class="sub-menu">*/
/* 						{#<li>*/
/* 							<a href="{{path('adicionar_departamento')}}">- Departamento</a>*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<a href="{{path('adicionar_pc')}}"> - Pc</a>#}*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<a href="{{path('gestionar_usuario_dominio')}}"> - Usuarios Dominio</a>*/
/* 						</li>*/
/* */
/* 						<li>*/
/* 							<a href="{{path('adicionar_documento')}}">- Documento</a>*/
/* 						</li>*/
/* */
/* 						<li>*/
/* 							<a href="{{path('adicionar_password_setup')}}"> - Password Setup</a>*/
/* 						</li>*/
/* */
/* 						<li>*/
/* 							<a href="{{path('gestionar_telefono')}}"> - Teléfonos </a>*/
/* 						</li>*/
/* */
/* 							*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* 				<li>*/
/* 					<a href="javascript:;">*/
/* 					<i class="icon-settings"></i>*/
/* 					<span class="title">Gestión Bajas</span>*/
/* 					<span class="arrow "></span>*/
/* 					</a>*/
/* 					<ul class="sub-menu">*/
/* 						<li>*/
/* 							<a href="{{path('inventario_baja')}}"> - Inventario </a>*/
/* 						</li>	*/
/* */
/* 						<li>*/
/* 							<a href="{{path('baja_usuario_dominio')}}"> - Usuario Dominio </a>*/
/* 						</li>					*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* 				<li>*/
/* 					<a href="javascript:;">*/
/* 					<i class="icon-settings"></i>*/
/* 					<span class="title">Nomencladores</span>*/
/* 					<span class="arrow "></span>*/
/* 					</a>*/
/* 					<ul class="sub-menu">*/
/* 						<li>*/
/* 							<a href="{{path('gestionar_usuario_red')}}"> - Usuarios Red</a>*/
/* 						</li>	*/
/* 						<li>*/
/* 							<a href="{{path('gestionar_correo')}}"> - Correos </a>*/
/* 						</li>	*/
/* */
/* 						<li>*/
/* 							<a href="{{path('gestionar_cargo')}}"> - Cargos</a>*/
/* 						</li>										*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* 				{%endif%}*/
/* */
/* */
/* 				{% if is_granted('ROLE_RRHH') %}*/
/* */
/* 				<li>*/
/* 					<a href="javascript:;">*/
/* 					<i class="icon-settings"></i>*/
/* 					<span class="title">Gestión RRHH</span>*/
/* 					<span class="arrow "></span>*/
/* 					</a>*/
/* 					<ul class="sub-menu">*/
/* 						<li>*/
/* 							<a href="{{path('gestionar_unidad')}}"> - Entidad</a>*/
/* 						</li>	*/
/* 						<li>*/
/* 							<a href="{{path('adicionar_contrato')}}"> - Adicionar Contrato </a>*/
/* 						</li>						*/
/* */
/* 						<li>*/
/* 							<a href="{{path('listado_contrato')}}"> - Listado Contrato </a>*/
/* 						</li>	*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* 				{% endif%}*/
/* */
/* 				{% if is_granted('ROLE_INFORMATICA') %}*/
/* */
/* 				<li>*/
/* 					<a href="javascript:;">*/
/* 					<i class="icon-settings"></i>*/
/* 					<span class="title">Gestión INFORMÁTICA</span>*/
/* 					<span class="arrow "></span>*/
/* 					</a>*/
/* 					<ul class="sub-menu">*/
/* 						*/
/* 						<li>*/
/* 							<a href="{{path('mastro_general')}}"> - Maestros Generales </a>*/
/* 						</li>	*/
/* */
/* 						<li>*/
/* 							<a href="{{path('equipo')}}"> - Inventario Equipo </a>*/
/* 						</li>				*/
/* */
/* 							*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* 				{% endif%}*/
/* */
/* */
/* 				*/
/* 				*/
/* 			</ul>*/
/* 			<!-- END SIDEBAR MENU -->*/
/* 		</div>*/
/* 	</div>*/
