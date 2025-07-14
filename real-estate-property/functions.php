<?php
if ( ! function_exists( 'real_estate_property_setup' ) ) :
function real_estate_property_setup() {

	add_theme_support( "woocommerce" );	

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( "responsive-embeds" );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	
	add_theme_support( 'custom-header' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'real-estate-property' ),
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
	
	/*
	 * Enable support for custom logo.
	 */
	add_theme_support('custom-logo');
	
	remove_theme_support( 'widgets-block-editor' );

	// -- Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
		
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );

	load_theme_textdomain( 'real-estate-property', get_stylesheet_directory() . '/languages' );
		
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css' ) );
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'real_estate_property_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'real_estate_property_setup' );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function real_estate_property_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'real_estate_property_content_width', 1170 );
}
add_action( 'after_setup_theme', 'real_estate_property_content_width', 0 );

function real_estate_property_customize_remove_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'display_header_text' );
    $wp_customize->remove_control( 'display_header_text' );
    
}
add_action( 'customize_register', 'real_estate_property_customize_remove_register', 11 );

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';


function real_estate_property_text_domain_setup() {

/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Sidebar.
 */
require_once get_template_directory() . '/inc/sidebar/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';

/**
 * Load Web Font
 */
require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

/**
 * Load Recommended Plugin
 */
require_once get_template_directory() . '/inc/tgm-plugin/tgm.php';

/**
 * Called all the Customize file.
 */
require( get_template_directory() . '/inc/customize/premium.php');

/**
 * Get Started.
 */
require( get_template_directory() . '/inc/started/main.php');

/**
 * Admin notice function.
 */
require_once get_template_directory() . '/inc/admin-notice/admin.php';

}
add_action('after_setup_theme', 'real_estate_property_text_domain_setup');

/* 
* Logo Resizer
*/
function real_estate_property_logo_resizer_setting() {

    $real_estate_property_theme_logo_size_css = '';
    $real_estate_property_logo_resizer_setting = get_theme_mod('real_estate_property_logo_resizer_setting');

	$real_estate_property_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($real_estate_property_logo_resizer_setting).'px !important;
			width: '.esc_attr($real_estate_property_logo_resizer_setting).'px !important;
		}
	';
    wp_add_inline_style( 'real-estate-property-style',$real_estate_property_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'real_estate_property_logo_resizer_setting' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function real_estate_property_global_color() {

    $real_estate_property_theme_color_css = '';
    $real_estate_property_theme_color_1 = get_theme_mod('real_estate_property_theme_color_1');

    $real_estate_property_theme_color_css = '
        #header,.page-template-template-homepage #header.navbar-area.header-fixed,.navbar-area.header-fixed,.line-1,.line-2,span.post-page-numbers.current span,span.onsale,.pro-button a,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt ,.woocommerce a.added_to_cart.wc-forward,.pro-button a:hover,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover,.woocommerce ul.products li.product .onsale,.woocommerce span.onsale,.woocommerce .woocommerce-ordering select,.woocommerce-account .woocommerce-MyAccount-navigation ul li,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.wc-block-cart__submit-container,#home_project .box-image span,.real-estate-property-btn .posts-navigation .nav-links a,.widget_search form.search-form .search-submit,.paginations a:hover, .paginations a:focus, .paginations a.active, span.page-numbers.current,.pagination a,header.woocommerce-Address-title.title a {
            background: ' . esc_attr($real_estate_property_theme_color_1) . ';
        }
        a.boxed-btn.btn-white i,.btn,.widget_categories ul li, .widget_archive ul li,#sidebar .widget_categories ul li, #sidebar .widget_archive ul li,.scrollup,.gb_nav_menu .sub-menu {
            background-color: ' . esc_attr($real_estate_property_theme_color_1) . ';
        }
        .woocommerce .quantity .qty,.woocommerce-message,.woocommerce-info,.wp-block-button.is-style-outline a.wp-block-button__link,#sidebar .widget_categories ul li,#sidebar .widget_archive ul li,.scrollup, .sidebar a,button.scroll_2 {
            border-color: ' . esc_attr($real_estate_property_theme_color_1) . ';
        }
        blockquote {
            border-color: ' . esc_attr($real_estate_property_theme_color_1) . '!important;
        }
        h1,h2,h3,h4,h5,h6,a.boxed-btn i, .boxed-btn i,.top-header span,.icons-media i,a.register_button,.logo a,.loader-text,p.price,.woocommerce ul.products li.product .price,.woocommerce div.product p.price,.woocommerce div.product span.price,.woocommerce-message::before,.woocommerce-info::before,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.post-comment-area .media,.slider_content_box a,.box-content span,.box-content i,.footer-sidebar .widget ul li a:before,.wp-block-post-terms a:before,.woocommerce ul.products li.product .woocommerce-loop-product__title, #blog-content .post-content h4 a,#blog-content ul.meta-info li a,.post-category i,i.fa.fa-user,#blog-content ul.meta-info li,.sidebar .widget-title, #sidebar .widget.widget_search label, #sidebar .sidebar .widget h2.wp-block-heading, .sidebar h2.wp-block-heading,.scroll_2 svg,.related-post-thumbnail h4 a,em, cite, q,b.fn a , .comment-metadata time,.reply a{
            color: ' . esc_attr($real_estate_property_theme_color_1) . ';
        }
        .site-title, .site-description{
            color: ' . esc_attr($real_estate_property_theme_color_1) . '!important;
        }
        .scroll_2 svg path{
            stroke: ' . esc_attr($real_estate_property_theme_color_1) . ';
        }
    ';
    
    wp_add_inline_style('real-estate-property-style', $real_estate_property_theme_color_css);
    wp_add_inline_style('real-estate-property-woocommerce-css', $real_estate_property_theme_color_css);

}
add_action('wp_enqueue_scripts', 'real_estate_property_global_color');

