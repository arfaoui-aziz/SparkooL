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

/* @Admin\Classe\AddClass.html.twig */
class __TwigTemplate_f6067519c987e3d18fe0d08b01ad4271956fb4f138701ae81b795e18ffa10aed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Classe\\AddClass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Classe\\AddClass.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Classe\\AddClass.html.twig", 1);
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
        // line 58
        echo "                    </div>
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
";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allClasses"] ?? $this->getContext($context, "allClasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
            // line 83
            echo "                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "classId", []), "html", null, true);
            echo "</label>
                                        </div>
                                    </td>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "className", []), "html", null, true);
            echo "</td>


                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_DeleteClasse", ["classId" => $this->getAttribute($context["ac"], "classId", [])]), "html", null, true);
            echo "\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete</a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_UpdateClasse", ["classId" => $this->getAttribute($context["ac"], "classId", [])]), "html", null, true);
            echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Update</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                </tbody>
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
        echo "                        <form class=\"new-added-form\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddClasse");
        echo "\">
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                                    <select name=\"degree\" class=\"select2\" required>
                                        <option value=\"\">Please Select</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                    </select>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                                    <select name=\"section\" class=\"select2\" required>
                                        <option value=\"\">Please Select</option>
                                        <option value=\"A\">A</option>
                                        <option value=\"B\">B</option>
                                        <option value=\"C\">C</option>
                                        <option value=\"D\">D</option>

                                    </select>



                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                   <button type=\"submit\" class=\"btn-fill-lg btn-gradient-yellow btn-hover-yellow\">Save</button>
                                </div>

                            </div>
                        </form>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Classe\\AddClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 22,  174 => 21,  157 => 110,  143 => 102,  138 => 100,  125 => 90,  119 => 87,  113 => 83,  109 => 82,  83 => 58,  81 => 21,  61 => 3,  52 => 2,  30 => 1,);
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
                        <form class=\"new-added-form\" method=\"post\" action=\"{{ path('admin_AddClasse') }}\">
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                                    <select name=\"degree\" class=\"select2\" required>
                                        <option value=\"\">Please Select</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                    </select>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                                    <select name=\"section\" class=\"select2\" required>
                                        <option value=\"\">Please Select</option>
                                        <option value=\"A\">A</option>
                                        <option value=\"B\">B</option>
                                        <option value=\"C\">C</option>
                                        <option value=\"D\">D</option>

                                    </select>



                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                   <button type=\"submit\" class=\"btn-fill-lg btn-gradient-yellow btn-hover-yellow\">Save</button>
                                </div>

                            </div>
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
{% for ac in allClasses   %}
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#{{ ac.classId }}</label>
                                        </div>
                                    </td>
                                    <td>{{ ac.className }}</td>


                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"{{ path('admin_DeleteClasse',{'classId':ac.classId}) }}\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete</a>
                                                <a class=\"dropdown-item\" href=\"{{ path('admin_UpdateClasse',{'classId':ac.classId}) }}\"><i
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
{% endblock %}", "@Admin\\Classe\\AddClass.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Classe\\AddClass.html.twig");
    }
}
