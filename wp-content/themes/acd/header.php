
<!-- Header Wrapper -->
<div id="header-wrapper">

    <div class="container">

        <!-- Nav -->
        <nav id="nav">
            <?php
            $args = array(
                    'parent' => 0,
                    'sort_column' => 'menu_order',
                    'sort_order' => 'asc',
                    'post_type' => 'page',
                    'post_status' => 'publish'
            );

            $pages = get_pages($args);

            foreach ( $pages as $page )
            {
                $args = array(
                        'sort_column' => 'menu_order',
                        'sort_order' => 'asc',
                        'child_of' => $page->ID,
                        'post_type' => 'page',
                        'post_status' => 'publish',
                );

                $children = get_pages($args);

                if(count($children) > 0)
                {
                    //$option = "<li><a href='". get_page_link($page->ID) . "' class='dropdown'>$page->post_title</a>";
                    $option = "<li><a href='#' class='dropdown'>$page->post_title</a>";
                    $option .= "<ul>";

                    foreach($children as $child)
                    {
                        $option .= '<li><a href="' . get_page_link($child->ID) . '">';
                        $option .= $child->post_title;
                        $option .= '</a></li>';
                    }

                    $option .= "</ul></li>";
                }
                else
                    {
                        $option = '<li><a href="' . get_page_link($page->ID) . '">';
                        $option .= $page->post_title;
                        $option .= '</a></li>';
                    }

                    echo $option;
                }
                ?>
        </nav>

        <!-- Header -->
        <div class="row">
            <div class="3u">&nbsp;</div>
            <div class="6u">
                <span class="image fit"><img src="<?php echo get_option('acd_logo'); ?>" href="index.php"></span>
            </div>
            <div class="3u">&nbsp;</div>
        </div>

        <!-- Header -->
       <!-- <header id="header"> -->
            <!--<h1><a href="index.php">A<span>ssociation for</span> C<span>hildren with a</span> D<span>isability</span></a></h1>-->
        <!-- </header> -->
    </div>
</div>

<!-- Banner Wrapper -->
<!--<div id="banner-wrapper">

    <!-- Banner -->
    <!--<div id="banner" class="container">
        <div class="row">
            <div class="6u">
                <span class="image fit"><img src="< ?php echo get_option('acd_logo'); ?>" href="index.php"></span>
            </div>
        </div>
    </div>
</div> -->