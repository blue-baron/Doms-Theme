<?php
//BASIC FUNCTIONS TEMPLATE - DOMS CODE
	
    // Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function theme_setup() {
		load_theme_textdomain( 'html5reset', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );	
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( "custom-background" );
		add_theme_support( 'custom-header' );  		
		register_nav_menus( array(
      						'primary-menu' => __( 'Primary Menu' ),
      						'secondary-menu' => __( 'Secondary Menu' )) );
	}
	add_action( 'after_setup_theme', 'theme_setup' );
		
    // WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_wp_title( $title, $sep ) {
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
		// Add the site name.
		$title .= get_bloginfo( 'name' );
	
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'html5reset' ), max( $paged, $page ) );
	
		return $title;
	}
	add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );
	
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}
	
    // Register and Enqueue Scripts
	// Load Scripts
	function register_my_scripts() {
  		wp_deregister_script('jquery');  
  		wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js", array(),'2.1.0',false);
  		wp_register_script('modernizer', get_template_directory_uri()."/bower_components/modernizr/modernizr.js",array(),'2.7.1', false);
  		wp_register_script('foundation', get_template_directory_uri()."/bower_components/foundation/js/foundation.min.js", array('jquery'),'5.1.1',true); 
		wp_register_script('apps', get_template_directory_uri()."/js/min/app-min.js", array('jquery'),'1.3.15',true); 
  		wp_enqueue_script(array('jquery','modernizer','foundation', 'apps'));
	}
	add_action('wp_print_scripts','register_my_scripts');
	
	// Load Styles
	function register_my_styles(){
  		wp_register_style('reset', get_template_directory_uri()."/bower_components/foundation/css/normalize.css",array(),'5.1.1','screen');
  		wp_register_style('main', get_template_directory_uri()."/style.css",array(),'2.7','all');  
    	wp_register_style('foundation', get_template_directory_uri()."/css/app.css",array('main'),'5.1.1','screen');

  		wp_enqueue_style(array('reset','main','foundation'));
	}
	add_action('wp_print_styles', 'register_my_styles');


	// remove junk from head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

	
	// Widgets
	if ( function_exists('register_sidebar' )) {
		function html5reset_widgets_init() {
			register_sidebar( array(
				'name'          => __( 'Sidebar Widgets', 'html5reset' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'html5reset_widgets_init' );
	}

	
	// Remove Query strings from Static Resources.
	function _remove_script_version( $src ){
    	$parts = explode( '?', $src );
    	return $parts[0];
		}
		add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
		add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
		
	// Turn off admin bar for frontend of site.
	show_admin_bar( false );
	
	
	// enable threaded comments
	function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
	}
	add_action('get_header', 'enable_threaded_comments');
	
	
	//Max Content_width (required)
	if ( ! isset( $content_width ) ) {
	$content_width = 1500;
	}
	
	
	// Replaces the excerpt "more" text by a link
	function new_excerpt_more($more) {
    	global $post;
		return '<a class="moretag" href="'. get_permalink($post->ID) . '">  ...Read the full article...</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
?>