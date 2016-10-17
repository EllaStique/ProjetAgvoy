<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8136bd15e00765b1f9c047f8d0c1fe14f0860e213e080805f1cfed5b2fff5a82 extends Twig_Template
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
        $__internal_ac4c889ea7e1f74dd5aef6c001857c565c128f449cb40d4ae787db55b6465dde = $this->env->getExtension("native_profiler");
        $__internal_ac4c889ea7e1f74dd5aef6c001857c565c128f449cb40d4ae787db55b6465dde->enter($__internal_ac4c889ea7e1f74dd5aef6c001857c565c128f449cb40d4ae787db55b6465dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ac4c889ea7e1f74dd5aef6c001857c565c128f449cb40d4ae787db55b6465dde->leave($__internal_ac4c889ea7e1f74dd5aef6c001857c565c128f449cb40d4ae787db55b6465dde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
