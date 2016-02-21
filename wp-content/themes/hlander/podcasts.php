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
	
	<h3> Podcasts go here </h3>

	<div id="highlander-tcobo" >
		<?php 
			$args = array( 
				'post_type' => 'podcasts',
				'orderby' => 'post_date'
				);
			$loop = new WP_Query( $args );
		?>
		<ul>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<li>
					<a href="<?php the_permalink() ?>" >	
						<?php $post_meta = (get_fields($post));?>
						<div class="tcobo-title"> <?php echo $post_meta['episode_title'] ?></div>
						<div class="tcobo-description"> <?php echo $post_meta['episode_description'] ?></div>
						<div class="tcobo-guest"> Featuring <?php echo $post_meta['featured_guest'] ?></div>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>

</div>

<?php get_footer() ?>