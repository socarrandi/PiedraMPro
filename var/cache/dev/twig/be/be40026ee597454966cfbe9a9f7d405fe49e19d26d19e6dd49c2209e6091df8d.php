<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_713da024fa60b3bf5898e1e9d6638d5dc9af144a05a76c20ea3a96e338c4828c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74d8f4c630ac186ab2f3b4f4c34968686910c0fee1eb1a519b29a0374e6eb016 = $this->env->getExtension("native_profiler");
        $__internal_74d8f4c630ac186ab2f3b4f4c34968686910c0fee1eb1a519b29a0374e6eb016->enter($__internal_74d8f4c630ac186ab2f3b4f4c34968686910c0fee1eb1a519b29a0374e6eb016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d8f4c630ac186ab2f3b4f4c34968686910c0fee1eb1a519b29a0374e6eb016->leave($__internal_74d8f4c630ac186ab2f3b4f4c34968686910c0fee1eb1a519b29a0374e6eb016_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d7c0f517673c22c1307ef1c091c0001a2c9f4c11a6129f15157eb65da5e376f = $this->env->getExtension("native_profiler");
        $__internal_8d7c0f517673c22c1307ef1c091c0001a2c9f4c11a6129f15157eb65da5e376f->enter($__internal_8d7c0f517673c22c1307ef1c091c0001a2c9f4c11a6129f15157eb65da5e376f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d7c0f517673c22c1307ef1c091c0001a2c9f4c11a6129f15157eb65da5e376f->leave($__internal_8d7c0f517673c22c1307ef1c091c0001a2c9f4c11a6129f15157eb65da5e376f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_76245d200616011caea8654acf45151f3559e7f59946f642ff07ab7b17a61fa0 = $this->env->getExtension("native_profiler");
        $__internal_76245d200616011caea8654acf45151f3559e7f59946f642ff07ab7b17a61fa0->enter($__internal_76245d200616011caea8654acf45151f3559e7f59946f642ff07ab7b17a61fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_76245d200616011caea8654acf45151f3559e7f59946f642ff07ab7b17a61fa0->leave($__internal_76245d200616011caea8654acf45151f3559e7f59946f642ff07ab7b17a61fa0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ed67f29d0b07b487afa64e6de90bdcb04bb18b4ff569b6faaca6387c0ffa5ba = $this->env->getExtension("native_profiler");
        $__internal_2ed67f29d0b07b487afa64e6de90bdcb04bb18b4ff569b6faaca6387c0ffa5ba->enter($__internal_2ed67f29d0b07b487afa64e6de90bdcb04bb18b4ff569b6faaca6387c0ffa5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2ed67f29d0b07b487afa64e6de90bdcb04bb18b4ff569b6faaca6387c0ffa5ba->leave($__internal_2ed67f29d0b07b487afa64e6de90bdcb04bb18b4ff569b6faaca6387c0ffa5ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
