<?php get_header(); ?>

<?php 
/**
 * Template Name: Deck Lists
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/
$ACF_fields = get_fields();

$args = array( 'post_type' => 'deck_post');
$loop = new WP_Query( $args );

?>
<!-- Navigation -->
<div id="inner-nav">
	<!-- #sidebar-wrapper -->
	<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
		<span class="hamb-top"></span>
		<span class="hamb-middle"></span>
		<span class="hamb-bottom"></span>
	</button>
</div>

<div class="container-fluid">
	<div class="row">
		<div id="decks" >
			<ul>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<li>
						<a href="<?php the_permalink() ?>" >	
							<?php $post_meta = (get_fields($post));?>
							<div class="deck-name"> <?php echo $post_meta['name'] ?></div>
							<div class="deck-info-item"> <?php echo $post_meta['colors'] ?></div>
							<div class="deck-info-item"> <?php echo $post_meta['dating'] ?></div>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	
	</div>
</div>
	
<?php get_footer() ?>
