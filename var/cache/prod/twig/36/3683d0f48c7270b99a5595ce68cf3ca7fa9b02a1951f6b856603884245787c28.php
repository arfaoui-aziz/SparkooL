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

/* @Sonia/evenement/ajouterevent.html.twig */
class __TwigTemplate_c987ba266e79f3fca32d0db5c771b93ec1fa89ae968428133a3a19f68e66f258 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "@Sonia/evenement/ajouterevent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "


    <div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">
        <h3>Events</h3>

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class=\"card height-auto\">
        <div class=\"card-body\">
            <div class=\"heading-layout1\">
                <div class=\"item-title\">
                    <h3>All Events Data</h3>
                </div>

            </div>




                <form class=\"new-added-form\" method=\"POST\">
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? null), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? null), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Kids Event"]]);
        echo "
                        </div>

                        ";
        // line 34
        $this->getAttribute($this->getAttribute(($context["f"] ?? null), "typeEvent", []), "setRendered", [], "method");
        // line 35
        echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "The event is about"]]);
        echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? null), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control air-datepicker", "placeholder" => "dd/mm/yyyy", "data-position" => "bottom right"]]);
        echo "
                            <i class=\"far fa-calendar-alt\"></i>
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? null), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Classroom"]]);
        echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>  Participants  *</label>
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? null), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>



                        ";
        // line 63
        $this->getAttribute($this->getAttribute(($context["f"] ?? null), "theme", []), "setRendered", [], "method");
        // line 64
        echo "                        ";
        $this->getAttribute($this->getAttribute(($context["f"] ?? null), "destination", []), "setRendered", [], "method");
        // line 65
        echo "                        ";
        $this->getAttribute($this->getAttribute(($context["f"] ?? null), "award", []), "setRendered", [], "method");
        // line 66
        echo "                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? null), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? null), "price", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Free"]]);
        echo "
                        </div>

                    </div>
             ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? null), 'form_end');
        echo "
            </form>


            <section class=\"content-header\">
                <div class=\"container\">
                    <div class=\"row\">



                    </div>
                </div>
            </section>
            <!-- Student Table Area End Here -->
            <footer class=\"footer-wrap-layout1\">
                <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
            </footer>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>


";
    }

    public function getTemplateName()
    {
        return "@Sonia/evenement/ajouterevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 77,  145 => 73,  137 => 68,  133 => 66,  130 => 65,  127 => 64,  125 => 63,  117 => 58,  108 => 52,  97 => 44,  88 => 38,  83 => 35,  81 => 34,  75 => 31,  68 => 27,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Sonia/evenement/ajouterevent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\evenement\\ajouterevent.html.twig");
    }
}
