<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/styles.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/lessframework.css" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/fancydropdown.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/footer.css" rel="stylesheet" type="text/css" />
    
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/bec9bb03-a56a-4183-97b2-4d5fd50eeed6.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="http://www.northeastern.edu/scripts/modernizr-1.7.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/flexiblenav.js" type="text/javascript"></script>
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
            <div id="identifier">
		    	<div class="wrapper">
    		    	<h2>
        		    	<div id="site-description"><a href="/president">President Joseph E. Aoun</a></div>
            		</h2>
		        </div>
    		</div>
            <div id="nav-primary" class="nav">
            	<nav>
                	<div class="menu-button"><img alt="Open Menu" height="30" src="http://www.northeastern.edu/commencement/images/menu_open.gif" width="30"/></div>
					<div class="container">
					<!-- <?php if ( is_user_logged_in() ) {
				     	wp_nav_menu( array( 'theme_location' => 'logged-in-menu' ) ); // if the visitor is logged in, this primary navigation will be displayed
					} else { 
						wp_nav_menu ( array( 'menu' => 'Navigation', 'menu_class' => 'usernav'  ) );
				    	wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); /* if the visitor is NOT logged in, this primary navigation will be displayed. if a single menu should be displayed for both conditions, set the same menues to be displayed under both conditions through the Wordpress backend */
					} ?> -->
                    <?php wp_nav_menu( array( 'walker' => new Northeasternwebteam_Page_Navigation_Walker, 'items_wrap' => '<ul id="%1$s" class="%2$s" role="navigation" >%3$s</ul>' ) ); ?>
                    </div> <!-- end container -->
                </nav>
            </div><!--#nav-primary-->
            <?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
		</header>
        
    </div><!--#header-->

      <div id="body">
		<div class="container">