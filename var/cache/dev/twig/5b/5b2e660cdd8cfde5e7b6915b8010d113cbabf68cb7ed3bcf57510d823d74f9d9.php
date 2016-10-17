<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_385b6e930b306da854c2530d630d4b37423a3dc321b5e46d4b99c08cc6e89c21 extends Twig_Template
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
        $__internal_12f0be86099f254e8599023cf61420861251e834d0a69b113b8706505d62ae1b = $this->env->getExtension("native_profiler");
        $__internal_12f0be86099f254e8599023cf61420861251e834d0a69b113b8706505d62ae1b->enter($__internal_12f0be86099f254e8599023cf61420861251e834d0a69b113b8706505d62ae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_12f0be86099f254e8599023cf61420861251e834d0a69b113b8706505d62ae1b->leave($__internal_12f0be86099f254e8599023cf61420861251e834d0a69b113b8706505d62ae1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
