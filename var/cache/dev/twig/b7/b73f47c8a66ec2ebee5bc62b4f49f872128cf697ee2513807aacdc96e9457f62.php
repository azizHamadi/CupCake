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
        $__internal_ed55f69edc14bfa32fc8773f1028d4aef5952eceb301086ca53e01733bd370e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed55f69edc14bfa32fc8773f1028d4aef5952eceb301086ca53e01733bd370e1->enter($__internal_ed55f69edc14bfa32fc8773f1028d4aef5952eceb301086ca53e01733bd370e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fd04072461319156ec15ed2c1e91b6e9570cd51d7b886e737bc6b8635ffbef93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd04072461319156ec15ed2c1e91b6e9570cd51d7b886e737bc6b8635ffbef93->enter($__internal_fd04072461319156ec15ed2c1e91b6e9570cd51d7b886e737bc6b8635ffbef93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed55f69edc14bfa32fc8773f1028d4aef5952eceb301086ca53e01733bd370e1->leave($__internal_ed55f69edc14bfa32fc8773f1028d4aef5952eceb301086ca53e01733bd370e1_prof);

        
        $__internal_fd04072461319156ec15ed2c1e91b6e9570cd51d7b886e737bc6b8635ffbef93->leave($__internal_fd04072461319156ec15ed2c1e91b6e9570cd51d7b886e737bc6b8635ffbef93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee6b2ab16144799ad5edc6fc8595e2b924813b6fca871e6e8c70d2c957dbc056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6b2ab16144799ad5edc6fc8595e2b924813b6fca871e6e8c70d2c957dbc056->enter($__internal_ee6b2ab16144799ad5edc6fc8595e2b924813b6fca871e6e8c70d2c957dbc056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f4a54d342257285ba4e6eaebfa55813101feb96018b151536112fe34610d47de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a54d342257285ba4e6eaebfa55813101feb96018b151536112fe34610d47de->enter($__internal_f4a54d342257285ba4e6eaebfa55813101feb96018b151536112fe34610d47de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f4a54d342257285ba4e6eaebfa55813101feb96018b151536112fe34610d47de->leave($__internal_f4a54d342257285ba4e6eaebfa55813101feb96018b151536112fe34610d47de_prof);

        
        $__internal_ee6b2ab16144799ad5edc6fc8595e2b924813b6fca871e6e8c70d2c957dbc056->leave($__internal_ee6b2ab16144799ad5edc6fc8595e2b924813b6fca871e6e8c70d2c957dbc056_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0c8b8a63fde7a8d2c33d361e3ca81114e200f6f9890bd2b3d2b9bc2503b3419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c8b8a63fde7a8d2c33d361e3ca81114e200f6f9890bd2b3d2b9bc2503b3419->enter($__internal_a0c8b8a63fde7a8d2c33d361e3ca81114e200f6f9890bd2b3d2b9bc2503b3419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a6f1069ebb5beff11b406849cd8f977ba0f336eb5528cc47e9877b30e832e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6f1069ebb5beff11b406849cd8f977ba0f336eb5528cc47e9877b30e832e29->enter($__internal_4a6f1069ebb5beff11b406849cd8f977ba0f336eb5528cc47e9877b30e832e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a6f1069ebb5beff11b406849cd8f977ba0f336eb5528cc47e9877b30e832e29->leave($__internal_4a6f1069ebb5beff11b406849cd8f977ba0f336eb5528cc47e9877b30e832e29_prof);

        
        $__internal_a0c8b8a63fde7a8d2c33d361e3ca81114e200f6f9890bd2b3d2b9bc2503b3419->leave($__internal_a0c8b8a63fde7a8d2c33d361e3ca81114e200f6f9890bd2b3d2b9bc2503b3419_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e46874bf0b711dd54d87e323711b4faa3da2ade27935256dc51f9854eecba471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46874bf0b711dd54d87e323711b4faa3da2ade27935256dc51f9854eecba471->enter($__internal_e46874bf0b711dd54d87e323711b4faa3da2ade27935256dc51f9854eecba471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd3cafec10d5a0d001f6e01897dfe5d7d743bf7d57d0cb21d5b7277d4c6fcc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3cafec10d5a0d001f6e01897dfe5d7d743bf7d57d0cb21d5b7277d4c6fcc5e->enter($__internal_bd3cafec10d5a0d001f6e01897dfe5d7d743bf7d57d0cb21d5b7277d4c6fcc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd3cafec10d5a0d001f6e01897dfe5d7d743bf7d57d0cb21d5b7277d4c6fcc5e->leave($__internal_bd3cafec10d5a0d001f6e01897dfe5d7d743bf7d57d0cb21d5b7277d4c6fcc5e_prof);

        
        $__internal_e46874bf0b711dd54d87e323711b4faa3da2ade27935256dc51f9854eecba471->leave($__internal_e46874bf0b711dd54d87e323711b4faa3da2ade27935256dc51f9854eecba471_prof);

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
