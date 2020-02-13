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

/* @Etudiant/backrep/aprovinglist.html.twig */
class __TwigTemplate_2fca4573770e567392adb280a1f9f5bae6ef417393be6c63c8b13014ad7fbdfa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/aprovinglist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/aprovinglist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/aprovinglist.html.twig", 1);
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
            <h3>Students</h3>

        </div>
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3>All Students Data</h3>
                </div>

            </div>
            <form class=\"mg-b-20\">
                <div class=\"row gutters-8\">
                    <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by Roll ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by Class ...\" class=\"form-control\">
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
                                <label class=\"form-check-label\">Roll</label>
                            </div>
                        </th>

                        <th>Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Address</th>
                        <th>Date Of Birth</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Approve</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 57
            if (($this->getAttribute($context["student"], "enabled", []) == 0)) {
                // line 58
                echo "                    <tr>
                        <td>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\">
                                ";
                // line 62
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 1)) {
                    // line 63
                    echo "                                <label class=\"form-check-label\">#000";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                    ";
                }
                // line 65
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 2)) {
                    // line 66
                    echo "                                    <label class=\"form-check-label\">#00";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                ";
                }
                // line 68
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 3)) {
                    // line 69
                    echo "                                    <label class=\"form-check-label\">#0";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                ";
                }
                // line 71
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 4)) {
                    // line 72
                    echo "                                    <label class=\"form-check-label\">#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                ";
                }
                // line 74
                echo "                            </div>
                        </td>
                        <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstName", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "gender", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "academicyear", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "address", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "birthDay", []), "html", null, true);
                echo "<</td>
                        <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "phone", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "email", []), "html", null, true);
                echo "</td>
                        <td>
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   aria-expanded=\"false\">
                                    <span class=\"flaticon-more-button-of-three-dots\"></span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_delete", ["id" => $this->getAttribute($context["student"], "id", [])]), "html", null, true);
                echo "\"><i
                                                class=\"fas fa-times text-orange-red\"></i>Dismiss</a>
                                    <a class=\"dropdown-item\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_approving", ["id" => $this->getAttribute($context["student"], "id", [])]), "html", null, true);
                echo "\"><i
                                                class=\"fas fa-cogs text-dark-pastel-green\"></i>Approve</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                        ";
            }
            // line 99
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/backrep/aprovinglist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 100,  216 => 99,  206 => 92,  201 => 90,  190 => 82,  186 => 81,  182 => 80,  178 => 79,  174 => 78,  170 => 77,  166 => 76,  162 => 74,  156 => 72,  153 => 71,  147 => 69,  144 => 68,  138 => 66,  135 => 65,  129 => 63,  127 => 62,  121 => 58,  119 => 57,  115 => 56,  60 => 3,  51 => 2,  29 => 1,);
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
            <h3>Students</h3>

        </div>
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3>All Students Data</h3>
                </div>

            </div>
            <form class=\"mg-b-20\">
                <div class=\"row gutters-8\">
                    <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by Roll ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by Class ...\" class=\"form-control\">
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
                                <label class=\"form-check-label\">Roll</label>
                            </div>
                        </th>

                        <th>Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Address</th>
                        <th>Date Of Birth</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Approve</th>
                    </tr>
                    </thead>
                    <tbody>

                    {% for student in students  %}
{% if student.enabled == 0 %}
                    <tr>
                        <td>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\">
                                {% if (student.id | length) == 1 %}
                                <label class=\"form-check-label\">#000{{ student.id }}</label>
                                    {% endif %}
                                {% if (student.id | length) == 2 %}
                                    <label class=\"form-check-label\">#00{{ student.id }}</label>
                                {% endif %}
                                {% if (student.id | length) == 3 %}
                                    <label class=\"form-check-label\">#0{{ student.id }}</label>
                                {% endif %}
                                {% if (student.id | length) == 4 %}
                                    <label class=\"form-check-label\">#{{ student.id }}</label>
                                {% endif %}
                            </div>
                        </td>
                        <td>{{ student.firstName }}</td>
                        <td>{{ student.gender }}</td>
                        <td>{{ student.academicyear }}</td>
                        <td>{{ student.address }}</td>
                        <td>{{ student.birthDay }}<</td>
                        <td>{{ student.phone }}</td>
                        <td>{{ student.email }}</td>
                        <td>
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   aria-expanded=\"false\">
                                    <span class=\"flaticon-more-button-of-three-dots\"></span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"{{ path('etudiant_delete', {'id': student.id}) }}\"><i
                                                class=\"fas fa-times text-orange-red\"></i>Dismiss</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('etudiant_approving', {'id': student.id}) }}\"><i
                                                class=\"fas fa-cogs text-dark-pastel-green\"></i>Approve</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
{% endblock %}", "@Etudiant/backrep/aprovinglist.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\aprovinglist.html.twig");
    }
}
