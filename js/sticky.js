/* affix the navbar after scroll below header */


/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' });

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
});

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
});

$(document).ready(function() {
      $('#home').css("height", $(window).height()-($('#nav').height()));
	  $('#home .item').css("height", $('#home').height());
	  $('.carousel-inner > .item > img ').css("height", $('#home').height());	
	    $(window).scroll(function () { 

		//console.log($(window).scrollTop());
		
		if ($(window).scrollTop() > $('#home').height()) {
		  $('#nav').addClass('navbar-fixed-top');
		}

		if ($(window).scrollTop() < $('#home').height()) {
		  $('#nav').removeClass('navbar-fixed-top');
		}
	  });	
});