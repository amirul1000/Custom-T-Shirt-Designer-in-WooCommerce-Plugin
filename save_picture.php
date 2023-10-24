<?php
session_start();
require_once(  dirname(__FILE__)  .'/../../../wp-load.php' );
$data = $_REQUEST['img_content'];

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);

$file_path = dirname(__FILE__) . '/product_picture/'.time().'.png' ;
$fp = fopen($file_path,"w");
fwrite($fp,$data);
fclose($fp);
$url = plugin_dir_url( __FILE__ ).'product_picture/'.time().'.png';
echo json_encode(array('status'=>'success','url'=>$url));		
?>