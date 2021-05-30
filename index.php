
<?php include("./Views/partials/header.php") ?>

<body>

<?php include("./Views/partials/navbar.php") ?>

<?php

if(isset($_GET["pageid"])){
    
    $page = $_GET["pageid"];

    switch($page) {

        case 'index1.php':
            case "/":
            $currentPage = "Home";
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/index.php');
        break;
    
        case 'index2.php':
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/recipes.php');
            $currentPage = "Recipes";
        break;
    
        case 'index3.php':
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/About.php');
            $currentPage = "About";
        break;

         case 'index3.php':
            include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/Contact.php');
            $currentPage = "Contact";
        break;
    
        default:
        include($_SERVER["DOCUMENT_ROOT"].'/HERA-RECIPES/Views/includes/Error.php');
    
        break;
    
        }
    }
?>

<?php include("./Views/partials/scripts.php") ?>

</body>




