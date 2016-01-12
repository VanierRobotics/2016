

	<div class="panel panel-default">
		<div class="panel-body">
			This is where You edit things
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="table-responsive">
		<?php

		if(isset( $this->st )){
			echo('<table class="table table-bordered "> <tr>');
			echo('<th width="80">Page</th>');
			echo('<th width="80">Name</th>');
			echo('<th width="100">Language </th>');
			echo('<th width="200">Text</th>');
			echo('<th width="50"> Modify </th>');
			echo('</tr>');
			foreach ( $this->st  as $array ) {
				echo '<tr>';
				echo "<td>$array[page]</td>";
				echo "<td>$array[class]</td>";
				echo "<td align=center >$array[lang]</td>";
				echo "<td >$array[text]</td>";
				echo "<td><form action=".URL."item method='post'><input type='hidden' name='textID' value=$array[id] ><input type='submit' name='Update' value='Update' /></form></td>";
				echo '</tr>';
			}
			echo ' </table>';
		}?>
			</div>
		</div>
		<br/>

	</div>
	<?php echo 'make add button that shows edit view'?>
	<div class="row">
		<div class="col-md-8 col-md-offset-1">


	<?php
			echo '
			<form action="'.URL.'edit" method="post">

				</br>Enter new Text

				</br>
				<div class="form-group">
  <label for="page">Select list:</label>
  <select class="form-control" name="page" id="page">
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
    <option>En</option>
    <option>Fr</option>

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
				<br><input type="submit" value="Click To Submit">
				<input type="hidden" name="insert" value ="insert">
				<input type = "reset" value = "Reset" >
			</form>';
		?>
		</div>
	</div>