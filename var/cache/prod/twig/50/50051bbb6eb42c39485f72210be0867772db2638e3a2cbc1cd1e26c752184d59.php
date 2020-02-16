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
class __TwigTemplate_9513f02ac39a10ee311c95be90be939d68ed92c994b9efdedf6a52944eedee68 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'notiffront' => [$this, 'block_notiffront'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "affichereventfront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("affichereventfront.html.twig", "@Sonia/notification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_notiffront($context, array $blocks = [])
    {
        // line 6
        echo "


    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 10
            echo "
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["notif"], "title", []), "html", null, true);
            echo "
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["notif"], "description", []), "html", null, true);
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        list is empty
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
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
        return array (  73 => 16,  66 => 14,  59 => 12,  55 => 11,  52 => 10,  47 => 9,  42 => 6,  39 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Sonia/notification.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\notification.html.twig");
    }
}
