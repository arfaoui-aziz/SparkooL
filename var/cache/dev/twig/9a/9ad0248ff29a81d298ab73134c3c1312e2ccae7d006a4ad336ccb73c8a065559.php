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
class __TwigTemplate_245f761f5ac7410b8220e5b8d0b660689e8ae729d560260c303cc108d50c70a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'update' => [$this, 'block_update'],
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
        echo "<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
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
                    ";
        // line 22
        $this->displayBlock('update', $context, $blocks);
        // line 79
        echo "                </div>
            </div>
        </div>
        <div class=\"col-8-xxxl col-12\">
            <div class=\"card height-auto\">
                <div class=\"card-body\">
                    <form class=\"mg-b-20\">
                        <div class=\"row gutters-8\">

                            <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                                <input id=\"searchName\"  name=\"searchName\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                            </div>
                            <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                            </div>
                            <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                            </div>

                            <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">

                                <button type=\"submit\" class=\"fw-btn-fill radius-30 btn-gradient-yellow \" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sort By&nbsp;<i class=\"fas fa-filter\"></i></button>
                                <div class=\"dropdown-menu\">
                                    <p id=\"highest\" class=\"dropdown-item\" >";
        // line 102
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["allSubjects"] ?? $this->getContext($context, "allSubjects")), "Lowest coefficient", "s.coefficient");
        echo "</p>

                                    <div class=\"dropdown-divider\"></div>
                                    ";
        // line 105
        $context["new_direction"] = "asc";
        // line 106
        echo "                                    ";
        if ($this->getAttribute(($context["allSubjects"] ?? $this->getContext($context, "allSubjects")), "isSorted", [0 => "s.coefficient"], "method")) {
            // line 107
            echo "                                        ";
            $context["new_direction"] = ((("asc" == $this->getAttribute(($context["allSubjects"] ?? $this->getContext($context, "allSubjects")), "direction", []))) ? ("desc") : ("asc"));
            // line 108
            echo "                                    ";
        }
        // line 109
        echo "                                    <p id=\"highest\" class=\"dropdown-item\" >";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["allSubjects"] ?? $this->getContext($context, "allSubjects")), "Highest coefficient", "s.coefficient");
        echo "</p>
                                </div>
                            </div>


                        </div>
                    </form>


                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var searchRequest = null;

                            \$(\"#searchName\").keyup(function () {
                                var minlength = 1;
                                var that = this;
                                var value = \$(this).val();
                                var entitySelector = \$(\"#searchResult\").html('');


                                if (value.length >= minlength) {
                                    if (searchRequest != null)
                                        searchRequest.abort();
                                    searchRequest = \$.ajax({
                                        type: \"GET\",
                                        url: \"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_searchSubject");
        echo "\",
                                        data: {
                                            'searchName': value
                                        },
                                        dataType: \"text\",
                                        success: function (msg) {
                                            //we need to check if the value is the same
                                            if (value === \$(that).val()) {
                                                var result = JSON.parse(msg);

                                                \$.each(result, function (key, arr) {
                                                    \$.each(arr, function (id, value) {
                                                        if (key === 'subjects') {
                                                            if (id !== 'error') {

                                                                var assetsBaseDir = \"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user.jpg"), "html", null, true);
        echo "\";
                                                                var large =
                                                                    ' <tr>' +
                                                                    '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">#' + value[0] + '</label> </div> </td>' +
                                                                    ' <td>' + value[1] + '</td> ' +
                                                                    ' <td>' + value[2] + '</td> ' +
                                                                    '<td>2B</td> ' +

                                                                    '</tr> ';
                                                                entitySelector.append(large);
                                                            } else {
                                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');

                                                            }
                                                        }

                                                    });
                                                });
                                            }
                                        }
                                    });
                                }else {location.reload(false);}
                            });

                        });
                    </script>


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
                            <tbody id=\"searchResult\">
        ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allSubjects"] ?? $this->getContext($context, "allSubjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["as"]) {
            // line 197
            echo "                                <tr >
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            <label class=\"form-check-label\">#";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "subjectId", []), "html", null, true);
            echo "</label>
                                        </div>
                                    </td>
                                    <td>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "subjectName", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "coefficient", []), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["as"], "classes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["asb"]) {
                // line 208
                echo "                                        ";
                echo twig_escape_filter($this->env, $context["asb"], "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                                    </td>


                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_DeleteSubject", ["subjectId" => $this->getAttribute($context["as"], "subjectId", [])]), "html", null, true);
            echo "\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete</a>
                                                <a class=\"dropdown-item\"  href=\"";
            // line 222
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
        // line 230
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

    // line 22
    public function block_update($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "update"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "update"));

        // line 23
        echo "                        <form class=\"new-added-form\" method=\"post\" novalidate>
                            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Subject Name</label>
                                    ";
        // line 30
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subjectName", []), 'errors')) <= 0)) {
            // line 31
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subjectName", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
        } else {
            // line 33
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subjectName", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                    <div class=\"invalid-feedback\">
                                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subjectName", []), 'errors');
            echo "
                                    </div>
                                    ";
        }
        // line 38
        echo "                                </div>

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Coefficient</label>
                                    ";
        // line 42
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coefficient", []), 'errors')) <= 0)) {
            // line 43
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coefficient", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
        } else {
            // line 45
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coefficient", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coefficient", []), 'errors');
            echo "
                                        </div>
                                    ";
        }
        // line 50
        echo "                                </div>
                                ";
        // line 51
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subjectName", []), 'errors')) <= 0)) {
            // line 52
            echo "                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Classe *</label>

                                    ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classes", []), 'widget', ["attr" => ["class" => "select2"]]);
            echo "
                                    ";
        } else {
            // line 57
            echo "                                    <div class=\"col-xl-3 col-lg-6 col-12 form-group has-error\">
                                        <label>Classe *</label>

                                        ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classes", []), 'widget', ["attr" => ["class" => "select2 "]]);
            echo "
                                      <span class=\"text-red\">
                                          Insert a Classe
                                         </span>

                                    ";
        }
        // line 66
        echo "
                                </div>

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                                </div>

                            </div>
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget');
        echo "
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "
                            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                        </form>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 238
    public function block_jq($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        // line 239
        echo "        ";
        
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
        return array (  449 => 239,  440 => 238,  427 => 76,  423 => 75,  419 => 74,  409 => 66,  400 => 60,  395 => 57,  390 => 55,  385 => 52,  383 => 51,  380 => 50,  374 => 47,  368 => 45,  362 => 43,  360 => 42,  354 => 38,  348 => 35,  342 => 33,  336 => 31,  334 => 30,  326 => 25,  322 => 24,  319 => 23,  310 => 22,  293 => 230,  279 => 222,  274 => 220,  262 => 210,  253 => 208,  249 => 207,  244 => 205,  240 => 204,  234 => 201,  228 => 197,  224 => 196,  174 => 149,  156 => 134,  127 => 109,  124 => 108,  121 => 107,  118 => 106,  116 => 105,  110 => 102,  85 => 79,  83 => 22,  62 => 3,  53 => 2,  31 => 1,);
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
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
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
                        <form class=\"new-added-form\" method=\"post\" novalidate>
                            {{ form_start(form) }}
                            {{ form_row(form._token) }}
                            <div class=\"row\">

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Subject Name</label>
                                    {% if form_errors(form.subjectName)|length <= 0 %}
                                    {{ form_widget (form.subjectName , {'attr': {'class':'form-control'}}) }}
                                    {% else %}
                                    {{ form_widget (form.subjectName , {'attr': {'class':'form-control is-invalid'}}) }}
                                    <div class=\"invalid-feedback\">
                                    {{ form_errors(form.subjectName) }}
                                    </div>
                                    {% endif %}
                                </div>

                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Coefficient</label>
                                    {% if form_errors(form.coefficient)|length <= 0 %}
                                    {{ form_widget (form.coefficient, {'attr': {'class':'form-control'}}) }}
                                    {% else %}
                                        {{ form_widget (form.coefficient, {'attr': {'class':'form-control is-invalid'}}) }}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(form.coefficient) }}
                                        </div>
                                    {% endif %}
                                </div>
                                {% if form_errors(form.subjectName)|length <= 0 %}
                                <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                                    <label>Classe *</label>

                                    {{ form_widget (form.classes , {'attr': {'class':'select2'}}) }}
                                    {% else %}
                                    <div class=\"col-xl-3 col-lg-6 col-12 form-group has-error\">
                                        <label>Classe *</label>

                                        {{ form_widget (form.classes , {'attr': {'class':'select2 '}}) }}
                                      <span class=\"text-red\">
                                          Insert a Classe
                                         </span>

                                    {% endif %}

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
                    <form class=\"mg-b-20\">
                        <div class=\"row gutters-8\">

                            <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                                <input id=\"searchName\"  name=\"searchName\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                            </div>
                            <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                            </div>
                            <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                            </div>

                            <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">

                                <button type=\"submit\" class=\"fw-btn-fill radius-30 btn-gradient-yellow \" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sort By&nbsp;<i class=\"fas fa-filter\"></i></button>
                                <div class=\"dropdown-menu\">
                                    <p id=\"highest\" class=\"dropdown-item\" >{{ knp_pagination_sortable(allSubjects,'Lowest coefficient','s.coefficient') }}</p>

                                    <div class=\"dropdown-divider\"></div>
                                    {% set new_direction = 'asc' %}
                                    {% if allSubjects.isSorted('s.coefficient') %}
                                        {% set new_direction = ('asc' == allSubjects.direction ? 'desc' : 'asc') %}
                                    {% endif %}
                                    <p id=\"highest\" class=\"dropdown-item\" >{{ knp_pagination_sortable(allSubjects,'Highest coefficient','s.coefficient') }}</p>
                                </div>
                            </div>


                        </div>
                    </form>


                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var searchRequest = null;

                            \$(\"#searchName\").keyup(function () {
                                var minlength = 1;
                                var that = this;
                                var value = \$(this).val();
                                var entitySelector = \$(\"#searchResult\").html('');


                                if (value.length >= minlength) {
                                    if (searchRequest != null)
                                        searchRequest.abort();
                                    searchRequest = \$.ajax({
                                        type: \"GET\",
                                        url: \"{{ path('admin_searchSubject') }}\",
                                        data: {
                                            'searchName': value
                                        },
                                        dataType: \"text\",
                                        success: function (msg) {
                                            //we need to check if the value is the same
                                            if (value === \$(that).val()) {
                                                var result = JSON.parse(msg);

                                                \$.each(result, function (key, arr) {
                                                    \$.each(arr, function (id, value) {
                                                        if (key === 'subjects') {
                                                            if (id !== 'error') {

                                                                var assetsBaseDir = \"{{ asset('img/figure/user.jpg') }}\";
                                                                var large =
                                                                    ' <tr>' +
                                                                    '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">#' + value[0] + '</label> </div> </td>' +
                                                                    ' <td>' + value[1] + '</td> ' +
                                                                    ' <td>' + value[2] + '</td> ' +
                                                                    '<td>2B</td> ' +

                                                                    '</tr> ';
                                                                entitySelector.append(large);
                                                            } else {
                                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');

                                                            }
                                                        }

                                                    });
                                                });
                                            }
                                        }
                                    });
                                }else {location.reload(false);}
                            });

                        });
                    </script>


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
                            <tbody id=\"searchResult\">
        {% for as in allSubjects %}
                                <tr >
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
{% endblock %}
{% block jq %}
        {% endblock %}", "@Admin\\Subject\\AddSubject.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Subject\\AddSubject.html.twig");
    }
}
