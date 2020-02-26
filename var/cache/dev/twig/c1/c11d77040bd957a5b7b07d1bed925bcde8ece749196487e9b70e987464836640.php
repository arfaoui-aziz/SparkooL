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

/* @Etudiant/Default/AddsubjectForum.html.twig */
class __TwigTemplate_e90d377a3e8dff8734e76e49a0d5ddf71e53bc9daf4a724d788cb8cce951565e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formetud' => [$this, 'block_formetud'],
            'taswira' => [$this, 'block_taswira'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/AddsubjectForum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/AddsubjectForum.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Etudiant/Default/AddsubjectForum.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_formetud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        // line 3
        echo "<section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEndimgg-2.png"), "html", null, true);
        echo "\") no-repeat center center / 100% 100%;\">

<div class=\"container\" style=\"z-index: 2\">
    <div class=\"center\">
        <h2 class=\"text-white h2 t600 mb-2\">Add a new subject .</h2>
        <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
    </div>
    <div class=\"row topmargin justify-content-end clearfix\">
        <div class=\"col-lg-6\" style=\"margin: 0% 26%;\">
            <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Fill this form to submit</a>
                </li>

            </ul>


            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">


                        <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" novalidate>
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"form-process\" ></div>
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                ";
        // line 32
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors')) <= 0)) {
            // line 33
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Subject Title"]]);
            echo "
                                ";
        } else {
            // line 35
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "Subject Title"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 40
        echo "                            </div>

                            <div class=\" input-group form-group\">

                            </div>
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", []), 'widget', ["attr" => ["class" => "hidden"], "value" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]);
        echo "
                            <div class=\" input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                ";
        // line 50
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'errors')) <= 0)) {
            // line 51
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'widget', ["attr" => ["class" => "form-control required", "placeholder" => "Subject"]]);
            echo "
                                ";
        } else {
            // line 53
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "Subject"]]);
            echo "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 58
        echo "                            </div>

                            <div class=\" input-group form-group\">

                            </div>

                            <div class=\" input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                ";
        // line 68
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'errors')) <= 0)) {
            // line 69
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                ";
        } else {
            // line 71
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 76
        echo "                            </div>


                            <div class=\"col-12 hidden\">
                                <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                            </div>

                            <div class=\"col-12\">
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget', ["attr" => ["class" => "btn bgcolor text-white t500 btn-block py-2 mt-2"]]);
        echo "
                            </div>

                            ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                        </form>

                </div>
            </div>

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_taswira($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "taswira"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "taswira"));

        // line 95
        echo "                <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">


                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_cloud1($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud1"));

        // line 101
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_cloud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        // line 109
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 113
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_joinspark($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        // line 117
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/Default/AddsubjectForum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 117,  328 => 116,  317 => 113,  308 => 112,  297 => 109,  288 => 108,  277 => 105,  268 => 104,  257 => 101,  248 => 100,  234 => 95,  225 => 94,  208 => 87,  202 => 84,  192 => 76,  186 => 73,  180 => 71,  174 => 69,  172 => 68,  160 => 58,  154 => 55,  148 => 53,  142 => 51,  140 => 50,  132 => 45,  125 => 40,  119 => 37,  113 => 35,  107 => 33,  105 => 32,  97 => 27,  92 => 25,  66 => 3,  57 => 2,  35 => 1,);
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
{% block  formetud %}
<section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"{{ asset('FrontEnd\\img\\bg-2.png')}}\") no-repeat center center / 100% 100%;\">

<div class=\"container\" style=\"z-index: 2\">
    <div class=\"center\">
        <h2 class=\"text-white h2 t600 mb-2\">Add a new subject .</h2>
        <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
    </div>
    <div class=\"row topmargin justify-content-end clearfix\">
        <div class=\"col-lg-6\" style=\"margin: 0% 26%;\">
            <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Fill this form to submit</a>
                </li>

            </ul>


            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">


                        <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" novalidate>
                            {{ form_start(form)}}
                            <div class=\"form-process\" ></div>
                            {{ form_row(form._token) }}
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                {% if form_errors(form.title)|length <= 0 %}
                                {{ form_widget(form.title , {'attr': {'class':'form-control','placeholder':'Subject Title'}}) }}
                                {% else %}
                                    {{ form_widget(form.title , {'attr': {'class':'form-control is-invalid','placeholder':'Subject Title'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.title) }}
                                </div>
                                {% endif %}
                            </div>

                            <div class=\" input-group form-group\">

                            </div>
                            {{ form_widget(form.auteur, {'attr': {'class':'hidden'},value: app.user.id})}}
                            <div class=\" input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                {% if form_errors(form.subject)|length <= 0 %}
                                {{ form_widget(form.subject , {'attr': {'class':'form-control required','placeholder':'Subject'}}) }}
                                {% else %}
                                    {{ form_widget(form.subject , {'attr': {'class':'form-control is-invalid','placeholder':'Subject'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.subject) }}
                                    </div>
                                {% endif %}
                            </div>

                            <div class=\" input-group form-group\">

                            </div>

                            <div class=\" input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                {% if form_errors(form.type)|length <= 0 %}
                                {{ form_widget(form.type , {'attr': {'class':'form-control'}}) }}
                                {% else %}
                                    {{ form_widget(form.type , {'attr': {'class':'form-control is-invalid'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.type) }}
                                    </div>
                                {% endif %}
                            </div>


                            <div class=\"col-12 hidden\">
                                <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                            </div>

                            <div class=\"col-12\">
                            {{ form_widget(form.Add , {'attr': {'class':'btn bgcolor text-white t500 btn-block py-2 mt-2'}}) }}
                            </div>

                            {{ form_end(form , {'render_rest':false}) }}
                        </form>

                </div>
            </div>

            {% endblock %}
            {% block taswira %}
                <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">


                </div>
            {% endblock %}
{% block cloud1 %}

{% endblock %}

{% block body %}

{% endblock %}

{% block cloud %}

{% endblock %}

{% block container %}

{% endblock %}

            {% block joinspark %}

            {% endblock %}", "@Etudiant/Default/AddsubjectForum.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\Default\\AddsubjectForum.html.twig");
    }
}
