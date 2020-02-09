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
class __TwigTemplate_8f765fceded69333cd071fdae14d7b265cb94c9263816c43f32c380b73446075 extends \Twig\Template
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
                <form class=\"new-added-form\" method=\"post\">
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
                            <label>ID *</label>

                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>First Name *</label>
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Last Name *</label>
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Role *</label>
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>User Type *</label>
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "userType", []), 'widget', ["attr" => ["class" => "select2"]]);
        echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Joining Date *</label>
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "

                            <i class=\"far fa-calendar-alt\"></i>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>BirthDay *</label>
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "

                            <i class=\"far fa-calendar-alt\"></i>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail</label>
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Phone</label>
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Salaire *</label>
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Picture *</label>
                            <label class=\"file\" title=\"\">
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", []), 'widget', ["attr" => ["onchange" => "this.parentNode.setAttribute('title', this.value.replace(/^.*[\\/]/, ''))"]]);
        echo "
                            </label> </div>

                        <div class=\"col-lg-6 col-12 form-group\">
                            <label>Address *</label>
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget', ["attr" => ["class" => "textarea form-control", "cols" => "10", "rows" => "4"]]);
        echo "

                        </div>

                        <div class=\"col-12 form-group mg-t-8\">
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget');
        echo "
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Reset", []), 'widget');
        echo "

                        </div>
                    </div>
                    ";
        // line 101
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
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allUsers"] ?? $this->getContext($context, "allUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 126
            echo "

";
            // line 128
            if (($this->getAttribute($context["u"], "id", []) == $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "id", []))) {
                // line 129
                echo "                        <div class=\"media media-none--xs active\">
                            ";
            } else {
                // line 131
                echo "                            <div class=\"media media-none--xs\">
                                ";
            }
            // line 133
            echo "
                                <div class=\"item-img\">

                                        <img src=\" ";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/user1.jpg"), "html", null, true);
            echo "\" class=\"media-img-auto\" alt=\"user\">

                                </div>
                                <div class=\"media-body space-md\">
                                    <h5 class=\"item-title\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", []), "html", null, true);
            echo "</h5>
                                    <div class=\"item-subtitle\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "userType", []), "html", null, true);
            echo "</div>
                                    <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_UpdateAccount", ["id" => $this->getAttribute($context["u"], "id", [])]), "html", null, true);
            echo "\">More Details</a>
                                </div>
                            </div>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
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
                            <div class=\"dropdown\">
                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
                                   data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"Delete\">
                                        <i class=\"fas fa-times text-orange-red\"></i>Delete Employee</a>
                                    <a class=\"dropdown-item\"  href=\"Modifier\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"user-details-box\">
                            <div class=\"item-img\">

                                    <img src=\" ";
        // line 176
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
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "id", []), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "lastName", []), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td>User Type:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["allUsers"] ?? $this->getContext($context, "allUsers")), 0, [], "array"), "userType", []), "html", null, true);
        echo " </td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class=\"font-medium text-dark-medium\">";
        // line 197
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
        return array (  355 => 197,  348 => 193,  339 => 189,  332 => 185,  320 => 176,  290 => 148,  278 => 142,  274 => 141,  268 => 140,  261 => 136,  256 => 133,  252 => 131,  248 => 129,  246 => 128,  242 => 126,  238 => 125,  211 => 101,  204 => 97,  200 => 96,  192 => 91,  184 => 86,  175 => 80,  168 => 76,  157 => 68,  148 => 62,  139 => 56,  130 => 50,  122 => 45,  115 => 41,  108 => 37,  101 => 33,  92 => 27,  85 => 23,  80 => 21,  60 => 3,  51 => 2,  29 => 1,);
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
                <form class=\"new-added-form\" method=\"post\">
                    {{ form_start(form) }}
                    <div class=\"row\">
                        {{ form_row(form._token) }}
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>ID *</label>

                            {{ form_widget (form.id , {'attr': {'class':'form-control'}}) }}

                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>First Name *</label>
                            {{ form_widget (form.firstName , {'attr': {'class':'form-control'} }) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Last Name *</label>
                            {{ form_widget (form.lastName , {'attr': {'class':'form-control'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Gender *</label>
                            {{ form_widget (form.gender , {'attr': {'class':'select2'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Role *</label>
                            {{ form_widget (form.roles , {'attr': {'class':'select2'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>User Type *</label>
                            {{ form_widget (form.userType , {'attr': {'class':'select2'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Joining Date *</label>
                            {{ form_widget (form.joiningDate , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}

                            <i class=\"far fa-calendar-alt\"></i>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>BirthDay *</label>
                            {{ form_widget (form.birthDay , {'attr': {'class':'form-control air-datepicker','placeholder':'dd/mm/yyyy', 'data-position':'bottom right'} }  ) }}

                            <i class=\"far fa-calendar-alt\"></i>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>E-Mail</label>
                            {{ form_widget (form.email , {'attr': {'class':'form-control'}}) }}

                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Phone</label>
                            {{ form_widget (form.phone , {'attr': {'class':'form-control'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Salaire *</label>
                            {{ form_widget (form.salaire , {'attr': {'class':'form-control'}}) }}

                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Picture *</label>
                            <label class=\"file\" title=\"\">
                            {{ form_widget (form.picture , {'attr': {'onchange':\"this.parentNode.setAttribute('title', this.value.replace(/^.*[\\\\/]/, ''))\"}}) }}
                            </label> </div>

                        <div class=\"col-lg-6 col-12 form-group\">
                            <label>Address *</label>
                            {{ form_widget (form.address , {'attr': {'class':'textarea form-control','cols':'10','rows':'4'}}) }}

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

                                        <img src=\" {{ asset('img/figure/user1.jpg') }}\" class=\"media-img-auto\" alt=\"user\">

                                </div>
                                <div class=\"media-body space-md\">
                                    <h5 class=\"item-title\">{{u.firstName }} {{ u.lastName }}</h5>
                                    <div class=\"item-subtitle\">{{u.userType}}</div>
                                    <a href=\"{{ path('admin_UpdateAccount',{'id':u.id}) }}\">More Details</a>
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
                            <div class=\"dropdown\">
                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\"
                                   data-toggle=\"dropdown\" aria-expanded=\"false\">...</a>

                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"Delete\">
                                        <i class=\"fas fa-times text-orange-red\"></i>Delete Employee</a>
                                    <a class=\"dropdown-item\"  href=\"Modifier\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                </div>
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
