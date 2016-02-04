<script src="<?=URL?>js/jquery.parallax.min.js"></script>
<script type="text/javascript">		//$(function() { $("#wallpaper").parallax(); });</script>

<style>
    .scene {
        position: fixed;
        width : 100%;
        height : 100%;

        background: url(<?=URL?>images/home/got.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;


    }
</style>

<div class="scene">
    <ul id="wallpaper">
    </ul>
</div>
