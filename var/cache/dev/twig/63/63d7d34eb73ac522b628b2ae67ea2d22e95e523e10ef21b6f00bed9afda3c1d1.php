<?php

/* CupCakesBundle:Patisseuri:layout.html.twig */
class __TwigTemplate_ec31608d7a8201f489c207ee571adbf7741f46c11c90688e093238ed16ddc0b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'titre' => array($this, 'block_titre'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'containt' => array($this, 'block_containt'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fd7aa052fa99a28bb17fa235a84d0f1f8c9b3e6ad29124e2d829ea7a2ca74c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd7aa052fa99a28bb17fa235a84d0f1f8c9b3e6ad29124e2d829ea7a2ca74c4->enter($__internal_3fd7aa052fa99a28bb17fa235a84d0f1f8c9b3e6ad29124e2d829ea7a2ca74c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CupCakesBundle:Patisseuri:layout.html.twig"));

        $__internal_f96764a8275f7470756504bfd7c2511c35544f0d79674133ea79964ded6773d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96764a8275f7470756504bfd7c2511c35544f0d79674133ea79964ded6773d2->enter($__internal_f96764a8275f7470756504bfd7c2511c35544f0d79674133ea79964ded6773d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CupCakesBundle:Patisseuri:layout.html.twig"));

        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "</head>
<body>
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 160
        echo "</body>
    <!--   Core JS Files   -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-checkbox-radio.js"), "html", null, true);
        echo "\"></script>

    <!--  Charts Plugin -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chartist.min.js"), "html", null, true);
        echo "\"></script>

    <!--  Notifications Plugin    -->
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-dashboard.js"), "html", null, true);
        echo "\"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){

            demo.initChartist();

            \$.notify({
                icon: 'ti-gift',
                message: \"Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project.\"

            },{
                type: 'success',
                timer: 4000
            });

        });
    </script>
";
        // line 197
        $this->displayBlock('javascript', $context, $blocks);
        // line 199
        echo "</html>";
        
        $__internal_3fd7aa052fa99a28bb17fa235a84d0f1f8c9b3e6ad29124e2d829ea7a2ca74c4->leave($__internal_3fd7aa052fa99a28bb17fa235a84d0f1f8c9b3e6ad29124e2d829ea7a2ca74c4_prof);

        
        $__internal_f96764a8275f7470756504bfd7c2511c35544f0d79674133ea79964ded6773d2->leave($__internal_f96764a8275f7470756504bfd7c2511c35544f0d79674133ea79964ded6773d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_598dda07468b1bdac61c44472729d035e7d68caae885ea2714bd362e60e81d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598dda07468b1bdac61c44472729d035e7d68caae885ea2714bd362e60e81d2a->enter($__internal_598dda07468b1bdac61c44472729d035e7d68caae885ea2714bd362e60e81d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57d4332414982cb4a909fb0aa6274cc46a558f31a35bb3b0c8048c70fd1712a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d4332414982cb4a909fb0aa6274cc46a558f31a35bb3b0c8048c70fd1712a8->enter($__internal_57d4332414982cb4a909fb0aa6274cc46a558f31a35bb3b0c8048c70fd1712a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

        <title>CupCakes";
        // line 9
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name=\"viewport\" content=\"width=device-width\" />

            <!-- Bootstrap core CSS     -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

            <!-- Animation library for notifications   -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

            <!--  Paper Dashboard core CSS    -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/paper-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


            <!--  CSS for Demo Purpose, don't include it in your project     -->
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


            <!--  Fonts and icons     -->
            <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 32
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 34
        echo "    ";
        
        $__internal_57d4332414982cb4a909fb0aa6274cc46a558f31a35bb3b0c8048c70fd1712a8->leave($__internal_57d4332414982cb4a909fb0aa6274cc46a558f31a35bb3b0c8048c70fd1712a8_prof);

        
        $__internal_598dda07468b1bdac61c44472729d035e7d68caae885ea2714bd362e60e81d2a->leave($__internal_598dda07468b1bdac61c44472729d035e7d68caae885ea2714bd362e60e81d2a_prof);

    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        $__internal_1dafc1df0b81cd7ca59ef1a12ff7b5d7059a38968c619b0602d0cb54afcb8ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dafc1df0b81cd7ca59ef1a12ff7b5d7059a38968c619b0602d0cb54afcb8ae5->enter($__internal_1dafc1df0b81cd7ca59ef1a12ff7b5d7059a38968c619b0602d0cb54afcb8ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_b724aa4c578a20f1bf668702757f2d4a867cdc463237687f58f80481c2a32de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b724aa4c578a20f1bf668702757f2d4a867cdc463237687f58f80481c2a32de0->enter($__internal_b724aa4c578a20f1bf668702757f2d4a867cdc463237687f58f80481c2a32de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_b724aa4c578a20f1bf668702757f2d4a867cdc463237687f58f80481c2a32de0->leave($__internal_b724aa4c578a20f1bf668702757f2d4a867cdc463237687f58f80481c2a32de0_prof);

        
        $__internal_1dafc1df0b81cd7ca59ef1a12ff7b5d7059a38968c619b0602d0cb54afcb8ae5->leave($__internal_1dafc1df0b81cd7ca59ef1a12ff7b5d7059a38968c619b0602d0cb54afcb8ae5_prof);

    }

    // line 32
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_adfd4db0a07f9d4630ec2fc4831fc71770a94c678292e1da3cd38eb253a458a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfd4db0a07f9d4630ec2fc4831fc71770a94c678292e1da3cd38eb253a458a6->enter($__internal_adfd4db0a07f9d4630ec2fc4831fc71770a94c678292e1da3cd38eb253a458a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_1bd56e146722397d70a52420761c527585ae2a90590e10531ac59e754467333b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd56e146722397d70a52420761c527585ae2a90590e10531ac59e754467333b->enter($__internal_1bd56e146722397d70a52420761c527585ae2a90590e10531ac59e754467333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 33
        echo "        ";
        
        $__internal_1bd56e146722397d70a52420761c527585ae2a90590e10531ac59e754467333b->leave($__internal_1bd56e146722397d70a52420761c527585ae2a90590e10531ac59e754467333b_prof);

        
        $__internal_adfd4db0a07f9d4630ec2fc4831fc71770a94c678292e1da3cd38eb253a458a6->leave($__internal_adfd4db0a07f9d4630ec2fc4831fc71770a94c678292e1da3cd38eb253a458a6_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_1936b67cacb116f12b4de0ae7714481497beb008c8775f67849832b5b5320011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1936b67cacb116f12b4de0ae7714481497beb008c8775f67849832b5b5320011->enter($__internal_1936b67cacb116f12b4de0ae7714481497beb008c8775f67849832b5b5320011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f454d544a57533acb91f0214d02133b024aa24b2437077f33b4ce1296a62ef1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f454d544a57533acb91f0214d02133b024aa24b2437077f33b4ce1296a62ef1b->enter($__internal_f454d544a57533acb91f0214d02133b024aa24b2437077f33b4ce1296a62ef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "    <div class=\"wrapper\">
        <div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">

            <!--
                Tip 1: you can change the color of the sidebar's background using: data-background-color=\"white | black\"
                Tip 2: you can change the color of the active button using the data-active-color=\"primary | info | success | warning | danger\"
            -->

            <div class=\"sidebar-wrapper\">
                <div class=\"logo\">
                    <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                        Creative Tim
                    </a>
                </div>

                <ul class=\"nav\">
                    <li class=\"active\">
                        <a href=\"dashboard.html\">
                            <i class=\"ti-panel\"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"user.html\">
                            <i class=\"ti-user\"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"ti-view-list-alt\"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"typography.html\">
                            <i class=\"ti-text\"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"icons.html\">
                            <i class=\"ti-pencil-alt2\"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"maps.html\">
                            <i class=\"ti-map\"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"notifications.html\">
                            <i class=\"ti-bell\"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class=\"active-pro\">
                        <a href=\"upgrade.html\">
                            <i class=\"ti-export\"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"main-panel\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar bar1\"></span>
                            <span class=\"icon-bar bar2\"></span>
                            <span class=\"icon-bar bar3\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
                    </div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"ti-panel\"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"ti-bell\"></i>
                                    <p class=\"notification\">5</p>
                                    <p>Notifications</p>
                                    <b class=\"caret\"></b>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Notification 1</a></li>
                                    <li><a href=\"#\">Notification 2</a></li>
                                    <li><a href=\"#\">Notification 3</a></li>
                                    <li><a href=\"#\">Notification 4</a></li>
                                    <li><a href=\"#\">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"ti-settings\"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


           ";
        // line 154
        $this->displayBlock('containt', $context, $blocks);
        // line 155
        echo "
        </div>
    </div>

";
        
        $__internal_f454d544a57533acb91f0214d02133b024aa24b2437077f33b4ce1296a62ef1b->leave($__internal_f454d544a57533acb91f0214d02133b024aa24b2437077f33b4ce1296a62ef1b_prof);

        
        $__internal_1936b67cacb116f12b4de0ae7714481497beb008c8775f67849832b5b5320011->leave($__internal_1936b67cacb116f12b4de0ae7714481497beb008c8775f67849832b5b5320011_prof);

    }

    // line 154
    public function block_containt($context, array $blocks = array())
    {
        $__internal_89f046a33dafba0363673633d1210caa7b11505561bbfde403e7f77acbba345c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f046a33dafba0363673633d1210caa7b11505561bbfde403e7f77acbba345c->enter($__internal_89f046a33dafba0363673633d1210caa7b11505561bbfde403e7f77acbba345c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containt"));

        $__internal_ddfd4afea5cb5abf9db315cea99f572759e816fd97b481b214e2a7b93b62ac68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfd4afea5cb5abf9db315cea99f572759e816fd97b481b214e2a7b93b62ac68->enter($__internal_ddfd4afea5cb5abf9db315cea99f572759e816fd97b481b214e2a7b93b62ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containt"));

        
        $__internal_ddfd4afea5cb5abf9db315cea99f572759e816fd97b481b214e2a7b93b62ac68->leave($__internal_ddfd4afea5cb5abf9db315cea99f572759e816fd97b481b214e2a7b93b62ac68_prof);

        
        $__internal_89f046a33dafba0363673633d1210caa7b11505561bbfde403e7f77acbba345c->leave($__internal_89f046a33dafba0363673633d1210caa7b11505561bbfde403e7f77acbba345c_prof);

    }

    // line 197
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ac0faeeafd4b8568ef566f52e6edfc2ddf07a8bb9cf5546e5eb471e069921f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0faeeafd4b8568ef566f52e6edfc2ddf07a8bb9cf5546e5eb471e069921f6b->enter($__internal_ac0faeeafd4b8568ef566f52e6edfc2ddf07a8bb9cf5546e5eb471e069921f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ec86e7425731e8449efe45f58fe4a822eada7f03d23c14006a6f02412231c600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec86e7425731e8449efe45f58fe4a822eada7f03d23c14006a6f02412231c600->enter($__internal_ec86e7425731e8449efe45f58fe4a822eada7f03d23c14006a6f02412231c600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_ec86e7425731e8449efe45f58fe4a822eada7f03d23c14006a6f02412231c600->leave($__internal_ec86e7425731e8449efe45f58fe4a822eada7f03d23c14006a6f02412231c600_prof);

        
        $__internal_ac0faeeafd4b8568ef566f52e6edfc2ddf07a8bb9cf5546e5eb471e069921f6b->leave($__internal_ac0faeeafd4b8568ef566f52e6edfc2ddf07a8bb9cf5546e5eb471e069921f6b_prof);

    }

    public function getTemplateName()
    {
        return "CupCakesBundle:Patisseuri:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 197,  369 => 154,  355 => 155,  353 => 154,  235 => 38,  226 => 37,  216 => 33,  207 => 32,  190 => 9,  180 => 34,  178 => 32,  174 => 31,  165 => 25,  158 => 21,  152 => 18,  146 => 15,  137 => 9,  131 => 6,  127 => 5,  124 => 4,  115 => 3,  105 => 199,  103 => 197,  82 => 179,  76 => 176,  69 => 172,  63 => 169,  57 => 166,  51 => 163,  47 => 162,  43 => 160,  41 => 37,  37 => 35,  35 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/apple-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ asset('img/favicon.png') }}\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

        <title>CupCakes{% block titre %}{% endblock %}</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name=\"viewport\" content=\"width=device-width\" />

            <!-- Bootstrap core CSS     -->
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

            <!-- Animation library for notifications   -->
            <link href=\"{{ asset('css/animate.min.css') }}\" rel=\"stylesheet\"/>

            <!--  Paper Dashboard core CSS    -->
            <link href=\"{{ asset('css/paper-dashboard.css') }}\" rel=\"stylesheet\"/>


            <!--  CSS for Demo Purpose, don't include it in your project     -->
            <link href=\"{{ asset('css/demo.css') }}\" rel=\"stylesheet\" />


            <!--  Fonts and icons     -->
            <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/themify-icons.css') }}\" rel=\"stylesheet\">
        {% block stylesheet %}
        {% endblock %}
    {% endblock %}
</head>
<body>
{% block body %}
    <div class=\"wrapper\">
        <div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">

            <!--
                Tip 1: you can change the color of the sidebar's background using: data-background-color=\"white | black\"
                Tip 2: you can change the color of the active button using the data-active-color=\"primary | info | success | warning | danger\"
            -->

            <div class=\"sidebar-wrapper\">
                <div class=\"logo\">
                    <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                        Creative Tim
                    </a>
                </div>

                <ul class=\"nav\">
                    <li class=\"active\">
                        <a href=\"dashboard.html\">
                            <i class=\"ti-panel\"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"user.html\">
                            <i class=\"ti-user\"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"ti-view-list-alt\"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"typography.html\">
                            <i class=\"ti-text\"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"icons.html\">
                            <i class=\"ti-pencil-alt2\"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"maps.html\">
                            <i class=\"ti-map\"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"notifications.html\">
                            <i class=\"ti-bell\"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class=\"active-pro\">
                        <a href=\"upgrade.html\">
                            <i class=\"ti-export\"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"main-panel\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar bar1\"></span>
                            <span class=\"icon-bar bar2\"></span>
                            <span class=\"icon-bar bar3\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
                    </div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"ti-panel\"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"ti-bell\"></i>
                                    <p class=\"notification\">5</p>
                                    <p>Notifications</p>
                                    <b class=\"caret\"></b>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Notification 1</a></li>
                                    <li><a href=\"#\">Notification 2</a></li>
                                    <li><a href=\"#\">Notification 3</a></li>
                                    <li><a href=\"#\">Notification 4</a></li>
                                    <li><a href=\"#\">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"ti-settings\"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


           {% block containt %}{% endblock %}

        </div>
    </div>

{% endblock %}
</body>
    <!--   Core JS Files   -->
    <script src=\"{{ asset('js/jquery-1.10.2.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src=\"{{ asset('js/bootstrap-checkbox-radio.js') }}\"></script>

    <!--  Charts Plugin -->
    <script src=\"{{ asset('js/chartist.min.js') }}\"></script>

    <!--  Notifications Plugin    -->
    <script src=\"{{ asset('js/bootstrap-notify.js') }}\"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src=\"{{ asset('js/paper-dashboard.js') }}\"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src=\"{{ asset('js/demo.js') }}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){

            demo.initChartist();

            \$.notify({
                icon: 'ti-gift',
                message: \"Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project.\"

            },{
                type: 'success',
                timer: 4000
            });

        });
    </script>
{% block javascript %}
{% endblock %}
</html>", "CupCakesBundle:Patisseuri:layout.html.twig", "C:\\wamp64\\www\\CupCakes\\src\\CupCakesBundle/Resources/views/Patisseuri/layout.html.twig");
    }
}
