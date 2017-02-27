<div id="sidebartopphone" class="sidebar fullLarge medium-4 small-6 columns" role="complementary">

	<?php if ( is_active_sidebar( 'topphone' ) ) : ?>
				<span class="topPhone fa-stack fa-lg">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
				</span>				
		<?php dynamic_sidebar( 'topphone' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
