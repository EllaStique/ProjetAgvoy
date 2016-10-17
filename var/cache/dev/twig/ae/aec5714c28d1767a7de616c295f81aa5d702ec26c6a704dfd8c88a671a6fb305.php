<?php

/* base.html.twig */
class __TwigTemplate_60adeee1740f74c9ba470e6ec6b42138dcb5033238bf22f1ad3432dbe74ae0f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0f912cff2b0fd76cd67d16fe1f96666c56e40a1345d22e0c2f280b633aac63e = $this->env->getExtension("native_profiler");
        $__internal_f0f912cff2b0fd76cd67d16fe1f96666c56e40a1345d22e0c2f280b633aac63e->enter($__internal_f0f912cff2b0fd76cd67d16fe1f96666c56e40a1345d22e0c2f280b633aac63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "        
    \t<div class=\"container body-container\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        </div>
    \t
        ";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_f0f912cff2b0fd76cd67d16fe1f96666c56e40a1345d22e0c2f280b633aac63e->leave($__internal_f0f912cff2b0fd76cd67d16fe1f96666c56e40a1345d22e0c2f280b633aac63e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7db7f17228bf927cad5444bf7ffc688f4a1827972655c4d5cbd7e69dca0232b3 = $this->env->getExtension("native_profiler");
        $__internal_7db7f17228bf927cad5444bf7ffc688f4a1827972655c4d5cbd7e69dca0232b3->enter($__internal_7db7f17228bf927cad5444bf7ffc688f4a1827972655c4d5cbd7e69dca0232b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agence TSP";
        
        $__internal_7db7f17228bf927cad5444bf7ffc688f4a1827972655c4d5cbd7e69dca0232b3->leave($__internal_7db7f17228bf927cad5444bf7ffc688f4a1827972655c4d5cbd7e69dca0232b3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4a6bdb5682cbe2f2850707ae6236efc5b7dc0afb8330f38ef961dd3f4dc68a3 = $this->env->getExtension("native_profiler");
        $__internal_a4a6bdb5682cbe2f2850707ae6236efc5b7dc0afb8330f38ef961dd3f4dc68a3->enter($__internal_a4a6bdb5682cbe2f2850707ae6236efc5b7dc0afb8330f38ef961dd3f4dc68a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a4a6bdb5682cbe2f2850707ae6236efc5b7dc0afb8330f38ef961dd3f4dc68a3->leave($__internal_a4a6bdb5682cbe2f2850707ae6236efc5b7dc0afb8330f38ef961dd3f4dc68a3_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_9dda86877d172d83b0e6e0dd540f72bba81fcfd7d36b12f0b62c588f03ee52aa = $this->env->getExtension("native_profiler");
        $__internal_9dda86877d172d83b0e6e0dd540f72bba81fcfd7d36b12f0b62c588f03ee52aa->enter($__internal_9dda86877d172d83b0e6e0dd540f72bba81fcfd7d36b12f0b62c588f03ee52aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9dda86877d172d83b0e6e0dd540f72bba81fcfd7d36b12f0b62c588f03ee52aa->leave($__internal_9dda86877d172d83b0e6e0dd540f72bba81fcfd7d36b12f0b62c588f03ee52aa_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a80db262d34fa97a33825f9ff81f9e61a215fab3f4cfd7b8d5e367af59ba003f = $this->env->getExtension("native_profiler");
        $__internal_a80db262d34fa97a33825f9ff81f9e61a215fab3f4cfd7b8d5e367af59ba003f->enter($__internal_a80db262d34fa97a33825f9ff81f9e61a215fab3f4cfd7b8d5e367af59ba003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-12 col-md-12 col-lg-12\">
                        ";
        // line 19
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 21
        $this->displayBlock('main', $context, $blocks);
        // line 22
        echo "                    </div>
                    
                    ";
        // line 27
        echo "            ";
        
        $__internal_a80db262d34fa97a33825f9ff81f9e61a215fab3f4cfd7b8d5e367af59ba003f->leave($__internal_a80db262d34fa97a33825f9ff81f9e61a215fab3f4cfd7b8d5e367af59ba003f_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_b15d69b2f927c9818d57d9b4303791cf7ae0a3518a4083591084482bcf28f7af = $this->env->getExtension("native_profiler");
        $__internal_b15d69b2f927c9818d57d9b4303791cf7ae0a3518a4083591084482bcf28f7af->enter($__internal_b15d69b2f927c9818d57d9b4303791cf7ae0a3518a4083591084482bcf28f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b15d69b2f927c9818d57d9b4303791cf7ae0a3518a4083591084482bcf28f7af->leave($__internal_b15d69b2f927c9818d57d9b4303791cf7ae0a3518a4083591084482bcf28f7af_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_445acbf2e402b0af0ab823008284385e99805095d72cadf6150e973f4b8e11ee = $this->env->getExtension("native_profiler");
        $__internal_445acbf2e402b0af0ab823008284385e99805095d72cadf6150e973f4b8e11ee->enter($__internal_445acbf2e402b0af0ab823008284385e99805095d72cadf6150e973f4b8e11ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><center><i><br><br>Copyright Agence Télécom SudParis</i></center></footer>";
        
        $__internal_445acbf2e402b0af0ab823008284385e99805095d72cadf6150e973f4b8e11ee->leave($__internal_445acbf2e402b0af0ab823008284385e99805095d72cadf6150e973f4b8e11ee_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba9fe41b6d5cf09438f22586a5079b17c2892edffe965d417e9c0585a4f5ebea = $this->env->getExtension("native_profiler");
        $__internal_ba9fe41b6d5cf09438f22586a5079b17c2892edffe965d417e9c0585a4f5ebea->enter($__internal_ba9fe41b6d5cf09438f22586a5079b17c2892edffe965d417e9c0585a4f5ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ba9fe41b6d5cf09438f22586a5079b17c2892edffe965d417e9c0585a4f5ebea->leave($__internal_ba9fe41b6d5cf09438f22586a5079b17c2892edffe965d417e9c0585a4f5ebea_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 33,  171 => 32,  165 => 31,  153 => 30,  142 => 21,  135 => 27,  131 => 22,  129 => 21,  124 => 19,  120 => 17,  114 => 16,  103 => 13,  93 => 8,  87 => 7,  75 => 6,  66 => 35,  63 => 31,  61 => 30,  57 => 28,  55 => 16,  51 => 14,  49 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         <title>{% block title %}Agence TSP{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     	{% block header %}{% endblock %}*/
/*         */
/*     	<div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-12 col-md-12 col-lg-12">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/*                     */
/*                     {#<div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}SIDEBAR{% endblock %}*/
/*                     </div>#}*/
/*             {% endblock %}*/
/*         </div>*/
/*     	*/
/*         {% block footer %}<footer><center><i><br><br>Copyright Agence Télécom SudParis</i></center></footer>{% endblock %}*/
/*         {% block javascripts %}*/
/*         	<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         	<script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
