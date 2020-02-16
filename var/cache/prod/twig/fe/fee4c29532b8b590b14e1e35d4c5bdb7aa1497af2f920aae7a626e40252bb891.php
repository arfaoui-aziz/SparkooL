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
class __TwigTemplate_4bf1afacd8d7c891183622c1cd702d45500e56a1f4567b6f70436f05d0919703 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'notiffront' => [$this, 'block_notiffront'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Sonia/front/affichereventfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
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





     ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SoniaBundle:Notification:display"));
        echo "


     <script
             src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
             integrity=\"sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=\"
             crossorigin=\"anonymous\"></script>

     <!--NOTIIIIFIIIICAAAAAAAAAATIOOOON----------------->
     ";
        // line 46
        echo "     ";
        echo twig_escape_filter($this->env, $this->env->getExtension('SBC\NotificationsBundle\Twig\NotificationsAssetsExtension')->renderAssets(), "html", null, true);
        echo "
     <script>
         /**
          * After calling notifications_assets() \"pusher\" is now available
          * and you can use it this way
          */

             // select the channel you want to listen to
         var channel = pusher.subscribe(\"notifications\");// notifications channel
         channel.bind(\"my-event\", function(data) {
             console.log('from notifications channel', data);
         });

         var channel = pusher.subscribe(\"messages\");// messages channel
         channel.bind(\"my-event\", function(data) {
             console.log('from messages channel', data);
             // data.forEach(function (item) {
             //   let
             // })
         });
     </script>

     <!--END NOOOOOOOOOTIIIIIIIIIIIIIF+-->








     ";
        // line 77
        $this->displayBlock('notiffront', $context, $blocks);
        // line 79
        echo "
     <div class=\"card-body\">
         <div class=\"heading-layout1\">
             <div class=\"item-title\">
                 <h2 class=\"text-black h2 t600 mb-2\">All Events Data</h2>
             </div>

         </div>

         ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", [0 => "info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            echo "             <div class=\"alert alert-success\">
                 ";
            // line 90
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
             </div>

         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "         <!-- event Table Area Start Here -->
         ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 96
            echo "         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/event.png"), "html", null, true);
            echo "\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherEventDetail", ["id" => $this->getAttribute($context["ff"], "id", [])]), "html", null, true);
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
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Type:</td>
                                     <td class=\"font-medium text-dark-medium\">";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "typeEvent", []), "html", null, true);
            echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Description: </td>
                                     <td class=\"font-medium text-dark-medium\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "description", []), "html", null, true);
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
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
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
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Plugins js -->
     <script src=\" ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
     <!-- Popper js -->
     <script src=\" ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Bootstrap js -->
     <script src=\" ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Counterup Js -->
     <script src=\" ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Moment Js -->
     <script  src=\" ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" ";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" ";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Select 2 Js -->
     <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Date Picker Js -->
     <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Full Calender Js -->
     <script src=\" ";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Chart Js -->
     <script  src=\" ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>

     <!-- Custom Js -->
     <script  src=\" ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo " \" ></script>
 ";
    }

    // line 77
    public function block_notiffront($context, array $blocks = [])
    {
        // line 78
        echo "    ";
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
        return array (  359 => 78,  356 => 77,  350 => 188,  344 => 185,  339 => 183,  334 => 181,  329 => 179,  324 => 177,  319 => 175,  314 => 173,  309 => 171,  304 => 169,  299 => 167,  294 => 165,  289 => 163,  269 => 145,  247 => 129,  240 => 125,  233 => 121,  220 => 111,  214 => 108,  207 => 104,  197 => 96,  193 => 95,  190 => 94,  180 => 90,  177 => 89,  173 => 88,  162 => 79,  160 => 77,  125 => 46,  113 => 36,  102 => 28,  97 => 26,  92 => 24,  87 => 22,  82 => 20,  77 => 18,  72 => 16,  67 => 14,  62 => 12,  57 => 10,  51 => 7,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Sonia/front/affichereventfront.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\front\\affichereventfront.html.twig");
    }
}
