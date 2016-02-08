<link rel="stylesheet" href="<?=URL?>css/gallery.css"/>
<script src="<?=URL?>js/gallery.js"></script>

<div class="container">
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title" align="center">CRC Gallery</h4>
                </div>

                <div class="modal-body">

                    <div class="gallery-border center-block">
                        <div class="hide-bg">

                            <div class="gallery">
                                <img id="currentPic" src=""/>

                            </div>

                            <div class="thumbnails">
                                <button type="button" class="scrollButton btnL" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                </button>


                                <div class="row">
                                    <div class="col-xs-3 aThumbnail" id="pic1"><br/><br/><br/><br/><br/><br/><br/><br/></div>
                                    <div class="col-xs-3 aThumbnail" id="pic2"><br/><br/><br/><br/><br/><br/><br/><br/></div>
                                    <div class="col-xs-3 aThumbnail" id="pic3"><br/><br/><br/><br/><br/><br/><br/><br/></div>
                                    <div class="col-xs-3 aThumbnail" id="pic4"><br/><br/><br/><br/><br/><br/><br/><br/></div>
                                </div>


                                <button type="button" class="scrollButton btnR" aria-label="Right Align">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </button>

                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>