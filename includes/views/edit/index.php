

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
			echo('<th width="80">Class</th>');
			echo('<th width="100">Language </th>');
			echo('<th width="200">Text</th>');
			echo('<th width="50"> Modify </th>');
			echo('</tr>');
			foreach ( $this->st  as $array ) {
				echo '<tr>';

				echo "<td>$array[class]</td>";
				echo "<td align=center >$array[lang]</td>";
				echo "<td >$array[text]</td>";
				echo "<td><form action=".URL."item method='post'><input type='hidden' name='textID' value=$array[id] ><input type='submit' name='Update' value='Update' /></form></td>";
				echo '</tr> </table>';
			}
		}?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
	<?php
			echo '
			<form action="'.URL.'edit" method="post">
				Hardware Product Order Form
				</br>Enter new Text

				</br>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Enter Class name</span>
				  <input required name="class" type="text" class="form-control" aria-describedby="basic-addon1">
				</div>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Select Language</span>
				  <input  maxlength="2" required type="text" name="lang" class="form-control"  aria-describedby="basic-addon1">
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