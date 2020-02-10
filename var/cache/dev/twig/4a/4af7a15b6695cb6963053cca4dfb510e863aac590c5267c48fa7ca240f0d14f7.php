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

/* @Admin\Subject\AddSubject.html.twig */
class __TwigTemplate_93b539aaab13a6c6602497968b223e7ce975a574d2b8e48cade1e4a5b9cc6caa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Subject\\AddSubject.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Subject\\AddSubject.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Subject\\AddSubject.html.twig", 1);
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
                                        <label class=\"form-check-label\">Class ID</label>
                                    </div>
                                </th>
                                <th>Class Name</th>


                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                          <!--for -->
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#121</label>
                                        </div>
                                    </td>
                                    <td>151</td>


                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"#\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete</a>
                                                <a class=\"dropdown-item\" href=\"#\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Update</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                           <!--end for -->
                            </tbody>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget');
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
        return "@Admin\\Subject\\AddSubject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 50,  208 => 49,  204 => 48,  193 => 40,  184 => 34,  176 => 29,  168 => 24,  164 => 23,  161 => 22,  152 => 21,  83 => 53,  81 => 21,  61 => 3,  52 => 2,  30 => 1,);
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
                            {{ form_widget(form.Add) }}
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
                                        <label class=\"form-check-label\">Class ID</label>
                                    </div>
                                </th>
                                <th>Class Name</th>


                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                          <!--for -->
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#121</label>
                                        </div>
                                    </td>
                                    <td>151</td>


                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"#\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete</a>
                                                <a class=\"dropdown-item\" href=\"#\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Update</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                           <!--end for -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Admin\\Subject\\AddSubject.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Subject\\AddSubject.html.twig");
    }
}
