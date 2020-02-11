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

/* @Parent/Parent/detailparent.html.twig */
class __TwigTemplate_72f6fa4c2d229469fe52873c850516ffff319e632b32720730ffc4b6db728603 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/detailparent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/detailparent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Parent/Parent/detailparent.html.twig", 1);
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
        echo "  <div class=\"dashboard-content-one\">
   <!-- Breadcubs Area Start Here -->
   <div class=\"breadcrumbs-area\">
    <h3>Parents</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>Parents Details</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Student Details Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>About Me</h3>
      </div>
      <div class=\"dropdown\">
       <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
          data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

       <div class=\"dropdown-menu dropdown-menu-right\">
        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
       </div>
      </div>
     </div>
     <div class=\"single-info-details\">
      <div class=\"item-img\">
       <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/teacher.jpg"), "html", null, true);
        echo "\" alt=\"student\">
      </div>
      <div class=\"item-content\">
       <div class=\"header-inline item-header\">
        <h3 class=\"text-dark-medium font-medium\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</h3>

        <div class=\"header-elements\">
         <ul>
          <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_parent", ["id" => $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "id", [])]), "html", null, true);
        echo "\"><i class=\"far fa-edit\"></i></a></li>
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
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "firstName", []), "html", null, true);
        echo "</td>
         </tr>
         <tr>
          <td>Last Name:</td>
          <td class=\"font-medium text-dark-medium\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "lastName", []), "html", null, true);
        echo "</td>
         </tr>
         <tr>
          <td>E-mail:</td>
          <td class=\"font-medium text-dark-medium\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "email", []), "html", null, true);
        echo "</td>
         </tr>
         <tr>
          <td>Gender:</td>
          <td class=\"font-medium text-dark-medium\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "gender", []), "html", null, true);
        echo "</td>
         </tr>
         <tr>
          <td>Phone:</td>
          <td class=\"font-medium text-dark-medium\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "phone", []), "html", null, true);
        echo "</td>
         </tr>
         <tr>
          <td>Adress:</td>
          <td class=\"font-medium text-dark-medium\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "address", []), "html", null, true);
        echo "</td>
         </tr>
         <tr>
          <td>Birth Day:</td>
          <td class=\"font-medium text-dark-medium\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "birthDay", []), "html", null, true);
        echo "</td>
         </tr>
         <tr>
          <td>Joining Date:</td>
          <td class=\"font-medium text-dark-medium\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "joiningDate", []), "html", null, true);
        echo "</td>
         </tr>

         <tr>
          <td>Occupation:</td>
          <td class=\"font-medium text-dark-medium\">Business</td>
         </tr>
         <tr>



         </tbody>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- Student Details Area End Here -->
   <footer class=\"footer-wrap-layout1\">
    <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
   </footer>
  </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Parent/Parent/detailparent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 84,  167 => 80,  160 => 76,  153 => 72,  146 => 68,  139 => 64,  132 => 60,  125 => 56,  110 => 44,  101 => 40,  94 => 36,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

 {% block body %}
  <div class=\"dashboard-content-one\">
   <!-- Breadcubs Area Start Here -->
   <div class=\"breadcrumbs-area\">
    <h3>Parents</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>Parents Details</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Student Details Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>About Me</h3>
      </div>
      <div class=\"dropdown\">
       <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
          data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

       <div class=\"dropdown-menu dropdown-menu-right\">
        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
        <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
       </div>
      </div>
     </div>
     <div class=\"single-info-details\">
      <div class=\"item-img\">
       <img src=\"{{ asset('img/figure/teacher.jpg') }}\" alt=\"student\">
      </div>
      <div class=\"item-content\">
       <div class=\"header-inline item-header\">
        <h3 class=\"text-dark-medium font-medium\">{{ var.firstName }} {{ var.lastName }}</h3>

        <div class=\"header-elements\">
         <ul>
          <li><a href=\"{{ path('modifier_parent',{'id':var.id }) }}\"><i class=\"far fa-edit\"></i></a></li>
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
          <td class=\"font-medium text-dark-medium\">{{ var.firstName }}</td>
         </tr>
         <tr>
          <td>Last Name:</td>
          <td class=\"font-medium text-dark-medium\">{{ var.lastName }}</td>
         </tr>
         <tr>
          <td>E-mail:</td>
          <td class=\"font-medium text-dark-medium\">{{ var.email }}</td>
         </tr>
         <tr>
          <td>Gender:</td>
          <td class=\"font-medium text-dark-medium\">{{ var.gender }}</td>
         </tr>
         <tr>
          <td>Phone:</td>
          <td class=\"font-medium text-dark-medium\">{{ var.phone }}</td>
         </tr>
         <tr>
          <td>Adress:</td>
          <td class=\"font-medium text-dark-medium\">{{ var.address }}</td>
         </tr>
         <tr>
          <td>Birth Day:</td>
          <td class=\"font-medium text-dark-medium\">{{ var.birthDay }}</td>
         </tr>
         <tr>
          <td>Joining Date:</td>
          <td class=\"font-medium text-dark-medium\">{{ var.joiningDate }}</td>
         </tr>

         <tr>
          <td>Occupation:</td>
          <td class=\"font-medium text-dark-medium\">Business</td>
         </tr>
         <tr>



         </tbody>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- Student Details Area End Here -->
   <footer class=\"footer-wrap-layout1\">
    <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
   </footer>
  </div>
 {% endblock %}", "@Parent/Parent/detailparent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Parent\\detailparent.html.twig");
    }
}
