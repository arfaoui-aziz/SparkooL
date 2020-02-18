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

/* @Teacher\Teacher\AbsentDelay\absence.html.twig */
class __TwigTemplate_39bc24767f74d8d0c2276d39ef309ce744f911dad134042511b5ff9bb260d586 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\AbsentDelay\\absence.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\AbsentDelay\\absence.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Teacher\\Teacher\\AbsentDelay\\absence.html.twig", 1);
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
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Absences</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- All Subjects Area Start Here -->
        <div class=\"row\">
            <div class=\"col-4-xxxl col-12\">
                <div class=\"card height-auto\">
                    <div class=\"card-body\">
                        <div class=\"heading-layout1\">
                            <div class=\"item-title\">
                                <h3>Add Absences</h3>
                            </div>

                        </div>
                        <form class=\"new-added-form\">
                            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"row\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                                <div class=\"col-12-xxxl col-lg-6 col-12 form-group\">
                                    <label>Debut Hour *</label>
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDeb", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                                </div>
                                <div class=\"col-12-xxxl col-lg-6 col-12 form-group\">
                                    <label>End Hour *</label>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "

                                </div>
                                <div class=\"col-12-xxxl col-lg-6 col-12 form-group\">
                                    <label>Day *</label>
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "

                                </div>

                                <div class=\"col-12 form-group mg-t-8\">
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Save", []), 'widget');
        echo "
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "
                                </div>
                            </div>
                            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-8-xxxl col-12\">
                <div class=\"card height-auto\">
                    <div class=\"card-body\">
                        <div class=\"heading-layout1\">
                            <div class=\"item-title\">
                                <h3>All Subjects</h3>
                            </div>
                            <div class=\"dropdown\">
                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                                   aria-expanded=\"false\">...</a>

                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-times text-orange-red\"></i>Close</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class=\"mg-b-20\">
                            <div class=\"row gutters-8\">
                                <div class=\"col-lg-4 col-12 form-group\">
                                    <input type=\"text\" placeholder=\"Search by Exam ...\" class=\"form-control\">
                                </div>
                                <div class=\"col-lg-3 col-12 form-group\">
                                    <input type=\"text\" placeholder=\"Search by Subject ...\" class=\"form-control\">
                                </div>
                                <div class=\"col-lg-3 col-12 form-group\">
                                    <input type=\"text\" placeholder=\"dd/mm/yyyy\" class=\"form-control\">
                                </div>
                                <div class=\"col-lg-2 col-12 form-group\">
                                    <button type=\"submit\"
                                            class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Day</th>
                                    <th>Debut Hour</th>
                                    <th>End Hour</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "
                                <tr>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "jour", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heureDeb", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heureFin", []), "html", null, true);
            echo "</td>



                                    <td>

                                        <a class=\"dropdown-item\" href=\"";
            // line 124
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
        // line 132
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Subjects Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a
                        href=\"#\">PsdBosS</a></div>
        </footer>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher\\Teacher\\AbsentDelay\\absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 132,  227 => 124,  218 => 118,  214 => 117,  210 => 116,  206 => 115,  202 => 114,  198 => 112,  194 => 111,  129 => 49,  123 => 46,  119 => 45,  111 => 40,  103 => 35,  96 => 31,  90 => 28,  85 => 26,  60 => 3,  51 => 2,  29 => 1,);
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
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Absences</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- All Subjects Area Start Here -->
        <div class=\"row\">
            <div class=\"col-4-xxxl col-12\">
                <div class=\"card height-auto\">
                    <div class=\"card-body\">
                        <div class=\"heading-layout1\">
                            <div class=\"item-title\">
                                <h3>Add Absences</h3>
                            </div>

                        </div>
                        <form class=\"new-added-form\">
                            {{ form_start(form) }}
                            <div class=\"row\">
                                {{ form_row(form._token) }}
                                <div class=\"col-12-xxxl col-lg-6 col-12 form-group\">
                                    <label>Debut Hour *</label>
                                    {{ form_widget (form.heureDeb , {'attr': {'class':'select2'}}) }}
                                </div>
                                <div class=\"col-12-xxxl col-lg-6 col-12 form-group\">
                                    <label>End Hour *</label>
                                    {{ form_widget (form.heureFin , {'attr': {'class':'select2'}}) }}

                                </div>
                                <div class=\"col-12-xxxl col-lg-6 col-12 form-group\">
                                    <label>Day *</label>
                                    {{ form_widget (form.jour , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}

                                </div>

                                <div class=\"col-12 form-group mg-t-8\">
                                    {{ form_widget(form.Save) }}
                                    {{ form_widget(form.Reset) }}
                                </div>
                            </div>
                            {{ form_end(form, {'render_rest': false}) }}
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-8-xxxl col-12\">
                <div class=\"card height-auto\">
                    <div class=\"card-body\">
                        <div class=\"heading-layout1\">
                            <div class=\"item-title\">
                                <h3>All Subjects</h3>
                            </div>
                            <div class=\"dropdown\">
                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                                   aria-expanded=\"false\">...</a>

                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-times text-orange-red\"></i>Close</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class=\"mg-b-20\">
                            <div class=\"row gutters-8\">
                                <div class=\"col-lg-4 col-12 form-group\">
                                    <input type=\"text\" placeholder=\"Search by Exam ...\" class=\"form-control\">
                                </div>
                                <div class=\"col-lg-3 col-12 form-group\">
                                    <input type=\"text\" placeholder=\"Search by Subject ...\" class=\"form-control\">
                                </div>
                                <div class=\"col-lg-3 col-12 form-group\">
                                    <input type=\"text\" placeholder=\"dd/mm/yyyy\" class=\"form-control\">
                                </div>
                                <div class=\"col-lg-2 col-12 form-group\">
                                    <button type=\"submit\"
                                            class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Day</th>
                                    <th>Debut Hour</th>
                                    <th>End Hour</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for i in var %}

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
            </div>
        </div>
        <!-- All Subjects Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a
                        href=\"#\">PsdBosS</a></div>
        </footer>
    </div>
{% endblock %}", "@Teacher\\Teacher\\AbsentDelay\\absence.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\AbsentDelay\\absence.html.twig");
    }
}
