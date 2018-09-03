<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/berita/detail.htm */
class __TwigTemplate_f22c1bd2a9cce831d428191216f9ac5e3f5060a52c6bf913dabea3ecb6a2feaf extends Twig_Template
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
                            <li> - </li>
                            <li><a href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        ";
        // line 31
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " 
                        <div id=\"disqus_thread\"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        
                        var disqus_config = function () {
                        this.page.url = \"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("");
        echo "\";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = \"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("");
        echo "\"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://jdih-2.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
                                           
                        
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Berita Terkini</h5>
                            <ul class=\"popular-news clearfix\">
                            \t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["all"] ?? null), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 63
            echo "                            \t\t<li>
\t                                    <div class=\"text\">
\t                                        <h6>
\t                                            <a href=\"";
            // line 66
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("berita/detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
            echo "\">
\t                                            ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "
\t                                            </a>
\t                                        </h6>  
\t                                        <p>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "F j, Y"), "html", null, true);
            echo "</p>                                     
\t                                    </div>
\t                                </li>
                            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news --><!-- 
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Kategori</h5>
                            <ul>
                                <li><a href=\"#\">Undang-Undang</a></li>
                                <li><a href=\"#\">Peraturan Pemerintah</a></li>
                                <li><a href=\"#\">Peraturan Presiden</a></li>
                                <li><a href=\"#\">Keputusan Presiden</a></li>
                            </ul>
                        </div> --><!-- /.widget-categories -->
 
                        <!-- <div class=\"widget widget_tag\">
                            <h5 class=\"widget-title\">Tags</h5>
                            <div class=\"tag-list\">
                                <a href=\"#\">Business</a>
                                <a href=\"#\">Consulting</a>
                                <a href=\"#\">Finanve</a>
                                <a href=\"#\">Insurance</a>
                                <a href=\"#\">Management</a>
                                <a href=\"#\">Portfolio</a>    
                            </div>
                        </div> --><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 74,  121 => 70,  115 => 67,  111 => 66,  106 => 63,  102 => 62,  78 => 41,  74 => 40,  60 => 31,  43 => 17,  38 => 15,  33 => 13,  19 => 1,);
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
                            <li> - </li>
                            <li><a href=\"#\">{{ post.title }}</a></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        {% component 'newsPost' %} 
                        <div id=\"disqus_thread\"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        
                        var disqus_config = function () {
                        this.page.url = \"{{ ''| page }}\";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = \"{{ ''| page }}\"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://jdih-2.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
                                           
                        
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget-recent-news\">
                            <h5 class=\"widget-title\">Berita Terkini</h5>
                            <ul class=\"popular-news clearfix\">
                            \t{% for post in all|slice(0,5) %}
                            \t\t<li>
\t                                    <div class=\"text\">
\t                                        <h6>
\t                                            <a href=\"{{ 'berita/detail'|page({ slug: post.slug }) }}\">
\t                                            {{ post.title }}
\t                                            </a>
\t                                        </h6>  
\t                                        <p>{{ post.published_at|date('F j, Y') }}</p>                                     
\t                                    </div>
\t                                </li>
                            \t{% endfor %}
                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news --><!-- 
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Kategori</h5>
                            <ul>
                                <li><a href=\"#\">Undang-Undang</a></li>
                                <li><a href=\"#\">Peraturan Pemerintah</a></li>
                                <li><a href=\"#\">Peraturan Presiden</a></li>
                                <li><a href=\"#\">Keputusan Presiden</a></li>
                            </ul>
                        </div> --><!-- /.widget-categories -->
 
                        <!-- <div class=\"widget widget_tag\">
                            <h5 class=\"widget-title\">Tags</h5>
                            <div class=\"tag-list\">
                                <a href=\"#\">Business</a>
                                <a href=\"#\">Consulting</a>
                                <a href=\"#\">Finanve</a>
                                <a href=\"#\">Insurance</a>
                                <a href=\"#\">Management</a>
                                <a href=\"#\">Portfolio</a>    
                            </div>
                        </div> --><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/berita/detail.htm", "");
    }
}
