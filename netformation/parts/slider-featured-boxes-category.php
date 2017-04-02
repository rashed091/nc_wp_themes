<?php
$newscred_source = get_post_meta( $post->ID, 'nc-source', true);
$newscred_author = get_post_meta( $post->ID, 'nc-author', true);
?> <!-- fetching newscred custom fields -->


<div class="large-6 medium-12 small-12 columns hide-for-small-only" id="test-eq"> <!-- Beginning of the individual post output -->
  <article class="featuredPost" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" data-equalizer>
    <a href="<?php the_permalink() ?>">
      <div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);" title="<?php the_title_attribute();?>" itemprop="articleBody"></div> <!-- end article image -->
    </a>

    <header class="feature-article-header" data-equalizer-watch>
      <h5 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" class="" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
      <?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->


    <section class="postContent" itemprop="articleBody">
      <div class="feature-links-container row expanded collapse align-bottom" >
        <div class="large-4 medium-4 small-12 columns" data-equalizer><p><span><?php echo $newscred_source ?></span></p></div>
        <div class="large-4 medium-4 small-12 columns" data-equalizer><p><span><?php echo $newscred_author ?></span></p></div>
        <div class="large-4 medium-4 small-12 columns" data-equalizer><?php get_template_part('parts/single-article-box-share-icons'); ?></div>
      </div>
    </section> <!-- end article section -->

  </article> <!-- end article -->
</div> <!-- End of the complete post output -->
