<?php

/* G:\xampp\htdocs\jdih/plugins/martin/ssbuttons/components/ssbuttonsnb/default.htm */
class __TwigTemplate_a3f645d73d535b7abdb5883124187d37dcd6e259f3e437ca527ee652e8211cf1 extends Twig_Template
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
        echo "<div class=\"SocialSharingButtons\">
    <div class=\"SocialSharingButtons\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "buttons_order"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => $context["button"]), "method")) {
                // line 5
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method")) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[$context["button"]] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["href"] ?? null) : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method")) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[$context["button"]] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["title"] ?? null) : null), "html", null, true);
                echo "\" target=\"_blank\" class=\"";
                echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method")) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[$context["button"]] ?? null) : null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["class"] ?? null) : null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["ssbuttonsnb"] ?? null) : null), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method")) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[$context["button"]] ?? null) : null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["icon"] ?? null) : null), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "js"), "method")) {
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
        return array (  59 => 12,  57 => 11,  52 => 8,  46 => 7,  34 => 5,  31 => 4,  27 => 3,  23 => 1,);
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
