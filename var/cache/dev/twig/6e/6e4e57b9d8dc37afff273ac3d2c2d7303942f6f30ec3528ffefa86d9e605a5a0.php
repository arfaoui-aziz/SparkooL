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

/* @Sonia/notification.html.twig */
class __TwigTemplate_a64427d57744fb522c1904599f516e1e056129b5de6fb281a1d70a8fdedfaee6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/notification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/notification.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Notification Dropdown</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo " \">
    <script src=\"https://kit.fontawesome.com/b99e675b6e.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\".notification_icon .fa-bell\").click(function(){
                \$(\".dropdown\").toggleClass(\"active\");
            })
        });
    </script>
</head>
<body>

<div class=\"wrapper\">
    <div class=\"notification_wrap\">
        <div class=\"notification_icon\">
            <i class=\"far fa-bell\"></i>
        </div>
        <div class=\"dropdown\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 26
            echo "            <div class=\"notify_item\">
                <div class=\"notify_img\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/event.png"), "html", null, true);
            echo "\" alt=\"profile_pic\" style=\"width: 50px\">
                </div>
                <div class=\"notify_info\">
                    <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["notif"], "title", []), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notif"], "description", []), "html", null, true);
            echo "</span></p>
                    <span class=\"notify_time\">1";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notif"], "date", [])), "html", null, true);
            echo "</span>
                </div>
            </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        </div>
    </div>
</div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Sonia/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  85 => 32,  79 => 31,  73 => 28,  69 => 26,  65 => 25,  43 => 6,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Notification Dropdown</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }} \">
    <script src=\"https://kit.fontawesome.com/b99e675b6e.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\".notification_icon .fa-bell\").click(function(){
                \$(\".dropdown\").toggleClass(\"active\");
            })
        });
    </script>
</head>
<body>

<div class=\"wrapper\">
    <div class=\"notification_wrap\">
        <div class=\"notification_icon\">
            <i class=\"far fa-bell\"></i>
        </div>
        <div class=\"dropdown\">
            {% for notif in notifications %}
            <div class=\"notify_item\">
                <div class=\"notify_img\">
                    <img src=\"{{ asset('img/figure/event.png') }}\" alt=\"profile_pic\" style=\"width: 50px\">
                </div>
                <div class=\"notify_info\">
                    <p>{{ notif.title }}<span>{{ notif.description }}</span></p>
                    <span class=\"notify_time\">1{{ notif.date | date }}</span>
                </div>
            </div>

{% endfor %}

        </div>
    </div>
</div>

</body>
</html>", "@Sonia/notification.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\notification.html.twig");
    }
}
