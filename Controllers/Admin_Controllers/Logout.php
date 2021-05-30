<?php

session_start();
$_SESSION = array();

session_destroy();

$location =$_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/Admin/login.php";
header("Location: {$location}");

?>