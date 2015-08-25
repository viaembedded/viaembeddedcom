<?php
/*
 *
 * The template for displaying the contact page for the different languages.
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
<?php
    $language = pll_current_language('slug');
    if ($language == "cn") {
          $contact_url = "http://contact.viaembedded.com/cn/service/contact.jsp";
    } elseif($language == "ja") {
          $contact_url = "http://contact.viaembedded.com/jp/service/contact.jsp";
    } elseif($language == "tw") {
          $contact_url = "http://contact.viaembedded.com/tw/service/contact.jsp";
    } else {
          /* "en" and default to unknown languages */
          $contact_url = "http://contact.viaembedded.com/en/service/contact.jsp";
    };
?>

    <iframe src="<?php echo $contact_url;?>" frameborder="0" style="overflow:hidden;height:150%;width:150%" height="150%" width="150%" scrolling="no" seamless="seamless"></iframe>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
