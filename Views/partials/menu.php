


<div id="menu">
        <div class="logo-block">
            <img src="./public/images/menu.png">
        </div>
        <form method="POST" action="../../../HERA-RECIPES/Views/includes/search.php">

            <div class="search-form">
                <div class="search-name menu-header-flag">
                    Searh your recipe by name
                </div>
                <label class="searh-name-label">
                    Name.........<input type="text" name="search-by-name" placeholder="Type here">
                </label>
            </div>

            <div class="search-form">
                <div class="search-options menu-header-flag">
                    Searh your recipe by 
                </div>
                <div class="options">
                    <div class="duration-option">
                        Duration.....<input type="number" name="duration_first"> - <input type="number" name="duration_second">max
                        
                    </div>
                    <div class="difficulty-option">
                        Difficulty.......<input type="number" max="5" name="difficulty">
                        
                    </div>
                    <div class="duration-option">
                        Calories.......<input type="number" name="calory_first"> - <input type="number" name="calory_second">max
                    </div>
                    
                </div>
            </div>

            <div class="search-form">
                <div class="search-filter menu-header-flag">
                    Searh your recipe by filter
                </div>
                <div class="filter-recipe-label">
                  <label>   Rating.............<select name="rating"><option value="1">1</option> <option  value="2">2</option> <option  value="3">3</option> <option value="4">4</option><option  value="5">5</option></select> </label>
                <label> Alphabetical.............<select name="order"> <option  value="az">A-Z</option><option value="za">Z-A</option></select> </label>
                </div>
            </div>

            <div class="search-form-button">
                <button type="submit" name="search">
                    search
                </button>
            </div>
        </form>
    </div>

 