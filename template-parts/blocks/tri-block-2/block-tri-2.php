<?php


$title_left = get_field( 'title_left' );
$text_left = get_field( 'text_left' );
$link_left = get_field( 'link_left' );
$image_left = get_field( 'image_left');
$image_sub_title_left = get_field( 'image_sub_title_left');

$title_right = get_field( 'title_right' );
$text_right = get_field( 'text_right' );
$link_right = get_field( 'link_right' );
$image_right = get_field( 'image_right');
$image_sub_title_right = get_field( 'image_sub_title_right');


$size = 'full'; // (thumbnail, medium, large, full or custom size)
$background_color = get_field( 'background_color' );
$background_style = "block-background-white";

if ($background_color)
    $background_style = 'block-background-grey';

    
?>
    <section twocolumns class="<?php echo $background_style; ?> pt-5 pb-5"> 
        <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3 mb-3 scroll-reveal">
            <?php 
                if( !empty( $title_left ) ) 
                echo '<h2>'.$title_left. '</h2>'; 
            
                if( !empty( $text_left ) ) 
                echo '<p>'.$text_left. '</p>'; 

                if( !empty($image_left )) 
                echo wp_get_attachment_image( $image_left, $size, "", ["class" => "img-fluid",""] );

                if( !empty( $image_sub_title_left ) ) 
                echo '<h4>'.$image_sub_title_left. '</h4>'; 

                if( !empty( $link_left ) ) 
                echo '<a href='.$link_left.' class="link"'.'>Lees verder'.'</a>';  
                ?>
            </div>
            <div class="col-md-6 mt-3 mb-3 scroll-reveal">                               
                <?php 
                if( !empty( $title_right ) ) 
                echo '<h2>'.$title_right. '</h2>'; 
            
                if( !empty( $text_right ) ) 
                echo '<p>'.$text_right. '</p>'; 

                if( !empty($image_right )) 
                echo wp_get_attachment_image( $image_right, $size, "", ["class" => "img-fluid",""] );


                if( !empty( $image_sub_title_right ) ) 
                echo '<h4>'.$image_sub_title_right. '</h4>'; 

                if( !empty( $link_right ) ) 
                echo '<a href='.$link_right.' class="link"'.'>Lees verder'.'</a>';  
                ?>
                
                </div>
        </div>        
            </div>
</section> 