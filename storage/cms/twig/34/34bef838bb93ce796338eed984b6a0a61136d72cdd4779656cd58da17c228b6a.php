<?php

/* G:\xampp\htdocs\jdih/plugins/indikator/news/components/posts/default.htm */
class __TwigTemplate_bd1f51de33d3e96eb1c299de0b806900d6789f19d6c6a1afeffd059794096d0d extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "
<!-- <div class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    <div class=\"post-item\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array())) {
                echo "<div class=\"post-image\"><a href=\"/";
                echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\"></a></div>";
            }
            // line 7
            echo "
        <h2 class=\"post-title\"><a href=\"/";
            // line 8
            echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
        <p class=\"post-date\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "Y-m-d"), "html", null, true);
            echo "</p>

        ";
            // line 11
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array())) {
                // line 12
                echo "        <div class=\"post-introductory\">";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array());
                echo "</div>
        ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 13
$context["post"], "content", array())) {
                // line 14
                echo "        <div class=\"post-content\">";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array());
                echo "</div>
        ";
            }
            // line 16
            echo "    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <span class=\"post-nodata\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div> -->

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "        <article class=\"post clearfix\">
            <h3 class=\"title-post\"><a href=\"";
            // line 24
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
            echo "\">
                ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "
                </a></h3>                          
            <ul class=\"meta-post clearfix\">
                <li class=\"time\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "Y-m-d"), "html", null, true);
            echo "
                </li>
                <!-- <li class=\"author\">
                    <a href=\"#\">Admin</a>
                </li>
                <li class=\"categories\"> 
                    <a href=\"#\">Business</a>
                </li>
                <li class=\"vote\">
                    <a href=\"#\">No comment</a>
                </li> -->
            </ul><!-- /.meta-post -->
            ";
            // line 41
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array())) {
                // line 42
                echo "            <div class=\"featured-post\" style=\"width: 870px; height: 367px;\">
                <a href=\"";
                // line 43
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
                echo "\"><img src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\" style=\"width: 100%;\"></a>
            </div><!-- /.feature-post -->
            ";
            }
            // line 46
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array())) {
                // line 47
                echo "            <div class=\"content-post\">
                <div align=\"justify\">                              
                    ";
                // line 49
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array());
                echo "
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"";
                // line 51
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
                echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 55
$context["post"], "content", array())) {
                // line 56
                echo "            <div class=\"content-post\">
                <div align=\"justify\">                              
                    ";
                // line 58
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array());
                echo "
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"";
                // line 60
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
                echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            ";
            }
            // line 65
            echo "        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "    <span class=\"post-nodata\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
";
        // line 70
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "render", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 70,  197 => 69,  188 => 67,  182 => 65,  174 => 60,  169 => 58,  165 => 56,  163 => 55,  156 => 51,  151 => 49,  147 => 47,  144 => 46,  134 => 43,  131 => 42,  129 => 41,  114 => 29,  107 => 25,  103 => 24,  100 => 23,  95 => 22,  91 => 20,  82 => 18,  76 => 16,  70 => 14,  68 => 13,  63 => 12,  61 => 11,  56 => 9,  48 => 8,  45 => 7,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<!-- <div class=\"post-list\">
    {% for post in posts %}
    <div class=\"post-item\">
        {% if post.image %}<div class=\"post-image\"><a href=\"/{{ postPage }}/{{ post.slug }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></a></div>{% endif %}

        <h2 class=\"post-title\"><a href=\"/{{ postPage }}/{{ post.slug }}\">{{ post.title }}</a></h2>
        <p class=\"post-date\">{{ post.published_at|date('Y-m-d') }}</p>

        {% if post.introductory %}
        <div class=\"post-introductory\">{{ post.introductory|raw }}</div>
        {% elseif post.content %}
        <div class=\"post-content\">{{ post.content|raw }}</div>
        {% endif %}
    </div>
    {% else %}
    <span class=\"post-nodata\">{{ noPostsMessage }}</span>
    {% endfor %}
</div> -->

    {% for post in posts %}
        <article class=\"post clearfix\">
            <h3 class=\"title-post\"><a href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">
                {{ post.title }}
                </a></h3>                          
            <ul class=\"meta-post clearfix\">
                <li class=\"time\">
                    {{ post.published_at|date('Y-m-d') }}
                </li>
                <!-- <li class=\"author\">
                    <a href=\"#\">Admin</a>
                </li>
                <li class=\"categories\"> 
                    <a href=\"#\">Business</a>
                </li>
                <li class=\"vote\">
                    <a href=\"#\">No comment</a>
                </li> -->
            </ul><!-- /.meta-post -->
            {% if post.image %}
            <div class=\"featured-post\" style=\"width: 870px; height: 367px;\">
                <a href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\" style=\"width: 100%;\"></a>
            </div><!-- /.feature-post -->
            {% endif %}
            {% if post.introductory %}
            <div class=\"content-post\">
                <div align=\"justify\">                              
                    {{ post.introductory|raw }}
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            {% elseif post.content %}
            <div class=\"content-post\">
                <div align=\"justify\">                              
                    {{ post.introductory|raw }}
                    <div class=\"more-link\">
                        <a class=\"effect-button\" href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!-- /.content-post -->
            {% endif %}
        </article>
    {% else %}
    <span class=\"post-nodata\">{{ noPostsMessage }}</span>
    {% endfor %}

{{ posts.render|raw }}
", "G:\\xampp\\htdocs\\jdih/plugins/indikator/news/components/posts/default.htm", "");
    }
}
