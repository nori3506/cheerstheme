<?php get_header(); ?>
<main id="primary" class="site-main"> 

	<!-- About Cheers -->
	<section class="about-cheers-container">
	<?php
		$args = array(
		'post_type'       =>    'about_section',
		'posts_per_page'  =>    '1',
		);
	
		$my_query = new WP_Query( $args );
	
		if ( $my_query->have_posts() ) :
		while ( $my_query->have_posts() ) :
			$my_query->the_post(); ?>

		<article 
		<?php post_class(); ?> 
		id="<?php the_title_attribute(); ?>"
		>
		
		<div class="about-cheers-content">
			<h2>About <span>Cheers</span></h2>
			<?php the_content(); ?>
		</div>
		<?php the_post_thumbnail(); ?>
		</article>
		
		<?php endwhile;
		else :
		get_template_part('template-parts/content-none.php');
		endif;
	?>
	</section>

	<!-- Problem Solution -->
	<section class="problem-solution-container">
	<?php
		$args = array(
		'post_type'       =>    'problem_solution',
		'posts_per_page'  =>    '1',
		);
	
		$my_query = new WP_Query( $args );
	
		if ( $my_query->have_posts() ) :
		while ( $my_query->have_posts() ) :
			$my_query->the_post(); ?>

		<article 
		<?php post_class(); ?> 
		id="<?php the_title_attribute(); ?>"
		>
		<h2><?php the_title(); ?></h2>
		
		<div class="problem-solution-content">
			<?php the_content(); ?><?php the_post_thumbnail(); ?>
		</div>
		</article>
		
		<?php endwhile;
		else :
		get_template_part('template-parts/content-none.php');
		endif;
	?>
	</section>

	<!-- How to use -->
	<section class="how-to-use-container">
	<?php
		$args = array(
		'post_type'       =>    'function_description',
		'posts_per_page'  =>    '3',
		'orderby'         =>    'date',
		'order'  => 'ASC',
		);
	
		$my_query = new WP_Query( $args );
	
		?><h2>How to use</h2><?php 

		if ( $my_query->have_posts() ) :
			$counter = 1; 
		while ( $my_query->have_posts() ) :
			$my_query->the_post(); ?>

		<article 
		<?php post_class(); ?> 
		id="<?php the_title_attribute(); ?>"
		>
				<div><?php echo $counter; ?></div>
		<p><?php the_field('app_function_description'); ?></p>
		<img src="<?php the_field('app_function_image'); ?>" alt="app image">
		</article>
		<?php $counter++ ?>
		
		<?php endwhile;
		else :
		get_template_part('template-parts/content-none.php');
		endif;
	?>
	</section>
	
	<!-- testimonials -->
	<div class="testimonials">
		<h2>Testimonials</h2>
		<?php echo do_shortcode('[slide-anything id="99"]'); ?>
	</div>

</main><!-- #main -->
<?php get_footer(); ?>
