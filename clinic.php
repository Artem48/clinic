<?php
    require_once("database.php");
    require_once("models/functions.php");

    $link= db_connect();
    $doctors=doctors_get($link, $_GET['id']);
    $clinic=get_clinic($link, $_GET['id']);

    include("views/doctors.php");
?>
