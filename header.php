<?php
/**
 * The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trigitaal
 * @since trigitaal 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon_trigitaal.ico" type="image/x-icon">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8XCJXV88VM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8XCJXV88VM');
    </script>
    
    <?php wp_head(); ?>

    <title>Trigitaal - Homepage</title>
</head>
<body <?php body_class(); ?>>  
  

    <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-5">
    <div class="container">
    <div class="navbar-brand">   
                <a href="https://www.trigitaal.nl/" class="logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo-trigitaal.svg" alt="logo">
                </a>
            </div>      
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">

            <?php

                wp_nav_menu(
                    array(
                    'theme_location'    =>  'primary', // as registered in functions.php
                    'depth'             =>   1, // as we set up in our CSS
                    'container'         =>  'nav', // html wrapper of the menu ul
                    'container_class'   =>  'navbar-light', // wrapper class
                    'menu_class'        =>  'navbar-nav nav-item nav-link a navlink a:hover', // classes of the menu ul tag
                    'list_item_class'   =>  'nav-item',
                    'link_class'        =>  'nav-link a navlink a:hover',
                    'fallback_cb'       =>  false // if primary menu is not created, then show nothing
                    )
                );

            ?> 
        </div>             
    </nav> 
