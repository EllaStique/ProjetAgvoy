<?php

/* :menu:contact.html.twig */
class __TwigTemplate_b282df94ee2ea581a40b1c812473575742aa8f0614f4b1420efdf4a53bf8ce93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":menu:contact.html.twig", 1);
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
        $__internal_8dae6890d02d97bfec71a0ba266fce478cc11d78879fe2ca5849a571706cced4 = $this->env->getExtension("native_profiler");
        $__internal_8dae6890d02d97bfec71a0ba266fce478cc11d78879fe2ca5849a571706cced4->enter($__internal_8dae6890d02d97bfec71a0ba266fce478cc11d78879fe2ca5849a571706cced4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dae6890d02d97bfec71a0ba266fce478cc11d78879fe2ca5849a571706cced4->leave($__internal_8dae6890d02d97bfec71a0ba266fce478cc11d78879fe2ca5849a571706cced4_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8b0823f5fb64988229fe9d00ab1726cde1b713a321793b1c48f11eebb550b655 = $this->env->getExtension("native_profiler");
        $__internal_8b0823f5fb64988229fe9d00ab1726cde1b713a321793b1c48f11eebb550b655->enter($__internal_8b0823f5fb64988229fe9d00ab1726cde1b713a321793b1c48f11eebb550b655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3>Nous contacter :</h3><br>
    
            ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["contactform"]) ? $context["contactform"] : $this->getContext($context, "contactform")), 'form_start');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contactform"]) ? $context["contactform"] : $this->getContext($context, "contactform")), 'widget');
        echo "
            ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["contactform"]) ? $context["contactform"] : $this->getContext($context, "contactform")), 'form_end');
        echo "
   
    
    
";
        
        $__internal_8b0823f5fb64988229fe9d00ab1726cde1b713a321793b1c48f11eebb550b655->leave($__internal_8b0823f5fb64988229fe9d00ab1726cde1b713a321793b1c48f11eebb550b655_prof);

    }

    public function getTemplateName()
    {
        return ":menu:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h3>Nous contacter :</h3><br>*/
/*     */
/*             {{ form_start(contactform) }}*/
/*             {{ form_widget(contactform) }}*/
/*             {{ form_end(contactform) }}*/
/*    */
/*     */
/*     */
/* {% endblock %} {# main #}*/
