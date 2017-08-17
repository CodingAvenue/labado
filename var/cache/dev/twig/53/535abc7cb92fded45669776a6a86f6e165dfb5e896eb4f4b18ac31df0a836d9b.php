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
        $__internal_c8803107a5487f057c7776ef2cf81b5064a9f2eab44418deb27513b49f4e7543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8803107a5487f057c7776ef2cf81b5064a9f2eab44418deb27513b49f4e7543->enter($__internal_c8803107a5487f057c7776ef2cf81b5064a9f2eab44418deb27513b49f4e7543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $__internal_100063d267983dbf442581002b26f95f9b87a8fd4421dd57005827084ff5942f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100063d267983dbf442581002b26f95f9b87a8fd4421dd57005827084ff5942f->enter($__internal_100063d267983dbf442581002b26f95f9b87a8fd4421dd57005827084ff5942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8803107a5487f057c7776ef2cf81b5064a9f2eab44418deb27513b49f4e7543->leave($__internal_c8803107a5487f057c7776ef2cf81b5064a9f2eab44418deb27513b49f4e7543_prof);

        
        $__internal_100063d267983dbf442581002b26f95f9b87a8fd4421dd57005827084ff5942f->leave($__internal_100063d267983dbf442581002b26f95f9b87a8fd4421dd57005827084ff5942f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_075a3013a8992d9ebdf3bf74dbf8dbd290c25d84dc398d13b196756eb02a5b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075a3013a8992d9ebdf3bf74dbf8dbd290c25d84dc398d13b196756eb02a5b9b->enter($__internal_075a3013a8992d9ebdf3bf74dbf8dbd290c25d84dc398d13b196756eb02a5b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cee668dd126e39fe6535985c3fca08f8345fa953677125e7ee58d0c99ec5a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cee668dd126e39fe6535985c3fca08f8345fa953677125e7ee58d0c99ec5a74->enter($__internal_0cee668dd126e39fe6535985c3fca08f8345fa953677125e7ee58d0c99ec5a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_0cee668dd126e39fe6535985c3fca08f8345fa953677125e7ee58d0c99ec5a74->leave($__internal_0cee668dd126e39fe6535985c3fca08f8345fa953677125e7ee58d0c99ec5a74_prof);

        
        $__internal_075a3013a8992d9ebdf3bf74dbf8dbd290c25d84dc398d13b196756eb02a5b9b->leave($__internal_075a3013a8992d9ebdf3bf74dbf8dbd290c25d84dc398d13b196756eb02a5b9b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddb525c7aaa80c2902e03d008d22419b872f45b7b6d3b95abdfc3ad172b45bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb525c7aaa80c2902e03d008d22419b872f45b7b6d3b95abdfc3ad172b45bf8->enter($__internal_ddb525c7aaa80c2902e03d008d22419b872f45b7b6d3b95abdfc3ad172b45bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6e0b4b9e787a696d4da86d1ca9191e0035a74e0e07600eb280fa2b288c7fc0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0b4b9e787a696d4da86d1ca9191e0035a74e0e07600eb280fa2b288c7fc0a7->enter($__internal_6e0b4b9e787a696d4da86d1ca9191e0035a74e0e07600eb280fa2b288c7fc0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6e0b4b9e787a696d4da86d1ca9191e0035a74e0e07600eb280fa2b288c7fc0a7->leave($__internal_6e0b4b9e787a696d4da86d1ca9191e0035a74e0e07600eb280fa2b288c7fc0a7_prof);

        
        $__internal_ddb525c7aaa80c2902e03d008d22419b872f45b7b6d3b95abdfc3ad172b45bf8->leave($__internal_ddb525c7aaa80c2902e03d008d22419b872f45b7b6d3b95abdfc3ad172b45bf8_prof);

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
