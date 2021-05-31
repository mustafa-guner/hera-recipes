
<?php 
    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");
    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/create_session.php");
     checkLogin();

    

     $successMessage = "";
     if(isset($_POST["delete_recipe"])){
         $recipeID = $_POST["delete_recipe"];
         $delete_query = "DELETE FROM recipe WHERE recipe_id = '$recipeID' ";
         if ($connection->query($delete_query) === TRUE) {
            $successMessage = "Deleted Succesfuly";
          }
     }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | List</title>
    <link rel="icon" href="../../public/images/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="admin-panel">
        <?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/Admin/partials/menu.php"); ?>
        <div style=" position:absolute; top:0;" class="s-message bg-success text-white w-100 mx-auto text-center"><?php echo $successMessage; ?></div>
        <div class="container" id="list-container" style="width:30% !important; z-index:1; transform:translate(30%,0%);">

        <script>
            const successMessage = document.querySelector(".s-message");
            if(successMessage.innerHTML.length > 0){
                setTimeout(() => {
                    successMessage.innerHTML = "";
                }, 1000);
            }
        </script>

            <h1 class="display-4">List Recipes</h1>
            
            <hr>
            <!-- <nav class="navbar navbar-light bg-light w-100 float-right">
                <form class="form-inline float-right ml-auto">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav> -->
            <table class="table w-100 mx-auto">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Recipe Image </th>
                        <th scope="col">Recipe Calories</th>
                        <th scope="col">Recipe Duration </th>
                        <th scope="col">Recipe Rating </th>
                        <th scope="col">Recipe Class </th>
                        <th scope="col">Recipe Ingre. </th>
                        <th scope="col">Recipe Difficulty </th>
                        <th scope="col">Recipe Description </th>
                        <th scope="col">Prep. Steps </th>
                        <th scope="col">Admin Actions</th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                        
                        $select_all = "SELECT * FROM recipe ORDER BY recipe_id DESC";
                        
                        if($rows = $connection->query($select_all)){
                            while($row = mysqli_fetch_array($rows)){
                                $ID = $row["recipe_id"];
                                echo "
                                <tr>
                                <th scope='row'>{$row['recipe_id']}</th>
                                <td>{$row['recipe_name']}</td>
                                <td>{$row['recipe_image']}</td>
                                <td>{$row['recipe_calory']}</td>
                                <td>{$row['recipe_duration']}</td>
                                <td>{$row['recipe_class']}</td>
                                <td>".substr($row['recipe_ingredients'], 0 ,3)."...</td>
                                <td>{$row['recipe_difficulty']}</td>
                                <td>".substr($row['recipe_description'], 0 ,3)."...</td>
                                <td>{$row['recipe_rating']}</td>
                                <td>".substr($row['recipe_steps'], 0 ,3)."...</td>
                                <td class='d-flex'>
                                    <form method='POST' action = './create-new-recipe.php'>
                                        <button class='btn-primary btn btn-sm mr-2' data-id='{$ID}'>Edit</button>
                                        <input type='hidden' name='edit_recipe' value='{$ID}'>
                                    </form>

                                    <form method='POST' action=''>
                                        <button class='btn-danger btn btn-sm' data-id='{$ID}' >Delete</button>
                                        <input type='hidden' name='delete_recipe' value='{$ID}'>
                                    </form>
                                </td>
                            </tr>
                                ";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>