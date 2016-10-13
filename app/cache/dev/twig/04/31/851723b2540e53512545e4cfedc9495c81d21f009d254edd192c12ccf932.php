<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_0431851723b2540e53512545e4cfedc9495c81d21f009d254edd192c12ccf932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
     
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Skroll - Unique Responsive HTML5 Theme on Bootstrap</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">  
    <meta name=\"description\" content=\"Skroll premium theme\">
    <meta name=\"author\" content=\"Ancil K Anto for Designova\">


     <!-- Le styles -->
   \t
    
    <!-- BANNER CSS SETTINGS -->
    

\t
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<link rel=\"stylesheet\" href=\"stylesheets/ie8.css\">
\t<![endif]-->
\t
</head>
<body>




\t<!-- Primary Page Layout
\t================================================== -->
\t\t\t\t
\t
\t<header class=\"top_header\">
    \t<div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                    \t<div class=\"logo_holder\">
                            <a id=\"logo\" href=\"index.html\"><img alt=\"Skroll by designova\" title=\"Skroll\" src=\"images/logo.png\"/></a>
                        </div>
                        <nav class=\"links desktop-nav visible-desktop visible-tablet\">
                            <a class=\"def-link\" title=\"home\" href=\"#intro\">home</a>
                            <a title=\"about\" href=\"#about\">about</a>
                            <a title=\"services\" href=\"#services\">services</a>
                            <a title=\"portfolio\" href=\"#portfolio\">works</a>
                            <a title=\"features\" href=\"#features\">Features</a>
                            <a title=\"contact\" href=\"#contact\">contact</a>
                        </nav>
                        
                        <nav class=\"mobile-nav visible-phone\">
                        \t<!-- Start Dropmenu for mobile -->  
                            <select class=\"dropmenu\" name=\"dropmenu\" onChange=\"moveTo(this.value)\">
                              <option value=\"\" selected=\"selected\">Menu</option>
                              <option value=\"#intro\">Home</option>
                              <option value=\"#about\">About</option>
                              <option value=\"#services\">Services</option> 
                              <option value=\"#portfolio\">Works</option> 
                              <option value=\"#features\">Features</option>
                              <option value=\"#contact\">Contact</option> 
                            </select>
                            <!-- End Dropmenu for mobile -->
                        </nav>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class=\"clear\"></div>
    
    <section class=\"intro page\" id=\"intro\">
    \t<div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                    \t
                        <div class=\"span4 welcome_txt\">
                        \t<div class=\"page_title\">We are Skroll</div>
                            <div class=\"clear\"></div>
                            <p>Our offices are full of iMacs, MacBooks, iPads and iPhones because we love beautifully designed stuff.</p>
                            <br/>
                            <a href=\"#about\" class=\"small_btn\">More about us</a>
                        </div>
                        <div class=\"span8 welcome_promo\">
                        \t<div class=\"big_circle visible-desktop visible-tablet\">
                            \t <div class=\"sub_heading\">Project</div>
                                 <p>
                                     <span>Nullam dictum felis eu pede mollis pretium. Cras dapibus.</span>
                                     <br/><br/>
                                     <a href=\"#\" class=\"small_btn\">View Project</a>
                                 </p>
                            </div>
                            
                            <a href=\"#\" class=\" visible-desktop visible-tablet\">
                                <div class=\"small_circle circle1\">
                                    <span>Vivamus et</span>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class=\"clear\"></div>
    
