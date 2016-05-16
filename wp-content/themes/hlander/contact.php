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
$contact_fields = get_fields();
?>
<!-- Navigation -->
<div id="inner-nav">
	<!-- /#sidebar-wrapper -->
	<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
		<span class="hamb-top"></span>
		<span class="hamb-middle"></span>
		<span class="hamb-bottom"></span>
	</button>
</div>

<div class="container-fluid">
	<div class="col-xs-8 col-xs-offset-2">
		<div class="hlander-contact">
			<ul class="nav nav-tabs" role="tablist">
				<li class="contact-nav-tab"> Contact: </li>
				<li role="presentation" class="active"><a href="#council" aria-controls="council" role="tab" data-toggle="tab">Highlander Council</a></li>
				<li role="presentation"><a href="#media" aria-controls="media" role="tab" data-toggle="tab">Media Team</a></li>
			</ul>
		</div>

		<!-- Tab panes -->
	 	<div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="council">
				<!-- Contact Highlander Council -->
				<div class="contact-form">
					<!-- <h3>Contact the Council</h3> -->
					<h4> For inquiry about the points list and rules </h4>
					<?php echo do_shortcode('[contact-form-7 id="60" title="Council Contact Form"]'); ?>
				</div>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="media">
				<!-- Contact Media Team -->
				<div class="contact-form">
					<!-- <h3>Contact the Media Team</h3> -->
					<h4> For inquiry's about deck lists, the pod-cast, streams, and other media related topics </h4>
					<?php echo do_shortcode('[contact-form-7 id="59" title="Media Team Contact"]'); ?>

				</div>
			</div>
		</div>
		</div>

</div>
<?php get_footer() ?>
