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

/* @Admin\Schedule\AddSchedule.html.twig */
class __TwigTemplate_8bb8d7ba5dd14a092f78cd2e988f53507aeb41f59cb4467c3eb28ba719f32c76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'jq' => [$this, 'block_jq'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Schedule\\AddSchedule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Schedule\\AddSchedule.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Schedule\\AddSchedule.html.twig", 1);
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
    <script src=\" ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
    <script  src=\" ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dynamicForm.js"), "html", null, true);
        echo " \" ></script>
    <div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>All School Schedules</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Class Routine Area Start Here -->
    <div class=\"row\">
        <div class=\"col-4-xxxl col-12\">
            <div class=\"card height-auto\">
                <div class=\"card-body\">
                    <div class=\"heading-layout1\">
                        <div class=\"item-title\">
                            <h3>Add School Schedule </h3>
                        </div>
                        <br><br>
                    </div>

                        <form class=\"new-added-form\" method=\"post\" >
                            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Day *</label>
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Week *</label>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "week", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Classe *</label>
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 1 *</label>
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seance1", []), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 2 * </label>
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seance2", []), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 3 * </label>
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seance3", []), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 4 *</label>
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seance4", []), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                                </div>



                            </div>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget');
        echo "
                            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </form>

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
                   <!-- For star here-->
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#1245</label>
                                        </div>
                                    </td>
                                    <td>45454545</td>


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

    <!--  MyScript -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_jq($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Schedule\\AddSchedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 129,  155 => 62,  151 => 61,  142 => 55,  135 => 51,  128 => 47,  121 => 43,  114 => 39,  107 => 35,  100 => 31,  92 => 26,  68 => 5,  64 => 4,  61 => 3,  52 => 2,  30 => 1,);
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

    <script src=\" {{ asset('js/jquery-3.3.1.min.js') }} \" ></script>
    <script  src=\" {{ asset('dynamicForm.js') }} \" ></script>
    <div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>All School Schedules</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Class Routine Area Start Here -->
    <div class=\"row\">
        <div class=\"col-4-xxxl col-12\">
            <div class=\"card height-auto\">
                <div class=\"card-body\">
                    <div class=\"heading-layout1\">
                        <div class=\"item-title\">
                            <h3>Add School Schedule </h3>
                        </div>
                        <br><br>
                    </div>

                        <form class=\"new-added-form\" method=\"post\" >
                            {{ form_start(form) }}
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Day *</label>
                                    {{ form_widget (form.day , {'attr': {'class':'select2'}}) }}
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Week *</label>
                                    {{ form_widget (form.week , {'attr': {'class':'form-control'}}) }}
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Classe *</label>
                                    {{ form_widget (form.classe , {'attr': {'class':'select2'}}) }}
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 1 *</label>
                                    {{ form_widget (form.seance1 , {'attr': {'class':'form-control form-control-lg'}}) }}
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 2 * </label>
                                    {{ form_widget (form.seance2 , {'attr': {'class':'form-control form-control-lg'}}) }}
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 3 * </label>
                                    {{ form_widget (form.seance3 , {'attr': {'class':'form-control form-control-lg'}}) }}
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Seance 4 *</label>
                                    {{ form_widget (form.seance4 , {'attr': {'class':'form-control form-control-lg'}}) }}
                                </div>



                            </div>
                            {{ form_widget(form.Add) }}
                            {{ form_end(form) }}
                        </form>

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
                   <!-- For star here-->
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#1245</label>
                                        </div>
                                    </td>
                                    <td>45454545</td>


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

    <!--  MyScript -->


{% endblock %}
        {% block jq %} {% endblock %}", "@Admin\\Schedule\\AddSchedule.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Schedule\\AddSchedule.html.twig");
    }
}
