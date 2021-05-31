<?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");?>


<?php

if(isset($_GET["recipe_id"])){
    
    $id = $_GET["recipe_id"];
  
    $sql = "SELECT * FROM recipe WHERE recipe_id = '$id'";
    
    if($rows = $connection->query($sql)){
        while($row = mysqli_fetch_array($rows)){
            echo "
            <section class='product-section'>
        <div class='product-show'>
            <div class='product-image'>
                <img src='./public/images/pizza-product.png'>
            </div>
            <div class='product-ingredients'>
                <h3 class='ingredient-hearding'>Ingredients</h3>
                <ul class='ingredients'>
                    {$row['recipe_ingredients']}
                </ul>
            </div>
        </div>
        <div class='product-information-block'>
            <div class='product-header'>
                <p class='product-rating'><span>Rating:</span> {$row["recipe_rating"]} <span class='prd-star'><i class='fas fa-star'></i></span></p>
                <h1 class='product-heading'>{$row["recipe_name"]}</h1>
                <div class='product-brief-informations'>
                    <div class='product-information'>
                        <span class='prd-label'>Duration: </span>
                        <span class='prd-data'>{$row["recipe_duration"]} min</span>
                    </div>
                    <div class='product-information'>
                        <span class='prd-label'>Preperation:</span>
                        <span class='prd-data'>{$row["recipe_class"]}</span>
                    </div>
                    <div class='product-information'>
                        <span class='prd-label'>Difficulty:</span>
                        <span class='prd-data'>{$row["recipe_difficulty"]}</span>
                    </div>
                    <div class='product-information'>
                        <span class='prd-label'>Calories:</span>
                        <span class='prd-data'>{$row["recipe_calory"]}</span>
                    </div>
                </div>
            </div>
           
            <div class='product-description'>
                {$row["recipe_description"]}
            </div>
            <div class='product-preperation-steps'>
                <div class='product-steps'>
                    <h3><i class='fas fa-question'></i> HOW TO MAKE IT</h3>
                    <ol class='steps'>
                        {$row['recipe_steps']}

                    </ol>
                </div>
                <div class='product-steps-image'>
                    <img>
                </div>
            </div>

            <div class='share'>
                Liked it? Share <span> <i class='fas fa-share-alt'></i></span>
            </div>
        </div>
    </section>
            
            
            ";
        }
    }
}
?>
