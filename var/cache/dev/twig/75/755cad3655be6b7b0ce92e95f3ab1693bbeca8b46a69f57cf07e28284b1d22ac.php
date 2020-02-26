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

/* @Etudiant/backrep/reclamationManagement.html.twig */
class __TwigTemplate_3fe8ebf8822af1333ee1762149141ac0bb8ddd60e1da593bff38429a5e021145 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/reclamationManagement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/reclamationManagement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/reclamationManagement.html.twig", 1);
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
            <h3>Reclamations</h3>

        </div>
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Reclamations</h3>
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
                                    <label class=\"form-check-label\">ID</label>
                                </div>
                            </th>

                            <th>reclamation</th>
                            <th>etudiant_id</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 51
            echo "                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            ";
            // line 55
            if ((twig_length_filter($this->env, $this->getAttribute($context["reclamation"], "id", [])) == 1)) {
                // line 56
                echo "                                                <label class=\"form-check-label\">#000";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 58
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["reclamation"], "id", [])) == 2)) {
                // line 59
                echo "                                                <label class=\"form-check-label\">#00";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 61
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["reclamation"], "id", [])) == 3)) {
                // line 62
                echo "                                                <label class=\"form-check-label\">#0";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 64
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["reclamation"], "id", [])) == 4)) {
                // line 65
                echo "                                                <label class=\"form-check-label\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 67
            echo "                                        </div>
                                    </td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "reclamation", []), "html", null, true);
            echo "</td>
                                    ";
            // line 70
            if (($this->getAttribute($context["reclamation"], "anonymously", []) == 0)) {
                // line 71
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "etudiant", []), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 73
            echo "                                    ";
            if (($this->getAttribute($context["reclamation"], "anonymously", []) == 1)) {
                // line 74
                echo "                                        <td>anonymous</td>
                                    ";
            }
            // line 76
            echo "                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_deletereclamation", ["id" => $this->getAttribute($context["reclamation"], "id", [])]), "html", null, true);
            echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Done</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                        </tbody>
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
        return "@Etudiant/backrep/reclamationManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 90,  186 => 83,  177 => 76,  173 => 74,  170 => 73,  164 => 71,  162 => 70,  158 => 69,  154 => 67,  148 => 65,  145 => 64,  139 => 62,  136 => 61,  130 => 59,  127 => 58,  121 => 56,  119 => 55,  113 => 51,  109 => 50,  60 => 3,  51 => 2,  29 => 1,);
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
            <h3>Reclamations</h3>

        </div>
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Reclamations</h3>
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
                                    <label class=\"form-check-label\">ID</label>
                                </div>
                            </th>

                            <th>reclamation</th>
                            <th>etudiant_id</th>
                        </tr>
                        </thead>
                        <tbody>

                        {% for reclamation in reclamations  %}
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            {% if (reclamation.id | length) == 1 %}
                                                <label class=\"form-check-label\">#000{{ reclamation.id }}</label>
                                            {% endif %}
                                            {% if (reclamation.id | length) == 2 %}
                                                <label class=\"form-check-label\">#00{{ reclamation.id }}</label>
                                            {% endif %}
                                            {% if (reclamation.id | length) == 3 %}
                                                <label class=\"form-check-label\">#0{{ reclamation.id }}</label>
                                            {% endif %}
                                            {% if (reclamation.id | length) == 4 %}
                                                <label class=\"form-check-label\">#{{ reclamation.id }}</label>
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td>{{ reclamation.reclamation }}</td>
                                    {% if reclamation.anonymously == 0 %}
                                    <td>{{ reclamation.etudiant }}</td>
                                    {% endif %}
                                    {% if reclamation.anonymously == 1 %}
                                        <td>anonymous</td>
                                    {% endif %}
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"{{ path('etudaint_deletereclamation', {'id': reclamation.id}) }}\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Done</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Etudiant/backrep/reclamationManagement.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\reclamationManagement.html.twig");
    }
}
