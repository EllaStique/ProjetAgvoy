<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_738344aabc3fa2a1ac4d3a7d96a62cbd3f5fe2fa88c519890a85be4a4f086557 extends Twig_Template
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
        $__internal_32138b79bb49366d904d750de516fb8c6a272dedcd79f43e045d1bc570f63b14 = $this->env->getExtension("native_profiler");
        $__internal_32138b79bb49366d904d750de516fb8c6a272dedcd79f43e045d1bc570f63b14->enter($__internal_32138b79bb49366d904d750de516fb8c6a272dedcd79f43e045d1bc570f63b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_32138b79bb49366d904d750de516fb8c6a272dedcd79f43e045d1bc570f63b14->leave($__internal_32138b79bb49366d904d750de516fb8c6a272dedcd79f43e045d1bc570f63b14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
