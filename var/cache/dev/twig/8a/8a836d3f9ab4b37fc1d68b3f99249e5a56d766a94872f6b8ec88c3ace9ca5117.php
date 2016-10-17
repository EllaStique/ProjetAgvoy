<?php

/* :circuit:progbrouillon.html.twig */
class __TwigTemplate_e86668fba34f54589527c4d185f1ebd8ef0be9e48a3fa0d951447c08ac48a37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:progbrouillon.html.twig", 1);
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
        $__internal_f2d9f32f448e5541cfc95dd17270a6ee3f9c7cb3cd3cfaa2145a2e93c19446b1 = $this->env->getExtension("native_profiler");
        $__internal_f2d9f32f448e5541cfc95dd17270a6ee3f9c7cb3cd3cfaa2145a2e93c19446b1->enter($__internal_f2d9f32f448e5541cfc95dd17270a6ee3f9c7cb3cd3cfaa2145a2e93c19446b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:progbrouillon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d9f32f448e5541cfc95dd17270a6ee3f9c7cb3cd3cfaa2145a2e93c19446b1->leave($__internal_f2d9f32f448e5541cfc95dd17270a6ee3f9c7cb3cd3cfaa2145a2e93c19446b1_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a657a3dad3e5f451465d894711d1cabf75ac5a46b09c4eea56773a9bf5ec3a6d = $this->env->getExtension("native_profiler");
        $__internal_a657a3dad3e5f451465d894711d1cabf75ac5a46b09c4eea56773a9bf5ec3a6d->enter($__internal_a657a3dad3e5f451465d894711d1cabf75ac5a46b09c4eea56773a9bf5ec3a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3>Programmation du voyage:</h3><br>
    
            ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["circuitform"]) ? $context["circuitform"] : $this->getContext($context, "circuitform")), 'form_start');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["circuitform"]) ? $context["circuitform"] : $this->getContext($context, "circuitform")), 'widget');
        echo "
            ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["circuitform"]) ? $context["circuitform"] : $this->getContext($context, "circuitform")), 'form_end');
        echo "
            
            
";
        
        $__internal_a657a3dad3e5f451465d894711d1cabf75ac5a46b09c4eea56773a9bf5ec3a6d->leave($__internal_a657a3dad3e5f451465d894711d1cabf75ac5a46b09c4eea56773a9bf5ec3a6d_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:progbrouillon.html.twig";
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
/*     <h3>Programmation du voyage:</h3><br>*/
/*     */
/*             {{ form_start(circuitform) }}*/
/*             {{ form_widget(circuitform) }}*/
/*             {{ form_end(circuitform) }}*/
/*             */
/*             */
/* {% endblock %} {# main #}*/
/* */
