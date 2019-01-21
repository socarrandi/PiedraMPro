<?php

/* ::base_pro.html.twig */
class __TwigTemplate_fd048c834f7943de344747b7101667e205b72975a72d82ce98669c7dd9148ca1 extends Twig_Template
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
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "      ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
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
        return array (  247 => 105,  242 => 62,  236 => 28,  230 => 13,  220 => 112,  212 => 106,  210 => 105,  196 => 94,  192 => 93,  185 => 89,  181 => 88,  175 => 85,  170 => 83,  165 => 81,  159 => 78,  152 => 74,  148 => 73,  140 => 68,  136 => 67,  128 => 62,  111 => 48,  101 => 41,  97 => 40,  91 => 37,  84 => 33,  80 => 32,  75 => 29,  73 => 28,  65 => 23,  59 => 20,  54 => 18,  50 => 17,  46 => 16,  40 => 13,  36 => 12,  23 => 1,);
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
