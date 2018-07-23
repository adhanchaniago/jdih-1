<?php

/* G:\xampp\htdocs\jdih/plugins/redmarlin/faq/components/faqask/default.htm */
class __TwigTemplate_5228cf1ec822563f4a11e4d9e4c9202d245b5d72f709e0c1ae569f64e52785d0 extends Twig_Template
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
        echo "\t";
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onPost")));
        echo "
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 2
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 3
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</div>
        ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 5
        echo "        <textarea name=\"question\" rows=\"3\" placeholder=\"Question\"></textarea> 
        <input type=\"text\" name=\"email\" placeholder=\"Email\"/>
        <input type=\"submit\" value=\"Send\" name=\"submit\"/>
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/redmarlin/faq/components/faqask/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 5,  27 => 3,  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t{{ form_open({ request: 'onPost' }) }}
        {% flash %}
            <div class=\"alert alert-{{ type }}\">{{ message }}</div>
        {% endflash %}
        <textarea name=\"question\" rows=\"3\" placeholder=\"Question\"></textarea> 
        <input type=\"text\" name=\"email\" placeholder=\"Email\"/>
        <input type=\"submit\" value=\"Send\" name=\"submit\"/>
    {{ form_close() }}

", "G:\\xampp\\htdocs\\jdih/plugins/redmarlin/faq/components/faqask/default.htm", "");
    }
}
