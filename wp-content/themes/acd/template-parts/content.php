<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

       <?php
            the_title( '<h2 class="entry-title">', '</h2>' );
            the_content(); ?>

</article><!-- #post-<?php the_ID(); ?> -->