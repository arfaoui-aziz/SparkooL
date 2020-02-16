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
class __TwigTemplate_de984e5c24000e9e43f29cd179a9d29f97241a8811210320c99d3652a6108b09 extends \Twig\Template
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
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "

                            <div class=\"invalid\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Role *</label>
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>User Type *</label>
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "userType", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                            <div class=\"invalid\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "userType", []), 'errors');
        echo "
                            </div>
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Joining Date *</label>
                            ";
        // line 83
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'errors')) <= 0)) {
            // line 84
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "form-control air-datepicker ", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                            <i class=\"far fa-calendar-alt\"></i>
                            ";
        } else {
            // line 87
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "form-control air-datepicker is-invalid ", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                                <i class=\"far fa-calendar-alt\"></i>
                                <div class=\"invalid-feedback\">
                                    ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 93
        echo "                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>BirthDay *</label>
                            ";
        // line 96
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'errors')) <= 0)) {
            // line 97
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                           <i class=\"far fa-calendar-alt\"></i>
                            ";
        } else {
            // line 100
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control air-datepicker is-invalid", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
            echo "
                                <i class=\"far fa-calendar-alt\"></i>
                                <div class=\"invalid-feedback\">
                                    ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 106
        echo "                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail</label>
                            ";
        // line 109
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors')) <= 0)) {
            // line 110
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                      ";
        } else {
            // line 112
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                            <div class=\"invalid-feedback\">
                                ";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
            echo "
                            </div>
";
        }
        // line 117
        echo "                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Phone</label>
                            ";
        // line 123
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'errors')) <= 0)) {
            // line 124
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 126
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 131
        echo "                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Salaire *</label>
                            ";
        // line 135
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'errors')) <= 0)) {
            // line 136
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                            ";
        } else {
            // line 138
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'widget', ["attr" => ["class" => "form-control is-invalid"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 140
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 143
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                           </div>

                        <div class=\"col-lg-6 col-12 form-group\">
                            <label>Address *</label>
                            ";
        // line 150
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'errors')) <= 0)) {
            // line 151
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "textarea form-control", "cols" => "10", "rows" => "4"]]);
            echo "
                            ";
        } else {
            // line 153
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "textarea form-control is-invalid", "cols" => "10", "rows" => "4"]]);
            echo "
                                <div class=\"invalid-feedback\">
                                    ";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 158
        echo "
                        </div>
                        <div class=\"form-group col-md-2\">
                            <br>
                           ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'errors');
        echo "
                        </div>


                        <div class=\"col-12 form-group mg-t-8\">
                            ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget');
        echo "
                            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "

                        </div>
                    </div>
                    ";
        // line 173
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
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allUsers"] ?? $this->getContext($context, "allUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 198
            echo "

";
            // line 200
            if (($this->getAttribute($context["u"], "id", []) == $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "id", []))) {
                // line 201
                echo "                        <div class=\"media media-none--xs active\">
                            ";
            } else {
                // line 203
                echo "                            <div class=\"media media-none--xs\">
                                ";
            }
            // line 205
            echo "
                                <div class=\"item-img\">

                                    ";
            // line 208
            if (($this->getAttribute($context["u"], "gender", []) == "Male")) {
                // line 209
                echo "                                        <img src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user1.jpg"), "html", null, true);
                echo "\" class=\"media-img-auto\" alt=\"user\">
                                    ";
            } else {
                // line 211
                echo "                                        <img src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user4.jpg"), "html", null, true);
                echo "\" class=\"media-img-auto\" alt=\"user\">
                                    ";
            }
            // line 213
            echo "
                                </div>
                                <div class=\"media-body space-md\">
                                    <h5 class=\"item-title\">";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", []), "html", null, true);
            echo "</h5>
                                    <div class=\"item-subtitle\">";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "userType", []), "html", null, true);
            echo "</div>
                                    <a href=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_UpdateAccount", ["id" => $this->getAttribute($context["u"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-outline-info\">More Details</a>
                                    <a href=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_DeleteAccount", ["id" => $this->getAttribute($context["u"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">Delete User</a>
                                </div>
                            </div>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
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
        // line 244
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
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "id", []), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "lastName", []), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td>User Type:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "userType", []), "html", null, true);
        echo " </td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 265
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
        return array (  542 => 265,  535 => 261,  526 => 257,  519 => 253,  507 => 244,  486 => 225,  474 => 219,  470 => 218,  466 => 217,  460 => 216,  455 => 213,  449 => 211,  443 => 209,  441 => 208,  436 => 205,  432 => 203,  428 => 201,  426 => 200,  422 => 198,  418 => 197,  391 => 173,  384 => 169,  380 => 168,  372 => 163,  368 => 162,  362 => 158,  356 => 155,  350 => 153,  344 => 151,  342 => 150,  333 => 143,  327 => 140,  321 => 138,  315 => 136,  313 => 135,  307 => 131,  301 => 128,  295 => 126,  289 => 124,  287 => 123,  279 => 117,  273 => 114,  267 => 112,  261 => 110,  259 => 109,  254 => 106,  248 => 103,  241 => 100,  234 => 97,  232 => 96,  227 => 93,  221 => 90,  214 => 87,  207 => 84,  205 => 83,  195 => 76,  190 => 74,  182 => 69,  174 => 64,  168 => 61,  163 => 58,  157 => 55,  151 => 53,  145 => 51,  143 => 50,  138 => 47,  131 => 43,  125 => 41,  119 => 39,  117 => 38,  111 => 34,  105 => 31,  99 => 29,  93 => 27,  91 => 26,  85 => 23,  80 => 21,  60 => 3,  51 => 2,  29 => 1,);
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
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>
                            {{ form_widget (form.gender , {'attr': {'class':'select2'}}) }}

                            <div class=\"invalid\">
                            {{ form_errors(form.gender) }}
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Role *</label>
                            {{ form_widget (form.roles , {'attr': {'class':'select2'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>User Type *</label>
                            {{ form_widget (form.userType , {'attr': {'class':'select2'}}) }}
                            <div class=\"invalid\">
                            {{ form_errors(form.userType) }}
                            </div>
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
                            <br>
                           {{ form_widget(form.captcha,{'attr': {'class':'form-control '}}) }}
                            {{ form_errors(form.captcha) }}
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
