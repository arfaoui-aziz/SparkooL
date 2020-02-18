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

/* @Etudiant/Default/inscritetud.html.twig */
class __TwigTemplate_2ffffb40812f595b288e8b8a5f895373d1793bbb641a41b232c17033044c1711 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formetud' => [$this, 'block_formetud'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/inscritetud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/inscritetud.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Etudiant/Default/inscritetud.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_formetud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        // line 4
        echo "<section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"";
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



                        <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" >
                            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "FirstName"]]);
        echo "

                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "LastName"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Date of birth"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
                                </div>
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Phone Number"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "placeobirth", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Place of Birth"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Address"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "email"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "academicyear", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "email"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "email"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bloodGroup", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "email"]]);
        echo "
                            </div>




                            <div class=\"col-12 hidden\">
                                <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                            </div>

                            <div class=\"col-12\">
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'widget', ["attr" => ["class" => "btn bgcolor text-white t500 btn-block py-2 mt-2"]]);
        echo "

                            </div>



                            ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                        </form>


                </div>
            </div>
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function(){
        \$( \"#buttonajou\" ).submit(function() {
           alert(\"dali\");
        });
    });
    </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 134
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_joinspark($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        // line 138
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/Default/inscritetud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 138,  264 => 137,  253 => 134,  244 => 133,  225 => 124,  216 => 118,  207 => 112,  193 => 101,  183 => 94,  173 => 87,  163 => 80,  153 => 73,  143 => 66,  133 => 59,  123 => 52,  113 => 45,  102 => 37,  93 => 31,  62 => 4,  53 => 3,  31 => 1,);
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



                        <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" >
                            {{ form_start(form)}}

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                {{ form_widget(form.firstName , {'attr': {'class':'form-control required','placeholder':'FirstName'}}) }}

                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                {{ form_widget(form.lastName , {'attr': {'class':'form-control required','placeholder':'LastName'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                {{ form_widget(form.birthDay , {'attr': {'class':'form-control required','placeholder':'Date of birth'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
                                </div>
                                {{ form_widget(form.phone , {'attr': {'class':'form-control required','placeholder':'Phone Number'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {{ form_widget(form.placeobirth , {'attr': {'class':'form-control required','placeholder':'Place of Birth'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {{ form_widget(form.address , {'attr': {'class':'form-control required','placeholder':'Address'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {{ form_widget(form.email , {'attr': {'class':'form-control required','placeholder':'email'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {{ form_widget(form.academicyear , {'attr': {'class':'form-control required','placeholder':'email'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {{ form_widget(form.gender, {'attr': {'class':'form-control required','placeholder':'email'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {{ form_widget(form.bloodGroup, {'attr': {'class':'form-control required','placeholder':'email'}}) }}
                            </div>




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
            <script src=\"{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}\"></script>
<script>
    \$(function(){
        \$( \"#buttonajou\" ).submit(function() {
           alert(\"dali\");
        });
    });
    </script>
            {% endblock %}
            {% block body %}

            {% endblock %}

            {% block joinspark %}

{% endblock %}", "@Etudiant/Default/inscritetud.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\Default\\inscritetud.html.twig");
    }
}
