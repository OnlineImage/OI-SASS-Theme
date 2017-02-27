<div id="beginFooter" class="footerLinks">
	<div class="row">
		<div class="large-6 medium-6 columns">
			<?php get_sidebar('quicklinks'); ?>
		</div>
		<div class="large-6 medium-6 columns">
			<?php get_sidebar('connected'); ?>
		</div>
	</div>
</div>					
					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved | <a href="#">A Freedom Healthworks Practice</a></p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->