<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_04d2c1c2cdf888bbb828c8825253d2226fe7e97b02fd108ac9b3601140606afe extends Twig_Template
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
        $__internal_55c67f6ae806ed550aa215b9f6a69db0cda06d9718f9e5150f21a95a021dbe39 = $this->env->getExtension("native_profiler");
        $__internal_55c67f6ae806ed550aa215b9f6a69db0cda06d9718f9e5150f21a95a021dbe39->enter($__internal_55c67f6ae806ed550aa215b9f6a69db0cda06d9718f9e5150f21a95a021dbe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_55c67f6ae806ed550aa215b9f6a69db0cda06d9718f9e5150f21a95a021dbe39->leave($__internal_55c67f6ae806ed550aa215b9f6a69db0cda06d9718f9e5150f21a95a021dbe39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
