            <!-- ####### Right sidebar ####### -->
            <div class="col-md-3">
                                               
                <!-- Horizontal ad -->                       
                <div class="card mb-4 et-card-ad">
                    <img class="card-img" src="img/300x600.png" alt="">
                </div>
                                              
                <!-- Sidebar latest news header -->
                <h2 class="text-uppercase et-sidebar-title">Newsy z ostatniej chwili</h2>


                <?php
                    
                    $news = $data->get_list( 'news', 5 );
                    if( !empty($news[0]) ){$card->show( $news[0] ); }
                    if( !empty($news[1]) ){$card->show( $news[1] ); }
                    if( !empty($news[2]) ){$card->show( $news[2] ); }
                    if( !empty($news[3]) ){$card->show( $news[3] ); }
                    if( !empty($news[4]) ){$card->show( $news[4] ); }
                    
                    
                ?>     

                                               
                <!-- Square ad -->                       
                <div class="card mb-4 et-card-ad">
                    <img class="card-img" src="img/300x250.png" alt="">
                </div>               
                                                
            </div>
            <!-- ####### End of Right sidebar ####### -->