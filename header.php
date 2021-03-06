<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>	
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		
		<!--FONTS-->
			<script src="https://use.typekit.net/adq4pkf.js"></script>
			<script>try{Typekit.load({ async: false });}catch(e){}</script>
			
			<script src="https://use.fontawesome.com/dabd94fb6b.js"></script>

		<!-- Hotjar Tracking Code for http://www.thelovelygeek.com -->
		<script>
		    (function(h,o,t,j,a,r){
		        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		        h._hjSettings={hjid:266596,hjsv:5};
		        a=o.getElementsByTagName('head')[0];
		        r=o.createElement('script');r.async=1;
		        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		        a.appendChild(r);
		    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
		</script>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">
				
					<div id="logo" class="wrap cf">
						<div class="m-all t-2of3 d-5of7 cf">
						
							<a href="<?php echo home_url(); ?>" rel="nofollow" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/tlg-main-logo.svg" alt="<?php bloginfo('name'); ?>" /></a>
						
						</div>
						
						<div class="m-all t-1of3 d-2of7 last-col cf social">
							<a href="https://www.facebook.com/lovelygeek/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-facebook.svg" alt="facebook" /></a>
							<a href="http://twitter.com/LovelyGeek" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-twitter.svg" alt="twitter" /></a>
							<a href="http://instagram.com/thelovelygeek" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-instagram.svg" alt="instagram" /></a>
							<a href="http://www.pinterest.com/lovelygeek/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-pinterest.svg" alt="pinterest" /></a>
							<a href="https://www.flickr.com/photos/darth_cena/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-flickr.svg" alt="flickr" /></a>
							<a href="https://www.youtube.com/user/TheLovelyGeek" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-youtube.svg" alt="youtube" /></a>
							<a href="http://feeds.feedburner.com/thelovelygeek" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-rss.svg" alt="rss" /></a>
						</div>	
					</div>					

					<div class="navButtonContain">
						<a class="navButton"></a>
					</div>
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
