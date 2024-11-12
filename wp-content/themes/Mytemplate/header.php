<!DOCTYPE html>
<html class="no-js" <?php echo language_attributes(); ?>

    <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Venue - Responsive Web Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontAwesome.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/hero-slider.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl-carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/datepicker.css">
        <!--  -->

        <link href="<?php echo get_template_directory_uri();?>/assets/https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <?php wp_head(); ?>
    </head>

<body>
 

    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 flex justify-between">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a class="flex" href="index.html">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="Venue Logo">
                            </div>
                        </a>


                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="#">Popular</a></li>
                                <li><a href="#">Most Visited</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Most Visited 1</a>
                                        </li>
                                        <li><a href="#">Most Visited 2</a>
                                        </li>
                                        <li><a href="#">Most Visited 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="#">Blog Entries</a></li>
                                <li><a class="scrollTo" data-scrollTo="services" href="#">Our Services</a></li>
                                <li><a class="scrollTo" data-scrollTo="contact" href="#">Contact Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
 

