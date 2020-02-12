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

/* base.html.twig */
class __TwigTemplate_1b6336740ac29a501201a66da4014d1940fa591fc64da8f49d296305f7bfcdec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
            'jq' => [$this, 'block_jq'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>

<html class=\"no-js\" lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>SparkIT Dashboard</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo " \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">

    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo " \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css"), "html", null, true);
        echo " \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css"), "html", null, true);
        echo " \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo " \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo " \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.min.css"), "html", null, true);
        echo " \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css"), "html", null, true);
        echo "\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo " \" >
    <!-- Modernize js -->
    <script href=\" ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-3.6.0.min.js"), "html", null, true);
        echo " \"></script>

</head>
<body>
<!-- Preloader Start Here -->
<div id=\"preloader\"></div>
<!-- Preloader End Here -->
<div id=\"wrapper\" class=\"wrapper bg-ash\">
    <!-- Header Menu Area Start Here -->
    <div class=\"navbar navbar-expand-md header-menu-one bg-light\">
        <div class=\"nav-bar-header-one\">
            <div class=\"header-logo\">
                <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front");
        echo "\">
                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/LogoPrinc.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"155px\" height=\"40px\">
                </a>
            </div>

        </div>




        <div class=\"d-md-none mobile-nav-bar\">
            <button class=\"navbar-toggler pulse-animation\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-navbar\" aria-expanded=\"false\">
                <i class=\"far fa-arrow-alt-circle-down\"></i>
            </button>
            <button type=\"button\" class=\"navbar-toggler sidebar-toggle-mobile\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
        <div class=\"header-main-menu collapse navbar-collapse\" id=\"mobile-navbar\">
            <ul class=\"navbar-nav\">
                <li class=\"navbar-item header-search-bar\">
                    <div class=\"input-group stylish-input-group\">
                            <span class=\"input-group-addon\">
                                <button type=\"submit\">
                                    <span class=\"flaticon-search\" aria-hidden=\"true\"></span>
                                </button>
                            </span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Find Something . . .\">
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"navbar-item dropdown header-admin\">
                    <a class=\"navbar-nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <div class=\"admin-title\">
                            ";
        // line 84
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 85
            echo "                            <h5 class=\"item-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "</h5>
                                <span>SuperAdmin</span>

                                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 89
            echo "                                    <h5 class=\"item-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "</h5>
                                    <div class=\"item-title1\">Admin</div>

                            ";
        } else {
            // line 93
            echo "                            <h5 class=\"item-title\">Aziz Arfaoui</h5>
                            <span>Admin</span>
                            ";
        }
        // line 96
        echo "                        </div>
                        <div class=\"admin-img\">
                            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/man.png"), "html", null, true);
        echo "\" width=\"40px\" alt=\"Admin\">
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <div class=\"item-header\">
                            ";
        // line 103
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 104
            echo "                            <h6 class=\"item-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "</h6>
                            ";
        } else {
            // line 106
            echo "                                <h6 class=\"item-title\">Aziz Arfaoui </h6>
                            ";
        }
        // line 108
        echo "                        </div>
                        <div class=\"item-content\">
                            <ul class=\"settings-list\">
                                <li><a href=\"#\"><i class=\"flaticon-user\"></i>My Profile</a></li>
                                <li><a href=\"#\"><i class=\"flaticon-list\"></i>Task</a></li>
                                <li><a href=\"#\"><i class=\"flaticon-chat-comment-oval-speech-bubble-with-text-lines\"></i>Message</a></li>
                                <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AccountSettings");
        echo "\"><i class=\"flaticon-gear-loading\"></i>Account Settings</a></li>
                                ";
        // line 115
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 116
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"flaticon-turn-off\"></i>Log Out</a></li>
                                ";
        } else {
            // line 118
            echo "                                <li><a href=\"#\"><i class=\"flaticon-turn-off\"></i>Log Out</a></li>
                                ";
        }
        // line 120
        echo "                            </ul>
                        </div>
                    </div>
                </li>
                <li class=\"navbar-item dropdown header-message\">
                    <a class=\"navbar-nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <i class=\"far fa-envelope\"></i>
                        <div class=\"item-title d-md-none text-16 mg-l-10\">Message</div>
                        <span>5</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <div class=\"item-header\">
                            <h6 class=\"item-title\">05 Message</h6>
                        </div>
                        <div class=\"item-content\">
                            <div class=\"media\">
                                <div class=\"item-img bg-skyblue author-online\">
                                    <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/student11.png"), "html", null, true);
        echo "\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Maria Zaman</span>
                                            <span class=\"item-time\">18:30</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-img bg-yellow author-online\">
                                    <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/student12.png"), "html", null, true);
        echo "\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Benny Roy</span>
                                            <span class=\"item-time\">10:35</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-img bg-pink\">
                                    <img src=\" ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/student13.png"), "html", null, true);
        echo "\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Steven</span>
                                            <span class=\"item-time\">02:35</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-img bg-violet-blue\">
                                    <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/figure/student11.png"), "html", null, true);
        echo "\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Joshep Joe</span>
                                            <span class=\"item-time\">12:35</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"navbar-item dropdown header-notification\">
                    <a class=\"navbar-nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <i class=\"far fa-bell\"></i>
                        <div class=\"item-title d-md-none text-16 mg-l-10\">Notification</div>
                        <span>8</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <div class=\"item-header\">
                            <h6 class=\"item-title\">03 Notifiacations</h6>
                        </div>
                        <div class=\"item-content\">
                            <div class=\"media\">
                                <div class=\"item-icon bg-skyblue\">
                                    <i class=\"fas fa-check\"></i>
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"post-title\">Complete Today Task</div>
                                    <span>1 Mins ago</span>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-icon bg-orange\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"post-title\">Director Metting</div>
                                    <span>20 Mins ago</span>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-icon bg-violet-blue\">
                                    <i class=\"fas fa-cogs\"></i>
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"post-title\">Update Password</div>
                                    <span>45 Mins ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class=\"dashboard-page-one\">
        <!-- Sidebar Area Start Here -->
        <div class=\"sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color\">
            <div class=\"mobile-sidebar-header d-md-none\">
                <div class=\"header-logo\">
                    <a href=\"index.html\"><img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </div>
            </div>
            <div class=\"sidebar-menu-content\">
                <ul class=\"nav nav-sidebar-menu sidebar-toggle-view\">

                    <li class=\"nav-item\">



                        <div class=\"dashboard-summery-oneLogin mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-ash\">
                                        <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/man.png"), "html", null, true);
        echo "\" >
                                    </div>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                ";
        // line 273
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 274
            echo "                                <div class=\"item-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "</div>
                                ";
            // line 275
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 276
                echo "                                    <div class=\"item-title1\">Admin</div>
                                    ";
            }
            // line 278
            echo "                                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 279
                echo "                                        <div class=\"item-title1\">SuperAdmin</div>
                                    ";
            }
            // line 281
            echo "                                ";
        } else {
            // line 282
            echo "                                    <div class=\"item-title\">Aziz Arfaoui</div>

                                <div class=\"item-title1\">ADMIN</div>
                                ";
        }
        // line 286
        echo "                            </div>

                        </div>


                    </li>



                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-dashboard\"></i><span>Dashboard</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 299
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back");
        echo "\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Admin</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"index3.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Students</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"index4.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Parents</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"index5.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Teachers</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-classmates\"></i><span>Students</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-student.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Students</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"student-details.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Student Details</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"admit-form.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Admission Form</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"student-promotion.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Student Promotion</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i
                                    class=\"flaticon-multiple-users-silhouette\"></i><span>Teachers</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-teacher.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Teachers</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"teacher-details.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Teacher Details</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-teacher.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add
                                    Teacher</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"teacher-payment.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Payment</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-couple\"></i><span>Parents</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-parents.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Parents</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"parents-details.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Parents Details</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-parents.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add
                                    Parent</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-books\"></i><span>Library</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-book.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Book</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-book.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add New
                                    Book</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-technological\"></i><span>Acconunt</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-fees.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All Fees
                                    Collection</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"all-expense.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Expenses</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-expense.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add
                                    Expenses</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item \">
                        <a href=\"";
        // line 405
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddClasse");
        echo "\" class=\"nav-link\"><i
                                    class=\"flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler\"></i><span>Class</span></a>

                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 410
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddSubject");
        echo "\" class=\"nav-link\"><i
                                    class=\"flaticon-open-book\"></i><span>Subject</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 414
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddSchedule");
        echo "\" class=\"nav-link\"><i class=\"flaticon-calendar\"></i><span>Class
                                    Routine</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"student-attendence.html\" class=\"nav-link\"><i
                                    class=\"flaticon-checklist\"></i><span>Attendence</span></a>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-shopping-list\"></i><span>Exam</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"exam-schedule.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Exam
                                    Schedule</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"exam-grade.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Exam
                                    Grades</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"transport.html\" class=\"nav-link\"><i
                                    class=\"flaticon-bus-side-view\"></i><span>Transport</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"notice-board.html\" class=\"nav-link\"><i
                                    class=\"flaticon-script\"></i><span>Notice</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"messaging.html\" class=\"nav-link\"><i
                                    class=\"flaticon-chat\"></i><span>Messeage</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 448
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddAccount");
        echo "\" class=\"nav-link\"><i
                                    class=\"flaticon-settings\"></i><span>Add Account</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar Area End Here -->

        ";
        // line 456
        $this->displayBlock('body', $context, $blocks);
        // line 739
        echo "            <!-- Footer Area Start Here -->
            ";
        // line 740
        $this->displayBlock('footer', $context, $blocks);
        // line 745
        echo "            <!-- Footer Area End Here -->



        </div>
    </div>
    <!-- Page Area End Here -->
    <!-- jquery-->

