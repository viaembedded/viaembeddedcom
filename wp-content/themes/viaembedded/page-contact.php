<?php
/*
 *
 * The template for displaying the contact page.
 *
 * @package VIA Embedded
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
 			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		<div style="margin:0px;padding:0px;overflow:hidden;height:2100px">
    <iframe src="http://contact.viaembedded.com/en/service/contact.jsp" frameborder="0" style="overflow:hidden;height:150%;width:150%" height="150%" width="150%" scrolling="no" seamless="seamless"></iframe>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
