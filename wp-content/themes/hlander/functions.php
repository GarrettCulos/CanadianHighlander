<?php 
/**
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 */



function create_post_types() {

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
        'singular_name' => __( 'News Item' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );
}
add_action( 'init', 'create_post_types');
?>