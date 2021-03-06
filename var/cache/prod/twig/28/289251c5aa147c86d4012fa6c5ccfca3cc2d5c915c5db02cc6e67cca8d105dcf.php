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

/* baseFront.html.twig */
class __TwigTemplate_9a9949c0d0f56ef6ef2804ce83a1b9a7b6e83968890e60b2b2036659b3daf4d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'sonia' => [$this, 'block_sonia'],
            'ghasoussa' => [$this, 'block_ghasoussa'],
            'formetud' => [$this, 'block_formetud'],
            'form' => [$this, 'block_form'],
            'taswira' => [$this, 'block_taswira'],
            'cloud1' => [$this, 'block_cloud1'],
            'body' => [$this, 'block_body'],
            'cloud' => [$this, 'block_cloud'],
            'container' => [$this, 'block_container'],
            'join' => [$this, 'block_join'],
            'joinspark' => [$this, 'block_joinspark'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />
    <!-- Jointure Template 2-->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/vendor/animate/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/vendor/simple-line-icons/css/simple-line-icons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/vendor/owl.carousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/vendor/owl.carousel/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/vendor/magnific-popup/magnific-popup.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/theme-elements.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/demos/demo-seo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/skins/skin-seo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/custom1.css"), "html", null, true);
        echo "\">

    <!-- Stylesheets
    ============================================= -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/dark.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/font-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <!-- Movers Demo Specific Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/colors.php?color=0F66DD"), "html", null, true);
        echo "\" type=\"text/css\" /> <!-- Theme Color -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/demos/movers/css/fonts.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/demos/movers/movers.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <!-- / -->

    <!-- DatePicker CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/css/components/datepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

    <!-- Document Title
    ============================================= -->
    <title>SparkooL</title>

</head>

<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Header
    ============================================= -->
    <header id=\"header\" class=\"sticky-style-2 dark\">

        <div class=\"container clearfix\">

            <!-- Logo
            ============================================= -->
            <div id=\"logo\" class=\"\">
                <a href=\"index.html\" class=\"standard-logo\"><img class=\"divcenter\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("LogoPrinc.png"), "html", null, true);
        echo "\" alt=\"SparkooL Logo\"></a>
                <a href=\"index.html\" class=\"retina-logo\" ><img class=\"divcenter\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("LogoPrinc.png"), "html", null, true);
        echo "\" alt=\"SparkooL Logo\"></a>
            </div><!-- #logo end -->

            <ul class=\"header-extras\">
                <li>
                    <i class=\"i-plain icon-call nomargin\"></i>
                    <div class=\"he-text t400 text-white-50\">
                        Call Us:
                        <span><a href=\"tel:+111 22-33-44\" class=\"text-white t500\">+71 xxx-xxx</a></span>
                    </div>
                </li>
                <li>
                    <i class=\"i-plain icon-line2-envelope nomargin\"></i>
                    <div class=\"he-text t400 text-white-50\">
                        Email Us:
                        <span><a href=\"mailto:info@canvas.com\" target=\"_top\" class=\"text-white t500\">SparkooL@gmail.com</a></span>
                    </div>
                </li>

            </ul>

        </div>

        <div id=\"header-wrap\">

            <!-- Primary Navigation
            ============================================= -->
            <nav id=\"primary-menu\" class=\"style-2 with-arrows  not-dark\">

                <div class=\"container clearfix\">

                    <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                    <ul>

                        <li class=\"current\"><a href=\"#\"><div>Home</div></a></li>

                        <li><a href=\"#\"><div>Student</div></a>
                            <ul>
                                <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_submitreclamation");
        echo "\"><div>Reclamation</div></a></li>
                                <li><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_addsubject");
        echo "\"><div><i class=\"icon-line2-home\"></i>Add A New Subject</div></a></li>
                                <li><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_forumlist");
        echo "\"><div><i class=\"icon-line2-home\"></i>All subjects</div></a></li>
                                <li><a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudaint_getmyforum");
        echo "\"><div><i class=\"icon-building2\"></i>My Subjects</div></a></li>

                            </ul>
                        </li>
                        <li><a href=\"#\"><div>Parent Space</div></a>
                            <ul>
                                <li><a href=\" ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_front");
        echo " \"><div><i class=\"icon-line2-home\"></i>Inscription</div></a></li>
                                <li><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_reclamation");
        echo "\"><div><i class=\"icon-building2\"></i>Reclamation</div></a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\"><div>School Life</div></a>
                            <ul>
                                <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherClubFront");
        echo "\"><div><i class=\"fas fa-users\"></i>Clubs</div></a></li>
                                <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherEventFront");
        echo "\"><div><i class=\"far fa-calendar-alt\"></i>Events</div></a></li>
                            </ul>
                        </li>

                        <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ScheduleFront");
        echo "\"><div>School Schedule</div></a></li>
                        <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddReclamation");
        echo "\"><div>Reclamation </div></a></li>

                    </ul>

                    <!-- Header Buttons
                    ============================================= -->
                    <div class=\"header-buttons d-none d-sm-inline-block\">
                        ";
        // line 134
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 135
            echo "                    <a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "username", []), "html", null, true);
            echo " &nbsp;&nbsp;&nbsp;</a>
                            <a href=\"";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back");
            echo "\"   class=\"button button-rounded button-white button-light button-small m-0\">Back</a>
                            <a href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"   class=\"button button-rounded button-white button-light button-small m-0\">LOGOUT</a>
                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 139
            echo "                            <a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "username", []), "html", null, true);
            echo " &nbsp;&nbsp;&nbsp;</a>
                            <a href=\"";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back");
            echo "\"   class=\"button button-rounded button-white button-light button-small m-0\">Back</a>
                            <a href=\"";
            // line 141
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"   class=\"button button-rounded button-white button-light button-small m-0\">LOGOUT</a>
                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 143
            echo "                            <a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "username", []), "html", null, true);
            echo " &nbsp;&nbsp;&nbsp;</a>
                            <a href=\"";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"   class=\"button button-rounded button-white button-light button-small m-0\">LOGOUT</a>
                            ";
        } else {
            // line 146
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"   class=\"button button-rounded button-white button-light button-small m-0\">LOGIN</a>
                        ";
        }
        // line 148
        echo "
                    </div>

                    <!-- Top Search
                    ============================================= -->
               <!--     <div id=\"top-search\" class=\"mr-4\">
                        <a href=\"#\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\"icon-line-cross\"></i></a>
                        <form action=\"search.html\" method=\"get\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Type &amp; Hit Enter..\">
                        </form>
                    </div>#top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>
