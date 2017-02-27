<div id="blogsidebar" class="blogsidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'blogsidebar' ) ) : ?>

		<?php dynamic_sidebar( 'blogsidebar' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>