";
        // line 754
        $this->displayBlock('jq', $context, $blocks);
        // line 757
        echo "    <!-- Plugins js -->
    <script src=\" ";
        // line 758
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo " \" ></script>
    <!-- Popper js -->
    <script src=\" ";
        // line 760
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
    <!-- Bootstrap js -->
    <script src=\" ";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \" ></script>
    <!-- Counterup Js -->
    <script src=\" ";
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo " \" ></script>
    <!-- Moment Js -->
    <script  src=\" ";
        // line 766
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo " \" ></script>
    <!-- Scroll Up Js -->
    <script src=\" ";
        // line 768
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo " \" ></script>
    <!-- Waypoints Js -->
    <script  src=\" ";
        // line 770
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo " \" ></script>
    <!-- Select 2 Js -->
    <script src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Date Picker Js -->
    <script src=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Full Calender Js -->
    <script src=\" ";
        // line 776
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo " \"></script>
    <!-- Chart Js -->
    <script  src=\" ";
        // line 778
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo " \" ></script>
    <!-- Custom Js -->
    <script  src=\" ";
        // line 780
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo " \" ></script>

</div>
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 456
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 457
        echo "        <div class=\"dashboard-content-one\">
            <!-- Breadcubs Area Start Here -->
            <div class=\"breadcrumbs-area\">

                <div class=\"dashboard-summery-one1 mg-b-20\">

                </div>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Dashboard summery Start Here -->
            <div class=\"row gutters-20\">
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-one mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">

                                <div class=\"item-icon bg-light-blue \">
                                    ";
        // line 474
        $this->displayBlock('header', $context, $blocks);
        // line 477
        echo "                                </div>

                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Students</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"150000\">1,50,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-oneT mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"item-icon bg-light-blue\">
                                    <img src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/teacher.png"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Teachers</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"2250\">2,250</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-oneP mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"item-icon bg-light-yellow\">
                                    <img src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/mother.png"), "html", null, true);
        echo "\" width=\"60\">
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Parents</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"5690\">5,690</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-oneA mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"item-icon bg-light-red\">
                                    <img src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/boss.png"), "html", null, true);
        echo "\" width=\"55px\" >
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Admins</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"5\"><b>5</b></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard summery End Here -->
            <!-- Dashboard Content Start Here -->
            <div class=\"row gutters-20\">
                <div class=\"col-12 col-xl-8 col-6-xxxl\">
                    <div class=\"card dashboard-card-one pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Earnings</h3>
                                </div>

                            </div>
                            <div class=\"earning-report\">
                                <div class=\"item-content\">
                                    <div class=\"single-item pseudo-bg-blue\">
                                        <h4>Income</h4>
                                        <span>75,000</span>
                                    </div>
                                    <div class=\"single-item pseudo-bg-red\">
                                        <h4>Expenses</h4>
                                        <span>15,000</span>
                                    </div>
                                </div>

                            </div>
                            <div class=\"earning-chart-wrap\">
                                <canvas id=\"earning-line-chart\" width=\"660\" height=\"320\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 col-3-xxxl\">
                    <div class=\"card dashboard-card-two pd-b-20\">
                        <div class=\"card-bodyAbsent\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Absent</h3>

                                </div>

                            </div>
                            <hr style=\"border-width:4px;\">
                            <p class=\"noabs\">No students absent</p>
                        </div>

                    </div>
                </div>
                <div class=\"col-12 col-xl-6 col-3-xxxl\">
                    <div class=\"card dashboard-card-three pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Students</h3>
                                </div>

                            </div>
                            <div class=\"doughnut-chart-wrap\">
                                <canvas id=\"student-doughnut-chart\" width=\"100\" height=\"300\"></canvas>
                            </div>
                            <div class=\"student-report\">
                                <div class=\"student-count pseudo-bg-blue\">
                                    <h4 class=\"item-title\">Female Students</h4>
                                    <div class=\"item-number\">30 %</div>
                                </div>
                                <div class=\"student-count pseudo-bg-yellow\">
                                    <h4 class=\"item-title\">Male Students</h4>
                                    <div class=\"item-number\">70 %</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-6 col-4-xxxl\">
                    <div class=\"card dashboard-card-four pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Event Calender</h3>
                                </div>
                                <div class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                                       aria-expanded=\"false\">...</a>

                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"#\"><i
                                                    class=\"fas fa-times text-orange-red\"></i>Close</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i
                                                    class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i
                                                    class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"calender-wrap\">
                                <div id=\"fc-calender\" class=\"fc-calender\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-6 col-4-xxxl\">
                    <div class=\"card dashboard-card-five pd-b-20\">
                        <div class=\"card-body pd-b-14\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Website Traffic</h3>
                                </div>

                            </div>

                            <div class=\"traffic-number\">2,590</div>
                            <div class=\"traffic-bar\">
                                <div class=\"direct\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Direct\">
                                </div>
                                <div class=\"search\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Search\">
                                </div>
                                <div class=\"referrals\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Referrals\">
                                </div>
                                <div class=\"social\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Social\">
                                </div>
                            </div>
                            <div class=\"traffic-table table-responsive\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-Aquamarine\">Students</td>
                                        <td>12,890</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-blue\">Teachers</td>
                                        <td>7,245</td>
                                        <td>27%</td>
                                    </tr>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-yellow\">Parents</td>
                                        <td>4,256</td>
                                        <td>8%</td>
                                    </tr>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-red\">Visitors</td>
                                        <td>500</td>
                                        <td>7%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-6 col-4-xxxl\">
                    <div class=\"card dashboard-card-six pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1 mg-b-17\">
                                <div class=\"item-title\">
                                    <h3>Notice Board</h3>
                                </div>

                            </div>
                            <div class=\"notice-box-wrap\">
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-skyblue\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag mene esom text of the
                                            printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-yellow\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-pink\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag meneesom.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-skyblue\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag mene esom text of the
                                            printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-yellow\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-pink\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag meneesom.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content End Here -->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 474
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 475
        echo "                                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/student.png"), "html", null, true);
        echo "\" >
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 740
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 741
        echo "            <footer class=\"footer-wrap-layout1\">
                <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
            </footer>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 754
    public function block_jq($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jq"));

        // line 755
        echo "    <script src=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo " \" ></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1085 => 755,  1076 => 754,  1063 => 741,  1054 => 740,  1041 => 475,  1032 => 474,  811 => 528,  791 => 511,  771 => 494,  752 => 477,  750 => 474,  731 => 457,  722 => 456,  705 => 780,  700 => 778,  695 => 776,  690 => 774,  685 => 772,  680 => 770,  675 => 768,  670 => 766,  665 => 764,  660 => 762,  655 => 760,  650 => 758,  647 => 757,  645 => 754,  634 => 745,  632 => 740,  629 => 739,  627 => 456,  616 => 448,  579 => 414,  572 => 410,  564 => 405,  455 => 299,  440 => 286,  434 => 282,  431 => 281,  427 => 279,  424 => 278,  420 => 276,  418 => 275,  413 => 274,  411 => 273,  403 => 268,  386 => 254,  313 => 184,  295 => 169,  277 => 154,  259 => 139,  238 => 120,  234 => 118,  228 => 116,  226 => 115,  222 => 114,  214 => 108,  210 => 106,  204 => 104,  202 => 103,  194 => 98,  190 => 96,  185 => 93,  177 => 89,  169 => 85,  167 => 84,  129 => 49,  125 => 48,  110 => 36,  105 => 34,  100 => 32,  95 => 30,  90 => 28,  85 => 26,  80 => 24,  75 => 22,  70 => 20,  65 => 18,  59 => 15,  54 => 13,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>

<html class=\"no-js\" lang=\"\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>SparkIT Dashboard</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\" {{ asset('img/favicon.png') }} \">
    <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\" {{ asset('css/normalize.css') }}\">

    <!-- Main CSS -->
    <link rel=\"stylesheet\"  href=\" {{ asset('css/main.css') }} \">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\" {{ asset('css/bootstrap.min.css') }} \" >
    <!-- Fontawesome CSS -->
    <link rel=\"stylesheet\" href=\" {{ asset('css/all.min.css') }} \">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\"  href=\" {{ asset('fonts/flaticon.css') }} \" >
    <!-- Full Calender CSS -->
    <link rel=\"stylesheet\" href=\" {{ asset('css/fullcalendar.min.css') }} \">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\" {{ asset('css/animate.min.css') }} \" >
    <!-- Select 2 CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/select2.min.css') }} \">
    <!-- Date Picker CSS -->
    <link rel=\"stylesheet\" href=\"{{  asset('css/datepicker.min.css') }}\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\" {{ asset('style.css') }} \" >
    <!-- Modernize js -->
    <script href=\" {{ asset('js/modernizr-3.6.0.min.js') }} \"></script>

</head>
<body>
<!-- Preloader Start Here -->
<div id=\"preloader\"></div>
<!-- Preloader End Here -->
<div id=\"wrapper\" class=\"wrapper bg-ash\">
    <!-- Header Menu Area Start Here -->
    <div class=\"navbar navbar-expand-md header-menu-one bg-light\">
        <div class=\"nav-bar-header-one\">
            <div class=\"header-logo\">
                <a href=\"{{ path('front') }}\">
                    <img src=\"{{ asset('img/LogoPrinc.png') }}\" alt=\"logo\" width=\"155px\" height=\"40px\">
                </a>
            </div>

        </div>




        <div class=\"d-md-none mobile-nav-bar\">
            <button class=\"navbar-toggler pulse-animation\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-navbar\" aria-expanded=\"false\">
                <i class=\"far fa-arrow-alt-circle-down\"></i>
            </button>
            <button type=\"button\" class=\"navbar-toggler sidebar-toggle-mobile\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
        <div class=\"header-main-menu collapse navbar-collapse\" id=\"mobile-navbar\">
            <ul class=\"navbar-nav\">
                <li class=\"navbar-item header-search-bar\">
                    <div class=\"input-group stylish-input-group\">
                            <span class=\"input-group-addon\">
                                <button type=\"submit\">
                                    <span class=\"flaticon-search\" aria-hidden=\"true\"></span>
                                </button>
                            </span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Find Something . . .\">
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"navbar-item dropdown header-admin\">
                    <a class=\"navbar-nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <div class=\"admin-title\">
                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                            <h5 class=\"item-title\">{{ app.user.username }}</h5>
                                <span>SuperAdmin</span>

                                {% elseif  is_granted('ROLE_ADMIN')%}
                                    <h5 class=\"item-title\">{{ app.user.username }}</h5>
                                    <div class=\"item-title1\">Admin</div>

                            {% else %}
                            <h5 class=\"item-title\">Aziz Arfaoui</h5>
                            <span>Admin</span>
                            {% endif %}
                        </div>
                        <div class=\"admin-img\">
                            <img src=\"{{ asset('fonts/man.png') }}\" width=\"40px\" alt=\"Admin\">
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <div class=\"item-header\">
                            {% if is_granted('ROLE_USER') %}
                            <h6 class=\"item-title\">{{ app.user.username }}</h6>
                            {% else %}
                                <h6 class=\"item-title\">Aziz Arfaoui </h6>
                            {% endif %}
                        </div>
                        <div class=\"item-content\">
                            <ul class=\"settings-list\">
                                <li><a href=\"#\"><i class=\"flaticon-user\"></i>My Profile</a></li>
                                <li><a href=\"#\"><i class=\"flaticon-list\"></i>Task</a></li>
                                <li><a href=\"#\"><i class=\"flaticon-chat-comment-oval-speech-bubble-with-text-lines\"></i>Message</a></li>
                                <li><a href=\"{{ path('admin_AccountSettings') }}\"><i class=\"flaticon-gear-loading\"></i>Account Settings</a></li>
                                {% if is_granted('ROLE_USER') %}
                                <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"flaticon-turn-off\"></i>Log Out</a></li>
                                {% else %}
                                <li><a href=\"#\"><i class=\"flaticon-turn-off\"></i>Log Out</a></li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </li>
                <li class=\"navbar-item dropdown header-message\">
                    <a class=\"navbar-nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <i class=\"far fa-envelope\"></i>
                        <div class=\"item-title d-md-none text-16 mg-l-10\">Message</div>
                        <span>5</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <div class=\"item-header\">
                            <h6 class=\"item-title\">05 Message</h6>
                        </div>
                        <div class=\"item-content\">
                            <div class=\"media\">
                                <div class=\"item-img bg-skyblue author-online\">
                                    <img src=\"{{ asset('img/figure/student11.png') }}\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Maria Zaman</span>
                                            <span class=\"item-time\">18:30</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-img bg-yellow author-online\">
                                    <img src=\"{{ asset('img/figure/student12.png') }}\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Benny Roy</span>
                                            <span class=\"item-time\">10:35</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-img bg-pink\">
                                    <img src=\" {{ asset('img/figure/student13.png') }}\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Steven</span>
                                            <span class=\"item-time\">02:35</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-img bg-violet-blue\">
                                    <img src=\"{{ asset('img/figure/student11.png') }}\" alt=\"img\">
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"item-title\">
                                        <a href=\"#\">
                                            <span class=\"item-name\">Joshep Joe</span>
                                            <span class=\"item-time\">12:35</span>
                                        </a>
                                    </div>
                                    <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"navbar-item dropdown header-notification\">
                    <a class=\"navbar-nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        <i class=\"far fa-bell\"></i>
                        <div class=\"item-title d-md-none text-16 mg-l-10\">Notification</div>
                        <span>8</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <div class=\"item-header\">
                            <h6 class=\"item-title\">03 Notifiacations</h6>
                        </div>
                        <div class=\"item-content\">
                            <div class=\"media\">
                                <div class=\"item-icon bg-skyblue\">
                                    <i class=\"fas fa-check\"></i>
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"post-title\">Complete Today Task</div>
                                    <span>1 Mins ago</span>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-icon bg-orange\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"post-title\">Director Metting</div>
                                    <span>20 Mins ago</span>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"item-icon bg-violet-blue\">
                                    <i class=\"fas fa-cogs\"></i>
                                </div>
                                <div class=\"media-body space-sm\">
                                    <div class=\"post-title\">Update Password</div>
                                    <span>45 Mins ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class=\"dashboard-page-one\">
        <!-- Sidebar Area Start Here -->
        <div class=\"sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color\">
            <div class=\"mobile-sidebar-header d-md-none\">
                <div class=\"header-logo\">
                    <a href=\"index.html\"><img src=\"{{ asset('img/logo1.png') }}\" alt=\"logo\"></a>
                </div>
            </div>
            <div class=\"sidebar-menu-content\">
                <ul class=\"nav nav-sidebar-menu sidebar-toggle-view\">

                    <li class=\"nav-item\">



                        <div class=\"dashboard-summery-oneLogin mg-b-20\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"item-icon bg-ash\">
                                        <img src=\"{{ asset('fonts/man.png') }}\" >
                                    </div>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                {% if is_granted('ROLE_USER') %}
                                <div class=\"item-title\">{{ app.user.username }}</div>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"item-title1\">Admin</div>
                                    {% endif %}
                                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                                        <div class=\"item-title1\">SuperAdmin</div>
                                    {% endif %}
                                {% else %}
                                    <div class=\"item-title\">Aziz Arfaoui</div>

                                <div class=\"item-title1\">ADMIN</div>
                                {% endif %}
                            </div>

                        </div>


                    </li>



                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-dashboard\"></i><span>Dashboard</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('back')}}\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Admin</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"index3.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Students</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"index4.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Parents</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"index5.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Teachers</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-classmates\"></i><span>Students</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-student.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Students</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"student-details.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Student Details</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"admit-form.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Admission Form</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"student-promotion.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Student Promotion</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i
                                    class=\"flaticon-multiple-users-silhouette\"></i><span>Teachers</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-teacher.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Teachers</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"teacher-details.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Teacher Details</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-teacher.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add
                                    Teacher</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"teacher-payment.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Payment</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-couple\"></i><span>Parents</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-parents.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Parents</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"parents-details.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Parents Details</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-parents.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add
                                    Parent</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-books\"></i><span>Library</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-book.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All
                                    Book</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-book.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add New
                                    Book</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-technological\"></i><span>Acconunt</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"all-fees.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>All Fees
                                    Collection</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"all-expense.html\" class=\"nav-link\"><i
                                            class=\"fas fa-angle-right\"></i>Expenses</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"add-expense.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Add
                                    Expenses</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item \">
                        <a href=\"{{ path('admin_AddClasse') }}\" class=\"nav-link\"><i
                                    class=\"flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler\"></i><span>Class</span></a>

                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('admin_AddSubject') }}\" class=\"nav-link\"><i
                                    class=\"flaticon-open-book\"></i><span>Subject</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('admin_AddSchedule') }}\" class=\"nav-link\"><i class=\"flaticon-calendar\"></i><span>Class
                                    Routine</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"student-attendence.html\" class=\"nav-link\"><i
                                    class=\"flaticon-checklist\"></i><span>Attendence</span></a>
                    </li>
                    <li class=\"nav-item sidebar-nav-item\">
                        <a href=\"#\" class=\"nav-link\"><i class=\"flaticon-shopping-list\"></i><span>Exam</span></a>
                        <ul class=\"nav sub-group-menu\">
                            <li class=\"nav-item\">
                                <a href=\"exam-schedule.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Exam
                                    Schedule</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"exam-grade.html\" class=\"nav-link\"><i class=\"fas fa-angle-right\"></i>Exam
                                    Grades</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"transport.html\" class=\"nav-link\"><i
                                    class=\"flaticon-bus-side-view\"></i><span>Transport</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"notice-board.html\" class=\"nav-link\"><i
                                    class=\"flaticon-script\"></i><span>Notice</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"messaging.html\" class=\"nav-link\"><i
                                    class=\"flaticon-chat\"></i><span>Messeage</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('admin_AddAccount') }}\" class=\"nav-link\"><i
                                    class=\"flaticon-settings\"></i><span>Add Account</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar Area End Here -->

        {% block body %}
        <div class=\"dashboard-content-one\">
            <!-- Breadcubs Area Start Here -->
            <div class=\"breadcrumbs-area\">

                <div class=\"dashboard-summery-one1 mg-b-20\">

                </div>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Dashboard summery Start Here -->
            <div class=\"row gutters-20\">
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-one mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">

                                <div class=\"item-icon bg-light-blue \">
                                    {% block header %}
                                        <img src=\"{{ asset('fonts/student.png') }}\" >
                                    {% endblock  %}
                                </div>

                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Students</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"150000\">1,50,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-oneT mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"item-icon bg-light-blue\">
                                    <img src=\"{{ asset('fonts/teacher.png') }}\">
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Teachers</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"2250\">2,250</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-oneP mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"item-icon bg-light-yellow\">
                                    <img src=\"{{ asset('fonts/mother.png') }}\" width=\"60\">
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Parents</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"5690\">5,690</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 col-12\">
                    <div class=\"dashboard-summery-oneA mg-b-20\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"item-icon bg-light-red\">
                                    <img src=\"{{ asset('fonts/boss.png') }}\" width=\"55px\" >
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"item-content\">
                                    <div class=\"item-title\">Admins</div>
                                    <div class=\"item-number\"><span class=\"counter\" data-num=\"5\"><b>5</b></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard summery End Here -->
            <!-- Dashboard Content Start Here -->
            <div class=\"row gutters-20\">
                <div class=\"col-12 col-xl-8 col-6-xxxl\">
                    <div class=\"card dashboard-card-one pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Earnings</h3>
                                </div>

                            </div>
                            <div class=\"earning-report\">
                                <div class=\"item-content\">
                                    <div class=\"single-item pseudo-bg-blue\">
                                        <h4>Income</h4>
                                        <span>75,000</span>
                                    </div>
                                    <div class=\"single-item pseudo-bg-red\">
                                        <h4>Expenses</h4>
                                        <span>15,000</span>
                                    </div>
                                </div>

                            </div>
                            <div class=\"earning-chart-wrap\">
                                <canvas id=\"earning-line-chart\" width=\"660\" height=\"320\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 col-3-xxxl\">
                    <div class=\"card dashboard-card-two pd-b-20\">
                        <div class=\"card-bodyAbsent\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Absent</h3>

                                </div>

                            </div>
                            <hr style=\"border-width:4px;\">
                            <p class=\"noabs\">No students absent</p>
                        </div>

                    </div>
                </div>
                <div class=\"col-12 col-xl-6 col-3-xxxl\">
                    <div class=\"card dashboard-card-three pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Students</h3>
                                </div>

                            </div>
                            <div class=\"doughnut-chart-wrap\">
                                <canvas id=\"student-doughnut-chart\" width=\"100\" height=\"300\"></canvas>
                            </div>
                            <div class=\"student-report\">
                                <div class=\"student-count pseudo-bg-blue\">
                                    <h4 class=\"item-title\">Female Students</h4>
                                    <div class=\"item-number\">30 %</div>
                                </div>
                                <div class=\"student-count pseudo-bg-yellow\">
                                    <h4 class=\"item-title\">Male Students</h4>
                                    <div class=\"item-number\">70 %</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-6 col-4-xxxl\">
                    <div class=\"card dashboard-card-four pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Event Calender</h3>
                                </div>
                                <div class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                                       aria-expanded=\"false\">...</a>

                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"#\"><i
                                                    class=\"fas fa-times text-orange-red\"></i>Close</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i
                                                    class=\"fas fa-cogs text-dark-pastel-green\"></i>Edit</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i
                                                    class=\"fas fa-redo-alt text-orange-peel\"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"calender-wrap\">
                                <div id=\"fc-calender\" class=\"fc-calender\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-6 col-4-xxxl\">
                    <div class=\"card dashboard-card-five pd-b-20\">
                        <div class=\"card-body pd-b-14\">
                            <div class=\"heading-layout1\">
                                <div class=\"item-title\">
                                    <h3>Website Traffic</h3>
                                </div>

                            </div>

                            <div class=\"traffic-number\">2,590</div>
                            <div class=\"traffic-bar\">
                                <div class=\"direct\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Direct\">
                                </div>
                                <div class=\"search\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Search\">
                                </div>
                                <div class=\"referrals\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Referrals\">
                                </div>
                                <div class=\"social\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Social\">
                                </div>
                            </div>
                            <div class=\"traffic-table table-responsive\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-Aquamarine\">Students</td>
                                        <td>12,890</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-blue\">Teachers</td>
                                        <td>7,245</td>
                                        <td>27%</td>
                                    </tr>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-yellow\">Parents</td>
                                        <td>4,256</td>
                                        <td>8%</td>
                                    </tr>
                                    <tr>
                                        <td class=\"t-title pseudo-bg-red\">Visitors</td>
                                        <td>500</td>
                                        <td>7%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-6 col-4-xxxl\">
                    <div class=\"card dashboard-card-six pd-b-20\">
                        <div class=\"card-body\">
                            <div class=\"heading-layout1 mg-b-17\">
                                <div class=\"item-title\">
                                    <h3>Notice Board</h3>
                                </div>

                            </div>
                            <div class=\"notice-box-wrap\">
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-skyblue\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag mene esom text of the
                                            printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-yellow\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-pink\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag meneesom.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-skyblue\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag mene esom text of the
                                            printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-yellow\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag printing.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class=\"notice-list\">
                                    <div class=\"post-date bg-pink\">16 June, 2019</div>
                                    <h6 class=\"notice-title\"><a href=\"#\">Great School manag meneesom.</a></h6>
                                    <div class=\"entry-meta\"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content End Here -->
            {% endblock %}
            <!-- Footer Area Start Here -->
            {% block footer %}
            <footer class=\"footer-wrap-layout1\">
                <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
            </footer>
            {% endblock %}
            <!-- Footer Area End Here -->



        </div>
    </div>
    <!-- Page Area End Here -->
    <!-- jquery-->

