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
	  <!-- <div id="product-thumb"><?php the_post_thumbnail( $size, $attr ); ?></div> -->
	  <div id="product-thumb">
	  <div id="slides">
	      <?php
		 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slideshow' );
	         $thumb_url = $thumb[0];
	      ?>
	      <img src="<?php echo $thumb_url;?>">
	  <?php
	     if (class_exists('MultiPostThumbnails')) {
	        for($i=1; $i<5; $i++) {
	 	   $thumb = MultiPostThumbnails::get_post_thumbnail_id('page', 'additional-image-'.$i, $post->ID);
  	           $thumb_src = wp_get_attachment_image_src($thumb,'page-secondary-image-'.i.'-slideshow');
	           $thumb_url = $thumb_src[0];
	           if (strlen($thumb_url) > 0) {
                     ?>
	        <img src="<?php echo $thumb_url;?>">
	             <?
	           }
		}
	     }
	  ?>
	  </div>
	  </div>
		<div id="product-info">
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
				echo "<ul id=\"product-highlights\">";
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
