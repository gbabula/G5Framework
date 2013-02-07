/* 

    ============================================

    G5Framework

    =============================================

	utility.js

    ==============================================

*/

var G5App = function(){
	this.location = window.location,
	this.path = location.pathname.substring(0, location.pathname.lastIndexOf('/') + 1),
	this.isTouch = ('ontouchstart' in document.documentElement),
	this.isiPhone = ( (navigator.userAgent.indexOf('iPhone') !== -1) || (navigator.userAgent.indexOf('iPod') !== -1) ),
	this.isiPad = navigator.userAgent.match(/iPad/i) !== null;
}

G5App.prototype.cache = {
	window: $(window),
	document: $(document),
	html: $('html'),
	body: $('body'),
	title: document.title
}

G5App.prototype.assets = function(obj){

	var iOsOrientationChangeFix = obj.iOsOrientationChangeFix || false,
		placeholderFallBack = obj.placeholderFallBack || false,
		customInput = obj.customInput || false,
		simpleModals = obj.simpleModals || false,
		jQueryFormValidation = obj.jQueryFormValidation || false;

	if ( iOsOrientationChangeFix ) {
	    if ( G5App.isiPhone || G5App.isiPad ) {
	        yepnope([
	            {
	                load: [
	                    '_assets/js/ios-orientationchange-fix.js'
	                ],
	                complete: function(){

	                    console.log('G5: Orientation Fix Loaded');

	                }
	            }
	        ]);
	    }
	}
	if ( placeholderFallBack ) {
        if ( $('[placeholder]').length ) {

            yepnope([
                {
                    load: [
                        '_assets/js/libs/jquery.placeholder.min.js'
                    ],
                    complete: function(){
                        $('input[placeholder], textarea[placeholder]').placeholder();
                    }
                }
            ]);

        }
	}
	if ( customInput ) {
        if ( this.cache.document.find('.replace-input').length ) {
        	var replaceInput = this.cache.document.find('.replace-input');
            yepnope([
                {
                    load: [
                        '_assets/js/jquery.customInput.js'
                    ],
                    complete: function(){
                        replaceInput.customInput();
                    }
                }
            ]);
        }
	}
	if ( simpleModals ) {
        yepnope([
            {
                load: [
                    '_assets/js/modal.js'
                ],
                complete: function(){
                    g5Modal.init();
                }
            }
        ]);
	}
	if ( jQueryFormValidation ) {
        if ( this.cache.document.find('.form-validation').length ) {
            yepnope([
                {
                    load: [
                        '_assets/js/libs/jquery.validate.min.js'
                    ],
                    complete: function(){
                        yepnope([
                            {
                                load: [
                                    '_assets/js/validation.js'
                                ],
                                complete: function(){
                                    formValidation();
                                }
                            }
                        ]);
                    }
                }
            ]);
        }
	}

}

G5App.prototype.extend = function(){
    $.fn.extend({
        _animate: $.fn.animate,
        animate: function(prop, speed, callback, easing) {
            return this.is(':animated') || this._animate(prop, speed, callback, easing);
        }
    });
}

G5App.prototype.utility = function(){
    //Feature detection is better, but some good plugins use $.browser
	jQuery.browser = {};
	jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());

    //Smooth Scroll
    $.fn.smoothScroll = function(){
        $('html, body').animate({
            scrollTop: ($(this).offset().top - 70) + 'px'
        }, {
            duration: 250,
            easing: 'swing'
        });
    }
}

G5App.prototype.events = function(obj){

	var $elCache = obj,
		$window = $elCache.window,
		$document = $elCache.document,
		$html = $elCache.html,
		$body = $elCache.body;

	$document.find('.scroll-to').on('click', function(){
		var scrollDestination = $(this).attr('href');
		$(scrollDestination).smoothScroll();
		return false;
	});

	$document.find('.print').on('click', function(){
		window.print();
		return false;
	});

}

G5App.prototype.init = function(obj){

	console.log('G5: Initiated');
	console.log('G5: ' + this.cache.html.attr('class'));
	console.log('G5: ' + this.location);
	console.log('G5: ' + this.path);

	this.assets(obj);
	this.extend();
	this.utility();
	this.events(this.cache);

}