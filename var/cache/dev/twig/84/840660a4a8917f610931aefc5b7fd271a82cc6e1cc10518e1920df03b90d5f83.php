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

/* @Etudiant/backrep/AddStudentManually.html.twig */
class __TwigTemplate_1f47088d992a6ed4b21d1e9d608282e203c7ba692ae709c2a1d44367561b6abb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/AddStudentManually.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/AddStudentManually.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/AddStudentManually.html.twig", 1);
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
            <h3>Teacher</h3>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Add New Teacher</li>
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
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>First Name *</label>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "FirstName"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Last Name *</label>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "LastName"]]);
        echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date Of Birth *</label>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Date of birth"]]);
        echo "
                            <i class=\"far fa-calendar-alt\"></i>
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place Of Birth *</label>
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "placeobirth", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Place of Birth"]]);
        echo "
                            <i class=\"far fa-calendar-alt\"></i>
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "email"]]);
        echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Blood Group *</label>
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bloodGroup", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "email"]]);
        echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail</label>
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "email"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Class *</label>
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Address</label>
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Address"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Phone</label>
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Phone Number"]]);
        echo "
                        </div>

                        <div class=\"col-12 form-group mg-t-8\">
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'widget', ["attr" => ["class" => "btn-fill-lg bg-blue-dark btn-hover-yellow"]]);
        echo "
                            <button type=\"reset\" class=\"btn-fill-lg bg-blue-dark btn-hover-yellow\">Reset</button>
                        </div>
                    </div>
                    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                </form>
            </div>
        </div>
        <!-- Add New Teacher Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">Sparkit</a> 2020 <a href=\"#\"></a></div>
        </footer>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/backrep/AddStudentManually.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 89,  177 => 85,  170 => 81,  163 => 77,  156 => 73,  149 => 69,  141 => 64,  133 => 59,  124 => 53,  115 => 47,  107 => 42,  100 => 38,  93 => 34,  60 => 3,  51 => 2,  29 => 1,);
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
                <li>Add New Teacher</li>
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
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>First Name *</label>
                            {{ form_widget(form.firstName , {'attr': {'class':'form-control required','placeholder':'FirstName'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Last Name *</label>
                            {{ form_widget(form.lastName , {'attr': {'class':'form-control required','placeholder':'LastName'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date Of Birth *</label>
                            {{ form_widget(form.birthDay , {'attr': {'class':'form-control required','placeholder':'Date of birth'}}) }}
                            <i class=\"far fa-calendar-alt\"></i>
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place Of Birth *</label>
                            {{ form_widget(form.placeobirth , {'attr': {'class':'form-control required','placeholder':'Place of Birth'}}) }}
                            <i class=\"far fa-calendar-alt\"></i>
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>
                            {{ form_widget(form.gender, {'attr': {'class':'form-control required','placeholder':'email'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Blood Group *</label>
                            {{ form_widget(form.bloodGroup, {'attr': {'class':'form-control required','placeholder':'email'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail</label>
                            {{ form_widget(form.email , {'attr': {'class':'form-control required','placeholder':'email'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Class *</label>
                            {{ form_widget(form.classe, { 'attr': {'class': 'select2'} })}}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Address</label>
                            {{ form_widget(form.address , {'attr': {'class':'form-control required','placeholder':'Address'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Phone</label>
                            {{ form_widget(form.phone , {'attr': {'class':'form-control required','placeholder':'Phone Number'}}) }}
                        </div>

                        <div class=\"col-12 form-group mg-t-8\">
                            {{ form_widget(form.Ajouter, { 'attr': {'class': 'btn-fill-lg bg-blue-dark btn-hover-yellow'} })}}
                            <button type=\"reset\" class=\"btn-fill-lg bg-blue-dark btn-hover-yellow\">Reset</button>
                        </div>
                    </div>
                    {{ form_end(form , {'render_rest':false}) }}
                </form>
            </div>
        </div>
        <!-- Add New Teacher Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">Sparkit</a> 2020 <a href=\"#\"></a></div>
        </footer>
    </div>

{% endblock %}", "@Etudiant/backrep/AddStudentManually.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\AddStudentManually.html.twig");
    }
}
