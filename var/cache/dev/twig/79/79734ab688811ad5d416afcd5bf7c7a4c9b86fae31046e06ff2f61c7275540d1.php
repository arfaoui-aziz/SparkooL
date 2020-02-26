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

/* @Teacher/Teacher/showTeacher.html.twig */
class __TwigTemplate_df7bdc957a0872c252f4d7007dc54f8b317dff0f7f5bc2eaec9c90fbf0c1f596 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/showTeacher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/showTeacher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Teacher/Teacher/showTeacher.html.twig", 1);
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
        echo "    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <div class=\"dashboard-content-one\">
        <!-- Breadcubs Area Start Here -->
        <div class=\"breadcrumbs-area\">
            <h3>All Teachers</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Teacher Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Teachers</h3>
                    </div>
                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">

                        <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                            <input id=\"searchName\"  name=\"searchName\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                        </div>
                        <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">

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
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_SearchAjax");
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
                                                    if (key === 'users') {
                                                        if (id !== 'error') {

                                                            var large =
                                                                ' <tr>' +
                                                                '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">' + value[0] + '</label> </div> </td>' +

                                                                ' <td>' + value[1] + '</td> ' +
                                                                ' <td>' + value[2] + '</td> ' +
                                                                '<td>' + value[3] + '</td> ' +
                                                                '<td>' + value[4] + '</td> ' +
                                                                '<td>' + value[5] + '</td> ' +
                                                                '<td>' + value[6] + '</td> ' +
                                                                '<td>' + value[7] + '</td>' +

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
                    <table class=\"table display data-table text-nowrap\" >
                        <thead>

                        <tr>
                            <th>
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input checkAll\">
                                    <label class=\"form-check-label\">ID N°</label>
                                </div>
                            </th>
                            <th>Photo</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody id=\"searchResult\">
                        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 130
            echo "                            <tr  >
                                <td>
                                    <div class=\"form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\">


                                        <label class=\"form-check-label\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</label>

                                    </div>
                                </td>
                                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "picture", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "firstName", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "lastName", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "gender", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "address", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "phone", []), "html", null, true);
            echo "</td>

                                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", []), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                           aria-expanded=\"false\">
                                            <span class=\"flaticon-more-button-of-three-dots\"></span>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteTeacher", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                                                        class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAbsanceTeacher", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                                                        class=\"fas fa-calendar-check text-dark-pastel-green\"></i> Add Absence</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addDelayTeacher", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                                                        class=\"fas fa-check-square text-dark-pastel-green\"></i> Add Delay</a>

                                            <a class=\"dropdown-item\" href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showTeacherDetails", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                                                        class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Teacher Table Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_jq($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        // line 183
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher/Teacher/showTeacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 183,  298 => 182,  276 => 169,  263 => 162,  257 => 159,  252 => 157,  247 => 155,  236 => 147,  231 => 145,  227 => 144,  223 => 143,  219 => 142,  215 => 141,  211 => 140,  204 => 136,  196 => 130,  192 => 129,  119 => 59,  61 => 3,  52 => 2,  30 => 1,);
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
            <h3>All Teachers</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Teacher Table Area Start Here -->
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Teachers</h3>
                    </div>
                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">

                        <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                            <input id=\"searchName\"  name=\"searchName\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                        </div>
                        <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                        </div>
                        <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">

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
                                    url: \"{{ path('admin_SearchAjax') }}\",
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
                                                    if (key === 'users') {
                                                        if (id !== 'error') {

                                                            var large =
                                                                ' <tr>' +
                                                                '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">' + value[0] + '</label> </div> </td>' +

                                                                ' <td>' + value[1] + '</td> ' +
                                                                ' <td>' + value[2] + '</td> ' +
                                                                '<td>' + value[3] + '</td> ' +
                                                                '<td>' + value[4] + '</td> ' +
                                                                '<td>' + value[5] + '</td> ' +
                                                                '<td>' + value[6] + '</td> ' +
                                                                '<td>' + value[7] + '</td>' +

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
                    <table class=\"table display data-table text-nowrap\" >
                        <thead>

                        <tr>
                            <th>
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input checkAll\">
                                    <label class=\"form-check-label\">ID N°</label>
                                </div>
                            </th>
                            <th>Photo</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody id=\"searchResult\">
                        {% for i in var %}
                            <tr  >
                                <td>
                                    <div class=\"form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\">


                                        <label class=\"form-check-label\">{{ i.id }}</label>

                                    </div>
                                </td>
                                <td>{{ i.picture }}</td>
                                <td>{{ i.firstName }}</td>
                                <td>{{ i.lastName }}</td>
                                <td>{{ i.gender }}</td>
                                <td>{{ i.address }}</td>
                                <td>{{ i.phone }}</td>

                                <td>{{ i.email }}</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                           aria-expanded=\"false\">
                                            <span class=\"flaticon-more-button-of-three-dots\"></span>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                            <a class=\"dropdown-item\" href=\"{{ path('deleteTeacher',{'id':i.id }) }}\"><i
                                                        class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('addAbsanceTeacher',{'id':i.id }) }}\"><i
                                                        class=\"fas fa-calendar-check text-dark-pastel-green\"></i> Add Absence</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('addDelayTeacher',{'id':i.id }) }}\"><i
                                                        class=\"fas fa-check-square text-dark-pastel-green\"></i> Add Delay</a>

                                            <a class=\"dropdown-item\" href=\"{{ path('showTeacherDetails',{'id':i.id }) }}\"><i
                                                        class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
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
        <!-- Teacher Table Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
    </div>
    </div>

{% endblock %}
{% block jq %}

{% endblock %}", "@Teacher/Teacher/showTeacher.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\showTeacher.html.twig");
    }
}
