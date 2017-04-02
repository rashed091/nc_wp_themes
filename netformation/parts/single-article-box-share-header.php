<div class="article-share-links-container" style="font-size: 16px; word-spacing: 10px;">
    <div class="share-icons-holder">
        <a href="http://www.facebook.com/sharer.php?u=<?php echo wp_get_shortlink(); ?>&t=<?php the_title(); ?>"
           alt="Share on Facebook" title="Share on Facebook" target="_blank">
            <i class="fa fa-facebook"></i>
        </a>

        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo wp_get_shortlink(); ?>" target="_blank">
            <i class="fa fa-linkedin"></i>
        </a>

        <a href="http://twitter.com/share?text=<?php echo "  - (via Net_Formation)  ".the_title(); ?>-&url=<?php echo wp_get_shortlink(); ?>"
           alt="Tweet This Post" title="Tweet This Post" target="_blank">
            <i class="fa fa-twitter"></i>
        </a>

        <a href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php echo wp_get_shortlink(); ?>"
           alt="Share on Google+" title="Share on Google+" target="_blank">
            <i class="fa fa-google-plus"></i>
        </a>

        <a href="mailto:someone@level3.com?subject=<?php echo the_title(); ?>&body=<?php echo the_permalink() ?>">
        <i class="fa fa-envelope"></i>
        </a>

        <a href="#" class="print-link-social"> <!-- Print function invoked to prompt default system print modal -->
            <i class="fa fa-print"></i>
        </a>
    </div>
</div>
