;(function(factory) { // eslint-disable-line no-extra-semi
    'use strict';
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module !== 'undefined' && module.exports) {
        // CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Global
        factory(jQuery);
    }
})(function($) {

// custom scripts start here:    
// Sticky Navbar Padding 
var navHeight = $('#main-nav').outerHeight();
$('body').css('padding-top', navHeight);navHeight

// Scroll to Internal Links Function ------------------------    
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);
		var scrollTarget = $target.offset().top;
		scrollTarget += -100;

	    $('html, body').animate({
	        'scrollTop': scrollTarget
	    }, 900, 'swing');
	});
});
    
// Match Height Function ---------------------    
$(function() {
	$('.col').matchHeight();
});

// Services Dropdown Function	
function itemDropdown() {
    $('.service-title').on('click', function(){
            $(this).toggleClass('open').next().slideToggle();
    }); 
}	
	if (window.innerWidth <= 1024) { 
		$(document).ready(function(){
			itemDropdown();
		});
	} 
// Check Wide Elements Script ---------------------------
$.each( $('*'), function() { 
    if( $(this).width() > $('body').width()) {
        console.log("Wide Element: ", $(this), "Width: ", $(this).width()); 
    } 
});
    
});