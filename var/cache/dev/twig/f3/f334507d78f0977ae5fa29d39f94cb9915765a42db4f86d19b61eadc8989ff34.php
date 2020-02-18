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

/* @Parent/Parent/ajoutreclamation.html.twig */
class __TwigTemplate_1f1588050d22ba10628f09d691f7be43e6cf0044576de0e33ed30c2f008d7b40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/ajoutreclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/ajoutreclamation.html.twig"));

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



  <div id=\"header-wrap\">

   <!-- Primary Navigation
   ============================================= -->
   <nav id=\"primary-menu\" class=\"style-2 with-arrows  not-dark\">

    <div class=\"container clearfix\">

     <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

     <ul>
      <li class=\"current\"><a href=\"#\"><div>Home</div></a></li>
      <li><a href=\"#\"><div>About Us</div></a></li>
      <li><a href=\"#\"><div>Program</div></a>
       <ul>
        <li><a href=\"#\"><div><i class=\"icon-line2-home\"></i>Home Moving</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-building2\"></i>Office Moving</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-line2-globe\"></i>International Moving</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-paw\"></i>Pet Shifting</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-car\"></i>Car Shifting</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-truck1\"></i>Hire Truck</div></a></li>
       </ul>
      </li>
      <li><a href=\"#\"><div>School Life</div></a></li>
      <li><a href=\"#\"><div>News & Events</div></a></li>
      <li><a href=\"#\"><div>Admissions</div></a></li>
      <li><a href=\"#\"><div>Contact Us</div></a></li>
     </ul>

     <!-- Header Buttons
     ============================================= -->
     <div class=\"header-buttons d-none d-sm-inline-block\">
      <a href=\"#slider\" data-scrollto=\"#slider\" data-offset=\"-80\" class=\"button button-rounded button-white button-light button-small m-0\">LOGIN</a>
     </div>

     <!-- Top Search
     ============================================= -->
     <div id=\"top-search\" class=\"mr-4\">
      <a href=\"#\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\"icon-line-cross\"></i></a>
      <form action=\"search.html\" method=\"get\">
       <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Type &amp; Hit Enter..\">
      </form>
     </div><!-- #top-search end -->

    </div>

   </nav><!-- #primary-menu end -->

  </div>

 </header><!-- #header end -->

 <!-- Slider
 ============================================= -->
 <section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url('demos/movers/images/bg-2.png') no-repeat center center / 100% 100%;\">

  <div class=\"container\" style=\"z-index: 2\">
   <div class=\"center\">
    <h2 class=\"text-white h2 t600 mb-2\">Parent Space</h2>
    <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
   </div>

   <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
    <li class=\"nav-item\">
     <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">\"Parent Name\"</a>
    </li>

   </ul>
   <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
    <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">

     <div class=\"form-widget\">
      <div class=\"form-result\"></div>
      <form class=\"row home-moving-form position-relative mb-0\" action=\"include/form.php\" method=\"post\" enctype=\"multipart/form-data\">
       <div class=\"form-process\"></div>


       <div class=\"col-xl-8\" style=\" margin: 0% 16%;\">

        <div class=\"card-body\">
         <div class=\"heading-layout1\">
          <div class=\"item-title\">
           <center>\t<h3>Write  a complaint</h3> </center>
          </div>

         </div>
         <form class=\"new-added-form\">
          <label>TypeUser</label>
          <div class=\"row\">

           <div class=\"col-sm-6 input-group form-group\">

            <div class=\"input-group-prepend\">
             <span class=\"input-group-text nobg\"><i class=\"fas fa-sticky-note\"></i></span>

            </div>


            <select  class=\"form-control required input-group-text nobg\">
           
             <option value=\"\" disabled selected >----TypeUser----</option>
             <option value=\"B\">Parent</option>
             <option value=\"G\">Student</option>
             <option value=\"G\">Teacher</option>

            </select>
           </div>


           <div class=\"col-12 form-group\">
            <label>Type</label>
            <input type=\"text\" placeholder=\"\" class=\"form-control\">
           </div>
           <div class=\"col-12 form-group\">
            <label>Message</label>
            <textarea class=\"textarea form-control\" name=\"message\" id=\"form-message\" cols=\"10\"
                      rows=\"9\"></textarea>
           </div>

          </div>
         </form>
        </div>

       </div>













       <div class=\"col-12 hidden\">
        <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
       </div>

       <div class=\"col-12\">
        <button type=\"submit\" name=\"home-moving-form-submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">SUBMIT</button>
       </div>

       <input type=\"hidden\" name=\"prefix\" value=\"home-moving-form-\">
       <input type=\"hidden\" name=\"subject\" value=\"Home Moving Request\">
       <input type=\"hidden\" name=\"html_title\" value=\"Home Moving\">
      </form>
     </div>
    </div>
    <div class=\"tab-pane fade\" id=\"office-moving\" role=\"tabpanel\" aria-labelledby=\"office-moving-tab\">
     <p class=\"mb-4\">Share your Office Shifting details by Filling out an Easy Form. Get Free Quotes from Verified Packers &amp; Movers Instantly.</p>
     <div class=\"form-widget\">
      <div class=\"form-result\"></div>
      <form class=\"row office-moving-form position-relative mb-0\" action=\"include/form.php\" method=\"post\" enctype=\"multipart/form-data\">
       <div class=\"form-process\"></div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-truck1\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-location-from\" id=\"office-moving-form-location-from\" class=\"form-control required\" value=\"\" placeholder=\"Location From\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-map\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-location-to\" id=\"office-moving-form-location-to\" class=\"form-control required\" value=\"\" placeholder=\"Location To\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-name\" id=\"office-moving-form-name\" class=\"form-control required\" value=\"\" placeholder=\"Your Full Name\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
        </div>
        <input type=\"email\" name=\"office-moving-form-email\" id=\"office-moving-form-email\" class=\"form-control required\" value=\"\" placeholder=\"Your Email\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-phone\" id=\"office-moving-form-phone\" class=\"form-control required\" value=\"\" placeholder=\"Your Phone Number\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-calendar\"></i></span>
        </div>
        <input type=\"text\" class=\"form-control home-date required\" name=\"office-moving-form-date\" id=\"office-moving-form-date\" value=\"\" placeholder=\"Your Date\">
       </div>

       <div class=\"col-12 hidden\">
        <input type=\"text\" id=\"office-moving-form-botcheck\" name=\"office-moving-form-botcheck\" value=\"\" />
       </div>

       <div class=\"col-12\">
        <button type=\"submit\" name=\"office-moving-form-submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">Contact Us</button>
       </div>

       <input type=\"hidden\" name=\"prefix\" value=\"office-moving-form-\">
       <input type=\"hidden\" name=\"subject\" value=\"Office Moving Request\">
       <input type=\"hidden\" name=\"html_title\" value=\"Office Moving\">
      </form>
     </div>
    </div>
    <div class=\"tab-pane fade\" id=\"others-moving\" role=\"tabpanel\" aria-labelledby=\"others-moving-tab\">
     <div class=\"form-widget\">
      <div class=\"form-result\"></div>
      <form class=\"row others-moving-form position-relative mb-0\" action=\"include/form.php\" method=\"post\" enctype=\"multipart/form-data\">
       <div class=\"form-process\"></div>

       <div class=\"col-12 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><img src=\"demos/movers/images/baggage.png\" height=\"18\" alt=\"baggage Icon\"></span>
        </div>
        <select class=\"required custom-select\" name=\"others-moving-form-service\" id=\"others-moving-form-service\">
         <option value=\"\" disabled selected>-- Select Your Service --</option>
         <option value=\"International Moving\">International Moving</option>
         <option value=\"Pet Moving\">Pet Moving</option>
         <option value=\"Car Moving\">Car Moving</option>
         <option value=\"Hire Mover Truck\">Hire Mover Truck</option>
        </select>
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-social-dropbox\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-item\" id=\"others-moving-form-item\" class=\"form-control required\" value=\"\" placeholder=\"Your Item\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text text-muted nobg\"><i class=\"icon-user-circle1\"></i></span>
        </div>
        <select class=\"required custom-select\" name=\"others-moving-form-movers\" id=\"others-moving-form-movers\">
         <option value=\"\" disabled selected>-- Select Movers --</option>
         <option value=\"1\">1</option>
         <option value=\"2\">2</option>
         <option value=\"3\">3</option>
         <option value=\"4\">4</option>
        </select>
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-truck1\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-location-from\" id=\"others-moving-form-location-from\" class=\"form-control required\" value=\"\" placeholder=\"Location From\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-map\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-location-to\" id=\"others-moving-form-location-to\" class=\"form-control required\" value=\"\" placeholder=\"Location To\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-name\" id=\"others-moving-form-name\" class=\"form-control required\" value=\"\" placeholder=\"Your Full Name\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
        </div>
        <input type=\"email\" name=\"others-moving-form-email\" id=\"others-moving-form-email\" class=\"form-control required\" value=\"\" placeholder=\"Your Email\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-phone\" id=\"others-moving-form-phone\" class=\"form-control required\" value=\"\" placeholder=\"Your Phone Number\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-calendar\"></i></span>
        </div>
        <input type=\"text\" class=\"form-control home-date required\" name=\"others-moving-form-date\" id=\"others-moving-form-date\" value=\"\" placeholder=\"Your Date\">
       </div>

       <div class=\"col-12 hidden\">
        <input type=\"text\" id=\"others-moving-form-botcheck\" name=\"others-moving-form-botcheck\" value=\"\" />
       </div>

       <div class=\"col-12\">
        <button type=\"submit\" name=\"others-moving-form-submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">Contact Us</button>
       </div>

       <input type=\"hidden\" name=\"prefix\" value=\"others-moving-form-\">
       <input type=\"hidden\" name=\"subject\" value=\"Others Service Request\">
       <input type=\"hidden\" name=\"html_title\" value=\"Others Service\">
      </form>
     </div>
    </div>

   </div>
  </div>

  <div class=\"svg-separator\">
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

 </section>

 <!-- Content
 ============================================= -->
 <section id=\"content\">



 </section><!-- #content end -->

 <!-- Footer
 ============================================= -->
 <footer id=\"footer\" class=\"mt-0\" style=\"background-color: #111c22;\">
  <div class=\"container my-4\">
   <div class=\"row py-5\">
    <div class=\"col-lg-2 align-self-center mb-5 mb-lg-0\">
     <a href=\"#\"></a>
     <img src=\"img/LogoFooter.png\" class=\"img-fluid\" alt=\"Demo SEO\" width=\"100\" />
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
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#pricing\">School Life</a>
      </li>
      <li class=\"mb-1\">
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#reviews\">News & Events</a>
      </li>
      <li class=\"mb-1\">
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#news\">Admission</a>
      </li>
      <li class=\"mb-1\">
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#news\">Contact US</a>
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
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/plugins.js"), "html", null, true);
        echo "\"></script>

