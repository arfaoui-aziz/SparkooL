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

/* @Etudiant/backrep/affecttoclass.html.twig */
class __TwigTemplate_ff7c26441939d07b6236c86e8bf7126712620301080ba5e24f21238fe4bb9d93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/affecttoclass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/affecttoclass.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/affecttoclass.html.twig", 1);
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
            <h3>Classes</h3>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Add New Class</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add Class Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>Add New Class Schedule</h3>
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
                                               )
                             ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                                             ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["students"] ?? $this->getContext($context, "students")));
        echo "
                <form class=\"new-added-form\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Student Name *</label>
                            <input type=\"text\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["students"] ?? $this->getContext($context, "students")), "lastName", []) . " ") . $this->getAttribute(($context["students"] ?? $this->getContext($context, "students")), "firstName", [])), "html", null, true);
        echo "\" class=\"form-control\" disabled  >
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>ID No</label>
                            <input type=\"text\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["students"] ?? $this->getContext($context, "students")), "id", []), "html", null, true);
        echo "\" class=\"form-control\" disabled>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>

                                <input type=\"text\" placeholder=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["students"] ?? $this->getContext($context, "students")), "gender", []), "html", null, true);
        echo "\" class=\"form-control\" disabled>

                        </div>




                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Class</label>



                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "


                
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail *</label>

                            <input type=\"email\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["students"] ?? $this->getContext($context, "students")), "email", []), "html", null, true);
        echo "\" class=\"form-control\" disabled>
                        </div>
                        <div class=\"col-md-6 form-group\"></div>
                        <div class=\"col-12 form-group mg-t-8\">
                              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'widget', ["attr" => ["class" => "btn-fill-lg btn-gradient-yellow btn-hover-bluedark"]]);
        echo "
                   
                            <button type=\"reset\" class=\"btn-fill-lg bg-blue-dark btn-hover-yellow\">Reset</button>
                        </div>
                    </div>

                </form>
                            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
            </div>
        </div>
        <!-- Add Class Area End Here -->
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
        return "@Etudiant/backrep/affecttoclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 81,  154 => 74,  147 => 70,  135 => 61,  120 => 49,  112 => 44,  105 => 40,  97 => 35,  93 => 34,  60 => 3,  51 => 2,  29 => 1,);
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
            <h3>Classes</h3>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Add New Class</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add Class Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>Add New Class Schedule</h3>
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
                                               )
                             {{ form_start(form)}}
                                                             {{ dump(students) }}
                <form class=\"new-added-form\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Student Name *</label>
                            <input type=\"text\" placeholder=\"{{ students.lastName~\" \"~students.firstName }}\" class=\"form-control\" disabled  >
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>ID No</label>
                            <input type=\"text\" placeholder=\"{{ students.id }}\" class=\"form-control\" disabled>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>

                                <input type=\"text\" placeholder=\"{{ students.gender }}\" class=\"form-control\" disabled>

                        </div>




                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Class</label>



                            {{ form_widget(form.classe, { 'attr': {'class': 'select2'} })}}


                
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail *</label>

                            <input type=\"email\" placeholder=\"{{ students.email }}\" class=\"form-control\" disabled>
                        </div>
                        <div class=\"col-md-6 form-group\"></div>
                        <div class=\"col-12 form-group mg-t-8\">
                              {{ form_widget(form.Ajouter, { 'attr': {'class': 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'} })}}
                   
                            <button type=\"reset\" class=\"btn-fill-lg bg-blue-dark btn-hover-yellow\">Reset</button>
                        </div>
                    </div>

                </form>
                            {{ form_end(form , {'render_rest':false})}}
            </div>
        </div>
        <!-- Add Class Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
        </footer>
    </div>
{% endblock %}", "@Etudiant/backrep/affecttoclass.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\affecttoclass.html.twig");
    }
}
