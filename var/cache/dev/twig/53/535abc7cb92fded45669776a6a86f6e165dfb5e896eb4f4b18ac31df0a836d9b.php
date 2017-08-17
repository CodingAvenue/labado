<?php

/* CodingAvenueLabadoBundle:Default:index.html.twig */
class __TwigTemplate_a22c6f707918b46a638e4acaef3da06582331d3efe3eb28158560bebcfa07821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CodingAvenueLabadoBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed66d70de0950254698aab943587ae52639eb6cf3c1f60bba73beb3dd97d7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed66d70de0950254698aab943587ae52639eb6cf3c1f60bba73beb3dd97d7d7->enter($__internal_9ed66d70de0950254698aab943587ae52639eb6cf3c1f60bba73beb3dd97d7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $__internal_eed906ee4cf7eb097e519d2cfc79638f31c9ed26b199e0ff5abd891b6f28e93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed906ee4cf7eb097e519d2cfc79638f31c9ed26b199e0ff5abd891b6f28e93e->enter($__internal_eed906ee4cf7eb097e519d2cfc79638f31c9ed26b199e0ff5abd891b6f28e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed66d70de0950254698aab943587ae52639eb6cf3c1f60bba73beb3dd97d7d7->leave($__internal_9ed66d70de0950254698aab943587ae52639eb6cf3c1f60bba73beb3dd97d7d7_prof);

        
        $__internal_eed906ee4cf7eb097e519d2cfc79638f31c9ed26b199e0ff5abd891b6f28e93e->leave($__internal_eed906ee4cf7eb097e519d2cfc79638f31c9ed26b199e0ff5abd891b6f28e93e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dec659655f95530506c2968b3a0a3a91f406e752496ae0b36187675bbf6283b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dec659655f95530506c2968b3a0a3a91f406e752496ae0b36187675bbf6283b->enter($__internal_3dec659655f95530506c2968b3a0a3a91f406e752496ae0b36187675bbf6283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cea1dd2783c5efd71459439719ff1ba9a329ba9289ab79a744fc9e1c95b4d8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea1dd2783c5efd71459439719ff1ba9a329ba9289ab79a744fc9e1c95b4d8af->enter($__internal_cea1dd2783c5efd71459439719ff1ba9a329ba9289ab79a744fc9e1c95b4d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_cea1dd2783c5efd71459439719ff1ba9a329ba9289ab79a744fc9e1c95b4d8af->leave($__internal_cea1dd2783c5efd71459439719ff1ba9a329ba9289ab79a744fc9e1c95b4d8af_prof);

        
        $__internal_3dec659655f95530506c2968b3a0a3a91f406e752496ae0b36187675bbf6283b->leave($__internal_3dec659655f95530506c2968b3a0a3a91f406e752496ae0b36187675bbf6283b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d79fc51c16d0cd7d1758c385a0e38a2518ff182bdf387f5aaf3ebc75afee8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d79fc51c16d0cd7d1758c385a0e38a2518ff182bdf387f5aaf3ebc75afee8ea->enter($__internal_8d79fc51c16d0cd7d1758c385a0e38a2518ff182bdf387f5aaf3ebc75afee8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eba14db02c06f89f5d71910a30476858e39cd07c9a5aa3534fae51e0070658a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba14db02c06f89f5d71910a30476858e39cd07c9a5aa3534fae51e0070658a2->enter($__internal_eba14db02c06f89f5d71910a30476858e39cd07c9a5aa3534fae51e0070658a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_eba14db02c06f89f5d71910a30476858e39cd07c9a5aa3534fae51e0070658a2->leave($__internal_eba14db02c06f89f5d71910a30476858e39cd07c9a5aa3534fae51e0070658a2_prof);

        
        $__internal_8d79fc51c16d0cd7d1758c385a0e38a2518ff182bdf387f5aaf3ebc75afee8ea->leave($__internal_8d79fc51c16d0cd7d1758c385a0e38a2518ff182bdf387f5aaf3ebc75afee8ea_prof);

    }

    public function getTemplateName()
    {
        return "CodingAvenueLabadoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  61 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% endblock %}


{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "CodingAvenueLabadoBundle:Default:index.html.twig", "/home/marl/Labado/src/CodingAvenue/LabadoBundle/Resources/views/Default/index.html.twig");
    }
}
