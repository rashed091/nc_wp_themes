/*
 These functions make sure WordPress
 and Foundation play nice together.
 */

jQuery(document).ready(function () {

  // Remove empty P tags created by WP inside of Accordion and Orbit
  jQuery('.accordion p:empty, .orbit p:empty').remove();

  // Makes sure last grid item floats left
  jQuery('.archive-grid .columns').last().addClass('end');

  // Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function () {
    if (jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

  jQuery('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.slider-nav',
    autoplay: false,
    autoplaySpeed: 8000,
    centerMode: true,
    adaptiveHeight: false,
  });

  var howManySlidesToShow = 4;
  if (ifCategoryPage) {
    howManySlidesToShow = 2;
  }

  jQuery('.slider-nav').slick({
    slidesToShow: howManySlidesToShow,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: false,
    focusOnSelect: true,
    arrows: true,
    adaptiveHeight: false,
  });

  jQuery(".search-on-button").click(function () {
    jQuery(".search-box-header").show('fast');
  });

  jQuery(".close-button-holder").click(function () {
    jQuery(".search-box-header").hide('fast');
  });

  jQuery(document).bind('keydown', function (e) {
    if (e.which == 27) {
      jQuery(".search-box-header").hide('fast');
    }
  });

  jQuery(".hideshow").click(function () {
    jQuery(this).closest(".articles-box").find('.rows-of-posts').slideToggle();
    jQuery(this).text(function (i, text) {
      return text === "HIDE" ? "SHOW" : "HIDE";
    });
  });

  jQuery(".link-category-page a").hover(function () {
        stay_text = jQuery(this).text();
        jQuery(this).text('View all');
      },
      function () {
        jQuery(this).text(stay_text);
      });

  // filter query on homepage by category, tag and date (added by kevin doocey friday september 23rd)
  jQuery('#filterPosts').on('click', function () {

    // get the category/'industry' name -
    var selectCat = jQuery('.form-item #categories');
    var selectedCat = jQuery(selectCat).val();
    // if the category is not set, leave the paramter blank
    if (selectedCat === '') {
      selectedCat = '';
    } else {
      selectedCat = selectedCat;
    }

    //get the tag name
    var selectTag = jQuery('.form-item #tags');
    var selectedTag = jQuery(selectTag).val();
    // if the tag is not set, leave the paramter blank
    if (selectedTag === null) {
      selectedTag = '';
    } else {
      selectedTag = selectedTag;
    }

    //get the date
    var selectDate = jQuery('.form-item #date');
    var selectedDate = jQuery(selectDate).val();
    //split the wp_get_archive url value
    var urlArray = selectedDate.split("/");
    // if the date is not set, leave the paramter blank
    if (selectedDate === '') {
      var month = '';
      var year = '';
    } else {
      //set the month number and year parameters
      var month = urlArray[4];
      var year = urlArray[3];
    }

    //create the search query. include post type to keep pages from returning
    var searchQuery = '/?s&category_name=' + selectedCat + '&tag=' + selectedTag + '&monthnum=' + month + '&year=' + year + '&post_type=post';

    //load the search and fire off the search query to render the search page with the relevant tags
    document.location.href = searchQuery;
  });

  ////
  // Top Bar Hover for drop-down navigation (not working currently)

  var aouthide = false;
  var barouthide = false;

  jQuery('.navigation-link-wrapper .menu-item-object-category a, .top-bar-hover').mouseover(function () {
    stay_text = jQuery(this).text();
    jQuery(this).find('.fontawesome-text').text('View all');

    if(jQuery(this).is('a')){
      if (jQuery(this).parent().hasClass('connect-category-icon')) {
        currentCategory = 'inform';
        jQuery('.top-bar-hover.' + currentCategory).slideDown();
      } else if (jQuery(this).parent().hasClass('secure-category-icon')) {
        currentCategory = 'perform';
        jQuery('.top-bar-hover.' + currentCategory).slideDown();
      } else {
        currentCategory = 'transform';
        jQuery('.top-bar-hover.' + currentCategory).slideDown();
      }
    }
    aouthide = true;
    barouthide = true;
  }).mouseout(function () {
    jQuery(this).find('.fontawesome-text').text(stay_text);
    aouthide = false;
    barouthide = false;
    setTimeout(function () {
      if (!aouthide && !barouthide) jQuery('.top-bar-hover').stop().slideUp(), 100;
    });
  });


  jQuery('#content-category-featured .rows-of-posts').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    autoplay: false,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 640,
        settings: 'unslick'
      }
    ],
    arrows: true,
    appendDots: false,
    prevArrow: jQuery("#content-category-featured .left-arrow"),
    nextArrow: jQuery("#content-category-featured .right-arrow")
  });

  jQuery('#content-category-connect .rows-of-posts').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    autoplay: false,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 640,
        settings: 'unslick'
      }
    ],
    arrows: true,
    appendDots: false,
    prevArrow: jQuery("#content-category-connect .left-arrow"),
    nextArrow: jQuery("#content-category-connect .right-arrow")
  });

  jQuery('#content-category-secure .rows-of-posts').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    autoplay: false,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 640,
        settings: 'unslick'
      }
    ],
    arrows: true,
    appendDots: false,
    prevArrow: jQuery("#content-category-secure .left-arrow"),
    nextArrow: jQuery("#content-category-secure .right-arrow")
  });

  jQuery('#content-category-transform .rows-of-posts').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    autoplay: false,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 640,
        settings: 'unslick'
      }
    ],
    arrows: true,
    appendDots: false,
    prevArrow: jQuery("#content-category-transform .left-arrow"),
    nextArrow: jQuery("#content-category-transform .right-arrow")
  });

  // jQuery('.articles-box .rows-of-posts.two').slick({
  //     dots: false,
  //     infinite: true,
  //     speed: 300,
  //     slidesToShow: 2,
  //     autoplay: true,
  //     adaptiveHeight: true,
  //     responsive: [
  //         {
  //             breakpoint: 640,
  //             settings: 'unslick'
  //         }
  //     ],
  //     arrows: false,
  //     appendDots: false
  // });


  // var inArr = {a:false,b:false};
  //
  // $('#a, #b').mouseover(function(){
  //     inArr [$(this).attr('id')] = true;
  // });
  //
  //
  // $('#a, #b').mouseout(function(){
  //     inArr [$(this).attr('id')] = false;
  //
  //     setTimeout(function(){ if(!inArr.a && !inArr.b) $('#box').fadeOut(800) },100);
  // });

});
