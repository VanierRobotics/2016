<!-- Turn.js (aka HTML5 book thingny)-->
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
                $pages = 2; //REPLACE WITH FOREACH BASED ON SHIT FROM CONTROLLER
                for ($i = 1; $i<=$pages; $i++) {
                    ($i%2) ? $even= '' : $even= 'even'; //It's set to double display mode hence puting even pages as even. (why? because cover textures..)
                    echo('<div class="own-size '.$even.'">');
                    //TODO: @alex to use : echo into book-content cos css. we also have a table of content.. IMPORTANT check out zoom feature for headshots.
                    echo('<div class="book-content">'
                         .  '<p class="no-indent">'
                         .      'Mr. McCollum. McCollum later recalled of one time when his pupil Steve called up David Hewlett himself, co-founder of HP, to get spare parts for his homework, and even a summer job at HP’s factory. Steve’s entrepreneurial skills showed up early in his life indeed.'
                         .  '</p><p>'
                         .     '<img class="left-pic zoom-this" src="samples/steve-jobs/pics/highschool.jpg" width="172" height="159">'
                         .     'At Homestead, Steve befriended Bill Fernandez, a neighbor who shared his interests in electronics. It was Bill who first introduced him to another computer whiz kid, an older guy named Stephen Wozniak, or — as everybody used to call him — Woz. Steve and Woz met in 1969, when they were respectively 14 and 19. At the time, Woz was building a little computer board with Bill Fernandez that they called “the Cream Soda Computer”.'
                         .  '</p></div><span class="page-number">13</span></div>');
                }
            ?>
            <div class="hard fixed back-side pBeforeLast"> <div class="depth"></div> </div>
            <div class="hard pLast"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Load turn.js
    yepnope({
        test : Modernizr.csstransforms,
        yep: ['<?=URL?>js/turnjs/turn.min.js'],
        nope: ['<?=URL?>js/turnjs/turn.html4.min.js', '<?=URL?>css/jquery.ui.html4.css', '<?=URL?>css/book-html4.css'],
        both: ['<?=URL?>js/turnjs/book.js', '<?=URL?>css/jquery.ui.css', '<?=URL?>css/book.css'],
        complete: delayLoad
    });
</script>