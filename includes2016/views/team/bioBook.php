<!-- Turn.js (aka HTML5 book thingny)-->
<script type="text/javascript" src="<?= URL ?>js/turnjs/hash.js"></script>
<script type="text/javascript" src="<?= URL ?>js/turnjs/zoom.min.js"></script>
<style>
    body {
        background-image: url('<?=URL?>images/book/wood.jpg');
        background-size: cover;
    }

    .sj-book .p1,
    .sj-book .p2,
    .sj-book .p3,
    .sj-book .pBeforeLast,
    .sj-book .pLast {
        background-color: white;
        background-image: url(<?=URL?>images/teams/<?= $this->team . 'Book.jpg'?>) !important;
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

            <!-- Captain's Bio page -->
            <?php
            $pageCount = 2;
            if (isset($this->teamCaptain)) {
                $capbio = $this->teamCaptain;
                ?>
                <div class="own-size">
                    <div class="polaroid captain">
                        <p style="font-size: 20px;"><?= $this->tcText . ' ' . $capbio['bio_GOTName'] ?>
                            <br/><?= '(' . $capbio['bio_FullName'] . ')' ?></p>
                        <img src="<?= URL ?>images/bios/<?= $capbio['bio_Image'] ?>"/>
                    </div>
                    <div class="bioContent">
                        <h4><?= $this->challengeText ?></h4>
                        <p>
                            <?= $capbio['bio_Challenges'] ?>
                        </p>
                        <h4><?= $this->learningText ?></h4>
                        <p>
                            <?= $capbio['bio_Experience'] ?>
                        </p>
                        <p class="page-footer"><?= $this->team . ' - ' . $pageCount ?></p>
                    </div>
                </div>
                <?php
                $pageCount++;
            }
            ?>

            <?php $capbio = $this->captainBio ?>
            <div class="own-size">
                <div class="polaroid captain">
                    <p><?= $this->captain . ' ' . $capbio['bio_GOTName'] ?>
                        <br/><?= '(' . $capbio['bio_FullName'] . ')' ?></p>
                    <img src="<?= URL ?>images/bios/<?= $capbio['bio_Image'] ?>"/>
                </div>
                <div class="bioContent">
                    <h4><?= $this->challengeText ?></h4>
                    <p>
                        <?= $capbio['bio_Challenges'] ?>
                    </p>
                    <h4><?= $this->learningText ?></h4>
                    <p>
                        <?= $capbio['bio_Experience'] ?>
                    </p>
                    <p class="page-footer"><?= $this->team . ' - ' . $pageCount ?></p>
                </div>
            </div>
            <?php
            $pageCount++;
            foreach ($this->bios as $bio) { ?>
                <div class="own-size">
                    <div class="polaroid">
                        <p><?= $bio['bio_GOTName'] ?>
                            <br/><?= '(' . $bio['bio_FullName'] . ')' ?></p>
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
            print '<div class="own-size mentors">';
            print '<h2>Mentors</h2>';
            print $this->mentors;
            print '<p class="page-footer">' . $this->team . ' - ' . $pageCount . '</p>';
            print '</div>';
            $pageCount++;
            if (($pageCount % 2) === 1) print '<div class="own-size"></div>';
            ?>
            <div class="hard fixed back-side pBeforeLast">
                <div class="depth"></div>
            </div>
            <div class="hard pLast"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Hide canvas
    $('#canvas').css('visibility', 'hidden');

    // Load turn.js
    yepnope({
        test: Modernizr.csstransforms,
        yep: ['<?=URL?>js/turnjs/turn.min.js'],
        nope: ['<?=URL?>js/turnjs/turn.html4.min.js', '<?=URL?>css/jquery.ui.html4.css', '<?=URL?>css/book-html4.css'],
        both: ['<?=URL?>js/turnjs/book.js', '<?=URL?>css/jquery.ui.css', '<?=URL?>css/book.css'],
        complete: delayLoad
    });
</script>