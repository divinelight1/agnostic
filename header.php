
<!DOCTYPE HTML>

<html>

    <head>

    <title><?php wp_title(); ?>  <?php bloginfo('name'); ?></title>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css" />

        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <?php wp_head(); ?>
    </head>

    <body class="landing">



        <!-- Page Wrapper -->

            <div id="page-wrapper">
                <!-- Header -->

                    <header id="header" class="alt">

                    <h1><a href="<?php bloginfo('url'); ?>">Agnostic</a></h1>

                        <nav id="nav">

                            <ul>

                                <li class="special">

                                    <a href="#menu" class="menuToggle"><span>Menu</span></a>

                                    <div id="menu">

                                        <ul>

                                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                                        </ul>

                                    </div>

                                </li>

                            </ul>

                        </nav>

                    </header>



                <!-- Banner -->

                    <section id="banner">

                        <div class="inner">

                            <h2>Aldin Mujkic</h2>

                            <p>Frontend developer<br />

                            </p>

                            <ul class="actions">

                                <li><a href="#" class="button special">Hire Me</a></li>

                            </ul>

                        </div>

                        <a href="#one" class="more scrolly">See More</a>

                    </section>


