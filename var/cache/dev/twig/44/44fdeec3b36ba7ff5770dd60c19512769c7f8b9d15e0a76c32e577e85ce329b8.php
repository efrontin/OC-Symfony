<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0bcb7dfacf9b8960310e945defe19e1a1183c7dd54efc4e651f7e5e9c8200627 extends Twig_Template
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
        $__internal_01f3c8c5b198df4485ac2a4d9f13c589eca20c53a26e421e63239746a40e4945 = $this->env->getExtension("native_profiler");
        $__internal_01f3c8c5b198df4485ac2a4d9f13c589eca20c53a26e421e63239746a40e4945->enter($__internal_01f3c8c5b198df4485ac2a4d9f13c589eca20c53a26e421e63239746a40e4945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_01f3c8c5b198df4485ac2a4d9f13c589eca20c53a26e421e63239746a40e4945->leave($__internal_01f3c8c5b198df4485ac2a4d9f13c589eca20c53a26e421e63239746a40e4945_prof);

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
