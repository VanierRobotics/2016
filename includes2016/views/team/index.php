<!-- Turn.js (aka HTML5 book thingny)-->
<script type="text/javascript" src="<?= URL ?>js/turnjs/hash.js"></script>
<script type="text/javascript" src="<?= URL ?>js/turnjs/turn.js"></script>
<script type="text/javascript" src="<?= URL ?>js/turnjs/zoom.min.js"></script>
<script type="text/javascript" src="<?= URL ?>js/turnjs/scissor.min.js"></script>
<style>
    body {
        background-image: url('<?=URL?>images/book/wood.jpg');
        background-size: cover;
    }
</style>

<div id="canvas" class="container-fluid">
    <div id="book-zoom">
        <div class="sj-book">
            <div depth="5" class="hard">
                <div class="side"></div>
            </div>
            <div depth="5" class="hard front-side">
                <div class="depth"></div>
            </div>
            <?php
            $pageCount = 2;
            foreach ($this->bios as $bio) { ?>
                <div>
                    <div class="polaroid">
                        <p><?= $bio['bio_FullName'] ?></p>
                        <img src="<?= URL ?>images/bios/<?= $bio['bio_Image'] ?>"/>
                    </div>
                    <div class="bioContent">
                        <h4><?= $this->challengeText ?></h4>
                        <p>
                            <?= $bio['bio_Challenges'] ?>
                        </p>
                        <h4><?= $this->learningText ?></h4>
                        <p>
                            <?= $bio['bio_Experience'] ?>
                        </p>
                        <p class="page-footer"><?= $this->team . ' - ' . $pageCount ?></p>
                    </div>
                </div>
                <?php
                $pageCount++;
            }
            if (($pageCount%2) === 1) print '<div></div>';
            ?>
            <div class="hard fixed back-side pBeforeLast">
                <div class="depth"></div>
            </div>
            <div class="hard pLast"></div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function loadApp() {

        var flipbook = $('.sj-book');

        // Check if the CSS was already loaded

        if (flipbook.width() == 0 || flipbook.height() == 0) {
            setTimeout(loadApp, 10);
            return;
        }

        // URIs
        Hash.on('^page\/([0-9]*)$', {
            yep: function (path, parts) {

                var page = parts[1];

                if (page !== undefined) {
                    if ($('.sj-book').turn('is'))
                        $('.sj-book').turn('page', page);
                }

            },
            nop: function (path) {

                if ($('.sj-book').turn('is'))
                    $('.sj-book').turn('page', 1);
            }
        });

        // Arrows
        $(document).keydown(function (e) {
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
                turning: function (e, page) {

                    var book = $(this),
                        currentPage = book.turn('page'),
                        pages = book.turn('pages');

                    if (currentPage > 3 && currentPage < pages - 3) {

                        if (page == 1) {
                            book.turn('page', 2).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (page == pages) {
                            book.turn('page', pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    } else if (page > 3 && page < pages - 3) {
                        if (currentPage == 1) {
                            book.turn('page', 2).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (currentPage == pages) {
                            book.turn('page', pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    }

                    updateDepth(book, page);

                    if (page >= 2)
                        $('.sj-book .p2').addClass('fixed');
                    else
                        $('.sj-book .p2').removeClass('fixed');

                    if (page < book.turn('pages'))
                        $('.sj-book .pBeforeLast').addClass('fixed');
                    else
                        $('.sj-book .pBeforeLast').removeClass('fixed');

                    Hash.go('page/' + page).update();

                },
                turned: function (e, page, view) {

                    var book = $(this);

                    if (page == 2 || page == 3) {
                        book.turn('peel', 'br');
                    }

                    updateDepth(book);

                    book.turn('center');

                },

                end: function (e, pageObj) {
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
        test: Modernizr.csstransforms,
        yep: ['<?=URL?>js/turnjs/turn.min.js'],
        nope: ['<?=URL?>js/turnjs/turn.html4.min.js', '<?=URL?>css/jquery.ui.html4.css', '<?=URL?>css/book-html4.css'],
        both: ['<?=URL?>js/book.js', '<?=URL?>css/jquery.ui.css', '<?=URL?>css/book.css'],
        complete: loadApp
    });

</script>