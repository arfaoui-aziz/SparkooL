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

/* @Sonia/frontClub/afficherclubfront.html.twig */
class __TwigTemplate_736b2322777d2bb129af3eb65e392feecc00fa8c035af5fff0970ba569c072b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/frontClub/afficherclubfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/frontClub/afficherclubfront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Sonia/frontClub/afficherclubfront.html.twig", 1);
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
        echo "
     <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo " \">
     <!-- Normalize CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">

     <!-- Main CSS -->
     <link rel=\"stylesheet\"  href=\" ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo " \">
     <!-- Bootstrap CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " \" >
     <!-- Fontawesome CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css"), "html", null, true);
        echo " \">
     <!-- Flaticon CSS -->
     <link rel=\"stylesheet\"  href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css"), "html", null, true);
        echo " \" >
     <!-- Full Calender CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo " \">
     <!-- Animate CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo " \" >
     <!-- Select 2 CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css"), "html", null, true);
        echo " \">
     <!-- Date Picker CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css"), "html", null, true);
        echo "\">
     <!-- Custom CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo " \" >
     <!-- Modernize js -->
     <script href=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-3.6.0.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Breadcubs Area End Here -->
     <!-- Student Table Area Start Here -->

     <div class=\"card-body\">
         <div class=\"heading-layout1\">
             <div class=\"item-title\">
                 <h2 class=\"text-black h2 t600 mb-2\">All Clubs Data</h2>
             </div>

         </div>
         ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            echo "             <div class=\"alert alert-success\">
                 ";
            // line 41
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
             </div>

         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
         <!-- event Table Area Start Here -->
         ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 48
            echo "         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/youth.png"), "html", null, true);
            echo "\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomClub", []), "html", null, true);
            echo "</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherClubDetail", ["id" => $this->getAttribute($context["ff"], "idClub", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-search-plus\"></i></a></li>
                                 </ul>
                             </div>
                         </div>

                         <div class=\"info-table table-responsive\">
                             <table class=\"table text-nowrap\">
                                 <tbody>
                                 <tr>
                                     <td>Name:</td>
                                     <td class=\"font-medium text-dark-medium\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomClub", []), "html", null, true);
            echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Members:</td>
                                     <td class=\"font-medium text-dark-medium\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "members", []), "html", null, true);
            echo "</td>
                                 </tr>
                                 <tr>

                                 </tr>

                                 </tbody>

                             </table>
                         </div>

                     </div>
                 </div>
             </div>
         </div>

     </div>
     </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "     <!-- ends Here -->



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
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Plugins js -->
     <script src=\" ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
     <!-- Popper js -->
     <script src=\" ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Bootstrap js -->
     <script src=\" ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Counterup Js -->
     <script src=\" ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Moment Js -->
     <script  src=\" ";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Select 2 Js -->
     <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Date Picker Js -->
     <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Full Calender Js -->
     <script src=\" ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Chart Js -->
     <script  src=\" ";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>

     <!-- Custom Js -->
     <script  src=\" ";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo " \" ></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Sonia/frontClub/afficherclubfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 139,  301 => 136,  296 => 134,  291 => 132,  286 => 130,  281 => 128,  276 => 126,  271 => 124,  266 => 122,  261 => 120,  256 => 118,  251 => 116,  246 => 114,  226 => 96,  201 => 77,  194 => 73,  181 => 63,  175 => 60,  168 => 56,  158 => 48,  154 => 47,  150 => 45,  140 => 41,  137 => 40,  133 => 39,  119 => 28,  114 => 26,  109 => 24,  104 => 22,  99 => 20,  94 => 18,  89 => 16,  84 => 14,  79 => 12,  74 => 10,  68 => 7,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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
         <div class=\"heading-layout1\">
             <div class=\"item-title\">
                 <h2 class=\"text-black h2 t600 mb-2\">All Clubs Data</h2>
             </div>

         </div>
         {% for message in app.flashes('info') %}
             <div class=\"alert alert-success\">
                 {{ message }}
             </div>

         {% endfor %}

         <!-- event Table Area Start Here -->
         {% for ff in var %}
         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"{{ asset('img/figure/youth.png') }}\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">{{  ff.nomClub }}</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"{{ path('afficherClubDetail',{'id':ff.idClub }) }}\"><i class=\"fas fa-search-plus\"></i></a></li>
                                 </ul>
                             </div>
                         </div>

                         <div class=\"info-table table-responsive\">
                             <table class=\"table text-nowrap\">
                                 <tbody>
                                 <tr>
                                     <td>Name:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ ff.nomClub }}</td>
                                 </tr>
                                 <tr>
                                     <td>Members:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ ff.members }}</td>
                                 </tr>
                                 <tr>

                                 </tr>

                                 </tbody>

                             </table>
                         </div>

                     </div>
                 </div>
             </div>
         </div>

     </div>
     </div>
     {% endfor %}
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
", "@Sonia/frontClub/afficherclubfront.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\frontClub\\afficherclubfront.html.twig");
    }
}
