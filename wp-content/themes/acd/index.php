<!--<!DOCTYPE HTML>
<!--
Theme Name: ACD
Theme URI: https://www.acd.org.au/
Description: A brief description.
Version: 1.0
Author: RHoK
Author URI: http://www.rhokaustralia.org/
Based on Momentum by Pixelarity (pixelarity.com | hello@pixelarity.com)
License: pixelarity.com/license
-->
<html>
<head>
    <title>Association for Children with a Disability</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <?php wp_head(); ?>
</head>
<body class="homepage">
<div id="page-wrapper">

    <!-- Header Wrapper -->
    <?php get_header(); ?>

    <!--<div id="header-wrapper">

    </div> -->

    <!-- Banner Wrapper -->
   <!-- <div id="banner-wrapper">

        <!-- Banner -->
       <!-- block -->
      <!-- <div id="banner" class="container">
            <div class="row">
                <div class="12u">

                    <!-- Slider -->
                  <!--  <div id="slider">
                        <div class="viewer">
                            <div class="reel">
                                <div class="slide">
                                    <div class="info">
                                        <h2>Dignissim feugiat lorem<br />ipsum nulla veroeros</h2>
                                        <span>Integer gravida nibh quis urna</span>
                                        <a class="link" href="#">Full story ...</a>
                                    </div>
                                    <img src="images/slide01.jpg" alt="" />
                                </div>
                                <div class="slide">
                                    <div class="info">
                                        <h2>Phasellus nec erat sit amet<br />nibh pellentesque</h2>
                                        <span>Aliquam feugiat lorem ipsum dolor</span>
                                        <a class="link" href="#">Full story ...</a>
                                    </div>
                                    <img src="images/slide02.jpg" alt="" />
                                </div>
                                <div class="slide">
                                    <div class="info">
                                        <h2>Etiam dolore veroeros<br />lorem dolore nulla</h2>
                                        <span>Nulla volutpat dolor sed amet</span>
                                        <a class="link" href="#">Full story ...</a>
                                    </div>
                                    <img src="images/slide03.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="indicator">
                            <ul>
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="4u 12u(mobile)">
                    <section class="highlight">
                        <a href="#">
                            <span class="image fit"><img src="images/pic02.jpg" alt=""></span>
                            <header>
                                <h2>Magna sed lorem</h2>
                                <p>Amet nulla consequat</p>
                            </header>
                        </a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="highlight alt">
                        <a href="#">
                            <span class="image fit"><img src="images/pic03.jpg" alt=""></span>
                            <header>
                                <h2>Magna sed lorem</h2>
                                <p>Amet nulla consequat</p>
                            </header>
                        </a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="highlight alt2">
                        <a href="#">
                            <span class="image fit"><img src="images/pic04.jpg" alt=""></span>
                            <header>
                                <h2>Magna sed lorem</h2>
                                <p>Amet nulla consequat</p>
                            </header>
                        </a>
                    </section>
                </div>
            </div>
        </div>

    </div> -->

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        <!-- Main -->
        <div id="main" class="container">
            <div class="row">
                <div class="1u"></div>
                <div class="10u">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                    <!--<article id="content-< ?php the_ID(); ?>" < ?php post_class(); ?>> -->
                        <!--< ?php the_title(); ?> -->
                    <!--< ?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?> -->
                    <!--< ?php the_content(); ?> -->

                    </article>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
                </div>
                <div class="1u"></div>
        </div>
        </div>
    </div>

    <!-- Main Wrapper -->
    <!--<div id="main-wrapper">

        <!-- Main  -->
        <!--<div id="main" class="container">

        </div>

    </div> -->

    <!-- Footer Wrapper -->
    <div id="footer-wrapper">

        <!-- Footer -->
        <?php get_footer(); ?>

    </div>

</div>

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.dropotron.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.slidertron.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/skel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/skel-viewport.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

</body>
</html>