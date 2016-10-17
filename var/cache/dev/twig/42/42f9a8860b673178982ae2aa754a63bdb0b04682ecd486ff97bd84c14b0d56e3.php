<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c15f733acf184d18488be9e0d7ad5a826258273c9b6fcbce0a059eefe18dab2a extends Twig_Template
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
        $__internal_49b12e999b78702329c2154586ec01815dd4436a4478cf598f28421221ffccc8 = $this->env->getExtension("native_profiler");
        $__internal_49b12e999b78702329c2154586ec01815dd4436a4478cf598f28421221ffccc8->enter($__internal_49b12e999b78702329c2154586ec01815dd4436a4478cf598f28421221ffccc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_49b12e999b78702329c2154586ec01815dd4436a4478cf598f28421221ffccc8->leave($__internal_49b12e999b78702329c2154586ec01815dd4436a4478cf598f28421221ffccc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
