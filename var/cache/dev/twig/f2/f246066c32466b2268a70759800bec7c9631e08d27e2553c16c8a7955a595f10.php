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

/* @Admin\Account\UserDetails.html.twig */
class __TwigTemplate_15e00763328553e750dd82406d7dc96d412d33eeca5413e5745cf4c440645adc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\UserDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\UserDetails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Account\\UserDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>Users</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Details Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">


            </div>
            <div class=\"single-info-details\">
                <div class=\"item-img\">
                    ";
        // line 19
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "gender", []) == "Male")) {
            // line 20
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/parents.jpg"), "html", null, true);
            echo "\" alt=\"student\">
                    ";
        } else {
            // line 22
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/student1.jpg"), "html", null, true);
            echo "\" alt=\"student\">
                    ";
        }
        // line 24
        echo "                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", []), "html", null, true);
        echo "</h3>
                        <div class=\"header-elements\">
                            <ul>
                                <li><a href=\"#\"><i class=\"far fa-edit\" ></i></a></li>
                                <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_DisplayPDF", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-file-pdf\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>ID:</td>
                                <td class=\"font-medium text-dark-medium\">#";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", []), "html", null, true);
        echo " </td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo " </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", []), "html", null, true);
        echo " </td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "gender", []), "html", null, true);
        echo " </td>
                            </tr>
                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "userType", []), "html", null, true);
        echo " </td>
                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td class=\"font-medium text-dark-medium\">House #10, ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "address", []), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <td>Phone:</td>
                                <td class=\"font-medium text-dark-medium\">+216 ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "phone", []), "html", null, true);
        echo " </td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class=\"footer-wrap-layout1\">
        <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
    </footer>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Account\\UserDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 72,  163 => 68,  155 => 63,  147 => 58,  140 => 54,  133 => 50,  126 => 46,  119 => 42,  105 => 31,  96 => 27,  91 => 24,  85 => 22,  79 => 20,  77 => 19,  60 => 4,  51 => 3,  29 => 1,);
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
        <h3>Users</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Details Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">


            </div>
            <div class=\"single-info-details\">
                <div class=\"item-img\">
                    {% if user.gender == \"Male\" %}
                    <img src=\"{{asset('img/figure/parents.jpg')}}\" alt=\"student\">
                    {% else %}
                        <img src=\"{{asset('img/figure/student1.jpg')}}\" alt=\"student\">
                    {% endif %}
                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">{{ user.firstName }} {{ user.lastName }}</h3>
                        <div class=\"header-elements\">
                            <ul>
                                <li><a href=\"#\"><i class=\"far fa-edit\" ></i></a></li>
                                <li><a href=\"{{ path('admin_DisplayPDF',{'id':user.id}) }}\"><i class=\"fas fa-file-pdf\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>ID:</td>
                                <td class=\"font-medium text-dark-medium\">#{{ user.id }} </td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td class=\"font-medium text-dark-medium\">{{ user.firstName }} </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td class=\"font-medium text-dark-medium\">{{ user.lastName }} </td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class=\"font-medium text-dark-medium\">{{ user.gender }} </td>
                            </tr>
                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">{{ user.userType }} </td>
                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td class=\"font-medium text-dark-medium\">House #10, {{ user.address }}</td>
                            </tr>

                            <tr>
                                <td>Phone:</td>
                                <td class=\"font-medium text-dark-medium\">+216 {{ user.phone }} </td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class=\"font-medium text-dark-medium\">{{ user.email }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class=\"footer-wrap-layout1\">
        <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
    </footer>
</div>
</div>
{% endblock %}
", "@Admin\\Account\\UserDetails.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Account\\UserDetails.html.twig");
    }
}
