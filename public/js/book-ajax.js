function updateDepth(book, newPage) {

	var page = book.turn('page'),
		pages = book.turn('pages'),
		depthWidth = 16*Math.min(1, page*2/pages);

		newPage = newPage || page;

	if (newPage>3)
		$('.my-book .p2 .depth').css({
			width: depthWidth,
			left: 20 - depthWidth
		});
	else
		$('.my-book .p2 .depth').css({width: 0});

		depthWidth = 16*Math.min(1, (pages-page)*2/pages);

	if (newPage<pages-3)
		$('.my-book .depth .p'+(pages-1)).css({
			width: depthWidth,
			right: 20 - depthWidth
		});
	else
		$('.my-book .depth .p'+(pages-1)).css({width: 0});

}

function loadPage(page) {
	var element = '<div class="book-content"> <h1>Youth2</h1> <h2>The jobs family</h2> <p class="capital">'
		+ 'Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson,'
		+ 'and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.'
		+ '</p> <p> Being born out of wedlock in the puritan America of the 1950s, the baby'
		+ 'was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately,'
		+ 'the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the'
	 	+ 'war. Paul was a machinist from the Midwest who had '
		+ '</p> </div> <span class="page-number">'+page+'</span>';
/*$.ajax({url: 'http://devbana.tk/index/cms?book=' + page}).
		done(function(pageHtml) {
			$('.my-book .p' + page).html(pageHtml.replace('en/vanier/', ''));
		});*/

    $('.my-book .p' + page).html(element.replace('/en/vanier/', ''));
}

function addPage(page, book) {

	var id, pages = book.turn('pages');

	if (!book.turn('hasPage', page)) {

		var element = $('<div />',
			{'class': 'own-size',
				css: {width: 460, height: 582}
			}).
			html('<div class="loader"></div>');

		if (book.turn('addPage', element, page)) {
			loadPage(page);
		}

	}
}

function zoomHandle(e) {

	if ($('.my-book').data().zoomIn)
		zoomOut();
	else if (e.target && $(e.target).hasClass('zoom-this')) {
		zoomThis($(e.target));
	}

}

function zoomThis(pic) {

	var	position, translate,
		tmpContainer = $('<div />', {'class': 'zoom-pic'}),
		transitionEnd = $.cssTransitionEnd(),
		tmpPic = $('<img />'),
		zCenterX = $('#book-zoom').width()/2,
		zCenterY = $('#book-zoom').height()/2,
		bookPos = $('#book-zoom').offset(),
		picPos = {
			left: pic.offset().left - bookPos.left,
			top: pic.offset().top - bookPos.top
		},
		completeTransition = function() {
			$('#book-zoom').unbind(transitionEnd);

			if ($('.my-book').data().zoomIn) {
				tmpContainer.appendTo($('body'));

				$('body').css({'overflow': 'hidden'});
				
				tmpPic.css({
					margin: position.top + 'px ' + position.left+'px'
				}).
				appendTo(tmpContainer).
				fadeOut(0).
				fadeIn(500);
			}
		};

		$('.my-book').data().zoomIn = true;

		$('.my-book').turn('disable', true);

		$(window).resize(zoomOut);
		
		tmpContainer.click(zoomOut);

		tmpPic.load(function() {
			var realWidth = $(this)[0].width,
				realHeight = $(this)[0].height,
				zoomFactor = realWidth/pic.width(),
				picPosition = {
					top:  (picPos.top - zCenterY)*zoomFactor + zCenterY + bookPos.top,
					left: (picPos.left - zCenterX)*zoomFactor + zCenterX + bookPos.left
				};


			position = {
				top: ($(window).height()-realHeight)/2,
				left: ($(window).width()-realWidth)/2
			};

			translate = {
				top: position.top-picPosition.top,
				left: position.left-picPosition.left
			};

			$('.samples .bar').css({visibility: 'hidden'});
			$('#slider-bar').hide();
			
		
			$('#book-zoom').transform(
				'translate('+translate.left+'px, '+translate.top+'px)' +
				'scale('+zoomFactor+', '+zoomFactor+')');

			if (transitionEnd)
				$('#book-zoom').bind(transitionEnd, completeTransition);
			else
				setTimeout(completeTransition, 1000);

		});

		tmpPic.attr('src', pic.attr('src'));

}

function zoomOut() {

	var transitionEnd = $.cssTransitionEnd(),
		completeTransition = function(e) {
			$('#book-zoom').unbind(transitionEnd);
			$('.my-book').turn('disable', false);
			$('body').css({'overflow': 'auto'});
		};

	$('.my-book').data().zoomIn = false;

	$(window).unbind('resize', zoomOut);


	$('.zoom-pic').remove();
	$('#book-zoom').transform('scale(1, 1)');
	$('.samples .bar').css({visibility: 'visible'});
	$('#slider-bar').show();

	if (transitionEnd)
		$('#book-zoom').bind(transitionEnd, completeTransition);
	else
		setTimeout(completeTransition, 1000);
}

function isChrome() {
	// Chrome's unsolved bug
	// http://code.google.com/p/chromium/issues/detail?id=128488
	return navigator.userAgent.indexOf('Chrome')!=-1;
}