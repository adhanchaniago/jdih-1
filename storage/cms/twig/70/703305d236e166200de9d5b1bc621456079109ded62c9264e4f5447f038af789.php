<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/berita/listing.htm */
class __TwigTemplate_c514d5388cd5139c8354cc5c8b2a6fe0223ad295a4b25287972d6fe763ed8ce7 extends Twig_Template
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
        echo "<!-- Page title -->
    <div class=\"page-title parallax parallax1\">
        <div class=\"section-overlay\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">                    
                    <div class=\"page-title-heading\">
                        <h1 class=\"title\">Berita</h1>
                    </div><!-- /.page-title-captions -->
                    <div class=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"";
        // line 13
        echo url("/");
        echo "\">Beranda</a></li>
                            <li> - </li>                            
                            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/listing");
        echo "\">Berita</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "                    </div><!-- /.post-wrap --> 

                    <div class=\"blog-pagination\">
                        ";
        // line 33
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["all"] ?? null), "render", array());
        echo "<!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->                  
                </div><!-- /.col-lg-9 -->    
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Recent Post</h5>
                            <ul class=\"popular-news clearfix\">
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["all"] ?? null), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 42
            echo "                                    <li>
                                        <div class=\"text\">
                                            <h6>
                                                <a href=\"";
            // line 45
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("judul" => twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "slug", array())));
            echo "\">
                                                ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "judul", array()), "html", null, true);
            echo "
                                                </a>
                                            </h6>  
                                            <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "tanggal", array()), "F j, Y"), "html", null, true);
            echo "</p>                                     
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->
                        <!-- <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Category</h5>
                            <ul>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Finanve</a></li>
                                <li><a href=\"#\">Insurance</a></li>
                                <li><a href=\"#\">Leasing</a></li>
                            </ul>
                        </div> --><!-- /.widget-categories -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/listing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 53,  94 => 49,  88 => 46,  84 => 45,  79 => 42,  75 => 41,  64 => 33,  59 => 30,  55 => 29,  38 => 15,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Page title -->
    <div class=\"page-title parallax parallax1\">
        <div class=\"section-overlay\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">                    
                    <div class=\"page-title-heading\">
                        <h1 class=\"title\">Berita</h1>
                    </div><!-- /.page-title-captions -->
                    <div class=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"{{ url('/') }}\">Beranda</a></li>
                            <li> - </li>                            
                            <li><a href=\"{{ 'berita/listing'|page }}\">Berita</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        {% component 'newsPosts' %}
                    </div><!-- /.post-wrap --> 

                    <div class=\"blog-pagination\">
                        {{ all.render|raw }}<!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->                  
                </div><!-- /.col-lg-9 -->    
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Recent Post</h5>
                            <ul class=\"popular-news clearfix\">
                                {% for list in all|slice(0,5) %}
                                    <li>
                                        <div class=\"text\">
                                            <h6>
                                                <a href=\"{{ 'berita/detail'|page({ judul: list.slug }) }}\">
                                                {{ list.judul }}
                                                </a>
                                            </h6>  
                                            <p>{{ list.tanggal|date('F j, Y') }}</p>                                     
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->
                        <!-- <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Category</h5>
                            <ul>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Finanve</a></li>
                                <li><a href=\"#\">Insurance</a></li>
                                <li><a href=\"#\">Leasing</a></li>
                            </ul>
                        </div> --><!-- /.widget-categories -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/listing.htm", "");
    }
}
