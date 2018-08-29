<?php

/* G:\xampp\htdocs\jdih/plugins/martin/ssbuttons/components/ssbuttonsnb/default.htm */
class __TwigTemplate_55dc58b0af543cd493aa209451379a82f9922cb60e23567f419e58e90998881d extends Twig_Template
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
        echo "<div class=\"SocialSharingButtons\">
    <div class=\"SocialSharingButtons\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_order"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => $context["button"]), "method")) {
                // line 5
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "href", array(), "array"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "title", array(), "array"), "html", null, true);
                echo "\" target=\"_blank\" class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "class", array(), "array"), "ssbuttonsnb", array(), "array"), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "icon", array(), "array"), "html", null, true);
                echo "\"></i></a>
            ";
            }
            // line 7
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
</div>

";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "js"), "method")) {
            // line 12
            echo "    <script src=\"/plugins/martin/ssbuttons/assets/js/ssbuttons.js\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/martin/ssbuttons/components/ssbuttonsnb/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  53 => 11,  48 => 8,  42 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"SocialSharingButtons\">
    <div class=\"SocialSharingButtons\">
        {% for button in __SELF__.property('buttons_order') %}
            {% if(__SELF__.property(button)) %}
                <a href=\"{{ __SELF__.property('buttons_parameters')[button]['href'] }}\" title=\"{{ __SELF__.property('buttons_parameters')[button]['title'] }}\" target=\"_blank\" class=\"{{ __SELF__.property('buttons_parameters')[button]['class']['ssbuttonsnb'] }}\"><i class=\"{{ __SELF__.property('buttons_parameters')[button]['icon'] }}\"></i></a>
            {% endif %}
        {% endfor %}
    </div>
</div>

{% if __SELF__.property('js') %}
    <script src=\"/plugins/martin/ssbuttons/assets/js/ssbuttons.js\"></script>
{% endif %}", "G:\\xampp\\htdocs\\jdih/plugins/martin/ssbuttons/components/ssbuttonsnb/default.htm", "");
    }
}
