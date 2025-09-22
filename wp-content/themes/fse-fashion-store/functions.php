<?php
/**
 * FSE Fashion Store functions and definitions
 *
 * @package fse_fashion_store
 * @since 1.0
 */

if ( ! function_exists( 'fse_fashion_store_support' ) ) :
	function fse_fashion_store_support() {

		load_theme_textdomain( 'fse-fashion-store', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

		/* Theme Credit link */
		define('FSE_FASHION_STORE_BUY_NOW',__('https://www.cretathemes.com/products/fashion-wordpress-theme','fse-fashion-store'));
		define('FSE_FASHION_STORE_PRO_DEMO',__('https://pattern.cretathemes.com/fse-fashion-store/','fse-fashion-store'));
		define('FSE_FASHION_STORE_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-fashion-store/','fse-fashion-store'));
		define('FSE_FASHION_STORE_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-fashion-store/','fse-fashion-store'));
		define('FSE_FASHION_STORE_SUPPORT',__('https://wordpress.org/support/theme/fse-fashion-store','fse-fashion-store'));
		define('FSE_FASHION_STORE_REVIEW',__('https://wordpress.org/support/theme/fse-fashion-store/reviews/#new-post','fse-fashion-store'));
		define('FSE_FASHION_STORE_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','fse-fashion-store'));
		define('FSE_FASHION_STORE_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','fse-fashion-store'));

	}
endif;

add_action( 'after_setup_theme', 'fse_fashion_store_support' );

if ( ! function_exists( 'fse_fashion_store_styles' ) ) :
	function fse_fashion_store_styles() {
		// Register theme stylesheet.
		$fse_fashion_store_theme_version = wp_get_theme()->get( 'Version' );

		$fse_fashion_store_version_string = is_string( $fse_fashion_store_theme_version ) ? $fse_fashion_store_theme_version : false;
		wp_enqueue_style(
			'fse-fashion-store-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_fashion_store_version_string
		);

		wp_enqueue_script( 'fse-fashion-store-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'fse-fashion-store-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );

		//homepage slider
		wp_enqueue_style('fse-fashion-store-swiper-bundle-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), $fse_fashion_store_version_string);

		wp_enqueue_script('fse-fashion-store-swiper-bundle-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), $fse_fashion_store_version_string, true);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_fashion_store_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';

// Add Getstart admin notice
function fse_fashion_store_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_fashion_store_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-fashion-store-guide-page' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Fashion Store Theme!', 'fse-fashion-store'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize get-start-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=fse-fashion-store-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'fse-fashion-store'); ?></a> 
	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-fashion-store'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( FSE_FASHION_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fse-fashion-store'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( FSE_FASHION_STORE_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'fse-fashion-store'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?fse_fashion_store_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-fashion-store' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'fse_fashion_store_admin_notice' );

if( ! function_exists( 'fse_fashion_store_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_fashion_store_update_admin_notice(){
    if ( isset( $_GET['fse_fashion_store_admin_notice'] ) && $_GET['fse_fashion_store_admin_notice'] = '1' ) {
        update_option( 'fse_fashion_store_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_fashion_store_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_fashion_store_getstart_setup_options');
function fse_fashion_store_getstart_setup_options () {
    update_option('fse_fashion_store_admin_notice', FALSE );
}

function fse_fashion_store_google_fonts() {
 
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'fse_fashion_store_google_fonts' );