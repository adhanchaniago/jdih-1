<?php

/* G:\xampp\htdocs\jdih/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_4b5acfb20e82e017804e5ae6d97a4cbde87a8242d11f95c743c4321c3aedc284 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "isHidden", array())) {
                // line 2
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 3
                    echo "        <li class=\"menu-item-has-children\">
            ";
                    // line 4
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", array())) {
                        // line 5
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "isExternal", array())) ? ("target=\"_blank\"") : (""));
                        echo ">
                    ";
                        // line 6
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                        echo "
                </a>
            ";
                    } else {
                        // line 9
                        echo "                <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 11
                    echo "
            ";
                    // line 12
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                        // line 13
                        echo "                <ul class=\"submenu\">";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", array())                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        echo "</ul>
            ";
                    }
                    // line 15
                    echo "        </li>
    ";
                } else {
                    // line 17
                    echo "        <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("home") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
                    echo "\">
            ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", array())) {
                        // line 19
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "isExternal", array())) ? ("target=\"_blank\"") : (""));
                        echo ">
                    ";
                        // line 20
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                        echo "
                </a>
            ";
                    } else {
                        // line 23
                        echo "                <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 25
                    echo "
            ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                        // line 27
                        echo "                <ul class=\"submenu\">";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", array())                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        echo "</ul>
            ";
                    }
                    // line 29
                    echo "        </li>
    ";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  108 => 27,  106 => 26,  103 => 25,  97 => 23,  91 => 20,  84 => 19,  82 => 18,  73 => 17,  69 => 15,  60 => 13,  58 => 12,  55 => 11,  49 => 9,  43 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in items if not item.viewBag.isHidden %}
    {% if item.items %}
        <li class=\"menu-item-has-children\">
            {% if item.url %}
                <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                    {{ item.title }}
                </a>
            {% else %}
                <span>{{ item.title }}</span>
            {% endif %}

            {% if item.items %}
                <ul class=\"submenu\">{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
            {% endif %}
        </li>
    {% else %}
        <li class=\"{{ item.isActive ? 'home' : '' }} {{ item.isChildActive ? 'child-active' : '' }} {{ item.viewBag.cssClass }}\">
            {% if item.url %}
                <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                    {{ item.title }}
                </a>
            {% else %}
                <span>{{ item.title }}</span>
            {% endif %}

            {% if item.items %}
                <ul class=\"submenu\">{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
            {% endif %}
        </li>
    {% endif %}
{% endfor %}", "G:\\xampp\\htdocs\\jdih/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
}
