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

/* @Sonia/evenement/afficherevent.html.twig */
class __TwigTemplate_eb525fb41917a95d43275f287c3d0780356e3d60f0295120a0ca136881907f4d extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/afficherevent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/afficherevent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Sonia/evenement/afficherevent.html.twig", 1);
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
         <div class=\"dashboard-content-one\">
         <!-- Breadcubs Area Start Here -->
         <div class=\"breadcrumbs-area\">
             <h3>Events</h3>
             <ul>
                 <li>
                     <a href=\"index.html\">Home</a>
                 </li>
                 <li> <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEvent");
        echo "\">Add New Event</a></li>
             </ul>
         </div>
         <!-- Breadcubs Area End Here -->
         <!-- Student Table Area Start Here -->

         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "                     <div class=\"alert alert-success\">
                         ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                     </div>

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<!-- SEEEEARCH ---------->

                 <div class=\"item-title\">
                     <h3>Search An Event</h3>
                 </div>
                 <form class=\"mg-b-20\">
                     <div class=\"row gutters-8\">
                         <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\"x placeholder=\"Search by Name ...\" class=\"form-control search\" >
                         </div>
                         <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Type ...\" class=\"form-control search\">
                         </div>
                         <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Date ...\" class=\"form-control search\">
                         </div>
                         <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
                             <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
                         </div>
                     </div>
                 </form>


                 <ul class=\"nav\" id=\"side-menu\">
                     <li>

                         <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                         </ul>
                     </li>
                 </ul><br>

                 <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                 <script type=\"text/javascript\">
                     jQuery(document).ready(function() {
                         var searchRequest = null;
                         \$(\".search\").keyup(function() {
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
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax");
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

                                 var large= '<div class=\"table-responsive\"> <table class=\"table display data-table text-nowrap\"> <thead> <tr> <th>Id</th> <th>Name</th> <th>Type of Event</th> <th>Description</th><th>Date</th><th>Place</th><th>Participants</th><th>Theme</th><th>Destination</th><th>Award</th><th>Budget</th><th>Price</th><th></th> </tr> </thead> <tbody> <tr> <td> '+value[0]+'</td> <td>'+value[1]+'</td> <td> '+value[2]+'</td><td> '+value[3]+'</td><td> '+value[4]+'</td><td> '+ value[5]+'</td><td> '+ value[6]+'</td><td> '+ value[7]+'</td> <td> '+ value[8]+'</td><td> '+ value[9]+'</td><td> '+ value[10]+'</td><td> '+ value[11]+'</td></tbody> </table> </div>';

                                                             entitySelector.append(large) ; }
                                                         else {
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



                 <div class=\"heading-layout1\">
                     <div class=\"item-title\">
                         <h3>All Events Data</h3>
                     </div>

                 </div>




                 <div class=\"table-responsive\">
                     <table class=\"table display data-table text-nowrap\">
                         <thead>
                         <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Type of Event</th>
                             <th>Description</th>
                             <th>Date</th>
                             <th>Place</th>
                             <th>Participants </th>
                             <th>Theme</th>
                             <th>Destination</th>
                             <th>Award</th>
                             <th>Budget</th>
                             <th>Price</th>

                             <th></th>
                         </tr>
                         </thead>

                         ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 141
            echo "
                             <tbody>

                             <tr>
                                 <td>  ";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "id", []), "html", null, true);
            echo " </td>
                                 <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "typeEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "description", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "dateEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "placeEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nbParticipants", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "theme", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "destination", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "award", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "budget", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "price", []), "html", null, true);
            echo "</td>

                                 <td>
                                     <div class=\"dropdown\">
                                         <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                            aria-expanded=\"false\">
                                             <span class=\"flaticon-more-button-of-three-dots\"></span>
                                         </a>
                                         <div class=\"dropdown-menu dropdown-menu-right\">
                                             <a class=\"dropdown-item\" href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerEvent", ["id" => $this->getAttribute($context["ff"], "id", [])]), "html", null, true);
            echo "\"><i
                                                         class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                             <a class=\"dropdown-item\" href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierEvent", ["id" => $this->getAttribute($context["ff"], "id", [])]), "html", null, true);
            echo "\"><i
                                                         class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
                                             <a class=\"dropdown-item\" href=\"";
            // line 169
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherEvent");
            echo "\"><i
                                                         class=\"fas fa-redo-alt text-orange-peel\"></i> Refresh</a>
                                         </div>
                                     </div>
                                 </td>
                             </tr>


                             </tbody>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                     </table>
                 </div>
             </div>
         </div>




         <section class=\"content-header\">
             <div class=\"container\">
                 <div class=\"row\">



                 </div>
             </div>
         </section>
         <!-- Student Table Area End Here -->
         <footer class=\"footer-wrap-layout1\">
             <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
         </footer>
     </div>
     </div>
     <!-- Page Area End Here -->
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Sonia/evenement/afficherevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 179,  293 => 169,  288 => 167,  283 => 165,  271 => 156,  267 => 155,  263 => 154,  259 => 153,  255 => 152,  251 => 151,  247 => 150,  243 => 149,  239 => 148,  235 => 147,  231 => 146,  227 => 145,  221 => 141,  217 => 140,  149 => 75,  101 => 29,  91 => 25,  88 => 24,  84 => 23,  71 => 13,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

 {% block body %}

         <div class=\"dashboard-content-one\">
         <!-- Breadcubs Area Start Here -->
         <div class=\"breadcrumbs-area\">
             <h3>Events</h3>
             <ul>
                 <li>
                     <a href=\"index.html\">Home</a>
                 </li>
                 <li> <a href=\"{{ path('ajouterEvent') }}\">Add New Event</a></li>
             </ul>
         </div>
         <!-- Breadcubs Area End Here -->
         <!-- Student Table Area Start Here -->

         <div class=\"card height-auto\">
             <div class=\"card-body\">


                 {% for message in app.flashes('info') %}
                     <div class=\"alert alert-success\">
                         {{ message }}
                     </div>

                 {% endfor %}
