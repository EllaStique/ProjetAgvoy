<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_24ada7e778d2bbdc86389bc4d45cc3928bcce5be3b91c0ca9d0d5f635fb94e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_917b30050f591af5dee3f78721829a282822f7b3f40682ad224beb330d1b76a9 = $this->env->getExtension("native_profiler");
        $__internal_917b30050f591af5dee3f78721829a282822f7b3f40682ad224beb330d1b76a9->enter($__internal_917b30050f591af5dee3f78721829a282822f7b3f40682ad224beb330d1b76a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_917b30050f591af5dee3f78721829a282822f7b3f40682ad224beb330d1b76a9->leave($__internal_917b30050f591af5dee3f78721829a282822f7b3f40682ad224beb330d1b76a9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ac9851c10a01604426e8c559413d465439f0462ebf5ad970d3369dea8e4398d = $this->env->getExtension("native_profiler");
        $__internal_8ac9851c10a01604426e8c559413d465439f0462ebf5ad970d3369dea8e4398d->enter($__internal_8ac9851c10a01604426e8c559413d465439f0462ebf5ad970d3369dea8e4398d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ac9851c10a01604426e8c559413d465439f0462ebf5ad970d3369dea8e4398d->leave($__internal_8ac9851c10a01604426e8c559413d465439f0462ebf5ad970d3369dea8e4398d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
