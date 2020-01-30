<?php 
/**
 *Beri_cafe functions and definitions
 *
 * @packageBeri_cafe
 */
 global $content_width;
 if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */ 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'Beri_cafe_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function Beri_cafe_setup() {
	load_theme_textdomain( 'Beri_cafe', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 125,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'Beri_cafe' ),
		'footermenu' => esc_html__( 'Footer Menu', 'Beri_cafe' ),				
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // Beri_cafe_setup
add_action( 'after_setup_theme', 'Beri_cafe_setup' );
function Beri_cafe_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'Beri_cafe' ),
		'description'   => esc_html__( 'Appears on blog page sidebar', 'Beri_cafe' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title titleborder"><span>',
		'after_title'   => '</span></h3><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) ); 	
	
}
add_action( 'widgets_init', 'Beri_cafe_widgets_init' );
function Beri_cafe_font_url(){
		$font_url = '';		
		/* Translators: If there are any character that are not
		* supported by Roboto Condensed, trsnalate this to off, do not
		* translate into your own language.
		*/
		$robotocondensed = _x('on','Roboto Condensed:on or off','Beri_cafe');		
		/* Translators: If there has any character that are not supported 
		*  by Scada, translate this to off, do not translate
		*  into your own language.
		*/
		$scada = _x('on','Scada:on or off','Beri_cafe');	
		$lato = _x('on','Lato:on or off','Beri_cafe');	
		$roboto = _x('on','Roboto:on or off','Beri_cafe');
		$opensans = _x('on','Open Sans:on or off','Beri_cafe');
		$assistant = _x('on','Assistant:on or off','Beri_cafe');
		$lora = _x('on','Lora:on or off','Beri_cafe');
		$pattaya = _x('on','Pattaya:on or off','Beri_cafe');
		$marcellus = _x('on','Marcellus:on or off','Beri_cafe');
		
		if('off' !== $robotocondensed ){
			$font_family = array();
			if('off' !== $robotocondensed){
				$font_family[] = 'Roboto Condensed:300,400,600,700,800,900';
			}
			if('off' !== $lato){
				$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
			}
			if('off' !== $roboto){
				$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
			}
			if('off' !== $opensans){
				$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
			}	
			if('off' !== $assistant){
				$font_family[] = 'Assistant:200,300,400,600,700,800';
			}	
			if('off' !== $lora){
				$font_family[] = 'Lora:400,400i,700,700i';
			}			
			if('off' !== $pattaya){
				$font_family[] = 'Pattaya:400';
			}	
			if('off' !== $marcellus){
				$font_family[] = 'Marcellus:400';
			}										
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
	return $font_url;
	}
function Beri_cafe_scripts() {
	wp_enqueue_style('Beri_cafe-font', Beri_cafe_font_url(), array());
	wp_enqueue_style( 'Beri_cafe-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'Beri_cafe-editor-style', get_template_directory_uri()."/editor-style.css" );
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'Beri_cafe-main-style', get_template_directory_uri()."/css/responsive.css" );		
	wp_enqueue_style( 'Beri_cafe-base-style', get_template_directory_uri()."/css/style_base.css" );
	wp_enqueue_script( 'jquery-nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'Beri_cafe-custom-js', get_template_directory_uri() . '/js/custom.js' );	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'Beri_cafe_scripts' );


define('Beri_CAFE_Beri THEMES_URL','https://www.Beri themes.org/','Beri_cafe');
define('Beri_CAFE_Beri THEMES_PRO_THEME_URL','https://www.Beri themes.org/shop/Beri -shop-wordpress-theme','Beri_cafe');
define('Beri_CAFE_Beri THEMES_FREE_THEME_URL','https://www.Beri themes.org/shop/free-Beri_cafe-wordpress-theme','Beri_cafe');
define('Beri_CAFE_Beri THEMES_THEME_DOC','http://Beri themesdemo.net/documentation/cafe-pro-documentation/','Beri_cafe');
define('Beri_CAFE_Beri THEMES_LIVE_DEMO','https://Beri perfectdemo.com/demos/cafe/','Beri_cafe');
define('Beri_CAFE_Beri THEMES_THEMES','https://www.Beri themes.org/themes/','Beri_cafe');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

 
require get_template_directory() . '/inc/customizer.php';
// get slug by id
function Beri_cafe_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}
if ( ! function_exists( 'Beri_cafe_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function Beri_cafe_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function Beri_cafe_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_html(get_bloginfo( 'pingback_url' ) ));
	}
}
add_action( 'wp_head', 'Beri_cafe_pingback_header' );
add_filter( 'body_class','Beri_cafe_body_class' );
function Beri_cafe_body_class( $classes ) {
 	$hideslide = get_theme_mod('hide_slides', 1);
	if (!is_home() && is_front_page()) {
		if( $hideslide == '') {
			$classes[] = 'enableslide';
		}
	}
    return $classes;
}
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function Beri_cafe_custom_excerpt_length( $excerpt_length ) {
    return 19;
}
add_filter( 'excerpt_length', 'Beri_cafe_custom_excerpt_length', 999 );
/**
 *
 * Style For About Theme Page
 *
 */
function Beri_cafe_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_Beri_cafe_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'Beri_cafe-about-page-style', get_template_directory_uri() . '/css/Beri_cafe-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'Beri_cafe_admin_about_page_css_enqueue' );