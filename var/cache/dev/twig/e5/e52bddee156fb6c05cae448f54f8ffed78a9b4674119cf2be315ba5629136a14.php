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
        $__internal_d6b16c253a982bc8e4f59a00428a1359fdbf17f4bc7024a832d6aec4a315d3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b16c253a982bc8e4f59a00428a1359fdbf17f4bc7024a832d6aec4a315d3a1->enter($__internal_d6b16c253a982bc8e4f59a00428a1359fdbf17f4bc7024a832d6aec4a315d3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_216483ebd0a5d1c85c00e10343c5e4f6e5392c5cdaf91a836da4b245a580d44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216483ebd0a5d1c85c00e10343c5e4f6e5392c5cdaf91a836da4b245a580d44f->enter($__internal_216483ebd0a5d1c85c00e10343c5e4f6e5392c5cdaf91a836da4b245a580d44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d6b16c253a982bc8e4f59a00428a1359fdbf17f4bc7024a832d6aec4a315d3a1->leave($__internal_d6b16c253a982bc8e4f59a00428a1359fdbf17f4bc7024a832d6aec4a315d3a1_prof);

        
        $__internal_216483ebd0a5d1c85c00e10343c5e4f6e5392c5cdaf91a836da4b245a580d44f->leave($__internal_216483ebd0a5d1c85c00e10343c5e4f6e5392c5cdaf91a836da4b245a580d44f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7127e8def3da09348feb6d780133cc7eb6fdb1aca10594fe786377fab558e945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7127e8def3da09348feb6d780133cc7eb6fdb1aca10594fe786377fab558e945->enter($__internal_7127e8def3da09348feb6d780133cc7eb6fdb1aca10594fe786377fab558e945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51af0c67e284eca5d1603df157f37558e350be1ce8f3f575f04d621fe8a1afb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51af0c67e284eca5d1603df157f37558e350be1ce8f3f575f04d621fe8a1afb6->enter($__internal_51af0c67e284eca5d1603df157f37558e350be1ce8f3f575f04d621fe8a1afb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51af0c67e284eca5d1603df157f37558e350be1ce8f3f575f04d621fe8a1afb6->leave($__internal_51af0c67e284eca5d1603df157f37558e350be1ce8f3f575f04d621fe8a1afb6_prof);

        
        $__internal_7127e8def3da09348feb6d780133cc7eb6fdb1aca10594fe786377fab558e945->leave($__internal_7127e8def3da09348feb6d780133cc7eb6fdb1aca10594fe786377fab558e945_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b21b511d46038979cb5c78ad27fa3bf12680f2a2f104203fa66bbd4b81889242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21b511d46038979cb5c78ad27fa3bf12680f2a2f104203fa66bbd4b81889242->enter($__internal_b21b511d46038979cb5c78ad27fa3bf12680f2a2f104203fa66bbd4b81889242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89d04b6a3793228a844e20d39eae5e7dcbe8dae44526fbdcd85e770ed7050efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d04b6a3793228a844e20d39eae5e7dcbe8dae44526fbdcd85e770ed7050efa->enter($__internal_89d04b6a3793228a844e20d39eae5e7dcbe8dae44526fbdcd85e770ed7050efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89d04b6a3793228a844e20d39eae5e7dcbe8dae44526fbdcd85e770ed7050efa->leave($__internal_89d04b6a3793228a844e20d39eae5e7dcbe8dae44526fbdcd85e770ed7050efa_prof);

        
        $__internal_b21b511d46038979cb5c78ad27fa3bf12680f2a2f104203fa66bbd4b81889242->leave($__internal_b21b511d46038979cb5c78ad27fa3bf12680f2a2f104203fa66bbd4b81889242_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b13c9030ac4d569bf6254bc7c91b5d464974e44b3125fa7c4a299d2e82d560c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b13c9030ac4d569bf6254bc7c91b5d464974e44b3125fa7c4a299d2e82d560c->enter($__internal_7b13c9030ac4d569bf6254bc7c91b5d464974e44b3125fa7c4a299d2e82d560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffe0cf5946de26c27fc6ddd4e4d9e5932c698aec09b328e07354816c1c516d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe0cf5946de26c27fc6ddd4e4d9e5932c698aec09b328e07354816c1c516d09->enter($__internal_ffe0cf5946de26c27fc6ddd4e4d9e5932c698aec09b328e07354816c1c516d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffe0cf5946de26c27fc6ddd4e4d9e5932c698aec09b328e07354816c1c516d09->leave($__internal_ffe0cf5946de26c27fc6ddd4e4d9e5932c698aec09b328e07354816c1c516d09_prof);

        
        $__internal_7b13c9030ac4d569bf6254bc7c91b5d464974e44b3125fa7c4a299d2e82d560c->leave($__internal_7b13c9030ac4d569bf6254bc7c91b5d464974e44b3125fa7c4a299d2e82d560c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b96bc23412e1e78f8561798d1282f79c93b57ea36b1b5274ba0387001f6bcc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96bc23412e1e78f8561798d1282f79c93b57ea36b1b5274ba0387001f6bcc55->enter($__internal_b96bc23412e1e78f8561798d1282f79c93b57ea36b1b5274ba0387001f6bcc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3ecb91202b38af1ddd578dc3d19a573ce1da280502bcf7ff83c971b73469aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ecb91202b38af1ddd578dc3d19a573ce1da280502bcf7ff83c971b73469aa8->enter($__internal_b3ecb91202b38af1ddd578dc3d19a573ce1da280502bcf7ff83c971b73469aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b3ecb91202b38af1ddd578dc3d19a573ce1da280502bcf7ff83c971b73469aa8->leave($__internal_b3ecb91202b38af1ddd578dc3d19a573ce1da280502bcf7ff83c971b73469aa8_prof);

        
        $__internal_b96bc23412e1e78f8561798d1282f79c93b57ea36b1b5274ba0387001f6bcc55->leave($__internal_b96bc23412e1e78f8561798d1282f79c93b57ea36b1b5274ba0387001f6bcc55_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ojt3/labado/app/Resources/views/base.html.twig");
    }
}
