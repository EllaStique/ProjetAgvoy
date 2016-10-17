<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_11365a6fb8ee670cacec477e6a3e5215f0fae19e15bd24d8007ddd7f83cdbfd4 extends Twig_Template
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
        $__internal_72d9e9337d1ed67bb3b6da67727e8f392c3836e473210370fd27e62b658b57c7 = $this->env->getExtension("native_profiler");
        $__internal_72d9e9337d1ed67bb3b6da67727e8f392c3836e473210370fd27e62b658b57c7->enter($__internal_72d9e9337d1ed67bb3b6da67727e8f392c3836e473210370fd27e62b658b57c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_72d9e9337d1ed67bb3b6da67727e8f392c3836e473210370fd27e62b658b57c7->leave($__internal_72d9e9337d1ed67bb3b6da67727e8f392c3836e473210370fd27e62b658b57c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
