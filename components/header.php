<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">E-SHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <?php
                                  foreach($categories as $categorie){
                                  print '<li><a class="dropdown-item" href="#">'.$categorie['name'].'</a></li>
                                  <li>';
                                  }
                            ?>

                    </ul>
                </li>

                <?php 
                if (isset($_SESSION['email'])){
                    print '<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profile.php">profile</a>
                    </li>';
                }else{
                    print '<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="connexion.php">connection</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="register.php">Register</a>
                    </li>';
                }
                ?>



            </ul>
            <form action="index.php" method="POST" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <?php 
            if (isset($_SESSION['email'])) {
                print'<a href="logout.php" class="btn btn-primary">Log Out</a>';
            }
            
            ?>
        </div>
    </div>
</nav>