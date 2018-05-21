  <!-- ####### Header ####### -->
  <header class="et-header">
        <div class="container px-xl-0">
            <nav class="navbar navbar-expand-lg navbar-dark et-header">
                
                <!-- Logo -->
                <a class="navbar-brand" href="<?php echo SITE_URL; ?>"><img src="img/et_logo.png" alt="Logo"></a>

                <!-- Hamburger -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main menu -->
                <div class="collapse navbar-collapse" id="mainMenu">
                  
                    <ul class="navbar-nav mr-auto text-uppercase et-menu">
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo SITE_URL; ?>/newsy" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newsy</a>                 
                            <div class="dropdown-menu et-menu-dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>/news/newsy">Newsy</a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>/news/artykuły">Artykuły</a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>/news/wywiady">Wywiady</a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>/news/felietony">Felietony</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_URL; ?>/mem">Memy</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_URL; ?>/video">Video</a>
                        </li>
                        
                    </ul>
                    
                </div>
                 
                <!-- Login -->  
                <a class="text-uppercase et-login" href="<?php echo SITE_URL; ?>/login"><i class="far fa-user mr-3 et-login-icon"></i>Zaloguj się</a>
                   
                <!-- Social -->
                <div class="et-social">
				    <a href="<?php echo $def['fb_link']; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo $def['titter_link']; ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?php echo $def['insta_link']; ?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo $def['mail_link']; ?>"><i class="far fa-envelope"></i></a>
                </div>
     
                <!-- Search -->   
                <form class="form-inline et-search">
                    <input class="form-control" type="search" placeholder="Szukaj" aria-label="Search">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
                    
            </nav>
        </div>
    </header>
    <!-- ####### End of Header ####### -->