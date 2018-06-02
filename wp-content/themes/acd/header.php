
<div class="container">

            <!-- Nav -->
            <nav id="nav">
               <!-- <ul>
                    <li class="current_page_item"><a href="index.html">Homepage</a></li>
                    <li>
                        <a href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Magna phasellus</a></li>
                            <li><a href="#">Etiam dolore nisl</a></li>
                            <li>
                                <a href="#">Phasellus consequat</a>
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Phasellus consequat</a></li>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li><a href="#">Etiam dolore nisl</a></li>
                                    <li><a href="#">Veroeros feugiat</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                </ul> -->
                <?php
                $args = array(
                    'parent' => 0,
                    'sort_column' => 'menu_order',
                    'sort_order' => 'asc',
                    'post_type' => 'page',
                    'post_status' => 'publish'
                );

                $pages = get_pages($args);
                foreach ( $pages as $page ) {

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
            <header id="header">
                <h1><a href="index.html">Momentum <span>by Pixelarity</span></a></h1>
            </header>

        </div>