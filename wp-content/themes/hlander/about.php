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
					<img src=""> 
				<div class="entry-content">
					<h3 class="title"><?php the_title(); ?> - <div class="news-date"><?php the_date('F j, Y'); ?></div></h3>	
					
					<div class="news-content"><?php the_content(); ?></div>
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
		<div class="post-container">
			<h3 class="title">Points List</h3>
			<h4>Last updated: <?php echo $post_meta['date_updated']?></h4>
			<ul>
			 	<?php foreach($post_meta['pointed_cards'] as $item):  ?>
					<li><?php echo $item['name'] ?> – <?php echo $item['point_value'] ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endwhile; ?>
</div>

<!-- Highlander News -->
<div id="rules">
	<div class="post-container">
		<h3 class="title"> The Game </h3>
		<p>	<?php echo $about_fields['the_game']; ?></p>

		<br>

		<h3 class="title"> History </h3>
		<p>	<?php echo $about_fields['history']; ?></p>
	</div>
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
		<div class="post-container">
			<h3 class="title">Current Council Members (<span class="date"> Active since <?php the_date('F j, Y'); ?></span>):</h3>
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

			
			<h4 class="sub-title"> Concil Log </h4>
			<?php foreach($post_meta['log_report'] as $item):  ?>
			<div class="log-entry">
				<?php echo $item['log'] ?>
			</div>
			<?php endforeach; ?>	
		</div>		
	<?php endwhile; ?>
</div>

<?php get_footer() ?>