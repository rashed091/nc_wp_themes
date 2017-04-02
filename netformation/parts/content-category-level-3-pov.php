<?php

// WP_Query For Level 3 POV Category Posts
$args = array (
	'cat'            => 4,
  'post_type'      => 'post',
  'posts_per_page' => '9',
  'order'          => 'modified',
);

// The Query
$LevelThreePOV = new WP_Query( $args );
    ?>

<div class="articles-box" id="content-category-transform">
	<div class="row">
			<div class="large-8 medium-7 small-7 columns">
					<li class="category-icon transform categoryTitle">LEVEL 3 POV</li>
			</div>
			<div class="large-4 medium-5 small-5 columns">
					<div class="category-buttons float-right">
							<div class="button-group">
									<a class="button category-button hellobtn" href="<?php echo get_category_link(4) ?>">View All</a>
									<a class="button show-for-large category-button hideshow">HIDE</a>
									<a class="button hide-for-small-only category-button left-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
									<a class="button hide-for-small-only category-button right-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
					</div>

			</div>
	</div>

    <div class="row rows-of-posts three" data-equalizer>
        <?php while ($LevelThreePOV->have_posts()) : $LevelThreePOV->the_post(); ?>
            <div class="large-4 medium-12 small-12 columns" id="test-eq">
                <!-- Beginning of the individual post output -->
                <?php get_template_part('parts/single-article-box'); ?>

            </div> <!-- End of the complete post output -->
        <?php endwhile; ?>
    </div>
    <?php wp_reset_query(); ?>
</div>
