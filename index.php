<?php
require_once("database.php");
require_once("models/functions.php");

$link = db_connect();
$clinics = clinics($link);

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

if ($action == "add") {
    if (!empty($_POST)) {
        adding_record($link, $_POST['client'], $_POST['date'], $_POST['time1'], $_POST['time2']);
        header("Location:index.php");
    }
    //include("../views/adding_record.php");
}
include("views/clinics.php");
?>