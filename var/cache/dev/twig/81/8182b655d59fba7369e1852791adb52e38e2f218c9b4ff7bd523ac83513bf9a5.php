<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1ab37230192433c119c7170ef4eaaf06663143e457c8c5483d5d25073958dd03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_cf4d88b98a93e8289c605db79b5b3f0dc1215a2191a3d5967804863944fe8f6d = $this->env->getExtension("native_profiler");
        $__internal_cf4d88b98a93e8289c605db79b5b3f0dc1215a2191a3d5967804863944fe8f6d->enter($__internal_cf4d88b98a93e8289c605db79b5b3f0dc1215a2191a3d5967804863944fe8f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf4d88b98a93e8289c605db79b5b3f0dc1215a2191a3d5967804863944fe8f6d->leave($__internal_cf4d88b98a93e8289c605db79b5b3f0dc1215a2191a3d5967804863944fe8f6d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_630a5cff429df8c4366c405e8c257292468781e077b2d170113b4f73d16f01ae = $this->env->getExtension("native_profiler");
        $__internal_630a5cff429df8c4366c405e8c257292468781e077b2d170113b4f73d16f01ae->enter($__internal_630a5cff429df8c4366c405e8c257292468781e077b2d170113b4f73d16f01ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_630a5cff429df8c4366c405e8c257292468781e077b2d170113b4f73d16f01ae->leave($__internal_630a5cff429df8c4366c405e8c257292468781e077b2d170113b4f73d16f01ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
