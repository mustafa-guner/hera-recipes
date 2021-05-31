<?php
include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/create_session.php");
include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");

checkLogin();



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
       

    } else {

     $FailureMessage =  "Couldn't add recipes to database.";
    }    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>



    <div class="admin-panel">

        <?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/Admin/partials/menu.php"); ?>

        <div class="container" id="create-container">
            <h1 class="display-4">Create new recipe</h1>
            <hr>
            <div class="row">

                <?php 
                    $EDIT_ID="";
                    if(isset($_POST["edit_recipe"])){
                        $EDIT_ID  = $_POST["edit_recipe"];
                        $id = $_POST["edit_recipe"];
                        $select_recipe = "SELECT * FROM recipe WHERE recipe_id = '$id'";
                        
                        if($rows = $connection->query($select_recipe)){
                            while($row = mysqli_fetch_array($rows)){
                            echo  "
                        <form class='needs-validation col-md-12' novalidate method='POST' action=''>
                        <div class='row'>
    
                            <!-- Recipe Name Form-->
                            <div class='form-row'>
                                <div class='col-md-4 my-3'>
                                    <label for='rname'>Recipe Name</label>
                                    <input type='text' class='form-control' id='rname' name='recipe_name'
                                        placeholder='Enter name' required maxlength='20' value='{$row['recipe_name']}'>
                                </div>
    
                                <div class='col-md-4 my-3'>
                                    <label for='validationCustom02'>Recipe Calories</label>
                                    <input type='number' class='form-control' id='rcalory' name='recipe_calory'
                                        placeholder='Enter Calories' maxlength='4' required value ='{$row['recipe_calory']}'>
                                </div>
    
    
                                <!-- Recipe Duration Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='rduration'>Recipe Duration (minutes)</label>
                                    <div class='input-group'>
                                        <!--Maxlength is not working on type number so;-->
                                        <input type='number' name='recipe_duration' pattern='/^-?\d+\.?\d*$/'
                                            onKeyPress='if(this.value.length==11) return false;' class='form-control'
                                            id='rduration' placeholder='Duration (max:11 digits)'
                                            aria-describedby='inputGroupPrepend' required value='{$row['recipe_duration']}'>
                                    </div>
                                </div>
    
    
                                <!-- Recipe Class Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='rclass'>Recipe Classification</label>
                                    <select name='recipe_class' id='rclass' class='form-control'
                                        aria-label='Default select example'>
                                        <option selected>Select Classification</option>
                                        <option value='Baking'>Baking</option>
                                        <option value='Grill'>Grill</option>
                                        <option value='Frying'>Frying</option>
                                        <option value='Poaching'>Poaching</option>
                                        <option value='Broiling'>Broiling</option>
                                        <option value='Stewing'>Stewing</option>
                                        <option value='Blanching'>Blanching</option>
                                    </select>
                                </div>
    
    
                                <!-- Recipe Diffuculty Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='rdifficulty'>Recipe Difficulty (out of 5)</label>
                                    <div class='input-group'>
                                        <input type='number' class='form-control' id='rdifficulty' name='recipe_difficulty'
                                            placeholder='Enter Difficulty' pattern='/^-?\d+\.?\d*$/'
                                            onKeyPress='if(this.value.length==1) return false;'
                                            aria-describedby='inputGroupPrepend' required value='{$row['recipe_difficulty']}'>
                                    </div>
                                </div>
    
    
    
                                <!-- Recipe Rating Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='rdifficulty'>Recipe Rating (out of 5)</label>
                                    <div class='input-group'>
                                        <input type='number' class='form-control' id='rrating' name='recipe_rating'
                                            placeholder='Enter Rating' pattern='/^-?\d+\.?\d*$/'
                                            onKeyPress='if(this.value.length==1) return false;''
                                            aria-describedby='inputGroupPrepend' required  value='{$row['recipe_difficulty']}' >
                                    </div>
                                </div>
    
                                <!-- Recipe Image Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='rimage'>Recipe Image</label>
                                    <input type='file' class='form-control-file ml-auto' id='rimage' name='recipe_image'>
                                </div>
                            </div>
    
                            <div class='row w-100'>
                                <!-- Recipe Ingredient Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='ringredient'>Recipe Ingredients</label>
                                    <div class='input-group'>
                                        <textarea maxlength='300' type='text' class='form-control' id='ringredient'
                                            name='recipe_ingredients' placeholder='Enter Ingredients'
                                            aria-describedby='inputGroupPrepend' required >{$row['recipe_ingredients']}</textarea>
                                    </div>
                                </div>
    
    
                                <!-- Recipe Name Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='rdesc'>Recipe Description</label>
                                    <div class='input-group'>
                                        <textarea maxlength='150' type='text' class='form-control ' id='rdesc'
                                            name='recipe_desc' placeholder='Enter Description'
                                            aria-describedby='inputGroupPrepend' required >{$row['recipe_description']}</textarea>
                                    </div>
                                </div>
    
    
                                <!-- Recipe Steps Form-->
                                <div class='col-md-4 my-3'>
                                    <label for='ringredient'>Preperation Steps</label>
                                    <div class='input-group'>
                                        <textarea maxlength='300' type='text' class='form-control' id='rprep'
                                            name='preperation_steps' placeholder='Enter steps'
                                            aria-describedby='inputGroupPrepend' required >{$row['recipe_steps']}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class='btn btn-success float-left' name='editRecipe' type='submit'>Create</button>
                        </form>
                        
                           ";
                        };
                    };
                } else{
                    echo "
                    <form class='needs-validation col-md-12' novalidate method='POST' action=''>
                    <div class='row'>

                        <!-- Recipe Name Form-->
                        <div class='form-row'>
                            <div class='col-md-4 my-3'>
                                <label for='rname'>Recipe Name</label>
                                <input type='text' class='form-control' id='rname' name='recipe_name'
                                    placeholder='Enter name' required maxlength='20'>
                            </div>

                            <div class='col-md-4 my-3'>
                                <label for='validationCustom02'>Recipe Calories</label>
                                <input type='number' class='form-control' id='rcalory' name='recipe_calory'
                                    placeholder='Enter Calories' maxlength='4' required>
                            </div>


                            <!-- Recipe Duration Form-->
                            <div class='col-md-4 my-3'>
                                <label for='rduration'>Recipe Duration (minutes)</label>
                                <div class='input-group'>
                                    <!--Maxlength is not working on type number so;-->
                                    <input type='number' name='recipe_duration' pattern='/^-?\d+\.?\d*$/'
                                        onKeyPress='if(this.value.length==11) return false;' class='form-control'
                                        id='rduration' placeholder='Duration (max:11 digits)'
                                        aria-describedby='inputGroupPrepend' required>
                                </div>
                            </div>


                            <!-- Recipe Class Form-->
                            <div class='col-md-4 my-3'>
                                <label for='rclass'>Recipe Classification</label>
                                <select name='recipe_class' id='rclass' class='form-control'
                                    aria-label='Default select example'>
                                    <option selected>Select Classification</option>
                                    <option value='Baking'>Baking</option>
                                    <option value='Grill'>Grill</option>
                                    <option value='Frying'>Frying</option>
                                    <option value='Poaching'>Poaching</option>
                                    <option value='Broiling'>Broiling</option>
                                    <option value='Stewing'>Stewing</option>
                                    <option value='Blanching'>Blanching</option>
                                </select>
                            </div>


                            <!-- Recipe Diffuculty Form-->
                            <div class='col-md-4 my-3'>
                                <label for='rdifficulty'>Recipe Difficulty (out of 5)</label>
                                <div class='input-group'>
                                    <input type='number' class='form-control' id='rdifficulty' name='recipe_difficulty'
                                        placeholder='Enter Difficulty' pattern='/^-?\d+\.?\d*$/'
                                        onKeyPress='if(this.value.length==1) return false;'
                                        aria-describedby='inputGroupPrepend' required>
                                </div>
                            </div>



                            <!-- Recipe Rating Form-->
                            <div class='col-md-4 my-3'>
                                <label for='rdifficulty'>Recipe Rating (out of 5)</label>
                                <div class='input-group'>
                                    <input type='number' class='form-control' id='rrating' name='recipe_rating'
                                        placeholder='Enter Rating' pattern='/^-?\d+\.?\d*$/'
                                        onKeyPress='if(this.value.length==1) return false;''
                                        aria-describedby='inputGroupPrepend' required>
                                </div>
                            </div>

                            <!-- Recipe Image Form-->
                            <div class='col-md-4 my-3'>
                                <label for='rimage'>Recipe Image</label>
                                <input type='file' class='form-control-file ml-auto' id='rimage' name='recipe_image'>
                            </div>
                        </div>

                        <div class='row w-100'>
                            <!-- Recipe Ingredient Form-->
                            <div class='col-md-4 my-3'>
                                <label for='ringredient'>Recipe Ingredients</label>
                                <div class='input-group'>
                                    <textarea maxlength='300' type='text' class='form-control' id='ringredient'
                                        name='recipe_ingredients' placeholder='Enter Ingredients'
                                        aria-describedby='inputGroupPrepend' required></textarea>
                                </div>
                            </div>


                            <!-- Recipe Name Form-->
                            <div class='col-md-4 my-3'>
                                <label for='rdesc'>Recipe Description</label>
                                <div class='input-group'>
                                    <textarea maxlength='150' type='text' class='form-control ' id='rdesc'
                                        name='recipe_desc' placeholder='Enter Description'
                                        aria-describedby='inputGroupPrepend' required></textarea>
                                </div>
                            </div>


                            <!-- Recipe Steps Form-->
                            <div class='col-md-4 my-3'>
                                <label for='ringredient'>Preperation Steps</label>
                                <div class='input-group'>
                                    <textarea maxlength='300' type='text' class='form-control' id='rprep'
                                        name='preperation_steps' placeholder='Enter steps'
                                        aria-describedby='inputGroupPrepend' required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class='btn btn-success float-left' name='createRecipe' type='submit'>Create</button>
                    </form>
                    ";
                }
                ?>
            </div>
            <div id="messageRow" class="row my-4">
        
                    <?php if($SuccessMessage){ ?>
                    <div class="col-md-12 message bg-success text-white rounded p-2 text-center">
                        <?php echo $SuccessMessage; ?>
                    </div>
                    <?php }?>

                    <?php if($FailureMessage){ ?>
                    <div class="col-md-12 message bg-danger text-white rounded p-2 text-center">
                        <?php echo $FailureMessage; ?>
                    </div>
                    <?php }?>

                </div>
                <script>
                    
                    const messageRow = document.querySelector("#messageRow");
                        console.log(messageRow);
                    if (messageRow.children.length > 0) {
                        const message = messageRow.children[0];
                        setTimeout(() => {
                            message.remove();
                        }, 2000);
                    }
                </script>
        </div>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>


