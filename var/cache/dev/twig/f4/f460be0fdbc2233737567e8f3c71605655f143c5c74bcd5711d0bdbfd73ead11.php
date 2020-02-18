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

/* @Parent/Parent/modifierparent.html.twig */
class __TwigTemplate_157d4c5fdd9ca95840fb714cc7cf76bf91405751fc9a112e6b7f84b0bf95311a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/modifierparent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/modifierparent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Parent/Parent/modifierparent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
 <div class=\"dashboard-content-one\">
  <!-- Breadcubs Area Start Here -->
  <div class=\"breadcrumbs-area\">
   <h3>Teacher</h3>
   <ul>
    <li>
     <a href=\"index.html\">Home</a>
    </li>
    <li>Update Teacher Informations</li>
   </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Add New Teacher Area Start Here -->
  <div class=\"card height-auto\">
   <div class=\"card-body\">
    <div class=\"heading-layout1\">
     <div class=\"item-title\">
      <h3>Update Teacher Informations</h3>
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
    <form class=\"new-added-form\" method=\"post\">
     ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

     <div class=\"row\">
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", []), 'row');
        echo "
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>ID *</label>
       ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>First Name *</label>
       ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Last Name *</label>
       ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

      </div>

      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Gender *</label>
       ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "

      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>E-Mail</label>
       ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

      </div>

      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Occupation</label>
       ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Joining Date *</label>
       ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "

       <i class=\"far fa-calendar-alt\"></i>
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Date Of Birth *</label>
       ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "                            <i class=\"far fa-calendar-alt\"></i>
      </div>






      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Address</label>
       ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Phone</label>
       ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>

      <div class=\"col-lg-6 col-12 form-group mg-t-30\">
       <label class=\"text-dark-medium\">Upload Student Photo (150px X 150px)</label>
       <label class=\"file\" title=\"\">
        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", []), 'widget', ["attr" => ["onchange" => "this.parentNode.setAttribute('title', this.value.replace(/^.*[\\/]/, ''))"]]);
        echo "
       </label>
       <div class=\"col-12 form-group mg-t-8\">
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Save", []), 'widget');
        echo "
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "
       </div>
      </div>
      ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
      ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
    </form>
   </div>
  </div>
  <!-- Add New Teacher Area End Here -->
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
        return "@Parent/Parent/modifierparent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 105,  208 => 104,  202 => 101,  198 => 100,  192 => 97,  183 => 91,  176 => 87,  163 => 77,  154 => 71,  146 => 66,  137 => 60,  129 => 55,  120 => 49,  113 => 45,  106 => 41,  100 => 38,  94 => 35,  60 => 3,  51 => 2,  29 => 1,);
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
   <h3>Teacher</h3>
   <ul>
    <li>
     <a href=\"index.html\">Home</a>
    </li>
    <li>Update Teacher Informations</li>
   </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Add New Teacher Area Start Here -->
  <div class=\"card height-auto\">
   <div class=\"card-body\">
    <div class=\"heading-layout1\">
     <div class=\"item-title\">
      <h3>Update Teacher Informations</h3>
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
    <form class=\"new-added-form\" method=\"post\">
     {{ form_start(form) }}

     <div class=\"row\">
      {{ form_row(form._token) }}
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>ID *</label>
       {{ form_widget (form.id , {'attr': {'class':'form-control'}}) }}
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>First Name *</label>
       {{ form_widget (form.firstName , {'attr': {'class':'form-control'}}) }}
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Last Name *</label>
       {{ form_widget (form.lastName , {'attr': {'class':'form-control'}}) }}

      </div>

      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Gender *</label>
       {{ form_widget (form.gender , {'attr': {'class':'select2'}}) }}

      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>E-Mail</label>
       {{ form_widget (form.email , {'attr': {'class':'form-control'}}) }}

      </div>

      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Occupation</label>
       {{ form_widget (form.occupation , {'attr': {'class':'form-control'}}) }}

      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Joining Date *</label>
       {{ form_widget (form.joiningDate , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}

       <i class=\"far fa-calendar-alt\"></i>
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Date Of Birth *</label>
       {{ form_widget (form.birthDay , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}                            <i class=\"far fa-calendar-alt\"></i>
      </div>






      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Address</label>
       {{ form_widget (form.address , {'attr': {'class':'form-control'}}) }}
      </div>
      <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
       <label>Phone</label>
       {{ form_widget (form.phone , {'attr': {'class':'form-control'}}) }}
      </div>

      <div class=\"col-lg-6 col-12 form-group mg-t-30\">
       <label class=\"text-dark-medium\">Upload Student Photo (150px X 150px)</label>
       <label class=\"file\" title=\"\">
        {{ form_widget (form.picture , {'attr': {'onchange':\"this.parentNode.setAttribute('title', this.value.replace(/^.*[\\\\/]/, ''))\"}}) }}
       </label>
       <div class=\"col-12 form-group mg-t-8\">
        {{ form_widget(form.Save) }}
        {{ form_widget(form.Reset) }}
       </div>
      </div>
      {{ form_widget (form.username , { 'attr': {'class': 'hidden'} }) }}
      {{ form_end(form, {'render_rest': false}) }}
    </form>
   </div>
  </div>
  <!-- Add New Teacher Area End Here -->
  <footer class=\"footer-wrap-layout1\">
   <div class=\"copyright\">© Copyrights <a href=\"#\">akkhor</a> 2019. All rights reserved. Designed by <a href=\"#\">PsdBosS</a></div>
  </footer>
 </div>
{% endblock body %}", "@Parent/Parent/modifierparent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Parent\\modifierparent.html.twig");
    }
}