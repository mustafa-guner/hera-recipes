        <div class="dashboard">
            <div class="admin-profile">
                <div class="admin-image">
                    <img src="../../public/images/ben.jpg">
                </div>
                <div class="admin-username">
                    <div class="admin-name">
                        <span class="text-success">●</span> <?php echo $_SESSION["title"] ?>
                    </div>
                    <div class="admin-role">
                    <?php echo $_SESSION["role"]?>
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
                   <button type="submit" class="btn-link btn" style="margin-left:-13px; color:#353535; text-decoration:none"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </li>
                </form>
            </ul>
        </div>