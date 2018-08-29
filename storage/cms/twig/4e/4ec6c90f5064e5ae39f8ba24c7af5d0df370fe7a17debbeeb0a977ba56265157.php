<?php

/* G:\xampp\htdocs\jdih/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_8392698966e19a004d37baf0e9e808493e29a60babe51bfd607f707e611b1d01 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), "isHidden", array())) {
                // line 2
                echo "    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 3
                    echo "        <li class=\"menu-item-has-children\">
            ";
                    // line 4
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array())) {
                        // line 5
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), "isExternal", array())) ? ("target=\"_blank\"") : (""));
                        echo ">
                    ";
                        // line 6
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                        echo "
                </a>
            ";
                    } else {
                        // line 9
                        echo "                <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 11
                    echo "
            ";
                    // line 12
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                        // line 13
                        echo "                <ul class=\"submenu\">";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())                        ;
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
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("home") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
                    echo "\">
            ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array())) {
                        // line 19
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), "isExternal", array())) ? ("target=\"_blank\"") : (""));
                        echo ">
                    ";
                        // line 20
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                        echo "
                </a>
            ";
                    } else {
                        // line 23
                        echo "                <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 25
                    echo "
            ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                        // line 27
                        echo "                <ul>";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())                        ;
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
        return array (  113 => 29,  104 => 27,  102 => 26,  99 => 25,  93 => 23,  87 => 20,  80 => 19,  78 => 18,  69 => 17,  65 => 15,  56 => 13,  54 => 12,  51 => 11,  45 => 9,  39 => 6,  32 => 5,  30 => 4,  27 => 3,  24 => 2,  19 => 1,);
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
                <ul>{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
            {% endif %}
        </li>
    {% endif %}
{% endfor %}", "G:\\xampp\\htdocs\\jdih/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
}
