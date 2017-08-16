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
        $__internal_d9bd98b1aed2eb698deefeb5c0f9905d7801adfcdc9f55909604bb8e4e366e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bd98b1aed2eb698deefeb5c0f9905d7801adfcdc9f55909604bb8e4e366e7a->enter($__internal_d9bd98b1aed2eb698deefeb5c0f9905d7801adfcdc9f55909604bb8e4e366e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_154efa4b5389a203e2cb68577d96450ea4acf2c35ffdac359835b93c0a71d5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154efa4b5389a203e2cb68577d96450ea4acf2c35ffdac359835b93c0a71d5c1->enter($__internal_154efa4b5389a203e2cb68577d96450ea4acf2c35ffdac359835b93c0a71d5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d9bd98b1aed2eb698deefeb5c0f9905d7801adfcdc9f55909604bb8e4e366e7a->leave($__internal_d9bd98b1aed2eb698deefeb5c0f9905d7801adfcdc9f55909604bb8e4e366e7a_prof);

        
        $__internal_154efa4b5389a203e2cb68577d96450ea4acf2c35ffdac359835b93c0a71d5c1->leave($__internal_154efa4b5389a203e2cb68577d96450ea4acf2c35ffdac359835b93c0a71d5c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_141c8e69a86bb1882e1e10e6095cb86d199cf79f120db05a3ea5c8d8fbee24cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141c8e69a86bb1882e1e10e6095cb86d199cf79f120db05a3ea5c8d8fbee24cf->enter($__internal_141c8e69a86bb1882e1e10e6095cb86d199cf79f120db05a3ea5c8d8fbee24cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5d88d593f9e07b792a5adf6954a2c6680dbfbc1c3f89039fab5efa177f544b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d88d593f9e07b792a5adf6954a2c6680dbfbc1c3f89039fab5efa177f544b8->enter($__internal_d5d88d593f9e07b792a5adf6954a2c6680dbfbc1c3f89039fab5efa177f544b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5d88d593f9e07b792a5adf6954a2c6680dbfbc1c3f89039fab5efa177f544b8->leave($__internal_d5d88d593f9e07b792a5adf6954a2c6680dbfbc1c3f89039fab5efa177f544b8_prof);

        
        $__internal_141c8e69a86bb1882e1e10e6095cb86d199cf79f120db05a3ea5c8d8fbee24cf->leave($__internal_141c8e69a86bb1882e1e10e6095cb86d199cf79f120db05a3ea5c8d8fbee24cf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dad1c2d94fd3209605cab45ec4794ead4ec276488b6e5823c8c0db6ebaf8c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dad1c2d94fd3209605cab45ec4794ead4ec276488b6e5823c8c0db6ebaf8c24->enter($__internal_3dad1c2d94fd3209605cab45ec4794ead4ec276488b6e5823c8c0db6ebaf8c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e29125fc6b09b90b50dca4d63988e26256a72f99016c4c7b8d4ff8e50e72217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e29125fc6b09b90b50dca4d63988e26256a72f99016c4c7b8d4ff8e50e72217->enter($__internal_4e29125fc6b09b90b50dca4d63988e26256a72f99016c4c7b8d4ff8e50e72217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e29125fc6b09b90b50dca4d63988e26256a72f99016c4c7b8d4ff8e50e72217->leave($__internal_4e29125fc6b09b90b50dca4d63988e26256a72f99016c4c7b8d4ff8e50e72217_prof);

        
        $__internal_3dad1c2d94fd3209605cab45ec4794ead4ec276488b6e5823c8c0db6ebaf8c24->leave($__internal_3dad1c2d94fd3209605cab45ec4794ead4ec276488b6e5823c8c0db6ebaf8c24_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_913ae4748f17cf6d82773ff3f73c5f1d02ab55f9a69c5a47a3349975c159911f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913ae4748f17cf6d82773ff3f73c5f1d02ab55f9a69c5a47a3349975c159911f->enter($__internal_913ae4748f17cf6d82773ff3f73c5f1d02ab55f9a69c5a47a3349975c159911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8bdfea003376bf6b1d246146e00c018642ae15e7d4d546eb63f0ff56e541552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bdfea003376bf6b1d246146e00c018642ae15e7d4d546eb63f0ff56e541552->enter($__internal_f8bdfea003376bf6b1d246146e00c018642ae15e7d4d546eb63f0ff56e541552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8bdfea003376bf6b1d246146e00c018642ae15e7d4d546eb63f0ff56e541552->leave($__internal_f8bdfea003376bf6b1d246146e00c018642ae15e7d4d546eb63f0ff56e541552_prof);

        
        $__internal_913ae4748f17cf6d82773ff3f73c5f1d02ab55f9a69c5a47a3349975c159911f->leave($__internal_913ae4748f17cf6d82773ff3f73c5f1d02ab55f9a69c5a47a3349975c159911f_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b82da77e5dea1a4fec29837fd4c16ba3eeefa898cd341c6bd6d16a327dc2624f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82da77e5dea1a4fec29837fd4c16ba3eeefa898cd341c6bd6d16a327dc2624f->enter($__internal_b82da77e5dea1a4fec29837fd4c16ba3eeefa898cd341c6bd6d16a327dc2624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d3543bf23d97c56b7237ac6ffab8921c30b377cdee815d9e73f35c79deb8dc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3543bf23d97c56b7237ac6ffab8921c30b377cdee815d9e73f35c79deb8dc38->enter($__internal_d3543bf23d97c56b7237ac6ffab8921c30b377cdee815d9e73f35c79deb8dc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d3543bf23d97c56b7237ac6ffab8921c30b377cdee815d9e73f35c79deb8dc38->leave($__internal_d3543bf23d97c56b7237ac6ffab8921c30b377cdee815d9e73f35c79deb8dc38_prof);

        
        $__internal_b82da77e5dea1a4fec29837fd4c16ba3eeefa898cd341c6bd6d16a327dc2624f->leave($__internal_b82da77e5dea1a4fec29837fd4c16ba3eeefa898cd341c6bd6d16a327dc2624f_prof);

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
", "base.html.twig", "/home/ojt3/labado/app/Resources/views/base.html.twig");
    }
}
