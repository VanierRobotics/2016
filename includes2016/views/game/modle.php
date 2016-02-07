<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 2016-02-07
 * Time: 11:42 AM
 */
?>

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

            $i=0;
            foreach ($this->texts as $text){
                $i++;
                ($i%2) ? $even= '' : $even= 'even'; //It's set to double display mode hence puting even pages as even. (why? because cover textures..)
                echo('<div class="own-size '.$even.'">
                       <div class="book-content">');
                echo $text['content'];
                echo('  </div>
                        <span class="page-number">'.$i.'</span></div>');
            }
            if($i%2){
                $i++;
                ($i%2) ? $even= '' : $even= 'even';
                echo('<div class="own-size '.$even.'">

                       ');

                echo('  <div class="book-content"> <p>END</p> </div>
                        <span class="page-number">'.$i.'</span></div>');

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