/**
 * Function that returns if the menu is sticky
 */
if (!function_exists('real_estate_property_sticky_header')):
    function real_estate_property_sticky_header()
    {
        $is_sticky = get_theme_mod('real_estate_property_sticky_header_setting', false);

        if ($is_sticky == false):
            return 'not-sticky';
        else:
            return 'is-sticky-on';
        endif;
    }
endif;

function real_estate_property_breadcrumb() {
    $separator = get_theme_mod( 'real_estate_property_breadcrumb_separator', ' → ' );

    if (is_home()) {
        echo "<span>Home</span>";
    } else if (!is_home()) {
        echo '<a href="' . home_url() . '">Home</a>' . $separator;

        if (is_archive()) {
            if (is_category()) {
                echo "<span>";
                single_cat_title();
                echo "</span>";
            } elseif (is_tag()) {
                echo "<span>";
                single_tag_title();
                echo "</span>";
            } elseif (is_date()) {
                echo "<span>";
                echo get_the_date('F Y');
                echo "</span>";
            } elseif (is_author()) {
                echo '<span>Author: ';
                the_author();
                echo '</span>';
            } else {
                echo post_type_archive_title() . $separator;
            }
        } elseif (is_single()) {
            if ('product' === get_post_type()) {
                echo '<a href="' . get_permalink(wc_get_page_id('shop')) . '">Shop</a>' . $separator;
                echo "<span>";
                the_title();
                echo "</span>";
            } else {
                the_category(', ');
                echo $separator;
                echo "<span>";
                the_title();
                echo "</span>";
            }
        } elseif (is_page()) {
            echo "<span>";
            the_title();
            echo "</span>";
        } elseif (is_search()) {
            echo '<span>Search Results for: ' . get_search_query() . '</span>';
        } elseif (is_404()) {
            echo "<span>404</span>";
        } else {
            echo "<span>";
            the_title();
            echo "</span>";
        }
    }
}

function get_page_id_by_title($pagename){

    $args = array(
        'post_type' => 'page',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'title' => $pagename
    );
    $query = new WP_Query( $args );

    $page_id = '1';
    if (isset($query->post->ID)) {
        $page_id = $query->post->ID;
    }

    return $page_id;
}

if ( ! function_exists( 'real_estate_property_top_scroller' ) ) {
    function real_estate_property_top_scroller() { ?>      
        <button type="button" id="scroll_2" class="scroll_2">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" 
                      style="transition: stroke-dashoffset 10ms linear 0s; 
                             stroke-dasharray: 307.919, 307.919; 
                             stroke-dashoffset: -0.0171453;">
                </path>
            </svg>
        </button>
    <?php }
}
add_action( 'real_estate_property_top_scroller', 'real_estate_property_top_scroller' );