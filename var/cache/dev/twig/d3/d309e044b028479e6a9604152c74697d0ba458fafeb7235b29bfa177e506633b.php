<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d569a82c334e317bd2a55b215644ae7eafd16a361da6947313e6594fbe26bf44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c9787b1041f22428c40daf526967b51466f9e124b34c86b12215a1d3ed25bc4 = $this->env->getExtension("native_profiler");
        $__internal_5c9787b1041f22428c40daf526967b51466f9e124b34c86b12215a1d3ed25bc4->enter($__internal_5c9787b1041f22428c40daf526967b51466f9e124b34c86b12215a1d3ed25bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9787b1041f22428c40daf526967b51466f9e124b34c86b12215a1d3ed25bc4->leave($__internal_5c9787b1041f22428c40daf526967b51466f9e124b34c86b12215a1d3ed25bc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d5b3a16e85ba36a9320c1a5a453064137649b534e25d10632f8804d59de0971 = $this->env->getExtension("native_profiler");
        $__internal_7d5b3a16e85ba36a9320c1a5a453064137649b534e25d10632f8804d59de0971->enter($__internal_7d5b3a16e85ba36a9320c1a5a453064137649b534e25d10632f8804d59de0971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d5b3a16e85ba36a9320c1a5a453064137649b534e25d10632f8804d59de0971->leave($__internal_7d5b3a16e85ba36a9320c1a5a453064137649b534e25d10632f8804d59de0971_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04a1e90a234f3d3ab23a322c351110a379c29793a236b4241da8c5b26621a711 = $this->env->getExtension("native_profiler");
        $__internal_04a1e90a234f3d3ab23a322c351110a379c29793a236b4241da8c5b26621a711->enter($__internal_04a1e90a234f3d3ab23a322c351110a379c29793a236b4241da8c5b26621a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04a1e90a234f3d3ab23a322c351110a379c29793a236b4241da8c5b26621a711->leave($__internal_04a1e90a234f3d3ab23a322c351110a379c29793a236b4241da8c5b26621a711_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0664fa728bea3c85ca9f49d5848100cb84463e9d3a76e5021e64e06327f5cf9b = $this->env->getExtension("native_profiler");
        $__internal_0664fa728bea3c85ca9f49d5848100cb84463e9d3a76e5021e64e06327f5cf9b->enter($__internal_0664fa728bea3c85ca9f49d5848100cb84463e9d3a76e5021e64e06327f5cf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0664fa728bea3c85ca9f49d5848100cb84463e9d3a76e5021e64e06327f5cf9b->leave($__internal_0664fa728bea3c85ca9f49d5848100cb84463e9d3a76e5021e64e06327f5cf9b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
