<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link rel="icon" href="/library/images/favicons/favicon.ico">
	    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/library/images/favicons/favicon-152.png">
	    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/library/images/favicons/favicon-120.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/library/images/favicons/favicon-72.png">
	    <link rel="apple-touch-icon-precomposed" href="/library/images/favicons/favicon-57.png">

	    <link href='http://fonts.googleapis.com/css?family=Cabin:400,600|Open+Sans:300,600,400' rel='stylesheet'>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

        <?php 
            global $brew_options; ?>

		 <!-- =========================
     PRE LOADER       
    ============================== -->
    <div class="preloader">
        <div class="status">
            &nbsp;
        </div>
    </div>

    <!-- =========================
     SECTION: HOME / HEADER  
    ============================== -->
    <header class="header" data-stellar-background-ratio="0.5" id="home">

        <!-- COLOR OVER IMAGE -->
        <!-- <div class="overlay-layer"> -->

            <!-- STICKY NAVIGATION -->
            <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">
                <div class="container">
                    <div class="navbar-header">

                        <!-- LOGO ON STICKY NAV BAR -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#stamp-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-grid-2x2"></span>
                        </button>

                        <!-- LOGO -->
                        <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
                            <?php if (isset($brew_options['opt-logo']) && !empty($brew_options['opt-logo'])){
                               echo "<img src=".$brew_options['opt-logo']['url']." alt=''>";
                            } else {
                                bloginfo('name'); 
                            }?>
                        </a>

                    </div>

                    <!-- TOP BAR -->
                    <div class="navbar-collapse collapse" id="stamp-navigation">
                    	<?php bones_main_nav(); ?>

                    </div>
                </div>
                <!-- /END CONTAINER -->
            </div>
            <!-- /END STICKY NAVIGATION -->

            <!-- CONTAINER -->            
    </header>
     <section class="main grey-bg" id="main_section">
     	<?php get_template_part( 'slider' ); ?>

   
