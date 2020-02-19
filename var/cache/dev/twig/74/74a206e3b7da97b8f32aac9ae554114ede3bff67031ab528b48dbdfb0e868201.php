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

/* @Parent\Parent\PDF.html.twig */
class __TwigTemplate_c755b3c580dc137430eba669a178771cba542a05c8980877d7114ab7a25dfe6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent\\Parent\\PDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent\\Parent\\PDF.html.twig"));

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
        // line 12
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png")), "html", null, true);
        echo " \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 14
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css")), "html", null, true);
        echo "\">

    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 17
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css")), "html", null, true);
        echo " \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 19
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo " \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 21
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css")), "html", null, true);
        echo " \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 23
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css")), "html", null, true);
        echo " \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 25
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css")), "html", null, true);
        echo " \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 27
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css")), "html", null, true);
        echo " \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css")), "html", null, true);
        echo " \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css")), "html", null, true);
        echo "\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 33
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css")), "html", null, true);
        echo " \" >
    <!-- Modernize js -->
    <script href=\" ";
        // line 35
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-3.6.0.min.js")), "html", null, true);
        echo " \"></script>
</head>
<body>

<div class=\"dashboard-content-one\">

    <!-- Breadcubs Area End Here -->
    <!-- Student Details Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">

            <div class=\"single-info-details\">
                <div class=\"item-img\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/teacher.jpg")), "html", null, true);
        echo "\" alt=\"student\">
                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</h3>


                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>Name:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "email", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "gender", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "phone", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Adress:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "address", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Birth Day:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "birthDay", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Joining Date:</td>
                                <td class=\"font-medium text-dark-medium\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "joiningDate", []), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">Business</td>
                            </tr>
                            <tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Details Area End Here -->
    <footer class=\"footer-wrap-layout1\">
        <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
    </footer>
</div>

    </div>
</div>
<!-- Page Area End Here -->
<!-- jquery-->
<script src=\" ";
        // line 118
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js")), "html", null, true);
        echo " \" ></script>
<!-- Plugins js -->
<script src=\" ";
        // line 120
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js")), "html", null, true);
        echo " \" ></script>
<!-- Popper js -->
<script src=\" ";
        // line 122
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js")), "html", null, true);
        echo " \"></script>
<!-- Bootstrap js -->
<script src=\" ";
        // line 124
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js")), "html", null, true);
        echo " \" ></script>
<!-- Counterup Js -->
<script src=\" ";
        // line 126
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js")), "html", null, true);
        echo " \" ></script>
<!-- Moment Js -->
<script  src=\" ";
        // line 128
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js")), "html", null, true);
        echo " \" ></script>
<!-- Scroll Up Js -->
<script src=\" ";
        // line 130
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js")), "html", null, true);
        echo " \" ></script>
<!-- Waypoints Js -->
<script  src=\" ";
        // line 132
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js")), "html", null, true);
        echo " \" ></script>
<!-- Select 2 Js -->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js")), "html", null, true);
        echo "\"></script>
<!-- Date Picker Js -->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js")), "html", null, true);
        echo "\"></script>
<!-- Full Calender Js -->
<script src=\" ";
        // line 138
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js")), "html", null, true);
        echo " \"></script>
<!-- Chart Js -->
<script  src=\" ";
        // line 140
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js")), "html", null, true);
        echo " \" ></script>

<!-- Custom Js -->
<script  src=\" ";
        // line 143
        echo twig_escape_filter($this->env, ((isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js")), "html", null, true);
        echo " \" ></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Parent\\Parent\\PDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 143,  278 => 140,  273 => 138,  268 => 136,  263 => 134,  258 => 132,  253 => 130,  248 => 128,  243 => 126,  238 => 124,  233 => 122,  228 => 120,  223 => 118,  192 => 90,  185 => 86,  178 => 82,  171 => 78,  164 => 74,  157 => 70,  150 => 66,  143 => 62,  128 => 52,  121 => 48,  105 => 35,  100 => 33,  95 => 31,  90 => 29,  85 => 27,  80 => 25,  75 => 23,  70 => 21,  65 => 19,  60 => 17,  54 => 14,  49 => 12,  36 => 1,);
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

<div class=\"dashboard-content-one\">

    <!-- Breadcubs Area End Here -->
    <!-- Student Details Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">

            <div class=\"single-info-details\">
                <div class=\"item-img\">
                    <img src=\"{{ base_dir ~ asset('img/figure/teacher.jpg') }}\" alt=\"student\">
                </div>
                <div class=\"item-content\">
                    <div class=\"header-inline item-header\">
                        <h3 class=\"text-dark-medium font-medium\">{{ var.firstName }} {{ var.lastName }}</h3>


                    </div>

                    <div class=\"info-table table-responsive\">
                        <table class=\"table text-nowrap\">
                            <tbody>
                            <tr>
                                <td>Name:</td>
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

                            <tr>
                                <td>Occupation:</td>
                                <td class=\"font-medium text-dark-medium\">Business</td>
                            </tr>
                            <tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Details Area End Here -->
    <footer class=\"footer-wrap-layout1\">
        <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
    </footer>
</div>

    </div>
</div>
<!-- Page Area End Here -->
<!-- jquery-->
<script src=\" {{ base_dir ~ asset('js/jquery-3.3.1.min.js') }} \" ></script>
<!-- Plugins js -->
<script src=\" {{ base_dir ~ asset('js/plugins.js') }} \" ></script>
<!-- Popper js -->
<script src=\" {{ base_dir ~ asset('js/popper.min.js') }} \"></script>
<!-- Bootstrap js -->
<script src=\" {{ base_dir ~ asset('js/bootstrap.min.js') }} \" ></script>
<!-- Counterup Js -->
<script src=\" {{ base_dir ~ asset('js/jquery.counterup.min.js') }} \" ></script>
<!-- Moment Js -->
<script  src=\" {{ base_dir ~ asset('js/moment.min.js') }} \" ></script>
<!-- Scroll Up Js -->
<script src=\" {{ base_dir ~ asset('js/jquery.scrollUp.min.js') }} \" ></script>
<!-- Waypoints Js -->
<script  src=\" {{ base_dir ~ asset('js/jquery.waypoints.min.js') }} \" ></script>
<!-- Select 2 Js -->
<script src=\"{{ base_dir ~ asset('js/select2.min.js') }}\"></script>
<!-- Date Picker Js -->
<script src=\"{{ base_dir ~ asset('js/datepicker.min.js') }}\"></script>
<!-- Full Calender Js -->
<script src=\" {{ base_dir ~ asset('js/fullcalendar.min.js') }} \"></script>
<!-- Chart Js -->
<script  src=\" {{ base_dir ~ asset('js/Chart.min.js') }} \" ></script>

<!-- Custom Js -->
<script  src=\" {{ base_dir ~ asset('js/main.js') }} \" ></script>
</body>
</html>", "@Parent\\Parent\\PDF.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Parent\\PDF.html.twig");
    }
}
