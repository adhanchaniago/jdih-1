<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/profil/visimisi.htm */
class __TwigTemplate_9ff5e03107addbde1e361fae4a9947ddcbd07d2fc5f82d56adbd8f85969fc408 extends Twig_Template
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
        echo "<section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        <article class=\"post clearfix\">
                            <div class=\"content-post\">
                                <h3 class=\"title-post\" align=\"center\">VISI</h3>
                                <div class=\"text\">
                                    <div align=\"center\">                              
                                        ";
        // line 11
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["profil"] ?? null), "visi", array());
        echo "
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article> 
                        <article class=\"post clearfix\">
                            <div class=\"content-post\">
                                <h3 class=\"title-post\" align=\"center\">MISI</h3>
                                <div class=\"text\">
                                    <div align=\"justify\">                              
                                        ";
        // line 21
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["profil"] ?? null), "misi", array());
        echo "
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article> 
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Profil</h5>
                            <ul>
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profil/sejarah");
        echo "\">Sejarah Singkat</a></li>
                                <li><a href=\"#\">Visi Misi</a></li>
                                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profil/struktur_organisasi");
        echo "\">Struktur Organisasi</a></li>
                            </ul>
                        </div><!-- /.widget-categories --><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/profil/visimisi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 36,  60 => 34,  44 => 21,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"main-content blog-posts blog-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"post-wrap\">
                        <article class=\"post clearfix\">
                            <div class=\"content-post\">
                                <h3 class=\"title-post\" align=\"center\">VISI</h3>
                                <div class=\"text\">
                                    <div align=\"center\">                              
                                        {{ profil.visi|raw}}
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article> 
                        <article class=\"post clearfix\">
                            <div class=\"content-post\">
                                <h3 class=\"title-post\" align=\"center\">MISI</h3>
                                <div class=\"text\">
                                    <div align=\"justify\">                              
                                        {{ profil.misi|raw}}
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article> 
                    </div><!-- /.post-wrap -->                                  
                </div><!-- /.col-lg-9 -->  

                <div class=\"col-lg-3\">
                    <div class=\"sidebar\">
                        <div class=\"widget widget_categories\">
                            <h5 class=\"widget-title\">Profil</h5>
                            <ul>
                                <li><a href=\"{{ 'profil/sejarah'|page }}\">Sejarah Singkat</a></li>
                                <li><a href=\"#\">Visi Misi</a></li>
                                <li><a href=\"{{ 'profil/struktur_organisasi'|page }}\">Struktur Organisasi</a></li>
                            </ul>
                        </div><!-- /.widget-categories --><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/profil/visimisi.htm", "");
    }
}
