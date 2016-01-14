

<style type="text/css">
    .bgimg {
        background-image: url('<?=URL?>images/scrool2.png');
        background-attachment: scroll;
        background-repeat: repeat-y;
    }
    
    .idontknow {
        padding-top: 10%;
        padding-left: 10%;
        padding-right: 10%;
    }
    .bgimg1 {
        background-image: url('<?=URL?>images/top.png');
        background-size: contain;
        background-repeat:no-repeat;
        height: 100px;
    }
    .bgimg2 {

        height: 10%;
    }
</style>

<div class="bgimg">
    <div class="bgimg1">
        <img src="<?=URL?>images/top.png" alt="bottom" height="200" width="100%">
    </div>
    <div class="idontknow">
        <?= $this->texts ?>
    </div>
    <div class="bgimg2">
        <img src="<?=URL?>images/bottom.png" alt="bottom" height="200" width="100%">
    </div>
</div>

