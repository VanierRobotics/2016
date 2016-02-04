<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 2016-02-01
 * Time: 10:42 PM
 */
?>

<link rel="stylesheet" href="<?=URL?>css/icewall.css"/>
<script src="<?=URL?>js/jquery.parallax.min.js"></script>
<script src="<?=URL?>js/icewall.js"></script>

<div class="container">
    <div id="scene">
        <ul class="wallpaper">
            <li class="layer" id="icePillar" data-depth="0.05"><img src=" ../images/layer3.png"/></li>
        </ul>

        <div onclick="window.location.href='<?=URL?>en'" class="button enButton">English</div>
        <div onclick="window.location.href='<?=URL?>fr'" class="button frButton">Français</div>
    </div>
</div>
