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

/* @Etudiant/Default/MylistofForums.html.twig */
class __TwigTemplate_15954a810f06e27b1141f6646463ee80c457e74a3a011630f65a3081a83acd1a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'sonia' => [$this, 'block_sonia'],
            'formetud' => [$this, 'block_formetud'],
            'taswira' => [$this, 'block_taswira'],
            'cloud1' => [$this, 'block_cloud1'],
            'body' => [$this, 'block_body'],
            'cloud' => [$this, 'block_cloud'],
            'container' => [$this, 'block_container'],
            'joinspark' => [$this, 'block_joinspark'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/MylistofForums.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/MylistofForums.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Etudiant/Default/MylistofForums.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_sonia($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonia"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonia"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_formetud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formetud"));

        // line 5
        echo "    <link href=\"https://astatic.ccmbg.com/fc/css/componentsLightA?v=20200113153959\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"https://astatic.ccmbg.com/fc/css/ckeditor-outer?v=20190702113640\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"https://astatic.ccmbg.com/www.commentcamarche.net/css/main?v=20200218162836\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_taswira($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "taswira"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "taswira"));

        // line 13
        echo "    <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_cloud1($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud1"));

        // line 19
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
    <ul>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 26
            echo "          ";
            if (($this->getAttribute($this->getAttribute($context["subject"], "auteur", []), "id", []) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []))) {
                // line 27
                echo "            <li class=\"ccm_forum_ctn--deco__item noAnswers\">
                <h2>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_subjectview", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
                echo "\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "title", []), "html", null, true);
                echo "             </a>
                </h2>
                <p style=\"
    width: 90%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
\">
                    ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "subject", []), "html", null, true);
                echo "       </p>
                <footer>
                    <div class=\"ccm_forum_ctn--deco__datas\">
                        <figure >

                            ";
                // line 43
                if (($this->getAttribute($this->getAttribute($context["subject"], "auteur", []), "gender", []) == "Male")) {
                    // line 44
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://i.pinimg.com/originals/7c/c7/a6/7cc7a630624d20f7797cb4c8e93c09c1.png"), "html", null, true);
                    echo "\" alt=\"Maths\" style=\"
    width: 60px;
\">
                            ";
                }
                // line 48
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["subject"], "auteur", []), "gender", []) == "Female")) {
                    // line 49
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://freeiconshop.com/wp-content/uploads/edd/person-girl-flat.png"), "html", null, true);
                    echo "\" alt=\"Physics\" style=\"
    width: 60px;
\">
                            ";
                }
                // line 53
                echo "                        </figure>
                        <a href=\"/forum/affich-36469727-blocage-de-touches-active-impossible-a-desactiver\" >";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "auteur", []), "html", null, true);
                echo "</a>
                        | <a href=\"/forum/telecommande-171\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "type", []), "html", null, true);
                echo "</a>

                        | Derni&egrave;re r&eacute;ponse :
                        <a href=\"\" >
                            titinez8                    </a>
                        <span  class=\"ccm_forum_ctn--deco__datas--newer\">11:24</span>
                    </div>
                    <a>
                        <div class=\"ccm_forum_ctn--deco__response\">
                    <span>
                    ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "nbreponse", []), "html", null, true);
                echo "                   </span>
                            r&eacute;ponse                    </div>
                    </a>
                </footer>
                <div style=\"
    margin: 3% 0% 2% 1%;
\">
                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_deletesubject", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-inverse\"><i class=\"icon-white icon-trash\"></i>Delete Subject</a>
            ";
                // line 73
                if (($this->getAttribute($context["subject"], "etat", []) == 0)) {
                    // line 74
                    echo "                <a href=\"\" class=\"btn btn-lg btn-danger disabled\" data-toggle=\"modal\" data-target=\"#smallModal\">Disabled</a>
                ";
                }
                // line 76
                echo "                    ";
                if (($this->getAttribute($context["subject"], "solved", []) == 1)) {
                    // line 77
                    echo "                        <a href=\"\" class=\"btn btn-lg btn-success disabled\" data-toggle=\"modal\" data-target=\"#basicModal\">Solved</a>

                    ";
                } else {
                    // line 80
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_solved", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-lg btn-success\">Mark As Solved</a>
                    <a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_modifysubject", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-inverse\"><i class=\"fas fa-cog\"></i>Modify Subject</a>
                    ";
                }
                // line 83
                echo "                </div>
            </li>
