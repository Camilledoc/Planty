<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
		    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
        wp_enqueue_script( 'Jquery', get_stylesheet_directory_uri() . '/js/jquery-3.7.0.min.js',);
		    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', );

}


function add_extra_item_to_nav_menu( $items, $args ) {
	//var_dump($args);
  if (is_user_logged_in() && $args->menu == 'navigation') {
      $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu "><a class="hfe-menu-item" href="' . get_admin_url() . '">Admin</a></li>';
  }
  return $items;
}

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

/*hook menu  
 * 
 * ta fonction wp nav menu
 * tu vérifie si l'utilisateur est connecté
 * et si le menu
 * var_dump( $args); affiche le contenu de la variable  $args
 * lien url admin get_admin_url()
 * 
 * https://developer.wordpress.org/reference/hooks/wp_nav_menu_items/ 
 * 
 * /

