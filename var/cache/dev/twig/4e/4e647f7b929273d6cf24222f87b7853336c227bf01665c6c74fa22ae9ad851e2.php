<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_09c1f9a9acf5fa385e3c81118bb6e1bcbf32a4d3c6f73f05970bbc57274b759b extends Twig_Template
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
        $__internal_9b7253c682892cfa942719a78fa931ce659e8022690e245344a162b99eb0bda6 = $this->env->getExtension("native_profiler");
        $__internal_9b7253c682892cfa942719a78fa931ce659e8022690e245344a162b99eb0bda6->enter($__internal_9b7253c682892cfa942719a78fa931ce659e8022690e245344a162b99eb0bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9b7253c682892cfa942719a78fa931ce659e8022690e245344a162b99eb0bda6->leave($__internal_9b7253c682892cfa942719a78fa931ce659e8022690e245344a162b99eb0bda6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
