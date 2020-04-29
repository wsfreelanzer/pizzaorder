<?php
require_once(ABSPATH .'wp-load.php');
include 'class/size.php';

/**
 * Register a custom menu page.
 */
add_action('admin_menu', 'slice_pizza_pages');
function slice_pizza_pages(){

    global $wpdb, $table_name;
    
    $charset_collate = $wpdb->get_charset_collate();    
    $table_name = $wpdb->prefix . "pizza_attributes"; 

    $sql = "CREATE TABLE $table_name (
      ID INT(9) NOT NULL AUTO_INCREMENT,
      `title` VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
      `price` DOUBLE DEFAULT NULL,
      `att_type` ENUM('size', 'dough', 'crust', 'extra') COLLATE utf8_unicode_ci NOT NULL,
      `orderby` INT NOT NULL DEFAULT '1',
      `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
      PRIMARY KEY  (ID)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );   
    
    add_menu_page('Manage Slice Pizza', 'My Menu Title', 'manage_options', 'slice-pizza', 'slice_pizza_dashboard', get_template_directory_uri().'/assets/img/pizza-menu-icon.png', 20 );
    add_submenu_page('slice-pizza', 'Dashboard', 'Dashboard', 'manage_options', 'slice-pizza' );
    add_submenu_page('slice-pizza', 'Pizza Size', 'Pizza Size', 'manage_options', 'slice_pizza_size', 'slice_pizza_size' );
    add_submenu_page('slice-pizza', 'Pizza Dough', 'Pizza Dough', 'manage_options', 'slice_pizza_dough', 'slice_pizza_dough' );
    add_submenu_page('slice-pizza', 'Pizza Crust', 'Pizza Crust', 'manage_options', 'slice_pizza_crust', 'slice_pizza_crust' );
    add_submenu_page('slice-pizza', 'Pizza Extras', 'Pizza Extras', 'manage_options', 'slice_pizza_extras', 'slice_pizza_extras' );    
}

/**
 * Dashbaord
 */
function slice_pizza_dashboard(){
    esc_html_e( 'Pizza Dashbaord Page', 'pizza' );  
}

/**
 * Size
 */
function slice_pizza_size(){
    include 'class/size/main.php';
}

function save_pizza_size() { 
    
    global $wpdb;
    $title = $_POST['title'];
    $id = $_POST['id'];
    $table_name = $wpdb->prefix . "pizza_attributes";
    if(empty($title))
    {
        add_flash_notice( __("Error, enter the valid pizza size."), "error", false );
        wp_redirect(wp_get_referer()); 
        exit;
    }
    if(empty($id))
    {
        $wpdb->insert($table_name, array('title' => $title, 'att_type' => 'size'));
        add_flash_notice( __("Success, new pizza size succesfully added."), "success", false );
        wp_redirect(wp_get_referer()); 
        exit;
    }
    else
    {
        $wpdb->update($table_name, array('title' => $title), array('ID'=>$id));
        add_flash_notice( __("Success, pizza size succesfully updated."), "success", false );
        wp_redirect(wp_get_referer()); 
        exit;
    }

       
}
add_action( 'admin_post_nopriv_save_pizza_size', 'save_pizza_size' );
add_action( 'admin_post_save_pizza_size', 'save_pizza_size' );


/**
 * Dough
 */
function slice_pizza_dough(){
    esc_html_e( 'Manage Pizza Dough Page', 'pizza' );  
}

/**
 * Crust
 */
function slice_pizza_crust(){
    esc_html_e( 'Manage Pizza Crust Page', 'pizza' );  
}

/**
 * Extra
 */
function slice_pizza_extras(){
    esc_html_e( 'Manage Pizza Extras Page', 'pizza' );  
}


if ( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

?>