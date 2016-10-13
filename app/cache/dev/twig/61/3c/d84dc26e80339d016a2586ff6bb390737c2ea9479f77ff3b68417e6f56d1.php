<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_613cd84dc26e80339d016a2586ff6bb390737c2ea9479f77ff3b68417e6f56d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    
     <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/css/bootstrap.css\" rel=\"stylesheet"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/css/bootstrap-responsive.css\" rel=\"stylesheet"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/css/typography.css\" rel=\"stylesheet"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/css/extension.css\" rel=\"stylesheet"), "html", null, true);
        echo "\"/>
    <link rel=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/stylesheet\" href=\"stylesheets/prettyPhoto.css"), "html", null, true);
        echo "\"/>
    <link rel=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/stylesheet\" href=\"stylesheets/isotope.css"), "html", null, true);
        echo "\"/>
    <link rel=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/stylesheet\" href=\"stylesheets/graph.css"), "html", null, true);
        echo "\"/>
    <!-- Edit the following style.css file to change the theme look and feel -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/stylesheets/themes/default/default.css\" type=\"text/css\" media=\"screen"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/stylesheets/nivo-slider.css\" type=\"text/css\" media=\"screen"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/stylesheets/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/stylesheets/home1.css"), "html", null, true);
        echo "\">
    
    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">

