<?php     $link = URL . $this->language . (($this->language === 'en') ? '/team' : '/equipe'); ?>
<link rel="stylesheet" href="<?=URL?>css/journalismBooks.css">


<div class="container">
    <header class="clearfix">
        <h1></h1>
    </header>
    <div class="main">
        <ul id="bk-list" class="bk-list clearfix">
            <a href="<?=$link?>/Video" >
                <li>
                    <div class="bk-book book-1">
                        <div class="bk-front">
                            <div class="bk-cover"></div>
                        </div>
                        <div class="bk-back"> </div>
                        <div class="bk-right"></div>
                        <div class="bk-left"></div>
                        <div class="bk-top"></div>
                    </div>
                </li>
            </a>

            <a href="<?=$link?>/Build" >
                <li>
                    <div class="bk-book book-2">
                        <div class="bk-front">
                            <div class="bk-cover"></div>
                        </div>
                        <div class="bk-back"> </div>
                        <div class="bk-right"></div>
                        <div class="bk-left"></div>
                        <div class="bk-top"></div>
                    </div>
                </li>
            </a>

            <a href="<?=$link?>/Web" >
                <li>
                    <div class="bk-book book-3">
                        <div class="bk-front">
                            <div class="bk-cover"></div>
                        </div>
                        <div class="bk-back"> </div>
                        <div class="bk-right"></div>
                        <div class="bk-left"></div>
                        <div class="bk-top"></div>
                    </div>
                </li>
            </a>

            <a href="<?=$link?>/Kiosk" >
                <li>
                    <div class="bk-book book-4">
                        <div class="bk-front">
                            <div class="bk-cover"></div>
                        </div>
                        <div class="bk-back"> </div>
                        <div class="bk-right"></div>
                        <div class="bk-left"></div>
                        <div class="bk-top"></div>
                    </div>
                </li>
            </a>

        </ul>
        <div class="bookshelf"></div>
    </div>
</div>

