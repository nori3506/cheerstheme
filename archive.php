<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cheerstheme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php if ( !is_post_type_archive('faqs') ): ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
			<?php else :?>
					<h1>FAQ</h1>
			<?php endif;?>

			<!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				if( is_post_type_archive('faqs') ) :
					get_template_part('template-parts/content-faqs');
				  else :
					get_template_part('template-parts/content');
				  endif;



			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->




	<?php if ( !is_post_type_archive('faqs') ):
		get_sidebar();
		get_footer();
	else :
		get_footer();

	endif;?>
