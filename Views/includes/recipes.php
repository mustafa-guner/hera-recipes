
    <?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php"); ?>

    <main>
        <section class="panel recipes-panel">
            <div class="recipes-container">
                <?php
               
                    $sql = "SELECT * FROM recipe ORDER BY recipe_id DESC";
                    if($rows = $connection->query($sql)){
                        while($row = mysqli_fetch_array($rows)){
                            echo "
                            <div class='recipe-card'>
                            <div class='recipe-header'>
                                <div class='recipe-name'>
                                  {$row['recipe_name']}
                                </div>
                                <div class='recipe-image'>
                                    <img src='../public/images/Recipes/{$row['recipe_image']}'>
                                </div>
                                <div class='recipe-brief-informations'>
                                    <div class='recipe-text recipe-rank'>
                                    {$row['recipe_rating']} <span>★</span>
                                    </div>
                                    <div class='recipe-text recipe-diffculty'>
                                    {$row['recipe_difficulty']}
                                    </div>
                                    <div class='recipe-text recipe-duration'>
                                    {$row['recipe_duration']} min
                                    </div>
                                </div>
                            </div>
                            <div class='recipe-description'>
                            ".substr($row['recipe_description'], 0 ,100)."...
                            </div>
                            <div class='recipe-calory'>
                            {$row['recipe_calory']}
                            </div>
                            <div class='recipe-button'>
                                <a href='./Views/includes/details.php?recipe_id={$row['recipe_id']}'>More</a>
                            </div>
                        </div>
                            ";
                        }
                    }
                ?>
            </div>
        </section>
    </main>
