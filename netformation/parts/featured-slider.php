<div class="slider show-for-medium">

</div>

<?php
// WP_Query For Carousel Category Posts
$args = array (
	'cat'            => 7,
  'post_type'      => 'post',
  'posts_per_page' => '5',
  'order'          => 'modified',
);

$carouselPostsQuery= new WP_Query( $args );

 ?>
<div class="row featured-articles">
    <div class="slider slider-nav show-for-medium" data-equalizer>
        <?php while ($carouselPostsQuery->have_posts()) : $carouselPostsQuery->the_post(); ?>
            <?php get_template_part('parts/slider', 'featured-boxes'); ?>
        <?php endwhile ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<script>
    var ifCategoryPage = false;
</script>
