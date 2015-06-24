<div id="sidebar-left">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left') ) : ?>
	<ul>	
			
			
			<li id="sidebar-nav" class="widget menu">
				<h3><?php _e('Quick Links'); ?></h3>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); /* editable within the Wordpress backend */ ?>
				</ul>
			</li>
			
			
	</ul>
		<?php endif; ?>
</div><!--sidebar-->
