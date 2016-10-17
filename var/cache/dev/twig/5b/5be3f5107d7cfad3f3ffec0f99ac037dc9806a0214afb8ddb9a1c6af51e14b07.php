<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f8ba37c83645ad3ee3e8c0416e0b4e2edee7404a526168b6c472a145ec047483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ef33a24e39286951532096f8953bc68f11cd33df950144ef9a474b0e2ddbdfc5 = $this->env->getExtension("native_profiler");
        $__internal_ef33a24e39286951532096f8953bc68f11cd33df950144ef9a474b0e2ddbdfc5->enter($__internal_ef33a24e39286951532096f8953bc68f11cd33df950144ef9a474b0e2ddbdfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef33a24e39286951532096f8953bc68f11cd33df950144ef9a474b0e2ddbdfc5->leave($__internal_ef33a24e39286951532096f8953bc68f11cd33df950144ef9a474b0e2ddbdfc5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_498e8c7188c8c7a89d602898fe34c568d39156bb162077ef854a12fb93918a73 = $this->env->getExtension("native_profiler");
        $__internal_498e8c7188c8c7a89d602898fe34c568d39156bb162077ef854a12fb93918a73->enter($__internal_498e8c7188c8c7a89d602898fe34c568d39156bb162077ef854a12fb93918a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_498e8c7188c8c7a89d602898fe34c568d39156bb162077ef854a12fb93918a73->leave($__internal_498e8c7188c8c7a89d602898fe34c568d39156bb162077ef854a12fb93918a73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
