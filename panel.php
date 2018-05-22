<?php require_once("header.php"); ?>


 <?php

 if( $_GET["action"] == "new_mem" )
 {
     $data = new DATA;
     $data->create_post($_POST, $_FILES);
 }

 ?>




 <!-- Page header -->
    <div class="container px-xl-0">
        <h1 class="text-uppercase et-section-title">Twój panel</h1>
    </div>

    <!-- ####### Content ####### -->
    <div class="container px-xl-0">
        <div class="row">


            <?php // require_once("/templates/sidebar-left.php"); ?>


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

                <?php
                $card = new CARD;
                    $video = $data->get_list( 'video', 5 );
                     if( !empty($video[0]) ){$card->show( $video[0] ); }
                     if( !empty($video[1]) ){$card->show( $video[1] ); }
                     if( !empty($video[2]) ){$card->show( $video[2] ); }
                     if( !empty($video[3]) ){$card->show( $video[3] ); }
                     if( !empty($video[4]) ){$card->show( $video[4] ); }
                ?>


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

                    <li class="nav-item <?php if($_GET["panel"]=="new"){echo 'et-menu-active'; } ?>">
                        <a class="nav-link  "
                        href="?panel=new">Dodaj mema</a>
                    </li>
                    <li class="nav-item <?php if($_GET["panel"]=="history"){echo 'et-menu-active'; } ?>">
                        <a class="nav-link "
                        href="?panel=history">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?logout=true">Wyloguj się</a>
                    </li>

                </ul>

                <!-- Accepted memes -->
                <a class="et-history-memes et-history-memes-active" href="?panel=history&status=accepted">Memy zaakceptowane</a>

                <!-- Rejected memes -->
                <a class="et-history-memes" href="?panel=history&status=rejected">Memy odrzucone</a>



                 <?php

                    if( $_GET["panel"] == "history" )
                    {
                        require_once("templates/history-content.php");
                    }else{
                        require_once("templates/new-content.php");
                    }

                 ?>


            </div>
            <!-- ####### End of Panel ####### -->
            <?php require_once("templates/sidebar-right.php"); ?>


            <!-- Vertical ad -->
            <img class="mx-auto et-ad-vertical" src="img/728x90.png" alt="">

        </div>
    </div>
    <!-- ####### End of Content ####### -->



    <?php require_once("footer.php"); ?>
