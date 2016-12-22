(function($){
  "use strict";

  /*------------ Script initialization -------------*/
  $(window).load(function () {
    /* Page loader */;
    $('#loading').delay(600).fadeOut(1000);
  });

  // Slide Carousel
  $(document).ready(function() {
    $(".owl-carousel").each(function(index, el) {
      var config = $(this).data();
      config.navText = ['<i class="icofont icofont-thin-left"></i>','<i class="icofont icofont-thin-right"></i>'];
      config.smartSpeed="800";
     
      if($(this).hasClass('owl-style2')){
        config.animateOut="fadeOut";
        config.animateIn="fadeIn";    
      }

      if($(this).hasClass('dotsData')){
        config.dotsData="true";  
      }
      
      $(this).owlCarousel(config);
    });
  });

  //  [ Sticky Menu ]
  $('.mid-header').sticky({ topSpacing: 0 });

  // WOW vs Animate Css
	new WOW({
		boxClass:     'wow',      // default
		animateClass: 'animated', // default
		offset:       0,          // default
		mobile:       false,       // default
		live:         true        // default
	}).init();

  // Scroll to Top ====
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {
      $('#return-to-top').addClass('td-scroll-up-visible');
    } else {
      $('#return-to-top').removeClass('td-scroll-up-visible');
    }
  });
	$('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 'slow');
  });

  /** Block SideBar Category **/
  $('.block-sidebar .list-category li.has-child a.parent-cate').click(function () {
    $(this).next().slideToggle();
    $(this).parent().toggleClass('open');
    return false;
  });

  // Read more
  $(window).load(function() {
    $('.text-more').hide();
    $('.textentry').hover(function(){
      var tem1= $(this).find('.vitext');
      var tem= $(this).find('.text-more');                      
      $(this).find('.btn-more').click(function(){tem1.hide();tem.show('slow'); return false;});
        $(this).find('.btn-less').click(function(){tem.hide();tem1.show('slow'); return false;})
    });
  });

})(jQuery); // End of use strict