<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a6b1431eb0e0227d7296e81974f1ac43dc15c94c0451f284dfdcecabddcf4f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_83800e1d0087c5856d7041e2439584ec4226591bf328fd78015e2f18ac28e756 = $this->env->getExtension("native_profiler");
        $__internal_83800e1d0087c5856d7041e2439584ec4226591bf328fd78015e2f18ac28e756->enter($__internal_83800e1d0087c5856d7041e2439584ec4226591bf328fd78015e2f18ac28e756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83800e1d0087c5856d7041e2439584ec4226591bf328fd78015e2f18ac28e756->leave($__internal_83800e1d0087c5856d7041e2439584ec4226591bf328fd78015e2f18ac28e756_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66a09c6b65aa335a13a429dce85424c0f01fd889a85c9c1d42d14be1bf535726 = $this->env->getExtension("native_profiler");
        $__internal_66a09c6b65aa335a13a429dce85424c0f01fd889a85c9c1d42d14be1bf535726->enter($__internal_66a09c6b65aa335a13a429dce85424c0f01fd889a85c9c1d42d14be1bf535726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_66a09c6b65aa335a13a429dce85424c0f01fd889a85c9c1d42d14be1bf535726->leave($__internal_66a09c6b65aa335a13a429dce85424c0f01fd889a85c9c1d42d14be1bf535726_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
