var production = true;

/**
 * hash.js
 *
 * Copyright (C) 2012 Emmanuel Garcia
 * MIT Licensed
 *
 * ****************************************
 *
 * Hash.pushState(true);
 *
 * Hash.on('/page/([0-9]+)$',
 *	{yep: function(path, parts) { }, nop: function() { }},
 *	'Page $1');
 *
 * Hash.go('/page/1');
 **/

(function() {

'use strict';

var hashes = {},
	regexp = {},
	history = [],
	freq = 100,
	num = 0,
	pushState = false,
	timer = null,
	currentUrl = null,

	freeze = function(obj) {
		if (Object.freeze) return Object.freeze(obj);
		return obj;
	},

	getHashParts = function() {
		return window.location.href.split('#');
	},

	startTimer = function() {
		
		if (!timer)
			timer = setInterval(function() {
				if (num>0 && currentUrl!=window.location.href) {
					currentUrl = window.location.href;
					window.Hash.check();
				}
			}, freq);

	},

	stopTimer = function() {

		if (timer) {
			clearInterval(timer);
			timer = null;
		}

	};

window.Hash = freeze({

		pushState: function(yes) {

			if (window.history && window.history.pushState)
				pushState = yes;

			return this;
		},

		fragment: function() {
			
			var hash = getHashParts();
			return (pushState) ?
				window.location.pathname + ((hash[1]) ? '#' + hash[1] : '')
				: hash[1] || '';

		},
		
		get: function(path, params) {
			
			var p, fragment = '', parameters = [];

			for(p in params) {
				if (!Object.prototype.hasOwnProperty(p))
					continue;
				parameters.push(encodeURIComponent(p) + '=' + encodeURIComponent(params[p]));
			}

			if (parameters.length>0)
				parameters = '?' + parameters.join('&');
		
			return (pushState) ? path + parameters :
				getHashParts()[0] + '#' + path + parameters;

		},

		go: function(hash, params) {

			if (this.fragment()!=hash) {
				var to = this.get(hash, params);

				if (pushState)
					window.history.pushState(null, document.title, to);
				else
					window.location.href = to;
				}
			
			return this;
		},

		update: function () {
			
			currentUrl = window.location.href;
			return this;

		},

		on: function(hash, callback, title) {

			if (!hashes[hash])
				hashes[hash] = {title: title, listeners: []};
			
			hashes[hash].listeners.push(callback);
			num++;
			startTimer();

			return this;
		},

		check: function() {

			var i,
				hash,
				parts,
				fragment = this.fragment();


			for (hash in hashes) {
				if (!Object.prototype.hasOwnProperty.call(hashes, hash))
					continue;

				hashes[hash].regexp = hashes[hash].regexp || new RegExp(hash);

				if ((parts = hashes[hash].regexp.exec(fragment))) {
					if (hashes[hash].title)
						document.title = hashes[hash].title;

					for (i = 0; i<hashes[hash].listeners.length; i++)
						if (hashes[hash].listeners[i].yep)
							hashes[hash].listeners[i].yep(fragment, parts);
				} else {
					for (i = 0; i<hashes[hash].listeners.length; i++)
						if (hashes[hash].listeners[i].nop)
							hashes[hash].listeners[i].nop(fragment);
				}

			}

			return this;
		}
});

})();

function loadApp() {

	var flipbook = $('.sj-book');

	// Check if the CSS was already loaded

	if (flipbook.width()==0 || flipbook.height()==0) {
		setTimeout(loadApp, 10);
		return;
	}

	// URIs
	Hash.on('^page\/([0-9]*)$', {
		yep: function(path, parts) {

			var page = parts[1];

			if (page!==undefined) {
				if ($('.sj-book').turn('is'))
					$('.sj-book').turn('page', page);
			}

		},
		nop: function(path) {

			if ($('.sj-book').turn('is'))
				$('.sj-book').turn('page', 1);
		}
	});

	// Arrows
	$(document).keydown(function(e){
		var previous = 37, next = 39;

		switch (e.keyCode) {
			case previous:
				$('.sj-book').turn('previous');
				break;
			case next:
				$('.sj-book').turn('next');
				break;
		}
	});

	// Flipbook
	flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

	flipbook.turn({
		elevation: 50,
		acceleration: !isChrome(),
		autoCenter: true,
		gradients: true,
		duration: 1000,
		when: {
			turning: function(e, page) {

				var book = $(this),
					currentPage = book.turn('page'),
					pages = book.turn('pages');

				if (currentPage>3 && currentPage<pages-3) {

					if (page==1) {
						book.turn('page', 2).turn('stop').turn('page', page);
						e.preventDefault();
						return;
					} else if (page==pages) {
						book.turn('page', pages-1).turn('stop').turn('page', page);
						e.preventDefault();
						return;
					}
				} else if (page>3 && page<pages-3) {
					if (currentPage==1) {
						book.turn('page', 2).turn('stop').turn('page', page);
						e.preventDefault();
						return;
					} else if (currentPage==pages) {
						book.turn('page', pages-1).turn('stop').turn('page', page);
						e.preventDefault();
						return;
					}
				}

				updateDepth(book, page);

				if (page>=2)
					$('.sj-book .p2').addClass('fixed');
				else
					$('.sj-book .p2').removeClass('fixed');

				if (page<book.turn('pages'))
					$('.sj-book .pBeforeLast').addClass('fixed');
				else
					$('.sj-book .pBeforeLast').removeClass('fixed');

				Hash.go('page/'+page).update();

			},
			turned: function(e, page, view) {

				var book = $(this);

				if (page==2 || page==3) {
					book.turn('peel', 'br');
				}

				updateDepth(book);

				book.turn('center');

			},

			end: function(e, pageObj) {
				var book = $(this);
				updateDepth(book);
			}
		}
	});
	flipbook.addClass('animated');

	// Show canvas
	$('#canvas').css({visibility: ''});
}

function delayLoad(){
    setTimeout(loadApp,100);
}

// Hide canvas
$('#canvas').css('visibility', 'hidden');

// Load turn.js
if (production === true) {
	yepnope({
		test : Modernizr.csstransforms,
		yep: ['http://vanier-robotics.com/2016/js/turnjs/turn.min.js'],
		nope: ['http://vanier-robotics.com/2016/js/turnjs/turn.html4.min.js', 'http://vanier-robotics.com/da2016/css/jquery.ui.html4.css', 'http://vanier-robotics.com/da2016/css/book-html4.css'],
		both: ['http://vanier-robotics.com/2016/js/turnjs/book.js', 'http://vanier-robotics.com/da2016/css/jquery.ui.css',
			'http://vanier-robotics.com/2016/css/book.css', 'http://vanier-robotics.com/da2016/js/book.css'],
		complete: delayLoad
	});
} else {
	yepnope({
		test : Modernizr.csstransforms,
		yep: ['http://devbana.tk/js/turnjs/turn.min.js'],
		nope: ['http://devbana.tk/js/turnjs/turn.html4.min.js', 'http://devbana.tk/css/jquery.ui.html4.css', 'http://devbana.tk/css/book-html4.css'],
		both: ['http://devbana.tk/js/turnjs/book.js', 'http://devbana.tk/css/jquery.ui.css',
			'http://devbana.tk/css/book.css', 'http://devbana.tk/js/book.css'],
		complete: delayLoad
	});
}