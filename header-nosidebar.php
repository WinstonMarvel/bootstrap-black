<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row ">
			<div class="site-header-inner col-xs-12">

				<div class="site-branding row">
										
										
										<img class= "col-sm-2 col-xs-2 img-responsive brand-image hidden-sm hidden-xs"  src="http://www.johngiftah.com/logo.png" alt="john giftah international logo">
																	 <!-- Winston added this div -->
									
										<div class="col-sm-4 col-xs-11 title-description">
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> &reg;</a></h1>
										<p class="lead"><?php bloginfo( 'description' ); ?></p>
										</div>

										<div class ="col-xs-1 hidden-xs" id="johns-face">
										<img class="img-responsive" src="http://www.johngiftah.com/john.png"> 

										</div>

										
										<div class="col-sm-5 col-xs-12 social-buttons-container">
													
											<div class="row social-buttons">

												<div class="widget_search search-bar col-xs-4 col-sm-4"> <?php get_search_form(); ?></div>

												<div class="social-buttons-floater">								
													<a href="https://www.facebook.com/John-Giftah-International-Ministries-116935621657668/" target="_blank"><img class="img-responsive social-icon col-xs-2" src="http://www.johngiftah.com/facebook.svg"></a>

													<a href="https://www.youtube.com/user/sjohngiftah" target="_blank"><img class="img-responsive social-icon col-xs-2" src="http://www.johngiftah.com/youtube.svg"></a>

													 <a href="https://twitter.com/johngiftah" target="_blank">
													<img class="img-responsive social-icon col-xs-2" src="http://www.johngiftah.com/twitter.svg"></a>  
													
													<a href="http://johngiftah.com/subscribe/" target="_blank"><img class="img-responsive social-icon col-xs-2" src="http://www.johngiftah.com/whatsapp.svg"></a>		
												</div>	

												
											</div>	

											
											<?php wp_nav_menu( array( 'theme_location' => 'side-menu','container_class' => 'sidemenu hidden-xs' ) ); ?>
											

										</div>	

								</div>
						
				</div>

							


				<!--<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img class="col-sm-12-fluid img-responsive" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>-->


				

			</div>
		
	</div><!-- .container -->
</header><!-- #masthead -->

<nav class="site-navigation">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div class="site-navigation-inner col-sm-12-fluid">
				<div class="navbar navbar-default">
					<div class="navbar-header">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
	
						<!-- Your site title as branding in the menu -->
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>

				</div><!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->

							<!--This is the HEADER SLIDER PLUGIN APP -->
							<div class="headerslider hidden-xs">
 							<?php echo do_shortcode('[sp_responsiveslider design="design-1" width="1080"
 							height="270" effect="fade" pagination="true" navigation="false"
 							speed="4000" autoplay="true" autoplay_interval="9000"]'); ?>
 							</div>

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">

