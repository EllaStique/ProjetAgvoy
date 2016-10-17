<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_42e687ec2e1fe34461d23f09b071684fd4764cd7b665a2030bd834ac21e3e25d extends Twig_Template
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
        $__internal_204650f753c3a47b52002a43d5824dd3110bb4475fcac80f2d76316ee011efe0 = $this->env->getExtension("native_profiler");
        $__internal_204650f753c3a47b52002a43d5824dd3110bb4475fcac80f2d76316ee011efe0->enter($__internal_204650f753c3a47b52002a43d5824dd3110bb4475fcac80f2d76316ee011efe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_204650f753c3a47b52002a43d5824dd3110bb4475fcac80f2d76316ee011efe0->leave($__internal_204650f753c3a47b52002a43d5824dd3110bb4475fcac80f2d76316ee011efe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
