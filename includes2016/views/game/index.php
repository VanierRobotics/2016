<?php
    $game = '/'.(($this->language === 'en') ? 'game' : 'jeu');
    $name = ($this->language === 'en') ? 'Pythagorium Rules' : 'Les règles du jeu';
?>

<!-- HRIM - Hoverable Responsive Image Maps -->
<script src="<?= URL ?>js/hoverImageMaps/jquery.maphilight.min.js"></script>
<script src="<?= URL ?>js/hoverImageMaps/imageMapResizer.js"></script>
<script src="<?= URL ?>js/hoverImageMaps/rollover.js"></script>

<!-- qTip - Just the tip.. tooltip you dirty pleb -->
<script src="<?= URL ?>js/tooltips/jquery.qtip.js"></script>
<link rel="stylesheet" href="<?= URL ?>css/jquery.qtip.min.css" property="stylesheet"/>

<map name="gamemap" id="gamemap">
    <area id="myBtn" alt="<?=$name?>" title="<?=$name?>" shape="poly" coords="727,478,726,477,725,475,725,473,726,472,728,470,731,469,740,472,787,489,790,494,789,497,788,499,786,501,784,501,713,512,655,521,650,520,640,520,601,502,588,499,587,498" href="<?=URL.$this->language.$game.'/info'?>"/>
</map>

<img src="<?=URL?>images/game.jpg" usemap="#gamemap" style="width: 100%;" alt=""/>