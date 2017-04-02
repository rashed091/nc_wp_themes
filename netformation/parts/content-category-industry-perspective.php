<?php

// WP_Query For Industry Perspective Category Posts
$args = array (
	'cat'            => 3,
  'post_type'      => 'post',
  'posts_per_page' => '5',
  'order'          => 'modified',
);

$IndustryPerspectivesQuery = new WP_Query( $args );

?>

<div class="articles-box" id="content-category-connect">
	<div class="row">
			<div class="large-7 medium-8 small-8 columns">
					<li class="category-icon connect categoryTitle">INDUSTRY PERSPECTIVES</li>
			</div>
			<div class="large-5 medium-4 small-4 columns">
					<div class="category-buttons float-right">
							<div class="button-group">
									<a class="button category-button hellobtn" href="<?php echo get_the_category_by_ID(3) ?>">View All</a>
									<a class="button show-for-large category-button hideshow">HIDE</a>
									<a class="button hide-for-small-only category-button left-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
									<a class="button hide-for-small-only category-button right-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
					</div>
			</div>
	</div>

  <div class="row rows-of-posts two" data-equalizer>
        <?php while ($IndustryPerspectivesQuery->have_posts()) : $IndustryPerspectivesQuery->the_post(); ?>
            <div class="large-6 medium-12 small-12 columns" id="test-eq"> <!-- Beginning of the individual post output -->
                <?php get_template_part('parts/single-article-box'); ?>
            </div> <!-- End of the complete post output -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
  </div>
</div>
