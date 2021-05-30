

<?php 

    //Including the database connection config file
    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Config/config.php");

        
       $host =  $config["DB_HOST"];
       $username =  $config["DB_USERNAME"];
       $db_password =  $config["DB_PASSWORD"];
       $db_database =  $config["DB_DATABASE"];

        $connection = new mysqli($host,$username,$db_password,$db_database);

        // Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
?>