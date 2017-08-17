<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5461c177586489d0506c28165ab66cb38279534b8904195e32187b7704bdbc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5461c177586489d0506c28165ab66cb38279534b8904195e32187b7704bdbc0d->enter($__internal_5461c177586489d0506c28165ab66cb38279534b8904195e32187b7704bdbc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_37f3b05c607866a4ee960565db4c817554c56843ae20dabd28dea7d5cd927813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f3b05c607866a4ee960565db4c817554c56843ae20dabd28dea7d5cd927813->enter($__internal_37f3b05c607866a4ee960565db4c817554c56843ae20dabd28dea7d5cd927813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5461c177586489d0506c28165ab66cb38279534b8904195e32187b7704bdbc0d->leave($__internal_5461c177586489d0506c28165ab66cb38279534b8904195e32187b7704bdbc0d_prof);

        
        $__internal_37f3b05c607866a4ee960565db4c817554c56843ae20dabd28dea7d5cd927813->leave($__internal_37f3b05c607866a4ee960565db4c817554c56843ae20dabd28dea7d5cd927813_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f9774b9ddc03d0ed653ee78bfeab072fb2371dafff68870ff20de13eb395e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9774b9ddc03d0ed653ee78bfeab072fb2371dafff68870ff20de13eb395e2e->enter($__internal_5f9774b9ddc03d0ed653ee78bfeab072fb2371dafff68870ff20de13eb395e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f64a785f1ee623d904f992122a293807b647a83e94b780134f45f8978eadcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f64a785f1ee623d904f992122a293807b647a83e94b780134f45f8978eadcbe->enter($__internal_4f64a785f1ee623d904f992122a293807b647a83e94b780134f45f8978eadcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f64a785f1ee623d904f992122a293807b647a83e94b780134f45f8978eadcbe->leave($__internal_4f64a785f1ee623d904f992122a293807b647a83e94b780134f45f8978eadcbe_prof);

        
        $__internal_5f9774b9ddc03d0ed653ee78bfeab072fb2371dafff68870ff20de13eb395e2e->leave($__internal_5f9774b9ddc03d0ed653ee78bfeab072fb2371dafff68870ff20de13eb395e2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_142b32ced795eb5e086f54e34a1476cfb22d591ed84ef5ce7f8f7dd5f01e7506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142b32ced795eb5e086f54e34a1476cfb22d591ed84ef5ce7f8f7dd5f01e7506->enter($__internal_142b32ced795eb5e086f54e34a1476cfb22d591ed84ef5ce7f8f7dd5f01e7506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ad0d0d3baa22bb109d13cc36e6526fc7bb0abb36df1a986554e7a7fc30e86bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad0d0d3baa22bb109d13cc36e6526fc7bb0abb36df1a986554e7a7fc30e86bb->enter($__internal_5ad0d0d3baa22bb109d13cc36e6526fc7bb0abb36df1a986554e7a7fc30e86bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ad0d0d3baa22bb109d13cc36e6526fc7bb0abb36df1a986554e7a7fc30e86bb->leave($__internal_5ad0d0d3baa22bb109d13cc36e6526fc7bb0abb36df1a986554e7a7fc30e86bb_prof);

        
        $__internal_142b32ced795eb5e086f54e34a1476cfb22d591ed84ef5ce7f8f7dd5f01e7506->leave($__internal_142b32ced795eb5e086f54e34a1476cfb22d591ed84ef5ce7f8f7dd5f01e7506_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cca312900aff404a8e27b9b3ba3573b9899da1211567fa4ce1a89566da9773b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca312900aff404a8e27b9b3ba3573b9899da1211567fa4ce1a89566da9773b8->enter($__internal_cca312900aff404a8e27b9b3ba3573b9899da1211567fa4ce1a89566da9773b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_feda0a8cc248559bbbebbd8f0f99c6a73e90b6e1cceb3c3b8a1a87c11b88f23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feda0a8cc248559bbbebbd8f0f99c6a73e90b6e1cceb3c3b8a1a87c11b88f23a->enter($__internal_feda0a8cc248559bbbebbd8f0f99c6a73e90b6e1cceb3c3b8a1a87c11b88f23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_feda0a8cc248559bbbebbd8f0f99c6a73e90b6e1cceb3c3b8a1a87c11b88f23a->leave($__internal_feda0a8cc248559bbbebbd8f0f99c6a73e90b6e1cceb3c3b8a1a87c11b88f23a_prof);

        
        $__internal_cca312900aff404a8e27b9b3ba3573b9899da1211567fa4ce1a89566da9773b8->leave($__internal_cca312900aff404a8e27b9b3ba3573b9899da1211567fa4ce1a89566da9773b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/marl/Labado/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
