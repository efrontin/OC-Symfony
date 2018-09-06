<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0a0f4a8ba224fe5bbdaed5df3d7f0dbc43fb2c833e588b35bc6ad6c2c37ca8da extends Twig_Template
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
        $__internal_74777806e20997c132e3168fa21fe681f9d30521b2bb6061cc1934780db25844 = $this->env->getExtension("native_profiler");
        $__internal_74777806e20997c132e3168fa21fe681f9d30521b2bb6061cc1934780db25844->enter($__internal_74777806e20997c132e3168fa21fe681f9d30521b2bb6061cc1934780db25844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_74777806e20997c132e3168fa21fe681f9d30521b2bb6061cc1934780db25844->leave($__internal_74777806e20997c132e3168fa21fe681f9d30521b2bb6061cc1934780db25844_prof);

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
