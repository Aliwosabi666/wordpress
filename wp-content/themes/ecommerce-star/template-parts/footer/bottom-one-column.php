<!-- bottom footer -->
<div class="container footer-bottom-section" >
	<div class="row bottom-menu">
	  <center>
		<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
						'container_class' => 'bottom-menu'
					)
				);
				?>
	  </center>
	</div>
	
	<!-- info -->
	<div class="row site-info one-column text-center">
	  <?php global $ecommerce_star_option; echo esc_html($ecommerce_star_option['footer_section_bottom_text']); ?>
	</div>
	<!-- end of info -->
</div>