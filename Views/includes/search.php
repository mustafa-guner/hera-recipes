<?php
 include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php"); 

if(isset($_POST["search"])){

    //NAME
    $name = $_POST["search-by-name"];

    //DURATION
    $init_duration = $_POST["duration_first"];
    $final_duration = $_POST["duration_second"];

    //DIFFICULTY
    $difficulty = $_POST["difficulty"];

    //CALORIES
    $init_calories = $_POST["calory_fist"];
    $final_calories = $_POST["calory_second"];

    //RATING
    $rating = $_POST["rating"];

    //ORDER - ALPHABETICAL
    $order = $_POST["order"];
 
}
?>

