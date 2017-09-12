<?php

// REMOVE UNNESSUSERY INFO FROM THE WP_HEAD
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'alternate');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');


//ADD MENU SUPPPORT IN THE THEME
function register_my_menus() {
  register_nav_menus(
    array(
	'header-menu' => __( 'M001A Header menu' ),
	'mobile-menu' => __( 'M001A Mobile menu' ),
	 'social' => __( 'Social Menu'),
	));
}
add_action( 'init', 'register_my_menus' );

// ADD WIDGET SUPPORT IN THE THEME
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer widget 1',
		'id'   => 'footer-widget-1',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="footer-header">',
		'after_title'   => '</span>'
	));
	register_sidebar(array(
		'name' => 'Footer widget 2',
		'id'   => 'footer-widget-2',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="footer-header">',
		'after_title'   => '</span>'
	));
	register_sidebar(array(
		'name' => 'Footer widget 3',
		'id'   => 'footer-widget-3',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="footer-header">',
		'after_title'   => '</span>'
	));
	register_sidebar(array(
		'name' => 'Footer widget 4',
		'id'   => 'footer-widget-4',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="footer-header">',
		'after_title'   => '</span>'
	));
	register_sidebar(array(
		'name' => 'Blog widget',
		'id'   => 'blog-widget',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="footer-header">',
		'after_title'   => '</span>'
	));
}

// REMOVE MENU ITEMS IN DASHBOARD
function remove_menus(){
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );



//add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

//function dequeue_jquery_migrate( &$scripts){
//    if(!is_admin()){
//        $scripts->remove( 'jquery');
//        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
//    }
//}
//// Drop this in functions.php or your theme
//if( !is_admin()){
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"), false, '2.1.3');
//    wp_enqueue_script('jquery');
//}
// Disable W3TC footer comment for everyone but Admins (single site & network mode)
if ( !current_user_can( 'activate_plugins' ) ) {
    add_filter( 'w3tc_can_print_comment', function( $w3tc_setting ) { return false; }, 10, 1 );
}

// CONTACT FORM 7 REPLACE DROPDOWN PLACEHOLDER
function my_wpcf7_form_elements($html) {
	$text = 'Choose service';
	$html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
	return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');

/*
//cf7 tweak
add_action('wpcf7_mail_sent', 'ip_wpcf7_mail_sent');
function ip_wpcf7_mail_sent($wpcf7)
{
	$on_sent_ok = $wpcf7->additional_setting('ip_on_sent_ok', false);

	if (is_array($on_sent_ok) && count($on_sent_ok) > 0)
	{
		wp_redirect(trim($on_sent_ok[0]));
		exit;
	}
}

*/
?>