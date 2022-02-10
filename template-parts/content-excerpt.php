<?php
/**
 * Standard Excerpt Template
 *
 * @package trigitaal
 * @since 1.0
 */
?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
<div class="col-lg-4 mb-5">
    <div class="card">
        <div class="card-img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/programmeercode.jpg" alt="" class="card-img-top">
        </div>
        <div class="card-body">
            <div class="card-date"><h4><?php echo get_the_date( 'M d, Y' ); ?></h4></div>
            <div class="card-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div> 
            <div class="card-text"><class="excerpt"><?php force_balance_tags( the_excerpt() ); ?></p></div>
            <div><a href="<?php the_permalink(); ?>">Lees verder</a></div>
        </div>
    </div>
</div>
<!-- </article> -->