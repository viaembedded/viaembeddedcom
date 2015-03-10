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

	$category = 13; /* Perspectives English */

	$args = array(
		'posts_per_page'   => 1,
		'offset'           => 0,
		'category'         => $category,
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'post_status'      => 'publish',
		'lang'		   => 'en',
		);
	$category_posts = get_posts( $args );

	set_query_var( 'category', $category );
	foreach ( $category_posts as $post ) : setup_postdata( $post ); ?>
	<div class="stream col span_1_of_2">
	  <?php get_template_part( 'content', 'stream' ); ?>
	</div><!-- .stream >
	<?php endforeach;
	wp_reset_postdata();
	wp_reset_query();
	?>
</div><!-- .frontpage.latest -->

<?php
	wp_reset_query();

	$category = 15; /* Announcements English */

	$args = array(
		'posts_per_page'   => 1,
		'offset'           => 0,
		'category'         => $category,
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'post_status'      => 'publish',
		'lang'		   => 'en',
		);
	$category_posts = get_posts( $args );

	set_query_var( 'category', $category );
	foreach ( $category_posts as $post ) : setup_postdata( $post ); ?>
	<div class="stream col span_1_of_2">
	  <?php get_template_part( 'content', 'stream' ); ?>
	</div><!-- .stream >
	<?php endforeach;
	wp_reset_postdata();
	wp_reset_query();
	?>
</div><!-- .frontpage.latest -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
