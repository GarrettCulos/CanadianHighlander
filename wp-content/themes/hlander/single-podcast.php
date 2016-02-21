<?php get_header(); ?>

<?php 

/**
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/
$ACF_fields = get_fields();
the_post();
?>

<div id="highlander-tcobo">
	<div class="col-xs-12">
		<div class="back">
			<a href="#"><< Back</a>
		</div>

		<div class="post-container">
			<?php $post_meta = (get_fields($post));?>
			<div class = "tcobo-player">PLAYER GOES HERE </div>

			<div class="entry-content">
				<div class="tcobo-title"> <?php the_title(); ?> - <span><?php the_date('F j, Y'); ?></span></div>
				<div class="tcobo-sub-title"> <?php echo $post_meta['episode_title'] ?></div>
				<div class="tcobo-description"> <?php echo $post_meta['episode_description'] ?></div>
				<div class="tcobo-guest"> Featuring <?php echo $post_meta['featured_guest'] ?></div>
			</div>
		</div>
	</div>		

</div>
<?php get_footer(); ?>