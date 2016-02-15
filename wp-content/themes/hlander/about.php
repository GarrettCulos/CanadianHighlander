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
 
$about_fields = get_fields(); 
?>

<!-- Highlander News -->
<div id="news">
	<?php 
	$args = array( 'post_type' => 'news');
	$loop = new WP_Query( $args );
	?>

	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
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
	<?php endwhile; ?>
</div>

<!-- Highlander News -->
<div id="points-list">
	<?php 
	$args = array( 
		'post_type' => 'points_list',
		'orderby' => 'post_date',
		'numberposts' => 1
		);
	$loop = new WP_Query( $args );
	?>
		
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php $post_meta = (get_fields($post));?>
		<h3>Points List</h3>
		<h4>Last updated: <?php echo $post_meta['date_updated']?></h4>
		 <ul>
		 	<?php foreach($post_meta['pointed_cards'] as $item):  ?>
				<li><?php echo $item['name'] ?> – <?php echo $item['point_value'] ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endwhile; ?>
</div>

<!-- Highlander News -->
<div id="rules">
	<h3> The Game </h3>
	<p>	<?php echo $about_fields['the_game']; ?></p>

	<br>

	<h3> History </h3>
	<p>	<?php echo $about_fields['history']; ?></p>
</div>

<!-- Highlander News -->
<div id="council">
	<?php 
	$args = array( 
		'post_type' => 'council',
		'orderby' => 'post_date',
		'numberposts' => 1
		);
	$loop = new WP_Query( $args );
	?>
		
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php $post_meta = (get_fields($post));?>
		<h3>Current Council Members (<span class="date"> Active since <?php the_date('F j, Y'); ?></span>):</h3>
		<?php foreach($post_meta['members'] as $item):  ?>
			<div class="col-sm-5">
				<div class="member-name">
					<?php echo $item['name'] ?>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="member-description">
					<?php echo $item['description'] ?>
				</div>	
			</div>
		<?php endforeach; ?>

		<h3> Concil Log </h3>
		<?php foreach($post_meta['log_report'] as $item):  ?>
			<div class="col-xs-12">
				<div class="log-entry">
					<?php echo $item['log'] ?>
				</div>
			</div>
		<?php endforeach; ?>			
	<?php endwhile; ?>
</div>

<?php get_footer() ?>