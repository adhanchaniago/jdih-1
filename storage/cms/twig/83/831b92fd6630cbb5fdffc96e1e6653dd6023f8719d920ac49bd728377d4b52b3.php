<?php

/* G:\xampp\htdocs\jdih/themes/jdih/pages/profil/struktur_organisasi.htm */
class __TwigTemplate_ed21b5b62c369a278ca77079480361be0f31b541165e422087ed903fb66b671e extends Twig_Template
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
                                <h3 class=\"title-post\" align=\"center\">STRUKTUR ORGANISASI JDIH LAPAN</h3>
                                <div align=\"justify\">                              
                                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["profil"] ?? null), "struktur", array()), "path", array()), "html", null, true);
        echo "\"> 
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
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profil/sejarah");
        echo "\">Sejarah Singkat</a></li>
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profil/visimisi");
        echo "\">Visi Misi</a></li>
                                <li><a href=\"#\">Struktur Organisasi</a></li>
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
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/profil/struktur_organisasi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  45 => 22,  30 => 10,  19 => 1,);
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
                                <h3 class=\"title-post\" align=\"center\">STRUKTUR ORGANISASI JDIH LAPAN</h3>
                                <div align=\"justify\">                              
                                    <img src=\"{{ profil.struktur.path }}\"> 
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
                                <li><a href=\"{{ 'profil/visimisi'|page }}\">Visi Misi</a></li>
                                <li><a href=\"#\">Struktur Organisasi</a></li>
                            </ul>
                        </div><!-- /.widget-categories --><!-- /.widget-tag -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->             
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>", "G:\\xampp\\htdocs\\jdih/themes/jdih/pages/profil/struktur_organisasi.htm", "");
    }
}
