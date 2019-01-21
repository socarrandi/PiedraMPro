<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9b8a9c7d85e264af9d97cf88f55bc2bb6e4ab3f7e94ed9a93e5b9480ba67360d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4443fd154502882a6abbe5fbeec8221f802e8e22fa1915ce1b00582cf9c1421 = $this->env->getExtension("native_profiler");
        $__internal_d4443fd154502882a6abbe5fbeec8221f802e8e22fa1915ce1b00582cf9c1421->enter($__internal_d4443fd154502882a6abbe5fbeec8221f802e8e22fa1915ce1b00582cf9c1421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4443fd154502882a6abbe5fbeec8221f802e8e22fa1915ce1b00582cf9c1421->leave($__internal_d4443fd154502882a6abbe5fbeec8221f802e8e22fa1915ce1b00582cf9c1421_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_842930c921cb325f77f82ce8fb73d7e94ff02e6d144d5a5e44bed478bd9c7f88 = $this->env->getExtension("native_profiler");
        $__internal_842930c921cb325f77f82ce8fb73d7e94ff02e6d144d5a5e44bed478bd9c7f88->enter($__internal_842930c921cb325f77f82ce8fb73d7e94ff02e6d144d5a5e44bed478bd9c7f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_842930c921cb325f77f82ce8fb73d7e94ff02e6d144d5a5e44bed478bd9c7f88->leave($__internal_842930c921cb325f77f82ce8fb73d7e94ff02e6d144d5a5e44bed478bd9c7f88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d40c05c189cb07dc7567f78b51e831c9bb0696754f670be97e02b85d06c4ede7 = $this->env->getExtension("native_profiler");
        $__internal_d40c05c189cb07dc7567f78b51e831c9bb0696754f670be97e02b85d06c4ede7->enter($__internal_d40c05c189cb07dc7567f78b51e831c9bb0696754f670be97e02b85d06c4ede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d40c05c189cb07dc7567f78b51e831c9bb0696754f670be97e02b85d06c4ede7->leave($__internal_d40c05c189cb07dc7567f78b51e831c9bb0696754f670be97e02b85d06c4ede7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_991d444e026352de2c724b6d63175924e5845adba596a549cd4c09db2af08d84 = $this->env->getExtension("native_profiler");
        $__internal_991d444e026352de2c724b6d63175924e5845adba596a549cd4c09db2af08d84->enter($__internal_991d444e026352de2c724b6d63175924e5845adba596a549cd4c09db2af08d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_991d444e026352de2c724b6d63175924e5845adba596a549cd4c09db2af08d84->leave($__internal_991d444e026352de2c724b6d63175924e5845adba596a549cd4c09db2af08d84_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
