<?php
    require_once("database.php");
    require_once("models/functions.php");

    $link= db_connect();
    $records=records_get($link, $_GET['id']);
    $doctor=get_doctor($link, $_GET['id']);
    include("views/doctor.php");
?>
