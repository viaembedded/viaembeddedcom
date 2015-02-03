<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VIA Embedded
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
   <?php
   $args = array(
	'type'                     => 'post',
	'parent'                   => get_query_var('cat'),
	'orderby'                  => 'name',
	'order'                    => 'DESC',
	'hide_empty'               => 1,
	'taxonomy'                 => 'category',
	'pad_counts'               => false
   );
   $categories = get_categories( $args );
   if (sizeof($categories) > 0) : ?>
   <select name="subs-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
   <option value=""><?php echo esc_attr(__('Subcategories')); ?></option>
     <?php
        foreach ($categories as $category) {
          $option = '<option value="/category/'.$category->category_nicename.'">';
          $option .= $category->cat_name;
          $option .= ' ('.$category->category_count.')';
          $option .= '</option>';
          echo $option;
        }
     ?>
   </select>
   <?php endif; ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php viaembedded_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
