<?php

/* :circuit:register.html.twig */
class __TwigTemplate_e4a3bfd95440511993312e785604ad93529b561e29738850c86e11f72d772ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:register.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68a49e800a3bb8560542617f28480a5a587d098b138d98e23b198380fa9d3ef0 = $this->env->getExtension("native_profiler");
        $__internal_68a49e800a3bb8560542617f28480a5a587d098b138d98e23b198380fa9d3ef0->enter($__internal_68a49e800a3bb8560542617f28480a5a587d098b138d98e23b198380fa9d3ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a49e800a3bb8560542617f28480a5a587d098b138d98e23b198380fa9d3ef0->leave($__internal_68a49e800a3bb8560542617f28480a5a587d098b138d98e23b198380fa9d3ef0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a6477335e834a4063906addf875c3d13fee62dfe4094fbc37429aefef39f172d = $this->env->getExtension("native_profiler");
        $__internal_a6477335e834a4063906addf875c3d13fee62dfe4094fbc37429aefef39f172d->enter($__internal_a6477335e834a4063906addf875c3d13fee62dfe4094fbc37429aefef39f172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "\" />
    </div>
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_a6477335e834a4063906addf875c3d13fee62dfe4094fbc37429aefef39f172d->leave($__internal_a6477335e834a4063906addf875c3d13fee62dfe4094fbc37429aefef39f172d_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
