<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_58ec2a29fef4971995e17ffda7fb6a0d37159d3647b12f8e9d9f3503186f8dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5391335848ca3395f7bee3a3c3d91c7e963414a5d3d1199b8e257a7128b453b3 = $this->env->getExtension("native_profiler");
        $__internal_5391335848ca3395f7bee3a3c3d91c7e963414a5d3d1199b8e257a7128b453b3->enter($__internal_5391335848ca3395f7bee3a3c3d91c7e963414a5d3d1199b8e257a7128b453b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5391335848ca3395f7bee3a3c3d91c7e963414a5d3d1199b8e257a7128b453b3->leave($__internal_5391335848ca3395f7bee3a3c3d91c7e963414a5d3d1199b8e257a7128b453b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5e01ee29bc08afd291394bd07ab74b0459b4bf13691df59d0d2fd5c0cc041f1 = $this->env->getExtension("native_profiler");
        $__internal_c5e01ee29bc08afd291394bd07ab74b0459b4bf13691df59d0d2fd5c0cc041f1->enter($__internal_c5e01ee29bc08afd291394bd07ab74b0459b4bf13691df59d0d2fd5c0cc041f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c5e01ee29bc08afd291394bd07ab74b0459b4bf13691df59d0d2fd5c0cc041f1->leave($__internal_c5e01ee29bc08afd291394bd07ab74b0459b4bf13691df59d0d2fd5c0cc041f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1f9b3ab3f7d0d0410c851cc70df2cc4706114a7508ee0bd56115d43b4a463e9 = $this->env->getExtension("native_profiler");
        $__internal_a1f9b3ab3f7d0d0410c851cc70df2cc4706114a7508ee0bd56115d43b4a463e9->enter($__internal_a1f9b3ab3f7d0d0410c851cc70df2cc4706114a7508ee0bd56115d43b4a463e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a1f9b3ab3f7d0d0410c851cc70df2cc4706114a7508ee0bd56115d43b4a463e9->leave($__internal_a1f9b3ab3f7d0d0410c851cc70df2cc4706114a7508ee0bd56115d43b4a463e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
