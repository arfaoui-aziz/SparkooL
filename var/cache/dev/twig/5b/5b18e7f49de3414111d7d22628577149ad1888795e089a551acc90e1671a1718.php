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

/* @Teacher/Teacher/showDetailTeacher.html.twig */
class __TwigTemplate_33860522ed6811a510c2227442fa256234720793c531db7b71c60ead1096d268 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/showDetailTeacher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/showDetailTeacher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Teacher/Teacher/showDetailTeacher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"dashboard-content-one\">
        <!-- Breadcubs Area Start Here -->

    <div class=\"breadcrumbs-area\">
        <h3>Teacher Informations</h3>
        <ul>
            <li>
                <a href=\"index.html\">Home</a>
            </li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showTeacher");
        echo "\">All Teachers</a></li>
            </li>

          <a href=\"\"><li>  Teacher Dtails ";
        // line 15
        echo twig_escape_filter($this->env, ($context["nb"] ?? $this->getContext($context, "nb")), "html", null, true);
        echo "</li></a>
        </ul>
    </div>

    <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>More Informations</h3>
                    </div>

                </div>
                <div class=\"single-info-details\">
                    <div class=\"item-img\">
                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/teacher.jpg"), "html", null, true);
        echo "\" alt=\"teacher\">
                    </div>
                    <div class=\"item-content\">
                        <div class=\"header-inline item-header\">
                            <h3 class=\"text-dark-medium font-medium\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</h3>
                            <div class=\"header-elements\">
                                <ul>
                                    <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateTeacher", ["id" => $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "id", [])]), "html", null, true);
        echo "\"><i class=\"far fa-edit\"></i></a></li>
                                    <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAbsence", ["id" => $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "id", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-calendar-check\"></i></a></li>
                                    <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showDelay", ["id" => $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "id", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-check-square\"></i></a></li>
                                    <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("PDF_amen", ["id" => $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "id", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-print\"></i></a></li>

                                </ul>
                            </div>
                        </div>

                        <div class=\"info-table table-responsive\">
                            <table class=\"table text-nowrap\">


                                <tbody>

                                <tr>
                                    <td>First Name:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>E-mail:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "email", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "gender", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "phone", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Adress:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "address", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Birth Day:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "birthDay", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Joining Date:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "joiningDate", []), "html", null, true);
        echo "</td>
                                </tr>





                                </tbody>


                            </table>

                            <!-- diplome -->
                            <hr>
                            <div class=\"item-content\">
                                <div class=\"header-inline item-header\">
                                    <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>
                                </div>
                            <table class=\"table text-nowrap\">



                                <tbody>

                                <tr>
                                    <td>Entitled:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "intitule", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Institute:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "ecole", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Speciality:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "specialite", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Level:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "niveau", []), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <td>Date obtained:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "dateObtentation", []), "html", null, true);
        echo "</td>
                                </tr>

                                </tbody>


                            </table>



                        </div>
                    </div>
                </div>
            </div>
