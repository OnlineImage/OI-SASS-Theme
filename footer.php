					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="large-12 medium-12 columns">
								<?php if ( get_theme_mod( 'footerels_copyright' ) ) : ?>
									<p class="source-org copyright"><?php echo get_theme_mod( 'footerels_copyright' ); ?></p>
								<?php else: ?>
									<p class="source-org copyright">Proudly Powered by WordPress | &copy; <?php echo date('Y'); ?> OnlineImage</p>
								<?php endif; ?>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->