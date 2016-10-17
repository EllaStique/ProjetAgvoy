<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1169b400361515d984c8d013a250b1b7aa3b2ac19bb36ddd2f68337a4e2466ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e75309ffcfdc99d487d9ba52e85f6843f128f0a12db221abf981d73d49737c8 = $this->env->getExtension("native_profiler");
        $__internal_3e75309ffcfdc99d487d9ba52e85f6843f128f0a12db221abf981d73d49737c8->enter($__internal_3e75309ffcfdc99d487d9ba52e85f6843f128f0a12db221abf981d73d49737c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3e75309ffcfdc99d487d9ba52e85f6843f128f0a12db221abf981d73d49737c8->leave($__internal_3e75309ffcfdc99d487d9ba52e85f6843f128f0a12db221abf981d73d49737c8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_92d57e93c4ccae362a72da02449f1d56add4816ffeff146b4a0f0ea4027d0570 = $this->env->getExtension("native_profiler");
        $__internal_92d57e93c4ccae362a72da02449f1d56add4816ffeff146b4a0f0ea4027d0570->enter($__internal_92d57e93c4ccae362a72da02449f1d56add4816ffeff146b4a0f0ea4027d0570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_92d57e93c4ccae362a72da02449f1d56add4816ffeff146b4a0f0ea4027d0570->leave($__internal_92d57e93c4ccae362a72da02449f1d56add4816ffeff146b4a0f0ea4027d0570_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a5cef81a597151c911d19bccf325f242cb6619e9fa5d8c1580d8242441c29d45 = $this->env->getExtension("native_profiler");
        $__internal_a5cef81a597151c911d19bccf325f242cb6619e9fa5d8c1580d8242441c29d45->enter($__internal_a5cef81a597151c911d19bccf325f242cb6619e9fa5d8c1580d8242441c29d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a5cef81a597151c911d19bccf325f242cb6619e9fa5d8c1580d8242441c29d45->leave($__internal_a5cef81a597151c911d19bccf325f242cb6619e9fa5d8c1580d8242441c29d45_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_edcd821a63633fed6715cde4ca7e660ff8a45a3abaad74747a31807a15c8c398 = $this->env->getExtension("native_profiler");
        $__internal_edcd821a63633fed6715cde4ca7e660ff8a45a3abaad74747a31807a15c8c398->enter($__internal_edcd821a63633fed6715cde4ca7e660ff8a45a3abaad74747a31807a15c8c398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_edcd821a63633fed6715cde4ca7e660ff8a45a3abaad74747a31807a15c8c398->leave($__internal_edcd821a63633fed6715cde4ca7e660ff8a45a3abaad74747a31807a15c8c398_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
