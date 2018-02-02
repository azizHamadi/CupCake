<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
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
        $__internal_8c4953191fe0e1dac5edb56edbb2c63e808c36704a969bdcb306e253372ac4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4953191fe0e1dac5edb56edbb2c63e808c36704a969bdcb306e253372ac4a2->enter($__internal_8c4953191fe0e1dac5edb56edbb2c63e808c36704a969bdcb306e253372ac4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_809cf20b1e59498276beddda4d3ed1b22ebbbce277e82acdca60d565ab454504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809cf20b1e59498276beddda4d3ed1b22ebbbce277e82acdca60d565ab454504->enter($__internal_809cf20b1e59498276beddda4d3ed1b22ebbbce277e82acdca60d565ab454504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4953191fe0e1dac5edb56edbb2c63e808c36704a969bdcb306e253372ac4a2->leave($__internal_8c4953191fe0e1dac5edb56edbb2c63e808c36704a969bdcb306e253372ac4a2_prof);

        
        $__internal_809cf20b1e59498276beddda4d3ed1b22ebbbce277e82acdca60d565ab454504->leave($__internal_809cf20b1e59498276beddda4d3ed1b22ebbbce277e82acdca60d565ab454504_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3a77ce6ab82703fdd18b83daae11e0c4a6a27c42d41457538f7d3f57e6fd3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a77ce6ab82703fdd18b83daae11e0c4a6a27c42d41457538f7d3f57e6fd3de->enter($__internal_e3a77ce6ab82703fdd18b83daae11e0c4a6a27c42d41457538f7d3f57e6fd3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f7a6ff07cc7d62419aebb21cd3744f159638bc9447a23aef3bece08a266f043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7a6ff07cc7d62419aebb21cd3744f159638bc9447a23aef3bece08a266f043->enter($__internal_5f7a6ff07cc7d62419aebb21cd3744f159638bc9447a23aef3bece08a266f043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f7a6ff07cc7d62419aebb21cd3744f159638bc9447a23aef3bece08a266f043->leave($__internal_5f7a6ff07cc7d62419aebb21cd3744f159638bc9447a23aef3bece08a266f043_prof);

        
        $__internal_e3a77ce6ab82703fdd18b83daae11e0c4a6a27c42d41457538f7d3f57e6fd3de->leave($__internal_e3a77ce6ab82703fdd18b83daae11e0c4a6a27c42d41457538f7d3f57e6fd3de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38de68040190dd3846a92419ab773277b701c039fc2dd56c76ca826b5b79e409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38de68040190dd3846a92419ab773277b701c039fc2dd56c76ca826b5b79e409->enter($__internal_38de68040190dd3846a92419ab773277b701c039fc2dd56c76ca826b5b79e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7a1449567def713c327153cd89f490d424fbbacb753bfd931ab4b09d8975a8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1449567def713c327153cd89f490d424fbbacb753bfd931ab4b09d8975a8aa->enter($__internal_7a1449567def713c327153cd89f490d424fbbacb753bfd931ab4b09d8975a8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a1449567def713c327153cd89f490d424fbbacb753bfd931ab4b09d8975a8aa->leave($__internal_7a1449567def713c327153cd89f490d424fbbacb753bfd931ab4b09d8975a8aa_prof);

        
        $__internal_38de68040190dd3846a92419ab773277b701c039fc2dd56c76ca826b5b79e409->leave($__internal_38de68040190dd3846a92419ab773277b701c039fc2dd56c76ca826b5b79e409_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f02aa7f565d853f0b838edadbf3d0b8d330151b446a752eaa10aa05c76ecb7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02aa7f565d853f0b838edadbf3d0b8d330151b446a752eaa10aa05c76ecb7cc->enter($__internal_f02aa7f565d853f0b838edadbf3d0b8d330151b446a752eaa10aa05c76ecb7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9e0a3a501bdbe6f23598d5b4582e155ad4ae6df62eece82c020ece40a3cc4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e0a3a501bdbe6f23598d5b4582e155ad4ae6df62eece82c020ece40a3cc4eb->enter($__internal_a9e0a3a501bdbe6f23598d5b4582e155ad4ae6df62eece82c020ece40a3cc4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9e0a3a501bdbe6f23598d5b4582e155ad4ae6df62eece82c020ece40a3cc4eb->leave($__internal_a9e0a3a501bdbe6f23598d5b4582e155ad4ae6df62eece82c020ece40a3cc4eb_prof);

        
        $__internal_f02aa7f565d853f0b838edadbf3d0b8d330151b446a752eaa10aa05c76ecb7cc->leave($__internal_f02aa7f565d853f0b838edadbf3d0b8d330151b446a752eaa10aa05c76ecb7cc_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\CupCakes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
