<?php

/* G:\xampp\htdocs\jdih/themes/jdih/partials/header.htm */
class __TwigTemplate_e52938aa7af240cbd8f7328555c6daa0a3814d259aa20dded6cdc5c8bf8b23ce extends Twig_Template
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
        echo "<!-- Preloader -->
    <section class=\"loading-overlay\">
        <div class=\"Loading-Page\">
            <h2 class=\"loader\">Loading</h2>
        </div>
    </section> 

    <!-- Boxed -->
    <div class=\"boxed\">

    <!-- Header -->            
    <header id=\"header\" class=\"header clearfix\">
        <div class=\"container\">
            <div class=\"row\">                 
                <div class=\"col-lg-4\">
                    <div id=\"logo\" class=\"logo float-left\">
                        <a href=\"";
        // line 17
        echo url("/");
        echo "\" rel=\"home\">
                            <img src=\"";
        // line 18
        echo url("/");
        echo "/themes/jdih/assets/listany/images/logo jdih.png\" alt=\"image\" style=\"width: 350px; height: 55px;\">
                        </a>
                    </div><!-- /.logo -->
                    <div class=\"btn-menu\">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-8\">
                    <div class=\"nav-wrap\">                            
                        <nav id=\"mainnav\" class=\"mainnav float-left\">
                        ";
        // line 28
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 29
        echo "                            
                        </nav><!-- /.mainnav -->  
                        <div id=\"logo\" class=\"logo float-right\">
\t                        <a href=\"";
        // line 32
        echo url("/");
        echo "\" rel=\"home\">
\t                            <img src=\"";
        // line 33
        echo url("/");
        echo "/themes/jdih/assets/listany/images/logo-lapan.png\" alt=\"image\" style=\"width: 72px; height: 52px;\">
\t                        </a>
\t                    </div>
                        <!-- <div class=\"button-addlist float-right\">
                            <button type=\"button\" class=\"flat-button\" onclick=\"location.href='page-addlisting.html'\">Add Listing</button>
                         </div> --> 
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-lg-8 -->                                    
            </div><!-- /.row -->
        </div>
    </header><!-- /.header -->";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 33,  63 => 32,  58 => 29,  54 => 28,  41 => 18,  37 => 17,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Preloader -->
    <section class=\"loading-overlay\">
        <div class=\"Loading-Page\">
            <h2 class=\"loader\">Loading</h2>
        </div>
    </section> 

    <!-- Boxed -->
    <div class=\"boxed\">

    <!-- Header -->            
    <header id=\"header\" class=\"header clearfix\">
        <div class=\"container\">
            <div class=\"row\">                 
                <div class=\"col-lg-4\">
                    <div id=\"logo\" class=\"logo float-left\">
                        <a href=\"{{ url('/') }}\" rel=\"home\">
                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/logo jdih.png\" alt=\"image\" style=\"width: 350px; height: 55px;\">
                        </a>
                    </div><!-- /.logo -->
                    <div class=\"btn-menu\">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-8\">
                    <div class=\"nav-wrap\">                            
                        <nav id=\"mainnav\" class=\"mainnav float-left\">
                        {% component 'staticMenu' %}
                            
                        </nav><!-- /.mainnav -->  
                        <div id=\"logo\" class=\"logo float-right\">
\t                        <a href=\"{{ url('/') }}\" rel=\"home\">
\t                            <img src=\"{{ url('/') }}/themes/jdih/assets/listany/images/logo-lapan.png\" alt=\"image\" style=\"width: 72px; height: 52px;\">
\t                        </a>
\t                    </div>
                        <!-- <div class=\"button-addlist float-right\">
                            <button type=\"button\" class=\"flat-button\" onclick=\"location.href='page-addlisting.html'\">Add Listing</button>
                         </div> --> 
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-lg-8 -->                                    
            </div><!-- /.row -->
        </div>
    </header><!-- /.header -->", "G:\\xampp\\htdocs\\jdih/themes/jdih/partials/header.htm", "");
    }
}
