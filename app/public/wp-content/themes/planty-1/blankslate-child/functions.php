<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

/* Cette fonction pertmet d'ajouter un menu au footer */
function register_footer_menu() {
    register_nav_menu('footer-menu', __( 'Footer Menu' ));
  }
  add_action( 'init', 'register_footer_menu' );
  

/* Cette fonction pertmet d'ajouter un logo perso */
function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

/* Cette fonction pertmet de masquer/afficher le lien admin dans le menu */

function add_admin_link_to_menu( $items, $args ) {
    if ( $args->theme_location == 'main-menu' && is_user_logged_in() && current_user_can( 'manage_options' ) ) {
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';
        $items .= $admin_link;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );





// END ENQUEUE PARENT ACTION
