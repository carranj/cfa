jQuery(document).ready(function($) {

  // $('.bannerslider').royalSlider({
  //     imageScaleMode: 'none',
  //     slidesSpacing: 0,
  //     arrowsNavAutoHide: false,
  //     fadeinLoadedSlide: false,
  //     transitionType: 'fade',
  //     loop: 'true',
  //     fullscreen: {
  //       // fullscreen options go gere
  //       enabled: true,
  //       nativeFS: false
  //     },
  //     autoPlay: {
  //         // autoplay options go gere
  //         enabled: true,
  //         // autoScaleSlider: true,
  //         pauseOnHover: false,
  //         delay: 4500,
  //     }
  // });

  //Add class to hover over Get Started Now
    $('.getStartedNowSection').hover(
       function(){ $('.getStartedNowDiv').addClass('scaleimage') },
       function(){ $('.getStartedNowDiv').removeClass('scaleimage') }
    )

  //Add class to hover over View Our Schedule
    $('.viewOurScheduleSection').hover(
       function(){ $('.viewOurScheduleDiv').addClass('scaleimage') },
       function(){ $('.viewOurScheduleDiv').removeClass('scaleimage') }
    )

  $(document).ready(function(){
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top -55
          }, 1000);
          return false;
        }
      }
    });
  });

});

