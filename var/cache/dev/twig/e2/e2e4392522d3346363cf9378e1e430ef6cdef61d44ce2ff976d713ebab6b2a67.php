<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_48b1b4bd957e4b6649b62866b0fc27f5ea78435b25e081c953087665607f02ca extends Twig_Template
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
        $__internal_dc0a73c20fef2bd6340dacd68642fa2bb4786a669493dc4f7a56437bdd6dc1f2 = $this->env->getExtension("native_profiler");
        $__internal_dc0a73c20fef2bd6340dacd68642fa2bb4786a669493dc4f7a56437bdd6dc1f2->enter($__internal_dc0a73c20fef2bd6340dacd68642fa2bb4786a669493dc4f7a56437bdd6dc1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dc0a73c20fef2bd6340dacd68642fa2bb4786a669493dc4f7a56437bdd6dc1f2->leave($__internal_dc0a73c20fef2bd6340dacd68642fa2bb4786a669493dc4f7a56437bdd6dc1f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
