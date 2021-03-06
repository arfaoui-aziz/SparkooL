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

/* @Parent/Parent/afficherparent.html.twig */
class __TwigTemplate_92ead3c1b7b3e815574ff0ebc6e744c3a4baca9c960c5c6b2c8536a77f7846c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/afficherparent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Parent/Parent/afficherparent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Parent/Parent/afficherparent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"dashboard-content-one\">
   <!-- Breadcubs Area Start Here -->
   <div class=\"breadcrumbs-area\">
    <h3>Parents</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>All Parents</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Teacher Table Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>All Parents Data</h3>
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
     <div class=\"item-title\">
      <h3>Search An Event</h3>
     </div>
     <form class=\"mg-b-20\">
      <div class=\"row gutters-8\">
       <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input id=\"ser\" name=\"q\" type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control search\">
       </div>
       <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
        <input id=\"ser\" name=\"q\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control search\">
       </div>
       <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by Joinig Date\" class=\"form-control search\">
       </div>
       <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
        <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
       </div>
      </div>
     </form>


     <ul class=\"nav\" id=\"side-menu\">
      <li>

       <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
       </ul>
      </li>
     </ul><br>

     <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

     <script type=\"text/javascript\">
      jQuery(document).ready(function() {
       var searchRequest = null;
       \$(\"#ser\").keyup(function() {
        var minlength = 1;
        var that = this;
        var value = \$(this).val();
        var entitySelector = \$(\"#search\").html('');
        entitySelector.hide();
        if (value.length >= minlength ) {
         if (searchRequest != null)
          searchRequest.abort();
         searchRequest = \$.ajax({
          type: \"GET\",
          url: \"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_parent");
        echo "\",
          data: {
           'q' : value
          },
          dataType: \"text\",
          success: function(msg){
           //we need to check if the value is the same
           if (value===\$(that).val()) {
            var result = JSON.parse(msg);
            \$.each(result, function(key, arr) {
             \$.each(arr, function(id, value) {
              if (key === 'posts') {
               if (id !== 'error') {

                console.log(value[1]);
                var large= '<tbody><tr> <td> '+value[0]+'</td> <td>'+value[1]+'</td> <td> '+value[2]+'</td><td> '+value[3]+'</td><td> '+value[4]+'</td><td> '+ value[5]+'</td><td> '+ value[6]+'</td><td> '+ value[7]+'</td> <td> '+ value[8]+'</td><td> '+ value[9]+'</td><td> '+ value[10]+'</td></tr></tbody>';
                entitySelector.replaceWith(large) ;
               }
               else {
                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
               }
              }
             });
            });
           }
          }
         });
        }
       });
      });
     </script>






     <div class=\"table-responsive\"  >
      <table class=\"table display data-table text-nowrap\">
       <thead>
       <tr>
        <th>";
        // line 123
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["var"] ?? $this->getContext($context, "var")), "id", "pa.id");
        echo "</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Occupation</th>
        <th>E-mail</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>";
        // line 131
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["var"] ?? $this->getContext($context, "var")), "Joing Date", "pa.joiningDate");
        echo " </th>
        <th>PHOTO</th>
        <th></th>
       </tr>
       </thead>
       ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var"] ?? $this->getContext($context, "var")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 137
            echo "        <tbody  id=\"search\">
        <tr >

         <td>
          <div class=\"form-check\">
           <input type=\"checkbox\" class=\"form-check-input \">
           <label class=\"form-check-label\">#";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</label>
          </div>
         </td>
         <td> ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "lastName", []), "html", null, true);
            echo "</td>

         <td> ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "gender", []), "html", null, true);
            echo " </td>
         <td> ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "occupation", []), "html", null, true);
            echo " </td>
         <td> ";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", []), "html", null, true);
            echo " </td>
         <td> ";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "address", []), "html", null, true);
            echo " </td>
         <td> ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "phone", []), "html", null, true);
            echo " </td>
         <td> ";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "birthDay", []), "html", null, true);
            echo " </td>
         <td> ";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "joiningDate", []), "html", null, true);
            echo " </td>
         <td> ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "picture", []), "html", null, true);
            echo " </td>

         <td>
          <div class=\"dropdown\">
           <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
              aria-expanded=\"false\">
            <span class=\"flaticon-more-button-of-three-dots\"></span>
           </a>
           <div class=\"dropdown-menu dropdown-menu-right\">
            <a class=\"dropdown-item\" href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                     class=\"fas fa-times text-orange-red\"></i> Delete</a>
            <a class=\"dropdown-item\" href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                     class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
            <a class=\"dropdown-item\" href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i
                     class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
            <a class=\"dropdown-item\" href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-check\"></i> Accept parent</a>
            <a class=\"dropdown-item\" href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser_parent", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-minus-circle\"></i> Refuse parent</a>

           </div>
          </div>
         </td>

        </tr>



        </tbody>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "
      </table>
      <div class=\"navigation\">
       ";
        // line 186
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["var"] ?? $this->getContext($context, "var")));
        echo "
      </div>


     </div>
     <br><br>
     <div class=\"col-xl-3 col-sm-6 col-12\">
      <div class=\"dashboard-summery-oneP mg-b-20\">
       <div class=\"row align-items-center\">
        <div class=\"col-6\">
         <div class=\"item-icon bg-light-yellow\">
          <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/mother.png"), "html", null, true);
        echo "\" width=\"60\">
         </div>
        </div>
        <div class=\"col-6\">
         <div class=\"item-content\">
          <div class=\"item-title\">Parents</div>
          <div class=\"item-number\"><span class=\"counter\" data-num=\"";
        // line 203
        echo twig_escape_filter($this->env, ($context["nbp"] ?? $this->getContext($context, "nbp")), "html", null, true);
        echo "\"></span></div>
         </div>
        </div>
       </div>
      </div>
     </div>

    </div>

   </div>

   <!-- Teacher Table Area End Here -->
   <footer class=\"footer-wrap-layout1\">
    <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
   </footer>
  </div>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Parent/Parent/afficherparent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 203,  324 => 197,  310 => 186,  305 => 183,  287 => 171,  283 => 170,  278 => 168,  273 => 166,  268 => 164,  256 => 155,  252 => 154,  248 => 153,  244 => 152,  240 => 151,  236 => 150,  232 => 149,  228 => 148,  221 => 146,  215 => 143,  207 => 137,  203 => 136,  195 => 131,  184 => 123,  140 => 82,  60 => 4,  51 => 3,  29 => 1,);
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
  <div class=\"dashboard-content-one\">
   <!-- Breadcubs Area Start Here -->
   <div class=\"breadcrumbs-area\">
    <h3>Parents</h3>
    <ul>
     <li>
      <a href=\"index.html\">Home</a>
     </li>
     <li>All Parents</li>
    </ul>
   </div>
   <!-- Breadcubs Area End Here -->
   <!-- Teacher Table Area Start Here -->
   <div class=\"card height-auto\">
    <div class=\"card-body\">
     <div class=\"heading-layout1\">
      <div class=\"item-title\">
       <h3>All Parents Data</h3>
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
     <div class=\"item-title\">
      <h3>Search An Event</h3>
     </div>
     <form class=\"mg-b-20\">
      <div class=\"row gutters-8\">
       <div class=\"col-3-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input id=\"ser\" name=\"q\" type=\"text\" placeholder=\"Search by ID ...\" class=\"form-control search\">
       </div>
       <div class=\"col-4-xxxl col-xl-4 col-lg-3 col-12 form-group\">
        <input id=\"ser\" name=\"q\" type=\"text\" placeholder=\"Search by Name ...\" class=\"form-control search\">
       </div>
       <div class=\"col-4-xxxl col-xl-3 col-lg-3 col-12 form-group\">
        <input type=\"text\" placeholder=\"Search by Joinig Date\" class=\"form-control search\">
       </div>
       <div class=\"col-1-xxxl col-xl-2 col-lg-3 col-12 form-group\">
        <button type=\"submit\" class=\"fw-btn-fill btn-gradient-yellow\">SEARCH</button>
       </div>
      </div>
     </form>


     <ul class=\"nav\" id=\"side-menu\">
      <li>

       <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
       </ul>
      </li>
     </ul><br>

     <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

     <script type=\"text/javascript\">
      jQuery(document).ready(function() {
       var searchRequest = null;
       \$(\"#ser\").keyup(function() {
        var minlength = 1;
        var that = this;
        var value = \$(this).val();
        var entitySelector = \$(\"#search\").html('');
        entitySelector.hide();
        if (value.length >= minlength ) {
         if (searchRequest != null)
          searchRequest.abort();
         searchRequest = \$.ajax({
          type: \"GET\",
          url: \"{{ path('ajax_parent') }}\",
          data: {
           'q' : value
          },
          dataType: \"text\",
          success: function(msg){
           //we need to check if the value is the same
           if (value===\$(that).val()) {
            var result = JSON.parse(msg);
            \$.each(result, function(key, arr) {
             \$.each(arr, function(id, value) {
              if (key === 'posts') {
               if (id !== 'error') {

                console.log(value[1]);
                var large= '<tbody><tr> <td> '+value[0]+'</td> <td>'+value[1]+'</td> <td> '+value[2]+'</td><td> '+value[3]+'</td><td> '+value[4]+'</td><td> '+ value[5]+'</td><td> '+ value[6]+'</td><td> '+ value[7]+'</td> <td> '+ value[8]+'</td><td> '+ value[9]+'</td><td> '+ value[10]+'</td></tr></tbody>';
                entitySelector.replaceWith(large) ;
               }
               else {
                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
               }
              }
             });
            });
           }
          }
         });
        }
       });
      });
     </script>






     <div class=\"table-responsive\"  >
      <table class=\"table display data-table text-nowrap\">
       <thead>
       <tr>
        <th>{{ knp_pagination_sortable(var,'id','pa.id') }}</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Occupation</th>
        <th>E-mail</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>{{ knp_pagination_sortable(var,'Joing Date','pa.joiningDate') }} </th>
        <th>PHOTO</th>
        <th></th>
       </tr>
       </thead>
       {% for i in var %}
        <tbody  id=\"search\">
        <tr >

         <td>
          <div class=\"form-check\">
           <input type=\"checkbox\" class=\"form-check-input \">
           <label class=\"form-check-label\">#{{  i.id }}</label>
          </div>
         </td>
         <td> {{  i.firstName }} {{  i.lastName }}</td>

         <td> {{  i.gender }} </td>
         <td> {{  i.occupation }} </td>
         <td> {{  i.email }} </td>
         <td> {{  i.address }} </td>
         <td> {{  i.phone}} </td>
         <td> {{  i.birthDay }} </td>
         <td> {{  i.joiningDate}} </td>
         <td> {{  i.picture }} </td>

         <td>
          <div class=\"dropdown\">
           <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
              aria-expanded=\"false\">
            <span class=\"flaticon-more-button-of-three-dots\"></span>
           </a>
           <div class=\"dropdown-menu dropdown-menu-right\">
            <a class=\"dropdown-item\" href=\"{{ path('supprimer_parent',{'id':i.id }) }}\"><i
                     class=\"fas fa-times text-orange-red\"></i> Delete</a>
            <a class=\"dropdown-item\" href=\"{{ path('modifier_parent',{'id':i.id }) }}\"><i
                     class=\"fas fa-cogs text-dark-pastel-green\"></i> Edit</a>
            <a class=\"dropdown-item\" href=\"{{ path('detail_parent',{'id':i.id }) }}\"><i
                     class=\"fas fa-eye text-orange-peel\"></i> Show Details</a>
            <a class=\"dropdown-item\" href=\"{{ path('accepter_parent',{'id':i.id }) }}\"><i class=\"fas fa-check\"></i> Accept parent</a>
            <a class=\"dropdown-item\" href=\"{{ path('refuser_parent',{'id':i.id }) }}\"><i class=\"fas fa-minus-circle\"></i> Refuse parent</a>

           </div>
          </div>
         </td>

        </tr>



        </tbody>
       {% endfor %}

      </table>
      <div class=\"navigation\">
       {{ knp_pagination_render(var) }}
      </div>


     </div>
     <br><br>
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
          <div class=\"item-number\"><span class=\"counter\" data-num=\"{{ nbp }}\"></span></div>
         </div>
        </div>
       </div>
      </div>
     </div>

    </div>

   </div>

   <!-- Teacher Table Area End Here -->
   <footer class=\"footer-wrap-layout1\">
    <div class=\"copyright\">© Copyrights <a href=\"#\">SparkIT</a> 2020. All rights reserved</div>
   </footer>
  </div>

 {% endblock %}", "@Parent/Parent/afficherparent.html.twig", "C:\\wamp64\\www\\SparkIT\\src\\ParentBundle\\Resources\\views\\Parent\\afficherparent.html.twig");
    }
}