<br>
";
        // line 166
        $this->displayBlock('sonia', $context, $blocks);
        // line 187
        echo "
    </header><!-- #header end -->

    <!-- Slider
    ============================================= -->
    ";
        // line 192
        $this->displayBlock('ghasoussa', $context, $blocks);
        // line 305
        echo "    <!-- Content
    ============================================= -->
  ";
        // line 307
        $this->displayBlock('body', $context, $blocks);
        // line 597
        echo "    ";
        $this->displayBlock('join', $context, $blocks);
        // line 620
        echo "    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"mt-0\" style=\"background-color: #111c22;\">
        <div class=\"container my-4\">
            <div class=\"row py-5\">
                <div class=\"col-lg-2 align-self-center mb-5 mb-lg-0\">
                    <a href=\"#\"></a>
                    <img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/LogoFooter.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Demo SEO\" width=\"100\" />
                    </a>
                </div>
                <div class=\"col-lg-3 mb-4 mb-lg-0\">
                    <h4 class=\"font-weight-normal text-color-light text-5 ls-0 mb-4\">Contact Details</h4>
                    <ul class=\"list list-unstyled\">
                        <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div><span class=\"text-color-light\">Address:</span> Street Name, City Name, Tunis</div></li>
                        <li class=\"d-flex align-items-baseline\"><i class=\"fab fa-whatsapp text-color-primary mr-3\"></i><div><span class=\"text-color-light\">Phone:</span> +71 xxx-xxx</div></li>
                        <li class=\"d-flex align-items-baseline\"><i class=\"far fa-envelope text-color-primary mr-3\"></i><div><span class=\"text-color-light\">Email:</span> <a href=\"mailto:mail@example.com\">SparkooL@gmail.com</a></div></li>
                    </ul>
                </div>
                <div class=\"col-lg-3 mb-4 mb-lg-0\">
                    <h4 class=\"font-weight-normal text-color-light text-5 ls-0 mb-4\">Navigations</h4>
                    <ul class=\"list list-unstyled\">
                        <li class=\"mb-1\">
                            <a class=\"link-hover-style-1 active\" data-hash data-hash-offset=\"95\" href=\"#home\">Home</a>
                        </li>
                        <li class=\"mb-1\">
                            <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#about\">About Us</a>
                        </li>
                        <li class=\"mb-1\">
                            <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#solutions\">Program</a>
                        </li>


                        <li class=\"mb-1\">
                            <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#news\">Admission</a>
                        </li>
                        <li class=\"mb-1\">
                            <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"";
        // line 656
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_AddReclamation");
        echo "\">Reclamation</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-4\">
                    <h4 class=\"font-weight-normal text-color-light text-5 ls-0 mb-4\">Newsletter</h4>
                    <p>Enter your email address and get our offers and plans in to your mail.</p>
                    <div class=\"alert alert-success d-none\" id=\"newsletterSuccess\">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class=\"alert alert-danger d-none\" id=\"newsletterError\"></div>
                    <form id=\"newsletterForm\" action=\"php/newsletter-subscribe.php\" method=\"POST\" class=\"mw-100\">
                        <div class=\"input-group\">
                            <input class=\"form-control form-control-sm text-color-light custom-bg-color-1 rounded-0 border-0 px-4 text-3\" placeholder=\"Email Address...\" name=\"newsletterEmail\" id=\"newsletterEmail\" type=\"text\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary text-color-light text-2 rounded-0 py-3 px-4\" type=\"submit\"><strong>SUBSCRIBE</strong></button>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright footer-copyright-style-2\">
            <div class=\"container py-2\">
                <div class=\"row justify-content-between py-4\">
                    <div class=\"col-auto\">
                        <p>© Copyright SparkIT 2020. All Rights Reserved.</p>
                    </div>
                    <div class=\"col-auto\">
                        <ul class=\"footer-social-icons social-icons social-icons-clean social-icons-icon-light ml-3\">
                            <li class=\"social-icons-facebook\"><a href=\"http://www.facebook.com/\" target=\"_blank\" title=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a></li>
                            <li class=\"social-icons-twitter\"><a href=\"http://www.twitter.com/\" target=\"_blank\" title=\"Twitter\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li class=\"social-icons-linkedin\"><a href=\"http://www.linkedin.com/\" target=\"_blank\" title=\"Linkedin\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/plugins.js"), "html", null, true);
        echo "\"></script>

