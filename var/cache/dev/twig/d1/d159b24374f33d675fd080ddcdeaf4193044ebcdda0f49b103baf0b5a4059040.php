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

/* @Sonia/frontClub/afficherclubfrontRate.html.twig */
class __TwigTemplate_2368b5b9b09e9432e517a260513dcbcc8179112afe59e770a90fde84e276dbed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/frontClub/afficherclubfrontRate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/frontClub/afficherclubfrontRate.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Sonia/frontClub/afficherclubfrontRate.html.twig", 1);
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 52
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rating"] ?? $this->getContext($context, "rating")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 53
                echo "         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/youth.png"), "html", null, true);
                echo "\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomClub", []), "html", null, true);
                echo "</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"";
                // line 68
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
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomClub", []), "html", null, true);
                echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Members:</td>
                                     <td class=\"font-medium text-dark-medium\">";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "members", []), "html", null, true);
                echo "</td>
                                 </tr>

                                 <tr>
                                 </tr>

                                 <tr>

                                 </tr>
                                 <tr>


                                     <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                                     <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
                                     <style>
                                         .btn-grey{
                                             background-color:#D8D8D8;
                                             color:#FFF;
                                         }
                                         .rating-block{
                                             background-color:#FAFAFA;
                                             border:1px solid #EFEFEF;
                                             padding:15px 15px 20px 15px;
                                             border-radius:3px;
                                         }
                                         .bold{
                                             font-weight:700;
                                         }
                                         .padding-bottom-7{
                                             padding-bottom:7px;
                                         }

                                         .review-block{
                                             background-color:#FAFAFA;
                                             border:1px solid #EFEFEF;
                                             padding:15px;
                                             border-radius:3px;
                                             margin-bottom:15px;
                                         }
                                         .review-block-name{
                                             font-size:12px;
                                             margin:10px 0;
                                         }
                                         .review-block-date{
                                             font-size:12px;
                                         }
                                         .review-block-rate{
                                             font-size:13px;
                                             margin-bottom:15px;
                                         }
                                         .review-block-title{
                                             font-size:15px;
                                             font-weight:700;
                                             margin-bottom:10px;
                                         }
                                         .review-block-description{
                                             font-size:13px;
                                         }
                                         .average {
                                             background-color:#388e3c;
                                             line-height: normal;
                                             display: inline-block;
                                             color: #fff;
                                             padding: 2px 4px 2px 6px;
                                             border-radius: 3px;
                                             font-weight: 500;
                                             font-size: 12px;
                                             vertical-align: middle;
                                         }
                                         .rating-reviews {
                                             padding-left: 8px;
                                             font-weight: 500;
                                             color: #878787;
                                         }
                                     </style>


                                     ";
                // line 160
                if ((($this->getAttribute($context["r"], "idUser", []) != ($context["idu"] ?? $this->getContext($context, "idu"))) && ($this->getAttribute($context["r"], "idClub", []) != ($context["idc"] ?? $this->getContext($context, "idc"))))) {
                    // line 161
                    echo "
                                         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
                                         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
                                         <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

                                         <div class=\"row\" style=\"margin-left: 50px;\">
                                             <div class=\"col-sm-12\">

                                                 <form method=\"POST\">
                                                     <div class=\"form-group\">

                                                         <a href=\" ";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Rating", ["id" => $this->getAttribute($context["ff"], "idClub", []), "star" => "1"]), "html", null, true);
                    echo "\" >  <button type=\"button\" class=\"btn btn-warning btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"";
                    // line 175
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Rating", ["id" => $this->getAttribute($context["ff"], "idClub", []), "star" => "2"]), "html", null, true);
                    echo "\" >   <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"";
                    // line 178
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Rating", ["id" => $this->getAttribute($context["ff"], "idClub", []), "star" => "3"]), "html", null, true);
                    echo "\" >  <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"";
                    // line 181
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Rating", ["id" => $this->getAttribute($context["ff"], "idClub", []), "star" => "4"]), "html", null, true);
                    echo "\" > <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"";
                    // line 184
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Rating", ["id" => $this->getAttribute($context["ff"], "idClub", []), "star" => "5"]), "html", null, true);
                    echo "\" > <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <input type=\"hidden\"  class=\"form-control\" id=\"rating\" name=\"rating\" value=\"1\">
                                                     </div>


                                                 </form>

                                             </div>
                                         </div>

                                     ";
                }
                // line 197
                echo "
                                 </tr>

                                 </tbody>

                             </table>
                             <th> ";
                // line 203
                echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getTwitterButton();
                echo "</th>
                             <th>";
                // line 204
                echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getFacebookLikeButton();
                echo "</th>
                             <th>    ";
                // line 205
                echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getLinkedinButton();
                echo "</th>
                             <th>   ";
                // line 206
                echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getGoogleplusButton();
                echo "</th>
                             </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
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





     <script>

         \$( \".rateButton\" ).click(function() {
             if(\$(this).hasClass('btn-grey')) {
                 \$(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
                 \$(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
                 \$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
                 \$(\"#rating\").val(\$('.star-selected').length);



             } else {
                 \$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
             }


         });
     </script>





     <!-- Page Area End Here -->
     <script src=\" ";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Plugins js -->
     <script src=\" ";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
     <!-- Popper js -->
     <script src=\" ";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Bootstrap js -->
     <script src=\" ";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Counterup Js -->
     <script src=\" ";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Moment Js -->
     <script  src=\" ";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" ";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" ";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Select 2 Js -->
     <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Date Picker Js -->
     <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Full Calender Js -->
     <script src=\" ";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Chart Js -->
     <script  src=\" ";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>

     <!-- Custom Js -->
     <script  src=\" ";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo " \" ></script>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Sonia/frontClub/afficherclubfrontRate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 289,  492 => 286,  487 => 284,  482 => 282,  477 => 280,  472 => 278,  467 => 276,  462 => 274,  457 => 272,  452 => 270,  447 => 268,  442 => 266,  437 => 264,  390 => 219,  384 => 218,  366 => 206,  362 => 205,  358 => 204,  354 => 203,  346 => 197,  330 => 184,  324 => 181,  318 => 178,  312 => 175,  306 => 172,  293 => 161,  291 => 160,  211 => 83,  204 => 79,  190 => 68,  184 => 65,  177 => 61,  167 => 53,  162 => 52,  158 => 51,  150 => 45,  140 => 41,  137 => 40,  133 => 39,  119 => 28,  114 => 26,  109 => 24,  104 => 22,  99 => 20,  94 => 18,  89 => 16,  84 => 14,  79 => 12,  74 => 10,  68 => 7,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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
         {% for r in rating %}
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

                                 <tr>

                                 </tr>
                                 <tr>


                                     <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                                     <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
                                     <style>
                                         .btn-grey{
                                             background-color:#D8D8D8;
                                             color:#FFF;
                                         }
                                         .rating-block{
                                             background-color:#FAFAFA;
                                             border:1px solid #EFEFEF;
                                             padding:15px 15px 20px 15px;
                                             border-radius:3px;
                                         }
                                         .bold{
                                             font-weight:700;
                                         }
                                         .padding-bottom-7{
                                             padding-bottom:7px;
                                         }

                                         .review-block{
                                             background-color:#FAFAFA;
                                             border:1px solid #EFEFEF;
                                             padding:15px;
                                             border-radius:3px;
                                             margin-bottom:15px;
                                         }
                                         .review-block-name{
                                             font-size:12px;
                                             margin:10px 0;
                                         }
                                         .review-block-date{
                                             font-size:12px;
                                         }
                                         .review-block-rate{
                                             font-size:13px;
                                             margin-bottom:15px;
                                         }
                                         .review-block-title{
                                             font-size:15px;
                                             font-weight:700;
                                             margin-bottom:10px;
                                         }
                                         .review-block-description{
                                             font-size:13px;
                                         }
                                         .average {
                                             background-color:#388e3c;
                                             line-height: normal;
                                             display: inline-block;
                                             color: #fff;
                                             padding: 2px 4px 2px 6px;
                                             border-radius: 3px;
                                             font-weight: 500;
                                             font-size: 12px;
                                             vertical-align: middle;
                                         }
                                         .rating-reviews {
                                             padding-left: 8px;
                                             font-weight: 500;
                                             color: #878787;
                                         }
                                     </style>


                                     {% if r.idUser != idu  and r.idClub!=idc  %}

                                         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
                                         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
                                         <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

                                         <div class=\"row\" style=\"margin-left: 50px;\">
                                             <div class=\"col-sm-12\">

                                                 <form method=\"POST\">
                                                     <div class=\"form-group\">

                                                         <a href=\" {{ path('Rating', {'id':ff.idClub , 'star':'1'}) }}\" >  <button type=\"button\" class=\"btn btn-warning btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"{{ path('Rating', {'id':ff.idClub , 'star':'2'}) }}\" >   <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"{{ path('Rating', {'id':ff.idClub , 'star':'3'}) }}\" >  <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"{{ path('Rating', {'id':ff.idClub , 'star':'4'}) }}\" > <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <a href=\"{{ path('Rating', {'id':ff.idClub , 'star':'5'}) }}\" > <button type=\"button\" class=\"btn btn-default btn-grey btn-sm rateButton\" aria-label=\"Left Align\">
                                                                 <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                             </button> </a>
                                                         <input type=\"hidden\"  class=\"form-control\" id=\"rating\" name=\"rating\" value=\"1\">
                                                     </div>


                                                 </form>

                                             </div>
                                         </div>

                                     {% endif %}

                                 </tr>

                                 </tbody>

                             </table>
                             <th> {{ twitterButton() }}</th>
                             <th>{{ facebookButton() }}</th>
                             <th>    {{ linkedinButton() }}</th>
                             <th>   {{ googleplusButton() }}</th>
                             </tr>
                         </div>

                     </div>
                 </div>
             </div>
         </div>

     </div>
     </div>
     {% endfor %}
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





     <script>

         \$( \".rateButton\" ).click(function() {
             if(\$(this).hasClass('btn-grey')) {
                 \$(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
                 \$(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
                 \$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
                 \$(\"#rating\").val(\$('.star-selected').length);



             } else {
                 \$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
             }


         });
     </script>





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


 {% endblock %}", "@Sonia/frontClub/afficherclubfrontRate.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\frontClub\\afficherclubfrontRate.html.twig");
    }
}
