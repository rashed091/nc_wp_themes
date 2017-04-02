<?php

	$orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories) {
		$category_ids = array();
		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		$args=array(
			'category__in' => $category_ids,
//			'post__not_in' => array($post->ID),
			'posts_per_page'=> 2, // Number of related posts that will be displayed.
			'caller_get_posts'=>1,
			'orderby'=>'rand' // Randomize the posts
		);
    $categoryName = $individual_category->name;
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) { ?>
      <div class="row relatedPosts">
	      <div class="row collapse">
		      <div class="large-12 medium-12 small-12">
		      	<h4>Related Posts for <?php exclude_post_categories("1,6,7,8"); ?>:</h4>
		      </div>
	      </div>
			<?php
			while( $my_query->have_posts() ) {
				$my_query->the_post();
?>
<div class="large-6 medium-6 columns">
	<article class="single-article-post" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	    <a href="<?php echo the_permalink() ?>" >
				<div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);" data-equalizer></div> <!-- end article image -->
	    </a>

	    <div class="inner" data-equalizer-watch>
	        <header class="article-header">
	            <h5 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title_limit( 45, '...'); ?></a></h5>
	            <?php get_template_part('parts/content', 'byline'); ?>
	        </header> <!-- end article header -->

	        <section class="entry-content" itemprop="articleBody">
	            <?php the_excerpt(); ?>
	        </section> <!-- end article section -->
	            <?php get_template_part('parts/article-share'); ?>
	    </div>

	</article> <!-- end article -->
</div><!-- End Containing div for article -->
<?php
			}
			wp_reset_postdata();
		}
	}
?>
</div><!-- End Wrapping div for related posts -->
