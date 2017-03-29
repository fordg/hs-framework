<?php

/**
 * @link              http://minimalthemes.net/
 * @since             1.0.0
 * @package           HS_Core
 *
 * @wordpress-plugin
 * Plugin Name:       Human Save Themes Framework
 * Plugin URI:        http://github.com/fordg/hs-framework
 * Description:       Core framework for all themes by Minimal Themes. Use this plugin to take all theme features e.g. shortcode, custom widget and integration with other plugins.
 * Version:           1.0.0
 * Author:            Fordg
 * Author URI:        http://minimalthemes.net/
 * License:           MIT License
 * Text Domain:       hscore
 * Domain Path:       /languages
 */

/**
 * posttype
 */
function hs_gallery_posttype_init() {
    $args = array(
      'label' => 'Gallery',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'gallery'),
        'query_var' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
            'title',
            'editor',
            'thumbnail')
        );
    register_post_type( 'gallery', $args );
}
add_action( 'init', 'hs_gallery_posttype_init' );

function hs_gallery_filter()
{
    register_taxonomy(
        __( "filter", "humansave" ),
        array(__( "gallery", "humansave" )),
        array(
            "hierarchical" => true,
            "label" => __( "Filter", "humansave"  ),
            "singular_label" => __( "Filter" , "humansave" ),
            "rewrite" => array(
                'slug' => 'filter',
                'hierarchical' => true
            )
        )
    );
}
add_action( 'init', 'hs_gallery_filter', 0 );

function hs_event_posttype_init() {
    $args = array(
      'label' => 'Event',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'event'),
        'query_var' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array(
            'title',
            'editor',
            'thumbnail')
        );
    register_post_type( 'event', $args );
}
add_action( 'init', 'hs_event_posttype_init' );
