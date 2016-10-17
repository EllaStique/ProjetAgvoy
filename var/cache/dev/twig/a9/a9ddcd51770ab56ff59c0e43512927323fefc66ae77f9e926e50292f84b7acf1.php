<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7cb758c3c9651bcdac71a4cea34da82e7541176213c9b322d9c1aa9bacfc3e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_14e4b35b18a3c55ded1fa943bd2f26868b7efbc102196220afcdbcf6dd3d666d = $this->env->getExtension("native_profiler");
        $__internal_14e4b35b18a3c55ded1fa943bd2f26868b7efbc102196220afcdbcf6dd3d666d->enter($__internal_14e4b35b18a3c55ded1fa943bd2f26868b7efbc102196220afcdbcf6dd3d666d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e4b35b18a3c55ded1fa943bd2f26868b7efbc102196220afcdbcf6dd3d666d->leave($__internal_14e4b35b18a3c55ded1fa943bd2f26868b7efbc102196220afcdbcf6dd3d666d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e48e811473c59b5fa21bafef1f87f140072aeffe91ae3f425c93750cc36ae779 = $this->env->getExtension("native_profiler");
        $__internal_e48e811473c59b5fa21bafef1f87f140072aeffe91ae3f425c93750cc36ae779->enter($__internal_e48e811473c59b5fa21bafef1f87f140072aeffe91ae3f425c93750cc36ae779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e48e811473c59b5fa21bafef1f87f140072aeffe91ae3f425c93750cc36ae779->leave($__internal_e48e811473c59b5fa21bafef1f87f140072aeffe91ae3f425c93750cc36ae779_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
