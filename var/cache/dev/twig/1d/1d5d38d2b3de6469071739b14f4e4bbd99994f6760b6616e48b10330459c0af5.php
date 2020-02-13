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

/* @Teacher\Teacher\AbsentDelay\addAbsence.hmtl.twig */
class __TwigTemplate_14c27b603c9e9b0f81f6fec36ae3cc943155feda5dbb643d2c119e7b6ecde409 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\AbsentDelay\\addAbsence.hmtl.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\AbsentDelay\\addAbsence.hmtl.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Teacher\\Teacher\\AbsentDelay\\addAbsence.hmtl.twig", 1);
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
        <ul>
            <li>
                <a href=\"index.html\">Home</a>
            </li>
            <li>Add Absence</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3>Add New Teacher</h3>
                </div>
                <div class=\"dropdown\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
                       data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class=\"new-added-form\" method=\"post\">
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"row\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                    <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                        <label>Debut Hour *</label>
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDeb", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                        <label>End Hour *</label>
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                        <label>Day *</label>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "

                    </div>


                        <div class=\"col-12 form-group mg-t-8\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Save", []), 'widget');
        echo "
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "

                </div>
        </div>
        <!-- Add New Teacher Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
        </footer>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher\\Teacher\\AbsentDelay\\addAbsence.hmtl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  133 => 56,  129 => 55,  120 => 49,  113 => 45,  106 => 41,  100 => 38,  94 => 35,  60 => 3,  51 => 2,  29 => 1,);
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
        <ul>
            <li>
                <a href=\"index.html\">Home</a>
            </li>
            <li>Add Absence</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add New Teacher Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3>Add New Teacher</h3>
                </div>
                <div class=\"dropdown\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
                       data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class=\"new-added-form\" method=\"post\">
                {{ form_start(form) }}

                <div class=\"row\">
                    {{ form_row(form._token) }}
                    <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                        <label>Debut Hour *</label>
                        {{ form_widget (form.heureDeb , {'attr': {'class':'select2'}}) }}
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                        <label>End Hour *</label>
                        {{ form_widget (form.heureFin , {'attr': {'class':'select2'}}) }}
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                        <label>Day *</label>
                        {{ form_widget (form.jour , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}

                    </div>


                        <div class=\"col-12 form-group mg-t-8\">
                            {{ form_widget(form.Save) }}
                            {{ form_widget(form.Reset) }}
                        </div>
                    </div>
                    {{ form_end(form, {'render_rest': false}) }}

                </div>
        </div>
        <!-- Add New Teacher Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
        </footer>
    </div>
{% endblock body %}", "@Teacher\\Teacher\\AbsentDelay\\addAbsence.hmtl.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\AbsentDelay\\addAbsence.hmtl.twig");
    }
}
