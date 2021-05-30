<?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/create_session.php");?>
<?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Controllers/Admin_Controllers/Login.php");?>
<?php //If user already logged in, redirect him to the CREATE page in ADMIN PANEL
    if(isLoggedIn()){
        $location = "./dashboard.php";
        header("Location: {$location}");
    } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../../public/css/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
<div class="login-page">
       <div class="login-screen">
           <div class="logo">
               <img src="../../public/images/logo.png">
               <h1>Admin Panel</h1>
               <hr>
           </div>
          
            <div class="form-block">
                <form method="POST" action="../../Controllers/Admin_Controllers/Login.php">
                    <div class="form-element">
                        <label><i class="fas fa-user"></i> username</label>
                        <input type="text" maxlength="10" placeholder="Enter username" autocomplete="off" name="admin_user">
                    </div>
                    <div class="form-element">
                        <label><i class="fas fa-key"></i> password</label>
                        <input type="password" maxlength="10" placeholder="Enter password" autocomplete="off" name="admin_pswd">
                    </div>
                    <button type="submit" name="loginAdmin">Login</button>
                    <div class="error-message" style="background-color:red; color:#fff;"></div>
                   
                </form>
            </div>
       </div>
       <div class="greeting-screen">
           <div class="overlay"></div>
            <div class="greetings-msg">
                <h1>Welcome to your <span>website!</span></h1>
                <p>Login to access your admin panel</p>
            </div>
       </div>
   </div>

   <?php
    
    if(isset($_POST[""]))
   
   ?>

   
</body>
</html>




