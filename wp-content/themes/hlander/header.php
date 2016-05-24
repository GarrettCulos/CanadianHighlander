<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Raleway|Ubuntu' rel='stylesheet' type='text/css'>
        <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/build/main.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <header></header>
    
    <div id="wrapper">

        <?php get_template_part('nav'); ?>

        <div id="page-content-wrapper">
            <div id="inner-nav">
                <!-- /#sidebar-wrapper -->
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>

                <div class="social-icons">
                    <a class="nav-icon" href="https://www.facebook.com/groups/288447914624649/" target="_blank">
                        <img class="svg" src="<?php echo hl_get_svg_directory(); ?>/facebook.svg">
                    </a>

                    <a class="nav-icon" href="https://twitter.com/search?q=canadian%20highlander&src=typd&lang=en" target="_blank">
                        <img class="svg" src="<?php echo hl_get_svg_directory(); ?>/twitter.svg">
                    </a>

                    <a class="nav-icon" href="https://www.youtube.com/channel/UCbdfxCOi0vvWXFqSHfrywvw" target="_blank">
                        <img class="svg" src="<?php echo hl_get_svg_directory(); ?>/youtube.svg">
                    </a>

                    <a class="nav-icon" href="http://www.twitch.tv/canhighlander/profile" target="_blank">
                        <img class="svg" src="<?php echo hl_get_svg_directory(); ?>/twitch.svg">
                    </a>    
                </div>
            </div>    
        
            <div class="overlay"></div>
            
            <div class="content-container">
                
            
                
            
