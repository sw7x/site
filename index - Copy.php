<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webdesignersrilnak.lk</title>
        <!-- Load Roboto font -->

        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />

        <link rel="stylesheet" type="text/css" href="css/theme.css" />
        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie7.css"/>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />


        <link rel="stylesheet" href="css/preloader.css">
        <script src="js/modernizr-2.6.2.min.js"></script>


        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />


        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>

        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>

        <div class="navbar hidden">

            <div id="topbar" class="clearfix" style="background-color: rgb(6, 59, 128)">
                <div class="container">
                    <div class="span5">
                        <ul class="top-soc-small social">
                            <li><a class="soc-facebook" href="#"></a></li>
                            <li><a class="soc-twitter" href="#"></a></li>
                            <li><a class="soc-google" href="#"></a></li>
                            <li><a class="soc-pinterest" href="#"></a></li>
                            <li><a class="soc-linkedin" href="#"></a></li>
                            <li><a class="soc-skype soc-icon-last" href="#"></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="span7">
                        <div class="menu-top-menu-container">
                            <ul id="top-menu" class="top-menu clearfix">
                                <li class=""><i class="fa fa-phone"></i><a href="tel:+94779190673"> 077-9190673</a></li>
                                <li class=""><i class="fa fa-phone"></i><a href="tel:+9476-6755645"> 076-6755645</a></li>
                                <li class=""><i class="fa fa-envelope"></i><a href="mailto:info@webdesignerssrilanka.lk" class=""> info@webdesignerssrilanka.lk</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>



            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#clients">Clients</a></li>
                            <li><a href="#price">Price</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>













        <!-- Start home section -->
            <div id="home">
                <!-- Start cSlider -->
                <div id="da-slider" class="da-slider">
                    <div class="triangle"></div>
                    <!-- mask elemet use for masking background image -->
                    <div class="mask"></div>
                    <!-- All slides centred in container element -->
                    <div class="container">
                        <!-- Start first slide -->

                        <?php
                        $r = array(2,5,7,9,13,17,24,25);
                        for ($i=0;$i<7;$i++)
                        {
                            ?>
                            <div class="da-slide">
                                <h2 class="fittext2">ggg Welcome to ssss edede</h2>
                                <h4>Clean & responsive</h4>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
<!--                                <a href="#" class="da-link button">Read more</a>-->
                                <div class="da-img">
                                    <img src="images/slider/<?php echo $r[$i];?>.png" alt="image01" width="480">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- End first slide -->
                        <!-- Start second slide
                        <div class="da-slide">
                            <h2>Easy management</h2>
                            <h4>Easy to use</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <a href="#" class="da-link button">Read more</a>
                            <div class="da-img">
                                <img src="images/Slider02.png" width="320" alt="image02">
                            </div>
                        </div>-->
                        <!-- End second slide -->
                        <!-- Start third slide
                        <div class="da-slide">
                            <h2>Revolution</h2>
                            <h4>Customizable</h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <a href="#" class="da-link button">Read more</a>
                            <div class="da-img">
                                <img src="images/Slider03.png" width="320" alt="image03">
                            </div>
                        </div>-->
                        <!-- Start third slide -->
                        <!-- Start cSlide navigation arrows -->
                        <div class="da-arrows">
                            <span class="da-arrows-prev"></span>
                            <span class="da-arrows-next"></span>
                        </div>
                        <!-- End cSlide navigation arrows -->
                    </div>

                </div>
            </div>
            <!-- End home section -->
            <!-- Service section start -->




            <div class="section primary-section" id="service">

                <div class="container">
                    <!-- Start title section -->
                    <div class="title">
                        <h1>Our Services</h1>
                        <!-- Section's title goes here -->
                        <p style="text-align: justify;">We provide various kind of services according to your neeeds.Below Shows Categorized view providing services.Our main target is provide full Customer satisfaction</p>
                        <!--Simple description for section goes here. -->
                    </div>
                    <div class="row-fluid">
                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service2.png" alt="service 2" />
                                </div>
                                <h3>Web Design</h3>
                                <p>We Create Eye catching elegent unique designs. because elegent and beautiful
                                    design is the key thing that seek attention of website visitors.
                                </p>
                            </div>
                        </div>

                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service6.png" alt="service 3">
                                </div>
                                <h3>Web Development</h3>
                                <p>We Create Modern And Powerful Html5 And CSS3 Code Easy For Read And Customize.</p>
                            </div>
                        </div>
                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service4.png" alt="service 1">
                                </div>
                                <h3>Search Engine Optimization</h3>
                                <p>We Create Modern And Clean Theme For Your Business Company.</p>
                            </div>
                        </div>


                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service3.png" alt="service 3">
                                </div>
                                <h3>Mobile Application</h3>
                                <p>We Create Modern And Powerful Html5 And CSS3 Code Easy For Read And Customize.</p>
                            </div>
                        </div>

                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service1.png" alt="service 1">
                                </div>
                                <h3>Social Bookmarking</h3>
                                <p>We Create Modern And Clean Theme For Your Business Company.</p>
                            </div>
                        </div>

                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service5.png" alt="service 2" />
                                </div>
                                <h3>Branding & Logo Design</h3>
                                <p>We Create Modern And Powerful Theme With Lots Animation And Features</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service section end -->
            <!-- Portfolio section start -->
            <div class="section secondary-section " id="portfolio">
                <!--<div class="qqqqq" style="">-->
                <div class="triangle"></div>
                <div class="container">
                    <div class=" title">
                        <h1>Have You Seen our Works?</h1>
                        <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                    </div>
                    <ul class="nav nav-pills">
                        <li class="filter" data-filter="all">
                            <a href="#noAction">All</a>
                        </li>
                        <li class="filter" data-filter="webdesign">
                            <a href="#noAction">Web Design</a>
                        </li>
                        <li class="filter" data-filter="webdevelopment">
                            <a href="#noAction">Web Development</a>
                        </li>
                        <li class="filter" data-filter="identity">
                            <a href="#noAction">Identity</a>
                        </li>
                    </ul>
                    <!-- Start details for portfolio project 1 -->
                    <div id="single-project">
                        <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/portfolio/po-01.png" alt="project 1" />
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 1 -->
                        <!-- Start details for portfolio project 2 -->
                        <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio02.png" alt="project 2">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>Life is a song - sing it. Life is a game - play it. Life is a challenge - meet it. Life is a dream - realize it. Life is a sacrifice - offer it. Life is love - enjoy it.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 2 -->
                        <!-- Start details for portfolio project 3 -->
                        <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio03.png" alt="project 3">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>How far you go in life depends on your being tender with the young, compassionate with the aged, sympathetic with the striving and tolerant of the weak and strong. Because someday in your life you will have been all of these.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 3 -->
                        <!-- Start details for portfolio project 4 -->
                        <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio04.png" alt="project 4">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Project for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>Life's but a walking shadow, a poor player, that struts and frets his hour upon the stage, and then is heard no more; it is a tale told by an idiot, full of sound and fury, signifying nothing.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 4 -->
                        <!-- Start details for portfolio project 5 -->
                        <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio05.png" alt="project 5">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>We need to give each other the space to grow, to be ourselves, to exercise our diversity. We need to give each other space so that we may both give and receive such beautiful things as ideas, openness, dignity, joy, healing, and inclusion.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 5 -->
                        <!-- Start details for portfolio project 6 -->
                        <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio06.png" alt="project 6">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>I went to the woods because I wished to live deliberately, to front only the essential facts of life, and see if I could not learn what it had to teach, and not, when I came to die, discover that I had not lived.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 6 -->
                        <!-- Start details for portfolio project 7 -->
                        <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio07.png" alt="project 7">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>Always continue the climb. It is possible for you to do whatever you choose, if you first get to know who you are and are willing to work with a power that is greater than ourselves to do it.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 7 -->
                        <!-- Start details for portfolio project 8 -->
                        <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio08.png" alt="project 8">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 8 -->
                        <!-- Start details for portfolio project 9 -->
                        <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                            <div class="span6">
                                <img src="images/Portfolio09.png" alt="project 9">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Some Client</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div>
                                            <span>Client</span>Some Client Name</div>
                                        <div>
                                            <span>Date</span>July 2013</div>
                                        <div>
                                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                        <div>
                                            <span>Link</span>http://examplecomp.com</div>
                                    </div>
                                    <p>I learned that we can do anything, but we can't do everything... at least not at the same time. So think of your priorities not in terms of what activities you do, but when you do them. Timing is everything.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 9 -->
                        <ul id="portfolio-grid" class="thumbnails row">
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-01.png" alt="project 1">
                                    <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-02.png" alt="project 2">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-03.png" alt="project 3">
                                    <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-04.png" alt="project 4">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdevelopment">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-05.png" alt="project 5">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-06.png" alt="project 6">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix identity">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-08.png" alt="project 7" />
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdevelopment">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-07.png" alt="project 8">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-09.png" alt="project 9">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>

                            <li class="span4 mix webdevelopment">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-10.png" alt="project 9">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>

                            <li class="span4 mix webdesgn">
                                <div class="thumbnail">
                                    <img src="images/portfolio/po-11.png" alt="project 9">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Thumbnail label</h3>
                                    <p>Thumbnail caption...</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            <!--</div>-->
            </div>
            <!-- Portfolio section end -->
            <!-- About us section start -->
            <div class="section primary-section" id="about">
                <div class="triangle2"></div>
                <div class="container">

                    <div class="title">
                        <h1>About Us</h1>
                        <p style="text-align: justify">Web Designers Sri Lanka is a locally based web design and development company. We specialize
                            in creating websites that build company profiles, utilizing a range of online marketing strategies
                            and web technologies. We provide extensive experience in search engine optimization and search engine
                            marketing. We also specialize in website traffic analysis. We are keen advocates for mobile responsive
                            web design, web accessibility best practice and cross browser compatibility in order to optimize the
                            end user experience.
                        </p>

                        <h1>Our Mission</h1>
                        <p style="text-align: justify">We aim to provide long-lasting strategies that build on your businesses
                            bottom-line, reduce costs and maximize return on investment. The initial goal of any website design
                            is to create a strong online presence that connects with your audience. We are helping our clients
                            to realize value from online media. Our team will design, develop and execute our client's objectives
                            by integrating web solutions, mobile applications. If you would like us to assist you in building a
                            strong online presence for your business, please contact Web Designers Sri Lanka on 077 91 90 673.
                        </p>
                    </div>




                    <div class="title">
                        <h1>Where Are We Located</h1>
                        <p style="text-align:justify; ">We are located both colombo and kandy in sri lanka.</p>
                    </div>
                    <div class="row-fluid team">
                        <div class="span4" id="first-place">
                            <div class="thumbnail">
                                <img src="images/colombo.jpg" alt="team 1">
                                <h3>Colombo</h3>

                                <div class="mask">
                                    <h2>Colombo</h2>
                                    <p style="font-weight: bold;">Our Head Office is Located on Colombo <br>Call Us <a href="tel:+94779190673" style="color:#fff">&nbsp;&nbsp;077-9190673</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="span4" id="second-place">
                            <div class="thumbnail">
                                <img src="images/kandy.jpg" alt="team 1">
                                <h3>Kandy</h3>

                                <div class="mask">
                                    <h2>Kandy</h2>
                                    <p style="font-weight: bold;">We also have Branch in kandy <br>Call Us <a href="tel:+94766755645" style="color:#fff">&nbsp;&nbsp;076-6755645</a></p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="span4" id="third-person">-->
                            <!--<p>When you stop expecting people to be perfect, you can like them for who they are.</p>-->
                            <!--<div class="thumbnail">-->
                                <!--<img src="images/Team3.png" alt="team 1">-->
                                <!--<h3>John Doe</h3>-->
                                <!--<ul class="social">-->
                                    <!--<li>-->
                                        <!--<a href="">-->
                                            <!--<span class="icon-facebook-circled"></span>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<a href="">-->
                                            <!--<span class="icon-twitter-circled"></span>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<a href="">-->
                                            <!--<span class="icon-linkedin-circled"></span>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                                <!--<div class="mask">-->
                                    <!--<h2>Photographer</h2>-->
                                    <!--<p>When you stop expecting people to be perfect, you can like them for who they are.</p>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    </div>

                    <br>
                    <!--<h3>Skills</h3>-->
                    <!--<div class="row-fluid">-->
                        <!--<div class="span6">-->
                            <!--<ul class="skills">-->
                                <!--<li>-->
                                    <!--<span class="bar" data-width="80%"></span>-->
                                    <!--<h3>Graphic Design</h3>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<span class="bar" data-width="95%"></span>-->
                                    <!--<h3>Html & Css</h3>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<span class="bar" data-width="68%"></span>-->
                                    <!--<h3>jQuery</h3>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<span class="bar" data-width="70%"></span>-->
                                    <!--<h3>Wordpress</h3>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</div>-->
                        <!--<div class="span6">-->
                            <!--<div class="highlighted-box center">-->
                                <!--<h1>We're Hiring</h1>-->
                                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ullamcorper suscipit lobortis nisl ut aliquip consequat. I learned that we can do anything, but we can't do everything...</p>-->
                                <!--<button class="button button-sp">Join Us</button>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                </div>
            </div>

            <!-- About us section end -->
            <!--<div class="section secondary-section">-->
                <!--<div class="triangle"></div>-->
                <!--<div class="container centered">-->
                    <!--<p class="large-text">Elegance is not the abundance of simplicity. It is the absence of complexity.</p>-->
                    <!--<a href="#" class="button">Purshase now</a>-->
                <!--</div>-->
            <!--</div>-->
            <!-- Client section start -->
            <!-- Client section start -->
            <!--<div >-->
                <!--<div class="section primary-section">-->
                    <!--<div class="triangle2"></div>-->
                    <!---->

                <!--</div>-->
            <!--</div>-->
            <div class="section third-section" id="clients">
                <div class="triangle"></div>
                <div class="container centered">
                    <div class="sub-section">
                        <div class="title clearfix">
                            <div class="pull-left">
                                <h3>Our Clients</h3>
                            </div>
                            <ul class="client-nav pull-right">
                                <li id="client-prev"></li>
                                <li id="client-next"></li>
                            </ul>
                        </div>
                        <ul class="row client-slider" id="clint-slider">
                            <li>
                                <a href="">
                                    <img src="images/clients/c-1.png" alt="client logo 1">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-2.png" alt="client logo 2">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-3.png" alt="client logo 3">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-4.png" alt="client logo 4">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-5.png" alt="client logo 5">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-6.png" alt="client logo 6">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-7.png" alt="client logo 7">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-8.png" alt="client logo 7">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-9.png" alt="client logo 7">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-10.png" alt="client logo 7">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><div class="triangle3"></div>

            </div>
            <!-- Price section start -->
            <div id="price" class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Price</h1>
                        <p style="    text-align: justify;">Our Web Design Packages Starting at Rs 20,000 .
                            A great conversion-based web design is very powerful
                            and will greatly help you rank and grow your business,
                            which is why customers are constantly approaching our
                            creative and market-leading Web designers Sri Lanka team
                            to create unique and eye-catching designs for their websites
                            because they know great designs can instantly grab the attention
                            website visitors</p>
                    </div>
                    <div class="price-table row-fluid">
                        <div class="span3 price-column">
                            <h3>Starter</h3>
                            <ul class="list">
                                <li class="price"><strong>Rs 20,000/=</strong></li>
                                <li><strong>5 Web Pages</strong></li>
                                <li><strong>Free One Year Web Hosting</strong></li>
                                <li><strong>3 E-mail Accounts</strong></li>
                                <li><strong>Photo Gallery</strong></li>
                                <li><strong>Contact US form</strong></li>
                                <li><strong>Basic SEO</strong></li>
                                <li><strong>-</strong></li>
                                <li><strong>-</strong></li>
                            </ul>
                            <a href="#contact-form" class="button button-ps">Order Now</a>
                        </div>
                        <div class="span3 price-column">
                            <h3>Premium</h3>
                            <ul class="list">
                                <li class="price"><strong>Rs 40,000/=</strong></li>
                                <li><strong>10 Web Pages</strong></li>
                                <li><strong>Responsive design</strong></li>
                                <li><strong>Free One Year Web Hosting</strong></li>
                                <li><strong>5 E-mail Accounts</strong></li>
                                <li><strong>Photo Gallery</strong></li>
                                <li><strong>Contact US form</strong></li>
                                <li><strong>Basic SEO</strong></li>
                                <li><strong>-</strong></li>
                            </ul>
                            <a href="#contact-form" class="button button-ps">Order Now</a>
                        </div>
                        <div class="span3 price-column">
                            <h3>Business</h3>
                            <ul class="list">
                                <li class="price"><strong>Rs 65,000/=</strong></li>
                                <li><strong>Unlimited Web Pages</strong></li>
                                <li><strong>CMS Website</strong></li>
                                <li><strong>Responsive design</strong></li>
                                <li><strong>Free One Year Web Hosting</strong></li>
                                <li><strong>10 E-mail Accounts</strong></li>
                                <li><strong>Video & Photo Galleries</strong></li>
                                <li><strong>Contact US form</strong></li>
                                <li><strong>Basic SEO</strong></li>

                            </ul>
                            <a href="#contact-form" class="button button-ps">Order Now</a>
                        </div>
                        <div class="span3 price-column">
                            <h3>Enterprise</h3>
                            <ul class="list">
                                <li class="price"><strong>Rs 80,000/=</strong></li>
                                <li><strong>Unlimited Web Pages</strong></li>
                                <li><strong>Category Based CMS</strong></li>
                                <li><strong>Responsive design</strong></li>
                                <li><strong>Free One Year Web Hosting</strong></li>
                                <li><strong>10 E-mail Accounts</strong></li>
                                <li><strong>Video & Photo Galleries</strong></li>
                                <li><strong>Contact US form</strong></li>
                                <li><strong>Basic SEO</strong></li>

                            </ul>
                            <a href="#contact-form" class="button button-ps">Order Now</a>
                        </div>
                    </div>
                    <div class="centered custom-plans-div">
                        <p class="price-text">We Offer Custom Plans. Contact Us For More Info.</p>
                        <a href="#contact-form" class="button">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- Price section end -->







        <!-- Blog section start -->
        <div id="blog" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Blog</h1>
                    <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                </div>

                <div class="blog-list row">
                    <div class="col-md-12">
                        <ul class="timeline">
                            <li  >
                                <div class="timeline-image">
                                    <a href="" title="Markup And Formatting">
                                        <img width="200" height="200" src="#" class="img-circle wp-post-image" alt="cabin" />									</a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <span>January 11, 2013</span>
                                        <h3 class="subheading"><a href="#" title="Markup And Formatting">Markup And Formatting</a></h3>
                                    </div>
                                    <div class="timeline-body">
                                        Headings Header one Header two Header three Header four Header five Header six Blockquotes Single line blockquote: Stay hungry. Stay foolish. Multi line blockquote with a cite reference: People think&hellip;								</div>
                                </div>
                            </li>
                            <li class="timeline-inverted" >
                                <div class="timeline-image">
                                    <a href="#" title="Image Alignment">
                                        <img width="200" height="200" src="#" class="img-circle wp-post-image" alt="cake" />									</a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <span>January 10, 2013</span>
                                        <h3 class="subheading"><a href="#" title="Image Alignment">Image Alignment</a></h3>
                                    </div>
                                    <div class="timeline-body">
                                        Welcome to image alignment! The best way to demonstrate the ebb and flow of the various image positioning options is to nestle them snuggly among an ocean of words. Grab&hellip;								</div>
                                </div>
                            </li>
                            <li  >
                                <div class="timeline-image">
                                    <a href="#" title="Text Alignment">
                                        <img width="200" height="200" src="#" class="img-circle wp-post-image" alt="circus" />									</a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <span>January 9, 2013</span>
                                        <h3 class="subheading"><a href="#" title="Text Alignment">Text Alignment</a></h3>
                                    </div>
                                    <div class="timeline-body">
                                        Default This is a paragraph. It should not have any alignment of any kind. It should just flow like you would normally expect. Nothing fancy. Just straight up text, free&hellip;								</div>
                                </div>
                            </li>
                            <li class="timeline-inverted" >
                                <div class="timeline-image">
                                    <a href="#" title="Sticky">
                                        <img width="200" height="200" src="#" class="img-circle wp-post-image" alt="game" />									</a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <span>January 7, 2013</span>
                                        <h3 class="subheading"><a href="#" title="Sticky">Sticky</a></h3>
                                    </div>
                                    <div class="timeline-body">
                                        This is a sticky post. There are a few things to verify: The sticky post should be distinctly recognizable in some way in comparison to normal posts. You can style the .sticky&hellip;								</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <p class="centered"><a href="#" class="button">More Posts</a></p>
            </div>
        </div>












        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contact Web Designers Sri Lanka</h1>
                        <p style="text-align: justify;">Web designers srilanka create a custom solution specific to your online business needs.
                            We specialize in providing high quality web design services for local professional businesses.
                            We are passionate online business builders who specialize in quality design, web development,
                            Mobile app development, online marketing and online publishing. Please view some examples of
                            our most recent projects. If you are looking for quality professional website services or if
                            you have a question about our website design services, please give us a Call on 077 91 90 673
                        </p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="triangle1"></div>
                    <div class="map-canvas" id="map-canvas">Loading map...</div>

                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3 style="color:#000 !important;">Submit Your Inquiry</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Well done!</strong>Your message has been sent.</div>
                                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="Your Name" />
                                            <div class="error left-align" id="err-name">Please enter name.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="Your Email" />
                                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="phone" placeholder="Your Phone number" />
                                            <div class="error left-align" id="err-phone">Please enter valid email adress.</div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="Your Message"></textarea>
                                            <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">

                        <div class="title">
                        <h3>Our Contact details</h3>
                        </div>


                            <address>Web Designers Sri Lanka, Oceanview Tower, Colombo 04, Sri Lanka</address>

                        <a href="mailto:info@webdesignerssrilanka.lk" class="info-mail">info@webdesignerssrilanka.lk</a>

                        <br><a href="tel:+94779190673">077-9190673</a>

                        <br><a href="tel:+9476-6755645">076-6755645</a>

                        <div class="title">
                            <h3>Are you ready to start with us?</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">

                        <ul class="soc social">
                            <li><a class="soc-facebook" href="#"></a></li>
                            <li><a class="soc-twitter" href="#"></a></li>
                            <li><a class="soc-google" href="#"></a></li>
                            <li><a class="soc-pinterest" href="#"></a></li>
                            <li><a class="soc-linkedin" href="#"></a></li>
                            <li><a class="soc-skype soc-icon-last" href="#"></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->

        <!-- Footer section start -->
        <div style="background: #005C97;
    background: -webkit-linear-gradient(to left, #01548A , #10264A);
        background: linear-gradient(to left, #01548A , #10264A);"><div class="triangle2"></div>
        <footer class="footer-distributed">

            <div class="footer-left">
                <a href="#" class="brand">
                    <img src="images/logo.png" width="120" height="40" alt="Logo" />
                    <!-- This is website logo -->
                </a>


                <ul class="footer-links">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#service">SERVICES</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#clients">CLIENTS</a></li>
                    <li><a href="#price">PRICE</a></li>
                    <li><a href="#blog">BLOG</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>



                <div class="footer_company_name">Web Designers Sri Lanka &copy; 2016</div>

            </div>

            <div class="footer-center">

                <div class="clearfix">
                    <i class="fa fa-map-marker" style="float: left;"></i>
                    <address style="float: left;padding:0px 10px;color: #fff;font-family: 'Lato', sans-serif;">Web Designers Sri Lanka,<br> Oceanview Tower,<br> Colombo 04,<br> Sri Lanka</address>
                </div>


                <div>
                    <i class="fa fa-phone"></i>
                    <p><a href="tel:+94779190673">077-9190673</a></p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p><a href="tel:+9476-6755645">076-6755645</a></p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:info@webdesignerssrilanka.lk" class="">info@webdesignerssrilanka.lk</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About The Company</span>
                    Web Designers Sri Lanka is a locally based web design and development company. We specialize in
                    creating websites that build company profiles, utilizing a range of online marketing strategies and
                    web technologies.
                </p>

                <div class="footer-icons">
                    <ul class="top-soc-small social">
                        <li><a class="soc-facebook" href="#"></a></li>
                        <li><a class="soc-twitter" href="#"></a></li>
                        <li><a class="soc-google" href="#"></a></li>
                        <li><a class="soc-pinterest" href="#"></a></li>
                        <li><a class="soc-linkedin" href="#"></a></li>
                        <li><a class="soc-skype soc-icon-last" href="#"></a></li>
                    </ul>
                </div>
            </div>

        </footer></div>
        <!-- Footer section end -->

        <!-- ScrollUp button start -->
        <div class="scrollup hidden">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->



        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

        <script type="text/javascript" src="js/app.js"></script>
        <script src="js/preloader.js"></script>


    </body>
</html>