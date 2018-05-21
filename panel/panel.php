<?php 
require_once("functions.php");
require_once("header.php");

$data = new DATA;
$front = new FRONT;
$card = new CARD;
$last_news = $data->get_list( 'news', 5 );
$last_video = $data->get_list( 'video', 5 );


echo 
printuj( $last_news );


 ?>


 <!-- Page header -->
 <div class="container px-xl-0">
        <h1 class="text-uppercase et-section-title">Twój panel</h1>
    </div>
    
    <!-- ####### Content ####### -->
    <div class="container px-xl-0">          
        <div class="row">
                
            <!-- ####### Left sidebar ####### -->
            <div class="col-md-3">
                               
                <!-- Facebook -->                       
                <div class="card mb-4 et-card-ad">
                    <img class="card-img" src="img/fb.png" alt="">
                </div>
                   
                <!-- Square ad -->                       
                <div class="card mb-4 et-card-ad">
                    <img class="card-img" src="img/300x250.png" alt="">
                </div>
                
                <!-- Sidebar latest videos header -->
                <h2 class="text-uppercase et-sidebar-title">Najnowsze video</h2>
                
                <?php $card->show( $last_news[0] ); ?>
                <?php $card->show( $last_news[1] ); ?>
                <?php $card->show( $last_news[2] ); ?>
                <?php $card->show( $last_news[3] ); ?>
                <?php $card->show( $last_news[4] ); ?>
                   
                <!-- Horizontal ad -->                       
                <div class="card mb-4 et-card-ad">
                    <img class="card-img" src="img/300x600.png" alt="">
                </div>
                    
            </div>
            <!-- ####### End of Left sidebar ####### -->
                
            <!-- ####### Panel ####### -->
            <div class="col-md-6">
               
                <!-- Panel menu -->
                <ul class="nav text-uppercase et-categories-menu">
                       
                    <li class="nav-item">
                        <a class="nav-link et-menu-active" href="#">Dodaj mema</a>       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wyloguj się</a>
                    </li>

                </ul>
                
                <!-- Add mem form -->   
                <form class="form et-add-mem-form">
                    <div class="form-group">
                        <label for="title">Tytuł</label>
                        <input type="text" class="form-control" placeholder="Wpisz tytuł mema" id="title" aria-label="Title">
                    </div>
                    <div class="form-group">
                        <label for="file">Dodaj plik</label>
                        <input type="file" class="form-control-file et-file" id="file" aria-label="File">
                    </div>
                    <button class="btn text-uppercase" type="submit">Wyślij</button>
                </form>
                 
            </div>
            <!-- ####### End of Panel ####### -->
                
            <!-- ####### Right sidebar ####### -->
            <div class="col-md-3">
                                               
                <!-- Horizontal ad -->                       
                <div class="card mb-4 et-card-ad">
                    <img class="card-img" src="img/300x600.png" alt="">
                </div>
                                              
                <!-- Sidebar latest news header -->
                <h2 class="text-uppercase et-sidebar-title">Newsy z ostatniej chwili</h2>
                                               
                <!-- Sidebar latest news small card -->
                <div class="card bg-dark text-white et-card">
                    <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                    <div class="card-img-overlay">
                        <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                        <p class="card-text et-card-date">
                            10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                        </p>
                        <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                        <a class="et-card-link" href="#" ></a>
                    </div>
                </div>
                                               
                <!-- Sidebar latest news small card -->
                <div class="card bg-dark text-white et-card">
                    <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                    <div class="card-img-overlay">
                        <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                        <p class="card-text et-card-date">
                            10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                        </p>
                        <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                        <a class="et-card-link" href="#" ></a>
                    </div>
                </div>
                                               
                <!-- Sidebar latest news small card -->
                <div class="card bg-dark text-white et-card">
                    <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                    <div class="card-img-overlay">
                        <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                        <p class="card-text et-card-date">
                            10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                        </p>
                        <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                        <a class="et-card-link" href="#" ></a>
                    </div>
                </div>
                                               
                <!-- Sidebar latest news small card -->
                <div class="card bg-dark text-white et-card">
                    <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                    <div class="card-img-overlay">
                        <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                        <p class="card-text et-card-date">
                            10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                        </p>
                        <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                        <a class="et-card-link" href="#" ></a>
                    </div>
                </div>
                                               
                <!-- Sidebar latest news small card -->
                <div class="card bg-dark text-white et-card">
                    <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                    <div class="card-img-overlay">
                        <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                        <p class="card-text et-card-date">
                            10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                        </p>
                        <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                        <a class="et-card-link" href="#" ></a>
                    </div>
                </div>
                                               
                <!-- Square ad -->                       
                <div class="card mb-4 et-card-ad">
                    <img class="card-img" src="img/300x250.png" alt="">
                </div>               
                                                
            </div>
            <!-- ####### End of Right sidebar ####### -->
               
            <!-- Vertical ad -->
            <img class="mx-auto et-ad-vertical" src="img/728x90.png" alt="">
                
        </div>
    </div>
    <!-- ####### End of Content ####### -->
    

<?php require_once("footer.php"); ?>