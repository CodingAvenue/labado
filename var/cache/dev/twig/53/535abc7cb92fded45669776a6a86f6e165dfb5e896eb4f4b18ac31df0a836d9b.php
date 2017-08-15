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
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a367398c6a8561a9fee5a98da47fbd77eb27828953c66c7d84ea6e7a3d9fbed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a367398c6a8561a9fee5a98da47fbd77eb27828953c66c7d84ea6e7a3d9fbed->enter($__internal_1a367398c6a8561a9fee5a98da47fbd77eb27828953c66c7d84ea6e7a3d9fbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $__internal_0b57e5065fa165d52372973cffab663ace6cc4a9aecaba190384ef950c092f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b57e5065fa165d52372973cffab663ace6cc4a9aecaba190384ef950c092f95->enter($__internal_0b57e5065fa165d52372973cffab663ace6cc4a9aecaba190384ef950c092f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a367398c6a8561a9fee5a98da47fbd77eb27828953c66c7d84ea6e7a3d9fbed->leave($__internal_1a367398c6a8561a9fee5a98da47fbd77eb27828953c66c7d84ea6e7a3d9fbed_prof);

        
        $__internal_0b57e5065fa165d52372973cffab663ace6cc4a9aecaba190384ef950c092f95->leave($__internal_0b57e5065fa165d52372973cffab663ace6cc4a9aecaba190384ef950c092f95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f44bc1e71bfd40a01cd3de9f12625d3ffb79094f74241e27eacdcfc98bf43195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44bc1e71bfd40a01cd3de9f12625d3ffb79094f74241e27eacdcfc98bf43195->enter($__internal_f44bc1e71bfd40a01cd3de9f12625d3ffb79094f74241e27eacdcfc98bf43195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ac4357d5945ac7493417c6ae6bc8988b07dfd9061e78cc560b0dcfbb0536512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac4357d5945ac7493417c6ae6bc8988b07dfd9061e78cc560b0dcfbb0536512->enter($__internal_9ac4357d5945ac7493417c6ae6bc8988b07dfd9061e78cc560b0dcfbb0536512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<div id=\"result\"></div>
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("id" => "quantity")));
        echo "
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9ac4357d5945ac7493417c6ae6bc8988b07dfd9061e78cc560b0dcfbb0536512->leave($__internal_9ac4357d5945ac7493417c6ae6bc8988b07dfd9061e78cc560b0dcfbb0536512_prof);

        
        $__internal_f44bc1e71bfd40a01cd3de9f12625d3ffb79094f74241e27eacdcfc98bf43195->leave($__internal_f44bc1e71bfd40a01cd3de9f12625d3ffb79094f74241e27eacdcfc98bf43195_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee7f92c2d38cfdb8e6c8f6b0ce2d04aa637fe731b69e229029942a6b34ea8098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7f92c2d38cfdb8e6c8f6b0ce2d04aa637fe731b69e229029942a6b34ea8098->enter($__internal_ee7f92c2d38cfdb8e6c8f6b0ce2d04aa637fe731b69e229029942a6b34ea8098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eefc693585e4317c354a0a4fdb18f222afc0d2509a1bb705146cd2cd07b166a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefc693585e4317c354a0a4fdb18f222afc0d2509a1bb705146cd2cd07b166a7->enter($__internal_eefc693585e4317c354a0a4fdb18f222afc0d2509a1bb705146cd2cd07b166a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/inputEstimate.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_eefc693585e4317c354a0a4fdb18f222afc0d2509a1bb705146cd2cd07b166a7->leave($__internal_eefc693585e4317c354a0a4fdb18f222afc0d2509a1bb705146cd2cd07b166a7_prof);

        
        $__internal_ee7f92c2d38cfdb8e6c8f6b0ce2d04aa637fe731b69e229029942a6b34ea8098->leave($__internal_ee7f92c2d38cfdb8e6c8f6b0ce2d04aa637fe731b69e229029942a6b34ea8098_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e94adc19f3bbc9a241b47f256b4bead4fb1f2755697fd0d5a49de3f3c04effa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e94adc19f3bbc9a241b47f256b4bead4fb1f2755697fd0d5a49de3f3c04effa->enter($__internal_7e94adc19f3bbc9a241b47f256b4bead4fb1f2755697fd0d5a49de3f3c04effa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b148b28ac65630fe4cfc3e6d81fb6e0c40350f1360b52831ffa4c03eb69e398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b148b28ac65630fe4cfc3e6d81fb6e0c40350f1360b52831ffa4c03eb69e398->enter($__internal_9b148b28ac65630fe4cfc3e6d81fb6e0c40350f1360b52831ffa4c03eb69e398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
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
        
        $__internal_9b148b28ac65630fe4cfc3e6d81fb6e0c40350f1360b52831ffa4c03eb69e398->leave($__internal_9b148b28ac65630fe4cfc3e6d81fb6e0c40350f1360b52831ffa4c03eb69e398_prof);

        
        $__internal_7e94adc19f3bbc9a241b47f256b4bead4fb1f2755697fd0d5a49de3f3c04effa->leave($__internal_7e94adc19f3bbc9a241b47f256b4bead4fb1f2755697fd0d5a49de3f3c04effa_prof);

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
        return array (  106 => 15,  97 => 14,  84 => 12,  75 => 11,  63 => 8,  59 => 7,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{{ form_start(form) }}
<div id=\"result\"></div>
{{ form_widget(form,{ 'attr': {'id': 'quantity'} } ) }}
{{ form_end(form) }}
{% endblock %}

 {% block javascripts %}
 <script src=\"{{ asset('js/inputEstimate.js') }}\"></script>
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
