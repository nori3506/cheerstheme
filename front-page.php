<?php get_header(); ?>
<main id="primary" class="site-main front-page"> 
	
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
			<div class="about-featured-image">
				<?php the_post_thumbnail(); ?>
			</div>
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
			<h3><?php the_title(); ?></h3>
	
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
	
			?><h3>How to use</h3><?php
	
			if ( $my_query->have_posts() ) :
				$counter = 1;
			while ( $my_query->have_posts() ) :
				$my_query->the_post(); ?>
	
			<article
				<?php post_class(); ?>
				id="<?php the_title_attribute(); ?>"
				>
				<div class="order-number"><?php echo $counter; ?></div>
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

			<h3>Testimonials</h3>
			<?php
			$args = array(
			'post_type'       =>    'slider',
			'posts_per_page'  =>    '1',
			);
	
			$slider_query = new WP_Query( $args );
	
			if ( $slider_query->have_posts() ) :
			while ( $slider_query->have_posts() ) :
				$slider_query->the_post(); ?>
	
			<?php the_content(); ?>
	
			<?php endwhile;
			else :
			get_template_part('template-parts/content-none.php');
			endif;
		?>

		</div>

</main><!-- #main -->
<?php get_footer(); ?>
