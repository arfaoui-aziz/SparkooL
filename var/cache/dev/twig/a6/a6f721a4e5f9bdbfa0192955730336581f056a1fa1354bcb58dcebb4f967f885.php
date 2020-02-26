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
class __TwigTemplate_6ff18d909e408aee2a3e946cb93b2ed01feb9415a6207bfcec247cbd26cf1efd extends \Twig\Template
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


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-attendence.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>SparkIT Dashboard</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" ";
        // line 16
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png")), "html", null, true);
        echo " \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 18
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css")), "html", null, true);
        echo "\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 20
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css")), "html", null, true);
        echo " \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 22
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo " \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 24
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css")), "html", null, true);
        echo " \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 26
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css")), "html", null, true);
        echo " \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 28
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css")), "html", null, true);
        echo " \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 30
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css")), "html", null, true);
        echo " \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css")), "html", null, true);
        echo " \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css")), "html", null, true);
        echo "\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 36
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css")), "html", null, true);
        echo " \" >
    <!-- Modernize js -->
    <script href=\" ";
        // line 38
        echo twig_escape_filter($this->env, (($context["base_dir"] ?? $this->getContext($context, "base_dir")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-3.6.0.min.js")), "html", null, true);
        echo " \"></script>
</head>

<body>
<div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>Teacher Attendance Sheet</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Teacher Table Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3><a style=\"color:black\" href=\"#\" >";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", []), "html", null, true);
        echo "'s Absences</a></h3>
                </div>

            </div>

            <div class=\"table-responsive\">
                <table class=\"table display data-table text-nowrap\">
                    <thead>
                    <tr>

                        <th>Day</th>
                        <th>Debut Hour</th>
                        <th>End Hour</th>


                        <th></th>
                    </tr>
                    </thead>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 73
            echo "                        <tbody>

                        <tr>

                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "jour", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heureDeb", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heureFin", []), "html", null, true);
            echo "</td>




                        </tr>
                        </tbody>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </table>
            </div>
        </div>
    </div>


    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3><a style=\"color:black\" href=\"#\" >";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", []), "html", null, true);
        echo "'s Delay</a></h3>
                </div>

            </div>

            <div class=\"table-responsive\">
                <table class=\"table display data-table text-nowrap\">
                    <thead>
                    <tr>

                        <th>Day</th>
                        <th>Duration</th>



                        <th></th>
                    </tr>
                    </thead>
                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var2"] ?? $this->getContext($context, "var2")));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 116
            echo "                        <tbody>

                        <tr>

                            <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "jour", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "duree", []), "html", null, true);
            echo "</td>





                        </tr>
                        </tbody>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </table>
            </div>
        </div>
    </div>
</div>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-attendence.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:58 GMT -->
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
        return array (  246 => 130,  231 => 121,  227 => 120,  221 => 116,  217 => 115,  194 => 97,  182 => 87,  168 => 79,  164 => 78,  160 => 77,  154 => 73,  150 => 72,  127 => 54,  108 => 38,  103 => 36,  98 => 34,  93 => 32,  88 => 30,  83 => 28,  78 => 26,  73 => 24,  68 => 22,  63 => 20,  58 => 18,  53 => 16,  36 => 1,);
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


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-attendence.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
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
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>Teacher Attendance Sheet</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Teacher Table Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3><a style=\"color:black\" href=\"#\" >{{ user.firstName }} {{user.lastName}}'s Absences</a></h3>
                </div>

            </div>

            <div class=\"table-responsive\">
                <table class=\"table display data-table text-nowrap\">
                    <thead>
                    <tr>

                        <th>Day</th>
                        <th>Debut Hour</th>
                        <th>End Hour</th>


                        <th></th>
                    </tr>
                    </thead>
                    {% for i in var %}
                        <tbody>

                        <tr>

                            <td>{{ i.jour }}</td>
                            <td>{{ i.heureDeb }}</td>
                            <td>{{ i.heureFin }}</td>




                        </tr>
                        </tbody>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>


    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3><a style=\"color:black\" href=\"#\" >{{ user.firstName }} {{user.lastName}}'s Delay</a></h3>
                </div>

            </div>

            <div class=\"table-responsive\">
                <table class=\"table display data-table text-nowrap\">
                    <thead>
                    <tr>

                        <th>Day</th>
                        <th>Duration</th>



                        <th></th>
                    </tr>
                    </thead>
                    {% for j in var2 %}
                        <tbody>

                        <tr>

                            <td>{{ j.jour }}</td>
                            <td>{{ j.duree }}</td>





                        </tr>
                        </tbody>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
</div>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-attendence.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:58 GMT -->
</html>", "@Teacher\\Teacher\\PDF.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\PDF.html.twig");
    }
}
