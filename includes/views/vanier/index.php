<div id="canvas">
    <div id="book-zoom">
        <div class="my-book">
            <div depth="3" class="hard"> <div class="side"></div> </div>
            <div depth="3" class="hard front-side"> <div class="depth"></div> </div>
            <div class="own-size"></div>
            <div class="own-size even"></div>
            <div class="beforelast hard fixed back-side"> <div class="depth"></div> </div>
            <div class="last hard"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var totalPages = 0;

    function loadApp() {

        var flipbook = $('.my-book');

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

        $.ajax({url: 'http://devbana.tk/index/cms?total=X'}).
        done(function(response) {
            totalPages = response;
        });
        $('.beforelast').addClass('p'+totalPages-1);
        $('.last').addClass('p'+totalPages);

        // Flipbook
        flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

        flipbook.turn({
            elevation: 50,
            acceleration: !isChrome(),
            autoCenter: true,
            gradients: true,
            duration: 1000,
            pages: totalPages,
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
                        $('.my-book .p2').addClass('fixed');
                    else
                        $('.my-book .p2').removeClass('fixed');

                    if (page<book.turn('pages'))
                        $('.my-book .beforelast').addClass('fixed');
                    else
                        $('.my-book .beforelast').removeClass('fixed');

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
                },

                missing: function (e, pages) {

                    for (var i = 0; i < pages.length; i++) {
                        addPage(pages[i], $(this));
                    }

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
        complete: loadApp
    });

</script>
<style>
    .my-book .p1,
    .my-book .p2,
    .my-book .p3,
    .my-book .beforelast,
    .my-book .last{
        background-color:white;
        background-image:url(../../images/book-covers.jpg) !important;
    }


    .my-book .p1 .side{
        width:5px;
        height:600px;
        position:absolute;
        top:0;
        left:475px;

        background:-webkit-gradient(linear, left top, left bottom, color-stop(0, #bbb), color-stop(0.5,  #ddd), color-stop(1,  #bbb));
        background-image:-webkit-linear-gradient(left, #bbb, #ddd, #bbb);
        background-image:-moz-linear-gradient(left, #bbb, #ddd, #bbb);
        background-image:-ms-linear-gradient(left, #bbb, #ddd, #bbb);
        background-image:-o-linear-gradient(left, #bbb, #ddd, #bbb);
        background-image:linear-gradient(left, #bbb, #ddd, #bbb);

        -webkit-transform:rotateY(-90deg);
        -moz-transform:rotateY(-90deg);
        -o-transform:rotateY(-90deg);
        -ms-transform:rotateY(-90deg);
        transform:rotateY(-90deg);

        -webkit-transform-origin:top right;
        -moz-transform-origin:top right;
        -o-transform-origin:top right;
        -ms-transform-origin:top right;
        transform-origin:top right;
        z-index:100000;

    }

    .my-book .p1{
        background-position:0 0;
    }

    .my-book .p2{
        background-position:-480px 0 !important;
    }

    .my-book .p3{
        background-position:-1920px 0 !important;
    }

    .my-book .beforelast{
        background-position:-960px 0 !important;
    }

    .my-book .last{
        background-position:-1440px 0 !important;
    }
</style>