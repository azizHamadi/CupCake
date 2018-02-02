<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
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
        $__internal_8fae15544b9449509a18e4f6a264c17c49a14844e99ec3591c3396efdc96320f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fae15544b9449509a18e4f6a264c17c49a14844e99ec3591c3396efdc96320f->enter($__internal_8fae15544b9449509a18e4f6a264c17c49a14844e99ec3591c3396efdc96320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_914152d39ac9dbd4b4efba4ae8b8ef5dc3346e92349477971906c66fb2f109c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914152d39ac9dbd4b4efba4ae8b8ef5dc3346e92349477971906c66fb2f109c7->enter($__internal_914152d39ac9dbd4b4efba4ae8b8ef5dc3346e92349477971906c66fb2f109c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fae15544b9449509a18e4f6a264c17c49a14844e99ec3591c3396efdc96320f->leave($__internal_8fae15544b9449509a18e4f6a264c17c49a14844e99ec3591c3396efdc96320f_prof);

        
        $__internal_914152d39ac9dbd4b4efba4ae8b8ef5dc3346e92349477971906c66fb2f109c7->leave($__internal_914152d39ac9dbd4b4efba4ae8b8ef5dc3346e92349477971906c66fb2f109c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d365e7e709292940538b845452a23f6c878934d7a56764156769d42f668fdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d365e7e709292940538b845452a23f6c878934d7a56764156769d42f668fdaf->enter($__internal_4d365e7e709292940538b845452a23f6c878934d7a56764156769d42f668fdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e11ac2d797a17e9fa990d6be70ccf7451994f2d37ba6b0bdade70ea49a84e559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11ac2d797a17e9fa990d6be70ccf7451994f2d37ba6b0bdade70ea49a84e559->enter($__internal_e11ac2d797a17e9fa990d6be70ccf7451994f2d37ba6b0bdade70ea49a84e559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e11ac2d797a17e9fa990d6be70ccf7451994f2d37ba6b0bdade70ea49a84e559->leave($__internal_e11ac2d797a17e9fa990d6be70ccf7451994f2d37ba6b0bdade70ea49a84e559_prof);

        
        $__internal_4d365e7e709292940538b845452a23f6c878934d7a56764156769d42f668fdaf->leave($__internal_4d365e7e709292940538b845452a23f6c878934d7a56764156769d42f668fdaf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48314474a4d90ea570b62353feab8af0d85c28d698afc1bb342b41a6fdac7de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48314474a4d90ea570b62353feab8af0d85c28d698afc1bb342b41a6fdac7de8->enter($__internal_48314474a4d90ea570b62353feab8af0d85c28d698afc1bb342b41a6fdac7de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96816110b2878a48dad8855a8427be4a2f5cb06521d90e9ae61124802658ef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96816110b2878a48dad8855a8427be4a2f5cb06521d90e9ae61124802658ef65->enter($__internal_96816110b2878a48dad8855a8427be4a2f5cb06521d90e9ae61124802658ef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_96816110b2878a48dad8855a8427be4a2f5cb06521d90e9ae61124802658ef65->leave($__internal_96816110b2878a48dad8855a8427be4a2f5cb06521d90e9ae61124802658ef65_prof);

        
        $__internal_48314474a4d90ea570b62353feab8af0d85c28d698afc1bb342b41a6fdac7de8->leave($__internal_48314474a4d90ea570b62353feab8af0d85c28d698afc1bb342b41a6fdac7de8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be95ce563d855876ec331ae7ec5ccca2f8cdb764d965d1ebedd08fe724194acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be95ce563d855876ec331ae7ec5ccca2f8cdb764d965d1ebedd08fe724194acd->enter($__internal_be95ce563d855876ec331ae7ec5ccca2f8cdb764d965d1ebedd08fe724194acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83d009f474e06ef627b999a36cdc57c1d43b363faa7be5b81234d7b856b9a844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d009f474e06ef627b999a36cdc57c1d43b363faa7be5b81234d7b856b9a844->enter($__internal_83d009f474e06ef627b999a36cdc57c1d43b363faa7be5b81234d7b856b9a844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_83d009f474e06ef627b999a36cdc57c1d43b363faa7be5b81234d7b856b9a844->leave($__internal_83d009f474e06ef627b999a36cdc57c1d43b363faa7be5b81234d7b856b9a844_prof);

        
        $__internal_be95ce563d855876ec331ae7ec5ccca2f8cdb764d965d1ebedd08fe724194acd->leave($__internal_be95ce563d855876ec331ae7ec5ccca2f8cdb764d965d1ebedd08fe724194acd_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\CupCakes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
