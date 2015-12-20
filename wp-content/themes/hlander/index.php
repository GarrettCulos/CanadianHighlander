<?php get_header(); ?>

<?php 

// page content goes here 

?>


<div class="fluid-container">
	<div id="aboutHighlander">
	    <div id="highlander-carousel" class="carousel slide" data-ride="carousel">
	        <!-- Carousel indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#highlander-carousel" data-slide-to="0" class="active"></li>
	            <li data-target="#highlander-carousel" data-slide-to="1"></li>
	            <li data-target="#highlander-carousel" data-slide-to="2"></li>
	        </ol>   
	        <!-- Wrapper for carousel items -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carosel/blotus.jpg" alt="First Slide">
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carosel/moxjet.jpg" alt="Second Slide">
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carosel/tvault.jpg" alt="Third Slide">
	            </div>
	        </div>
	        <!-- Carousel controls -->
	        <a class="carousel-control left" href="#highlander-carousel" data-slide="prev">
	            <span class="glyphicon glyphicon-menu-left"></span>
	        </a>
	        <a class="carousel-control right" href="#highlander-carousel" data-slide="next">
	            <span class="glyphicon glyphicon-menu-right"></span>
	        </a>
	    </div>
		<div class="container">
			<div id="highlander-points">
				<div class="points-list">
					<div class="row">
						<div class="col-offset-1 col-sm-5">Points List</div>
						<div class="col-sm-5">Last updated: Tuesday August 25th 2015</div>
					</div>	
					<div class="row">
						<div class="col-sm-4">
							<ul>
								<li>Ancestral Recall – 3</li>
								<li>Balance – 1</li>
								<li>Birthing Pod – 2</li>
								<li>Black Lotus – 4</li>
								<li>Demonic Tutor – 3</li>
								<li>Doomsday -2</li>
								<li>Enlightened Tutor – 1</li>
								<li>Fabricate – 1</li>
								<li>Fastbond – 1</li>
								<li>Flash – 4</li>
								<li>Gifts Ungiven – 1</li>
								<li>Hermit Druid – 4</li>
								<li>Imperial Seal – 1</li>
								<li>Library of Alexandria – 1</li>
							</ul>
						</div>
						<div class="col-sm-4">
							<ul>
								<li>Lim Dul’s Vault – 1</li>
								<li>Mana Crypt – 1</li>
								<li>Mana Vault – 1</li>
								<li>Merchant Scroll – 1</li>
								<li>Mox Emerald – 2</li>
								<li>Mox Jet – 2</li>
								<li>Mox Pearl – 2</li>
								<li>Mox Ruby – 2</li>
								<li>Mox Sapphire – 2</li>
								<li>Mystical Tutor – 1</li>
								<li>Natural Order – 3</li>
								<li>Oath of Druids – 1</li>
								<li>Personal Tutor – 1</li>
								<li>Protean Hulk – 3</li>
							</ul>
						</div>
						<div class="col-sm-4">
							<ul>
								<li>Skullclamp – 1</li>
								<li>Sol Ring – 3</li>
								<li>Stoneforge Mystic – 1</li>
								<li>Strip Mine – 2</li>
								<li>Summoner’s Pact – 2</li>
								<li>Survival of the Fittest – 2</li>
								<li>Tainted Pact – 1</li>
								<li>Time Vault – 5</li>
								<li>Time Walk – 3</li>
								<li>Tinker – 3</li>
								<li>Tolarian Academy – 1</li>
								<li>Transmute Artifact – 1</li>
								<li>Treasure Cruise – 1</li>
								<li>True Name Nemesis – 1</li>
								<li>Umezawa’s Jitte – 1</li>
								<li>Vampiric Tutor – 2</li>
							</ul>
						</div>
					</div>
				</div>	
			</div>
			<div id = "highlander-explanation"> 
				<div class="row">
					<div class="points-explanation">
						
					</div>
				</div>
			</div>
			<div id = "highlander-council-news">
				<div class="row">
					<div class="council-news">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>