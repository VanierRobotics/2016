<!-- Turn.js (aka HTML5 book thingny)-->
<div id="book">
    <script type="text/javascript" src="<?= URL ?>js/turnjs/hash.js"></script>
    <link rel="stylesheet" href="<?=URL?>css/vanier-index.css" property="stylesheet">

    <div id="canvas" class="container-fluid" style="visibility: hidden">
        <div id="book-zoom">
            <div class="sj-book">
                <div class="hard">
                    <div class="side"></div>
                </div>
                <div class="hard front-side">
                    <div class="book-content">
                        <h1 style="font-size: 38px">Vanier College</h1>
                        <video class="zoom-this" autoplay="autoplay" style="position:relative; right: 25px" width="460"
                               height="320">
                            <source src="<?= URL ?>videos/vanier.webm" type="video/webm">
                            <source src="<?= URL ?>videos/vanier.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="depth"></div>
                </div>
                <?php
                $i = 0;

                foreach ($this->texts as $text) {
                    $i++;
                    ($i % 2) ? $even = '' : $even = 'even';
                    echo('	<div class="own-size ' . $even . '">
								<div class="book-content">');
                    $words = $text['content'];
                    $words = str_replace('{{img_path}}', $this->imgPath, $words);
                    echo $words;
                    echo(' 	</div>
							<span class="page-number">' . ($i + 2) . '</span></div>');
                }

                if ($i % 2) {
                    $i++;
                    ($i % 2) ? $even = '' : $even = 'even';
                    echo('<div class="own-size ' . $even . '">');
                    echo('  <div class="book-content"> </div>
							<span class="page-number">' . ($i + 2) . '</span></div>');
                }
                ?>
                <div class="hard fixed back-side pBeforeLast">
                    <div class="depth"></div>
                </div>
                <div class="hard pLast"></div>
            </div>
        </div>
        <script type="text/javascript">
            $('.own-size img').addClass('zoom-this');
        </script>
    </div>
</div>