";
    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('content_header', $context, $blocks);
        // line 47
        echo "
    <div class=\"block\">
        ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "    </div>

    ";
        // line 52
        if (array_key_exists("code", $context)) {
            // line 53
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 55
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        // line 58
        echo "    
   
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/js/bootstrap-affix.js"), "html", null, true);
        echo "\"></script>
  \t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery.localscroll-1.2.7-min.js"), "html", null, true);
        echo "\"></script>
  \t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery.scrollTo-1.4.2-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> 
\t  <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/fake-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/form-validation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/waypoints.min.js"), "html", null, true);
        echo "\"></script>
  \t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/scroll.js"), "html", null, true);
        echo "\"></script>

    
    
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/javascripts/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\">
    \$(window).load(function() {
\t\t
\t\tvar win_height = window.innerHeight;
\t\t\$('.page').css('min-height',win_height-166+'px');
        
\t\t\$('.big_circle').mouseenter(function(){
\t\t\t\$(this).children('p').delay(250).fadeIn(500);
\t\t});
\t\t
\t\t\$('.big_circle').mouseleave(function(){
\t\t\t\$(this).children('p').fadeOut(300);
\t\t});
\t\t
\t\tvar no_of_testimonials = \$('.testimonial_collection .testimonial').length;
\t\t
\t\tfor(i=1;i<=no_of_testimonials;i++)
\t\t{\t
\t\t\t
\t\t\tif(i==1)
\t\t\t\$('.testimonial_nav').append('<a href=\"#\" class=\"active_nav\" data-index=\"'+i+'\"></a>');
\t\t\telse
\t\t\t\$('.testimonial_nav').append('<a href=\"#\" data-index=\"'+i+'\"></a>');
\t\t}
\t\t
\t\t\$('.testimonial_nav a').click(function(){
\t\t\t\$('.testimonial').hide();
\t\t\t\$('.testimonial_nav a').removeClass('active_nav');
\t\t\t\$(this).addClass('active_nav');
\t\t\tvar target_index = \$(this).attr('data-index');
\t\t\t\$('.testimonial_collection .testimonial:nth-child('+target_index+')').fadeIn(1000);
\t\t\treturn false;
\t\t});
\t\t
\t\t\$('.nav-tabs a').click(function (e) {
\t\t  e.preventDefault();
\t\t  \$(this).tab('show');
\t\t})
\t\t
\t\t\$('#f-none').trigger('click');
\t\t
\t\t\$('.welcome_txt a').click(function(){
\t\t\t\$('.links a:nth-child(2)').trigger('click');
\t\t\treturn false;
\t\t});
\t\t
\t\t\$('.quick_connect a').click(function(){
\t\t\t\$('.links a:last-child').trigger('click');
\t\t\treturn false;
\t\t});
\t\t
    });
    </script>

    

  \t<!-- Mobile Navigation Scroll Setup -->
\t<script type=\"text/javascript\">
    \tfunction moveTo(contentArea){
        \tvar goPosition = \$(contentArea).offset().top;
        \t\$('html,body').animate({ scrollTop: goPosition}, 'slow');
        }
    </script>


\t<!-- Sticky nav -->
\t<script>

  
\t\$(window).load(function(){

      //NAVIGATION MENU COLOR CHANGE ON CLILCK
      \$('.desktop-nav a').click(function(){
        var colIndex = \$(this).attr('title');
        \$('.desktop-nav a').removeClass('def-link');
        \$(this).addClass('def-link');
        \$(this).addClass(colIndex+'-link');
      })

  \t\t\t
\t\t\t//PORTFOLIO IMAGE HOVER
\t\t\t\$('.element').mouseenter(function(){
\t\t\t\t\$(this).find('img').stop().animate({opacity:'0'},'slow')
\t\t\t\t\$(this).find('.gallery-caps').stop().animate({opacity:'1'},'slow')
\t\t\t})

\t\t\t\$('.element').mouseleave(function(){
\t\t\t\t\$('.element').find('.gallery-caps').stop().animate({opacity:'0'},'slow')
\t\t\t\t\$('.element').find('img').stop().animate({opacity:'1'},'slow')
\t\t\t})

\t\t\t//PORTFOLIO FILTER ON CLICK
\t\t\t\$('.inner-link a').click(function(){
\t\t\t\t\$('.inner-link a').removeClass('selected');
\t\t\t\t\$(this).addClass('selected');
\t\t\t})

\t\t\t//Services More Content triggering
\t\t\t\$('.services-more').click(function(){
\t\t\t\tvar servIndex = \$(this).attr('data-services');
\t\t\t\t//alert(servIndex);
\t\t\t\t\$('#'+servIndex+'-content').slideToggle();
\t\t\t})

\t\t});
\t</script>
\t
\t<script>

// Initialize prettyPhoto plugin
\t\$(\".portfolio a[data-gal^='prettyPhoto']\").prettyPhoto({
\t\ttheme:'light_square', 
\t\tautoplay_slideshow: false, 
\t\toverlay_gallery: false, 
\t\tshow_title: true
\t});


  
\t\t
//MASONRY PORTFOLIO INIT:
    \$(window).load(function(){
      
      var \$container = \$('#container');

      \$container.isotope({
        itemSelector : '.element',
        layoutMode : 'masonry' 
      });
      
      
      var \$optionSets = \$('#options .option-set'),
          \$optionLinks = \$optionSets.find('a');

      \$optionLinks.click(function(){
        
\t\tvar \$this = \$(this);
        // don't proceed if already selected
        /*if ( \$this.hasClass('selected') ) {
          return false;
        }*/
\t\t
        var \$optionSet = \$this.parents('.option-set');
        \$optionSet.find('.selected').removeClass('selected');
        \$this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = \$optionSet.attr('data-option-key'),
            value = \$this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( \$this, options )
        } else {
          // creativewise, apply new options
          \$container.isotope( options );
        }
        
\t\t
        return false;
      });

      
    });
  </script>\t
  
  
";
    }

    // line 38
    public function block_content_header($context, array $blocks = array())
    {
        // line 39
        echo "        <ul id=\"menu\">
            ";
        // line 40
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 43
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 40
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 41
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 49,  467 => 41,  464 => 40,  457 => 43,  455 => 40,  452 => 39,  449 => 38,  272 => 87,  268 => 86,  261 => 82,  257 => 81,  253 => 80,  249 => 79,  245 => 78,  241 => 77,  237 => 76,  233 => 75,  229 => 74,  225 => 73,  221 => 72,  217 => 71,  213 => 70,  209 => 69,  205 => 68,  201 => 67,  197 => 66,  193 => 65,  189 => 64,  185 => 63,  181 => 62,  177 => 61,  173 => 60,  169 => 58,  163 => 55,  159 => 53,  157 => 52,  153 => 50,  151 => 49,  147 => 47,  145 => 38,  142 => 37,  133 => 34,  130 => 33,  125 => 32,  122 => 31,  116 => 29,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  41 => 5,  36 => 4,  33 => 3,);
    }
}
