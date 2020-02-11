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

/* @Parent/Parent/afficherparent.html.twig */
class __TwigTemplate_ac0b669fe116b8c963441b7e0d443e4763a47a19443c0410f2baeadb266480d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/afficherparent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/afficherparent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Parent/Parent/afficherparent.html.twig", 3);
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
    <h3>Parents</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>All Parents</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Teacher Table Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>All Parents Data</h3>
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

        <th>Name</th>
        <th>Gender</th>
        <th>Occupation</th>
        <th>E-mail</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Joining Date </th>
        <th>PHOTO</th>
        <th></th>
       </tr>
       </thead>
       ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "       <tbody>
       <tr>
        <td>
         <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input \">
          <label class=\"form-check-label\">#";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</label>
         </div>
        </td>
        <td> ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "lastName", []), "html", null, true);
            echo "</td>

        <td> ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "gender", []), "html", null, true);
            echo " </td>
        <td> ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "occupation", []), "html", null, true);
            echo " </td>
        <td> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", []), "html", null, true);
            echo " </td>
        <td> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "address", []), "html", null, true);
            echo " </td>
        <td> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "phone", []), "html", null, true);
            echo " </td>
        <td> ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "birthDay", []), "html", null, true);
            echo " </td>
        <td> ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "joiningDate", []), "html", null, true);
            echo " </td>
        <td> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "picture", []), "html", null, true);
            echo " </td>

        <td>
         <div class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
             aria-expanded=\"false\">
           <span class=\"flaticon-more-button-of-three-dots\"></span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
           <a class=\"dropdown-item\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                    class=\"fas fa-times text-orange-red\"></i> Delete</a>
           <a class=\"dropdown-item\" href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                    class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
           <a class=\"dropdown-item\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
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
        // line 119
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
        return "@Parent/Parent/afficherparent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 119,  208 => 109,  203 => 107,  198 => 105,  186 => 96,  182 => 95,  178 => 94,  174 => 93,  170 => 92,  166 => 91,  162 => 90,  158 => 89,  151 => 87,  145 => 84,  138 => 79,  134 => 78,  60 => 6,  51 => 5,  29 => 3,);
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
    <h3>Parents</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>All Parents</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Teacher Table Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>All Parents Data</h3>
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

        <th>Name</th>
        <th>Gender</th>
        <th>Occupation</th>
        <th>E-mail</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Joining Date </th>
        <th>PHOTO</th>
        <th></th>
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
        <td> {{  i.firstName }} {{  i.lastName }}</td>

        <td> {{  i.gender }} </td>
        <td> {{  i.occupation }} </td>
        <td> {{  i.email }} </td>
        <td> {{  i.address }} </td>
        <td> {{  i.phone}} </td>
        <td> {{  i.birthDay }} </td>
        <td> {{  i.joiningDate}} </td>
        <td> {{  i.picture }} </td>

        <td>
         <div class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
             aria-expanded=\"false\">
           <span class=\"flaticon-more-button-of-three-dots\"></span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
           <a class=\"dropdown-item\" href=\"{{ path('supprimer_parent',{'id':i.id }) }}\"><i
                    class=\"fas fa-times text-orange-red\"></i> Delete</a>
           <a class=\"dropdown-item\" href=\"{{ path('modifier_parent',{'id':i.id }) }}\"><i
                    class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
           <a class=\"dropdown-item\" href=\"{{ path('detail_parent',{'id':i.id }) }}\"><i
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

 {% endblock %}", "@Parent/Parent/afficherparent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Parent\\afficherparent.html.twig");
    }
}
