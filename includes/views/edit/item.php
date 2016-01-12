<form action="<?= URL.'edit'?>" method="post">

    </br>Enter new Text

    </br>
    <div class="form-group">
        <label for="page">Select list:</label>
        <select class="form-control" name="page" id="page">
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'HOME') ? '' :'selected'); ?>>Home</option>
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'GAME') ? '' :'selected'); ?>>Game</option>
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'VANIER') ? '' :'selected'); ?>>Vanier</option>
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'ROBOT') ? '' :'selected'); ?>>Robot</option>
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'JOURNALISM') ? '' :'selected'); ?>>Journalism</option>
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'TUTORIAL') ? '' :'selected'); ?>>Tutorial</option>
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'SPONSORS') ? '' :'selected'); ?>>Sponsors</option>
            <option <?php echo (isset($this->onething) && strcmp($this->onething['page'],'GALLERY') ? '' :'selected'); ?>>Gallery</option>
        </select>
    </div>


    <div class="form-group">
        <label for="lang">Select Language:</label>
        <select class="form-control" name="lang" id="lang">
            <option value="en">English</option>
            <option value="fr" <?php echo (isset($this->onething) && strcmp($this->onething['lang'],'FR') ? '' :'selected'); ?> >French</option>
        </select>
    </div>


<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Enter Title</span>
				  <input required name="class" type="text" class="form-control" aria-describedby="basic-addon1" value="<?= $this->onething['class'] ?>">
				</div>
				</br>Enter Text: </br>
				<textarea id="text" required name="text" rows="10" cols="50" style="resize: none;"><?= $this->onething['text'] ?>
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

			<br><input  class="btn" type="submit" value="Cancel (Go Back)">

		</form>
		<form action="<?= URL ?>edit" method="post">

			<br><input  class="btn" type="submit" value="Delete Item (because why not)">
			<input  class="btn" type="hidden" name="delete" value ="<?= $this->onething['id']?>">


		</form>


