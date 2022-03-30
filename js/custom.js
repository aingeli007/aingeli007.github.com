  /*-------------------------------------------------------------------------------
    jQuery Parallax
  -------------------------------------------------------------------------------*/

    function initParallax() {
    $('#home').parallax("50%", 0.3);

  }
  initParallax();


  /* Back top
  -----------------------------------------------*/

  $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top1').fadeIn(200);
        } else {
          $('.go-top1').fadeOut(200);
        }
        });
        // Animate the scroll to top
      $('.go-top1').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })
  $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top2').fadeIn(200);
        } else {
          $('.go-top2').fadeOut(200);
        }
        });
          // Animate the scroll to top
        $('.go-top2').click(function(event) {
          event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
        })
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top3').fadeIn(200);
        } else {
          $('.go-top3').fadeOut(200);
        }
        });
          // Animate the scroll to top
          $('.go-top3').click(function(event) {
            event.preventDefault();
          $('html, body').animate({scrollTop: 0}, 300);
          })
    $(window).scroll(function() {
          if ($(this).scrollTop() > 200) {
          $('.go-top4').fadeIn(200);
          } else {
            $('.go-top4').fadeOut(200);
          }
          });
            // Animate the scroll to top
          $('.go-top4').click(function(event) {
            event.preventDefault();
          $('html, body').animate({scrollTop: 0}, 300);
          })
    }
