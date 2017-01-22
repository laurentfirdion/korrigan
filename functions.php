<?php 
function cs_front_scripts_enqueue() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('screen', get_template_directory_uri() . '/ressources/css/screen.css');
    wp_enqueue_script('korrigan', get_template_directory_uri() . '/ressources/js/korrigan.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'cs_front_scripts_enqueue');


register_sidebar( array(
    'name' => _('sidebar-widget'),
    'id' => 'sidebar-widget',
    'description' => _('sidebar-widget'),
    'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
));
add_theme_support( 'post-thumbnails' );
// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

/*$unRole = get_role( ‘subscriber’ );
$unRole->add_cap( ‘read_private_pages’ );*/
/*
Redirecting wp-login.php to our custom page  
*/
function redirect_login_page() {
   $login_page = home_url( '/connexion/' );
   $page_viewed = basename($_SERVER['REQUEST_URI']);

   if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
       wp_redirect($login_page);
       exit;
   }
   if( $page_viewed == "galerie" && $_SERVER['REQUEST_METHOD'] == 'GET' && is_user_logged_in() == false) {
       wp_redirect($login_page);
       exit;
   }
  if( $page_viewed == "espace-membre" && $_SERVER['REQUEST_METHOD'] == 'GET' && is_user_logged_in() == false) {
       wp_redirect($login_page);
       exit;
   }
}
add_action('init','redirect_login_page');

/*
Redirecting logout to custom login page
*/
 
function logout_page() {
   $login_page = home_url( '/connexion/' );
   wp_redirect( $login_page . "?login=false" );
   exit;
}
add_action('wp_logout','logout_page');

/*
Failed Login Hook
*/    
 
add_action( 'wp_login_failed', 'pu_login_failed' ); // Failed Login Hook
 
function pu_login_failed( $user ) {
   // checking where the login attempt came from
   $referrer = $_SERVER['HTTP_REFERER'];
   // checking if we are on the default login page
     if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') && $user!=null ) {
          // checking don't have a failed login attempt yet
          if ( !strstr($referrer, '?login=failed' )) {  
               // redirecting to the custom login page and appending a querystring of login failed
               wp_redirect( $referrer . '?login=failed');
        } else {
              wp_redirect( $referrer );
        }   exit;   }
}

// add category nicenames in body and post class
function category_id_class( $classes ) {
	global $post;
	foreach ( get_the_category( $post->ID ) as $category ) {
		$classes[] = $category->category_nicename;
	}
	return $classes;
}
register_nav_menus( array( 'Zone Principale' => _('Navigation Principale'),) );
register_nav_menus( array( 'Menu haut' => _('Navigation haute'),) );
register_nav_menus( array( 'Menu responsive' => _('Menu responsive'),) );
register_nav_menus( array( 'Menu bas' => _('Menu bas'),) );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'EN SAVOIR +', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function my_filter_function( $data, $field_id ){
  // $data will contain all of the field settings that have been saved for this field.
  // Let's change the default value of the field if it has an ID of 3
  if( $field_id == 186 && isset($_POST['formationffff'])){
    $data['default_value'] = $_POST['formationffff'];
  }
  return $data;  
}
add_filter( 'ninja_forms_field', 'my_filter_function', 10, 2 );
ini_set( 'mysql.trace_mode', 0 );

function wpc_remove_share() {
remove_filter( 'the_content', 'sharing_display', 19);
remove_filter( 'the_excerpt', 'sharing_display', 19);
}
add_action( 'loop_start', 'wpc_remove_share' );

if ( ! isset( $content_width ) )
$content_width = 930;