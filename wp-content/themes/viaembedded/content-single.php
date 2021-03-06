<?php
/**
 * @package VIA Embedded
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <?php if ( has_post_thumbnail() ) {
                          the_post_thumbnail('full', array( 'class' => 'aligncenter' ));
                      }
                ?>

		<div class="entry-meta">
			<?php viaembedded_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'viaembedded' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php viaembedded_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
