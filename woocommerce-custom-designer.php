<?php
/**
  Plugin Name: Woocommerce Custom Designer
  Plugin URI: 
  Description: Select Picture/Upload.Change color,set text,icon on it,move according to need
  Author: Amirul Momenin
  Version: 1.0
  Author License: 
 **/
 $PLUGIN_URL_WOOCUSDESIGN = plugin_dir_url(__FILE__);
 define('PLUGIN_URL_WOOCUSDESIGN',substr($PLUGIN_URL_WOOCUSDESIGN,0,strlen($PLUGIN_URL_WOOCUSDESIGN)-1));

  // Add Shortcode 
add_shortcode( 'wooc-custom-designer', 'woocommerce_custom_designer' );

function woocommerce_custom_designer(){

  include_once dirname(__FILE__) . '/template/designer.php';   
	
}

add_action( 'woocommerce_product_meta_end', 'enfold_customization_extra_product_content', 15 );
function enfold_customization_extra_product_content() {
    echo do_shortcode("[wooc-custom-designer]");
}
