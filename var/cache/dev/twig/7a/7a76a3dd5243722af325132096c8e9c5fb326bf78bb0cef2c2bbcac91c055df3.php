<?php

/* ::base_pro.html.twig */
class __TwigTemplate_29b18e0bb25b7cc7c299c49f0ff06f9d65e4a5476713f33f971806634a4187d1 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75381a46d4daa0c9be9723f159b33ca5547afb1be904280317504f3f50828aa6 = $this->env->getExtension("native_profiler");
        $__internal_75381a46d4daa0c9be9723f159b33ca5547afb1be904280317504f3f50828aa6->enter($__internal_75381a46d4daa0c9be9723f159b33ca5547afb1be904280317504f3f50828aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_pro.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/images/favicon.png"), "html", null, true);
        echo "\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap/css/selectpicker_update_boostrapv4.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/icheck/skins/all.css"), "html", null, true);
        echo "\"/>
    
    <!-- Date picker plugins css -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


    <!-- This page CSS -->

    ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
      
    <!--Toaster Popup message CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/c3-master/c3.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/toast-master/css/jquery.toast.css"), "html", null, true);
        echo "\"/>

  
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/style.css"), "html", null, true);
        echo "\"/>

    <!-- page css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/pages/form-icheck.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/pages/file-upload.css"), "html", null, true);
        echo "\"/>

    

      
    
    <!-- You can change the theme colors from here -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/colors/blue.css"), "html", null, true);
        echo "\"/>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
\t

</head>

<body class=\"fix-header card-no-border fix-sidebar\">

\t";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        echo " 


