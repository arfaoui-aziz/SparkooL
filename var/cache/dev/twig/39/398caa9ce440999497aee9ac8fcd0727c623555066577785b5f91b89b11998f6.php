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

/* @Admin\Account\AccountSettings.html.twig */
class __TwigTemplate_115eb110983fca9cfa7b30d98f906f7263ed116aeb708a3dfffbe3f3d48a2da4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\AccountSettings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin\\Account\\AccountSettings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Account\\AccountSettings.html.twig", 1);
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
        echo "<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
    h1 {
        font-weight: bold;
        margin: 0;
    }

    h2 {
        text-align: center;
    }

    .p2 {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
        color: #fff;
    }

    button {
        border-radius: 20px;
        border: 1px solid #8c9fa3;
        background-color: #001c3e;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
        cursor: pointer;
    }

    button:active {
        transform: scale(0.95);
    }
    button:hover{
        background-color: #007991;
    }

    button:focus {
        outline: none;
    }

    button.ghost {
        background-color: transparent;
        border-color: #FFFFFF;
    }
    button.ghost:hover {
        background-color: #fefefe;
        border-color: #007991;
        color:#007991 ;
    }
    button:hover {
        transform: translatey(3px);
        box-shadow: none;
    }

    /* buttons hover Animation */
    button:hover {
        animation: ani9 0.4s ease-in-out infinite alternate;
    }
    @keyframes ani9 {
        0% {
            transform: translateY(3px);
        }
        100% {
            transform: translateY(5px);
        }
    }

    form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    input {
        background-color: #eee;
        border: none;
        border-radius: 10px 10px 10px 10px;
        padding: 12px ;
        margin: 8px 0;
        width: 100%;
        height: 45px;
        color: #5E6472;
        font-size: 16px;

    }

    input:focus {
        outline: none;
        border-color: #007991;
        box-shadow:  0px 0px 8px 0px #007991;
        transform: translateX(-5px);
    }
    .inputWithIcon input{
        padding-left: 40px;
    }
    .inputWithIcon {
        position: relative;
    }
    .inputWithIcon i {
        position: absolute;
        left: 0px;
        top: 12px;
        padding: 9px 8px;
        color: #aaa;
        transition: 0.3s;
    }
    .inputWithIcon input:focus + i {
        color: #007991;
    }
    #eye {
        position: absolute;
        left:85%;
        top: 11px;
        padding: 9px 8px;
        color: rgb(165, 165, 165);
        transition: 0.3s;
        cursor: pointer;

    }
    #eye:hover {
        color: #007991;
    }
    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),
        0 10px 10px rgba(0,0,0,0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 480px;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {
        0%, 49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%, 100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container{
        transform: translateX(-100%);
    }

    .overlay {
        background: #007991;
        background: -webkit-linear-gradient(to right, #007991, #007991);
        background: linear-gradient(to right, #007991, #007991);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .social-container {
        margin: 20px 0;
    }

    .social-container a {
        border: 1px solid #DDDDDD;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }


</style>
<div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Account Settings Area Start Here -->
    <div class=\"row\">
        <div class=\"container\" id=\"container\">

            <div class=\"form-container sign-in-container\">
                <form method=\"post\" action=\"";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AccountSettings");
        echo "\">
                    <h1>Account Settings</h1>

                    <br>
                    <div class=\"inputWithIcon\">
                        <input name=\"username\" type=\"text\" value=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute(($context["activeUser"] ?? $this->getContext($context, "activeUser")), "username", []), "html", null, true);
        echo "\" />
                        <i class=\"fa fa-user fa-lg fa-fw\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"inputWithIcon\">
                        <input name=\"email\" type=\"email\" value=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute(($context["activeUser"] ?? $this->getContext($context, "activeUser")), "email", []), "html", null, true);
        echo "\" />
                        <i class=\"fa fa-envelope fa-lg fa-fw\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"inputWithIcon\">
                        <input name=\"password\" type=\"password\" id=\"pwd\" placeholder=\"Enter New Password\" />
                        <i class=\"fa fa-key\"></i>
                        <!--      Show/hide password  -->
                        <span>
             <i class=\"fa fa-eye-slash \" style=\"font-size:20px\" aria-hidden=\"true\"  type=\"button\" id=\"eye\"></i>
          </span>

                    </div>
<br>
                    <button type=\"submit\">Submit</button>
                </form>
            </div>
            <div class=\"overlay-container\">
                <div class=\"overlay\">


                    <div class=\"overlay-panel overlay-right\">
                        <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("LogoPrinc.png"), "html", null, true);
        echo "\">
                        <p class=\"p2\">Change Your Account Settings From Here</p>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add(\"right-panel-active\");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove(\"right-panel-active\");
        });
        // Show/hide password onClick of button using Javascript only
        function show() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'text');
            var e = document.getElementById('eye');
            e.setAttribute('class', 'fa fa-eye');
        }

        function hide() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'password');
            var e = document.getElementById('eye');
            e.setAttribute('class', 'fa fa-eye-slash');
        }

        var pwShown = 0;

        document.getElementById(\"eye\").addEventListener(\"click\", function () {
            if (pwShown == 0) {
                pwShown = 1;
                show();
            } else {
                pwShown = 0;
                hide();
            }
        }, false);

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 366
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 367
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Account\\AccountSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 367,  445 => 366,  384 => 315,  360 => 294,  353 => 290,  345 => 285,  61 => 3,  52 => 2,  30 => 1,);
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
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
    h1 {
        font-weight: bold;
        margin: 0;
    }

    h2 {
        text-align: center;
    }

    .p2 {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
        color: #fff;
    }

    button {
        border-radius: 20px;
        border: 1px solid #8c9fa3;
        background-color: #001c3e;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
        cursor: pointer;
    }

    button:active {
        transform: scale(0.95);
    }
    button:hover{
        background-color: #007991;
    }

    button:focus {
        outline: none;
    }

    button.ghost {
        background-color: transparent;
        border-color: #FFFFFF;
    }
    button.ghost:hover {
        background-color: #fefefe;
        border-color: #007991;
        color:#007991 ;
    }
    button:hover {
        transform: translatey(3px);
        box-shadow: none;
    }

    /* buttons hover Animation */
    button:hover {
        animation: ani9 0.4s ease-in-out infinite alternate;
    }
    @keyframes ani9 {
        0% {
            transform: translateY(3px);
        }
        100% {
            transform: translateY(5px);
        }
    }

    form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    input {
        background-color: #eee;
        border: none;
        border-radius: 10px 10px 10px 10px;
        padding: 12px ;
        margin: 8px 0;
        width: 100%;
        height: 45px;
        color: #5E6472;
        font-size: 16px;

    }

    input:focus {
        outline: none;
        border-color: #007991;
        box-shadow:  0px 0px 8px 0px #007991;
        transform: translateX(-5px);
    }
    .inputWithIcon input{
        padding-left: 40px;
    }
    .inputWithIcon {
        position: relative;
    }
    .inputWithIcon i {
        position: absolute;
        left: 0px;
        top: 12px;
        padding: 9px 8px;
        color: #aaa;
        transition: 0.3s;
    }
    .inputWithIcon input:focus + i {
        color: #007991;
    }
    #eye {
        position: absolute;
        left:85%;
        top: 11px;
        padding: 9px 8px;
        color: rgb(165, 165, 165);
        transition: 0.3s;
        cursor: pointer;

    }
    #eye:hover {
        color: #007991;
    }
    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),
        0 10px 10px rgba(0,0,0,0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 480px;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {
        0%, 49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%, 100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container{
        transform: translateX(-100%);
    }

    .overlay {
        background: #007991;
        background: -webkit-linear-gradient(to right, #007991, #007991);
        background: linear-gradient(to right, #007991, #007991);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .social-container {
        margin: 20px 0;
    }

    .social-container a {
        border: 1px solid #DDDDDD;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }


</style>
<div class=\"dashboard-content-one\">
    <!-- Breadcubs Area Start Here -->
    <div class=\"breadcrumbs-area\">

    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Account Settings Area Start Here -->
    <div class=\"row\">
        <div class=\"container\" id=\"container\">

            <div class=\"form-container sign-in-container\">
                <form method=\"post\" action=\"{{ path('admin_AccountSettings') }}\">
                    <h1>Account Settings</h1>

                    <br>
                    <div class=\"inputWithIcon\">
                        <input name=\"username\" type=\"text\" value=\"{{activeUser.username}}\" />
                        <i class=\"fa fa-user fa-lg fa-fw\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"inputWithIcon\">
                        <input name=\"email\" type=\"email\" value=\"{{ activeUser.email }}\" />
                        <i class=\"fa fa-envelope fa-lg fa-fw\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"inputWithIcon\">
                        <input name=\"password\" type=\"password\" id=\"pwd\" placeholder=\"Enter New Password\" />
                        <i class=\"fa fa-key\"></i>
                        <!--      Show/hide password  -->
                        <span>
             <i class=\"fa fa-eye-slash \" style=\"font-size:20px\" aria-hidden=\"true\"  type=\"button\" id=\"eye\"></i>
          </span>

                    </div>
<br>
                    <button type=\"submit\">Submit</button>
                </form>
            </div>
            <div class=\"overlay-container\">
                <div class=\"overlay\">


                    <div class=\"overlay-panel overlay-right\">
                        <img src=\"{{ asset('LogoPrinc.png')}}\">
                        <p class=\"p2\">Change Your Account Settings From Here</p>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add(\"right-panel-active\");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove(\"right-panel-active\");
        });
        // Show/hide password onClick of button using Javascript only
        function show() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'text');
            var e = document.getElementById('eye');
            e.setAttribute('class', 'fa fa-eye');
        }

        function hide() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'password');
            var e = document.getElementById('eye');
            e.setAttribute('class', 'fa fa-eye-slash');
        }

        var pwShown = 0;

        document.getElementById(\"eye\").addEventListener(\"click\", function () {
            if (pwShown == 0) {
                pwShown = 1;
                show();
            } else {
                pwShown = 0;
                hide();
            }
        }, false);

    </script>
{% endblock %}
{% block footer %}
    {% endblock %}", "@Admin\\Account\\AccountSettings.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\AdminBundle\\Resources\\views\\Account\\AccountSettings.html.twig");
    }
}
