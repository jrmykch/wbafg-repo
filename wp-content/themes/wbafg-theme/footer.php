<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WBAfG_Theme
 */

?>

	<footer class="site-footer">

		<div class="footer-mobile">

			<div class="footer-mobile-menu-container">
				<div class="footer-mobile-menu-main-nav">
					<nav>
						<?php
							wp_nav_menu( array(
								'menu'    => 'main',
							) );
						?>
					</nav>
				</div>
				<div class="footer-mobile-menu-sec-nav">
					<nav>
						<?php
							wp_nav_menu( array(
								'menu'    => 'footer',
							) );
						?>
					</nav>
					<nav class="is-hidden">
						<?php
							wp_nav_menu( array(
								'menu'    => 'footer',
							) );
						?>
					</nav>
				</div>
			</div>

			<div class="footer-mobile-contact-container">
				<div><a href="tel:+49651146150">T +49.651.146150</a></div>
				<div><a href="mailto:info@wernerbohr.de">info@wernerbohr.de</a></div>
				<div>
					<a href="https://www.instagram.com/wbafg/" target="_blank" class="fa fa-instagram"></a>
					<a href="https://www.facebook.com/wbafg/" target="_blank" class="fa fa-facebook"></a>
				</div>										
			</div>

			<div class="footer-mobile-address-container">
				<div><span style="text-transform: uppercase; letter-spacing: 1px;">Trier</span><br>Werner Bohr - Agentur für Gestaltung<br>Maximinstr. 3 • 54292 Trier</div>
				<div><span style="text-transform: uppercase; letter-spacing: 1px;">Berlin</span><br>Werner Bohr - Agentur für Gestaltung<br>Holsteinische Str. 12 • 10717 Berlin</div>
			</div>

		</div>

		<!-- TABLET UP -->

		<div class="footer-tablet-up">
			<div class="footer-tablet-up-main-nav">
				<nav>
					<?php
						wp_nav_menu( array(
							'menu'    => 'main',
						) );
					?>
				</nav>			
			</div>
			<div class="footer-tablet-up-sec-nav">
				<nav>
					<?php
						wp_nav_menu( array(
							'menu'    => 'footer',
						) );
					?>
				</nav>	
			</div>
			<div class="footer-tablet-up-contact">
				<div><a href="tel:+49651146150">T +49.651.146150</a></div>
				<div><a href="mailto:info@wernerbohr.de">info@wernerbohr.de</a></div>
				<div>
					<a href="https://www.instagram.com/wbafg/" target="_blank" class="fa fa-instagram"></a>
					<a href="https://www.facebook.com/wbafg/" target="_blank" class="fa fa-facebook"></a>
				</div>	
			</div>
			<div class="footer-tablet-up-address">
				<div><span style="text-transform: uppercase; letter-spacing: 1px;">Trier</span><br>Werner Bohr - Agentur für Gestaltung<br>Maximinstr. 3 • 54292 Trier</div><br>
				<div><span style="text-transform: uppercase; letter-spacing: 1px;">Berlin</span><br>Werner Bohr - Agentur für Gestaltung<br>Holsteinische Str. 12 • 10717 Berlin</div>				
			</div>
		</div>

	</footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