<?php

if(isset($_POST["editRecipe"])){



    $recipe_name = $_POST["editRecipe"];
    $recipe_desc = $_POST["editRecipe"];
    $recipe_image = $_POST["editRecipe"];
    $recipe_difficulty = $_POST["editRecipe"];
    $recipe_calory = $_POST["editRecipe"];
    $recipe_duration = $_POST["editRecipe"]; // 
    $recipe_class = $_POST["editRecipe"];
    $recipe_ingredients = $_POST["editRecipe"];
    $recipe_rating = $_POST["editRecipe"];
    $recipe_steps = $_POST["editRecipe"];

    $sql = " UPDATE recipe SET 
    recipe_name = '$recipe_name', 
    recipe_description = '$recipe_desc', 
    recipe_image = '$recipe_image', 
    recipe_difficulty = '$recipe_difficulty', 
    recipe_calory = '$recipe_calory' ,
    recipe_duration = '$recipe_duration' ,
    recipe_class = '$recipe_class' ,
    recipe_ingredients = '$recipe_ingredients' ,
    recipe_rating = '$recipe_rating' ,
    recipe_steps = '$recipe_steps' ,
    WHERE recipe_id = $EDIT_ID";

    if ($connection->query($sql) === TRUE) {

        echo "Recipe is UPDATED successfully";
       

    } else {

     echo  "Couldn't update recipes.";
    }    
}



?>
</body>

</html>