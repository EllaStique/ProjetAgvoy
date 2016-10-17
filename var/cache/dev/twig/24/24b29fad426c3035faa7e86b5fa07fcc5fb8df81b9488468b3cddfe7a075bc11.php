<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a665e4d2edf6846c65726614c96c00c7bf7403f43d6317a38b8fb303ebabe9fc extends Twig_Template
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
        $__internal_c78b62a012c50ab61ee4f2400afdbbdeb7bf2ba164870f7571e991328748f61b = $this->env->getExtension("native_profiler");
        $__internal_c78b62a012c50ab61ee4f2400afdbbdeb7bf2ba164870f7571e991328748f61b->enter($__internal_c78b62a012c50ab61ee4f2400afdbbdeb7bf2ba164870f7571e991328748f61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c78b62a012c50ab61ee4f2400afdbbdeb7bf2ba164870f7571e991328748f61b->leave($__internal_c78b62a012c50ab61ee4f2400afdbbdeb7bf2ba164870f7571e991328748f61b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
