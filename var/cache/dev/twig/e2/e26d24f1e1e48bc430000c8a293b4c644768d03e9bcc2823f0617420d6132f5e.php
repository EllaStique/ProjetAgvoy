<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b27d3b3b38f07a6d88247a5e471fe8a6377e4c4314cca60ffc2bc829685637cc extends Twig_Template
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
        $__internal_44d7bd44d001a3a3c1ae96f541872f2d6fd98515b2af7dfc6e15fc8f6168ccb1 = $this->env->getExtension("native_profiler");
        $__internal_44d7bd44d001a3a3c1ae96f541872f2d6fd98515b2af7dfc6e15fc8f6168ccb1->enter($__internal_44d7bd44d001a3a3c1ae96f541872f2d6fd98515b2af7dfc6e15fc8f6168ccb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_44d7bd44d001a3a3c1ae96f541872f2d6fd98515b2af7dfc6e15fc8f6168ccb1->leave($__internal_44d7bd44d001a3a3c1ae96f541872f2d6fd98515b2af7dfc6e15fc8f6168ccb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
