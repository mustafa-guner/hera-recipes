<?php

//Connection to database and session

include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");

$errorMessage = "";
if(isset($_POST["loginAdmin"])){

#LOGIN ADMIN PANEL


    if(!empty($_POST["admin_user"]) && !empty($_POST["admin_pswd"])){

    $user = $_POST["admin_user"];
    $pswd = $_POST["admin_pswd"];
    
        // //HASH AND SALTING THE PASSWORD
        // $salt = "_m1u2s3t4a2f1a@";
        // $hashed = md5($salt.$pswd.$salt);
        $sql = "SELECT * FROM admin_table WHERE admin_username = '{$user}' AND admin_password = '{$pswd}'";
      
        $result = $connection->query($sql);
        
        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()) {

                //REDIRECTING THE USER 
                //Passing two variables into SESSION
                $_SESSION['role'] = $row['admin_role'];
                $_SESSION["title"] = $row["admin_title"];

                $location = "./dashboard.php";
                header("Location: {$location}");

              }
        } else{
            $errorMessage = "Please check your credentials.";
        } 
}   else{
        $errorMessage = "Please check your credentials.";
    }
} 
    
?>