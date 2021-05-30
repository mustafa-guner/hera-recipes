
<?php
    
    include_once($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");
    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/create_session.php");

    checkLogin();

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

        <div class="container">
            <h1 class="display-4">Create new recipe</h1>
            <hr>
            <div class="row">
                <form class="needs-validation col-md-8" novalidate>

                    <!-- Recipe Name Form-->
                    <div class="form-row">
                        <div class="col-md-4 my-3">
                            <label for="rname">Recipe Name</label>
                            <input type="text" class="form-control" id="rname" name="recipe_name"
                                placeholder="Enter name" required maxlength="20">
                        </div>

                        <div class="col-md-4 my-3">
                            <label for="validationCustom02">Recipe Calories</label>
                            <input type="number" class="form-control" id="rcalory" name="recipe_calory"
                                placeholder="Enter Calories" maxlength="4" required>
                        </div>


                        <!-- Recipe Duration Form-->
                        <div class="col-md-4 my-3">
                            <label for="rduration">Recipe Duration (minutes)</label>
                            <div class="input-group">
                                <!--Maxlength is not working on type number so;-->
                                <input type="number" pattern="/^-?\d+\.?\d*$/"
                                    onKeyPress="if(this.value.length==11) return false;" class="form-control"
                                    id="rduration" placeholder="Duration (max:11 digits)"
                                    aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>


                        <!-- Recipe Class Form-->
                        <div class="col-md-4 my-3">
                            <label for="rclass">Recipe Classification</label>
                            <select id="rclass" class="form-control" aria-label="Default select example">
                                <option selected>Select Classification</option>
                                <option value="1">Baking</option>
                                <option value="2">Grill</option>
                                <option value="3">Frying</option>
                                <option value="3">Poaching</option>
                                <option value="3">Broiling</option>
                                <option value="3">Stewing</option>
                                <option value="3">Blanching</option>
                            </select>
                        </div>


                        <!-- Recipe Diffuculty Form-->
                        <div class="col-md-4 my-3">
                            <label for="rdifficulty">Recipe Difficulty (out of 5)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="rdifficulty" name="recipe_difficulty"
                                    placeholder="Enter Difficulty" pattern="/^-?\d+\.?\d*$/"
                                    onKeyPress="if(this.value.length==1) return false;"
                                    aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>



                        <!-- Recipe Rating Form-->
                        <div class="col-md-4 my-3">
                            <label for="rdifficulty">Recipe Rating (out of 5)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="rrating" name="recipe_rating"
                                    placeholder="Enter Rating" pattern="/^-?\d+\.?\d*$/"
                                    onKeyPress="if(this.value.length==1) return false;"
                                    aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>

                        <!-- Recipe Ingredient Form-->
                        <div class="col-md-4 my-3">
                            <label for="ringredient">Recipe Ingredients</label>
                            <div class="input-group">
                                <textarea maxlength="300" type="text" class="form-control" id="ringredient"
                                    name="recipe_ingredients" placeholder="Enter Ingredients"
                                    aria-describedby="inputGroupPrepend" required></textarea>
                            </div>
                        </div>


                        <!-- Recipe Name Form-->
                        <div class="col-md-4 my-3">
                            <label for="rdesc">Recipe Description</label>
                            <div class="input-group">
                                <textarea maxlength="150" type="text" class="form-control" id="rdesc" name="recipe_desc"
                                    placeholder="Enter Description" aria-describedby="inputGroupPrepend"
                                    required></textarea>
                            </div>
                        </div>

                        <!-- Recipe Image Form-->
                        <div class="col-md-4 my-3">
                            <label for="rimage">Recipe Image</label>
                            <input type="file" class="form-control-file ml-auto" id="rimage" name="recipe_image">
                        </div>




                        <!-- Recipe Steps Form-->
                        <div class="col-md-4 my-3">
                            <label for="ringredient">Preperation Steps</label>
                            <div class="input-group">
                                <textarea maxlength="300" type="text" class="form-control" id="ringredient"
                                    name="recipe_ingredients" placeholder="Enter steps"
                                    aria-describedby="inputGroupPrepend" required></textarea>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success" name="createRecipe" type="submit">Create</button>
                </form>


                <!--PREVIEW YOUR RECIPE-->

                <div class="row col-md-4">

                    <div class="card w-75 text-center mx-auto" style="height: 300px;">
                        <div class="card-header">

                            <p class="card-heading">Recipe Name</p>
                        </div>
                        <div class="card-body">
                            <div class="card-image w-100">
                                <img class="w-100" src="./public/images/emptyImage.jpg">
                            </div>
                            <div class="card-infos w-100 text-center">
                                <ul class="d-flex w-100" style="list-style: none;">
                                    <li class="mr-2">Rating</li>
                                    <li class="mr-2">Difficulty</li>
                                    <li class="mr-2">Duration</li>

                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
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

                if(isset($_POST["createRecipe"])){

                    $recipe_name = $_POST["recipe_name"];
                    $recipe_image = $_POST["recipe_image"];
                    $recipe_rating = $_POST["recipe_rating"];
                    $recipe_duration = $POST["recipe_duration"];
                    $recipe_class = $POST["recipe_class"];
                    $recipe_calory = $_POST["recipe_calory"];
                    $recipe_desc = $_POST["recipe_desc"];
                    $recipe_difficulty = $_POST["recipe_difficulty"];
                    $recipe_ingredients = $_POST["recipe_ingredients"];

                    echo $recipe_name;

                }

            ?>

    
</body>
</html>
