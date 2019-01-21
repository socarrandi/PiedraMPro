<?php

/* InformaticaBundle:include:preloder.html.twig */
class __TwigTemplate_70cf33b72a0f5f9106b371c180a75336f2e234564a71bc8d6d5227a8ccaeee14 extends Twig_Template
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
        echo "<div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"loader__figure\"></div>
            <p class=\"loader__label\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["loader_label"]) ? $context["loader_label"] : null), "html", null, true);
        echo "</p>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "InformaticaBundle:include:preloder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div class="preloader">*/
/*         <div class="loader">*/
/*             <div class="loader__figure"></div>*/
/*             <p class="loader__label">{{loader_label}}</p>*/
/*         </div>*/
/* </div>*/
