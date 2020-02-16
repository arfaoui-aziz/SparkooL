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
class __TwigTemplate_31515057abcaaadc1dc165e624715597b11d8efdcdd92e7daf30a1a705b052ab extends \Twig\Template
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
        // line 3
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/front/affichereventfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/front/affichereventfront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Sonia/front/affichereventfront.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
     <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo " \">
     <!-- Normalize CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">

     <!-- Main CSS -->
     <link rel=\"stylesheet\"  href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo " \">
     <!-- Bootstrap CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " \" >
     <!-- Fontawesome CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css"), "html", null, true);
        echo " \">
     <!-- Flaticon CSS -->
     <link rel=\"stylesheet\"  href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css"), "html", null, true);
        echo " \" >
     <!-- Full Calender CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo " \">
     <!-- Animate CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo " \" >
     <!-- Select 2 CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css"), "html", null, true);
        echo " \">
     <!-- Date Picker CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css"), "html", null, true);
        echo "\">
     <!-- Custom CSS -->
     <link rel=\"stylesheet\" href=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo " \" >
     <!-- Modernize js -->
     <script href=\" ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-3.6.0.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Breadcubs Area End Here -->


     <!-- Student Table Area Start Here -->


     <div class=\"card-body\">
         <!-- SEEEEARCH ---------->

         <link rel=\"stylesheet\" href=\" ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/SEARCH.css"), "html", null, true);
        echo " \" >
         <div class=\"item-title\">
             <h2 class=\"text-black h2 t600 mb-2\">What Event Are You Looking For?</h2>
         </div>



         <div class=\"input-group md-form form-sm form-1 pl-0\">
             <div class=\"input-group-prepend\">
    <span class=\"input-group-text cyan lighten-2\" id=\"basic-text1\"><i class=\"fas fa-search text-white\" aria-hidden=\"true\"></i></span>
             </div>
             <input  id=\"search\" class=\"form-control my-0 py-1\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
         </div>
         <ul class=\"nav\" id=\"side-menu\">
             <li>

                 <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                 </ul>
             </li>
         </ul>


<br> <br> <br>



         <div class=\"heading-layout1\">
             <div class=\"item-title\">
                 <h2 class=\"text-black h2 t600 mb-2\">All Events Data</h2>
             </div>

         </div>


         <!--MESSAGE -->
         ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 76
            echo "             <div class=\"alert alert-success\">
                 ";
            // line 77
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
             </div>

         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "


<!-- recherche -->

         <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

         <script type=\"text/javascript\">
             jQuery(document).ready(function() {
                 var searchRequest = null;

                 \$(\"#search\").keyup(function() {
                     var minlength = 1;
                     var that = this;
                     var value = \$(this).val();
                     var entitySelector = \$(\"#entitiesNav\").html('');
                     if (value.length >= minlength ) {

                         if (searchRequest != null)
                             searchRequest.abort();


                         searchRequest = \$.ajax({
                             type: \"GET\",
                             url: \"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxFront");
        echo "\",
                             data: {
                                 'q' : value
                             },
                             dataType: \"text\",
                             success: function(msg){
                                 //we need to check if the value is the same
                                 if (value===\$(that).val()) {
                                     var result = JSON.parse(msg);
                                     \$.each(result, function(key, arr) {
                                         \$.each(arr, function(id, value) {
                                             if (key === 'posts') {
                                                 if (id !== 'error') {
                                                     console.log(value[1]);
                                                     //value[0]: nomEvent et value[1]: typeEvent


var large =  '<div class=\"card height-auto\"> <div class=\"card-body\"><div class=\"single-info-details\"> <div class=\"item-img\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/event.png"), "html", null, true);
        echo "\" alt=\"teacher\"></div> <div class=\"item-content\">  <div class=\"header-inline item-header\">    <h3 class=\"text-dark-medium font-medium\">'+value[0]+'</h3><div class=\"header-elements\"><ul> <li><a href=\"#\"><i class=\"fas fa-search-plus\"></i></a></li> </ul> </div> </div> <div class=\"info-table table-responsive\"> <table class=\"table text-nowrap\"> <tbody> <tr> <td>Name:</td> <td class=\"font-medium text-dark-medium\">'+value[0]+'</td> </tr> <tr> <td>Type:</td> <td class=\"font-medium text-dark-medium\">'+value[1]+'</td> </tr> </tbody> </table> </div> </div> </div> </div> </div> </div> </div>';

                                                     entitySelector.append(large);
                                                 } else {
                                                     entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                 }
                                             }
                                         });
                                     });
                                 }
                             }
                         });
                     }
                 });
             });
         </script>












         <!-- event Table Area Start Here -->
         ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 152
            echo "         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/event.png"), "html", null, true);
            echo "\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"";
            // line 167
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
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Type:</td>
                                     <td class=\"font-medium text-dark-medium\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "typeEvent", []), "html", null, true);
            echo "</td>
                                 </tr>
                                 <tr>
                                     <td>Description: </td>
                                     <td class=\"font-medium text-dark-medium\">";
            // line 185
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
        // line 201
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
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Plugins js -->
     <script src=\" ";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
     <!-- Popper js -->
     <script src=\" ";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Bootstrap js -->
     <script src=\" ";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Counterup Js -->
     <script src=\" ";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Moment Js -->
     <script  src=\" ";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Scroll Up Js -->
     <script src=\" ";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Waypoints Js -->
     <script  src=\" ";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
     <!-- Select 2 Js -->
     <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Date Picker Js -->
     <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Full Calender Js -->
     <script src=\" ";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
     <!-- Chart Js -->
     <script  src=\" ";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>

     <script  src=\" ";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo " \" ></script>
     <!-- Custom Js -->
     <script  src=\" ";
        // line 245
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
        return array (  426 => 245,  421 => 243,  416 => 241,  411 => 239,  406 => 237,  401 => 235,  396 => 233,  391 => 231,  386 => 229,  381 => 227,  376 => 225,  371 => 223,  366 => 221,  361 => 219,  341 => 201,  319 => 185,  312 => 181,  305 => 177,  292 => 167,  286 => 164,  279 => 160,  269 => 152,  265 => 151,  233 => 122,  213 => 105,  187 => 81,  177 => 77,  174 => 76,  170 => 75,  132 => 40,  119 => 30,  114 => 28,  109 => 26,  104 => 24,  99 => 22,  94 => 20,  89 => 18,  84 => 16,  79 => 14,  74 => 12,  68 => 9,  63 => 7,  60 => 6,  51 => 5,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'baseFront.html.twig'%}

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
         <!-- SEEEEARCH ---------->

         <link rel=\"stylesheet\" href=\" {{ asset('css/SEARCH.css') }} \" >
         <div class=\"item-title\">
             <h2 class=\"text-black h2 t600 mb-2\">What Event Are You Looking For?</h2>
         </div>



         <div class=\"input-group md-form form-sm form-1 pl-0\">
             <div class=\"input-group-prepend\">
    <span class=\"input-group-text cyan lighten-2\" id=\"basic-text1\"><i class=\"fas fa-search text-white\" aria-hidden=\"true\"></i></span>
             </div>
             <input  id=\"search\" class=\"form-control my-0 py-1\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
         </div>
         <ul class=\"nav\" id=\"side-menu\">
             <li>

                 <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                 </ul>
             </li>
         </ul>


