<?php
if (isset($_REQUEST['delete'])) {

    $id = $_REQUEST['id'];

    echo $id;

    $fc = file("Servicedata.txt");

    $f = fopen("Servicedata.txt", "w");

    foreach ($fc as $line) {
        if (!strstr($line, $id))
            fputs($f, $line);
    }
    fclose($f);
    header("Location:deleteservices.php");
}
