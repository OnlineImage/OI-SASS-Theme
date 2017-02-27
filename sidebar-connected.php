<div id="sidebarConnected" class="sidebar large-12 medium-12 columns" role="complementary">

	<?php if ( is_active_sidebar( 'connected' ) ) : ?>

		<?php dynamic_sidebar( 'connected' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>