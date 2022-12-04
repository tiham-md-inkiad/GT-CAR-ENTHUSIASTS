<?php
if (isset($_REQUEST['delete'])) {

    $id = $_REQUEST['id'];

    echo $id;

    $fc = file("Productdata.txt");

    $f = fopen("Productdata.txt", "w");

    foreach ($fc as $line) {
        if (!strstr($line, $id))
            fputs($f, $line);
    }
    fclose($f);
    header("Location:deleteitems.php");
}
