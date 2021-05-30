<?php 
session_start();

function checkLogin() {
    $location = './dashboard.php';
    if (!isLoggedIn()){
         header("Location: {$location}");
         }
}

function isLoggedIn(){
  return isset($_SESSION["role"]);
}

?>