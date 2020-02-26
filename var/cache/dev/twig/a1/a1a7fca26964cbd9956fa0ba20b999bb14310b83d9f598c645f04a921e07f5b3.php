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
class __TwigTemplate_63bcffa1e2a9e9dbe633d310427589224830a5c41be73be0ba93bc3fac1ab57c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'sonia' => [$this, 'block_sonia'],
            'form' => [$this, 'block_form'],
            'body' => [$this, 'block_body'],
            'join' => [$this, 'block_join'],
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
    public function block_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 5
        echo "     <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">
                        Attendance form
                    </a>
                </li>

            </ul>



            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">

                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">



                        <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" novalidate>
                            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                ";
        // line 27
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'errors')) <= 0)) {
            // line 28
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "FirstName"]]);
            echo "
                                ";
        } else {
            // line 30
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "FirstName"]]);
            echo "
                                ";
        }
        // line 32
        echo "
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                ";
        // line 39
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'errors')) <= 0)) {
            // line 40
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "LastName"]]);
            echo "
                                ";
        } else {
            // line 42
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "LastName"]]);
            echo "
                                ";
        }
        // line 44
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                ";
        // line 50
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'errors')) <= 0)) {
            // line 51
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "Date of birth"]]);
            echo "
                                ";
        } else {
            // line 53
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "Date of birth"]]);
            echo "
                                ";
        }
        // line 55
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
                                </div>
                                ";
        // line 61
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'errors')) <= 0)) {
            // line 62
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "Phone Number"]]);
            echo "
                                    ";
        } else {
            // line 64
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "Phone Number"]]);
            echo "
                                ";
        }
        // line 66
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 72
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'errors')) <= 0)) {
            // line 73
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "placeobirth", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Place of Birth"]]);
            echo "
                                ";
        } else {
            // line 75
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "placeobirth", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "Place of Birth"]]);
            echo "
                                ";
        }
        // line 77
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 83
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'errors')) <= 0)) {
            // line 84
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "Address"]]);
            echo "
                                ";
        } else {
            // line 86
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "Address"]]);
            echo "
                                ";
        }
        // line 88
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 94
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors')) <= 0)) {
            // line 95
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "email"]]);
            echo "
                                ";
        } else {
            // line 97
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "email"]]);
            echo "
                                ";
        }
        // line 99
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 105
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "academicyear", []), 'errors')) <= 0)) {
            // line 106
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "academicyear", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "email"]]);
            echo "
                                ";
        } else {
            // line 108
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "academicyear", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "academicyear"]]);
            echo "
                                ";
        }
        // line 110
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 116
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'errors')) <= 0)) {
            // line 117
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "gender"]]);
            echo "
                                ";
        } else {
            // line 119
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "gender"]]);
            echo "
                                ";
        }
        // line 121
        echo "                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                ";
        // line 127
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bloodGroup", []), 'errors')) <= 0)) {
            // line 128
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bloodGroup", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "bloodGroup"]]);
            echo "
                                ";
        } else {
            // line 130
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bloodGroup", []), 'widget', ["attr" => ["class" => "form-control is-invalid", "placeholder" => "bloodGroup"]]);
            echo "
                                ";
        }
        // line 132
        echo "                            </div>




                            <div class=\"col-12 hidden\">
                                <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                            </div>

                            <div class=\"col-12\">
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'widget', ["attr" => ["class" => "btn bgcolor text-white t500 btn-block py-2 mt-2"]]);
        echo "

                            </div>



                            ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                        </form>
                </div>
            </div>
    </div>
    <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
        <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/ed2.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

    </div>
    </div>
    </div>
            <script src=\"";
        // line 159
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

    // line 168
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 169
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_join($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "join"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "join"));

        
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
        return array (  400 => 171,  389 => 169,  380 => 168,  361 => 159,  353 => 154,  344 => 148,  335 => 142,  323 => 132,  317 => 130,  311 => 128,  309 => 127,  301 => 121,  295 => 119,  289 => 117,  287 => 116,  279 => 110,  273 => 108,  267 => 106,  265 => 105,  257 => 99,  251 => 97,  245 => 95,  243 => 94,  235 => 88,  229 => 86,  223 => 84,  221 => 83,  213 => 77,  207 => 75,  201 => 73,  199 => 72,  191 => 66,  185 => 64,  179 => 62,  177 => 61,  169 => 55,  163 => 53,  157 => 51,  155 => 50,  147 => 44,  141 => 42,  135 => 40,  133 => 39,  124 => 32,  118 => 30,  112 => 28,  110 => 27,  102 => 22,  98 => 21,  80 => 5,  71 => 4,  54 => 2,  32 => 1,);
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
{% block form %}
     <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">
                        Attendance form
                    </a>
                </li>

            </ul>



            <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">

                <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">



                        <form class=\"row home-moving-form position-relative mb-0\"  method=\"post\" novalidate>
                            {{ form_start(form)}}
                            {{ form_row(form._token) }}
                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                {% if form_errors(form.firstName)|length <= 0 %}
                                {{ form_widget(form.firstName , {'attr': {'class':'form-control','placeholder':'FirstName'}}) }}
                                {% else %}
                                    {{ form_widget(form.firstName , {'attr': {'class':'form-control is-invalid','placeholder':'FirstName'}}) }}
                                {% endif %}

                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                </div>
                                {% if form_errors(form.lastName)|length <= 0 %}
                                {{ form_widget(form.lastName , {'attr': {'class':'form-control ','placeholder':'LastName'}}) }}
                                {% else %}
                                    {{ form_widget(form.lastName , {'attr': {'class':'form-control is-invalid','placeholder':'LastName'}}) }}
                                {% endif %}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                </div>
                                {% if form_errors(form.birthDay)|length <= 0 %}
                                {{ form_widget(form.birthDay , {'attr': {'class':'form-control ','placeholder':'Date of birth'}}) }}
                                {% else %}
                                    {{ form_widget(form.birthDay , {'attr': {'class':'form-control is-invalid','placeholder':'Date of birth'}}) }}
                                {% endif %}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
                                </div>
                                {% if form_errors(form.phone)|length <= 0 %}
                                {{ form_widget(form.phone , {'attr': {'class':'form-control ','placeholder':'Phone Number'}}) }}
                                    {% else %}
                                    {{ form_widget(form.phone , {'attr': {'class':'form-control is-invalid','placeholder':'Phone Number'}}) }}
                                {% endif %}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {% if form_errors(form.phone)|length <= 0 %}
                                {{ form_widget(form.placeobirth , {'attr': {'class':'form-control','placeholder':'Place of Birth'}}) }}
                                {% else %}
                                {{ form_widget(form.placeobirth , {'attr': {'class':'form-control is-invalid','placeholder':'Place of Birth'}}) }}
                                {% endif %}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {% if form_errors(form.address)|length <= 0 %}
                                {{ form_widget(form.address , {'attr': {'class':'form-control ','placeholder':'Address'}}) }}
                                {% else %}
                                    {{ form_widget(form.address , {'attr': {'class':'form-control is-invalid','placeholder':'Address'}}) }}
                                {% endif %}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {% if form_errors(form.email)|length <= 0 %}
                                {{ form_widget(form.email , {'attr': {'class':'form-control ','placeholder':'email'}}) }}
                                {% else %}
                                    {{ form_widget(form.email , {'attr': {'class':'form-control is-invalid','placeholder':'email'}}) }}
                                {% endif %}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {% if form_errors(form.academicyear)|length <= 0 %}
                                {{ form_widget(form.academicyear , {'attr': {'class':'form-control ','placeholder':'email'}}) }}
                                {% else %}
                                    {{ form_widget(form.academicyear , {'attr': {'class':'form-control is-invalid','placeholder':'academicyear'}}) }}
                                {% endif %}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {% if form_errors(form.gender)|length <= 0 %}
                                {{ form_widget(form.gender, {'attr': {'class':'form-control','placeholder':'gender'}}) }}
                                {% else %}
                                    {{ form_widget(form.gender, {'attr': {'class':'form-control is-invalid','placeholder':'gender'}}) }}
                                {% endif%}
                            </div>

                            <div class=\"col-sm-6 input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                </div>
                                {% if form_errors(form.bloodGroup)|length <= 0 %}
                                {{ form_widget(form.bloodGroup, {'attr': {'class':'form-control','placeholder':'bloodGroup'}}) }}
                                {% else %}
                                    {{ form_widget(form.bloodGroup, {'attr': {'class':'form-control is-invalid','placeholder':'bloodGroup'}}) }}
                                {% endif %}
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
    </div>
    <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
        <img src=\"{{ asset('FrontEnd/img/ed2.png')}}\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

    </div>
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
            {% block join %}
{% endblock %}", "@Etudiant/Default/inscritetud.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\Default\\inscritetud.html.twig");
    }
}
