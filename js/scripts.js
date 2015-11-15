$(function(){
	// Good ol' Smooth Scroll
	$('a').smoothScroll();
});

$('.mobile-icon').on('click', function(){
	$('#menu-main').slideToggle(500);
});


//Sticky Nav
$(document).ready(function() {
  if ($("body").hasClass("home")){

    //Calculate height
    var totalHeight =$('.hero').outerHeight();

    $(window).scroll(function() {
      //if scrolled down more than the height of hero
      if ($(window).scrollTop() > totalHeight && $('.container').width() > 400 ) {
        console.log("bam!");
        $('nav').addClass('sticky');
        $('.main').addClass('sticky-margin');
        // $('.main').css({"margin-top":"70px"});

        } else {
        // resetting nav when scrolled up
        $('nav').removeClass('sticky');
        $('.main').removeClass('sticky-margin');
        // $('.main').css({"margin-top":"0px"});

      }; //end else statement
    }); //end window scroll function  

  } else {

    $('nav').addClass('sticky');
    $('body').css({
        // "margin-top":"105px"
    });

  } //end else statement
}); //end function

// $(window).on('load resize', function () {
//     $('.container').width() == 400;
//     console.log('less than 400?');
// });