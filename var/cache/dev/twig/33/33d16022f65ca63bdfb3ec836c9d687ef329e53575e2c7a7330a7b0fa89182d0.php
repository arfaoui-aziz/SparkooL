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

/* @Teacher\Teacher\PDF.html.twig */
class __TwigTemplate_f85f27d937856dc84a77fd0cb563d4142a1d95724fa5e96ba0838c4343ad6ab3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\PDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\PDF.html.twig"));

        // line 1
        echo "<!doctype html>

<html class=\"no-js\" lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>SparkIT Dashboard</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" ";
        // line 14
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png")), "html", null, true);
        echo " \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 16
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css")), "html", null, true);
        echo "\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 18
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css")), "html", null, true);
        echo " \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 20
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo " \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 22
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css")), "html", null, true);
        echo " \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 24
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css")), "html", null, true);
        echo " \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 26
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css")), "html", null, true);
        echo " \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 28
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css")), "html", null, true);
        echo " \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css")), "html", null, true);
        echo " \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css")), "html", null, true);
        echo "\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 34
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css")), "html", null, true);
        echo " \" >
    <!-- Modernize js -->
    <script href=\" ";
        // line 36
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-3.6.0.min.js")), "html", null, true);
        echo " \"></script>

</head>
<body>
<!-- Preloader Start Here -->

<!-- Preloader End Here -->

<div class=\"card height-auto\">
    <div class=\"card-body\">
        <div class=\"heading-layout1\">
            <div class=\"item-title\">
                <h3>Teacher Informations</h3>
            </div>

        </div>
        <div class=\"single-info-details\">
            <div class=\"item-img\">
                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/teacher.jpg")), "html", null, true);
        echo "\" alt=\"teacher\">
            </div>
            <div class=\"item-content\">


                <div class=\"info-table table-responsive\">
                    <table class=\"table text-nowrap\">


                        <tbody>

                        <tr>
                            <td>First Name:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "email", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "gender", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "phone", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Adress:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "address", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Birth Day:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "birthDay", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Joining Date:</td>
                            <td class=\"font-medium text-dark-medium\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "joiningDate", []), "html", null, true);
        echo "</td>
                        </tr>





                        </tbody>


                    </table>

                    <!-- diplome -->
                    <hr>
                    <div class=\"item-content\">
                        <div class=\"header-inline item-header\">
                            <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>
                        </div>
                        <table class=\"table text-nowrap\">



                            <tbody>

                            <tr>
                                <td>Entitled:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "intitule", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Institute:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "ecole", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Speciality:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "specialite", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Level:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "niveau", []), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <td>Date obtained:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "dateObtentation", []), "html", null, true);
        echo "</td>
                            </tr>

                            </tbody>

                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher\\Teacher\\PDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 138,  242 => 133,  235 => 129,  228 => 125,  221 => 121,  192 => 95,  185 => 91,  178 => 87,  171 => 83,  164 => 79,  157 => 75,  150 => 71,  143 => 67,  127 => 54,  106 => 36,  101 => 34,  96 => 32,  91 => 30,  86 => 28,  81 => 26,  76 => 24,  71 => 22,  66 => 20,  61 => 18,  56 => 16,  51 => 14,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>

<html class=\"no-js\" lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>SparkIT Dashboard</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" {{ base_dir ~ asset('img/favicon.png') }} \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/normalize.css') }}\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" {{ base_dir ~ asset('css/main.css') }} \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/bootstrap.min.css') }} \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/all.min.css') }} \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" {{ base_dir ~ asset('fonts/flaticon.css') }} \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/fullcalendar.min.css') }} \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('css/animate.min.css') }} \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"{{ base_dir ~ asset('css/select2.min.css') }} \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"{{  base_dir ~ asset('css/datepicker.min.css') }}\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" {{ base_dir ~ asset('style.css') }} \" >
    <!-- Modernize js -->
    <script href=\" {{ base_dir ~ asset('js/modernizr-3.6.0.min.js') }} \"></script>

</head>
<body>
<!-- Preloader Start Here -->

<!-- Preloader End Here -->

<div class=\"card height-auto\">
    <div class=\"card-body\">
        <div class=\"heading-layout1\">
            <div class=\"item-title\">
                <h3>Teacher Informations</h3>
            </div>

        </div>
        <div class=\"single-info-details\">
            <div class=\"item-img\">
                <img src=\"{{ base_dir ~ asset('img/figure/teacher.jpg') }}\" alt=\"teacher\">
            </div>
            <div class=\"item-content\">


                <div class=\"info-table table-responsive\">
                    <table class=\"table text-nowrap\">


                        <tbody>

                        <tr>
                            <td>First Name:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.firstName }}</td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.lastName }}</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.email }}</td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.gender }}</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.phone }}</td>
                        </tr>
                        <tr>
                            <td>Adress:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.address }}</td>
                        </tr>
                        <tr>
                            <td>Birth Day:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.birthDay }}</td>
                        </tr>
                        <tr>
                            <td>Joining Date:</td>
                            <td class=\"font-medium text-dark-medium\">{{ var.joiningDate }}</td>
                        </tr>





                        </tbody>


                    </table>

                    <!-- diplome -->
                    <hr>
                    <div class=\"item-content\">
                        <div class=\"header-inline item-header\">
                            <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>
                        </div>
                        <table class=\"table text-nowrap\">



                            <tbody>

                            <tr>
                                <td>Entitled:</td>
                                <td class=\"font-medium text-dark-medium\">{{ dip.intitule }}</td>
                            </tr>
                            <tr>
                                <td>Institute:</td>
                                <td class=\"font-medium text-dark-medium\">{{ dip.ecole }}</td>
                            </tr>
                            <tr>
                                <td>Speciality:</td>
                                <td class=\"font-medium text-dark-medium\">{{ dip.specialite }}</td>
                            </tr>
                            <tr>
                                <td>Level:</td>
                                <td class=\"font-medium text-dark-medium\">{{ dip.niveau }}</td>
                            </tr>

                            <tr>
                                <td>Date obtained:</td>
                                <td class=\"font-medium text-dark-medium\">{{ dip.dateObtentation }}</td>
                            </tr>

                            </tbody>

                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>", "@Teacher\\Teacher\\PDF.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\PDF.html.twig");
    }
}
