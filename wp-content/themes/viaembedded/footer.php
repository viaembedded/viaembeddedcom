<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VIA Embedded
 */
?>

		</div><!-- #content -->
	</div><!-- .main -->
</div><!-- #content-row -->

<div id="footer-row" class="full">
	<div id="footer-banner" class="full">
		<ul>
	               <li><a href="/products/">Products</a></li>
	               <li><a href="/solutions/">Solutions</a></li>
	               <li><a href="/services/">Services</a></li>
	               <li><a href="/contact/">Contact</a></li>
	               <li><a href="/store/">Store</a></li>
		</ul>
	</div>
	<div class="main">
		<footer id="colophon" class="site-footer inner" role="contentinfo">
			<div class="site-info">
				<div id="footer-logo">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/viaembedded-small.png" width="249" height="48" alt="VIA Embedded Logo"></a>
				</div>
				<div>
					<strong>Americas</strong><br>
					<a href="tel:+1-510-687-4688">+1-510-687-4688</a><br>
					<a href="mailto:embedded@viatech.com">embedded@viatech.com</a>
				</div>
				<div>
					<strong>Europe</strong><br>
					<a href="tel:+49-228-688565-0">+49-228-688565-0</a><br>
					<a href="mailto:embedded@viatech.eu">embedded@viatech.eu</a>
				</div>
				<div>
					<strong>Rest of the World</strong><br>
					<a href="tel:+886-2-2218-5452">+886-2-2218-5452</a><br>
					<a href="mailto:embedded@via.com.tw">embedded@via.com.tw</a>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #main -->
</div><!-- #footer-row -->

<?php wp_footer(); ?>

</body>
</html>
