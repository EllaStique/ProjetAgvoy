<?php

/* :circuit:nouveau.html.twig */
class __TwigTemplate_ddaadb63cc8e1f3a6dc3dcd72ac216b145e8051ceb13310cc1e88480ac2117b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:nouveau.html.twig", 1);
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
        $__internal_5acd84bc95f3744ea7cf95cf99b4a884d1834b5d203ae97ed27b93a878a25e02 = $this->env->getExtension("native_profiler");
        $__internal_5acd84bc95f3744ea7cf95cf99b4a884d1834b5d203ae97ed27b93a878a25e02->enter($__internal_5acd84bc95f3744ea7cf95cf99b4a884d1834b5d203ae97ed27b93a878a25e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:nouveau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5acd84bc95f3744ea7cf95cf99b4a884d1834b5d203ae97ed27b93a878a25e02->leave($__internal_5acd84bc95f3744ea7cf95cf99b4a884d1834b5d203ae97ed27b93a878a25e02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f0b0b7c2b16cf66ae54316911647d9a0172021a7dc541784b7abf222f0377823 = $this->env->getExtension("native_profiler");
        $__internal_f0b0b7c2b16cf66ae54316911647d9a0172021a7dc541784b7abf222f0377823->enter($__internal_f0b0b7c2b16cf66ae54316911647d9a0172021a7dc541784b7abf222f0377823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3>Ajout d'un voyage:</h3><br>
    
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
            
<p> Vous allez être redirigé vers la liste des circuits non validés où vous pourrez choisir les étapes du voyage, ainsi que la programmation </p>
    
";
        
        $__internal_f0b0b7c2b16cf66ae54316911647d9a0172021a7dc541784b7abf222f0377823->leave($__internal_f0b0b7c2b16cf66ae54316911647d9a0172021a7dc541784b7abf222f0377823_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:nouveau.html.twig";
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
/*     <h3>Ajout d'un voyage:</h3><br>*/
/*     */
/*             {{ form_start(circuitform) }}*/
/*             {{ form_widget(circuitform) }}*/
/*             {{ form_end(circuitform) }}*/
/*             */
/* <p> Vous allez être redirigé vers la liste des circuits non validés où vous pourrez choisir les étapes du voyage, ainsi que la programmation </p>*/
/*     */
/* {% endblock %} {# main #}*/
