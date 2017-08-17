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
        $__internal_70999d6164f5f63c4f69625b67e879a72e45a540a4a2d647ab8a9a47e25451d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70999d6164f5f63c4f69625b67e879a72e45a540a4a2d647ab8a9a47e25451d5->enter($__internal_70999d6164f5f63c4f69625b67e879a72e45a540a4a2d647ab8a9a47e25451d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5f1b34508b7634432cd58ca7a2829991bace315e2fcf2ee8ff77129ff2b2ac54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1b34508b7634432cd58ca7a2829991bace315e2fcf2ee8ff77129ff2b2ac54->enter($__internal_5f1b34508b7634432cd58ca7a2829991bace315e2fcf2ee8ff77129ff2b2ac54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_70999d6164f5f63c4f69625b67e879a72e45a540a4a2d647ab8a9a47e25451d5->leave($__internal_70999d6164f5f63c4f69625b67e879a72e45a540a4a2d647ab8a9a47e25451d5_prof);

        
        $__internal_5f1b34508b7634432cd58ca7a2829991bace315e2fcf2ee8ff77129ff2b2ac54->leave($__internal_5f1b34508b7634432cd58ca7a2829991bace315e2fcf2ee8ff77129ff2b2ac54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7838fc7876a6dc971588539b485f8d0c530597ad57c7a78559d6a2d7dc1a661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7838fc7876a6dc971588539b485f8d0c530597ad57c7a78559d6a2d7dc1a661->enter($__internal_c7838fc7876a6dc971588539b485f8d0c530597ad57c7a78559d6a2d7dc1a661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f7b2c71c2ca15bcb94c19b67be330ecf03a52019ee79a4e4dce8cfd7e50825c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7b2c71c2ca15bcb94c19b67be330ecf03a52019ee79a4e4dce8cfd7e50825c->enter($__internal_4f7b2c71c2ca15bcb94c19b67be330ecf03a52019ee79a4e4dce8cfd7e50825c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f7b2c71c2ca15bcb94c19b67be330ecf03a52019ee79a4e4dce8cfd7e50825c->leave($__internal_4f7b2c71c2ca15bcb94c19b67be330ecf03a52019ee79a4e4dce8cfd7e50825c_prof);

        
        $__internal_c7838fc7876a6dc971588539b485f8d0c530597ad57c7a78559d6a2d7dc1a661->leave($__internal_c7838fc7876a6dc971588539b485f8d0c530597ad57c7a78559d6a2d7dc1a661_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cdd108132e8ee9d9344c5f1e5aa197bf8693e330fbc1149cda71295197dc070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdd108132e8ee9d9344c5f1e5aa197bf8693e330fbc1149cda71295197dc070->enter($__internal_0cdd108132e8ee9d9344c5f1e5aa197bf8693e330fbc1149cda71295197dc070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_90c1feee0c90480bfc139777ab2815d1b4cbe72a90dec16852219f3dc1117a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c1feee0c90480bfc139777ab2815d1b4cbe72a90dec16852219f3dc1117a98->enter($__internal_90c1feee0c90480bfc139777ab2815d1b4cbe72a90dec16852219f3dc1117a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90c1feee0c90480bfc139777ab2815d1b4cbe72a90dec16852219f3dc1117a98->leave($__internal_90c1feee0c90480bfc139777ab2815d1b4cbe72a90dec16852219f3dc1117a98_prof);

        
        $__internal_0cdd108132e8ee9d9344c5f1e5aa197bf8693e330fbc1149cda71295197dc070->leave($__internal_0cdd108132e8ee9d9344c5f1e5aa197bf8693e330fbc1149cda71295197dc070_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_483c81dd84a489aa6a91f98f454eaca930006b5f82b1fa54fd5963ee8d3b1bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483c81dd84a489aa6a91f98f454eaca930006b5f82b1fa54fd5963ee8d3b1bb7->enter($__internal_483c81dd84a489aa6a91f98f454eaca930006b5f82b1fa54fd5963ee8d3b1bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53c8fcc1c447889e6730ff5547f7c1cbec25d17347c5155d3cedeb9f3dda4b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c8fcc1c447889e6730ff5547f7c1cbec25d17347c5155d3cedeb9f3dda4b7c->enter($__internal_53c8fcc1c447889e6730ff5547f7c1cbec25d17347c5155d3cedeb9f3dda4b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53c8fcc1c447889e6730ff5547f7c1cbec25d17347c5155d3cedeb9f3dda4b7c->leave($__internal_53c8fcc1c447889e6730ff5547f7c1cbec25d17347c5155d3cedeb9f3dda4b7c_prof);

        
        $__internal_483c81dd84a489aa6a91f98f454eaca930006b5f82b1fa54fd5963ee8d3b1bb7->leave($__internal_483c81dd84a489aa6a91f98f454eaca930006b5f82b1fa54fd5963ee8d3b1bb7_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ca12eb3588c5857d9d40ae02486b9a0282c4f82bceb9041dd5fc568ea79bcc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca12eb3588c5857d9d40ae02486b9a0282c4f82bceb9041dd5fc568ea79bcc5->enter($__internal_0ca12eb3588c5857d9d40ae02486b9a0282c4f82bceb9041dd5fc568ea79bcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ca676815b6bcca9c0e81087037b2de50b7f7d5808f5bc0d13ef72658777b5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca676815b6bcca9c0e81087037b2de50b7f7d5808f5bc0d13ef72658777b5e2->enter($__internal_3ca676815b6bcca9c0e81087037b2de50b7f7d5808f5bc0d13ef72658777b5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ca676815b6bcca9c0e81087037b2de50b7f7d5808f5bc0d13ef72658777b5e2->leave($__internal_3ca676815b6bcca9c0e81087037b2de50b7f7d5808f5bc0d13ef72658777b5e2_prof);

        
        $__internal_0ca12eb3588c5857d9d40ae02486b9a0282c4f82bceb9041dd5fc568ea79bcc5->leave($__internal_0ca12eb3588c5857d9d40ae02486b9a0282c4f82bceb9041dd5fc568ea79bcc5_prof);

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
