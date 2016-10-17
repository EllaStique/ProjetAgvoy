<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8c95864579863fd2b053dc199dcf2bcc1101b6372a5611ff4d9d573b960e408d extends Twig_Template
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
        $__internal_4b408d73d8db7f79cec9f11cac5ffb4d81e2225705d806a3b486d9e77a7217b4 = $this->env->getExtension("native_profiler");
        $__internal_4b408d73d8db7f79cec9f11cac5ffb4d81e2225705d806a3b486d9e77a7217b4->enter($__internal_4b408d73d8db7f79cec9f11cac5ffb4d81e2225705d806a3b486d9e77a7217b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4b408d73d8db7f79cec9f11cac5ffb4d81e2225705d806a3b486d9e77a7217b4->leave($__internal_4b408d73d8db7f79cec9f11cac5ffb4d81e2225705d806a3b486d9e77a7217b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
