<?php

if ( ! function_exists( 'cheerstheme_setup' ) ) :
	function cheerstheme_setup() {

		load_theme_textdomain( 'cheerstheme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'cheerstheme' ),
				'menu-social'   =>  'Social Menu',
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'cheerstheme_setup' );

function cheerstheme_scripts() {
	wp_enqueue_style( 'cheerstheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style(
		'cheerstheme-style-google-font',
		'https://fonts.googleapis.com/css2?family=Asul:wght@400;700',
		array(),
		null
	);
	wp_style_add_data( 'cheerstheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cheerstheme-toggle', get_template_directory_uri() . '/js/nav-menu.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'cheerstheme_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cheerstheme_scripts' );

// Change post order in FAQ page
add_action( 'pre_get_posts', 'change_loop_sort_order' );
function change_loop_sort_order( $query ) {
    if ( $query->is_archive() ) {
		$query->set( 'order', 'ASC' );
	  }
}

// Add page slug to body class
function pine_add_page_slug_body_class( $classes ) {
    global $post;

    if ( isset( $post ) ) {
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}

add_filter( 'body_class', 'pine_add_page_slug_body_class' );
