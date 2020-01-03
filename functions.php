<?php

function custom_navigation_menus() {

    $locations = array(
        'primary-menu' => __('Header_menu', 'synvest'),
        'footer-menu' => __('Footer_menu', 'synvest'),
    );
    register_nav_menus($locations);
}

add_action('init', 'custom_navigation_menus');
add_theme_support('customize-selective-refresh-widgets');
define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/');
require_once dirname(__FILE__) . '/inc/options-framework.php';

/* Register Navigation Menus end */
add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
));

// *************************               CSS/JQUERY             *******************
function load_villalautbali_scripts() {
// Theme stylesheet.
    wp_enqueue_style('villalautbali-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('ui-css', get_template_directory_uri() . '/css/jquery-ui', array(), '20141010', false);
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '20181120');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style_1.css', array(), '20181180');
	wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '20181180');
    wp_enqueue_style('resposive', get_template_directory_uri() . '/css/responsive.css', array(), '20160412');
}

add_action('wp_enqueue_scripts', 'load_villalautbali_scripts');

function villalautbali_scripts() {
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js');
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
        wp_enqueue_script('jquery-slick', get_template_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/js/custom.js');
}

add_action('wp_footer', 'villalautbali_scripts');

//** Visual Composer **//


function custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if ($tag == 'vc_row' || $tag == 'vc_row_inner') {
        $classNames = ['wpb_row', 'vc_row-fluid', 'vc_row'];

        foreach ($classNames as $className)
            $class_string = str_replace($className, '', $class_string);

        $class_string = ('row' . ($class_string ? ' ' : '') . trim($class_string)); // This will replace "vc_row-fluid" with "my_row-fluid"
    }

    if ($tag == 'vc_section') {
        $classNames = ['vc_section'];

        foreach ($classNames as $className)
            $class_string = str_replace($className, '', $class_string);

        $class_string = ('section' . ($class_string ? ' ' : '') . trim($class_string)); // This will replace "vc_row-fluid" with "my_row-fluid"
    }

    if ($tag == 'vc_column' || $tag == 'vc_column_inner') {
        $classNames = ['wpb_column', 'vc_column_container'];

        foreach ($classNames as $className)
            $class_string = str_replace($className, '', $class_string);

        $cols = ['col-xs-offset-', 'col-xs-', 'col-sm-offset-', 'col-sm-', 'col-md-offset-', 'col-md-', 'col-lg-offset-', 'col-lg-'];
        foreach ($cols as $col) {
            $num = 0;

            if (preg_match('/vc_' . $col . '(\d{1,2})/', $class_string, $regs)) {
                $num = (int) str_replace(('vc_' . $col), '', $regs[0]);
            }

            $class_string = preg_replace('/vc_' . $col . '(\d{1,2})/', ($col . ($num * ($num < 12 ? 1 : 1))), $class_string); // This will replace "vc_col-sm-%" with "my_col-sm-%"
        }
    }

    return $class_string; // Important: you should always return modified or original $class_string
}

add_filter('plugin_row_meta', 'cx_uvcftbt_plugin_row_meta', 10, 2);
add_filter('vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2);

function mytheme_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget', 'villalautbali'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Fotter Bottem Copyrights', 'villalautbali'),
        'id' => 'sidebar-2',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
	 register_sidebar(array(
        'name' => __('Fotter mailchimp_head', 'villalautbali'),
        'id' => 'sidebar-3',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
	register_sidebar(array(
        'name' => __('Fotter abt_text', 'villalautbali'),
        'id' => 'sidebar-4',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'mytheme_widgets_init');

function create_post_type_testimonial() {
    register_post_type('acme_product', array(
        'labels' => array(
            'name' => __('Testimonial'),
            'singular_name' => __('Testimonial')
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail','excerpt'),
        'taxonomies' => array('genres'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
            )
    );
}

add_action('init', 'create_post_type_testimonial');

function home_page_testimonial() {
    $out = "";
    $args = array(
        'post_type' => 'acme_product',
        'posts_per_page' => 1
    );
    $obituary_query = new WP_Query($args);
    while ($obituary_query->have_posts()) : $obituary_query->the_post();
        $out .= '<div class="">';
        $out .= '<div class="testimonial_content">';
        $out .= ' <div class="home_testimonial_slider">';
		$out .= ' <div class="item">';
		$out .= ' <div class="slider_content">';
        $out .= '<p class="blockquote_style">' . get_the_content() . '</p>';
		$out .= ' <div class="test_img">';
		$out .= '<img src="' . get_the_post_thumbnail_url() . '" />';
        $out .= '</div>';
		$out .= ' <p class="testi_name">' . get_the_title() . '</p>';
		$out .= ' <span class="testi_belongs">' . get_the_excerpt() . '</span>';
		$out .= '</div>';
		$out .= '</div>';
		$out .= '</div>';
        $out .= '</div>';
        $out .= '</div>';


        wp_reset_postdata();
    endwhile;
    return $out;
}

add_shortcode('home_page_testimonial', 'home_page_testimonial');

add_image_size( 'project-image', 573, 376, true ); 
add_image_size( 'project-img', 1920, 640, true ); 