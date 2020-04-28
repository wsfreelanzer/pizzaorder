<?php
/**
 * Register a custom menu page.
 */
add_action('admin_menu', 'slice_pizza_pages');
function slice_pizza_pages(){
    add_menu_page('Manage Slice Pizza', 'My Menu Title', 'manage_options', 'slice-pizza', 'slice_pizza_dashboard', get_template_directory_uri().'/assets/img/pizza-menu-icon.png', 20 );
    add_submenu_page('slice-pizza', 'Dashboard | Slice Pizza', 'Dashboard', 'manage_options', 'slice-pizza' );
    add_submenu_page('slice-pizza', 'Pizza Size | Slice Pizza', 'Pizza Size', 'manage_options', 'slice_pizza_size', 'slice_pizza_size' );
    add_submenu_page('slice-pizza', 'Pizza Dough | Slice Pizza', 'Pizza Dough', 'manage_options', 'slice_pizza_dough', 'slice_pizza_dough' );
    add_submenu_page('slice-pizza', 'Pizza Crust | Slice Pizza', 'Pizza Crust', 'manage_options', 'slice_pizza_crust', 'slice_pizza_crust' );
    add_submenu_page('slice-pizza', 'Pizza Extras | Slice Pizza', 'Pizza Extras', 'manage_options', 'slice_pizza_extras', 'slice_pizza_extras' );    
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
    esc_html_e( 'Manage Pizza Size Page', 'pizza' );  
}

/**
 * Size
 */
function slice_pizza_dough(){
    esc_html_e( 'Manage Pizza Dough Page', 'pizza' );  
}

/**
 * Size
 */
function slice_pizza_crust(){
    esc_html_e( 'Manage Pizza Crust Page', 'pizza' );  
}

/**
 * Size
 */
function slice_pizza_extras(){
    esc_html_e( 'Manage Pizza Extras Page', 'pizza' );  
}



?>