<!-- DatePicker JS -->
<script src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/components/datepicker.js"), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/functions.js"), "html", null, true);
        echo "\"></script>




</body>
</html>



";
    }

    // line 166
    public function block_sonia($context, array $blocks = [])
    {
        // line 167
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SoniaBundle:Notification:display"));
        echo "
        ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('SBC\NotificationsBundle\Twig\NotificationsAssetsExtension')->renderAssets(), "html", null, true);
        echo "
        <script>
            /**
             * After calling notifications_assets() \"pusher\" is now available
             * and you can use it this way
             */

                // select the channel you want to listen to
            var channel = pusher.subscribe(\"notifications\");// notifications channel
            channel.bind(\"my-event\", function(data) {
                console.log('from notifications channel', data);
            });

            var channel = pusher.subscribe(\"messages\");// messages channel
            channel.bind(\"my-event\", function(data) {
                console.log('from messages channel', data);
            });
        </script>
        ";
    }

    // line 192
    public function block_ghasoussa($context, array $blocks = [])
    {
        // line 193
        echo "        ";
        $this->displayBlock('formetud', $context, $blocks);
        // line 289
        echo "        ";
        $this->displayBlock('cloud1', $context, $blocks);
        // line 303
        echo "    </section>
";
    }

    // line 193
    public function block_formetud($context, array $blocks = [])
    {
        // line 194
        echo "    <section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEndimgg-2.png"), "html", null, true);
        echo "\") no-repeat center center / 100% 100%;\">

        <div class=\"container\" style=\"z-index: 2\">
            <div class=\"center\">
                <h2 class=\"text-white h2 t600 mb-2\">Welcome to SparkooL .</h2>
                <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
            </div>

            <div class=\"row topmargin justify-content-end clearfix\">
                <div class=\"col-lg-6\">
                    <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
                        <li class=\"nav-item\">
                            ";
        // line 206
        $this->displayBlock('form', $context, $blocks);
        // line 279
        echo "                </div>
                ";
        // line 280
        $this->displayBlock('taswira', $context, $blocks);
        // line 286
        echo "            </div>
        </div>
