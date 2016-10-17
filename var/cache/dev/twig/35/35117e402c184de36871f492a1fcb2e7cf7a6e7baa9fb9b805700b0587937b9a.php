<?php

/* agvoybase.html.twig */
class __TwigTemplate_44f48e5336ab76fe64bbf30eda8aa1efdb2a983c1c233d394548c7fabb62544f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agvoybase.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4458cd7ba9f40e840c1c092890955760d933d865b93b094ed5a583421f209bc3 = $this->env->getExtension("native_profiler");
        $__internal_4458cd7ba9f40e840c1c092890955760d933d865b93b094ed5a583421f209bc3->enter($__internal_4458cd7ba9f40e840c1c092890955760d933d865b93b094ed5a583421f209bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4458cd7ba9f40e840c1c092890955760d933d865b93b094ed5a583421f209bc3->leave($__internal_4458cd7ba9f40e840c1c092890955760d933d865b93b094ed5a583421f209bc3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_84ab964c3ffb65e174d01af3cc30e1f52892447b853befea6cfa1254712d4372 = $this->env->getExtension("native_profiler");
        $__internal_84ab964c3ffb65e174d01af3cc30e1f52892447b853befea6cfa1254712d4372->enter($__internal_84ab964c3ffb65e174d01af3cc30e1f52892447b853befea6cfa1254712d4372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">
                                <h5>Accueil</h5>
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">

                                ";
        // line 24
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 55
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
";
        
        $__internal_84ab964c3ffb65e174d01af3cc30e1f52892447b853befea6cfa1254712d4372->leave($__internal_84ab964c3ffb65e174d01af3cc30e1f52892447b853befea6cfa1254712d4372_prof);

    }

    // line 24
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_6cb914fb0569aff9b1db4a74059e5284ac75104f154cf470807041b1ddabc0e9 = $this->env->getExtension("native_profiler");
        $__internal_6cb914fb0569aff9b1db4a74059e5284ac75104f154cf470807041b1ddabc0e9->enter($__internal_6cb914fb0569aff9b1db4a74059e5284ac75104f154cf470807041b1ddabc0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 25
        echo "                                    
                                    <li>
                                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\"><h5>Nos voyages</h5></a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"><h5>Contact</h5></a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"><h5>Mes réservations</h5></a>
                                    </li>


\t\t\t\t ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 38
            echo "                                    
                                    <li>
                                       <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("circuit_brouillon");
            echo "\"><h5>Voyages non publiés</h5></a>
\t                             </li>
                               ";
        }
        // line 43
        echo "                                    <li>
                                         <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\"><h5>S'enregistrer</h5></a>
                                    </li>
                                    <li>
                                         <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\"><h5>Se connecter</h5></a>
                                    </li>
                                    <li>
                                         <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><h5>Logout</h5></a>
                                    </li>
                                
                                    
                                ";
        
        $__internal_6cb914fb0569aff9b1db4a74059e5284ac75104f154cf470807041b1ddabc0e9->leave($__internal_6cb914fb0569aff9b1db4a74059e5284ac75104f154cf470807041b1ddabc0e9_prof);

    }

    public function getTemplateName()
    {
        return "agvoybase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  131 => 47,  125 => 44,  122 => 43,  116 => 40,  112 => 38,  110 => 37,  103 => 33,  97 => 30,  91 => 27,  87 => 25,  81 => 24,  68 => 55,  66 => 24,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('accueil') }}">*/
/*                                 <h5>Accueil</h5>*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     */
/*                                     <li>*/
/*                                         <a href="{{ path('circuit_index') }}"><h5>Nos voyages</h5></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('contact') }}"><h5>Contact</h5></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('panier') }}"><h5>Mes réservations</h5></a>*/
/*                                     </li>*/
/* */
/* */
/* 				 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                     */
/*                                     <li>*/
/*                                        <a href="{{ path('circuit_brouillon') }}"><h5>Voyages non publiés</h5></a>*/
/* 	                             </li>*/
/*                                {% endif %}*/
/*                                     <li>*/
/*                                          <a href="{{ path('user_register') }}"><h5>S'enregistrer</h5></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                          <a href="{{ path("user_login") }}"><h5>Se connecter</h5></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                          <a href="{{ path("fos_user_security_logout") }}"><h5>Logout</h5></a>*/
/*                                     </li>*/
/*                                 */
/*                                     */
/*                                 {% endblock %}*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/* {% endblock %}*/
/*         */
/* */
