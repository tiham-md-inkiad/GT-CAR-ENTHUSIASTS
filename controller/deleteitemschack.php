<?php
if (isset($_REQUEST['delete'])) {

    $id = $_REQUEST['id'];

    echo $id;

    $fc = file("../view/Productdata.txt");

    $f = fopen("../view/Productdata.txt", "w");

    foreach ($fc as $line) {
        if (!strstr($line, $id))
            fputs($f, $line);
    }
    fclose($f);
    header("Location:../view/deleteitems.php");
}
