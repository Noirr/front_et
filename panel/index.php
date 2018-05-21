<?php require_once("header.php"); ?>
<?php 


    if( 1 == 1 ) //jesli zalogowany
    {
        header("location: panel.php");        
    }


?>



<!doctype html>
<html lang="pl">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Opis strony.">
    
    <title>Panel klienta - Ekstraklasa Trolls</title> 
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,800&amp;subset=latin-ext" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>

    <!-- ####### Header ####### -->
    <header class="et-header">
        <div class="container px-xl-0">
            <nav class="navbar navbar-expand-lg navbar-dark et-header">
                <!-- Logo -->
                <a class="navbar-brand" href="#"><img src="img/et_logo.png" alt="Logo"></a> 
            </nav>
        </div>
    </header>
    <!-- ####### End of Header ####### -->
    
    <!-- Page header -->
    <div class="container px-xl-0">
        <h1 class="text-uppercase et-section-title">Twój panel</h1>
    </div>
    
    <!-- ####### Content ####### -->
    <div class="container px-xl-0">          
        <div class="row">
                
           
                
                <!-- Sidebar latest news header -->
                <h2 class="text-uppercase et-sidebar-title">
                    
                </h2>
                            
                <div class="col-md-8 offset-md-2">
                    <div class="login" >

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>




                
        </div>
    </div>
    <!-- ####### End of Content ####### -->
    
    <!-- ####### Footer ####### -->
    <footer class="et-footer">
        <div class="container px-xl-0">
            <div class="row">
                
                <div class="col-md-3">
                    
                    <!-- Footer menu -->
                    <ul class="nav flex-column text-uppercase">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Newsy</a>
                            
                            <ul class="et-footer-submenu-link">
                                <li class="nav-item"><a class="nav-link" href="#" >Newsy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" >Artykuły</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" >Wywiady</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" >Felietony</a></li>
                            </ul>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Memy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Video</a>
                        </li>

                    </ul>
                    
                </div>
                
                <div class="col-md-3">
                    
                    <!-- Footer menu with info pages -->
                    <ul class="nav flex-column text-uppercase">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Redakcja</a>       
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reklama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Polityka prywatności</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontakt</a>
                        </li>

                    </ul>
                    
                </div>
                
                <div class="col-md-3">
                    
                    <!-- Socials -->
                    <div class="et-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="far fa-envelope"></i></a>
                    </div>
                    
                    <!-- Copy -->
                    <div class="et-copy">
                        <p>&copy; 2018 Ekstraklasa Trolls<br />
                        Wszelkie prawa zastrzeżone.<br /><br />
                        Realizacja: <a href="https://kompromix.pl/" target="_blank">kompromix</a></p>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </footer>    
    <!-- ####### End of Footer ####### -->    
    
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>



<?php //require_once("footer.php"); ?>
