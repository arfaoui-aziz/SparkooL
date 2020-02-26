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

/* @Admin\Front\Reclamation.html.twig */
class __TwigTemplate_6f4eb48d3c03dcd5daa4e4f8af3221811c5c092142cfe9202056840309e23d21 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'body' => [$this, 'block_body'],
            'join' => [$this, 'block_join'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Front\\Reclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Front\\Reclamation.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Admin\\Front\\Reclamation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "  <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Send Reclamation</a>
  </li>

  </ul>
  <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
   <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">


     <div class=\"form-result\"></div>
     <form class=\"row home-moving-form position-relative mb-0\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddReclamation");
        echo "\" method=\"post\" >
      <div class=\"form-process\"></div>

      <div class=\"col-sm-12 input-group form-group\">
       <div class=\"input-group-prepend\">
        <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
       </div>
       <input type=\"text\" name=\"sujet\" id=\"home-moving-form-location-from\" class=\"form-control required\" value=\"\" placeholder=\"Sujet\">
      </div>


      <div class=\"col-lg-12-12 col-12 input-group form-group\">
       <div class=\"input-group-prepend\">
        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
       </div>
       <input class=\"textarea form-control \" cols=\"10px\"  rows=\"10px\" name=\"contenu\" placeholder=\"Write Your Reclamation Here\" >


      </div>

      <div class=\"col-12 hidden\">
       <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
      </div>

      <div class=\"col-12\">
       <button type=\"submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">SUBMIT</button>
      </div>


     </form>

   </div>
  </div>
  </div>
  <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
   <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/ed2.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

  </div>
  </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_join($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "join"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "join"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Front\\Reclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  136 => 55,  127 => 54,  111 => 47,  73 => 12,  62 => 3,  53 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
 {% block form %}
  <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Send Reclamation</a>
  </li>

  </ul>
  <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
   <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">


     <div class=\"form-result\"></div>
     <form class=\"row home-moving-form position-relative mb-0\" action=\"{{ path('admin_AddReclamation') }}\" method=\"post\" >
      <div class=\"form-process\"></div>

      <div class=\"col-sm-12 input-group form-group\">
       <div class=\"input-group-prepend\">
        <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
       </div>
       <input type=\"text\" name=\"sujet\" id=\"home-moving-form-location-from\" class=\"form-control required\" value=\"\" placeholder=\"Sujet\">
      </div>


      <div class=\"col-lg-12-12 col-12 input-group form-group\">
       <div class=\"input-group-prepend\">
        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
       </div>
       <input class=\"textarea form-control \" cols=\"10px\"  rows=\"10px\" name=\"contenu\" placeholder=\"Write Your Reclamation Here\" >


      </div>

      <div class=\"col-12 hidden\">
       <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
      </div>

      <div class=\"col-12\">
       <button type=\"submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">SUBMIT</button>
      </div>


     </form>

   </div>
  </div>
  </div>
  <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
   <img src=\"{{ asset('FrontEnd/img/ed2.png')}}\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

  </div>
  </div>
  </div>
{% endblock %}

{% block body %}

{% endblock %}
{% block join %}
{% endblock %}
", "@Admin\\Front\\Reclamation.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Front\\Reclamation.html.twig");
    }
}
