<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_438faf178dfae2649801e25bcf3f7c61cabf690b7e11e93e0526bf8085d70866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_ada284aae0ff84479a8b16ae3b4a44bd1560395ac8465bafe82064a2cebd8175 = $this->env->getExtension("native_profiler");
        $__internal_ada284aae0ff84479a8b16ae3b4a44bd1560395ac8465bafe82064a2cebd8175->enter($__internal_ada284aae0ff84479a8b16ae3b4a44bd1560395ac8465bafe82064a2cebd8175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada284aae0ff84479a8b16ae3b4a44bd1560395ac8465bafe82064a2cebd8175->leave($__internal_ada284aae0ff84479a8b16ae3b4a44bd1560395ac8465bafe82064a2cebd8175_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0230f7d7fe5c3517b542494d3725863a0c3892ecb31460a1901777e262807726 = $this->env->getExtension("native_profiler");
        $__internal_0230f7d7fe5c3517b542494d3725863a0c3892ecb31460a1901777e262807726->enter($__internal_0230f7d7fe5c3517b542494d3725863a0c3892ecb31460a1901777e262807726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0230f7d7fe5c3517b542494d3725863a0c3892ecb31460a1901777e262807726->leave($__internal_0230f7d7fe5c3517b542494d3725863a0c3892ecb31460a1901777e262807726_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
