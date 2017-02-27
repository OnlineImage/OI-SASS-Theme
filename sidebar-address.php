<div id="sidebaraddress" class="sidebar fullLarge medium-4 small-6 columns" role="complementary">

	<?php if ( is_active_sidebar( 'address' ) ) : ?>
				<span class="topAddress fa-stack fa-lg">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
				</span>
		<?php dynamic_sidebar( 'address' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
