<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b31861dc724d7ee91005c2b00fead21fdc0db7dcd36ba01eba289eeded841efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31861dc724d7ee91005c2b00fead21fdc0db7dcd36ba01eba289eeded841efb->enter($__internal_b31861dc724d7ee91005c2b00fead21fdc0db7dcd36ba01eba289eeded841efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2830ccd22318fc7ea9fd780f198e27a2376bbda525264b6c26a9b43d3b6ec6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2830ccd22318fc7ea9fd780f198e27a2376bbda525264b6c26a9b43d3b6ec6e8->enter($__internal_2830ccd22318fc7ea9fd780f198e27a2376bbda525264b6c26a9b43d3b6ec6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        <!--materialize css -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <nav>
            <div class=\"nav-wrapper indigo\">
                <div class=\"container\">
                    <a href=\"#!\" class=\"brand-logo\">Labado</a>
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
                    <ul class=\"right hide-on-med-and-down\">
                    <li><a href=\"#\">Link</a></li>
                    <li><a href=\"#\">Link</a></li>
                    </ul>
                    <ul class=\"side-nav\" id=\"mobile-demo\">
                    <li><a href=\"#\">Link</a></li>
                    <li><a href=\"#\">Link</a></li>
                    </ul>
                </div>    
            </div>
        </nav>
 
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        <!-- import javaScript files -->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>

        <!-- materialize js -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>

        <!-- custom javaScript files -->
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
        <script>\$(\".button-collapse\").sideNav(); </script>

    </body>
</html>
";
        
        $__internal_b31861dc724d7ee91005c2b00fead21fdc0db7dcd36ba01eba289eeded841efb->leave($__internal_b31861dc724d7ee91005c2b00fead21fdc0db7dcd36ba01eba289eeded841efb_prof);

        
        $__internal_2830ccd22318fc7ea9fd780f198e27a2376bbda525264b6c26a9b43d3b6ec6e8->leave($__internal_2830ccd22318fc7ea9fd780f198e27a2376bbda525264b6c26a9b43d3b6ec6e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bcacd778b1cc7d6a8fb1142f887ca43dc936ea331a955576e2a34c0fbc428c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bcacd778b1cc7d6a8fb1142f887ca43dc936ea331a955576e2a34c0fbc428c7->enter($__internal_7bcacd778b1cc7d6a8fb1142f887ca43dc936ea331a955576e2a34c0fbc428c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d6bbb95d10410bedfe80f40537e54a19f99a963c399e875394f92f4aa9b5020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6bbb95d10410bedfe80f40537e54a19f99a963c399e875394f92f4aa9b5020->enter($__internal_7d6bbb95d10410bedfe80f40537e54a19f99a963c399e875394f92f4aa9b5020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d6bbb95d10410bedfe80f40537e54a19f99a963c399e875394f92f4aa9b5020->leave($__internal_7d6bbb95d10410bedfe80f40537e54a19f99a963c399e875394f92f4aa9b5020_prof);

        
        $__internal_7bcacd778b1cc7d6a8fb1142f887ca43dc936ea331a955576e2a34c0fbc428c7->leave($__internal_7bcacd778b1cc7d6a8fb1142f887ca43dc936ea331a955576e2a34c0fbc428c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ae3ad13b7d858afa86e728a559da85543ff60826ef89c3545c7c64760973c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae3ad13b7d858afa86e728a559da85543ff60826ef89c3545c7c64760973c6b->enter($__internal_5ae3ad13b7d858afa86e728a559da85543ff60826ef89c3545c7c64760973c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ab8ee78e96643dba736267c1b09e8cfffa6e42be6e62ff2a7ad83487d2f3fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab8ee78e96643dba736267c1b09e8cfffa6e42be6e62ff2a7ad83487d2f3fa1->enter($__internal_1ab8ee78e96643dba736267c1b09e8cfffa6e42be6e62ff2a7ad83487d2f3fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1ab8ee78e96643dba736267c1b09e8cfffa6e42be6e62ff2a7ad83487d2f3fa1->leave($__internal_1ab8ee78e96643dba736267c1b09e8cfffa6e42be6e62ff2a7ad83487d2f3fa1_prof);

        
        $__internal_5ae3ad13b7d858afa86e728a559da85543ff60826ef89c3545c7c64760973c6b->leave($__internal_5ae3ad13b7d858afa86e728a559da85543ff60826ef89c3545c7c64760973c6b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a21c2954ff058829e12f32dbbe6d7241336f18d18232cebb706e8ccae92767df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21c2954ff058829e12f32dbbe6d7241336f18d18232cebb706e8ccae92767df->enter($__internal_a21c2954ff058829e12f32dbbe6d7241336f18d18232cebb706e8ccae92767df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70c2501025b962fd85816cc2616b8b5594bc1891fae1e1aefce2148683d96b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c2501025b962fd85816cc2616b8b5594bc1891fae1e1aefce2148683d96b3e->enter($__internal_70c2501025b962fd85816cc2616b8b5594bc1891fae1e1aefce2148683d96b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70c2501025b962fd85816cc2616b8b5594bc1891fae1e1aefce2148683d96b3e->leave($__internal_70c2501025b962fd85816cc2616b8b5594bc1891fae1e1aefce2148683d96b3e_prof);

        
        $__internal_a21c2954ff058829e12f32dbbe6d7241336f18d18232cebb706e8ccae92767df->leave($__internal_a21c2954ff058829e12f32dbbe6d7241336f18d18232cebb706e8ccae92767df_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04a89f9f1e096820b1d568201f6f93bb5dcd9ab3b211bf359d75c2ecc948a611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a89f9f1e096820b1d568201f6f93bb5dcd9ab3b211bf359d75c2ecc948a611->enter($__internal_04a89f9f1e096820b1d568201f6f93bb5dcd9ab3b211bf359d75c2ecc948a611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2192219bd313e60c37ccb7af824d034420e82007d25f6ff42b3ed6316eca9d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2192219bd313e60c37ccb7af824d034420e82007d25f6ff42b3ed6316eca9d9e->enter($__internal_2192219bd313e60c37ccb7af824d034420e82007d25f6ff42b3ed6316eca9d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2192219bd313e60c37ccb7af824d034420e82007d25f6ff42b3ed6316eca9d9e->leave($__internal_2192219bd313e60c37ccb7af824d034420e82007d25f6ff42b3ed6316eca9d9e_prof);

        
        $__internal_04a89f9f1e096820b1d568201f6f93bb5dcd9ab3b211bf359d75c2ecc948a611->leave($__internal_04a89f9f1e096820b1d568201f6f93bb5dcd9ab3b211bf359d75c2ecc948a611_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 41,  141 => 33,  124 => 6,  106 => 5,  91 => 42,  89 => 41,  83 => 38,  77 => 34,  75 => 33,  51 => 12,  47 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        <!--materialize css -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <nav>
            <div class=\"nav-wrapper indigo\">
                <div class=\"container\">
                    <a href=\"#!\" class=\"brand-logo\">Labado</a>
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
                    <ul class=\"right hide-on-med-and-down\">
                    <li><a href=\"#\">Link</a></li>
                    <li><a href=\"#\">Link</a></li>
                    </ul>
                    <ul class=\"side-nav\" id=\"mobile-demo\">
                    <li><a href=\"#\">Link</a></li>
                    <li><a href=\"#\">Link</a></li>
                    </ul>
                </div>    
            </div>
        </nav>
 
        {% block body %}{% endblock %}
        <!-- import javaScript files -->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>

        <!-- materialize js -->
        <script src=\"{{ asset('js/materialize.min.js') }}\"></script>

        <!-- custom javaScript files -->
        {% block javascripts %}{% endblock %}

        <script>\$(\".button-collapse\").sideNav(); </script>

    </body>
</html>
", "base.html.twig", "/home/marl/Labado/app/Resources/views/base.html.twig");
    }
}
