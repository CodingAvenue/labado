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
        $__internal_bda9ada1d3806aefb383d35f827d77afa0cef5105bd6f65fc7b2fd5aafe27206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda9ada1d3806aefb383d35f827d77afa0cef5105bd6f65fc7b2fd5aafe27206->enter($__internal_bda9ada1d3806aefb383d35f827d77afa0cef5105bd6f65fc7b2fd5aafe27206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f54c7dd0ffae1cf852f8ac8772705b3daf503a6f4572755fd05d0f19718ee23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54c7dd0ffae1cf852f8ac8772705b3daf503a6f4572755fd05d0f19718ee23c->enter($__internal_f54c7dd0ffae1cf852f8ac8772705b3daf503a6f4572755fd05d0f19718ee23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bda9ada1d3806aefb383d35f827d77afa0cef5105bd6f65fc7b2fd5aafe27206->leave($__internal_bda9ada1d3806aefb383d35f827d77afa0cef5105bd6f65fc7b2fd5aafe27206_prof);

        
        $__internal_f54c7dd0ffae1cf852f8ac8772705b3daf503a6f4572755fd05d0f19718ee23c->leave($__internal_f54c7dd0ffae1cf852f8ac8772705b3daf503a6f4572755fd05d0f19718ee23c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6237f5bb1678cfe3a2901ac44708a00e243a1b092d0acff5db128d782f34781e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6237f5bb1678cfe3a2901ac44708a00e243a1b092d0acff5db128d782f34781e->enter($__internal_6237f5bb1678cfe3a2901ac44708a00e243a1b092d0acff5db128d782f34781e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c962ba3b39de8b0ac0bafcdee186a99cd4aed140e57ea90035509f9b58c65970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c962ba3b39de8b0ac0bafcdee186a99cd4aed140e57ea90035509f9b58c65970->enter($__internal_c962ba3b39de8b0ac0bafcdee186a99cd4aed140e57ea90035509f9b58c65970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c962ba3b39de8b0ac0bafcdee186a99cd4aed140e57ea90035509f9b58c65970->leave($__internal_c962ba3b39de8b0ac0bafcdee186a99cd4aed140e57ea90035509f9b58c65970_prof);

        
        $__internal_6237f5bb1678cfe3a2901ac44708a00e243a1b092d0acff5db128d782f34781e->leave($__internal_6237f5bb1678cfe3a2901ac44708a00e243a1b092d0acff5db128d782f34781e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19bc9fd5594c69a67c93dd8378ea0f01e481463adac01ceaa12937f0dfcdc166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bc9fd5594c69a67c93dd8378ea0f01e481463adac01ceaa12937f0dfcdc166->enter($__internal_19bc9fd5594c69a67c93dd8378ea0f01e481463adac01ceaa12937f0dfcdc166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_adbe605d3d40bd8a1d6c90eb3bc26a0932c35ff97cde3cedaeef45c86c2e4043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbe605d3d40bd8a1d6c90eb3bc26a0932c35ff97cde3cedaeef45c86c2e4043->enter($__internal_adbe605d3d40bd8a1d6c90eb3bc26a0932c35ff97cde3cedaeef45c86c2e4043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_adbe605d3d40bd8a1d6c90eb3bc26a0932c35ff97cde3cedaeef45c86c2e4043->leave($__internal_adbe605d3d40bd8a1d6c90eb3bc26a0932c35ff97cde3cedaeef45c86c2e4043_prof);

        
        $__internal_19bc9fd5594c69a67c93dd8378ea0f01e481463adac01ceaa12937f0dfcdc166->leave($__internal_19bc9fd5594c69a67c93dd8378ea0f01e481463adac01ceaa12937f0dfcdc166_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b13d16b1d6f493a237f98162eacf3eded94373fd06cc0a0e82f636157f7e0971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13d16b1d6f493a237f98162eacf3eded94373fd06cc0a0e82f636157f7e0971->enter($__internal_b13d16b1d6f493a237f98162eacf3eded94373fd06cc0a0e82f636157f7e0971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_311f22097d802d97f7b4283171b88537202dfdd848f64b8cfb0947457d9439ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311f22097d802d97f7b4283171b88537202dfdd848f64b8cfb0947457d9439ef->enter($__internal_311f22097d802d97f7b4283171b88537202dfdd848f64b8cfb0947457d9439ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_311f22097d802d97f7b4283171b88537202dfdd848f64b8cfb0947457d9439ef->leave($__internal_311f22097d802d97f7b4283171b88537202dfdd848f64b8cfb0947457d9439ef_prof);

        
        $__internal_b13d16b1d6f493a237f98162eacf3eded94373fd06cc0a0e82f636157f7e0971->leave($__internal_b13d16b1d6f493a237f98162eacf3eded94373fd06cc0a0e82f636157f7e0971_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b57c304f78282043b48b59729805c9db0e2206f991139f4f44a4c67ec4d3814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b57c304f78282043b48b59729805c9db0e2206f991139f4f44a4c67ec4d3814->enter($__internal_6b57c304f78282043b48b59729805c9db0e2206f991139f4f44a4c67ec4d3814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e542091d195c43a13a1d0e7c30ff42f73d8492dfc78b4cf1a865591b2d9fd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e542091d195c43a13a1d0e7c30ff42f73d8492dfc78b4cf1a865591b2d9fd06->enter($__internal_6e542091d195c43a13a1d0e7c30ff42f73d8492dfc78b4cf1a865591b2d9fd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e542091d195c43a13a1d0e7c30ff42f73d8492dfc78b4cf1a865591b2d9fd06->leave($__internal_6e542091d195c43a13a1d0e7c30ff42f73d8492dfc78b4cf1a865591b2d9fd06_prof);

        
        $__internal_6b57c304f78282043b48b59729805c9db0e2206f991139f4f44a4c67ec4d3814->leave($__internal_6b57c304f78282043b48b59729805c9db0e2206f991139f4f44a4c67ec4d3814_prof);

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
