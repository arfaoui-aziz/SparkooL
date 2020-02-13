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
class __TwigTemplate_7666006be5ff0abcd42970ee97af98a3075e74ac2cc530a66bd952d0dd3dfc36 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/teacher.jpg"), "html", null, true);
        echo "\" alt=\"teacher\">
                    </div>
                    <div class=\"item-content\">
                        <div class=\"header-inline item-header\">
                            <h3 class=\"text-dark-medium font-medium\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</h3>
                            <div class=\"header-elements\">
                                <ul>
                                    <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateTeacher", ["id" => $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "id", [])]), "html", null, true);
        echo "\"><i class=\"far fa-edit\"></i></a></li>
                                    <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAbsence", ["id" => $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "id", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-check-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fas fa-check-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>

                                </ul>
                            </div>
                        </div>

                        <div class=\"info-table table-responsive\">
                            <table class=\"table text-nowrap\">


                                <tbody>

                                <tr>
                                    <td>First Name:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>E-mail:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "email", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "gender", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "phone", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Adress:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "address", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Birth Day:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "birthDay", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Joining Date:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "joiningDate", []), "html", null, true);
        echo "</td>
                                </tr>





                                </tbody>


                            </table>

                            <!-- diplome -->
                            <hr>
                            <div class=\"item-content\">
                                <div class=\"header-inline item-header\">
                                    <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>                                    <div class=\"header-elements\">
                                        <ul>
                                            <li><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateDiploma", ["id" => $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "id", [])]), "html", null, true);
        echo "\"><i class=\"far fa-edit\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            <table class=\"table text-nowrap\">



                                <tbody>

                                <tr>
                                    <td>Entitled:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "intitule", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Institute:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "ecole", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Speciality:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "specialite", []), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Level:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "niveau", []), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <td>Date obtained:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "dateObtentation", []), "html", null, true);
        echo "</td>
                                </tr>

                                </tbody>

                            </table>



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
        return array (  234 => 122,  226 => 117,  219 => 113,  212 => 109,  205 => 105,  188 => 91,  167 => 73,  160 => 69,  153 => 65,  146 => 61,  139 => 57,  132 => 53,  125 => 49,  118 => 45,  99 => 29,  95 => 28,  87 => 25,  80 => 21,  60 => 3,  51 => 2,  29 => 1,);
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
                                    <li><a href=\"{{ path('showAbsence',{'id':var.id }) }}\"><i class=\"fas fa-check-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fas fa-check-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>

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
                                    <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>                                    <div class=\"header-elements\">
                                        <ul>
                                            <li><a href=\"{{ path('updateDiploma',{'id':dip.id }) }}\"><i class=\"far fa-edit\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                                        </ul>
                                    </div>
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
        </div>
        <!-- Student Table Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
    </div>
{% endblock body %}", "@Teacher/Teacher/showDetailTeacher.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\ShowDetailTeacher.html.twig");
    }
}
