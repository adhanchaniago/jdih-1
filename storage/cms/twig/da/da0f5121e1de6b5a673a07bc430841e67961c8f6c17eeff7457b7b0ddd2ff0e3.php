<?php

/* G:\xampp\htdocs\jdih/themes/jdih/layouts/default.htm */
class __TwigTemplate_18eb5e60035c6ba160676df9750d95d74f1b75dc5da6424f1b8caca9c10c28f5 extends Twig_Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/stylesheets/bootstrap.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">
    ";
        // line 15
        $context['__placeholder_head_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('head', $context['__placeholder_head_default_contents']);
        unset($context['__placeholder_head_default_contents']);        // line 16
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/stylesheets/style.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/stylesheets/responsive.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/stylesheets/animate.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/css/layers.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/css/settings.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/stylesheets/dropzone.css");
        echo "\">

\t<!-- <link href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/scroller/1.5.1/css/scroller.bootstrap.min.css\" rel=\"stylesheet\"> -->

\t<!-- Favicon and touch icons  -->
    <link href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/icon/apple-touch-icon-48-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\" sizes=\"48x48\">
    <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/icon/apple-touch-icon-32-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/icon/favicon.png");
        echo "\" rel=\"shortcut icon\">

\t<link rel=\"shortcut icon\" href=\"https://lapan.go.id/favicon.ico\" type=\"image/x-icon\">
    <script src='https://www.google.com/recaptcha/api.js'></script>

\t<!-- ----------------------------------------------------------------------------------------- -->
\t
\t
\t
    <!-- ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        echo " -->
    
\t<title>JDIH LAPAN</title>
</head>

  \t
  \t<body class=\"header_sticky\">
    \t
\t    \t";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "\t    \t";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 50
        echo "\t\t    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleTracker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 51
        echo "\t\t
\t</body>
\t\t\t<!--footer-->
\t\t    ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "


    <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/app.js");
        echo "\"></script>
    <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/tether.min.js");
        echo "\"></script>
    <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/bootstrap.min.js");
        echo "\"></script> 
    
    <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/jquery.easing.js");
        echo "\"></script>    
    <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/jquery-waypoints.js");
        echo "\"></script> 
    <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/jquery-countTo.js");
        echo "\"></script>  
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/owl.carousel.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/jquery.cookie.js");
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/parallax.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/dropzone.js");
        echo "\"></script>
    <!-- <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/bootstrap-slider.min.js");
        echo "\"></script> -->
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/smoothscroll.js");
        echo "\"></script>   
    <script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js)\"></script>
    <script src=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js\"></script>
    <script src=\"https://cdn.datatables.net/plug-ins/1.10.19/pagination/input.js\"></script>
    <!-- <script src=\"https://cdn.datatables.net/scroller/1.5.1/js/dataTables.scroller.min.js\"></script> -->
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/javascript/main.js");
        echo "\"></script>
    

    <!-- Revolution Slider -->
    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/slider.js");
        echo "\"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.actions.min.js");
        echo "\"></script>
    <script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.kenburn.min.js");
        echo "\"></script>
    <script src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.layeranimation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.migration.min.js");
        echo "\"></script>
    <script src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.navigation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.parallax.min.js");
        echo "\"></script>
    <script src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.slideanims.min.js");
        echo "\"></script>
    <script src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/listany/revolution/js/extensions/revolution.extension.video.min.js");
        echo "\"></script>
    
    ";
        // line 98
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 99
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 100
        echo "    <script type=\"text/javascript\">
        // Setup - add a text input to each footer cell
        

        function filterGlobal () {
            \$('#example').DataTable().search(
                \$('#global_filter').val()
            ).draw();
        }
         
        function filterColumn ( i ) {
            \$('#example').DataTable().column( i ).search(
                \$('#col'+i+'_filter').val()
            ).draw();
        }

        function param(name) {
            var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results ? decodeURIComponent(results[1].replace(/\\+/g, '%20')) : null;
            // return (location.search.split(name + '=')[1] || '').split('&')[0];
        }

        \$(document).ready(function() {

            if('";
        // line 124
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "' == 'default'){
                \$('#col0_filter').val(param('jenis'));
            } else {
                \$('#col0_filter').val('";
        // line 127
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "');
            }

            \$('#col3_filter').val(param('tentang'));
            \$('#col1_filter').val(param('nomor'));
            \$('#col2_filter').val(param('tahun'));

            var table = \$('#example').DataTable( {
                
                'mark': true,
                \"order\": [[ 2, \"desc\" ]],
                // \"pagingType\": \"input\",
                \"dom\": 'tipr'
            } ).columns(3).search(
                \$('#col3_filter').val()
            ).columns(0).search(
                \$('#col0_filter').val()
            ).columns(1).search(
                \$('#col1_filter').val()
            ).columns(2).search(
                \$('#col2_filter').val()
            ).draw();

            \$('#example').on( 'page.dt', function () {
              \$('html, body').animate({
                  scrollTop: 50
              }, 'slow');
            } );

            \$('input.global_filter').on( 'keyup', function () {
                filterGlobal();
            } );
         
            \$('input.column_filter').on( 'keyup', function () {
                filterColumn( \$(this).parents('p').attr('data-column') );
            } );

            \$('select.dropdown_sort').on( 'change', function () {
                filterColumn( \$(this).parents('p').attr('data-column') );
            } );
        } );

        function viewAnswer(answer) {
            document.getElementById(\"jawaban\").innerHTML = answer;
            console.log(answer)
            // \$('#jawaban').val(answer);
        }

        \$('#exampleModalCenter').on('show.bs.modal', function (event) {
          var button = \$(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          console.log(recipient)
          var modal = \$(this)
          \$('#jawaban').html(recipient)
          modal.find('.modal-body textarea').val(recipient)

        })

        

        
    </script>


    

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
        return array (  303 => 127,  297 => 124,  271 => 100,  267 => 99,  252 => 98,  247 => 96,  243 => 95,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  223 => 90,  219 => 89,  215 => 88,  209 => 85,  205 => 84,  201 => 83,  194 => 79,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  167 => 67,  163 => 66,  159 => 65,  155 => 64,  151 => 63,  146 => 61,  142 => 60,  138 => 59,  134 => 58,  129 => 55,  125 => 54,  120 => 51,  115 => 50,  112 => 49,  108 => 48,  96 => 40,  84 => 31,  80 => 30,  76 => 29,  66 => 22,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  44 => 16,  42 => 15,  37 => 13,  23 => 1,);
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
    {% placeholder head %}
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/stylesheets/style.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/listany/stylesheets/responsive.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/stylesheets/animate.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/revolution/css/layers.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/listany/revolution/css/settings.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/listany/stylesheets/dropzone.css'|theme }}\">

\t<!-- <link href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"https://cdn.datatables.net/scroller/1.5.1/css/scroller.bootstrap.min.css\" rel=\"stylesheet\"> -->

\t<!-- Favicon and touch icons  -->
    <link href=\"{{ 'assets/listany/icon/apple-touch-icon-48-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\" sizes=\"48x48\">
    <link href=\"{{ 'assets/listany/icon/apple-touch-icon-32-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ 'assets/listany/icon/favicon.png'|theme }}\" rel=\"shortcut icon\">

\t<link rel=\"shortcut icon\" href=\"https://lapan.go.id/favicon.ico\" type=\"image/x-icon\">
    <script src='https://www.google.com/recaptcha/api.js'></script>

\t<!-- ----------------------------------------------------------------------------------------- -->
\t
\t
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



    <script src=\"{{ 'assets/listany/javascript/jquery.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/app.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/tether.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/bootstrap.min.js'|theme }}\"></script> 
    
    <script src=\"{{ 'assets/listany/javascript/jquery.easing.js'|theme }}\"></script>    
    <script src=\"{{ 'assets/listany/javascript/jquery-waypoints.js'|theme }}\"></script> 
    <script src=\"{{ 'assets/listany/javascript/jquery-countTo.js'|theme }}\"></script>  
    <script src=\"{{ 'assets/listany/javascript/owl.carousel.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/jquery.cookie.js'|theme }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js\"></script>
    <script src=\"{{ 'assets/listany/javascript/parallax.js'|theme }}\"></script>
    <script src=\"{{ 'assets/listany/javascript/dropzone.js'|theme }}\"></script>
    <!-- <script src=\"{{ 'assets/listany/javascript/bootstrap-slider.min.js'|theme }}\"></script> -->
    <script src=\"{{ 'assets/listany/javascript/smoothscroll.js'|theme }}\"></script>   
    <script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js)\"></script>
    <script src=\"https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js\"></script>
    <script src=\"https://cdn.datatables.net/plug-ins/1.10.19/pagination/input.js\"></script>
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
    
    {% framework extras %}
    {% scripts %}
    <script type=\"text/javascript\">
        // Setup - add a text input to each footer cell
        

        function filterGlobal () {
            \$('#example').DataTable().search(
                \$('#global_filter').val()
            ).draw();
        }
         
        function filterColumn ( i ) {
            \$('#example').DataTable().column( i ).search(
                \$('#col'+i+'_filter').val()
            ).draw();
        }

        function param(name) {
            var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results ? decodeURIComponent(results[1].replace(/\\+/g, '%20')) : null;
            // return (location.search.split(name + '=')[1] || '').split('&')[0];
        }

        \$(document).ready(function() {

            if('{{ slug }}' == 'default'){
                \$('#col0_filter').val(param('jenis'));
            } else {
                \$('#col0_filter').val('{{ slug }}');
            }

            \$('#col3_filter').val(param('tentang'));
            \$('#col1_filter').val(param('nomor'));
            \$('#col2_filter').val(param('tahun'));

            var table = \$('#example').DataTable( {
                
                'mark': true,
                \"order\": [[ 2, \"desc\" ]],
                // \"pagingType\": \"input\",
                \"dom\": 'tipr'
            } ).columns(3).search(
                \$('#col3_filter').val()
            ).columns(0).search(
                \$('#col0_filter').val()
            ).columns(1).search(
                \$('#col1_filter').val()
            ).columns(2).search(
                \$('#col2_filter').val()
            ).draw();

            \$('#example').on( 'page.dt', function () {
              \$('html, body').animate({
                  scrollTop: 50
              }, 'slow');
            } );

            \$('input.global_filter').on( 'keyup', function () {
                filterGlobal();
            } );
         
            \$('input.column_filter').on( 'keyup', function () {
                filterColumn( \$(this).parents('p').attr('data-column') );
            } );

            \$('select.dropdown_sort').on( 'change', function () {
                filterColumn( \$(this).parents('p').attr('data-column') );
            } );
        } );

        function viewAnswer(answer) {
            document.getElementById(\"jawaban\").innerHTML = answer;
            console.log(answer)
            // \$('#jawaban').val(answer);
        }

        \$('#exampleModalCenter').on('show.bs.modal', function (event) {
          var button = \$(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          console.log(recipient)
          var modal = \$(this)
          \$('#jawaban').html(recipient)
          modal.find('.modal-body textarea').val(recipient)

        })

        

        
    </script>


    

</html>", "G:\\xampp\\htdocs\\jdih/themes/jdih/layouts/default.htm", "");
    }
}
