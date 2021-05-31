
<?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/partials/header.php") ?>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/partials/navbar.php") ?>

<?php

//END PONT -> /HERA-RECIPES/
if(isset($_GET["pageid"])){
    
    $page = $_GET["pageid"];

    switch($page) {

        case 'index1.php':
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/index.php');
            $currentPage = "Home";
        break;

        case 'index2.php':
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/recipes.php');
            $currentPage = "Recipes";

        break;
    
        case 'index3.php':
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/about.php');
            $currentPage = "About";
        break;

         case 'index4.php':
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/contact.php');
            $currentPage = "Contact";
        break;
        
        case 'index5.php':
            include($_SERVER["DOCUMENT_ROOT"]."/HERA-RECIPES/Views/includes/details.php");
            $currentPage = "Details";
        break;
    
        default:
        include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/Error.php');
    
        break;
    
        }
    } else {
        include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/index.php');
    }
?>


<?php include("./Views/partials/scripts.php") ?>

</body>