\t<!-- All Jquery ALL PAGE -->
    <!-- ============================================================== -->
    <script  src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script  src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery/jquery_1.11.3.js"), "html", null, true);
        echo "\"></script>


     
    <!-- Bootstrap popper Core JavaScript -->
    <script  src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script  src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    

    <!-- Date Picker Plugin JavaScript -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script  src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>    
    <!--Wave Effects -->
    <script  src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/waves.js"), "html", null, true);
        echo "\"></script>  
    <!--Menu sidebar -->
    <script  src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script> 

     <!--stickey kit -->
    <script  src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script> 
    <script  src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script> 

     <!-- icheck -->
     
    <script  src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>    
    <script  src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/icheck/icheck.init.js"), "html", null, true);
        echo "\"></script> 
    



        
    

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "
   

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_75381a46d4daa0c9be9723f159b33ca5547afb1be904280317504f3f50828aa6->leave($__internal_75381a46d4daa0c9be9723f159b33ca5547afb1be904280317504f3f50828aa6_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a6a3a32c1da05f7d099d28ac6ccc788aa691923315751b93261478ba3545af9 = $this->env->getExtension("native_profiler");
        $__internal_7a6a3a32c1da05f7d099d28ac6ccc788aa691923315751b93261478ba3545af9->enter($__internal_7a6a3a32c1da05f7d099d28ac6ccc788aa691923315751b93261478ba3545af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7a6a3a32c1da05f7d099d28ac6ccc788aa691923315751b93261478ba3545af9->leave($__internal_7a6a3a32c1da05f7d099d28ac6ccc788aa691923315751b93261478ba3545af9_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_580ad15d7069353f61525cca37db254be47fbd7e70c45c3c33d33c130a2f7e8c = $this->env->getExtension("native_profiler");
        $__internal_580ad15d7069353f61525cca37db254be47fbd7e70c45c3c33d33c130a2f7e8c->enter($__internal_580ad15d7069353f61525cca37db254be47fbd7e70c45c3c33d33c130a2f7e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "      ";
        
        $__internal_580ad15d7069353f61525cca37db254be47fbd7e70c45c3c33d33c130a2f7e8c->leave($__internal_580ad15d7069353f61525cca37db254be47fbd7e70c45c3c33d33c130a2f7e8c_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_3648bc460d67f310d8c1a4298bd07db362d36191e47b34cae229545b2f4b0153 = $this->env->getExtension("native_profiler");
        $__internal_3648bc460d67f310d8c1a4298bd07db362d36191e47b34cae229545b2f4b0153->enter($__internal_3648bc460d67f310d8c1a4298bd07db362d36191e47b34cae229545b2f4b0153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3648bc460d67f310d8c1a4298bd07db362d36191e47b34cae229545b2f4b0153->leave($__internal_3648bc460d67f310d8c1a4298bd07db362d36191e47b34cae229545b2f4b0153_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f269979767929cb00eb3010ca6f8b9dc8e8bcc9a87d29e884fe1c5e1a15d20f4 = $this->env->getExtension("native_profiler");
        $__internal_f269979767929cb00eb3010ca6f8b9dc8e8bcc9a87d29e884fe1c5e1a15d20f4->enter($__internal_f269979767929cb00eb3010ca6f8b9dc8e8bcc9a87d29e884fe1c5e1a15d20f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_f269979767929cb00eb3010ca6f8b9dc8e8bcc9a87d29e884fe1c5e1a15d20f4->leave($__internal_f269979767929cb00eb3010ca6f8b9dc8e8bcc9a87d29e884fe1c5e1a15d20f4_prof);

    }

    public function getTemplateName()
    {
        return "::base_pro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 105,  260 => 62,  248 => 28,  236 => 13,  223 => 112,  215 => 106,  213 => 105,  199 => 94,  195 => 93,  188 => 89,  184 => 88,  178 => 85,  173 => 83,  168 => 81,  162 => 78,  155 => 74,  151 => 73,  143 => 68,  139 => 67,  131 => 62,  114 => 48,  104 => 41,  100 => 40,  94 => 37,  87 => 33,  83 => 32,  78 => 29,  76 => 28,  68 => 23,  62 => 20,  57 => 18,  53 => 17,  49 => 16,  43 => 13,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <!-- Favicon icon -->*/
/*     <link rel="icon" type="image/png" sizes="16x16" href="{{asset('bundles/informatica/adminpro/assets/images/favicon.png')}}">*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap/css/bootstrap.min.css')}}"/>*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap/css/selectpicker_update_boostrapv4.css')}}"/>*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>*/
/*     */
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/icheck/skins/all.css')}}"/>*/
/*     */
/*     <!-- Date picker plugins css -->*/
/*     <link href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*     <!-- This page CSS -->*/
/* */
/*     {% block stylesheets %}      {% endblock %}*/
/* */
/*       */
/*     <!--Toaster Popup message CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/c3-master/c3.min.css')}}"/>*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/toast-master/css/jquery.toast.css')}}"/>*/
/* */
/*   */
/*     <!-- Custom CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/style.css')}}"/>*/
/* */
/*     <!-- page css -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/form-icheck.css')}}"/>*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/file-upload.css')}}"/>*/
/* */
/*     */
/* */
/*       */
/*     */
/*     <!-- You can change the theme colors from here -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/colors/blue.css')}}"/>*/
/*     */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
/* 	*/
/* */
/* </head>*/
/* */
/* <body class="fix-header card-no-border fix-sidebar">*/
/* */
/* 	{% block body %}{% endblock %} */
/* */
/* */
/* 	<!-- All Jquery ALL PAGE -->*/
/*     <!-- ============================================================== -->*/
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery/jquery.min.js')}}"></script>*/
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery/jquery_1.11.3.js')}}"></script>*/
/* */
/* */
/*      */
/*     <!-- Bootstrap popper Core JavaScript -->*/
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap/js/popper.min.js')}}"></script>*/
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*     */
/* */
/*     <!-- Date Picker Plugin JavaScript -->*/
/*     <script src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>*/
/* */
/*     <!-- slimscrollbar scrollbar JavaScript -->*/
/*     <script  src="{{asset('bundles/informatica/adminpro/horizontal/js/perfect-scrollbar.jquery.min.js')}}"></script>    */
/*     <!--Wave Effects -->*/
/*     <script  src="{{asset('bundles/informatica/adminpro/horizontal/js/waves.js')}}"></script>  */
/*     <!--Menu sidebar -->*/
/*     <script  src="{{asset('bundles/informatica/adminpro/horizontal/js/sidebarmenu.js')}}"></script> */
/* */
/*      <!--stickey kit -->*/
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script> */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script> */
/* */
/*      <!-- icheck -->*/
/*      */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/icheck/icheck.min.js')}}"></script>    */
/*     <script  src="{{asset('bundles/informatica/adminpro/assets/plugins/icheck/icheck.init.js')}}"></script> */
/*     */
/* */
/* */
/* */
/*         */
/*     */
/* */
/*     <!-- ============================================================== -->*/
/*     <!-- This page plugins -->*/
/*     <!-- ============================================================== -->*/
/*     {% block javascripts %} {% endblock %}*/
/* */
/*    */
/* */
/*     <!-- ============================================================== -->*/
/*     <!-- Style switcher -->*/
/*     <!-- ============================================================== -->*/
/*     <script src="{{asset('bundles/informatica/adminpro/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
