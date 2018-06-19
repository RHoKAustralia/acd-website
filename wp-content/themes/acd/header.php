
<!-- Header Wrapper -->
<div id="header-wrapper">

    <div class="container">

        <!-- Header -->
        <div class="row uniform">
            <div class="6u 12u$(mobile)">
                <span class="image fit"><img src="<?php echo get_option('acd_logo'); ?>" href="index.php"></span>
            </div>
            <div class="6u 12u$(mobile)">
                <div class="row uniform">
                    <div class="6u 12u$(mobile)"><a class="button icon fa-map-marker headerCorners" style="cursor: pointer;" href="#contactus">Contact Us</a></div>
                    <div class="6u 12u$(mobile)"><a class="button icon alt fa-usd headerCorners" style="cursor: pointer;" href="#">Donate</a></div>
                </div>
                <div class="12u 12u$(mobile)">
                    <input type="search" name="search" id="search" placeholder="Search">
                </div>
                <div class="12u 12u$(mobile)">
                    <ul class="actions">
                        <li>
                            <a class="button primary icon fa-map-marker" style="cursor: pointer;" href="#contactus">Contact Us</a>
                            <a class="button primary icon fa-donate" style="cursor: pointer;" href="#">Donate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
           <!-- <li class="current_page_item"><a href="/">Home</a></li> -->

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
                    $option = "<li><a href='#'>$page->post_title</a>";
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
            </ul>
        </nav>

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