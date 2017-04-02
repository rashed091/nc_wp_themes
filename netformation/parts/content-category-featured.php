<?php

// WP_Query For Featured Category Posts
$args = array (
	'cat'            => 6,
  'post_type'      => 'post',
  'posts_per_page' => '5',
  'order'          => 'modified',
);

// The Query
$featuredPostsQuery = new WP_Query( $args );
    ?>
    <div class="articles-box" id="content-category-featured">
			<div class="row">
	        <div class="large-5 medium-8 small-5 columns">
	            <li class="category-icon featured categoryTitle">Featured</li>
	        </div>

	        <div class="large-7 medium-4 small-7 columns">
	            <div class="category-buttons float-right">
	                <div class="button-group">
	                    <a class="button category-button hellobtn" href="<?php echo get_category_link(6) ?>">View All</a>
	                    <a class="button show-for-large category-button hideshow">HIDE</a>
	                    <a class="button hide-for-small-only category-button left-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	                    <a class="button hide-for-small-only category-button right-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></a>

	                    <div id="munatuna"></div>
	                </div>
	            </div>

	        </div>
	    </div>


        <div class="row rows-of-posts three" data-equalizer>
            <?php while ($featuredPostsQuery->have_posts()) : $featuredPostsQuery->the_post(); ?>
                <div class="large-4 medium-6 small-12 columns" id="test-eq" > <!-- Beginning of the individual post output -->
                    <?php get_template_part('parts/single-article-box'); ?>
                </div> <!-- End of the complete post output -->

            <?php endwhile; ?>
        </div>
    </div>
    <?php
    wp_reset_postdata(); ?>
