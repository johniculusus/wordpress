<div id=content>
	<!-- Fixed navbar -->
	<div class="navbar navbar-fixed-top navbar-fixed-top-colored">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				    <?php bloginfo( 'name' ); ?>
				</a>
				<div id="site-navigation" class="nav-collapse collapse">
					<ul class="nav">
					    <li <?php if(get_the_ID() == '1'){ echo('class="current_page_item"');} ?> >
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        </li>

                        <?php
                            $pages = get_pages();
                            foreach ( $pages as $page ) {
                                $children = wp_list_pages('title_li=&child_of='.$page->ID.'&echo=0');
                                $isParent = ($page->post_parent);
                                $isCurrentPage = ($page->ID == get_the_ID());

                                if ( empty($isParent)) {
                                $option = '<li class="' . (($children) ? 'dropdown ' : '') . (($post->post_parent == $page->ID || $isCurrentPage) ? 'current_page_item' : '') . '">';

                                $option .= '<a href="' . get_page_link( $page->ID ) . '"' . (($children) ?  ' class="dropdown-toggle" data-toggle="dropdown"' : '') .  '>';
                                $option .= $page->post_title;
                                    if ($children) {
                                        $option .= ' <b class="caret"></b>';
                                    }
                                $option .= '</a>';
                                    if ($children) {
                                        $option .= '<ul class="dropdown-menu">';
                                        $option .= $children;
                                        $option .= '</ul>';
                                    }
                                $option .= '</li>';
                                echo $option;
                                }
                            }
                        ?>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
</div>