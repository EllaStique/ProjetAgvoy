<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b23e2bda279a71678592ecc7ddd2ebb1e21bd99d758545ed8c9e1307964cba39 extends Twig_Template
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
        $__internal_bc6a2b02c0255060afe730726c1795c0ea649757ad0ea7bd3358aa096fae3f2f = $this->env->getExtension("native_profiler");
        $__internal_bc6a2b02c0255060afe730726c1795c0ea649757ad0ea7bd3358aa096fae3f2f->enter($__internal_bc6a2b02c0255060afe730726c1795c0ea649757ad0ea7bd3358aa096fae3f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bc6a2b02c0255060afe730726c1795c0ea649757ad0ea7bd3358aa096fae3f2f->leave($__internal_bc6a2b02c0255060afe730726c1795c0ea649757ad0ea7bd3358aa096fae3f2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
