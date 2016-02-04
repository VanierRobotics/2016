<!-- Turn.js (aka HTML5 book thingny)-->
<!--script type="text/javascript" src="<?=URL?>js/jquery.mousewheel.min.js"></script-->
<script type="text/javascript" src="<?=URL?>js/turnjs/hash.js"></script>
<style>
    body {
        background-image : url('<?=URL?>images/book/wood.jpg');
        background-size: cover;
    }
</style>

<div id="canvas" class="container-fluid">
    <div id="book-zoom">
        <div class="sj-book">
            <div depth="5" class="hard"> <div class="side"></div> </div>
            <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
            <?php
                $pages = 10;
                for ($i = 1; $i<=10; $i++) {
                    ($i%2) ? $even= '' : $even= 'even';
                    echo('<div class="own-size '.$even.'">');
                    //TODO: ALEX THIS IS SO FUCKING WEIRD. THE MOMENT YOU TRY AND ADD BETWEEN DIV IN THE ECHOS IT BREAKS.
                    //echo('bob_'.$i);
                    //anyhow once you figure this out the data goes here within the div...
                    echo('</div>');
                }
            ?>
            <div class="hard fixed back-side pBeforeLast"> <div class="depth"></div> </div>
            <div class="hard pLast"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function loadApp() {
        // Check if the CSS was already loaded
        var flipbook = $('.sj-book');

        if (flipbook.width()==0 || flipbook.height()==0) {
            setTimeout(loadApp, 1);
            return;
        }

        // URIs

        Hash.on('^page\/([0-9]*)$', {
            yep: function(path, parts) {

                var page = parts[1];

                if (page!==undefined) {
                    if (flipbook.turn('is'))
                        flipbook.turn('page', page);
                }

            },
            nop: function(path) {

                if (flipbook.turn('is'))
                    flipbook.turn('page', 1);
            }
        });

        // Arrows

        $(document).keydown(function(e){

            var previous = 37, next = 39;

            switch (e.keyCode) {
                case previous:

                    flipbook.turn('previous');

                    break;
                case next:

                    flipbook.turn('next');

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
                turning: function(e, page, view) {

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

    // Hide canvas

    $('#canvas').css({visibility: 'hidden'});

    // Load turn.js

    yepnope({
        test : Modernizr.csstransforms,
        yep: ['<?=URL?>js/turnjs/turn.min.js'],
        nope: ['<?=URL?>js/turnjs/turn.html4.min.js', '<?=URL?>css/jquery.ui.html4.css', '<?=URL?>css/book-html4.css'],
        both: ['<?=URL?>js/book-ajax.js', '<?=URL?>css/jquery.ui.css', '<?=URL?>css/book.css'],
        complete: $(document).ready(loadApp())
    });
</script>