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
        
        if (!$hasChildren && $item->ID!=688 && $item->ID!= "729-en" && $item->ID!= "729-hy" && $item->ID!= "930-hy" && $item->ID!= "930-en" && $item->ID!= 929 && $item->ID!= "1053-en" && $item->ID!= "1053-hy") {
            // add the desired attributes:
            $atts['class'] = 'dropdown-item';


        }

       

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




// partners icon

add_action("init", "register_wineries",2);

function register_wineries() {
    $a_types = array(


        array("the_type" =>	"winery", "single"	=> "Winery", "plural" => "Wineries")

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


add_action("init", "register_contact",2);

function register_contact() {
    $a_types = array(


        array("the_type" =>	"contact", "single"	=> "Contact", "plural" => "Contacts")

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
            'menu_icon'   => 'dashicons-phone',
        );

        register_post_type($s_the_type , $a_args);

    }
}

////////////////////

add_action("init", "register_stories",2);

function register_stories() {
    $a_types = array(


        array("the_type" =>	"story", "single"	=> "Story", "plural" => "Stories")

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
            'menu_icon'   => 'dashicons-book-alt',
        );

        register_post_type($s_the_type , $a_args);

    }
}

//////////////////////////

add_action("init", "register_festivals",3);

function register_festivals() {
    $a_types = array(


        array("the_type" =>	"festival", "single"	=> "Festival and Event", "plural" => "Festivals and Events")

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
            'menu_icon'   => 'dashicons-calendar',
        );

        register_post_type($s_the_type , $a_args);

    }
}


//////////////////////////



//////////////////////////

add_action("init", "register_sites",3);

function register_sites() {
    $a_types = array(


        array("the_type" =>	"sites", "single"	=> "Site and Attraction", "plural" => "Sites and Attractions")

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
            'menu_icon'   => 'dashicons-palmtree',
        );

        register_post_type($s_the_type , $a_args);

    }
}


//////////////////////////

add_action("init", "register_hotels",4);

function register_hotels() {
    $a_types = array(


        array("the_type" =>	"hotel", "single"	=> "Hotel and B&B", "plural" => "Hotels and B&Bs")

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
            'menu_icon'   => 'dashicons-store',
        );

        register_post_type($s_the_type , $a_args);

    }
}


function register_strings() {
  pll_register_string('mytheme', 'all_wineries');
  pll_register_string('mytheme', 'About');
  pll_register_string('mytheme', 'Our Wineries');
  pll_register_string('mytheme', 'Plan Your Visit');
  pll_register_string('mytheme', 'VINEYARDS & WINERIES');
  pll_register_string('mytheme', 'WINE ROUTE MAP');
  pll_register_string('mytheme', 'Footer_paragraph1');
  pll_register_string('mytheme', 'Footer_paragraph2');
  pll_register_string('mytheme', 'Designed and Developed By AYYO Marketing');
  pll_register_string('mytheme', 'This website ');
  pll_register_string('mytheme', 'WINE ROUTE VISITOR GUIDE');
  pll_register_string('mytheme', 'Download');
pll_register_string('mytheme', 'Number of rooms');
pll_register_string('mytheme', 'Amenities');
pll_register_string('mytheme', 'For an additional fee');
pll_register_string('mytheme', 'wineroute path');
pll_register_string('mytheme', 'Getting to Vayots Dzor');
pll_register_string('mytheme', 'Getting to Vayots Dzor path');
pll_register_string('mytheme', 'Festivals and Events');
pll_register_string('mytheme', 'Festivals and Events path');
pll_register_string('mytheme', 'Hotels and B&Bs');
pll_register_string('mytheme', 'Hotels and B&Bspath');
pll_register_string('mytheme', 'Suggested Itineraries');
pll_register_string('mytheme', 'Suggested Itineraries path');
pll_register_string('mytheme', 'Vayots Dzor Travel Guide');
pll_register_string('mytheme', 'Vayots Dzor Travel Guide path');
pll_register_string('mytheme', 'Sites and Attractions in Vayots Dzor');
pll_register_string('mytheme', 'Sites and Attractions in Vayots Dzor path');

}
add_action('init','register_strings');

