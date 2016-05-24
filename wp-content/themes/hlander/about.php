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
	<div class="row">
		<div class="container">
			<div id="news">
				<div class="row">
					<?php 
						$args = array( 'post_type' => 'news');
						$loop = new WP_Query( $args );
					?>

					<?php while ( $loop->have_posts() ) : $loop->the_post();?>
						<a href="<?php the_permalink() ?>" >	
							<?php $post_meta = (get_fields($post));?>
							<div class="entry-content">
								<!-- <div class="col-xs-12 col-sm-4"> -->
									<div class="title"><?php the_title(); ?></div>
								<!-- </div> -->
								<!-- <div class="col-xs-12 col-sm-3"> -->
									<div class="news-date"><?php the_date('F j, Y'); ?></div>
								<!-- </div> -->
						
								<!-- <div class="col-xs-12 col-sm-5"> -->
									<div class="news-content"><?php the_content(); ?></div>
								<!-- </div> -->
							</div>
						</a>
					<?php endwhile; ?>
				</div>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="title">The Points List </div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<h4>Last updated: <?php echo $post_meta['date_updated']?></h4>
							</div>
						</div>
						<div class="pointed-cards">
							<div class="row">
							 	<?php foreach($post_meta['pointed_cards'] as $item):  ?>
									<div class="col-sm-4 col-xs-6 pointed-card">
										<p><?php echo $item['name'] ?> ... <?php echo $item['point_value'] ?></p>
									</div>
								<?php endforeach; ?>	
							</div>
						</div>
				<?php endwhile; ?>
			</div>

			<!-- Highlander News -->
			<div id="rules">
				<div class="row">
					<div class="col-xs-12">
						<div class="title">The Game</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="content">	<?php echo $about_fields['the_game']; ?></div>	
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="title">History </div>
					</div>
				</div>
				<div class='row'>
					<div class="col-xs-12">
						<div class="content">	<?php echo $about_fields['history']; ?></div>
					</div>
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
					
					<div class="row">
						<div class="col-xs-12">
							<div class="title">Current Council Members <span class="date"> (Active since <?php echo the_date('F j, Y'); ?>)</span></div>
						</div>
					</div>
					<?php foreach($post_meta['members'] as $item):  ?>
						<div class="row">
							<div class="col-sm-3 col-xs-12">
								<div class="member-name">
									<?php echo $item['name'] ?>
								</div>
							</div>
							<div class="col-sm-9 col-xs-12">
								<div class="member-description">
									<?php echo $item['description'] ?>
								</div>	
							</div>	
						</div>
					<?php endforeach; ?>

					<div class="row">
						<div class="col-xs-12">
							<div class="sub-title"> Concil Log </div>	
						</div>
					</div>
					<?php foreach($post_meta['log_report'] as $item):  ?>
						<div class="row">
							<div class="col-xs-12 col-sm-3">
								<div class="date">
									Date: <?php echo $item['date'] ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="content">
									<?php echo $item['log'] ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>	

				<?php endwhile; ?>
			</div>		
		</div>
	</div>
</div>

<?php get_footer() ?>