\t<section class=\"about page\" id=\"about\">
    \t<div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                    \t<div class=\"page_title\">Let's say more about us</div>
                        <div class=\"promo_txt\">WE ARE AN AWESOME DESIGN AGENCY</div>
                    </div>
                    <div class=\"row process\">
                    \t<div class=\"span3\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/icons/setp-01.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Love</div>
                            <div class=\"clear\"></div>
                            <p>Our offices are full of iMacs, MacBooks, iPads and iPhones because we love beautifully designed stuff.</p>
                        </div>
                        <div class=\"span3\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/icons/setp-02.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Obsess</div>
                            <div class=\"clear\"></div>
                            <p>We pay attention to the finer details. A pixel makes all the difference and we focus on every single one of them.</p>
                        </div>
                        <div class=\"span3\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/icons/setp-03.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Fine tune</div>
                            <div class=\"clear\"></div>
                            <p>Being a relatively small studio means we get to really engage on a personal level with you, our client. Bigger isn't always better.</p>
                        </div>
                        <div class=\"span3\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/icons/setp-04.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Apply</div>
                            <div class=\"clear\"></div>
                            <p>This amazing industry never ceases to amaze. We love learning new skills and tricks that we think will help you and your users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"testimonials\">
        \t<div class=\"container-fluid\">
            \t<div class=\"row-fluid\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12 testimonial_collection\">
                                <div class=\"testimonial\">
                                    <p>\" Skroll offer an unmatched service, listening carefully to our needs and creating the perfect website that delivers functionality, an attractive layout and efficient promotion of our product. We would work with no other company after their flawless work on our site.\"</p>
                                    <div class=\"clear\"></div>
                                    <div class=\"client_name\">- Duncan Shaw</div>
                                </div>
                                <div class=\"testimonial\">
                                    <p>\" Cras interdum auctor nisl, in molestie ante posuere vel. Aliquam id nisl sed neque cursus imperdiet. Vivamus et nulla eu nibh dapibus aliquet. Mauris in dignissim augue. Cras interdum auctor nisl...\"</p>
                                    <div class=\"clear\"></div>
                                    <div class=\"client_name\">� Ann Johnson</div>
                                </div>
                                <div class=\"testimonial\">
                                    <p>\" Aenean massa. Cut sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.\"</p>
                                    <div class=\"clear\"></div>
                                    <div class=\"client_name\">� John Doe</div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"testimonial_nav\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"page_title\">Who we are</div>
                    </div>
                    <div class=\"row\">
                    \t<div class=\"span6 about_txt\">
                        \t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class=\"span6 about_txt\">
                        \t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"page_title\">Our team</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"span3 team\">
                    <img src=\"images/team/01.jpg\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                    <div class=\"clear\"></div>
                    <div class=\"sub_heading\">Ben Fogarty</div>
                    <div class=\"clear\"></div>
                    <p>Partner, Design Director</p>
                    <div class=\"clear\"></div>
                    <div class=\"social-icons\">
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"FACEBOOK\">f</a>
                        <a href=\"#\"  data-placement=\"top\" data-original-title=\"LINKEDIN\">i</a>
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"TWITTER\">l</a>
                    </div>
                </div>
                <div class=\"span3 team\">
                    <img src=\"images/team/02.jpg\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                    <div class=\"clear\"></div>
                    <div class=\"sub_heading\">Chris Jones</div>
                    <div class=\"clear\"></div>
                    <p>Partner, Director of Engineering</p>
                    <div class=\"clear\"></div>
                    <div class=\"social-icons\">
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"FACEBOOK\">f</a>
                        <a href=\"#\"  data-placement=\"top\" data-original-title=\"LINKEDIN\">i</a>
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"TWITTER\">l</a>
                    </div>
                </div>
                <div class=\"span3 team\">
                    <img src=\"images/team/03.jpg\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                    <div class=\"clear\"></div>
                    <div class=\"sub_heading\">Nathan Searles</div>
                    <div class=\"clear\"></div>
                    <p>Partner, Technical Director</p>
                    <div class=\"clear\"></div>
                    <div class=\"social-icons\">
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"FACEBOOK\">f</a>
                        <a href=\"#\"  data-placement=\"top\" data-original-title=\"LINKEDIN\">i</a>
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"TWITTER\">l</a>
                    </div>
                </div>
                <div class=\"span3 team\">
                    <img src=\"images/team/04.jpg\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                    <div class=\"clear\"></div>
                    <div class=\"sub_heading\">Zeke Howard</div>
                    <div class=\"clear\"></div>
                    <p>Partner, Director of Accounts</p>
                    <div class=\"clear\"></div>
                    <div class=\"social-icons\">
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"FACEBOOK\">f</a>
                        <a href=\"#\"  data-placement=\"top\" data-original-title=\"LINKEDIN\">i</a>
                        <a href=\"#\" data-placement=\"top\" data-original-title=\"TWITTER\">l</a>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"clients\">
        \t<div class=\"container-fluid\">
            \t<div class=\"row-fluid\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span3 client\">
                            \t<img src=\"images/clients/intosport-group-logo.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                            </div>
                            <div class=\"span3 client\">
                            \t<img src=\"images/clients/infutech-logo.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                            </div>
                            <div class=\"span3 client\">
                            \t<img src=\"images/clients/hester-browne-logo.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                            </div>
                            <div class=\"span3 client\">
                            \t<img src=\"images/clients/masc-logo.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
    <div class=\"clear\"></div>
    
    <section class=\"services page\" id=\"services\">
    \t<div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"page_title\">All we offer is commitment</div>
                        <div class=\"promo_txt\">IF A SERVICE ISN'T LISTED ITS BECAUSE WE'RE MODEST</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid service\">
            <div class=\"row-fluid\">
                <div class=\"container\">
                    <div class=\"row\">
                    \t<div class=\"span4\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/services/config1.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Web Development</div>
                            <div class=\"clear\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra.</p>
                        </div>
                        <div class=\"span4\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/services/config2.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Mobile UI Design</div>
                            <div class=\"clear\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra.</p>
                        </div>
                        <div class=\"span4\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/services/config3.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Graphic Design</div>
                            <div class=\"clear\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra.</p>
                        </div>
                        
                    </div>
                    <div class=\"row\">
                    \t<div class=\"span4\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/services/config4.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Andriod Development</div>
                            <div class=\"clear\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra.</p>
                        </div>
                        <div class=\"span4\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/services/config5.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Customize CMS</div>
                            <div class=\"clear\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra.</p>
                        </div>
                        <div class=\"span4\">
                        \t<div class=\"icon\">
                            \t<img src=\"images/services/config6.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development\" />
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"sub_heading\">Email marketing</div>
                            <div class=\"clear\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                    \t<div class=\"page_title\">Other services</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid other_services\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                    <div class=\"row\">
                    \t<div class=\"span6\">
                        \t<div class=\"sub_heading\"><span class=\"icon\">\"</span>Web design</div>
                            <div class=\"clear\"></div>
                            <p>Content is king, but delivery is key. We design award winning websites that encourage your visitors to take the actions needed to meet your online objectives. We design our websites to be responsive, delivering optimum performance and visuals for all devices. This basically means that each of your users will get a tailored browsing experience for desktop and mobile devices.</p>
                        </div>
                        <div class=\"span6\">
                        \t<div class=\"sub_heading\"><span class=\"icon\">k</span>App design</div>
                            <div class=\"clear\"></div>
                            <p>As well as as offering web design services we also design apps for iPhone, iPad, Android, Windows Phone and SaaS for the web. As well as development, a whole bunch of companies and start ups often use us to create pixel perfect interfaces. So if you already have developers in house, we'll work closely with you to design every aspect of your interface.</p>
