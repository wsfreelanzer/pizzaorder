<?php
/**
 * Pizza Size
 */
if ( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

// WP_List_Table is not loaded automatically so we need to load it in our application
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

/**
 * Create a new table class that will extend the WP_List_Table
 */
class PizzaSize_List_Table extends WP_List_Table
{

	/** Class constructor */
	public function __construct() {

		parent::__construct( [
			'singular' => __( 'Pizza Size', 'pizza' ), //singular name of the listed records
			'plural'   => __( 'Pizza Size', 'pizza' ), //plural name of the listed records
			'ajax'     => false //does this table support ajax?
		] );

	}

    /**
     * Prepare the items for the table to process
     *
     * @return Void
     */
    public function prepare_items()
    {
		/** Process bulk action */
		$this->process_bulk_action();

        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();

        $perPage = 5;
        $currentPage = $this->get_pagenum();
		$totalItems = $this->record_count();;
			
		$data = $this->table_data($perPage, $currentPage);      

        $this->set_pagination_args( array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ) );

       // $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);

        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }

    /**
     * Override the parent columns method. Defines the columns to use in your listing table
     *
     * @return Array
     */
    public function get_columns()
    {
        $columns = array(
			'cb'      => '<input type="checkbox" />',
            'ID'       => 'ID',
            'title'     => 'Size',            
        );

        return $columns;
	}
	
	/**
	 * Returns the count of records in the database.
	 *
	 * @return null|string
	 */
	public static function record_count() {
		global $wpdb, $table_name;

		$sql = "SELECT COUNT(*) FROM $table_name";

		return $wpdb->get_var( $sql );
	}

    /**
     * Define which columns are hidden
     *
     * @return Array
     */
    public function get_hidden_columns()
    {
        return array('');
    }

    /**
     * Define the sortable columns
     *
     * @return Array
     */
    public function get_sortable_columns()
    {
        return array('ID' => array('ID', true), 'title' => array('title', false));
    }

    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data($per_page = 5, $page_number = 1 )
    {
        global $wpdb, $table_name;

		$sql = "SELECT * FROM $table_name";

		if ( ! empty( $_REQUEST['orderby'] ) ) {
			$sql .= ' ORDER BY ' . esc_sql( $_REQUEST['orderby'] );
			$sql .= ! empty( $_REQUEST['order'] ) ? ' ' . esc_sql( $_REQUEST['order'] ) : ' ASC';
		}
		else
			$sql.= ' ORDER BY ID ASC';

		$sql .= " LIMIT $per_page";
		$sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;

		$result = $wpdb->get_results( $sql, 'ARRAY_A' );		
		
		return $result;
    }

    /**
     * Define what data to show on each column of the table
     *
     * @param  Array $item        Data
     * @param  String $column_name - Current column name
     *
     * @return Mixed
     */
    public function column_default( $item, $column_name )
    {
        switch( $column_name ) {
            case 'ID': return $item[ $column_name ];
			case 'title': return $this->column_name($item);
            default:
                return print_r( $item, true ) ;
        }
    }

    /**
     * Allows you to sort the data by the variables set in the $_GET
     *
     * @return Mixed
     */
    private function sort_data( $a, $b )
    {
        // Set defaults
        $orderby = 'title';
        $order = 'asc';

        // If orderby is set, use this as the sort column
        if(!empty($_GET['orderby']))
        {
            $orderby = $_GET['orderby'];
        }

        // If order is set use this as the order
        if(!empty($_GET['order']))
        {
            $order = $_GET['order'];
        }


        $result = strcmp( $a[$orderby], $b[$orderby] );

        if($order === 'asc')
        {
            return $result;
        }

        return -$result;
	}


	/**
	 * Delete a size record.
	 *
	 * @param int $id customer ID
	 */
	public static function delete_size( $id ) {
		global $wpdb, $table_name;

		/*
		$wpdb->delete(
			"$table_name",
			[ 'ID' => $id ],
			[ '%d' ]
		);
		*/
		return true;
	}
	
	/**
	 * Render the bulk edit checkbox
	 *
	 * @param array $item
	 *
	 * @return string
	 */
	function column_cb( $item ) {
		return sprintf(
			'<input type="checkbox" name="pizza_delete_size[]" value="%s" />', $item['ID']
		);
	}


	/**
	 * Method for name column
	 *
	 * @param array $item an array of DB data
	 *
	 * @return string
	 */
	function column_name( $item ) {
			
		$edit_nonce = wp_create_nonce( 'sp_size_edit' );
		$delete_nonce = wp_create_nonce( 'pizza_single_delete_size' );

		$title = '<strong>' . $item['title'] . '</strong>';

		$actions = [
			'edit' => sprintf( '<a href="?page=%s&action=%s&id=%s&_wpnonce=%s">Edit</a>', esc_attr( $_REQUEST['page'] ), 'edit', absint( $item['ID'] ), $edit_nonce ),
			'delete' => sprintf( '<a href="?page=%s&action=%s&id=%s&_wpnonce=%s">Delete</a>', esc_attr( $_REQUEST['page'] ), 'delete', absint( $item['ID'] ), $delete_nonce )
		];

		return $title . $this->row_actions( $actions );
	}

	/**
	 * Returns an associative array containing the bulk action
	 *
	 * @return array
	 */
	public function get_bulk_actions() {
		$actions = [
			'pizza_delete_size' => 'Delete'
		];

		return $actions;
	}

	public function process_bulk_action() {
		
		//Detect when a bulk action is being triggered...
		if ( 'delete' === $this->current_action() ) {
			die();
			// In our file that handles the request, verify the nonce.
			$nonce = esc_attr( $_REQUEST['_wpnonce'] );

			if ( ! wp_verify_nonce( $nonce, 'sp_delete_size' ) ) {
				die( 'Go get a life script kiddies' );
			}
			else {
				self::delete_size( absint( $_GET['size'] ) );
			}

		}

		// If the delete bulk action is triggered
		if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'bulk-delete' ) || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'bulk-delete' )) {

			$delete_ids = esc_sql( $_POST['bulk-delete'] );

			// loop over the array of record IDs and delete them
			if($delete_ids)
			{
				foreach ( $delete_ids as $id ) {
					self::delete_size( $id );
				}				
			}			
		}

		return;
	}
}

