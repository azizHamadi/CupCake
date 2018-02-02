<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
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
        $__internal_3f938e7538813030ccc6b3a30481282574c24e7f46702a001cbe36784450dcb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f938e7538813030ccc6b3a30481282574c24e7f46702a001cbe36784450dcb3->enter($__internal_3f938e7538813030ccc6b3a30481282574c24e7f46702a001cbe36784450dcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4faddd9b8b1893be16633ac6d6e993da97b28a3a299400a7ca9ed82d38d3b20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faddd9b8b1893be16633ac6d6e993da97b28a3a299400a7ca9ed82d38d3b20e->enter($__internal_4faddd9b8b1893be16633ac6d6e993da97b28a3a299400a7ca9ed82d38d3b20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3f938e7538813030ccc6b3a30481282574c24e7f46702a001cbe36784450dcb3->leave($__internal_3f938e7538813030ccc6b3a30481282574c24e7f46702a001cbe36784450dcb3_prof);

        
        $__internal_4faddd9b8b1893be16633ac6d6e993da97b28a3a299400a7ca9ed82d38d3b20e->leave($__internal_4faddd9b8b1893be16633ac6d6e993da97b28a3a299400a7ca9ed82d38d3b20e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95710648355bd3691e24d3d7741e3a48307809c73be9f048726e7677fbde2769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95710648355bd3691e24d3d7741e3a48307809c73be9f048726e7677fbde2769->enter($__internal_95710648355bd3691e24d3d7741e3a48307809c73be9f048726e7677fbde2769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b081fdff6451b473f98bd132a9948b9fafc624bb9fed41143b0af1ad591c4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b081fdff6451b473f98bd132a9948b9fafc624bb9fed41143b0af1ad591c4ab->enter($__internal_2b081fdff6451b473f98bd132a9948b9fafc624bb9fed41143b0af1ad591c4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2b081fdff6451b473f98bd132a9948b9fafc624bb9fed41143b0af1ad591c4ab->leave($__internal_2b081fdff6451b473f98bd132a9948b9fafc624bb9fed41143b0af1ad591c4ab_prof);

        
        $__internal_95710648355bd3691e24d3d7741e3a48307809c73be9f048726e7677fbde2769->leave($__internal_95710648355bd3691e24d3d7741e3a48307809c73be9f048726e7677fbde2769_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b6a066fba9a7a299249a86086c720de3905b8a5c9cbd12c736ef20aa960c49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6a066fba9a7a299249a86086c720de3905b8a5c9cbd12c736ef20aa960c49b->enter($__internal_4b6a066fba9a7a299249a86086c720de3905b8a5c9cbd12c736ef20aa960c49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f011e854115fd09440481ae9b574cd4fe4017d0888c45064664c10a079821de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f011e854115fd09440481ae9b574cd4fe4017d0888c45064664c10a079821de->enter($__internal_5f011e854115fd09440481ae9b574cd4fe4017d0888c45064664c10a079821de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5f011e854115fd09440481ae9b574cd4fe4017d0888c45064664c10a079821de->leave($__internal_5f011e854115fd09440481ae9b574cd4fe4017d0888c45064664c10a079821de_prof);

        
        $__internal_4b6a066fba9a7a299249a86086c720de3905b8a5c9cbd12c736ef20aa960c49b->leave($__internal_4b6a066fba9a7a299249a86086c720de3905b8a5c9cbd12c736ef20aa960c49b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f409844a3540f81c82e33b4a33c5580df2c96646fdb5e677ee928cebcef73fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f409844a3540f81c82e33b4a33c5580df2c96646fdb5e677ee928cebcef73fac->enter($__internal_f409844a3540f81c82e33b4a33c5580df2c96646fdb5e677ee928cebcef73fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_243c58a9a04a487dc95d56f2327c7d5e89b8e363a9a41d0654870eed785395f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243c58a9a04a487dc95d56f2327c7d5e89b8e363a9a41d0654870eed785395f8->enter($__internal_243c58a9a04a487dc95d56f2327c7d5e89b8e363a9a41d0654870eed785395f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_243c58a9a04a487dc95d56f2327c7d5e89b8e363a9a41d0654870eed785395f8->leave($__internal_243c58a9a04a487dc95d56f2327c7d5e89b8e363a9a41d0654870eed785395f8_prof);

        
        $__internal_f409844a3540f81c82e33b4a33c5580df2c96646fdb5e677ee928cebcef73fac->leave($__internal_f409844a3540f81c82e33b4a33c5580df2c96646fdb5e677ee928cebcef73fac_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\CupCakes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
