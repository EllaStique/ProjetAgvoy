<?php

/* :menu:reserver.html.twig */
class __TwigTemplate_1fa6e9dfdf92c482ba42e4a85de52c0db49fb6bd26407e0544911c4874bf3420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":menu:reserver.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ce40fe0c15b5c9be83ccfee19e86005c4aab4a841ac5f24c2a4606125398a94 = $this->env->getExtension("native_profiler");
        $__internal_5ce40fe0c15b5c9be83ccfee19e86005c4aab4a841ac5f24c2a4606125398a94->enter($__internal_5ce40fe0c15b5c9be83ccfee19e86005c4aab4a841ac5f24c2a4606125398a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:reserver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ce40fe0c15b5c9be83ccfee19e86005c4aab4a841ac5f24c2a4606125398a94->leave($__internal_5ce40fe0c15b5c9be83ccfee19e86005c4aab4a841ac5f24c2a4606125398a94_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_aab41d1f88a203c1d3ec8b534e2d981eea49cdfb08e5c666a63c04be41a2a832 = $this->env->getExtension("native_profiler");
        $__internal_aab41d1f88a203c1d3ec8b534e2d981eea49cdfb08e5c666a63c04be41a2a832->enter($__internal_aab41d1f88a203c1d3ec8b534e2d981eea49cdfb08e5c666a63c04be41a2a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3>Merci de réserver ce voyage avec nous</h3><br>
    <p>Voici un récapitulatif du séjour que vous êtes sur le point de réserver:<br></p>


    <p>Départ de ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeDepart", array()), "html", null, true);
        echo " pour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "dureeCircuit", array()), "html", null, true);
        echo " j. de voyage à travers le ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "paysDepart", array()), "html", null, true);
        echo ", pour terminer à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeArrivee", array()), "html", null, true);
        echo ".</p>

    <p>Pour continuer votre réservation, merci de remplir le formulaire suivant<br></p>  

  
    
     
    
    
";
        
        $__internal_aab41d1f88a203c1d3ec8b534e2d981eea49cdfb08e5c666a63c04be41a2a832->leave($__internal_aab41d1f88a203c1d3ec8b534e2d981eea49cdfb08e5c666a63c04be41a2a832_prof);

    }

    public function getTemplateName()
    {
        return ":menu:reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h3>Merci de réserver ce voyage avec nous</h3><br>*/
/*     <p>Voici un récapitulatif du séjour que vous êtes sur le point de réserver:<br></p>*/
/* */
/* */
/*     <p>Départ de {{ circuit.villeDepart }} pour {{ circuit.dureeCircuit }} j. de voyage à travers le {{ circuit.paysDepart }}, pour terminer à {{ circuit.villeArrivee }}.</p>*/
/* */
/*     <p>Pour continuer votre réservation, merci de remplir le formulaire suivant<br></p>  */
/* */
/*   */
/*     */
/*      */
/*     */
/*     */
/* {% endblock %} {# main #}*/
