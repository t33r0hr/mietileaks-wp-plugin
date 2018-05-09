<?php
/**
 * @package mietileaks_pl
 * @version 1.0
 */
/*
Plugin Name: Mietileaks Wordpress Plugin
Description: Plugin for using mietileaks fields and data structure
Author: Matthias Buchholz
Version: 1.0
Author URI: http://dev.averagejoe.de/
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Constants
define( 'ML__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'ML__PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'ML__PLUGIN_VERSION', '1.0.0' );


add_action( 'init', 'mietileaks_pl_register_content_types' );

function mietileaks_pl_register_content_types() {

  $labels = array(
    'name'               => 'Mietverträge',
    'singular_name'      => 'Mietvertrag',
    'menu_name'          => 'Mietverträge',
    'name_admin_bar'     => 'Mietvertrag',
    'add_new'            => 'Anlegen',
    'add_new_item'       => 'Mietvertrag anlegen',
    'new_item'           => 'Neuer Mietvertrag',
    'edit_item'          => 'Mietvertrag bearbeiten',
    'view_item'          => 'Zeige Mietvertrag',
    'all_items'          => 'Alle Mietverträge',
    'search_items'       => 'Durchsuche Mietverträge',
    'parent_item_colon'  => 'Adresse',
    'not_found'          => 'Keine Mietverträge gefunden',
    'not_found_in_trash' => 'Keine Mietverträge im Müll gefunden'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-appearance',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'author' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'mietvertraege' ),
    'query_var'           => true
  );

  register_post_type( 'ml_rental_contract', $args );
}


/** upload form */
add_action( 'init', 'mietileaks_pl_register_form_groups' );

function mietileaks_pl_register_form_groups () {

  require ML__PLUGIN_PATH . '/widgets/upload-form/register.php';

}


?>
