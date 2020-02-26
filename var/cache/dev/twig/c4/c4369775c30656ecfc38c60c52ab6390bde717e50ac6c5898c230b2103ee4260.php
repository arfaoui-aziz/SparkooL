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
class __TwigTemplate_e13a1d6d106e17e35e40b49ea9a7a3cf39ec84972a745072c40d5e1b2e7a6069 extends \Twig\Template
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
            <h3>Form Approving List</h3>

        </div>
        <div class=\"card height-auto\">
            <div class=\"card-body\">

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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 27
            echo "                            ";
            if (($this->getAttribute($context["subject"], "etat", []) == 0)) {
                // line 28
                echo "                                <tr>
                                    <td>


                                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "auteur", []), "html", null, true);
                echo "
                                    </td>
                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "title", []), "html", null, true);
                echo "</td>
                                    <td >";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "subject", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "dateajout", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 37
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
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_subjectapprove", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
                echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Accept</a>
                                                <a class=\"dropdown-item\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_deletesubjectback", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
                echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Dismiss</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 54
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return array (  147 => 55,  141 => 54,  131 => 47,  126 => 45,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  98 => 32,  92 => 28,  89 => 27,  85 => 26,  60 => 3,  51 => 2,  29 => 1,);
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
            <h3>Form Approving List</h3>

        </div>
        <div class=\"card height-auto\">
            <div class=\"card-body\">

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
                                    <td >{{ subject.subject }}</td>
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
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Accept</a>
                                                <a class=\"dropdown-item\" href=\"{{ path('etudaint_deletesubjectback', {'id': subject.id}) }}\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Dismiss</a>
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
