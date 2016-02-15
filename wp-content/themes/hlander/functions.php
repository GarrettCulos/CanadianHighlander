<?php 
/**
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 */

add_filter( 'jetpack_development_mode', '__return_true' );

function hl_get_svg_directory() {
  return get_template_directory_uri() . '/assets/img/svg';
}

function test_shortcodes()
{
    return 'Shortcodes are working!';
}

add_shortcode('test_shortcodes', 'test_shortcodes');

function create_post_types() {

  register_post_type( 'council',
    array(
      'labels' => array(
        'name' => __( 'Council' ),
        'singular_name' => __( 'Council' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );

  register_post_type( 'deck_post',
    array(
      'labels' => array(
        'name' => __( 'Deck Lists' ),
        'singular_name' => __( 'Deck' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );

  register_post_type( 'monday_night_meta',
    array(
      'labels' => array(
        'name' => __( 'Monday Night Meta' ),
        'singular_name' => __( 'Monday Night Meta' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );

  register_post_type( 'article',
    array(
      'labels' => array(
        'name' => __( 'Article' ),
        'singular_name' => __( 'Article' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );

  register_post_type( 'points_list',
    array(
      'labels' => array(
        'name' => __( 'Points List' ),
        'singular_name' => __( 'Pointed Card' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );

  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );
}
add_action( 'init', 'create_post_types');


?>