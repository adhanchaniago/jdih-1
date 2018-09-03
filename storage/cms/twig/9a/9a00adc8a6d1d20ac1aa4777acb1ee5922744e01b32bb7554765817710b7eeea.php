<?php

/* G:\xampp\htdocs\jdih/themes/jdih/partials/visitor.htm */
class __TwigTemplate_1e3a1f70b301c0b7939c30ae493deef65fd8941c4c5168ef841e3364d80f8eb2 extends Twig_Template
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
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'realVisitor' %}", "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/visitor.htm", "");
    }
}
