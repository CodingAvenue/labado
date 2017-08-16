<?php

/* CodingAvenueLabadoBundle:UserInteractionController:input_estimate.html.twig */
class __TwigTemplate_f4669744ca53a32d37393b22ba8efc4881268cf70c86e76bf9e82edaf6339d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CodingAvenueLabadoBundle:UserInteractionController:input_estimate.html.twig", 1);
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
        $__internal_05c697cfe9a1f1db012cfc9f53ff9de6af05470158830916f9fb4457a40e45bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c697cfe9a1f1db012cfc9f53ff9de6af05470158830916f9fb4457a40e45bd->enter($__internal_05c697cfe9a1f1db012cfc9f53ff9de6af05470158830916f9fb4457a40e45bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:UserInteractionController:input_estimate.html.twig"));

        $__internal_f7131628e2266d3f2073da5e9e36fc4ec335966f2732ff3e8a7bfe4b3fdb600f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7131628e2266d3f2073da5e9e36fc4ec335966f2732ff3e8a7bfe4b3fdb600f->enter($__internal_f7131628e2266d3f2073da5e9e36fc4ec335966f2732ff3e8a7bfe4b3fdb600f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodingAvenueLabadoBundle:UserInteractionController:input_estimate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c697cfe9a1f1db012cfc9f53ff9de6af05470158830916f9fb4457a40e45bd->leave($__internal_05c697cfe9a1f1db012cfc9f53ff9de6af05470158830916f9fb4457a40e45bd_prof);

        
        $__internal_f7131628e2266d3f2073da5e9e36fc4ec335966f2732ff3e8a7bfe4b3fdb600f->leave($__internal_f7131628e2266d3f2073da5e9e36fc4ec335966f2732ff3e8a7bfe4b3fdb600f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e2951fba0fcce189fadccc1fb5b0ea1710e6a91ffe07beee3e5c4876952fc39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2951fba0fcce189fadccc1fb5b0ea1710e6a91ffe07beee3e5c4876952fc39->enter($__internal_9e2951fba0fcce189fadccc1fb5b0ea1710e6a91ffe07beee3e5c4876952fc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_982e6c71e6ea5cc1c505081c1e860e846064818c330eaadd71df484556ef1433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982e6c71e6ea5cc1c505081c1e860e846064818c330eaadd71df484556ef1433->enter($__internal_982e6c71e6ea5cc1c505081c1e860e846064818c330eaadd71df484556ef1433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container labado_body_container\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "estimate")));
        echo "
        <div class=\"row header\">
            <div class=\"col s4 bold\">Type</div>
            <div class=\"col s4\">Price</div>
            <div class=\"col s4\">Est. Weight</div>
        </div>
        <div class=\"row rowtype\"> 
            <div class=\"col s4\">
                White
            </div>
            <div class=\"col s4\">
                <div class=\"result\" id=\"amount_1\">P0.00</div> 
            </div>
            
            <div class=\"col s4\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "clothes_white", array()), 'widget', array("attr" => array("data-target" => "weight_1", "placeholder" => "Amount", "maxlength" => "2")));
        echo "
            </div>
        </div>
        <div class=\"row rowtype\"> 
            <div class=\"col s4\">
                Colored
            </div>
            <div class=\"col s4\">
                <div class=\"result\" id=\"amount_2\">P0.00</div> 
            </div>
            
            <div class=\"col s4\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "clothes_colored", array()), 'widget', array("attr" => array("data-target" => "weight_2", "placeholder" => "Amount", "maxlength" => "2")));
        echo "
            </div>
        </div>

        <input type=\"submit\" value=\"Proceed\" class=\"right waves-effect waves-light btn\" >
        <!-- out 
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "clothes_colored", array()), 'widget', array("attr" => array("id" => "quantity")));
        echo "

        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bedsheets_white", array()), 'widget', array("attr" => array("id" => "quantity")));
        echo "

        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bedsheets_colored", array()), 'widget', array("attr" => array("id" => "quantity")));
        echo "
        -->
        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <div>
