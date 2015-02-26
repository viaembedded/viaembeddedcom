<?php
/**
 * The template used for displaying latest post on the frontpage (front-page.php).
 *
 * @package apoip
 */
?>

<?php $category_name = get_the_category_by_ID( $category ); ?>
<h2 class="stream-title"><a href="<?php echo get_category_link( $category ); ?> ">Latest in <?php echo $category_name; ?></a></h2>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
	<?php if ( has_post_thumbnail() ) {
	      the_post_thumbnail('frontpage');
	     } else {
              echo  '<img src="' . get_stylesheet_directory_uri() . '/images/' . $category_name . '.jpg">';
             }
        ?> 
	</a>

	<?php the_title( sprintf( '<header class="stream-header"><h3 class="stream-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3></header>' ); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a class="more-link" href="<?php the_permalink(); ?>" rel="bookmark">
			<?php
				/* translators: %s: Name of page */
				printf( 'Read more %s' , the_title( '<span class="screen-reader-text">', '</span>', false ) );
			?>
		</a></p>
	</div><!-- .entry-summary -->

	<?php edit_post_link( 'Edit', '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
