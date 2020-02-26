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

/* @Admin\Account\AddAccount.html.twig */
class __TwigTemplate_f7e0f02c6b728ffeab9b78d871213bf2a85ef10cc2a30791306e6c51693cc844 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\AddAccount.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\AddAccount.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Account\\AddAccount.html.twig", 1);
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
        echo "    <div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Account Settings Area Start Here -->
    <div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>Add New User</h3>
                    </div>

                </div>
                <form class=\"new-added-form\" method=\"post\" novalidate>
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"row\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label   >ID *</label>
                            ";
        // line 26
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'errors')) <= 0)) {
            // line 27
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 29
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                            <div class=\"invalid-feedback\">
                                ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'errors');
            echo "
                            </div>
";
        }
        // line 34
        echo "                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>First Name *</label>
                            ";
        // line 38
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'errors')) <= 0)) {
            // line 39
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 41
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'errors');
            echo "
                                </div>

                            ";
        }
        // line 47
        echo "                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Last Name *</label>
                            ";
        // line 50
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'errors')) <= 0)) {
            // line 51
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 53
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 58
        echo "                        </div>
                        ";
        // line 59
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'errors')) <= 0)) {
            // line 60
            echo "                        <div class=\"col-xl-3 col-lg-6 col-12 form-group \">
                            <label>Gender *</label>
                            ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "select2"]]);
            echo "
                            ";
        } else {
            // line 64
            echo "                            <div class=\"col-xl-3 col-lg-6 col-12 form-group has-error\">
                                <label>Gender *</label>
                                ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "select2"]]);
            echo "
                            <div class=\"invalid\">
                            ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'errors');
            echo "
                            </div>
                                ";
        }
        // line 71
        echo "                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Role *</label>
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                        </div>
                            ";
        // line 76
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "userType", []), 'errors')) <= 0)) {
            // line 77
            echo "                        <div class=\"col-xl-3 col-lg-6 col-12 form-group \">
                            <label>User Type *</label>
                            ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "userType", []), 'widget', ["attr" => ["class" => "select2"]]);
            echo "
                            ";
        } else {
            // line 81
            echo "                            <div class=\"col-xl-3 col-lg-6 col-12 form-group has-error\">
                                <label>User Type *</label>
                                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "userType", []), 'widget', ["attr" => ["class" => "select2"]]);
            echo "
                            <div class=\"invalid\">
                            ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "userType", []), 'errors');
            echo "
                            </div>
                                ";
        }
        // line 88
        echo "                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Joining Date *</label>
                            ";
        // line 93
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'errors')) <= 0)) {
            // line 94
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "form-control air-datepicker ", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                            <i class=\"far fa-calendar-alt\"></i>
                            ";
        } else {
            // line 97
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "form-control air-datepicker is-invalid ", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                                <i class=\"far fa-calendar-alt\"></i>
                                <div class=\"invalid-feedback\">
                                    ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 103
        echo "                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>BirthDay *</label>
                            ";
        // line 106
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'errors')) <= 0)) {
            // line 107
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                           <i class=\"far fa-calendar-alt\"></i>
                            ";
        } else {
            // line 110
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control air-datepicker is-invalid", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                                <i class=\"far fa-calendar-alt\"></i>
                                <div class=\"invalid-feedback\">
                                    ";
            // line 113
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 116
        echo "                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail</label>
                            ";
        // line 119
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors')) <= 0)) {
            // line 120
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                      ";
        } else {
            // line 122
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                            <div class=\"invalid-feedback\">
                                ";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
            echo "
                            </div>
";
        }
        // line 127
        echo "                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Phone</label>
                            ";
        // line 133
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'errors')) <= 0)) {
            // line 134
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 136
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 141
        echo "                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Salaire *</label>
                            ";
        // line 145
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'errors')) <= 0)) {
            // line 146
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 148
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 153
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                           </div>

                        <div class=\"col-lg-6 col-12 form-group\">
                            <label>Address *</label>
                            ";
        // line 160
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'errors')) <= 0)) {
            // line 161
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "textarea form-control", "cols" => "10", "rows" => "4"]]);
            echo "
                            ";
        } else {
            // line 163
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "textarea form-control is-invalid", "cols" => "10", "rows" => "4"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 168
        echo "
                        </div>
                        <div class=\"form-group col-md-2\">
                            <br>  ";
        // line 171
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'errors')) <= 0)) {
            // line 172
            echo "                           ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'widget', ["attr" => ["class" => "form-control "]]);
            echo "
                            ";
        } else {
            // line 174
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                            <div class=\"invalid-feedback\">
                            ";
            // line 176
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'errors');
            echo "
                            </div>
                            ";
        }
        // line 179
        echo "                        </div>


                        <div class=\"col-12 form-group mg-t-8\">
                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget');
        echo "
                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "

                        </div>
                    </div>
                    ";
        // line 188
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                </form>
            </div>
        </div>
    </div>
        <div class=\"col-4-xxxl col-xl-5\">
            <div class=\"card account-settings-box height-auto\">
                <div class=\"card-body\">
                    <div class=\"heading-layout1 mg-b-20\">
                        <div class=\"item-title\">
                            <h3>All User</h3>
                        </div>
                        <div class=\"dropdown\">
                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
                               data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"all-user-box\">
                        ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allUsers"] ?? $this->getContext($context, "allUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 213
            echo "

