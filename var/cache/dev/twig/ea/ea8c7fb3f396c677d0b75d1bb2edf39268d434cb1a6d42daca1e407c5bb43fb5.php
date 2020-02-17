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

/* @Teacher/Teacher/Front/showTeacherDetailsF.html.twig */
class __TwigTemplate_64660f5e24777034f3fd4851f45773f064c429a6f877dd1fc302d6c38236d0ff extends \Twig\Template
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
        return "@Teacher/Teacher/Front/interfaceTeacher.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/Front/showTeacherDetailsF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/Front/showTeacherDetailsF.html.twig"));

        $this->parent = $this->loadTemplate("@Teacher/Teacher/Front/interfaceTeacher.html.twig", "@Teacher/Teacher/Front/showTeacherDetailsF.html.twig", 1);
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
                         <h3>About Teacher</h3>
                     </div>

                 </div>

                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/teacher.jpg"), "html", null, true);
        echo "\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "lastName", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Members:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Activity: </td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "email", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Budget:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "gender", []), "html", null, true);
        echo "</td>
                                 </tr>

                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "phone", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "address", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "birthDay", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["var"] ?? $this->getContext($context, "var")), "joiningDate", []), "html", null, true);
        echo "</td>
                                 </tr>
                                 </tbody>

                             </table>
                             <hr>
                             <div class=\"item-content\">
                                 <div class=\"header-inline item-header\">
                                     <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>                                    <div class=\"header-elements\">
                                         <ul>
                                             <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateDiploma", ["id" => $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "id", [])]), "html", null, true);
        echo "\"><i class=\"far fa-edit\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <table class=\"table text-nowrap\">



                                     <tbody>

                                     <tr>
                                         <td>Entitled:</td>
                                         <td class=\"font-medium text-dark-medium\">";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "intitule", []), "html", null, true);
        echo "</td>
                                     </tr>
                                     <tr>
                                         <td>Institute:</td>
                                         <td class=\"font-medium text-dark-medium\">";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "ecole", []), "html", null, true);
        echo "</td>
                                     </tr>
                                     <tr>
                                         <td>Speciality:</td>
                                         <td class=\"font-medium text-dark-medium\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "specialite", []), "html", null, true);
        echo "</td>
                                     </tr>
                                     <tr>
                                         <td>Level:</td>
                                         <td class=\"font-medium text-dark-medium\">";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dip"] ?? $this->getContext($context, "dip")), "niveau", []), "html", null, true);
        echo "</td>
                                     </tr>

                                     <tr>
                                         <td>Date obtained:</td>
                                         <td class=\"font-medium text-dark-medium\">";
        // line 139
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
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Plugins js -->
     <script src=\" ";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
     <!-- Popper js -->
     <script src=\" ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Bootstrap js -->
     <script src=\" ";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Counterup Js -->
     <script src=\" ";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Moment Js -->
     <script  src=\" ";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" ";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Select 2 Js -->
     <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Date Picker Js -->
     <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Full Calender Js -->
     <script src=\" ";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Chart Js -->
     <script  src=\" ";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>

     <!-- Custom Js -->
     <script  src=\" ";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo " \" ></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher/Teacher/Front/showTeacherDetailsF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 206,  379 => 203,  374 => 201,  369 => 199,  364 => 197,  359 => 195,  354 => 193,  349 => 191,  344 => 189,  339 => 187,  334 => 185,  329 => 183,  324 => 181,  279 => 139,  271 => 134,  264 => 130,  257 => 126,  250 => 122,  233 => 108,  220 => 98,  213 => 94,  206 => 90,  199 => 86,  191 => 81,  184 => 77,  177 => 73,  170 => 69,  149 => 53,  142 => 49,  117 => 27,  112 => 25,  107 => 23,  102 => 21,  97 => 19,  92 => 17,  87 => 15,  82 => 13,  77 => 11,  72 => 9,  66 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Teacher/Teacher/Front/interfaceTeacher.html.twig'%}

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
                         <h3>About Teacher</h3>
                     </div>

                 </div>

                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"{{ asset('img/figure/teacher.jpg') }}\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">{{  var.firstName }} {{  var.lastName }}</h3>
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
                                     <td class=\"font-medium text-dark-medium\">{{ var.firstName }}</td>
                                 </tr>
                                 <tr>
                                     <td>Members:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.lastName }}</td>
                                 </tr>
                                 <tr>
                                     <td>Activity: </td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.email }}</td>
                                 </tr>
                                 <tr>
                                     <td>Budget:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.gender }}</td>
                                 </tr>

                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.phone}}</td>
                                 </tr>
                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.address }}</td>
                                 </tr>
                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.birthDay }}</td>
                                 </tr>
                                 <tr>
                                     <td>Creation Date:</td>
                                     <td class=\"font-medium text-dark-medium\">{{ var.joiningDate }}</td>
                                 </tr>
                                 </tbody>

                             </table>
                             <hr>
                             <div class=\"item-content\">
                                 <div class=\"header-inline item-header\">
                                     <h3 class=\"text-dark-medium font-medium\">Diploma Informations</h3>                                    <div class=\"header-elements\">
                                         <ul>
                                             <li><a href=\"{{ path('updateDiploma',{'id':dip.id }) }}\"><i class=\"far fa-edit\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-print\"></i></a></li>
                                             <li><a href=\"#\"><i class=\"fas fa-download\"></i></a></li>
                                         </ul>
                                     </div>
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
 {% endblock %}", "@Teacher/Teacher/Front/showTeacherDetailsF.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\Front\\showTeacherDetailsF.html.twig");
    }
}
