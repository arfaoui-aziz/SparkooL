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

/* @Teacher/Teacher/showTeacher.html.twig */
class __TwigTemplate_df7bdc957a0872c252f4d7007dc54f8b317dff0f7f5bc2eaec9c90fbf0c1f596 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/showTeacher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/showTeacher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Teacher/Teacher/showTeacher.html.twig", 1);
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
        echo "
    <div class=\"dashboard-content-one\">
        <!-- Breadcubs Area Start Here -->
        <div class=\"breadcrumbs-area\">
            <h3>Teacher</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Teacher Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Teachers Data</h3>
                    </div>

                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">
                        <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by Phone ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
                            <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
                        </div>
                    </div>
                </form>
                <div class=\"table-responsive\">
                    <table class=\"table display data-table text-nowrap\">
                        <thead>
                        <tr>
                            <th>
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input checkAll\">
                                    <label class=\"form-check-label\">ID N°</label>
                                </div>
                            </th>
                            <th>Photo</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th></th>
                        </tr>
                        </thead>
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 57
            echo "                        <tbody>

                        <tr>
                            <td>
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\">


                                        <label class=\"form-check-label\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</label>

                                </div>
                            </td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "picture", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "firstName", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "lastName", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "gender", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "address", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "phone", []), "html", null, true);
            echo "</td>

                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", []), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                       aria-expanded=\"false\">
                                        <span class=\"flaticon-more-button-of-three-dots\"></span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteTeacher", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                                                    class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAbsanceTeacher", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                                                    class=\"fas fa-check-square text-dark-pastel-green\"></i> Add Absence/Delay</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showTeacherDetails", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                                                    class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </table>
                </div>
            </div>
        </div>
        <!-- Teacher Table Area End Here -->
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
        return "@Teacher/Teacher/showTeacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 96,  182 => 88,  177 => 86,  172 => 84,  161 => 76,  156 => 74,  152 => 73,  148 => 72,  144 => 71,  140 => 70,  136 => 69,  129 => 65,  119 => 57,  115 => 56,  60 => 3,  51 => 2,  29 => 1,);
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
            <h3>Teacher</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Teacher Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Teachers Data</h3>
                    </div>

                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">
                        <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by Phone ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
                            <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
                        </div>
                    </div>
                </form>
                <div class=\"table-responsive\">
                    <table class=\"table display data-table text-nowrap\">
                        <thead>
                        <tr>
                            <th>
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input checkAll\">
                                    <label class=\"form-check-label\">ID N°</label>
                                </div>
                            </th>
                            <th>Photo</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th></th>
                        </tr>
                        </thead>
                        {% for i in var %}
                        <tbody>

                        <tr>
                            <td>
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\">


                                        <label class=\"form-check-label\">{{ i.id }}</label>

                                </div>
                            </td>
                            <td>{{ i.picture }}</td>
                            <td>{{ i.firstName }}</td>
                            <td>{{ i.lastName }}</td>
                            <td>{{ i.gender }}</td>
                            <td>{{ i.address }}</td>
                            <td>{{ i.phone }}</td>

                            <td>{{ i.email }}</td>
                            <td>
                                <div class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                       aria-expanded=\"false\">
                                        <span class=\"flaticon-more-button-of-three-dots\"></span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"{{ path('deleteTeacher',{'id':i.id }) }}\"><i
                                                    class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('addAbsanceTeacher',{'id':i.id }) }}\"><i
                                                    class=\"fas fa-check-square text-dark-pastel-green\"></i> Add Absence/Delay</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('showTeacherDetails',{'id':i.id }) }}\"><i
                                                    class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        {% endfor %}
                    </table>
                </div>
            </div>
        </div>
        <!-- Teacher Table Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
    </div>

{% endblock body %}", "@Teacher/Teacher/showTeacher.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\showTeacher.html.twig");
    }
}
