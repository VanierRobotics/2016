<script src="<?=URL?>js/ckeditor/ckeditor.js"></script>
<form action="<?= URL.'edit'?>" method="post">

    </br>
    <div class="col-md-offset-2 col-md-8 form-group">
        <label for="page">Select from page list:</label>
        <select class="form-control" name="book" id="book">
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'HOME') == 0 ? 'selected' :''); ?>>Home</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'GAME') == 0 ? 'selected' :''); ?>>Game</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'VANIER') == 0 ? 'selected' :''); ?>>Vanier</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'ROBOT') == 0 ? 'selected' :''); ?>>Robot</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'JOURNALISM') == 0 ? 'selected' :''); ?>>Journalism</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'TUTORIAL') == 0 ? 'selected' :''); ?>>Tutorial</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'SPONSORS') == 0 ? 'selected' :''); ?>>Sponsors</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['book'],'GALLERY') == 0? 'selected':''); ?>>Gallery</option>
        </select>
    </div>

    <div class="col-md-offset-2 col-md-8 form-group">
        <label for="subpage">Select subpage:</label>
        <select class="form-control" name="subpage" id="subpage">
            <option <?= (isset($this->onething) && strcmp($this->onething['subpage'],'') == 0 ? 'selected' :''); ?>></option>
            <option <?= (isset($this->onething) && strcmp($this->onething['subpage'],'BUILD') == 0 ? 'selected' :''); ?>>Build</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['subpage'],'KIOSK') == 0 ? 'selected' :''); ?>>Kiosk</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['subpage'],'VIDEO') == 0 ? 'selected' :''); ?>>Video</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['subpage'],'WEB') == 0 ? 'selected' :''); ?>>Web</option>
        </select>
    </div>

    <div class="col-md-offset-2 col-md-8 form-group">
        <label for="lang">Select Language:</label>
        <select class="form-control" name="lang" id="lang">
            <option value="en">English</option>
            <option value="fr" <?php echo (isset($this->onething) && strcmp($this->onething['lang'],'FR') == 0 ? 'selected':''); ?> >French</option>
        </select>
    </div>
    <div class="col-md-offset-2 col-md-8 input-group">
				  <span class="input-group-addon" id="basic-addon1">Enter Page Number</span>
				  <input required name="pageid" type="number" class="form-control" aria-describedby="basic-addon1"
                         value="<?= (isset($this->onething) ?  $this->onething['pageid'] : ''); ?>">
    </div>
    <div class="col-md-offset-2 col-md-8">
				</br>Enter Text: </br>
				<textarea id="text" required name="text" rows="10" cols="50" style="resize: none;"><?= (isset( $this->onething['content'])) ? $this->onething['content'] :'' ; ?>
                </textarea>
				<?php
					$_SESSION["start_time"] = time();
				?>

                <?php
                    if(isset($this->onething['id'])) { //if in update mode, echo ID in hidden to update
                        echo'<input type="hidden" name="itemID" value="'.$this->onething['id'].'"/>';
                        echo '<br><input class="btn" type="submit" name="update" value="Update Text">';
                    }
                    else { // in insert mode, echo input hidde, value insert
                        echo '<input  class="btn" type="hidden" name="insert" value ="insert">';
                        echo '<br><input class="btn" type="submit" name="submitForm" value="Click To Submit">' ;
                    }
                ?>
    <input class="btn" type = "reset" value = "Reset" >
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('text');/*
        $("#save").click(function(){
            var data = $( '#editor1' ).val();
            $.ajax({
                type:"POST",
                url:"<?=URL?>",
                data: "editor1="+data,
                timeout:15000,
                error:function(XMLHttpRequest, textStatus, errorThrown){
                    alert("ERROR");
                },
                success:function(response){
                    alert("Success: "+response);
                }
            });
        })*/
    </script>
</form>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <form action="<?= URL ?>edit" method="post">
                <br><input  class="btn" type="submit" value="Cancel (Go Back)">
            </form>
            <form action="<?= URL ?>edit" method="post">
                <input  class="btn" type="submit" value="Delete Item (because why not)">
                <input  class="btn" type="hidden" name="delete" value ="<?= (isset($this->onething) ?  $this->onething['id'] : '');?>">
            </form>
        </div>
    </div>


