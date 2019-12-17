<?php
/**
 * Daario functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Daario
 */

if ( ! function_exists( 'daario_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function daario_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Daario, use a find and replace
		 * to change 'daario' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'daario', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*add_theme_support( 'custom-logo' );*/
		add_theme_support( 'custom-logo', array(
			'height'      => 60,
			'width'       => 165,
		) );
		add_theme_support( 'background-img', array(
			'height'      => 60,
			'width'       => 165,
		) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'daario' ),
		) );

		// This theme uses wp_nav_menu() in one location. this is menu-2(Pages)
		register_nav_menus( array(
			'menu-2' => esc_html__( 'Second Menu', 'daario' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'daario_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		/*
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );*/
	}
endif;
add_action( 'after_setup_theme', 'daario_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function daario_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'daario_content_width', 640 );
}
add_action( 'after_setup_theme', 'daario_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function daario_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-1', 'daario' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'daario' ),
		'before_widget' => '<div class="footer_link">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-2', 'daario' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'daario' ),
		'before_widget' => '<div class="footer_link">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-3', 'daario' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'daario' ),
		'before_widget' => '<div class="footer_link">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'daario_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function daario_scripts() {
	wp_enqueue_style( 'daario-style', get_stylesheet_uri() );

	wp_enqueue_script( 'daario-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'daario-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/***********************custom-js &css*****************************************/
    /************mychanges***********/
	// boostrap css file.
	
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0' );
	
	wp_enqueue_style( 'font-awesome', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700', array(), '1.0' );

	wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0' );
	

	wp_enqueue_style( 'owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0' );
	
	wp_enqueue_style( 'owl_theme_default', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '1.0' );
	
	wp_enqueue_style( 'progressbar', get_template_directory_uri() . '/assets/css/progressbar.css', array(), '1.0' );
	
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' );
	
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0' );

	
/**********scripts********/
// jquery file.
	wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', '20151215', true, '' );
	wp_enqueue_script( 'jquery' );

	
	wp_enqueue_script(
		'bootstrap_js',
		get_template_directory_uri() . '/assets/js/bootstrap.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_script(
		'menu',
		get_template_directory_uri() .'/assets/js/menu.js',
		array(),
		'20151215',
		true
	);
	wp_enqueue_script(
		'modernizr',
		get_template_directory_uri() .'/assets/js/modernizr.js',
		array(),
		'20151215',
		true
	);
	wp_enqueue_script(
		'progressbar',
		get_template_directory_uri() .'/assets/js/progressbar.js',
		array(),
		'20151215',
		true
	);
	wp_enqueue_script(
		'owl_carousel',
		get_template_directory_uri() .'/assets/js/owl.carousel.js',
		array(),
		'20151215',
		true
	);
	wp_enqueue_script(
		'jquery_gallery',
		get_template_directory_uri() .'/assets/js/jquery.gallery.js',
		array(),
		'20151215',
		true
	);
	wp_enqueue_script(
		'custom',
		get_template_directory_uri() .'/assets/js/custom.js',
		array(),
		'20151215',
		true
	);
	wp_enqueue_script(
		'wow.min',
		get_template_directory_uri() .'/assets/js/wow.min.js',
		array(),
		'20151215',
		true
	);
	
	wp_enqueue_style( 'font-awesome', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700', array(), '1.0' );

	wp_enqueue_style( 'font-awesome_min', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0' );
	
    /*********************/
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'daario_scripts' );

/****************add categories********************/

function add_custom_categories(){

wp_insert_term(
		    'HBBIES',
			'category',
			array(
			'slug' => 'hobbies')
			);
wp_insert_term(
		    'BEAUTY',
			'category',
			array(
			'slug' => 'beauty')
			);
}
add_action('after_switch_theme' , 'add_custom_categories' );


/**
 * Create pages at theme activation
 */

function create_page_for_theme() {
	$page_titles = array( 'Home', 'About', 'Services', 'Team', 'Blog', 'Faq', 'Comming Soon','error','Contact' );
	$page_slugs  = array( 'home', 'about', 'services', 'team', 'blog', 'faq','commingsoon','contact' );
	$page_content  = '';
	$page_template = 'page.php';
	$page_excerpt  = '';
	$count_page_titles = count( $page_titles );
	for ( $i = 0; $i < $count_page_titles; $i++ ) {
		$page_title = __( $page_titles[ $i ], 'semple_psd' );
		$page_search = get_page_by_title( $page_title );
		$new_page = array(
			'post_type'    => 'page',
			'post_title'   => $page_title,
			'post_content' => $page_content,
			'post_status'  => 'publish',
			'post_author'  => 0,
			'post_slug'    => $page_slugs[ $i ],
			'post_parent'  => 0,
			'post_excerpt' => $page_excerpt,
		);
		if ( ! isset( $page_search->ID ) ) {
			$page_id = wp_insert_post( $new_page );
			if ( ! empty( $page_template ) ) {
				if($page_title=='Home')
					update_post_meta( $page_id, '_wp_page_template','index.php' );
				update_post_meta( $page_id, '_wp_page_template', $page_template );
			}
		}
	}
	//return count( $page_titles );
}
add_action( 'after_switch_theme', 'create_page_for_theme' );

/**
 * Create posts of news category at theme activation
 */
function add_custom_menu1() {

		$page_titles = array( 'Home', 'About', 'Services', 'Team', 'Blog' );
		$menu_name   = 'Primary_menu';
		$menu_exist  = wp_get_nav_menu_object( $menu_name );
		if ( ! $menu_exist ) {
			$menu_id                    = wp_create_nav_menu( $menu_name );
			$locations                  = get_theme_mod( 'nav_menu_locations' );
			$locations['menu-1'] = $menu_id;
			/*$locations['menu_2'] = $menu_id;*/
			set_theme_mod( 'nav_menu_locations', $locations );
			foreach ( $page_titles as $page_title ) {
				$page = get_page_by_title( $page_title );
				if ( $page ) {
					wp_update_nav_menu_item(
						$menu_id,
						0,
						array(
							'menu-item-title'     => $page->post_title,
							'menu-item-object-id' => $page->ID,
							'menu-item-object'    => 'page',
							'menu-item-status'    => 'publish',
							'menu-item-type'      => 'post_type',
						)
					);
				}
			}
		}
	}
add_action( 'after_switch_theme', 'add_custom_menu1' );

function add_custom_menu2() {

		$page_titles = array( 'Faq', 'Comming Soon','error' );
		$menu_name   = 'Pages';
		$menu_exist  = wp_get_nav_menu_object( $menu_name );
		if ( ! $menu_exist ) {
			$menu_id                    = wp_create_nav_menu( $menu_name );
			$locations                  = get_theme_mod( 'nav_menu_locations' );
			$locations['menu-2'] = $menu_id;
			/*$locations['menu_2'] = $menu_id;*/
			set_theme_mod( 'nav_menu_locations', $locations );
			foreach ( $page_titles as $page_title ) {
				$page = get_page_by_title( $page_title );
				if ( $page ) {
					wp_update_nav_menu_item(
						$menu_id,
						0,
						array(
							'menu-item-title'     => $page->post_title,
							'menu-item-object-id' => $page->ID,
							'menu-item-object'    => 'page',
							'menu-item-status'    => 'publish',
							'menu-item-type'      => 'post_type',
						)
					);
				}
			}
		}
	}
add_action( 'after_switch_theme', 'add_custom_menu2' );


//*********ADMIN MENU FOR THEME SETTINGS**********/
/*function semple_theme_options_page() {

	add_menu_page(
		'Theme options page',
		'Theme_options',
		'manage_options',
		'Semple_Theme',
		'theme_options',
		'dashicons-edit',
		20
	);
	
}
add_action( 'admin_menu', 'semple_theme_options_page' );

function theme_options() {

	echo '<h1> Custom Fields Settings</h1>';
	
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Postype additions.
 */
require get_template_directory() . '/inc/custom-post_type-services.php';


/**
 * Custom Postype additions.
 */
require get_template_directory() . '/inc/custom-post_type-comments.php';


/**
 * Custom Postype additions.
 */
require get_template_directory() . '/inc/custom-post_type-members.php';

/**
 * Custom Postype additions.
 */
/*require get_template_directory() . '/inc/custom-post_type-blogs.php';


/**
 * Walkers class.
 */
require get_template_directory() . '/inc/bootstrap-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/******************FUNCTIONS FOR TEMPLATE FILES******************************/

function testonomials_carousel($page_ID){
	require get_template_directory() . '/template-parts/templates/testmonials_carousel.php';
}

function team($number_of_posts){
	require get_template_directory() . '/template-parts/templates/team.php';
}


function partners($page_ID){
	require get_template_directory() . '/template-parts/templates/partners.php';
}

function services(){
	require get_template_directory() . '/template-parts/templates/services.php';
}


function page_banner($page_ID){
	require get_template_directory() . '/template-parts/templates/page_banner.php';
}

// **********************FUNCTION FOR MENUS - TO CHANGE ATTRIBUTES****************************

class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( array_search( "menu-item-has-children", $item->classes ) ) {
            $output .= sprintf( "\n<li class='nav-item %s'><a href='%s' class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" >%s</a>\n", ( array_search( "current-menu-item", $item->classes ) || array_search( "current-page-parent", $item->classes ) ) ? 'dropdown' : '', $item->url, $item->title );
        } else {
            $output .= sprintf( "\n<li class='nav-item'><a class=\"nav-link\" href='%s'>%s</a>\n",$item->url, $item->title );
        }
    }

    function start_lvl( &$output,  $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"dropdown-menu wow fadeInUp sub-menu-animation animated\" role=\"menu\">\n";
    }
}

class Second_menu_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth=0, $args = array(), $id = 0 ) {
        
            $output .= sprintf( "\n<li><a href='%s' class=\"dropdown-item\" >%s</a>\n",$item->url, $item->title );
   
    }

}

/******************************************************************************
**********************CHANGES IN COMMENTS BOX********************************/

// Unset URL from comment form/

function crunchify_move_comment_form_below( $fields ) { 
    $comment_field = $fields['comment']; 
    unset( $fields['comment'] ); 
    $fields['comment'] = $comment_field; 
    return $fields; 
} 
add_filter( 'comment_form_fields', 'crunchify_move_comment_form_below' ); 

function comment_form_hide_cookies_consent( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}
add_filter( 'comment_form_fields', 'comment_form_hide_cookies_consent' );

// Add placeholder for Name and Email
/*
function modify_comment_form_fields($fields){
    $fields['Name'] = '<input id="author" placeholder="Name" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'
                ( $req ? '<span class="required">*</span>' : '' ) ;
    $fields['Email'] = '<input id="email" placeholder="Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  .
                ( $req ? '<span class="required">*</span>' : '' ) 
                 ;
    $fields['Phone'] ='<input id="phone" name="Phone" placeholder="Phone" type="text" value="' . esc_attr( $commenter['comment_author_phone'] ) . '" size="30" /> ';
    
    $fields['Message'] = '<textarea id="message" name="Message" placeholder="Message"  value="' . esc_attr( $commenter['comment_mesage'] ).'  cols="30" rows="10" required></textarea>';
    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');

/*class="dropdown-menu wow fadeInUp sub-menu-animation animated" aria-labelledby="navbarDropdownMenuLink" style="visibility: visible; animation-name: fadeInUp;"*/
 
// Add placeholder for Name and Email
/*
function modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                '<label for="author">' . __( 'Your Name' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )  .
                '</p>';
    $fields['email'] = '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  .
                '<label for="email">' . __( 'Your Email' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) 
                 .
                '</p>';
    $fields['url'] = '<p class="comment-form-url">' .
             '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
            '<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
               '</p>';
    
    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');*/

/**
 * Customize comment form default fields.
 * Move the comment_field below the author, email, and url fields.
 */
/*
function wpse250243_comment_form_default_fields( $fields ) {
    $commenter     = wp_get_current_commenter();
    $user          = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';
    $req           = get_option( 'require_name_email' );
    $aria_req      = ( $req ? " aria-required='true'" : '' );
    $html_req      = ( $req ? " required='required'" : '' );
    $html5         = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : false;

    $fields = [
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name CUSTOMIZED', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
        'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email CUSTOMIZED', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
        'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website CUSTOMIZED', 'textdomain'  ) . '</label> ' .
                    '<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment * CUSTOMIZED', 'noun', 'textdomain' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>',
    ];

    return $fields;
}
add_filter( 'comment_form_default_fields', 'wpse250243_comment_form_default_fields' );

/**
 * Remove the original comment field because we've added it to the default fields
 * using wpse250243_comment_form_default_fields(). If we don't do this, the comment
 * field will appear twice.
 *//*
function wpse250243_comment_form_defaults( $defaults ) {
    if ( isset( $defaults[ 'comment_field' ] ) ) {
        $defaults[ 'comment_field' ] = '';
    }

    return $defaults;
}
add_filter( 'comment_form_defaults', 'wpse250243_comment_form_defaults', 10, 1 );*/