<?php

session_start();
$_SESSION = array();

session_destroy();

$location ="../../Views/Admin/login.php";
header("Location: {$location}");

?>