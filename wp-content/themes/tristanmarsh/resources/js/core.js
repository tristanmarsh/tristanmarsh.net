jQuery(document).ready(function() {

  function slider() {
    
    //init slider
    var slides = jQuery('.slider .slides');
    var current = 1;
    var paginationButtons = jQuery('.slider-controls>ul').children();
    var length = paginationButtons.length;

    //functions
    var play = function() {
      var playID = setTimeout(function() {
        next();
        play();
      }, 6000);
    };
    
    var next = function() {
      if (current>=length) {
        current=1;
      } else {
        current++;
      }
      goTo(current);
    };
    
    var previous = function() {
      if (current<=1) {
        current=length;
      } else {
        current--;
      }
      goTo(current);
    };
      
    var goTo = function(i) {
      current = i;
      jQuery(slides).css('width', ( jQuery(slides).parent().innerWidth() * length ) + 'px');
      jQuery('.slide').css('width', jQuery(slides).parent().innerWidth() + 'px');
      jQuery(slides).css('transform','translateX(-' + (current-1)*(1/length)*100 + '%)');
      jQuery(slides).children().removeClass('active');
      jQuery(jQuery(slides).children()[current-1]).addClass('active');
      jQuery(paginationButtons).removeClass('active');
      jQuery(paginationButtons[current-1]).addClass('active');
      // animateSlide();
    };
      
    var abortTimer = function(tid) {
      clearTimeout(tid);
    };

    var resetTimer = function(tid) {
      clearTimeout(tid);
      play();
    };
    
    var animateSlide = function() {
      var color = jQuery(jQuery('.slide')[current-1]).attr('background-color');
      setTimeout(function() {
        jQuery('.slider').css('background',color);
      }, 0);
    };

    //register Event Listeners
    jQuery(paginationButtons).click(function(){
      goTo(jQuery(paginationButtons).index(this)+1);
      resetTimer(playID);
    });
    jQuery(document).keydown(function(e) {
      switch(e.which) {
          case 37: // left
          previous();
          resetTimer(playID);
          break;
          
          case 38:
          previous();           
          resetTimer(playID);
          break;

          case 39: // right
          next();
          resetTimer(playID);
          break;
          
          case 40:
          next();
          resetTimer(playID);
          break;

          default: return; // exit this handler for other keys
      }
      e.preventDefault(); // prevent the default action (scroll / move caret)
  });
    
    //Run
    play();
    jQuery(jQuery(slides).children()[current-1]).addClass('active');
    
  }

  function stickyNav() {
    
    var head = jQuery('div.head');
    
    jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > 1) { // this refers to window
        jQuery(head).addClass('scrolled');
      } else if (jQuery(this).scrollTop() < 1) {
        jQuery(head).removeClass('scrolled');
      }
    })
    
  }

  function modalSubmit() {
    var modalContactForm = jQuery('.modal form')
    var originalSubmitButton = jQuery('.modal input.wpcf7-submit');
    originalSubmitButton.hide();
    var newSubmitButton = jQuery('.modal .modal-footer button.btn-primary');

    newSubmitButton.click(function(event) {
      event.stopPropagation();
      modalContactForm.trigger('submit');
      successfullySent();
    });

    var whatever = setTimeout(function() {
      if(jQuery('.modal').hasClass('sent')) {
        return true;
      } else {
        return false;
      }
    }, 1000 );

    function successfullySent() {
      if (whatever === true) {
        window.console.log('success');
      } else {
        window.console.log('failure');
      }
    }

      
  }
    
  var sliderObject = new slider();
  var stickyNavObject = new stickyNav();
  var modalListener = new modalSubmit();

});