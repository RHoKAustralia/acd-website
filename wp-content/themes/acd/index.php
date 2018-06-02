<!DOCTYPE HTML>
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
    <title>Untitled</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <?php wp_head(); ?>
</head>
<body class="homepage">
<div id="page-wrapper">

    <!-- Header Wrapper -->
    <div id="header-wrapper">
        <?php get_header(); ?>
    </div>

    <!-- Banner Wrapper -->
    <div id="banner-wrapper">

        <!-- Banner -->
       <!-- block -->
       <div id="banner" class="container">
            <div class="row">
                <div class="12u">

                    <!-- Slider -->
                    <div id="slider">
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

    </div>

    <!-- Featured Wrapper -->
    <div id="featured-wrapper">

        <!-- Featured -->
        <div id="featured" class="container">
            <div class="row">
                <div class="3u 12u(mobile)">
                    <section>
                        <h2>Sed nullam dolor lorem feugiat.</h2>
                        <p class="subtitle">Lorem ipsum sed dolor et amet adipiscing nullam.</p>
                        <ul class="style1">
                            <li class="first"><a href="#">Phasellus dapibus nullam</a></li>
                            <li><a href="#">Elementum eget vestibulum</a></li>
                            <li><a href="#">Quis lacus praesent et aliquet</a></li>
                            <li><a href="#">Sagittis nisi vel dolore dignissim</a></li>
                            <li><a href="#">Pellentesque nulla adipiscing</a></li>
                            <li><a href="#">Feugiat consequat lorem</a></li>
                        </ul>
                    </section>
                </div>
                <div id="box1" class="3u 12u(mobile)">
                    <section>
                        <a href="#" class="image fit"><img src="images/pic05.jpg" alt=""></a>
                        <h3>Ipsum et consequat</h3>
                        <p>Phasellus dapibus nullam sit  elementum sem eget vestibulum et quis lacus. Praesent aliquet sagittis nisi vel dignissim.</p>
                        <footer>
                            <a href="#" class="button icon fa-arrow-circle-right">Learn More</a>
                        </footer>
                    </section>
                </div>
                <div class="3u 12u(mobile)">
                    <section>
                        <a href="#" class="image fit"><img src="images/pic06.jpg" alt=""></a>
                        <h3>Elementum adipiscing</h3>
                        <p>Phasellus dapibus nullam sit  elementum sem eget vestibulum et quis lacus. Praesent aliquet sagittis nisi vel dignissim.</p>
                        <footer>
                            <a href="#" class="button icon alt fa-arrow-circle-right">Learn More</a>
                        </footer>
                    </section>
                </div>
                <div class="3u 12u(mobile)">
                    <section>
                        <a href="#" class="image fit"><img src="images/pic07.jpg" alt=""></a>
                        <h3>Mauris lorem ipsum</h3>
                        <p>Phasellus dapibus nullam sit  elementum sem eget vestibulum et quis lacus. Praesent aliquet sagittis nisi vel dignissim.</p>
                        <footer>
                            <a href="#" class="button icon alt2 fa-arrow-circle-right">Learn More</a>
                        </footer>
                    </section>
                </div>

            </div>
        </div>

    </div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        <!-- Main  -->
        <div id="main" class="container">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="major">
                    <span class="category">&nbsp;</span>
                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <ul class="meta"></ul>
                </header>
                <!--<div class="author">< ?php the_author(); ?></div> -->
                <!--</div><!--end post header-->
                <div class="entry clear">
                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                    <!--< ?php edit_post_link(); ?> -->
                    <!-- < ?php wp_link_pages(); ?> </div>
                <!--end entry-->
                    <div class="post-footer">
                        <!-- <div class="comments">< ?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                    </div><!--end post footer-->
                    </div><!--end post-->
                    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                    <!-- <div class="navigation index">
                        <div class="alignleft">< ?php next_posts_link( 'Older Entries' ); ?></div>
                        <div class="alignright">< ?php previous_posts_link( 'Newer Entries' ); ?></div>
                    </div><!--end navigation-->
                    <?php else : ?>
                    <?php endif; ?>
        </div>

    </div>

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