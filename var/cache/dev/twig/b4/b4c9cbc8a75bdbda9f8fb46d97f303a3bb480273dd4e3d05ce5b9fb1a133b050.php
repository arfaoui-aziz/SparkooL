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

/* @Teacher\Teacher\AffectMark.html.twig */
class __TwigTemplate_d8160292fc804e8b27954a9bfc98c7b4c7659d84935e9f479077a4190e0ec4e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'cloud' => [$this, 'block_cloud'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\AffectMark.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher\\Teacher\\AffectMark.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Teacher\\Teacher\\AffectMark.html.twig", 1);
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
        echo "    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Send Reclamation</a>
    </li>

    </ul>
    <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
        <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">


            <div class=\"form-result\"></div>
            <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" >
                <div class=\"form-process\"></div>
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                <div class=\"col-sm-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                    </div>
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cC", []), 'widget', ["attr" => ["class" => "form-control required", "placehoder" => "cc"]]);
        echo "

                </div>


                <div class=\"col-lg-12-12 col-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                    </div>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "exam", []), 'widget', ["attr" => ["class" => "form-control required", "placehoder" => "exam"]]);
        echo "

                </div>

                <div class=\"col-lg-12-12 col-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                    </div>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'widget', ["attr" => ["class" => "form-control required"]]);
        echo "

                </div>

                <div class=\"col-lg-12-12 col-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                    </div>
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "student", []), 'widget', ["attr" => ["class" => "form-control required"]]);
        echo "

                </div>

                <div class=\"col-12 hidden\">

                </div>

                <div class=\"col-12\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Affect", []), 'widget', ["attr" => ["class" => "btn bgcolor text-white t500 btn-block py-2 mt-2"]]);
        echo "

                </div>


            </form>
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
    <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/ed2.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_cloud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher\\Teacher\\AffectMark.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 74,  183 => 73,  166 => 71,  150 => 65,  142 => 60,  133 => 54,  121 => 45,  110 => 37,  99 => 29,  87 => 20,  79 => 15,  75 => 14,  62 => 3,  53 => 2,  31 => 1,);
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
{% block form  %}
    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Send Reclamation</a>
    </li>

    </ul>
    <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
        <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">


            <div class=\"form-result\"></div>
            <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" >
                <div class=\"form-process\"></div>
{{ form_start(form) }}
                {{ form_row(form._token) }}
                <div class=\"col-sm-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                    </div>
                    {{ form_widget (form.cC , {'attr': {'class':'form-control required', 'placehoder' : 'cc'}}) }}

                </div>


                <div class=\"col-lg-12-12 col-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                    </div>
                    {{ form_widget (form.exam , {'attr': {'class':'form-control required', 'placehoder' : 'exam'}}) }}

                </div>

                <div class=\"col-lg-12-12 col-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                    </div>
                    {{ form_widget (form.subject , {'attr': {'class':'form-control required'}}) }}

                </div>

                <div class=\"col-lg-12-12 col-12 input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                    </div>
                    {{ form_widget (form.student , {'attr': {'class':'form-control required'}}) }}

                </div>

                <div class=\"col-12 hidden\">

                </div>

                <div class=\"col-12\">
                    {{ form_widget (form.Affect , {'attr': {'class':'btn bgcolor text-white t500 btn-block py-2 mt-2'}}) }}

                </div>


            </form>
{{ form_end(form) }}
        </div>
    </div>
    </div>
    <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
        <img src=\"{{ asset('FrontEnd/img/ed2.png')}}\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

    </div>
    </div>
    </div>
{% endblock %}
{% block cloud %}
{% endblock      %}
{% block body %}

{% endblock %}
", "@Teacher\\Teacher\\AffectMark.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\AffectMark.html.twig");
    }
}
