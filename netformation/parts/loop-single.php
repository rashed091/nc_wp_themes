<?php
$newscred_source = get_post_meta($post->ID, 'nc-source', true);
$newscred_author = get_post_meta($post->ID, 'nc-author', true);
?> <!-- fetching newscred custom fields -->

<div id="content">

    <div class="row expanded">
        <div class="featured-image-single"
             style="height: 17rem; background-image: url(<?php the_post_thumbnail_url('full'); ?>);"
             itemprop="articleBody"></div>
    </div>

    <!-- <div class="row expanded uncollapse show-for-small-only ">
        <div class="small-6 align-middle columns" style="border-right: 1px solid #AEAEAE;">
            <li class="secure-category-icon text-center" style="list-style-type:none;"><?php the_category(', ') ?></li>
        </div>
        <div class="small-6 show for-small-only  columns">
            <p class="text-center" style="padding: 10px;">SHARE</p>
        </div>
    </div> -->
    <div class="row uncollapse">

        <div id="inner-content" class="row article-page">
            <main id="main-article" class="large-9 medium-12 small-12 columns " role="main">
                <div class="row article-top-info collapse show-for-large" >
                  <?php if (($newscred_source == '') && ($newscred_author == '')):  ?>
                      <div class="large-6 medium-4 columns categoryLink"><span><?php exclude_post_categories("1, 6, 7, 8, 9, 12, 13"); ?></span></div>
                      <div class="large-6 medium-4 columns"><span class="icons-container"><?php get_template_part('parts/single-article-box-share-header'); ?></span></div>
                <?php elseif ($newscred_author == ''):{?>
                        <div class="large-4 medium-4 columns"><span><?php echo $newscred_source ?></span></div>
                        <div class="large-4 medium-4 columns categoryLink"><span><?php exclude_post_categories("1, 6, 7, 8, 9, 12, 13"); ?></span></div>
                        <div class="large-4 medium-4 columns"><span class="icons-container"><?php get_template_part('parts/single-article-box-share-header'); ?></span></div>
                    <?php }elseif ($newscred_source == ''): { ?>
                        <div class="large-4 medium-4 columns"><p title="<?php echo $newscred_author ?>" class="authorName"><?php echo $newscred_author ?></p></div>
                        <div class="large-4 medium-4 columns categoryLink"><span><?php exclude_post_categories("1, 6, 7, 8, 9, 12, 13"); ?></span></div>
                        <div class="large-4 medium-4 columns"><span class="icons-container"><?php get_template_part('parts/single-article-box-share-header'); ?></span></div>
                    <?php } else: ?>
                        <div class="large-3 medium-3 columns"><span><?php echo $newscred_source ?></span></div>
                        <div class="large-3 medium-3 columns"><p title="<?php echo $newscred_author ?>" class="authorName"><?php echo $newscred_author ?></p></div>
                        <div class="large-3 medium-3 columns categoryLink"><span><?php exclude_post_categories("1, 6, 7, 8, 9, 12, 13"); ?></span></div>
                        <div class="large-3 medium-3 columns"><span class="icons-container"><?php get_template_part('parts/single-article-box-share-header'); ?></span></div>
                    <?php endif  ?>
                </div> <!-- end containing top social bar -->

                <div class="article-wrapper singlePostContent" >
                    <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope
                             itemtype="http://schema.org/BlogPosting">

                        <header class="article-header">
                            <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

                            <div class="hide-for-large byline" style="margin: 10px 0px;"> <!-- Byline for mobile devices under 1024px -->
                              <?php get_template_part('parts/content-byline');?>
                            </div>

                            <!-- Social Share (at top of article) for just mobile -->
                            <div id="social-icons-mobile-header" class="hide-for-large" style="margin: 15px 0; padding: 10px; border-bottom: 1px solid #aeaeae;border-top: 1px solid #aeaeae;">
                              <?php get_template_part('parts/single-social-links-mobile');?>
                            </div>

                        </header> <!-- end article header -->

                        <section class="entry-content" itemprop="articleBody">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->
                        <footer class="article-footer">
                            <?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'jointswp'), 'after' => '</div>')); ?>

                            <div
                                class="tags"><?php the_tags('<h3 class="tags-title">' . __('Dive Deeper: ', 'jointswp') . '</h3> ', ' ', ''); ?></div>
                        </footer> <!-- end article footer -->

                    </article> <!-- end article -->
                </div>
                <?php get_template_part('parts/single-social-links')?>
                <!-- Related Posts Partial That Pulls In Two Posts In Same Category Of Single Post That Is Showing -->
                <?php get_template_part('parts/posts-related')?>
                <!-- Call in horizontal ad just above the footer fold -->
                <?php get_template_part('parts/baseline-ad'); ?>
            </main> <!-- end #main -->
            <?php get_sidebar(); ?>
        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->
