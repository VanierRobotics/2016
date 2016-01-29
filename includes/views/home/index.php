<script src="<?=URL?>js/jquery.parallax.min.js"></script>
<script type="text/javascript">		$(function() { $("#wallpaper").parallax(); });</script>

<style>
    .scene
    {
        position : relative;
        left : 0px;
        top : 0px;
        width : 100%;
        height : 100%;

        background-image : url("<?=URL?>images/home/layer3.png");
    }
</style>

<div class="scene">
    <ul id="wallpaper">
        <li class="layer" data-depth="0.30"><img src="<?=URL?>images/home/layer1.png"/></li>
        <li class="layer" data-depth="0.20"><img src="<?=URL?>images/home/layer2.png"/></li>
    </ul>
</div>