<br> <br> <br>



         <div class=\"heading-layout1\">
             <div class=\"item-title\">
                 <h2 class=\"text-black h2 t600 mb-2\">All Events Data</h2>
             </div>

         </div>


         <!--MESSAGE -->
         {% for message in app.flashes('info') %}
             <div class=\"alert alert-success\">
                 {{ message }}
             </div>

         {% endfor %}



<!-- recherche -->

         <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

         <script type=\"text/javascript\">
             jQuery(document).ready(function() {
                 var searchRequest = null;

                 \$(\"#search\").keyup(function() {
                     var minlength = 1;
                     var that = this;
                     var value = \$(this).val();
                     var entitySelector = \$(\"#entitiesNav\").html('');
                     if (value.length >= minlength ) {

                         if (searchRequest != null)
                             searchRequest.abort();


                         searchRequest = \$.ajax({
                             type: \"GET\",
                             url: \"{{ path('ajaxFront') }}\",
                             data: {
                                 'q' : value
                             },
                             dataType: \"text\",
                             success: function(msg){
                                 //we need to check if the value is the same
                                 if (value===\$(that).val()) {
                                     var result = JSON.parse(msg);
                                     \$.each(result, function(key, arr) {
                                         \$.each(arr, function(id, value) {
                                             if (key === 'posts') {
                                                 if (id !== 'error') {
                                                     console.log(value[1]);
                                                     //value[0]: nomEvent et value[1]: typeEvent


var large =  '<div class=\"card height-auto\"> <div class=\"card-body\"><div class=\"single-info-details\"> <div class=\"item-img\"><img src=\"{{ asset('img/figure/event.png') }}\" alt=\"teacher\"></div> <div class=\"item-content\">  <div class=\"header-inline item-header\">    <h3 class=\"text-dark-medium font-medium\">'+value[0]+'</h3><div class=\"header-elements\"><ul> <li><a href=\"#\"><i class=\"fas fa-search-plus\"></i></a></li> </ul> </div> </div> <div class=\"info-table table-responsive\"> <table class=\"table text-nowrap\"> <tbody> <tr> <td>Name:</td> <td class=\"font-medium text-dark-medium\">'+value[0]+'</td> </tr> <tr> <td>Type:</td> <td class=\"font-medium text-dark-medium\">'+value[1]+'</td> </tr> </tbody> </table> </div> </div> </div> </div> </div> </div> </div>';

                                                     entitySelector.append(large);
                                                 } else {
                                                     entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                 }
                                             }
                                         });
                                     });
                                 }
                             }
                         });
                     }
                 });
             });
         </script>












         <!-- event Table Area Start Here -->
         {% for ff in var %}
         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 <div class=\"single-info-details\">

                     <div class=\"item-img\">

                         <img src=\"{{ asset('img/figure/event.png') }}\" alt=\"teacher\">
                     </div>
                     <div class=\"item-content\">
                         <div class=\"header-inline item-header\">
                             <h3 class=\"text-dark-medium font-medium\">{{  ff.nomEvent }}</h3>
                             <div class=\"header-elements\">
                                 <ul>
                                     <li><a href=\"{{ path('afficherEventDetail',{'id':ff.id }) }}\"><i class=\"fas fa-search-plus\"></i></a></li>
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

     <script  src=\" {{ asset('css/normalize.css') }} \" ></script>
     <!-- Custom Js -->
     <script  src=\" {{ asset('js/main.js') }} \" ></script>
 {% endblock %}
", "@Sonia/front/affichereventfront.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\front\\affichereventfront.html.twig");
    }
}
