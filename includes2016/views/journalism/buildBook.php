<!-- Turn.js (aka HTML5 book thingny)-->
<script type="text/javascript" src="<?=URL?>js/turnjs/hash.js"></script>
<link rel="stylesheet" href="<?=URL?>css/journal-<?=strtolower($this->team)?>.css" property="stylesheet" />
<div id="canvas" class="container-fluid">
    <div id="book-zoom">
        <div class="sj-book">
            <div class="hard"> <div class="side"></div> </div>
            <div class="hard front-side"> <div class="depth"></div> </div>
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