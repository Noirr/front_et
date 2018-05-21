<?php require_once("header.php"); ?> 
 

 <?php 
 
 if( $_GET["action"] == "new_mem" )
 {
    printuj( $_POST ); 
    printuj( $_FILES );
 }
 
 ?>




 <!-- Page header -->
    <div class="container px-xl-0">
        <h1 class="text-uppercase et-section-title">Twój panel</h1>
    </div>
    
    <!-- ####### Content ####### -->
    <div class="container px-xl-0">          
        <div class="row">
                

            <?php require_once("templates/sidebar-left.php"); ?>
            



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