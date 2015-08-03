<?php
/**
 * The template for displaying the home page.
 *
 * @package VIA Embedded
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main frontpage" role="main">

		<?php get_template_part( 'content', 'page' ); ?>

<div class="frontpage latest section group">
<?php
	wp_reset_query();

	$category = 331; /* Perspectives Japanese */

	$args = array(
		'posts_per_page'   => 2,
		'offset'           => 0,
		'category'         => $category,
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'post_status'      => 'publish',
		);
	$category_posts = get_posts( $args );

	$category_name = get_the_category_by_ID( $category ); ?>
	<div class="stream col span_1_of_2">
	<h2 class="stream-title">
	<a href="<?php echo get_category_link( $category ); ?>">
	<?php
	      /* translators: %s: Name of a post category */
	      printf( __( 'Latest in %s', 'viaembedded' ), $category_name );
	?>
	</a>
	</h2>
	<?php
	set_query_var( 'category', $category );
	foreach ( $category_posts as $post ) : setup_postdata( $post ); ?>
	  <?php get_template_part( 'content', 'stream' ); ?>
	<?php endforeach; ?>
	</div><!-- .stream -->
	<?php
	wp_reset_postdata();
	wp_reset_query();
	?>

<?php
	wp_reset_query();

	$category = 329; /* Announcements Japanese */

	$args = array(
		'posts_per_page'   => 2,
		'offset'           => 0,
		'category'         => $category,
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'post_status'      => 'publish',
		);
	$category_posts = get_posts( $args );

	$category_name = get_the_category_by_ID( $category ); ?>
	<div class="stream col span_1_of_2">
	<h2 class="stream-title">
	<a href="<?php echo get_category_link( $category ); ?>">
	<?php
	      /* translators: %s: Name of a post category */
	      printf( __( 'Latest in %s', 'viaembedded' ), $category_name );
	?>
	</a>
	</h2>
	<?php
	set_query_var( 'category', $category );
	foreach ( $category_posts as $post ) : setup_postdata( $post ); ?>
	  <?php get_template_part( 'content', 'stream' ); ?>
	<?php endforeach; ?>
	</div><!-- .stream -->
	<?php
	wp_reset_postdata();
	wp_reset_query();
	?>
</div><!-- .frontpage.latest -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
