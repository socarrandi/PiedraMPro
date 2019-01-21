<?php

/* PiedraBundle:include:header.html.twig */
class __TwigTemplate_53d80c2e5fd6a185d1436db8731ab272c45cb0d4703a3b8573b2c775bce2880d extends Twig_Template
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
        echo "<div class=\"page-header navbar navbar-fixed-top\">
\t<!-- BEGIN HEADER INNER -->
\t<div class=\"page-header-inner\">
\t\t<!-- BEGIN LOGO -->
\t\t<div class=\"page-logo\">
\t\t\t<a href=\"index.html\">
\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/admin/layout4/img/logo-light.png"), "html", null, true);
        echo " \" alt=\"logo\" class=\"logo-default\"/>
\t\t\t</a>
\t\t\t<div class=\"menu-toggler sidebar-toggler\">
\t\t\t\t<!-- DOC: Remove the above \"hide\" to enable the sidebar toggler button on header -->
\t\t\t</div>
\t\t</div>
\t\t<!-- END LOGO -->
\t\t<!-- BEGIN RESPONSIVE MENU TOGGLER -->
\t\t<a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t</a>
\t\t<!-- END RESPONSIVE MENU TOGGLER -->
\t\t
\t\t<!-- BEGIN PAGE TOP -->
\t\t<div class=\"page-top\">
\t\t\t<!-- BEGIN HEADER SEARCH BOX -->
\t\t\t<!-- DOC: Apply \"search-form-expanded\" right after the \"search-form\" class to have half expanded search box -->
\t\t\t<form class=\"search-form\" action=\"extra_search.html\" method=\"GET\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" placeholder=\"Search...\" name=\"query\">
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<a href=\"javascript:;\" class=\"btn submit\"><i class=\"icon-magnifier\"></i></a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<!-- END HEADER SEARCH BOX -->
\t\t\t<!-- BEGIN TOP NAVIGATION MENU -->
\t\t\t<div class=\"top-menu\">
\t\t\t\t<ul class=\"nav navbar-nav pull-right\">
\t\t\t\t\t<li class=\"separator hide\">
\t\t\t\t\t</li>

\t\t\t\t\t ";
        // line 38
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 39
            echo "

\t\t\t\t\t <li class=\"dropdown dropdown-user dropdown-dark\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
            echo " | logoff 
\t\t\t\t\t\t\t\t\t<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>


                        
\t\t\t\t\t\t
\t\t\t\t\t</li>

                            ";
        } else {
            // line 56
            echo "\t\t\t                     <li class=\"dropdown dropdown-user dropdown-dark\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
\t\t\t\t\t\t\t\t\t<span class=\"username username-hide-on-mobile\">
\t\t\t\t\t\t\t\t\tLogin </span>
\t\t\t\t\t\t\t\t\t<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
                          ";
        }
        // line 65
        echo "

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- END TOP NAVIGATION MENU -->
\t\t</div>
\t\t<!-- END PAGE TOP -->
\t</div>
\t<!-- END HEADER INNER -->
</div>";
    }

    public function getTemplateName()
    {
        return "PiedraBundle:include:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 65,  91 => 57,  88 => 56,  73 => 44,  68 => 42,  63 => 39,  61 => 38,  27 => 7,  19 => 1,);
    }
}
/* <div class="page-header navbar navbar-fixed-top">*/
/* 	<!-- BEGIN HEADER INNER -->*/
/* 	<div class="page-header-inner">*/
/* 		<!-- BEGIN LOGO -->*/
/* 		<div class="page-logo">*/
/* 			<a href="index.html">*/
/* 			<img src="{{asset('bundles/piedra/admin/layout4/img/logo-light.png')}} " alt="logo" class="logo-default"/>*/
/* 			</a>*/
/* 			<div class="menu-toggler sidebar-toggler">*/
/* 				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- END LOGO -->*/
/* 		<!-- BEGIN RESPONSIVE MENU TOGGLER -->*/
/* 		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 		</a>*/
/* 		<!-- END RESPONSIVE MENU TOGGLER -->*/
/* 		*/
/* 		<!-- BEGIN PAGE TOP -->*/
/* 		<div class="page-top">*/
/* 			<!-- BEGIN HEADER SEARCH BOX -->*/
/* 			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->*/
/* 			<form class="search-form" action="extra_search.html" method="GET">*/
/* 				<div class="input-group">*/
/* 					<input type="text" class="form-control input-sm" placeholder="Search..." name="query">*/
/* 					<span class="input-group-btn">*/
/* 					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>*/
/* 					</span>*/
/* 				</div>*/
/* 			</form>*/
/* 			<!-- END HEADER SEARCH BOX -->*/
/* 			<!-- BEGIN TOP NAVIGATION MENU -->*/
/* 			<div class="top-menu">*/
/* 				<ul class="nav navbar-nav pull-right">*/
/* 					<li class="separator hide">*/
/* 					</li>*/
/* */
/* 					 {% if app.user %}*/
/* */
/* */
/* 					 <li class="dropdown dropdown-user dropdown-dark">*/
/* 									<a href="{{path('logout')}}" class="dropdown-toggle">*/
/* 									*/
/* 									{{ app.user.name }} | logoff */
/* 									<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->*/
/* 									</a>*/
/* 									*/
/* 								</li>*/
/* */
/* */
/*                         */
/* 						*/
/* 					</li>*/
/* */
/*                             {% else %}*/
/* 			                     <li class="dropdown dropdown-user dropdown-dark">*/
/* 									<a href="{{path('login')}}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/* 									<span class="username username-hide-on-mobile">*/
/* 									Login </span>*/
/* 									<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->*/
/* 									</a>*/
/* 									*/
/* 								</li>*/
/*                           {% endif %}*/
/* */
/* */
/* 					*/
/* 					*/
/* 				</ul>*/
/* 			</div>*/
/* 			<!-- END TOP NAVIGATION MENU -->*/
/* 		</div>*/
/* 		<!-- END PAGE TOP -->*/
/* 	</div>*/
/* 	<!-- END HEADER INNER -->*/
/* </div>*/
