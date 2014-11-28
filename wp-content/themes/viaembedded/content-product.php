<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package VIA Embedded
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div id="product-thumb"><?php the_post_thumbnail( $size, $attr ); ?></div>
		<div id="product-highlights">
			<?php $shop_link = get_post_meta( get_the_ID(), 'shop-link', true );
			if( ! empty( $shop_link ) ) {
				echo "<div id=\"shop-link\"><a class=\"fasc-button fasc-size-medium fasc-type-flat fasc-rounded-medium fasc-ico-before dashicons-cart\"
style=\"background-color: #0079C2; color: #ffffff;\" href=\"$shop_link\"
data-fasc-style=\"background-color:#0079C2;color:#ffffff;\">Order Sample</a>
</div>
";
			}
			?>
			<?php $highlights = get_post_meta( get_the_ID(), 'product-highlight', false );
			if( ! empty( $highlights ) ) {
				echo "<ul class=\"product-highlights\">";
				foreach ($highlights as $line) {
					echo "<li class=\"product-highlights-item\">$line</li>";
				}
				echo "</ul>";
			}
			?>
		</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'viaembedded' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'viaembedded' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
