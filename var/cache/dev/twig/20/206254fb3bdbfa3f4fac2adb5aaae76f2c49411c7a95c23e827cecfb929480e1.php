<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d3afa549d427e667d687ae4b44e7a2cfd45d6f412577f1c5f98c255170f06c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_689ac9bf573b4e3c9da3e7613346828da58b64ce44177ff9e785ee9643760285 = $this->env->getExtension("native_profiler");
        $__internal_689ac9bf573b4e3c9da3e7613346828da58b64ce44177ff9e785ee9643760285->enter($__internal_689ac9bf573b4e3c9da3e7613346828da58b64ce44177ff9e785ee9643760285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_689ac9bf573b4e3c9da3e7613346828da58b64ce44177ff9e785ee9643760285->leave($__internal_689ac9bf573b4e3c9da3e7613346828da58b64ce44177ff9e785ee9643760285_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67dd86b8717ada03cc2ad124b4ec12f23f4e59b831bd432a93c9b479e64dbc7a = $this->env->getExtension("native_profiler");
        $__internal_67dd86b8717ada03cc2ad124b4ec12f23f4e59b831bd432a93c9b479e64dbc7a->enter($__internal_67dd86b8717ada03cc2ad124b4ec12f23f4e59b831bd432a93c9b479e64dbc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_67dd86b8717ada03cc2ad124b4ec12f23f4e59b831bd432a93c9b479e64dbc7a->leave($__internal_67dd86b8717ada03cc2ad124b4ec12f23f4e59b831bd432a93c9b479e64dbc7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
