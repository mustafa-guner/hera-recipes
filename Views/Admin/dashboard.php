
<?php 
    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/connectDB.php");
    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/create_session.php");
     checkLogin();
     
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
        
    
        <div class="container" style="transform:translate(0%,0);">
            <h1 class="display-4">List Recipes</h1>
            <hr>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline float-right ml-auto">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>
            <table class="table w-100 mx-auto">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Recipe Image </th>
                        <th scope="col">Recipe Calories</th>
                        <th scope="col">Recipe Duration </th>
                        <th scope="col">Recipe Rating </th>
                        <th scope="col">Recipe Classification </th>
                        <th scope="col">Recipe Ingredients </th>
                        <th scope="col">Recipe Difficulty </th>
                        <th scope="col">Recipe Description </th>
                        <th scope="col">Preperation Steps </th>
                        <th scope="col">Admin Actions</th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                        
                        $select_all = "SELECT * FROM recipe ORDER BY recipe_id DESC";
                        
                        if($rows = $connection->query($select_all)){
                            while($row = mysqli_fetch_array($rows)){
                                echo "
                                <tr>
                                <th scope='row'>{$row['recipe_id']}</th>
                                <td>{$row['recipe_name']}</td>
                                <td>{$row['recipe_image']}</td>
                                <td>{$row['recipe_calory']}</td>
                                <td>{$row['recipe_duration']}</td>
                                <td>{$row['recipe_class']}</td>
                                <td>".substr($row['recipe_ingredients'], 0 ,100)."...</td>
                                <td>{$row['recipe_difficulty']}</td>
                                <td>".substr($row['recipe_description'], 0 ,100)."...</td>
                                <td>{$row['recipe_rating']}</td>
                                <td>".substr($row['recipe_steps'], 0 ,100)."...</td>
                                <td class='d-flex'>
                                    <button class='btn-primary btn btn-sm mr-2'>Edit</button>
                                    <button class='btn-danger btn btn-sm'>Delete</button>
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