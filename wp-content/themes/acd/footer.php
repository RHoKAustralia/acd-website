<footer id="footer" class="container">
    <div class="row">
        <div class="3u 12u(mobile)">
            <section>

                <h2>Site Map</h2>
                <ul class="style1">
                    <li class="first"><a href="#">Quis lacus praesent et aliquet</a></li>
                    <li><a href="#">Sagittis nisi vel dolore dignissim</a></li>
                    <li><a href="#">Pellentesque nulla adipiscing</a></li>
                    <li><a href="#">Quis lacus praesent et aliquet</a></li>
                    <li><a href="#">Sagittis nisi vel dolore dignissim</a></li>
                    <li><a href="#">Pellentesque nulla adipiscing</a></li>
                </ul>
            </section>
        </div>

        <!-- Posts tagged in the 'Footer' category -->
        <div class="3u 12u(mobile)">
            <section>
                <h2>Legal</h2>
                <ul class="style1">

                <!--    < ?php
                    $args = array( 'category_name' => 'Footer' );

                    $footerposts = get_posts( $args );

                    $i = 1;

                    if(count($footerposts) === 0) { echo "Nothing to see here"; }

                    foreach ( $footerposts as $post ) : setup_postdata( $post ); ?>

                        < ?php ( $i == 1 ? echo("<li class='first'>") : echo("<li>")); $i++; ?>

                        <a href="< ?php the_permalink(); ?>">< ?php the_title(); ?></a></li>

                    < ?php endforeach; wp_reset_postdata(); ?> -->

                </ul>
            </section>
        </div>
        <div class="6u 12u(mobile)">
            <section>
                <h2>Follow Us</h2>
                <div class="row">
                    <div class="6u 12u(mobile)"><a href="https://twitter.com/ACDinfo" target="_blank" class="button big icon fa-twitter">@ACDinfo</a></div>
                    <div class="6u 12u(mobile)"><a href="https://www.facebook.com/acdvic" target="_blank" class="button big alt icon fa-facebook">ACD (Vic)</a></div>
                    <!--<div class="4u 12u(mobile)"><a href="#" class="button big alt2 icon fa-instagram">2.8k</a></div> -->
                </div>
            </section>
            <section>
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="6u 12u(mobile)">
                        <ul class="style3">
                            <li class="icon fa-envelope">
                                <a href="mailto:mail@acd.org.au" class="">mail@acd.org.au</a><br/>
                                <a href="mailto:acdsupport@acd.org.au" class="">acdsupport@acd.org.au</a>
                            </li>
                        </ul>
                    </div>
                    <div class="6u 12u(mobile)">
                        <ul class="style3">
                            <li class="icon fa-phone">
                                +61 3 9880 7000<br/>
                                1800 654 013 (rural callers)
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="2u 12u(mobile>">
            <span class="image fit">
                <img src="<?php bloginfo('template_url'); ?>/images/flags.png">
            </span>
        </div>
        <div class="10u 12u(mobile)">
            <section>
                <p>ACD acknowledges Aboriginal and Torres Strait Islander peoples as First Australians and recognises their culture, history, diversity and their deep connection to the land. We recognise the distinct rights and perspectives of all Aboriginal and Torres Strait Islander people. We also acknowledge that ACD is on the land of the Kulin Nation and we pay our respects to their Elders past and present</p>
            </section>
        </div>
    </div>
    <div id="copyright">
        &copy; ACD. All rights reserved.
    </div>
</footer>