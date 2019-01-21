<?php

/* InformaticaBundle:include:preloder.html.twig */
class __TwigTemplate_0cea3d8e595bbfccbf6335a21ba2fd4fa5bc619d01c07f29d099d8c94b85b9ea extends Twig_Template
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
        $__internal_a1fa0da52e8023496f04fcdc5f1d2ae9f478519d6d72adcb6e5c9c1054738d40 = $this->env->getExtension("native_profiler");
        $__internal_a1fa0da52e8023496f04fcdc5f1d2ae9f478519d6d72adcb6e5c9c1054738d40->enter($__internal_a1fa0da52e8023496f04fcdc5f1d2ae9f478519d6d72adcb6e5c9c1054738d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InformaticaBundle:include:preloder.html.twig"));

        // line 1
        echo "<div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"loader__figure\"></div>
            <p class=\"loader__label\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["loader_label"]) ? $context["loader_label"] : $this->getContext($context, "loader_label")), "html", null, true);
        echo "</p>
        </div>
</div>";
        
        $__internal_a1fa0da52e8023496f04fcdc5f1d2ae9f478519d6d72adcb6e5c9c1054738d40->leave($__internal_a1fa0da52e8023496f04fcdc5f1d2ae9f478519d6d72adcb6e5c9c1054738d40_prof);

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
        return array (  27 => 4,  22 => 1,);
    }
}
/* <div class="preloader">*/
/*         <div class="loader">*/
/*             <div class="loader__figure"></div>*/
/*             <p class="loader__label">{{loader_label}}</p>*/
/*         </div>*/
/* </div>*/
