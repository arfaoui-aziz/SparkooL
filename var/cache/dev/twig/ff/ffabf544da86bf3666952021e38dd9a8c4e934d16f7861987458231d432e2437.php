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

/* @Etudiant/Default/submitreclamation.html.twig */
class __TwigTemplate_4501d3c82ae3ff1cf3da2fd0116d48e51ec4c53741e1f0a3cf10568589132ae0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'sonia' => [$this, 'block_sonia'],
            'formetud' => [$this, 'block_formetud'],
            'cloud1' => [$this, 'block_cloud1'],
            'body' => [$this, 'block_body'],
            'cloud' => [$this, 'block_cloud'],
            'container' => [$this, 'block_container'],
            'joinspark' => [$this, 'block_joinspark'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/submitreclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/submitreclamation.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Etudiant/Default/submitreclamation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_sonia($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonia"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonia"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_formetud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        // line 5
        echo "
<section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEndimgg-2.png"), "html", null, true);
        echo "\") no-repeat center center / 100% 100%;\">

<div class=\"container\" style=\"z-index: 2\">
    <div class=\"center\">
        <h2 class=\"text-white h2 t600 mb-2\">Welcome to SparkooL .</h2>
        <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
    </div>
    <div class=\"row topmargin justify-content-end clearfix\">
        <div class=\"col-lg-6\">
            <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">
                        Attendance form
                    </a>
                </li>

            </ul>



            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">

                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">



                    <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" novalidate>
                        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                        <div class=\" input-group form-group\">
                            ";
        // line 36
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reclamation", []), 'errors')) <= 0)) {
            // line 37
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reclamation", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type Your Reclamation"]]);
            echo "
                            ";
        } else {
            // line 39
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reclamation", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "Type Your Reclamation"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reclamation", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 44
        echo "
                        </div>

                        <div class=\" input-group form-group\">

                        </div>
                        <div class=\" input-group form-group\">
                            <label for=\"primary\" class=\"btn btn-info    \">Anonymously ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anonymously", []), 'widget', ["attr" => ["class" => "badgebox"]]);
        echo "<span class=\"badge\">&check;</span></label>
                        </div>
";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etudiant", []), 'widget', ["attr" => ["class" => "hidden"], "value" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]);
        echo "





                        <div class=\"col-12 hidden\">
                            <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                        </div>

                        <div class=\"col-12\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'widget', ["attr" => ["class" => "btn bgcolor text-white t500 btn-block py-2 mt-2"]]);
        echo "

                        </div>



                        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                    </form>


                </div>
            </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_cloud1($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud1"));

        // line 80
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_cloud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        // line 88
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 92
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_joinspark($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        // line 96
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/Default/submitreclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 96,  277 => 95,  266 => 92,  257 => 91,  246 => 88,  237 => 87,  226 => 84,  217 => 83,  206 => 80,  197 => 79,  179 => 70,  170 => 64,  156 => 53,  151 => 51,  142 => 44,  136 => 41,  130 => 39,  124 => 37,  122 => 36,  116 => 33,  86 => 6,  83 => 5,  74 => 4,  57 => 2,  35 => 1,);
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
{% block sonia %}
{% endblock %}
{% block formetud%}

<section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"{{ asset('FrontEnd\\img\\bg-2.png')}}\") no-repeat center center / 100% 100%;\">

<div class=\"container\" style=\"z-index: 2\">
    <div class=\"center\">
        <h2 class=\"text-white h2 t600 mb-2\">Welcome to SparkooL .</h2>
        <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
    </div>
    <div class=\"row topmargin justify-content-end clearfix\">
        <div class=\"col-lg-6\">
            <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">
                        Attendance form
                    </a>
                </li>

            </ul>



            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">

                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">



                    <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" novalidate>
                        {{ form_start(form)}}

                        <div class=\" input-group form-group\">
                            {% if form_errors(form.reclamation)|length <= 0 %}
                            {{ form_widget(form.reclamation , {'attr': {'class':'form-control','placeholder':'Type Your Reclamation'}}) }}
                            {% else %}
                                {{ form_widget(form.reclamation , {'attr': {'class':'form-control is-invalid','placeholder':'Type Your Reclamation'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.reclamation) }}
                                </div>
                            {% endif %}

                        </div>

                        <div class=\" input-group form-group\">

                        </div>
                        <div class=\" input-group form-group\">
                            <label for=\"primary\" class=\"btn btn-info    \">Anonymously {{ form_widget(form.anonymously, {'attr':{'class' :'badgebox'}}) }}<span class=\"badge\">&check;</span></label>
                        </div>
{{ form_widget(form.etudiant, {'attr': {'class':'hidden'},value: app.user.id})}}





                        <div class=\"col-12 hidden\">
                            <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                        </div>

                        <div class=\"col-12\">
                            {{ form_widget(form.Ajouter, { 'attr': {'class': 'btn bgcolor text-white t500 btn-block py-2 mt-2'} })}}

                        </div>



                        {{ form_end(form , {'render_rest':false}) }}
                    </form>


                </div>
            </div>

{% endblock %}

{% block cloud1  %}

{% endblock %}

    {% block body %}

    {% endblock %}

{% block cloud %}

{% endblock %}

{% block container %}

{% endblock %}

            {% block joinspark %}

            {% endblock %}", "@Etudiant/Default/submitreclamation.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\Default\\submitreclamation.html.twig");
    }
}
