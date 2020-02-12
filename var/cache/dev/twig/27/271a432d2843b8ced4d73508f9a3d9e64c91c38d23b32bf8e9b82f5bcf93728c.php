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
class __TwigTemplate_82c801c8ffd5734c18146acce9138cf56146312e3cdd259bc76a4a114c5ffd6b extends \Twig\Template
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
                 <li> <a href=\"\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEvent");
        echo "\"\">Add New Event</a></li>
             </ul>
         </div>
         <!-- Breadcubs Area End Here -->
         <!-- Student Table Area Start Here -->
         <div class=\"card height-auto\">
             <div class=\"card-body\">
                 <div class=\"heading-layout1\">
                     <div class=\"item-title\">
                         <h3>All Events Data</h3>
                     </div>

                 </div>

                 ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "                     <div class=\"alert alert-success\">
                         ";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                     </div>

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "

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
                         <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
                             <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
                         </div>
                     </div>
                 </form>
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
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 74
            echo "
                             <tbody>

                             <tr>
                                 <td>  ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "id", []), "html", null, true);
            echo " </td>
                                 <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "typeEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "description", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "dateEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "placeEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nbParticipants", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "theme", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "destination", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "award", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "budget", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 89
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
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerEvent", ["id" => $this->getAttribute($context["ff"], "id", [])]), "html", null, true);
            echo "\"><i
                                                         class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                             <a class=\"dropdown-item\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierEvent", ["id" => $this->getAttribute($context["ff"], "id", [])]), "html", null, true);
            echo "\"><i
                                                         class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
                                             <a class=\"dropdown-item\" href=\"";
            // line 102
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
        // line 112
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
        return array (  239 => 112,  223 => 102,  218 => 100,  213 => 98,  201 => 89,  197 => 88,  193 => 87,  189 => 86,  185 => 85,  181 => 84,  177 => 83,  173 => 82,  169 => 81,  165 => 80,  161 => 79,  157 => 78,  151 => 74,  147 => 73,  106 => 34,  96 => 30,  93 => 29,  89 => 28,  72 => 14,  60 => 4,  51 => 3,  29 => 1,);
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
                 <li> <a href=\"\"{{ path('ajouterEvent') }}\"\">Add New Event</a></li>
             </ul>
         </div>
         <!-- Breadcubs Area End Here -->
         <!-- Student Table Area Start Here -->
         <div class=\"card height-auto\">
             <div class=\"card-body\">
                 <div class=\"heading-layout1\">
                     <div class=\"item-title\">
                         <h3>All Events Data</h3>
                     </div>

                 </div>

                 {% for message in app.flashes('info') %}
                     <div class=\"alert alert-success\">
                         {{ message }}
                     </div>

                 {% endfor %}


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
                         <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
                             <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
                         </div>
                     </div>
                 </form>
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
