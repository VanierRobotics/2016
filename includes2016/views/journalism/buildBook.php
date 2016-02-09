<!-- Turn.js (aka HTML5 book thingny)-->
<script type="text/javascript" src="<?=URL?>js/turnjs/hash.js"></script>
<style scoped>
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
        background-image: url(<?=URL?>images/teams/<?= $this->team . 'Book.jpg'?>)!important;

    }

    .book-content img.left {
        display: block;
        float: left;
        margin: 5px;
    }

</style>
<div id="canvas" class="container-fluid">
    <div id="book-zoom">
        <div class="sj-book">
            <div depth="5" class="hard"> <div class="side"></div> </div>
            <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
            <?php
            $i=0;
            foreach($this->texts as $text) {
                $i++;
                ($i%2) ? $even= '' : $even= 'even'; //It's set to double display mode hence puting even pages as even. (why? because cover textures..)
                echo('<div class="own-size '.$even.'">
                       <div class="book-content">');
                $words = $text['content'];
                $words = str_replace('{{img_path}}', $this->imgPath, $words);
                echo $words;
                echo('  </div>
                        <span class="page-number">'.$i.'</span></div>');
            }
            if($i%2){
                $i++;
                ($i%2) ? $even= '' : $even= 'even';
                echo('<div class="own-size '.$even.'">

                       ');

                echo('  <div class="book-content"> <p></p> </div>
                        <span class="page-number">'.$i.'</span></div>');

            }
            ?>
            <div class="hard fixed back-side pBeforeLast"> <div class="depth"></div> </div>
            <div class="hard pLast"></div>
        </div>
    </div>
    <script type="text/javascript">
        $('.own-size img').addClass('zoom-this');
    </script>
</div>