<script src="<?=URL?>js/jquery.parallax.min.js"></script>
<script type="text/javascript">		//$(function() { $("#wallpaper").parallax(); });</script>

<style>
    .game {
        position: fixed;
        width : 100%;
        height : 100%;

        background: url(<?=URL?>images/medieval-room.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;


    }
    .testing{

    }
</style>

<div class="game">
    <ul id="wallpaper">
    </ul>

    <img class="testing" src="<?=URL?>images/game-room-hover.png">
</div>
