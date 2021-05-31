<?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/create_session.php");?>
<?php //If user already logged in, redirect him to the CREATE page in ADMIN PANEL
    if(isLoggedIn()){
        $location = "./dashboard.php";
        header("Location: {$location}");
    }
    include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Controllers/Admin_Controllers/Login.php"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" href="../../public/images/logo.png">
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
                <form method="POST" action="Login.php">
                    <div class="form-element">
                        <label><i class="fas fa-user"></i> username</label>
                        <input type="text" maxlength="10" placeholder="Enter username" autocomplete="off" name="admin_user">
                    </div>
                    <div class="form-element">
                        <label><i class="fas fa-key"></i> password </label>
                        <input type="password" maxlength="10" placeholder="Enter password" autocomplete="off" name="admin_pswd">
                    </div>
                    <button type="submit" name="loginAdmin">Login</button>
                    <div class="error-message" style="background-color:#fff; color:#DC3545; padding:.3rem 1rem; border-radius:10px; margin:1rem 0;"> <?php echo "$errorMessage"; ?></div>
                    
                    <script>
                            const errorBlock = document.querySelector(".error-message");
                            console.log(errorBlock.innerHTML.length);
                            if(errorBlock.innerHTML.length > 0){
                                setTimeout(() => {
                                    errorBlock.innerHTML = "";
                                }, 3000);
                            }
                    </script>
                   
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
</body>
</html>




