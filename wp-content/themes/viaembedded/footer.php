<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VIA Embedded
 */
?>
<?php $language = pll_current_language('slug'); ?>
		</div><!-- #content -->
	</div><!-- .main -->
</div><!-- #content-row -->

<div id="footer-row" class="full">
	<div id="footer-banner" class="full">
		<ul>
	               <li><a href="<?php $tr_id = pll_get_post(10295, $language); echo get_page_link($tr_id); ?>"><?php /* translators: Footer header */ _e("Newsletter", "viaembedded"); ?></a></li>
	               <li><a href="<?php $tr_id = pll_get_post(12, $language); echo get_page_link($tr_id); ?>"><?php /* translators: Footer header */ _e("Products", "viaembedded"); ?></a></li>
	               <li><a href="<?php $tr_id = pll_get_post(35, $language); echo get_page_link($tr_id); ?>"><?php /* translators: Footer header */ _e("Services", "viaembedded"); ?></a></li>
	               <li><a href="<?php $tr_id = pll_get_post(1076, $language); echo get_page_link($tr_id); ?>"><?php /* translators: Footer header */ _e("Contact", "viaembedded"); ?></a></li>
	               <li><a href="/store/"><?php /* translators: Footer header */ _e("Store", "viaembedded"); ?></a></li>
		</ul>
	</div>
	<div class="main">
		<footer id="colophon" class="site-footer inner" role="contentinfo">
			<div class="site-info">
				<div id="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/VIA_Logo_small.png" width="108" height="48" alt="Home"></a>
				</div>
			        <?php if($language == "cn") { ?>
				<div class="corp-contact">
					<strong><?php _e("China", "viaembedded"); ?></strong><br>
					<a href="tel:400-818-5166">400-818-5166</a><br>
					<a href="mailto:embedded@viatech.com.cn">embedded@viatech.com.cn</a>
				</div>
				<div class="corp-contact">
					<strong><?php _e("Rest of the World", "viaembedded"); ?></strong><br>
					<a href="tel:+886-2-2218-5452">+886-2-2218-5452</a><br>
					<a href="mailto:embedded@via.com.tw">embedded@via.com.tw</a>
				</div>
			        <?php } elseif($language == "ja") { ?>
				<div class="corp-contact">
					<strong><?php _e("Japan", "viaembedded"); ?></strong><br>
					<a href="tel:+81-3-5466-1637">+81-3-5466-1637</a><br>
					<a href="mailto:embedded@viatech.co.jp">embedded@viatech.co.jp</a>
				</div>
				<div class="corp-contact">
					<strong><?php _e("Rest of the World", "viaembedded"); ?></strong><br>
					<a href="tel:+886-2-2218-5452">+886-2-2218-5452</a><br>
					<a href="mailto:embedded@via.com.tw">embedded@via.com.tw</a>
				</div>
				<?php } else { ?>
				<div class="corp-contact">
					<strong><?php _e("Americas", "viaembedded"); ?></strong><br>
					<a href="tel:+1-510-687-4688">+1-510-687-4688</a><br>
					<a href="mailto:embedded@viatech.com">embedded@viatech.com</a>
				</div>
				<div class="corp-contact">
					<strong><?php _e("Europe", "viaembedded"); ?></strong><br>
					<a href="tel:+39-342-5754296">+39-342-5754296</a><br>
					<a href="mailto:embedded@via-tech.eu">embedded@via-tech.eu</a>
				</div>
				<div class="corp-contact">
					<strong><?php _e("Rest of the World", "viaembedded"); ?></strong><br>
					<a href="tel:+886-2-2218-5452">+886-2-2218-5452</a><br>
					<a href="mailto:embedded@via.com.tw">embedded@via.com.tw</a>
				</div>
				<?php }; ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #main -->
</div><!-- #footer-row -->

<?php wp_footer(); ?>

<!--[if lt IE 9]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-ie.css">
<![endif]-->

</body>
</html>