<!-- SEEEEARCH ---------->

                 <div class=\"item-title\">
                     <h3>Search An Event</h3>
                 </div>
                 <form class=\"mg-b-20\">
                     <div class=\"row gutters-8\">
                         <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\"x placeholder=\"Search by Name ...\" class=\"form-control search\" >
                         </div>
                         <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Type ...\" class=\"form-control search\">
                         </div>
                         <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
                             <input type=\"text\" placeholder=\"Search by Date ...\" class=\"form-control search\">
                         </div>
                         <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
                             <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
                         </div>
                     </div>
                 </form>


                 <ul class=\"nav\" id=\"side-menu\">
                     <li>

                         <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                         </ul>
                     </li>
                 </ul><br>

                 <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                 <script type=\"text/javascript\">
                     jQuery(document).ready(function() {
                         var searchRequest = null;
                         \$(\".search\").keyup(function() {
                             var minlength = 1;
                             var that = this;
                             var value = \$(this).val();
                             var entitySelector = \$(\"#entitiesNav\").html('');
                             if (value.length >= minlength ) {
                                 if (searchRequest != null)
                                     searchRequest.abort();
                                 searchRequest = \$.ajax({
                                     type: \"GET\",
                                     url: \"{{ path('ajax') }}\",
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

                                 var large= '<div class=\"table-responsive\"> <table class=\"table display data-table text-nowrap\"> <thead> <tr> <th>Id</th> <th>Name</th> <th>Type of Event</th> <th>Description</th><th>Date</th><th>Place</th><th>Participants</th><th>Theme</th><th>Destination</th><th>Award</th><th>Budget</th><th>Price</th><th></th> </tr> </thead> <tbody> <tr> <td> '+value[0]+'</td> <td>'+value[1]+'</td> <td> '+value[2]+'</td><td> '+value[3]+'</td><td> '+value[4]+'</td><td> '+ value[5]+'</td><td> '+ value[6]+'</td><td> '+ value[7]+'</td> <td> '+ value[8]+'</td><td> '+ value[9]+'</td><td> '+ value[10]+'</td><td> '+ value[11]+'</td></tbody> </table> </div>';

                                                             entitySelector.append(large) ; }
                                                         else {
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



                 <div class=\"heading-layout1\">
                     <div class=\"item-title\">
                         <h3>All Events Data</h3>
                     </div>

                 </div>




                 <div class=\"table-responsive\">
                     <table class=\"table display data-table text-nowrap\">
                         <thead>
                         <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Type of Event</th>
                             <th>Description</th>
                             <th>Date</th>
                             <th>Place</th>
                             <th>Participants </th>
                             <th>Theme</th>
                             <th>Destination</th>
                             <th>Award</th>
                             <th>Budget</th>
                             <th>Price</th>

                             <th></th>
                         </tr>
                         </thead>

                         {% for ff in var %}

                             <tbody>

                             <tr>
                                 <td>  {{ ff.id}} </td>
                                 <td>{{ ff.nomEvent }}</td>
                                 <td>{{ ff.typeEvent}}</td>
                                 <td>{{ ff.description}}</td>
                                 <td>{{ ff.dateEvent}}</td>
                                 <td>{{ ff.placeEvent}}</td>
                                 <td>{{ ff.nbParticipants}}</td>
                                 <td>{{ ff.theme}}</td>
                                 <td>{{ ff.destination}}</td>
                                 <td>{{ ff.award}}</td>
                                 <td>{{ ff.budget}}</td>
                                 <td>{{ ff.price}}</td>

                                 <td>
                                     <div class=\"dropdown\">
                                         <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                            aria-expanded=\"false\">
                                             <span class=\"flaticon-more-button-of-three-dots\"></span>
                                         </a>
                                         <div class=\"dropdown-menu dropdown-menu-right\">
                                             <a class=\"dropdown-item\" href=\"{{ path('supprimerEvent',{'id':ff.id }) }}\"><i
                                                         class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                             <a class=\"dropdown-item\" href=\"{{ path('modifierEvent',{'id':ff.id }) }}\"><i
                                                         class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
                                             <a class=\"dropdown-item\" href=\"{{ path('afficherEvent') }}\"><i
                                                         class=\"fas fa-redo-alt text-orange-peel\"></i> Refresh</a>
                                         </div>
                                     </div>
                                 </td>
                             </tr>


                             </tbody>
                         {% endfor %}
                     </table>
                 </div>
             </div>
         </div>




         <section class=\"content-header\">
             <div class=\"container\">
                 <div class=\"row\">



                 </div>
             </div>
         </section>
         <!-- Student Table Area End Here -->
         <footer class=\"footer-wrap-layout1\">
             <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
         </footer>
     </div>
     </div>
     <!-- Page Area End Here -->
     </div>
 {% endblock %}
", "@Sonia/evenement/afficherevent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\evenement\\afficherevent.html.twig");
    }
}
