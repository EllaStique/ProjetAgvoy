<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bcfde09461c6cc33f7c0222d8634ce461bd5460d182a1a9e66b3674aeb4c6a32 extends Twig_Template
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
        $__internal_7febb0db77ab3fc7bfcb17a2e2cc11fc857a67e6cb5eb1cb1e442dd3a5d2244f = $this->env->getExtension("native_profiler");
        $__internal_7febb0db77ab3fc7bfcb17a2e2cc11fc857a67e6cb5eb1cb1e442dd3a5d2244f->enter($__internal_7febb0db77ab3fc7bfcb17a2e2cc11fc857a67e6cb5eb1cb1e442dd3a5d2244f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7febb0db77ab3fc7bfcb17a2e2cc11fc857a67e6cb5eb1cb1e442dd3a5d2244f->leave($__internal_7febb0db77ab3fc7bfcb17a2e2cc11fc857a67e6cb5eb1cb1e442dd3a5d2244f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
