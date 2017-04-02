<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<div class="top-bar" id="top-bar-menu">
    <div class="row">
        <div class="large-7 small-7 columns">
            <div class="row collapse">
                <a class="large-4 medium-6 small-12 columns siteLogo" href="<?php echo site_url(); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/1NetFormation.svg"/></a>
                <div class="show-for-large large-8 columns headerSlogan">
                    <p>The Art of Transforming<br>
                       Network into Networking</p>
                    <p>
                </div>

            </div>
        </div>

        <div class="large-5 small-5 columns">
            <div class="row collapse">
                <div class="large-10 columns hide-for-small show-for-large">
                    <div class="row header-share">
                        <div class="large-5 columns text-right  hide-only-for-medium">
                            <p>Follow us</p>
                        </div>

                        <div class="large-7 columns">
                            <?php get_template_part('parts/social-share'); ?>
                        </div> <!-- End of top bar holding medium and above device stuff -->
                    </div>
                </div> <!-- end of social, and search icon container -->


                <div class="large-2 show-for-large columns">
                    <div class="searchHolder">
                        <a class="search-on-button"><i class="fi-magnifying-glass large"></i></a>
                    </div><!-- end of search holder in header for medium devices and above. --></h6>
                </div>
            </div> <!-- end of right hand side container -->

            <div class="top-bar-right float-right show-for-small hide-for-large" style="height:100%;">
                <div class="row">
                    <div class="small-6 columns">
                        <a class="search-icon searchIcon search-on-button float-right"><i
                                class="fi-magnifying-glass large"></i>
                        </a>
                    </div>
                    <div class="small-6 mobileMenuContainer columns">
                        <button data-toggle="off-canvas" class="menu-icon mobileIcon" type="button"></button></a>
                    </div>
                </div>
            </div> <!-- End of right bar for mobile devices -->


        </div> <!-- End Top bar -->
    </div>

    <div class="search-box-header">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <input type="search" placeholder="Search" value="" name="s" title="Search for:"/>
            <input type="submit" class="header-search-submit button" value="Search"/>
            <div class="close-button-holder">
                <a href="#" class="header-search-close-btn">
                    <i class="fa fa-times-circle"></i>
                </a>
            </div>
        </form>
    </div>


    <!-- <div class="top-bar-right float-center show-for-small-only">
        <ul class="menu">
            <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
        </ul>
    </div> -->
</div>
<div class="navigation-link-wrapper" >
    <div class="top-bar-menu-open-overlay"></div> <!-- Start of hover navigation drop-down -->
    <div class="row align-center hide-for-medium-only hide-for-small-only navigation-links">
        <!-- Navigation links for desktops/mediums, on separate div below  -->
        <?php joints_top_nav(); ?>
    </div>

    <section class="top-bar-section <?php if ($tablet_browser > 0 || $mobile_browser > 0) {
        echo 'mobile';
    } ?>">
        <div class="top-bar-section-container">
            <?php get_template_part('parts/top-bar-hovers'); ?>
        </div>
    </section>

</div>
