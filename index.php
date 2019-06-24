<?php
require_once("database.php");
require_once("models/functions.php");

$link = db_connect();
$clinics = clinics($link);

include("views/clinics.php");
?>