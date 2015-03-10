<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VIA Embedded
 */
?>
<?php $language = get_bloginfo('language'); ?>
		</div><!-- #content -->
	</div><!-- .main -->
</div><!-- #content-row -->

<div id="footer-row" class="full">
	<div id="footer-banner" class="full">
		<ul>
		 <?php if($language == "zh-CN") { ?>
	               <li><a href="/products-cn/">威盛产品</a></li>
	               <li><a href="/solutions-cn/">解决方案</a></li>
	               <li><a href="/services-cn/">威盛服务</a></li>
	               <li><a href="/contact-cn/">联系我们</a></li>
	               <li><a href="/store/">威盛商城</a></li>
		 <?php } else { ?>
	               <li><a href="/products/">Products</a></li>
	               <li><a href="/solutions/">Solutions</a></li>
	               <li><a href="/services/">Services</a></li>
	               <li><a href="/contact/">Contact</a></li>
	               <li><a href="/store/">Store</a></li>
		 <?php }; ?>
		</ul>
	</div>
	<div class="main">
		<footer id="colophon" class="site-footer inner" role="contentinfo">
			<div class="site-info">
				<div id="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="Home"><img src="<?php echo get_template_directory_uri(); ?>/images/VIA_Embedded_Logo_small.png" width="249" height="48" alt="VIA Embedded Logo"></a>
				</div>
			        <?php $language = get_bloginfo('language');
				  if($language == "zh-CN") { ?>
				<div>
					<strong>中国</strong><br>
					<a href="tel:400-818-5166">400-818-5166</a><br>
					<a href="mailto:embedded@viatech.com.cn">embedded@viatech.com.cn</a>
				</div>
				<div>
					<strong>其它国家和地区</strong><br>
					<a href="tel:+886-2-2218-5452">+886-2-2218-5452</a><br>
					<a href="mailto:embedded@via.com.tw">embedded@via.com.tw</a>
				</div>
				<?php } else { ?>
				<div>
					<strong>Americas</strong><br>
					<a href="tel:+1-510-687-4688">+1-510-687-4688</a><br>
					<a href="mailto:embedded@viatech.com">embedded@viatech.com</a>
				</div>
				<div>
					<strong>Europe</strong><br>
					<a href="tel:+49-228-688565-0">+49-228-688565-0</a><br>
					<a href="mailto:embedded@via-tech.eu">embedded@via-tech.eu</a>
				</div>
				<div>
					<strong>Rest of the World</strong><br>
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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-ie.css"></script>
<![endif]-->

</body>
</html>
