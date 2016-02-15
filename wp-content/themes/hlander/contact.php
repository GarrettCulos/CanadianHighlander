<?php get_header(); ?>

<?php 
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Highlander
 * @since Highlander 1.0
 *
 **/
?>

<!-- Contact Highlander Council -->
<div class="col-sm-6">
	<div class="conatct-form">
		<h3>Contact the Council</h3>
		<h4> For inquiry about the points list and rules </h4>
		<?php echo do_shortcode('[contact-form-7 id="60" title="Council Contact Form"]'); ?>
	</div>
</div>

<!-- Contact Media Team -->
<div class="col-sm-6">
	<div class="conatct-form">
		<h3>Contact the Media Team</h3>
		<h4> For inquiry's about deck lists, the pod-cast, streams, and other media related topics </h4>
		<?php echo do_shortcode('[contact-form-7 id="59" title="Media Team Contact"]'); ?>

	</div>
</div>

<?php get_footer() ?>
