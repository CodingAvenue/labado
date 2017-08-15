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
        $__internal_efe0b7782d40cc69e3b7f25666bf9d8fcdc850b7b44963bb392f03e6026f514b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe0b7782d40cc69e3b7f25666bf9d8fcdc850b7b44963bb392f03e6026f514b->enter($__internal_efe0b7782d40cc69e3b7f25666bf9d8fcdc850b7b44963bb392f03e6026f514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $__internal_9678bcecd1271d575037648395005e285013eedf0e2e0db7c6a1a9254e327c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9678bcecd1271d575037648395005e285013eedf0e2e0db7c6a1a9254e327c88->enter($__internal_9678bcecd1271d575037648395005e285013eedf0e2e0db7c6a1a9254e327c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe0b7782d40cc69e3b7f25666bf9d8fcdc850b7b44963bb392f03e6026f514b->leave($__internal_efe0b7782d40cc69e3b7f25666bf9d8fcdc850b7b44963bb392f03e6026f514b_prof);

        
        $__internal_9678bcecd1271d575037648395005e285013eedf0e2e0db7c6a1a9254e327c88->leave($__internal_9678bcecd1271d575037648395005e285013eedf0e2e0db7c6a1a9254e327c88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98a67be432c39a0a74c59dcef11c94e95741f213e8cf0e426a8d439c4ad73c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a67be432c39a0a74c59dcef11c94e95741f213e8cf0e426a8d439c4ad73c34->enter($__internal_98a67be432c39a0a74c59dcef11c94e95741f213e8cf0e426a8d439c4ad73c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a401f68e3bc6ea08f62837b059453ecc12fb7ed77f9cfa9ade6dc4fa67000b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a401f68e3bc6ea08f62837b059453ecc12fb7ed77f9cfa9ade6dc4fa67000b0->enter($__internal_7a401f68e3bc6ea08f62837b059453ecc12fb7ed77f9cfa9ade6dc4fa67000b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_7a401f68e3bc6ea08f62837b059453ecc12fb7ed77f9cfa9ade6dc4fa67000b0->leave($__internal_7a401f68e3bc6ea08f62837b059453ecc12fb7ed77f9cfa9ade6dc4fa67000b0_prof);

        
        $__internal_98a67be432c39a0a74c59dcef11c94e95741f213e8cf0e426a8d439c4ad73c34->leave($__internal_98a67be432c39a0a74c59dcef11c94e95741f213e8cf0e426a8d439c4ad73c34_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_788496f95a2f2f3ca0d25495c7be75ffada1d9eff2b7d68d1b803891bfd75533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788496f95a2f2f3ca0d25495c7be75ffada1d9eff2b7d68d1b803891bfd75533->enter($__internal_788496f95a2f2f3ca0d25495c7be75ffada1d9eff2b7d68d1b803891bfd75533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_df97092dc77a8f7cf4264e5bb20f50dd01804dfdf11e19661cbfc220a4fbc9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df97092dc77a8f7cf4264e5bb20f50dd01804dfdf11e19661cbfc220a4fbc9bf->enter($__internal_df97092dc77a8f7cf4264e5bb20f50dd01804dfdf11e19661cbfc220a4fbc9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_df97092dc77a8f7cf4264e5bb20f50dd01804dfdf11e19661cbfc220a4fbc9bf->leave($__internal_df97092dc77a8f7cf4264e5bb20f50dd01804dfdf11e19661cbfc220a4fbc9bf_prof);

        
        $__internal_788496f95a2f2f3ca0d25495c7be75ffada1d9eff2b7d68d1b803891bfd75533->leave($__internal_788496f95a2f2f3ca0d25495c7be75ffada1d9eff2b7d68d1b803891bfd75533_prof);

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
", "CodingAvenueLabadoBundle:Default:index.html.twig", "/home/ojt3/labado/src/CodingAvenue/LabadoBundle/Resources/views/Default/index.html.twig");
    }
}
