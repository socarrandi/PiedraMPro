<?php

/* ::base.html.twig */
class __TwigTemplate_6eccc98547e65e0493b794c63717c31e3167e1ae168fb74ecd1152f8ddca075e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'jsend' => array($this, 'block_jsend'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"Keywords\" content=\"jquery.confirm, jquery confirm, jquery alert, jquery prompt, jquery dialog, javascript, bootstrap\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        
        
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\"/>        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\"/>
        <!-- END GLOBAL MANDATORY STYLES -->



        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        <!-- BEGIN THEME STYLES -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/css/components.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/css/plugins.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/admin/layout4/css/layout.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/admin/layout4/css/themes/light.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/admin/layout4/css/custom.css"), "html", null, true);
        echo "\"/>
        <!-- END THEME STYLES -->

        

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body class=\"page-header-fixed page-sidebar-closed-hide-logo login\">

        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        echo "        


        <script  src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>

        <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script  src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>        
        <script  src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

        

        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script  src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/global/scripts/metronic.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/admin/layout4/scripts/layout.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/piedra/admin/layout4/scripts/demo.js"), "html", null, true);
        echo "\"></script>
       
       ";
        // line 62
        $this->displayBlock('jsend', $context, $blocks);
        // line 63
        echo "
        <script>
            jQuery(document).ready(function() {       
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
                Demo.init(); // init demo features


                       
               
                            
            });

        </script>

    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "      ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    // line 62
    public function block_jsend($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 62,  211 => 55,  206 => 37,  200 => 20,  194 => 6,  173 => 63,  171 => 62,  166 => 60,  162 => 59,  158 => 58,  154 => 56,  152 => 55,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  111 => 41,  107 => 40,  101 => 37,  93 => 32,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 21,  63 => 20,  55 => 15,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="Keywords" content="jquery.confirm, jquery confirm, jquery alert, jquery prompt, jquery dialog, javascript, bootstrap"/>*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         */
/*         */
/*         <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/global/plugins/font-awesome/css/font-awesome.min.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/global/plugins/simple-line-icons/simple-line-icons.min.css')}}"/>        */
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/global/plugins/bootstrap/css/bootstrap.min.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/global/plugins/uniform/css/uniform.default.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>*/
/*         <!-- END GLOBAL MANDATORY STYLES -->*/
/* */
/* */
/* */
/*         {% block stylesheets %}      {% endblock %}*/
/* */
/*         <!-- BEGIN THEME STYLES -->*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/global/css/components.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/global/css/plugins.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/admin/layout4/css/layout.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/admin/layout4/css/themes/light.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/piedra/admin/layout4/css/custom.css')}}"/>*/
/*         <!-- END THEME STYLES -->*/
/* */
/*         */
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     </head>*/
/*     <body class="page-header-fixed page-sidebar-closed-hide-logo login">*/
/* */
/*         {% block body %}{% endblock %}        */
/* */
/* */
/*         <script  src="{{asset('bundles/piedra/global/plugins/jquery.min.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/jquery-migrate.min.js')}}"></script>*/
/* */
/*         <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/jquery-ui/jquery-ui.min.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/bootstrap/js/bootstrap.min.js')}}"></script>        */
/*         <script  src="{{asset('bundles/piedra/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/jquery.blockui.min.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/jquery.cokie.min.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/uniform/jquery.uniform.min.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>*/
/* */
/*         */
/* */
/*         {% block javascripts %} {% endblock %}*/
/* */
/*         <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/*         <script  src="{{asset('bundles/piedra/global/scripts/metronic.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/admin/layout4/scripts/layout.js')}}"></script>*/
/*         <script  src="{{asset('bundles/piedra/admin/layout4/scripts/demo.js')}}"></script>*/
/*        */
/*        {% block jsend %} {% endblock %}*/
/* */
/*         <script>*/
/*             jQuery(document).ready(function() {       */
/*                 Metronic.init(); // init metronic core components*/
/*                 Layout.init(); // init current layout*/
/*                 Demo.init(); // init demo features*/
/* */
/* */
/*                        */
/*                */
/*                             */
/*             });*/
/* */
/*         </script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
