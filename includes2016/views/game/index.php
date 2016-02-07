<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-image : url('<?=URL?>images/book/wood.jpg');
        background-size: cover;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>
        <!-- Turn.js (aka HTML5 book thingny)-->
        <script type="text/javascript" src="<?=URL?>js/turnjs/hash.js"></script>


        <div id="canvas" class="container-fluid">
            <div id="book-zoom">
                <div class="sj-book">
                    <div depth="5" class="hard"> <div class="side"></div> </div>
                    <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
                    <?php

                    $i=0;
                    foreach ($this->texts as $text){
                        $i++;
                        ($i%2) ? $even= '' : $even= 'even'; //It's set to double display mode hence puting even pages as even. (why? because cover textures..)
                        echo('<div class="own-size '.$even.'">
                       <div class="book-content">');
                        echo $text['content'];
                        echo('  </div>
                        <span class="page-number">'.$i.'</span></div>');
                    }
                    if($i%2){
                        $i++;
                        ($i%2) ? $even= '' : $even= 'even';
                        echo('<div class="own-size '.$even.'">

                       ');

                        echo('  <div class="book-content"> <p>END</p> </div>
                        <span class="page-number">'.$i.'</span></div>');

                    }
                    ?>
                    <div class="hard fixed back-side pBeforeLast"> <div class="depth"></div> </div>
                    <div class="hard pLast"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            // Hide canvas
            $('#canvas').css('visibility', 'hidden');

            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            // Load turn.js
            yepnope({
                test : Modernizr.csstransforms,
                yep: ['<?=URL?>js/turnjs/turn.min.js'],
                nope: ['<?=URL?>js/turnjs/turn.html4.min.js', '<?=URL?>css/jquery.ui.html4.css', '<?=URL?>css/book-html4.css'],
                both: ['<?=URL?>js/turnjs/book.js', '<?=URL?>css/jquery.ui.css', '<?=URL?>css/book.css'],
                complete: delayLoad
            });
        </script>
    </div>
</div>