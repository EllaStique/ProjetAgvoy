<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_582e1df4d693734f347f8c31b1c0972c5da1fa17b45c7729eb218be029e1c980 extends Twig_Template
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
        $__internal_9b7dae9771c318c00c3e764eafa84ec330c9c2b040cc4c056b89df4bc353364a = $this->env->getExtension("native_profiler");
        $__internal_9b7dae9771c318c00c3e764eafa84ec330c9c2b040cc4c056b89df4bc353364a->enter($__internal_9b7dae9771c318c00c3e764eafa84ec330c9c2b040cc4c056b89df4bc353364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9b7dae9771c318c00c3e764eafa84ec330c9c2b040cc4c056b89df4bc353364a->leave($__internal_9b7dae9771c318c00c3e764eafa84ec330c9c2b040cc4c056b89df4bc353364a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_49d4d3c0833ea5805af4d9a977d401c2af3717b9c2ed4daec309b30944bcedd2 = $this->env->getExtension("native_profiler");
        $__internal_49d4d3c0833ea5805af4d9a977d401c2af3717b9c2ed4daec309b30944bcedd2->enter($__internal_49d4d3c0833ea5805af4d9a977d401c2af3717b9c2ed4daec309b30944bcedd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_49d4d3c0833ea5805af4d9a977d401c2af3717b9c2ed4daec309b30944bcedd2->leave($__internal_49d4d3c0833ea5805af4d9a977d401c2af3717b9c2ed4daec309b30944bcedd2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c1a13563b36d738234921e961bed6617452ee63daf643aea10e8810000920dc9 = $this->env->getExtension("native_profiler");
        $__internal_c1a13563b36d738234921e961bed6617452ee63daf643aea10e8810000920dc9->enter($__internal_c1a13563b36d738234921e961bed6617452ee63daf643aea10e8810000920dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c1a13563b36d738234921e961bed6617452ee63daf643aea10e8810000920dc9->leave($__internal_c1a13563b36d738234921e961bed6617452ee63daf643aea10e8810000920dc9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f900f4bf3f27817c60039e52f3369c01c4f960aaa736e4ce5ff51fb6e02e38a6 = $this->env->getExtension("native_profiler");
        $__internal_f900f4bf3f27817c60039e52f3369c01c4f960aaa736e4ce5ff51fb6e02e38a6->enter($__internal_f900f4bf3f27817c60039e52f3369c01c4f960aaa736e4ce5ff51fb6e02e38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f900f4bf3f27817c60039e52f3369c01c4f960aaa736e4ce5ff51fb6e02e38a6->leave($__internal_f900f4bf3f27817c60039e52f3369c01c4f960aaa736e4ce5ff51fb6e02e38a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
