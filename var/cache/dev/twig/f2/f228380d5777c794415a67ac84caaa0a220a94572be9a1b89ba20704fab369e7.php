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
        $__internal_60137758882bf6a485b906b2df5a114c1c80f57b544f97c365740c1d93c98f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60137758882bf6a485b906b2df5a114c1c80f57b544f97c365740c1d93c98f26->enter($__internal_60137758882bf6a485b906b2df5a114c1c80f57b544f97c365740c1d93c98f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c65bf01f0f5be62e4d57469ebf6bfc760f8c47945daba3728217d475d9a625d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65bf01f0f5be62e4d57469ebf6bfc760f8c47945daba3728217d475d9a625d8->enter($__internal_c65bf01f0f5be62e4d57469ebf6bfc760f8c47945daba3728217d475d9a625d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60137758882bf6a485b906b2df5a114c1c80f57b544f97c365740c1d93c98f26->leave($__internal_60137758882bf6a485b906b2df5a114c1c80f57b544f97c365740c1d93c98f26_prof);

        
        $__internal_c65bf01f0f5be62e4d57469ebf6bfc760f8c47945daba3728217d475d9a625d8->leave($__internal_c65bf01f0f5be62e4d57469ebf6bfc760f8c47945daba3728217d475d9a625d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fdd8bfecd14cb21fb15440e03fa162de2765699a25ab846efddc27bfc67f1265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd8bfecd14cb21fb15440e03fa162de2765699a25ab846efddc27bfc67f1265->enter($__internal_fdd8bfecd14cb21fb15440e03fa162de2765699a25ab846efddc27bfc67f1265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92307b1d33caec34b90ffc9ac31c9bea4bd4f205a54d295d78f03d10d5bb1307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92307b1d33caec34b90ffc9ac31c9bea4bd4f205a54d295d78f03d10d5bb1307->enter($__internal_92307b1d33caec34b90ffc9ac31c9bea4bd4f205a54d295d78f03d10d5bb1307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92307b1d33caec34b90ffc9ac31c9bea4bd4f205a54d295d78f03d10d5bb1307->leave($__internal_92307b1d33caec34b90ffc9ac31c9bea4bd4f205a54d295d78f03d10d5bb1307_prof);

        
        $__internal_fdd8bfecd14cb21fb15440e03fa162de2765699a25ab846efddc27bfc67f1265->leave($__internal_fdd8bfecd14cb21fb15440e03fa162de2765699a25ab846efddc27bfc67f1265_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c7feb5a32f8f203eb3938be4127ab80b7dc9efc71ad857df950f683dc9e3c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7feb5a32f8f203eb3938be4127ab80b7dc9efc71ad857df950f683dc9e3c60->enter($__internal_6c7feb5a32f8f203eb3938be4127ab80b7dc9efc71ad857df950f683dc9e3c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee97221321d6786c2873d27e785fbdb64b5bfec01e472f6d92bfb5e76208c2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee97221321d6786c2873d27e785fbdb64b5bfec01e472f6d92bfb5e76208c2cf->enter($__internal_ee97221321d6786c2873d27e785fbdb64b5bfec01e472f6d92bfb5e76208c2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee97221321d6786c2873d27e785fbdb64b5bfec01e472f6d92bfb5e76208c2cf->leave($__internal_ee97221321d6786c2873d27e785fbdb64b5bfec01e472f6d92bfb5e76208c2cf_prof);

        
        $__internal_6c7feb5a32f8f203eb3938be4127ab80b7dc9efc71ad857df950f683dc9e3c60->leave($__internal_6c7feb5a32f8f203eb3938be4127ab80b7dc9efc71ad857df950f683dc9e3c60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_643ce91717bf6c6c72d0e6f10d1e3656de4c7573bb303914bde7353ac36c85d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643ce91717bf6c6c72d0e6f10d1e3656de4c7573bb303914bde7353ac36c85d2->enter($__internal_643ce91717bf6c6c72d0e6f10d1e3656de4c7573bb303914bde7353ac36c85d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c6f5142778c3b70a8861c21d51c379a710999e08acb9a1c635a96cf849610eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6f5142778c3b70a8861c21d51c379a710999e08acb9a1c635a96cf849610eb->enter($__internal_3c6f5142778c3b70a8861c21d51c379a710999e08acb9a1c635a96cf849610eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c6f5142778c3b70a8861c21d51c379a710999e08acb9a1c635a96cf849610eb->leave($__internal_3c6f5142778c3b70a8861c21d51c379a710999e08acb9a1c635a96cf849610eb_prof);

        
        $__internal_643ce91717bf6c6c72d0e6f10d1e3656de4c7573bb303914bde7353ac36c85d2->leave($__internal_643ce91717bf6c6c72d0e6f10d1e3656de4c7573bb303914bde7353ac36c85d2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ojt3/labado/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
