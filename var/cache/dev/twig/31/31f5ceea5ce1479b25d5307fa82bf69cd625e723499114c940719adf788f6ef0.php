<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e521c191650e08ec36e625f7716fc22bb148166196eaf97b4d55e44009de5047 extends Twig_Template
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
        $__internal_5332a5f41fbd611a0eb552b6cb6454b9df3878d4fbc6026a73efe7207c035fb4 = $this->env->getExtension("native_profiler");
        $__internal_5332a5f41fbd611a0eb552b6cb6454b9df3878d4fbc6026a73efe7207c035fb4->enter($__internal_5332a5f41fbd611a0eb552b6cb6454b9df3878d4fbc6026a73efe7207c035fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5332a5f41fbd611a0eb552b6cb6454b9df3878d4fbc6026a73efe7207c035fb4->leave($__internal_5332a5f41fbd611a0eb552b6cb6454b9df3878d4fbc6026a73efe7207c035fb4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
