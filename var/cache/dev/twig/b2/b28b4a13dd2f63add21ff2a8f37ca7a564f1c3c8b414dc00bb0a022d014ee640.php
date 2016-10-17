<?php

/* :circuit:etapebrouillon.html.twig */
class __TwigTemplate_5dbf1626941544024ed4d37175d3d8a5f7e3559347121d69161f6714d17da6ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:etapebrouillon.html.twig", 1);
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
        $__internal_8cab17d88b9981bf407b538641ba97b6c2d5d9ece61d3c6dc7fea9c84f398057 = $this->env->getExtension("native_profiler");
        $__internal_8cab17d88b9981bf407b538641ba97b6c2d5d9ece61d3c6dc7fea9c84f398057->enter($__internal_8cab17d88b9981bf407b538641ba97b6c2d5d9ece61d3c6dc7fea9c84f398057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:etapebrouillon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cab17d88b9981bf407b538641ba97b6c2d5d9ece61d3c6dc7fea9c84f398057->leave($__internal_8cab17d88b9981bf407b538641ba97b6c2d5d9ece61d3c6dc7fea9c84f398057_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_73bc4c1c3d6a160fe34d28c57bcb04fd5650c059306db0e2e7de2444dd7871f9 = $this->env->getExtension("native_profiler");
        $__internal_73bc4c1c3d6a160fe34d28c57bcb04fd5650c059306db0e2e7de2444dd7871f9->enter($__internal_73bc4c1c3d6a160fe34d28c57bcb04fd5650c059306db0e2e7de2444dd7871f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3>Ajout d'une étape au voyage:</h3><br>
    
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
        
        $__internal_73bc4c1c3d6a160fe34d28c57bcb04fd5650c059306db0e2e7de2444dd7871f9->leave($__internal_73bc4c1c3d6a160fe34d28c57bcb04fd5650c059306db0e2e7de2444dd7871f9_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:etapebrouillon.html.twig";
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
/*     <h3>Ajout d'une étape au voyage:</h3><br>*/
/*     */
/*             {{ form_start(circuitform) }}*/
/*             {{ form_widget(circuitform) }}*/
/*             {{ form_end(circuitform) }}*/
/*             */
/*             */
/* {% endblock %} {# main #}*/
/* */
