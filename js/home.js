// homepage.js

(function() {

  function statSlider () {

    var advanceTime       = 5000
    var autoAdvance       = true

    setInterval(function (){

      if ( autoAdvance ) {
        activeSlide = $('#hero-stats li.active')
        lastSlide = $('#hero-stats li.active').is(':last-child')
        activeSlide.removeClass('active')
        if ( !lastSlide ) {
          activeSlide.next().addClass('active')
        } else {
          $('#hero-stats li:first-child').addClass('active')
        }
      }
    }, advanceTime)

  }

  function videoPlayer() {

    vidAdaptableDesign = document.getElementById("video-brands")
    var neverPlayed = true
    var trigger = $('.marketing-block-brands')

    trigger.hover(function () {
      if ( neverPlayed ) {
        vidAdaptableDesign.play()
        neverPlayed = false
      }
    })

  }


  // Doc ready

  $(document).ready(function() {
    statSlider();
    videoPlayer();
  })

})();




// homepage.js

(function() {

  function statSlider () {

    var advanceTime       = 5000
    var autoAdvance       = true

    setInterval(function (){

      if ( autoAdvance ) {
        activeSlide = $('#hero-images li.active')
        lastSlide = $('#hero-images li.active').is(':last-child')
        activeSlide.removeClass('active')
        if ( !lastSlide ) {
          activeSlide.next().addClass('active')
        } else {
          $('#hero-images li:first-child').addClass('active')
        }
      }
    }, advanceTime)

  }

  function videoPlayer() {

    vidAdaptableDesign = document.getElementById("video-brands")
    var neverPlayed = true
    var trigger = $('.marketing-block-brands')

    trigger.hover(function () {
      if ( neverPlayed ) {
        vidAdaptableDesign.play()
        neverPlayed = false
      }
    })

  }


  // Doc ready

  $(document).ready(function() {
    statSlider();
    videoPlayer();
  })

})();













$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});




