/*jslint browser: true*/
/*global $, jQuery, alert*/
/* =================================
   PRE LOADER
=================================== */
// makes sure the whole site is loaded
jQuery(window).load(function () {
	
	'use strict';
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
});

/* =================================
   ANIMATION
=================================== */
var wow = new WOW(
  {
    mobile: false  // trigger animations on mobile devices (default is true)
  }
);
wow.init();

/* ================================
===  VIDEO PLAY BUTTON         ====
================================= */
$('.play-button').click(function () {

	var url = $('#video-expand .embed-responsive-item').attr('src');
	url = url.replace('autoplay=0', 'autoplay=1');
	$('#video-expand .embed-responsive-item').attr('src', url);

	var collapsed = $(this).find('span').hasClass('icon-music-play-button');

	$('.play-button').find('span').removeClass('icon-arrows-circle-remove');

	$('.play-button').find('span').addClass('icon-music-play-button');

	if (collapsed) {
		$(this).find('span').toggleClass('icon-music-play-button icon-arrows-circle-remove');
	}
	if (!collapsed) {
		var urlstop = $('#video-expand .embed-responsive-item').attr('src');
		urlstop = urlstop.replace('autoplay=1', 'autoplay=0');
		$('#video-expand .embed-responsive-item').attr('src', urlstop);
	}
	
});

/* ================================
===  IN PAGE SCROLL OPTIONS    ====
================================= */
$(document).ready(function () {
	$('.smooth-scroll a, a.smooth-scroll').on('click', function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});
});

$('#internal-scroll').onePageNav({
	currentClass: 'current',
	changeHash: false,
	scrollSpeed: 750,
	scrollThreshold: 0.5,
	filter: ':not(.external)'
});

/* ================================
===  PROJECT LOADING           ====
================================= */

jQuery(document).ready(function ($) {
	$('.more').on('click', function (event) {
		event.preventDefault();

		var href = $(this).attr('href') + ' .single-project',
			portfolioList = $('#portfolio-list'),
			content = $('#loaded-content');

		portfolioList.animate({
			'marginLeft': '-120%'
		}, {
			duration: 400,
			queue: false
		});
		portfolioList.fadeOut(400);
		setTimeout(function () {
			$('#loader').show();
		}, 400);
		setTimeout(function () {
			content.load(href, function () {
				$('#loaded-content meta').remove();
				$('#loader').hide();
				content.fadeIn(600);
				$('#back-button').fadeIn(600);
			});
		}, 800);

	});

	$('#back-button').on('click', function (event) {
		event.preventDefault();

		var portfolioList = $('#portfolio-list')
		content = $('#loaded-content');

		content.fadeOut(400);
		$('#back-button').fadeOut(400);
		setTimeout(function () {
			portfolioList.animate({
				'marginLeft': '0'
			}, {
				duration: 400,
				queue: false
			});
			portfolioList.fadeIn(600);
		}, 800);
	});
});

$('#contact-form').submit(function(e){
	e.preventDefault();
	$.ajax({
		url:'/sendmail.php',
		type:'post',
		data:$('#contact-form').serialize(),
		success:function(){
			$('.success').css('display', 'block');
		}
	});
});

$('#call-form').submit(function(e){
	e.preventDefault();
	$.ajax({
		url:'/callmail.php',
		type:'post',
		data:$('#call-form').serialize(),
		success:function(){
			$('.callsuccess').css('display', 'block');
		}
	});
});

/* ================================
===  OTHER FIXES 		       ====
================================= */

$('input,textarea').focus(function () {
	$(this).data('placeholder', $(this).attr('placeholder'))
		.attr('placeholder', '');
}).blur(function () {
	$(this).attr('placeholder', $(this).data('placeholder'));
});

/* BOOTSTRAP FIX */

if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	var msViewportStyle = document.createElement('style')
	msViewportStyle.appendChild(
		document.createTextNode(
			'@-ms-viewport{width:auto!important}'
		)
	)
	document.querySelector('head').appendChild(msViewportStyle)
}
