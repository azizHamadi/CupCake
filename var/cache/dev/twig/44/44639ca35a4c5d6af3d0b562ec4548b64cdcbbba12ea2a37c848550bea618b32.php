<?php

/* CupCakesBundle:Default:index.html.twig */
class __TwigTemplate_8405249b3300f95d4dea02ae8d1b539dfdc3a43f7a51b8fe9cbd46c64499a2ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c34561f76c67293282dbaabd4eb64d270b031b304c6bfacb66a7c120327fb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c34561f76c67293282dbaabd4eb64d270b031b304c6bfacb66a7c120327fb0f->enter($__internal_9c34561f76c67293282dbaabd4eb64d270b031b304c6bfacb66a7c120327fb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CupCakesBundle:Default:index.html.twig"));

        $__internal_0d4ebbe302e4330cd990fec3235b1cfd412132ee04f6b7274e83d9e6fa227e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4ebbe302e4330cd990fec3235b1cfd412132ee04f6b7274e83d9e6fa227e2c->enter($__internal_0d4ebbe302e4330cd990fec3235b1cfd412132ee04f6b7274e83d9e6fa227e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CupCakesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9c34561f76c67293282dbaabd4eb64d270b031b304c6bfacb66a7c120327fb0f->leave($__internal_9c34561f76c67293282dbaabd4eb64d270b031b304c6bfacb66a7c120327fb0f_prof);

        
        $__internal_0d4ebbe302e4330cd990fec3235b1cfd412132ee04f6b7274e83d9e6fa227e2c->leave($__internal_0d4ebbe302e4330cd990fec3235b1cfd412132ee04f6b7274e83d9e6fa227e2c_prof);

    }

    public function getTemplateName()
    {
        return "CupCakesBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "CupCakesBundle:Default:index.html.twig", "C:\\wamp64\\www\\CupCakes\\src\\CupCakesBundle/Resources/views/Default/index.html.twig");
    }
}
