<footer class="footer" role="contentinfo">
    <div id="inner-footer" class="row">
      <div class="hide-for-small-only">
        <div class="large-3 medium-3 columns">
          <a href="http://www.level3.com/en/?click=homepagefooterlevel3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/level-3-logo.png"/></a>
        </div>

        <div class="large-3 medium-1 columns">
          <div style="margin-top: 20px;">

              <!-- Contact Us -->
          </div> <!-- End of top bar holding medium and above device stuff -->
        </div>

        <div class="large-3 medium-4 columns">
          <?php get_template_part('parts/footer-contact-form'); ?>
          <a class="footerLinks" style="float: right;margin-left:8%;" href="http://investors.level3.com/investor-relations/press-releases/">Investor Relations</a>
        </div>

        <div class="large-3 medium-4 columns">
            <div style="margin-top: 20px;">
                <?php get_template_part('parts/social-share'); ?>
            </div> <!-- End of top bar holding medium and above device stuff -->
        </div>
      </div>
      <!-- Separate footer for mobile devices (Not ideal - will change in future)-->
      <div class="show-for-small-only">
        <?php get_template_part('parts/mobile-footer');?>
      </div>
    </div> <!-- end #inner-footer -->

</footer> <!-- end .footer -->
</div>  <!-- end .main-content -->
</div> <!-- end .off-canvas-wrapper-inner -->
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>

<!--  NewsCred Analytics here -->
<script src="//analytics.newscred.com/analytics_1cd464bbc28b4d2aad31fabf68cfb81c.js"></script>
<!-- end analytics -->

<!-- jQuery Print Modal Script -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jQuery.print.js"></script>

<!-- Start level 3 DTM 1.4 -->

<script type="text/javascript">_satellite.pageBottom();</script>

<!-- End level 3 DTM 1.4 -->

</body>
</html> <!-- end page -->
