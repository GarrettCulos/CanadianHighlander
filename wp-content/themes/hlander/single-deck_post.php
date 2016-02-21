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

<div id="highlander-deck">
	<div class="col-xs-12">
		<div class="back">
			<a href="#"><< Back</a>
		</div>

		<div class="post-container">
			<?php $post_meta = (get_fields($post));?>
			<div class="entry-content">
				<div class="deck-name"> <?php the_title(); ?></div>
				<div class="deck-info-item"> <?php echo $post_meta['colors'] ?></div>
				<div class="deck-info-item"> <?php echo $post_meta['dating'] ?></div>
				<!-- loop through cards in deck -->
				<div class="deck-date">Date modified: <?php the_date('F j, Y'); ?></h2>
			</div>
		</div>
	</div>		

</div>
<?php get_footer(); ?>