\t\t\t\t\t\t\t
                        </div>
                    </div>
                    
                    <div class=\"row\">
                    \t<div class=\"span6\">
                        \t<div class=\"sub_heading\"><span class=\"icon\">G</span>Brand Creation</div>
                            <div class=\"clear\"></div>
                            <p>We understand that as soon as a visitor arrives on your website they will almost instantly pass judgement on you or your company. We work with start-ups as well as established businesses to develop or create from scratch a complete brand identity, from logos to brand guidelines we cover it all.</p>
                        </div>
                        <div class=\"span6\">
                        \t<div class=\"sub_heading\"><span class=\"icon\">z</span>Hosting Services</div>
                            <div class=\"clear\"></div>
                            <p>At By Association Only we think all our clients should have a digital partner that they know is ultimately responsible for their entire online presence. We offer full scaleable hosting solutions alongside all of our web design services. In simple terms, you don't need to worry about contacting a multitude of different companies should you encounter any issues down the line.</p>
\t\t\t\t\t\t\t
                        </div>
                    </div>
                    
                    <div class=\"row\">
                    \t<div class=\"span6\">
                        \t<div class=\"sub_heading\"><span class=\"icon\">&lt;</span>Print Design</div>
                            <div class=\"clear\"></div>
                            <p>We offer full print design services including; business card design, brochure design, flyer / poster design etc. You get the picture. More importantly you can rest assured they will adopt the design sensibilities of your digital presence to ensure your brand presence is as strong as it can be.</p>
                        </div>
                        <div class=\"span6\">
                        \t<div class=\"sub_heading\"><span class=\"icon\">K</span>Consultation</div>
                            <div class=\"clear\"></div>
                            <p>We understand that the web can be a daunting place, other agencies throw around buzzwords to make them look clever but for those of us who don't know their HTML's from their server's, we alway explain everything in plain English so you know whats happening at all times.</p>
