<?php

// include css file
$cssFilePath = glob( get_template_directory() . '/css/build/main.min.*' );
$cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
wp_enqueue_style( 'site_main_css', $cssFileURI );


function acquirer_scripts() {
  // include the javascript file
  $jsFilePath = glob( get_template_directory() . '/js/build/app.min.*' );
  $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
  wp_enqueue_script( 'site_main_js', $jsFileURI , null , null , true );
}

add_action('wp_enqueue_scripts', 'acquirer_scripts');

// NAVIGATION MENUS
register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer'  => __( 'Footer Menu'  )
));


?>
