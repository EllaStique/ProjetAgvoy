<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_02af8c3d79190ba18a9182cce4f190a99bf0788679227c2fd4035f446c6c91a4 extends Twig_Template
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
        $__internal_a4c6a35f652f380e2ffea50bbabcee735a8f8749a5edacd11a8e2a144ea90cfa = $this->env->getExtension("native_profiler");
        $__internal_a4c6a35f652f380e2ffea50bbabcee735a8f8749a5edacd11a8e2a144ea90cfa->enter($__internal_a4c6a35f652f380e2ffea50bbabcee735a8f8749a5edacd11a8e2a144ea90cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a4c6a35f652f380e2ffea50bbabcee735a8f8749a5edacd11a8e2a144ea90cfa->leave($__internal_a4c6a35f652f380e2ffea50bbabcee735a8f8749a5edacd11a8e2a144ea90cfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
