<?php get_header(); ?>

<?php 

/**
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/

 ?>

<div id="highlander-monday-night-metas">
	<div class="col-xs-12">
		<div class="back">
			
		</div>

		<div class="post-container">
			<?php $post_meta = (get_fields($post));?>
			<div class="entry-content">
				<h3><?php the_title(); ?></h3>
				<h2><?php the_date('F j, Y'); ?></h2>
				<p>Players - <?php echo $post_meta['players']?> </p>
				<p>Archetypes - <?php echo $post_meta['archetypes']?> </p>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</div>		

</div>
<?php get_footer(); ?>