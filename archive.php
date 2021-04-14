<?php get_header(); ?>

	<main id="primary" class="site-main">

	<?php if ( have_posts() ) : 
		if( is_post_type_archive('faqs') ) : ?>
			<div class="faq-wrapper">
			<h2>FAQ</h2> 
				<?php while ( have_posts() ) :
				the_post();
				get_template_part('template-parts/content-faqs');
				endwhile; ?>
			</div>
		<?php else:	
			get_template_part('template-parts/content');
		endif;			
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif; ?>
	</main><!-- #main -->

<?php get_footer(); ?>
