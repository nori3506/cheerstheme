<?php
  /*
  Template Name: Team
  */
?>


<?php get_header(); ?>

	<main id="team" class="team">
    <h2 class="team__title">Our team</h2>
    <div class="team__center-image">
      <?php
        $page_id = 28;
        $post = get_post( $page_id );
        echo apply_filters('the_content', $post->post_content);
      ?>
    </div>
    <?php
      $args = array(
        'post_type'      => 'team_member',
        'posts_per_page' => '5',
        'orderby'        => 'rand'
      );

      $my_query = new WP_Query( $args );
      if( $my_query -> have_posts()):
        while( $my_query -> have_posts()):
          $my_query->the_post();
          get_template_part('template-parts/content-team-member');
        endwhile;
      else:
        get_template_part('template-parts/content-none.php');
      endif;
    ?>
	</main><!-- #main -->

<?php
get_footer();
