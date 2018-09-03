<?php

/* G:\xampp\htdocs\jdih/themes/jdih/layouts/fallback.htm */
class __TwigTemplate_f48904b98eadbc3f3d7e94975ba808495ad5478be7185dfb69259f9cf83fabb5 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "G:\\xampp\\htdocs\\jdih/themes/jdih/layouts/fallback.htm", "");
    }
}
