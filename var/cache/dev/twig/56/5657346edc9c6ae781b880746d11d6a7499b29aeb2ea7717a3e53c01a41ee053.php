<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_6833cdf781113c385e7de82666658d14863a21d45400772692154480821baa56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_84463f232a15eba20a8cf760fcc352280dc5b409aa3019ddf76545abe5f7c544 = $this->env->getExtension("native_profiler");
        $__internal_84463f232a15eba20a8cf760fcc352280dc5b409aa3019ddf76545abe5f7c544->enter($__internal_84463f232a15eba20a8cf760fcc352280dc5b409aa3019ddf76545abe5f7c544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84463f232a15eba20a8cf760fcc352280dc5b409aa3019ddf76545abe5f7c544->leave($__internal_84463f232a15eba20a8cf760fcc352280dc5b409aa3019ddf76545abe5f7c544_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f8c978c07162b0c47925475d12033b2bbfd7bb7c7f4f7b77ebf96e0c2887f05 = $this->env->getExtension("native_profiler");
        $__internal_3f8c978c07162b0c47925475d12033b2bbfd7bb7c7f4f7b77ebf96e0c2887f05->enter($__internal_3f8c978c07162b0c47925475d12033b2bbfd7bb7c7f4f7b77ebf96e0c2887f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3f8c978c07162b0c47925475d12033b2bbfd7bb7c7f4f7b77ebf96e0c2887f05->leave($__internal_3f8c978c07162b0c47925475d12033b2bbfd7bb7c7f4f7b77ebf96e0c2887f05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