";
            }
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </ul>
    <!-- Student Table Area End Here -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_cloud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        // line 93
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 97
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_joinspark($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        // line 101
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/Default/MylistofForums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 101,  333 => 100,  322 => 97,  313 => 96,  302 => 93,  293 => 92,  280 => 87,  274 => 86,  269 => 83,  264 => 81,  259 => 80,  254 => 77,  251 => 76,  247 => 74,  245 => 73,  241 => 72,  231 => 65,  218 => 55,  214 => 54,  211 => 53,  203 => 49,  200 => 48,  192 => 44,  190 => 43,  182 => 38,  171 => 30,  167 => 29,  163 => 27,  160 => 26,  156 => 25,  152 => 23,  143 => 22,  132 => 19,  123 => 18,  109 => 13,  100 => 12,  84 => 5,  75 => 4,  58 => 2,  36 => 1,);
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
{% block sonia %}
{% endblock %}
{% block formetud %}
    <link href=\"https://astatic.ccmbg.com/fc/css/componentsLightA?v=20200113153959\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"https://astatic.ccmbg.com/fc/css/ckeditor-outer?v=20190702113640\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"https://astatic.ccmbg.com/www.commentcamarche.net/css/main?v=20200218162836\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />



{% endblock %}
{% block taswira %}
    <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">


    </div>
{% endblock %}
{% block cloud1 %}

{% endblock %}

{% block body %}

    <ul>
        {% for subject in subjects %}
          {% if subject.auteur.id == app.user.id %}
            <li class=\"ccm_forum_ctn--deco__item noAnswers\">
                <h2>
                    <a href=\"{{ path('etudaint_subjectview', {'id': subject.id}) }}\">
                        {{subject.title}}             </a>
                </h2>
                <p style=\"
    width: 90%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
\">
                    {{ subject.subject }}       </p>
                <footer>
                    <div class=\"ccm_forum_ctn--deco__datas\">
                        <figure >

                            {% if subject.auteur.gender == \"Male\"  %}
                                <img src=\"{{ asset('https://i.pinimg.com/originals/7c/c7/a6/7cc7a630624d20f7797cb4c8e93c09c1.png') }}\" alt=\"Maths\" style=\"
    width: 60px;
\">
                            {% endif %}
                            {% if subject.auteur.gender == 'Female'  %}
                                <img src=\"{{ asset('https://freeiconshop.com/wp-content/uploads/edd/person-girl-flat.png') }}\" alt=\"Physics\" style=\"
    width: 60px;
\">
                            {% endif %}
                        </figure>
                        <a href=\"/forum/affich-36469727-blocage-de-touches-active-impossible-a-desactiver\" >{{subject.auteur}}</a>
                        | <a href=\"/forum/telecommande-171\">{{subject.type}}</a>

                        | Derni&egrave;re r&eacute;ponse :
                        <a href=\"\" >
                            titinez8                    </a>
                        <span  class=\"ccm_forum_ctn--deco__datas--newer\">11:24</span>
                    </div>
                    <a>
                        <div class=\"ccm_forum_ctn--deco__response\">
                    <span>
                    {{ subject.nbreponse }}                   </span>
                            r&eacute;ponse                    </div>
                    </a>
                </footer>
                <div style=\"
    margin: 3% 0% 2% 1%;
\">
                <a href=\"{{ path('etudaint_deletesubject', {'id': subject.id}) }}\" class=\"btn btn-inverse\"><i class=\"icon-white icon-trash\"></i>Delete Subject</a>
            {% if subject.etat == 0 %}
                <a href=\"\" class=\"btn btn-lg btn-danger disabled\" data-toggle=\"modal\" data-target=\"#smallModal\">Disabled</a>
                {% endif %}
                    {% if subject.solved == 1 %}
                        <a href=\"\" class=\"btn btn-lg btn-success disabled\" data-toggle=\"modal\" data-target=\"#basicModal\">Solved</a>

                    {% else %}
                        <a href=\"{{ path('etudaint_solved', {'id': subject.id}) }}\" class=\"btn btn-lg btn-success\">Mark As Solved</a>
                    <a href=\"{{ path('etudaint_modifysubject', {'id': subject.id}) }}\" class=\"btn btn-inverse\"><i class=\"fas fa-cog\"></i>Modify Subject</a>
                    {% endif %}
                </div>
            </li>
{% endif %}
        {% endfor %}
    </ul>
    <!-- Student Table Area End Here -->

{% endblock %}

{% block cloud %}

{% endblock %}

{% block container %}

{% endblock %}

    {% block joinspark %}

    {% endblock %}", "@Etudiant/Default/MylistofForums.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\Default\\MylistofForums.html.twig");
    }
}
