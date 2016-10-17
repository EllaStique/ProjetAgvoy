<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6364b70df5af2e39b5c0fe28281400305efa734c15d947e6537f72ac01acf6f5 extends Twig_Template
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
        $__internal_13a592a3644f53477bbed2904b5d39129a5584f43386e61f657b22a9859c3e82 = $this->env->getExtension("native_profiler");
        $__internal_13a592a3644f53477bbed2904b5d39129a5584f43386e61f657b22a9859c3e82->enter($__internal_13a592a3644f53477bbed2904b5d39129a5584f43386e61f657b22a9859c3e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_13a592a3644f53477bbed2904b5d39129a5584f43386e61f657b22a9859c3e82->leave($__internal_13a592a3644f53477bbed2904b5d39129a5584f43386e61f657b22a9859c3e82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
