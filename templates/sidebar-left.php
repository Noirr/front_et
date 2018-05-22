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
