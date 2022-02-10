<?php

/*
 Enqueue scripts and styles
*/

if ( !function_exists( 'tri_theme_setup' ) ) {

    /* Theme Setup */
  
    function tri_theme_setup() {
  
      load_theme_textdomain( 'trigitaal', get_template_directory() . '/languages' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
      add_theme_support(
        'html5',
        array(
          'search-form',
          'comment-form',
          'comment-list',
          'gallery',
          'caption'
        )
      );
      add_theme_support( 'customize-selective-refresh-widgets' );
      add_theme_support( 'responsive-embeds' );
  
      register_nav_menus(
        array(
          'primary'   =>  esc_html__( 'Primary Menu', 'trigitaal' )
        )
      );
    }
  }
  
  add_action( 'after_setup_theme', 'tri_theme_setup' );

function tri_assets() {

// Enqueue CSS Files
wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans:wght@400;500&family=Ubuntu:wght@200;300;400;500;700&display=swap', array(), '1.0', false );

wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'assets/css/bootstrap.min.css' ), array(), 'v5.1.1', false );

wp_enqueue_style( 'flaticon', get_theme_file_uri( 'assets/font/flaticon.css' ), array(), '1.0', false  );

// Main CSS File
wp_enqueue_style( 'trigitaal', get_stylesheet_uri(), array( 'bootstrap' ), '1.0', false  );

/*
  Enqueue JS Files
  Don't enqueue jQuery files it'll be loaded from WordPress when required.
*/

wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array(), 'v5.1.1', true );

wp_enqueue_script( 'trigitaal-js', get_theme_file_uri( 'assets/js/main-script.js' ), array( 'jquery', 'jquery-ui-core', 'jquery-ui-selectmenu' ), '1.0', true );


if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( 'comment-reply' );
}


}

add_action( 'wp_enqueue_scripts', 'tri_assets' );

// ACF custom block register

// Trigitaal 1 column block

function acf_tri_1_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a layout item block
		acf_register_block(array(
			'name'				=> 'tri-1-block',
			'title'				=> __('Trigitaal 1 column item'),
			'description'		=> __('A custom block for one column layout'),
			'render_template'	=> 'template-parts/blocks/tri-block-1/block-tri-1.php',
			'category'			=> 'layout',
			'icon'				=> 'columns',
			'keywords'			=> array( 'one column' ),
		));
	}
}

add_action('acf/init', 'acf_tri_1_block');


// Trigitaal 2 column block

function acf_tri_2_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a layout item block
		acf_register_block(array(
			'name'				=> 'tri-2-block',
			'title'				=> __('Trigitaal 2 column item'),
			'description'		=> __('A custom block for 2 column layout'),
			'render_template'	=> 'template-parts/blocks/tri-block-2/block-tri-2.php',
			'category'			=> 'layout',
			'icon'				=> 'columns',
			'keywords'			=> array( 'two columns' ),
		));
	}
}

add_action('acf/init', 'acf_tri_2_block');
