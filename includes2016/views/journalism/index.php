<link rel="stylesheet" href="<?= URL ?>css/journalismBooks.css" property="stylesheet">
<?php $link = URL . $this->language . (($this->language === 'en') ? '/journalism' : '/journalisme'); ?>

<div class="container">
    <header class="clearfix">
        <h1></h1>
    </header>
    <div class="main">
        <ul id="bk-list" class="bk-list clearfix">
            <li onclick="window.location = '<?= $link ?>/Video';">
                <div class="bk-book book-1">
                    <div class="bk-front">
                        <div class="bk-cover"></div>
                    </div>
                    <div class="bk-back"></div>
                    <div class="bk-right"></div>
                    <div class="bk-left"></div>
                    <div class="bk-top"></div>
                </div>
            </li>
            <li onclick="window.location = '<?= $link ?>/Build';">
                <div class="bk-book book-2">
                    <div class="bk-front">
                        <div class="bk-cover"></div>
                    </div>
                    <div class="bk-back"></div>
                    <div class="bk-right"></div>
                    <div class="bk-left"></div>
                    <div class="bk-top"></div>
                </div>
            </li>
            <li onclick="window.location = '<?= $link ?>/Web';">
                <div class="bk-book book-3">
                    <div class="bk-front">
                        <div class="bk-cover"></div>
                    </div>
                    <div class="bk-back"></div>
                    <div class="bk-right"></div>
                    <div class="bk-left"></div>
                    <div class="bk-top"></div>
                </div>
            </li>
            <li onclick="window.location = '<?= $link ?>/Kiosk';">
                <div class="bk-book book-4">
                    <div class="bk-front">
                        <div class="bk-cover"></div>
                    </div>
                    <div class="bk-back"></div>
                    <div class="bk-right"></div>
                    <div class="bk-left"></div>
                    <div class="bk-top"></div>
                </div>
            </li>
        </ul>
        <div class="bookshelf"></div>
    </div>
</div>