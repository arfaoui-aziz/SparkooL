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

/* @Sonia/club/ajouterclub.html.twig */
class __TwigTemplate_744c173c9c5e4716bdee3651246dd2e9983753486644cebdaa21190d94285b21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/club/ajouterclub.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/club/ajouterclub.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Sonia/club/ajouterclub.html.twig", 1);
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
                    <h3>All Clubs Data</h3>
                </div>

            </div>




                <form class=\"new-added-form\" method=\"POST\">
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                        ";
        // line 31
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomClub", []), 'errors')) <= 0)) {
            // line 32
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomClub", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        ";
        } else {
            // line 34
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomClub", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                            <div class=\"invalid-feedback\">
                                ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomClub", []), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 39
        echo "                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Members *</label>
                            ";
        // line 43
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "members", []), 'errors')) <= 0)) {
            // line 44
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "members", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 46
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "members", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "members", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 51
        echo "                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Type Of Activity *</label>
                            ";
        // line 55
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "activity", []), 'errors')) <= 0)) {
            // line 56
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "activity", []), 'widget', ["attr" => ["class" => "select2"]]);
            echo "
                            ";
        } else {
            // line 58
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "activity", []), 'widget', ["attr" => ["class" => "select2 is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "activity", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 63
        echo "                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
        // line 67
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'errors')) <= 0)) {
            // line 68
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 70
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 75
        echo "                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Date Of Creation *</label>
                            ";
        // line 80
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateCreation", []), 'errors')) <= 0)) {
            // line 81
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateCreation", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                            <i class=\"far fa-calendar-alt\"></i>
                            ";
        } else {
            // line 84
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateCreation", []), 'widget', ["attr" => ["class" => "form-control air-datepicker is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateCreation", []), 'errors');
            echo "
                                    <i class=\"far fa-calendar-alt\"></i>
                                </div>
                            ";
        }
        // line 90
        echo "                        </div>
                                            <br>
                    </div>
             ";
        // line 93
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
        return "@Sonia/club/ajouterclub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 93,  220 => 90,  213 => 86,  207 => 84,  200 => 81,  198 => 80,  191 => 75,  185 => 72,  179 => 70,  173 => 68,  171 => 67,  165 => 63,  159 => 60,  153 => 58,  147 => 56,  145 => 55,  139 => 51,  133 => 48,  127 => 46,  121 => 44,  119 => 43,  113 => 39,  107 => 36,  101 => 34,  95 => 32,  93 => 31,  86 => 27,  60 => 3,  51 => 2,  29 => 1,);
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
                    <h3>All Clubs Data</h3>
                </div>

            </div>




                <form class=\"new-added-form\" method=\"POST\">
                    {{   form_start(f) }}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                        {% if form_errors(f.nomClub)|length <= 0 %}
                            {{ form_widget (f.nomClub, {'attr': {'class':'form-control'}}) }}
                        {% else %}
                            {{ form_widget (f.nomClub , {'attr': {'class':'form-control is-invalid'}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(f.nomClub) }}
                            </div>
                        {% endif %}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Members *</label>
                            {% if form_errors(f.members)|length <= 0 %}
                                {{ form_widget (f.members , {'attr': {'class':'form-control'}}) }}
                            {% else %}
                                {{ form_widget (f.members , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.members) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Type Of Activity *</label>
                            {% if form_errors(f.activity)|length <= 0 %}
                                {{ form_widget (f.activity , {'attr': {'class':'select2' }}) }}
                            {% else %}
                                {{ form_widget (f.activity , {'attr': {'class':'select2 is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.activity) }}
                                </div>
                            {% endif %}
                        </div>

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
                            <label> Date Of Creation *</label>
                            {% if form_errors(f.dateCreation)|length <= 0 %}
                            {{ form_widget ( f.dateCreation , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}
                            <i class=\"far fa-calendar-alt\"></i>
                            {% else %}
                                {{ form_widget (f.dateCreation , {'attr': {'class':'form-control air-datepicker is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(f.dateCreation) }}
                                    <i class=\"far fa-calendar-alt\"></i>
                                </div>
                            {% endif %}
                        </div>
                                            <br>
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

", "@Sonia/club/ajouterclub.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\club\\ajouterclub.html.twig");
    }
}
