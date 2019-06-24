<?php
require_once("database.php");
require_once("models/functions.php");

$link= db_connect();
$doctor_id=$_GET['id'];

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

if ($action == "delete") {
    delete_record($link,$_GET['record_id']);
    //echo "<script>alert('все ок ');</script>";
    header("Location:doctor.php?id=$doctor_id");
}
?>
