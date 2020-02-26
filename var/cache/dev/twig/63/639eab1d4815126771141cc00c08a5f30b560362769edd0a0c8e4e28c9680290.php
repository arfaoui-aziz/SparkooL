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

/* @Etudiant/Default/Forum.html.twig */
class __TwigTemplate_655055a18f1de4951302d39cae2cbf97e7e7b4c9d1bad32fe321c34e7c00c8ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/Forum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Etudiant/Default/Forum.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "@Etudiant/Default/Forum.html.twig", 1);
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
            echo "    <li class=\"ccm_forum_ctn--deco__item noAnswers\">
        <h2>
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_subjectview", ["id" => $this->getAttribute($context["subject"], "id", [])]), "html", null, true);
            echo "\">
                ";
            // line 29
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
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "subject", []), "html", null, true);
            echo "       </p>
        <footer>
            <div class=\"ccm_forum_ctn--deco__datas\">
                <figure >

                    ";
            // line 42
            if (($this->getAttribute($this->getAttribute($context["subject"], "auteur", []), "gender", []) == "Male")) {
                // line 43
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://i.pinimg.com/originals/7c/c7/a6/7cc7a630624d20f7797cb4c8e93c09c1.png"), "html", null, true);
                echo "\" alt=\"Maths\" style=\"
    width: 60px;
\">
                    ";
            }
            // line 47
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["subject"], "auteur", []), "gender", []) == "Female")) {
                // line 48
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://freeiconshop.com/wp-content/uploads/edd/person-girl-flat.png"), "html", null, true);
                echo "\" alt=\"Physics\" style=\"
    width: 60px;
\">
                    ";
            }
            // line 52
            echo "                </figure>
                <a href=\"/forum/affich-36469727-blocage-de-touches-active-impossible-a-desactiver\" >";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "auteur", []), "html", null, true);
            echo "</a>
                | <a href=\"/forum/telecommande-171\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "type", []), "html", null, true);
            echo "</a>

                | Derni&egrave;re r&eacute;ponse :                     <a href=\"/forum/affich-36469727-blocage-de-touches-active-impossible-a-desactiver#dernier\" >
                    titinez8                    </a>
                ";
            // line 58
            if (($this->getAttribute($context["subject"], "solved", []) == 1)) {
                // line 59
                echo "                    <a href=\"\" class=\"btn btn-lg btn-success disabled\" data-toggle=\"modal\" data-target=\"#basicModal\">Solved</a>

                ";
            }
            // line 62
            echo "                <span  class=\"ccm_forum_ctn--deco__datas--newer\">11:24</span>
            </div>
            <a href=\"/forum/affich-36469727-blocage-de-touches-active-impossible-a-desactiver#dernier\">
                <div class=\"ccm_forum_ctn--deco__response\">
                    <span>
                    ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "nbreponse", []), "html", null, true);
            echo "                   </span>
                    r&eacute;ponse

                </div>

            </a>

        </footer>

    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</ul>
    <!-- Student Table Area End Here -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_cloud($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cloud"));

        // line 84
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 88
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_joinspark($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "joinspark"));

        // line 92
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Etudiant/Default/Forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 92,  306 => 91,  295 => 88,  286 => 87,  275 => 84,  266 => 83,  253 => 78,  236 => 67,  229 => 62,  224 => 59,  222 => 58,  215 => 54,  211 => 53,  208 => 52,  200 => 48,  197 => 47,  189 => 43,  187 => 42,  179 => 37,  168 => 29,  164 => 28,  160 => 26,  156 => 25,  152 => 23,  143 => 22,  132 => 19,  123 => 18,  109 => 13,  100 => 12,  84 => 5,  75 => 4,  58 => 2,  36 => 1,);
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

                | Derni&egrave;re r&eacute;ponse :                     <a href=\"/forum/affich-36469727-blocage-de-touches-active-impossible-a-desactiver#dernier\" >
                    titinez8                    </a>
                {% if subject.solved == 1 %}
                    <a href=\"\" class=\"btn btn-lg btn-success disabled\" data-toggle=\"modal\" data-target=\"#basicModal\">Solved</a>

                {% endif %}
                <span  class=\"ccm_forum_ctn--deco__datas--newer\">11:24</span>
            </div>
            <a href=\"/forum/affich-36469727-blocage-de-touches-active-impossible-a-desactiver#dernier\">
                <div class=\"ccm_forum_ctn--deco__response\">
                    <span>
                    {{ subject.nbreponse }}                   </span>
                    r&eacute;ponse

                </div>

            </a>

        </footer>

    </li>
    {% endfor %}
</ul>
    <!-- Student Table Area End Here -->

{% endblock %}

{% block cloud %}

{% endblock %}

{% block container %}

{% endblock %}

    {% block joinspark %}

    {% endblock %}", "@Etudiant/Default/Forum.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\EtudiantBundle\\Resources\\views\\Default\\Forum.html.twig");
    }
}
