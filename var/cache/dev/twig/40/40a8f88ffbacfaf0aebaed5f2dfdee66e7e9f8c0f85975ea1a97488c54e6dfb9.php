<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38a390676aa797f2248ef943d5f5d68bf3299620f9efe4539462063e6481ddea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a390676aa797f2248ef943d5f5d68bf3299620f9efe4539462063e6481ddea->enter($__internal_38a390676aa797f2248ef943d5f5d68bf3299620f9efe4539462063e6481ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f31dad92fa3fa43b7e9d1d536632164fe7978a6ba4d387dd600be4ab70181650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31dad92fa3fa43b7e9d1d536632164fe7978a6ba4d387dd600be4ab70181650->enter($__internal_f31dad92fa3fa43b7e9d1d536632164fe7978a6ba4d387dd600be4ab70181650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a390676aa797f2248ef943d5f5d68bf3299620f9efe4539462063e6481ddea->leave($__internal_38a390676aa797f2248ef943d5f5d68bf3299620f9efe4539462063e6481ddea_prof);

        
        $__internal_f31dad92fa3fa43b7e9d1d536632164fe7978a6ba4d387dd600be4ab70181650->leave($__internal_f31dad92fa3fa43b7e9d1d536632164fe7978a6ba4d387dd600be4ab70181650_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b7f37b3879814bc8e8d17f90b5424168caaaa8676afb220082ec1285a086115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7f37b3879814bc8e8d17f90b5424168caaaa8676afb220082ec1285a086115->enter($__internal_1b7f37b3879814bc8e8d17f90b5424168caaaa8676afb220082ec1285a086115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1def1eeff96a47a7231a7d0a6aef5155cd31500840c9e5a71b875e0049e4aeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1def1eeff96a47a7231a7d0a6aef5155cd31500840c9e5a71b875e0049e4aeeb->enter($__internal_1def1eeff96a47a7231a7d0a6aef5155cd31500840c9e5a71b875e0049e4aeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1def1eeff96a47a7231a7d0a6aef5155cd31500840c9e5a71b875e0049e4aeeb->leave($__internal_1def1eeff96a47a7231a7d0a6aef5155cd31500840c9e5a71b875e0049e4aeeb_prof);

        
        $__internal_1b7f37b3879814bc8e8d17f90b5424168caaaa8676afb220082ec1285a086115->leave($__internal_1b7f37b3879814bc8e8d17f90b5424168caaaa8676afb220082ec1285a086115_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_504591cd486ee194369989bed19128b816a9f6ab95eb1165560ab23e9d910fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504591cd486ee194369989bed19128b816a9f6ab95eb1165560ab23e9d910fb6->enter($__internal_504591cd486ee194369989bed19128b816a9f6ab95eb1165560ab23e9d910fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3ee1b115c86240aa7510f310feaf9dacef22f2504f7cad5c127942c7be39c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ee1b115c86240aa7510f310feaf9dacef22f2504f7cad5c127942c7be39c11->enter($__internal_e3ee1b115c86240aa7510f310feaf9dacef22f2504f7cad5c127942c7be39c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e3ee1b115c86240aa7510f310feaf9dacef22f2504f7cad5c127942c7be39c11->leave($__internal_e3ee1b115c86240aa7510f310feaf9dacef22f2504f7cad5c127942c7be39c11_prof);

        
        $__internal_504591cd486ee194369989bed19128b816a9f6ab95eb1165560ab23e9d910fb6->leave($__internal_504591cd486ee194369989bed19128b816a9f6ab95eb1165560ab23e9d910fb6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8dbfca59e33a55b2a4cae1e3f7e57cdfde2e8a9d606593191b766cac8e2defda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbfca59e33a55b2a4cae1e3f7e57cdfde2e8a9d606593191b766cac8e2defda->enter($__internal_8dbfca59e33a55b2a4cae1e3f7e57cdfde2e8a9d606593191b766cac8e2defda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba6f113a434fa1ca4e792628444210be08aec0e682236985524a3bae4ae69573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6f113a434fa1ca4e792628444210be08aec0e682236985524a3bae4ae69573->enter($__internal_ba6f113a434fa1ca4e792628444210be08aec0e682236985524a3bae4ae69573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ba6f113a434fa1ca4e792628444210be08aec0e682236985524a3bae4ae69573->leave($__internal_ba6f113a434fa1ca4e792628444210be08aec0e682236985524a3bae4ae69573_prof);

        
        $__internal_8dbfca59e33a55b2a4cae1e3f7e57cdfde2e8a9d606593191b766cac8e2defda->leave($__internal_8dbfca59e33a55b2a4cae1e3f7e57cdfde2e8a9d606593191b766cac8e2defda_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ojt3/labado/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
