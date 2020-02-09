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

/* @Sonia/evenement/modifierEvent.html.twig */
class __TwigTemplate_776503b226e761ef943c2402d36fd26fb963ecbc73b52a8d75ed25e70f54bdf3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/modifierEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/modifierEvent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Sonia/evenement/modifierEvent.html.twig", 1);
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

                <form class=\"new-added-form\" method=\"POST\">
                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "
                    ";
        // line 23
        if ((($context["type"] ?? $this->getContext($context, "type")) == "Evenement")) {
            // line 24
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>




                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 43
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                        ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>

                    ";
        } elseif ((        // line 72
($context["type"] ?? $this->getContext($context, "type")) == "Sport Activity")) {
            // line 73
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 90
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>


                    ";
        } elseif ((        // line 123
($context["type"] ?? $this->getContext($context, "type")) == "Field Trip")) {
            // line 124
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 140
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 141
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Destination *</label>
                            ";
            // line 152
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            ";
            // line 163
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>

                    ";
        } else {
            // line 169
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 172
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 185
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 186
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
            // line 193
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 199
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            ";
            // line 205
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Award *</label>
                            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "award", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 216
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            ";
            // line 222
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>
                    ";
        }
        // line 227
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end', ["render_rest" => false]);
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
        return "@Sonia/evenement/modifierEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 227,  385 => 222,  376 => 216,  367 => 210,  359 => 205,  350 => 199,  341 => 193,  332 => 186,  330 => 185,  320 => 178,  311 => 172,  306 => 169,  297 => 163,  288 => 157,  280 => 152,  272 => 147,  264 => 141,  262 => 140,  252 => 133,  243 => 127,  238 => 124,  236 => 123,  227 => 117,  218 => 111,  210 => 106,  202 => 101,  193 => 95,  186 => 90,  184 => 89,  174 => 82,  165 => 76,  160 => 73,  158 => 72,  150 => 67,  141 => 61,  133 => 56,  124 => 50,  115 => 43,  113 => 42,  103 => 35,  92 => 27,  87 => 24,  85 => 23,  81 => 22,  60 => 3,  51 => 2,  29 => 1,);
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

                <form class=\"new-added-form\" method=\"POST\">
                    {{   form_start(f) }}
                    {% if type == \"Evenement\" %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>




                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                        {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>

                    {% elseif type == \"Sport Activity\" %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            {{ form_widget (f.theme , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>


                    {% elseif type == \"Field Trip\" %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Destination *</label>
                            {{ form_widget (f.destination , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>

                    {% else %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            {{ form_widget (f.theme , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Award *</label>
                            {{ form_widget (f.award , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>
                    {% endif %}
                    {{form_end(f,{'render_rest': false})}}

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

", "@Sonia/evenement/modifierEvent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\evenement\\modifierEvent.html.twig");
    }
}
