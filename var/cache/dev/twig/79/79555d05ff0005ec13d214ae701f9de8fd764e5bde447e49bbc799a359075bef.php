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
        $__internal_0bf3c58568c87daf5332b1f958122c7e360350bfbc5e1517833345b5e888cc93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf3c58568c87daf5332b1f958122c7e360350bfbc5e1517833345b5e888cc93->enter($__internal_0bf3c58568c87daf5332b1f958122c7e360350bfbc5e1517833345b5e888cc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_16095e77c10802ded85b033b73080b387df0e3b567f7ec2bb03749606dab7b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16095e77c10802ded85b033b73080b387df0e3b567f7ec2bb03749606dab7b5b->enter($__internal_16095e77c10802ded85b033b73080b387df0e3b567f7ec2bb03749606dab7b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf3c58568c87daf5332b1f958122c7e360350bfbc5e1517833345b5e888cc93->leave($__internal_0bf3c58568c87daf5332b1f958122c7e360350bfbc5e1517833345b5e888cc93_prof);

        
        $__internal_16095e77c10802ded85b033b73080b387df0e3b567f7ec2bb03749606dab7b5b->leave($__internal_16095e77c10802ded85b033b73080b387df0e3b567f7ec2bb03749606dab7b5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c83af6b0aac0d54f8895b4a3ceed6ecee508bb4e1000118ad0fb3d8104b76ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c83af6b0aac0d54f8895b4a3ceed6ecee508bb4e1000118ad0fb3d8104b76ed->enter($__internal_0c83af6b0aac0d54f8895b4a3ceed6ecee508bb4e1000118ad0fb3d8104b76ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_80a70047e0e67646df439fe202b3326d28414f3ddd2290e58f5f2b9cc05c1cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a70047e0e67646df439fe202b3326d28414f3ddd2290e58f5f2b9cc05c1cf3->enter($__internal_80a70047e0e67646df439fe202b3326d28414f3ddd2290e58f5f2b9cc05c1cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_80a70047e0e67646df439fe202b3326d28414f3ddd2290e58f5f2b9cc05c1cf3->leave($__internal_80a70047e0e67646df439fe202b3326d28414f3ddd2290e58f5f2b9cc05c1cf3_prof);

        
        $__internal_0c83af6b0aac0d54f8895b4a3ceed6ecee508bb4e1000118ad0fb3d8104b76ed->leave($__internal_0c83af6b0aac0d54f8895b4a3ceed6ecee508bb4e1000118ad0fb3d8104b76ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f16b41229e33c89ff45c85444ae0d5702ba267519bb1b6af6d45df8021d0957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16b41229e33c89ff45c85444ae0d5702ba267519bb1b6af6d45df8021d0957c->enter($__internal_f16b41229e33c89ff45c85444ae0d5702ba267519bb1b6af6d45df8021d0957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80b7885c24a0c20800ac570eee1a36c23687f6d3dd140b1fde8f4191557b3010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b7885c24a0c20800ac570eee1a36c23687f6d3dd140b1fde8f4191557b3010->enter($__internal_80b7885c24a0c20800ac570eee1a36c23687f6d3dd140b1fde8f4191557b3010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_80b7885c24a0c20800ac570eee1a36c23687f6d3dd140b1fde8f4191557b3010->leave($__internal_80b7885c24a0c20800ac570eee1a36c23687f6d3dd140b1fde8f4191557b3010_prof);

        
        $__internal_f16b41229e33c89ff45c85444ae0d5702ba267519bb1b6af6d45df8021d0957c->leave($__internal_f16b41229e33c89ff45c85444ae0d5702ba267519bb1b6af6d45df8021d0957c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5395f28fed0736db1106c50abf82ffe3ddcaccc821345051dfe7ec9533f46244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5395f28fed0736db1106c50abf82ffe3ddcaccc821345051dfe7ec9533f46244->enter($__internal_5395f28fed0736db1106c50abf82ffe3ddcaccc821345051dfe7ec9533f46244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d61a8f046e2969eb60716f8d97f04c6160042de8197741a50c627270a39b4298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61a8f046e2969eb60716f8d97f04c6160042de8197741a50c627270a39b4298->enter($__internal_d61a8f046e2969eb60716f8d97f04c6160042de8197741a50c627270a39b4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d61a8f046e2969eb60716f8d97f04c6160042de8197741a50c627270a39b4298->leave($__internal_d61a8f046e2969eb60716f8d97f04c6160042de8197741a50c627270a39b4298_prof);

        
        $__internal_5395f28fed0736db1106c50abf82ffe3ddcaccc821345051dfe7ec9533f46244->leave($__internal_5395f28fed0736db1106c50abf82ffe3ddcaccc821345051dfe7ec9533f46244_prof);

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
