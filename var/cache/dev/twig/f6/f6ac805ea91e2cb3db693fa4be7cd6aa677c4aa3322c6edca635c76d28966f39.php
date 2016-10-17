<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_83124e8d49a2a3170a6288156aa7f59c2526f4af5b95c1d65294eccc6dd6c46f extends Twig_Template
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
        $__internal_2ae0f5c026293c1f8d3e8371c4058c0d7b2f0243b22266709c58aaf48625f3df = $this->env->getExtension("native_profiler");
        $__internal_2ae0f5c026293c1f8d3e8371c4058c0d7b2f0243b22266709c58aaf48625f3df->enter($__internal_2ae0f5c026293c1f8d3e8371c4058c0d7b2f0243b22266709c58aaf48625f3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2ae0f5c026293c1f8d3e8371c4058c0d7b2f0243b22266709c58aaf48625f3df->leave($__internal_2ae0f5c026293c1f8d3e8371c4058c0d7b2f0243b22266709c58aaf48625f3df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
