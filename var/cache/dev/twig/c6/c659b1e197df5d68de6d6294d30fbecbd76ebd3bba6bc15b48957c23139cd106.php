<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5617c6a3dc420742211e1b97d34bf4419a4451bd9f309c1d584569273d45324d extends Twig_Template
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
        $__internal_88ac4c24fd0c6ad65d1fc59061981c10b433b28a15bc6680192f62d8536bb26f = $this->env->getExtension("native_profiler");
        $__internal_88ac4c24fd0c6ad65d1fc59061981c10b433b28a15bc6680192f62d8536bb26f->enter($__internal_88ac4c24fd0c6ad65d1fc59061981c10b433b28a15bc6680192f62d8536bb26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_88ac4c24fd0c6ad65d1fc59061981c10b433b28a15bc6680192f62d8536bb26f->leave($__internal_88ac4c24fd0c6ad65d1fc59061981c10b433b28a15bc6680192f62d8536bb26f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
