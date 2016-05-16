<?php 
/*
	Top Navigation
*/ 
?>

<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
  <ul class="nav sidebar-nav">

	  <li>
	      <a href="#">Home</a>
	  </li>
	  <li><a href="<?php echo get_template_directory_uri () ?>/decks">Decks</a></li>
		<li><a href="<?php echo get_template_directory_uri () ?>/about">About</a></li>
		<!-- <li><a href="<?php // echo get_template_directory_uri () ?>/about/#council">Council</a></li> -->
		<!-- <li><a href="<?php // echo get_template_directory_uri () ?>/about/#points-list">Points List</a></li> -->
		<!-- <li><a href="<?php // echo get_template_directory_uri () ?>/about/#rules">Rules</a></li> -->
		<!-- <li><a href="<?php // echo get_template_directory_uri () ?>/about/#news">News</a></li> -->
		<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">Media <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li class="dropdown-header">Canadian Highlander Fun Times</li>
		    <li><a href="<?php echo get_template_directory_uri () ?>/podcasts">Podcasts</a></li>
				<li><a href="<?php echo get_template_directory_uri () ?>/twitch">Twitch</a></li>
				<li><a href="<?php echo get_template_directory_uri () ?>/youtube">Youtube</a></li>
		  </ul>
    </li>
		<li><a href="<?php echo get_template_directory_uri () ?>/contact">Contact Us</a></li>
  
  </ul>
</nav>	




