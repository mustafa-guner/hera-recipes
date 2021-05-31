
#READ ME FILE DOCUMENTATION

NOTE: Hi, hocam my project is not completed. It has some missparts. I just wanted to let you know before you dive into check. Sorry about that.


## USED TECHNOLOGIES FOR THE PROJECT:

-GSAP (for the y axis scroll animation)
-SCSS (for the easy work with CSS)
-BOOTSTRAP (mostly for the ADMIN UI PANEL)


## ABOUT THE PROJECT FOLDER STRUCTURE:

-I created a single page web application for my project.Also i tried to implement MVC model

-My folder structure is;

--ROOT FOLDER

---Config
      config.php

---Controllers
---------Admin_Controllers
------------AddNewRecipe.php
---------------ListRecipes.php
 --------------Logout.php
	
---Helpers
---------Admin_Controllers
-------------AddNewRecipe.php
---------------ListRecipes.php
---------------Logout.php

---Public


---Views
---------Admin
-------------partials
---------------menu.php
 ------------create-new-recipe.php
 ------------dashboard.php
 ------------login.php
---------includes
 ------------about.php
 ------------contact.php
 ------------details.php
 ------------index.php
 ------------recipes.php
 ------------search.php

---index.php




CONFIG: I have database configuration in that folder.

CONTROLLERS: I have admin controllers in that folder.(Create new recipe, Logout ..etc)

HELPERS: I have some helpers in that folder in order to support my application.(Connection to DB,Create session etc.)

PUBLIC: I have all STYLING and IMAGE files in that folder (ASSETS)

VIEWS: I have all the views in that folder like header,navbar for prevent the repetation. (I splitted them into parts for more modular work. (partials,includes))

INDEX.PHP: This file is where the application runs.