<br><br><br>
                <div class=\"row gutters-20\">
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-one mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">

                                    <div class=\"item-icon bg-light-blue \">
                                        ";
        // line 148
        $this->displayBlock('header', $context, $blocks);
        // line 151
        echo "                                    </div>

                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Number of Absences this Year</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"";
        // line 157
        echo twig_escape_filter($this->env, ($context["nb"] ?? $this->getContext($context, "nb")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["nb"] ?? $this->getContext($context, "nb")), "html", null, true);
        echo "</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-oneT mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-light-blue\">
                                        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/teacher.png"), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Total Delay in minutes</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"";
        // line 174
        echo twig_escape_filter($this->env, ($context["nb1"] ?? $this->getContext($context, "nb1")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["nb1"] ?? $this->getContext($context, "nb1")), "html", null, true);
        echo " Minutes</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-oneP mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-light-yellow\">
                                        <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/mother.png"), "html", null, true);
        echo "\" width=\"60\">
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Parents</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"5690\">5,690</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-oneA mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-light-red\">
                                        <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/boss.png"), "html", null, true);
        echo "\" width=\"55px\" >
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Admins</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"5\"><b>5</b></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

        <!-- Student Table Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 149
        echo "                                            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/student.png"), "html", null, true);
        echo "\" >
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher/Teacher/showDetailTeacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 149,  374 => 148,  344 => 202,  324 => 185,  308 => 174,  299 => 168,  283 => 157,  275 => 151,  273 => 148,  248 => 126,  240 => 121,  233 => 117,  226 => 113,  219 => 109,  190 => 83,  183 => 79,  176 => 75,  169 => 71,  162 => 67,  155 => 63,  148 => 59,  141 => 55,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  104 => 35,  97 => 31,  78 => 15,  72 => 12,  61 => 3,  52 => 2,  30 => 1,);
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
{% block body %}
    <div class=\"dashboard-content-one\">
        <!-- Breadcubs Area Start Here -->

    <div class=\"breadcrumbs-area\">
        <h3>Teacher Informations</h3>
        <ul>
            <li>
                <a href=\"index.html\">Home</a>
            </li>
            <li><a href=\"{{ path('showTeacher') }}\">All Teachers</a></li>
            </li>

          <a href=\"\"><li>  Teacher Dtails {{ nb }}</li></a>
        </ul>
    </div>

    <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>More Informations</h3>
                    </div>

                </div>
                <div class=\"single-info-details\">
                    <div class=\"item-img\">
                        <img src=\"{{ asset('img/figure/teacher.jpg') }}\" alt=\"teacher\">
                    </div>
                    <div class=\"item-content\">
                        <div class=\"header-inline item-header\">
                            <h3 class=\"text-dark-medium font-medium\">{{ var.firstName }} {{ var.lastName }}</h3>
                            <div class=\"header-elements\">
                                <ul>
                                    <li><a href=\"{{ path('updateTeacher',{'id':var.id }) }}\"><i class=\"far fa-edit\"></i></a></li>
                                    <li><a href=\"{{ path('showAbsence',{'id':var.id }) }}\"><i class=\"fas fa-calendar-check\"></i></a></li>
                                    <li><a href=\"{{ path('showDelay',{'id':var.id }) }}\"><i class=\"fas fa-check-square\"></i></a></li>
                                    <li><a href=\"{{ path('PDF_amen',{'id':var.id }) }}\"><i class=\"fas fa-print\"></i></a></li>

                                </ul>
                            </div>
                        </div>

                        <div class=\"info-table table-responsive\">
                            <table class=\"table text-nowrap\">


                                <tbody>

                                <tr>
                                    <td>First Name:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.firstName }}</td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.lastName }}</td>
                                </tr>
                                <tr>
                                    <td>E-mail:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.email }}</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.gender }}</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.phone }}</td>
                                </tr>
                                <tr>
                                    <td>Adress:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.address }}</td>
                                </tr>
                                <tr>
                                    <td>Birth Day:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.birthDay }}</td>
                                </tr>
                                <tr>
                                    <td>Joining Date:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ var.joiningDate }}</td>
                                </tr>





                                </tbody>


                            </table>

                            <!-- diplome -->
                            <hr>
                            <div class=\"item-content\">
                                <div class=\"header-inline item-header\">
                                    <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>
                                </div>
                            <table class=\"table text-nowrap\">



                                <tbody>

                                <tr>
                                    <td>Entitled:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ dip.intitule }}</td>
                                </tr>
                                <tr>
                                    <td>Institute:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ dip.ecole }}</td>
                                </tr>
                                <tr>
                                    <td>Speciality:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ dip.specialite }}</td>
                                </tr>
                                <tr>
                                    <td>Level:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ dip.niveau }}</td>
                                </tr>

                                <tr>
                                    <td>Date obtained:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ dip.dateObtentation }}</td>
                                </tr>

                                </tbody>


                            </table>



                        </div>
                    </div>
                </div>
            </div>
<br><br><br>
                <div class=\"row gutters-20\">
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-one mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">

                                    <div class=\"item-icon bg-light-blue \">
                                        {% block header %}
                                            <img src=\"{{ asset('fonts/student.png') }}\" >
                                        {% endblock  %}
                                    </div>

                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Number of Absences this Year</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"{{ nb }}\">{{ nb }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-oneT mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-light-blue\">
                                        <img src=\"{{ asset('fonts/teacher.png') }}\">
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Total Delay in minutes</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"{{ nb1 }}\">{{ nb1 }} Minutes</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-oneP mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-light-yellow\">
                                        <img src=\"{{ asset('fonts/mother.png') }}\" width=\"60\">
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Parents</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"5690\">5,690</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-12\">
                        <div class=\"dashboard-summery-oneA mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-light-red\">
                                        <img src=\"{{ asset('fonts/boss.png') }}\" width=\"55px\" >
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"item-content\">
                                        <div class=\"item-title\">Admins</div>
                                        <div class=\"item-number\"><span class=\"counter\" data-num=\"5\"><b>5</b></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

        <!-- Student Table Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
    </div>
{% endblock body %}", "@Teacher/Teacher/showDetailTeacher.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\ShowDetailTeacher.html.twig");
    }
}
