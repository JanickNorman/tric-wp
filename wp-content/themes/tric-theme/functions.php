<?php

require_once('inc/Walker_Nav_Primary.php');
require_once('wp-advanced-search/wpas.php');
require_once('inc/Tric_Pagination.php');
/**
 *
 *
 */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function tric_script_enqueue() {
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css',false,'1.1','all');
	wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'tric_script_enqueue');


add_theme_support('menus');

//helper to get the page depth
function tric_get_page_depth( $id=0, $depth=0 ) {
    global $post;

    if ( $id == 0 )
        $id = $post->ID;

    $page = get_post( $id );
    if ( !$page->post_parent ) {
            // this page does not have any parent
            return $depth;
    }
    return get_page_depth( $page->post_parent, $depth+1 );
}

//check if page is hierarchical
function tric_page_is_hierarchical() {
	global $post;
	$children = get_pages( array( 'child_of' => $post->ID ) );

	//page is hierarchical
	if ($post->post_parent > 0 || count($children) > 0) {
		return true;
	}
	return false;
}

//list all the child pages
function tric_list_child_pages() {
	global $post;

	if ( is_page() && $post->post_parent ) {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	} else {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	}

	if ( $childpages ) {

		$string = '<ul>' . $childpages . '</ul>';
	}

	return $string;

}
add_shortcode('tric_childpages', 'tric_list_child_pages');

function my_search_form() {
    $args = array();
    $args['wp_query'] = array('post_type' => ['post','page'],
                              'posts_per_page' => 5);
    $args['fields'][] = array('type' => 'search',
                              'title' => 'Search',
                              'placeholder' => 'Enter search terms...');
    $args['fields'][] = [
    	'type' => 'submit',
    	'title' => 'submit'

    ];

    register_wpas_form('tric-form', $args);
}
add_action('init', 'my_search_form');

// ===== BREADCRUMB ======
function tric_breadcrumb() {
        global $post;
        $output ='';
        echo '<ul id="breadcrumbs">';
        $anc = get_post_ancestors( $post->ID );
        $title = get_the_title();
        foreach ( $anc as $ancestor ) {
            $output .= '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
        }
        var_dump($anc);
        $output .= '<strong title="'.$title.'"> '.$title.'</strong>';
        $output .= "</ul>";
        return $output;
}

// ======= Event Post Type ========
function tric_event_post_type() {
    $labels = [
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new' => "Add New Event",
        "all_items" => "All Events",
        'add_new_item' => "Add Event",
        "edit_item" => "Edit Item",
        "new_item" => "New Event",
        "view_item" => "View Item",
        "search_item" => "Search Event",
        "not_found" => "No Events found",
        "not_found_in_trash" => "No events found in trash",
        "parent_item_colon" => "Parent Item"
    ];

    $args = [
        'labels' => $labels,
        'description' => "Add the organization Events here",
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'events', 'with_front' => false],
        'capability' => 'post',
        'hierarchical' => false,
        'supports' => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ],
        'taxonomies' => ['type'],
        'menu_position' => null,
        'exclude_from_search' => false,
    ];

    register_post_type('event', $args);
}
add_action('init', 'tric_event_post_type');


function event_type_tax() {
    register_taxonomy(
        'type',
        'event',
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'type' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'event_type_tax' );

// use the action to create a place for your meta box
function add_before_editor($post) {
  global $post;
  do_meta_boxes('post', 'pre_editor', $post);
}
add_action('edit_form_after_title','add_before_editor');
