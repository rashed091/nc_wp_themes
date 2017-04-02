<!-- Front page template to house front page display -->
<!-- Template: Tag Template -->
<!-- Copy of search results template, just altered for tags, added by Kevin, Oct 4th -->


<?php
get_header();
function more_posts()
{
	global $wp_query;
	return $wp_query->current_post + 1 < $wp_query->post_count;
}

?>


<div id="content" class="expanded">
	<div id="inner-content" class="row">
		<main id="main" class="large-9 medium-8 small-12 columns" role="main">
			<!-- Beginning of FEATURED category articles -->

			<div class="search-page-wrapper">
				<h2 class="page-title">
					<?php _e( 'Articles for:', 'jointswp' ); ?> <em><?php echo single_tag_title( '', false ); ?></em>
				</h2>
				<?php while (have_posts()): ?>
					<!-- Beginning of CONNECT category articles -->
					<div class="row collapse ">
						<div class="articles-box">
							<div class="row rows-of-posts" data-equalizer>
								<?php if (more_posts()) { ?>
									<?php the_post(); ?>
									<div class="large-4 medium-12 small-12 columns" id="test-eq">
										<!-- Beginning of the individual post output -->
										<?php get_template_part('parts/single-article-box'); ?>
									</div> <!-- End of the complete post output -->
								<?php } ?>
								<?php if (more_posts()) { ?>
									<?php the_post(); ?>
									<div class="large-4 medium-12 small-12 columns" id="test-eq">
										<!-- Beginning of the individual post output -->
										<?php get_template_part('parts/single-article-box'); ?>
									</div> <!-- End of the complete post output -->
								<?php } ?>
								<?php if (more_posts()) { ?>
									<?php the_post(); ?>
									<div class="large-4 medium-12 small-12 columns" id="test-eq">
										<!-- Beginning of the individual post output -->
										<?php get_template_part('parts/single-article-box'); ?>
									</div> <!-- End of the complete post output -->
								<?php } ?>
							</div>
						</div>
					</div>

					<div class="row collapse">
						<div class="articles-box">
							<div class="row rows-of-posts" data-equalizer>
								<?php if (more_posts()) { ?>
									<?php the_post(); ?>
									<div class="large-6 medium-12 small-12 columns" id="test-eq">
										<!-- Beginning of the individual post output -->
										<?php get_template_part('parts/single-article-box'); ?>
									</div> <!-- End of the complete post output -->
								<?php } ?>
								<?php if (more_posts()) { ?>
									<?php the_post(); ?>
									<div class="large-6 medium-12 small-12 columns" id="test-eq">
										<!-- Beginning of the individual post output -->
										<?php get_template_part('parts/single-article-box'); ?>
									</div> <!-- End of the complete post output -->
								<?php } ?>
							</div>
						</div>
					</div>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>


		</main> <!-- end #main -->


		<?php get_sidebar(); ?>
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