\t\t\t\t\t\t\t
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"quick_connect\">
        \t<div class=\"container-fluid\">
            \t<div class=\"row-fluid\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"page_title\">We've got a lot <br/> to offer.</div>
                        </div>
                        <div class=\"row\">
                        \t<div class=\"contact_button\">
                            \t<a href=\"#contact\" >Let's work together</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
\t
    <div class=\"clear\"></div>
    
    <section class=\"page\" id=\"portfolio\">
    \t<div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                        <div class=\"page_title\">The best we have done</div>
                        <div class=\"promo_txt\">See our recent works here</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid portfolio-inner\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\" id=\"options\">
                        <ul id=\"filters\" class=\"option-set clearfix\" data-option-key=\"filter\">
                            <li class=\"inner-link\"><a href=\"#filter\" data-option-value=\"*\" class=\"selected\">all</a></li>
                            <li class=\"inner-link\"><a href=\"#filter\" data-option-value=\".branding\">brand</a></li>
                            <li class=\"inner-link\"><a href=\"#filter\" data-option-value=\".web\">web</a></li>
                            <li class=\"inner-link\"><a href=\"#filter\" data-option-value=\".ecommerce\">ecom</a></li>
                            <li class=\"inner-link\"><a href=\"#filter\" data-option-value=\".digital\">digital</a></li>
                            <li class=\"inner-link\"><a href=\"#filter\" data-option-value=\".creative\">creative</a></li>
                            <li class=\"inner-link\"><a href=\"#filter\" data-option-value=\".digital, .creative\">digital and creative</a></li>
                        </ul>
                    </div>
                    
                    <div class=\"row\">
                    \t<div id=\"container\" class=\"clearfix portfolio\">
    
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element web height-02 \" data-symbol=\"Hg\" data-category=\"web\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"  src=\"images/portfolio/p01.jpg\"/>
                                </div>
                                
                            </a>
                            
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element branding height-01\" data-symbol=\"Te\" data-category=\"branding \">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p02.jpg\"/>
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element ecommerce height-03\" data-symbol=\"Bi\" data-category=\"ecommerce\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p03.jpg\"/>
                                </div>
                            </a>
                            
                            
                            
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element creative height-01\" data-symbol=\"Ca\" data-category=\"creative\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p04.jpg\"/>
                                </div>
                            </a>
                            
                            
                            
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element web  height-02 \" data-symbol=\"Cd\" data-category=\"web\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p05.jpg\"/>
                                </div>
                            </a>
                            
                              
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element digital height-01\" data-symbol=\"Re\" data-category=\"digital\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p06.jpg\"/>
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element ecommerce height-02 \" data-symbol=\"Tl\" data-category=\"ecommerce\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p07.jpg\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element branding  height-03\" data-symbol=\"Sb\" data-category=\"branding \">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p08.jpg\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element web height-01\" data-symbol=\"Co\" data-category=\"web\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"images/portfolio/p09.jpg\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"images/portfolio/full/dummy.jpg\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element digital height-03\" data-symbol=\"Lu\" data-category=\"digital\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/p10.jpg"), "html", null, true);
        echo "\"    />
                                </div>
                            </a>
                            
                            
                            <a class=\"gallery-block\" href=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element creative  height-02 \" data-symbol=\"Cd\" data-category=\"creative\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/p11.jpg"), "html", null, true);
        echo "\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element branding height-01\" data-symbol=\"Ca\" data-category=\"branding\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/p12.jpg"), "html", null, true);
        echo "\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element web height-01\" data-symbol=\"Re\" data-category=\"web\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/p13.jpg"), "html", null, true);
        echo "\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element ecommerce height-02 \" data-symbol=\"Tl\" data-category=\"ecommerce') }}\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/p14.jpg"), "html", null, true);
        echo "\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element digital  height-03\" data-symbol=\"Sb\" data-category=\"digital \">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/p15.jpg"), "html", null, true);
        echo "\"    />
                                </div>
                            </a>
                            
                            
                              
                            <a class=\"gallery-block\" href=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/full/dummy.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto[portfolio]\">
                                <div class=\"element web height-01\" data-symbol=\"Co\" data-category=\"web\">
                                    <article class=\"gallery-caps\">
                                        <h3>Title</h3>
                                        <p>Lorem Ipsum Dolor</p>
                                    </article>
                                    <img alt=\"Skroll by designova\" title=\"Skroll\"   src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/portfolio/p16.jpg"), "html", null, true);
        echo "\"    />
                                </div>
                            </a>
                            
                          </div> <!-- #container -->
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"quick_connect\">
        \t<div class=\"container-fluid\">
            \t<div class=\"row-fluid\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"page_title\">Join our list of happy <br/> clients.</div>
                        </div>
                        <div class=\"row\">
                        \t<div class=\"contact_button\">
                            \t<a href=\"#contact\" >Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  \t
    <div class=\"clear\"></div>
    
    <section class=\"page\" id=\"features\">
    \t<div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                        <div class=\"page_title\">Features of Skroll</div>
                        <div class=\"promo_txt\">Skroll is perfectly minimal but highly unique</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                    \t<div class=\"span12\">
                        \t<section class=\"main\">
