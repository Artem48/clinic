<?php
require_once("database.php");
require_once("models/functions.php");

$link= db_connect();
$doctor=get_doctor($link, $_GET['id']);
$doctor_id=$_GET['id'];
$clients=get_clients($link);

include("views/adding_record.php");

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

if ($action == "add") {
    $doctor_id=$_GET['id'];
    $date=($_POST['date']);

    if (!empty($_POST)) {
        adding_record($link, $_POST['client'],$_GET['id'], $_POST['date'], $_POST['time1'], $_POST['time2']);
        header("Location:doctor.php?id=$doctor_id");
    }
}
?>
