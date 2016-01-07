<html>
    <head>

    </head>
    <body>
        <h3>Inventory View</h3>

        <form action="<?=URL?>/inventory/entry" method="post">
            Name:        <input type="text" name="name" required title="Name"/> </br>
            Description: <input type="text" name="desc" required title="Description"/> </br>
            Quantity:    <input type="number" name="quan" required title="Quantity"/> </br>
            <input type="submit"/>
        </form>

        </br></br>
        <table>
            <?php $array = $this->st;
            foreach($array[0] as $key=>$value){
                if(strcmp($key,'id'))
                    echo '<th>' . $key . '</th>';
            }
            echo '</tr>';

            // data rows
            foreach( $array as $key=>$value){
                $id;
                echo '<tr>';
                foreach($value as $key2=>$value2){


                    if(!strcmp($key2,'name')) {
                        $value2 = '<a href="'.URL.'/details?id='.$id.'">'.$value2.'</a>';
                    }

                    if(!strcmp($key2,'id')) {
                        $id = $value2;
                    } else //no id column for safety..
                        echo '<td>' . $value2 . '</td>';
                }
                echo  '</tr>';
            }
            ?>
        </table>
    </body>
</html>