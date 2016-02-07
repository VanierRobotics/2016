<!-- Turn.js (aka HTML5 book thingny)-->
<script type="text/javascript" src="http://devbana.tk/js/turnjs/hash.js"></script>
<style>
    body {
        background-image : url('http://devbana.tk/images/book/wood.jpg');
        background-size: cover;
    }

    .sj-book .p1,
    .sj-book .p2,
    .sj-book .p3,
    .sj-book .pBeforeLast,
    .sj-book .pLast {
        background-color: white;
        background-image: url(<?=URL?>images/book/VanierBook.jpg) !important;
    }
</style>


<div id="canvas" class="container-fluid">
    <div id="book-zoom">
        <div class="sj-book">
            <div depth="5" class="hard"> <div class="side"></div> </div>
            <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
            <div class="own-size "><div class="book-content"><p class="no-indent">Mr. McCollum. McCollum later recalled of one time when his pupil Steve called up David Hewlett himself, co-founder of HP, to get spare parts for his homework, and even a summer job at HP’s factory. Steve’s entrepreneurial skills showed up early in his life indeed.</p><p><img class="left-pic zoom-this" src="samples/steve-jobs/pics/highschool.jpg" width="172" height="159">At Homestead, Steve befriended Bill Fernandez, a neighbor who shared his interests in electronics. It was Bill who first introduced him to another computer whiz kid, an older guy named Stephen Wozniak, or — as everybody used to call him — Woz. Steve and Woz met in 1969, when they were respectively 14 and 19. At the time, Woz was building a little computer board with Bill Fernandez that they called “the Cream Soda Computer”.</p></div><span class="page-number">13</span></div><div class="own-size even"><div class="book-content"><p class="no-indent">Mr. McCollum. McCollum later recalled of one time when his pupil Steve called up David Hewlett himself, co-founder of HP, to get spare parts for his homework, and even a summer job at HP’s factory. Steve’s entrepreneurial skills showed up early in his life indeed.</p><p><img class="left-pic zoom-this" src="samples/steve-jobs/pics/highschool.jpg" width="172" height="159">At Homestead, Steve befriended Bill Fernandez, a neighbor who shared his interests in electronics. It was Bill who first introduced him to another computer whiz kid, an older guy named Stephen Wozniak, or — as everybody used to call him — Woz. Steve and Woz met in 1969, when they were respectively 14 and 19. At the time, Woz was building a little computer board with Bill Fernandez that they called “the Cream Soda Computer”.</p></div><span class="page-number">13</span></div>            <div class="hard fixed back-side pBeforeLast"> <div class="depth"></div> </div>
            <div class="hard pLast"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Load turn.js
    yepnope({
        test : Modernizr.csstransforms,
        yep: ['http://devbana.tk/js/turnjs/turn.min.js'],
        nope: ['http://devbana.tk/js/turnjs/turn.html4.min.js', 'http://devbana.tk/css/jquery.ui.html4.css', 'http://devbana.tk/css/book-html4.css'],
        both: ['http://devbana.tk/js/turnjs/book.js', 'http://devbana.tk/css/jquery.ui.css', 'http://devbana.tk/css/book.css'],
        complete: delayLoad
    });
</script>