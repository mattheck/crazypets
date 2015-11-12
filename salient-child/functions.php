<?php 

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//function mod_init_load() {
//if ( !is_admin() ) {
//	wp_dequeue_script( 'nectarFrontend' );
//   	wp_register_script('nectarFrontendChild', get_stylesheet_directory_uri() . '/js/init.js', array('jquery', 'superfish'), '5.5.4', TRUE );
//	wp_enqueue_script('nectarFrontendChild');
//	}
//}
//add_action( 'wp_enqueue_scripts', 'mod_init_load' , 100);

//function nectar_shortcode_processing(){
//	require_once ( 'nectar/tinymce/shortcode-processing.php' );
//}

?>