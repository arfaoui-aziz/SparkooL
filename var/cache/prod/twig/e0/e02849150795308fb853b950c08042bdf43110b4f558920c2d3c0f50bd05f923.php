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
class __TwigTemplate_efb693acf4896c18f0358d2ee0158a34d66b550b6e1e1588635c5550c02f3388 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "@Sonia/evenement/afficherevent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
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
        // line 13
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", [0 => "info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "                     <div class=\"alert alert-success\">
                         ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                     </div>

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 73
            echo "
                             <tbody>

                             <tr>
                                 <td>  ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "id", []), "html", null, true);
            echo " </td>
                                 <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nomEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "typeEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "description", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "dateEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "placeEvent", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nbParticipants", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "theme", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "destination", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "award", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "budget", []), "html", null, true);
            echo "</td>
                                 <td>";
            // line 88
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
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerEvent", ["id" => $this->getAttribute($context["ff"], "id", [])]), "html", null, true);
            echo "\"><i
                                                         class=\"fas fa-times text-orange-red\"></i> Delete</a>
                                             <a class=\"dropdown-item\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierEvent", ["id" => $this->getAttribute($context["ff"], "id", [])]), "html", null, true);
            echo "\"><i
                                                         class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
                                             <a class=\"dropdown-item\" href=\"";
            // line 101
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
        // line 111
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
        return array (  220 => 111,  204 => 101,  199 => 99,  194 => 97,  182 => 88,  178 => 87,  174 => 86,  170 => 85,  166 => 84,  162 => 83,  158 => 82,  154 => 81,  150 => 80,  146 => 79,  142 => 78,  138 => 77,  132 => 73,  128 => 72,  87 => 33,  77 => 29,  74 => 28,  70 => 27,  53 => 13,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Sonia/evenement/afficherevent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\evenement\\afficherevent.html.twig");
    }
}
