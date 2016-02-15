<?php get_header(); ?>

<?php 
/**
 * Template Name: Articles
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/

$args = array( 'post_type' => 'deck_post');
$loop = new WP_Query( $args );

?>
	<div id="highlander-articles">
		<?php 
			$args = array( 
				'post_type' => array(
						'article',
						'monday_night_meta'
					),
				'numberposts' => 4,
				'orderby' => 'post_date'
				);
			$loop = new WP_Query( $args );
		?>

		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="col-xs-12">
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
				<?php else: ?>
				<?php endif; ?>
			</div>		
		<?php endwhile; ?>
	</div>

	<div id="highlander-decks" >
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


<?php get_footer() ?>
