<?php

//Connection to database and session

include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");

function loginAdminPanel(){
#LOGIN ADMIN PANEL
$errorMessage = "";
if(isset($_POST["loginAdmin"])){
    if(!empty($_POST["admin_user"]) && !empty($_POST["admin_pswd"])){

        $user = $_POST["admin_user"];
        $pswd = $_POST["admin_pswd"];
        
        // //HASH AND SALTING THE PASSWORD
        // $salt = "_m1u2s3t4a2f1a@";
        // $hashed = md5($salt.$pswd.$salt);
            echo $user;
            $sql = "SELECT * FROM admin_table WHERE admin_username = '{$user}' AND admin_password = '{$pswd}'";
          
            $result = $connection->query($sql);
            
            if($result->num_rows > 0){

                while($row = $result->fetch_assoc()) {

                    //REDIRECTING THE USER 
                    $_SESSION['role'] = $row['admin_role'];
                    $location = $_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/Admin/dashboard.php";
                    header("Location: {$location}");

                  }
            } else{
                
                $location = $_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/Admin/login.php";
                header("Location: {$location}");
            }
    }   else{
            $errorMessage = "Please check your credentials.";
        }
    
    } 
}
    
?>