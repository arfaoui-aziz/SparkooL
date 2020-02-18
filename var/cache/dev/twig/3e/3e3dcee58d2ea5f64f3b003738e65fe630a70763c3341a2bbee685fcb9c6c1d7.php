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

/* @Parent/Reclamation/afficherReclamationt.html.twig */
class __TwigTemplate_cf671fbe05c8385bc5995bad7f02988b256fae7c977eaebd1c7a6d40a1b30b76 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Reclamation/afficherReclamationt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Reclamation/afficherReclamationt.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Parent/Reclamation/afficherReclamationt.html.twig", 3);
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
        echo "  <div class=\"dashboard-content-one\">
   <!-- Breadcubs Area Start Here -->
   <div class=\"breadcrumbs-area\">
    <h3>Reclamation</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>All Reclamations</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Teacher Table Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>All Reclamations Data</h3>
      </div>
      <div class=\"dropdown\">
       <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
          aria-expanded=\"false\">...</a>

       <div class=\"dropdown-menu dropdown-menu-right\">
        <a class=\"dropdown-item\" href=\"#\"><i
                 class=\"fas fa-times text-orange-red\"></i>Close</a>
        <a class=\"dropdown-item\" href=\"#\"><i
                 class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
        <a class=\"dropdown-item\" href=\"#\"><i
                 class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
       </div>
      </div>
     </div>
     <form class=\"mg-b-20\">
      <div class=\"row gutters-8\">
       <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control\">
       </div>
       <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
       </div>
       <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by Phone ...\" class=\"form-control\">
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
        <th>
         <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input checkAll\">
          <label class=\"form-check-label\">ID</label>
         </div>
        </th>

        <th>Type</th>
        <th>Typeuser</th>
        <th>Date</th>
        <th>Message</th>
        <th>ID_Parent</th>

       </tr>
       </thead>
       ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            echo "       <tbody>
       <tr>
        <td>
         <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input \">
          <label class=\"form-check-label\">#";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</label>
         </div>
        </td>

        <td> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", []), "html", null, true);
            echo "</td>
        <td> ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeuser", []), "html", null, true);
            echo "</td>
        <td> ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "datecree", []), "html", null, true);
            echo "</td>
        <td> ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "message", []), "html", null, true);
            echo "</td>
        <td> ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "parent", []), "html", null, true);
            echo "</td>




       <td>
         <div class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
             aria-expanded=\"false\">
           <span class=\"flaticon-more-button-of-three-dots\"></span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
           <a class=\"dropdown-item\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_reclamation", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                    class=\"fas fa-times text-orange-red\"></i> Delete</a>

           <a class=\"dropdown-item\" href=\"\"><i
                    class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
          </div>
         </div>
        </td>

       </tr>

       </tbody>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "      </table>
     </div>
    </div>
   </div>
   <!-- Teacher Table Area End Here -->
   <footer class=\"footer-wrap-layout1\">
    <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
   </footer>
  </div>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Parent/Reclamation/afficherReclamationt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 113,  179 => 100,  164 => 88,  160 => 87,  156 => 86,  152 => 85,  148 => 84,  141 => 80,  134 => 75,  130 => 74,  60 => 6,  51 => 5,  29 => 3,);
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

{% extends 'base.html.twig' %}

 {% block body %}
  <div class=\"dashboard-content-one\">
   <!-- Breadcubs Area Start Here -->
   <div class=\"breadcrumbs-area\">
    <h3>Reclamation</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>All Reclamations</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Teacher Table Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>All Reclamations Data</h3>
      </div>
      <div class=\"dropdown\">
       <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
          aria-expanded=\"false\">...</a>

       <div class=\"dropdown-menu dropdown-menu-right\">
        <a class=\"dropdown-item\" href=\"#\"><i
                 class=\"fas fa-times text-orange-red\"></i>Close</a>
        <a class=\"dropdown-item\" href=\"#\"><i
                 class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
        <a class=\"dropdown-item\" href=\"#\"><i
                 class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
       </div>
      </div>
     </div>
     <form class=\"mg-b-20\">
      <div class=\"row gutters-8\">
       <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control\">
       </div>
       <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control\">
       </div>
       <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by Phone ...\" class=\"form-control\">
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
        <th>
         <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input checkAll\">
          <label class=\"form-check-label\">ID</label>
         </div>
        </th>

        <th>Type</th>
        <th>Typeuser</th>
        <th>Date</th>
        <th>Message</th>
        <th>ID_Parent</th>

       </tr>
       </thead>
       {% for i in var %}
       <tbody>
       <tr>
        <td>
         <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input \">
          <label class=\"form-check-label\">#{{  i.id }}</label>
         </div>
        </td>

        <td> {{  i.type }}</td>
        <td> {{  i.typeuser  }}</td>
        <td> {{  i. datecree }}</td>
        <td> {{  i.  message }}</td>
        <td> {{  i.  parent }}</td>




       <td>
         <div class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
             aria-expanded=\"false\">
           <span class=\"flaticon-more-button-of-three-dots\"></span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
           <a class=\"dropdown-item\" href=\"{{ path('supprimer_reclamation',{'id':i.id }) }}\"><i
                    class=\"fas fa-times text-orange-red\"></i> Delete</a>

           <a class=\"dropdown-item\" href=\"\"><i
                    class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
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
   <!-- Teacher Table Area End Here -->
   <footer class=\"footer-wrap-layout1\">
    <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
   </footer>
  </div>

 {% endblock %}", "@Parent/Reclamation/afficherReclamationt.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Reclamation\\afficherReclamationt.html.twig");
    }
}
