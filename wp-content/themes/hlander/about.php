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
<div class="container-fluid">
	<div class="container">
		<div id="news">
			<?php 
				$args = array( 'post_type' => 'news');
				$loop = new WP_Query( $args );
			?>

			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<a href="<?php the_permalink() ?>" >	
					<div class="container">
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
				<div class="banner">
					<div class="banner-image image-blur" data-background-img="<?php echo $post_meta['banner_image']['url']?>"></div>
					<div class="title">The Points List</div>
				</div>
					<div class="container">
						<h4>Last updated: <?php echo $post_meta['date_updated']?></h4>
					 	<?php foreach($post_meta['pointed_cards'] as $item):  ?>
							<div class="col-sm-4 col-xs-6"><p><?php echo $item['name'] ?> – <?php echo $item['point_value'] ?></p></div>
						<?php endforeach; ?>	
					</div>
			<?php endwhile; ?>
		</div>

		<!-- Highlander News -->
		<div id="rules">
			<div class="banner">
				<div class="banner-image image-blur" data-background-img="<?php echo $about_fields['the_game_banner_image']['url']?>"></div>
				<div class="title">The Game</div>
			</div>
			<div class="container">
				<p>	<?php echo $about_fields['the_game']; ?></p>
			</div>
				<br>
			<div class="banner">
				<div class="banner-image image-blur" data-background-img="<?php echo $about_fields['history_banner_image']['url']?>"></div>
				<div class="title">History </div>
			</div>
			<div class='container'>
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
				<div class="banner">
					<div class="banner-image image-blur" data-background-img="<?php echo $post_meta['banner_image']['url'] ?>"></div>
					<div class="title">Current Council Members <br> (<span class="date"> Active since <?php echo the_date('F j, Y'); ?></span>)</div>
				</div>
				<div class="container">
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

					
					<div class="sub-title"> Concil Log </div>
					<?php foreach($post_meta['log_report'] as $item):  ?>
					<div class="log-entry">
						<?php echo $item['log'] ?>
					</div>
					<?php endforeach; ?>	
				</div>		
			<?php endwhile; ?>
		</div>		
	</div>
</div>

<?php get_footer() ?>