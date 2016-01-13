<?php get_header(); ?>

<?php 
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/
?>

<!-- Highlander News -->
<div id="highlander-news">
		<?php 
		$args = array( 'post_type' => 'highlander_news');
		$loop = new WP_Query( $args );
		?>

	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
		<div class="col-xs-12">
			<a href="<?php the_permalink() ?>" >	
				<div class="post-container">
					<?php $post_meta = (get_fields($post));?>
					<div class="entry-content">
						<h3><?php echo $post_meta['title'] ?></h3>
						<h2><?php echo $post_meta['date'] ?></h2>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</a>
		</div>		
	<?php endwhile; ?>
</div>


<!-- Highlander News -->
<div id="highlander-points-list">
	<?php 
	$args = array( 'post_type' => 'highlander_points_list');
	$loop = new WP_Query( $args );
	?>
		
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-xs-12">
			<h3>Points List</h3>
			<h4>Last updated: <?php echo $post_meta['update-last']?></h4>

			<?php $post_meta = (get_fields($post));?>
			 <ul>
			 	<?php foreach($items as $item)  ?>
					<li><?php echo $item['name'] ?> – <?php echo $item['point'] ?></li>
				<?php endforeach; ?>
			</ul>
		</div>		
	<?php endwhile; ?>
</div>

<!-- Highlander News -->
<div id="highlander-rules">
	
</div>

<!-- Highlander News -->
<div id="highlander-council">

</div>

<?php get_footer() ?>