";
    }

    // line 206
    public function block_form($context, array $blocks = [])
    {
        // line 207
        echo "                            <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">Request A Demo</a>
                        </li>

                    </ul>
                    <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
                        <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">

                            <div class=\"form-widget\">
                                <div class=\"form-result\"></div>
                                <form class=\"row home-moving-form position-relative mb-0\" action=\"include/form.php\" method=\"post\" enctype=\"multipart/form-data\">
                                    <div class=\"form-process\"></div>

                                    <div class=\"col-sm-6 input-group form-group\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                        </div>
                                        <input type=\"text\" name=\"home-moving-form-location-from\" id=\"home-moving-form-location-from\" class=\"form-control required\" value=\"\" placeholder=\"First Name\">
                                    </div>

                                    <div class=\"col-sm-6 input-group form-group\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
                                        </div>
                                        <input type=\"text\" name=\"home-moving-form-location-to\" id=\"home-moving-form-location-to\" class=\"form-control required\" value=\"\" placeholder=\"Last Name\">
                                    </div>

                                    <div class=\"col-sm-6 input-group form-group\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
                                        </div>
                                        <input type=\"email\" name=\"home-moving-form-email\" id=\"home-moving-form-email\" class=\"form-control required\" value=\"\" placeholder=\"Your Email\">
                                    </div>

                                    <div class=\"col-sm-6 input-group form-group\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
                                        </div>
                                        <input type=\"text\" name=\"home-moving-form-phone\" id=\"home-moving-form-phone\" class=\"form-control required\" value=\"\" placeholder=\"Your Phone Number\">
                                    </div>

                                    <div class=\"col-sm-6 input-group form-group\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                        </div>
                                        <input type=\"text\" name=\"home-moving-form-name\" id=\"home-moving-form-name\" class=\"form-control required\" value=\"\" placeholder=\"Type of Organization\">
                                    </div>





                                    <div class=\"col-sm-6 input-group form-group\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text nobg\"><i class=\"icon-line2-home\"></i></span>
                                        </div>
                                        <input type=\"text\" class=\"form-control home-date required\" name=\"home-moving-form-date\" id=\"home-moving-form-date\" value=\"\" placeholder=\"Organization Name\">
                                    </div>

                                    <div class=\"col-12 hidden\">
                                        <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
                                    </div>

                                    <div class=\"col-12\">
                                        <button type=\"submit\" name=\"home-moving-form-submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">SUBMIT</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                                ";
    }

    // line 280
    public function block_taswira($context, array $blocks = [])
    {
        // line 281
        echo "                <div class=\"col-lg-5 d-none d-lg-flex flex-wrap justify-content-center\">
                    <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/ed2.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"d-flex align-self-end ml-5 mt-3\">

                </div>
                    ";
    }

    // line 289
    public function block_cloud1($context, array $blocks = [])
    {
        // line 290
        echo "        <div class=\"svg-separator\">
            <div>
                <svg preserveAspectRatio=\"xMidYMax meet\" viewBox=\"0 0 1600 100\"  data-height=\"100\">
                    <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
\t\t\t\t\t\tC979.5,96,980,56,1040,56z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.75);\" d=\"M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
\t\t\t\t\t\tz\"></path>
                    <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z\"></path> <path style=\"opacity: 1;fill: rgba(255,255,255,0.3);;\" d=\"M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z\"></path>
                    <path style=\"fill: rgb(255, 255, 255);\" d=\"M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z\"></path>
                </svg>
                <div class=\"bg-white\" style=\"height: 150px\"></div>
            </div>
        </div>
