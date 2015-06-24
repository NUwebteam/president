<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	    <title><?php if ( is_category() ) {
		echo single_cat_title(); echo ' | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );  echo ' | '; echo 'Northeastern University';
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );  echo ' | '; echo 'Northeastern University';
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} elseif ( is_home() || is_front_page() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' ); echo ' | '; echo 'Northeastern University';
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} elseif ( is_single() ) {
		echo wp_title(''); echo ' | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!-- Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	
   
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/lessframework.css" />
    <link href="<?php bloginfo('template_url'); ?>/fancydropdown.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/footer.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/bec9bb03-a56a-4183-97b2-4d5fd50eeed6.css"/>
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="http://www.northeastern.edu/scripts/modernizr-1.7.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/flexiblenav.js" type="text/javascript"></script>
    
</head>

<body <?php body_class(); ?>>
<div class="none">
	<p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.none-->
<div id="main"><!-- this encompasses the entire Web site -->
	<div id="header">
    	<header>
			<div class="wrapper">
            <div id="logo"><a href="http://www.northeastern.edu/"><?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
				
					<div id="header-image" class="container">
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('name'); ?>" />
					</div></a><!--#header-image-->
			
			<?php endif; // end check for removed header image ?>
            	</div>
				<!-- <div id="header-image" class="container"></div> --><!--#header-image-->
				<!-- <div class="clear"></div> -->
                <div class="nav-search">
	            	<?php get_search_form(); ?>
    	        </div>
                    <div class="clear"></div>
                <!--span class="school">
						<h2><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h2></span-->
			</div><!--.wrapper-->
            <div id="nav-primary" class="nav">
		</header>
        <div id="identifier">
	    	<div class="wrapper">
    	    	<h2>
        	    	<div id="site-description"><a href="index.php"><?php bloginfo( 'description' ); ?></a></div>
            	</h2>
	        </div>
    	</div>
    </div><!--#header-->

      <div id="body" <?php if ( is_home() || is_front_page() ) { ?>class="pull-up-video"<?php } ?>>
		<?php if ( is_home() || is_front_page() ) { ?>
			
		<?php } else { ?>
        	<div class="container">
        <?php } ?>
            
      	