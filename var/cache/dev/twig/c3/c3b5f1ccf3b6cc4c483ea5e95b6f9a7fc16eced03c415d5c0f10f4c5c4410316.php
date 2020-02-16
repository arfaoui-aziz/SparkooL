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
class __TwigTemplate_1993dd3d5f012d6fc6134bbbc32ae4c115c45708f8eae22beb8c89ff8428cbfa extends \Twig\Template
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

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
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
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/parents.jpg"), "html", null, true);
        echo "\" alt=\"student\">
                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">Steven Jones</h3>
                        <div class=\"header-elements\">
                            <ul>
                                <li><a href=\"#\"><i class=\"far fa-edit\" ></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-file-pdf\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>ID:</td>
                                <td class=\"font-medium text-dark-medium\">#15059</td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class=\"font-medium text-dark-medium\">Male</td>
                            </tr>
                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">Business</td>
                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td class=\"font-medium text-dark-medium\">House #10, Road #6, Australia</td>
                            </tr>
                            <tr>
                                <td>Religion:</td>
                                <td class=\"font-medium text-dark-medium\">Islam</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class=\"font-medium text-dark-medium\">+ 88 98568888418</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class=\"font-medium text-dark-medium\">jessiarose@gmail.com</td>
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
        return array (  77 => 18,  60 => 3,  51 => 2,  29 => 1,);
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
                    <img src=\"{{asset('img/figure/parents.jpg')}}\" alt=\"student\">
                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">Steven Jones</h3>
                        <div class=\"header-elements\">
                            <ul>
                                <li><a href=\"#\"><i class=\"far fa-edit\" ></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-file-pdf\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>ID:</td>
                                <td class=\"font-medium text-dark-medium\">#15059</td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td class=\"font-medium text-dark-medium\">Steven Jones</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class=\"font-medium text-dark-medium\">Male</td>
                            </tr>
                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">Business</td>
                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td class=\"font-medium text-dark-medium\">House #10, Road #6, Australia</td>
                            </tr>
                            <tr>
                                <td>Religion:</td>
                                <td class=\"font-medium text-dark-medium\">Islam</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class=\"font-medium text-dark-medium\">+ 88 98568888418</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class=\"font-medium text-dark-medium\">jessiarose@gmail.com</td>
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
{% endblock %}", "@Admin\\Account\\UserDetails.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Account\\UserDetails.html.twig");
    }
}
