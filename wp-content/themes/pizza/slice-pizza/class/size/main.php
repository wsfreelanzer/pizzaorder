<?php
$id = 0;
$value = '';
$button = 'Add New Size';
$nonce = esc_attr( $_REQUEST['_wpnonce'] );	
global $wpdb, $table_name;			
if ( wp_verify_nonce( $nonce, 'pizza_edit_size' ) ) {
	if($_REQUEST['action']=="edit")
	{
		$id = esc_attr($_REQUEST['id']);
		$sql = "SELECT * FROM $table_name WHERE ID= $id and att_type='size' LIMIT 0,1";
		$result = $wpdb->get_row( $sql);
		if($result)
		{                
			$value = $result->title;
			$button = 'Update Size';
		}
	}

	$delete_nonce = wp_create_nonce( 'pizza_single_delete_size' );
	
}

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
					<input type="text" name="title" value="<?php echo $value; ?>" />
				</p>
		</div><!-- #universal-message-container -->

		<input type="hidden" name="action" value="save_pizza_size">
		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="edit-tag-actions">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo $button; ?>">   
			<?php echo sprintf( '<a href="?page=%s&action=%s&id=%s&_wpnonce=%s" onclick="return confirm(\'Do you want to delete this size?\')" class="button delete button-danger">Delete</a>', 'slice_pizza_size', 'delete', absint( $id ), $delete_nonce ); ?>                                
		</div>

	</form>

</div><!-- .wrap -->
<?php

$PizzaSize_List = new PizzaSize_List_Table();
$PizzaSize_List->prepare_items();
?>
	<div class="wrap">            
		<h2>Pizza Size List</h2>
		<form method="post">   
		<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>" />         
		<?php 
			$PizzaSize_List->search_box('Search', 'search');
			$PizzaSize_List->display(); 
		?>
		</form>
	</div>

	