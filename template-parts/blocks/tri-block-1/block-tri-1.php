<?php

$title_one = get_field( 'title_one' );
$text_one = get_field( 'text_one' );

$background_color_one = get_field( 'background_color_one' );
$background_style = "";

if ($background_color_one)
    $background_style = 'block-background-grey';

?>
    <section class="one-column <?php echo $background_style; ?>"> 
        <div class="container">
            <div class="col-md-8 offset-md-2 pt-2 mt-1 mb-3"> 
                 <div class="row"> 
                     <?php if( !empty( $title_one ) ) 
                        echo '<h2>'.$title_one. '</h2>'; ?>
                    <?php if( !empty( $text_one ) ) 
                        echo '<p>'.$text_one. '</p>'; ?>
                        
                </div>
            </div> 
        </div>
    </section>