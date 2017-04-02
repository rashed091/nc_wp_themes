<footer class="footer" role="contentinfo">
    <div id="inner-footer" class="row">
        <div class="large-2 medium-3 small-12 columns text-center">
            <a href="http://www.level3.com/en/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/level-3-logo.png"/></a>
        </div>

        <div class="large-3 medium-2 small-12 columns">
            <div class="footerColumn" style="text-align:center;color:#FFFFFF;">
                <p style="padding-top: 6px;">SIGN UP FOR OUR NEWSLETTER:</p>
            </div> <!-- End of top bar holding medium and above device stuff -->
        </div>

        <div class="large-4 medium-3 small-12 columns">
            <div class="footerColumn">
                <?php get_template_part('parts/content-newsletter-form'); ?>
            </div> <!-- End of top bar holding medium and above device stuff -->
        </div>

        <div class="large-3 medium-4 small-12 small-centered columns">
            <div class="footerColumn">
                <?php get_template_part('parts/social-share'); ?>
            </div> <!-- End of top bar holding medium and above device stuff -->
        </div>
    </div> <!-- end #inner-footer -->

    <div class="row large-10 large-centered"> <!-- Footer Disclaimer Text -->
      <?php get_template_part('parts/footer-disclaimer') ?>
    </div>
</footer> <!-- end .footer -->

</div>  <!-- end .main-content -->
</div> <!-- end .off-canvas-wrapper-inner -->
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>

<!--  NewsCred Analytics here -->
<script src="//analytics.newscred.com/analytics_1cd464bbc28b4d2aad31fabf68cfb81c.js"></script>
<!-- end analytics -->
<script type="text/JavaScript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.print.js" /></script>
</body>
</html> <!-- end page -->
