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

/* @Sonia/evenement/ajouterevent.html.twig */
class __TwigTemplate_789f2c2d76ca224863715880914cd4fd974736358c72fcb3609ffce7d98fa0a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/ajouterevent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/ajouterevent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Sonia/evenement/ajouterevent.html.twig", 1);
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
        <h3>Events</h3>

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
                <form  class=\"new-added-form\" method=\"POST\" onsubmit=\"return verifForm(this)\">
                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
        // line 28
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'errors')) <= 0)) {
            // line 29
            echo "
                               ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Kids Event"]]);
            echo "

                            ";
        } else {
            // line 33
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'errors');
            echo "
                                </div>

                            ";
        }
        // line 39
        echo "

                        </div>

                        ";
        // line 43
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typeEvent", []), "setRendered", [], "method");
        // line 44
        echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label >Description *</label>
                            ";
        // line 47
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'errors')) <= 0)) {
            // line 48
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "The event is about"]]);
            echo "
                            ";
        } else {
            // line 50
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                            <div class=\"invalid-feedback\">
                                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'errors');
            echo "
                            </div>
                            ";
        }
        // line 55
        echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
        // line 61
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'errors')) <= 0)) {
            // line 62
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                                <i class=\"far fa-calendar-alt\"></i>
                            ";
        } else {
            // line 65
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control air-datepicker is-invalid"]]);
            echo "
                            <div class=\"invalid-feedback\">
                            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'errors');
            echo "
                            </div>
                            ";
        }
        // line 70
        echo "                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
        // line 76
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'errors')) <= 0)) {
            // line 77
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Classroom"]]);
            echo "
                            ";
        } else {
            // line 79
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 84
        echo "

                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>  Participants  *</label>
                            ";
        // line 91
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'errors')) <= 0)) {
            // line 92
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 94
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 99
        echo "                        </div>

                        ";
        // line 101
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), "setRendered", [], "method");
        // line 102
        echo "                        ";
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), "setRendered", [], "method");
        // line 103
        echo "                        ";
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "award", []), "setRendered", [], "method");
        // line 104
        echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
        // line 107
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'errors')) <= 0)) {
            // line 108
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                            ";
        } else {
            // line 111
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 113
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 116
        echo "                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            ";
        // line 120
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'errors')) <= 0)) {
            // line 121
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Free"]]);
            echo "

                            ";
        } else {
            // line 124
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), 'errors');
            echo "                                </div>
                            ";
        }
        // line 128
        echo "
                        </div>

                    </div>
             ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "
            </form>


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
        return "@Sonia/evenement/ajouterevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 132,  297 => 128,  292 => 126,  286 => 124,  279 => 121,  277 => 120,  271 => 116,  265 => 113,  259 => 111,  252 => 108,  250 => 107,  245 => 104,  242 => 103,  239 => 102,  237 => 101,  233 => 99,  227 => 96,  221 => 94,  215 => 92,  213 => 91,  204 => 84,  198 => 81,  192 => 79,  186 => 77,  184 => 76,  176 => 70,  170 => 67,  164 => 65,  157 => 62,  155 => 61,  147 => 55,  141 => 52,  135 => 50,  129 => 48,  127 => 47,  122 => 44,  120 => 43,  114 => 39,  107 => 35,  101 => 33,  95 => 30,  92 => 29,  90 => 28,  83 => 24,  60 => 3,  51 => 2,  29 => 1,);
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
                <form  class=\"new-added-form\" method=\"POST\" onsubmit=\"return verifForm(this)\">
                    {{   form_start(f) }}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {% if form_errors(f.nomEvent)|length <= 0 %}

                               {{ form_widget (f.nomEvent, {'attr': {'class':'form-control','placeholder':'Kids Event'}}) }}

                            {% else %}
                                {{ form_widget (f.nomEvent , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.nomEvent) }}
                                </div>

                            {% endif %}


                        </div>

                        {%  do f.typeEvent.setRendered() %}

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label >Description *</label>
                            {% if form_errors(f.description)|length <= 0 %}
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'The event is about'}}) }}
                            {% else %}
                            {{ form_widget (f.description , {'attr': {'class':'form-control is-invalid'}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(f.description) }}
                            </div>
                            {% endif %}

                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {% if form_errors(f.dateEvent)|length <= 0 %}
                            {{ form_widget ( f.dateEvent , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right', } }  ) }}
                                <i class=\"far fa-calendar-alt\"></i>
                            {% else %}
                            {{ form_widget (f.dateEvent, {'attr': {'class':'form-control air-datepicker is-invalid'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(f.dateEvent) }}
                            </div>
                            {% endif %}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {% if form_errors(f.placeEvent)|length <= 0 %}
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control','placeholder':'Classroom'}}) }}
                            {% else %}
                                {{ form_widget (f.placeEvent , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.placeEvent) }}
                                </div>
                            {% endif %}


                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>  Participants  *</label>
                            {% if form_errors(f.nbParticipants)|length <= 0 %}
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                            {% else %}
                                {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.nbParticipants) }}
                                </div>
                            {% endif %}
                        </div>

                        {%  do f.theme.setRendered() %}
                        {%  do f.destination.setRendered() %}
                        {%  do f.award.setRendered() %}

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {% if form_errors(f.budget)|length <= 0 %}
                                {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}

                            {% else %}
                                {{ form_widget (f.budget , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.budget) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            {% if form_errors(f.budget)|length <= 0 %}
                            {{ form_widget (f.price , {'attr': {'class':'form-control','placeholder':'Free'}}) }}

                            {% else %}
                                {{ form_widget (f.price , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.price) }}                                </div>
                            {% endif %}

                        </div>

                    </div>
             {{form_end(f)}}
            </form>


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




{% endblock  %}

", "@Sonia/evenement/ajouterevent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\evenement\\ajouterevent.html.twig");
    }
}
