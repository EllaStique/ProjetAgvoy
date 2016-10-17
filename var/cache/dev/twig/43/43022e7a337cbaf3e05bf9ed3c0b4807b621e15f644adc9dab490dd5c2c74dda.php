<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_07e03f6fab3689815b2ba5753f95b586f529df14e040e8d7fdd7c56603dc9ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4fc1a0ce1297a65a9397449d7aa1bb61d7736560a7409c76e9f89ff6969a9c0d = $this->env->getExtension("native_profiler");
        $__internal_4fc1a0ce1297a65a9397449d7aa1bb61d7736560a7409c76e9f89ff6969a9c0d->enter($__internal_4fc1a0ce1297a65a9397449d7aa1bb61d7736560a7409c76e9f89ff6969a9c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc1a0ce1297a65a9397449d7aa1bb61d7736560a7409c76e9f89ff6969a9c0d->leave($__internal_4fc1a0ce1297a65a9397449d7aa1bb61d7736560a7409c76e9f89ff6969a9c0d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74cb3ab35dac182977fb228c9dcc13c747709424c3712b40ecec1a944b1b8758 = $this->env->getExtension("native_profiler");
        $__internal_74cb3ab35dac182977fb228c9dcc13c747709424c3712b40ecec1a944b1b8758->enter($__internal_74cb3ab35dac182977fb228c9dcc13c747709424c3712b40ecec1a944b1b8758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_74cb3ab35dac182977fb228c9dcc13c747709424c3712b40ecec1a944b1b8758->leave($__internal_74cb3ab35dac182977fb228c9dcc13c747709424c3712b40ecec1a944b1b8758_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
