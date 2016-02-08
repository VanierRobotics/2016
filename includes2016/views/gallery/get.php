<?php
$db = Database::noParam();

if(isset($_REQUEST["index"])) {

    $q = $_REQUEST["index"];

    $indexes = array(1,2,3,4);

    if ($q <= 17)
        $indexes = array($q, $q + 1, $q + 2, $q + 3);
    else if($q == 18)
        $indexes = array(18, 19, 20, 1);
    else if($q == 19)
        $indexes = array(19, 20, 1, 2);
    else
        $indexes = array(20, 1, 2, 3);


    $query = $db->prepare("SELECT gal_img FROM gallery WHERE gal_id IN (:index1, :index2, :index3, :index4) ORDER BY FIELD(gal_id,:o1,:o2,:o3,:o4)");
    $query->execute(array(":index1" => $indexes[0], ":index2" => $indexes[1], ":index3" => $indexes[2], ":index4" => $indexes[3], ":o1" => $indexes[0], ":o2" => $indexes[1], ":o3" => $indexes[2], ":o4" => $indexes[3]));


    $keys = array("image1","image2","image3","image4");

    $rows = array();

    if($query)
    {
        while($data = $query->fetch(PDO::FETCH_ASSOC)) // loops until all users have been printed. query->fetch returns 1 row at a time
        {

            $rows[] = array($data['gal_img']);
        }
    }
    echo json_encode($rows);
} else {
    header('Location: '.URL);
}