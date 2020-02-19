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

/* @Admin\Subject\UpdateSubject.html.twig */
class __TwigTemplate_8f8a616b96c5ed41af29fb07f6050958396d18fd132e2ecedd217328c47815ef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'update' => [$this, 'block_update'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Subject\\UpdateSubject.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Subject\\UpdateSubject.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Subject\\UpdateSubject.html.twig", 1);
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
        <h3>All Classes</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Class Routine Area Start Here -->
    <div class=\"row\">
        <div class=\"col-4-xxxl col-12\">
            <div class=\"card height-auto\">
                <div class=\"card-body\">
                    <div class=\"heading-layout1\">
                        <div class=\"item-title\">
                            <h3>Add Class </h3>
                        </div>
                        <br><br>
                    </div>
                    ";
        // line 21
        $this->displayBlock('update', $context, $blocks);
        // line 53
        echo "                </div>
            </div>
        </div>
        <div class=\"col-8-xxxl col-12\">
            <div class=\"card height-auto\">
                <div class=\"card-body\">

                    <div class=\"table-responsive\">
                        <table class=\"table display data-table text-nowrap\">
                            <thead>
                            <tr>
                                <th>
                                    <div class=\"form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input checkAll\">
                                        <label class=\"form-check-label\">Subject ID</label>
                                    </div>
                                </th>
                                <th>Subject Name</th>
                                <th>Subject Coefficient</th>
                                <th>Classes</th>


                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allSubjects"] ?? $this->getContext($context, "allSubjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["as"]) {
            // line 80
            echo "                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "subjectId", []), "html", null, true);
            echo "</label>
                                        </div>
                                    </td>
                                    <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "subjectName", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "coefficient", []), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["as"], "classes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["asb"]) {
                // line 91
                echo "                                            ";
                echo twig_escape_filter($this->env, $context["asb"], "html", null, true);
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                                    </td>


                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_DeleteSubject", ["subjectId" => $this->getAttribute($context["as"], "subjectId", [])]), "html", null, true);
            echo "\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete</a>
                                                <a class=\"dropdown-item\"  href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_UpdateSubject", ["subjectId" => $this->getAttribute($context["as"], "subjectId", [])]), "html", null, true);
            echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Update</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['as'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_update($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "update"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "update"));

        // line 22
        echo "                        <form class=\"new-added-form\" method=\"post\" >
                            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Subject Name</label>
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subjectName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Coefficient</label>
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coefficient", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                </div>

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Classe *</label>
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classes", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "

                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                                </div>

                            </div>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Update", []), 'widget');
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "
                            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                        </form>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Subject\\UpdateSubject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 50,  253 => 49,  249 => 48,  238 => 40,  229 => 34,  221 => 29,  213 => 24,  209 => 23,  206 => 22,  197 => 21,  180 => 113,  166 => 105,  161 => 103,  149 => 93,  140 => 91,  136 => 90,  131 => 88,  127 => 87,  121 => 84,  115 => 80,  111 => 79,  83 => 53,  81 => 21,  61 => 3,  52 => 2,  30 => 1,);
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
        <h3>All Classes</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Class Routine Area Start Here -->
    <div class=\"row\">
        <div class=\"col-4-xxxl col-12\">
            <div class=\"card height-auto\">
                <div class=\"card-body\">
                    <div class=\"heading-layout1\">
                        <div class=\"item-title\">
                            <h3>Add Class </h3>
                        </div>
                        <br><br>
                    </div>
                    {% block update %}
                        <form class=\"new-added-form\" method=\"post\" >
                            {{ form_start(form) }}
                            {{ form_row(form._token) }}
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Subject Name</label>
                                    {{ form_widget (form.subjectName , {'attr': {'class':'form-control'}}) }}
                                </div>

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Coefficient</label>
                                    {{ form_widget (form.coefficient, {'attr': {'class':'form-control'}}) }}

                                </div>

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Classe *</label>
                                    {{ form_widget (form.classes , {'attr': {'class':'select2'}}) }}

                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                                </div>

                            </div>
                            {{ form_widget(form.Update) }}
                            {{ form_widget(form.Reset) }}
                            {{ form_end(form, {'render_rest': false}) }}
                        </form>
                    {% endblock %}
                </div>
            </div>
        </div>
        <div class=\"col-8-xxxl col-12\">
            <div class=\"card height-auto\">
                <div class=\"card-body\">

                    <div class=\"table-responsive\">
                        <table class=\"table display data-table text-nowrap\">
                            <thead>
                            <tr>
                                <th>
                                    <div class=\"form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input checkAll\">
                                        <label class=\"form-check-label\">Subject ID</label>
                                    </div>
                                </th>
                                <th>Subject Name</th>
                                <th>Subject Coefficient</th>
                                <th>Classes</th>


                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for as in allSubjects %}
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#{{as.subjectId}}</label>
                                        </div>
                                    </td>
                                    <td>{{ as.subjectName }}</td>
                                    <td>{{ as.coefficient }}</td>
                                    <td>
                                        {% for asb in as.classes  %}
                                            {{ asb }}
                                        {% endfor %}
                                    </td>


                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"{{ path('admin_DeleteSubject',{'subjectId':as.subjectId}) }}\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete</a>
                                                <a class=\"dropdown-item\"  href=\"{{ path('admin_UpdateSubject',{'subjectId':as.subjectId}) }}\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Update</a>

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
    </div>
{% endblock %}", "@Admin\\Subject\\UpdateSubject.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Subject\\UpdateSubject.html.twig");
    }
}
