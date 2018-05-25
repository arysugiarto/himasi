"use strict";

$( document ).ready(function() {
	const body = $("body"),
	navbar = $(".navbar"),
	navbarbrand = $(".navbar-hima"),
	nabarlink = $(".navbar-nav li a");
	$(window).scroll(function(e){
	  const scrollHeight = $(window).scrollTop();
	  if (scrollHeight >= 200) {
	  	navbar.addClass("scrolled");
	  	navbarbrand.removeClass("top").addClass("scroll");
	  }else{
	  	navbar.removeClass("scrolled");
	  	navbarbrand.removeClass("scroll").addClass("top");
	 
	  }
	});
});