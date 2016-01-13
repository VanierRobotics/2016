<form action="<?= URL.'edit'?>" method="post">

    </br>Enter new Text

    </br>
    <div class="form-group">
        <label for="page">Select list:</label>
        <select class="form-control" name="page" id="page">
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'HOME') == 0 ? 'selected' :''); ?>>Home</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'GAME') == 0 ? 'selected' :''); ?>>Game</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'VANIER') == 0 ? 'selected' :''); ?>>Vanier</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'ROBOT') == 0 ? 'selected' :''); ?>>Robot</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'JOURNALISM') == 0 ? 'selected' :''); ?>>Journalism</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'TUTORIAL') == 0 ? 'selected' :''); ?>>Tutorial</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'SPONSORS') == 0 ? 'selected' :''); ?>>Sponsors</option>
            <option <?= (isset($this->onething) && strcmp($this->onething['page'],'GALLERY') == 0? 'selected':''); ?>>Gallery</option>
        </select>
    </div>


    <div class="form-group">
        <label for="lang">Select Language:</label>
        <select class="form-control" name="lang" id="lang">
            <option value="en">English</option>
            <option value="fr" <?php echo (isset($this->onething) && strcmp($this->onething['lang'],'FR') == 0 ? 'selected':''); ?> >French</option>
        </select>
    </div>
    <div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Enter Title</span>
				  <input required name="class" type="text" class="form-control" aria-describedby="basic-addon1"
                         value="<?= (isset($this->onething) ?  $this->onething['class'] : ''); ?>">
    </div>
				</br>Enter Text: </br>
				<textarea id="text" required name="text" rows="10" cols="50" style="resize: none;"><?php echo (isset( $this->onething['text'])) ? $this->onething['text'] :'' ; ?>
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
		</form>

		<form action="<?= URL ?>edit" method="post">

				<br><br><input  class="btn" type="submit" value="Cancel (Go Back)">

		</form>
		<form action="<?= URL ?>edit" method="post">

			<br><input  class="btn" type="submit" value="Delete Item (because why not)">
			<input  class="btn" type="hidden" name="delete" value ="<?= (isset($this->onething) ?  $this->onething['id'] : '');?>">


		</form>


