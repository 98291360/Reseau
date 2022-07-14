  
 
 <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"> <?= WEBSITE_NAME;?> </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item <?php set_active('index') ?>" ><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item <?php set_active('login') ?>"><a class="nav-link" href="login.php">Connexion</a></li>
                        <li class="nav-item <?php set_active('register') ?>"><a class="nav-link" href="register.php">Inscription</a></li>
                    </ul>
                </div>
            </div>
        </nav>
