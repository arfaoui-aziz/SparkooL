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
class __TwigTemplate_b1c22aa98ffb249f916f63860b535e345e780c46431f3914ee6ae852895d0367 extends \Twig\Template
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
<script>

    function surligne(champ, erreur)
    {
        if(erreur)
            champ.style.backgroundColor = \"#fba\";
        else
            champ.style.backgroundColor = \"#8FBC8F\";
    }


    function verifPseudo(champ)
    {
    if(champ.value.length < 2 || champ.value.length > 25)
    {
    surligne(champ, true);
    return false;

    }
    else
    {
    surligne(champ, false);
    return true;
    }
    }

    function verifForm(f)
    {
        var pseudoOk = verifPseudo(f.pseudo);


        if(pseudoOk )
            return true;
        else
        {
            alert(\"Veuillez remplir correctement tous les champs\");
            return false;
        }
    }
</script>

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
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Kids Event", "onblur" => "verifPseudo(this)", "name" => "pseudo"]]);
        echo "
                        </div>

                        ";
        // line 69
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typeEvent", []), "setRendered", [], "method");
        // line 70
        echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "The event is about"]]);
        echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "
                            <i class=\"far fa-calendar-alt\"></i>
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Classroom"]]);
        echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>  Participants  *</label>
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>



                        ";
        // line 98
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), "setRendered", [], "method");
        // line 99
        echo "                        ";
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), "setRendered", [], "method");
        // line 100
        echo "                        ";
        $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "award", []), "setRendered", [], "method");
        // line 101
        echo "                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Free"]]);
        echo "
                        </div>

                    </div>
             ";
        // line 112
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
        return array (  205 => 112,  198 => 108,  190 => 103,  186 => 101,  183 => 100,  180 => 99,  178 => 98,  170 => 93,  161 => 87,  150 => 79,  141 => 73,  136 => 70,  134 => 69,  128 => 66,  121 => 62,  60 => 3,  51 => 2,  29 => 1,);
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

<script>

    function surligne(champ, erreur)
    {
        if(erreur)
            champ.style.backgroundColor = \"#fba\";
        else
            champ.style.backgroundColor = \"#8FBC8F\";
    }


    function verifPseudo(champ)
    {
    if(champ.value.length < 2 || champ.value.length > 25)
    {
    surligne(champ, true);
    return false;

    }
    else
    {
    surligne(champ, false);
    return true;
    }
    }

    function verifForm(f)
    {
        var pseudoOk = verifPseudo(f.pseudo);


        if(pseudoOk )
            return true;
        else
        {
            alert(\"Veuillez remplir correctement tous les champs\");
            return false;
        }
    }
</script>

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
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control','placeholder':'Kids Event','onblur':'verifPseudo(this)', 'name': 'pseudo'}}) }}
                        </div>

                        {%  do f.typeEvent.setRendered() %}

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'The event is about'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget ( f.dateEvent , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}
                            <i class=\"far fa-calendar-alt\"></i>
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control','placeholder':'Classroom'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>  Participants  *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>



                        {%  do f.theme.setRendered() %}
                        {%  do f.destination.setRendered() %}
                        {%  do f.award.setRendered() %}
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            {{ form_widget (f.price , {'attr': {'class':'form-control','placeholder':'Free'}}) }}
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
