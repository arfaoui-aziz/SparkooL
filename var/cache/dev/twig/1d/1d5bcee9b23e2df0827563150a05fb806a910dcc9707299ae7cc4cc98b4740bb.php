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

/* @Etudiant/backrep/allstudents.html.twig */
class __TwigTemplate_833b9dc4c288332dd3f3e2ca9fa80fd68f2ae35c5e632441c49a8e20a46e2a6e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/allstudents.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/allstudents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/allstudents.html.twig", 1);
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
            <h3>Students</h3>

        </div>
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Accounts</h3>
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

                        <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">

                            <div class=\"dropdown-menu\">
                                <p id=\"admin\" class=\"dropdown-item\" href=\"#\">Admin</p>

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
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search");
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
                                                                '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">#' + value[0] + '</label> </div> </td>' +
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
                                    <label class=\"form-check-label\">Roll</label>
                                </div>
                            </th>

                            <th>Name</th>
                            <th>Gender</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Date Of Birth</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody id=\"searchResult\">

                        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 125
            echo "                            ";
            if (($this->getAttribute($context["student"], "enabled", []) == 1)) {
                // line 126
                echo "                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            ";
                // line 130
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 1)) {
                    // line 131
                    echo "                                                <label class=\"form-check-label\">#000";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                            ";
                }
                // line 133
                echo "                                            ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 2)) {
                    // line 134
                    echo "                                                <label class=\"form-check-label\">#00";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                            ";
                }
                // line 136
                echo "                                            ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 3)) {
                    // line 137
                    echo "                                                <label class=\"form-check-label\">#0";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                            ";
                }
                // line 139
                echo "                                            ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["student"], "id", [])) == 4)) {
                    // line 140
                    echo "                                                <label class=\"form-check-label\">#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", []), "html", null, true);
                    echo "</label>
                                            ";
                }
                // line 142
                echo "                                        </div>
                                    </td>
                                    <td>";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstName", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "gender", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "academicyear", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "address", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "birthDay", []), "html", null, true);
                echo "<</td>
                                    <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "phone", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "email", []), "html", null, true);
                echo "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_delete", ["id" => $this->getAttribute($context["student"], "id", [])]), "html", null, true);
                echo "\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete Student</a>
                                                <a class=\"dropdown-item\" href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_accountdisable", ["id" => $this->getAttribute($context["student"], "id", [])]), "html", null, true);
                echo "\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Disable Account</a>
                                                <a class=\"dropdown-item\" href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_affectto", ["id" => $this->getAttribute($context["student"], "id", [])]), "html", null, true);
                echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Affect to class</a>
                                                <a class=\"dropdown-item\" href=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_accountSetting", ["id" => $this->getAttribute($context["student"], "id", [])]), "html", null, true);
                echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Modify account settings</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 172
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/backrep/allstudents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 173,  299 => 172,  288 => 164,  283 => 162,  278 => 160,  273 => 158,  262 => 150,  258 => 149,  254 => 148,  250 => 147,  246 => 146,  242 => 145,  238 => 144,  234 => 142,  228 => 140,  225 => 139,  219 => 137,  216 => 136,  210 => 134,  207 => 133,  201 => 131,  199 => 130,  193 => 126,  190 => 125,  186 => 124,  118 => 59,  60 => 3,  51 => 2,  29 => 1,);
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
            <h3>Students</h3>

        </div>
        <div class=\"card height-auto\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>All Accounts</h3>
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

                        <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">

                            <div class=\"dropdown-menu\">
                                <p id=\"admin\" class=\"dropdown-item\" href=\"#\">Admin</p>

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
                                    url: \"{{ path('ajax_search') }}\",
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
                                                                '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">#' + value[0] + '</label> </div> </td>' +
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
                                    <label class=\"form-check-label\">Roll</label>
                                </div>
                            </th>

                            <th>Name</th>
                            <th>Gender</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Date Of Birth</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody id=\"searchResult\">

                        {% for student in students  %}
                            {% if student.enabled == 1 %}
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            {% if (student.id | length) == 1 %}
                                                <label class=\"form-check-label\">#000{{ student.id }}</label>
                                            {% endif %}
                                            {% if (student.id | length) == 2 %}
                                                <label class=\"form-check-label\">#00{{ student.id }}</label>
                                            {% endif %}
                                            {% if (student.id | length) == 3 %}
                                                <label class=\"form-check-label\">#0{{ student.id }}</label>
                                            {% endif %}
                                            {% if (student.id | length) == 4 %}
                                                <label class=\"form-check-label\">#{{ student.id }}</label>
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td>{{ student.firstName }}</td>
                                    <td>{{ student.gender }}</td>
                                    <td>{{ student.academicyear }}</td>
                                    <td>{{ student.address }}</td>
                                    <td>{{ student.birthDay }}<</td>
                                    <td>{{ student.phone }}</td>
                                    <td>{{ student.email }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"{{ path('etudiant_delete', {'id': student.id}) }}\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Delete Student</a>
                                                <a class=\"dropdown-item\" href=\"{{ path('etudiant_accountdisable', {'id': student.id}) }}\"><i
                                                            class=\"fas fa-times text-orange-red\"></i>Disable Account</a>
                                                <a class=\"dropdown-item\" href=\"{{ path('etudiant_affectto', {'id': student.id}) }}\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Affect to class</a>
                                                <a class=\"dropdown-item\" href=\"{{ path('etudiant_accountSetting', {'id': student.id}) }}\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Modify account settings</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Etudiant/backrep/allstudents.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\allstudents.html.twig");
    }
}
