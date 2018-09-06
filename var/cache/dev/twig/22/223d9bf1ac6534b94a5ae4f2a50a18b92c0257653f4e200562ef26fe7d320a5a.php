<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_85a1d897c4fedb0d3f8d423fe574d2b60c6ca04a2e2c52909483115ab4339a5a extends Twig_Template
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
        $__internal_1f6a817e827dcfeedbf2d5b878702531e18ffe510a47ba3eef94f6399c3d280d = $this->env->getExtension("native_profiler");
        $__internal_1f6a817e827dcfeedbf2d5b878702531e18ffe510a47ba3eef94f6399c3d280d->enter($__internal_1f6a817e827dcfeedbf2d5b878702531e18ffe510a47ba3eef94f6399c3d280d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1f6a817e827dcfeedbf2d5b878702531e18ffe510a47ba3eef94f6399c3d280d->leave($__internal_1f6a817e827dcfeedbf2d5b878702531e18ffe510a47ba3eef94f6399c3d280d_prof);

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
