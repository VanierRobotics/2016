/**
 * Created by Roberto on 08/02/2016.
 */
function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
    });
}
// Usage:
preload([
    '<?=URL?>images/gallery/thumbnail_images/AlexFilming.JPG',
    '<?=URL?>images/gallery/thumbnail_images/BuildArms.JPG',
    '<?=URL?>images/gallery/thumbnail_images/BuildDemoSorting.JPG',
    '<?=URL?>images/gallery/thumbnail_images/BuildDiscussSortingBin.JPG',
    '<?=URL?>images/gallery/thumbnail_images/BuildLunchBreak.JPG',
    '<?=URL?>images/gallery/thumbnail_images/DremelChris.JPG',
    '<?=URL?>images/gallery/thumbnail_images/FateWeaverHarry.JPG',
    '<?=URL?>images/gallery/thumbnail_images/FinishedWalls.JPG',
    '<?=URL?>images/gallery/thumbnail_images/IssaKnightingAlex.JPG',
    '<?=URL?>images/gallery/thumbnail_images/IssaSword.JPG',
    '<?=URL?>images/gallery/thumbnail_images/JournalismReview.JPG',
    '<?=URL?>images/gallery/thumbnail_images/JournalismWorking.JPG',
    '<?=URL?>images/gallery/thumbnail_images/LearningHTML.JPG',
    '<?=URL?>images/gallery/thumbnail_images/PaintingWalls.JPG',
    '<?=URL?>images/gallery/thumbnail_images/Soldering.JPG',
    '<?=URL?>images/gallery/thumbnail_images/SortingBin.JPG',
    '<?=URL?>images/gallery/thumbnail_images/WallCarving.JPG',
    '<?=URL?>images/gallery/thumbnail_images/WebDiscussion.JPG',
    '<?=URL?>images/gallery/thumbnail_images/WebRobThinking.JPG',
    '<?=URL?>images/gallery/thumbnail_images/WebThinking.JPG'
]);

$(function(){
    $('#myModal').modal();                   // initialized with defaults
    $('#myModal').modal({keyboard: false});  // initialized with no keyboard
    $('#myModal').modal('show');

    var currentIndex = 1; // current index scrolling through gallery to get pictures
    var selectedIndex = 0; // selected picture out of the 4 thumbnails (0-3)

    var buttonL = document.getElementsByClassName("btnL")[0];
    var buttonR = document.getElementsByClassName("btnR")[0];

//scroll through gallery
    buttonL.addEventListener("click",getPrevious);
    buttonR.addEventListener("click",getNext);

//onclick change curent picture
    document.getElementById("pic1").addEventListener("click",function(){ changeCurrentPic(0); });
    document.getElementById("pic2").addEventListener("click",function(){ changeCurrentPic(1); });
    document.getElementById("pic3").addEventListener("click",function(){ changeCurrentPic(2); });
    document.getElementById("pic4").addEventListener("click",function(){ changeCurrentPic(3); });

    window.addEventListener("resize", manageGallery);
    window.addEventListener("load", manageGallery);

    function changeCurrentPic(index)
    {
        selectedIndex = index;
        updateGallery();
    }

// decrements current index by 1, wraps around 20
    function getPrevious() {
        if (currentIndex == 1)
            currentIndex = 20;

        else
            currentIndex -= 1;

        //selectedIndex = 0;
        updateGallery();
    }
// increments current index by 1, wraps around 20
    function getNext() {
        if (currentIndex == 20)
            currentIndex = 1;
        else
            currentIndex += 1;

        //selectedIndex = 0;
        updateGallery();
    }

// onload on resize, update gallery and resize divs.
    function manageGallery() {
        resizeThumbnailDiv();
        resizeGallery();
        updateGallery();

    }

//AJAX request to get pictures
// change url variable to real path
    function updateGallery() {
        if (typeof XDomainRequest == "undefined")
            XDomainRequest = function () {
                try {
                    return new XMLHttpRequest();
                } catch (e) {
                }
                try {
                    return new ActiveXObject("Msxml2.XMLHTTP.6.0");
                } catch (e) {
                }
                try {
                    return new ActiveXObject("Msxml2.XMLHTTP.3.0");
                } catch (e) {
                }
                try {
                    return new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                }
                throw new Error("XHR/XDR unsupported.");
            };
        var xdr = new XDomainRequest();

        xdr.onload = function () {
            txt = xdr.responseText;
            var pictures = JSON.parse(txt);

            //load thumbnails into divs
            document.getElementById("pic1").style.backgroundImage = 'url("../../images/gallery/thumbnail_images/' + pictures[0] + '")';
            document.getElementById("pic2").style.backgroundImage = 'url("../../images/gallery/thumbnail_images/' + pictures[1] + '")';
            document.getElementById("pic3").style.backgroundImage = 'url("../../images/gallery/thumbnail_images/' + pictures[2] + '")';
            document.getElementById("pic4").style.backgroundImage = 'url("../../images/gallery/thumbnail_images/' + pictures[3] + '")';

            // gets selected index and choses that one to be selected picture
            document.getElementById("currentPic").src = '../../images/gallery/gallery_images/' + pictures[selectedIndex];


        };
        // change this to new url!!!!!!!!!
        var url = "http://devbana.tk/auth/rob?index=" + currentIndex;

        xdr.open("GET", url, true);
        xdr.send(null); //run the request

    }


// to math to limit the size of the gallery div within the frame
    function resizeGallery() {
        var frameHeight = document.getElementsByClassName("gallery-border")[0].offsetHeight;
        var frameWidth = document.getElementsByClassName("gallery-border")[0].offsetWidth;


        var mainPicHeight = frameHeight.toPrecision(3) * 0.728;
        var galleryMarginTop = frameHeight.toPrecision(3) * 0.0499;
        var galleryPaddingInside = frameWidth.toPrecision(3) * 0.044;

        var gallery = document.getElementsByClassName("gallery")[0];

        var galleryHeight = mainPicHeight - galleryMarginTop;
        var galleryWidth = frameWidth - (2 * galleryPaddingInside);


        gallery.style.height = galleryHeight + "px";
        gallery.style.marginTop = galleryMarginTop + "px";
        gallery.style.width = galleryWidth + "px";
        gallery.style.marginLeft = galleryPaddingInside + "px";
        gallery.style.marginRight = galleryPaddingInside + "px";

        var currentPic = document.getElementById("currentPic");
        //currentPic.style.height = galleryHeight + "px";
        currentPic.style.maxWidth = galleryWidth + "px";

    }

// do math to limit the size of the thumbnail div within the frame
    function resizeThumbnailDiv() {
        var frameHeight = document.getElementsByClassName("gallery-border")[0].offsetHeight;
        var frameWidth = document.getElementsByClassName("gallery-border")[0].offsetWidth;

        var thumbnailHeight = frameHeight.toPrecision(3) * 0.220;
        var thumbnailPaddingInside = frameWidth.toPrecision(3) * 0.046;
        var thumbnailMarginBottom = frameHeight.toPrecision(3) * 0.0499;

        var thumbnail = document.getElementsByClassName("thumbnails")[0];

        thumbnail.style.height = thumbnailHeight - thumbnailMarginBottom + "px";
        thumbnail.style.width = frameWidth - (2 * thumbnailPaddingInside) + "px";
        thumbnail.style.marginLeft = thumbnailPaddingInside + "px";
        thumbnail.style.marginRight = thumbnailPaddingInside + "px";
        thumbnail.style.marginBottom = thumbnailMarginBottom + "px";

    }
});