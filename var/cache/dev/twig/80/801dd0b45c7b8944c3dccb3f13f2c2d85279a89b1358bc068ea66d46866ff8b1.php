<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_725b49ed245b66f25557999911205efd9af90f95588cf020254925a7440ea835 extends Twig_Template
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
        $__internal_89dc00d2c4828b31b22990f71ebbd5a357e3a524e211ba9d6f28441dd51347ad = $this->env->getExtension("native_profiler");
        $__internal_89dc00d2c4828b31b22990f71ebbd5a357e3a524e211ba9d6f28441dd51347ad->enter($__internal_89dc00d2c4828b31b22990f71ebbd5a357e3a524e211ba9d6f28441dd51347ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_89dc00d2c4828b31b22990f71ebbd5a357e3a524e211ba9d6f28441dd51347ad->leave($__internal_89dc00d2c4828b31b22990f71ebbd5a357e3a524e211ba9d6f28441dd51347ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
