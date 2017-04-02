<!-- Social Tray You See At the bottom of individual article boxes on mobile -->

<div class="row small-up-6" style="font-size: 1.2rem !important;"> <!-- Block grid for social buttons. Each column spaced evenly -->
    <div class="column"> <!-- Facebook Share URL for article -->
        <a href="http://www.facebook.com/sharer.php?u=<?php echo wp_get_shortlink();?>&t=<?php the_title(); ?>" alt="Share on Facebook" title="Share on Facebook" target="_blank">
            <div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
        </a>
    </div>

    <div class="column"> <!-- LinkedIn Share URL for article -->
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo wp_get_shortlink();?>" target="_blank">
            <div class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
        </a>
    </div>

    <div class="column"> <!-- Twitter Share URL for article , also includes @level3 at end of tweet -->
        <a href="http://twitter.com/share?text=<?php echo "   -  (Via Net_Formation)  ".the_title(); ?>-&url=<?php echo wp_get_shortlink(); ?>" alt="Tweet This Post" title="Tweet This Post" target="_blank">
            <div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
        </a>
    </div>

    <div class="column"> <!-- Google+ Share Link -->
        <a href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php echo wp_get_shortlink(); ?>" alt="Share on Google+" title="Share on Google+" target="_blank">
            <div class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
        </a>
    </div>

    <div class="column"> <!-- Link to launch default email client in order to mail the article -->
        <a href="mailto:someone@level3.com?subject=<?php echo the_title(); ?>&body=<?php echo the_permalink(); ?>">
        <div class="email-social"><i class="fa fa-envelope" aria-hidden="true"></i></div>
        </a>
    </div>

    <div class="column">
      <a class="print-icn hide-for-medium" href="<?php the_permalink(); ?>#article-print-icon"> <!-- Print function invoked to prompt default system print modal -->
          <i class="fa fa-print"></i>
      </a>
    </div>

</div>
