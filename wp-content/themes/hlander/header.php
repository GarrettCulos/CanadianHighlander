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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="main">
      <h1 class="sr-only"><?php bloginfo('title'); ?></h1>

      <?php get_template_part('top_nav'); ?>

      <div id="hl-content">
        <div class="fluid-container">
          <?php get_template_part('side_nav'); ?>

          <div id="hl-main-content" class="col-xs-offset-2 col-xs-10">

