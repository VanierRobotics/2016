<!-- Turn.js (aka HTML5 book thingny)-->
<script type="text/javascript" src="<?=URL?>js/turnjs/hash.js"></script>
<style>
    body {
        background-image : url('<?=URL?>images/book/wood.jpg');
        background-size: cover;
    }

    .sj-book .p1,
    .sj-book .p2,
    .sj-book .p3,
    .sj-book .pBeforeLast,
    .sj-book .pLast{
        background-image: url(<?=URL?>images/journalism/AediBook.jpg)!important;
    }

</style>

<div id="canvas" class="container-fluid">
    <div id="book-zoom">
        <div class="sj-book">
            <div depth="5" class="hard"> <div class="side"></div> </div>
            <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
            <?php
            $pages = 2; //REPLACE WITH FOREACH BASED ON SHIT FROM CONTROLLER
            for ($i = 1; $i<=$pages; $i++) {
                ($i%2) ? $even= '' : $even= 'even'; //It's set to double display mode hence puting even pages as even. (why? because cover textures..)
                echo('<div class="own-size '.$even.'">');
                /*  //TODO: @alex to use : echo into book-content cos css. we also have a table of content.. IMPORTANT check out zoom feature for headshots.
                   <div class="book-content">
                        <p class="no-indent">
                            Mr. McCollum. McCollum later recalled of one time when his pupil Steve called up David Hewlett himself, co-founder of HP, to get spare parts for his homework, and even a summer job at HP’s factory. Steve’s entrepreneurial skills showed up early in his life indeed.
                        </p>
                        <p>
                            <img class="left-pic zoom-this" src="samples/steve-jobs/pics/highschool.jpg" width="172" height="159">
                            At Homestead, Steve befriended Bill Fernandez, a neighbor who shared his interests in electronics. It was Bill who first introduced him to another computer whiz kid, an older guy named Stephen Wozniak, or — as everybody used to call him — Woz. Steve and Woz met in 1969, when they were respectively 14 and 19. At the time, Woz was building a little computer board with Bill Fernandez that they called “the Cream Soda Computer”.
                        </p>
                    </div>
                    <span class="page-number">13</span>
                 */
                echo('<div class="table-contents">'
                    .  '<h1>Contents</h1>'
                    .   '<ul>'
                    .      '<li><a href="#page/7">The book <span>7</span></a></li>'
                    .      '<li><a href="#page/10">Youth<span>10</span></a></li>'
                    .      '<li><a href="#page/18">The Apple I <span>18</span></a></li>'
                    .      '<li><a href="#page/25">Apple\'s early days <span>25</span></a></li>'
                    .      '<li><a href="#page/30">Success and failures <span>30</span></a></li>'
                    .      '<li><a href="#page/38">Macintosh <span>38</span></a></li>'
                    .      '<li><a href="#page/40">Leaving Apple  <span>40</span></a></li>'
                    .      '<li><a href="#page/43">NeXT Inc <span>43</span></a></li>'
                    .      '<li><a href="#page/53">Wildreness years <span>53</span></a></li>'
                    .      '<li><a href="#page/73">A visionary <span>73</span></a></li>'
                    .      '<li><a href="#page/86">Apple is strong <span>86</span></a></li>'
                    .      '<li><a href="#page/97">2010: Steve is back<span>97</span></a></li>'
                    .  '</ul>'
                    . '</div>'
                    .'<span class="page-number">3</span></div>');
            }
            ?>
            <div class="hard fixed back-side pBeforeLast"> <div class="depth"></div> </div>
            <div class="hard pLast"></div>
        </div>
    </div>
</div>

<script type="text/javascript">

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
                }/*,
                 missing: function (e, pages) {
                 for (var i = 0; i < pages.length; i++) {
                 addPage(pages[i], $(this));
                 }
                 }*/
            }
        });
        flipbook.addClass('animated');

        // Show canvas
        $('#canvas').css({visibility: ''});
    }

    // Hide canvas
    $('#canvas').css({visibility: 'hidden'});

    // Load turn.js
    yepnope({
        test : Modernizr.csstransforms,
        yep: ['<?=URL?>js/turnjs/turn.min.js'],
        nope: ['<?=URL?>js/turnjs/turn.html4.min.js', '<?=URL?>css/jquery.ui.html4.css', '<?=URL?>css/book-html4.css'],
        both: ['<?=URL?>js/book.js', '<?=URL?>css/jquery.ui.css', '<?=URL?>css/book.css'],
        complete: loadApp
    });

</script>