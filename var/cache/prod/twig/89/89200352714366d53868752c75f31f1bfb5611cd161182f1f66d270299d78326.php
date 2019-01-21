<?php

/* InformaticaBundle:Usuario:login_pro.html.twig */
class __TwigTemplate_2fbcdc8c7cef7b0d9342741d84a2e4a354e147c0957e0d29aa4b96b18743aad1 extends Twig_Template
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
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <!-- page css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/pages/login-register-lock.css"), "html", null, true);
        echo "\"/>
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/style.css"), "html", null, true);
        echo "\"/>
    
    <!-- You can change the theme colors from here -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/horizontal/css/colors/blue.css"), "html", null, true);
        echo "\"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>

<body class=\"card-no-border\">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"loader__figure\"></div>
            <p class=\"loader__label\">Admin Pro</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id=\"wrapper\">
        <div class=\"login-register\" style=\"background-image:url(";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/images/background/login-register.jpg"), "html", null, true);
        echo ");\">
            <div class=\"login-box card\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("check_path");
        echo "\" id=\"login\" class=\"form-horizontal form-material\" novalidate=\"novalidate\">
                        <h3 class=\"box-title m-b-20\">Entrar al Sistema</h3>

                        ";
        // line 51
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 52
            echo "                            <div class=\"alert alert-danger display-hide\">
                                <button class=\"close\" data-close=\"alert\"></button>
                        <span>
                            <div class=\"error\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
                        </span>
                            </div>
                        ";
        }
        // line 59
        echo "

                        <div class=\"form-group\">
\t\t\t
\t\t\t            <div class=\"form-group \">
                            <div class=\"col-xs-12\">
                                <input class=\"form-control\" type=\"text\" required=\"\" placeholder=\"Username\" name=\"_username\" autofocus=\"autofocus\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"/> 
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <input class=\"form-control\" type=\"password\" required=\"\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\"/> </div>
                        </div>

                        <div class=\"form-group row\">
                            <div class=\"col-md-12\">
                                <div class=\"checkbox checkbox-info pull-left p-t-0\">
                                    <input id=\"checkbox-signup\" type=\"checkbox\" class=\"filled-in chk-col-light-blue\" name=\"_remember_me\">
                                    <label for=\"checkbox-signup\"> Recordarme </label>
                                </div>  
                            </div>
                        </div>

                        <div class=\"form-group text-center\">
                            <div class=\"col-xs-12 p-b-20\">
                                <button class=\"btn btn-block btn-lg btn-info\" type=\"submit\" >Login</button>
                            </div>
                        </div>
                        </div>
                       
                    </form>
                   
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/informatica/adminpro/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

 
    <!--Custom JavaScript -->
    <script type=\"text/javascript\">
        \$(function() {
            \$(\".preloader\").fadeOut();
        });
        \$(function() {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        \$('#to-recover').on(\"click\", function() {
            \$(\"#loginform\").slideUp();
            \$(\"#recoverform\").fadeIn();
        });
    </script>
    
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:Usuario:login_pro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 108,  162 => 107,  157 => 105,  114 => 65,  106 => 59,  99 => 55,  94 => 52,  92 => 51,  86 => 48,  80 => 45,  54 => 22,  48 => 19,  43 => 17,  38 => 15,  32 => 12,  19 => 1,);
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
/*     <title>Login</title>*/
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap/css/bootstrap.min.css')}}"/>*/
/*     <!-- page css -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/pages/login-register-lock.css')}}"/>*/
/*     <!-- Custom CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/style.css')}}"/>*/
/*     */
/*     <!-- You can change the theme colors from here -->*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('bundles/informatica/adminpro/horizontal/css/colors/blue.css')}}"/>*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
/* </head>*/
/* */
/* <body class="card-no-border">*/
/*     <!-- ============================================================== -->*/
/*     <!-- Preloader - style you can find in spinners.css -->*/
/*     <!-- ============================================================== -->*/
/*     <div class="preloader">*/
/*         <div class="loader">*/
/*             <div class="loader__figure"></div>*/
/*             <p class="loader__label">Admin Pro</p>*/
/*         </div>*/
/*     </div>*/
/*     <!-- ============================================================== -->*/
/*     <!-- Main wrapper - style you can find in pages.scss -->*/
/*     <!-- ============================================================== -->*/
/*     <section id="wrapper">*/
/*         <div class="login-register" style="background-image:url({{asset('bundles/informatica/adminpro/assets/images/background/login-register.jpg')}});">*/
/*             <div class="login-box card">*/
/*                 <div class="card-body">*/
/*                     <form method="post" action="{{ path('check_path') }}" id="login" class="form-horizontal form-material" novalidate="novalidate">*/
/*                         <h3 class="box-title m-b-20">Entrar al Sistema</h3>*/
/* */
/*                         {% if error %}*/
/*                             <div class="alert alert-danger display-hide">*/
/*                                 <button class="close" data-close="alert"></button>*/
/*                         <span>*/
/*                             <div class="error">{{ error.message }}</div>*/
/*                         </span>*/
/*                             </div>*/
/*                         {% endif %}*/
/* */
/* */
/*                         <div class="form-group">*/
/* 			*/
/* 			            <div class="form-group ">*/
/*                             <div class="col-xs-12">*/
/*                                 <input class="form-control" type="text" required="" placeholder="Username" name="_username" autofocus="autofocus" value="{{last_username}}"/> */
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                         <div class="form-group">*/
/*                             <div class="col-xs-12">*/
/*                                 <input class="form-control" type="password" required="" autocomplete="off" placeholder="Password" name="_password"/> </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="checkbox checkbox-info pull-left p-t-0">*/
/*                                     <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue" name="_remember_me">*/
/*                                     <label for="checkbox-signup"> Recordarme </label>*/
/*                                 </div>  */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group text-center">*/
/*                             <div class="col-xs-12 p-b-20">*/
/*                                 <button class="btn btn-block btn-lg btn-info" type="submit" >Login</button>*/
/*                             </div>*/
/*                         </div>*/
/*                         </div>*/
/*                        */
/*                     </form>*/
/*                    */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     */
/*     <!-- ============================================================== -->*/
/*     <!-- End Wrapper -->*/
/*     <!-- ============================================================== -->*/
/*     <!-- ============================================================== -->*/
/*     <!-- All Jquery -->*/
/*     <!-- ============================================================== -->*/
/* */
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/jquery/jquery.min.js')}}"></script>*/
/*     <!-- Bootstrap tether Core JavaScript -->*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap/js/popper.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/informatica/adminpro/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* */
/*  */
/*     <!--Custom JavaScript -->*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $(".preloader").fadeOut();*/
/*         });*/
/*         $(function() {*/
/*             $('[data-toggle="tooltip"]').tooltip()*/
/*         });*/
/*         // ============================================================== */
/*         // Login and Recover Password */
/*         // ============================================================== */
/*         $('#to-recover').on("click", function() {*/
/*             $("#loginform").slideUp();*/
/*             $("#recoverform").fadeIn();*/
/*         });*/
/*     </script>*/
/*     */
/* </body>*/
/* </html>*/
/* */
/* */
