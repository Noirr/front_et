
<?php 

$data = new DATA;
                     $front = new FRONT;
                     $card = new CARD;
                     $ads = new ADS;
                     $status = "publish";
                     $page = 1;
                     if( !empty($_GET["page"]) )
                     {
                         $page = $_GET["page"];
                     }
                     if( $_GET["status"] == "rejected" )
                     {
                         $status = "draft";
                     }
                     $memy = $data->get_list( 'mem', 5, $page, $status );
                 
                     $card->show( $memy[0] ); 
                     $card->show( $memy[1] ); 
                     $card->show( $memy[2] ); 
                     $card->show( $memy[3] ); 
                     $card->show( $memy[4] ); 

?>