<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_738e14135c040e49444a36d31c162e7025dfcd49825fd58e1c7abb801dd46eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_9ea6c3646ac5bb7ac807575c2e0b78d8fc9ae0e7864184385b73cc338d01dce7 = $this->env->getExtension("native_profiler");
        $__internal_9ea6c3646ac5bb7ac807575c2e0b78d8fc9ae0e7864184385b73cc338d01dce7->enter($__internal_9ea6c3646ac5bb7ac807575c2e0b78d8fc9ae0e7864184385b73cc338d01dce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea6c3646ac5bb7ac807575c2e0b78d8fc9ae0e7864184385b73cc338d01dce7->leave($__internal_9ea6c3646ac5bb7ac807575c2e0b78d8fc9ae0e7864184385b73cc338d01dce7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5345dd556899c5672ab9f8c82172a009ee282345ab33eb521d0d7a6e5cb663cf = $this->env->getExtension("native_profiler");
        $__internal_5345dd556899c5672ab9f8c82172a009ee282345ab33eb521d0d7a6e5cb663cf->enter($__internal_5345dd556899c5672ab9f8c82172a009ee282345ab33eb521d0d7a6e5cb663cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5345dd556899c5672ab9f8c82172a009ee282345ab33eb521d0d7a6e5cb663cf->leave($__internal_5345dd556899c5672ab9f8c82172a009ee282345ab33eb521d0d7a6e5cb663cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
