

	<div class="panel panel-default">
		<div class="panel-body">
			This is where You edit things
		</div>
	</div>
    <div class="col-md-offset-1">
        <form action="<?=URL?>item" method='post'><input class="btn" type='submit' name='Add' value='Add Text to Database' /></form>
        </br>
    </div>
	<div>
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
				echo "<td><form action=".URL."item method='post'><input type='hidden' name='textID' value=$array[id] ><input class='btn' type='submit' name='Update' value='Update' /></form></td>";
				echo '</tr>';
			}
			echo ' </table>';
		}?>
			</div>
		</div>
	</div>