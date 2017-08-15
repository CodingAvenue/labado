<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0953aac48d91dbd794dc199f4c4cef68d302ff44d99d4a0f6c92c3e8505c7458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0953aac48d91dbd794dc199f4c4cef68d302ff44d99d4a0f6c92c3e8505c7458->enter($__internal_0953aac48d91dbd794dc199f4c4cef68d302ff44d99d4a0f6c92c3e8505c7458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d88746a744fdbeb40381657bd85170ca64eb04733174fcd3cd9c4132a9306c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88746a744fdbeb40381657bd85170ca64eb04733174fcd3cd9c4132a9306c8b->enter($__internal_d88746a744fdbeb40381657bd85170ca64eb04733174fcd3cd9c4132a9306c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0953aac48d91dbd794dc199f4c4cef68d302ff44d99d4a0f6c92c3e8505c7458->leave($__internal_0953aac48d91dbd794dc199f4c4cef68d302ff44d99d4a0f6c92c3e8505c7458_prof);

        
        $__internal_d88746a744fdbeb40381657bd85170ca64eb04733174fcd3cd9c4132a9306c8b->leave($__internal_d88746a744fdbeb40381657bd85170ca64eb04733174fcd3cd9c4132a9306c8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ea4f1d2ca26ea9a5a4c86bd43108c24c49afd1fe2d6915ebe4efb12c3b19591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea4f1d2ca26ea9a5a4c86bd43108c24c49afd1fe2d6915ebe4efb12c3b19591->enter($__internal_5ea4f1d2ca26ea9a5a4c86bd43108c24c49afd1fe2d6915ebe4efb12c3b19591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e19a2cda4c753dbcb08177e5cf4603fdb284c49d37af30334c3c83b8be19e276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19a2cda4c753dbcb08177e5cf4603fdb284c49d37af30334c3c83b8be19e276->enter($__internal_e19a2cda4c753dbcb08177e5cf4603fdb284c49d37af30334c3c83b8be19e276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e19a2cda4c753dbcb08177e5cf4603fdb284c49d37af30334c3c83b8be19e276->leave($__internal_e19a2cda4c753dbcb08177e5cf4603fdb284c49d37af30334c3c83b8be19e276_prof);

        
        $__internal_5ea4f1d2ca26ea9a5a4c86bd43108c24c49afd1fe2d6915ebe4efb12c3b19591->leave($__internal_5ea4f1d2ca26ea9a5a4c86bd43108c24c49afd1fe2d6915ebe4efb12c3b19591_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1930cfbec5e20344ec5af99fbf78307035afca769780ace515003dca89fc50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1930cfbec5e20344ec5af99fbf78307035afca769780ace515003dca89fc50d->enter($__internal_d1930cfbec5e20344ec5af99fbf78307035afca769780ace515003dca89fc50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a24f173fa4b81a732d30daabecd3a859c736573bd9631d41dc96708cbfffaad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24f173fa4b81a732d30daabecd3a859c736573bd9631d41dc96708cbfffaad4->enter($__internal_a24f173fa4b81a732d30daabecd3a859c736573bd9631d41dc96708cbfffaad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a24f173fa4b81a732d30daabecd3a859c736573bd9631d41dc96708cbfffaad4->leave($__internal_a24f173fa4b81a732d30daabecd3a859c736573bd9631d41dc96708cbfffaad4_prof);

        
        $__internal_d1930cfbec5e20344ec5af99fbf78307035afca769780ace515003dca89fc50d->leave($__internal_d1930cfbec5e20344ec5af99fbf78307035afca769780ace515003dca89fc50d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa7ee2e34346ed18077e8340ddb5d37b1adbca61a5943e0ef16b253ebe350980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7ee2e34346ed18077e8340ddb5d37b1adbca61a5943e0ef16b253ebe350980->enter($__internal_aa7ee2e34346ed18077e8340ddb5d37b1adbca61a5943e0ef16b253ebe350980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bee14870a06dfbd3680b659dcca35ab3dbd98f7c6d021354e9644e5703a2b319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee14870a06dfbd3680b659dcca35ab3dbd98f7c6d021354e9644e5703a2b319->enter($__internal_bee14870a06dfbd3680b659dcca35ab3dbd98f7c6d021354e9644e5703a2b319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bee14870a06dfbd3680b659dcca35ab3dbd98f7c6d021354e9644e5703a2b319->leave($__internal_bee14870a06dfbd3680b659dcca35ab3dbd98f7c6d021354e9644e5703a2b319_prof);

        
        $__internal_aa7ee2e34346ed18077e8340ddb5d37b1adbca61a5943e0ef16b253ebe350980->leave($__internal_aa7ee2e34346ed18077e8340ddb5d37b1adbca61a5943e0ef16b253ebe350980_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ojt3/labado/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