";
    }

    // line 307
    public function block_body($context, array $blocks = [])
    {
        // line 308
        echo "        <section id=\"content\">

        <div class=\"content-wrap pb-0\">

            <div class=\"container clearfix\">

                <div class=\"row justify-content-center mb-5\">
                    <div class=\"col-lg-7 center\">
                        <div class=\"heading-block\">
                            <h3 class=\"nott mb-3 t600 ls0\">How We Make your School Life Easier ?</h3>
                            <span class=\"text-black-50\">
\t\t\t\t\t\t\t\t\tSparkooL is a simplistic, easy to use online school management application has all tools & features to help you manage and improve your school and simplify daily work for your school . Keeps you updated wherever you are. </span>
                        </div>
                    </div>

                    <div class=\"col-lg-8\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-6\">
                                <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/demos/movers/images/others/4.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"\">
                            </div>
                            <div class=\"col-sm-6\">
                                <h3> Total Control Of Your School Anywhere Anytime</h3>
                                <p class=\"mb-2\">Student Admissions, Attendance, Communication, Student Information, invoice, Everyday student and teachers reports, Generate insightful and Daily activities</p>
                                <a target=\"_blank\" href=\"https://icons8.com\" class=\"color btn btn-sm p-0 btn-link\"> </a>
                            </div>
                        </div>
                        <div class=\"row align-items-center mt-5\">
                            <div class=\"col-sm-6 mb-4 mb-sm-0\">
                                <h3>Scheduling Better With SparkooL School Management Application</h3>
                                <p class=\"mb-2\">stay up to date with what's happening with everyone in your School, class schedules, exam, bookings, progress, payment reminders and many more.</p>
                                <a target=\"_blank\" href=\"https://icons8.com\" class=\"color btn btn-sm p-0 btn-link\"></a>
                            </div>
                            <div class=\"col-sm-6\">
                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/cal.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"\">
                            </div>
                        </div>
                        <div class=\"row align-items-center mt-5\">
                            <div class=\"col-sm-6\">
                                <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/Rock.png"), "html", null, true);
        echo "\" alt=\"Image 1\" class=\"\">
                            </div>
                            <div class=\"col-sm-6\">
                                <h3>Fast, Secure & Easy</h3>
                                <p class=\"mb-2\">We use advanced tools and technologies to build up this free school software. It is very fast,secure,relaible and easy to use and manage.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>

            <div class=\"clear\"></div>

            <div class=\"row align-items-stretch\">
                <div class=\"col-lg-3 col-md-6 center col-padding\" style=\"background-color: #F2F2F2;\">
                    <div>
                        <img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/read.png"), "html", null, true);
        echo "\" width=\"160px\" height=\"160px\"><br><br>
                        <div class=\"counter\"><span data-from=\"10\" data-to=\"165\" data-refresh-interval=\"50\" data-speed=\"2000\"></span>+</div>
                        <h4>Students</h4>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 center col-padding\" style=\"background-color: #F2F2F2;\">
                    <div>
                        <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/teacher.png"), "html", null, true);
        echo "\" width=\"160px\" height=\"160px\"><br><br>
                        <div class=\"counter\"><span data-from=\"10\" data-to=\"45\" data-refresh-interval=\"50\" data-speed=\"2500\"></span>+</div>
                        <h4>Teachers</h4>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 center col-padding\" style=\"background-color: #F2F2F2;\">
                    <div>
                        <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/employee.png"), "html", null, true);
        echo "\" width=\"160px\" height=\"160px\"><br><br>
                        <div class=\"counter\"><span data-from=\"10\" data-to=\"50\" data-refresh-interval=\"25\" data-speed=\"3000\"></span>+</div>
                        <h4>Employees</h4>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 center col-padding\" style=\"background-color: #F2F2F2;\">
                    <div>
                        <img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/img/book.png"), "html", null, true);
        echo "\" width=\"160px\" height=\"160px\"><br><br>
                        <div class=\"counter\"><span data-from=\"10\" data-to=\"100\" data-refresh-interval=\"30\" data-speed=\"2700\"></span>+</div>
                        <h4>Courses</h4>
                    </div>
                </div>
            </div>


            <br><br><br><br>
            <br>
            <div class=\"section section-features nobg mt-0 p-0 clearfix\">
                <div class=\"container clearfix\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 px-4 py-3\">
                            <i class=\"icon-email color ml-0 mb-4 i-xlarge i-plain d-block fnone\"></i>
                            <h4 class=\"mb-2\">Mailing</h4>
                            <p class=\"text-muted\">Add any Field to your Custom Form.  inbuilt Forms Processor will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>
                        <div class=\"col-lg-4 px-4 py-3\">
                            <i class=\"icon-phone-landscape color ml-0 mb-4 i-xlarge i-plain d-block fnone\"></i>
                            <h4 class=\"mb-2\">SMS</h4>
                            <p class=\"text-muted\">SMS allows it easy for everyone to monitor participation, charge requests, review plans and more..</p>
                        </div>
                        <div class=\"col-lg-4 px-4 py-3\">
                            <i class=\"icon-bell color ml-0 mb-4 i-xlarge i-plain d-block fnone\"></i>
                            <h4 class=\"mb-2\">Notifications</h4>
                            <p class=\"text-muted\">For the First Time ever, supports Email Templates which makes your Form Responses super easy to read and organize.</p>
                        </div>
                        <div class=\"col-lg-4 px-4 py-3\">
                            <i class=\"icon-user-shield  color ml-0 mb-4 i-xlarge i-plain d-block fnone\"></i>
                            <h4 class=\"mb-2\">User Protection</h4>
                            <p class=\"text-muted\">All the Forms are supported by Bot Protection and Optional reCaptcha Protection on top of the very secure PHPMailer Engine.</p>
                        </div>
                        <div class=\"col-lg-4 px-4 py-3\">
                            <i class=\"icon-calendar3 color ml-0 mb-4 i-xlarge i-plain d-block fnone\"></i>
                            <h4 class=\"mb-2\">Calendar</h4>
                            <p class=\"text-muted\">All the Components included now works with  Forms. Datepicker, Range Slider, File Uploads etc. all just work fine.</p>
                        </div>
                        <div class=\"col-lg-4 px-4 py-3\">
                            <i class=\"icon-mail-bulk color ml-0 mb-4 i-xlarge i-plain d-block fnone\"></i>
                            <h4 class=\"mb-2\">Fast Responding</h4>
                            <p class=\"text-muted\">Send Auto-Responders to your Form Submitters with Automatic Personalization. Like \"<em>Hey <strong>John</strong>, Thanks for your Message!</em>\".</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 436
        $this->displayBlock('cloud', $context, $blocks);
        // line 453
        echo "
                ";
        // line 454
        $this->displayBlock('container', $context, $blocks);
        // line 588
        echo "                </div>
            </div>

            <div class=\"clear\"></div>


        </div>

    </section><!-- #content end -->";
    }

    // line 436
    public function block_cloud($context, array $blocks = [])
    {
        // line 437
        echo "            <div class=\"clear\"></div>
            <br><br><br>

            <div class=\"clear\"></div>

            <div class=\"section section-gradient m-0\">
                <div class=\"svg-separator top rotate\">
                    <div>
                        <svg preserveAspectRatio=\"xMidYMax meet\" class=\"svg-separator sep3\" viewBox=\"0 0 1600 100\">
                            <path style=\"opacity: 1;fill: #FFF;\" d=\"M-40,71.627C20.307,71.627,20.058,32,80,32s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,26H-60V72L-40,71.627z\"></path>
                            <path class=\"svg-themecolor\" style=\"opacity: 0.1;\" d=\"M-40,83.627C20.307,83.627,20.058,44,80,44s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,14H-60V84L-40,83.627z\"></path>
                            <path style=\"fill: #FFF;\" d=\"M-40,95.627C20.307,95.627,20.058,56,80,56s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,138H-60V96L-40,95.627z\"></path>
                        </svg>
                    </div>
                </div>
                ";
    }

    // line 454
    public function block_container($context, array $blocks = [])
    {
        // line 455
        echo "                <div class=\"container\">
                    <div class=\"divcenter\" style=\"max-width: 1200px; padding: 120px 0 50px;\">

                        <div class=\"row row-eq-height justify-content-center\">




                            <div class=\"col-md-6 mt-3 mt-md-0\">
                                <div class=\"bg-white shadow-sm d-flex justify-content-center flex-column mb-3 rounded p-5\">
                                    <div class=\"testimonial small nobg noshadow noborder p-0\">
                                        <div class=\"d-flex flex-row mb-4 align-items-center\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\"
                                                 width=\"80\" height=\"80\"
                                                 viewBox=\"0 0 64 64\"
                                                 style=\" fill:#000000;\"><path fill=\"#efd8be\" d=\"M13 11H51V17H13zM15 5H49V11H15z\"></path><path fill=\"#acb7d0\" d=\"M61 43L42 43 37 47 27 47 22.313 43 3 43 9 29 55 29z\"></path><path fill=\"#faefde\" d=\"M11 17H53V47H11z\"></path><path fill=\"#fff7f0\" d=\"M53 17L53 47 22.225 47.225 52.46 17z\"></path><path fill=\"#cda1a7\" d=\"M59,59H5c-1.105,0-2-0.895-2-2V43h19.313L26,47h12.438L42,43h19v14C61,58.105,60.105,59,59,59z\"></path><path fill=\"#deb4ba\" d=\"M4 46h21.078l-1.843-2H4c-.552 0-1 .448-1 1C3 45.552 3.448 46 4 46zM60 44H41.11l-1.781 2H60c.552 0 1-.448 1-1C61 44.448 60.552 44 60 44z\"></path><path fill=\"#fff7f0\" d=\"M48.06 17L22.06 43 16.06 43 42.06 17zM39.06 17L13.07 43 10.07 43 36.06 17z\"></path><path fill=\"#fff\" d=\"M21.502 29.996L22.74 32.26 25.004 33.498 22.74 34.736 21.502 37 20.264 34.736 18 33.498 20.264 32.26zM45.581 23L46.436 24.564 48 25.419 46.436 26.274 45.581 27.838 44.726 26.274 43.162 25.419 44.726 24.564zM40.648 34L41.231 35.065 42.296 35.648 41.231 36.231 40.648 37.296 40.065 36.231 39 35.648 40.065 35.065z\"></path><g><path fill=\"#8d6c9f\" d=\"M61.472,39.708l-5.025-10.05c-0.476-0.952-1.401-1.561-2.447-1.642V18c0-1.103-0.897-2-2-2v-4 c0-1.103-0.897-2-2-2V6c0-1.103-0.897-2-2-2H16c-1.103,0-2,0.897-2,2v4c-1.103,0-2,0.897-2,2v4c-1.103,0-2,0.897-2,2v10.016 c-1.047,0.081-1.971,0.69-2.447,1.642l-5.025,10.05C2.183,40.399,2,41.172,2,41.944V57c0,1.654,1.346,3,3,3h54c1.654,0,3-1.346,3-3 V41.944C62,41.172,61.817,40.399,61.472,39.708z M16,6h32v4H16V6z M14,12h36v4H14V12z M4.317,40.603l5.025-10.05 c0.134-0.268,0.376-0.452,0.658-0.52V39c0,0.552,0.448,1,1,1s1-0.448,1-1V18h40v21c0,0.552,0.448,1,1,1s1-0.448,1-1v-8.967 c0.282,0.068,0.524,0.252,0.658,0.52l5.025,10.05C59.891,41.017,60,41.481,60,41.944V42H41.829c-0.801,0-1.555,0.312-2.122,0.879 l-2.828,2.828C36.69,45.896,36.438,46,36.171,46h-8.343c-0.267,0-0.519-0.104-0.708-0.293l-2.828-2.828 C23.727,42.312,22.973,42,22.171,42H4v-0.056C4,41.481,4.109,41.017,4.317,40.603z M59,58H5c-0.551,0-1-0.449-1-1V44h18.171 c0.267,0,0.519,0.104,0.708,0.293l2.828,2.828C26.273,47.688,27.027,48,27.829,48h8.343c0.801,0,1.555-0.312,2.122-0.879 l2.828-2.828C41.31,44.104,41.562,44,41.829,44H60v13C60,57.551,59.551,58,59,58z\"></path><path fill=\"#8d6c9f\" d=\"M7 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C8 50.448 7.552 50 7 50zM12 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C13 50.448 12.552 50 12 50zM17 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C18 50.448 17.552 50 17 50zM22 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C23 50.448 22.552 50 22 50zM27 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C28 50.448 27.552 50 27 50zM32 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C33 50.448 32.552 50 32 50zM37 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C38 50.448 37.552 50 37 50zM42 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C43 50.448 42.552 50 42 50zM47 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C48 50.448 47.552 50 47 50zM52 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C53 50.448 52.552 50 52 50zM57 50c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2C58 50.448 57.552 50 57 50zM31 24h6c.552 0 1-.448 1-1s-.448-1-1-1h-6c-.552 0-1 .448-1 1S30.448 24 31 24zM17 24h10c.552 0 1-.448 1-1s-.448-1-1-1H17c-.552 0-1 .448-1 1S16.448 24 17 24zM17 28h15c.552 0 1-.448 1-1s-.448-1-1-1H17c-.552 0-1 .448-1 1S16.448 28 17 28z\"></path></g></svg>
                                            &nbsp;&nbsp;<h4 class=\"ml-1 mb-0\">School Records Management</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"bg-white shadow-sm d-flex justify-content-center flex-column mb-3 rounded p-5\">
                                    <div class=\"testimonial small nobg noshadow noborder p-0\">
                                        <div class=\"d-flex flex-row mb-4 align-items-center\">
                                            <img src=\"https://img.icons8.com/dusk/80/000000/bonds.png\">
                                            &nbsp;&nbsp;<h4 class=\"ml-1 mb-0\">
                                                Payroll Management</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bg-white shadow-sm d-flex justify-content-center flex-column rounded p-5\">
                                    <div class=\"testimonial small nobg noshadow noborder p-0\">
                                        <div class=\"d-flex flex-row mb-4 align-items-center\">
                                            <img src=\"https://img.icons8.com/dusk/80/000000/overtime.png\">
                                            &nbsp;&nbsp;<h4 class=\"ml-1 mb-0\">School Scheduling Organization</h4>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class=\"col-md-6 mt-3 mt-md-0\">
                                <div class=\"bg-white shadow-sm d-flex justify-content-center flex-column mb-3 rounded p-5\">
                                    <div class=\"testimonial small nobg noshadow noborder p-0\">
                                        <div class=\"d-flex flex-row mb-4 align-items-center\">
                                            <img src=\"https://img.icons8.com/dusk/80/000000/survey.png\">
                                            &nbsp;&nbsp;<h4 class=\"ml-1 mb-0\">Absence Management</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"bg-white shadow-sm d-flex justify-content-center flex-column mb-3 rounded p-5\">
                                    <div class=\"testimonial small nobg noshadow noborder p-0\">
                                        <div class=\"d-flex flex-row mb-4 align-items-center\">
                                            <img src=\"https://img.icons8.com/dusk/80/000000/event-accepted.png\">
                                            &nbsp;&nbsp;<h4 class=\"ml-1 mb-0\">Events Management</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"bg-white shadow-sm d-flex justify-content-center flex-column rounded p-5\">
                                    <div class=\"testimonial small nobg noshadow noborder p-0\">
                                        <div class=\"d-flex flex-row mb-4 align-items-center\">
                                            <img src=\"https://img.icons8.com/dusk/80/000000/exam.png\">
                                            &nbsp;&nbsp;<h4 class=\"ml-1 mb-0\">Exam Management</h4>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=\"grid-bg d-none d-md-block\">
                            <img src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/demos/movers/images/dot-grid.svg"), "html", null, true);
        echo "\" alt=\"Dot Image\">
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container mb-5\">
                <div class=\"section-clients divcenter\" style=\"max-width: 700px\">

                    <div class=\"clear\"></div>

                    <div class=\"toggle mt-5\" data-state=\"open\">
                        <div class=\"togglet t500\"><i class=\"toggle-closed icon-line-circle-plus\"></i><i class=\"toggle-open icon-line-circle-cross\"></i>Administration</div>
                        <div class=\"togglec text-black-50\">
                            <ul class=\"list list-unstyled\">
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>School Records Management</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Teachers Management</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Employees Management</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Classrooms Management</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Certification Management</div></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"toggle\">
                        <div class=\"togglet t500\"><i class=\"toggle-closed icon-line-circle-plus\"></i><i class=\"toggle-open icon-line-circle-cross\"></i>Parents</div>
                        <div class=\"togglec text-black-50\">
                            <ul class=\"list list-unstyled\">
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Schoool Timetable Consultation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Absence Consultation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>School Marks Consultation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Stay In Contact With Our School </div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div></div></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"toggle \">
                        <div class=\"togglet t500\"><i class=\"toggle-closed icon-line-circle-plus\"></i><i class=\"toggle-open icon-line-circle-cross\"></i>Teachers</div>
                        <div class=\"togglec text-black-50\">
                            <ul class=\"list list-unstyled\">
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Marks Entry</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Automate report card Generation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>School Textbook Entry</div></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"toggle noborder\">
                        <div class=\"togglet t500\"><i class=\"toggle-closed icon-line-circle-plus\"></i><i class=\"toggle-open icon-line-circle-cross\"></i>Students</div>
                        <div class=\"togglec text-black-50\">
                            <ul class=\"list list-unstyled\">
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Marks Consultation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Absence Consultation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Schoool Timetable Consultation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Events & News Consultation</div></li>
                                <li class=\"d-flex align-items-baseline\"><i class=\"far fa-dot-circle text-color-primary mr-3\"></i><div>Access to our Quiz Space</div></li>

                            </ul>
                        </div>
                    </div>
";
    }

    // line 597
    public function block_join($context, array $blocks = [])
    {
        // line 598
        echo "        ";
        $this->displayBlock('joinspark', $context, $blocks);
        // line 619
        echo "    ";
    }

    // line 598
    public function block_joinspark($context, array $blocks = [])
    {
        // line 599
        echo "
    <div class=\"section dark pt-0 mb-0 bgcolor\" >
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1960 206.8\" class=\"bg-white\">
            <path class=\"svg-themecolor\" style=\"opacity:0.2;\" d=\"M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z\"/>
            <path class=\"svg-themecolor\" d=\"M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z\"/>
        </svg>

        <div class=\"row align-items-center justify-content-center center my-4\">

            <div class=\"col-sm-8\">

                <h2 class=\"t600 ls0 nott mb-3\" style=\"font-size: 44px; line-height: 1.3\">Join SparkooL
                    Now</h2>
                <a href=\"#\" class=\"button button-white button-light button-rounded t500 m-0\">Apply Now</a>
            </div>

        </div>

    </div>
    ";
    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1032 => 599,  1029 => 598,  1025 => 619,  1022 => 598,  1019 => 597,  955 => 528,  880 => 455,  877 => 454,  858 => 437,  855 => 436,  843 => 588,  841 => 454,  838 => 453,  836 => 436,  786 => 389,  775 => 381,  764 => 373,  753 => 365,  731 => 346,  723 => 341,  705 => 326,  685 => 308,  682 => 307,  666 => 290,  663 => 289,  655 => 282,  652 => 281,  649 => 280,  574 => 207,  571 => 206,  565 => 286,  563 => 280,  560 => 279,  558 => 206,  542 => 194,  539 => 193,  534 => 303,  531 => 289,  528 => 193,  525 => 192,  502 => 168,  497 => 167,  494 => 166,  479 => 712,  472 => 708,  466 => 705,  462 => 704,  411 => 656,  379 => 627,  370 => 620,  367 => 597,  365 => 307,  361 => 305,  359 => 192,  352 => 187,  350 => 166,  330 => 148,  324 => 146,  319 => 144,  314 => 143,  309 => 141,  305 => 140,  300 => 139,  295 => 137,  291 => 136,  286 => 135,  284 => 134,  274 => 127,  270 => 126,  263 => 122,  259 => 121,  251 => 116,  247 => 115,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  184 => 67,  180 => 66,  152 => 41,  145 => 37,  141 => 36,  137 => 35,  131 => 32,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  109 => 25,  105 => 24,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "baseFront.html.twig", "C:\\wamp64\\www\\SparkIT\\app\\Resources\\views\\baseFront.html.twig");
    }
}
