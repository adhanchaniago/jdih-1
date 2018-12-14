<?php

/* G:\xampp\htdocs\jdih/themes/jdih/partials/visitor.htm */
class __TwigTemplate_98246dfc05a4fa5897365aaf7c10d964d6b9db1e006f2e2df53f9257dd6edc11 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("realVisitor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/visitor.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'realVisitor' %}", "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/visitor.htm", "");
    }
}
