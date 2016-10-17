<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ff5498e4ecabb92cb347a8eb3471abe8ba8823134216d5d8237d17af0f3e2718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a48715b2da596b97014e249d8873f5d1b655c62f5492ab5385ddab3d34605db9 = $this->env->getExtension("native_profiler");
        $__internal_a48715b2da596b97014e249d8873f5d1b655c62f5492ab5385ddab3d34605db9->enter($__internal_a48715b2da596b97014e249d8873f5d1b655c62f5492ab5385ddab3d34605db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48715b2da596b97014e249d8873f5d1b655c62f5492ab5385ddab3d34605db9->leave($__internal_a48715b2da596b97014e249d8873f5d1b655c62f5492ab5385ddab3d34605db9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e71fa29648e7b93384b740e88c3c6bdf15d05cff93dfe6671dffacf02b952d86 = $this->env->getExtension("native_profiler");
        $__internal_e71fa29648e7b93384b740e88c3c6bdf15d05cff93dfe6671dffacf02b952d86->enter($__internal_e71fa29648e7b93384b740e88c3c6bdf15d05cff93dfe6671dffacf02b952d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e71fa29648e7b93384b740e88c3c6bdf15d05cff93dfe6671dffacf02b952d86->leave($__internal_e71fa29648e7b93384b740e88c3c6bdf15d05cff93dfe6671dffacf02b952d86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
