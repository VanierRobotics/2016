<?php
echo'THIS UIS A THING';

		echo '
			<form action="'.URL.'edit" method="post">

				</br>Enter new Text

				</br>
				<div class="form-group">
  <label for="page">Select list:</label>
  <select class="form-control" id="page">
    <option>Home</option>
    <option>Game</option>
    <option>Vanier</option>
    <option>Robot</option>
     <option>Journalism</option>
     <option>Tutorial</option>
     <option>Sponsors</option>
     <option>Gallery</option>
  </select>
</div>

								<div class="form-group">
  <label for="lang">Select Language:</label>
  <select class="form-control" name="lang" id="lang">
    <option value="en">English</option>
    <option  value="fr"';
if(isset($this->onething) && strcmp($this->onething['lang'],'FR')) {
    echo ' selected';
}

    echo 'selected >French</option>

  </select>
</div>
<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Enter Text name</span>
				  <input required name="class" type="text" class="form-control" aria-describedby="basic-addon1">
				</div>
				</br>Enter Text: </br>
				<textarea id="text" required name="text" rows="10" cols="50" style="resize: none;"> </textarea>
				<?php
					$_SESSION["start_time"] = time();
				?>
				<br><input class="btn" type="submit" value="Click To Submit">';
		if(isset( $this->st[0])){
			echo '<input  class="btn" type="hidden" name="insert" value ="insert">';
		}
		else {
			echo '<input class="btn" type="hidden" name="insert" value ="insert">';
		}
		?>

		<input class="btn" type = "reset" value = "Reset" >
		</form>
		<form action="<?= URL ?>edit" method="post">

			<br><input  class="btn" type="submit" value="Cancel (Go Back)">

		</form>
		<form action="<?= URL ?>edit" method="post">

			<br><input  class="btn" type="submit" value="Delete Item (because why not)">
			<input  class="btn" type="hidden" name="delete" value ="<?= $this->st[0]["id"]?>">


		</form>
