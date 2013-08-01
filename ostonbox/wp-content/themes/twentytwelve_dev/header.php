<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<style type="text/css">
   body {
        padding-top: 60px;
        padding-bottom: 40px;
		font-family:Verdana, Geneva, sans-serif;
      }
  .sidebar-nav {
    /*padding: 9px 0;*/
  }

  @media (max-width: 980px) {
    /* Enable use of floated navbar text */
	body{
		padding-top: 0px;
        padding-bottom: 40px;
	}
    .navbar-text.pull-right {
      float: none;
      padding-left: 5px;
      padding-right: 5px;
    }
  }
</style>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <!--Logged in as <a href="#" class="navbar-link">Username</a>-->
            </p>	
            <ul class="nav">
			  <?php wp_nav_menu_without_containers(); ?>			  
            </ul><!--/.nav -->	
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!--/.navbar-inner -->
    </div><!--/.navbar -->
	
	<blockquote>
		<p class="muted text-center"><?php bloginfo( 'description' ); ?></p>
	</blockquote><!--/.blockquote -->
	
	<div class="row-fluid">
		<?php get_search_form(); ?>
	</div><!--/.search-form -->

	<!--
	<header id="masthead" class="site-header">	
		<div class="container">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header> -->
	
	
    <div class="container-fluid">
