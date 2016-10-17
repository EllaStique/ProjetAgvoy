<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ed78567f8980ca0d7bf84972ce1a5e15f0a48345b54e1e49d58c3ac3732d1c1f extends Twig_Template
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
        $__internal_c37a568e9a6a68db8c9a628f39b377364a70c7b66f0628ef7e5a3d0af18ed8e3 = $this->env->getExtension("native_profiler");
        $__internal_c37a568e9a6a68db8c9a628f39b377364a70c7b66f0628ef7e5a3d0af18ed8e3->enter($__internal_c37a568e9a6a68db8c9a628f39b377364a70c7b66f0628ef7e5a3d0af18ed8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c37a568e9a6a68db8c9a628f39b377364a70c7b66f0628ef7e5a3d0af18ed8e3->leave($__internal_c37a568e9a6a68db8c9a628f39b377364a70c7b66f0628ef7e5a3d0af18ed8e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
