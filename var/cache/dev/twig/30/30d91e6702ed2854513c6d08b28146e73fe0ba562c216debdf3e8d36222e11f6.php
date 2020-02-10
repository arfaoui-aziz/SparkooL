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

/* @Admin\Classe\UpdateClass.html.twig */
class __TwigTemplate_f357f6a9ab42059a0e5d7add3869dcac8116a5b34fd20a1f36a6480a868aecc6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'update' => [$this, 'block_update'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Admin/Classe/AddClass.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Classe\\UpdateClass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Classe\\UpdateClass.html.twig"));

        $this->parent = $this->loadTemplate("@Admin/Classe/AddClass.html.twig", "@Admin\\Classe\\UpdateClass.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_update($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "update"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "update"));

        // line 4
        echo "    <form class=\"new-added-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_UpdateClasse", ["classId" => $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "classId", [])]), "html", null, true);
        echo "\">
        <div class=\"row\">

            <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                <select name=\"degree\" class=\"select2\" required>
                    <option value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "className", []), 0, 1), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "className", []), 0, 1), "html", null, true);
        echo "</option>
                    <option value=\"1\">1</option>
                    <option value=\"2\">2</option>
                    <option value=\"3\">3</option>
                    <option value=\"4\">4</option>
                    <option value=\"5\">5</option>
                    <option value=\"6\">6</option>
                </select>
            </div>
            <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                <select name=\"section\" class=\"select2\" required>
                    <option value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "className", []), 1), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "className", []), 1), "html", null, true);
        echo "</option>
                    <option value=\"A\">A</option>
                    <option value=\"B\">B</option>
                    <option value=\"C\">C</option>
                    <option value=\"D\">D</option>

                </select>



            </div>
            <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                <button type=\"submit\" class=\"btn-fill-lg btn-gradient-yellow btn-hover-yellow\">Save</button>
            </div>

        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Classe\\UpdateClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  70 => 10,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/Classe/AddClass.html.twig' %}

{% block update %}
    <form class=\"new-added-form\" method=\"post\" action=\"{{ path('admin_UpdateClasse',{'classId':classe.classId}) }}\">
        <div class=\"row\">

            <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                <select name=\"degree\" class=\"select2\" required>
                    <option value=\"{{ classe.className[:1] }}\">{{ classe.className[:1] }}</option>
                    <option value=\"1\">1</option>
                    <option value=\"2\">2</option>
                    <option value=\"3\">3</option>
                    <option value=\"4\">4</option>
                    <option value=\"5\">5</option>
                    <option value=\"6\">6</option>
                </select>
            </div>
            <div class=\"col-xl-3 col-lg-6 col-12 form-group\">

                <select name=\"section\" class=\"select2\" required>
                    <option value=\"{{ classe.className |slice(1) }}\">{{ classe.className |slice(1) }}</option>
                    <option value=\"A\">A</option>
                    <option value=\"B\">B</option>
                    <option value=\"C\">C</option>
                    <option value=\"D\">D</option>

                </select>



            </div>
            <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                <button type=\"submit\" class=\"btn-fill-lg btn-gradient-yellow btn-hover-yellow\">Save</button>
            </div>

        </div>
    </form>
{% endblock %}

", "@Admin\\Classe\\UpdateClass.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Classe\\UpdateClass.html.twig");
    }
}
