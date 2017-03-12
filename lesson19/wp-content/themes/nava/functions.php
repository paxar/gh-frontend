<?php

if ( ! function_exists( 'gh_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function gh_theme_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on GH-theme, use a find and replace
         * to change 'gh-theme' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'gh-theme', get_template_directory() . '/languages' );

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

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'top-menu' => esc_html__( 'Primary', 'nava' ),
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
        add_theme_support( 'custom-background', apply_filters( 'gh_theme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'gh_theme_setup' );


/**
 * @param $wp_customize
 */
function mytheme_customize_register($wp_customize ) {
    //All our sections, settings, and controls will be added here
//----------------- Section HERO COUNTERS ---------------------------------
    $wp_customize->add_section( 'custom_hero_settings' , array(
        'title'      => __( 'Custom Hero settings', 'gh-theme' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'destination_count' , array(
        'default'   => '0',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_destination', array(
        'label'      => __( 'Counter destinations', 'gh-theme' ),
        'section'    => 'custom_hero_settings',
        'settings'   => 'destination_count',
    ) ) );

    $wp_customize->add_setting( 'cities_count' , array(
        'default'   => '0',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_cities', array(
        'label'      => __( 'Counter cities', 'gh-theme' ),
        'section'    => 'custom_hero_settings',
        'settings'   => 'cities_count',
    ) ) );

    $wp_customize->add_setting( 'boats_count' , array(
        'default'   => '0',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_boats', array(
        'label'      => __( 'Counter boats', 'gh-theme' ),
        'section'    => 'custom_hero_settings',
        'settings'   => 'boats_count',
    ) ) );

    $wp_customize->add_setting( 'sailors_count' , array(
        'default'   => '0',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_sailors', array(
        'label'      => __( 'Counter sailors', 'gh-theme' ),
        'section'    => 'custom_hero_settings',
        'settings'   => 'sailors_count',
    ) ) );

    //----------------- Destinations TITLES, subtitles ---------------------------------
    $wp_customize->add_section( 'custom_destinations_titles' , array(
        'title'      => __( 'Custom Destinations Titles', 'gh-theme' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'home_destination_title' , array(
        'default'   => 'EXPLORE OUR TOP DESTINATIONS',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_destination_title', array(
        'label'      => __( 'Home Destination Title', 'gh-theme' ),
        'section'    => 'custom_destinations_titles',
        'settings'   => 'home_destination_title',
    ) ) );

    $wp_customize->add_setting( 'home_destination_subtitle' , array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_destination_subtitle', array(
        'label'      => __( 'Home Destination subtitle', 'gh-theme' ),
        'section'    => 'custom_destinations_titles',
        'settings'   => 'home_destination_subtitle',
    ) ) );

    $wp_customize->add_setting( 'page_destination_title' , array(
        'default'   => 'EXPLORE OUR TOP DESTINATIONS',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_destination_title', array(
        'label'      => __( 'Page Destination Title', 'gh-theme' ),
        'section'    => 'custom_destinations_titles',
        'settings'   => 'page_destination_title',
    ) ) );

    $wp_customize->add_setting( 'page_destination_subtitle' , array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_destination_subtitle', array(
        'label'      => __( 'Page Destination subtitle', 'gh-theme' ),
        'section'    => 'custom_destinations_titles',
        'settings'   => 'page_destination_subtitle',
    ) ) );

    $wp_customize->add_setting( 'post_destination_title' , array(
        'default'   => 'about DESTINATION',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_destination_title', array(
        'label'      => __( 'Post Destination Title', 'gh-theme' ),
        'section'    => 'custom_destinations_titles',
        'settings'   => 'post_destination_title',
    ) ) );

    $wp_customize->add_setting( 'post_destination_subtitle' , array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_destination_subtitle', array(
        'label'      => __( 'Post Destination subtitle', 'gh-theme' ),
        'section'    => 'custom_destinations_titles',
        'settings'   => 'post_destination_subtitle',
    ) ) );


    //----------------- Destinations TITLES, subtitles ---------------------------------
    $wp_customize->add_section( 'custom_boats_titles' , array(
        'title'      => __( 'Custom Boats Titles', 'gh-theme' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'home_boat_title' , array(
        'default'   => 'FEATURED BOATS',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_boat_title', array(
        'label'      => __( 'Home Boat Title', 'gh-theme' ),
        'section'    => 'custom_boats_titles',
        'settings'   => 'home_boat_title',
    ) ) );

    $wp_customize->add_setting( 'home_boat_subtitle' , array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_boat_subtitle', array(
        'label'      => __( 'Home Boat subtitle', 'gh-theme' ),
        'section'    => 'custom_boats_titles',
        'settings'   => 'home_boat_subtitle',
    ) ) );

    $wp_customize->add_setting( 'page_boat_title' , array(
        'default'   => 'FEATURED BOATS',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_boat_title', array(
        'label'      => __( 'Page Boat Title', 'gh-theme' ),
        'section'    => 'custom_boats_titles',
        'settings'   => 'page_boat_title',
    ) ) );

    $wp_customize->add_setting( 'page_boat_subtitle' , array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_boat_subtitle', array(
        'label'      => __( 'Page Boat subtitle', 'gh-theme' ),
        'section'    => 'custom_boats_titles',
        'settings'   => 'page_boat_subtitle',
    ) ) );

    $wp_customize->add_setting( 'post_boat_title' , array(
        'default'   => 'about boat',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_boat_title', array(
        'label'      => __( 'Post Boat Title', 'gh-theme' ),
        'section'    => 'custom_boats_titles',
        'settings'   => 'post_boat_title',
    ) ) );

    $wp_customize->add_setting( 'post_boat_subtitle' , array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_boat_subtitle', array(
        'label'      => __( 'Post Boat subtitle', 'gh-theme' ),
        'section'    => 'custom_boats_titles',
        'settings'   => 'post_boat_subtitle',
    ) ) );

    //--------------------Custom home page backgrounds-----------------------------------

    $wp_customize->add_section( 'custom_home_backgrounds' , array(
        'title'      => __( 'Custom Home Backgrounds', 'gh-theme' ),
        'priority'   => 30,
    ) );

   $wp_customize->add_setting( 'hero_background' , array(
        //'default'   => '"_"',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_hero_background', array(
        'label'      => __( 'Hero background', 'gh-theme' ),
        'section'    => 'custom_home_backgrounds',
        'settings'   => 'hero_background',
    ) ) );

    $wp_customize->add_setting( 'owner_background' , array(
        //'default'   => '"_"',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_owner_background', array(
        'label'      => __( 'Owner section background', 'gh-theme' ),
        'section'    => 'custom_home_backgrounds',
        'settings'   => 'owner_background',
    ) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_css()
{

    ?>
    <style type="text/css">
        .hero-bg {
            background: url("<?php echo get_theme_mod('hero_background'); ?>") center/cover no-repeat;
        }
        .owner {
            background: url("<?php echo get_theme_mod('owner_background'); ?>") center/cover no-repeat;
        }

    </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');




function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );


function gh_theme_scripts() {



    wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700');

    wp_enqueue_style( 'et-googleFonts');

    wp_register_style('css-libs', get_template_directory_uri() . '/libs.css' );

    wp_enqueue_style('css-libs');


    wp_enqueue_style( 'gh-theme-style', get_stylesheet_uri() ); //patch to style.css



    wp_enqueue_script( 'js-libs', get_template_directory_uri() . '/js/libs.min.js' );

    wp_enqueue_script( 'Awesome', 'https://use.fontawesome.com/34414cec8f.js' );



    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'gh_theme_scripts' );


function new_excerpt_length($length) {  // change words number in preview posts
    return 7;
}
add_filter('excerpt_length', 'new_excerpt_length');


add_filter('excerpt_more', function($more) {  //remove [...] in the_excerpt
    return '';
});





function create_dest() {
    register_post_type( 'destination',
        array(
            'labels' => array(
                'name' => 'Destinations',
                'singular_name' => 'Destination',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New destination',
                'edit' => 'Edit',
                'edit_item' => 'Edit destination',
                'new_item' => 'New destination',
                'view' => 'View',
                'view_item' => 'View destination',
                'search_items' => 'Search',
                'not_found' => 'No found',
                'not_found_in_trash' => 'No in Trash',
                'parent' => 'Parent'
            ),
            'public' => true,
            'menu_position' => 8,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
    flush_rewrite_rules();
}

add_action( 'init', 'create_dest' );

function create_boats() {
    register_post_type( 'boats',
        array(
            'labels' => array(
                'name' => 'Boats',
                'singular_name' => 'Boat',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Boat',
                'edit' => 'Edit',
                'edit_item' => 'Edit Boat',
                'new_item' => 'New Boat',
                'view' => 'View',
                'view_item' => 'View Boat',
                'search_items' => 'Search',
                'not_found' => 'No found',
                'not_found_in_trash' => 'No in Trash',
                'parent' => 'Parent'
            ),
            'public' => true,
            'menu_position' => 9,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
    flush_rewrite_rules();
}

add_action( 'init', 'create_boats' );


