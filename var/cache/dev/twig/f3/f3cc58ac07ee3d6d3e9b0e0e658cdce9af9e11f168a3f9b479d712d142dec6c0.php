<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_19e59163e85339f8270932fbd29c85d30429dd8b53d2d204c8296b2927e634ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d1326bfab66d707761a5a35f95ba9b4c85f3b4894b50011e3226c2de0c1057b1 = $this->env->getExtension("native_profiler");
        $__internal_d1326bfab66d707761a5a35f95ba9b4c85f3b4894b50011e3226c2de0c1057b1->enter($__internal_d1326bfab66d707761a5a35f95ba9b4c85f3b4894b50011e3226c2de0c1057b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1326bfab66d707761a5a35f95ba9b4c85f3b4894b50011e3226c2de0c1057b1->leave($__internal_d1326bfab66d707761a5a35f95ba9b4c85f3b4894b50011e3226c2de0c1057b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e69cc702818b99ce8e519ba297b7757286bee27ec5e6d7c86eae60c1a8a893fd = $this->env->getExtension("native_profiler");
        $__internal_e69cc702818b99ce8e519ba297b7757286bee27ec5e6d7c86eae60c1a8a893fd->enter($__internal_e69cc702818b99ce8e519ba297b7757286bee27ec5e6d7c86eae60c1a8a893fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_e69cc702818b99ce8e519ba297b7757286bee27ec5e6d7c86eae60c1a8a893fd->leave($__internal_e69cc702818b99ce8e519ba297b7757286bee27ec5e6d7c86eae60c1a8a893fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
