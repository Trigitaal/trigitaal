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

<main>
    <section class="brandbox">
        <div class="container">  
            <div class="row align-items-center mt-5">
                <div class="col-md-5">
                    <?php $image = get_field('hero_image'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
                </div>
                    <div class="col-md-7">  
                        <div class="row brandboxtitle">
                            <h1><?php the_field('hero_title'); ?></h1>
                        </div>
                        <div class="row mt-1">
                            <h2><?php the_field('hero_subtitle'); ?></h2>
                        </div>
                        <div class="row mt-1">
                            <?php the_field('hero_text');?>
                        </div>
                    </div>
            </div>       
        </div>
    </section>

    <div class="row content">
    <?php the_content();?>
    </div>

    
</main>

<?php get_footer(); ?>