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

/* @Sonia/evenement/modifierEvent.html.twig */
class __TwigTemplate_776503b226e761ef943c2402d36fd26fb963ecbc73b52a8d75ed25e70f54bdf3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/modifierEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Sonia/evenement/modifierEvent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Sonia/evenement/modifierEvent.html.twig", 1);
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
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "
                    ";
        // line 23
        if ((($context["type"] ?? $this->getContext($context, "type")) == "Evenement")) {
            // line 24
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                        ";
            // line 29
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typeEvent", []), "setRendered", [], "method");
            // line 30
            echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 40
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        ";
            // line 54
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), "setRendered", [], "method");
            // line 55
            echo "                        ";
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), "setRendered", [], "method");
            // line 56
            echo "                        ";
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "award", []), "setRendered", [], "method");
            // line 57
            echo "

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Free"]]);
            echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>

                    ";
        } elseif ((        // line 76
($context["type"] ?? $this->getContext($context, "type")) == "Sport Activity")) {
            // line 77
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                        ";
            // line 82
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typeEvent", []), "setRendered", [], "method");
            // line 83
            echo "

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 95
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        ";
            // line 114
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), "setRendered", [], "method");
            // line 115
            echo "                        ";
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "award", []), "setRendered", [], "method");
            // line 116
            echo "

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        ";
            // line 122
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), "setRendered", [], "method");
            // line 123
            echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>


                    ";
        } elseif ((        // line 134
($context["type"] ?? $this->getContext($context, "type")) == "Field Trip")) {
            // line 135
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                        ";
            // line 140
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typeEvent", []), "setRendered", [], "method");
            // line 141
            echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 152
            echo "
                        </div>
                        ";
            // line 154
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), "setRendered", [], "method");
            // line 155
            echo "

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 159
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        ";
            // line 162
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), "setRendered", [], "method");
            // line 163
            echo "                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Destination *</label>
                            ";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        ";
            // line 168
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), "setRendered", [], "method");
            // line 169
            echo "                        ";
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "award", []), "setRendered", [], "method");
            // line 170
            echo "

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            ";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Free"]]);
            echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>

                    ";
        } else {
            // line 190
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            ";
            // line 193
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nomEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        ";
            // line 196
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typeEvent", []), "setRendered", [], "method");
            // line 197
            echo "
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            ";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ed"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            ";
            // line 207
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "dateEvent", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "dd/mm/yyyy"]]);
            // line 208
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            ";
            // line 215
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "placeEvent", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            ";
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbParticipants", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            ";
            // line 227
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "theme", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>

                        ";
            // line 230
            $this->getAttribute($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "destination", []), "setRendered", [], "method");
            // line 231
            echo "                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Award *</label>
                            ";
            // line 233
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "award", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            ";
            // line 240
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "budget", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            ";
            // line 244
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "price", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Free"]]);
            echo "
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            ";
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Add", []), 'widget', ["label" => "Update"]);
            echo "
                        </div>

                    </div>
                    ";
        }
        // line 255
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Sonia/evenement/modifierEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 255,  463 => 250,  454 => 244,  447 => 240,  437 => 233,  433 => 231,  431 => 230,  425 => 227,  416 => 221,  407 => 215,  398 => 208,  396 => 207,  386 => 200,  381 => 197,  379 => 196,  373 => 193,  368 => 190,  359 => 184,  350 => 178,  343 => 174,  337 => 170,  334 => 169,  332 => 168,  326 => 165,  322 => 163,  320 => 162,  314 => 159,  308 => 155,  306 => 154,  302 => 152,  300 => 151,  290 => 144,  285 => 141,  283 => 140,  278 => 138,  273 => 135,  271 => 134,  262 => 128,  255 => 123,  253 => 122,  248 => 120,  242 => 116,  239 => 115,  237 => 114,  231 => 111,  223 => 106,  214 => 100,  207 => 95,  205 => 94,  195 => 87,  189 => 83,  187 => 82,  182 => 80,  177 => 77,  175 => 76,  167 => 71,  158 => 65,  151 => 61,  145 => 57,  142 => 56,  139 => 55,  137 => 54,  131 => 51,  122 => 45,  115 => 40,  113 => 39,  104 => 33,  99 => 30,  97 => 29,  92 => 27,  87 => 24,  85 => 23,  81 => 22,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}
{% block body %}

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
                    {{   form_start(f) }}
                    {% if type == \"Evenement\" %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>
                        {%  do f.typeEvent.setRendered() %}

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>

                        {%  do f.theme.setRendered() %}
                        {%  do f.destination.setRendered() %}
                        {%  do f.award.setRendered() %}


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            {{ form_widget (f.price , {'attr': {'class':'form-control','placeholder':'Free'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                        {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>

                    {% elseif type == \"Sport Activity\" %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>
                        {%  do f.typeEvent.setRendered() %}


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            {{ form_widget (f.theme , {'attr': {'class':'form-control'}}) }}
                        </div>

                        {%  do f.destination.setRendered() %}
                        {%  do f.award.setRendered() %}


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        {%  do f.price.setRendered() %}

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>


                    {% elseif type == \"Field Trip\" %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>
                        {%  do f.typeEvent.setRendered() %}

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>
                        {%  do f.placeEvent.setRendered() %}


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>

                        {%  do f.theme.setRendered() %}
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Destination *</label>
                            {{ form_widget (f.destination , {'attr': {'class':'form-control'}}) }}
                        </div>

                        {%  do f.destination.setRendered() %}
                        {%  do f.award.setRendered() %}


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            {{ form_widget (f.price , {'attr': {'class':'form-control' ,'placeholder':'Free'}}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>

                    {% else %}
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Name *</label>
                            {{ form_widget (f.nomEvent, {'attr': {'class':'form-control'}}) }}
                        </div>

                        {%  do f.typeEvent.setRendered() %}

                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Description *</label>
                            {{ form_widget (f.description , {'attr': {'class':'form-control','placeholder':'ed'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Date *</label>
                            {{ form_widget (f.dateEvent , {'attr': {'class':'form-control','placeholder':'dd/mm/yyyy',
                            }}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Place of Event *</label>
                            {{ form_widget (f.placeEvent , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label>Participant *</label>
                            {{ form_widget (f.nbParticipants , {'attr': {'class':'form-control'}}) }}
                        </div>


                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Theme *</label>
                            {{ form_widget (f.theme , {'attr': {'class':'form-control'}}) }}
                        </div>

                        {%  do f.destination.setRendered() %}
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Award *</label>
                            {{ form_widget (f.award , {'attr': {'class':'form-control'}}) }}
                        </div>



                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Budget *</label>
                            {{ form_widget (f.budget , {'attr': {'class':'form-control'}}) }}
                        </div>  &nbsp;
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label> Price of Participation *</label>
                            {{ form_widget (f.price , {'attr': {'class':'form-control','placeholder':'Free' }}) }}
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-12 form-group\">
                            <label > </label>
                            <br>

                            {{ form_widget(f.Add,{'label':'Update' }) }}
                        </div>

                    </div>
                    {% endif %}
                    {{form_end(f)}}

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
{% endblock  %}

", "@Sonia/evenement/modifierEvent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\SoniaBundle\\Resources\\views\\evenement\\modifierEvent.html.twig");
    }
}
