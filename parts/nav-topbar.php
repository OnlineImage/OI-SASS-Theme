<div class="top-bar" id="main-menu">
	<div class="top-bar-left">
		<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
		    <div class="site-logo">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"></a>
		    </div>
		<?php else : ?>
		<ul class="menu">
			<li class="menu-text"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
		<?php endif; ?> 
	</div>
	<div class="top-bar-right">
		<?php joints_top_nav(); ?>
	</div>
</div>