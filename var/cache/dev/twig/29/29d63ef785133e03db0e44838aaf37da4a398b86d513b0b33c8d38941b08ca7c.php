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

/* @Sonia/frontClub/afficherClubDetail.html.twig */
class __TwigTemplate_f28a44041a2f74a00fd7ad527e7f771298a4a02781db28f6db1176903e0b93a1 extends \Twig\Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/frontClub/afficherClubDetail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/frontClub/afficherClubDetail.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Sonia/frontClub/afficherClubDetail.html.twig", 1);
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
        echo "     <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo " \">
     <!-- Normalize CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">

     <!-- Main CSS -->
     <link rel=\"stylesheet\"  href=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo " \">
     <!-- Bootstrap CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " \" >
     <!-- Fontawesome CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css"), "html", null, true);
        echo " \">
     <!-- Flaticon CSS -->
     <link rel=\"stylesheet\"  href=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css"), "html", null, true);
        echo " \" >
     <!-- Full Calender CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo " \">
     <!-- Animate CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo " \" >
     <!-- Select 2 CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css"), "html", null, true);
        echo " \">
     <!-- Date Picker CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css"), "html", null, true);
        echo "\">
     <!-- Custom CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo " \" >
     <!-- Modernize js -->
     <script href=\" ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-3.6.0.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Breadcubs Area End Here -->
     <!-- Student Table Area Start Here -->

     <div class=\"card-body\">

         <!-- event Table Area Start Here -->

         <div class=\"card height-auto\">
             <div class=\"card-body\">

                 <div class=\"heading-layout1\">
                     <div class=\"item-title\">
                         <h3>About The Club</h3>
                     </div>

                 </div>

                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/youth.png"), "html", null, true);
        echo "\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "nomClub", []), "html", null, true);
        echo "</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                     <li><a href=\"#\"><i class=\"fas fa-envelope-open-text\"></i></a></li>
                                 </ul>
                             </div>
                         </div>

                         <div class=\"info-table table-responsive\">
                             <table class=\"table text-nowrap\">

                                 <tbody>

                                 <tr>
                                     <td>Name:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "nomClub", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Members:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "members", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Activity: </td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "activity", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Budget:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "budget", []), "html", null, true);
        echo "</td>
                                 </tr>

                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "dateCreation", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 </tbody>

                             </table>
                         </div>

                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 94
            echo "                    ";
            if ((($this->getAttribute($context["r"], "user_id", []) == ($context["idUser"] ?? $this->getContext($context, "idUser"))) && ($this->getAttribute($context["r"], "club_id", []) == $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "idClub", [])))) {
                // line 95
                echo "
                        ";
                // line 96
                $context["test"] = 1;
                // line 97
                echo "
                    ";
            }
            // line 99
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                         ";
        // line 101
        if ((($context["test"] ?? $this->getContext($context, "test")) == 0)) {
            // line 102
            echo "
                            <span  class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<a  href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participateClub", ["id" => $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "idClub", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary text-color-light text-2 rounded-0 py-3 px-4\" type=\"submit\"><strong>Do An Interview</strong></a>

                             </span>
                          ";
        }
        // line 108
        echo "
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
     </div>

     <!-- ends Here -->



     <section class=\"content-header\">
         <div class=\"container\">
             <div class=\"row\">



             </div>
         </div>
     </section>
     <!-- Student Table Area End Here -->

     </div>
     </div>
     <!-- Page Area End Here -->
     <script src=\" ";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Plugins js -->
     <script src=\" ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
     <!-- Popper js -->
     <script src=\" ";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Bootstrap js -->
     <script src=\" ";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Counterup Js -->
     <script src=\" ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Moment Js -->
     <script  src=\" ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" ";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" ";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Select 2 Js -->
     <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Date Picker Js -->
     <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Full Calender Js -->
     <script src=\" ";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Chart Js -->
     <script  src=\" ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>

     <!-- Custom Js -->
     <script  src=\" ";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo " \" ></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Sonia/frontClub/afficherClubDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 161,  330 => 158,  325 => 156,  320 => 154,  315 => 152,  310 => 150,  305 => 148,  300 => 146,  295 => 144,  290 => 142,  285 => 140,  280 => 138,  275 => 136,  245 => 108,  238 => 104,  234 => 102,  232 => 101,  229 => 100,  223 => 99,  219 => 97,  217 => 96,  214 => 95,  211 => 94,  207 => 93,  197 => 86,  189 => 81,  182 => 77,  175 => 73,  168 => 69,  149 => 53,  142 => 49,  117 => 27,  112 => 25,  107 => 23,  102 => 21,  97 => 19,  92 => 17,  87 => 15,  82 => 13,  77 => 11,  72 => 9,  66 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig'%}

 {% block body %}
     <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" {{ asset('img/favicon.png') }} \">
     <!-- Normalize CSS -->
     <link rel=\"stylesheet\" href=\" {{ asset('css/normalize.css') }}\">

     <!-- Main CSS -->
     <link rel=\"stylesheet\"  href=\" {{ asset('css/main.css') }} \">
     <!-- Bootstrap CSS -->
     <link rel=\"stylesheet\" href=\" {{ asset('css/bootstrap.min.css') }} \" >
     <!-- Fontawesome CSS -->
     <link rel=\"stylesheet\" href=\" {{ asset('css/all.min.css') }} \">
     <!-- Flaticon CSS -->
     <link rel=\"stylesheet\"  href=\" {{ asset('fonts/flaticon.css') }} \" >
     <!-- Full Calender CSS -->
     <link rel=\"stylesheet\" href=\" {{ asset('css/fullcalendar.min.css') }} \">
     <!-- Animate CSS -->
     <link rel=\"stylesheet\" href=\" {{ asset('css/animate.min.css') }} \" >
     <!-- Select 2 CSS -->
     <link rel=\"stylesheet\" href=\"{{ asset('css/select2.min.css') }} \">
     <!-- Date Picker CSS -->
     <link rel=\"stylesheet\" href=\"{{  asset('css/datepicker.min.css') }}\">
     <!-- Custom CSS -->
     <link rel=\"stylesheet\" href=\" {{ asset('style.css') }} \" >
     <!-- Modernize js -->
     <script href=\" {{ asset('js/modernizr-3.6.0.min.js') }} \"></script>
     <!-- Breadcubs Area End Here -->
     <!-- Student Table Area Start Here -->

     <div class=\"card-body\">

         <!-- event Table Area Start Here -->

         <div class=\"card height-auto\">
             <div class=\"card-body\">

                 <div class=\"heading-layout1\">
                     <div class=\"item-title\">
                         <h3>About The Club</h3>
                     </div>

                 </div>

                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"{{ asset('img/figure/youth.png') }}\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">{{  var.nomClub }}</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                     <li><a href=\"#\"><i class=\"fas fa-envelope-open-text\"></i></a></li>
                                 </ul>
                             </div>
                         </div>

                         <div class=\"info-table table-responsive\">
                             <table class=\"table text-nowrap\">

                                 <tbody>

                                 <tr>
                                     <td>Name:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.nomClub }}</td>
                                 </tr>
                                 <tr>
                                     <td>Members:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.members }}</td>
                                 </tr>
                                 <tr>
                                     <td>Activity: </td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.activity}}</td>
                                 </tr>
                                 <tr>
                                     <td>Budget:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.budget}}</td>
                                 </tr>

                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.dateCreation}}</td>
                                 </tr>
                                 </tbody>

                             </table>
                         </div>

                {%  for r in results %}
                    {% if  r.user_id == idUser and  r.club_id == var.idClub  %}

                        {% set test=1  %}

                    {% endif %}
                {% endfor %}

                         {% if test ==0 %}

                            <span  class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<a  href=\"{{ path('participateClub',{'id':var.idClub }) }}\" class=\"btn btn-primary text-color-light text-2 rounded-0 py-3 px-4\" type=\"submit\"><strong>Do An Interview</strong></a>

                             </span>
                          {% endif %}

                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
     </div>

     <!-- ends Here -->



     <section class=\"content-header\">
         <div class=\"container\">
             <div class=\"row\">



             </div>
         </div>
     </section>
     <!-- Student Table Area End Here -->

     </div>
     </div>
     <!-- Page Area End Here -->
     <script src=\" {{ asset('js/jquery-3.3.1.min.js') }} \" ></script>
     <!-- Plugins js -->
     <script src=\" {{ asset('js/plugins.js') }} \" ></script>
     <!-- Popper js -->
     <script src=\" {{ asset('js/popper.min.js') }} \"></script>
     <!-- Bootstrap js -->
     <script src=\" {{ asset('js/bootstrap.min.js') }} \" ></script>
     <!-- Counterup Js -->
     <script src=\" {{ asset('js/jquery.counterup.min.js') }} \" ></script>
     <!-- Moment Js -->
     <script  src=\" {{ asset('js/moment.min.js') }} \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" {{ asset('js/jquery.scrollUp.min.js') }} \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" {{ asset('js/jquery.waypoints.min.js') }} \" ></script>
     <!-- Select 2 Js -->
     <script src=\"{{ asset('js/select2.min.js') }}\"></script>
     <!-- Date Picker Js -->
     <script src=\"{{ asset('js/datepicker.min.js') }}\"></script>
     <!-- Full Calender Js -->
     <script src=\" {{ asset('js/fullcalendar.min.js') }} \"></script>
     <!-- Chart Js -->
     <script  src=\" {{ asset('js/Chart.min.js') }} \" ></script>

     <!-- Custom Js -->
     <script  src=\" {{ asset('js/main.js') }} \" ></script>
 {% endblock %}
", "@Sonia/frontClub/afficherClubDetail.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\frontClub\\afficherClubDetail.html.twig");
    }
}
