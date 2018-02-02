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
        $__internal_4ef2de3559f6abc1a86a5966792a150fcef0e7bd85ff992c3d9cf85cc8559568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef2de3559f6abc1a86a5966792a150fcef0e7bd85ff992c3d9cf85cc8559568->enter($__internal_4ef2de3559f6abc1a86a5966792a150fcef0e7bd85ff992c3d9cf85cc8559568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CupCakesBundle:Patisseuri:layout.html.twig"));

        $__internal_7d5e27b8cc51bebbe75730844cfc4bdeb556438ea208385e2b00fd09da1ffb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5e27b8cc51bebbe75730844cfc4bdeb556438ea208385e2b00fd09da1ffb57->enter($__internal_7d5e27b8cc51bebbe75730844cfc4bdeb556438ea208385e2b00fd09da1ffb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CupCakesBundle:Patisseuri:layout.html.twig"));

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
        
        $__internal_4ef2de3559f6abc1a86a5966792a150fcef0e7bd85ff992c3d9cf85cc8559568->leave($__internal_4ef2de3559f6abc1a86a5966792a150fcef0e7bd85ff992c3d9cf85cc8559568_prof);

        
        $__internal_7d5e27b8cc51bebbe75730844cfc4bdeb556438ea208385e2b00fd09da1ffb57->leave($__internal_7d5e27b8cc51bebbe75730844cfc4bdeb556438ea208385e2b00fd09da1ffb57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5c47f6d08553330d6154c578df9cc9124077de42d5852eae4d79921f3587ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c47f6d08553330d6154c578df9cc9124077de42d5852eae4d79921f3587ad9->enter($__internal_c5c47f6d08553330d6154c578df9cc9124077de42d5852eae4d79921f3587ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67c564115fd1a5da686fa1302cabd0b844903c04d1c5aa0d8ef16b722814793c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c564115fd1a5da686fa1302cabd0b844903c04d1c5aa0d8ef16b722814793c->enter($__internal_67c564115fd1a5da686fa1302cabd0b844903c04d1c5aa0d8ef16b722814793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_67c564115fd1a5da686fa1302cabd0b844903c04d1c5aa0d8ef16b722814793c->leave($__internal_67c564115fd1a5da686fa1302cabd0b844903c04d1c5aa0d8ef16b722814793c_prof);

        
        $__internal_c5c47f6d08553330d6154c578df9cc9124077de42d5852eae4d79921f3587ad9->leave($__internal_c5c47f6d08553330d6154c578df9cc9124077de42d5852eae4d79921f3587ad9_prof);

    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        $__internal_cf21128932b988c9bf78a7a24851ac1ff97fc963835386e831d2d99b154a04d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf21128932b988c9bf78a7a24851ac1ff97fc963835386e831d2d99b154a04d1->enter($__internal_cf21128932b988c9bf78a7a24851ac1ff97fc963835386e831d2d99b154a04d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_67e41ad30987670398dae5b8344e226034e75e064731294bc49c785ec0dadc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e41ad30987670398dae5b8344e226034e75e064731294bc49c785ec0dadc8e->enter($__internal_67e41ad30987670398dae5b8344e226034e75e064731294bc49c785ec0dadc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_67e41ad30987670398dae5b8344e226034e75e064731294bc49c785ec0dadc8e->leave($__internal_67e41ad30987670398dae5b8344e226034e75e064731294bc49c785ec0dadc8e_prof);

        
        $__internal_cf21128932b988c9bf78a7a24851ac1ff97fc963835386e831d2d99b154a04d1->leave($__internal_cf21128932b988c9bf78a7a24851ac1ff97fc963835386e831d2d99b154a04d1_prof);

    }

    // line 32
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0e4407392fb636d55cce525e4c9ef33eb3603fdfef92ef0ad72da1fc6a62b9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4407392fb636d55cce525e4c9ef33eb3603fdfef92ef0ad72da1fc6a62b9ae->enter($__internal_0e4407392fb636d55cce525e4c9ef33eb3603fdfef92ef0ad72da1fc6a62b9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3f3e649d9a90e8e82645cb9883eb57d53472bedf11318052e10b5cf14b6579ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3e649d9a90e8e82645cb9883eb57d53472bedf11318052e10b5cf14b6579ba->enter($__internal_3f3e649d9a90e8e82645cb9883eb57d53472bedf11318052e10b5cf14b6579ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 33
        echo "        ";
        
        $__internal_3f3e649d9a90e8e82645cb9883eb57d53472bedf11318052e10b5cf14b6579ba->leave($__internal_3f3e649d9a90e8e82645cb9883eb57d53472bedf11318052e10b5cf14b6579ba_prof);

        
        $__internal_0e4407392fb636d55cce525e4c9ef33eb3603fdfef92ef0ad72da1fc6a62b9ae->leave($__internal_0e4407392fb636d55cce525e4c9ef33eb3603fdfef92ef0ad72da1fc6a62b9ae_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_55d8175be1df4c3773003290ba5de15cd21ad97ae974142455fc9349ebb2ec0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d8175be1df4c3773003290ba5de15cd21ad97ae974142455fc9349ebb2ec0f->enter($__internal_55d8175be1df4c3773003290ba5de15cd21ad97ae974142455fc9349ebb2ec0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e24b87c4c07bb84e9daac451a894df3205ebb0391c9462597c728364d0a8f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e24b87c4c07bb84e9daac451a894df3205ebb0391c9462597c728364d0a8f29->enter($__internal_5e24b87c4c07bb84e9daac451a894df3205ebb0391c9462597c728364d0a8f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e24b87c4c07bb84e9daac451a894df3205ebb0391c9462597c728364d0a8f29->leave($__internal_5e24b87c4c07bb84e9daac451a894df3205ebb0391c9462597c728364d0a8f29_prof);

        
        $__internal_55d8175be1df4c3773003290ba5de15cd21ad97ae974142455fc9349ebb2ec0f->leave($__internal_55d8175be1df4c3773003290ba5de15cd21ad97ae974142455fc9349ebb2ec0f_prof);

    }

    // line 154
    public function block_containt($context, array $blocks = array())
    {
        $__internal_090f546b40bca98c2eadb16500cc6ad48702393ac572bd4abc9016efa4905a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090f546b40bca98c2eadb16500cc6ad48702393ac572bd4abc9016efa4905a2f->enter($__internal_090f546b40bca98c2eadb16500cc6ad48702393ac572bd4abc9016efa4905a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containt"));

        $__internal_1235adb7398e3500ab00ed3eb875b97a8dafa89faccace54b528931c80f4fc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1235adb7398e3500ab00ed3eb875b97a8dafa89faccace54b528931c80f4fc73->enter($__internal_1235adb7398e3500ab00ed3eb875b97a8dafa89faccace54b528931c80f4fc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containt"));

        
        $__internal_1235adb7398e3500ab00ed3eb875b97a8dafa89faccace54b528931c80f4fc73->leave($__internal_1235adb7398e3500ab00ed3eb875b97a8dafa89faccace54b528931c80f4fc73_prof);

        
        $__internal_090f546b40bca98c2eadb16500cc6ad48702393ac572bd4abc9016efa4905a2f->leave($__internal_090f546b40bca98c2eadb16500cc6ad48702393ac572bd4abc9016efa4905a2f_prof);

    }

    // line 197
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d61fe4ae7252453172db83ab8682dd7ca51a006933caa4aa6cf0c7ead74bd5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61fe4ae7252453172db83ab8682dd7ca51a006933caa4aa6cf0c7ead74bd5fd->enter($__internal_d61fe4ae7252453172db83ab8682dd7ca51a006933caa4aa6cf0c7ead74bd5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_718a550a5d48fb4fdbca8d8b6c2753cea29142e31aada56e3c0f85f493a5253b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718a550a5d48fb4fdbca8d8b6c2753cea29142e31aada56e3c0f85f493a5253b->enter($__internal_718a550a5d48fb4fdbca8d8b6c2753cea29142e31aada56e3c0f85f493a5253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_718a550a5d48fb4fdbca8d8b6c2753cea29142e31aada56e3c0f85f493a5253b->leave($__internal_718a550a5d48fb4fdbca8d8b6c2753cea29142e31aada56e3c0f85f493a5253b_prof);

        
        $__internal_d61fe4ae7252453172db83ab8682dd7ca51a006933caa4aa6cf0c7ead74bd5fd->leave($__internal_d61fe4ae7252453172db83ab8682dd7ca51a006933caa4aa6cf0c7ead74bd5fd_prof);

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
