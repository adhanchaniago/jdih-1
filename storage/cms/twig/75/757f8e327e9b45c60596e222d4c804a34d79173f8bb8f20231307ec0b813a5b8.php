<?php

/* G:\xampp\htdocs\jdih/themes/jdih/layouts/default.htm */
class __TwigTemplate_d8d85ef4327f44eda0411b8cf1ec45270eaf5ff6b376b2f901fcfb31ab6aa15c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

<!-- my edit --->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Merriweather\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Acme\" />
\t
<!-- end my edit -->\t


\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/stylesheets/bootstrap.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/stylesheets/responsive.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/stylesheets/style.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/stylesheets/animate.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/css/layers.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/css/settings.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css\">
\t<!-- <link href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/scroller/1.5.1/css/scroller.bootstrap.min.css\" rel=\"stylesheet\"> -->

\t<!-- Favicon and touch icons  -->
    <link href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/icon/apple-touch-icon-48-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\" sizes=\"48x48\">
    <link href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/icon/apple-touch-icon-32-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/icon/favicon.png");
        echo "\" rel=\"shortcut icon\">

\t<link rel=\"shortcut icon\" href=\"https://lapan.go.id/favicon.ico\" type=\"image/x-icon\">

\t<!-- ----------------------------------------------------------------------------------------- -->
\t
\t<script src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/jquery.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/app.js");
        echo "\"></script>
    <script src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/tether.min.js");
        echo "\"></script>
    <script src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/bootstrap.min.js");
        echo "\"></script> 
    
    <script src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/jquery.easing.js");
        echo "\"></script>    
    <script src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/jquery-waypoints.js");
        echo "\"></script> 
    <script src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/jquery-countTo.js");
        echo "\"></script>  
    <script src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/owl.carousel.js");
        echo "\"></script>
    <script src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/jquery.cookie.js");
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js\"></script>
    <script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/parallax.js");
        echo "\"></script>
    <!-- <script src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/bootstrap-slider.min.js");
        echo "\"></script> -->
    <script src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/smoothscroll.js");
        echo "\"></script>   
    <script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js)\"></script>
    <script src=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js\"></script>
    <!-- <script src=\"https://cdn.datatables.net/scroller/1.5.1/js/dataTables.scroller.min.js\"></script> -->
    <script src=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/javascript/main.js");
        echo "\"></script>
    

    <!-- Revolution Slider -->
    <script src=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/slider.js");
        echo "\"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script src=\"";
        // line 62
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.actions.min.js");
        echo "\"></script>
    <script src=\"";
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 64
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.kenburn.min.js");
        echo "\"></script>
    <script src=\"";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.layeranimation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.migration.min.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.navigation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.parallax.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.slideanims.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.video.min.js");
        echo "\"></script>
\t
    <!-- ";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        echo " -->
    
\t<title>JDIH LAPAN</title>
</head>

  \t
  \t<body class=\"header_sticky\">
    \t
\t    \t";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "\t    \t";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 82
        echo "\t\t    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleTracker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 83
        echo "\t\t
\t</body>
\t\t\t<!--footer-->
\t\t    ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "    
        ";
        // line 88
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 89
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo "  

    

</html>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/themes/jdih/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 89,  230 => 88,  227 => 87,  223 => 86,  218 => 83,  213 => 82,  210 => 81,  206 => 80,  194 => 72,  189 => 70,  185 => 69,  181 => 68,  177 => 67,  173 => 66,  169 => 65,  165 => 64,  161 => 63,  157 => 62,  151 => 59,  147 => 58,  143 => 57,  136 => 53,  127 => 47,  123 => 46,  119 => 45,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  72 => 28,  68 => 27,  64 => 26,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

<!-- my edit --->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Merriweather\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Acme\" />
\t
<!-- end my edit -->\t


\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/stylesheets/bootstrap.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/stylesheets/responsive.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/stylesheets/style.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/stylesheets/animate.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/revolution/css/layers.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/revolution/css/settings.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css\">
\t<!-- <link href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/scroller/1.5.1/css/scroller.bootstrap.min.css\" rel=\"stylesheet\"> -->

\t<!-- Favicon and touch icons  -->
    <link href=\"{{ 'assets/listany/icon/apple-touch-icon-48-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\" sizes=\"48x48\">
    <link href=\"{{ 'assets/listany/icon/apple-touch-icon-32-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ 'assets/listany/icon/favicon.png'|theme }}\" rel=\"shortcut icon\">

\t<link rel=\"shortcut icon\" href=\"https://lapan.go.id/favicon.ico\" type=\"image/x-icon\">

\t<!-- ----------------------------------------------------------------------------------------- -->
\t
\t<script src=\"{{ 'assets/listany/javascript/jquery.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/listany/javascript/app.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/tether.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/bootstrap.min.js'|theme }}\"></script> 
    
    <script src=\"{{ 'assets/listany/javascript/jquery.easing.js'|theme }}\"></script>    
    <script src=\"{{ 'assets/listany/javascript/jquery-waypoints.js'|theme }}\"></script> 
    <script src=\"{{ 'assets/listany/javascript/jquery-countTo.js'|theme }}\"></script>  
    <script src=\"{{ 'assets/listany/javascript/owl.carousel.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/jquery.cookie.js'|theme }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js\"></script>
    <script src=\"{{ 'assets/listany/javascript/parallax.js'|theme }}\"></script>
    <!-- <script src=\"{{ 'assets/listany/javascript/bootstrap-slider.min.js'|theme }}\"></script> -->
    <script src=\"{{ 'assets/listany/javascript/smoothscroll.js'|theme }}\"></script>   
    <script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js)\"></script>
    <script src=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js\"></script>
    <!-- <script src=\"https://cdn.datatables.net/scroller/1.5.1/js/dataTables.scroller.min.js\"></script> -->
    <script src=\"{{ 'assets/listany/javascript/main.js'|theme }}\"></script>
    

    <!-- Revolution Slider -->
    <script src=\"{{ 'assets/listany/revolution/js/jquery.themepunch.tools.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/jquery.themepunch.revolution.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/slider.js'|theme }}\"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.actions.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.carousel.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.kenburn.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.layeranimation.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.migration.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.navigation.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.parallax.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.slideanims.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/revolution/js/extensions/revolution.extension.video.min.js'|theme }}\"></script>
\t
    <!-- {% styles %} -->
    
\t<title>JDIH LAPAN</title>
</head>

  \t
  \t<body class=\"header_sticky\">
    \t
\t    \t{% partial 'header' %}
\t    \t{% page %}
\t\t    {% component 'googleTracker' %}
\t\t
\t</body>
\t\t\t<!--footer-->
\t\t    {% partial 'footer' %}
    
        {% framework extras %}
        {% scripts %}  

    

</html>", "G:\\xampp\\htdocs\\jdih/themes/jdih/layouts/default.htm", "");
    }
}
