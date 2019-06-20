<?php
require_once("database.php");
require_once("models/functions.php");

$link= db_connect();
$doctor=get_doctor($link, $_GET['id']);
$clients=get_clients($link);

include("views/adding_record.php");
?>