";
        
        $__internal_982e6c71e6ea5cc1c505081c1e860e846064818c330eaadd71df484556ef1433->leave($__internal_982e6c71e6ea5cc1c505081c1e860e846064818c330eaadd71df484556ef1433_prof);

        
        $__internal_9e2951fba0fcce189fadccc1fb5b0ea1710e6a91ffe07beee3e5c4876952fc39->leave($__internal_9e2951fba0fcce189fadccc1fb5b0ea1710e6a91ffe07beee3e5c4876952fc39_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6b2e596d6d2085def4b1d6ac756505414e88d148b7cff769f248d1ca2083114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b2e596d6d2085def4b1d6ac756505414e88d148b7cff769f248d1ca2083114->enter($__internal_a6b2e596d6d2085def4b1d6ac756505414e88d148b7cff769f248d1ca2083114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91b9d7b06590ac2009ae267d46d70de8ef404af273887ee68a22aef0e85acd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b9d7b06590ac2009ae267d46d70de8ef404af273887ee68a22aef0e85acd35->enter($__internal_91b9d7b06590ac2009ae267d46d70de8ef404af273887ee68a22aef0e85acd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo " <script>
    \$(function() {
    \$( \"#estimate .rowtype\" ).on( \"keyup\", \"input\", function() {
        //this is a temp rate
        var rate = ";
        // line 53
        echo twig_escape_filter($this->env, ($context["rate"] ?? $this->getContext($context, "rate")), "html", null, true);
        echo ";
        var val = parseFloat(\$(this).val());
        var appendToId = \$(this).attr('data-target').toString();
        //alert('#amount'+appendToId.charAt(appendToId.length-1));
        if((rate*val)+\"\" !=\"NaN\")
            \$('#amount_'+appendToId.charAt(appendToId.length-1) ).html(\"P\"+(rate*val)+\".00\");
        else
            \$('#amount_'+appendToId.charAt(appendToId.length-1) ).html(\"P0.00\");

    });
    \$( \"#estimate\" ).on( \"focus\", \".rowtype\", function() {
        \$(this).addClass(\"focus\");
    });
    \$( \"#estimate\" ).on( \"focusout\", \".rowtype\", function() {
        \$(this).removeClass(\"focus\");
    });


});
 </script>

 ";
        
        $__internal_91b9d7b06590ac2009ae267d46d70de8ef404af273887ee68a22aef0e85acd35->leave($__internal_91b9d7b06590ac2009ae267d46d70de8ef404af273887ee68a22aef0e85acd35_prof);

        
        $__internal_a6b2e596d6d2085def4b1d6ac756505414e88d148b7cff769f248d1ca2083114->leave($__internal_a6b2e596d6d2085def4b1d6ac756505414e88d148b7cff769f248d1ca2083114_prof);

    }

    // line 75
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f559019c26a1317b58d9af2d15368850ef8ceab09649d657f548c43244c529c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f559019c26a1317b58d9af2d15368850ef8ceab09649d657f548c43244c529c->enter($__internal_1f559019c26a1317b58d9af2d15368850ef8ceab09649d657f548c43244c529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d36dc125b1c0337ba4b27894fa863f7cd9d714a74e3af013d57429a7795dcf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36dc125b1c0337ba4b27894fa863f7cd9d714a74e3af013d57429a7795dcf07->enter($__internal_d36dc125b1c0337ba4b27894fa863f7cd9d714a74e3af013d57429a7795dcf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 76
        echo "<style>
    .focus{
        border-radius:10px 10px;
        background-color:rgb(235,235,235);
        padding:15px;
        font-weight:bold;

    }

    .header{
       border-bottom:1px dotted #666; 
       padding:15px;
       font-weight:bold;

    }
    .labado_body_container{
        text-align:center;
        margin-top:20px !important;
        padding:20px;
        background-color:rgb(250,250,250);
        border-radius:5px;
        box-shadow:0px 1px 1px 0px black;
    }
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
        
        $__internal_d36dc125b1c0337ba4b27894fa863f7cd9d714a74e3af013d57429a7795dcf07->leave($__internal_d36dc125b1c0337ba4b27894fa863f7cd9d714a74e3af013d57429a7795dcf07_prof);

        
        $__internal_1f559019c26a1317b58d9af2d15368850ef8ceab09649d657f548c43244c529c->leave($__internal_1f559019c26a1317b58d9af2d15368850ef8ceab09649d657f548c43244c529c_prof);

    }

    public function getTemplateName()
    {
        return "CodingAvenueLabadoBundle:UserInteractionController:input_estimate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 76,  171 => 75,  139 => 53,  133 => 49,  124 => 48,  111 => 44,  106 => 42,  101 => 40,  96 => 38,  87 => 32,  72 => 20,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    <div class=\"container labado_body_container\">
        {{ form_start(form,{ 'attr': {'id': 'estimate'} } ) }}
        <div class=\"row header\">
            <div class=\"col s4 bold\">Type</div>
            <div class=\"col s4\">Price</div>
            <div class=\"col s4\">Est. Weight</div>
        </div>
        <div class=\"row rowtype\"> 
            <div class=\"col s4\">
                White
            </div>
            <div class=\"col s4\">
                <div class=\"result\" id=\"amount_1\">P0.00</div> 
            </div>
            
            <div class=\"col s4\">
            {{ form_widget(form.clothes_white,{ 'attr': { 'data-target': 'weight_1', 'placeholder': 'Amount' ,'maxlength': '2' } } ) }}
            </div>
        </div>
        <div class=\"row rowtype\"> 
            <div class=\"col s4\">
                Colored
            </div>
            <div class=\"col s4\">
                <div class=\"result\" id=\"amount_2\">P0.00</div> 
            </div>
            
            <div class=\"col s4\">
            {{ form_widget(form.clothes_colored,{ 'attr': {'data-target': 'weight_2', 'placeholder': 'Amount','maxlength': '2' } } ) }}
            </div>
        </div>

        <input type=\"submit\" value=\"Proceed\" class=\"right waves-effect waves-light btn\" >
        <!-- out 
        {{ form_widget(form.clothes_colored,{ 'attr': {'id': 'quantity'} } ) }}

        {{ form_widget(form.bedsheets_white,{ 'attr': {'id': 'quantity'} } ) }}

        {{ form_widget(form.bedsheets_colored,{ 'attr': {'id': 'quantity'} } ) }}
        -->
        {{ form_end(form) }}
    <div>
{% endblock %}

 {% block javascripts %}
 <script>
    \$(function() {
    \$( \"#estimate .rowtype\" ).on( \"keyup\", \"input\", function() {
        //this is a temp rate
        var rate = {{rate}};
        var val = parseFloat(\$(this).val());
        var appendToId = \$(this).attr('data-target').toString();
        //alert('#amount'+appendToId.charAt(appendToId.length-1));
        if((rate*val)+\"\" !=\"NaN\")
            \$('#amount_'+appendToId.charAt(appendToId.length-1) ).html(\"P\"+(rate*val)+\".00\");
        else
            \$('#amount_'+appendToId.charAt(appendToId.length-1) ).html(\"P0.00\");

    });
    \$( \"#estimate\" ).on( \"focus\", \".rowtype\", function() {
        \$(this).addClass(\"focus\");
    });
    \$( \"#estimate\" ).on( \"focusout\", \".rowtype\", function() {
        \$(this).removeClass(\"focus\");
    });


});
 </script>

 {% endblock %}
{% block stylesheets %}
<style>
    .focus{
        border-radius:10px 10px;
        background-color:rgb(235,235,235);
        padding:15px;
        font-weight:bold;

    }

    .header{
       border-bottom:1px dotted #666; 
       padding:15px;
       font-weight:bold;

    }
    .labado_body_container{
        text-align:center;
        margin-top:20px !important;
        padding:20px;
        background-color:rgb(250,250,250);
        border-radius:5px;
        box-shadow:0px 1px 1px 0px black;
    }
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
", "CodingAvenueLabadoBundle:UserInteractionController:input_estimate.html.twig", "/home/ojt3/labado/src/CodingAvenue/LabadoBundle/Resources/views/UserInteractionController/input_estimate.html.twig");
    }
}
