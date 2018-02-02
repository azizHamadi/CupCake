<?php

/* base.html.twig */
class __TwigTemplate_86772047284e53516357911e5f667eafa7a7a01ef5aee93d237fd57d276efa77 extends Twig_Template
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
        $__internal_e5cc37478a1492ad0854400887e501a761243d577f75500d14027212685f4970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cc37478a1492ad0854400887e501a761243d577f75500d14027212685f4970->enter($__internal_e5cc37478a1492ad0854400887e501a761243d577f75500d14027212685f4970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5d9ad2cad68c0cf584d1df51c898cb993312f051d1fb1da53edb082ef9eba602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9ad2cad68c0cf584d1df51c898cb993312f051d1fb1da53edb082ef9eba602->enter($__internal_5d9ad2cad68c0cf584d1df51c898cb993312f051d1fb1da53edb082ef9eba602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e5cc37478a1492ad0854400887e501a761243d577f75500d14027212685f4970->leave($__internal_e5cc37478a1492ad0854400887e501a761243d577f75500d14027212685f4970_prof);

        
        $__internal_5d9ad2cad68c0cf584d1df51c898cb993312f051d1fb1da53edb082ef9eba602->leave($__internal_5d9ad2cad68c0cf584d1df51c898cb993312f051d1fb1da53edb082ef9eba602_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d62d27d1dce1c7d81378a0e8fc2abb54c352fbf2993f51c51f679944477baca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62d27d1dce1c7d81378a0e8fc2abb54c352fbf2993f51c51f679944477baca6->enter($__internal_d62d27d1dce1c7d81378a0e8fc2abb54c352fbf2993f51c51f679944477baca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72af5fbbe88c99bc40e2c70e6427af977a7e547f1f6a239ad6a686333d2cc8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72af5fbbe88c99bc40e2c70e6427af977a7e547f1f6a239ad6a686333d2cc8d7->enter($__internal_72af5fbbe88c99bc40e2c70e6427af977a7e547f1f6a239ad6a686333d2cc8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_72af5fbbe88c99bc40e2c70e6427af977a7e547f1f6a239ad6a686333d2cc8d7->leave($__internal_72af5fbbe88c99bc40e2c70e6427af977a7e547f1f6a239ad6a686333d2cc8d7_prof);

        
        $__internal_d62d27d1dce1c7d81378a0e8fc2abb54c352fbf2993f51c51f679944477baca6->leave($__internal_d62d27d1dce1c7d81378a0e8fc2abb54c352fbf2993f51c51f679944477baca6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b626791e308f9ffb64e77bfbef2f2b306817c3cd9cf36a0bf0dda86596d4f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b626791e308f9ffb64e77bfbef2f2b306817c3cd9cf36a0bf0dda86596d4f0c->enter($__internal_3b626791e308f9ffb64e77bfbef2f2b306817c3cd9cf36a0bf0dda86596d4f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eb1517c9fc043a675564de408c56d50c2c1696d3f416da06969509ca7b7b9a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1517c9fc043a675564de408c56d50c2c1696d3f416da06969509ca7b7b9a99->enter($__internal_eb1517c9fc043a675564de408c56d50c2c1696d3f416da06969509ca7b7b9a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eb1517c9fc043a675564de408c56d50c2c1696d3f416da06969509ca7b7b9a99->leave($__internal_eb1517c9fc043a675564de408c56d50c2c1696d3f416da06969509ca7b7b9a99_prof);

        
        $__internal_3b626791e308f9ffb64e77bfbef2f2b306817c3cd9cf36a0bf0dda86596d4f0c->leave($__internal_3b626791e308f9ffb64e77bfbef2f2b306817c3cd9cf36a0bf0dda86596d4f0c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e7f96dc4b96bbc5aca6da4efe3f84fe0698a4d4f2b3e158f5d0fa2df02ca5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e7f96dc4b96bbc5aca6da4efe3f84fe0698a4d4f2b3e158f5d0fa2df02ca5c->enter($__internal_a5e7f96dc4b96bbc5aca6da4efe3f84fe0698a4d4f2b3e158f5d0fa2df02ca5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e44a72f8e121eb71349257e72b6713759fa31136d3b92e5637babf64ef3db4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e44a72f8e121eb71349257e72b6713759fa31136d3b92e5637babf64ef3db4b->enter($__internal_7e44a72f8e121eb71349257e72b6713759fa31136d3b92e5637babf64ef3db4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e44a72f8e121eb71349257e72b6713759fa31136d3b92e5637babf64ef3db4b->leave($__internal_7e44a72f8e121eb71349257e72b6713759fa31136d3b92e5637babf64ef3db4b_prof);

        
        $__internal_a5e7f96dc4b96bbc5aca6da4efe3f84fe0698a4d4f2b3e158f5d0fa2df02ca5c->leave($__internal_a5e7f96dc4b96bbc5aca6da4efe3f84fe0698a4d4f2b3e158f5d0fa2df02ca5c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a9c62fe4f97ddc565a0b2d0e378ee7f86707830474fec5f31250e1c0b3c25e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9c62fe4f97ddc565a0b2d0e378ee7f86707830474fec5f31250e1c0b3c25e2->enter($__internal_9a9c62fe4f97ddc565a0b2d0e378ee7f86707830474fec5f31250e1c0b3c25e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7523a43168c8b646df00e4c59fbe1d16d6d9150de94b1007d46a77cf2871733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7523a43168c8b646df00e4c59fbe1d16d6d9150de94b1007d46a77cf2871733->enter($__internal_f7523a43168c8b646df00e4c59fbe1d16d6d9150de94b1007d46a77cf2871733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7523a43168c8b646df00e4c59fbe1d16d6d9150de94b1007d46a77cf2871733->leave($__internal_f7523a43168c8b646df00e4c59fbe1d16d6d9150de94b1007d46a77cf2871733_prof);

        
        $__internal_9a9c62fe4f97ddc565a0b2d0e378ee7f86707830474fec5f31250e1c0b3c25e2->leave($__internal_9a9c62fe4f97ddc565a0b2d0e378ee7f86707830474fec5f31250e1c0b3c25e2_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\CupCakes\\app\\Resources\\views\\base.html.twig");
    }
}