<!-- DatePicker JS -->
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/components/datepicker.js"), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/js/functions.js"), "html", null, true);
        echo "\"></script>

<script>

 jQuery('.home-date').datepicker({
  autoclose: true,
  startDate: \"today\",
 });
</script>


</body>
</html>






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Parent/Parent/ajoutreclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 485,  596 => 481,  590 => 478,  586 => 477,  147 => 41,  140 => 37,  136 => 36,  132 => 35,  126 => 32,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  104 => 25,  100 => 24,  96 => 23,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  36 => 1,);
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
<html dir=\"ltr\" lang=\"en-US\">
<head>

 <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
 <meta name=\"author\" content=\"SemiColonWeb\" />
 <!-- Jointure Template 2-->
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/vendor/bootstrap/css/bootstrap.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/vendor/fontawesome-free/css/all.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/vendor/animate/animate.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/vendor/simple-line-icons/css/simple-line-icons.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/vendor/owl.carousel/assets/owl.carousel.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/vendor/owl.carousel/assets/owl.theme.default.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{asset('FrontEnd/vendor/magnific-popup/magnific-popup.min.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/theme.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/theme-elements.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/demos/demo-seo.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/skins/skin-seo.css')}}\">
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/custom1.css')}}\">

 <!-- Stylesheets
 ============================================= -->
 <link href=\"{{asset('http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}\" rel=\"stylesheet\" type=\"text/css\" />
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/bootstrap.css')}}\" type=\"text/css\" />
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/style.css')}}\" type=\"text/css\" />

 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/dark.css')}}\" type=\"text/css\" />
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/font-icons.css')}}\" type=\"text/css\" />
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/animate.css')}}\" type=\"text/css\" />
 <link rel=\"stylesheet\" href=\"{{asset('FrontEnd/css/magnific-popup.css')}}\" type=\"text/css\" />

 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/responsive.css')}}\" type=\"text/css\" />

 <!-- Movers Demo Specific Stylesheet -->
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/colors.php?color=0F66DD')}}\" type=\"text/css\" /> <!-- Theme Color -->
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/demos/movers/css/fonts.css') }}\" type=\"text/css\" />
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/demos/movers/movers.css')}}\" type=\"text/css\" />
 <!-- / -->

 <!-- DatePicker CSS -->
 <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/css/components/datepicker.css')}}\" type=\"text/css\" />

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



  <div id=\"header-wrap\">

   <!-- Primary Navigation
   ============================================= -->
   <nav id=\"primary-menu\" class=\"style-2 with-arrows  not-dark\">

    <div class=\"container clearfix\">

     <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

     <ul>
      <li class=\"current\"><a href=\"#\"><div>Home</div></a></li>
      <li><a href=\"#\"><div>About Us</div></a></li>
      <li><a href=\"#\"><div>Program</div></a>
       <ul>
        <li><a href=\"#\"><div><i class=\"icon-line2-home\"></i>Home Moving</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-building2\"></i>Office Moving</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-line2-globe\"></i>International Moving</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-paw\"></i>Pet Shifting</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-car\"></i>Car Shifting</div></a></li>
        <li><a href=\"#\"><div><i class=\"icon-truck1\"></i>Hire Truck</div></a></li>
       </ul>
      </li>
      <li><a href=\"#\"><div>School Life</div></a></li>
      <li><a href=\"#\"><div>News & Events</div></a></li>
      <li><a href=\"#\"><div>Admissions</div></a></li>
      <li><a href=\"#\"><div>Contact Us</div></a></li>
     </ul>

     <!-- Header Buttons
     ============================================= -->
     <div class=\"header-buttons d-none d-sm-inline-block\">
      <a href=\"#slider\" data-scrollto=\"#slider\" data-offset=\"-80\" class=\"button button-rounded button-white button-light button-small m-0\">LOGIN</a>
     </div>

     <!-- Top Search
     ============================================= -->
     <div id=\"top-search\" class=\"mr-4\">
      <a href=\"#\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\"icon-line-cross\"></i></a>
      <form action=\"search.html\" method=\"get\">
       <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Type &amp; Hit Enter..\">
      </form>
     </div><!-- #top-search end -->

    </div>

   </nav><!-- #primary-menu end -->

  </div>

 </header><!-- #header end -->

 <!-- Slider
 ============================================= -->
 <section id=\"slider\" class=\"slider-element bgcolor clearfix\" style=\"height: auto; padding: 60px 0; background: url('demos/movers/images/bg-2.png') no-repeat center center / 100% 100%;\">

  <div class=\"container\" style=\"z-index: 2\">
   <div class=\"center\">
    <h2 class=\"text-white h2 t600 mb-2\">Parent Space</h2>
    <p class=\"text-white-50\">SparkooL Is An All In­-One School Management Application</p>
   </div>

   <ul class=\"nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bgcolor mt-4\" role=\"tablist\">
    <li class=\"nav-item\">
     <a class=\"nav-link py-3\" id=\"home-moving-tab\" data-toggle=\"tab\" href=\"#home-moving\" role=\"tab\" aria-controls=\"home-moving\" aria-selected=\"true\">\"Parent Name\"</a>
    </li>

   </ul>
   <div class=\"tab-content rounded-bottom shadow bg-white py-4 px-5\">
    <div class=\"tab-pane fade show active\" id=\"home-moving\" role=\"tabpanel\" aria-labelledby=\"home-moving-tab\">

     <div class=\"form-widget\">
      <div class=\"form-result\"></div>
      <form class=\"row home-moving-form position-relative mb-0\" action=\"include/form.php\" method=\"post\" enctype=\"multipart/form-data\">
       <div class=\"form-process\"></div>


       <div class=\"col-xl-8\" style=\" margin: 0% 16%;\">

        <div class=\"card-body\">
         <div class=\"heading-layout1\">
          <div class=\"item-title\">
           <center>\t<h3>Write  a complaint</h3> </center>
          </div>

         </div>
         <form class=\"new-added-form\">
          <label>TypeUser</label>
          <div class=\"row\">

           <div class=\"col-sm-6 input-group form-group\">

            <div class=\"input-group-prepend\">
             <span class=\"input-group-text nobg\"><i class=\"fas fa-sticky-note\"></i></span>

            </div>


            <select  class=\"form-control required input-group-text nobg\">
           
             <option value=\"\" disabled selected >----TypeUser----</option>
             <option value=\"B\">Parent</option>
             <option value=\"G\">Student</option>
             <option value=\"G\">Teacher</option>

            </select>
           </div>


           <div class=\"col-12 form-group\">
            <label>Type</label>
            <input type=\"text\" placeholder=\"\" class=\"form-control\">
           </div>
           <div class=\"col-12 form-group\">
            <label>Message</label>
            <textarea class=\"textarea form-control\" name=\"message\" id=\"form-message\" cols=\"10\"
                      rows=\"9\"></textarea>
           </div>

          </div>
         </form>
        </div>

       </div>













       <div class=\"col-12 hidden\">
        <input type=\"text\" id=\"home-moving-form-botcheck\" name=\"home-moving-form-botcheck\" value=\"\" />
       </div>

       <div class=\"col-12\">
        <button type=\"submit\" name=\"home-moving-form-submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">SUBMIT</button>
       </div>

       <input type=\"hidden\" name=\"prefix\" value=\"home-moving-form-\">
       <input type=\"hidden\" name=\"subject\" value=\"Home Moving Request\">
       <input type=\"hidden\" name=\"html_title\" value=\"Home Moving\">
      </form>
     </div>
    </div>
    <div class=\"tab-pane fade\" id=\"office-moving\" role=\"tabpanel\" aria-labelledby=\"office-moving-tab\">
     <p class=\"mb-4\">Share your Office Shifting details by Filling out an Easy Form. Get Free Quotes from Verified Packers &amp; Movers Instantly.</p>
     <div class=\"form-widget\">
      <div class=\"form-result\"></div>
      <form class=\"row office-moving-form position-relative mb-0\" action=\"include/form.php\" method=\"post\" enctype=\"multipart/form-data\">
       <div class=\"form-process\"></div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-truck1\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-location-from\" id=\"office-moving-form-location-from\" class=\"form-control required\" value=\"\" placeholder=\"Location From\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-map\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-location-to\" id=\"office-moving-form-location-to\" class=\"form-control required\" value=\"\" placeholder=\"Location To\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-name\" id=\"office-moving-form-name\" class=\"form-control required\" value=\"\" placeholder=\"Your Full Name\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
        </div>
        <input type=\"email\" name=\"office-moving-form-email\" id=\"office-moving-form-email\" class=\"form-control required\" value=\"\" placeholder=\"Your Email\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
        </div>
        <input type=\"text\" name=\"office-moving-form-phone\" id=\"office-moving-form-phone\" class=\"form-control required\" value=\"\" placeholder=\"Your Phone Number\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-calendar\"></i></span>
        </div>
        <input type=\"text\" class=\"form-control home-date required\" name=\"office-moving-form-date\" id=\"office-moving-form-date\" value=\"\" placeholder=\"Your Date\">
       </div>

       <div class=\"col-12 hidden\">
        <input type=\"text\" id=\"office-moving-form-botcheck\" name=\"office-moving-form-botcheck\" value=\"\" />
       </div>

       <div class=\"col-12\">
        <button type=\"submit\" name=\"office-moving-form-submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">Contact Us</button>
       </div>

       <input type=\"hidden\" name=\"prefix\" value=\"office-moving-form-\">
       <input type=\"hidden\" name=\"subject\" value=\"Office Moving Request\">
       <input type=\"hidden\" name=\"html_title\" value=\"Office Moving\">
      </form>
     </div>
    </div>
    <div class=\"tab-pane fade\" id=\"others-moving\" role=\"tabpanel\" aria-labelledby=\"others-moving-tab\">
     <div class=\"form-widget\">
      <div class=\"form-result\"></div>
      <form class=\"row others-moving-form position-relative mb-0\" action=\"include/form.php\" method=\"post\" enctype=\"multipart/form-data\">
       <div class=\"form-process\"></div>

       <div class=\"col-12 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><img src=\"demos/movers/images/baggage.png\" height=\"18\" alt=\"baggage Icon\"></span>
        </div>
        <select class=\"required custom-select\" name=\"others-moving-form-service\" id=\"others-moving-form-service\">
         <option value=\"\" disabled selected>-- Select Your Service --</option>
         <option value=\"International Moving\">International Moving</option>
         <option value=\"Pet Moving\">Pet Moving</option>
         <option value=\"Car Moving\">Car Moving</option>
         <option value=\"Hire Mover Truck\">Hire Mover Truck</option>
        </select>
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-social-dropbox\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-item\" id=\"others-moving-form-item\" class=\"form-control required\" value=\"\" placeholder=\"Your Item\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text text-muted nobg\"><i class=\"icon-user-circle1\"></i></span>
        </div>
        <select class=\"required custom-select\" name=\"others-moving-form-movers\" id=\"others-moving-form-movers\">
         <option value=\"\" disabled selected>-- Select Movers --</option>
         <option value=\"1\">1</option>
         <option value=\"2\">2</option>
         <option value=\"3\">3</option>
         <option value=\"4\">4</option>
        </select>
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-truck1\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-location-from\" id=\"others-moving-form-location-from\" class=\"form-control required\" value=\"\" placeholder=\"Location From\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-map\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-location-to\" id=\"others-moving-form-location-to\" class=\"form-control required\" value=\"\" placeholder=\"Location To\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-user\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-name\" id=\"others-moving-form-name\" class=\"form-control required\" value=\"\" placeholder=\"Your Full Name\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-envelope\"></i></span>
        </div>
        <input type=\"email\" name=\"others-moving-form-email\" id=\"others-moving-form-email\" class=\"form-control required\" value=\"\" placeholder=\"Your Email\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-call-out\"></i></span>
        </div>
        <input type=\"text\" name=\"others-moving-form-phone\" id=\"others-moving-form-phone\" class=\"form-control required\" value=\"\" placeholder=\"Your Phone Number\">
       </div>

       <div class=\"col-sm-6 input-group form-group\">
        <div class=\"input-group-prepend\">
         <span class=\"input-group-text nobg\"><i class=\"icon-line2-calendar\"></i></span>
        </div>
        <input type=\"text\" class=\"form-control home-date required\" name=\"others-moving-form-date\" id=\"others-moving-form-date\" value=\"\" placeholder=\"Your Date\">
       </div>

       <div class=\"col-12 hidden\">
        <input type=\"text\" id=\"others-moving-form-botcheck\" name=\"others-moving-form-botcheck\" value=\"\" />
       </div>

       <div class=\"col-12\">
        <button type=\"submit\" name=\"others-moving-form-submit\" class=\"btn bgcolor text-white t500 btn-block py-2 mt-2\">Contact Us</button>
       </div>

       <input type=\"hidden\" name=\"prefix\" value=\"others-moving-form-\">
       <input type=\"hidden\" name=\"subject\" value=\"Others Service Request\">
       <input type=\"hidden\" name=\"html_title\" value=\"Others Service\">
      </form>
     </div>
    </div>

   </div>
  </div>

  <div class=\"svg-separator\">
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

 </section>

 <!-- Content
 ============================================= -->
 <section id=\"content\">



 </section><!-- #content end -->

 <!-- Footer
 ============================================= -->
 <footer id=\"footer\" class=\"mt-0\" style=\"background-color: #111c22;\">
  <div class=\"container my-4\">
   <div class=\"row py-5\">
    <div class=\"col-lg-2 align-self-center mb-5 mb-lg-0\">
     <a href=\"#\"></a>
     <img src=\"img/LogoFooter.png\" class=\"img-fluid\" alt=\"Demo SEO\" width=\"100\" />
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
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#pricing\">School Life</a>
      </li>
      <li class=\"mb-1\">
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#reviews\">News & Events</a>
      </li>
      <li class=\"mb-1\">
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#news\">Admission</a>
      </li>
      <li class=\"mb-1\">
       <a class=\"link-hover-style-1\"  data-hash data-hash-offset=\"95\" href=\"#news\">Contact US</a>
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

   </div>
  </div>
 </footer>

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->

<script src=\"{{ asset('FrontEnd/js/jquery.js')}}\"></script>
<script src=\"{{ asset('FrontEnd/js/plugins.js')}}\"></script>

<!-- DatePicker JS -->
<script src=\"{{ asset('FrontEnd/js/components/datepicker.js')}}\"></script>

<!-- Footer Scripts
============================================= -->
<script src=\"{{ asset('FrontEnd/js/functions.js') }}\"></script>

<script>

 jQuery('.home-date').datepicker({
  autoclose: true,
  startDate: \"today\",
 });
</script>


</body>
</html>






", "@Parent/Parent/ajoutreclamation.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Parent\\ajoutreclamation.html.twig");
    }
}