";
            // line 215
            if (($this->getAttribute($context["u"], "id", []) == $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "id", []))) {
                // line 216
                echo "                        <div class=\"media media-none--xs active\">
                            ";
            } else {
                // line 218
                echo "                            <div class=\"media media-none--xs\">
                                ";
            }
            // line 220
            echo "
                                <div class=\"item-img\">

                                    ";
            // line 223
            if (($this->getAttribute($context["u"], "gender", []) == "Male")) {
                // line 224
                echo "                                        <img src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user1.jpg"), "html", null, true);
                echo "\" class=\"media-img-auto\" alt=\"user\">
                                    ";
            } else {
                // line 226
                echo "                                        <img src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user4.jpg"), "html", null, true);
                echo "\" class=\"media-img-auto\" alt=\"user\">
                                    ";
            }
            // line 228
            echo "
                                </div>
                                <div class=\"media-body space-md\">
                                    <h5 class=\"item-title\">";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", []), "html", null, true);
            echo "</h5>
                                    <div class=\"item-subtitle\">";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "userType", []), "html", null, true);
            echo "</div>
                                    <a href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_UpdateAccount", ["id" => $this->getAttribute($context["u"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-outline-info\">More Details</a>
                                    <a href=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_DeleteAccount", ["id" => $this->getAttribute($context["u"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">Delete User</a>
                                </div>
                            </div>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "


                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-8-xxxl col-xl-7\">
                <div class=\"card account-settings-box\">
                    <div class=\"card-body\">
                        <div class=\"heading-layout1 mg-b-20\">
                            <div class=\"item-title\">
                                <h3>User Details</h3>
                            </div>

                        </div>
                        <div class=\"user-details-box\">
                            <div class=\"item-img\">

                                    <img src=\" ";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user.jpg"), "html", null, true);
        echo "\" class=\"media-img-auto\" alt=\"user\">

                            </div>
                            <div class=\"item-content\">
                                <div class=\"info-table table-responsive\">
                                    <table class=\"table text-nowrap\">
                                        <tbody>
                                        <tr>
                                            <td>ID No:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "id", []), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "lastName", []), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td>User Type:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "userType", []), "html", null, true);
        echo " </td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "gender", []), "html", null, true);
        echo "</td>
                                        </tr>



                                        <tr>
                                            <td>Joining Date:</td>
                                            <td class=\"font-medium text-dark-medium\">20/05/2019</td>
                                        </tr>
                                        <tr>
                                            <td>E-mail:</td>
                                            <td class=\"font-medium text-dark-medium\">User@gmail.com</td>
                                        </tr>



                                        <tr>
                                            <td>Address:</td>
                                            <td class=\"font-medium text-dark-medium\">Tunis</td>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <td class=\"font-medium text-dark-medium\">98101555</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Settings Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Account\\AddAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 280,  578 => 276,  569 => 272,  562 => 268,  550 => 259,  529 => 240,  517 => 234,  513 => 233,  509 => 232,  503 => 231,  498 => 228,  492 => 226,  486 => 224,  484 => 223,  479 => 220,  475 => 218,  471 => 216,  469 => 215,  465 => 213,  461 => 212,  434 => 188,  427 => 184,  423 => 183,  417 => 179,  411 => 176,  405 => 174,  399 => 172,  397 => 171,  392 => 168,  386 => 165,  380 => 163,  374 => 161,  372 => 160,  363 => 153,  357 => 150,  351 => 148,  345 => 146,  343 => 145,  337 => 141,  331 => 138,  325 => 136,  319 => 134,  317 => 133,  309 => 127,  303 => 124,  297 => 122,  291 => 120,  289 => 119,  284 => 116,  278 => 113,  271 => 110,  264 => 107,  262 => 106,  257 => 103,  251 => 100,  244 => 97,  237 => 94,  235 => 93,  228 => 88,  222 => 85,  217 => 83,  213 => 81,  208 => 79,  204 => 77,  202 => 76,  197 => 74,  192 => 71,  186 => 68,  181 => 66,  177 => 64,  172 => 62,  168 => 60,  166 => 59,  163 => 58,  157 => 55,  151 => 53,  145 => 51,  143 => 50,  138 => 47,  131 => 43,  125 => 41,  119 => 39,  117 => 38,  111 => 34,  105 => 31,  99 => 29,  93 => 27,  91 => 26,  85 => 23,  80 => 21,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Account Settings Area Start Here -->
    <div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"heading-layout1\">
                    <div class=\"item-title\">
                        <h3>Add New User</h3>
                    </div>

                </div>
                <form class=\"new-added-form\" method=\"post\" novalidate>
                    {{ form_start(form) }}
                    <div class=\"row\">
                        {{ form_row(form._token) }}
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label   >ID *</label>
                            {% if form_errors(form.id)|length <= 0 %}
                            {{ form_widget (form.id , {'attr': {'class':'form-control'}}) }}
                            {% else %}
                                {{ form_widget (form.id , {'attr': {'class':'form-control is-invalid'}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.id) }}
                            </div>
{% endif %}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>First Name *</label>
                            {% if form_errors(form.firstName)|length <= 0 %}
                            {{ form_widget (form.firstName , {'attr': {'class':'form-control'} }) }}
                            {% else %}
                            {{ form_widget (form.firstName , {'attr': {'class':'form-control is-invalid'} }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.firstName) }}
                                </div>

                            {% endif %}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Last Name *</label>
                            {% if form_errors(form.lastName)|length <= 0 %}
                            {{ form_widget (form.lastName , {'attr': {'class':'form-control'}}) }}
                            {% else %}
                                {{ form_widget (form.lastName , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.lastName) }}
                                </div>
                            {% endif %}
                        </div>
                        {% if form_errors(form.gender)|length <= 0 %}
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group \">
                            <label>Gender *</label>
                            {{ form_widget (form.gender , {'attr': {'class':'select2'}}) }}
                            {% else %}
                            <div class=\"col-xl-3 col-lg-6 col-12 form-group has-error\">
                                <label>Gender *</label>
                                {{ form_widget (form.gender , {'attr': {'class':'select2'}}) }}
                            <div class=\"invalid\">
                            {{ form_errors(form.gender) }}
                            </div>
                                {% endif %}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Role *</label>
                            {{ form_widget (form.roles , {'attr': {'class':'select2'}}) }}
                        </div>
                            {% if form_errors(form.userType)|length <= 0 %}
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group \">
                            <label>User Type *</label>
                            {{ form_widget (form.userType , {'attr': {'class':'select2'}}) }}
                            {% else %}
                            <div class=\"col-xl-3 col-lg-6 col-12 form-group has-error\">
                                <label>User Type *</label>
                                {{ form_widget (form.userType , {'attr': {'class':'select2'}}) }}
                            <div class=\"invalid\">
                            {{ form_errors(form.userType) }}
                            </div>
                                {% endif %}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Joining Date *</label>
                            {% if form_errors(form.joiningDate)|length <= 0 %}
                            {{ form_widget (form.joiningDate , {'attr': {'class':'form-control air-datepicker ','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}
                            <i class=\"far fa-calendar-alt\"></i>
                            {% else %}
                                {{ form_widget (form.joiningDate , {'attr': {'class':'form-control air-datepicker is-invalid ','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}
                                <i class=\"far fa-calendar-alt\"></i>
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.joiningDate) }}
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>BirthDay *</label>
                            {% if form_errors(form.birthDay)|length <= 0 %}
                            {{ form_widget (form.birthDay , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}
                           <i class=\"far fa-calendar-alt\"></i>
                            {% else %}
                                {{ form_widget (form.birthDay , {'attr': {'class':'form-control air-datepicker is-invalid','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}
                                <i class=\"far fa-calendar-alt\"></i>
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.birthDay) }}
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail</label>
                            {% if form_errors(form.email)|length <= 0 %}
                            {{ form_widget (form.email , {'attr': {'class':'form-control'}}) }}
                      {% else %}
                            {{ form_widget (form.email , {'attr': {'class':'form-control is-invalid'}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.email) }}
                            </div>
{% endif %}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Phone</label>
                            {% if form_errors(form.phone)|length <= 0 %}
                            {{ form_widget (form.phone , {'attr': {'class':'form-control'}}) }}
                            {% else %}
                                {{ form_widget (form.phone , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.phone) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Salaire *</label>
                            {% if form_errors(form.salaire)|length <= 0 %}
                            {{ form_widget (form.salaire , {'attr': {'class':'form-control'}}) }}
                            {% else %}
                                {{ form_widget (form.salaire , {'attr': {'class':'form-control is-invalid'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.salaire) }}
                                </div>
                            {% endif %}

                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                           </div>

                        <div class=\"col-lg-6 col-12 form-group\">
                            <label>Address *</label>
                            {% if form_errors(form.address)|length <= 0 %}
                            {{ form_widget (form.address , {'attr': {'class':'textarea form-control','cols':'10','rows':'4'}}) }}
                            {% else %}
                                {{ form_widget (form.address , {'attr': {'class':'textarea form-control is-invalid','cols':'10','rows':'4'}}) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.address) }}
                                </div>
                            {% endif %}

                        </div>
                        <div class=\"form-group col-md-2\">
                            <br>  {% if form_errors(form.captcha)|length <= 0 %}
                           {{ form_widget(form.captcha,{'attr': {'class':'form-control '}}) }}
                            {% else %}
                                {{ form_widget(form.captcha,{'attr': {'class':'form-control is-invalid'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.captcha) }}
                            </div>
                            {% endif %}
                        </div>


                        <div class=\"col-12 form-group mg-t-8\">
                            {{ form_widget(form.Add) }}
                            {{ form_widget(form.Reset) }}

                        </div>
                    </div>
                    {{ form_end(form, {'render_rest': false}) }}
                </form>
            </div>
        </div>
    </div>
        <div class=\"col-4-xxxl col-xl-5\">
            <div class=\"card account-settings-box height-auto\">
                <div class=\"card-body\">
                    <div class=\"heading-layout1 mg-b-20\">
                        <div class=\"item-title\">
                            <h3>All User</h3>
                        </div>
                        <div class=\"dropdown\">
                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
                               data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"all-user-box\">
                        {% for u in allUsers %}


{% if u.id == allUsers[0].id %}
                        <div class=\"media media-none--xs active\">
                            {% else %}
                            <div class=\"media media-none--xs\">
                                {% endif %}

                                <div class=\"item-img\">

                                    {% if u.gender == \"Male\" %}
                                        <img src=\" {{ asset('img/figure/user1.jpg') }}\" class=\"media-img-auto\" alt=\"user\">
                                    {% else %}
                                        <img src=\" {{ asset('img/figure/user4.jpg') }}\" class=\"media-img-auto\" alt=\"user\">
                                    {% endif %}

                                </div>
                                <div class=\"media-body space-md\">
                                    <h5 class=\"item-title\">{{u.firstName }} {{ u.lastName }}</h5>
                                    <div class=\"item-subtitle\">{{u.userType}}</div>
                                    <a href=\"{{ path('admin_UpdateAccount',{'id':u.id}) }}\" class=\"btn btn-outline-info\">More Details</a>
                                    <a href=\"{{ path('admin_DeleteAccount',{'id':u.id}) }}\" class=\"btn btn-outline-danger\">Delete User</a>
                                </div>
                            </div>


                        {% endfor %}



                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-8-xxxl col-xl-7\">
                <div class=\"card account-settings-box\">
                    <div class=\"card-body\">
                        <div class=\"heading-layout1 mg-b-20\">
                            <div class=\"item-title\">
                                <h3>User Details</h3>
                            </div>

                        </div>
                        <div class=\"user-details-box\">
                            <div class=\"item-img\">

                                    <img src=\" {{ asset('img/figure/user.jpg') }}\" class=\"media-img-auto\" alt=\"user\">

                            </div>
                            <div class=\"item-content\">
                                <div class=\"info-table table-responsive\">
                                    <table class=\"table text-nowrap\">
                                        <tbody>
                                        <tr>
                                            <td>ID No:</td>
                                            <td class=\"font-medium text-dark-medium\">{{ allUsers[0].id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td class=\"font-medium text-dark-medium\">{{allUsers[0].firstName }} {{ allUsers[0].lastName }}</td>
                                        </tr>
                                        <tr>
                                            <td>User Type:</td>
                                            <td class=\"font-medium text-dark-medium\">{{ allUsers[0].userType }} </td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class=\"font-medium text-dark-medium\">{{ allUsers[0].gender }}</td>
                                        </tr>



                                        <tr>
                                            <td>Joining Date:</td>
                                            <td class=\"font-medium text-dark-medium\">20/05/2019</td>
                                        </tr>
                                        <tr>
                                            <td>E-mail:</td>
                                            <td class=\"font-medium text-dark-medium\">User@gmail.com</td>
                                        </tr>



                                        <tr>
                                            <td>Address:</td>
                                            <td class=\"font-medium text-dark-medium\">Tunis</td>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <td class=\"font-medium text-dark-medium\">98101555</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Settings Area End Here -->
        <footer class=\"footer-wrap-layout1\">
            <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    </div>
{% endblock body %}", "@Admin\\Account\\AddAccount.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Account\\AddAccount.html.twig");
    }
}
