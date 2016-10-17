<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f2ad4e68a7c078bdd4965f38b486e538cea66abb3d45fd7b492c68c357232b90 extends Twig_Template
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
        $__internal_5f827085261bc3d40357a43e35be345cea22957b53c24efc5869625fb1ccfc0d = $this->env->getExtension("native_profiler");
        $__internal_5f827085261bc3d40357a43e35be345cea22957b53c24efc5869625fb1ccfc0d->enter($__internal_5f827085261bc3d40357a43e35be345cea22957b53c24efc5869625fb1ccfc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5f827085261bc3d40357a43e35be345cea22957b53c24efc5869625fb1ccfc0d->leave($__internal_5f827085261bc3d40357a43e35be345cea22957b53c24efc5869625fb1ccfc0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
