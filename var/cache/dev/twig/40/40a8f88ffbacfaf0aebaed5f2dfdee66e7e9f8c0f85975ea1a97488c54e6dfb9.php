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
        $__internal_982ed685f14687bfc7d9e814e883349851b297e1d583fd1494373e868c6044d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982ed685f14687bfc7d9e814e883349851b297e1d583fd1494373e868c6044d2->enter($__internal_982ed685f14687bfc7d9e814e883349851b297e1d583fd1494373e868c6044d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6856cfa474faa740743fd6f74b52cb1a430c717910fc05da5cd01c1fb53c8660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6856cfa474faa740743fd6f74b52cb1a430c717910fc05da5cd01c1fb53c8660->enter($__internal_6856cfa474faa740743fd6f74b52cb1a430c717910fc05da5cd01c1fb53c8660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982ed685f14687bfc7d9e814e883349851b297e1d583fd1494373e868c6044d2->leave($__internal_982ed685f14687bfc7d9e814e883349851b297e1d583fd1494373e868c6044d2_prof);

        
        $__internal_6856cfa474faa740743fd6f74b52cb1a430c717910fc05da5cd01c1fb53c8660->leave($__internal_6856cfa474faa740743fd6f74b52cb1a430c717910fc05da5cd01c1fb53c8660_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4805910eeaf64159ef5fac2f8e989894bbae51f79e521e8840f0438cfd97714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4805910eeaf64159ef5fac2f8e989894bbae51f79e521e8840f0438cfd97714->enter($__internal_f4805910eeaf64159ef5fac2f8e989894bbae51f79e521e8840f0438cfd97714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_579d060e61ab3aa43b07aa768873942b81dc1ba87aa5640979ad6f3e39364b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579d060e61ab3aa43b07aa768873942b81dc1ba87aa5640979ad6f3e39364b42->enter($__internal_579d060e61ab3aa43b07aa768873942b81dc1ba87aa5640979ad6f3e39364b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_579d060e61ab3aa43b07aa768873942b81dc1ba87aa5640979ad6f3e39364b42->leave($__internal_579d060e61ab3aa43b07aa768873942b81dc1ba87aa5640979ad6f3e39364b42_prof);

        
        $__internal_f4805910eeaf64159ef5fac2f8e989894bbae51f79e521e8840f0438cfd97714->leave($__internal_f4805910eeaf64159ef5fac2f8e989894bbae51f79e521e8840f0438cfd97714_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08232028dcc5ee383932f1057263c32cae1a169bc25c42bd5976dbb309d6b7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08232028dcc5ee383932f1057263c32cae1a169bc25c42bd5976dbb309d6b7fe->enter($__internal_08232028dcc5ee383932f1057263c32cae1a169bc25c42bd5976dbb309d6b7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_16ddc119c6e0433e74d0a9fa5d67daa4472deb627b9a524137038385cea8ab26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ddc119c6e0433e74d0a9fa5d67daa4472deb627b9a524137038385cea8ab26->enter($__internal_16ddc119c6e0433e74d0a9fa5d67daa4472deb627b9a524137038385cea8ab26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_16ddc119c6e0433e74d0a9fa5d67daa4472deb627b9a524137038385cea8ab26->leave($__internal_16ddc119c6e0433e74d0a9fa5d67daa4472deb627b9a524137038385cea8ab26_prof);

        
        $__internal_08232028dcc5ee383932f1057263c32cae1a169bc25c42bd5976dbb309d6b7fe->leave($__internal_08232028dcc5ee383932f1057263c32cae1a169bc25c42bd5976dbb309d6b7fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57fdc94ad64fa3662da10f639436a6fa53c8d9636dae76036023fcf0b90c8b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fdc94ad64fa3662da10f639436a6fa53c8d9636dae76036023fcf0b90c8b94->enter($__internal_57fdc94ad64fa3662da10f639436a6fa53c8d9636dae76036023fcf0b90c8b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2da3dd42eb4e5732e74f949d5ddd1f27e9b6aef972adeaa51ae119072fde79f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da3dd42eb4e5732e74f949d5ddd1f27e9b6aef972adeaa51ae119072fde79f9->enter($__internal_2da3dd42eb4e5732e74f949d5ddd1f27e9b6aef972adeaa51ae119072fde79f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2da3dd42eb4e5732e74f949d5ddd1f27e9b6aef972adeaa51ae119072fde79f9->leave($__internal_2da3dd42eb4e5732e74f949d5ddd1f27e9b6aef972adeaa51ae119072fde79f9_prof);

        
        $__internal_57fdc94ad64fa3662da10f639436a6fa53c8d9636dae76036023fcf0b90c8b94->leave($__internal_57fdc94ad64fa3662da10f639436a6fa53c8d9636dae76036023fcf0b90c8b94_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/marl/Labado/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
