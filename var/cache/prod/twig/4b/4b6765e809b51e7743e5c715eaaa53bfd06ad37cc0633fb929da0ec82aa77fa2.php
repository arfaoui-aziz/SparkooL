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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_2626aa2742fe6d38f31481f2d459ca68a6d1a6e7c71f3e879dc27b817171ed96 extends \Twig\Template
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
        // line 2
        if (($context["error"] ?? null)) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", []), $this->getAttribute(($context["error"] ?? null), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>
    <title>LogIn Form </title>
    <style>

        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            background-image: url('bglogin.jpg');

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
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

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }

    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"container\" id=\"container\">
    <div class=\"form-container sign-up-container\">
        <form action=\"#\">
            <a href=\"";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front");
        echo "\">
                <img src=\"LogoFooter.png\">
                <br><br>
                <button>Visit SparkooL</button>
            </a>
        </form>
    </div>
    <div class=\"form-container sign-in-container\">
        <form action=\"";
        // line 348
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <h1>Sign in</h1>

            <br>
            ";
        // line 352
        if (($context["csrf_token"] ?? null)) {
            // line 353
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
            ";
        }
        // line 355
        echo "            <div class=\"inputWithIcon\">
                <input type=\"text\" id=\"username\" placeholder=\"Email\" name=\"_username\" value=\"";
        // line 356
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                <i class=\"fa fa-envelope fa-lg fa-fw\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"inputWithIcon\">
                <input type=\"password\" id=\"password\" placeholder=\"Password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                <i class=\"fa fa-key\"></i>
                <!--      Show/hide password  -->
                <span>
             <i class=\"fa fa-eye-slash \" style=\"font-size:20px\" aria-hidden=\"true\"  type=\"button\" id=\"eye\"></i>
          </span>
            </div>
            <a href=\"#\">Forgot your password?</a>


            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\">Sign In</button>
        </form>
    </div>
    <div class=\"overlay-container\">
        <div class=\"overlay\">
            <div class=\"overlay-panel overlay-left\">
                <h1>Welcome Back!</h1>
                <p>This page is reserved for SparkooL Members only to access the SparkooL Admin Dashboard</p>
                <button class=\"ghost\" id=\"signIn\">Sign In</button>
            </div>

            <div class=\"overlay-panel overlay-right\">
                <img src=\"LogoPrinc.png\">
                <p>Enter your personal details to access the SparkooL Admin Dashboard</p>
                <button class=\"ghost\" id=\"signUp\">More Details</button>
            </div>
        </div>
    </div>
</div>
<footer>
    <p>
        Created  by
        <a target=\"_blank\" href=\"#\">SparkIT</a>
    </p>
</footer>
<script type=\"text/javascript\">
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
        var p = document.getElementById('password');
        p.setAttribute('type', 'text');
        var e = document.getElementById('eye');
        e.setAttribute('class', 'fa fa-eye');
    }

    function hide() {
        var p = document.getElementById('password');
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
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 370,  407 => 356,  404 => 355,  398 => 353,  396 => 352,  389 => 348,  378 => 340,  369 => 334,  38 => 5,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\SparkIT\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
