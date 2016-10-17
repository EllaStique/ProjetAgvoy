<?php

/* :menu:panier.html.twig */
class __TwigTemplate_320668a090474b02070f3979d4715b34831c10d93a07ba2d4e7eb23939b9b8db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":menu:panier.html.twig", 1);
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
        $__internal_7beeffb02be84872c806bba71a36a6fe77aec999d8ab5fdcfafe5aca8694fe91 = $this->env->getExtension("native_profiler");
        $__internal_7beeffb02be84872c806bba71a36a6fe77aec999d8ab5fdcfafe5aca8694fe91->enter($__internal_7beeffb02be84872c806bba71a36a6fe77aec999d8ab5fdcfafe5aca8694fe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7beeffb02be84872c806bba71a36a6fe77aec999d8ab5fdcfafe5aca8694fe91->leave($__internal_7beeffb02be84872c806bba71a36a6fe77aec999d8ab5fdcfafe5aca8694fe91_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_208007835247747323931cf67d39dac29317c22466aaa82d10d191b6285608f0 = $this->env->getExtension("native_profiler");
        $__internal_208007835247747323931cf67d39dac29317c22466aaa82d10d191b6285608f0->enter($__internal_208007835247747323931cf67d39dac29317c22466aaa82d10d191b6285608f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    Voici un récapitulatif de toutes vos réservations
    
";
        
        $__internal_208007835247747323931cf67d39dac29317c22466aaa82d10d191b6285608f0->leave($__internal_208007835247747323931cf67d39dac29317c22466aaa82d10d191b6285608f0_prof);

    }

    public function getTemplateName()
    {
        return ":menu:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     Voici un récapitulatif de toutes vos réservations*/
/*     */
/* {% endblock %} {# main #}*/
/* */
