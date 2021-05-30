<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">

<input  type="text" name ="names">
       
    <button type="submit" name = "submit">Send</button>
</form> 


<?php

if(isset($_POST["submit"])){
    $names = $_POST["names"];

    $conn = new mysqli("localhost", "recipe_admin", "admin", "recipe_app");
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT into recipe VALUES('$names')";

        if ($conn->query($sql) === TRUE) {

        echo "New record created successfully";

        } else {

         echo "Error: " . $sql . "<br>" . $conn->error;
        }    
}


?>



    
</body>
</html>