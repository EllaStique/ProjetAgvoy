<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3072e4e58c24b4f9f896c0bc100136d98136908095ea7747edf2c8e5dd1539d5 extends Twig_Template
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
        $__internal_f5a4da2deaca129fe25ed3eac1350a6d4d46b27369f45c89458bcea8bb9c274e = $this->env->getExtension("native_profiler");
        $__internal_f5a4da2deaca129fe25ed3eac1350a6d4d46b27369f45c89458bcea8bb9c274e->enter($__internal_f5a4da2deaca129fe25ed3eac1350a6d4d46b27369f45c89458bcea8bb9c274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f5a4da2deaca129fe25ed3eac1350a6d4d46b27369f45c89458bcea8bb9c274e->leave($__internal_f5a4da2deaca129fe25ed3eac1350a6d4d46b27369f45c89458bcea8bb9c274e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
