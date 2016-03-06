				</div>
			</div>
		</div>
	</div>
	<footer> 
		<div class="fluid-container">
			<div class="hl-footer-top">
				<div class="col-sm-4 col-xs-12">
					<h2><a href="<?php echo get_template_directory_uri () ?>/decks">Decks</a></h2>
					<h3><a href="<?php echo get_template_directory_uri () ?>/decks">Tear One</a></h3>
					<h3><a href="<?php echo get_template_directory_uri () ?>/decks">Archetypes</a></h3>
					<h3><a href="<?php echo get_template_directory_uri () ?>/decks">Brews</a></h3>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h2><a href="<?php echo get_template_directory_uri () ?>/about">About</a></h2>
					<h3><a href="<?php echo get_template_directory_uri () ?>/about/#council">Council</a></h3>
					<h3><a href="<?php echo get_template_directory_uri () ?>/about/#points-list">Points List</a></h3>
					<h3><a href="<?php echo get_template_directory_uri () ?>/about/#rules">Rules</a></h3>
					<h3><a href="<?php echo get_template_directory_uri () ?>/about/#news">News</a></h3>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h2><a href="<?php echo get_template_directory_uri () ?>/podcasts">Podcasts</a></h2>
					<h2><a href="<?php echo get_template_directory_uri () ?>/twitch">Twitch</a></h2>
					<h2><a href="<?php echo get_template_directory_uri () ?>/contact">Contact Us</a></h2>
					<h2><a href="<?php echo get_template_directory_uri () ?>/youtube">Youtube</a></h2>
				</div>
			</div>
		</div>
		<div class="fluid-container">
			<div class="hl-footer-bottom">
				<div class="col-xs-12"><h3>Subscribe</h3></div>
				<div class="col-xs-12"><h4>Get updated whenever content is added to the website.</h4></div>
				<?php echo do_shortcode('[mc4wp_form id="22"]'); ?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>

  </body>
</html>