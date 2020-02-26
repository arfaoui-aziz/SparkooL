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

/* @Etudiant/backrep/accountSettingsStudent.html.twig */
class __TwigTemplate_b05e3e0d0314b7530d2f153bbe9a710a88f9d3c05d9f8f69f27302b14751020a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/accountSettingsStudent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/backrep/accountSettingsStudent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Etudiant/backrep/accountSettingsStudent.html.twig", 1);
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
        echo "    <div class=\"col-8-xxxl col-xl-7\">
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
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class=\"user-details-box\">
                    <div class=\"item-img\">

                    </div>
                    <div class=\"item-content\">
                        <div class=\"info-table table-responsive\">

                            <table class=\"table text-nowrap\">
                                <tbody>
                                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "POST"]);
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "joiningDate", []), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
                                <tr>
                                    <td>User Name :</td>

                                    <td class=\"font-medium text-dark-medium\"> ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>First Name :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Last Name :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDay", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Phone Number :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Place of Birth :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "placeobirth", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Address :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Academic Year:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "academicyear", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Gender :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Blood Group:</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bloodGroup", []), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Update :</td>
                                    <td class=\"font-medium text-dark-medium\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Update", []), 'widget', ["attr" => ["class" => "btn-fill-lg btn-gradient-yellow btn-hover-bluedark"]]);
        echo "</td>
                                </tr>
                                </tbody>
                                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/backrep/accountSettingsStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 84,  185 => 81,  178 => 77,  171 => 73,  164 => 69,  157 => 65,  150 => 61,  143 => 57,  136 => 53,  129 => 49,  122 => 45,  115 => 41,  108 => 37,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  60 => 3,  51 => 2,  29 => 1,);
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
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-times text-orange-red\"></i>Close</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class=\"user-details-box\">
                    <div class=\"item-img\">

                    </div>
                    <div class=\"item-content\">
                        <div class=\"info-table table-responsive\">

                            <table class=\"table text-nowrap\">
                                <tbody>
                                {{ form_start(form , {'method': 'POST'}) }}
                                {{ form_widget(form.id, {'attr': {'class':'hidden'}}) }}
                                {{ form_widget(form.joiningDate, {'attr': {'class':'hidden'}}) }}
                                {{ form_row(form._token) }}
                                <tr>
                                    <td>User Name :</td>

                                    <td class=\"font-medium text-dark-medium\"> {{ form_widget(form.username) }}</td>
                                </tr>
                                <tr>
                                    <td>First Name :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.firstName) }}</td>
                                </tr>
                                <tr>
                                    <td>Last Name :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.lastName) }}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.birthDay) }}</td>
                                </tr>
                                <tr>
                                    <td>Phone Number :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.phone) }}</td>
                                </tr>
                                <tr>
                                    <td>Place of Birth :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.placeobirth) }}</td>
                                </tr>
                                <tr>
                                    <td>Address :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.address) }}</td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.email) }}</td>
                                </tr>
                                <tr>
                                    <td>Academic Year:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.academicyear) }}</td>
                                </tr>
                                <tr>
                                    <td>Gender :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.gender) }}</td>
                                </tr>
                                <tr>
                                    <td>Blood Group:</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.bloodGroup) }}</td>
                                </tr>
                                <tr>
                                    <td>Update :</td>
                                    <td class=\"font-medium text-dark-medium\">{{ form_widget(form.Update, { 'attr': {'class': 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'} }) }}</td>
                                </tr>
                                </tbody>
                                {{ form_end(form, {'render_rest':false}) }}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Etudiant/backrep/accountSettingsStudent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\backrep\\accountSettingsStudent.html.twig");
    }
}
