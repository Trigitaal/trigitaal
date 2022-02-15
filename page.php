<?php

/**
 * The page template file
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
            <section>   
            <div class="container content-offset">
              <div class="col-md-8 offset-md-2 mt-1 mb-1">
                <div>        
                  <h1><?php the_title();?></h1>
                </div>
              </div>
            </div>
          </section>
            <div class="content">
            <?php the_content();?> 
          </div>
              
                    
            <?php
          }
        } 
      ?>

<?php 

if( is_page( 2 ) ) {

?>
  
<section class="cases block-background-grey pt-5 pb-5">
    <div class="container">
        <h3>Cases</h3>
        <div class="row mt-5">
            <div class="col-lg-4 mb-5">
                <div class="card">
                  <div class="card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/boog-c.png" alt="" class="cases-card-img-top">
                  </div>                      
                    <div class="cases-card-body">
                       <div class="card-title"><h2>Ontwikkeling multi-sites</h2></div>
                        <div class="card-text"><p>Organisaties hebben vaak meer dan één website. Bijvoorbeeld scholengroepen met diverse locaties, grootschalige zorgorganisaties, multinationals met websites per land of taal of productleveranciers met meerdere merken. Of denk aan een intranet, klantenportaal, gebruikersomgeving of werkenbij-website. Zulke projecten zijn complex en omvangrijk. Door mijn ervaring met tientallen van deze projecten leid ik ze snel in goede banen.</p>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card">
                <div class="card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/boog-c.png" alt="" class="cases-card-img-top">
                  </div> 
                    <div class="cases-card-body">
                       <div class="card-title"><h2>Herstart van social intranet</h2></div>
                        <div class="card-text"><p>Een basisonderwijsgroep met 40 scholen liep vast in de verdere ontwikkeling van een social intranet. Dat kwam door een complexe software-update en veranderingen in personeel. Jammer, want de behoefte naar het intranet van het schoolpersoneel was groot, net als de inspanningen van de leverancier. Ik sprong bij door na enkele goede gesprekken een route uit te stippelen met concrete stappen. Die leidden tot een ‘social intranet in beweging’.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card">
                <div class="card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/boog-c.png" alt="" class="cases-card-img-top">
                  </div> 
                    <div class="cases-card-body">
                       <div class="card-title"><h2>Advies mobiele webapplicatie</h2></div>
                        <div class="card-text"><p>Zorgopleiders laagdrempelig en toegankelijk van de juiste informatie voorzien in een praktijksituatie. Dat was de wens van de opdrachtgever: een opleidingsinstituut in de zorg. Om tot een concept te komen voor de mobiele webapplicatie begeleidde ik een aantal design sprints. Kern van de oplossing waren een digitale vragenboom en ‘swipeable’ post-its voor een compacte en eenvoudige weergave op mobiel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>

<?php
get_footer();
?>
