<?php

/* InformaticaBundle:include:header.html.twig */
class __TwigTemplate_8432b78152519e15748419e3b4ad4598dcdf838b4ac020650d5bd77f081f99f7 extends Twig_Template
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
        echo "<header class=\"topbar\">
            <nav class=\"navbar top-navbar navbar-expand-md navbar-light\">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/adminpro/assets/images/logo-icon.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"dark-logo\">
                            <!-- Light Logo icon -->
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/adminpro/assets/images/logo-light-icon.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"light-logo\">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src=\"../assets/images/logo-text.png\" alt=\"homepage\" class=\"dark-logo\">
                         <!-- Light Logo text -->    
                         <img src=\"../assets/images/logo-light-text.png\" class=\"light-logo\" alt=\"homepage\"></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-collapse\">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav mr-auto\">
                        <!-- This is  -->
                        <li class=\"nav-item\"> <a class=\"nav-link nav-toggler hidden-md-up waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a> </li>
                        <li class=\"nav-item hidden-sm-down\"><span></span></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav my-lg-0\">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item hidden-xs-down search-box\"> <a class=\"nav-link hidden-sm-down waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                            <form class=\"app-search\">
                                <input class=\"form-control\" placeholder=\"Buscar &amp; Enter\" type=\"text\"> <a class=\"srh-btn\"><i class=\"ti-close\"></i></a> </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Notoficaciones -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-message\"></i>
                                <div class=\"notify\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\">
                                <ul>
                                    <li>
                                        <div class=\"drop-title\">Notificaciones</div>
                                    </li>
                                    <li>
                                        <div class=\"message-center ps ps--theme_default\" data-ps-id=\"884d617c-8670-7450-53f6-791a66546d4c\">
                                            <!-- Message -->
                                            <a href=\"#\">
                                                <div class=\"btn btn-danger btn-circle\"><i class=\"fa fa-link\"></i></div>
                                                <div class=\"mail-contnet\">
                                                    <h5>Luanch Admin</h5> <span class=\"mail-desc\">Just see the my new admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                            </a>
                                            
                                        <div class=\"ps__scrollbar-x-rail\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__scrollbar-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__scrollbar-y-rail\" style=\"top: 0px; right: 0px;\"><div class=\"ps__scrollbar-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div></div>
                                    </li>
                                    <li>
                                        <a class=\"nav-link text-center\" href=\"javascript:void(0);\"> <strong>Ver todas las notificaciones</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Notificaciones -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item dropdown mega-dropdown\"> <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"mdi mdi-view-grid\"></i></a>
                            <div class=\"dropdown-menu animated bounceInDown\">
                                <ul class=\"mega-dropdown-menu row\">
                                    <li class=\"col-lg-3 col-xlg-2 m-b-30\">
                                        <h4 class=\"m-b-20\">Crear nueva Tarea</h4>
                                        <!-- CAROUSEL -->
                                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <div class=\"carousel-inner\" role=\"listbox\">
                                                <div class=\"carousel-item\">
                                                    <div class=\"container\"> <img class=\"d-block img-fluid\" src=\"../assets/images/big/img1.jpg\" alt=\"First slide\"></div>
                                                </div>
                                                <div class=\"carousel-item active\">
                                                    <div class=\"container\"><img class=\"d-block img-fluid\" src=\"../assets/images/big/img2.jpg\" alt=\"Second slide\"></div>
                                                </div>
                                                <div class=\"carousel-item\">
                                                    <div class=\"container\"><img class=\"d-block img-fluid\" src=\"../assets/images/big/img3.jpg\" alt=\"Third slide\"></div>
                                                </div>
                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a>
                                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class=\"col-lg-3 m-b-30\">
                                        <h4 class=\"m-b-20\">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id=\"accordion\" class=\"nav-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                            <div class=\"card\">
                                                <div class=\"card-header\" role=\"tab\" id=\"headingOne\">
                                                    <h5 class=\"mb-0\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                  Collapsible Group Item #1
                                                </a>
                                              </h5> </div>
                                                <div id=\"collapseOne\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                                    <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class=\"card\">
                                                <div class=\"card-header\" role=\"tab\" id=\"headingTwo\">
                                                    <h5 class=\"mb-0\">
                                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                  Collapsible Group Item #2
                                                </a>
                                              </h5> </div>
                                                <div id=\"collapseTwo\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                                    <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class=\"card\">
                                                <div class=\"card-header\" role=\"tab\" id=\"headingThree\">
                                                    <h5 class=\"mb-0\">
                                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                  Collapsible Group Item #3
                                                </a>
                                              </h5> </div>
                                                <div id=\"collapseThree\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                                                    <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"col-lg-3  m-b-30\">
                                        <h4 class=\"m-b-20\">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class=\"form-group\">
                                                <input class=\"form-control\" id=\"exampleInputname1\" placeholder=\"Enter Name\" type=\"text\"> </div>
                                            <div class=\"form-group\">
                                                <input class=\"form-control\" placeholder=\"Enter email\" type=\"email\"> </div>
                                            <div class=\"form-group\">
                                                <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\" placeholder=\"Message\"></textarea>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-info\">Submit</button>
                                        </form>
                                    </li>
                                    <li class=\"col-lg-3 col-xlg-4 m-b-30\">
                                        <h4 class=\"m-b-20\">List style</h4>
                                        <!-- List style -->
                                        <ul class=\"list-style-none\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> You can give link</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Give link</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another Give link</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Forth link</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item dropdown\">

                            ";
        // line 180
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 181
            echo "
                            <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"data:image/jpeg;base64,";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()), "html", null, true);
            echo "\" alt=\"usuario\" class=\"profile-pic\"></a>


                            <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                                <ul class=\"dropdown-user\">
                                    <li>
                                        <div class=\"dw-user-box\">
                                            <div class=\"u-img\"><img src=\"data:image/jpeg;base64,";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()), "html", null, true);
            echo "\" alt=\"usuario\"></div>
                                            <div class=\"u-text\">
                                                <h4>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
            echo "</h4>
                                                <a href=\"";
            // line 192
            echo $this->env->getExtension('routing')->getPath("perfil");
            echo "\" class=\"btn btn-rounded btn-danger btn-sm\">Mi Perfil</a></div>
                                        </div>
                                    </li>
                                    ";
            // line 195
            if ($this->env->getExtension('security')->isGranted("ROLE_INFORMATICA")) {
                // line 196
                echo "                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\"><i class=\"ti-user\"></i> Mi Perfil</a></li>                                   
                                    <li role=\"separator\" class=\"divider\"></li>
                                    ";
            }
            // line 200
            echo "                                    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_INFORMATICA"))) {
                // line 201
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("usuarios");
                echo "\"><i class=\"ti-settings\"></i> Gestion Usuario</a></li>
                                    ";
            }
            // line 203
            echo "                                    <li role=\"separator\" class=\"divider\"></li>
                                    

                                    <li><a href=\"";
            // line 206
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                                </ul>
                            </div>
                            ";
        } else {
            // line 210
            echo "
                            <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/adminpro/assets/images/users/avatar.jpg"), "html", null, true);
            echo "\" alt=\"user\" class=\"profile-pic\"></a>

                            <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                                <ul class=\"dropdown-user\">  
                                    <li><a href=\"";
            // line 215
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><i class=\"fa fa-power-off\"></i> Login</a></li>
                                </ul>
                            </div>

                            ";
        }
        // line 220
        echo "
                        </li>
                    </ul>
                </div>
            </nav>
        </header>";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:include:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 220,  275 => 215,  268 => 211,  265 => 210,  258 => 206,  253 => 203,  247 => 201,  244 => 200,  238 => 196,  236 => 195,  230 => 192,  226 => 191,  221 => 189,  211 => 182,  208 => 181,  206 => 180,  36 => 13,  31 => 11,  19 => 1,);
    }
}
/* <header class="topbar">*/
/*             <nav class="navbar top-navbar navbar-expand-md navbar-light">*/
/*                 <!-- ============================================================== -->*/
/*                 <!-- Logo -->*/
/*                 <!-- ============================================================== -->*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-brand" href="index.html">*/
/*                         <!-- Logo icon --><b>*/
/*                             <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->*/
/*                             <!-- Dark Logo icon -->*/
/*                             <img src="{{asset('bundles/admin/adminpro/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo">*/
/*                             <!-- Light Logo icon -->*/
/*                             <img src="{{asset('bundles/admin/adminpro/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo">*/
/*                         </b>*/
/*                         <!--End Logo icon -->*/
/*                         <!-- Logo text --><span>*/
/*                          <!-- dark Logo text -->*/
/*                          <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo">*/
/*                          <!-- Light Logo text -->    */
/*                          <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage"></span> </a>*/
/*                 </div>*/
/*                 <!-- ============================================================== -->*/
/*                 <!-- End Logo -->*/
/*                 <!-- ============================================================== -->*/
/*                 <div class="navbar-collapse">*/
/*                     <!-- ============================================================== -->*/
/*                     <!-- toggle and nav items -->*/
/*                     <!-- ============================================================== -->*/
/*                     <ul class="navbar-nav mr-auto">*/
/*                         <!-- This is  -->*/
/*                         <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>*/
/*                         <li class="nav-item hidden-sm-down"><span></span></li>*/
/*                     </ul>*/
/*                     <!-- ============================================================== -->*/
/*                     <!-- User profile and search -->*/
/*                     <!-- ============================================================== -->*/
/*                     <ul class="navbar-nav my-lg-0">*/
/*                         <!-- ============================================================== -->*/
/*                         <!-- Search -->*/
/*                         <!-- ============================================================== -->*/
/*                         <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>*/
/*                             <form class="app-search">*/
/*                                 <input class="form-control" placeholder="Buscar &amp; Enter" type="text"> <a class="srh-btn"><i class="ti-close"></i></a> </form>*/
/*                         </li>*/
/*                         <!-- ============================================================== -->*/
/*                         <!-- Notoficaciones -->*/
/*                         <!-- ============================================================== -->*/
/*                         <li class="nav-item dropdown">*/
/*                             <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>*/
/*                                 <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>*/
/*                             </a>*/
/*                             <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <div class="drop-title">Notificaciones</div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="message-center ps ps--theme_default" data-ps-id="884d617c-8670-7450-53f6-791a66546d4c">*/
/*                                             <!-- Message -->*/
/*                                             <a href="#">*/
/*                                                 <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>*/
/*                                                 <div class="mail-contnet">*/
/*                                                     <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>*/
/*                                             </a>*/
/*                                             */
/*                                         <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a class="nav-link text-center" href="javascript:void(0);"> <strong>Ver todas las notificaciones</strong> <i class="fa fa-angle-right"></i> </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- ============================================================== -->*/
/*                         <!-- End Notificaciones -->*/
/*                         <!-- ============================================================== -->*/
/*                         */
/*                         <!-- ============================================================== -->*/
/*                         <!-- mega menu -->*/
/*                         <!-- ============================================================== -->*/
/*                         <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>*/
/*                             <div class="dropdown-menu animated bounceInDown">*/
/*                                 <ul class="mega-dropdown-menu row">*/
/*                                     <li class="col-lg-3 col-xlg-2 m-b-30">*/
/*                                         <h4 class="m-b-20">Crear nueva Tarea</h4>*/
/*                                         <!-- CAROUSEL -->*/
/*                                         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">*/
/*                                             <div class="carousel-inner" role="listbox">*/
/*                                                 <div class="carousel-item">*/
/*                                                     <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>*/
/*                                                 </div>*/
/*                                                 <div class="carousel-item active">*/
/*                                                     <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>*/
/*                                                 </div>*/
/*                                                 <div class="carousel-item">*/
/*                                                     <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>*/
/*                                             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>*/
/*                                         </div>*/
/*                                         <!-- End CAROUSEL -->*/
/*                                     </li>*/
/*                                     <li class="col-lg-3 m-b-30">*/
/*                                         <h4 class="m-b-20">ACCORDION</h4>*/
/*                                         <!-- Accordian -->*/
/*                                         <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">*/
/*                                             <div class="card">*/
/*                                                 <div class="card-header" role="tab" id="headingOne">*/
/*                                                     <h5 class="mb-0">*/
/*                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">*/
/*                                                   Collapsible Group Item #1*/
/*                                                 </a>*/
/*                                               </h5> </div>*/
/*                                                 <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">*/
/*                                                     <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="card">*/
/*                                                 <div class="card-header" role="tab" id="headingTwo">*/
/*                                                     <h5 class="mb-0">*/
/*                                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">*/
/*                                                   Collapsible Group Item #2*/
/*                                                 </a>*/
/*                                               </h5> </div>*/
/*                                                 <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">*/
/*                                                     <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="card">*/
/*                                                 <div class="card-header" role="tab" id="headingThree">*/
/*                                                     <h5 class="mb-0">*/
/*                                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">*/
/*                                                   Collapsible Group Item #3*/
/*                                                 </a>*/
/*                                               </h5> </div>*/
/*                                                 <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">*/
/*                                                     <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="col-lg-3  m-b-30">*/
/*                                         <h4 class="m-b-20">CONTACT US</h4>*/
/*                                         <!-- Contact -->*/
/*                                         <form>*/
/*                                             <div class="form-group">*/
/*                                                 <input class="form-control" id="exampleInputname1" placeholder="Enter Name" type="text"> </div>*/
/*                                             <div class="form-group">*/
/*                                                 <input class="form-control" placeholder="Enter email" type="email"> </div>*/
/*                                             <div class="form-group">*/
/*                                                 <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>*/
/*                                             </div>*/
/*                                             <button type="submit" class="btn btn-info">Submit</button>*/
/*                                         </form>*/
/*                                     </li>*/
/*                                     <li class="col-lg-3 col-xlg-4 m-b-30">*/
/*                                         <h4 class="m-b-20">List style</h4>*/
/*                                         <!-- List style -->*/
/*                                         <ul class="list-style-none">*/
/*                                             <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>*/
/*                                             <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>*/
/*                                             <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>*/
/*                                             <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>*/
/*                                             <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- ============================================================== -->*/
/*                         <!-- End mega menu -->*/
/*                         <!-- ============================================================== -->*/
/*                         */
/*                         <!-- ============================================================== -->*/
/*                         <!-- Profile -->*/
/*                         <!-- ============================================================== -->*/
/*                         <li class="nav-item dropdown">*/
/* */
/*                             {% if app.user %}*/
/* */
/*                             <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="data:image/jpeg;base64,{{app.user.avatar}}" alt="usuario" class="profile-pic"></a>*/
/* */
/* */
/*                             <div class="dropdown-menu dropdown-menu-right animated flipInY">*/
/*                                 <ul class="dropdown-user">*/
/*                                     <li>*/
/*                                         <div class="dw-user-box">*/
/*                                             <div class="u-img"><img src="data:image/jpeg;base64,{{app.user.avatar}}" alt="usuario"></div>*/
/*                                             <div class="u-text">*/
/*                                                 <h4>{{ app.user.name }}</h4>*/
/*                                                 <a href="{{path('perfil')}}" class="btn btn-rounded btn-danger btn-sm">Mi Perfil</a></div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     {% if is_granted('ROLE_INFORMATICA') %}*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="#"><i class="ti-user"></i> Mi Perfil</a></li>                                   */
/*                                     <li role="separator" class="divider"></li>*/
/*                                     {% endif %}*/
/*                                     {% if  is_granted('ROLE_ADMIN') or is_granted('ROLE_INFORMATICA') %}*/
/*                                     <li><a href="{{path('usuarios')}}"><i class="ti-settings"></i> Gestion Usuario</a></li>*/
/*                                     {% endif %}*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     */
/* */
/*                                     <li><a href="{{path('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             {% else %}*/
/* */
/*                             <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('bundles/admin/adminpro/assets/images/users/avatar.jpg')}}" alt="user" class="profile-pic"></a>*/
/* */
/*                             <div class="dropdown-menu dropdown-menu-right animated flipInY">*/
/*                                 <ul class="dropdown-user">  */
/*                                     <li><a href="{{path('login')}}"><i class="fa fa-power-off"></i> Login</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/*                             {% endif %}*/
/* */
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </nav>*/
/*         </header>*/