{% block jq %}
    <script src=\" {{ asset('js/jquery-3.3.1.min.js') }} \" ></script>
    {% endblock %}
    <!-- Plugins js -->
    <script src=\" {{ asset('js/plugins.js') }} \" ></script>
    <!-- Popper js -->
    <script src=\" {{ asset('js/popper.min.js') }} \"></script>
    <!-- Bootstrap js -->
    <script src=\" {{ asset('js/bootstrap.min.js') }} \" ></script>
    <!-- Counterup Js -->
    <script src=\" {{ asset('js/jquery.counterup.min.js') }} \" ></script>
    <!-- Moment Js -->
    <script  src=\" {{ asset('js/moment.min.js') }} \" ></script>
    <!-- Scroll Up Js -->
    <script src=\" {{ asset('js/jquery.scrollUp.min.js') }} \" ></script>
    <!-- Waypoints Js -->
    <script  src=\" {{ asset('js/jquery.waypoints.min.js') }} \" ></script>
    <!-- Select 2 Js -->
    <script src=\"{{ asset('js/select2.min.js') }}\"></script>
    <!-- Date Picker Js -->
    <script src=\"{{ asset('js/datepicker.min.js') }}\"></script>
    <!-- Full Calender Js -->
    <script src=\" {{ asset('js/fullcalendar.min.js') }} \"></script>
    <!-- Chart Js -->
    <script  src=\" {{ asset('js/Chart.min.js') }} \" ></script>
    <!-- Custom Js -->
    <script  src=\" {{ asset('js/main.js') }} \" ></script>

</div>
</body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\SparkIT\\app\\Resources\\views\\base.html.twig");
    }
}