\t\t\t\t
                                <span class=\"button-label\">Size:</span>
                                <input type=\"radio\" name=\"resize-graph\" id=\"graph-small\" /><label for=\"graph-small\">Small</label>
                                <input type=\"radio\" name=\"resize-graph\" id=\"graph-normal\" checked=\"checked\" /><label for=\"graph-normal\">Normal</label>
                                <input type=\"radio\" name=\"resize-graph\" id=\"graph-large\" /><label for=\"graph-large\">Large</label>   
                
                                <span class=\"button-label\">Color:</span>
                                <input type=\"radio\" name=\"paint-graph\" id=\"graph-blue\" checked=\"checked\" /><label for=\"graph-blue\">Blue</label>
                                <input type=\"radio\" name=\"paint-graph\" id=\"graph-green\" /><label for=\"graph-green\">Green</label>
                                <input type=\"radio\" name=\"paint-graph\" id=\"graph-rainbow\" /><label for=\"graph-rainbow\">Rainbow</label>
                
                                <span class=\"button-label\">Product:</span>
                                <input type=\"radio\" name=\"fill-graph\" id=\"f-none\" /><label for=\"f-none\">None</label>
                                <input type=\"radio\" name=\"fill-graph\" id=\"f-product1\" checked=\"checked\" /><label for=\"f-product1\">Product 1</label>
                                <input type=\"radio\" name=\"fill-graph\" id=\"f-product2\" /><label for=\"f-product2\">Product 2</label>
                                <input type=\"radio\" name=\"fill-graph\" id=\"f-product3\" /><label for=\"f-product3\">Product 3</label>
                
                                <ul class=\"graph-container\">
                                    <li>
                                        <span>Wordpress</span>
                                        <div class=\"bar-wrapper\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar-background\"></div>
                                                <div class=\"bar-inner\">25</div>
                                                <div class=\"bar-foreground\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span>JQuery</span>
                                        <div class=\"bar-wrapper\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar-background\"></div>
                                                <div class=\"bar-inner\">50</div>
                                                <div class=\"bar-foreground\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span>CSS</span>
                                        <div class=\"bar-wrapper\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar-background\"></div>
                                                <div class=\"bar-inner\">75</div>
                                                <div class=\"bar-foreground\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span>HTML</span>
                                        <div class=\"bar-wrapper\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar-background\"></div>
                                                <div class=\"bar-inner\">100</div>
                                                <div class=\"bar-foreground\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span>PHP</span>
                                        <div class=\"bar-wrapper\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar-background\"></div>
                                                <div class=\"bar-inner\">50</div>
                                                <div class=\"bar-foreground\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class=\"graph-marker-container\">
                                            <li style=\"bottom:25%;\"><span>25%</span></li>
                                            <li style=\"bottom:50%;\"><span>50%</span></li>
                                            <li style=\"bottom:75%;\"><span>75%</span></li>
                                            <li style=\"bottom:100%;\"><span>100%</span></li>
                                        </ul>
                                    </li>
                                </ul>
                
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid feature\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
\t\t\t\t\t\t<article class=\"span12\">
\t\t\t\t\t\t\t<div class=\"sub_heading\"><span class=\"icon\">k</span>12 Column Responsive Layout with Bootstrap</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
                    <div class=\"row show-grid\">
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                        <div class=\"span1\">1</div>
                    </div>
                    <div class=\"row show-grid\">
                        <div class=\"span3\">3</div>
                        <div class=\"span4\">4</div>
                        <div class=\"span5\">5</div>
                    </div>
                    <div class=\"row show-grid\">
                        <div class=\"span4\">4</div>
                        <div class=\"span4\">4</div>
                        <div class=\"span4\">4</div>
                    </div>
                    <div class=\"row show-grid\">
                        <div class=\"span6\">6</div>
                        <div class=\"span6\">6</div>
                    </div>
                    <div class=\"row show-grid\">
                    \t<div class=\"span12\">12</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid feature\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
