<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4d523d0acb00b5f41badaa44be2663192005f2d69b4dd39177db28df29730f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a48ef9d27b30cf89543cda60c40b525b82d070cfe0dfc74fb8d3392fe88b9d78 = $this->env->getExtension("native_profiler");
        $__internal_a48ef9d27b30cf89543cda60c40b525b82d070cfe0dfc74fb8d3392fe88b9d78->enter($__internal_a48ef9d27b30cf89543cda60c40b525b82d070cfe0dfc74fb8d3392fe88b9d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48ef9d27b30cf89543cda60c40b525b82d070cfe0dfc74fb8d3392fe88b9d78->leave($__internal_a48ef9d27b30cf89543cda60c40b525b82d070cfe0dfc74fb8d3392fe88b9d78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e598933f5ebe906be052c5b4d21fa7ca353ef2ac749284ead402e416a0da085f = $this->env->getExtension("native_profiler");
        $__internal_e598933f5ebe906be052c5b4d21fa7ca353ef2ac749284ead402e416a0da085f->enter($__internal_e598933f5ebe906be052c5b4d21fa7ca353ef2ac749284ead402e416a0da085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e598933f5ebe906be052c5b4d21fa7ca353ef2ac749284ead402e416a0da085f->leave($__internal_e598933f5ebe906be052c5b4d21fa7ca353ef2ac749284ead402e416a0da085f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_489178834109d8c8515cd81619f2e4cc6cdee369038eaf213cfc5b4346ff83c7 = $this->env->getExtension("native_profiler");
        $__internal_489178834109d8c8515cd81619f2e4cc6cdee369038eaf213cfc5b4346ff83c7->enter($__internal_489178834109d8c8515cd81619f2e4cc6cdee369038eaf213cfc5b4346ff83c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_489178834109d8c8515cd81619f2e4cc6cdee369038eaf213cfc5b4346ff83c7->leave($__internal_489178834109d8c8515cd81619f2e4cc6cdee369038eaf213cfc5b4346ff83c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_68b50d21670da3c367c1524071e3ab8041708988a4f41f12eb6eea7ca84384fd = $this->env->getExtension("native_profiler");
        $__internal_68b50d21670da3c367c1524071e3ab8041708988a4f41f12eb6eea7ca84384fd->enter($__internal_68b50d21670da3c367c1524071e3ab8041708988a4f41f12eb6eea7ca84384fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_68b50d21670da3c367c1524071e3ab8041708988a4f41f12eb6eea7ca84384fd->leave($__internal_68b50d21670da3c367c1524071e3ab8041708988a4f41f12eb6eea7ca84384fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
