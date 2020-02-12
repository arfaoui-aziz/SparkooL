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

/* @Admin\Schedule\DetailSchedule.html.twig */
class __TwigTemplate_8449743a2da51689e1a148ae160bbe0e94ca748592e0c1ee49555ddbd3c22893 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Schedule\\DetailSchedule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Schedule\\DetailSchedule.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Schedule\\DetailSchedule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3> School Schedule</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Class Routine Area Start Here -->
    <div class=\"row\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("schedule.css"), "html", null, true);
        echo "\">

    <div class=\"Timetable\">
        <table class=\"Timetable__table\">

            <thead>
            <tr>
                <th colspan=\"10\"></th>
            </tr>
            </thead>

            <tbody>

            <tr class=\"Timetable__time\">
                <th class=\"Timetable__room\"></th>
                <th>08:00</th>
                <th>10:00</th>
                <th>11:00</th>
                <th>12:00</th>
                <th>12:00 ->14:00 </th>
                <th>15:00</th>
                <th>16:00</th>
                <th>17:00</th>
                <th>18:00</th>
            </tr>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schedule"] ?? $this->getContext($context, "schedule")));
        foreach ($context['_seq'] as $context["_key"] => $context["sch"]) {
            // line 42
            echo "            <tr>
                <th class=\"Timetable__room\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "day", []), "html", null, true);
            echo "</th>

                <td colspan=\"2\"> <div class=\"Allocation pdp\">
                        <span class=\"Allocation__title\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "seance1", []), "html", null, true);
            echo "</span>

                    </div></td>
                <td colspan=\"2\">
                    <div class=\"Allocation\">
                        <span class=\"Allocation__title\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "seance2", []), "html", null, true);
            echo "</span>

                    </div>
                </td>
                <td colspan=\"1\"></td>
                <td colspan=\"2\">
                    <div class=\"Allocation please\">
                        <span class=\"Allocation__title\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "seance3", []), "html", null, true);
            echo "</span>

                    </div>
                </td>
                <td colspan=\"2\">
                    <div class=\"Allocation pdp\">
                        <span class=\"Allocation__title\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "seance4", []), "html", null, true);
            echo "</span>

                    </div>
                </td>
            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "

            </tbody>
        </table>
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Schedule\\DetailSchedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 70,  140 => 64,  131 => 58,  121 => 51,  113 => 46,  107 => 43,  104 => 42,  100 => 41,  72 => 16,  60 => 6,  51 => 5,  29 => 1,);
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
        <h3> School Schedule</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Class Routine Area Start Here -->
    <div class=\"row\">
    <link rel=\"stylesheet\" href=\"{{ asset('schedule.css')}}\">

    <div class=\"Timetable\">
        <table class=\"Timetable__table\">

            <thead>
            <tr>
                <th colspan=\"10\"></th>
            </tr>
            </thead>

            <tbody>

            <tr class=\"Timetable__time\">
                <th class=\"Timetable__room\"></th>
                <th>08:00</th>
                <th>10:00</th>
                <th>11:00</th>
                <th>12:00</th>
                <th>12:00 ->14:00 </th>
                <th>15:00</th>
                <th>16:00</th>
                <th>17:00</th>
                <th>18:00</th>
            </tr>
{% for sch in schedule %}
            <tr>
                <th class=\"Timetable__room\">{{ sch .day }}</th>

                <td colspan=\"2\"> <div class=\"Allocation pdp\">
                        <span class=\"Allocation__title\">{{ sch.seance1 }}</span>

                    </div></td>
                <td colspan=\"2\">
                    <div class=\"Allocation\">
                        <span class=\"Allocation__title\">{{ sch.seance2 }}</span>

                    </div>
                </td>
                <td colspan=\"1\"></td>
                <td colspan=\"2\">
                    <div class=\"Allocation please\">
                        <span class=\"Allocation__title\">{{ sch.seance3 }}</span>

                    </div>
                </td>
                <td colspan=\"2\">
                    <div class=\"Allocation pdp\">
                        <span class=\"Allocation__title\">{{ sch.seance4 }}</span>

                    </div>
                </td>
            </tr>
{% endfor %}


            </tbody>
        </table>
    </div>
    </div>

{% endblock %}




", "@Admin\\Schedule\\DetailSchedule.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Schedule\\DetailSchedule.html.twig");
    }
}