\t\t\t\t\t\t<article class=\"span12\">
\t\t\t\t\t\t\t<div class=\"sub_heading\"><span class=\"icon\">n</span>Tabbed Content Panels</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
                    <div class=\"row\">
                    \t<div class=\"span12\">
                        \t<ul class=\"nav nav-tabs\" id=\"SkrollTabs\">
                                <li class=\"active\"><a href=\"#tab1\">Tab #1</a></li>
                                <li><a href=\"#tab2\">Tab #2</a></li>
                                <li><a href=\"#tab3\">Tab #3</a></li>
                                <li><a href=\"#tab4\">Tab #4</a></li>
                            </ul>
                            
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab1\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id leo sem. In non eros viverra orci consequat sagittis sed sed lectus. Mauris tempus eleifend elit, ut fringilla nunc commodo sed. Nunc quam nunc, auctor id fringilla ut, faucibus euismod felis. Phasellus in est diam. Ut dolor neque, luctus ut laoreet non, dictum non diam. Donec lectus tortor, facilisis et dignissim vel, fringilla nec magna.</p>
                                    <p>Integer et purus vel ipsum convallis laoreet vestibulum ut diam. Praesent adipiscing consectetur nibh. Phasellus molestie nibh eu ipsum luctus accumsan. Proin eget ante tellus, ut lacinia enim. Morbi metus ipsum, viverra ac molestie vitae, vestibulum nec nisl. Nulla in consectetur nisi. Curabitur non nulla nulla. Etiam pellentesque elementum varius. Cras congue vehicula mauris vitae rhoncus. Integer imperdiet commodo nisl quis dictum.</p>
                                    <div class=\"clear\"></div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab2\">
                                    <p>Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                    <p>Integer et purus vel ipsum convallis laoreet vestibulum ut diam. Praesent adipiscing consectetur nibh. Phasellus molestie nibh eu ipsum luctus accumsan. Proin eget ante tellus, ut lacinia enim. Morbi metus ipsum, viverra ac molestie vitae, vestibulum nec nisl. Nulla in consectetur nisi. Curabitur non nulla nulla. Etiam pellentesque elementum varius. Cras congue vehicula mauris vitae rhoncus. Integer imperdiet commodo nisl quis dictum.</p>
                                    <div class=\"clear\"></div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab3\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id leo sem. In non eros viverra orci consequat sagittis sed sed lectus. Mauris tempus eleifend elit, ut fringilla nunc commodo sed. Nunc quam nunc, auctor id fringilla ut, faucibus euismod felis. Phasellus in est diam. Ut dolor neque, luctus ut laoreet non, dictum non diam. Donec lectus tortor, facilisis et dignissim vel, fringilla nec magna.</p>
                                    <p>Integer et purus vel ipsum convallis laoreet vestibulum ut diam. Praesent adipiscing consectetur nibh. Phasellus molestie nibh eu ipsum luctus accumsan. Proin eget ante tellus, ut lacinia enim. Morbi metus ipsum, viverra ac molestie vitae, vestibulum nec nisl. Nulla in consectetur nisi. Curabitur non nulla nulla. Etiam pellentesque elementum varius. Cras congue vehicula mauris vitae rhoncus. Integer imperdiet commodo nisl quis dictum.</p>
                                    <div class=\"clear\"></div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab4\">
                                   <p>Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                    <p>Integer et purus vel ipsum convallis laoreet vestibulum ut diam. Praesent adipiscing consectetur nibh. Phasellus molestie nibh eu ipsum luctus accumsan. Proin eget ante tellus, ut lacinia enim. Morbi metus ipsum, viverra ac molestie vitae, vestibulum nec nisl. Nulla in consectetur nisi. Curabitur non nulla nulla. Etiam pellentesque elementum varius. Cras congue vehicula mauris vitae rhoncus. Integer imperdiet commodo nisl quis dictum.</p>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid feature\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
