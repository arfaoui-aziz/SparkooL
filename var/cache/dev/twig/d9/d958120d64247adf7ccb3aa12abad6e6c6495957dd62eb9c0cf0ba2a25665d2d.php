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

/* @Admin\Front\FrontSchedule.html.twig */
class __TwigTemplate_3bb7aaabb5dc173d2256fa8fb6be2fc4ce10555e809e6eeb8c36314928004db2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Front\\FrontSchedule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Front\\FrontSchedule.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Admin\\Front\\FrontSchedule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "     <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Send Reclamation About School Schedule </a>
     </li>

     </ul>
     <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
         <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">

             <div class=\"form-widget\">
                 <div class=\"form-result\"></div>
                 <form class=\"row home-moving-form position-relative mb-0\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddReclamation");
        echo "\" method=\"post\" >
                     <div class=\"form-process\"></div>

                     <div class=\"col-sm-12 input-group form-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                         </div>
                         <input type=\"text\"  name=\"sujet\" id=\"home-moving-form-location-from\" class=\"form-control required\" value=\"School Schedule\" >
                     </div>


                     <div class=\"col-lg-12-12 col-12 input-group form-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                         </div>
                         <input class=\"textarea form-control \" cols=\"10px\"  rows=\"10px\" name=\"contenu\" placeholder=\"Write Your Reclamation Here\" >


                     </div>

                     <div class=\"col-12 hidden\">
                         <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                     </div>

                     <div class=\"col-12\">
                         <button type=\"submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">SUBMIT</button>
                     </div>


                 </form>
             </div>
         </div>
     </div>
     </div>
     <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
         <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/ed2.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

     </div>
     </div>
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "    <link rel=\"stylesheet\" href=\"";
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schedule"] ?? $this->getContext($context, "schedule")));
        foreach ($context['_seq'] as $context["_key"] => $context["sch"]) {
            // line 81
            echo "                <tr>
                    <th class=\"Timetable__room\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "day", []), "html", null, true);
            echo "</th>

                    <td colspan=\"2\"> <div class=\"Allocation pdp\">
                            <span class=\"Allocation__title\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "seance1", []), "html", null, true);
            echo "</span>

                        </div></td>
                    <td colspan=\"2\">
                        <div class=\"Allocation\">
                            <span class=\"Allocation__title\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "seance2", []), "html", null, true);
            echo "</span>

                        </div>
                    </td>
                    <td colspan=\"1\"></td>
                    <td colspan=\"2\">
                        <div class=\"Allocation please\">
                            <span class=\"Allocation__title\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["sch"], "seance3", []), "html", null, true);
            echo "</span>

                        </div>
                    </td>
                    <td colspan=\"2\">
                        <div class=\"Allocation pdp\">
                            <span class=\"Allocation__title\">";
            // line 103
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
        // line 109
        echo "

            </tbody>
        </table>
    </div>
    <br><br><br><br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
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
        return "@Admin\\Front\\FrontSchedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 116,  217 => 109,  205 => 103,  196 => 97,  186 => 90,  178 => 85,  172 => 82,  169 => 81,  165 => 80,  136 => 55,  127 => 54,  111 => 47,  73 => 12,  62 => 3,  53 => 2,  31 => 1,);
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
 {% block form %}
     <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Send Reclamation About School Schedule </a>
     </li>

     </ul>
     <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
         <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">

             <div class=\"form-widget\">
                 <div class=\"form-result\"></div>
                 <form class=\"row home-moving-form position-relative mb-0\" action=\"{{ path('admin_AddReclamation') }}\" method=\"post\" >
                     <div class=\"form-process\"></div>

                     <div class=\"col-sm-12 input-group form-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                         </div>
                         <input type=\"text\"  name=\"sujet\" id=\"home-moving-form-location-from\" class=\"form-control required\" value=\"School Schedule\" >
                     </div>


                     <div class=\"col-lg-12-12 col-12 input-group form-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text nobg\"><i class=\"icon-line2-paper-plane\"></i></span>
                         </div>
                         <input class=\"textarea form-control \" cols=\"10px\"  rows=\"10px\" name=\"contenu\" placeholder=\"Write Your Reclamation Here\" >


                     </div>

                     <div class=\"col-12 hidden\">
                         <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                     </div>

                     <div class=\"col-12\">
                         <button type=\"submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">SUBMIT</button>
                     </div>


                 </form>
             </div>
         </div>
     </div>
     </div>
     <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
         <img src=\"{{ asset('FrontEnd/img/ed2.png')}}\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

     </div>
     </div>
     </div>
 {% endblock %}

{% block body %}
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
    <br><br><br><br><br>
{% endblock %}
{% block join %}
{% endblock %}
", "@Admin\\Front\\FrontSchedule.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Front\\FrontSchedule.html.twig");
    }
}
