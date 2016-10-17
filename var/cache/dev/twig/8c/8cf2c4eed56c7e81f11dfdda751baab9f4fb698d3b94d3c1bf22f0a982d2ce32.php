<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b2a9113f793d0f0c7cb461630dff6eadb0df2081031addff8fe4d6a52d6f51b5 extends Twig_Template
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
        $__internal_4f430fa55b2bb7a3f88970fb050a0f700315b565fc1737cdc484f34683147df3 = $this->env->getExtension("native_profiler");
        $__internal_4f430fa55b2bb7a3f88970fb050a0f700315b565fc1737cdc484f34683147df3->enter($__internal_4f430fa55b2bb7a3f88970fb050a0f700315b565fc1737cdc484f34683147df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4f430fa55b2bb7a3f88970fb050a0f700315b565fc1737cdc484f34683147df3->leave($__internal_4f430fa55b2bb7a3f88970fb050a0f700315b565fc1737cdc484f34683147df3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
