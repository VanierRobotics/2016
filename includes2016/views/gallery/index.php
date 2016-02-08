<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="gallery.css"/>

    <script type="text/javascript">

        function preload(arrayOfImages) {
            $(arrayOfImages).each(function(){
                $('<img/>')[0].src = this;
            });
        }

        // Usage:

        preload([
            'thumbnail_images/AlexFilming.JPG',
            'thumbnail_images/BuildArms.JPG',
            'thumbnail_images/BuildDemoSorting.JPG',
            'thumbnail_images/BuildDiscussSortingBin.JPG',
            'thumbnail_images/BuildLunchBreak.JPG',
            'thumbnail_images/DremelChris.JPG',
            'thumbnail_images/FateWeaverHarry.JPG',
            'thumbnail_images/FinishedWalls.JPG',
            'thumbnail_images/IssaKnightingAlex.JPG',
            'thumbnail_images/IssaSword.JPG',
            'thumbnail_images/JournalismReview.JPG',
            'thumbnail_images/JournalismWorking.JPG',
            'thumbnail_images/LearningHTML.JPG',
            'thumbnail_images/PaintingWalls.JPG',
            'thumbnail_images/Soldering.JPG',
            'thumbnail_images/SortingBin.JPG',
            'thumbnail_images/WallCarving.JPG',
            'thumbnail_images/WebDiscussion.JPG',
            'thumbnail_images/WebRobThinking.JPG',
            'thumbnail_images/WebThinking.JPG'
        ]);

    </script>
</head>
<body>

<div class="container">

    <!-- <div class="row">
        <div class="col-xs-4">
            <button align="center" type="button" class="viewGalleryButton" data-toggle="modal" data-target=".bs-example-modal-lg"><h1>SUP</h1></button>

        </div>
    </div>
    <!-- Large modal -->


    <!-- Modal -->
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


<script type="text/javascript">
    $('#myModal').modal();                   // initialized with defaults
    $('#myModal').modal({keyboard: false});  // initialized with no keyboard
    $('#myModal').modal('show');
</script>
<script src="gallery.js"></script>


</body>
</html>
