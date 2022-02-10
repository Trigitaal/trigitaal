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

<?php
        // are there any posts in the DB?
        if ( have_posts() ) {
          while( have_posts() ) {
            the_post();

            if( has_post_thumbnail() ) {
              the_post_thumbnail(
                'medium',
                array(
                  'class' => 'img-fluid'
                )
              );
            }
            ?>
                <section class="one-column">
                    <div class="container">  
                        <div class="row">
                            <div class="col-md-8 offset-md-2 mt-1 mb-5">
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <h1><?php the_title();?></h1>
                                    <p><?php the_content();?></p>
                                </article>
                            </div>
                        </div>
                    </div>
                    </section>
            <?php
          }
        } 
      ?>

    <section class="one-column block-background-grey">
        <div class="container">  
            <div class="row">
                <div class="col-md-8 offset-md-2 mt-5 mb-5">
                    <h2>Dit kun je verwachten</h2>
                        <p>De online strategie van organisaties naar een hoger plan brengen. Kennis van communicatie én ICT met elkaar verbinden. Dat zijn sterke pijlers van Trigitaal. Samen met opdrachtgevers bekijk ik hoe we de kansen van online (nog) beter kunnen benutten. Welke concrete acties er nodig zijn. Of we nu werken aan een nieuwe website, webapplicatie, social intranet, online tool of vorm van online marketing: ik waarborg alle processen die dan om de hoek komen kijken.</p>
                        <p>De online strategie van organisaties naar een hoger plan brengen. Kennis van communicatie én ICT met elkaar verbinden. Dat zijn sterke pijlers van Trigitaal. Samen met opdrachtgevers bekijk ik hoe we de kansen van online (nog) beter kunnen benutten. Welke concrete acties er nodig zijn. Of we nu werken aan een nieuwe website, webapplicatie, social intranet, online tool of vorm van online marketing: ik waarborg alle processen die dan om de hoek komen kijken.</p>

                </div>
                </div>   
        </div>
    </section>
    <?php get_footer(); ?>