<?php
/* functions and definitions */

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
    register_nav_menu('about-menu',__( 'About Menu' ));
    register_nav_menu('wineries-menu',__( 'Wineries Menu' ));
    register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
}
add_action( 'init', 'register_my_menu' );

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'header-menu') {
        $classes[] = 'nav-item dropdown';
    }
    return $classes;
}
add_filter('nav_menu_css_class','atg_menu_classes',1,3);




function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown-menu" /', $menu);
    return $menu;
}


add_filter( 'nav_menu_link_attributes', 'add_class_to_items_link', 10, 3 );

function add_class_to_items_link( $atts, $item, $args ) {

    if ($args->theme_location == 'header-menu') {
        // check if the item has children
        $hasChildren = (in_array('menu-item-has-children', $item->classes));

        $atts['class'] = 'nav-link';


            $atts['class'] = 'dropdown-item';




    }



    return $atts;
}

add_filter('wp_nav_menu','new_submenu_class');

add_theme_support( 'post-thumbnails' );


/*add_filter( 'nav_menu_link_attributes', 'wpse_100726_extra_atts', 10, 3 );

function wpse_100726_extra_atts( $atts, $item, $args )
{
    // inspect $item, then …
    $atts['class'] = 'animate';
    $atts['data-animate'] = 'zoomIn';
    $atts['data-duration'] = '1.0s';
    $atts['data-delay'] = '0.2s';
    return $atts;
}*/


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home',
        'id'            => 'home_right_1',
        'class'         => 'form-right-block',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_filter('show_admin_bar', '__return_false');

add_action("init", "register_home",2);
function register_home() {
    $a_types = array(


        array("the_type" =>	"Home page", "single"	=> "Home page", "plural" => "Home page")

    );

    foreach ($a_types as $a_type) {

        $s_the_type = $a_type['the_type'];
        $s_single = $a_type['single'];
        $s_plural = $a_type['plural'];

        if(!empty($a_type['slug'])) {
            $s_slug = $a_type['slug'];
        }else{
            $s_slug =$a_type['the_type'];
        }

        // for supports
        $a_supports = empty($a_type['supports']) ? array('title', 'page-attributes') : $a_type['supports'];

        $a_labels = array(
            'name' 					=> _x($s_plural, 'post type general name'),
            'singular_name' 		=> _x($s_single, 'post type singular name'),
            'add_new' 				=> _x('Add New', $s_single),
            'add_new_item' 			=> __('Add New ' . $s_single),
            'edit_item' 			=> __('Edit ' . $s_single),
            'new_item' 				=> __('New ' . $s_single),
            'view_item' 			=> __('View ' . $s_single),
            'search_items' 			=> __('Search ' . $s_plural),
            'not_found' 			=>  __('No ' . $s_plural . ' found'),
            'not_found_in_trash'	=> __('No ' . $s_plural . ' found in Trash')
        );

        $a_rewrite = array(
            'slug'                => $s_slug,
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );

        $a_args = array(
            'labels' 		=> $a_labels,
            'public' 		=> true,
            'has_archive' 	=> 'true',
            'rewrite'       => $a_rewrite,
            'supports' 		=> $a_supports,
            'menu_icon'   => 'dashicons-editor-paste-word',
        );

        register_post_type($s_the_type , $a_args);

    }
}

/////////////////////////