if($_REQUEST['action'] || $_REQUEST['action2'])
{
	$nonce = esc_attr( $_REQUEST['_wpnonce'] );	

	// If the delete bulk action is triggered
	if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'pizza_delete_size' ) || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'pizza_delete_size' )) {

		global $wpdb, $table_name;
		$table_name = $wpdb->prefix . "pizza_attributes"; 
		
		$delete_ids = esc_sql( $_POST['pizza_delete_size'] );		

		// loop over the array of record IDs and delete them
		if($delete_ids)
		{
			foreach ( $delete_ids as $id ) {							
				$wpdb->delete(
					"$table_name",
					[ 'ID' => $id ],
					[ '%d' ]
				);				
			}				    					
		}
		add_flash_notice( __("Deleted, pizza size succesfully deleted."), "warning", false );
		wp_redirect(wp_get_referer());					
	}
	else if ( wp_verify_nonce( $nonce, 'pizza_single_delete_size' ) ) {
		global $wpdb, $table_name;
		$table_name = $wpdb->prefix . "pizza_attributes"; 
		
		die();
		$delete_id = esc_attr( $_REQUEST['id'] );
		$wpdb->delete(
			"$table_name",
			[ 'ID' => $delete_id ],
			[ '%d' ]
		);				
		add_flash_notice( __("Deleted, pizza size succesfully deleted."), "warning", false );
		wp_redirect(wp_get_referer());
	}	
}

?>