<?php
/* Prise en charge de <title> et images mises en avant*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

/* Chargement des feuilles de style et des scripts */
function ecfwp_enqueue_style_and_scripts(){
    wp_enqueue_style('base', get_stylesheet_directory_uri().'/css/base.css', [], '1.0');
    wp_enqueue_style('main', get_stylesheet_directory_uri().'/css/style.css', ['base'], '1.0');
    wp_enqueue_script('nav', get_stylesheet_directory_uri().'.js/nav.js', [], '1.0', true );
}
add_action('wp_enqueue_scripts','ecfwp_enqueue_style_and_scripts');

/* Création des typos de menu */
register_nav_menus([
    'main'       => 'Menu principal',
    'footer'     => 'Pied de page',
    'social'     => 'Réseaux sociaux',
                       ]);


/* Création des 2 CPT */
function ecfwp_register_my_cpts() {
    /**
     * Post Type: formation.
     */
    $labels = [
        'name' => 'Formation',
        'all_items' => 'Tous les modules',
        'singular_name' => 'module',
        'add_new_item' => 'Ajouter un module',
        'edit_item' => 'Modifier le module',
        'menu_name' => 'Formation'
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => ['title'],
        'menu_position' => 5,
        'menu_icon' => 'dashicons-awards',
    ];
    register_post_type( 'formation', $args);


    /**
     * Post Type: etudiants.
     */
    $labels = [
        'name' => 'Etudiant',
        'all_items' => 'Tous les étudiants',
        'singular_name' => 'etudiant',
        'add_new_item' => 'Ajouter un etudiant',
        'edit_item' => 'Modifier l\'etudiant',
        'menu_name' => 'Etudiant',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => ['title'],
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
    ];
    register_post_type( 'etudiants', $args);
}
add_action( 'init', 'ecfwp_register_my_cpts' );

/* creation page d'options */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

