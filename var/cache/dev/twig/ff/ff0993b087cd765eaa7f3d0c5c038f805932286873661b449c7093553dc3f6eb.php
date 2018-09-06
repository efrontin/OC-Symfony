<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_622b8dfb8a93352347c05a4a5fef18cce40e68373de5c914a8ca7e9d58acf1fe extends Twig_Template
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
        $__internal_f1311dcab98df14e987fc767c8bddd2b35662eac55604ff58e36c9262e233df9 = $this->env->getExtension("native_profiler");
        $__internal_f1311dcab98df14e987fc767c8bddd2b35662eac55604ff58e36c9262e233df9->enter($__internal_f1311dcab98df14e987fc767c8bddd2b35662eac55604ff58e36c9262e233df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f1311dcab98df14e987fc767c8bddd2b35662eac55604ff58e36c9262e233df9->leave($__internal_f1311dcab98df14e987fc767c8bddd2b35662eac55604ff58e36c9262e233df9_prof);

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
