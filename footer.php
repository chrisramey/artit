					
				</section> <!-- section[role=main] -->
				<section id="sidebar" role="complementary">
					<?php
					$options = array(
						'container'			=> 'nav',
						'menu_class'		=> 'nav-bar'
					);
					wp_nav_menu($options);
					?>
				</section>
			</div> <!-- div.row -->
			<footer class="site-footer row" role="contentinfo">
				<p>Copyright &copy; <?php echo date('Y') ?> Melissa Krebs</p>
			</footer>
		</div> <!-- div.container -->
		
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/foundation/javascripts/jquery.js"></script>

		<!-- Included JS Files (Minified) -->
		<!--<script src="<?php echo get_template_directory_uri()?>/foundation/javascripts/foundation.min.js"></script>-->
		<script src="<?php echo get_template_directory_uri()?>/foundation/javascripts/jquery.offcanvas.js"></script>

		<!-- Initialize JS Plugins -->
		<script src="<?php echo get_template_directory_uri()?>/foundation/javascripts/app.js"></script>

		<!-- Theme JS -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/artit.js"></script>
	</body>
</html>