

<?php

    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");

//Adding new recipes to the database + admin panel;

    $FailureMessage = "";
    $SuccessMessage = "";
    if(isset($_POST["createRecipe"])){

        $recipe_name = $_POST["recipe_name"];
        $recipe_desc = $_POST["recipe_desc"];
        $recipe_image = $_POST["recipe_image"];
        $recipe_difficulty = $_POST["recipe_difficulty"];
        $recipe_calory = $_POST["recipe_calory"];
        $recipe_duration = $_POST["recipe_duration"]; // 
        $recipe_class = $_POST["recipe_class"];
        $recipe_ingredients = $_POST["recipe_ingredients"];
        $recipe_rating = $_POST["recipe_rating"];
        $recipe_steps = $_POST["preperation_steps"];


        $sql = "INSERT into recipe (recipe_name,recipe_description,recipe_image,recipe_difficulty,recipe_calory,recipe_duration,
        recipe_class,recipe_ingredients,recipe_rating,recipe_steps) 
        VALUES('$recipe_name','$recipe_desc','$recipe_image','$recipe_difficulty','$recipe_calory','$recipe_duration','$recipe_class',
        '$recipe_ingredients','$recipe_rating','$recipe_steps')";

        if ($connection->query($sql) === TRUE) {

            $SuccessMessage =  "New recipe created successfully";
            $location = "../../Views/Admin/create-new-recipe.php";
            header("Location: {$location}");

        } else {

         $FailureMessage =  "Couldn't add recipes to database.";
        }    
    }
?>