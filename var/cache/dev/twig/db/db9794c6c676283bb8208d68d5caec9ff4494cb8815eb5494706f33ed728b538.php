<?php

/* default/index.html.twig */
class __TwigTemplate_eb06cea6897fcd0190b5b480f9660ee60e7cc875ac6347494ee121194322dc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_3dd0e152141557374729ed0c609b6b4c831efac3f76dd55e399151308a7a66be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd0e152141557374729ed0c609b6b4c831efac3f76dd55e399151308a7a66be->enter($__internal_3dd0e152141557374729ed0c609b6b4c831efac3f76dd55e399151308a7a66be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_3d20c1de31733f883d4da251403fc093887f51936ca0d3c69b62f97e17423091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d20c1de31733f883d4da251403fc093887f51936ca0d3c69b62f97e17423091->enter($__internal_3d20c1de31733f883d4da251403fc093887f51936ca0d3c69b62f97e17423091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd0e152141557374729ed0c609b6b4c831efac3f76dd55e399151308a7a66be->leave($__internal_3dd0e152141557374729ed0c609b6b4c831efac3f76dd55e399151308a7a66be_prof);

        
        $__internal_3d20c1de31733f883d4da251403fc093887f51936ca0d3c69b62f97e17423091->leave($__internal_3d20c1de31733f883d4da251403fc093887f51936ca0d3c69b62f97e17423091_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a299deeca56c95edf58be172bc34328b787f80d77fc95045306a3ac7fc1046c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a299deeca56c95edf58be172bc34328b787f80d77fc95045306a3ac7fc1046c->enter($__internal_2a299deeca56c95edf58be172bc34328b787f80d77fc95045306a3ac7fc1046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b8d961195bf10db69e735fc4c598cd78ce4077ecde8912c3296f7c577bf1e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8d961195bf10db69e735fc4c598cd78ce4077ecde8912c3296f7c577bf1e80->enter($__internal_7b8d961195bf10db69e735fc4c598cd78ce4077ecde8912c3296f7c577bf1e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_7b8d961195bf10db69e735fc4c598cd78ce4077ecde8912c3296f7c577bf1e80->leave($__internal_7b8d961195bf10db69e735fc4c598cd78ce4077ecde8912c3296f7c577bf1e80_prof);

        
        $__internal_2a299deeca56c95edf58be172bc34328b787f80d77fc95045306a3ac7fc1046c->leave($__internal_2a299deeca56c95edf58be172bc34328b787f80d77fc95045306a3ac7fc1046c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8026c9dfc818dca20622455ea21a2691e7c83232df7b47b646f08c66bc3c7f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8026c9dfc818dca20622455ea21a2691e7c83232df7b47b646f08c66bc3c7f2e->enter($__internal_8026c9dfc818dca20622455ea21a2691e7c83232df7b47b646f08c66bc3c7f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac61ef11d16c65a83e52fedb1ce325c5c02aab96e3d0d1d24b6d75bdbb25e39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac61ef11d16c65a83e52fedb1ce325c5c02aab96e3d0d1d24b6d75bdbb25e39d->enter($__internal_ac61ef11d16c65a83e52fedb1ce325c5c02aab96e3d0d1d24b6d75bdbb25e39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ac61ef11d16c65a83e52fedb1ce325c5c02aab96e3d0d1d24b6d75bdbb25e39d->leave($__internal_ac61ef11d16c65a83e52fedb1ce325c5c02aab96e3d0d1d24b6d75bdbb25e39d_prof);

        
        $__internal_8026c9dfc818dca20622455ea21a2691e7c83232df7b47b646f08c66bc3c7f2e->leave($__internal_8026c9dfc818dca20622455ea21a2691e7c83232df7b47b646f08c66bc3c7f2e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
", "default/index.html.twig", "/home/ojt3/labado/app/Resources/views/default/index.html.twig");
    }
}
