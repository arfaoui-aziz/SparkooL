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

/* @Admin\Account\UpdateAccount.html.twig */
class __TwigTemplate_e356dbc133e66f5351a7a71b59b43c1c010a7de1e22d2a3d8e3449784b4ee963 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\UpdateAccount.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\UpdateAccount.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Account\\UpdateAccount.html.twig", 1);
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
        return "@Admin\\Account\\UpdateAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 101,  204 => 97,  200 => 96,  192 => 91,  184 => 86,  175 => 80,  168 => 76,  157 => 68,  148 => 62,  139 => 56,  130 => 50,  122 => 45,  115 => 41,  108 => 37,  101 => 33,  92 => 27,  85 => 23,  80 => 21,  60 => 3,  51 => 2,  29 => 1,);
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

            <!-- Account Settings Area End Here -->
            <footer class=\"footer-wrap-layout1\">
                <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
    </div>
{% endblock body %}", "@Admin\\Account\\UpdateAccount.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Account\\UpdateAccount.html.twig");
    }
}
