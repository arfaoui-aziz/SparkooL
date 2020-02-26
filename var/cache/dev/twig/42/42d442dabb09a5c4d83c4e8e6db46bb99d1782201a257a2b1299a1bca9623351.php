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

/* @Teacher/Teacher/Front/udateLogin.html.twig */
class __TwigTemplate_7890d6866b70c744dc989d260f737a9737c16f08e228d2330fb14c5404ae92e4 extends \Twig\Template
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
        return "@Teacher/Teacher/Front/interfaceTeacher.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/Front/udateLogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Teacher/Teacher/Front/udateLogin.html.twig"));

        $this->parent = $this->loadTemplate("@Teacher/Teacher/Front/interfaceTeacher.html.twig", "@Teacher/Teacher/Front/udateLogin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEndimgg-2.png"), "html", null, true);
        echo "\") no-repeat center center / 100% 100%;\">

    <div class=\"container\" style=\"z-index: 2\">
        <div class=\"center\">
            <h2 class=\"text-white h2 t600 mb-2\">Teacher Space</h2>
        </div>
        <div class=\"row topmargin justify-content-end clearfix\">
            <div class=\"col-lg-6\">
                <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Change Login Informations</a>
                    </li>

                </ul>
                <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
                    <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">

                            <div class=\"form-result\"></div>
                            <form class=\"row home-moving-form position-relative mb-0\" method=\"post\">
                                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                                <div class=\"form-process\"></div>

                                <div class=\"col-sm-6 input-group form-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                    </div>
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>

                                <div class=\"col-sm-6 input-group form-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text nobg\"><i class=\"fas fa-key\"></i></span>
                                    </div>
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "













                                <div class=\"col-12\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Confirm", []), 'widget');
        echo "
                                </div>

";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                            </form>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
                <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/ed2.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

            </div>
        </div>
    </div>

    <div class=\"svg-separator\">
        <div>
            <svg preserveAspectRatio=\"xMidYMax meet\" viewBox=\"0 0 1600 100\"  data-height=\"100\">
                <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
\t\t\t\t\t\tC979.5,96,980,56,1040,56z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
\t\t\t\t\t\tz\"></path>
                <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z\"></path>
                <path style=\"fill: rgb(255, 255, 255);\" d=\"M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z\"></path>
            </svg>
            <div class=\"bg-white\" style=\"height: 150px\"></div>
        </div>
    </div>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Teacher/Teacher/Front/udateLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 74,  172 => 67,  166 => 64,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  107 => 38,  97 => 31,  87 => 24,  83 => 23,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Teacher/Teacher/Front/interfaceTeacher.html.twig'%}

{% block body %}
    <section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"{{ asset('FrontEnd\\img\\bg-2.png')}}\") no-repeat center center / 100% 100%;\">

    <div class=\"container\" style=\"z-index: 2\">
        <div class=\"center\">
            <h2 class=\"text-white h2 t600 mb-2\">Teacher Space</h2>
        </div>
        <div class=\"row topmargin justify-content-end clearfix\">
            <div class=\"col-lg-6\">
                <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Change Login Informations</a>
                    </li>

                </ul>
                <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
                    <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">

                            <div class=\"form-result\"></div>
                            <form class=\"row home-moving-form position-relative mb-0\" method=\"post\">
                                {{ form_start(form) }}
                                {{ form_row(form._token) }}
                                <div class=\"form-process\"></div>

                                <div class=\"col-sm-6 input-group form-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                    </div>
                                    {{ form_widget (form.username , {'attr': {'class':'form-control'}}) }}
                                </div>

                                <div class=\"col-sm-6 input-group form-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text nobg\"><i class=\"fas fa-key\"></i></span>
                                    </div>
                                    {{ form_widget (form.password , {'attr': {'class':'form-control'}}) }}
                                </div>
                                {{ form_widget (form.email , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.id , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.firstName , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.lastName , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.gender , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.joiningDate , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.address, {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.phone  , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.picture , {'attr': {'class': 'hidden'}}) }}
                                {{ form_widget (form.birthDay , {'attr': {'class': 'hidden'}}) }}













                                <div class=\"col-12\">
                                    {{ form_widget(form.Confirm) }}
                                </div>

{{ form_end(form,{'render_rest': false}) }}
                            </form>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
                <img src=\"{{ asset('FrontEnd/img/ed2.png')}}\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

            </div>
        </div>
    </div>

    <div class=\"svg-separator\">
        <div>
            <svg preserveAspectRatio=\"xMidYMax meet\" viewBox=\"0 0 1600 100\"  data-height=\"100\">
                <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
\t\t\t\t\t\tC979.5,96,980,56,1040,56z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
\t\t\t\t\t\tz\"></path>
                <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z\"></path>
                <path style=\"fill: rgb(255, 255, 255);\" d=\"M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z\"></path>
            </svg>
            <div class=\"bg-white\" style=\"height: 150px\"></div>
        </div>
    </div>

    </section>
{% endblock body %}", "@Teacher/Teacher/Front/udateLogin.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\TeacherBundle\\Resources\\views\\Teacher\\Front\\udateLogin.html.twig");
    }
}
