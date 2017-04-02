<!-- Share Icons For Single Article Box
:Using a block-grid - large-up-4 to make sure all items are evenly spaced, rather than having to manually configure.

All icons are links, with a Font Awesome icon representing it -->
<div class="article-share-links-container text-center">
    <p class="show-share-icons">Share</p>
    <div class="share-icons-holder large-up-4 medium-up-4" >

        <a class="facebook-icn columns" href="http://www.facebook.com/sharer.php?u=<?php echo wp_get_shortlink(); ?>&t=<?php the_title(); ?>"
           alt="Share on Facebook" title="Share on Facebook" target="_blank">
            <i class="fa fa-facebook"></i>
        </a>

        <a class="twitter-icn columns" href="http://twitter.com/share?text=<?php echo "   -  (Via Net_Formation)  ".the_title(); ?>-&url=<?php echo wp_get_shortlink(); ?>" alt="Tweet This Post" title="Tweet This Post" target="_blank">
            <i class="fa fa-twitter"></i>
        </a>

        <a class="linkedin-icn columns" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo wp_get_shortlink(); ?>" target="_blank">
            <i class="fa fa-linkedin"></i>
        </a>

        <a class="envelope-icn columns" href="mailto:someone@level3.com?subject=<?php echo the_title(); ?>&body=<?php echo the_permalink(); ?>">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </a>

        <!-- <a class="columns" href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php echo wp_get_shortlink(); ?>" alt="Share on Google+" title="Share on Google+" target="_blank">
          <i class="fa fa-google-plus" aria-hidden="true"></i>
        </a> -->

    </div>
</div>
