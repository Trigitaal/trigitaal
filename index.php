<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trigitaal
 * @since 1.0
 */

get_header();
?>

<section class="blog block-background-grey pt-5 pb-5">
    <div class="container">
        <h3>Blog</h3>
        <div class="row mt-5">

            <?php
                // are there any posts in the DB?
                if ( have_posts() ) {
                while( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content', 'excerpt' );
                }
                //   b2w_pagination();
                } 
            ?>    

        </div>
    </div>
</section>

<?php get_footer(); ?>