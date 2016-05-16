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
<!-- Navigation -->
<div id="inner-nav">
	<!-- #sidebar-wrapper -->
	<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
		<span class="hamb-top"></span>
		<span class="hamb-middle"></span>
		<span class="hamb-bottom"></span>
	</button>
</div>

<div class="hl-podcasts">
	<div class="container-fluid">
		<div class="container">
			<h2> There Can Only Be One </h2>

			<div id="highlander-tcobo" >
				<?php 
					$args = array( 
						'post_type' => 'podcasts_tcobo',
						'orderby' => 'post_date'
						);
					$loop = new WP_Query( $args );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="col-xs-12 col-sm-6 col-md-4"> 
						<a href="<?php  the_permalink() ?>" >	
						<?php $post_meta = (get_fields($post));?>
							<div class="podcast-container">
								<div class="tcobo-title"> <?php echo $post_meta['episode_title'] ?></div>
								<div class="tcobo-description"> <?php echo $post_meta['episode_description'] ?></div>
								<div class="tcobo-guest"> Featuring <?php echo $post_meta['featured_guest'] ?></div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>