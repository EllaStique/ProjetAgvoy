<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a8c00194137197310641a2e050d4c302a36211a0cf3620138eefbb51a6b517cc extends Twig_Template
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
        $__internal_5457c841c22fafbccdcef2baf295c78d7cbf2eb4e2ad4e8577108e445a894677 = $this->env->getExtension("native_profiler");
        $__internal_5457c841c22fafbccdcef2baf295c78d7cbf2eb4e2ad4e8577108e445a894677->enter($__internal_5457c841c22fafbccdcef2baf295c78d7cbf2eb4e2ad4e8577108e445a894677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5457c841c22fafbccdcef2baf295c78d7cbf2eb4e2ad4e8577108e445a894677->leave($__internal_5457c841c22fafbccdcef2baf295c78d7cbf2eb4e2ad4e8577108e445a894677_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
