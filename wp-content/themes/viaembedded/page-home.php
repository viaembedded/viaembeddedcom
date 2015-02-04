<?php
/**
 * The template for displaying the home page.
 *
 * @package VIA Embedded
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

<div class="frontpage latest section group">
	<div class="col span_1_of_2">
         <h2>Latest in Perspectives</h2>
<?php
	$args = array( 'numberposts' => 1,
		       'offset' => 0,
		       'category' => 13,
		       'orderby' => 'post_date',
		       'order' => 'DESC',
		       'post_type' => 'post',
		       'post_status' => 'publish',
		       'meta_key' => '_thumbnail_id'
		       );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ) {
	  echo '<a href="'. get_permalink($recent["ID"]) .'">'. get_the_post_thumbnail($recent["ID"], "frontpage") .'</a>';
	  echo '<h3><a href="'. get_permalink($recent["ID"]) .'">'. $recent["post_title"].'</a></h3>';
	  echo '<p>'. $recent["post_excerpt"] .'</p>';
	}
?>
	</div>

	<div class="col span_1_of_2">
         <h2>Latest in Announcements</h2>
<?php
	$args = array( 'numberposts' => 1,
		       'offset' => 0,
		       'category' => 15,
		       'orderby' => 'post_date',
		       'order' => 'DESC',
		       'post_type' => 'post',
		       'post_status' => 'publish'
		       );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
?>
	</div>
</div>
  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
