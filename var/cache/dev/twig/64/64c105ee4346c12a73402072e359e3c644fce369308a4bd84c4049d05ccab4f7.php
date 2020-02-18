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

/* @Etudiant/backrep/ForumSubjectReviews.html.twig */
class __TwigTemplate_d4d742caf11679b92e32de7de2c6a9bfc3a5572bf31a71bec0729f0732c34df0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/ForumSubjectReviews.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/ForumSubjectReviews.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/ForumSubjectReviews.html.twig", 1);
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
                            <th>Auteur</th>
                            <th>Title</th>
                            <th>Subject</th>
                            <th>Submition Date</th>
                            <th>number of responses</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 48
            echo "                            ";
            if (($this->getAttribute($context["subject"], "etat", []) == 0)) {
                // line 49
                echo "                                <tr>
                                    <td>


                                            ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "auteur", []), "html", null, true);
                echo "
                                    </td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "title", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "subject", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "dateajout", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "nbreponse", []), "html", null, true);
                echo "<</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_subjectapprove", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
                echo "\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Accept</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 73
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
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
        return "@Etudiant/backrep/ForumSubjectReviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 74,  157 => 73,  147 => 66,  136 => 58,  132 => 57,  128 => 56,  124 => 55,  119 => 53,  113 => 49,  110 => 48,  106 => 47,  60 => 3,  51 => 2,  29 => 1,);
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
                            <th>Auteur</th>
                            <th>Title</th>
                            <th>Subject</th>
                            <th>Submition Date</th>
                            <th>number of responses</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>

                        {% for subject in subjects  %}
                            {% if subject.etat == 0 %}
                                <tr>
                                    <td>


                                            {{ subject.auteur }}
                                    </td>
                                    <td>{{ subject.title }}</td>
                                    <td>{{ subject.subject }}</td>
                                    <td>{{ subject.dateajout }}</td>
                                    <td>{{ subject.nbreponse }}<</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"{{ path('etudaint_subjectapprove', {'id': subject.id}) }}\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Accept</a>
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
{% endblock %}", "@Etudiant/backrep/ForumSubjectReviews.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\ForumSubjectReviews.html.twig");
    }
}
