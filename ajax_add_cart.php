<?php
session_start();
require_once(  dirname(__FILE__)  .'/../../../wp-load.php' );
$id = "";
/**
 * Upload image from URL programmatically
 *
 * @author Misha Rudrastyh
 * @link https://rudrastyh.com/wordpress/how-to-add-images-to-media-library-from-uploaded-files-programmatically.html#upload-image-from-url
 */
function rudr_upload_file_by_url( $image_url ) {

	// it allows us to use download_url() and wp_handle_sideload() functions
	require_once( dirname(__FILE__)  .'/../../../wp-admin/includes/file.php' );

	// download to temp dir
	$temp_file = download_url( $image_url );

	if( is_wp_error( $temp_file ) ) {
		return false;
	}

	// move the temp file into the uploads directory
	$file = array(
		'name'     => basename( $image_url ),
		'type'     => mime_content_type( $temp_file ),
		'tmp_name' => $temp_file,
		'size'     => filesize( $temp_file ),
	);
	$sideload = wp_handle_sideload(
		$file,
		array(
			'test_form'   => false // no needs to check 'action' parameter
		)
	);

	if( ! empty( $sideload[ 'error' ] ) ) {
		// you may return error message if you want
		return false;
	}

	// it is time to add our uploaded image into WordPress media library
	$attachment_id = wp_insert_attachment(
		array(
			'guid'           => $sideload[ 'url' ],
			'post_mime_type' => $sideload[ 'type' ],
			'post_title'     => basename( $sideload[ 'file' ] ),
			'post_content'   => '',
			'post_status'    => 'inherit',
		),
		$sideload[ 'file' ]
	);

	if( is_wp_error( $attachment_id ) || ! $attachment_id ) {
		return false;
	}

	// update medatata, regenerate image sizes
	require_once( dirname(__FILE__)  .'/../../../wp-admin/includes/image.php' );

	wp_update_attachment_metadata(
		$attachment_id,
		wp_generate_attachment_metadata( $attachment_id, $sideload[ 'file' ] )
	);

	return $attachment_id;

}

$attachment_id = rudr_upload_file_by_url( $_REQUEST['url'] ) ;

$product_id = $_REQUEST['product_id'];
$o_product = wc_get_product( $product_id );

$product = new WC_Product_Simple();
$product->set_name( $o_product->get_name() ); // product title
$product->set_slug( $o_product->get_slug()  );
$product->set_regular_price( $o_product->get_regular_price()  ); // in current shop currency
$product->set_sale_price( $o_product->get_sale_price()  ); // in current shop currency
$product->set_price( $o_product->get_price()  ); 
$product->set_short_description($o_product->get_short_description());
$product->set_description($o_product->get_description());
$product->set_attributes($o_product->get_attributes());
$product->set_category_ids($o_product->get_category_ids());
$product->set_image_id( $attachment_id );
$product->set_status('unpublish');
$id = $product->save();

WC()->session->set_customer_session_cookie( true );
$id = WC()->cart->add_to_cart( $id, $_REQUEST['quantity'], $variation_id, $attributes, 
						array() );

echo json_encode(array('status'=>'success','id'=>WC()->cart));		
?>