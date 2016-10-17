<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_158446620eb7d1d8f737589177e069fbb3480ccdaabf88b29596e02864da9f2b extends Twig_Template
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
        $__internal_2bbc58f09045af2c7dc5f8bca343c312ba91ac3c314b6c7c3915869ca42c7112 = $this->env->getExtension("native_profiler");
        $__internal_2bbc58f09045af2c7dc5f8bca343c312ba91ac3c314b6c7c3915869ca42c7112->enter($__internal_2bbc58f09045af2c7dc5f8bca343c312ba91ac3c314b6c7c3915869ca42c7112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2bbc58f09045af2c7dc5f8bca343c312ba91ac3c314b6c7c3915869ca42c7112->leave($__internal_2bbc58f09045af2c7dc5f8bca343c312ba91ac3c314b6c7c3915869ca42c7112_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
