<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Admin\Account\UserDetails.html.twig */
class __TwigTemplate_1993dd3d5f012d6fc6134bbbc32ae4c115c45708f8eae22beb8c89ff8428cbfa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\UserDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\UserDetails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Account\\UserDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo " \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 7
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css")), "html", null, true);
        echo "\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 9
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css")), "html", null, true);
        echo " \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo " \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 13
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css")), "html", null, true);
        echo " \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 15
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css")), "html", null, true);
        echo " \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 17
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css")), "html", null, true);
        echo " \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 19
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css")), "html", null, true);
        echo " \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css")), "html", null, true);
        echo " \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css")), "html", null, true);
        echo "\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 25
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css")), "html", null, true);
        echo " \" >
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "<div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>Users</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Details Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">


            </div>
            <div class=\"single-info-details\">
                <div class=\"item-img\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/parents.jpg"), "html", null, true);
        echo "\" alt=\"student\">
                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">Steven Jones</h3>
                        <div class=\"header-elements\">
                            <ul>
                                <li><a href=\"#\"><i class=\"far fa-edit\" ></i></a></li>
                                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_DisplayPDF");
        echo "\"><i class=\"fas fa-file-pdf\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>ID:</td>
                                <td class=\"font-medium text-dark-medium\">#15059</td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class=\"font-medium text-dark-medium\">Male</td>
                            </tr>
                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">Business</td>
                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td class=\"font-medium text-dark-medium\">House #10, Road #6, Australia</td>
                            </tr>
                            <tr>
                                <td>Religion:</td>
                                <td class=\"font-medium text-dark-medium\">Islam</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class=\"font-medium text-dark-medium\">+ 88 98568888418</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class=\"font-medium text-dark-medium\">jessiarose@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class=\"footer-wrap-layout1\">
        <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
    </footer>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 111
        echo "    <!-- Plugins js -->
    <script src=\" ";
        // line 112
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js")), "html", null, true);
        echo " \" ></script>
    <!-- Popper js -->
    <script src=\" ";
        // line 114
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js")), "html", null, true);
        echo " \"></script>
    <!-- Bootstrap js -->
    <script src=\" ";
        // line 116
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js")), "html", null, true);
        echo " \" ></script>
    <!-- Counterup Js -->
    <script src=\" ";
        // line 118
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js")), "html", null, true);
        echo " \" ></script>
    <!-- Moment Js -->
    <script  src=\" ";
        // line 120
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js")), "html", null, true);
        echo " \" ></script>
    <!-- Scroll Up Js -->
    <script src=\" ";
        // line 122
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js")), "html", null, true);
        echo " \" ></script>
    <!-- Waypoints Js -->
    <script  src=\" ";
        // line 124
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js")), "html", null, true);
        echo " \" ></script>
    <!-- Select 2 Js -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js")), "html", null, true);
        echo "\"></script>
    <!-- Date Picker Js -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js")), "html", null, true);
        echo "\"></script>
    <!-- Full Calender Js -->
    <script src=\" ";
        // line 130
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js")), "html", null, true);
        echo " \"></script>
    <!-- Chart Js -->
    <script  src=\" ";
        // line 132
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js")), "html", null, true);
        echo " \" ></script>
    <!-- Custom Js -->
    <script  src=\" ";
        // line 134
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js")), "html", null, true);
        echo " \" ></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Account\\UserDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 134,  295 => 132,  290 => 130,  285 => 128,  280 => 126,  275 => 124,  270 => 122,  265 => 120,  260 => 118,  255 => 116,  250 => 114,  245 => 112,  242 => 111,  233 => 110,  164 => 51,  153 => 43,  136 => 28,  127 => 27,  115 => 25,  110 => 23,  105 => 21,  100 => 19,  95 => 17,  90 => 15,  85 => 13,  80 => 11,  75 => 9,  70 => 7,  65 => 5,  62 => 4,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block css %}
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" {{ asset('img/favicon.png') }} \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/normalize.css') }}\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" {{ base_dir ~ asset('css/main.css') }} \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/bootstrap.min.css') }} \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/all.min.css') }} \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" {{ base_dir ~ asset('fonts/flaticon.css') }} \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/fullcalendar.min.css') }} \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/animate.min.css') }} \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"{{ base_dir ~ asset('css/select2.min.css') }} \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"{{  base_dir ~ asset('css/datepicker.min.css') }}\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('style.css') }} \" >
{% endblock %}
{% block body %}
<div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>Users</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Details Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">


            </div>
            <div class=\"single-info-details\">
                <div class=\"item-img\">
                    <img src=\"{{asset('img/figure/parents.jpg')}}\" alt=\"student\">
                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">Steven Jones</h3>
                        <div class=\"header-elements\">
                            <ul>
                                <li><a href=\"#\"><i class=\"far fa-edit\" ></i></a></li>
                                <li><a href=\"{{ path('admin_DisplayPDF') }}\"><i class=\"fas fa-file-pdf\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>ID:</td>
                                <td class=\"font-medium text-dark-medium\">#15059</td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class=\"font-medium text-dark-medium\">Male</td>
                            </tr>
                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">Business</td>
                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td class=\"font-medium text-dark-medium\">House #10, Road #6, Australia</td>
                            </tr>
                            <tr>
                                <td>Religion:</td>
                                <td class=\"font-medium text-dark-medium\">Islam</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class=\"font-medium text-dark-medium\">+ 88 98568888418</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class=\"font-medium text-dark-medium\">jessiarose@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class=\"footer-wrap-layout1\">
        <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
    </footer>
</div>
</div>
{% endblock %}
{% block js %}
    <!-- Plugins js -->
    <script src=\" {{ base_dir ~ asset('js/plugins.js') }} \" ></script>
    <!-- Popper js -->
    <script src=\" {{ base_dir ~ asset('js/popper.min.js') }} \"></script>
    <!-- Bootstrap js -->
    <script src=\" {{ base_dir ~ asset('js/bootstrap.min.js') }} \" ></script>
    <!-- Counterup Js -->
    <script src=\" {{ base_dir ~ asset('js/jquery.counterup.min.js') }} \" ></script>
    <!-- Moment Js -->
    <script  src=\" {{ base_dir ~ asset('js/moment.min.js') }} \" ></script>
    <!-- Scroll Up Js -->
    <script src=\" {{ base_dir ~ asset('js/jquery.scrollUp.min.js') }} \" ></script>
    <!-- Waypoints Js -->
    <script  src=\" {{ base_dir ~ asset('js/jquery.waypoints.min.js') }} \" ></script>
    <!-- Select 2 Js -->
    <script src=\"{{ base_dir ~ asset('js/select2.min.js') }}\"></script>
    <!-- Date Picker Js -->
    <script src=\"{{ base_dir ~ asset('js/datepicker.min.js') }}\"></script>
    <!-- Full Calender Js -->
    <script src=\" {{ base_dir ~ asset('js/fullcalendar.min.js') }} \"></script>
    <!-- Chart Js -->
    <script  src=\" {{ base_dir ~ asset('js/Chart.min.js') }} \" ></script>
    <!-- Custom Js -->
    <script  src=\" {{ base_dir ~ asset('js/main.js') }} \" ></script>
{% endblock %}", "@Admin\\Account\\UserDetails.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Account\\UserDetails.html.twig");
    }
}
