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

/* @Parent\Parent\ajoutParent.html.twig */
class __TwigTemplate_0e3313f02734c14259357a1fe35580aa2b68e80c5f3a62a7de92d856d961a777 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'ghasoussa' => [$this, 'block_ghasoussa'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent\\Parent\\ajoutParent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent\\Parent\\ajoutParent.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Parent\\Parent\\ajoutParent.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_ghasoussa($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ghasoussa"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ghasoussa"));

        // line 6
        echo "    <section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url('demos/movers/images/bg-2.png') no-repeat center center / 100% 100%;\">

        <div class=\"container\" style=\"z-index: 2\">
            <div class=\"center\">
                <h2 class=\"text-white h2 t600 mb-2\">Parent Space</h2>
                <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
            </div>

            <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">\"Student Name\"</a>
                </li>

            </ul>
            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">



                        <div class=\"form-result\"></div>
                        <form class=\"row home-moving-form position-relative mb-0\" method=\"post\">
                            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                            <div class=\"form-process\"></div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First Name"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-map-marker-alt\"></i></span>
                                </div>
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "address"]]);
        echo "
                            </div>


                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fa fa-venus-mars\"></i></span>
                                </div>
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                            </div>



                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-user-md\"></i></span>
                                </div>
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupation", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Occupation"]]);
        echo "
                            </div>




                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "E-Mail"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
                                </div>
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Phone Number"]]);
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-id-card\"></i></span>
                                </div>
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "id"]]);
        echo "
                            </div>



                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-portrait\"></i></span>
                                </div>
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>


                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"far fa-calendar-alt\"></i></span>
                                </div>
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "
                            </div>




                            <div class=\"col-12\">
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Submit", []), 'widget');
        echo "
                            </div>

                            <input type=\"hidden\" name=\"prefix\" value=\"home-moving-form-\">
                            <input type=\"hidden\" name=\"subject\" value=\"Home Moving Request\">
                            <input type=\"hidden\" name=\"html_title\" value=\"Home Moving\">


                            ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                        </form>

                </div>


    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Parent\\Parent\\ajoutParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 130,  215 => 122,  204 => 114,  194 => 107,  183 => 99,  171 => 90,  161 => 83,  151 => 76,  138 => 66,  126 => 57,  115 => 49,  105 => 42,  95 => 35,  84 => 27,  61 => 6,  52 => 5,  30 => 3,);
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

{% extends 'baseFront.html.twig'%}

{% block ghasoussa %}
    <section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url('demos/movers/images/bg-2.png') no-repeat center center / 100% 100%;\">

        <div class=\"container\" style=\"z-index: 2\">
            <div class=\"center\">
                <h2 class=\"text-white h2 t600 mb-2\">Parent Space</h2>
                <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
            </div>

            <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">\"Student Name\"</a>
                </li>

            </ul>
            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">



                        <div class=\"form-result\"></div>
                        <form class=\"row home-moving-form position-relative mb-0\" method=\"post\">
                            {{ form_start(form) }}

                            <div class=\"form-process\"></div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                {{ form_widget (form.firstName , {'attr': {'class':'form-control','placeholder':'First Name'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                {{ form_widget (form.lastName , {'attr': {'class':'form-control','placeholder':'Last Name'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-map-marker-alt\"></i></span>
                                </div>
                                {{ form_widget (form.address , {'attr': {'class':'form-control','placeholder':'address'}}) }}
                            </div>


                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fa fa-venus-mars\"></i></span>
                                </div>
                                {{ form_widget (form.gender , {'attr': {'class':'select2'}}) }}
                            </div>



                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-user-md\"></i></span>
                                </div>
                                {{ form_widget (form.occupation , {'attr': {'class':'form-control','placeholder':'Occupation'}}) }}
                            </div>




                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                {{ form_widget (form.email , {'attr': {'class':'form-control','placeholder':'E-Mail'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
                                </div>
                                {{ form_widget (form.phone , {'attr': {'class':'form-control','placeholder':'Phone Number'}}) }}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-id-card\"></i></span>
                                </div>
                                {{ form_widget (form.id , {'attr': {'class':'form-control','placeholder':'id'}}) }}
                            </div>



                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"fas fa-portrait\"></i></span>
                                </div>
                                {{ form_widget (form.picture , {'attr': {'class':'form-control'}}) }}
                            </div>


                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"far fa-calendar-alt\"></i></span>
                                </div>
                                {{ form_widget (form.birthDay , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}
                            </div>




                            <div class=\"col-12\">
                                {{ form_widget(form.Submit) }}
                            </div>

                            <input type=\"hidden\" name=\"prefix\" value=\"home-moving-form-\">
                            <input type=\"hidden\" name=\"subject\" value=\"Home Moving Request\">
                            <input type=\"hidden\" name=\"html_title\" value=\"Home Moving\">


                            {{ form_end(form,{'render_rest': false}) }}
                        </form>

                </div>


    </section>
{% endblock  %}
{% block body %}
{% endblock %}", "@Parent\\Parent\\ajoutParent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Parent\\ajoutParent.html.twig");
    }
}
