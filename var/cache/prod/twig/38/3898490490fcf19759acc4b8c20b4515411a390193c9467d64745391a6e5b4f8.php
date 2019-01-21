<?php

/* PiedraBundle:Gestion:home.html.twig */
class __TwigTemplate_9f690f2294d672db147434d49b9771023b5a91587992fe8e693d9ccebb92a0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiedraBundle:Gestion:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " HOME ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- BEGIN PAGE LEVEL STYLES -->
   
    <!-- END PAGE LEVEL STYLES -->
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
  ";
        // line 15
        $this->loadTemplate("PiedraBundle:include:header.html.twig", "PiedraBundle:Gestion:home.html.twig", 15)->display($context);
        // line 16
        echo "
  <!-- END HEADER -->
  <div class=\"clearfix\"></div>
  <!-- BEGIN CONTAINER -->
  <div class=\"page-container\">
    

  ";
        // line 23
        $this->loadTemplate("PiedraBundle:include:sidebar.html.twig", "PiedraBundle:Gestion:home.html.twig", 23)->display($context);
        // line 24
        echo "


  <div class=\"page-content-wrapper\">
    <div class=\"page-content\">
           
      <div class=\"row\">
        <div class=\"col-md-12\">
         
         \tBienvenido
        </div>
      </div>
      <!-- END PAGE CONTENT -->
    </div>
  </div>

  </div>



";
    }

    public function getTemplateName()
    {
        return "PiedraBundle:Gestion:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  63 => 23,  54 => 16,  52 => 15,  49 => 14,  46 => 13,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %} HOME {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- BEGIN PAGE LEVEL STYLES -->*/
/*    */
/*     <!-- END PAGE LEVEL STYLES -->*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*   {% include 'PiedraBundle:include:header.html.twig' %}*/
/* */
/*   <!-- END HEADER -->*/
/*   <div class="clearfix"></div>*/
/*   <!-- BEGIN CONTAINER -->*/
/*   <div class="page-container">*/
/*     */
/* */
/*   {% include 'PiedraBundle:include:sidebar.html.twig' %}*/
/* */
/* */
/* */
/*   <div class="page-content-wrapper">*/
/*     <div class="page-content">*/
/*            */
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*          */
/*          	Bienvenido*/
/*         </div>*/
/*       </div>*/
/*       <!-- END PAGE CONTENT -->*/
/*     </div>*/
/*   </div>*/
/* */
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
