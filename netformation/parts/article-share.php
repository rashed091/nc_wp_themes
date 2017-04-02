<?php
/**
 * Created by PhpStorm.
 * User: manaj
 * Date: 9/22/16
 * Time: 2:31 PM
 */
?>
<section class="postContent hide-for-small-only" itemprop="articleBody">
    <div class="row feature-links-container collapse">
        <div class="large-5 medium-5 columns" style="height:35px;">
            <p class="link-category-page" style="position:relative;height:35px"><?php exclude_post_categories("1,6,7,8"); ?></p>
        </div>

        <div class="large-7 medium-7 columns" style="height:35px;">
            <?php get_template_part('parts/single-article-box-share-icons'); ?>
        </div>
    </div>
</section> <!-- end article section -->




























<section class="postContent show-for-small-only" itemprop="articleBody">
    <div class="feature-links-container row expanded collapse align-bottom">
        <div class="small-12 columns">
          <?php get_template_part('parts/single-article-box-share-icons-mobile'); ?>
        </div>
    </div>
</section> <!-- end article section -->
