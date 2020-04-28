<?php
require_once('../wp-load.php');

/**
 * Register a custom menu page.
 */
add_action('admin_menu', 'slice_pizza_pages');
function slice_pizza_pages(){

    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();    
    $table_name = $wpdb->prefix . "pizza_attributes"; 

    $sql = "CREATE TABLE $table_name (
      id INT(9) NOT NULL AUTO_INCREMENT,
      `title` VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
      `price` DOUBLE DEFAULT NULL,
      `att_type` ENUM('size', 'dough', 'crust', 'extra') COLLATE utf8_unicode_ci NOT NULL,
      `created` DATETIME NOT NULL,    
      PRIMARY KEY  (id)
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
    ?>
    <div class="wrap">
 
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

        <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">

            <div id="universal-message-container">
                <h2>Add New Size</h2>

                <div class="options">
                    <p>
                        <label>Enter the pizza size in numbers..</label>
                        <br />
                        <input type="text" name="title" value="" />
                    </p>
            </div><!-- #universal-message-container -->

            <input type="hidden" name="action" value="contact_form">
        
            <?php               
                submit_button();
            ?>

        </form>

    </div><!-- .wrap -->
    <?php
}

function prefix_send_email_to_admin() {
    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */ 
    global $wpdb;
     $title = $_POST['title'];
     $table_name = $wpdb->prefix . "pizza_attributes";
     $wpdb->insert($table_name, array('title' => $title, 'att_type' => 'size') ); 

    // Sanitize the POST field
    // Generate email content
    // Send to appropriate email
}
add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );

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