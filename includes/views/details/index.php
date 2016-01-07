<html>
    <head>

    </head>
    <body>
        <h3>Details View</h3>

        <form action="<?=URL?>/details/update" method="post">
            Name:        <input type="text" name="name" required title="Name" value="<?= $this->st['name']?>"/> </br>
            Description: <input type="text" name="desc" required title="Description" value="<?= $this->st['description']?>"/> </br>
            Quantity:    <input type="number" name="quan" required title="Quantity" value="<?= $this->st['quantity']?>"/> </br>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit"/>
        </form>


    </body>
</html>