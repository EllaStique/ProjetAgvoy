<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3cbf08a02ee0086cd005a4b3b49ebddc4f92af16794ac706f39a7fd83f15a477 extends Twig_Template
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
        $__internal_ef04828bf6ac6dc92caeb53355a9209dd9aeb57885ff9f5aeda57b8a1b885223 = $this->env->getExtension("native_profiler");
        $__internal_ef04828bf6ac6dc92caeb53355a9209dd9aeb57885ff9f5aeda57b8a1b885223->enter($__internal_ef04828bf6ac6dc92caeb53355a9209dd9aeb57885ff9f5aeda57b8a1b885223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ef04828bf6ac6dc92caeb53355a9209dd9aeb57885ff9f5aeda57b8a1b885223->leave($__internal_ef04828bf6ac6dc92caeb53355a9209dd9aeb57885ff9f5aeda57b8a1b885223_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
