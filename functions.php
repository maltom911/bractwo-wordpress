<?php

function wpb_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() .'/css/bootstrap.min.css');
    wp_enqueue_style('slick_css', get_template_directory_uri() .'/slick/slick.css');
    wp_enqueue_style('lightbox_css', get_template_directory_uri() .'/css/lightbox.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() .'/css/custom.css');

}

add_action('wp_enqueue_scripts', 'wpb_theme_styles');


function wpb_theme_js() {
    wp_enqueue_script('slick_js', get_template_directory_uri() .'/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('main_js', get_template_directory_uri() .'/js/main.js', '', '', false);
    
}

add_action('wp_enqueue_scripts', 'wpb_theme_js');

/*Function removing 32px important on html*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


/****************************************** REJESTRUJ CUSTOM POST ***********************************************************************************************************************************************************/

function register_authorities_post() {
    $labels = array(
     'name'                  => _x( 'Władze Bractwa', '', 'fresh' ),
     'singular_name'         => _x( 'Władze Bractwa', '', 'fresh' ),
     'menu_name'             => _x( 'Władze Bractwa', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Władze Bractwa', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowe', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowe', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'authorities' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'authorities', $args );
}

add_action( 'init', 'register_authorities_post' );

function register_kings_post() {
    $labels = array(
     'name'                  => _x( 'Królowie Bractwa', '', 'fresh' ),
     'singular_name'         => _x( 'Królowie Bractwa', '', 'fresh' ),
     'menu_name'             => _x( 'Królowie Bractwa', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Królowie Bractwa', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowych', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowych', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'kings' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'kings', $args );
}

add_action( 'init', 'register_kings_post' );

function register_kings_text_post() {
    $labels = array(
     'name'                  => _x( 'Królowie Tekst', '', 'fresh' ),
     'singular_name'         => _x( 'Królowie Tekst', '', 'fresh' ),
     'menu_name'             => _x( 'Królowie Tekst', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Królowie Tekst', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowych', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowych', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'kings_text' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'kings_text', $args );
}

add_action( 'init', 'register_kings_text_post' );

function register_gallery_post() {
    $labels = array(
     'name'                  => _x( 'Galeria', '', 'fresh' ),
     'singular_name'         => _x( 'Galeria', '', 'fresh' ),
     'menu_name'             => _x( 'Galeria', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Galeria', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nową', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nową', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'gallery' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'gallery', $args );
}

add_action( 'init', 'register_gallery_post' );


function register_releases_post() {
    $labels = array(
     'name'                  => _x( 'Komunikaty', '', 'fresh' ),
     'singular_name'         => _x( 'Komunikaty', '', 'fresh' ),
     'menu_name'             => _x( 'Komunikaty', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Komunikaty', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowe', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowe', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'releases' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'releases', $args );
}

add_action( 'init', 'register_releases_post' );

function register_news_post() {
    $labels = array(
     'name'                  => _x( 'Aktualności', '', 'fresh' ),
     'singular_name'         => _x( 'Aktualności', '', 'fresh' ),
     'menu_name'             => _x( 'Aktualności', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Aktualności', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowe', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowe', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'releases' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'news', $args );
}

add_action( 'init', 'register_news_post' );

function register_contact_post() {
    $labels = array(
     'name'                  => _x( 'Siedziba Bractwa', '', 'fresh' ),
     'singular_name'         => _x( 'Siedziba Bractwa', '', 'fresh' ),
     'menu_name'             => _x( 'Siedziba Bractwa', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Siedziba Bractwa', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowe', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowe', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'contact' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'contact', $args );
}

add_action( 'init', 'register_contact_post' );