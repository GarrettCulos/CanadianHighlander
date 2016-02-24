<?php 
/*
	Side Navigation
*/ 
?>

		<div class="side-nav-wrapper">
			<ul>
				<li role="presentation"><a href="<?php echo get_template_directory_uri() ?>/about">About</a>
					<ul class="sub-nav"> 
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/about/#council"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/people_poop.svg">Council</a></li>
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/about/#points-list"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/symbols.svg">Points List</a></li>
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/about/#rules"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/book.svg">Rules</a></li>
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/about/#news"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/alert.svg">News</a></li>
					</ul>
				</li>
				
				<li role="presentation"><a href="<?php echo get_template_directory_uri() ?>/decks">Decks</a>
					<ul class="sub-nav"> 
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/decks"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/business.svg">Visualizer</a></li>
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/decks"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/circle.svg">Tear One</a></li>
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/decks"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/transport.svg">Brews</a></li>
					</ul>
				</li>
				<li role="presentation"><a href="<?php echo get_template_directory_uri() ?>/articles">Articles</a>
					<ul class="sub-nav"> 
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/articles"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/meta.svg">Monday Night Meta</a></li>
						<li class="presentation"><a href="<?php echo get_template_directory_uri() ?>/articles"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/three.svg">Deck-Techs</a></li>
					</ul>
				</li>

				<li role="presentation">Media
					<ul class="sub-nav"> 
						<li role="presentation"><a href="<?php echo get_template_directory_uri() ?>/podcasts"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/folder.svg">Podcasts</a></li>
						<li role="presentation"><a href="<?php echo get_template_directory_uri() ?>/youtube"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/youtube.svg">Youtube</a></li>
						<li role="presentation"><a href="<?php echo get_template_directory_uri() ?>/twitch"><img class="svg" src="<?php echo hl_get_svg_directory(); ?>/twitch.svg">Twitch</a></li>
					</ul>
				</li>
				
				<li role="presentation"><a href="<?php echo get_template_directory_uri() ?>/contact">Contact Us</a></li>

			</ul>	
		</div>
