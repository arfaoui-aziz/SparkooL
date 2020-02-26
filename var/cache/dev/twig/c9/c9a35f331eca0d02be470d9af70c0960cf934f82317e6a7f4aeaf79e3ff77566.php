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

/* @Etudiant/backrep/Allforum.html.twig */
class __TwigTemplate_f0967e288a5968a06d3ca535aaae1e9f877ad500b267cb7e5e978dae5c25a009 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/Allforum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/Allforum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/Allforum.html.twig", 1);
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
                        <h3>All Forum</h3>
                    </div>
                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">

                        <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                            <input id=\"searchTitle\"  name=\"searchTitle\" type=\"text\" placeholder=\"Search by Title ...\" class=\"form-control\">
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
                        \$(\"#searchTitle\").keyup(function () {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search_with_title");
        echo "\",
                                    data: {
                                        'searchTitle': value
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
                                    <label class=\"form-check-label\">ID</label>
                                </div>
                            </th>

                            <th>Title</th>
                            <th>Subject</th>
                            <th>Type</th>
                            <th>Num Of replys</th>
                        </tr>
                        </thead>
                        <tbody id=\"searchResult\">

                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 117
            echo "                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            ";
            // line 121
            if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "id", [])) == 1)) {
                // line 122
                echo "                                                <label class=\"form-check-label\">#000";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 124
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "id", [])) == 2)) {
                // line 125
                echo "                                                <label class=\"form-check-label\">#00";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 127
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "id", [])) == 3)) {
                // line 128
                echo "                                                <label class=\"form-check-label\">#0";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 130
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "id", [])) == 4)) {
                // line 131
                echo "                                                <label class=\"form-check-label\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", []), "html", null, true);
                echo "</label>
                                            ";
            }
            // line 133
            echo "                                        </div>
                                    </td>
                                    <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "title", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "subject", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "type", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "nbreponse", []), "html", null, true);
            echo "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_deletesubjectback", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
            echo "\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Delete Subject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
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
        return "@Etudiant/backrep/Allforum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 153,  250 => 146,  239 => 138,  235 => 137,  231 => 136,  227 => 135,  223 => 133,  217 => 131,  214 => 130,  208 => 128,  205 => 127,  199 => 125,  196 => 124,  190 => 122,  188 => 121,  182 => 117,  178 => 116,  118 => 59,  60 => 3,  51 => 2,  29 => 1,);
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
                        <h3>All Forum</h3>
                    </div>
                </div>
                <form class=\"mg-b-20\">
                    <div class=\"row gutters-8\">

                        <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                            <input id=\"searchTitle\"  name=\"searchTitle\" type=\"text\" placeholder=\"Search by Title ...\" class=\"form-control\">
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
                        \$(\"#searchTitle\").keyup(function () {
                            var minlength = 1;
                            var that = this;
                            var value = \$(this).val();
                            var entitySelector = \$(\"#searchResult\").html('');
                            if (value.length >= minlength) {
                                if (searchRequest != null)
                                    searchRequest.abort();
                                searchRequest = \$.ajax({
                                    type: \"GET\",
                                    url: \"{{ path('ajax_search_with_title') }}\",
                                    data: {
                                        'searchTitle': value
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
                                    <label class=\"form-check-label\">ID</label>
                                </div>
                            </th>

                            <th>Title</th>
                            <th>Subject</th>
                            <th>Type</th>
                            <th>Num Of replys</th>
                        </tr>
                        </thead>
                        <tbody id=\"searchResult\">

                        {% for subject in subjects  %}
                                <tr>
                                    <td>
                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\">
                                            {% if (subject.id | length) == 1 %}
                                                <label class=\"form-check-label\">#000{{ subject.id }}</label>
                                            {% endif %}
                                            {% if (subject.id | length) == 2 %}
                                                <label class=\"form-check-label\">#00{{ subject.id }}</label>
                                            {% endif %}
                                            {% if (subject.id | length) == 3 %}
                                                <label class=\"form-check-label\">#0{{ subject.id }}</label>
                                            {% endif %}
                                            {% if (subject.id | length) == 4 %}
                                                <label class=\"form-check-label\">#{{ subject.id }}</label>
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td>{{ subject.title }}</td>
                                    <td>{{ subject.subject }}</td>
                                    <td>{{ subject.type }}</td>
                                    <td>{{ subject.nbreponse }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                               aria-expanded=\"false\">
                                                <span class=\"flaticon-more-button-of-three-dots\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <a class=\"dropdown-item\" href=\"{{ path('etudaint_deletesubjectback', {'id': subject.id}) }}\"><i
                                                            class=\"fas fa-cogs text-dark-pastel-green\"></i>Delete Subject</a>
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
{% endblock %}", "@Etudiant/backrep/Allforum.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\Allforum.html.twig");
    }
}
