
		<form action="<?= URL ?>edit" method="post">
				Enter new Item details
				<br>Enter Item name: <input text required type="text" name="product" value="<?= $this->st[0]['class']?>">
				<br>Enter Quantity: <input text required type="text" name="quantity" value="<?= $this->st[0]['lang']?>">
				<br>Enter Description: <input text required type="text" name="descr" value="<?= $this->st[0]['text']?>">
<input type="hidden" name="itemID" value ="<?= $this->st[0]["id"]?>">
				<br><input type="submit" value="Click To Submit">
				<input type="hidden" name="update" value ="update">
				<input type = "reset" value = "Reset" >
		</form>
		<form action="<?= URL ?>edit" method="post">

				<br><br><input type="submit" value="Cancel (Go Back)">

		</form>
		<form action="<?= URL ?>edit" method="post">

				<br><br><br><input type="submit" value="Delete Item (because why not)">
				<input type="hidden" name="delete" value ="<?= $this->st[0]["id"]?>">


		</form>