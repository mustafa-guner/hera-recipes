
<?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Helpers/activeLink.php")?>

<nav>
    <div class="logo-block">
        <img src="./public/images/logo.png">
        </div>
        <ul class="navbar-links">
           
             <li class="<?php active("index1.php") || active("/Hera-Recipes/")?>" class="navbar-link">
                <a href="?pageid=index1.php">Home</a>
             </li>
          
            <li class="<?php active("index2.php")?>" class="navbar-link">
                <a href="?pageid=index2.php">Recipes</a>
             </li>

             <li class="<?php active("index3.php")?>" class="navbar-link">
                <a href="?pageid=index3.php">About</a>
             </li>

             <li class="<?php active("index4.php")?>" class="navbar-link">
                <a href="?pageid=index4.php">Contact</a>
             </li>
        </ul>
    </nav>