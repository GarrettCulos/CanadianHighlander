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
				<audio controls>
					<?php $episode_audio_file =  $post_meta['podcast_audio_file'];?>
					<source src="<?php echo $episode_audio_file['url']; ?>" type="audio/mpeg">
				</audio>
				<div class="tcobo-sub-title"> <?php echo $post_meta['episode_sub_title'] ?></div>
				<div class="tcobo-description"> <?php echo $post_meta['episode_description'] ?></div>
				<div class="tcobo-guest"> Featuring <?php echo $post_meta['featured_guest'] ?></div>
			</div>
		</div>
	</div>		

</div>
<?php get_footer(); ?>