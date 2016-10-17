<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_69a0ace4325be985f31f17d155b4ea30108552d8710734805578ab0cf80ae5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7fc685fd3830374033108a925de2b71afc416f74fdcbeee772f781593177ed74 = $this->env->getExtension("native_profiler");
        $__internal_7fc685fd3830374033108a925de2b71afc416f74fdcbeee772f781593177ed74->enter($__internal_7fc685fd3830374033108a925de2b71afc416f74fdcbeee772f781593177ed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc685fd3830374033108a925de2b71afc416f74fdcbeee772f781593177ed74->leave($__internal_7fc685fd3830374033108a925de2b71afc416f74fdcbeee772f781593177ed74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_313d84cf511637e588c9da78f3f3b41a516a8b3e1a7b3b4fdc17710da712f83c = $this->env->getExtension("native_profiler");
        $__internal_313d84cf511637e588c9da78f3f3b41a516a8b3e1a7b3b4fdc17710da712f83c->enter($__internal_313d84cf511637e588c9da78f3f3b41a516a8b3e1a7b3b4fdc17710da712f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_313d84cf511637e588c9da78f3f3b41a516a8b3e1a7b3b4fdc17710da712f83c->leave($__internal_313d84cf511637e588c9da78f3f3b41a516a8b3e1a7b3b4fdc17710da712f83c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
