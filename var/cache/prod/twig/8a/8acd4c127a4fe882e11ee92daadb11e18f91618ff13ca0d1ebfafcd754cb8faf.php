<?php

/* InformaticaBundle:include:page_titles.html.twig */
class __TwigTemplate_120cbc4c0cb76357b0990e9899b27b5a04cfa848bcc397439268b00c82924426 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : null), "html", null, true);
        echo "</li>
            <li class=\"breadcrumb-item active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titulo_pagina"]) ? $context["titulo_pagina"] : null), "html", null, true);
        echo "</li>
        </ol>
    </div>
    <div class=\"\">
        <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
    </div>
</div>";
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
        return array (  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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
