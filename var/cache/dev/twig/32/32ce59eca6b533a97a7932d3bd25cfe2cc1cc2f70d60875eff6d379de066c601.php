<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_64fad7957762ee954d5a69cbad1b7a9f8c46c985f852485f619ea7ec888352c0 extends Twig_Template
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
        $__internal_94f7e2fd4f2d61279202ec058f973e381bc81a6f11c0e8c042cb6196c374bc75 = $this->env->getExtension("native_profiler");
        $__internal_94f7e2fd4f2d61279202ec058f973e381bc81a6f11c0e8c042cb6196c374bc75->enter($__internal_94f7e2fd4f2d61279202ec058f973e381bc81a6f11c0e8c042cb6196c374bc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_94f7e2fd4f2d61279202ec058f973e381bc81a6f11c0e8c042cb6196c374bc75->leave($__internal_94f7e2fd4f2d61279202ec058f973e381bc81a6f11c0e8c042cb6196c374bc75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
