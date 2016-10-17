<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7f5ed60634466d00633bf47701536fc44ca214952cb7000704d3ed0d544beb1b extends Twig_Template
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
        $__internal_b8278081d0488a038ef5b78f7c03b38e85c933528c0fd25d6d084597806e9655 = $this->env->getExtension("native_profiler");
        $__internal_b8278081d0488a038ef5b78f7c03b38e85c933528c0fd25d6d084597806e9655->enter($__internal_b8278081d0488a038ef5b78f7c03b38e85c933528c0fd25d6d084597806e9655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b8278081d0488a038ef5b78f7c03b38e85c933528c0fd25d6d084597806e9655->leave($__internal_b8278081d0488a038ef5b78f7c03b38e85c933528c0fd25d6d084597806e9655_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
