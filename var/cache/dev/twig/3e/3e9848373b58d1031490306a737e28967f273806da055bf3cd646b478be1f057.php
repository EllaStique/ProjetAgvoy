<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_aec975d1c3133a054c8034122e265a8763055a328bc2cf0b61f273f6887ab38e extends Twig_Template
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
        $__internal_edce6a79f0a6d9ac96b7b5d743316566ec0454deb9adcab2dc629760c8f2f738 = $this->env->getExtension("native_profiler");
        $__internal_edce6a79f0a6d9ac96b7b5d743316566ec0454deb9adcab2dc629760c8f2f738->enter($__internal_edce6a79f0a6d9ac96b7b5d743316566ec0454deb9adcab2dc629760c8f2f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_edce6a79f0a6d9ac96b7b5d743316566ec0454deb9adcab2dc629760c8f2f738->leave($__internal_edce6a79f0a6d9ac96b7b5d743316566ec0454deb9adcab2dc629760c8f2f738_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
