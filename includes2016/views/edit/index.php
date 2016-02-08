	<div class="panel panel-default">
		<div class="panel-body">
			<h2>This is where you edit things</h2>
		</div>
	</div>
    <div class="col-md-offset-2">
        <form action="<?=URL?>edit/item" method='post'><input class="btn" type='submit' name='Add' value='Add Text to Database' /></form><br/>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="table-responsive">
			<table class="table table-bordered "> <tr>
			<th> Page </th>
			<th> Subpage (blank if none) </th>
			<th> Language </th>
			<th> Text </th>
			<th > Modify </th>
			</tr>
                <?php
                    foreach ( $this->st  as $array ) {
                        echo '<tr>';
                        echo "<td>$array[book]</td>";
                        echo "<td>$array[subpage]</td>";
                        echo "<td align=center >$array[lang]</td>";
                        echo "<td >$array[pageid]</td>";
                        echo "<td >$array[content]</td>"; //renders html so we gud..
                        echo "<td><form action=".URL."edit/item method='post'><input type='hidden' name='textID' value=$array[id] ><input class='btn' type='submit' name='Update' value='Update' /></form></td>";
                        echo '</tr>';
                    }
                    echo ' </table>';
                ?>
			</div>
		</div>
	</div>