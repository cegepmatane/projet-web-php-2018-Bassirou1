<?php
/**
 * Keeway Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Keeway_Lite
 */

if ( ! function_exists( 'keeway_lite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function keeway_lite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Keeway Lite, use a find and replace
		 * to change 'keeway-lite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'keeway-lite', get_template_directory() . '/languages' );

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
		add_image_size( 'keeway_lite_image_850_530', 850,530, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'keeway-lite' ),
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
		add_theme_support( 'custom-background', apply_filters( 'keeway_lite_custom_background_args', array(
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
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
	add_editor_style( array( 'css/editor-style.css', keeway_lite_google_fonts_url() ) );
endif;
add_action( 'after_setup_theme', 'keeway_lite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function keeway_lite_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'keeway_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'keeway_lite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function keeway_lite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'keeway-lite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'keeway-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'keeway_lite_widgets_init' );


/**
 * Register google fonts
 */
function keeway_lite_google_fonts_url() {
	$fonts_url = '';
	
	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$open_sans = esc_html_x( 'on', 'Open Sans: on or off', 'keeway-lite' );


	
	/* Translators: If there are characters in your language that are not
	* supported by Muli, translate this to 'off'. Do not translate
	* into your own language.
	*/
	
	$muli = esc_html_x( 'on', 'Muli font: on or off', 'keeway-lite' );
	
	if ( 'off' !== $open_sans || 'off' !== $muli ) {
	$font_families = array();
	 
	if ( 'off' !== $open_sans ) {
	$font_families[] = 'Open+Sans:300,400,600,700';

	}
	
	if ( 'off' !== $muli ) {
	$font_families[] = 'Muli:400,500,600,700';
	}	
	 
	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'latin,latin-ext' ),
	);

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );	
}

/**
 * Enqueue scripts and styles.
 */
function keeway_lite_scripts() {
	
	wp_enqueue_style( 'keeway-lite-google-fonts', keeway_lite_google_fonts_url(), array(), null );	
	
	wp_enqueue_style('bootstrap' , get_template_directory_uri(). '/css/bootstrap.css');	
	
	wp_enqueue_style('meanmenu' , get_template_directory_uri(). '/css/meanmenu.css');	
	
	wp_enqueue_style('font-awesome' , get_template_directory_uri(). '/fonts/font-awesome.css');	
	
	wp_enqueue_style('themify-icons' , get_template_directory_uri(). '/fonts/themify-icons.css');	
	
	wp_enqueue_style( 'keeway-lite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );
	
	wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array(), '20151215', true );
	
	wp_enqueue_script( 'keeway-lite-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'keeway_lite_scripts' );

function keeway_lite_main_menu() {
		wp_nav_menu( array(
		'theme_location'    => 'menu-1',
		'depth'             => 5,
		'container'         => false,
		'menu_class'        => 'nav navbar-nav navbar-right',
		
		)
	); 	
}

function keeway_lite_mobile_menu() {
		wp_nav_menu( array(
		'theme_location'    => 'menu-1',
		'depth'             => 5,
		'container'         => false,
		'menu_class'        => ' ',

		)
	); 	
}

// Modify search widget
function keeway_lite_my_search_form( $form ) {
	$form = '
		
			
			<form role="search" method="get" id="searchform" class="searchform" action="' . esc_url(home_url( '/' )) . '" >
				<div class="input-group">
					<input type="text" value="' . esc_attr(get_search_query()) . '" name="s" id="s" class="form-control search_field" placeholder="' . esc_attr__('Enter Keyword ...' , 'keeway-lite') .'">
					<span class="input-group-btn">
						<button class="btn btn-default search_btn" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			
		
        ';
	return $form;
}
add_filter( 'get_search_form', 'keeway_lite_my_search_form' );

// comment list modify

function keeway_lite_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<div class="single_comment">
		<div class="media">
			<div class="comment_avatar">
				<?php echo get_avatar( $comment, 70 ); ?>
			</div>

			<div class="media-body text-left comment_single">
				
				<h5 class="media-heading"><?php comment_author_link() ?> 
				
				<div class="creply_link"> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div><br><br><span><?php echo esc_html(''); echo esc_html(get_comment_date('F j, Y')); ?> <?php echo esc_html(get_comment_date('g:i')); ?></span> </h5>
				
				<?php if ($comment->comment_approved == '0') : ?>
				<p><em><?php esc_html_e('Your comment is awaiting moderation.','keeway-lite'); ?></em></p>
				<?php endif; ?>
				 <?php comment_text(); ?>							
			</div>
		</div>
	</div>				
</li>


<?php } 

// comment box title change
add_filter( 'comment_form_defaults', 'keeway_lite_remove_comment_form_allowed_tags' );
function keeway_lite_remove_comment_form_allowed_tags( $defaults ) {

	$defaults['comment_notes_after'] = '';
	$defaults['comment_notes_before'] = '';
	return $defaults;

}

function keeway_lite_comment_reform ($arg) {

$arg['title_reply'] = esc_html__('Write your comment Here','keeway-lite');
$arg['comment_field'] = '<div class="row"><div class="form-group col-md-12"><textarea id="comment" class="comment_field form-control" name="comment" cols="77" rows="3" placeholder="'. esc_attr__("Write your Comment", "keeway-lite").'" aria-required="true"></textarea></div></div>';


return $arg;

}
add_filter('comment_form_defaults','keeway_lite_comment_reform');

// comment form modify

function keeway_lite_modify_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
	$req	   = get_option( 'require_name_email' );

	$fields['author'] = '<div class="row"><div class="form-group col-md-4"><input type="text" name="author" id="author" value="'. esc_attr( $commenter['comment_author'] ) .'" placeholder="'. esc_attr__("Your Name *", "keeway-lite").'" size="22" tabindex="1"'. ( $req ? 'aria-required="true"' : '' ).' class="input-name form-control" /></div>';

	$fields['email'] = '<div class="form-group col-md-4"><input type="text" name="email" id="email" value="'. esc_attr( $commenter['comment_author_email'] ) .'" placeholder="'.esc_attr__("Your Email *", "keeway-lite").'" size="22" tabindex="2"'. ( $req ? 'aria-required="true"' : '' ).' class="input-email form-control"  /></div>';
	
	$fields['url'] = '<div class="form-group col-md-4"><input type="text" name="url" id="url" value="'. esc_attr( $commenter['comment_author_url'] ) .'" placeholder="'. esc_attr__("Website", "keeway-lite").'" size="22" tabindex="2"'. ( $req ? 'aria-required="false"' : '' ).' class="input-url form-control"  /></div></div>';

	return $fields;
}
add_filter('comment_form_default_fields','keeway_lite_modify_comment_form_fields');


function keeway_lite_wp_kses($val){
	return wp_kses($val, array(
	
	'p' => array(),
	'span' => array(),
	'div' => array(),
	'strong' => array(),
	'em' => array(),
	'b' => array(),
	'br' => array(),
	'h1' => array(),
	'h2' => array(),
	'h3' => array(),
	'h4' => array(),
	'h5' => array(),
	'h6' => array(),
	'i'=> array('class' => array(),'id' => array()),
	'a'=> array('href' => array(),'target' => array()),
	'iframe'=> array('src' => array(),'height' => array(),'width' => array()),
	
	), '');
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

require get_template_directory() . '/inc/trt-customizer-pro/class-customize.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

