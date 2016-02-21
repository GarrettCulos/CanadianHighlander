<?php get_header(); ?>

<?php 
/**
 * Template Name: Podcasts
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/
$ACF_fields = get_fields(); /** background Images ect... **/
?>
<div class="hl-podcasts">
	<h2> There Can Only Be One </h2>
	<div id="highlander-tcobo" >
		<?php 
			$args = array( 
				'post_type' => 'podcasts_tcobo',
				'orderby' => 'post_date'
				);
			$loop = new WP_Query( $args );
		?>
		<ul>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<a href="<?php  the_permalink() ?>" >	
					<?php $post_meta = (get_fields($post));?>
					<li>
						<div class="tcobo-title"> <?php echo $post_meta['episode_title'] ?></div>
						<div class="tcobo-description"> <?php echo $post_meta['episode_description'] ?></div>
						<div class="tcobo-guest"> Featuring <?php echo $post_meta['featured_guest'] ?></div>
					</li>
				</a>
			<?php endwhile; ?>
		</ul>
	</div>

</div>

<?php get_footer() ?>