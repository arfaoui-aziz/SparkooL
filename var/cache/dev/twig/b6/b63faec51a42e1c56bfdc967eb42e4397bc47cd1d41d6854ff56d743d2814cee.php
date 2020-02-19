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

/* @Admin\Account\AllAccounts.html.twig */
class __TwigTemplate_f9d503821df2011dbe5a0b168e19eacf063597629512a8af9b56cd90a5eca555 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\AllAccounts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\AllAccounts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Account\\AllAccounts.html.twig", 1);
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
        <h3>All Accounts</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Teacher Table Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3>All Accounts</h3>
                </div>
            </div>
            <form class=\"mg-b-20\">
                <div class=\"row gutters-8\">
                    <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                        <input id=\"searchName\"  name=\"searchName\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                    </div>

                    <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">

                        <button type=\"submit\" class=\"fw-btn-fill radius-30 btn-gradient-yellow \" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Filter By&nbsp;<i class=\"fas fa-filter\"></i></button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Admin</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Separated link</a>
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
        // line 68
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

                                                            var assetsBaseDir = \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user.jpg"), "html", null, true);
        echo "\";
                                                            var large =
                                                                ' <tr>' +
                                                                '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">#' + value[0] + '</label> </div> </td>' +
                                                                ' <td class=\"text-center\"> <img src=\"' + assetsBaseDir + '\" class=\"media-img-auto\" alt=\"student\"> </td>' +
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
                                <label class=\"form-check-label\">ID</label>
                            </div>
                        </th>
                        <th>Photo</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Occupation</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody id=\"searchResult\">
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allUsers"] ?? $this->getContext($context, "allUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["au"]) {
            // line 140
            echo "                    <tr  >
                        <td>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\">
                                <label class=\"form-check-label\">#";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "id", []), "html", null, true);
            echo "</label>
                            </div>
                        </td>
                        ";
            // line 147
            if (($this->getAttribute($context["au"], "gender", []) == "Male")) {
                // line 148
                echo "                        <td class=\"text-center\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user.jpg"), "html", null, true);
                echo "\" class=\"media-img-auto\" alt=\"student\"></td>
                        ";
            } else {
                // line 150
                echo "                            <td class=\"text-center\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user4.jpg"), "html", null, true);
                echo "\" alt=\"student\"></td>
                            ";
            }
            // line 152
            echo "
                        <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "firstName", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "lastName", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "gender", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "userType", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "address", []), "html", null, true);
            echo "</td>
                        <td>+216 ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "phone", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["au"], "email", []), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   aria-expanded=\"false\">
                                    <span class=\"flaticon-more-button-of-three-dots\"></span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-times text-orange-red\"></i>Close</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['au'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                    </tbody>
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

    // line 191
    public function block_jq($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        // line 192
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Account\\AllAccounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 192,  309 => 191,  287 => 178,  262 => 159,  258 => 158,  254 => 157,  250 => 156,  246 => 155,  242 => 154,  238 => 153,  235 => 152,  229 => 150,  223 => 148,  221 => 147,  215 => 144,  209 => 140,  205 => 139,  146 => 83,  128 => 68,  61 => 3,  52 => 2,  30 => 1,);
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
        <h3>All Accounts</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Teacher Table Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3>All Accounts</h3>
                </div>
            </div>
            <form class=\"mg-b-20\">
                <div class=\"row gutters-8\">
                    <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                        <input type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                        <input id=\"searchName\"  name=\"searchName\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                    </div>
                    <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">

                    </div>

                    <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">

                        <button type=\"submit\" class=\"fw-btn-fill radius-30 btn-gradient-yellow \" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Filter By&nbsp;<i class=\"fas fa-filter\"></i></button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Admin</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Separated link</a>
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

                                                            var assetsBaseDir = \"{{ asset('img/figure/user.jpg') }}\";
                                                            var large =
                                                                ' <tr>' +
                                                                '<td> <div class=\"form-check\"> <input type=\"checkbox\" class=\"form-check-input\"> <label class=\"form-check-label\">#' + value[0] + '</label> </div> </td>' +
                                                                ' <td class=\"text-center\"> <img src=\"' + assetsBaseDir + '\" class=\"media-img-auto\" alt=\"student\"> </td>' +
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
                                <label class=\"form-check-label\">ID</label>
                            </div>
                        </th>
                        <th>Photo</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Occupation</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody id=\"searchResult\">
                    {% for au in allUsers %}
                    <tr  >
                        <td>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\">
                                <label class=\"form-check-label\">#{{au.id}}</label>
                            </div>
                        </td>
                        {% if au.gender == \"Male\" %}
                        <td class=\"text-center\"><img src=\"{{asset('img/figure/user.jpg')}}\" class=\"media-img-auto\" alt=\"student\"></td>
                        {% else %}
                            <td class=\"text-center\"><img src=\"{{asset('img/figure/user4.jpg')}}\" alt=\"student\"></td>
                            {% endif %}

                        <td>{{au.firstName}}</td>
                        <td>{{au.lastName}}</td>
                        <td>{{au.gender}}</td>
                        <td>{{au.userType}}</td>
                        <td>{{ au.address }}</td>
                        <td>+216 {{ au.phone }}</td>
                        <td>{{ au.email }}</td>
                        <td>
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   aria-expanded=\"false\">
                                    <span class=\"flaticon-more-button-of-three-dots\"></span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-times text-orange-red\"></i>Close</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                    <a class=\"dropdown-item\" href=\"#\"><i
                                                class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
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

{% endblock %}", "@Admin\\Account\\AllAccounts.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Account\\AllAccounts.html.twig");
    }
}
