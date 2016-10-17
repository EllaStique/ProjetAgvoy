<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_da33a664fad19345e67d9f8d7717cd3b4d93b950137189ae3b490e7d4649f3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4c3230503c299abdc9c04f11cab8643769a7d71212351389bdc56d151eb02906 = $this->env->getExtension("native_profiler");
        $__internal_4c3230503c299abdc9c04f11cab8643769a7d71212351389bdc56d151eb02906->enter($__internal_4c3230503c299abdc9c04f11cab8643769a7d71212351389bdc56d151eb02906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3230503c299abdc9c04f11cab8643769a7d71212351389bdc56d151eb02906->leave($__internal_4c3230503c299abdc9c04f11cab8643769a7d71212351389bdc56d151eb02906_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bbd1398677c4bb484abee83e6f81beb5b972cb3900cbd8f1efd7dff85ffbef1 = $this->env->getExtension("native_profiler");
        $__internal_1bbd1398677c4bb484abee83e6f81beb5b972cb3900cbd8f1efd7dff85ffbef1->enter($__internal_1bbd1398677c4bb484abee83e6f81beb5b972cb3900cbd8f1efd7dff85ffbef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1bbd1398677c4bb484abee83e6f81beb5b972cb3900cbd8f1efd7dff85ffbef1->leave($__internal_1bbd1398677c4bb484abee83e6f81beb5b972cb3900cbd8f1efd7dff85ffbef1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
