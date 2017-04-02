<?php
/**
 * Created by PhpStorm.
 * User: manaj
 * Date: 9/23/16
 * Time: 3:46 PM
 */
?>

<!-- I have connected to NewsCred's Enterprise Bit.ly account to generate shortlinks. These are being called by
the 'wp_get_shortlink()' which returns a shortened link and can allow for tracking stats of clicks etc. I'm using
manual share links below, but we can these if need be, after launch date -->


<div class="row small-up-2 medium-up-2 large-up-6 single-social-links"> <!-- Block grid for social buttons. Each column spaced evenly -->
    <div class="column"> <!-- Facebook Share URL for article -->
        <a href="http://www.facebook.com/sharer.php?u=<?php echo wp_get_shortlink();?>&t=<?php the_title(); ?>" alt="Share on Facebook" title="Share on Facebook" target="_blank">
            <div class="facebook">Facebook</div>
        </a>
    </div>

    <div class="column"> <!-- LinkedIn Share URL for article -->
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo wp_get_shortlink();?>" target="_blank">
            <div class="linkedin">LinkedIn</div>
        </a>
    </div>

    <div class="column"> <!-- Twitter Share URL for article , also includes @level3 at end of tweet -->
        <a href="http://twitter.com/share?text=<?php echo "   -  (via Net_Formation)  ".the_title(); ?>-&url=<?php echo wp_get_shortlink(); ?>" alt="Tweet This Post" title="Tweet This Post" target="_blank">
            <div class="twitter">Twitter</div>
        </a>
    </div>

    <div class="column"> <!-- Google+ Share Link -->
        <a href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php echo wp_get_shortlink(); ?>" alt="Share on Google+" title="Share on Google+" target="_blank">
            <div class="google-plus">Google +</div>
        </a>
    </div>

    <div class="column"> <!-- Link to launch default email client in order to mail the article -->
        <a href="mailto:someone@level3.com?subject=<?php echo the_title(); ?>&body=<?php the_permalink(); ?>">
            <div class="email-social">Email</div>
        </a>
    </div>

    <div class="column"> <!-- Printer prompt to send article to printer -->
        <a class="print-link-social"> <!-- Print function invoked to prompt default system print modal -->
            <div class="print-social">Print</div>
        </a>
    </div>
</div>
