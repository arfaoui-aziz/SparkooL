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

/* @Teacher/Teacher/AbsentDelay/showAbsent.html.twig */
class __TwigTemplate_5846030aad9526c8ad61af5717550d67555bbc349d2a7eda1b99130e9696db46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/AbsentDelay/showAbsent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/AbsentDelay/showAbsent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Teacher/Teacher/AbsentDelay/showAbsent.html.twig", 1);
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
            <h3>Teacher Absences</h3>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showTeacher");
        echo "\">All Teachers</a></li>
                </li>

                <li><a href=\"\">  Teacher Dtails</a>
                </li>
                <li>Teacher Absences</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Teacher Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3><a style=\"color:black\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showTeacherDetails", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", []), "html", null, true);
        echo "'s Absences</a></h3>
                    </div>

                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">
                        <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by date ...\" class=\"form-control\">
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Day</th>
                            <th>Debut Hour</th>
                            <th>End Hour</th>


                            <th></th>
                        </tr>
                        </thead>
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 57
            echo "                            <tbody>

                            <tr>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "jour", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heureDeb", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heureFin", []), "html", null, true);
            echo "</td>



                                <td>

                                            <a class=\"dropdown-item\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteAbsence", ["id" => $this->getAttribute($context["i"], "id", []), "id2" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
            echo "\"><i
                                                        class=\"fas fa-times text-orange-red\"></i></a>


                                </td>
                            </tr>
                            </tbody>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        return "@Teacher/Teacher/AbsentDelay/showAbsent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 78,  159 => 70,  150 => 64,  146 => 63,  142 => 62,  138 => 61,  134 => 60,  129 => 57,  125 => 56,  88 => 26,  71 => 12,  60 => 3,  51 => 2,  29 => 1,);
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
            <h3>Teacher Absences</h3>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li><a href=\"{{ path('showTeacher') }}\">All Teachers</a></li>
                </li>

                <li><a href=\"\">  Teacher Dtails</a>
                </li>
                <li>Teacher Absences</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Teacher Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3><a style=\"color:black\" href=\"{{ path('showTeacherDetails',{'id':user.id}) }}\" >{{ user.firstName }} {{user.lastName}}'s Absences</a></h3>
                    </div>

                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">
                        <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                            <input type=\"text\" placeholder=\"Search by date ...\" class=\"form-control\">
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Day</th>
                            <th>Debut Hour</th>
                            <th>End Hour</th>


                            <th></th>
                        </tr>
                        </thead>
                        {% for i in var %}
                            <tbody>

                            <tr>
                                <td>{{ user.firstName }}</td>
                                <td>{{ user.lastName }}</td>
                                <td>{{ i.jour }}</td>
                                <td>{{ i.heureDeb }}</td>
                                <td>{{ i.heureFin }}</td>



                                <td>

                                            <a class=\"dropdown-item\" href=\"{{ path('deleteAbsence',{'id':i.id , 'id2':user.id}) }}\"><i
                                                        class=\"fas fa-times text-orange-red\"></i></a>


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

{% endblock body %}", "@Teacher/Teacher/AbsentDelay/showAbsent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\AbsentDelay\\showAbsent.html.twig");
    }
}
