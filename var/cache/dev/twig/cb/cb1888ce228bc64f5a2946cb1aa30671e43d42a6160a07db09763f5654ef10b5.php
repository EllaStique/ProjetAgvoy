<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d97c921538f5c812fb56dcdee3c9cc41b5d53123a34678318d4286dee3d7fdb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b349dc33da820185b45b2cb52585e240cd159cbc757ff638a73116dc20907486 = $this->env->getExtension("native_profiler");
        $__internal_b349dc33da820185b45b2cb52585e240cd159cbc757ff638a73116dc20907486->enter($__internal_b349dc33da820185b45b2cb52585e240cd159cbc757ff638a73116dc20907486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b349dc33da820185b45b2cb52585e240cd159cbc757ff638a73116dc20907486->leave($__internal_b349dc33da820185b45b2cb52585e240cd159cbc757ff638a73116dc20907486_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
