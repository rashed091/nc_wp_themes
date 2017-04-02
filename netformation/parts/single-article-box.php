<?php
/**
 * Single Article Box
 */
?>

<article class="single-article-post" style="margin-bottom: 15px;" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" data-equalizer-watch>

    <a href="<?php echo the_permalink() ?>"><div class="featured-image" title="<?php the_title_attribute();?>" style="background-image: url(<?php the_post_thumbnail_url( 'medium' ); ?>);"
         itemprop="articleBody"></div> <!-- end article image -->
    </a>
    <div class="inner">
        <header class="article-header">
            <h5 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"
            title="<?php the_title_attribute(); ?>"><?php the_title_limit( 40, '...'); ?></a></h5>
            <?php get_template_part('parts/content', 'byline'); ?>
        </header> <!-- end article header -->

        <section class="entry-content" itemprop="articleBody">
            <?php the_excerpt(); ?>
        </section> <!-- end article section -->
            <?php get_template_part('parts/article-share'); ?>
    </div>

</article> <!-- end article -->
