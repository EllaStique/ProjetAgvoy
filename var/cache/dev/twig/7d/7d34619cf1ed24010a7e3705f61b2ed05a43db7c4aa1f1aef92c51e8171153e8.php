<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6d82a005482ffedec301aee5335e3ed255d91774c7692a78bfe847f7a78d21af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_144fb53c22e25a9fd34bbdef78362d3fb5d0158bc591300adc0292611c746ef7 = $this->env->getExtension("native_profiler");
        $__internal_144fb53c22e25a9fd34bbdef78362d3fb5d0158bc591300adc0292611c746ef7->enter($__internal_144fb53c22e25a9fd34bbdef78362d3fb5d0158bc591300adc0292611c746ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144fb53c22e25a9fd34bbdef78362d3fb5d0158bc591300adc0292611c746ef7->leave($__internal_144fb53c22e25a9fd34bbdef78362d3fb5d0158bc591300adc0292611c746ef7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5698fe8b327c1ab2b2c651940042844b786b8684405e9d4f29c33d9eba0cf985 = $this->env->getExtension("native_profiler");
        $__internal_5698fe8b327c1ab2b2c651940042844b786b8684405e9d4f29c33d9eba0cf985->enter($__internal_5698fe8b327c1ab2b2c651940042844b786b8684405e9d4f29c33d9eba0cf985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5698fe8b327c1ab2b2c651940042844b786b8684405e9d4f29c33d9eba0cf985->leave($__internal_5698fe8b327c1ab2b2c651940042844b786b8684405e9d4f29c33d9eba0cf985_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
