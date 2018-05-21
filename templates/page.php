
<?php 
    $data = new DATA;
    $front = new FRONT;
    $card = new CARD;
    $ads = new ADS;

    $slug = $_GET["site"];
    $obj = $data->get_site_by_slug($slug);

?>


    <!-- ####### Content ####### -->
    <div class="container px-xl-0">          
        <div class="row">
               
                <!-- ####### Main content ####### -->
                <div class="col-md-9">
                   
                    <div class="et-single-post">
                        
                        <!-- Post title -->
                        <h1 class="et-single-post-title"><?php echo $obj["title"]["rendered"]; ?></h1>
                        
                        <!-- Post content -->
                        <p class="et-single-post-content">
                        <?php echo $obj["content"]["rendered"]; ?>
                        </p>

                    </div>

                </div>
                <!-- ####### End of Main content ####### -->

                <!-- ####### Right sidebar ####### -->
                <div class="col-md-3">
                   
                    <div class="et-single-post">
                        
                        <!-- Facebook -->                       
                        <div class="card mb-4 et-card-ad">
                            <img class="card-img" src="img/fb.png" alt="">
                        </div>

                        <!-- Square ad -->                       
                        <div class="card mb-4 et-card-ad">
                            <img class="card-img" src="img/300x250.png" alt="">
                        </div>
                    
                    </div>             

                </div>
                <!-- ####### End of Right sidebar ####### -->

                <!-- Vertical ad -->
                <img class="mx-auto et-ad-vertical" src="img/728x90.png" alt="">
      
        </div>
    </div>
    <!-- ####### End of Content ####### -->