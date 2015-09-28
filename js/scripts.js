$(function(){
	// Good ol' Smooth Scroll
	$('a').smoothScroll();

});

$('.mobile-icon').on('click', function(){
	// $('.siteTitle').slideToggle(500);
	$('#menu-left').slideToggle(500);
	$('#menu-right').slideToggle(500);

});


//Sticky Nav
$(document).ready(function() {
  if ($("body").hasClass("home")){

    //Calculate height
    var totalHeight =$('.hero').outerHeight();

    $(window).scroll(function() {
      //if scrolled down more than the height of hero
      if ($(window).scrollTop() > totalHeight) {
        $('nav').addClass('sticky');
        $('.main').css({"margin-top":"70px"});
        } else {
        // resetting nav when scrolled up
        $('nav').removeClass('sticky');
        $('.main').css({"margin-top":"0px"});

      }; //end else statement
    }); //end window scroll function  

  } else {

    $('nav').addClass('sticky');
    $('body').css({
        "margin-top":"70px"
    });

  } //end else statement
}); //end function