\t\t\t\t\t\t<article class=\"span12\">
\t\t\t\t\t\t\t<div class=\"sub_heading\"><span class=\"icon\">&reg;</span>Collapsible Content Panels</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
                    <div class=\"row\">
                    \t<div class=\"span12\">
                        \t<div class=\"accordion\" id=\"accordion2\">
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse1\">
                                        <span><i class=\"icon-chevron-down\"></i></span> Collapse #1
                                        </a>
                                    </div>
                                    <div id=\"collapse1\" class=\"accordion-body in\">
                                        <div class=\"accordion-inner\">
                                        <p>Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                        <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse2\">
                                        <span><i class=\"icon-chevron-down\"></i></span> Collapse #2
                                        </a>
                                    </div>
                                    <div id=\"collapse2\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                        <p>Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                        <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse3\">
                                        <span><i class=\"icon-chevron-down\"></i></span> Collapse #3
                                        </a>
                                    </div>
                                    <div id=\"collapse3\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                        <p>Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                        <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse4\">
                                        <span><i class=\"icon-chevron-down\"></i></span> Collapse #4
                                        </a>
                                    </div>
                                    <div id=\"collapse4\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                        <p>Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                        <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse5\">
                                        <span><i class=\"icon-chevron-down\"></i></span> Collapse #5
                                        </a>
                                    </div>
                                    <div id=\"collapse5\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                        <p>Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                        <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"container-fluid messsages feature\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
