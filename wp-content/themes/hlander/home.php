<?php get_header(); ?>

<?php 

/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/
$post_meta = (get_fields());
 ?>


<div class="container-fluid">
	<div class="row">
		<h1 class="sr-only"><?php bloginfo('title'); ?></h1>    
		<div id="highlander-main">

			<?php 
				$args = array( 'post_type' => 'news');
				$loop = new WP_Query( $args );
			?>

			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<div id="highlander-news">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<a href="<?php the_permalink() ?>" >	
							<div class="post-container">
								<?php $post_meta = (get_fields($post));?>
								<div class="entry-content">
									<h3><?php the_title(); ?></h3>
									<h2><?php the_date('F j, Y'); ?></h2>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</a>
					</div>		
				</div>
			<?php endwhile; ?>

			<?php 
				$args = array( 
					'post_type' => array(
							'article',
							'monday_night_meta',
							'podcasts_tcobo'
						),
					'numberposts' => 8,
					'orderby' => 'post_date'
					);
				$loop = new WP_Query( $args );
			?>

			<div id="highlander-articles">
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<?php if(get_post_type($post)=='article'):?>
							<div class="post-container">
								<?php $post_meta = (get_fields($post));?>
								<div class="entry-content">
									<h3><?php the_title(); ?></h3>
									<h2><?php the_date('F j, Y'); ?></h2>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink() ?>"> Read Full Story </a>
								</div>
							</div>
						<?php elseif(get_post_type($post)=='monday_night_meta'):?>
							<div class="post-container">
								<?php $post_meta = (get_fields($post));?>
								<div class="entry-content">
									<h3><?php the_title(); ?></h3>
									<h2><?php the_date('F j, Y'); ?></h2>
									<p>Players - <?php echo $post_meta['players']?> </p>
									<p>Archetypes - <?php echo $post_meta['archetypes']?> </p>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink() ?>">See Full Report</a>
								</div>
							</div>
						<?php elseif(get_post_type($post)=='podcasts_tcobo'):?>
							<div class="post-container">
								<a href="<?php echo the_permalink() ?>" >	
									<?php $post_meta = (get_fields($post));?>
									<li>
										<div class="tcobo-title"> <?php echo $post_meta['episode_title'] ?></div>
										<div class="tcobo-description"> <?php echo $post_meta['episode_description'] ?></div>
										<div class="tcobo-guest"> Featuring <?php echo $post_meta['featured_guest'] ?></div>
									</li>
								</a>
							</div>
						<?php else: ?>
						<?php endif; ?>
					</div>		
				<?php endwhile; ?>
			</div>
		</div>	
	</div>
</div>

<?php get_footer(); ?>