<?php

/* InformaticaBundle:include:page_titles.html.twig */
class __TwigTemplate_cc918298f1fa91d38439b5ca831203f0e8051302b0252db362d85c85de473332 extends Twig_Template
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
        $__internal_6231c77805f1c1300f88239585c683af5a77e12a920572440e609a2c29fd92b6 = $this->env->getExtension("native_profiler");
        $__internal_6231c77805f1c1300f88239585c683af5a77e12a920572440e609a2c29fd92b6->enter($__internal_6231c77805f1c1300f88239585c683af5a77e12a920572440e609a2c29fd92b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InformaticaBundle:include:page_titles.html.twig"));

        // line 1
        echo "<div class=\"row page-titles\">
    <div class=\"col-md-5 align-self-center\">
    </div>
    <div class=\"col-md-7 align-self-center\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
            <li class=\"breadcrumb-item\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "html", null, true);
        echo "</li>
            <li class=\"breadcrumb-item active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titulo_pagina"]) ? $context["titulo_pagina"] : $this->getContext($context, "titulo_pagina")), "html", null, true);
        echo "</li>
        </ol>
    </div>
    <div class=\"\">
        <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
    </div>
</div>";
        
        $__internal_6231c77805f1c1300f88239585c683af5a77e12a920572440e609a2c29fd92b6->leave($__internal_6231c77805f1c1300f88239585c683af5a77e12a920572440e609a2c29fd92b6_prof);

    }

    public function getTemplateName()
    {
        return "InformaticaBundle:include:page_titles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <div class="row page-titles">*/
/*     <div class="col-md-5 align-self-center">*/
/*     </div>*/
/*     <div class="col-md-7 align-self-center">*/
/*         <ol class="breadcrumb">*/
/*             <li class="breadcrumb-item"><a href="{{path('home')}}">Home</a></li>*/
/*             <li class="breadcrumb-item">{{session}}</li>*/
/*             <li class="breadcrumb-item active">{{titulo_pagina}}</li>*/
/*         </ol>*/
/*     </div>*/
/*     <div class="">*/
/*         <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>*/
/*     </div>*/
/* </div>*/
