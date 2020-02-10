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

/* @Sonia/front/affichereventfront.html.twig */
class __TwigTemplate_611c0020354a480586b148a22c3d204e679d4171c277bce3d756f259f8ba872f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/front/affichereventfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/front/affichereventfront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Sonia/front/affichereventfront.html.twig", 1);
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
                 <div class=\"heading-layout1\">
                     <div class=\"item-title\">
                         <h2 class=\"text-black h2 t600 mb-2\">All Events Data</h2>
                     </div>

                 </div>


                 <form class=\"mg-b-20\">
                     <div class=\"row gutters-8\">
                         <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Roll ...\" class=\"form-control\">
                         </div>
                         <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                         </div>
                         <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Class ...\" class=\"form-control\">
                         </div>
                         <div class=\"header-buttons d-none d-sm-inline-block\">
                             <a href=\"#slider\" data-scrollto=\"#slider\" data-offset=\"-80\" class=\"button button-rounded button-white button-light button-small m-0\">Search</a>
                         </div>
                     </div>
                 </form>


                 <!-- event Table Area Start Here -->
                 ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 60
            echo "                 <div class=\"card height-auto\">
                     <div class=\"card-body\">

                         <div class=\"heading-layout1\">
                             <div class=\"item-title\">
                                 <h3>About The Event</h3>
                             </div>

                         </div>

                         <div class=\"single-info-details\">

                             <div class=\"item-img\">

                                 <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/event.png"), "html", null, true);
            echo "\" alt=\"teacher\">
                             </div>
                             <div class=\"item-content\">
                                 <div class=\"header-inline item-header\">
                                     <h3 class=\"text-dark-medium font-medium\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</h3>
                                     <div class=\"header-elements\">
                                         <ul>
                                             <li><a href=\"#\"><i class=\"far fa-edit\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                                 <div class=\"info-table table-responsive\">
                                     <table class=\"table text-nowrap\">

                                         <tbody>

                                         <tr>
                                             <td>Name:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Type:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "typeEvent", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Description: </td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "description", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Date:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "dateEvent", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Place:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "placeEvent", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Participants:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nbParticipants", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Theme:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "theme", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Destination:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "destination", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Award</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "award", []), "html", null, true);
            echo "</td>
                                         </tr>
                                         <tr>
                                             <td>Budget:</td>
                                             <td class=\"font-medium text-dark-medium\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "budget", []), "html", null, true);
            echo "</td>
                                         </tr>


                                     </table>



                                     </tbody>
                                 </div>
                                 <div class=\"item-title\">

                                 <div class=\"header-buttons d-none d-sm-inline-block\">
                                     <a href=\"#slider\" data-scrollto=\"#slider\" data-offset=\"-80\" class=\"button button-rounded button-white button-light button-small m-0\">Participate</a>
                                 </div> </div>
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
        // line 154
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
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Plugins js -->
     <script src=\" ";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
     <!-- Popper js -->
     <script src=\" ";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Bootstrap js -->
     <script src=\" ";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Counterup Js -->
     <script src=\" ";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Moment Js -->
     <script  src=\" ";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" ";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Select 2 Js -->
     <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Date Picker Js -->
     <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Full Calender Js -->
     <script src=\" ";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Chart Js -->
     <script  src=\" ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>

     <!-- Custom Js -->
     <script  src=\" ";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo " \" ></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Sonia/front/affichereventfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 197,  366 => 194,  361 => 192,  356 => 190,  351 => 188,  346 => 186,  341 => 184,  336 => 182,  331 => 180,  326 => 178,  321 => 176,  316 => 174,  311 => 172,  291 => 154,  262 => 131,  255 => 127,  248 => 123,  241 => 119,  234 => 115,  227 => 111,  220 => 107,  213 => 103,  206 => 99,  199 => 95,  179 => 78,  172 => 74,  156 => 60,  152 => 59,  117 => 27,  112 => 25,  107 => 23,  102 => 21,  97 => 19,  92 => 17,  87 => 15,  82 => 13,  77 => 11,  72 => 9,  66 => 6,  60 => 4,  51 => 3,  29 => 1,);
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
                         <h2 class=\"text-black h2 t600 mb-2\">All Events Data</h2>
                     </div>

                 </div>


                 <form class=\"mg-b-20\">
                     <div class=\"row gutters-8\">
                         <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Roll ...\" class=\"form-control\">
                         </div>
                         <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
                         </div>
                         <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Class ...\" class=\"form-control\">
                         </div>
                         <div class=\"header-buttons d-none d-sm-inline-block\">
                             <a href=\"#slider\" data-scrollto=\"#slider\" data-offset=\"-80\" class=\"button button-rounded button-white button-light button-small m-0\">Search</a>
                         </div>
                     </div>
                 </form>


                 <!-- event Table Area Start Here -->
                 {% for ff in var %}
                 <div class=\"card height-auto\">
                     <div class=\"card-body\">

                         <div class=\"heading-layout1\">
                             <div class=\"item-title\">
                                 <h3>About The Event</h3>
                             </div>

                         </div>

                         <div class=\"single-info-details\">

                             <div class=\"item-img\">

                                 <img src=\"{{ asset('img/figure/event.png') }}\" alt=\"teacher\">
                             </div>
                             <div class=\"item-content\">
                                 <div class=\"header-inline item-header\">
                                     <h3 class=\"text-dark-medium font-medium\">{{  ff.nomEvent }}</h3>
                                     <div class=\"header-elements\">
                                         <ul>
                                             <li><a href=\"#\"><i class=\"far fa-edit\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                                 <div class=\"info-table table-responsive\">
                                     <table class=\"table text-nowrap\">

                                         <tbody>

                                         <tr>
                                             <td>Name:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.nomEvent }}</td>
                                         </tr>
                                         <tr>
                                             <td>Type:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.typeEvent }}</td>
                                         </tr>
                                         <tr>
                                             <td>Description: </td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.description}}</td>
                                         </tr>
                                         <tr>
                                             <td>Date:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.dateEvent}}</td>
                                         </tr>
                                         <tr>
                                             <td>Place:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.placeEvent}}</td>
                                         </tr>
                                         <tr>
                                             <td>Participants:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.nbParticipants}}</td>
                                         </tr>
                                         <tr>
                                             <td>Theme:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.theme}}</td>
                                         </tr>
                                         <tr>
                                             <td>Destination:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.destination}}</td>
                                         </tr>
                                         <tr>
                                             <td>Award</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.award}}</td>
                                         </tr>
                                         <tr>
                                             <td>Budget:</td>
                                             <td class=\"font-medium text-dark-medium\">{{ ff.budget}}</td>
                                         </tr>


                                     </table>



                                     </tbody>
                                 </div>
                                 <div class=\"item-title\">

                                 <div class=\"header-buttons d-none d-sm-inline-block\">
                                     <a href=\"#slider\" data-scrollto=\"#slider\" data-offset=\"-80\" class=\"button button-rounded button-white button-light button-small m-0\">Participate</a>
                                 </div> </div>
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
", "@Sonia/front/affichereventfront.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\front\\affichereventfront.html.twig");
    }
}
