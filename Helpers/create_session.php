<?php 
session_start();

function checkLogin() {
    $location = './login.php';
    if (!isLoggedIn()){
         header("Location: {$location}");
         }
}

function isLoggedIn(){
  return isset($_SESSION["role"]) && isset($_SESSION["title"]);
}

?>