<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a08fd4e2406a39282ee28f71f7b5e10091a850d8c8c2c818e13c65833d30fdec extends Twig_Template
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
        $__internal_877f89130316b12ca0bdb5534d7077258a078a1aa98151001de9035b13f593e4 = $this->env->getExtension("native_profiler");
        $__internal_877f89130316b12ca0bdb5534d7077258a078a1aa98151001de9035b13f593e4->enter($__internal_877f89130316b12ca0bdb5534d7077258a078a1aa98151001de9035b13f593e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_877f89130316b12ca0bdb5534d7077258a078a1aa98151001de9035b13f593e4->leave($__internal_877f89130316b12ca0bdb5534d7077258a078a1aa98151001de9035b13f593e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
