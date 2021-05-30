        <div class="dashboard">
            <div class="admin-profile">
                <div class="admin-image">
                    <img src="../../public/images/ben.jpg">
                </div>
                <div class="admin-username">
                    <div class="admin-name">
                        <span class="text-success">●</span> Mustafa Guner
                    </div>
                    <div class="admin-role">
                        superadmin
                    </div>

                </div>
            </div>
            <ul class="admin-tools">
                <li class="admin-tool">
                    <a href="./create-new-recipe.php"> <i class="fas fa-plus "></i> Create new recipe</a>
                </li>
                <li class="admin-tool">
                    <a href="./dashboard.php"><i class="fas fa-list-ul "></i> List recipes</a>
                </li>
                <form method="POST" action="../../Controllers/Admin_Controllers/Logout.php">
                <li class="admin-tool">
                   <button type="submit" name="logout">Logout</button>
                </li>
                </form>
            </ul>
        </div>