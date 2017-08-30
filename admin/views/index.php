<?php
    include "../models/database.php";
    include "../models/select.php";
    $object = new Database;
    $cont = $object -> connectToDb();
    $data = new Select("user");
    $result = $data -> getRecordById(1, $cont);
    print_r ($result);
?>