\t\t\t\t\t\t<article class=\"span12\">
\t\t\t\t\t\t\t<div class=\"sub_heading\"><span class=\"icon\">T</span>Alert messages</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
                    <div class=\"row\">
                    \t<div class=\"span12\">
                        \t<div class=\"alert\">
                                 <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                 <strong>Warning!</strong> Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                    \t<div class=\"span12\">
                        \t<div class=\"alert alert-error\">
                                 <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                 <strong>Oh snap!</strong> Change a few things up and try submitting again.
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                    \t<div class=\"span12\">
                        \t<div class=\"alert alert-success\">
                                 <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                 <strong>Well done!</strong> You successfully read this important alert message.
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                    \t<div class=\"span12\">
                        \t<div class=\"alert alert-info\">
                                 <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                 <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"quick_connect\">
        \t<div class=\"container-fluid\">
            \t<div class=\"row-fluid\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"page_title\">We may be small but we have <br/>a lot going on.</div>
                        </div>
                        <div class=\"row\">
                        \t<div class=\"contact_button\">
                            \t<a href=\"#contact\" >Impressed?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class=\"clear\"></div>
    
    <section class=\"page\" id=\"contact\">
    \t<div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                        <div class=\"page_title\">Want to work with us?</div>
                        <div class=\"promo_txt\">GET IN TOUCH AND SAY HI! OR...</div>
                    </div>
                    <div class=\"row contact\">
                        <div class=\"span8\">
                            <div class=\"sub_heading\">Write to us</div>
                            <div class=\"clear\"></div>
                            <form class=\"contact_form\" name=\"myform\" id=\"contactForm\" action=\"processForm.php\" enctype=\"multipart/form-data\" method=\"post\">
                                <div id=\"fname\"  class=\"alert alert-error error\">
                                Name must not be empty
                                </div>
                                <div id=\"fmail\" class=\"alert alert-error  error\">
                                Please provide a valid email
                                </div>
                                <div id=\"fmsg\" class=\"alert alert-error  error\">
                                Message should not be empty
                                </div>
                                <input required class=\"span11 input\" size=\"16\" type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\"/>
                                
                                <input required class=\"span11 input\" size=\"16\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email Address\"/>
                                
                                <textarea required class=\"span11 textarea\" name=\"message\" id=\"msg\" placeholder=\"Message\"></textarea>
                                
                                <input class=\"button send_msg small_btn\" value=\"Send Message\" type=\"submit\" name=\"submit\" id=\"submit\"  />
                                
                            </form>
                        </div>
                        <div class=\"span4 contact_info\">
                            <div class=\"sub_heading\">Get In Touch With</div>
                            <p>
                                12345 North Main Street,<br/>
                                New York, NY 555555<br/>
                                <br/>
                                Phone:  1.800.555.6789<br/>
                                Fax: 1.800.555.6789<br/>
                                Email: mail@yourmail.com<br/>
                                Web: www.domain.tld<br/>
                            </p>
                            <div class=\"sub_heading\">Be Social</div>
                            <div class=\"social-icons\">
                                <a href=\"#\" data-placement=\"bottom\" data-original-title=\"FACEBOOK\">f</a>
                                <a href=\"#\" data-placement=\"bottom\" data-original-title=\"GOOGLE PLUS\">g</a>
                                <a href=\"#\"  data-placement=\"bottom\" data-original-title=\"LINKEDIN\">i</a>
                                <a href=\"#\" data-placement=\"bottom\" data-original-title=\"TWITTER\">l</a>
                                <a href=\"#\" data-placement=\"bottom\" data-original-title=\"PINTREST\">&amp;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"clear\"></div>
        
        <div class=\"quick_connect\">
        \t<div class=\"container-fluid\">
            \t<div class=\"row-fluid\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"page_title\">You won't <br/>be disappointed.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
\t
    <div class=\"clear\"></div>
    
    <footer>
    \t<div class=\"container-fluid\">
        \t<div class=\"row-fluid\">
            \t<div class=\"container\">
                \t<div class=\"row\">
                    \t<div class=\"span8 offset2\">
                        \t<img src=\"";
        // line 1146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo_small.png\" title=\"Skroll HTML5 Premium Responsive Theme by Designova\" alt=\"Designova HTML5 Responsive Theme Development"), "html", null, true);
        echo "\" />
                            <div class=\"clear\"></div>
                        \t<p>Skroll is a website design agency based in Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. Vodio dignissimos ducimus qui blanditiis.</p>
                            <div class=\"clear\"></div>
                            <div class=\"connect\">
                            \t<a href=\"#\">info@skroll.com</a>
                                <span>.</span>
                                <a href=\"#\">Twitter</a>
                                <span>.</span>
                                <a href=\"#\">Facebook</a>
                                <span>.</span>
                                <a href=\"#\">Blog</a>
                            </div>
                            <div class=\"clear\"></div>
                            <p>Copyright &copy; 2013 Skroll. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



\t<!-- JS
\t================================================== -->
  
<!-- End Document
================================================== -->
</body>
</html>   
     
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1220 => 1146,  751 => 680,  742 => 674,  733 => 668,  724 => 662,  715 => 656,  706 => 650,  697 => 644,  688 => 638,  679 => 632,  670 => 626,  661 => 620,  652 => 614,  644 => 609,  611 => 579,  596 => 567,  31 => 4,  28 => 3,);
    }
}
