<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9783826741c96c02677647a3af0d275d2b7ea59b9ce55cfff95ea7eff0f7bfa6 extends Twig_Template
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
        $__internal_d5278f495e83ec1cb0aff7806147ef561aa3068a300d173aa8dd2b110306b2cd = $this->env->getExtension("native_profiler");
        $__internal_d5278f495e83ec1cb0aff7806147ef561aa3068a300d173aa8dd2b110306b2cd->enter($__internal_d5278f495e83ec1cb0aff7806147ef561aa3068a300d173aa8dd2b110306b2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d5278f495e83ec1cb0aff7806147ef561aa3068a300d173aa8dd2b110306b2cd->leave($__internal_d5278f495e83ec1cb0aff7806147ef561aa3068a300d173aa8dd2b110306b2cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
